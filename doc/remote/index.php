<?
	require ("../../include.php");

	printHeader ("Doc :: Remote controlling cameras", "", 1);

	printMenu ("doc");
?>

<h1>Remote controlling cameras</h1>
<hr />
<p>
This page lists cameras remotely controllable for capture.<br/>
It is meant to be wiki-like, so if
you have any additions, please mail them to <a
href="mailto:gphoto-devel@lists.sourceforge.net">gphoto-devel@lists.sourceforge.net</a>
mailinglist or to <a href="mailto:marcus@jet.franken.de">marcus@jet.franken.de</a>.
<br/>
The list is incomplete and might be incorrect.
</p>
<hr />
<h2>Configuring for capture</h2>
<p>
When doing remote capture you likely want to modify several on camera parameters.
</p>
<p>
The gphoto2 commandline frontend offers both a ncurses GUI mode (using <code>--config</code>)
or scriptable commandline options to do configuration:
</p>
<ul>
<li><code>--list-config</code> - This will list all possible configuration options.<br>Please note that for some Canon cameras
the complete list will only show after <code>gphoto2 --set-config capture=on</code> is run.</li>
<li><code>--get-config <b>name</b></code> - This will get the current configuration of <b>name</b> and its possible values.</li>
<li><code>--set-config <b>name</b>=<b>value</b></code> - This will set the configuration of <b>name</b> to <b>value</b>.</li>
</ul>
<p>
Most of them are self explaining, but some interesting ones:
</p>
<ul>
<li>	Canon cameras only: <b>capture</b> - setting this to <b>on</b> will extract the lens and make it read for SDRAM based capture.
	Setting it <b>off</b> will retract the lens again.
</li>
<li>Canon and some Nikon cameras only: <b>capturetarget</b> - setting this to <b>sdram</b> will make the camera capture directly into
the camera RAM and not on the memory card. You need to download the image in the same gphoto2 call, otherwise it will gone
when the connection is closed. Use continous capture mode to get the images in this case.<br/>
Set it to <b>card</b> to capture to the memory card.
</li>
</ul>


<h2>Continuous / Interval capture</h2>
<p>
The options <code>-F <i>frames</i></code> and <code>-I <i>seconds</i></code> can be used to support continuous
capture. <code>-F 0</code> will capture images ad-infinitum.
</p><p>
When used, this option will always download the last captured image and then delete it from the camera.
</p>
<h2>List of cameras</h2>
<hr />
<table border="1">
<tr>
	<th>Camera Name</th>
	<th>Libgphoto2 capture support</th>
	<th>Controllable aspects</th>
	<th>Megapixel</th>
	<th>Notes</th>
</tr>

<tr>
	<td>Canon Digital IXUS II/PowerShot SD100</td>
	<td>Yes</td>
	<td>All</td>
	<td>3</td>
	<td>&nbsp;</td>
</tr>

<tr>
	<td>Canon Digital IXUS 40</td>
	<td>Yes</td>
	<td>All</td>
	<td>?</td>
	<td>&nbsp;</td>
</tr>

<tr>
	<td>Canon Digital IXUS 400</td>
	<td>Yes</td>
	<td>All</td>
	<td>?</td>
	<td>&nbsp;</td>
</tr>

<tr>
	<td>Canon IXY Digital 300</td>
	<td>Yes</td>
	<td>All</td>
	<td>2</td>
	<td>&nbsp;</td>
</tr>

<tr>
	<td>Canon EOS 300D/Digital Rebel</td>
	<td>Yes</td>
	<td>Unknown</td>
	<td>?</td>
	<td>&nbsp;</td>
</tr>

<tr>
	<td>Canon PowerShot A40</td>
	<td>Yes</td>
	<td>All</td>
	<td>?</td>
	<td>&nbsp;</td>
</tr>

<tr>
	<td>Canon PowerShot A400</td>
	<td>Yes</td>
	<td>?</td>
	<td>?</td>
	<td>from reporter. Only captures with PTP driver.</td>
</tr>

<tr>
	<td>Canon PowerShot A60</td>
	<td>Yes</td>
	<td>Unknown</td>
	<td>?</td>
	<td>(from ptpcanon list)</td>
</tr>

<tr>
	<td>Canon PowerShot A640</td>
	<td>Yes</td>
	<td>All</td>
	<td>10td>
	<td>confirmed by Canon</td>
</tr>

<tr>
	<td>Canon PowerShot A70</td>
	<td>Yes</td>
	<td>Unknown</td>
	<td>3</td>
	<td>(from ptpcanon list)</td>
</tr>

<tr>
	<td>Canon PowerShot A75</td>
	<td>Yes</td>
	<td>Unknown</td>
	<td>3</td>
	<td>from capture.sf.net notes</td>
</tr>

<tr>
	<td>Canon PowerShot A80</td>
	<td>Yes</td>
	<td>Unknown</td>
	<td>4</td>
	<td>from capture.sf.net notes</td>
</tr>

