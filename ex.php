<?php 

echo'<center>helllooo<h1></h1>'

function getDistance ($latitude1,$longitude1,$latitude2,$longitude2)
{$earthradius=6371; 
$latFrom=deg2rad($latitude1);
$lonForm=deg2rad($longitude1);
$latTo=deg2rad($latitude1);
$lonTo=deg2rad($longitude2);

$lat=$latTo-$latFrom;
$lon=$lonTo-$lonFrom;

$angle=2*asin(sqrt(pow(sin($lat/2),2)+cos($latfrom)*cos($latTo)*pow(sin($lon/2),2)));
return $angle*$earthradius;

}

?>
