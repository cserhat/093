
<?php 



if (isset($_SESSION['email'])){
foreach ($data as $car){?>

<div class="card">
    <img src="imgs/<?= $car['photo']?>" alt="">
    <div class="title"> <span><?= $car['marque']?></span> </div>
    <div class="prix"><span><?= $car['prix_depart']?>$</span></div>
    <div class="description"><span><?= $car['description']?></span></div>
    <a href="./encehere.tmpl.php"><button>Voir Plus</button></a>
</div>
<?php
}}
else
{
    $host = "localhost";  
    $username = "root";  
    $password = "123456789";  
    $database = "auto-encheres";  
    $message = "";  
    try  
    {  
         $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
         $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
         if(isset($_POST["login"]))  
         {  
              if(empty($_POST["email"]) || empty($_POST["password"]))  
              {  
                   $message = '<label>Rempliser tous les cases</label>';  
              }  
              else  
              {  
                   $pass = md5( $_POST["password"]);
                   $query = "SELECT * FROM utilisateurs WHERE email = :email AND password = :password";  
                   $statement = $connect->prepare($query);  
                   $statement->execute(  
                        array(  
                             'email'     =>     $_POST["email"],  
                             'password'     =>     $pass,
                        )  
                   );  
                   $count = $statement->rowCount(); 
                   $rows = $statement->fetchAll();
                   if($count > 0)  
                   {  
                        $_SESSION["email"] = $_POST["email"];

                        foreach($rows as $row) {
                            $_SESSION['name'] = $row['nom'];
                            $_SESSION['prenom'] = $row['prenom'];
    
                        }
                        $_SESSION['id'] = $user_id;
                   }  
                   else  
                   {  
                        $message = '<label>Wrong Data</label>';  
                   }  
              }  
         }  
    }  
    catch(PDOException $error)  
    {  
         $message = $error->getMessage();  
    }  
    echo '

    <form method="post" action="">  
    <label>Email</label>  
    <input type="text" name="email" class="form-control" />  
    <br />  
    <label>Password</label>  
    <input type="password" name="password" class="form-control" />  
    <br />  
    <input type="submit" name="login" class="btn btn-info" value="Login" />
    <a href="sign-up.php" blank> <button type="button" class="btn btn-info">Register</button>  </a>
    </form>  

    
    ';

    $pass = md5($password);
   var_dump($_SESSION);
}
?>