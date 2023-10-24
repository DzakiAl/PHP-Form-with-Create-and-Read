<?php
    include("database.php");

    if (isset($_POST["name"])) {
        $name = $_POST["name"];
    } else {
        $name = ''; // or handle the missing data as appropriate
    }
    
    if (isset($_POST["birth"])) {
        $birth = $_POST["birth"];
    } else {
        $birth = ''; // or handle the missing data as appropriate
    }
    
    if (isset($_POST["address"])) {
        $address = $_POST["address"];
    } else {
        $address = ''; // or handle the missing data as appropriate
    }
    
    if (isset($_POST["origin"])) {
        $origin = $_POST["origin"];
    } else {
        $origin = ''; // or handle the missing data as appropriate
    }

    // Sanitize the input data
    $name = mysqli_real_escape_string($conn, $name);
    $birth = mysqli_real_escape_string($conn, $birth);
    $address = mysqli_real_escape_string($conn, $address);
    $origin = mysqli_real_escape_string($conn, $origin);
    
    $sql = "INSERT INTO list (name, birth, address, origin) VALUES ('$name', '$birth', '$address', '$origin')";    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Form</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: black;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            margin: 45vh 0 0 0;
        }
    </style>
</head>
<body>
    <div align="center" class="container">
        <h1>
            <?php
                try {
                    mysqli_query($conn, $sql);
                    echo "Data sent to the database!";
                } catch (mysqli_sql_exception $e) {
                    echo "Data failed to send to the database: " . $e->getMessage();
                }
                
                mysqli_close($conn);
            ?>
        </h1>
    </div>
</body>
</html>