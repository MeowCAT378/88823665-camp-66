<?php

echo "<head>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<link href='https://fonts.googleapis.com/css2?family=Kanit&display=swap' rel='stylesheet'>";
echo "</head>";

echo "<div style='display: flex; justify-content: center; align-items: center; height: 100vh; flex-direction: column;'>";
echo "<h3 style='font-size: 2.5em; margin-bottom: 20px; font-family: \"Kanit\", serif;'>ตารางสูตรคูณแม่ 6</h3>";

for ($i = 1; $i <= 12; $i++) {
    $result = 6 * $i;
    echo "<p style='font-size: 1.5em; font-family: \"Kanit\", serif; margin: 10px;'>6 x $i = $result</p>";
}

echo "</div>";
?>
