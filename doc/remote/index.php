<?
	require ("../../include.php");

	printHeader ("Doc :: Remote controllable cameras", "", 1);

	printMenu ("doc");
?>

<table cellpadding="3" cellspacing="3" witdh="100%">
<tr class="text"><td>
<h1>Remote controllable cameras</h1>
<hr>
This page lists remote controllable cameras.<br>
It is meant to be wiki-like, so if
you have any additions, please mail them to <a
href="mailto:gphoto-devel@lists.sourceforge.net">gphoto-devel@lists.sourceforge.net</a>
mailinglist or to <a href="mailto:marcus@jet.franken.de">marcus@jet.franken.de</a>.
<p>
<table border=1>
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
	<td>Canon EOS 350D/Digital Rebel XT</td>
	<td>No</td>
	<td>None</td>
	<td>&nbsp;</td>
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
	<td>Canon PowerShot A70</td>
	<td>Yes</td>
	<td>Unknown</td>
	<td>?</td>
	<td>(from ptpcanon list)</td>
</tr>

<tr>
	<td>Canon PowerShot A75</td>
	<td>Yes</td>
	<td>Unknown</td>
	<td>?</td>
	<td>from capture.sf.net notes</td>
</tr>

<tr>
	<td>Canon PowerShot A80</td>
	<td>Yes</td>
	<td>Unknown</td>
	<td>?</td>
	<td>from capture.sf.net notes</td>
</tr>

<tr>
	<td>Canon PowerShot A85</td>
	<td>Yes</td>
	<td>Unknown</td>
	<td>?</td>
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
	<td>Only with updated firmware, see <a href="http://support.nikontech.com/cgi-bin/nikonusa.cfg/php/enduser/std_alp.php?p_prods=1%2C3&p_pv=2.3&p_cats=186&p_cv=1.186
">here</a></td>
</tr>

<tr>
	<td>Nikon CoolPix 5000</td>
	<td>Yes</td>
	<td>All</td>
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
	<td>Unclear, but I guess all.</td>
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
	SQ905 chipset cameras (check <a href="http://svn.sourceforge.net/viewcvs.cgi/gphoto/trunk/libgphoto2/camlibs/sq905/library.c?view=markup">list in C file here</a>)
	</td>
	<td>Yes</td>
	<td>?</td>
	<td>320x240 px, 160x120 px, some also 640x480 px</td>
	<td>&nbsp;</td>
</tr>

<tr>
	<td>
	STV680 chipset cameras (check <a href="http://svn.sourceforge.net/viewcvs.cgi/gphoto/trunk/libgphoto2/camlibs/stv0680/stv0680.c?view=markup">list in C file here</a>)
	</td>
	<td>Yes</td>
	<td>None</td>
	<td>320x240, 160x120, sometimes also 640x480</td>
	<td>&nbsp;</td>
</tr>
</table>

If a camera is not listed, it might still be the case that is able to support capture.<p>

For instance, it is a very good sign if the vendor supplies software that supports remote
capture for this camera. Those are likely able to be supported by libgphoto2 if not already.

Camera classes known not able to do capture:

<table border=1>
<tr><th>Name</th><th>Comment</th></tr>
<tr>
	<td>Kodak EasyShare Any</td>
	<td>None of those supports remote capture.</td>
</tr>
<tr>
	<td>Sony PowerShot DSC (PTP)</td>
	<td>None of those supports remote capture.</td>
</tr>
</td></tr>
</table>
<?
	printFooter ();
?>
