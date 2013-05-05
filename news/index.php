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

<h2>libgphoto2 2.5.2 release</h2>

<h3>ptp2</h3>
<ul>
<li>Fixed Raspberry Pi and USB 3.0 "connect only once" problem.
<li>Experimental Olympus E-series (not Pen) remote control support. Try in "Control" mode.
<li>Nikon DSLR: real movie capture! (use --set-config movie=1/0 and --wait-event)
<li>New ids:
<ul>
  <li>Sony: DSC-A900, SLT-A350, DSC-RX1, HX300, NEX-3N
  <li>Nikon Coolpix: P80, L820, S9500, S620, P520, S2500, S2600
  <li>Nikon Coolpix A
  <li>Nikon DSLR: D2Xs, D4, D7100
  <li>Nikon J2
  <li>Canon Powershot: S100, A1300IS, A2300IS, 
  <li>Canon EOS: 700D, 100D
  <li>Fuji FinePix: H20EXR, X20
  <li>Samsung: NX1000, EK-GC100
  <li>Also various MTP device ids merged from libmtp.
</ul>
<li>ptpip: major/minor number was switched in init packet.
<li>Nikon DSLR: out of focus during capture fixed, various bugfixes
<li>Nikon "controlmode" config for unlocking the camera.
<li>Canon DSLR: "keepdeviceon" pinging in get_config, liveview
<li>Canon thumbnail retrieval fixed.
<li>Lots of work on getting Olympus E-series DSLRs in Control mode to run.
</ul>

<h3>canon</h3>
<ul>
<li>wait-for-event: handle when camera goes offline during waiting.
<li>fixed mtime 0 (Jan 1 1970) issue when downloading files and using --filename
</ul>

<h3>sierra</h3>
<ul>
<li>Fixed the Nikon Coolpix 4300 and 2500 USB over SCSI capture mode.
<li>Ignore register 4 read errors after capture as Nikon does not supply them.
<li>added commented code on how to switch the Coolpix 2500 to RAW DIAG mode.
</ul>

<h3>libgphoto2_port</h3>
<ul><li>gp_port_reset functionality to do a port reset.</ul>

<h3>libgphoto2_port/usbscsi</h3>
<ul>
<li>Use timeout supplied by driver, not hardcoded 1.5 seconds (fixes Nikon sierra capture).
</ul>

<h3>translations</h3>
<ul>
<li>updated ukrainian, finish, dutch, polish, russian, french, vietnamese, german
</ul>

<h3>build</h3>
<ul>
<li>specify lots of _BSD_SOURCE et.al. to make the strict MacOS ports
build happier. Might break non Linux platforms, please report this.
<li>libxml2 needed for Olympus E series capture support.
<li>cleaned up AM_CPPFLAGS/CPPFLAGS usage, do not use both of them together.
</ul>
<hr/>
<h2>gphoto2 2.5.2</h2>
<ul>
<li>new --reset option to reset usb devices.
<li>using --filename, if the camera reports 1. Jan 1970, fall back to
  use the current date/time.
<li>translations updated: french, polish, vietnamese, russian, simplified chinese, danish
</ul>

<hr/>

<h2>libgphoto2 2.5.1</h2>

<h3>translations updates</h3>
<ul>
<li>lots of translations synced to 2.5.0 release
</ul>

<h3>ptp2</h3>
<ul>
<li>Lots of new USB ids added
<ul>
<li>Sony RX100, SLT-A65V, HX200V
<li>Nikon Coolpix S01, S3300, P7700, S8200, P510, J1
<li>Nikon DSLR D600, D800E, D800, D5200
<li>Panasonic DMC LX7
<li>Olympus SP-720UZ, E-PL5
<li>Canon PowerShot D10, IXUS 310IS, SX220HS, G1 X, SX40HS, 
    A4000IS, SX240HS, A2400IS, S110, SX500IS
<li>Canon EOS M, EOS 650D, EOS 6D
<li>Fuji FinePix S2950, S4300, X-S1, HS30EXR, XF1
</ul>
<li>wait-for-event also for Canon PowerShot (capture capable ones) now waits for "shutter press" signal and triggers a capture.
<li>Canon Powershot Preview mode fixes
<li>various Nikon configurations added: angle, flickerreduction, rawcompression, remotemode.
<li>Nikon DSLR to-ram capture fixes
<li>merged music player ids from libmtp. Includes big Samsung devices rename.
<li>EOS preview capture bugfixes: some waiting reduced to allow higher preview / regular capture speed on Canon EOS, understand newer EOS.
<li>some more bug fixes
</ul>

<h3>ax203</h3>
<ul>
<li>SST25VF080 and SST25VF016 support added.
<li>ax206 support enhanced.
</ul>

<h3>canon</h3>
<ul>
<li>decode "zoom" settings better
<li>"shootingmode" fix
</ul>

<h3>libgphoto2_port/libusb1</h3>
<ul>
<li>bugfixes
</ul>

<h3>examples</h3>
<ul>
<li>focus.c, sample-justfocus.c: focusing example added
</ul>

<hr />
<h2>gphoto2 2.5.1</h2>

<ul>
<li>Fixed that the meaning of --keep and --no-keep was switched.

