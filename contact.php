<!DOCTYPE html>
<html lang="id" class="Pelangi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="contact.css">
</head>

<body>
    <div class="contact-in">
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.522522193329!2d106.88512551393188!3d-6.194573462410719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f49532b5b715%3A0xa4012b68ec698d4e!2sSMK%20Negeri%2026%20Jakarta!5e0!3m2!1sid!2sid!4v1649153649267!5m2!1sid!2sid"
                width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="contact-form">
            <h1>Contact Us</h1>
            <form method="POST">
                <div class="nama">
                    <label for="nama">Name: </label>
                    <input class="contact-form-txt" id="nama" type="text" placeholder="Your Full Name" required="" name="nama" />
                </div>
                <div class="email">
                    <label for="email">Email: </label>
                    <input class="contact-form-txt" id="email" type="text" placeholder="Your E-mail"  required=""  name="email"/>
                </div>
                <div class="pesan">
                    <label for="pesan">Message: </label>
                    <textarea class="contact-form-textarea" id="pesan" placeholder="Send Your Message Here"  required="" name="pesan"></textarea>
                </div>
                <button class="contact-form-btn" type="submit"  onclick="submitForm()">Submit</button>
            </form>
        </div>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $connection = mysqli_connect('localhost','root');
        mysqli_select_db($connection,'contact');
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $pesan = $_POST['pesan'];
        
        $query = "INSERT INTO `user`(`nama`, `email`, `pesan`) VALUES ('$nama', '$email', '$pesan')";
        $sql = mysqli_query($connection, $query);

        if( $sql ) {
          header('Location: index.php?status=sukses');
      } else {
          header('Location: index.php?status=gagal');
      }
    }
  ?>

    <script src="contact.js"></script>

</body>

</html>