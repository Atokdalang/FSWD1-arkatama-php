<?php
function printTriangle($rows) {
if ($rows === 'Triangle Upside Left') {
// implementasi pattern A
echo "Triangle Upside Left:<br>";
for ($i = 1; $i <= 5; $i++) {
for ($j = 1; $j <= $i; $j++) {
echo "*";
}
echo "<br>";
}
} elseif ($rows === 'Triangle Upside Right') {
// implementasi pattern B
echo "Triangle Upside Right:<br>";
for ($i = 1; $i <=5 ; $i++) {
for ($j = 5; $j >= 1; $j--) {
if ($j <= $i) {
echo "*";
} else {
echo "&nbsp;&nbsp;";
}
}
echo "<br>";
}
} elseif ($rows === 'Triangle Downside Left') {
// implementasi pattern C
echo "Triangle Downside Left:<br>";
for ($i = 5; $i >= 1; $i--) {
for ($j = 1; $j <= $i; $j++) {
echo "*";
}
echo "<br>";
}
} elseif ($rows === 'Triangle Downside Right') {
// implementasi pattern C
echo "Triangle Downside Right:<br>";
for ($i = 1; $i <= 5; $i++) {
for ($j = 1; $j <= $i-1; $j++) {
echo "&nbsp;&nbsp;";
}
for ($j = $i; $j <= 5; $j++) {
echo "*";
}
echo "<br>";
}
} else {
echo "Invalid pattern.";
}
}
printTriangle('Triangle Upside Left');
printTriangle('Triangle Upside Right');
printTriangle('Triangle Downside Left');
printTriangle('Triangle Downside Right');
printTriangle('Invalid Pattern');
?>