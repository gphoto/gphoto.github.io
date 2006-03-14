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
libgphoto2 SVN trunk code.
They will be added to the next release. 
</p>
<p>If your camera is neither supported in the current release nor in current SVN trunk, it is possible that
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
Mon Dec 26 12:00:00 CET 2005
========================================================================
gphoto2 2.1.6

Copyright (c) 2000-2005 Lutz Mueller and others

gphoto2 comes with NO WARRANTY, to the extent permitted by law. You may
redistribute copies of gphoto2 under the terms of the GNU General Public
License. For more information about these matters, see the files named COPYING.

This version of gphoto2 is using the following software versions and options:
gphoto2           2.1.6        gcc, popt, exif, cdk, aa, jpeg, readline
libgphoto2        2.1.99       gcc, EXIF, no ltdl, no /proc/meminfo
libgphoto2_port   0.5.2        gcc, USB, serial resmgr locking, no ltdl
========================================================================
Number of supported cameras: 674
Supported cameras:
	"Achiever Digital Adc65"
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
	"Aiptek PenCam VGA+" (EXPERIMENTAL)
	"Aiptek Pencam without flash" (TESTING)
	"Aiptek Smart Megacam" (TESTING)
	"Apple QuickTake 200"
	"Apple QuickTake 200"
	"Argus DC-100"
	"Argus DC-1500"
	"Argus DC-1510"
	"Argus DC-1610" (EXPERIMENTAL)
	"Argus DC-1620" (EXPERIMENTAL)
	"Argus DC-1730" (EXPERIMENTAL)
	"Argus DC-2000"
	"Argus DC-2200"
	"Barbie"
	"Benq DC1300" (TESTING)
	"Canon Digital IXUS"
	"Canon Digital IXUS 30 (PTP mode)"
	"Canon Digital IXUS 300"
	"Canon Digital IXUS 330"
	"Canon Digital IXUS 40 (PTP mode)"
	"Canon Digital IXUS 400"
	"Canon Digital IXUS 400 (PTP mode)"
	"Canon Digital IXUS 430 (normal mode)"
	"Canon Digital IXUS 430 (PTP mode)"
	"Canon Digital IXUS 50 (normal mode)"
	"Canon Digital IXUS 50 (PTP mode)"
	"Canon Digital IXUS 500 (normal mode)"
	"Canon Digital IXUS 500 (PTP mode)"
	"Canon Digital IXUS 55 (PTP mode)"
	"Canon Digital IXUS 700 (normal mode)"
	"Canon Digital IXUS 700 (PTP mode)"
	"Canon Digital IXUS 750 (PTP mode)"
	"Canon Digital IXUS i (normal mode)"
	"Canon Digital IXUS i (PTP mode)"
	"Canon Digital IXUS i5 (normal mode)"
	"Canon Digital IXUS II (normal mode)"
	"Canon Digital IXUS II (PTP mode)"
	"Canon Digital IXUS IIs"
	"Canon Digital IXUS IIs (PTP mode)"
	"Canon Digital IXUS v"
	"Canon Digital IXUS v2"
	"Canon Digital IXUS v3 (normal mode)"
	"Canon Digital IXUS v3 (PTP mode)"
	"Canon Digital unknown 3"
	"Canon Elura 50 (normal mode)"
	"Canon Elura 50 (PTP mode)"
	"Canon EOS 10D"
	"Canon EOS 1D Mark II (PTP mode)"
	"Canon EOS 20D (PTP mode)"
	"Canon EOS 300D (normal mode)"
	"Canon EOS 300D (PTP mode)"
	"Canon EOS 350D (PTP mode)"
	"Canon EOS D30"
	"Canon EOS D60"
	"Canon EOS Digital Rebel (normal mode)"
	"Canon EOS Digital Rebel (PTP mode)"
	"Canon EOS Kiss Digital (normal mode)"
	"Canon EOS Kiss Digital (PTP mode)"
	"Canon FV M1 (normal mode)"
	"Canon IXY DIGITAL"
	"Canon IXY DIGITAL 300"
	"Canon IXY Digital 430 (normal mode)"
	"Canon IXY Digital 500 (normal mode)"
	"Canon IXY Digital 55 (normal mode)"
	"Canon IXY Digital 600 (normal mode)"
	"Canon IXY Digital L2 (normal mode)"
	"Canon IXY DV M"
	"Canon IXY DV M2 (normal mode)"
	"Canon MV630i (normal mode)"
	"Canon MV650i (normal mode)"
	"Canon MVX 10i (normal mode)"
	"Canon MVX 3i (normal mode)"
	"Canon MVX100i"
	"Canon MVX100i"
	"Canon MVX150i (normal mode)"
	"Canon MVX25i (normal mode)"
	"Canon MVX2i"
	"Canon Optura 10"
	"Canon Optura 10"
	"Canon Optura 20 (normal mode)"
	"Canon Optura 200 MC"
	"Canon Optura 300 (normal mode)"
	"Canon Optura 40 (normal mode)"
	"Canon Optura Xi (normal mode)"
	"Canon PowerShot A10"
	"Canon PowerShot A100"
	"Canon PowerShot A20"
	"Canon PowerShot A200"
	"Canon PowerShot A30"
	"Canon PowerShot A300"
	"Canon PowerShot A310"
	"Canon PowerShot A310 (PTP mode)"
	"Canon PowerShot A40"
	"Canon PowerShot A400"
	"Canon PowerShot A400 (PTP mode)"
	"Canon PowerShot A410 (PTP mode)"
	"Canon PowerShot A5"
	"Canon PowerShot A5 Zoom"
	"Canon PowerShot A50"
	"Canon PowerShot A510 (normal mode)"
	"Canon PowerShot A510 (PTP mode)"
	"Canon PowerShot A520 (PTP mode)"
	"Canon PowerShot A60"
	"Canon PowerShot A60 (PTP)"
	"Canon PowerShot A610 (normal mode)"
	"Canon PowerShot A610 (PTP mode)"
	"Canon PowerShot A620 (PTP mode)"
	"Canon PowerShot A70"
	"Canon PowerShot A70 (PTP)"
	"Canon PowerShot A75"
	"Canon PowerShot A75 (PTP mode)"
	"Canon PowerShot A80 (normal mode)"
	"Canon PowerShot A80 (PTP)"
	"Canon PowerShot A85 (normal mode)"
	"Canon PowerShot A85 (PTP mode)"
	"Canon PowerShot A95 (normal mode)"
	"Canon PowerShot A95 (PTP mode)"
	"Canon PowerShot G1"
	"Canon PowerShot G2"
	"Canon PowerShot G3 (normal mode)"
	"Canon PowerShot G3 (PTP mode)"
	"Canon PowerShot G5 (normal mode)"
	"Canon PowerShot G5 (PTP mode)"
	"Canon PowerShot G6 (normal mode)"
	"Canon Powershot G6 (PTP mode)"
	"Canon PowerShot IXY Digital L (normal mode)"
	"Canon PowerShot Pro70"
	"Canon PowerShot Pro90 IS"
	"Canon PowerShot S1 IS (PTP mode)"
	"Canon PowerShot S10"
	"Canon PowerShot S100"
	"Canon PowerShot S110"
	"Canon PowerShot S2 IS (PTP mode)"
	"Canon PowerShot S20"
	"Canon PowerShot S200"
	"Canon PowerShot S230 (normal mode)"
	"Canon PowerShot S230 (PTP mode)"
	"Canon PowerShot S30"
	"Canon PowerShot S300"
	"Canon PowerShot S330"
	"Canon PowerShot S40"
	"Canon PowerShot S400"
	"Canon PowerShot S410 (PTP mode)"
	"Canon PowerShot S410 Digital ELPH (normal mode)"
	"Canon PowerShot S45 (normal mode)"
	"Canon PowerShot S45 (PTP mode)"
	"Canon PowerShot S50 (normal mode)"
	"Canon PowerShot S50 (PTP mode)"
	"Canon PowerShot S500 (PTP mode)"
	"Canon PowerShot S500 Digital ELPH (normal mode)"
	"Canon PowerShot S60 (normal mode)"
	"Canon Powershot S60 (PTP mode)"
	"Canon PowerShot S70 (normal mode)"
	"Canon Powershot S70 (PTP mode)"
	"Canon PowerShot SD10 Digital ELPH (normal mode)"
	"Canon PowerShot SD100 (normal mode)"
	"Canon PowerShot SD100 (PTP mode)"
	"Canon PowerShot SD110 (PTP mode)"
	"Canon PowerShot SD110 Digital ELPH"
	"Canon PowerShot SD20 (normal mode)"
	"Canon PowerShot SD200 (PTP mode)"
	"Canon PowerShot SD400 (normal mode)"
	"Canon PowerShot SD450 (PTP mode)"
	"Canon PowerShot SD500 (normal mode)"
	"Canon PowerShot SD500 (PTP mode)"
	"Canon PowerShot unknown 1"
	"Canon PowerShot unknown 2"
	"Canon ZR70MC (normal mode)"
	"Casio LV 10" (EXPERIMENTAL)
	"Casio QV10"
	"Casio QV100"
	"Casio QV10A"
	"Casio QV300"
	"Casio QV70"
	"Casio QV700"
	"Casio QV770"
	"Che-ez Snap" (EXPERIMENTAL)
	"Che-Ez Snap SNAP-U" (EXPERIMENTAL)
	"Che-ez! Babe"
	"Che-ez! Splash" (EXPERIMENTAL)
	"Che-ez! SPYZ"
	"Chinon ES-1000"
	"Clever CAM 360" (TESTING)
	"Concord Eye-Q Duo" (EXPERIMENTAL)
	"Concord Eye-Q Easy" (EXPERIMENTAL)
	"Concord EyeQ 4330" (EXPERIMENTAL)
	"Concord EyeQMini_1" (EXPERIMENTAL)
	"Concord EyeQMini_2" (EXPERIMENTAL)
	"CoolCam CP086"
	"Creative Go Mini"
	"Creative PC-CAM 300" (EXPERIMENTAL)
	"Creative PC-CAM350" (EXPERIMENTAL)
	"Creative PC-CAM600" (EXPERIMENTAL)
	"Creative PC-CAM750" (EXPERIMENTAL)
	"D-Link DSC 350+" (TESTING)
	"D-Link DSC 350F" (TESTING)
	"DC-N130t" (EXPERIMENTAL)
	"DC31VC" (EXPERIMENTAL)
	"Digigr8" (EXPERIMENTAL)
	"Digital camera, CD302N" (EXPERIMENTAL)
	"Digitaldream DIGITAL 2000"
	"DigitalDream Enigma1.3" (EXPERIMENTAL)
	"DigitalDream l'elegante"
	"DigitalDream l'elite"
	"DigitalDream l'espion"
	"DigitalDream l'espion XS"
	"DigitalDream l'espion xtra" (EXPERIMENTAL)
	"DigitalDream l'esprit"
	"DigitalDream la ronde"
	"Directory Browse"
	"Dynatron Dynacam 800"
	"Elta Medi@ digi-cam" (EXPERIMENTAL)
	"Emprex PCD3600" (EXPERIMENTAL)
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
	"Fuji FinePix A330 (PictBridge mode)"
	"Fuji FinePix S7000 (PictBridge mode)"
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
	"Haimei Electronics HE-501A" (EXPERIMENTAL)
	"Hawking DC120 Pocketcam"
	"Hot Wheels"
	"HP PhotoSmart"
	"HP PhotoSmart 120 (PTP mode)"
	"HP PhotoSmart 215" (EXPERIMENTAL)
	"HP PhotoSmart 318 (PTP mode)"
	"HP PhotoSmart 320 (PTP mode)"
	"HP PhotoSmart 43x (PTP mode)"
	"HP PhotoSmart 612 (PTP mode)"
	"HP PhotoSmart 618"
	"HP PhotoSmart 620 (PTP mode)"
	"HP PhotoSmart 635 (PTP mode)"
	"HP PhotoSmart 715 (PTP mode)"
	"HP PhotoSmart 720 (PTP mode)"
	"HP PhotoSmart 735 (PTP mode)"
	"HP PhotoSmart 812 (PTP mode)"
	"HP PhotoSmart 850 (PTP mode)"
	"HP PhotoSmart 912"
	"HP PhotoSmart 935 (PTP mode)"
	"HP PhotoSmart 945 (PTP mode)"
	"HP PhotoSmart C20"
	"HP PhotoSmart C200"
	"HP PhotoSmart C30"
	"HP PhotoSmart C500"
	"HP PhotoSmart M23 (PTP mode)"
	"HP PhotoSmart M307 (PTP mode)"
	"HP PhotoSmart M415 (PTP mode)"
	"HP PhotoSmart R707 (PTP mode)"
	"HP PhotoSmart R817 (PTP mode)"
	"iClick 5X" (EXPERIMENTAL)
	"iConcepts digital camera"
	"Intel Pocket PC Camera" (EXPERIMENTAL)
	"IOMagic MagicImage 400"
	"IOMagic MagicImage 420"
	"iRiver T10"
	"iRiver T10 (alternate)"
	"iRiver T20"
	"iRiver T30"
	"Ixla DualCam 640" (EXPERIMENTAL)
	"Jenoptik JD-3300z3" (EXPERIMENTAL)
	"Jenoptik JD-4100z3" (EXPERIMENTAL)
	"Jenoptik JD11"
	"Jenoptik JD12 800ff"
	"Jenoptik JD350 entrance" (TESTING)
	"Jenoptik JD350 video" (TESTING)
	"Jenoptik JDC 350" (EXPERIMENTAL)
	"KBGear JamCam"
	"Kodak C300"
	"Kodak C310"
	"Kodak C330"
	"Kodak C340"
	"Kodak CX4200"
	"Kodak CX4210"
	"Kodak CX4230"
	"Kodak CX4300"
	"Kodak CX4310"
	"Kodak CX6200"
	"Kodak CX6230"
	"Kodak CX6330"
	"Kodak CX6445"
	"Kodak CX7220"
	"Kodak CX7300"
	"Kodak CX7310"
	"Kodak CX7330"
	"Kodak CX7430"
	"Kodak CX7525"
	"Kodak CX7530"
	"Kodak DC120"
	"Kodak DC210"
	"Kodak DC215"
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
	"Kodak DX7440"
	"Kodak DX7590"
	"Kodak DX7630"
	"Kodak EZ200" (TESTING)
	"Kodak LS420"
	"Kodak LS443"
	"Kodak LS663"
	"Kodak LS743"
	"Kodak LS753"
	"Kodak MC3"
	"Kodak V530"
	"Kodak V550"
	"Kodak Z730"
	"Kodak Z7590"
	"Konica e-mini"
	"Konica Q-EZ"
	"Konica Q-M100"
	"Konica Q-M100V"
	"Konica Q-M150" (EXPERIMENTAL)
	"Konica Q-M200"
	"Konica-Minolta DiMAGE A2 (PTP mode)"
	"Konica-Minolta DiMAGE Z2 (PictBridge mode)"
	"Konica-Minolta DiMAGE Z3 (PictBridge mode)"
	"Konica-Minolta DiMAGE Z5 (PictBridge mode)"
	"Largan Lmini" (EXPERIMENTAL)
	"Leica Digilux Zoom"
	"LG T5100" (EXPERIMENTAL)
	"Lifetec LT 5995" (EXPERIMENTAL)
	"Logitech Pocket Digital" (EXPERIMENTAL)
	"Maginon SX-410z" (EXPERIMENTAL)
	"Maginon SX330z" (EXPERIMENTAL)
	"Magpix B350" (EXPERIMENTAL)
	"Mass Storage Camera"
	"Maxell Max Pocket" (TESTING)
	"Media-Tech mt-406"
	"Medion MD 5319" (TESTING)
	"Medion MD 6000" (EXPERIMENTAL)
	"Medion MD 6126" (TESTING)
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
	"Nikon Coolpix 2200 (PTP mode)"
	"Nikon Coolpix 2500 (PTP mode)"
	"Nikon CoolPix 300"
	"Nikon Coolpix 3100 (PTP mode)"
	"Nikon Coolpix 3200 (PTP mode)"
	"Nikon Coolpix 3500 (PTP mode)"
	"Nikon CoolPix 3500 (Sierra Mode)"
	"Nikon Coolpix 3700 (PTP mode)"
	"Nikon Coolpix 4100 (PTP mode)"
	"Nikon Coolpix 4200 (PTP mode)"
	"Nikon Coolpix 4300 (PTP mode)"
	"Nikon CoolPix 4300 (Sierra Mode)"
	"Nikon CoolPix 4500 (PTP mode)"
	"Nikon Coolpix 4600 (PTP mode)"
	"Nikon Coolpix 4800 (PTP mode)"
	"Nikon Coolpix 5000 (PTP mode)"
	"Nikon Coolpix 5200 (PTP mode)"
	"Nikon Coolpix 5400 (PTP mode)"
	"Nikon Coolpix 5600 (PTP mode)"
	"Nikon Coolpix 5700 (PTP mode)"
	"Nikon Coolpix 5900 (PTP mode)"
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
	"Nikon Coolpix P2 (PTP mode)"
	"Nikon Coolpix SQ (PTP mode)"
	"Nikon D2H SLR (PTP mode)"
	"Nikon D2X SLR (PTP mode)"
	"Nikon D50 (PTP mode)"
	"Nikon DSC D100 (PTP mode)"
	"Nikon DSC D70 (PTP mode)"
	"Nikon DSC D70s (PTP mode)"
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
	"Olympus C-310Z"
	"Olympus C-350Z"
	"Olympus C-370Z"
	"Olympus C-400"
	"Olympus C-400L"
	"Olympus C-4040Z"
	"Olympus C-410"
	"Olympus C-410L"
	"Olympus C-420"
	"Olympus C-420L"
	"Olympus C-5050Z"
	"Olympus C-700UZ"
	"Olympus C-750UZ"
	"Olympus C-770UZ"
	"Olympus C-800"
	"Olympus C-800L"
	"Olympus C-820"
	"Olympus C-820L"
	"Olympus C-830L"
	"Olympus C-840L"
	"Olympus C-860L"
	"Olympus C-900 Zoom"
	"Olympus C-900L Zoom"
	"Olympus C-990 Zoom"
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
	"Olympus D-535Z"
	"Olympus D-540Z"
	"Olympus D-560Z"
	"Olympus D-600L"
	"Olympus D-600XL"
	"Olympus D-620L"
	"Olympus mju 500"
	"Olympus X-100"
	"Olympus X-250"
	"Olympus X-450"
	"Oregon Scientific DShot II"
	"Oregon Scientific DShot III"
	"Panasonic Coolshot KXL-600A"
	"Panasonic Coolshot KXL-601A"
	"Panasonic Coolshot NV-DCF5E"
	"Panasonic DC1000"
	"Panasonic DC1580"
	"Panasonic DMC-FZ20"
	"Panasonic DMC-FZ20 (alternate id)"
	"Panasonic DMC-LZ2"
	"Panasonic Lumix FZ5"
	"Panasonic PV-L691"
	"Panasonic PV-L859"
	"Pencam TEVION MD 9456"
	"Pentax Optio 33WR"
	"Pentax Optio 43WR"
	"Pentax Optio 450"
	"Philips ESP2" (EXPERIMENTAL)
	"Philips ESP50" (EXPERIMENTAL)
	"Philips ESP60" (EXPERIMENTAL)
	"Philips ESP70" (EXPERIMENTAL)
	"Philips ESP80" (EXPERIMENTAL)
	"Philips ESP80SXG" (EXPERIMENTAL)
	"Philips P44417B keychain camera" (EXPERIMENTAL)
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
	"Precision Mini Digital Camera"
	"Precision Mini, Model HA513A" (EXPERIMENTAL)
	"Pretec dc530" (EXPERIMENTAL)
	"PureDigital Ritz Disposable" (TESTING)
	"Quark Probe 99"
	"QuickPix QP1"
	"Radioshack Flatfoto" (EXPERIMENTAL)
	"RCA CDS1005" (EXPERIMENTAL)
	"Relisys Dimera 3500"
	"Ricoh Capilo RX" (TESTING)
	"Ricoh Caplio 300G" (TESTING)
	"Ricoh Caplio G3" (TESTING)
	"Ricoh Caplio G4" (TESTING)
	"Ricoh Caplio GX" (TESTING)
	"Ricoh Caplio GX (PTP mode)"
	"Ricoh Caplio GX 8" (TESTING)
	"Ricoh Caplio GX 8 (PTP mode)"
	"Ricoh Caplio R1" (TESTING)
	"Ricoh Caplio R1v" (TESTING)
	"Ricoh Caplio R2" (TESTING)
	"Ricoh Caplio R3" (TESTING)
	"Ricoh Caplio R3 (PTP mode)"
	"Ricoh Caplio RR30" (TESTING)
	"Ricoh Caplio RZ1" (TESTING)
	"Ricoh RDC-1" (EXPERIMENTAL)
	"Ricoh RDC-100G" (EXPERIMENTAL)
	"Ricoh RDC-2" (EXPERIMENTAL)
	"Ricoh RDC-2E" (EXPERIMENTAL)
	"Ricoh RDC-300" (EXPERIMENTAL)
	"Ricoh RDC-300Z" (EXPERIMENTAL)
	"Ricoh RDC-4200" (EXPERIMENTAL)
	"Ricoh RDC-4300" (EXPERIMENTAL)
	"Ricoh RDC-5000" (EXPERIMENTAL)
	"Rollei dr5" (TESTING)
	"Rollei dr5 (PTP mode)"
	"Sakar Kidz Cam" (EXPERIMENTAL)
	"Samsung digimax 800k"
	"Samsung Kenox SSC-350N"
	"Sanyo DSC-X300"
	"Sanyo DSC-X350"
	"Sanyo VPC-G200"
	"Sanyo VPC-G200EX"
	"Sanyo VPC-G210"
	"Sanyo VPC-G250"
	"ScanHex SX-35a" (TESTING)
	"ScanHex SX-35b" (TESTING)
	"ScanHex SX-35c" (TESTING)
	"ScanHex SX-35d" (TESTING)
	"Scott APX 30"
	"Sea & Sea 5000G" (TESTING)
	"Shark SDC-513" (EXPERIMENTAL)
	"Shark SDC-519" (EXPERIMENTAL)
	"Sierra Imaging SD640"
	"SiPix Blink" (EXPERIMENTAL)
	"SiPix Blink 2" (EXPERIMENTAL)
	"SiPix CAMeleon" (EXPERIMENTAL)
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
	"Sony DSC-F717 (PTP mode)"
	"Sony DSC-F828 (PTP mode)"
	"Sony DSC-H1 (PTP mode)"
	"Sony DSC-P10 (PTP mode)"
	"Sony DSC-P100 (PTP mode)"
	"Sony DSC-P120 (PTP mode)"
	"Sony DSC-P30 (PTP mode)"
	"Sony DSC-P31 (PTP mode)"
	"Sony DSC-P32 (PTP mode)"
	"Sony DSC-P41 (PTP mode)"
	"Sony DSC-P43 (PTP mode)"
	"Sony DSC-P5 (PTP mode)"
	"Sony DSC-P50 (PTP mode)"
	"Sony DSC-P51 (PTP mode)"
	"Sony DSC-P52 (PTP mode)"
	"Sony DSC-P71 (PTP mode)"
	"Sony DSC-P72 (PTP mode)"
	"Sony DSC-P73 (PTP mode)"
	"Sony DSC-P92 (PTP mode)"
	"Sony DSC-P93 (PTP mode)"
	"Sony DSC-R1 (PTP mode)"
	"Sony DSC-S75 (PTP mode)"
	"Sony DSC-S85 (PTP mode)"
	"Sony DSC-T1 (PTP mode)"
	"Sony DSC-T3 (PTP mode)"
	"Sony DSC-U20 (PTP mode)"
	"Sony DSC-V1 (PTP mode)"
	"Sony DSC-W1 (PTP mode)"
	"Sony DSC-W12 (PTP mode)"
	"Sony MSAC-SR1"
	"Sony MVC-CD300 (PTP mode)"
	"Sony MVC-CD500 (PTP mode)"
	"Sony PTP"
	"Sony TRV-20E"
	"Soundstar TDC-35" (EXPERIMENTAL)
	"SpyPen Axys"
	"SpyPen Cleo"
	"SpyPen Luxo"
	"SpyPen Memo"
	"SpyPen Xion"
	"SQ chip camera" (EXPERIMENTAL)
	"StarCam CP086"
	"STM USB Dual-mode camera"
	"STV0680"
	"SY-2107C" (EXPERIMENTAL)
	"Tiger Fast Flicks"
	"Timlex CP075"
	"Toshiba PDR-M1"
	"Toshiba PDR-M11" (TESTING)
	"Toshiba PDR-M60"
	"Toshiba PDR-M61"
	"Toshiba PDR-M65"
	"Traveler SX330z" (EXPERIMENTAL)
	"Traveler SX410z" (EXPERIMENTAL)
	"Trust DC-3500"
	"Trust Familycam 300" (TESTING)
	"Trust PowerC@m 350FS" (TESTING)
	"Trust PowerC@m 350FT" (TESTING)
	"Trust Spyc@m 500F FLASH" (TESTING)
	"Typhoon StyloCam" (TESTING)
	"UMAX AstraPen"
	"UMAX AstraPix 320s" (TESTING)
	"USB PTP Class Camera" (TESTING)
	"ViviCam3350" (EXPERIMENTAL)
	"ViviCam5B" (EXPERIMENTAL)
	"Vivitar Vivicam 55" (EXPERIMENTAL)
	"Vivitar Vivicam3350B" (EXPERIMENTAL)
	"WWF"
	"Yahoo!Cam" (EXPERIMENTAL)
========================================================================
</pre>
</td></tr>
</table>
<?
	printFooter ();
?>
