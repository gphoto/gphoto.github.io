<?
	require ("../../include.php");

	printHeader ("Projects :: gPhoto 0.4.x", "", 1);

	printMenu ("proj");
?>
<h2>gPhoto 0.4.x</h2>
<table>
<tr>
<td class="text">
<p>
<a href="screen1.png"><img src="screen1_s.png" alt="gphoto 0.4.x screenshot" align=right /></a>
</p>
<p>gPhoto 0.4.x is the first generation of the gPhoto software. It features 
an integrated GUI written in <a href="http://www.gtk.org/">GTK+ 1.2</a> and
a monolithic program. It also requires some kernel support for several USB 
device.
</p>
<p>This version is now completely obsolete and is superceded by 
<a href="/proj/libgphoto2/">gPhoto2</a> and <a href="/proj/gtkam/">gtkam</a>
for the GTK+ frontend. It will be removed from major distributions if it
is not already.</p>
<p>Some drivers still haven't been ported to <a href="/proj/libgphoto2/">libgphoto2</a>. 
So if you have some programming skills and the camera, it is a good idea 
to help porting them.</p>
</td>
</tr>
</table>
<?
	printFooter ();
?>
