<h1> File index.php </h1>
<?php
$mr_arr = array(1,2,3,4,5,6,7,8,9,0);
print_r($mr_arr);
echo "<br>";

/* ตัวอย่างลูป (ถูกคอมเมนต์ไว้)
for ($i = 0; $i < sizeof($mr_arr); $i++) {
    echo $mr_arr[$i];
    echo "<br>";
}
*/
?>

<?php
$mr_arr2[] = 1;
$mr_arr2[] = 2;
$mr_arr2[] = 3;
print_r($mr_arr2);
echo "<br>";

if (false) {
    echo "if False";
} else if (true && false) {
    echo "else true";
} else {
    echo "else";
}
echo "<br>";

$myvar = "Hello World";
$myvar = 1;

echo "<h1>".$myvar."</h1>";
echo "<br>";

$x = 1;
function modifyX() {
    global $x;
    $x = 2;
}
echo $x; // แสดงค่า 1
echo "<br>";
modifyX();
echo $x; // แสดงค่า 2
echo "<br>";

echo "1.5" + "3"; // แสดงค่า 4.5
echo "<br>";

$x = "A";
$x++;
echo $x; // แสดงค่า B
echo "<br>";
?>