<li>Allow passing absolute filenames to
   -p, -d, -r/--rmdir, -m/--mkdir, -t, --show-info, --get-metadata,
   --get-raw-data, --get-audio-data,
<p/>
   like e.g.:
   gphoto2 -p /store_00010001/DCIM/100D7000/DSC_0001.JPG
<li>-L --quiet  now prints a list of all files, 1 per line.
<li>-l --quiet  now prints a list of all folders, 1 per line.
</ul>

<hr />
<h2>libgphoto2 2.5.0</h2>

New major version containing various API changes and restructuring to
remove artificial limits (like 1024 files per directory) and clear
up some APIs to make it a bit easier on frontends.

This release is binary incompatible and also has some API incompatibilities,
your applications will need to be rebuilt and perhaps adjusted.

<h3>libgphoto2 API</h3>
<ul>
<li> gp_context* functions no longer get varargs, but preprocessed
     strings. This makes hooking them into other language bindings
     easier.

<li> gp_file_new_from_handler(): Allow passing data in and out via
     handler functions (to allow streaming). See also CameraFileHandler
     function pointers.

<li> CameraFileInfoFile: removed "name" structmember and GP_FILE_INFO_NAME
     flags.<br/>
     Use direct passing in of the filename to the API functions.

<li> New: gp_camera_autodetect(CameraList *list, GPContext*);<br/>

     Simple autodetection function returning all current detected cameras.

<li> gp_file_set_name() and _get_name() passing in is no longer needed
     and the API will go away.

<li> New gp_file_get_name_by_type() will convert a regular filename ("normal")
     into one depending on type (e.g. "raw_" prefix) and adjusted suffix
     (like ".ppm" turning into ".pgm" for grayscale previews).

<li> gp_file_set_type() and gp_file_get_type() are gone, these functions
     are now implicit passed via arguments to the the put_file and
     set_file_noop() functions.

<li> gp_filesystem_set_info_noop(), gp_filesystem_set_file_noop(),
     gp_filesystem_put_file(), gp_camera_folder_put_file():
     <br/>
     Added "filename" argument to pass in the filename. The one
     from CameraFileInfoFile and CameraFile are no longer used.
     <br/>
     Added "type" argument to pass in the filetype (GP_FILE_TYPE_*).

<li> Adjusted to new GPPortInfo handling.

<li> Rewrote gphoto2-filesys.c to be directory based (in a tree structure).
     Change should not be visibile outside of gphoto2-filesys.c.

</ul>

<h3>libgphoto2_port API</h3>

<ul>
<li>GPPortInfo is now abstracted and internal.
    <br/> 
     If you need to retrieve name, path or type, use
<code>
	     gp_port_info_get_xx (info, &amp;x);
</code>
     to get the value.
     Name and path strings continue to be owned by libgphoto2_port,
     do not modify and do not free.
<br/>
     You are not supposed to create / append new ones to GPPortInfoList.

<li>Disk Settings have been removed from the Settings union. Should
     not affect frontends at all.

<li>Started using symbol versions.
</ul>

<h3>PTP2 driver</h3>
<ul>
<li>PTP Object management rewritten, able to do "on demand" loading.
</li>

<h3>Directory driver</h3>
<ul>
<li>Use GPPortInfo instead of settings to pass basepath in.
<li>Abstracted common functionality.
</ul>

<h3>Build</h3>
<ul>
<li>Removed dummy README file from SVN.
<li>Ship README.packaging in dist tarball for the first time.
<li>Allow building "all plus non-default" camlibs.
<li>Fix libltdl test compile for cases with LDFLAGS defined.
</ul>

<h3>Documentation</h3>
<ul>
<li>Optionally (--enable-internal-docs) build internal doxygen docs with call graphs and all the dirty details.
<li>Improved docs on how to selectively build camlibs.
</ul>

<h3>Test cases</h3>
<ul>
<li> Test camlib loading of both uninstalled and installed camlibs.
</ul>


<hr />
<h2>gphoto2 2.4.14</h2>
<ul>
<li>disable aalib by default (--with-aalib to enable)
<li>--list-all-config to dump the full config tree + values
<li>various small bugfixes
<li>updated translations: islandic, danish, german, french, hungarian,
   italian, dutch, punjabi, polish, russian, vietnamese, chinese,
</ul>

<hr />
<h2>libgphoto2 2.4.14</h2>

<h3>packaging</h3>
<ul>
<li>new udev 175 mode for print-camera-list (from Ubuntu)
</ul>

<h3>libgphoto2</h3>
<ul>
<li>fixed stupid bug in directory listing (fixes "canon" driver)
</ul>

<h3>libgphoto2_port/usb</h3>
<ul>
<li>Fixed stv680 usb config alternate setting (unbreaks stv680 driver)
</ul>

<h3>canon</h3>
<ul>
<li>enhanced wait_for_event a bit.
</ul>

<h3>ptp2</h3>
<ul>
<li>Nikon viewfinder enable/disable via config
<li>added Nikon S6000, Canon PowerShot A3000, PowerShot SX230HS, Canon EOS 5D Mark III, Sony SLT A35, Nikon Coolpix AW100
<li>lowlevel Canon EOS CustomFuncEx support added
<li>Canon EOS 5D Mark III imagesize packing/unpacking support
<li>Samsung Galaxy file handling support restored
<li>match configuration table values more exact and correct.
<li>mtp player list synced with libmtp
</ul>

