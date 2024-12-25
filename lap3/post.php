<?php
// هذا ملف post_example.php

if (isset($_POST['name'])) {
    $name = htmlspecialchars($_POST['name']);
    echo "مرحباً، " . $name . "!";
} else {
    echo "يرجى إدخال اسم.";
}
?>

<!-- نموذج لإرسال البيانات عبر POST -->
<form action="post_example.php" method="post">
    <label for="name">اسمك:</label>
    <input type="text" id="name" name="name">
    <input type="submit" value="إرسال">
</form>