<!--
Author: Junny Noriega-Arenas
Date: 1/9/2023
Description: this is a form that contains the customers order for a cupcake fundraiser.
URL: http://junnynoriega375.greenriverdev.com/328/cupcakes/process.php
-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Receipt</title>
</head>
<body>
    <h1>
        You picked...
    </h1>
<?php
    $total = 0;
    $price = 3.5;
    $name = $_POST['name'];
    if(isset($_POST['order'])) {
        if (!empty($_POST['flavor'])) {
            echo 'Thank you, '.$name.', for your order!';
            echo "<br/>Order Summary:";
            foreach ($_POST['flavor'] as $selected) {
                $total += $price;
                echo "<ul>";
                echo "<li>$selected</li>";
                echo "</ul>";
            }
            echo "Your total: $" .$total;
        } else {
            echo "Oops! You didn't choose any cupcakes?! please do ^.^";
        }
    }
?>
</body>
</html>