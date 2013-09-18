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
	private $download_folder = 'content/';

	public function request_url(&$url)
	{
		if(strpos($url, 'download') !== false) {
			$this->download = true;
			// lets get the system path
			$this->path = dirname(dirname(__DIR__)).'/'.str_replace('download/', $this->download_folder, $url);
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
	}

}

?>