<tr>
	<td>Canon PowerShot A85</td>
	<td>Yes</td>
	<td>Unknown</td>
	<td>4</td>
	<td>from capture.sf.net notes</td>
</tr>

<tr>
	<td>Canon PowerShot A95</td>
	<td>Yes</td>
	<td>Unknown</td>
	<td>5</td>
	<td>from capture.sf.net notes</td>
</tr>

<tr>
	<td>Canon PowerShot A520</td>
	<td>Yes</td>
	<td>All</td>
	<td>4</td>
	<td>from capture.sf.net notes</td>
</tr>

<tr>
	<td>Canon PowerShot A620</td>
	<td>Yes</td>
	<td>All</td>
	<td>7</td>
	<td>&nbsp;</td>
</tr>

<tr>
	<td>Canon PowerShot G6</td>
	<td>Yes</td>
	<td>All</td>
	<td>?</td>
	<td>from capture.sf.net notes</td>
</tr>

<tr>
	<td>Canon PowerShot S1 IS</td>
	<td>Yes</td>
	<td>All</td>
	<td>3</td>
	<td>&nbsp;</td>
</tr>

<tr>
	<td>Canon PowerShot S2 IS</td>
	<td>Yes</td>
	<td>All</td>
	<td>5</td>
	<td>&nbsp;</td>
</tr>

<tr>
	<td>Canon PowerShot S3 IS</td>
	<td>Yes</td>
	<td>All</td>
	<td>6</td>
	<td>confirmed by Canon</td>
</tr>

<tr>
	<td>Canon PowerShot S40</td>
	<td>Yes</td>
	<td>All</td>
	<td>4</td>
	<td>&nbsp;</td>
</tr>

<tr>
	<td>Canon PowerShot S70</td>
	<td>Yes</td>
	<td>All</td>
	<td>7</td>
	<td>&nbsp;</td>
</tr>

<tr>
	<td>Canon PowerShot S80</td>
	<td>Yes</td>
	<td>All</td>
	<td>8</td>
	<td>&nbsp;</td>
</tr>

<tr>
	<td>Canon PowerShot S400</td>
	<td>Yes</td>
	<td>All</td>
	<td>?</td>
	<td>from capture.sf.net notes</td>
</tr>

<tr>
	<td>Canon PowerShot S410</td>
	<td>Yes</td>
	<td>All</td>
	<td>?</td>
	<td>from capture.sf.net notes</td>
</tr>

<tr>
	<td>Canon PowerShot S500</td>
	<td>Yes</td>
	<td>All</td>
	<td>?</td>
	<td>from capture.sf.net notes</td>
</tr>

<tr>
	<td>Canon PowerShot SD110</td>
	<td>Yes</td>
	<td>All</td>
	<td>3</td>
	<td>&nbsp;</td>
</tr>

<tr>
	<td>Canon PowerShot SD430</td>
	<td>Yes, but only over WLAN</td>
	<td>All</td>
	<td>5</td>
	<td>Unfortunately the WLAN (PTP/IP) mode to connect to this camera is not working yet.</td>
</tr>


<tr>
	<td>Canon 20D, 350D/Digital Rebel XT</td>
	<td>Yes</td>
	<td>All</td>
	<td>8.2</td>
	<td>Needs to build TRUNK with experimental features on</td>
</tr>

<tr>
	<td>Canon 5D</td>
	<td>Yes</td>
	<td>All</td>
	<td>12</td>
	<td>Needs to build TRUNK with experimental features on</td>
</tr>

<tr>
	<td>Nikon CoolPix 880</td>
	<td>Yes</td>
	<td>All</td>
	<td>?</td>
	<td>&nbsp;</td>
</tr>

<tr>
	<td>Nikon CoolPix 2500</td>
	<td>Yes</td>
	<td>All</td>
	<td>2</td>
	<td>In Sierra mode (USB Mass storage pass through)</td>
</tr>

<tr>
	<td>Nikon CoolPix 4300</td>
	<td>Yes</td>
	<td>All</td>
	<td>4</td>
	<td>In Sierra mode (USB Mass storage pass through)</td>
</tr>

<tr>
	<td>Nikon CoolPix 4500</td>
	<td>Yes</td>
	<td>All(?)</td>
	<td>4</td>
	<td>Only with updated firmware, see <a href="http://support.nikontech.com/cgi-bin/nikonusa.cfg/php/enduser/std_alp.php?p_prods=1%2C3&amp;p_pv=2.3&amp;p_cats=186&amp;p_cv=1.186">
here</a></td>
</tr>

<tr>
	<td>Nikon CoolPix 5000</td>
	<td>Yes</td>
	<td>All</td>
	<td>5</td>
	<td>&nbsp;</td>
</tr>

<tr>
	<td>Nikon CoolPix 5400</td>
	<td>Yes</td>
	<td>Unknown</td>
	<td>5</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td>Nikon CoolPix 5600</td>
	<td>Yes</td>
	<td>All,no focus, no aperture</td>
	<td>5</td>
	<td>&nbsp;</td>
