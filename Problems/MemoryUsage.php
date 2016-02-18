<?php



$names = array('A','DFD','dfde','jhkjh','sds');
class MemoryTestWithTem {

  public function capitalizeAndReverse(array $names) {
      $capitalized = array_map('ucfirst', $names);

      $capitalizedAndReversed = array_map('strrev', $capitalized);

      return $capitalizedAndReversed;
  }


  public function capitalizeAndReverseTWO(array $names) {
      return self::reverse(
          self::capitalize($names)
      );
  }

  private static function reverse(array $names) {
      return array_map('strrev', $names);
  }

  private static function capitalize(array $names) {
      return array_map('ucfirst', $names);
  }


  public function capitalizeAndReverseThree(array $names) {
      return array_map('strrev',  array_map('ucfirst', $names));
  }


}
$memoryTest = new MemoryTestWithTem();
echo " - initial  :  ";
echo memory_get_usage() . "  \n   Start: ";

// $memoryTest->capitalizeAndReverse($names);

// $memoryTest->capitalizeAndReverseTWO($names);

$memoryTest->capitalizeAndReverseThree($names);

echo memory_get_usage() . "  \n  End ";





