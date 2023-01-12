<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cupcakes</title>
</head>
<body>
    <h1>Cupcakes</h1>
    <form method="post" action="process.php">
        Your name:<br>
        <label><input type="text" name="name" value="Please enter a name"></label><br>
        Cupcake flavors:<br>
        <label><input type='checkbox' name='flavor[]' value="Tiramisu">Tiramisu</label><br>
        <label><input type='checkbox' name='flavor[]' value="Lemon Drop">Lemon Drop</label><br>
        <label><input type='checkbox' name='flavor[]' value="Red Velvet">Red Velvet</label><br>
        <label><input type='checkbox' name='flavor[]' value="Salted Caramel">Salted Caramel</label><br>
        <label><input type='checkbox' name='flavor[]' value="Carrot Walnut">Carrot Walnut</label><br>
        <label><input type='checkbox' name='flavor[]' value="Whiskey Maple">Whiskey Maple</label><br>
        <label><input type='checkbox' name='flavor[]' value="The Grasshopper">The Grasshopper</label><br>
        <input type="submit" name="order" value="order">
    </form>
</body>
</html>