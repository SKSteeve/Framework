<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Page</title>
</head>
<body>
    <h2>Create User</h2>
    <form action="<?php __DIR__ ?>" method="POST">
        <label for="name">Name</label>
        <input id="name" type="text" name="name">
        <label for="age">Age</label>
        <input id="age" type="number" name="age">
        <label for="email">Email</label>
        <input id="email" type="email" name="email">
        <button type="submit">Submit</button>
    </form>
    <?php  ?>
</body>
</html>