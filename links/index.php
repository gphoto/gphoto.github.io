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
   Also <a href="http://www.harald-schreiber.de/">Using a USB Mass Storage Camera</a>.
   </p>
   
<?
/*
   <p>If you have a Connectix QuickCam, then
   check out <a href= 
   "http://www.dkfz-heidelberg.de/Macromol/wedemann/mini-HOWTO-cqcam.html">
    http://www.dkfz-heidelberg.de/Macromol/wedemann/mini-HOWTO-cqcam.html</a></p>
    */
?>
   <p>OpenDiS, the
   <a href="http://digitalux.netpedia.net/">Open Digita Services</a>
   project, is an effort to write
   free tools for accessing Digita cameras from
   Linux and other unix operating systems.
   Initial targets for support are the Kodak
   DC-220 and DC-260 digital cameras.</p>
		      
   <p>Also checkout the <a href="http://www.tldp.org/HOWTO/Kodak-Digitalcam-HOWTO/index.html">Kodak Digital Camera HOWTO</a>.</p>

   <p><a href="http://www.sane-project.org/">SANE</a>
   stands for 'Scanner Access Now Easy'
   and is an application programming interface
   (API) that provides standardized access to
   raster image scanner hardware.</p>

   <p><a href="http://www.wingmanteam.com/usbsnoopy/">Snoopy</a> an USB snooper
   software for Microsoft Windows. This tool is used to help reverse
   engineering protocols of cameras runing over USB.</p>

   <h3>Digital camera review/resources</h3>

   <ul>
      <li><a href="http://www.dcresource.com/">DCResource</a></li>
   </ul>

   <h3>Free software</h3>

   <ul>
      <li><a href="http://www.gimp.org/">
      www.gimp.org</a> - The GNU Image Manipulation
      Program</li>

      <li><a href="http://www.gnu.org/">
      www.gnu.org</a> - GNU's Not Unix!</li>

      <li><a href="http://www.gnome.org/">
      www.gnome.org</a> - GNU Network Object Model
      Environment</li>

      <li><a href="http://www.gtk.org/">
      www.gtk.org</a> - The Gimp Toolkit</li>

      <li><a href="http://www.kernel.org/">
      www.kernel.org</a> - Latest Linux kernel</li>
   </ul>

   <h3>News</h3>

   <ul>
      <li><a href="http://www.uk.linux.org/">uk.linux.org</a></li>

      <li><a href="http://www.freshmeat.net/">Freshmeat</a></li>
   </ul>

   <h3>Vendor packages</h3>
   <ul>
     <li>SUSE, Fedora and Mandriva RPM
       <a href="http://build.opensuse.org/project/show?project=GPhoto">gphoto packages courtesy of the opensuse build service</a></li>
     <li><a href="http://packages.debian.org/gphoto2">Debian gphoto2 package page</a></li>
     <li><a href="http://packages.ubuntulinux.org/gphoto2">Ubuntu gphoto2 package page</a></li>
   </ul>

</td></tr>
</table>

<?
	printFooter ();
?>
