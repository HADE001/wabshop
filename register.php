<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <h1>register</h1>
    <form action="/register_back.php" method="post">
        <div>
            <label for="">name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="username">username</label>
            <input type="text" name = "username">
        </div>
        <div>
            <label for="password">password</label>
            <input type="password" name="password">
        </div>
        <button>register</button>
    </form> 
</body>
</html>