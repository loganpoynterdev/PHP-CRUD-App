<html>
  <head>
  <title>PHP CRUD App</title>
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
            <form action='submitted.php' method='post'>
                <h2>Add record</h2>
                <input type='text' id='fname' name='fname' placeholder='First Name' autocomplete='off'><br>
                <input type='text' id='lname' name='lname' placeholder='Last Name' autocomplete='off'><br>
                <input type='text' id='age' name='age' placeholder='Age' autocomplete='off'><br>
                <input type='text' id='gender' name='gender' placeholder='Gender' autocomplete='off'><br>
                <input type='submit' value='Submit Record'></input>
            </form>
        </div>
     </div>
    </body>
</html>