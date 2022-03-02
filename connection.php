<?php

$username = "root";
$password = "";
$server = "localhost";
$db = "inqarydb";


$con = mysqli_connect($server, $username, $password, $db);

if($con){
    ?>
    <script>
        alert("Connection Successfully");
    </script>
    <?php

    // echo "Connection Successfully";
}else{
    
    // echo "Unable to Connect";
    die("Sorry! Unable to Connect" . mysqli_connect_error());
}

?>