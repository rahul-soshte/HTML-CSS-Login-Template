<html>
<head>
<title>Login and SignUp Template</title>
<link rel="stylesheet" type="text/css" href="css/createaccount.css">
</head>
<body>
<div class="register-page">
  <div class="form">
    <form class="register-form">
      <input type="text" placeholder="Name" id="name" />
      <input type="text" placeholder="Email Address" id="email"/>
      <input type="text" placeholder="Confirm Email Address" id="email_address_confirm"/> 
      <input type="password" placeholder="Password" id="password"/>
      <input type="button" id="createaccountbutton" onclick="location.href='userdashboard.php';" value="Create Account" />
      <span class="message">Already registered? <a href="index.php">SIGN IN</a></span>
    </form>
  </div>
</div>
</body> 
</html>