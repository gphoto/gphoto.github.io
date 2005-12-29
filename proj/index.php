<?
	require ("../include.php");

	printHeader ("Projects", "", 1);

	printMenu ("proj");
?>

<h2>libgphoto2</h2>
<p class="text">
libgphoto2 is the core of gphoto2 software. It is a portable library
which gives access to literally
<a href="libgphoto2/support.php">hundreds of digital cameras</a>.</p>
<p class="more"><a href="libgphoto2/" title="more about libgphoto2">(more...)</a></p>

<h2>gphoto2</h2>
<p class="text">
gphoto2 is the command line interface to libgphoto2. It allows almost 
everything that libgphoto2 can do.</p>
<p class="more"><a href="gphoto2/" title="more about gphoto2">(more...)</a></p>

<h2>gtkam</h2>
<p class="text">
gtkam is the GTK2 graphical front-end to libgphoto2.</p>
<p class="more"><a href="gtkam/" title="more about gtkam">(more...)</a></p>

<h2>gphotofs</h2>
<p class="text">
gphotofs allow you no mount your camera on Linux using FUSE.</p>
<p class="more"><a href="gphotofs/" title="more about gphotofs">(more...)</a></p>

<h2>gphoto 0.4.x</h2>
<p class="text">
gphoto 0.4.x is the old fashionned version of gphoto software. It is
not longer being maintained.</p>
<p class="more"><a href="gphoto/" title="more about gphoto">(more...)</a></p>
<?
	printFooter ();
?>
