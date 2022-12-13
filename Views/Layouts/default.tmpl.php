<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>{pageTitle}</title>
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.1.4/dist/boxicons.js' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@100;300;500&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Css/style.css">
    <script src="Js/script.js">const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});</script>
    <link type="image/png" sizes="16x16" rel="icon" href="imgs/Auto-Enchères-16.png">
    <link type="image/png" sizes="32x32" rel="icon" href="imgs/Auto-Enchères-32.png">
</head>
<body>
<?php
    require_once(__DIR__ . '/../../Views/Partials/header.tmpl.php');
?>
<div class="content">

{pageContent}


</div>
<?php
    require_once(__DIR__ . '/../../Views/Partials/footer.tmpl.php');
?>
</body>
</html>