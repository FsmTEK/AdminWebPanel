<?php
include("s.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bootstrap Snippet: Login Form</title>


    <link rel='stylesheet' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

    <link rel="stylesheet" href="ss/sisi.css">


</head>

<body>
<?Php
$_kadi = "bekirff";
$_passaword = "147896325";

$DB = new DB_Class();
$arr = array("parametre_1"=>$_isimsoyisim,"parametre_2"=>$_dogumyili);
$Query = $DB->select("*", "uye", "WHERE kadi=:parametre_1 and passaword=:parametre_2", $arr);
if ($Query != null)
foreach ($Query as $Data)
{

echo $Data[kadi]. " - " .$Data[passaword];

}
?>
<div class="wrapper">
    <form class="form-signin" method="post">
        <h2 class="form-signin-heading">Please login</h2>
        <input type="text" class="form-control" name="kadi" placeholder="Kullanıcı adı" required="" autofocus=""/>
        <input type="password" class="form-control" name="passaword" placeholder="Şifre" required=""/>
        <label class="checkbox">
            <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Beni hatırla
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Giriş yap</button>
    </form>
</div>
</body>
</html>
