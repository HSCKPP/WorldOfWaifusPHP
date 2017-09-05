<li> Ejercicio 1: </li>
<li> For: </li>
<?php
for ($x = 2; $x <= 20; $x=$x+2) {
    echo "$x ";
}
?>
<p></p>
<li> While: </li>
<?php
$x = 0;
while($x <= 20) {

    echo "$x ";
    $x=$x+2;
}
?>
<p></p>
<li> Do While: </li>
<p></p>
<?php
$x = 2;

do {
    echo "$x ";
    $x=$x+2;
} while ($x <= 20);
?>