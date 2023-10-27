<?php
 print_r($_GET);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>ADD NEW PRODUCT</p>
    <form action="vendor/add.php" method="post">
        <p>Titile</p>
        <input type="text" name="title">
        <p>Description</p>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
        <p>Price</p>
        <input type="text" name="price"><br><br> 
        <p>Email</p>
        <input type="text" name="email">
        <p>body</p>
        <input type="text" name="body">
        <p>footer</p>
        <input type="text" name="footer">
        <button type="submit" value="send">Add new proiduct</button>
    </form> 
</body>
</html>