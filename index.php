<?
	require ("include.php");

	printHeader ("gPhoto Home", "", 0);

	printMenu ("home");
?>
<table cellpadding="3" cellspacing="3">
<tr><td>
<h2>Freedom from film</h2>
</td></tr>
<tr>
	<td class="text">
	<!-- title image -->
	<p><img src="img/logo.png" width="321" height="395" alt="gPhoto2 Logo" 
		align="left" /></p>

    <p style="color:red; font-weight: bold;">
	 We have moved our mailing-lists to sourceforge (at least temporarily).
	 You can subscribe to the gphoto-user mailing-list and/or the gphoto-devel
	 mailing-list by using the sourceforge interface available 
	 <a href="http://sourceforge.net/mail/?group_id=8874">here</a>.</p>
	 <div style="text-align: right;"><b>May 3rd, 2003</b></div>
	 
	 <p>Digital cameras have the balance of quality, features, and 
    price that appeals to users looking for a fast and convenient
    way to get images into their PC. You can spend a lot more -- or
    a lot less -- for one than the $100 to $3000 (or even more) these cost, 
    but you 
    won't like the quality at the low end or the prices at the high end. 
    With digital cameras, the best place to be is in the middle.</p>

    <p>No other image-capture option for your computer matches the fun, 
    immediacy, and convenience of a digital camera. Unlike with a 
    scanner, you don't need an preexisting image: A digital 
    camera lets you capture what you see. And unlike film-to-disk 
    services, development is instantaneous: You don't have to wait 
    hours or days before you can use an image on your computer.</p>
  
    <p>Operating a digital camera is also inexpensive, because the only 
    recurring cost is batteries. The camera's storage is reusable once you
    download a batch of images. And since you don't have to pay for film 
    processing, you can go wild.</p>

    <p>Unfortunately, many digital camera manufacturers refuse to share
    their camera communication specifications with their customers and
    millions of users who run free operating systems.</p>

    <p>This is a big obstacle to development of free photo applications,
    and it blocks free software developers from writing free programs, 
    that support the same features as the proprietary digital camera
    programs for Microsoft Windows and MacOS that usually are shipped with 
    the camera.   It renders the camera quite useless if you don't run 
    one of those proprietary operating systems.
    </p>
    </td></tr> 
    <tr><td>
    <h2>Introducing gPhoto2</h2>
    </td></tr>
    <tr><td class="text">
    <p><a href="/proj/"><b>gPhoto2</b></a> is a free, redistributable, ready to use set of
    digital camera software
    applications for Unix-like systems, written by a whole team of dedicated
    volunteers around the world. It supports over 
    <a href="/proj/libgphoto2/support.php">300 cameras</a></p>
    <p>gPhoto2 runs on a large range of UNIX-like operating system, including
    Linux, FreeBSD, NetBSD, etc. gPhoto is provided by major Linux distribution
    like Debian GNU/Linux, RedHat Linux, SuSE Linux, etc.</p>
    <p>gPhoto2 is freely available and distributed
    under the terms of the 
    <a href="http://www.gnu.org/copyleft/gpl.html">GNU GPL.</a></p>

	</td>
</tr>
</table>
<?
	printFooter ();
?>
