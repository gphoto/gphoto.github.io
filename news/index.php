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
<h2>libgphoto2 2.4.0</h2>

<h3>Build:</h3>
<ul>
<li>Non-recursive camlib build: Makes "make -j2" useful.
     <code>"./configure --with-drivers=..."</code> still works. Selective camlib
     rebuild is <code>"make -C camlibs agfa_cl20.la"</code> now. Selective camlib
     install is <code>"make DRIVERS='canon.la ptp2.la' install-drivers"</code>.
<li>Fix sierra and canon drivers picking up old gphoto2 headers.
<li>libiconv linking fix for PTP2 driver.
<li>Require external libltdl.
<li>Ditched autogen.sh, use standard autoreconf from stock autoconf.
<li>Put auto* files into auto-aux/ and auto-m4/.
<li>Accept utilsdir and udevscriptdir set by user (#1646520).
<li>Introduce libgphoto2-uninstalled.pc pkgconfig file (#1643245).
<li>Remove make dependency on $(LIBLTDL) aka "-lltdl" (#1548195).
</ul>

<h3>libgphoto2 API:</h3>
<ul>
<li>New <code>gp_file_new_from_fd()</code> ... Which allows mapping CameraFile to
     UNIX filedescriptors for both reading and writing.
<li>New <code>gp_file_slurp()</code> function (for camlib use) to sequentially
     read out CameraFiles.
<li>New <code>gp_camera_get_storageinfo()</code> API added to get programmatically
     the storage information(s), like capability, free space and labels.
	<br>
     On cameras not supporting it returns GP_ERROR_NOT_SUPPORTED.
<li>Enhanced Bayer algorithm added globally.
</ul>

<h3>Package / System integration:</h3>
<ul>
<li>New syntax for print-camera-list's udev output. See help output.
     	<br>
     Note that we generate udev >= 0.98 output by default.
	<br>
     Use "version pre-0.98" on the commandline to generate the old version.

<li>Add new permission setup binary doing Microsoft OS Descriptor
     retrieval for MTP devices not explicitly listed.
     This binary (check-mtp-device) is used by the generated UDEV rules.
     (Not working currently since udev does not create the device before
     calling it.)
</ul>

<h3>disk port:</h3>
   <ul>
   <li>handle automounter properly.
   </ul>

<h3>directory driver:</h3>
   <ul>
   <li>ignore anything not starting by '.' because it is not DCF compliant
   and it is used for things like Trash of metadata...
   </ul>

<h3>PTP2 driver:</h3>
<ul>
<li>For Canon capture capable cameras, enable shutter and aperture control
     using "shootingmode" property (PTP d00c), and focuslock mode.

<li>New dataflow engine, making it possible to upload/download images
     or songs without taking up any system memory. (think multi GB movies
     on small devices).

<li>Enhanced MTP protocol handling.

<li>Canon EOS 400D capture support.

<li>Cleanups and bugfixes.

<li>New USB IDs for cameras:
    <ul>
    <li>Canon PowerShot SD1000, SD900, A450, A550, A560, A570, A420, SD40, SD750
    <li>Canon PowerShot S5 IS, SD1000
    <li>Canon Digitial IXUS 70, 75, 900Ti
    <li>Canon MV750i
    <li>Nikon CoolPix S4, S6, P4, L10
    <li>Nikon DSC D40, 
    <li>Kodak EasyShare C433, C613, C653, C743, C875, V570, V610, V705, P880, V603
    <li>HP Photosmart R967
    <li>Minolta DiMAGE x21
    <li>Fuji FinePix F20, F40, S9500
    <li>Casio EX-Z700
    <li>Sony DSC N2, W35, W200
    <li>Apple iPhone
    </ul>

<li>Several new USB IDs for MTP players, including
     all from libmtp: <ul>
     <li>iRiver T20, N12, iFP-800, T20 2, Clix2
     <li>Archos 504, Toshiba Gigabeat P20
     <li>Philips PSA235, SA9200
     <li>Samsung YH-925GS
     <li>SanDisk Sansa c250
     </ul>
</ul>

<h3>Canon driver:</h3>
<ul>
<li>Enable formerly experimental 20D support code by default.

<li>Moved handling of some cameras to PTP2 driver, since they cause
    as yet unidentified errors.
</ul>

<h2>gphoto2 2.4.0</h2>
<ul>
<li>Add contrib/ directory with scripts and things contributed by users.
<li>New --storage-info function to get direct storage information
   from the camera via API.
<li>Use SIGUSR1 to trigger premature image capture in --interval mode.
<li>New --reset-interval parameter makes SIGUSR1 reset the capture interval.
 
<li>New --capture-tethered command to wait for presses of the camera shutter
   button and download. Confirmed working only with Nikon DSC.
</ul>

<h2>gphotofs 0.4.0.</h2>
<ul>
<li>Write support
<li>Statfs support
<li>mkdir/rmdir
<li>FUSE 2.6 API
<li>Single threaded main loop
</ul>

<hr />

<h2>libgphoto2 2.3.0</h2>

<h3>PTP</h3>
<ul>
<li>Improved Nikon remote control</li>
<li>Improved Canon file download
      <ul>
      <li>  - faster directory retrieval (especially on cameras with lots of files)</li>
      <li>- "new" images are marked (gphoto2 --new, digikam)</li>
      </ul>
</li>
<li>MTP Playlist support (upload and download)</li>
<li>MTP Metadata support (upload and download, Artist, Title, Playtime ... )</li>
<li>Lots of other MTP related fixes.</li>
<li>MTP autodetection on Microsoft OS Descriptor.</li>
<li>New devices:
<ul>
<li>          Canon PowerShot A540, A530, S3 IS, SD430, SD600, SD700, IXUS 800,
                IXUS 60, A630, SD630, G7, Digital IXUS 65, 710IS, EOS 400D,
                Digital Rebel XTi, IXUS 850 IS, PowerShot A640,
                IXUS Wireless (USB support only currently)</li>
<li>          iRiver T20 FM, iClix</li>
<li>          Creative Zen Vision W, Vision M, Vplus, V</li>
<li>          Dell Pocket DJ</li>
<li>          Nikon Coolpix L4, L3, L1, D80, P3</li>
<li>          Kodak Easyshare Z740, P850, Z612, C633, C643, C530, Z612, CD33</li>
<li>          Sony DSC-U10</li>
<li>          Leica D-LUX 2</li>
<li>          Olympus IR-300</li>
<li>          JVC Alneo XA-HD500</li>
<li>          All currently known HP Photosmarts (sync with Windows Driver .INF files)
          various Samsung devices</li>
	  </ul>
</li>
</ul>

<h3>Canon</h3>
<ul>
<li>5D - 20D experimental capture support (default disabled)</li>
</ul>

<h3>Kodak DC120</h3>
<ul>
<li>Bugfixes to make it work.</li>
</ul>

<h3>Mars</h3>
<ul>
<li>RAW files saved with size information.</li>
<li>Some new ids, lots of bug fixes.</li>
</ul>

<h3>Ricoh G3</h3>
<ul>
<li>Added Ricoh Caplio R4 id.</li>
</ul>

<h3>Disk port</h3>
<ul>
<li>Addes Solaris filesystem table handling.</li>
<li>Fixed a crasher.</li>
<li>Skip "fuse" filesystem.</li>
</ul>

<h3>SiPix Blink</h3>
<ul>
<li>Disabled build, since it cannot the downloaded data to usable images.</li>
</ul>

<h3>Sonix</h3>
<ul>
<li>Bugfixes and support for Sakar Digital Keychain 11999.</li>
</ul>

<h3>Bindings</h3>
<ul>
<li>Removed the Mono/.NET bindings due to unclear license.</li>
<li>Partial Java bindings</li>
</ul>

<h3>libgphoto2 API</h3>
<ul>
<li>Compiles with <tt>-pedantic</tt> in gcc's c99 and c++98 modes.</li>
<li>Marked a few definitions as being internal to the gphoto project.</li>
<li>Added <tt>gp_list_find_by_name()</tt> function.</li>
<li>Made <tt>_CameraList</tt> details private.</li>
</ul>

<h3>libgphoto2</h3>
<ul>
<li>Fixed some directory handling problems for MTP players.</li>
<li>Improved error checking and propagation.</li>
<li>New error code for "fixed limit exceeded" (exceptions would be nice)</li>
<li>Added a few internal functions.</li>
</ul>


<h2>gphoto2 2.3.0</h2>
<ul>
<li>Require popt library to parse command line options.</li>
<li>Partitioned command line options into groups of related options.</li>
<li>Added <tt>--debug-logfile=FILENAME</tt> option.</li>
<li>Only load all camlibs if necessary.</li>
<li>(Half-)Fix to make <tt>--with-libgphoto2=PREFIX</tt> configure parameter work.</li>
<li>Preliminary support for lower-case filenames in <tt>--filename</tt> pattern: <tt>%:</tt></li>
<li>Added "rmdir" command to <tt>gphoto2 --shell</tt>.</li>
</ul>

<hr />

<h2>libgphoto2 2.2.1</h2>
<p>
Address an issue building 2.2.0 on FreeBSD.
</p>

<hr />
<h2>libgphoto2 2.2.0</h2>

<h3>Build system (packagers beware!)</h3>

<ul>
<li>You should generate HAL FDI, linux-hotplug usb.usermap, and udev rules
    now via our program:<p>

<code><pre>
 	  ${libdir}/print-camera-list (hal-fdi|usb-usermap|udev-rules)
</pre></code>
     During a chrooted build you can use:
<code><pre>
	CAMLIBS=$BUILDROOT/usr/lib/libgphoto2/2.2/ print-camera-list hal-fdi
</pre></code>
     This obsoletes print-usb-usermap and print-udev-rules.
<br>
     The hal FDI file should be put into:<code><pre>
	/usr/share/hal/fdi/information/10freedesktop/10-camera-libgphoto2.fdi
</pre></code>
     If you need to generate different stuff based on the cameras, please add
     it to the "print-camera-list" helper.

<li>Mass Storage support<p>

    You can now access Mass Storage cameras via libgphoto2. They will show up
    with "disk:" port. This mode uses either HAL or direct /etc/fstab reading.

<li>PTP/IP support<p>

    We now can access PTP/IP cameras. They will show up with "ptpip:"
    port. Automated discovery and detection (for Nikon Px series)
    requires Apple Bonjour aka mDNSresponder devel packages. (An Avahi
    port would be welcome, but is not done yet.)

<li>Added C# (csharp) bindings<p>

     Thanks to Patrick van Staveren &lt;trick@vanstaveren.us&gt;'s initiative,
     we now compile, ship and install the C# bindings.
     These were originally written for <a href="http://f-spot.org/">f-spot</a>.<br>
     However, a few things will still change about it, so don't just completely rely on
     it, its file names and locations, etc. just yet.
</ul>

<h3>Client programmers (KDE, GNOME, MONO, C....)</h3>
Programmers with specific character set requirements please observe:
<ul>
<li>We added new function <code>gp_message_codeset(const char*)</code> to the API.
   <ul>
   <li>If you do not call this function, libgphoto2 will give you its
        messages in the codeset defined by the system locale.
	(The system locale is defined by the LANG, LANGUAGE, and LC_*
	environment variables.)

   <li>Call this function with your desired codeset if you require
        libgphoto2 messages in a fixed codeset independent from the
        system locale. For example, GTK+ applications always expect UTF-8.
   <li><code>gp_message_codeset()</code> propagates the requested charset to
        libgphoto2_port and then calls gettext's bind_textdomain_codeset()
        function.
   </ul>
<li>Added <code>gp_camera_wait_for_event()</code> API, to wait for
    specific camera events and return them to the caller.
</ul>

<h3>libgphoto2 changes</h3>

<ul>
<li>libgphoto DSO version is now 2.1.0

<li>Greatly reduced memory consumption on cameras with large images.<p>
    We now cache only 2 images instead of a lot more.<p>
    This number can be adjusted in the gphoto2 settings (~/.gphoto/settings,
    libgphoto=cached-images).

<li>Lots of bugs were fixed.

<li>New translations were added.

</ul>

<h3>Driver changes</h3>
<ul>
<li>PTP
    <ul>
    <li>Experimental PTP/IP support has been added.

    <li>On selected Nikon and Canon cameras it is now possible to capture
       images into the Camera SDRAM and in turn downloading it to libgphoto2
       internal storage, bypassing the memory card.
<br>
       To enable it, use the "capturetarget" setting, also saved in
       .gphoto/settings.
<br>
       This is useful for:<code><pre>
	   gphoto2 --capture-image -f /store_00010001 -p capt0000.jpg
</pre></code>
       Or use the timelapse capture of gphoto2:<code><pre>
	   gphoto2 --capture-image -F &lt;total frames&gt; -I &lt;seconds interval&gt;
</pre></code>
       Or for write your own capture client using libgphoto2...


     <li>Support of MTP devices has been greatly enhanced.
       <ul>
       <li>Creative Zen devices now work.
       <li>iRiver devices work, but have some protocol subtleties / flaws.
       <li>Object Property (Meta Data) support now works in a basic way.
	<br>
	   <code>GP_FILE_TYPE_METADATA</code> type get and put can be
	   used to retrieve and set meta data for files.
<br>
	   get: Returns all available properties and their contents.
<br>
	   put: Set the properties found in the file to the specified content.
		The non-listed are untouched.
<br>
	   The metadata looks like:<code><pre>
		   &lt;Artist&gt;Elvis Presley&lt;/Artist&gt;
	   gphoto2 -f /store_00010001/Folder... --get-metadata file.mp3 --stdout &gt; meta_file.mp3
	   ... edit meta_file.mp3 ...
	   gphoto2 -f /store_00010001/Folder... --upload-metadata meta_file.mp3

	   gphoto2 --get-all-metadata	... retrieves metadata of all files, with meta_ prefix.
</pre><code>
	   (please see the gphoto2 commandline tool, or ask for help on gphoto-devel).
       </ul>
       <li>Better --summary output, now listing also Storage Devices and Device abilities.
       <li>Lots of new device ids:
	<ul>
         <li>Canon 5D, 30D, A340, A700, S40, S80
	 <li>Nikon D200
         <li>Casio EX-Z120
         <li>Kodak C360, Z700
         <li>HP M317
	 <li>Panasonic DMC-LC1
         <li>Fuji E900
         </ul>
    </ul>
</ul>

<hr />
<h2>libgphoto2 2.1.99 (Dec 27th 2005, pre-release of 2.2)</h2>
<p>
<h3>Build system (packagers beware!):</h3>
<ul>
<li>You can now generate FDI files for HAL via print-usb-usermap --fdi.
<li>Now requires libltdl (from system or shipped with tarball)
<li>Works with contemporary build tools
<li>New ./configure parameter set
<li>No more accidentally building without libusb (use --without-libusb
     if you insist on that)
<li>camlibs and iolibs are now installed into new directories
<li>libhal 0.5 is currently an option for the disk: port.<br>
    Distribution that ships it might want to build it with it.
</ul>
<p>
<h3>libgphoto2</h3>
<ul>
<li>disk: "port" for USB Mass Storage support
<li>Memory usage greatly reduced by only keeping last 2 pictures
    in memory cache
<li>If set, use environment variable CAMLIBS to find the camera drivers.
     Ditto for libgphoto2_port, IOLIBS and IO drivers.
<li>Various USB fixes
<li>Generate .fdi files for HAL
</ul>
<h3>Drivers (camlibs)</h3>

<ul>
   <li>Basic MTP support for iRiver mp3 players using ptp driver T10, T20, T30, M415

   <li>canon
   <ul>
	   <li>IXY Digital 600 fixes
	   <li>Added A610.
	   <li>Experimental SD500.
	   <li>Experimental A620 (not really working).
   </ul>
   <li>casio<br>
   <ul>
	   <li>Various fixes in QV-10 driver.
   </ul>
   <li>digigr8 (NEW)
   <ul>
	   <li>support Digigr8, Che-Ez Snap SNAP-U, Soundstar TDC-35
   </ul>
   <li>kodak/dc210
   <ul>
	   <li>Added DC215
   </ul>
   <li>ricoh/g3
   <ul>
	   <li>Added Ricoh Caplio GX, GX 8, R2, R3.
	   <li>Added Rollei dr5.
   </ul>
   <li>hp215 (NEW)
   <ul>
   	<li>support HP 215
   </ul>
   <ul>lg_gsm (NEW)
	   <li>support LG T5100
   </ul>
   <li>mars
   <ul>
	   <li>various fixes
	   <li>Added Argus DC-1620, DC-1610 (experimental)
	   <li>Added Philips P44417B
   </ul>
   <li>pdc640
   <ul>
	   <li>Added Clever CAM 360
   </ul>
   <li>ptp
   <ul>
   <li>For Nikon, handle ISO speed, aperture, exposure program,
       capture, focus metering mode, flash mode, AF beep toggle
   <li>Nikon curve
   <li>Added Kodak Z730, Z7590, C340, LS753, V530, V550, C310, C330
   <li>Added Nikon D50, D70s, 4600, 4800, 5600, 5900, Coolpix P2
   <li>Added Canon A410, A520, A610, A620, IXUS 55, SD450, IXUS 750
   <li>Added HP R817, Photosmart M23
   <li>Added Olympus D-540z, C-310z, X-100
   <li>Added Panasonic Lumix FZ5, DMC-LZ2
   <li>Added Ricoh R3
   <li>Added Sony DSC-H1, DSC-R1
   <li>Added MTP devices (mp3 players)
   </ul>
   <li>sierra
   <ul>
   <li>various fixes
   <li>Added C-770UZ
   </ul>
   <li>sq905
   <ul>
   <li>various fixes
   <li>fix some crashers
   </ul>
</ul>
<h3>Bindings:</h3>
<ul>
<li>Added Java (patch# 1108091)
<li>Added Python (patch# 1152835)
<li>Added C#
</ul>

<h3>Translation updates:</h3>
<ul>
<li> da
<li> it
<li> ru
<li> vi
<li> zh_TW
</ul>
<h2>2.1.6 release (June 23rd, 2005)</h2>

<h3>General libgphoto2 features</h3>
<ul>
	<li>Works correctly with kernel 2.6.12 and libusb 0.10.</li>
	<li>Small bugfixes.</li>
</ul>

<h3>Drivers (camlibs)</h3>
<ul>
<li>ptp2 driver:
	<ul>
	<li>Lots of new IDs added:<br>
		<ul>
		<li>Canon Digital IXUS 30, IXUS 50, IXUS 700, 
			PowerShot A510, PowerShot A520, PowerShot S2 IS,
			PowerShot S70, PowerShot SD200, PowerShot SD500,
			EOS 1D Mark II
		<li>Fuji FinePix A330
		<li>HP Photosmart M307 and R707
        	<li>Kodak CX7525 and DX7590
        	<li>Minolta DIMage Z2 (PictBridge)
        	<li>Nikon CoolPix 4100, D2H SLR, D2Hs SLR
        	<li>Olympus mju500
        	<li>Panasonic
        	<li>Pentax Optio 43WR
        	<li>Sony DSC-F717, DSC-P120, DSC-P51, DSC-P73, DSC-T3, DSC-W1, DSC-W12
		</ul>
	<li>Now supports Canon EOS 20D, EOS 350D, EOS 1D Mark II correctly.
	<li>EXIF reading using GetPartialObject (making EXIF extraction much faster).
     	<li>Enhanced property handling for Canon cameras.
     	<li>Download and upload of themes on Canon cameras.
     	<li>Enhanced property handling for Nikon cameras.
     	<li>Fixed timeout issues while downloading movies or big files.

	</ul>
<li>sierra driver:<br>
	<ul>

	<li>We now support the hidden Sierra Mode on Nikon and Pentax
	    cameras (which are otherwise just USB Storage cameras).
	<li> The USB Storage driver is automatically detached on open.

	     This allows remote image capture with those cameras.

     	<li>Better handling of Camedia C-420L and Epson PhotoPC 650 serial cameras.
     	<li>Better handling of Sanyo VPC G250
     	<li>Added Nikon Coolpix 2500, 3500 and 4300.
   
	</ul>
<li>canon driver:<br>
	<ul>
	<li>Added PowerShot SD200, S70, SD20, S330.
	<li>Significant restructuring: there are now only 5 types of camera,
       so we should be able to add new cameras without modifying canon.h.
	<li>Advancement in handling EOS 20D and 350D
	</ul>
<li>casio driver:<br>
     Capture support added.
<li>mars driver:<br>
     'Precision Mini Model HA513A' and 'Haimei HE-501A' ids added.
<li>pdc230 driver:<br>
     Minor fixes.
<li>ricoh g3 driver:<br>
	<ul>
	<li>Added Ricoh Caplio R1, R1v, RZ1 and Sea & Sea 5000G ids.
     	<li>Fixed crashes.
	</ul>
<li>sipix blink2 driver:<br>
   Added capture and delete-last support.

<li>sq905 driver:<br>
	<ul>
	<li>Handle Magpix B350
	<li>Some improvements.
	<li>Crash fixes.
	</ul>

<li>stv0680 driver:<br>
     Added Create Go Mini id.

<li>localizations:<br> lots of translations updates.
</ul>
<h2>2.1.5 release (December 16th, 2004)</h2>

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
