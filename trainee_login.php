<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
  <link rel="stylesheet" href="1.css">

	<style>
		body {
  margin: 0;
  padding: 0;
  background: url(https://picsum.photos/2500/1500?image=1041);
  background-size: cover;
  font-family: sans-serif;
}

.box {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 25rem;
  padding: 2.5rem;
  box-sizing: border-box;
  background: rgba(0, 0, 0, 0.6);
  border-radius: 0.625rem;
}

.box h2 {
  margin: 0 0 1.875rem;
  padding: 0;
  color: #fff;
  text-align: center;
}

.box .inputBox {
  position: relative;
}

.box .inputBox input {
  width: 100%;
  padding: 0.625rem 0;
  font-size: 1rem;
  color: #fff;
  letter-spacing: 0.062rem;
  margin-bottom: 1.875rem;
  border: none;
  border-bottom: 0.065rem solid #fff;
  outline: none;
  background: transparent;
}

.box .inputBox label {
  position: absolute;
  top: 0;
  left: 0;
  padding: 0.625rem 0;
  font-size: 1rem;
  color: #fff;
  pointer-events: none;
  transition: 0.5s;
}

.box .inputBox input:focus ~ label,
.box .inputBox input:valid ~ label,
.box .inputBox input:not([value=""]) ~ label {
  top: -1.125rem;
  left: 0;
  color: #03a9f4;
  font-size: 0.75rem;
}

.box input[type="submit"] {
  border: none;
  outline: none;
  color: #fff;
  background-color: #03a9f4;
  padding: 0.625rem 1.25rem;
  cursor: pointer;
  border-radius: 0.312rem;
  font-size: 1rem;
}

.box input[type="submit"]:hover {
  background-color: #1cb1f5;
}
	</style>
</head>
<body>
<div class="topnav">
  <a class="active"href="index"><i class="fa fa-fw fa-home"></i>Home</a>
  <a href="contact.php"><i class="fa fa-fw fa-envelope"></i> Contact</a>
  <div class="topnav-right">
    <a href="login.php"> <i class="fa fa-fw fa-user"></i>Login</a>
  </div>
</div>
<div class="box">
  <h2>Trainee Login</h2>
  <form action="all.php" method="post">
    <div class="inputBox">
      <input type="text" name="add_id" required>
      <label>Adimission ID</label>
</div>
<div class="inputBox">
      <input type="password" name="mob" required>
      <label>Mobile</label>
    </div>
    <input type="submit" name="submit" value="Sign In">
  </form>
</div>
</body>
</html>