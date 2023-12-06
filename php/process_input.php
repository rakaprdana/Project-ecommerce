<?php
    $host = "localhost";
    $username = "kopitara1";
    $password = "12345";
    $database = "db_kopitara";

    $conn = mysqli_connect($host, $username, $password, $database);

    if (!$conn) {
        die("Koneksi gagal dibangun: " . mysqli_connect_error());
    }
    
    $vname = $_POST['name'];
    $vnumber = $_POST['number'];
    $vemail = $_POST['email'];
    $vmessage = $_POST['message'];

    $sql = "INSERT INTO booking (name, number, email, message) 
            VALUES ('$vname', '$vnumber', '$vemail', '$vmessage')";

    if (mysqli_query($conn, $sql)) {
        session_start();
        header("location: /ecommerce/index.html");
    } else {
        echo "<p class='error'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
    }

    mysqli_close($conn);
?>