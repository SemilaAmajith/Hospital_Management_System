<!DOCTYPE html>
<html>
<head>
  <title>Admin </title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Admin </h1>
    <form action="login.php" method="post">
    	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
    	<label>User Name</label>
      <input type="text" name="username" placeholder="Username" required><br>

      <label>Password</label>
      <input type="password" name="password" placeholder="Password" required><br>
      <button type="submit">Login</button>
    </form>
  </div>
</body>
</html>
