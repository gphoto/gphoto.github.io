<?
	$current_release="2.3.0";

	$all_releases["2.3.0"]=468452;
	$all_releases["2.2.0"]=425235;
	$all_releases["2.1.6"]=337127;
	$all_releases["2.1.5"]=290239;
	$all_releases["2.1.4"]=209817;
	$all_releases["2.1.3"]=191969;
	$all_releases["2.1.2"]=174065;
	$all_releases["2.1.1"]=125403;
	$all_releases["2.1.0"]=96632;
	$all_releases["2.0"]=76830;
	$all_releases["2.0beta5"]=74556;
	$all_releases["2.0beta4"]=72424;
	$all_releases["2.0beta3"]=61705;
	$all_releases["2.0beta2"]=57596;
	$all_releases["2.0beta1"]=29599;
	if ($version) {
		$release_id=$all_releases["$version"];
		if (!$release_id) {
			$release_id=$all_releases["$current_release"];
		}
	}
	else {
		$release_id=$all_releases["$current_release"];
	}
	
	Header("Location: http://sourceforge.net/project/showfiles.php?group_id=8874&release_id=$release_id");

?>
