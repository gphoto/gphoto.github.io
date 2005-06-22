<?
	require ("../include.php");

	printHeader ("About manufacturers", "", 1);

	printMenu ("manufacturers");
?>

<h2>About manufacturers</h2>

<p>
We'll try to list here the cooperation, or mostly lack thereoff of cooperation from
camera manufacturers. This page is mostly intended to give them bad press. This fact is
not new, as they don't document anything, to supposedly protect their "intellectual property". 
For example RAW files are not documented, that is why
<a href="http://www.openraw.org/">OpenRAW</a> has been created.
</p>

<h3>Manufacturers that did provide help</h3>
<p>
The list is really small. Currently only <b>Kodak</b> has published documentation for protocol they
used in consumer cameras, prior their switch to PTP. Since, due to various company reorganization
the documentation has been pulled off the website.
</p>

<h3>Manufacturers that did NOT provide help</h3>

<p>This is where the list goes. In fact, it is almost every manufacturers. We'll just provide
real evidence of their lack of cooperation.</p>

<h4>Canon</h4>
<p>Canon has also been quite hostile and at the end sent us to gphoto.</p>

<h4>Epson</h4>
<p>Epson advertise us in the 
<a href="http://www.epsondevelopers.com/ldcam.jsp">Linux developer solution section</a>,
but never, as far as we remember,
provided any help or support to the project. We'll try to get more information about that. 
Their developer support website does not feature any documentation for digital camera. Only printers,
and scanners, with a <a href="http://www.epsondevelopers.com/noGuide.jsp">long list of exceptions</a>.</p>

<h4>Olympus</h4>
<p>When requesting the documentation because their SDK only support Windows, 
here is the answer I got on June 22, 2005:</p>
<pre>
We have not released the communication specification publically. You can
try the gPhoto project, www.gPhoto.org, who has claimed to reverse engineer
the interface.
</pre>

<?
	printFooter ();
?>
