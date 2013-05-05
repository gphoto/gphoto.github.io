<?
	require ("../include.php");

	printHeader ("Links", "", 1);

	printMenu ("links");
?>

<table class="text">
<tr><td>
   <p>Here is a list of useful links for gPhoto users and developers:</p>
   <p>There are many digital camera related
   resources at <a href="http://photopc.sourceforge.net/">
   http://photopc.sourceforge.net/</a>.<br/>
   Also check out the Usenet News discussion
   group <a href="http://groups.google.com/groups?oi=djq&amp;as_ugroup=rec.photo.digital">
   rec.photo.digital</a></p>

   <p>For Linux USB setup information, check the 
   <a href="http://www.linux-usb.org/">Linux USB</a> website and the 
   <a href="http://www.linux-usb.org/USB-guide/book1.html">Linux USB Guide</a>.
   </p>
   
   <p>Also checkout the <a href="http://www.tldp.org/HOWTO/Kodak-Digitalcam-HOWTO/index.html">Kodak Digital Camera HOWTO</a>.</p>

   <p><a href="http://www.sane-project.org/">SANE</a>
   stands for 'Scanner Access Now Easy' and is an application programming interface
   (API) that provides standardized access to raster image scanner hardware.
   </p>


   <h3>USB Sniffers for Windows</h3>

   <ul>
   <li><a href="http://www.usblyzer.com/">USBLyzer</a> - best current product. Commercial, with a 30 day free trial.
   <li><a href="http://sourceforge.net/projects/usbsnoop/">SnoopyPro</a> - another Windows USB snoop tool.
   <li><a href="https://www.wireshark.org/">Wireshark</a> - the opensource network and USB sniffer. (Linux users: <code>modprobe usbmon</code> to enable USB sniffing)
   <li><a href="http://desowin.org/usbpcap">USBPcap</a> - opensource USB capture utility for Windows (stores traces in PCAP format for later e.g. Wireshark usage)
   </ul>

   <h3>Digital camera review/resources</h3>

   <ul>
      <li><a href="http://www.dpreview.com/">DPreview</a></li>
      <li><a href="http://www.kenrockwell.com/">Ken Rockwell</a></li>
   </ul>

   <h3>Free software related to digital images</h3>

   <ul>
      <li><a href="http://www.gimp.org/"> www.gimp.org</a> - The GNU Image Manipulation Program</li>
      <li><a href="http://www.digikam.org/"> www.digikam.org</a> - KDE Digikam</li>
      <li><a href="http://www.darktable.org/"> www.darktable.org</a> - OpenSource Darktable (inspired by Adobe Lightroom)</li>
   </ul>

   <h3>Vendor packages</h3>
   <ul>
     <li>SUSE, Fedora and Mandriva <a href="http://software.opensuse.org/package/libgphoto2">gphoto RPM packages courtesy of the opensuse build service</a> (<a href="http://build.opensuse.org/project/show?project=GPhoto">internal opensuse build service page for gphoto</a>)</li>
     <li><a href="http://packages.debian.org/gphoto2">Debian gphoto2 package page</a></li>
     <li><a href="http://packages.ubuntulinux.org/gphoto2">Ubuntu gphoto2 package page</a></li>
   </ul>

</td></tr>
</table>

<?
	printFooter ();
?>
