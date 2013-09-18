pico_download
=============

Force files to download in [PicoCMS](http://pico.dev7studios.com).

### Usage

Place your files in the content folder. Then replace the word `content/` in the url with the word `download/`.

*The download folder can be controlled in the plugin file. Default for downloading is `content/`.*

### Example

If you wanted to render the file in the browser:

    http://localhost:8888/Pico/content/sub/page.md

Now with this plugin installed, you can force a download:

    http://localhost:8888/Pico/download/sub/page.md

### More info

I have added quite a few comments in the plugin so just take a look. It's nothing new, just bringing different snippets together.

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