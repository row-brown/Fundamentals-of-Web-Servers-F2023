<!DOCTYPE html>
<html>
    <head>
        <title>Form Responses</title>
    </head>
    <body>
        <p><?= var_dump($_GET) ?></p>
        <p><?= var_dump($_POST) ?></p>
        <p>Your email is: <?= htmlspecialchars($_POST['signup'])?></p>
        <p>You rated these cats <?= htmlspecialchars($_POST['rating'])?></p>
        <p>If this rating is too low, we will contact you</p>
    </body>
</html>
