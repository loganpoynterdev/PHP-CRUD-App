<html>
    <head>
    <title>PHP CRUD App</title>
    <?php 
    //db credentials from .env
    $servername = 'mariadb';
    $username = 'testuser';
    $password = 'testpassword';
    $dbname = 'testdb';  

    //establish db connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_POST['records'] != NULL){$records_opt = $_POST['records'];}
    if ($_POST['search'] != NULL){$search = $_POST['search'];}

    //structure sql query
    $sql = "SELECT * FROM project9 WHERE $records_opt = '$search' ";
    $result = $conn->query($sql);
    ?>
    <!-- render nav -->
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
        echo "</table>";?>
        <!-- render delete confirmation -->
        <br>
        <form action='confirmation.php' method='post'>
        <h2>Confirm ID to delete</h2>
        <input type='text' id='uid' name='uid' placeholder='User ID'><br>
        <input type='submit' value='Confirm Delete'></input>
        <?php
        
        } else {
            echo "0 results"; ?>
            <button class="btnBack" style="margin: 5px" onclick="history.back(-1)">Go back</button>
        <?php
        }
        //close connection
        $conn->close();
        ?>
        
    </div>
     </div>
    
        </div>
    </body>
</html>