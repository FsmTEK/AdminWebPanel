<?php
requıre_one ("s.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Register Form with AngularJS & Material Design</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    <link rel="stylesheet" href="cssc/style.css">
</head>
<body>
<?php
require_once("baglanti.php")
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
if ($_POST)
{
    $adi = $_POST["adi"];
    $soyadi = $_POST["soyadi"];
    $Eposta = $_POST["Eposta"];
    $sifre = $_POST["sifre"];

    if(empty($adi) || empty($soyadi)|| empty($Eposta)|| empty($sifre))
    {
        echo "Boş alan bırakmayınız!";

    }else{
        $ekle = $db->exec("insert into icerikler(adi,soyadi,Eposta,sifre) values('$adi','$soyadi','$Eposta','$sifre')");

        if($ekle == true)
        {
            echo "Ekleme işlemi başarılı";

        }else{
            echo "Ekleme işlemi başarısız";
        }
    }

}else{
    ?>


<body ng-controller="RegisterCtrl" ng-app="myApp">
<div class="container">
    <div id="signup">
        <div class="signup-screen">
            <div class="space-bot text-center">
                <h1>Sign up</h1>
                <div class="divider"></div>
            </div>
            <form class="form-register" method="post" name="register" novalidate>
                <div class="input-field col s6">
                    <input id="first-name" type="text" class="validate" required>
                    <label for="first-name">First Name</label>
                </div>
                <div class="input-field col s6">
                    <input id="last-name" type="text" class="validate" required />
                    <label for="last-name">Last Name</label>
                 </div>
                <div class="input-field col s6">
                    <input id="email" type="email" name="email" ng-model="email" class="validate" required/>
                    <label for="email">Email</label>
                </div>
                <p class="alert alert-danger" ng-show="form-register.email.$error.email">Your email is invalid.</p>
                <div class="input-field col s6">
                    <input id="password" type="password" name="password" ng-model="password" ng-minlength='6'
                           class="validate" required>
                    <label for="password">Password</label>
                </div>
                <p class="alert alert-danger"
                   ng-show="form-register.password.$error.minlength || form.password.$invalid">Your password must be at
                    least 6 characters.</p>
                <div class="space-top text-center">
                    <button ng-disabled="form-register.$invalid" class="waves-effect waves-light btn done"/>
                        <i class="material-icons left">done</i> Done
                    </button>
                    <button type="button" class="waves-effect waves-light btn cancel"/>
                        <i class="material-icons left">clear</i>Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php }?>
</body>
<script src='https://code.jquery.com/jquery-2.1.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js'></script>
<script src="jsj/index.js"></script>
</body>

</html>
