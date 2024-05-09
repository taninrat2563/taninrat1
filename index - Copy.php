<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สวัสดีตอนเช้าจ้า</title>
</head>
<body>
    <?php
        date_default_timezone_set('Asia/Bangkok');
        $time = date("H");

        if ($time < "12") {
            echo "<h1>สวัสดีตอนเช้า</h1>";
        } else {
            echo "<h1>สวัสดีตอนบ่าย</h1>";
        }
    ?>
</body>
</html>