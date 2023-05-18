<?php
//Soal No 1 Bagian A
echo "<b>Triangle Upside Left</b>";
echo "<br><br>";
function printTriangle($rows) {
for ($i = 1; $i <= $rows; $i++) {
for ($j = 1; $j <= $i; $j++) {
echo "*";
}
echo "<br>";
}
}
printTriangle(5);

//Soal No 1 Bagian B
echo "<b>Triangle Upside Right</b>";
echo "<br><br>";
function printRightTriangle($rows) {
for ($i = 1; $i <= $rows; $i++) {
for ($j = $rows; $j >= 1; $j--) {
if ($j <= $i) {
echo "*";
} else {
echo "&nbsp;&nbsp;";
}
}
echo "<br>";
}
}
printRightTriangle(5);

//Soal No 1 Bagian C
echo "<b>Triangle Downside Left</b>";
echo "<br><br>";
function printDownsideLeftTriangle($rows) {
for ($i = $rows; $i >= 1; $i--) {
for ($j = 1; $j <= $i; $j++) {
echo "*";
}
echo "<br>";
}
}
printDownsideLeftTriangle(5);

//Soal No 1 Bagian D
echo "<b>Triangle Downside Right</b>";
echo "<br><br>";
function printDownsideRightTriangle($rows) {
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
printDownsideRightTriangle(5);
?>