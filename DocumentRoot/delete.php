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
  <form action='results.php' method='post'>
  <h2>Delete A Record</h2>
  <select name='records' id='records'>
    <option value='userID'>User ID</option>
    <option value='fName'>First Name</option>
    <option value='lName'>Last Name</option>
    <option value='age'>Age</option>
    <option value='gender'>Gender</option>
  </select><br>
  <input type='text' id='search' name='search' placeholder='Search Query'><br>
  <input type='submit' value='Search'></input>
  </form>
     </div>
</div>
  </body>
</html>