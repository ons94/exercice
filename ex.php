<?php 

echo'Distance entre 2 points '

function getDistance ($latitude1,$longitude1,$latitude2,$longitude2)
{$earthradius=6371; 
$latFrom=deg2rad($latitude1);
$lonFrom=deg2rad($longitude1);
$latTo=deg2rad($latitude1);
$lonTo=deg2rad($longitude2);

$lat=$latTo-$latFrom;
$lon=$lonTo-$lonFrom;

$angle=2*asin(sqrt(pow(sin($lat/2),2)+cos($latfrom)*cos($latTo)*pow(sin($lon/2),2)));
return $angle*$earthradius;
}

     $distance=getDistance($latitude1,$longitude1,$latitude2,$longitude2);
     echo $distance;

?>
