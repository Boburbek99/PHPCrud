    <?php
    // $hostname = "localhost";
    // $username = "root";
    // $password = "";
    // $database = "apiadmin";

    // $mysqli = new mysqli($hostname, $username, $password, $database);

    // if ($mysqli->connect_error) {
    //     die("Ошибка подключения к базе данных: " . $mysqli->connect_error);
    // }
header ("Content-type: jsons/application");
$connect = mysqli_connect('localhost', 'root', password:'',database:'apiadmin');
   

    ?>
