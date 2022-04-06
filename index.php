<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tess</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <Form>
        <li>
            <ol>Hai</ol>
        </li>
    </Form>

    <a href="contact.php" class="contact">
        <h1>Contact</h1>
        
        <?php if(isset($_GET['status'])): ?>
        </a>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo '<script type-=text/javascript>';
                echo 'alert ("Berhasil ^_^")';
                echo '</script>';
            } else {
                echo '<script type-=text/javascript>';
                echo 'alert ("Tidak Berhasil :(")';
                echo '</script>';
            }
        ?>
    </p>
    <?php endif; ?>
</body>
</html>