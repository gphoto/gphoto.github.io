<?
	require ("../../include.php");

	printHeader ("Projects :: gPhoto2", "", 1);

	printMenu ("proj");
?>
<h2>gphoto2, a command line interface</h2>
<table cellpadding="3" cellspacing="3" width="100%">
<tr class="text"><td>
<p>gphoto2 is a command line client to for the 
<a href="/proj/libgphoto2/">libgphoto2</a>. It allows to use gPhoto software
from a terminal or from a script shell to perform any camera operation that
can be done. This is the main user interface.
</p>
<p>gphoto2 also provide convenient debugging features for camera driver
developers.</p>
<p>Please read the <a href="/doc/manual/using-gphoto2.html">quick start guide</a> 
and the <a href="/doc/manual/ref-gphoto2-cli.html">reference</a> in the 
<a href="/doc/manual/">gPhoto2 manual</a> to learn about
available command line options. </p>

</td>
</tr>
</table>

<?
	printFooter ();
?>