<h3>translations</h3>
<ul>
<li>updated russian, ukrainian, danish, czech, german
</ul>

<h3>examples</h3>
<ul>
<li>sample-tether added
</ul>




<hr />
<h2>libgphoto2 2.4.13</h2>
This is a 2.4 release branch update.

<h3>libgphoto2_port/libusb1</h3>
<ul>
<li>fixed accessing freed memory which lead to non-working communication
<li>use the correct context everywhere avoid crashes on startup on newer libusb1
<li>fixed and rewrote the whole device caching mechanisms for major initial speedup.
</ul>

<h3>ptp2</h3>
<ul>
<li>Implemented fast Canon EOS directory loading
</ul>

<h3>storage</h3>
<ul>
<li>add ogg, mp3, mp4 extensions to "good"
</ul>

<h3>translations</h3>
<ul>
<li>updated polish
</ul>
  
<h3>libgphoto2</h3>
<ul>
<li>capture to card added a lonely file to a camera folder instead of getting the content from the card
</ul>

<hr />
<h2>libgphoto2 2.4.12</h2>
This is a 2.4 release branch update.

<h3>libgphoto2_port</h3>
<ul>
<li>Added libusb 1.0 port driver.
<li>removed baudboy.h support from serial driver.
<li>Updated translations: czech, german
</ul>

<h3>canon</h3>
<ul>
<li>Secondary RAW 2 format for some cameras.
</ul>

<h3>directory</h3>
<ul>
<li>Handle more suffixes to mimetypes (unknowns will not show up in the
  file list): moov, qt, qtvr, mp2, mpeg, mpe, srw, 3gp, 3g2, dif.
<li>set the correct filetime
</ul>

<h3>ptp2</h3>
<ul>
<li>New cameras:
<ul>
<li>Kodak C1530
<li>Sony DSC-HX100V, DSC-A1000, SLT-A55
<li>Nikon CoolPix P7000, P7100, P500, L120, L23, S5100, S3100, 
<li>Nikon D2Hs, D5100
<li>Canon EOS 10D, 1D Mark IV, 1100D, 600D
<li>Canon PowerShot A2000IS, A3100IS, 
<li>Fuji FinePix F80EXR, X10
<li>Apple iPad, iPhone 4
<li>Panasonic DMC-TZ18, TZ20
</ul>

<li>Canon Powershot event handling changed to no longer use PTP Events.
  Should now be more reliable on MacOS.

<li>Nikon configurations added: videomode, scenemode, exposure program mode,
  effect mode, liveviewaf, liveviewaffocus, cleansensor, microphone, moviequality,
  autodistortioncontrol, autoisopadv renamed to minimumshutterspeed.
<li>Allow per-camera configuration tables.
<li>Canon EOS configurations added: "Immediate" for shutter button pressing,

<li>Handle missing runtime iconv module support (as found in embedded devices)
<li>Bump retries on EOS liveview getting
<li>Fixed stupid EOS event handling bug that caused a 1.5 second delay
<li>Fixed more session startup issues
<li>Tried a fix for getting bad thumbnail lengths
</ul>

<h3>sierra</h3>
<ul>
<li>Bugfix: handle ACK as valid response code
</ul>

<h3>tp6801</h3>
<ul>
<li>New driver for Tenx tp6801 picture frames from Hans de Goede.
</ul>

<h3>digigr8</h3>
<ul>
<li>added Digital Blue Barbie Camera DC150, Cobra Digital Camera DC150,
  Aries Digital Keychain Camera, ITEM 128986, Lego Bionicle
</ul>

<h3>jl2005c</h3>
<ul>
<li>added Sakar Nickelodeon iCarly no. 88061, Sakar Dora the Explorer no. 88067,
  Jazwares Star Wars no. 15256
</ul>

<h3>libgphoto2</h3>
<ul>
<li>make jpeg and gd support configurable (Gentoo)
<li>Updated translations: pl
</ul>

<hr />
<h2>gphoto2 2.4.11</h2>
This is a 2.4 release branch update.
<ul>
<li>Switched %n behaviour to be linear increasing, instead of
   a folder index.
<li>Updated translations: danish, indonesian, italian, dutch,
   polish, brazilian portuguese, russian, vietnamese, simplified
   chinese.
</ul>

<hr />
<h2>libgphoto2 2.4.11</h2>
This is a 2.4 release branch update.
<h3>ax203</h3>
<ul>
<li>Various new ids:<br>
  GigaDevice GD25Q40, GD25Q80, GD25Q16<br>
  ST M25P08, M25P16, M25P32, M25P64<br>
  Winbond W25Q80, W25Q16, W25Q32
<li>Various bugfixes
</ul>

<h3>canon</h3>
<ul>
<li>implemented a basic wait_for_event() so --capture-tethered works
  (not working correctly for CR2+JPG, but JPG or CR2 stand alone will work) 
<li>Some bugfixes
</ul>

