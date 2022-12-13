<nav>
    <ul>
        <li><a href="home">Home</a></li>
        <li><a href="home">Cars</a></li>
        <li><a href="home">Contact-us</a></li>
        <?php if(!isset($_SESSION['email'])){
            echo'
        <li><a href="login">Login</a></li>
        <li><a href="Register">Register</a></li>    ';
    }else
        echo '<li><a href="#">'.$_SESSION['name'].' '.$_SESSION['prenom'].'</a></li>';
    
    ?>
    </ul>
</nav>