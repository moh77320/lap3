<?php
// هذا ملف get_example.php

if (isset($_GET['name'])) {
    $name = htmlspecialchars($_GET['name']);
    echo "مرحباً، " . $name . "!";
} else {
    echo "يرجى إدخال اسم.";
}
?>

<!-- نموذج لإرسال البيانات عبر GET -->
<form action="get_example.php" method="get">
    <label for="name">اسمك:</label>
    <input type="text" id="name" name="name">
    <input type="submit" value="إرسال">
</form>
