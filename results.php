<?php
  //Get the user input
  $heightOfTriangularPyramid = floatval($_POST["pyramid-height"]);
  $sideAOfTriangularPyramid = floatval($_POST["base-length"]);
  $sideBOfTriangularPyramid = floatval($_POST["base-height"]);

  //Calculate the volume
  $volume = $sideAOfTriangularPyramid * $sideBOfTriangularPyramid *   $heightOfTriangularPyramid / 6;
  $volumeRounded = round($volume, 2);
?>

<h3>Results:</h3>
The volume of the triangular pyramid is <?php echo "$volumeRounded" ?> cm<sup>3</sup>.