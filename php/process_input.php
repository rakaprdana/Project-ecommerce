<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="webiste icon" type="png" href="/ecommerce/images/logo.png">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/twitter.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/instagram.css' rel='stylesheet'>
    <link rel="stylesheet" href="/ecommerce/css/message.css">
    <title>KOPITARA - Coffee House</title>
</head>
<body>
    <div class="page">
        <div class="popup">
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
                echo "<p class='success'>Pesanan berhasil disimpan.</p>";
            } else {
                echo "<p class='error'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
            }
  
            mysqli_close($conn);
            ?>
            <button onclick="redirectToPage()">Back to main menu</button>
        </div>
    </div>
    <script>
        function redirectToPage(){
            window.location.href = "/ecommerce/index.html";
        }
    </script>
</body>
</html>