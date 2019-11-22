<?php
function value($a){
   if ($a < 0) {
     return 'ujemna';
   }else if ($a == 0){
     return 0;
   }else{
     return 'dodatnia';
   }
   }
echo value(4);
################################################################################
function getvalue():int{
  return 10.99;
}
echo gettype(getvalue());
echo "<br/>";
################################################################################
//zasięg zmiennych
$x=10;
function show(){
  echo "wartość zmiennej \$x wynosi: $GLOBALS[x]";
  //echo $GLOBALS['x'];
}
show();
echo "<br/>";
################################################################################
$y=10;
function show1(){
  global $y;
  echo "wartość zmiennej \$y wynosi: $y";
}
show1();
echo "<br/>";
################################################################################
function sum(){
  static $number=10;
  echo"\$number wynosi: $number<br>";
  $number +=10;
}
sum();//10
sum();//10
sum();//10
################################################################################
function sum1(){
$number=10;
  echo"\$number wynosi: $number<br>";
  $number +=10;
}
sum1();//10
sum1();//10
sum1();//10
echo "<br/>";
################################################################################
//argumenty funkcji
function add($x, $y=5){
  return $x +$y;
}
$z=10;
echo add(1);//6
echo add(1,3);//4
echo add($y);//4
echo "<br/>"
################################################################################
//argumenty i typy danych
/*
function mult(float $x, int $y){
  return $x * $y;
}
 echo mult(3,4);
 */
 ?>
