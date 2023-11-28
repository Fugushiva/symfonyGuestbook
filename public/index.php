<?php

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Guestbook</title>
</head>

<body>
    <img src="https://media.tenor.com/Ug6cbVA1ZsMAAAAd/developer.gif">
</body>

</html>