<?
	require ("../include.php");

	printHeader ("Projects", "", 1);

	printMenu ("proj");
?>

<h2>libgphoto2</h2>
<p>
libgphoto2 is the core of gphoto2 software. It is a portable library
to gives access to almost <a href="libgphoto2/support.php">300 digital cameras.</a></p>
<p class="more"><a href="libgphoto2/">(more...)</a></p>

<h2>gphoto2</h2>
<p>
gphoto2 is the command line interface to libghoto2. It allows almost 
everything that libgphoto2 can do.</p>
<p class="more"><a href="gphoto2/">(more...)</a></p>
<h2>gtkam</h2>
<p>
gtkam is the GTK2 graphical front-end to libgphoto2.</p>
<p class="more"><a href="gtkam/">(more...)</a></p>

<h2>gphoto 0.4.x</h2>
<p>
gphoto 0.4.x is the old fashionned version of gphoto software. It is
not longer being maintained.</p>
<p class="more"><a href="gphoto/">(more...)</a></p>
<?
	printFooter ();
?>
