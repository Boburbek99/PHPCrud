<?php
use function PHPSTORM_META\type;
require '/OSPanel/domains/localhost/php.api.ru/config/connect.php '; // Make sure you have a valid database connection in this file
require 'index.html';
require 'vendor/add.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        tr, th {
            padding: 10px;
        }
        th {
            border: 1px solid black;
            background-color: yellow;
        }
        td {
            border: 1px solid black;
            background-color: azure;
        }
    </style>
    <table>
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>email</th>
            <th>body</th>
            <th>footer</th>
        </tr>

        <?php
    
        $posts = mysqli_query($connect, "SELECT * FROM `Crud`");
     
        while ($product = mysqli_fetch_assoc($posts)) {
        ?>
            <tr>
                <td><?= $product['id'] ?></td>
                <td><?= $product['name'] ?></td>
                <td><?= $product['email'] ?></td>
                <td><?= $product['body'] ?></td>
                <td><?= $product['footer'] ?></td>
                <td><a href="update.php?id= <?= $product['id'] ?>" >Update</a></td>
            
            </tr>
        <?php
          
        }
        ?>
    </table>
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

<!-- 
// header( 'Content-type:json/application');

//  // Выполните SQL-запрос с помощью mysqli_query()
//  $query = "SELECT * FROM `Posts`";
//  $result = mysqli_query($mysqli, $query);

//  if ($result) {
//      // Обработайте результат запроса здесь
//  } else {
//      // Если запрос не удался, обработайте ошибку
//      echo "Ошибка запроса: " . mysqli_error($mysqli);
//  }

//  $postsList=[];

//  while($post = mysqli_fetch_array($result))
//  {
//     $postsList[]=$post;

//  }

//  echo json_encode($postsList[0]);


//  print_r($postsList);
?> -->
