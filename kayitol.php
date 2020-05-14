
<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Hide Show Password</title>
 
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=password] {
  width: 75%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container1 {
  padding: 16px;
  width: 1000px;
  padding-left: 450px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 100px) {
  .cancelbtn, .signupbtn {
     width: 50%;
  }
}
</style>


<body>


<form action="kayitolaction.php" method="POST">
  <div class="container1">
    <h1>Kayıt Ol</h1>
    <p>Lütfen bilgilerinizi giriniz!</p>
     
    <label for="ad"><b>Ad</b></label>
    <input type="text" placeholder="Adınızı Giriniz" name="ad" id="ad" >
    <label for="soyad"><b>Soyad</b></label>
    <input type="text" placeholder="Soyadınızı Giriniz" name="soyad" id="soyad" >
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Email Adresinizi Giriniz" name="email" id="email" >
    <label for="kulad"><b> Kullanıcı Adı</b></label>
    <input type="text" placeholder="Kullanıcı Adınızı Giriniz" name="kulad" id="kulad" >
    <label for="psw"><b>Şifre</b></label>
    <div>
      <input type="password" placeholder="Şifrenizi Giriniz" name="psw" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
      <input type="checkbox" onclick="Toggle()"><b>Şifreyi Göster</b
    </div>
     <label for="pswrepeat"><b>Şifre</b></label>
    <div>
    <input type="password" placeholder="Şifrenizi Doğrulayın" name="pswrepeat" id="pswrepeat" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" >
    <input type="checkbox" onclick="Toggle()"><b>Şifreyi Göster</b</div>
    
   
    <div class="clearfix">
      <button type="submit" class="cancelbtn" name="cancelbtn" id="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn" name="signupbtn" id="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#signupbtn").click(function () {
            var password = $("#psw").val();
            var confirmPassword = $("#pswrepeat").val();
            if (password != confirmPassword) {
                alert("Şifrenizi Doğrulayın!!!");
                return false;
            }
            return true;
        });

         $("#signupbtn").click(function () {
            var password = $("#psw").val();
            var confirmPassword = $("#pswrepeat").val();
            if (password != confirmPassword) {
                alert("Şifrenizi Doğrulayın!!!");
                return false;
            }
            return true;
        });
    });
</script>

</body>
</html>
