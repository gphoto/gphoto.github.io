<?
	if ($_GET['id'] != '') {
		Header("Location: http://sourceforge.net/tracker/?group_id=8874&atid=308874&func=detail&aid=". $_GET['id']);
	}
	else {
		Header("Location: http://sourceforge.net/tracker/?group_id=8874&atid=308874");
	}
?>
