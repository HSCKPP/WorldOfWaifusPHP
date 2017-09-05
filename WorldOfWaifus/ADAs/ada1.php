<li> Ejercicio 1: </li>
<?php
$fecha=date('F', time ());
if($fecha==August){ ?>
Es agosto, así que hace mucho calor.
<?php
}
else{ ?>
No es agosto, por lo menos no estamos en el pico del calor.
<?php
}
?>
<li> Ejercicio 2: </li>
<?php
$x = 1;

while($x <= 9) {
if($x <= 8){
    echo "abc, ";
    $x++;
}
else{
echo "abc";
    $x++;
}
}
?>
<p></p>
<?php
$x = 1;

do {
    echo "xyz ";
    $x++;
} while ($x <= 6);
?>
<p></p>
<?php
for ($x = 1; $x <= 9; $x++) {
    echo "$x ";
}
?>
<p></p>
<?php
for ($x = 'A'; $x <= 'F'; $x++) {
    echo "Articulo ".$x.'<br>';
}
?>