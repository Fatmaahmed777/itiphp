<?php
echo "Welcome to php<br>";
print "Welcome to php";
echo "<br>";
$x = 5;
$y = "welcome";
$z = true;
echo $y;
echo "<br>";
echo $x;
echo "<br>";
echo $z;
echo "<br>";
echo gettype($x);
echo "<br>";
echo gettype($y);
echo "<br>";
echo gettype($z);
echo "<br>";
echo "Method 1 to Print numbers" . "<br>";
for ($i = 0; $i <= 15; $i++) {
    echo "$i";
    echo "<br>";
}
echo "Method 2 to Print numbers" . "<br>";

$i = 0;
while ($i <= 15) {
    echo "$i";
    echo "<br>";
    $i++;
}
echo "<hr>";
const Value = "ITI";
echo "My Const Value is : ";
echo Value;
echo "<hr>";
$variable_one = 10;
$variable_two = "Aya";
$variable_third = true;
echo $variable_one;
echo "<br>";
echo $variable_two;
echo "<br>";
echo $variable_third;
echo "<br>";
echo "<hr>";
$m = 50;
$n = 20;
$result = (int)($m + $n);
if ($result > 50) {
    echo " Accepted";
} else {
    echo "Not accepted";
}
echo "<hr>";
echo "<table border='1'>
 <tr>
     <td>Salary of MR.A is </td>
     <td>1000$</td>
 </tr>
 <tr>
     <td>Salary of MR.B is </td>
     <td>1200$</td>
 </tr>
 <tr>
     <td>Salary of MR.C is </td>
     <td>1400$</td>
 </tr>
     </table>";
echo "<hr>";
$t = 50;
function anyToString($t)
{
    echo $t;
}

echo anyToString($t);
