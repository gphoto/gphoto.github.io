<?
	require ("../include.php");

	printHeader ("News", "", 1);

	printMenu ("news");
?>
<table cellpadding="3" cellspacing="3">
<tr>
	<td class="text">
<!-- news headlines -->
<hr />

<h2>2.1.5 release (January 18th, 2004)</h2>

<pre>
New features:

- Detach USB kernel drivers
- Multiple USB Devices at once support
- New camlibs
        - iclick
        - kodak/ez200
        - mars
        - enigma13
        - aox
- sonydscf55:
        - added support for downloading MPEG files
- canon
        - Added PowerShot SD20.
        - Added EOS 20D
        - Added PowerShot A95
        - Added PowerShot A85
        - Added PowerShot A75
        - Added Powershot S60
        - Added Powershot A310 (patch #966814)
        - Added PowerShot S410 / IXUS 430 (patch #963229)
        - Added IXUS 500
        - Added MV650i.
- casio
        - Make the driver actually works
- pccam300
        - Added Intel Pocket PC
- pccam600
        - Added PC Cam 350
        - Added PC Cam 750
- ptp2
        - Added Panasonic DMC-FZ20
        - Added IXUS 40
        - fix gcc 2.95 build (bug #1055868)
        - Added Konica-Minolta DiMAGE Z3
        - Added Canon PowerShot G6.
        - Added Canon PowerShot A400
        - Added Canon EOS 20D
        - Added more config cases from Canon in capture mode.
                - zoom (working)
                - auto focus assist light
                - beep mode
                - exposure compensation (not fully done)
        - Can set the following config:
                - Canon Camera Owner
                - Canon Time on camera
        - Added Nikon Coolpix 2200
        - Added Canon PowerShot A85
        - Added Kodak LS753 DX7630 CX7300 CX7220
          CX7330 CX7530 DX7440 CX6445  (bug #982934)
        - Added Nikon Coolpix 4200
        - Added EOS 1D Mark II
        - Added Canon Powershot S60
        - Added Canon PowerShot A310
        - Added Ricoh Caplio GX
        - Added Nikon D70
        - Added Sony MVC-CD500
        - Support Nikon extensions
        - Added Kodak LS-473 (rfe #977619)
        - Added Canon PowerShot S1 IS
        - Added Canon PowerShot SD110
        - Added Canon A75 (PTP mode)
        - Added Fuji FinePix S7000 (PictBridge mode)
        - Added Kodak CX4310
        - Added Canon Digital IXUS 430 / PowerShot S410
        - Added Nikon Coolpix 3200
        - Added Kodak CX7430 (patch #934142)
        - Added HP PhotoSmart 945 (bug #930400)
        - Added PowerShot S500 (Digital IXUS 500 alias)
        - Added HP PhotoSmart 635
        - Added Canon Elura 50
        - Added Digital IXUS 500
        - Added Konica-Minolta DiMAGE A2
        - Added Sony DSC P-10
        - Added Canon PowerShot S50
        - Added Nikon Coolpix 3700
- ricoh
        - Added Ricoh Caplio RX
        - Get the modification time without downloading the pictures
        - Added Medion MD 6126
        - Added Caplio 300G
- sierra
        - Added Toshiba PRD-M60
        - Added Toshiba PRD-M61
        - Added Toshiba PRD-M65
- spca50x
        - Added support for Dakota disposable cameras
        - Added support for Pencams without flash via a special camera
        model
- sq905
        - Added ViviCam 5B
        - Added SY-2107C
        - Added Argus DC-1730
        - Added Concord Eye-Q Duo
        - Added Sakar Kidz Cam
        - Video clips and capture-preview supported
        - delete-all-photos supported for those SQ cameras which will do it
        - thumbnails supported for GUI compatibility
- stv0680
        - Added DigitalDream l'espion XS
        - Added Added Che-ez! BABE and SPYZ

Bug fixes:

- gcc 2.95 compatibility (bug #1055868)
- sonydscf55
        - fixed thumbnail downloading
        - serial communication fixes on fast CPUs
        - native file names are now used (instead of using the hardcoded
        "dsc%05d.jpg")

- afga-cl20
        - fix compactflash detection
        - fix number of pictures detection
        - get rid of the heavy stack usage and use the heap instead
        - fix USB download size
- canon
        - Fixed various gp_log / GP_DEBUG problems.
        - Use largest file size limit
        - Note improper use of file size limits
- kodak/dc240
        - Fix TIMEOUT problem (bug #920532)
- konica
        - Fix C99 stuff for Solaris C compiler (bug #923219)
- lmini
        - Get the reply in largan_get_pict()
- ptp2
        - Fixed a problem with thumbnails download
        - Better capture support
        - Improved error messages
- ricoh
        - Fix buffer handling
- sipix
        - Various fixes
- spca50x
        - Fix for gcc 2.95 build (bug #105586)
- sq905
        - Fix for gcc 2.95 build (bug #105586)
        - major rewrite and various bug fixes


New translations:


Updated translations:

----------------------------------------------------------------------------

Changes since 2.1.4 in gphoto2. See alse release notes for libgphoto2.

New features:

- New command line arguments:
        --list-config           - dump the configuration tree of the camera
        --get-config var        - get the configuration entry <var>
- New capture option:
                --frames=count
                --interval=seconds

Bug fixes:

- now build with libexif-0.6.9.
- allow setting range with decimal values in camera configuration
- fixed a segfault in shell_command_generator on Alpha processors

New translations:

- nl.po (Dutch)
- fi.po (Finnish)
- hu.po (Hungarian)
- en_GB.po (English Greate-Britain)
- az.po (Azerbaijani)
- sr.po (Serbian)

Updated translations:

- uk.po (Ukranian)


</pre>

<h2>2.1.4 release (January 18th, 2004)</h2>

As usual, a lot of bug fixes and support for even more cameras.

<pre>
----------------------------------------------------------------------------
libgphoto2 2.1.4 

general:

   * fixed recursion problems during capturing

   * Support for multiple USB cameras NOT included yet.
     Reason: It breaks several applications.

drivers (camlibs):

   * Canon driver:
     - added support for G5, Optura 20, ZR-70MC
     - re-added support for A300 and S50
     - fix erroneous file size limits

   * PTP driver:
     - enhanced Canon Capture support
     - added id for Canon Digital IXUS i
     - added Olympus C-350Z, D-560Z, X-250
     - added Sony DSC-U20, DSC-P52, DSC-P72, DSC-P92
     - updates from libptp2

   * ricoh driver:
     - working G3, G4 support

   * sx330z driver:
     - added Maginon SX-410z

   * spca50x driver:
     - do not delete everything and fail to download on Aiptek 1.3

   * polaroid drivers:
     - fixed support for D-Link 350F, Skanhex SX-35
     - added support for Trust 350FT PowerC@m FLASH

packaging:

   * linux hotplug scripts:
     - use correct directories in usbcam.x11-app

libgphoto2_port:

   * serial bug fix with speed 0
</pre>

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