<h3>digigr8</h3>
<ul>
<li>Added Lego Bionicle camera.
</ul>

<h3>directory</h3>
<ul>
<li>More mimetypes that are images added
</ul>

<h3>jl2005c</h3>
<ul>
<li>Reduced stack usage (do not have 5MB arrays on the stack),
  making it work in programs with stacklimits
</ul>

<h3>mars3</h3>
<ul>
<li>Added Shift3 camera.
</ul>

<h3>sierra</h3>
<ul>
<li>rewrote the USB wrapped command handling to use "usbscsi"
  port. Now its no longer necessary to detach the mass storage
  driver.
</ul>

<h3>ptp2</h3>
<ul>
<li> Allow by-camera specific configuration (used for Nikon DSLR currently)
<li> Added some Nikon D90, D3s specific tables.
<li> Canon EOS: support remoterelease (remote trigger manipulation) via eosremoterelease
  config option
<li> Merge some CHDK code (not tested working with my SX100IS -Marcus)
<li> Make setting properties via the "other" config tree work.
<li> merged new media player ids from libmtp
<li> Timeouts configurable
<li> New cameras:<ul>
  <li>Kodak Z710, C183
  <li>Nikon CoolPix S7c, P90, P100, S8000, S3000, S9100
  <li>Nikon DSLR D3s, D3100, D7000
  <li>Casio EX-Z65
  <li>Canon Powershot SD1300 IS, SX210 IS, SX130 IS, 
  <li>Canon EOS 60D
  <li>Fuji FinePix A220, Z700EXR
</ul>
<li> Some capture bugfixes
<li> Lots of bugfixes
</ul>

<h3>st2205</h3>
<ul>
<li>Minor additions
</ul>

<h3>libgphoto2_port/usb</h3>
<ul>
<li>Avoid MTP probing. Done by libmtp these days, also confuses some devices.
<li>Do list less usb:XXX,YYY ports for things that are not cameras.
</ul>

<h3>libgphoto2_port/usbscsi</h3>
<ul>
<li>Fixed symlink handling in device detection for newer kernels.
<li>Decode SCSI sense data received.
</ul>

<h3>libgphoto2</h3>
<ul>
<li>Updated translations: danish, german, spanish, basque, french,
  hungarian, italian, japanese, dutch, polish, russian, swedish, ukrainian,
  vietnamese, simplified chinese
</ul>

<h3>libgphoto2_port</h3>
<ul>
<li>Updated translations: czech, danish, german, spanish, basque, french,
  italian, japanese, dutch, polish, brazilian portuguese, russian, slovakian,
  swedish, ukrainian, vietnamese, simplified chinese, traditional chinese
</ul>

<hr />
<h2>gphoto2 2.4.10</h2>

<ul>
<li>Event loop handling non-waitevent able cameras.

<li>--capture-movie (optional arguments: frames, or seconds)
   now loops over preview capture as fast as possible
   and writes the frames continously.
<p>
   The resulting file is "MotionJPEG" and can be postprocessed
   or displayed (by mplayer).
<p>
   Also output to stdout is possible for pipeing like:
	<code>gphoto2 --stdout --capture-movie | someotherprogram</code>
   but might not work reliably.
</ul>
<hr />
<h2>libgphoto2 2.4.10</h2>

This is a 2.4 release branch update.

<h3>libgphoto2</h3>
<ul>
<li> Translation updates (polish, vietnamese).
<li> The "usb:" generic matcher entry is not reported anymore.
     Auto detection will now always return "usb:XXX,YYY" and "usb:AAA,BBB" values.

     You can still pass "usb:" in.

<li> The generated UDEV rules for version 136 and later have been changed:
     <ul>
     <li>PTP class is shortcut to avoid 1000 entries to be evaluated for the common camera case.
     <li>USB Mass Storage is now skipped and not tagged as gphoto supported.
        This should avoid confuse users with MTP players in dual mode.

       (Done just for the cameras and MTP players, not for the picture frame drivers).
      </ul>
</ul>

<h3>st2205</h3>
<ul>
 <li> Link iconv (MacOS build fix)
 <li> "delete all files" implemented.
</ul>

<h3>ax203</h3>
<ul>
 <li> Various improvements and bug fixes
 <li> new compression method supported for ax206
</ul>

<h3>ptp2</h3>
<ul>
 <li> New PTP event handling added.
      This might have caused some instabilities in capture code.

 <li> Fixed EOS capture to card waiting 1 minute bug
 <li> Fixed EOS capture "no focus" waiting 1 minute bug
 <li> EOS "eosviewfinder" enable/disable option.
 <li> Pass up more EOS events via wait_for_event (property changes, and all unknown events).
 <li> EOS Viewfinder Zoom Level and Position added
 <li> Fixed setting multiple configuration values at once.
 <li> Handle MTP -&gt; Vendor id mapping for PTP/IP cameras.
 <li> Lots of bug fixes.
 <li> Added new IDS:
      Kodak Z950
      Sony DSC-S370
      Nikon CoolPix 7600, L110
      Panasonic FZ38, DMC-GF1 (only download support), 
      Canon PowerShot D10, SX120 IS
      Fuji FinePix F60fd, F70 EXR, S1800, S5800
      Pentax Optio W90
