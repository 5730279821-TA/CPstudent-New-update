<?php
    DEFINE('DB_USERNAME', 'root');
    DEFINE('DB_PASSWORD', 'root');
    DEFINE('DB_HOST', 'localhost');
    DEFINE('DB_DATABASE', 'CPstudent CARE');
    $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

    $q = "SELECT login, password FROM teacher";
    $result = $mysqli->query($q);
    $count = 1;
    $total = mysqli_num_rows($result);
    while ($row = $result->fetch_assoc()) {
        if ($row["login"] == $_GET["login"] && $row["password"] == $_GET["password"]) {
            printf("<meta http-equiv=\"refresh\" content=\"0;url=index.php?login=%s\" />", $row["login"]);
        }
    }
    echo "Invalid username and password";
    echo "<meta http-equiv=\"refresh\" content=\"3;url=login.php\" />";
?>