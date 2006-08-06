<?
function printXHTMLValid()
{ ?>
    <a href="http://validator.w3.org/check/referer"><img
        src="http://www.w3.org/Icons/valid-xhtml10"
        alt="Valid XHTML 1.0!" height="31" width="88" border="0" /></a>
<?
}


function printSFLogo ()
{
?>
<a href="http://sourceforge.net">
<img src="http://sflogo.sourceforge.net/sflogo.php?group_id=8874&amp;type=1" 
width="88" height="31" border="0" alt="SourceForge Logo" /></a> 
<?
}

function printgPhotoLogo ()
{
?>
	<a href="/download/">
	<img src="/gphotobutton.jpg" width="100" height="42" border="0"
	alt="Get gPhoto !" /></a>
<?
}


function printHeader($title, $keywords, $noheading)
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml1-transitional.dtd">

<html>
<head>
   <title>gPhoto - <? print $title; ?></title>
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
   <meta name="GENERATOR" content="Emacs vim" />
   <meta name="keywords" content=" <? print $keywords; ?> " />
   <link rel="stylesheet" type="text/css" href="/styles.css" />
<?

?>
</head>
<body bgcolor="#FFFFFF" text="#000000" link="#0000ee" vlink="#551a8b">
<? 
	if ($noheading != 0) {
	?>
<h1>
<img src="/img/smalllogo.png" alt="[gPhoto logo]" width="125" height="79" border="0" />
<? print $title; ?></h1>
<?
	}
}


function printFooter()
{
?>
<hr />
<p class="footer">
Web design and PHP by <a href="http://www.figuiere.net/">Hubert Figui�e</a> 
inspired from design by Avi Bercovich.</p>
<p><? printXHTMLValid(); printSFLogo(); printgPhotoLogo(); ?></p>
</body>
</html>
<?
}

//
//
// $current possible values are:
//  -home
//  -news
//  -proj
//  -doc
//  -developer
//  -mailinglists
//  -download
//  -links
function printMenu($current)
{
?>
<p align="center" class="menu">
<a href="/">Home</a> :: 
<a href="/news">News</a> :: 
<a href="/proj/">Projects</a> :: 
<a href="/doc/">Documentation</a> :: 
<a href="http://www.sf.net/projects/gphoto/">Developers</a> :: 
<a href="/mailinglists/">Mailing lists</a> :: 
<a href="/download/">Download</a> :: 
<a href="/feedback/">Feedback</a> :: 
<a href="/manufacturers/">About Manufacturers</a> :: 
<a href="/links/">Links</a>
<?
	switch ($current) {
	case "feedback":
		?>
		<br />
		<a href="/bugs/">Bugs</a> :: 
		<a href="/rfe/">Feature Requests</a>
		<?
		break;
	case "proj":
		?>
		<br />
		<a href="/proj/libgphoto2/">libgphoto2</a> :: 
		<a href="/proj/gphoto2/">gphoto2-cli</a> :: 
		<a href="/proj/gtkam/">gtkam</a> :: 
		<a href="/proj/gphotofs/">gphotofs</a> :: 
		<a href="/proj/gphoto/">gphoto 0.4.x</a>
		<?
		break;
	case "doc":
		?>
		<br />
		<a href="/doc/manual/">User's manual</a> ::
		<a href="/doc/api/">API</a> ::
		<a href="/doc/ptpip.php">PTP/IP</a> ::
		<a href="/doc/faq/">FAQ</a> ::
		<a href="/doc/remote/">Remote control</a>
		<?
		break;
	}
?>
</p>
<?
}

?>