</tr>

<tr>
	<td>Nikon CoolPix 5700</td>
	<td>Yes</td>
	<td>All</td>
	<td>5</td>
	<td>&nbsp;</td>
</tr>

<tr>
	<td>Nikon CoolPix 5900</td>
	<td>Yes</td>
	<td>All</td>
	<td>5</td>
	<td>&nbsp;</td>
</tr>

<tr>
	<td>Nikon CoolPix P1</td>
	<td>Yes</td>
	<td>Some</td>
	<td>8</td>
	<td>Only over USB, not over PTP/IP.</td>
</tr>

<tr>
	<td>Nikon CoolPix P2</td>
	<td>Yes</td>
	<td>Some</td>
	<td>5</td>
	<td>Only over USB, not over PTP/IP.</td>
</tr>

<tr>
	<td>Nikon CoolPix P3</td>
	<td>Yes</td>
	<td>Some</td>
	<td>8</td>
	<td>Only over USB, not over PTP/IP.</td>
</tr>

<tr>
	<td>Nikon D50</td>
	<td>Yes</td>
	<td>All</td>
	<td>6</td>
	<td>&nbsp;</td>
</tr>

<tr>
	<td>Nikon D70</td>
	<td>Yes</td>
	<td>All</td>
	<td>6</td>
	<td>&nbsp;</td>
</tr>

<tr>
	<td>Nikon D70s</td>
	<td>Yes</td>
	<td>All</td>
	<td>6</td>
	<td>&nbsp;</td>
</tr>

<tr>
	<td>Nikon D200</td>
	<td>Yes</td>
	<td>All.</td>
	<td>10</td>
	<td>&nbsp;</td>
</tr>

<tr>
	<td>Olympus C750UZ</td>
	<td>Yes</td>
	<td>All</td>
	<td>?</td>
	<td>&nbsp;</td>
</tr>

<tr>
	<td>Olympus C-2040Z</td>
	<td>Yes</td>
	<td>All</td>
	<td>2</td>
	<td>&nbsp;</td>
</tr>

<tr>
	<td>Olympus C-2100Z</td>
	<td>Yes</td>
	<td>All</td>
	<td>2</td>
	<td>&nbsp;</td>
</tr>

<tr>
	<td>Olympus C-3040Z</td>
	<td>Yes</td>
	<td>All</td>
	<td>3</td>
	<td>&nbsp;</td>
</tr>

<tr>
	<td>Olympus C-4040Z</td>
	<td>Yes</td>
	<td>All</td>
	<td>4</td>
	<td>&nbsp;</td>
</tr>

<tr>
	<td>
	SQ905 chipset cameras (check <a href="http://gphoto.svn.sourceforge.net/viewcvs.cgi/gphoto/trunk/libgphoto2/camlibs/sq905/library.c?view=markup">list in C file here</a>)
	</td>
	<td>Yes</td>
	<td>?</td>
	<td>320x240 px, 160x120 px, some also 640x480 px</td>
	<td>&nbsp;</td>
</tr>

<tr>
	<td>
	STV680 chipset cameras (check <a href="http://gphoto.svn.sourceforge.net/viewcvs.cgi/gphoto/trunk/libgphoto2/camlibs/stv0680/stv0680.c?view=markup">list in C file here</a>)
	</td>
	<td>Yes</td>
	<td>None</td>
	<td>320x240, 160x120, sometimes also 640x480</td>
	<td>&nbsp;</td>
</tr>
</table>
<p>
If a camera is not listed, it might still be the case that is able to support capture.
</p>
<p>
For instance, it is a very good sign if the vendor supplies software that supports remote
capture for this camera. Those are likely able to be supported by libgphoto2 if not already.
</p>
<hr/>
<h2>Cameras not able to do capture</h2>
<table border="1">
<tr><th>Name</th><th>Comment</th></tr>
<tr>
	<td>Kodak EasyShare Any</td>
	<td>None of those supports remote capture.</td>
</tr>
<tr>
	<td>Sony PowerShot DSC (PTP)</td>
	<td>None of those supports remote capture.</td>
</tr>
<tr><td>Various Canon cameras:</td>
<td>
 Statement from Canon SDK: <i>As a reminder, PowerShots A410, A420, A430, A530, A540, A610, A630,
 A700, A710 IS, S10, S20, SD10, SD20, SD30, SD40, SD200, SD300, SD400,
 SD450, SD500, SD550, SD600, SD630, SD700 IS, SD800 IS, and SD900 do
 not support remote control or video out operation via the SDK.</i><br/>
 The same applies for libgphoto2 capture support.
</td>
</tr>
<tr>
	<td>Minolta Dimage Z2</td>
	<td>Do not support remote control. See <a href="http://ca.konicaminolta.com/support/americas/digital_cameras/dimage-z/dimage-z2/faq/071.html">Konica-Minolta FAQ</a></td>
</tr>
</table>

<?
	printFooter ();
?>
