<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(count($users)>0): ?>
        <?php foreach($users as $user): ?>
        <p>name:- <?php echo $user['name']; ?></p>
        <p>name:- <?php echo $user['email']; ?></p>
        <p>name:- <?php echo $user['pass']; ?></p>
        <br>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>