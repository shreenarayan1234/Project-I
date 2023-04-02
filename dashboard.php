<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="CSScode/style.css">
</head>
<body>

        <div class="image">
          <img src="images/book2.png"/>
        </div>

          <div class="library">
            <h1><span class="header">Library</span>&nbsp;&nbsp; Management System</h1>
          </div>

<div class="tab">
  <button class="menulink" onclick="myFunction(event, 'Dashboard')" id="defaultOpen">Dashboard</button>
  <button class="menulink" onclick="myFunction(event, 'Books')">Books</button>
  <button class="menulink" onclick="myFunction(event, 'Issue Books')">Issue Books</button>
  <button class="menulink" onclick="myFunction(event, 'User')">User</button>
  <button class="menulink" onclick="myFunction(event, 'Logout')">Logout</button>
</div>

<div id="Dashboard" class="tabcontent">
  <h3>Dashboard</h3>
  <p>Dashboard Contain total, available, return and issue books</p>
</div>

<div id="Books" class="tabcontent">
  <h3>Books</h3>
  <p>Books contain author, publisher name.</p> 
</div>

<div id="Issue Books" class="tabcontent">
  <h3>Issue Books</h3>
  <p>Issue Books is the books given date.</p>
</div>

<div id="User" class="tabcontent">
  <h3>User</h3>
  <p>User Added by Admin.</p>
</div>

<div id="Logout" class="tabcontent">
  <h3>Logout</h3>
  <p>Logout of the page.</p>
</div>

<script src="JScode/dash.js">
</script>
   
</body>
</html> 
