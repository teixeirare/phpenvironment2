<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Throwing an Exception</title>
    <?php include('../includes/styles.php'); ?>
</head>

<body>
    <h1>Throwing Exception</h1>
    <a href="/"> Home</a>
    <div>
        <?php
            try{
                echo "<h2> Hello, Everything is fine.<H2>";

                throw new Exception("Something went wrong");

                // This code will never execute
                echo "<h2>Hello. Everything is not fine.</h2>";

            } catch (Exception $ex) {
                echo "Error: " . $ex->getMessage();

            }
        ?>

    </div>
</body>

</html>