</ul>

<h3>sierra</h3>
<ul>
 <li> Added Olympus E-520
</ul>

<h3>canon</h3>
<ul>
 <li> ability to read and set "shooting mode".
</ul>

<h3>digigr8</h3>
<ul>
 <li> merged from TRUNK: new camera "Stop &amp; Shop 87096", some cleanups and bug fixes
</ul>

<h3>jl2005c</h3>
<ul>
 <li> Decompression decoded and driver now working. Enabled by default now.
</ul>

<h3>libgphoto2_port/usbscsi</h3>
<ul>
 <li> Check for scsi/sg.h and use it only if present (MacOS build fix)
</ul>

<h3>libgphoto2_port/usb</h3>
<ul>
 <li> Do not filter out "usb:XXX,YYY" ... but have both usb: and
      usb:XXX,YYY for now.
</ul>

<hr />
<h2>gphoto2 2.4.9</h2>

<ul>
<li>Capture main event loop rewritten to always use wait event to also support multiple image captures. (JPEG+RAW)
<li>Fixed various bugs and memory leaks.
<li>Translation updates.
</ul>

<hr />
<h2>libgphoto2 2.4.9</h2>
This is a 2.4 release branch update.

<h3>ptp2 driver</h3>
<ul>
<li> Fixed EOS viewfinder capture speed (2 images/s -&gt; 20 i/s)
<li> EOS event handling cleaned up, so that we can also have
     dual image capture (RAW+JPEG).
<li> New Canon EOS properties: autoexposuremode, cameraoutput, evfmode, uilock.
<li> New Nikon property: exposuredelaymode
<li> Fixed a Canon Powershot configuration bug that caused hangs.
<li> Fixed a Nikon Coolpix configuration bug that caused hangs.
<li> Fixed shutterspeed setting to be more generic.
<li> New IDs added:
     <ul>
     <li>Nikon Coolpix 8800, P6000, L20, L19
     <li>Panasonic FS62
     <li>Olympus FE4000/X920/X925, 
     <li>Canon EOS 550D
     <li>Canon Powershot A2100IS, SD970IS, SX20IS, IXUS 120IS
     <li>Fuji FinePix S1500, Z35, S2500HD
     <li>Apple iPhone 3GS
     </ul>
<li> Some bugs fixed, some memory leaks closed.
<li> music-players.h merged from libmtp, bringing new MTP devices.
</ul>

<h3>ST2205 Driver</h3>
New Pictureframe driver from Hans de Goede. st2205 based frames present
themselves as a regular usb mass storage device, but cannot be used
as a normal disk! Communication with the device happens by a special
protocol which consist of reading / writing sectors of the disk at
certain magic offsets. Also included is a "usbdiskdirect" port driver,
which allows the direct sector access the camlib for these devices needs.

<h3>AX203 Driver</h3>
New Pictureframe driver from Hans de Goede. ax203 based frames present 
themselves as a usb mass storage cdrom, which contains the windows
software. Communication with the device happens by issuing special
(custom) scsi commands. Also included is a "usbscsi" port driver,      
which allows sending the custom scsi commands.

Note that if your ax203 frame has a usb-id of 1908:1315, you need to
tell Linux not to touch the HID device this version also presents
in its USB descriptor. To do this add the following on the linux kernel
cmdline: "usbhid.quirks=0x1908:0x1315:0x4"

<h3>digita</h3>
Made to work again hopefully after breakage due to filesystem changes.
<hr />
<h2>gphoto2 2.4.8</h2>

<ul>
<li>Output CAPTURECOMPLETE on waitevent
<li>On --filename "foo/bar/berk.jpg" create subdirectories if not yet present.
<li>New shell command: capture-preview
<li>Added Bulb Mode in interval capture with -B / --bulb <seconds>
</ul>

<hr />
<h2>libgphoto2 2.4.8</h2>

This is a 2.4 release branch update.

<h3>libgphoto2</h3>
<ul>
<li>Updated translations.
<li>Added read-only flag for Widgets. gp_widget_set_readonly / gp_widget_get_readonly.
<li>GP_EVENT_CAPTURE_COMPLETE event added from trunk.
<li>Some bugfixes.
</ul>

<h3>ptp2</h3>
<ul>
<li>New USB IDs for cameras:
    <ul>
    <li>Kodak Z915
    <li>Nikon CoolPix S220, S225,
    <li>Nikon DSLR D5000, D3000, D300s
    <li>Canon PowerShot SD770 IS, A580, SD1200, IXUS 95 IS, G11, IXY 220IS, SD940IS
    <li>Canon EOS 7D
    <li>Fuji S5 Pro
    <li>Sea &amp; Sea 2G
    <li>Also merged new libmtp deviceids.
    </ul>
<li>Fuji S5 Pro capture support.
<li>Bugfixes in Canon EOS preview code.
<li>Fixed NIKON DSLR shutterspeed not able to set bug.
<li>Nikon error decoding.
<li>Several Canon EOS configuration and capture additions and fixes, focus pulling.
<li>PTP protocol stability improvements.
<li>Lots of bugfixes.
</ul>

