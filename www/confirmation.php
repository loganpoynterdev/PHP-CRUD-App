<html>
    <head>
    <title>PHP CRUD App</title>
    <?php 
    //db credentials from .env
    $servername = 'mysql';
    $username = 'testuser';
    $password = 'testpassword';
    $dbname = 'students';   

    
    //establish db connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_POST['uid'] != NULL){$uid = $_POST['uid'];}

    //structure sql query
    $sql = "DELETE FROM people WHERE peopleID = '$uid' ";

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
            if ($conn->query($sql) === TRUE) {
        echo "Record with user ID $uid deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
            ?>
        </div>
     </div>
    </body>
    </html>