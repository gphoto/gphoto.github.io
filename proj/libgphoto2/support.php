<?
	require ("../../include.php");

	printHeader ("Projects :: libgphoto2 :: supported cameras", "", 1);

	printMenu ("proj");
?>

<table cellpadding="3" cellspacing="3" witdh="100%">
<tr class="text"><td>
<p>
On this page, you find list of the supported cameras as of the 
current release.
</p>
<p>
Support for additional cameras may be in the current 
libgphoto2 CVS HEAD code.
They will be added to the next release. 
A complete (but unofficial) list of the cameras supported in 
libgphoto2 CVS HEAD can be found on 
<a href="http://n-dimensional.de/projects/digicam/software/snapshots/SUPPORTED-CAMERAS">n-dimensional.de</a>.
</p>
<p>If your camera is neither supported in the current release nor in current CVS HEAD, it is possible that
<ul>
<li>it is an old camera for which the original <a href="/proj/gphoto/">gPhoto</a> driver has not been ported yet (mostly due to lack of demand)</li>
<li>it is a new camera for which there is no support at all</li>
</ul>
See the 
<a href="http://www.teaser.fr/~hfiguiere/linux/digicam.html">Digital
Camera Support for UN*X</a> page for details about just any camera.
</p>

<pre>
========================================================================
Sun Oct 19 17:11:18 UTC 2003
========================================================================
gphoto2 2.1.3

Copyright (c) 2000-2003 Lutz Mueller and others

gphoto2 comes with NO WARRANTY, to the extent permitted by law. You may
redistribute copies of gphoto2 under the terms of the GNU General Public
License. For more information about these matters, see the files named COPYING.

