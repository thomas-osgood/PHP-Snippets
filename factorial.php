/*
    Function to determine the factorial of a value
    between (and including) 0 and 12.
*/
function factorial(int $n): int {
  $retVal = 1;
  $i = 0;
  
  if (($n < 0) || ($n > 12)) {
    throw new RangeException("Input Must Be Within 0-12 Range");
    return;
  }
  
  if ($n != 0) {
    for ($i = $n; $i > 0; $i--) {
      $retVal *= $i;
    }
  }
  
  return $retVal;
}