<h3>sierra</h3>
<ul>
<li>restrict list of choices for Nikon Coolpix 4300
</ul>

<h3>directory</h3>
<ul>
<li>Merged from TRUNK to gain the good stuff.
</ul>

<h3>libgphoto2_port/usb</h3>
<ul>
<li>Updated translations.
<li>Check for MTP devices by string descriptor first and by OSD later.
</ul>



<hr />
<h2>gphoto2 2.4.7</h2>

<ul>
<li>New cmdline options: --set-config-index and --set-config-value
   to avoid ambiguity of the --set-config supporting both modes.
<li>--wait-event can take "5s" as argument for 5 seconds of event taking
<li>added --wait-event-and-download=x (same as --wait-event but with download)
<li>New shell commands:<ul>
	   <li>wait-event (events or seconds)
	   <li>wait-event-and-download (events or seconds)
	   <li>capture-tethered 
	   <li>set-config-index entry=choiceindex
	   <li>set-config-value entry=value
	   </ul>
<li>Enhanced --quietness.
<li>Added AC_SYS_LARGEFILE, enabling support to download files > 2GB.
<li>Updated translations.
<li>Various bugfixes.
</ul>

<hr/>

<h2>libgphoto2 2.4.7</h2>

This is a 2.4 release branch update.

<h3>libgphoto2</h3>
<ul>
<li>Translation updates from translationproject.org.
<li>Widget and choice lists now dynamic, to be able to create longer ones.
<li>3rd generation UDEV rules emission, now able to emit "post HAL"
    UDEV rules.
     <br>
    print-camera-list udev-rules version 136 &gt; /lib/udev/rules.d/40-libgphoto2.rules
  
<li>Dsabled LRU of images. Not really useful in times of USB 2.0,
    aso disabled by at least Debian und Ubuntu already.
</ul>

<h3>libgphoto2_port / USB</h3>
<ul>
<li>If we detached a USB driver, reattach it on close.
    This allows using e.g. cheap camera as both webcam with in-kernel
    driver and still camera with libgphoto2.
</ul>
<h3>PTP2 driver:</h3>
<ul>
<li>Renamed various configuration options and changed values to
    match a unified model. Some common names have changed:
     <ul>
     <li> owner-&gt;ownername
     <li> exptime-&gt;shutterspeed
     <li> eos-* -&gt; non-eos prefixed variants
     <li> etc.
     </ul>
     You will need to review configuration setting code if you have any.

<li>Create config submenus /actions for action triggers and /status for
    read-only values, moved stuff there.

<li>New IDs:
	<ul>
   	<li>Kodak M863
	<li>Canon Digital IXUS 110IS, IXUS 100IS, Powershot SX200IS, SD780 IS, A1100IS
	<li>Canon EOS 500D
	<li>Fuji Finepix F200 EXR
	<li>Apple iPod Touch first generation
	</ul>


<li>Lots of Canon EOS capture improvements, for card capture, for LiveView,
    and for property setting. More properties are now possible.
<li>Canon EOS Bulb mode support (available in newer canons).
    --set-config bulb=(0|1)

<li>Fixed Nikon DSC shutterspeed setting (also for times &lt; 1/1000)
<li>Enable Viewfinder on demand for Canon Powershot, not for all capture things.
<li>Generic PTP Property Get/Set in the configuration handling.
<li>Decode more Nikon DSC properties (for D90 now nearly complete).
<li>Turned several PTP generic commands to macros to reduce number of functions.
<li>MTP player list synced with libmtp 1.0.
<li>Lots of bugfixes.
</ul>

<h3>Canon driver:</h3>
<ul>
<li>Renamed various configuration options and changed values to
    match a unified model.
</ul>
<hr/>
<h2>libgphoto2 2.4.6</h2>

<h3>PTP2 driver</h3>
<ul>
<li> Fixed Nikon DSLR capture in LiveView mode (like gtkam uses).
<li> More Canon EOS stuff decoded, added experimental "capturetarget" support
     for EOS.
<li> Canon EOS LiveView support (experimental, reported working for EOS 1000D).
<li> Added new USB ids:
	<ul>
	<li>Kodak V803, M1063
	<li>Canon PowerShot A650IS, SD990 (aka IXUS 980IS), SD880IS, A480
	<li>Canon EOS 50D
	<li>Fuji FinePix S1000fd
	</ul>
