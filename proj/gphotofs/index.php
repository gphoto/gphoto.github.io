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

<p>gphotofs was written by Philip Langdale. See the <a
href="http://intr.overt.org/blog/?p=25">original announcement</a>.</p>
<p>New versions are available on <a href="http://sf.net/projects/gphoto/">the gphoto2 sourceforge page</a>
and support read, write, directory operations.</p>

<?
	printFooter ();
?>
