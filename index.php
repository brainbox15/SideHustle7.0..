<?php
include 'header.php';
if ($connect) {
    echo "connected";
} else {
    echo "not connected";
}
?>
<br>
<?php
// A fuction that multiply 3 numbers
function multiply($num1, $num2, $num3 = 5)
{
    $result = $num1 * $num2 * $num3;
    return $result;
}

echo multiply(3, 7);

?>