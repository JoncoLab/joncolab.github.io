<?php
setcookie('lang', 'uk', time() + 86400, '/');

$url = $_SERVER['HTTP_REFERER'];

if (preg_match('/portfolio/', $url)) {
    header('Location: ../../!uk/portfolio.html');
} else if (preg_match('/feedback/', $url)) {
    header('Location: ../../!uk/feedback.html');
} else if (preg_match('/team/', $url)) {
    header('Location: ../../!uk/team.html');
} else {
    header('Location: ../../!uk/services.html');
}
?>