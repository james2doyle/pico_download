# pico_download

Force files to download in [PicoCMS](http://pico.dev7studios.com).

### Configuration

The download folder and url can be customized via `config.php`:

```php
$config['download_url'] = 'dl'; // default: download
$config['download_folder'] = 'content/dl/'; // default: content/download/
```

You can access it with `{{ download_url }}`.

### Usage

Place your files in the `content/download/` folder. Then download them using `http://example.com/download/filename`.

### Example

Let's say you want to download `test.txt`. In your template you'd link to it like this:

```
<a href="{{ download_url }}/test.txt">Download test.txt</a>
```

The download URL would than be: `http://example.com/download/test.txt`.

### License

**The MIT License**

Copyright (c) 2013 [James Doyle](http://twitter.com/james2doyle) james2doyle@gmail.com

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
'Software'), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
