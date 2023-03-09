<?php
if (isset($_GET['key']) && $_GET['key'] == 'rahasia') {
    header('Content-Disposition: attachment; filename="Background.jpg"');
    header('Content-Type: image/jpg');
    readfile(__DIR__ . '/assets/Background.jpg');
    exit();
} else {
    echo "Invalid Link";
    exit();
}
?>