<?php
//Soal No 3 Bagian A
echo "<b>Triangle Upside Left</b>";
echo "<br><br>";
function printTriangleUpsideLeft($rows) {
for ($i = 1; $i <= $rows; $i++) {
for ($j = 1; $j <= $i; $j++) {
echo "$";
}
echo "<br>";
}
}
printTriangleUpsideLeft (6);

//Soal No 3 Bagian B
echo "<b>Triangle Upside Right</b>";
echo "<br><br>";
function printTriangleUpsideRight($rows) {
for ($i = 1; $i <= $rows; $i++) {
for ($j = $rows; $j >= 1; $j--) {
if ($j <= $i) {
echo "#";
} else {
echo "&nbsp;&nbsp;";
}
}
echo "<br>";
}
}
printTriangleUpsideRight(9);

//Soal No 3 Bagian C
echo "<b>Triangle Downside Left</b>";
echo "<br><br>";
function printTriangleDownsideLeft($rows) {
for ($i = $rows; $i >= 1; $i--) {
for ($j = 1; $j <= $i; $j++) {
echo "@";
}
echo "<br>";
}
}
printTriangleDownsideLeft(10);

//Soal No 3 Bagian D
echo "<b>Triangle Downside Right</b>";
echo "<br><br>";
function printTriangleDownsideRight($rows) {
for ($i = 1; $i <= $rows; $i++) {
for ($j = 1; $j <= $rows; $j++) {
if ($j >= $i) {
echo "*";
} else {
echo "&nbsp;&nbsp;";
}
}
echo "<br>";
}
}
printTriangleDownsideRight(7);
?>