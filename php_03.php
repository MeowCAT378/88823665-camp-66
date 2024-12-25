<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตารางสูตรคูณ</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <style>
        body { font-family: "Kanit", serif; text-align: center; }
        table { margin: 20px auto; border-collapse: collapse; }
        table, th, td { border: 1px solid #ccc; padding: 10px; }
        h3 { font-size: 2em; }
        input { padding: 5px; font-size: 1em; width: 100px; }
    </style>
</head>
<body>

<h3>กรุณากรอกสูตรที่ต้องการ</h3>

<form method="POST">
    ตัวคูณ: <input type="text" name="multiplication" pattern="\d+" title="กรุณากรอกเฉพาะตัวเลข" required>
    ตัวถูกคูณ: <input type="text" name="end" pattern="\d+" title="กรุณากรอกเฉพาะตัวเลข" required>
    <input type="submit" value="เสร็จสิ้น">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $multiplication = $_POST['multiplication'];
    $end = $_POST['end'];

    echo "<h3>ตารางสูตรคูณของ $multiplication</h3>";
    echo "<table><tr><th>ตัวคูณ</th><th>x</th><th>ตัวถูกคูณ</th><th>=</th><th>ผลลัพธ์</th></tr>";

    for ($i = 1; $i <= $end; $i++) {
        $result = $multiplication * $i;
        echo "<tr><td>$multiplication</td><td>x</td><td>$i</td><td>=</td><td>$result</td></tr>";
    }

    echo "</table>";
}
?>

</body>
</html>
