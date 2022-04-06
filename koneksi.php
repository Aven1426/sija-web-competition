<?php 

$connection = mysqli_connect('localhost', 'root');
mysqli_select_db($connection,'contact');
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['message'];

$query = "INSERT INTO `user`(`nama`, `email`, `message`) VALUES ('". $nama ."', '". $email ."', '". $pesan ."')";

echo($nama);
echo($email);
echo($pesan);

mysqli_query($connection, $query);


echo ("Message is send");

?>