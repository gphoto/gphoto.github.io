<?
	require ("../../include.php");

	printHeader ("Projects :: libgphoto2", "", 1);

	printMenu ("proj");
?>

<h2>libgphoto2, the core</h2>
<table cellpadding="3" cellspacing="3" width="100%">
<tr class="text"><td>

<p>libgphoto2 is the core library designed to allow access to digital camera
by external programs. Here is an overview of the global architecture:</p>
<p align="center">
<img src="architecture.png" alt="libgphoto2 architecture" />
</p>
<p>It abstracts communication ports and camera protocol, to allow a complete
modularity. To support a new communication physical layer (like IEEE1394), 
just add a new port to libgphoto2_port. To support a new kind a digital camera,
just provide a new camlib with the required callbacks. All of this will
be transparent to client (programs that call libgphoto2</p>
<p>For a deeper view of the inner working of libgphoto2, please read the 
apropriate 
<a href="/doc/manual/developer-docs.html">chapter</a>
in the <a href="/doc/manual/">gPhoto2 manual</a>
</p>
</td>
</tr>
</table>

<h2>Supported Cameras</h2>
<table cellpadding="3" cellspacing="3" width="100%">
<tr class="text"><td>

<p>Here is a <a href="support.php">list of supported cameras</a> for the latest release.</p>
</td>
</tr>
</table>
<?
	printFooter ();
?>
