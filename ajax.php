<?php
// script to calculate cone sufrace and volume

function cone_surface($Radius, $Height) {
  return M_PI * $Radius * $Radius 
      + M_PI * $Radius * sqrt($Height * $Height + $Radius * $Radius);
}
function cone_volume($Radius, $Height) {
  return 1/3 * M_PI * $Radius * $Height;
}

$radius = floatval($_POST['radius']);
$height = floatval($_POST['height']);

if($radius < 0) {
  $radius = 0;
}
if($height < 0) {
  $height = 0;
}

$volume = round(cone_volume($radius, $height), 2);
$surface = round(cone_surface($radius, $height), 2);

print json_encode(array(
    'volume' => $volume,
    'surface' => $surface
  ));

?>