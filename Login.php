<?php

    include 'DBconfig.php';
    session_start;
    $username= mysqli_real_escape_string($con,$_POST["username"]);
    $password= mysqli_real_escape_string($con,$_POST["password"]);
    $password=md5($password);
    $sql="select * from Users where username='$username' and password='$password'";

    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"];
          $id=$row["id"];
    }
      $_SESSION["id"] = $id;
       header("Location:Login/Welcome.php");
} else {
    echo "0 results";
}

?>
