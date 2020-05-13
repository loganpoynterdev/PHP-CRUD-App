<html>
    <head>
    <title>PHP CRUD App</title>
    <?php 
    require __DIR__ . '/vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    //db credentials from .env
    $servername = getenv('SERVER');
    $username = getenv('USERNAME');
    $password = getenv('PASSWORD');
    $dbname = getenv('DATABASE'); 

    //establish db connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    //structure sql query
    $sql = "SELECT * FROM project9 ";
    $result = $conn->query($sql);
    ?>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class='navbar'>
    <a href='search.php'>Search</a>
    <a href='add.php'>Add</a>
    <a href='delete.php'>Delete</a>
    </div>
     <div class="container">
    <div class="content">
        <?php
        if ($result->num_rows > 0) {
        echo "<table><tr><th>User ID</th><th>First Name</th><th>Last Name</th><th>Age</th><th>Gender</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>"
            .$row["userID"]."</td><td>"
            .$row["fName"]."</td><td>"
            .$row["lName"]."</td><td>" 
            .$row["age"]."</td><td>"
            .$row["gender"];
        }
        echo "</table>";
        
    } else {
        echo "0 results";
    }
        //close connection
        $conn->close();
        ?>
        <button class="btnBack" style="margin: 5px" onclick="history.back(-1)">Go back</button>
    </div>
     </div>    
    </div>
    </body>
</html>