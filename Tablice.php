<?php
//tablice indeksowane numerycznie
$colors=array('Red', 'Green', 'Blue');
$colors[3]='Magenta';

for ($i=0; $i < count($colors); $i++) {
  $element=$i+1;
  echo "Element $element:$colors[$i]<br>";
}

function showArray($colors){
  for ($i=0; $i < count($colors); $i++){
    $element=$i+1;
    echo "Element $element:$colors[$i]<br>";
}
}
showArray($colors);

foreach ($colors as $value) {
  echo $value,'<br>';
}
foreach ($colors as $key => $value) {
echo "$key $value<br>";
}
foreach ($colors as $key => $value) {
$elemet=$key+1;
echo "Element $element:$value<br>";
}
//tablice asociacyje
$data =array(
  'imie' => 'Jausz',
  'nazwisko' => 'Nowak',
  'wiek' => 20
);
function showArrayAssoc($tab){
  foreach ($tab as $key => $value) {
  echo "$key:$value<br>";
  }

}

 ?>
