<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Web Server</title>
</head>
<body>
    <h2>Hello Advanced Web Server!</h2>
    <p><?php echo 'PHP-Version: '.phpversion(); ?></p>
    <p><a href="//localhost:5502">Go to Phpmyadmin</a></p>
    <p>
    <?php
        $servername = 'db';
        $username = 'user1';
        $password = 'user1';

        $conn = new mysqli($servername, $username, $password);
        if ($conn->connect_error) {
            exit('Connection failed: '.$conn->connect_error);
        }

        echo 'PHP connected successfully to DB';
    ?>
    </p>
    <sub>Made by Webmedia 2.0 in Karlsruhe</sub>
</body>
</html>
