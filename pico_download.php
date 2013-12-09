<?php

/**
 * Force files to download
 *
 * @author James Doyle
 * @link http://github.com/james2doyle/pico_download
 * @license http://opensource.org/licenses/MIT
 */
class Pico_Download {

    private $download;
    private $path;
    // you can change this if you want to use a different folder
    private $download_url = 'download';
    private $download_folder = 'content/download/';

    public function config_loaded(&$settings) {
        $lastchar = '';
        if (isset($settings['download_url'])) {
            $lastchar = substr($settings['download_url'], -1);
            if ($lastchar === '/') {
                $settings['download_url'] = substr($settings['download_url'], 0, -1);
            }
            $this->download_url = $settings['download_url'];
        }
        if (isset($settings['download_folder'])) {
            $lastchar = substr($settings['download_folder'], -1);
            if ($lastchar !== '/') {
                $settings['download_folder'] = $settings['download_folder'].'/';
            }
            $this->download_folder = $settings['download_folder'];
        }
    }

    public function request_url(&$url)
    {
        if(strpos($url, $this->download_url) !== false) {
            $this->download = true;
            // lets get the system path
            $this->path = dirname(dirname(__DIR__)).'/'.str_replace($this->download_url.'/', $this->download_folder, $url);
        } else {
            $this->download = false;
        }
    }

    public function before_render(&$twig_vars, &$twig) {
        // are we on download? is there even a file there?
        // if there is no file it will throw a 404
        if ($this->download && file_exists($this->path)) {
            $pathinfo = pathinfo($this->path);
            // Override 404 header
            header($_SERVER['SERVER_PROTOCOL'].' 200 OK');
            // forget the custom mimetype, lets just download
            header('Content-Type: application/x-download');
            header('Content-Transfer-Encoding: Binary');
            // we can use the pathinfo array to find the filename
            header("Content-disposition: attachment; filename=\"$pathinfo[basename]\"");
            ob_clean(); // clean the output buffer
            flush();
            echo readfile($this->path);
            // Don't continue to render template
            exit;
        }
        $twig_vars['download_url'] = $this->download_url; // {{ download_url }}
    }

}

?>