<li> Retrieve filedates again from PTP objects.
<li> speedup: Do not list files on / (there aren't any).
<li> Bugfixes.
</ul>

<h3>Canon driver</h3>
<ul>
<li> Support Exposure Bias setting.
<li> More shutterspeeds.
</ul>

<h3>libgphoto2</h3>
<ul>
<li> Fixed a problem during file retrieval which causes Canon Normal 
     --capture-image-and-download errors, handle CR2 and CRW mimetypes.
<li> Fixed ordering of filelists again that broke the digigr8 driver.
<li> Translation updates.
</ul>

<h3>digigr8</h3>
<ul>
<li> Added a new version of the disney pix micro.
</ul>

<hr />

<h2>gphoto2 2.4.5</h2>
<ul>
<li>translation updates
<li>allow ctrl-c to abort tethered capture
</ul>
<h2>libgphoto2 2.4.5</h2>

This is a 2.4 release branch update.

<h3>PTP2 driver</h3>
<ul>
<li>Increased timeout for Canon Viewfinder enable.
<li>Fixed intial Canon timeout (0.5 -&gt; 1.5 seconds), was too small
    for some Canons.
<li>Canon EOS capture mode and tethered mode bugfixes.
<li>Nikon DSLR LiveView support, with Autofocus and ManualFocus Drive possibility.
<li>Nikon tethered capture fixes.
<li>New cameras listed: <ul>
   <li>         Nikon CoolPix P50, S60
   <li>         Canon Digital IXUS 85
   <li>         Canon PowerShot A740, G10,
   <li>         Canon EOS 5D Mark II
   </ul>
<li>Merged new IDs of Music Players from libmtp.
<li>Lots of bugfixes.
</ul>

<h3>KODAK DC240</h3>
<ul>
<li>Made driver work again.
<li>Cleanups
</ul>

<h3>libgphoto2</h3>
<ul>
<li>rewrote gphoto2-filesys.c to be dynamic and fix LRU problems.
    (backport from TRUNK)
<li>Translation updates.
<li>backported Gentoo "if just canon driver selected, auto-select ptp2 driver"
    usability fix.
</ul>
<h3>libgphoto2_port</h3>
<ul>
<li>added --enable/--disable configure options for: disk, serial, ptpip
<li>added --with/--without configure options for: bonjour, hal
<li>Translation updates.
</ul>
<hr/>
<h2>gphoto2 2.4.4</h2>

This is a 2.4 release branch update.

<ul>
<li>Updated translations.
<li>SIGUSR2 added ... "exit interval capture after next shot"
</ul>

<h2>libgphoto2 2.4.4</h2>

This is a 2.4 release branch update.

<ul>
<li>
<h3>libgphoto2</h3>
	<ul>
	<li>	Updated translations from translationproject.org
	<li>	Bugfixes
	</ul>
</ul>

<h3>PTP2 driver</h3>
<ul>
<li> Developed in parallel with TRUNK.
<li> Only retrieve and initialize the ptp filesystem if needed
     (this will give speed ups for config operations, basic
      init and summary.)
<li> Export the hidden vendor specific properties of the current Nikon DSLRs.
     (over a hundred with all camera configuration details...)
     (D80, D90, D300, D700, D40x got, D200 guessed)
<li> Lots of new Nikon DSLR and Canon Powershot properties implemented,
     both printed in summary and available for config functions querying
     and/or setting.
<li> Query and Set image protection flags (actually used by digikam).
<li> Lots of bugfixes and changes in Canon and Nikon specific capture routines.
<li> Some defines for PTP 1.1 added. Will have to wait for implementation until
     a device gets available.
<li> New cameras added:<ul>
     <li>Kodak C913
     <li>Nikon D90
     <li>Canon Digital IXUS 960IS, EOS 1000D, SD1100 IS, SX10 IS, SX110 IS
     <li>Fuji FinePix A920, F100fd, S200HD
     <li>Apple iPod Touch (just saved screenshots and uploaded images)
     </ul>
<li> PTP v1.1 defines added (implementation will start once devices are available)
<li> Synced MTP device list from libmtp (0.3.5 level).
<li> Lots of bugfixes.
</ul>

<h3>jl2005c</h3>
<ul>
<li> Experimental driver for jl2005c based cameras added.
     Can only retrieve raw images currently, no viewable images yet.
     Not builtin by default. ./configure --with-drivers=all,jl2005c
</ul>

<h3>libgphoto2_port</h3>
<ul>
<li> Updated translations from translationproject.org

<li> Serial driver: do not lock device during probe to reduce startup
     time.
</ul>

<hr>
<h2>gphoto2 2.4.3</h2>

<ul>
<li>Updated translations.
<li>For multiple cameras, specifying with --port usb:xxx,yyy is now
    sufficient (previously needed --port and --camera).
</ul>

<h2>libgphoto2 2.4.3</h2>

This is a 2.4 release branch update.

<h3>libgphoto2</h3>
<ul>
<li>Adaptive Homogeneity-Directed Bayer array conversion added, used
    in several camera lib drivers.
<li>Translation updates for various languages.
<li>libtool 2.x build fixes
<li>Various MacOS X compile fixes again.
<li>gp-byteorder.m4 fixes for newer glibcs.
</ul>

<h3>Example programs</h3>
<ul>
<li>Added some basic library usage example programs and helpers.
</ul>

<h3>PTP2 driver</h3>
<ul>
<li>Merged camlib from TRUNK.
<li>Tethered Capture support for Canon EOS 40D, 400D, 450D.
<li>Always handle "no directory linking to /" problem.
<li>Disable more Panasonic cameras (product id 0x2372 is always mass storage)
<li>Some MTP fixes, lots of new MTP devices.
<li>Fixed canon viewfinder issues on Canon PowerShot SX100IS.
<li>Fixed a ptp property packing issue exposed by newer Nikons.
<li>Added new devices:
	<ul>
        <li>Kodak M893 IS, C813
        <li>Nikon CoolPix L16, CoolPix 8700, DSC 700
        <li>Canon EOS 1D Mark III, IXUS 90IS, EOS 50D
        <li>Apple iPhone 3G
	</ul>
</ul>

<h3>Canon driver</h3>
<ul>
<li>Fixed some unlock keys problem for EOS cameras.
<li>Moved over several PTP2 supported cameras to the PTP2 driver only.
</ul>

<h3>Sierra driver</h3>
<ul>
<li>Implemented basic Storage Information function.
<li>Fixes for big endian or 64bit architectures by fixing struct packing.
</ul>

<h3>smal driver</h3>
<ul>
<li>Added support for Creative CardCam.
</ul>

<h3>sq905 driver</h3>
<ul>
<li>Updated postprocessing, by using "AHD" bayering and new gamma methods.
<li>Bugfixes.
</ul>

<h3>stv0680</h3>
<ul>
<li>Storage information function.
</ul>

<h3>digigr8, mars, sonix drivers</h3>
<ul>
<li>Updated postprocessing, by using "AHD" bayering and new gamma methods.
</ul>
 
<h3>jl2005a driver</h3>
<ul>
<li>Imported from TRUNK, for new small factor cameras.
	<ul>
        <li>American Idol Keychain Camera
        <li>NogaNet TDC-15
	</ul>
</ul>


<hr>

<h2>gphoto2 2.4.2</h2>

<ul>
<li>Updated translations.
<li>Major change in behaviour:<br>
   --capture-image split into:
   <ul>
   <li>  --capture-image                : Just captures image, no download.
   <li>  --capture-image-and-download   : captures image and downloads it.
   </ul>
</ul>

<h2>libgphoto2 2.4.2</h2>

<h3>libgphoto2</h3>
<ul>
<li> Camera abilities list sorting now uses qsort(),
     bringing startup speedups by seconds. (0.4 seconds on 2GHz machine).

<li> On large files, do not try to retrieve thumbnails.

<li> Updated lots of translations.
</ul>
<h3>PTP2 driver</h3>
<ul>
<li> Full merge of TRUNK ptp2 camlib.

<li> Lots of new IDs added. Also changed MTP id handling to share devices
     with current libmtp.
<li> Canon now can capture to both CF/SD Card and internal memory
     with extract/retracting the lens. "capturetarget" config option
     determines which ones used.

<li> EOS capture support made working with newer Canon EOS models,
     now reported working for EOS 400D, 450D, 40D.

<li> Handle MTP to Canon/Nikon vendor id transitions better.
<li> Download cancellation support.
<li> Handle canon cameras with shorter timeouts on startup (hopefully
     does not break) to avoid very long second startup delays.

<li> Lots of bugfixes.
</ul>

<h3>Canon driver</h3>
<ul>
<li> Configuration of Flash, Beep and Zoom added.
<li> Enable/disable remote mode only once per session (on demand)
<li> Fixed a CR2 thumbnail download problem.
<li> Fixed a THM download problem (for movies).
<li> Moved some more cameras over to PTP2 driver.
</ul>
<h3>Topfield driver</h3>
<ul>
<li> New driver for Topfield PVR5000 device(s).
</ul>

<h3>Sony DSC F1 (old serial) driver</h3>
<ul>
<li>Merged bugfixes from TRUNK, working now.
</ul>
<hr>
<h2>libgphoto2 2.4.1</h2>

<h3>Package / System integration:</h3>
<ul>
<li> HAL FDI files now use "info.subsystem" instead of "info.bus", required
     by hal after March 2008.

<li> Suppress another Olympus camera in FDI file that is better of done
     using Mass Storage only.
</ul>
<h3>libgphoto2_port:</h3>
<ul>
<li> Suppress more known network filesystems in "disk" autodetection
<li> disabled usb_reset for Canon cameras in "usb", broke EOS cameras.
</ul>

<h3>PTP2 driver:</h3>
<ul>
<li> Merged all new Camera IDs from TRUNK.
<li> Configuration bugfix for multiple options with the same name.
<li> Capture bugfix for Nikon Coolpix
<li> Various small bugfixes.
</ul>

<h3>Canon driver:</h3>
<ul>
<li> Increased the event timeout, so operations work again.
<li> Fixed a bug in interval capture
<li> some additional configuration values for newer cameras
</ul>

<h3>Mars driver:</h3>
<ul>
<li> Synced with SVN TRUNK (1:1 copy).
	<ul>
        <li> Better whitebalance postprocessing
        <li> Camera ids added
        <li> Decompression fixes
	</ul>
</ul>

<h3>Digigr8 driver:</h3>
<ul>
<li> Synced with SVN TRUNK (1:1 copy).
	<ul>
        <li> bugfixes
	</ul>
</ul>

<h3>Sonix driver:</h3>
<ul>
<li> Synced with SVN TRUNK (1:1 copy).
	<ul>
        <li> bugfixes
	</ul>
</ul>

<h2>gphoto2 2.4.1</h2>
<ul>
<li> Made capture preview that saves to files work
<li> capture-image has no arguments
<li> version check for libgphoto2 fixed
<li> cs,da,it,vi translations updated
</ul>
<hr>
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
