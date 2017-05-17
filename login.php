<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Bootstrap Snippet: Login Form</title>
  
  
  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

      <link rel="stylesheet" href="css/style1.css">

  
</head>

<body>

    <div class="wrapper">  
    <form action="auth.php">
    <div class="container">   
      <h2 class="form-signin-heading">Авторизация</h2>
      <input type="text" class="form-control" name="uname" placeholder="Email Address" required>
      <input type="password" class="form-control" name="psw" placeholder="Password" required>      
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Запомнить меня ?
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Вход</button>   
    </form>
  </div>
  
  
</body>
</html>

