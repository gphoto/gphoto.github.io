<?
	require ("../include.php");

	printHeader ("News", "", 1);

	printMenu ("news");
?>
<table cellpadding="3" cellspacing="3">
<tr>
	<td class="text">
<!-- news headlines -->
<h2>2.1.3 released (Oct 19th, 2003)</h2>

<p>Most important changes are</p>

<ul>
<li>support for lots of new cameras (more than 400 listed now)</li>
<li>fixed a few nasty bugs</li>
<li>general improvements</li>
</ul>

<pre>
----------------------------------------------------------------------------
libgphoto2 2.1.3

   * builtin cache:
     - use all available RAM on systems without memory size detection

drivers (camlibs):

   * Canon driver:
     - added support for EOS 300D
     - fixed ProductID for PowerShot S45
     - fixed support for serial cameras
     - fixed thumbnail stuff

   * New driver for Ricoh Caplio G3.

   * Smal driver:
     - misc improvements

   * PTP2 driver:
     - added misc cameras
     - thumbnail hacks (?)

----------------------------------------------------------------------------
libgphoto2 2.1.2

   * fixed nasty stack overflow/segfault bug
   * improved/fixed support for Sun

drivers (camlibs):

   * All drivers:
     - report vendor/model in a new (formatted) fashion

   * Canon driver: 
     - added support for capturing on consumer class cameras, tested on
       Canon PowerShot S45, Canon PowerShot G2
     - G2 works again running from AC adapter
     - multiple new models added (A60, A70, ...)

   * PTP2 driver:
     - Next generation PTP driver added, using this as default now.

   * New Agfa CL20 driver from <a href="http://cl20.poeml.de/">http://cl20.poeml.de/</a>.

   * New camera library spca50x for all chips supporting the spca50x bridges
     (merging the gsmart, benq and spca504_flash driver into one).
</pre>

<hr />

<h2>2.1.1 release (December 1st, 2002)</h2>
<p>libgphoto2 2.1.1, gphoto2 2.1.1 and gtkam 0.1.10 finally are released.</p>

<p>libgphoto2 is a user space library providing camera independent access
to almost 300 digital cameras.</p>

<p>gphoto2 is a command line frontend for libgphoto2.</p>

<p>gtkam is a GTK+ 2.0 based frontend for libgphoto2.</p>

<p>This is the first release in which we split the command line frontend
gphoto2 from the library libgphoto2.</p>

<p>Since the gphoto2 2.1.0 release, we have added support for a lot of
cameras:</p>

<ul>
   <li>Ricoh RDC-1, -2, -2E, -100G, -300, -300Z, -4200, -4300, -5000
     Philips ESP2, ESP50, ESP60, ESP70, ESP80, ESP80SXG</li>
   <li>Canon PowerShot G3, S230, S45, A100, A200</li>
   <li>Nikon D100</li>
   <li>Mustek gSmart mini, mini2, mini3 and So. Show 301</li>
   <li>USB Jenoptik JD350v</li>
   <li>RCA CDS1005, FujiFilm @xia ix-100, Oregon Scientific DShot II, 
     Media-Tech mt-406, and Scott APX 30</li>
   <li>Aiptek Pencam and Medion MD 5319</li>
   <li>and probably some more</li>
</ul>

<p>For a more detailed list of changes, see the CHANGES file.</p>

<p>Have fun using your camera!</p>

<p>
For the gphoto2 team<br />
Hans Ulrich Niedermann<br />
Release Manager for 2.1.1<br />
</p>

<hr />

<h2>New website (September 2nd, 2002)</h2>
	<p>Features a new look.
	</p>
<hr />
<h2>gPhoto 2.1 released (June 23rd, 2002)</h2>
	<p>
	This is the first maintenance release of gphoto2 package.
	</p>
	<ul>
	<li>repaired "make rpm" target</li>
   	<li>started "real" gphoto2 manual</li>
	</ul>
	<p>gphoto2 command-line interface:</p>
	<ul>
	<li>optional readline support</li>
	</ul>
	<p>libgphoto2:</p>
	<ul>
	<li>support for periodic keep-alive-messages</li>
	</ul>
	<p>drivers (camlibs):</p>
	<ul>
	<li>improved support for PTP cameras:
		<ul>
     		<li>multiple storage media</li>
		<li>image capturing</li>
		<li>driver stability and robustness improved 
		(less problems with different cameras)</li>
       		</ul>
	</li>
	<li>added support for Kodak DX-4900, Sony DSC-P5, Sony DSC-F707V,
        Sony DSC-P30, Sony DSC-P50, Sony DSC-S75, Sony DSC-S85,
        Sony MVC-CD300
	</li>
	<li>added support for Canon EOS D60, Canon PowerShot A40, 
        Canon PowerShot A30, Canon PowerShot S200, 
        Canon Digital IXUS 330
	</li>
	<li>fixed support for Canon PowerShot S10</li>
	<li>Added SiPix Web2 support.</li>
	</ul>

	<p>Get it from the <a href="/download/?version=2.1.0">download area</a>
	and try it out!</p>
<hr />
<h2>gPhoto 2.0 released (February 24th, 2002)</h2>
	<p>The gphoto2 team is proud to introduce its first stable 
	release.</p>
	<p>gPhoto2 is a complete rewrite of the award winning gphoto. 
	gPhoto2 is now a library to access digital cameras. This
	library comes with a command-line frontend and others
	frontends are available separately (<a href="/proj/gtkam/">gtkam</a>,
	GnoCam, kamera).</p>
	<p>To support USB cameras, this release requires libusb (0.1.5
	or above). Moreover gphoto2 will optionally take advantage
	of the following libraries: libexif, aalib, libjpeg and
	libcdk.</p>
	<p>Get it from the <a href="/download/?version=2.0">download area</a> 
	and try it out!</p>
	<p>Happy downloading!</p>
	<p>Your gphoto2 team.
	<a href="/">http://www.gphoto.net</a></p>
</td>
</tr>
</table>

<?
	printFooter ();
?>
