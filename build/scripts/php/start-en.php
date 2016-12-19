<?php
setcookie('lang', 'en', time() + 86400, '/');

$url = $_SERVER['HTTP_REFERER'];

if (preg_match('/portfolio/', $url)) {
    header('Location: ../../!en/portfolio.html');
} else if (preg_match('/feedback/', $url)) {
    header('Location: ../../!en/feedback.html');
} else if (preg_match('/team/', $url)) {
    header('Location: ../../!en/team.html');
} else {
    header('Location: ../../!en/services.html');
}
?>