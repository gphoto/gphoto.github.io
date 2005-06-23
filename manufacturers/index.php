<?
	require ("../include.php");

	printHeader ("About manufacturers", "", 1);

	printMenu ("manufacturers");
?>

<p>
On this page, we try to list the cooperation we have received and are receiving 
from camera manufacturers, or rather the almost total lack thereof.
So this page is mostly intended to give them bad press.
Unfortunately, many companies do not listen to anything else.
</p>

<p>
The facts are not new, as the manufacturers don't document anything, supposedly in
order to protect their "intellectual property". Examples:</p>
<ul>
<li>RAW files ("digital negatives") are not documented, which is why
    <a href="http://www.openraw.org/">OpenRAW</a> has been created.
</li>
<li>Communication protocols are not documented, which is why we started this page
</li>
</ul>

<p>We hope this page helps you make a good buying decision to support
open source solutions.</p>


<!-- ============================================================ --> 

<h2>Manufacturers that have provided help</h2>

<p>
The list is quite small:
</p>

<!-- ========================= -->

<h3>Kodak</h3>
<p>Kodak has published documentation for the protocols they
used in consumer cameras, prior their switch to PTP. Since, due to various company reorganization
the documentation has been pulled off the website.
</p>

<!-- ========================= -->

<h3>Konica</h3>
<p>Konica has provided reference and partial implementation for the konica driver<!--
FIXME: In what year? For what cameras? -->.</p>

<p>Howerver, Konica has not responded to the request for the QM-150 camera driver in 2003. 
Developers were just ignored.</p>

<p>Most recent Konica cameras did use USB Mass Storage. Konica is now merged with Konica-Minolta
and it is a different organization<!--
FIXME: Different from when? 2003? Or when they did provide information? -->.</p>


<!-- ============================================================ --> 

<h2>Manufacturers that have NOT provided help</h2>

<p>This is where the list goes. In fact, it is almost every manufacturers. We'll just provide
real evidence of their lack of cooperation.</p>

<!-- ========================= -->

<h3>Canon</h3>
<p>Canon has not provided any help to the gphoto project. Their proprietary SDK does
not have support for Linux, and does not have the required documentation to implement
the functionality.</p>

<!-- paragraph uncommented until I find the mail from Canon which said that
<p>When asked specifically about software for Unix or Linux, Canon mentioned that
they only supported Windows, but that there as a 3rd party solution called gphoto
which might do the job. They continued that they didn't support the 3rd party products
like gphoto and thus couldn't make any claims as to whether, how, and how good gphoto
may work.</p>
-->

<p>All their recent cameras support PTP standard protocol and thus the basic functionality
of downloading files works almost out of the box with gphoto. But advanced control is a
different story.</p>

<!-- ========================= -->

<h3>Epson</h3>
<p>Epson advertise us in the 
<a href="http://www.epsondevelopers.com/ldcam.jsp">Linux developer solution section</a>,
but never, as far as we remember,
provided any help or support to the project. We'll try to get more information about that. 
Their developer support website does not feature any documentation for digital camera. Only printers,
and scanners, with a <a href="http://www.epsondevelopers.com/noGuide.jsp">long list of exceptions</a>.</p>

<p>They haven't produced anything recently, and the Epson RD-1 does not feature connectivity.</p>

<!-- ========================= -->

<h3>Olympus</h3>
<p>When requesting the documentation because their SDK only support Windows, 
here is the answer I got on June 22, 2005:</p>
<pre class="programlisting">
We have not released the communication specification publically. You can
try the gPhoto project, www.gPhoto.org, who has claimed to reverse engineer
the interface.
</pre>
<p>A reply has been sent, asking about documentation to fix the software (we have issues and al.).
Got this new reply:</p>
<pre class="programlisting">
I'm afraid we do not publicize the interface. That is why gPhoto had to
reverse engineer it.
</pre>

<p>Charming?</p>

<p>Olympus camera supports have been supporting USB Mass Storage for quite some time, and PTP
more recently. This makes gphoto unecessary (Mass Storage) or work out of the box (for PTP).
But for remote control, 
<a href="http://developer.olympus.com/cameras_25.html">supported cameras</a> needs documentation
and that is what they are currently declining.</p>

<!-- ========================= -->

<h3>Nikon</h3>

<p>Documentation has been requested, but require signing a NDA. Nikon has been requested clarifications
about the NDA (sent June 17 2005) to know if Open Source software can be written from it, no answer so 
far (June 22 2005)...</p>


<!-- ============================================================ --> 

<?
	printFooter ();
?>

