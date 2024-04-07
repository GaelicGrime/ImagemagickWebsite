<div class="row">
<p class="lead">ImageMagick is a collection of command-line tools that can be used to modify and manipulate images. While many people are used to using graphical user interfaces (GUIs) like Gimp or Photoshop to edit images individually, these tools may not always be practical. For instance, if you need to process an image dynamically from a web script or apply the same operations to multiple images, or if you need to repeat a specific operation on the same or different images at different times, using a command-line utility like ImageMagick may be more efficient.</p>

<p>The ImageMagick <a href="/script/command-line-processing.php">command-line</a> tools exit with a status of 0 if the command line arguments have a proper syntax and no problems are encountered.  Expect a descriptive message and an exit status of 1 if any exception occurs such as improper syntax, a problem reading or writing an image, or any other problem that prevents the command from completing successfully.</p>

<p>Here is a short description for each command-line tool. Click on the program name to get details about the program usage and a list of command-line options that alters how the program behaves.  If you are just getting acquainted with ImageMagick, start with the <a href="#magick">magick</a> program.  Be sure to peruse Anthony Thyssen's tutorial on how to use ImageMagick utilities to <a href="https://imagemagick.org/Usage/">create, edit, compose, or convert</a> images from the command-line.</p>

<dl class="row">
  <dt class="col-md-4"><a class="anchor" id="magick"></a><a href="/script/magick.php">magick</a></dt><dd class="col-md-8">convert between image formats as well as resize an image, blur, crop, despeckle, dither, draw on, flip, join, re-sample, and much more.</dd>
  <dt class="col-md-4"><a class="anchor" id="magick-script"></a><a href="/script/magick-script.php">magick-script</a></dt><dd class="col-md-8">use this scripting language interpreter to convert between image formats as well as resize an image, blur, crop, despeckle, dither, draw on, flip, join, re-sample, and much more.</dd>
</dl>
<p>We also support sub-commands for compatibility with ImageMagick <a href="http://legacy.imagemagick.org">version 6</a>:</p>
<dl class="row">
  <dt class="col-md-4"><a href="/script/animate.php">magick animate</a></dt><dd class="col-md-8">animate an image sequence on any X server.</dd>
  <dt class="col-md-4"><a class="anchor" id="compare"></a><a href="/script/compare.php">magick compare</a></dt><dd class="col-md-8">mathematically and visually annotate the difference between an image and its reconstruction.</dd>
  <dt class="col-md-4"><a class="anchor" id="composite"></a><a href="/script/composite.php">magick composite</a></dt><dd class="col-md-8">overlap one image over another.</dd>
  <dt class="col-md-4"><a class="anchor" id="conjure"></a><a href="/script/conjure.php">magick conjure</a></dt><dd class="col-md-8">interpret and execute scripts written in the Magick Scripting Language (MSL).</dd>
  <dt class="col-md-4"><a class="anchor" id="convert"></a><a href="/script/convert.php">magick convert</a></dt><dd class="col-md-8">convert between image formats as well as resize an image, blur, crop, despeckle, dither, draw on, flip, join, re-sample, and much more.</dd>
  <dt class="col-md-4"><a class="anchor" id="display"></a><a href="/script/display.php">magick display</a></dt><dd class="col-md-8">display an image or image sequence on any X server.</dd>
  <dt class="col-md-4"><a class="anchor" id="identify"></a><a href="/script/identify.php">magick identify</a></dt><dd class="col-md-8">describe the format and characteristics of one or more image files.</dd>
  <dt class="col-md-4"><a class="anchor" id="import"></a><a href="/script/import.php">magick import</a></dt><dd class="col-md-8">save any visible window on an X server and outputs it as an image file. You can capture a single window, the entire screen, or any rectangular portion of the screen.</dd>
  <dt class="col-md-4"><a class="anchor" id="mogrify"></a><a href="/script/mogrify.php">magick mogrify</a></dt><dd class="col-md-8">resize an image, blur, crop, despeckle, dither, draw on, flip, join, re-sample, and much more.  Mogrify overwrites the original image file, whereas, <a href="/script/magick.php">magick</a> writes to a different image file.</dd>
  <dt class="col-md-4"><a class="anchor" id="montage"></a><a href="/script/montage.php">magick montage</a></dt><dd class="col-md-8">create a composite image by combining several separate images.  The images are tiled on the composite image optionally adorned with a border, frame, image name, and more.</dd>
  <dt class="col-md-4"><a class="anchor" id="stream"></a><a href="/script/stream.php">magick stream</a></dt><dd class="col-md-8">a lightweight tool to stream one or more pixel components of the image or portion of the image to your choice of storage formats.  It writes the pixel components as they are read from the input image a row at a time making <samp>stream</samp> desirable when working with large images or when you require raw pixel components.</dd>
</dl>
<p>Your installation may have direct ImageMagick version 6 compatibility links.  If so, you can access the tools directly by referring to them by name.  For example,
<pre class="p-3 mb-2 bg-light text-dark cli"><samp>magick identify -verbose myImage.png</samp></pre>

</div>
