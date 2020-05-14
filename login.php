<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/login.css">


</head>
<body style="background:grey;">

<form action="action_page.php" method="POST" style="max-width:400px;  margin-left: auto;
  margin-right: auto;
  margin-top: 10%;
  text-align: left;">
  <h2 class="ortala2">Üye Girişi</h2>
  <div class="input-container">
    <i class="fa fa-user icon" ></i>
    <input class="input-field" type="text" placeholder="Kullanıcı Adı" name="usrnm">
  </div>
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Şifre" name="psw" >
  </div>
  <div>
     <label>
    <input type="checkbox" name="remember"> Remember me
  </label>
  <br>
  <br>
  </div>
<div class="input-container">
   <button type="submit" id="btngiris" name="btngiris" class="btn">Giriş Yap</button>
</div>

 <br>
  <br>
  </div>
<div class="input-container">
   <button type="submit" id="btnuyeol" name="btnuyeol" class="btn2">Üye Ol</button>
</div>
</form>

</body>
</html>
