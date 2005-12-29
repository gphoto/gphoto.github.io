<?
	require ("../../include.php");

	printHeader ("Projects :: gphotofs", "", 1);

	printMenu ("proj");
?>
<h2>gphotofs</h2>

<p> gphotofs is a <a href="http://fuse.sourceforge.net/">FUSE</a>
filesystem module to mount your camera as a filesystem on Linux. This
allow using your camera with any tool able to read from a mounted
filesystem.</p>

<?
	printFooter ();
?>
