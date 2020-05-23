<?php



function getImageprofile($roll)
{

	return $file = "<img src='http://oa.cc.iitk.ac.in:8181/Oa/Jsp/Photo/".$roll."_0.jpg' width='200px' height='250px'>";	
}

function getImageSearch($roll)
{
	return $file = "<img src='http://oa.cc.iitk.ac.in:8181/Oa/Jsp/Photo/".$roll."_0.jpg' width='120px' height='154px'>";
}	 
function getImageGrps($fbid,$roll)
{
	return $file = "<img src='http://oa.cc.iitk.ac.in:8181/Oa/Jsp/Photo/".$roll."_0.jpg' width='120px' height='120px'>";
}	 

function getImageSuggest($roll)
{
	return $file = "<img src='http://oa.cc.iitk.ac.in:8181/Oa/Jsp/Photo/".$roll."_0.jpg' width='100px' height='100px'>";
}


?>
