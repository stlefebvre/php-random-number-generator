<h1>Random Number Generator</h1>
<p>Select two numbers in the corresponding fields and a random number will be generated within that range</p>
<form name="randomNumberGenerator" method="POST">
  <label for="num1">First Number</label>
  <input type="text" id="num1" name="num1">
  <label for="num2">Second Number</label>
  <input type="text" id="num2" name="num2">
  <input name="submit" type="submit" value="Generate">
</form>

<?php

  if( $_POST ) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $float1 = floatval($num1);
    $float2 = floatval($num2);
    // echo "$float1 is a " . gettype($float1);
    if ( $float1 <= $float2) {
      echo rand($float1, $float2);
    } else {
      echo rand($float2, $float1);
    }
  }

?>