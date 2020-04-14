<?php
require_once(__DIR__ . '/vendor/autoload.php');

$file = realpath($_SERVER['PATH_TRANSLATED']);

if(!file_exists($file)) {
    throw new Exception('File does not exist');
}

$contents = file_get_contents($file);
$Parsedown = new Parsedown();
?>
<html>
<head>
    <link rel="stylesheet" href="https://unpkg.com/sakura.css/css/sakura.css" type="text/css">
</head>
<body>
<?php echo $Parsedown->text($contents); ?>
</body>
</html>
