<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>HYS AKADEMİ</title>



  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- progress barstle -->
  <link rel="stylesheet" href="css/css-circular-prog-bar.css">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />




  <link rel="stylesheet" href="css/css-circular-prog-bar.css">


</head>

<body>
    
<form action="baglanti_mat.php" method="POST">
İsim: <input type="text" name="namee" value="" required placeholder="Lütfen Adınızı Girin."><br>
Soyisim: <input type="text" name="lname" value="" required placeholder="Lütfen Soyadınızı Girin."><br>
<input type="submit" value="Giriş">
</form>
<?php /*
$servername = "localhost";
$database = "hilal_db";
$username = "hilal";
$password = "12345";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully  ", "<br>"; 

$sqll = "INSERT INTO kayit (isim,soy_isim) VALUES  ('$_POST[namee]','$_POST[lname]')";
$sonuc=mysqli_query($conn,$sqll);

if (mysqli_query($conn, $sqll)) {
      echo "Sınav sayfasına yönlendiriliyorsunuz..."; 
      
} else {
      echo "Error: " . $sqll . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
*/
?>
</body>

</body>

</html>