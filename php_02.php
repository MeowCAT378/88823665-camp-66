<?php

echo "<head>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<link href='https://fonts.googleapis.com/css2?family=Kanit&display=swap' rel='stylesheet'>";
echo "</head>";
echo "<div style='display: flex; flex-direction: column; align-items: center; justify-content: flex-start; overflow-y: auto; max-height: 90vh;'>";
echo "<h3 style='font-size: 2.5em; margin-bottom: 20px; font-family: \"Kanit\", serif;'>เลขคู่และเลขคี่จาก 1 ถึง 100</h3>";

for ($i = 1; $i <= 100; $i++) {
    // ตรวจสอบว่าเป็นเลขคู่หรือเลขคี่
    if ($i % 2 == 0) {
        echo "<div style='font-size: 1.5em; font-family: \"Kanit\", serif;'>$i เป็น เลขคู่</div>";
    } else {
        echo "<div style='font-size: 1.5em; font-family: \"Kanit\", serif;'>$i เป็น เลขคี่</div>";
    }
}

echo "</div>";
?>
