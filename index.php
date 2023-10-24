<?php 
    include("database.php");

    $sql = "SELECT * FROM list;";
    $result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            color: white;
            background-color: black;
        }

        .title {
            font-size: 4vw;
            text-align: center;
        }

        table {
            border: 0.1vw solid white;
        }

        .button {
            display: block;
            text-decoration: none;
            color: white;
            width: 9vw;
            height: 3vw;
            font-size: 1.25vw;
            text-align: center;
            line-height: 3vw;
            border: 0.2vw solid white;
            transition: 0.25s all ease-in-out;
            margin-top: 3vw;
        }

        .button:hover {
            background-color: white;
            color: black;
            transition: 0.25s all ease-in-out;
        }
    </style>
</head>
<body>
    <h1 class="title">Biodata Table</h1>
    <table border="1" cellpadding="10" align="center">
        <tr>
            <td>NO</td>
            <td>Name</td>
            <td>Birth</td>
            <td>Address</td>
            <td>Origin</td>
        </tr>
        <tr>
            <?php 
                while($row = mysqli_fetch_assoc($result)) {
            ?>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['birth'];?></td>
            <td><?php echo $row['address'];?></td>       
            <td><?php echo $row['origin'];?></td>
            
        </tr>
            <?php 
                }
            ?>
    </table>
    <center><a href="insert.php" class="button">Add new</a></center>
</body>
</html>