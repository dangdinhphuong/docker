<html>

<head>
    <title>Hello World</title>
</head>

<body>
    <?php
    echo "Hello, Worldjkhjkhjk!";

    try {
        $dbh = new PDO('mysql:host=db;port=3306;dbname=sampleDB', 'root', 'root');
        $dbh->exec('CREATE TABLE IF NOT EXISTS sample_table(
                     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                     sample_column VARCHAR(30) NOT NULL
                );');
        echo '<br>';
        echo "Connect success";
    } catch (PDOException $e) {
        echo 'Error';
        echo '<br>';
        echo $e;
        die();
    }
    ?>
</body>

</html>