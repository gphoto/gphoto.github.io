<?
	require ("../../include.php");

	printHeader ("gPhoto - Projects :: libgphoto2 :: supported cameras", "", 1);

	printMenu ("proj");
?>

<table cellpadding="3" cellspacing="3" witdh="100%">
<tr class="text"><td>
<p>
Here is a list of the supported cameras as of current release.
<pre>
gPhoto (v2.1.0) - Cross-platform digital camera library.
Copyright (C) 2000-2002 Scott Fritzinger and others
Licensed under the Library GNU Public License (LGPL).

Number of supported cameras: 258
Supported cameras:
	"AEG Snap 300" (TESTING)
	"Agfa ePhoto 1280"
	"Agfa ePhoto 1680"
	"Agfa ePhoto 307"
	"Agfa ePhoto 780"
	"Agfa ePhoto 780C"
	"Agfa ePhoto CL18"
	"Aiptek PenCam Trio" (TESTING)
	"Apple QuickTake 200"
	"Apple QuickTake 200"
	"Argus DC-100"
	"Argus DC-1500" (TESTING)
	"Argus DC-2000"
	"Barbie"
	"Canon Digital IXUS"
	"Canon Digital IXUS 300"
	"Canon Digital IXUS 330"
	"Canon DIGITAL IXUS v"
	"Canon Digital IXUS v2"
	"Canon EOS D30"
	"Canon EOS D60"
	"Canon IXY DIGITAL"
	"Canon IXY DIGITAL 300"
	"Canon PowerShot A10"
	"Canon PowerShot A100"
	"Canon PowerShot A20"
	"Canon PowerShot A200"
	"Canon PowerShot A30"
	"Canon PowerShot A40"
	"Canon PowerShot A5 Zoom"
	"Canon PowerShot A50"
	"Canon PowerShot G1"
	"Canon PowerShot G2"
	"Canon PowerShot Pro70"
	"Canon PowerShot Pro90 IS"
	"Canon PowerShot S10"
	"Canon PowerShot S100"
	"Canon PowerShot S110"
	"Canon PowerShot S20"
	"Canon PowerShot S200"
	"Canon PowerShot S30"
	"Canon PowerShot S300"
	"Canon PowerShot S40"
	"Casio QV10" (EXPERIMENTAL)
	"Casio QV100" (EXPERIMENTAL)
	"Casio QV10A" (EXPERIMENTAL)
	"Casio QV300" (EXPERIMENTAL)
	"Casio QV70" (EXPERIMENTAL)
	"Casio QV700" (EXPERIMENTAL)
	"Casio QV770" (EXPERIMENTAL)
	"Chinon ES-1000"
	"Creative PC-CAM600" (EXPERIMENTAL)
	"DE300 Canon Inc."
	"Digitaldream DIGITAL 2000"
	"Directory Browse"
	"Dynatron Dynacam 800"
	"Epson PhotoPC 3000z"
	"Epson PhotoPC 500"
	"Epson PhotoPC 550"
	"Epson PhotoPC 600"
	"Epson PhotoPC 700"
	"Epson PhotoPC 800"
	"Epson PhotoPC 850z"
	"Fuji DS-7"
	"Fuji DX-10"
	"Fuji DX-5"
	"Fuji DX-7"
	"Fuji IX-1" (TESTING)
	"Fuji MX-1200"
	"Fuji MX-1700"
	"Fuji MX-2700"
	"Fuji MX-2900"
	"Fuji MX-500"
	"Fuji MX-600"
	"Fuji MX-700"
	"Hawking DC120 Pocketcam" (TESTING)
	"Hot Wheels"
	"HP PhotoSmart"
	"HP PhotoSmart 318" (TESTING)
	"HP PhotoSmart 612" (TESTING)
	"HP PhotoSmart 715" (TESTING)
	"HP PhotoSmart C20"
	"HP PhotoSmart C200"
	"HP PhotoSmart C30"
	"HP PhotoSmart C500/618/912"
	"IOMagic MagicImage 400" (TESTING)
	"IOMagic MagicImage 420"
	"Jenoptik JD-3300z3" (EXPERIMENTAL)
	"Jenoptik JD11"
	"Jenoptik JD12 800ff"
	"Jenoptik JD350 entrance" (EXPERIMENTAL)
	"KBGear JamCam"
	"Kodak DC-240 (PTP)" (TESTING)
	"Kodak DC-4800" (TESTING)
	"Kodak DC120"
	"Kodak DC220"
	"Kodak DC240"
	"Kodak DC260"
	"Kodak DC265"
	"Kodak DC280"
	"Kodak DC290"
	"Kodak DC3200"
	"Kodak DC3400"
	"Kodak DC5000"
	"Kodak DX-3215" (TESTING)
	"Kodak DX-3500" (TESTING)
	"Kodak DX-3600" (TESTING)
	"Kodak DX-3700" (TESTING)
	"Kodak DX-3900" (TESTING)
	"Kodak DX-4900" (TESTING)
	"Kodak MC3" (TESTING)
	"Konica e-mini" (TESTING)
	"Konica Q-EZ"
	"Konica Q-M100"
	"Konica Q-M100V"
	"Konica Q-M200"
	"l'elegante by DigitalDream" (TESTING)
	"l'espion by DigitalDream" (TESTING)
	"l'esprit by DigitalDream" (TESTING)
	"la ronde by DigitalDream" (TESTING)
	"Largan Lmini" (EXPERIMENTAL)
	"Leica Digilux Zoom"
	"Maginon SX330z" (EXPERIMENTAL)
	"Micromaxx Digital Camera" (TESTING)
	"Minolta Dimage V"
	"Mustek gSmart mini 2" (EXPERIMENTAL)
	"Mustek MDC 800" (EXPERIMENTAL)
	"Mustek VDC-3500"
	"Nick Click"
	"Nikon CoolPix 100"
	"Nikon CoolPix 300"
	"Nikon CoolPix 600"
	"Nikon CoolPix 700"
	"Nikon CoolPix 800"
	"Nikon CoolPix 880"
	"Nikon CoolPix 900"
	"Nikon CoolPix 900S"
	"Nikon CoolPix 910"
	"Nikon CoolPix 950"
	"Nikon CoolPix 950S"
	"Nikon CoolPix 990"
	"Nikon CoolPix 995"
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
	"Panasonic Coolshot KXL-600A"
	"Panasonic Coolshot KXL-601A"
	"Panasonic Coolshot NV-DCF5E"
	"Panasonic DC1000"
	"Panasonic DC1580"
	"Panasonic PV-L691"
	"Panasonic PV-L859"
	"Philips ESP2" (EXPERIMENTAL)
	"Philips ESP50" (EXPERIMENTAL)
	"Philips ESP60" (EXPERIMENTAL)
	"Philips ESP70" (EXPERIMENTAL)
	"Philips ESP80" (EXPERIMENTAL)
	"Philips ESP80SXG" (EXPERIMENTAL)
	"Phoebe Smartcam" (TESTING)
	"Polaroid 640SE" (EXPERIMENTAL)
	"Polaroid DC700"
	"Polaroid Fun Flash 640" (EXPERIMENTAL)
	"Polaroid Fun! 320" (EXPERIMENTAL)
	"Polaroid PDC 2300Z"
	"Polaroid PDC 640"
	"Praktica QD500"
	"Praktica QD800"
	"Quark Probe 99"
	"QuickPix QP1" (TESTING)
	"Relisys Dimera 3500"
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
	"Sierra Imaging SD640"
	"SiPix Web2" (EXPERIMENTAL)
	"Skanhex SX-330z" (EXPERIMENTAL)
	"Sony DCR-PC100"
	"Sony DSC-F1" (EXPERIMENTAL)
	"Sony DSC-F55"
	"Sony DSC-F707V" (TESTING)
	"Sony DSC-P30" (TESTING)
	"Sony DSC-P5" (TESTING)
	"Sony DSC-P50" (TESTING)
	"Sony DSC-S75" (TESTING)
	"Sony DSC-S85" (TESTING)
	"Sony MSAC-SR1"
	"Sony MVC-CD300" (TESTING)
	"Sony TRV-20E"
	"SpyPen Axys" (TESTING)
	"SpyPen Cleo" (TESTING)
	"SpyPen Memo" (TESTING)
	"SpyPen Xion" (TESTING)
	"STM USB Dual-mode camera" (TESTING)
	"STV0680" (TESTING)
	"Tiger Fast Flicks" (EXPERIMENTAL)
	"Toshiba PDR-M1"
	"Traveler SX330z" (EXPERIMENTAL)
	"Traveler SX410z" (EXPERIMENTAL)
	"Trust DC-3500"
	"UMAX AstraPen" (TESTING)
	"USB PTP Class Camera" (TESTING)
	"WWF"
</pre>
</p>
<p>
If your camera is not in that list, then it may be supported in the
current CVS version. There is also a possibility, for some old cameras, 
that the original <a href="/proj/gphoto/">gPhoto</a> driver has not been
ported. Or it may be unsupported at all. See the 
<a href="http://www.teaser.fr/~hfiguiere/linux/digicam.html">Digital
Camera Support for UN*X</a> page.
</p>
</td></tr>
</table>
<?
	printFooter ();
?>
