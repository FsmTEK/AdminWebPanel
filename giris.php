<?php
require_once ("s.php");
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Bootstrap Snippet: Login Form</title>
  
  
  <link rel='stylesheet' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

      <link rel="stylesheet" href="ss/sisi.css">

  
</head>

<body>
<?php
if($_POST)
{
$kadi =$_POST["kadi"];
$password =$_POST['password'];
if(empty($password) || empty($kadi))
{
echo 'Kullanıcı Adınızı & Şifrenizi Boş Bırakmayınız...';
} else {
$query = $db->query("SELECT * FROM uye WHERE kadi='{$kadi}' AND sifre='{$password}'")->fetch(PDO::FETCH_ASSOC);
$sql -> execute();
if($sql -> rowCount()){
$_SESSION["oturum"]=TRUE;
$_SESSION["id"]=$query["id"];
$_SESSION["kadi"]=$query["kadi"];
header("Refresh:2;url=index.php");
echo 'Giriş Yapıldı';
}
else {echo 'Giriş Başarısız';}
}
}else {echo 'Formu Doldurunuz';}
?>
    <div class="wrapper">
    <form class="form-signin">       
      <h2 class="form-signin-heading">Please login</h2>
      <input type="text" class="form-control" name="username" placeholder="Kullanıcı adı" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Şifre" required=""/>
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
    </form>

  </div>
  
  

</body>

</html>
