<?php
$paramValue = $_GET['lang'];
if($paramValue == "ca" || $paramValue == "en" || $paramValue == "es")
	$language = $paramValue;
else{
	$paramValue = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	if($paramValue == "ca" || $paramValue == "en" || $paramValue == "es")
		$language = $paramValue;
	else
		$language = "en";
}
echo "<html lang=\"$language\">\n";

$paramValue = $_GET['page'];
if($paramValue == "buy" || $paramValue == "tra" || $paramValue == "con" 
	|| $paramValue == "dis"|| $paramValue == "off"){
	$page = $paramValue;
}else{
	if (ctype_digit($paramValue)){
		$page = $paramValue;
	}else{
		$page = "default";
	}
}

function szUrlNewLanguage($newLang){
	$mysURL = $_SERVER['REQUEST_URI'];
//	echo "$mysURL<BR>";
	$pos = strstr($mysURL,"lang=");
	if(!empty($pos)){
		$lan = substr($pos,5,2);
//		echo "Lang : ".$lan."\n<BR>";
		$mysURL=str_replace("lang=".$lan,"lang=".$newLang,$mysURL);
	}else{
//		echo "Language is not defined<BR>\n";
		$pos = strstr($mysURL,"?");
		if(!empty($pos))
			$mysURL = $mysURL."&lang=".$newLang;
		else
			$mysURL = $mysURL."?lang=".$newLang;
	}
	return $mysURL;
}
/*$mysURL = szUrlNewLanguage("ca");
echo "myURL forcing ca $mysURL<BR>\n";
$mysURL = szUrlNewLanguage("en");
echo "myURL forcing en $mysURL<BR>\n";
$mysURL = szUrlNewLanguage("es");
echo "myURL forcing es $mysURL<BR>\n";
$mysURL = $_SERVER['REQUEST_URI'];
echo "myURL by default $mysURL<BR>\n";*/

function szSelectLanguage($lan){
	$algun = "no";
	if($lan == "en"){
		$algun = "si";
		$choices = "[<a href=\"".szUrlNewLanguage("ca")."\">ca</a>]\t[en]\t[<a href=\"".szUrlNewLanguage("es")."\">es</a>]";
	}
	if($lan == "ca"){
		$algun = "si";
		$choices = "[ca]\t[<a href=\"".szUrlNewLanguage("en")."\">en</a>]\t[<a href=\"".szUrlNewLanguage("es")."\">es</a>]";
	}
	if($lan == "es"){
		$algun = "si";
		$choices = "[<a href=\"".szUrlNewLanguage("ca")."\">ca</a>]\t[<a href=\"".szUrlNewLanguage("en")."\">en</a>]\t[es]";
	}
	if($algun == "no")
		$choices = "[<a href=\"".szUrlNewLanguage("ca")."\">ca</a>]\t[<a href=\"".szUrlNewLanguage("en")."\">en</a>]\t[<a href=\"".szUrlNewLanguage("es")."\">es</a>]";
	return $choices;
}

function szExternalLinks($txt){
	return "<a href=\"../../html/common/links.html\">".$txt."</a>";
}

function szPage($newPage,$txt){
	$mysURL = $_SERVER['REQUEST_URI'];
	$pos = strstr($mysURL,"page=");
	if(!empty($pos)){
		$pag = substr($pos,5,3);
//		echo "Lang : ".$lan."\n<BR>";
		$mysURL=str_replace("page=".$pag,"page=".$newPage,$mysURL);
	}else{
//		echo "Language is not defined<BR>\n";
		$pos = strstr($mysURL,"?");
		if(!empty($pos))
			$mysURL = $mysURL."&page=".$newPage;
		else
			$mysURL = $mysURL."?page=".$newPage;
	}
	return "<a href=\"".$mysURL."\">".$txt."</a>";
}

?>