This version of gphoto2 is using the following software versions and options:
gphoto2           2.1.3        gcc, popt, exif, cdk, aa, jpeg, readline
libgphoto2        2.1.3        gcc, EXIF, no ltdl, /proc/meminfo
libgphoto2_port   0.5.1        gcc, USB, serial without locking, no ltdl
========================================================================
Number of supported cameras: 414
Supported cameras:
	"AEG Snap 300"
	"Agfa ePhoto 1280"
	"Agfa ePhoto 1680"
	"Agfa ePhoto 307"
	"Agfa ePhoto 780"
	"Agfa ePhoto 780C"
	"Agfa ePhoto CL18"
	"Agfa ePhoto CL20" (EXPERIMENTAL)
	"Aiptek 1.3 mega PocketCam" (TESTING)
	"Aiptek PalmCam Trio"
	"Aiptek Pencam" (TESTING)
	"Aiptek PenCam Trio"
	"Aiptek Smart Megacam" (TESTING)
	"Apple QuickTake 200"
	"Apple QuickTake 200"
	"Argus DC-100"
	"Argus DC-1500"
	"Argus DC-1510"
	"Argus DC-2000"
	"Argus DC-2200"
	"Barbie"
	"Benq DC1300" (TESTING)
	"Canon Digital IXUS"
	"Canon Digital IXUS 2 (PTP mode)"
	"Canon Digital IXUS 300"
	"Canon Digital IXUS 330"
	"Canon Digital IXUS 400"
	"Canon Digital IXUS 400 (PTP mode)"
	"Canon Digital IXUS II (normal mode)"
	"Canon DIGITAL IXUS v"
	"Canon Digital IXUS v2"
	"Canon Digital IXUS v3 (normal mode)"
	"Canon Digital IXUS v3 (PTP mode)"
	"Canon Digital unknown 3"
	"Canon EOS 10D"
	"Canon EOS 300D (normal mode)"
	"Canon EOS 300D (PTP mode)"
	"Canon EOS D30"
	"Canon EOS D60"
	"Canon EOS Digital Rebel (normal mode)"
	"Canon EOS Digital Rebel (PTP mode)"
	"Canon EOS Kiss Digital (normal mode)"
	"Canon EOS Kiss Digital (PTP mode)"
	"Canon IXY DIGITAL"
	"Canon IXY DIGITAL 300"
	"Canon MV630i"
	"Canon MVX2i"
	"Canon Optura 200 MC"
	"Canon PowerShot A10"
	"Canon PowerShot A100"
	"Canon PowerShot A20"
	"Canon PowerShot A200"
	"Canon PowerShot A30"
	"Canon PowerShot A40"
	"Canon PowerShot A5"
	"Canon PowerShot A5 Zoom"
	"Canon PowerShot A50"
	"Canon PowerShot A60"
	"Canon PowerShot A60 (PTP)"
	"Canon PowerShot A70"
	"Canon PowerShot A70 (PTP)"
	"Canon PowerShot A80 (normal mode)"
	"Canon PowerShot A80 (PTP)"
	"Canon PowerShot G1"
	"Canon PowerShot G2"
	"Canon PowerShot G3 (normal mode)"
	"Canon PowerShot G3 (PTP mode)"
	"Canon PowerShot G5 (PTP mode)"
	"Canon PowerShot Pro70"
	"Canon PowerShot Pro90 IS"
	"Canon PowerShot S10"
	"Canon PowerShot S100"
	"Canon PowerShot S110"
	"Canon PowerShot S20"
	"Canon PowerShot S200"
	"Canon PowerShot S230 (normal mode)"
	"Canon PowerShot S230 (PTP mode)"
	"Canon PowerShot S30"
	"Canon PowerShot S300"
	"Canon PowerShot S40"
	"Canon PowerShot S400"
	"Canon PowerShot S45 (normal mode)"
	"Canon PowerShot S45 (PTP mode)"
	"Canon PowerShot SD100 (normal mode)"
	"Canon PowerShot unknown 1"
	"Canon PowerShot unknown 2"
	"Canon PowerShot unknown 4"
	"Canon PowerShot unknown 5"
	"Casio LV 10" (EXPERIMENTAL)
	"Casio QV10" (EXPERIMENTAL)
	"Casio QV100" (EXPERIMENTAL)
	"Casio QV10A" (EXPERIMENTAL)
	"Casio QV300" (EXPERIMENTAL)
	"Casio QV70" (EXPERIMENTAL)
	"Casio QV700" (EXPERIMENTAL)
	"Casio QV770" (EXPERIMENTAL)
	"Che-ez Snap" (EXPERIMENTAL)
	"Chinon ES-1000"
	"Concord Eye-Q Easy" (EXPERIMENTAL)
	"Concord EyeQ 4330" (EXPERIMENTAL)
	"CoolCam CP086"
	"Creative PC-CAM 300" (EXPERIMENTAL)
	"Creative PC-CAM600" (EXPERIMENTAL)
	"D-Link DSC 350+" (TESTING)
	"D-Link DSC 350F" (TESTING)
	"Digitaldream DIGITAL 2000"
	"DigitalDream l'elegante"
	"DigitalDream l'elite"
	"DigitalDream l'espion"
	"DigitalDream l'espion xtra" (EXPERIMENTAL)
	"DigitalDream l'esprit"
	"DigitalDream la ronde"
	"Directory Browse"
	"Dynatron Dynacam 800"
	"Epson PhotoPC 3000z"
	"Epson PhotoPC 500"
	"Epson PhotoPC 550"
	"Epson PhotoPC 600"
	"Epson PhotoPC 650"
	"Epson PhotoPC 700"
	"Epson PhotoPC 800"
	"Epson PhotoPC 850z"
	"Fuji Axia Eyeplate" (EXPERIMENTAL)
	"Fuji Axia Slimshot" (EXPERIMENTAL)
	"Fuji DS-7"
	"Fuji DX-10"
	"Fuji DX-5"
	"Fuji DX-7"
	"Fuji IX-1"
	"Fuji MX-1200"
	"Fuji MX-1700"
	"Fuji MX-2700"
	"Fuji MX-2900"
	"Fuji MX-500"
	"Fuji MX-600"
	"Fuji MX-700"
	"FujiFilm @xia ix-100"
	"Gear to go" (EXPERIMENTAL)
	"Generic SoundVision Clarity2"
	"GrandTek ScopeCam" (TESTING)
	"GTW Electronics" (EXPERIMENTAL)
	"Hawking DC120 Pocketcam"
	"Hot Wheels"
	"HP PhotoSmart"
	"HP PhotoSmart 120 (PTP mode)"
	"HP PhotoSmart 318 (PTP mode)"
	"HP PhotoSmart 320 (PTP mode)"
	"HP PhotoSmart 43x (PTP mode)"
	"HP PhotoSmart 612 (PTP mode)"
	"HP PhotoSmart 620 (PTP mode)"
	"HP PhotoSmart 715 (PTP mode)"
	"HP PhotoSmart 720 (PTP mode)"
	"HP PhotoSmart 735 (PTP mode)"
	"HP PhotoSmart 812 (PTP mode)"
	"HP PhotoSmart 850 (PTP mode)"
	"HP PhotoSmart 935 (PTP mode)"
	"HP PhotoSmart C20"
	"HP PhotoSmart C200"
	"HP PhotoSmart C30"
	"HP PhotoSmart C500/618/912"
	"IOMagic MagicImage 400"
	"IOMagic MagicImage 420"
	"Ixla DualCam 640" (EXPERIMENTAL)
	"Jenoptik JD 350" (EXPERIMENTAL)
	"Jenoptik JD-3300z3" (EXPERIMENTAL)
	"Jenoptik JD-4100z3" (EXPERIMENTAL)
	"Jenoptik JD11"
	"Jenoptik JD12 800ff"
	"Jenoptik JD350 entrance" (TESTING)
	"Jenoptik JD350 video" (TESTING)
	"KBGear JamCam"
	"Kodak CX4200"
	"Kodak CX4210"
	"Kodak CX4230"
	"Kodak CX4300"
	"Kodak CX6200"
	"Kodak CX6230"
	"Kodak CX6330"
	"Kodak DC120"
	"Kodak DC210" (EXPERIMENTAL)
	"Kodak DC220"
	"Kodak DC240"
	"Kodak DC240 (PTP mode)"
	"Kodak DC260"
	"Kodak DC265"
	"Kodak DC280"
	"Kodak DC290"
	"Kodak DC3200"
	"Kodak DC3400"
	"Kodak DC4800"
	"Kodak DC5000"
	"Kodak DX3215"
	"Kodak DX3500"
	"Kodak DX3600"
	"Kodak DX3700"
	"Kodak DX3900"
	"Kodak DX4330"
	"Kodak DX4530"
	"Kodak DX4900"
	"Kodak DX6340"
	"Kodak DX6440"
	"Kodak DX6490"
	"Kodak LS420"
	"Kodak LS443"
	"Kodak LS663"
	"Kodak MC3"
	"Konica e-mini"
	"Konica Q-EZ"
	"Konica Q-M100"
	"Konica Q-M100V"
	"Konica Q-M150" (EXPERIMENTAL)
	"Konica Q-M200"
	"Largan Lmini" (EXPERIMENTAL)
	"Leica Digilux Zoom"
	"Logitech Pocket Digital" (EXPERIMENTAL)
	"Maginon SX330z" (EXPERIMENTAL)
	"Magpix B350" (EXPERIMENTAL)
	"Maxell Max Pocket" (TESTING)
	"Media-Tech mt-406"
	"Medion MD 5319" (TESTING)
	"Medion MD 6000" (EXPERIMENTAL)
	"Medion MD 9700" (EXPERIMENTAL)
	"Micromaxx Digital Camera"
	"Minolta Dimage V"
	"Minton S-Cam F5" (TESTING)
	"Mitek CD10" (EXPERIMENTAL)
	"Mitek CD30P" (EXPERIMENTAL)
	"Mustek gSmart 300" (EXPERIMENTAL)
	"Mustek gSmart 350" (EXPERIMENTAL)
	"Mustek gSmart mini" (TESTING)
	"Mustek gSmart mini 2" (TESTING)
	"Mustek gSmart mini 3" (TESTING)
	"Mustek VDC-3500"
	"Nick Click"
	"Nikon CoolPix 100"
	"Nikon Coolpix 2000 (PTP mode)"
	"Nikon Coolpix 2100 (PTP mode)"
	"Nikon Coolpix 2500 (PTP mode)"
	"Nikon CoolPix 300"
	"Nikon Coolpix 3100 (PTP mode)"
	"Nikon Coolpix 3500 (PTP mode)"
	"Nikon Coolpix 4300 (PTP mode)"
	"Nikon CoolPix 4500 (PTP mode)"
	"Nikon Coolpix 5000 (PTP mode)"
	"Nikon Coolpix 5400 (PTP mode)"
	"Nikon Coolpix 5700 (PTP mode)"
	"Nikon CoolPix 600"
	"Nikon CoolPix 700"
	"Nikon CoolPix 800"
	"Nikon CoolPix 880"
	"Nikon Coolpix 885 (PTP mode)"
	"Nikon CoolPix 900"
	"Nikon CoolPix 900S"
	"Nikon CoolPix 910"
	"Nikon CoolPix 950"
	"Nikon CoolPix 950S"
	"Nikon CoolPix 990"
	"Nikon CoolPix 995"
	"Nikon Coolpix SQ (PTP mode)"
	"Nikon DSC D100 (PTP mode)"
	"nisis Quickpix Qp3" (TESTING)
	"Novatech Digital Camera CC30" (EXPERIMENTAL)
	"Olympus C-1000L"
	"Olympus C-1400L"
	"Olympus C-1400XL"
	"Olympus C-2000Z"
	"Olympus C-2020Z"
	"Olympus C-2040Z"
	"Olympus C-2100UZ"
	"Olympus C-2500L"
	"Olympus C-3000Z"
	"Olympus C-3020Z"
	"Olympus C-3030Z"
	"Olympus C-3040Z"
	"Olympus C-400"
	"Olympus C-400L"
	"Olympus C-4040Z"
	"Olympus C-410"
	"Olympus C-410L"
	"Olympus C-420"
	"Olympus C-420L"
	"Olympus C-5050Z"
	"Olympus C-700UZ"
	"Olympus C-800"
	"Olympus C-800L"
	"Olympus C-820"
	"Olympus C-820L"
	"Olympus C-830L"
	"Olympus C-840L"
	"Olympus C-860L"
	"Olympus C-900 Zoom"
	"Olympus C-900L Zoom"
	"Olympus D-100Z"
	"Olympus D-200L"
	"Olympus D-220L"
	"Olympus D-300L"
	"Olympus D-320L"
	"Olympus D-330R"
	"Olympus D-340L"
	"Olympus D-340R"
	"Olympus D-360L"
	"Olympus D-400L Zoom"
	"Olympus D-450Z"
	"Olympus D-460Z"
	"Olympus D-500L"
	"Olympus D-600L"
	"Olympus D-600XL"
	"Olympus D-620L"
	"Oregon Scientific DShot II"
	"Oregon Scientific DShot III"
	"Panasonic Coolshot KXL-600A"
	"Panasonic Coolshot KXL-601A"
	"Panasonic Coolshot NV-DCF5E"
	"Panasonic DC1000"
	"Panasonic DC1580"
	"Panasonic PV-L691"
	"Panasonic PV-L859"
	"Pencam TEVION MD 9456"
	"Philips ESP2" (EXPERIMENTAL)
	"Philips ESP50" (EXPERIMENTAL)
	"Philips ESP60" (EXPERIMENTAL)
	"Philips ESP70" (EXPERIMENTAL)
	"Philips ESP80" (EXPERIMENTAL)
	"Philips ESP80SXG" (EXPERIMENTAL)
	"Phoebe Smartcam"
	"PockCam" (EXPERIMENTAL)
	"Polaroid 640SE" (EXPERIMENTAL)
	"Polaroid DC700"
	"Polaroid Fun Flash 640" (EXPERIMENTAL)
	"Polaroid Fun! 320" (EXPERIMENTAL)
	"Polaroid PDC 2300Z"
	"Polaroid PDC 640"
	"Praktica QD500"
	"Praktica QD800"
	"Pretec dc530" (EXPERIMENTAL)
	"Quark Probe 99"
	"QuickPix QP1"
	"Radioshack Flatfoto" (EXPERIMENTAL)
	"RCA CDS1005" (EXPERIMENTAL)
	"Relisys Dimera 3500"
	"Ricoh Caplio G3" (TESTING)
	"Ricoh Caplio RR30" (TESTING)
	"Ricoh RDC-1" (EXPERIMENTAL)
	"Ricoh RDC-100G" (EXPERIMENTAL)
	"Ricoh RDC-2" (EXPERIMENTAL)
	"Ricoh RDC-2E" (EXPERIMENTAL)
	"Ricoh RDC-300" (EXPERIMENTAL)
	"Ricoh RDC-300Z" (EXPERIMENTAL)
	"Ricoh RDC-4200" (EXPERIMENTAL)
	"Ricoh RDC-4300" (EXPERIMENTAL)
	"Ricoh RDC-5000" (EXPERIMENTAL)
	"Samsung digimax 800k"
	"Samsung Kenox SSC-350N"
	"Sanyo DSC-X300"
	"Sanyo DSC-X350"
	"Sanyo VPC-G200"
	"Sanyo VPC-G200EX"
	"Sanyo VPC-G210"
	"Sanyo VPC-G250"
	"ScanHex SX-35" (TESTING)
	"ScanHex SX-35" (TESTING)
	"ScanHex SX-35" (TESTING)
	"ScanHex SX-35" (TESTING)
	"Scott APX 30"
	"Sierra Imaging SD640"
	"SiPix Blink" (EXPERIMENTAL)
	"SiPix Blink 2" (EXPERIMENTAL)
	"SiPix SC2100" (EXPERIMENTAL)
	"SiPix Snap" (EXPERIMENTAL)
	"SiPix Stylecam" (TESTING)
	"SiPix Web2" (EXPERIMENTAL)
	"Skanhex SX-330z" (EXPERIMENTAL)
	"SMaL Ultra-Pocket" (EXPERIMENTAL)
	"So. Show 301" (TESTING)
	"Sony DCR-PC100"
	"Sony DSC-F1" (EXPERIMENTAL)
	"Sony DSC-F55"
	"Sony DSC-F707V (PTP mode)"
	"Sony DSC-P30 (PTP mode)"
	"Sony DSC-P31 (PTP mode)"
	"Sony DSC-P32 (PTP mode)"
	"Sony DSC-P5 (PTP mode)"
	"Sony DSC-P50 (PTP mode)"
	"Sony DSC-S75 (PTP mode)"
	"Sony DSC-S85 (PTP mode)"
	"Sony DSC-V1 (PTP mode)"
	"Sony MSAC-SR1"
	"Sony MVC-CD300 (PTP mode)"
	"Sony TRV-20E"
	"SpyPen Axys"
	"SpyPen Cleo"
	"SpyPen Luxo"
	"SpyPen Memo"
	"SpyPen Xion"
	"SQ chip camera" (EXPERIMENTAL)
	"StarCam CP086"
	"STM USB Dual-mode camera"
	"STV0680"
	"Tiger Fast Flicks"
	"Timlex CP075"
	"Toshiba PDR-M1"
	"Toshiba PDR-M11" (TESTING)
	"Traveler SX330z" (EXPERIMENTAL)
	"Traveler SX410z" (EXPERIMENTAL)
	"Trust DC-3500"
	"Trust Familycam 300" (TESTING)
	"Trust PowerC@m 350FS" (TESTING)
	"Trust Spyc@m 500F FLASH" (TESTING)
	"Typhoon StyloCam" (TESTING)
	"UMAX AstraPen"
	"UMAX AstraPix 320s" (TESTING)
	"USB PTP Class Camera" (TESTING)
	"WWF"
	"Yahoo!Cam" (EXPERIMENTAL)
========================================================================
</pre>
</td></tr>
</table>
<?
	printFooter ();
?>
