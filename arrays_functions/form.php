


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
if(isset($_GET['error']) && $_GET['error']==1) {
    echo "<p style='color:#780101;'>Enter a string</p>\n";
}

?>
    <form action="process.php" method="get">
        <label for="string">String:</label>
        <input type="text" id="string" name="string"><br>
        <input type="submit" value="Send" name="submit">

    </form>
</body>

</html>
