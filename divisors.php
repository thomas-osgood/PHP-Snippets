/*
    Function to determine the divisors of
    a given integer.  If the only, divisors
    are 1 and the integer, return that the
    integer is prime.
*/
function divisors($integer) {
  $retVal = [];
  $i = 0;
  
  for ($i = 2; $i < $integer; $i++) {
    if (( $integer % $i ) == 0) {
      array_push($retVal, $i);
    }
  }
  
  if (empty($retVal)) {
    $retVal = $integer.' is prime';
  }
  
  return $retVal;
}
