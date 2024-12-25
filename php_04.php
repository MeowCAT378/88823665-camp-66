<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตรวจสอบเลขคู่หรือคี่</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <style>
        body { font-family: "Kanit", serif; text-align: center; }
        input { padding: 5px; font-size: 1em; margin: 10px; }
        .result { margin-top: 20px; font-size: 1.2em; }
    </style>
</head>
<body>

<h3>กรุณากรอกตัวเลขเริ่มต้นและสิ้นสุด</h3>

<form method="POST">
    ตัวเลขเริ่มต้น: <input type="number" name="start" required>
    ตัวเลขสิ้นสุด: <input type="number" name="end" required>
    <input type="submit" value="ตรวจสอบเลขคู่หรือคี่">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $start = $_POST['start'];
    $end = $_POST['end'];

    echo "<div class='result'><h3>ผลลัพธ์</h3>";
    for ($i = $start; $i <= $end; $i++) {
        if ($i % 2 == 0) {
            echo "$i เป็นเลขคู่<br>";
        } else {
            echo "$i เป็นเลขคี่<br>";
        }
    }
    echo "</div>";
}
?>

</body>
</html>
