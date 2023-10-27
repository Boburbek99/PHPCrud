<?php
require_once '/OSPanel/domains/localhost/php.api.ru/config/connect.php ';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $footer = $_POST['footer'];
    $body = $_POST['body'];
    $email = $_POST['email'];

    // Make sure to use prepared statements to prevent SQL injection
    $stmt = mysqli_prepare($connect, "INSERT INTO `Crud` (`name`, `email`, `body`, `footer`, `description`, `title`, `price`) VALUES (?, ?, ?, ?, ?, ?, ?)");

    // Bind the values to the prepared statement
    mysqli_stmt_bind_param($stmt, "sssssss", $title, $email, $body, $footer, $description, $title, $price);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        echo "Record inserted successfully!";
    } else {
        echo "Error: " . mysqli_error($connect);
    }
  echo json_encode($stmt);
    mysqli_stmt_close($stmt);

    header("Location: /");
}
?>

