<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Page</title>
</head>
<body>
    <h1>Index Test Page</h1>

    <h4>Example Passed Data:</h4>
    <ul>
        <?php foreach ($data as $key => $val) {
            echo "<li>" . $val . "</li>";
        } ?>
    </ul>

    <?php if($error) {
        echo "<strong>Error Message: $error</strong>";
    } ?>
</body>
</html>