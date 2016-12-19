<?php 
if(isset($_COOKIE['lang'])) {
    switch($_COOKIE['lang']) {
        case 'uk':
            header('Location: !uk/services.html');
            break;
        case 'en':
            header('Location: !en/services.html');
            break;
    }
}
?>

<!doctype html>
<html>
<head>
    <title>JoncoLab</title>
    <meta charset="utf-8">
    <link href="styles/language.css" rel="stylesheet">
</head>

<body>
    <div class="logo">
        <img class="planet" src="../img/www.png">
        <img class="text" src="img/logonas.png" alt="logo">
    </div>
    <h1>Welcome!</h1>
    <p>What language you would like to view our site in?</p>
    <div class="buttons">
        <a href="scripts/php/start-en.php" class="language-button en">In English</a>
        <a href="scripts/php/start-uk.php" class="language-button uk">Українською</a>
    </div>
</body>
    
</html>