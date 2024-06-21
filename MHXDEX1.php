<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MHXD EX1</title>
    <link rel="stylesheet" href="Exercise1.css" />
    <link rel="icon" href="ATPArtboard 1.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <style>
      .Frosted{
         margin-left: auto;
         margin-right: auto;
     }
       table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
        th, td {
            text-align: left;
        }
    </style>
  </head>
  <body>
    <div class="body">
      <!--Headings-->
      <div class="Frosted" id="Headings">
        <h1 id="Header">LAB 01 - INTRODUCTION TO PHP</h1>
      </div>
      <!--Exercise 1-->
      <div class="Frosted" id="Ex1">
        <?php 
             echo "Hi, I am a PHP script"
        ?>
      </div>
      <!--Exercise 2-->
        <div class="Frosted" id="Ex2">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName"><br><br>
        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName"><br><br>
        <input type="submit" value="Submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstName = htmlspecialchars($_POST["firstName"]);
        $lastName = htmlspecialchars($_POST["lastName"]);
        $fullName = $firstName . " " . $lastName;
        echo "<p>Your full name is: $fullName</p>";
    }
    ?>
      </div>
      <!--Exercise 3-->
      <div class="Frosted" id="Ex3">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="number1">Number 1:</label>
        <input type="number" id="number1" name="number1" step="any" required><br><br>
        <label for="number2">Number 2:</label>
        <input type="number" id="number2" name="number2" step="any" required><br><br>
        <input type="submit" value="Add Numbers">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = floatval($_POST["number1"]);
        $number2 = floatval($_POST["number2"]);
        $sum = $number1 + $number2;
        echo "<p>The sum of $number1 and $number2 is: $sum</p>";
    }
    ?>
      </div>
      <!--Exercise 4-->
      <div class="Frosted" id="Ex4">
         <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <table>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>
            <tr>
                <td>Mouse</td>
                <td><input type="number" name="price_mouse" step="any" required></td>
                <td><input type="number" name="quantity_mouse" required></td>
            </tr>
            <tr>
                <td>Keyboard</td>
                <td><input type="number" name="price_keyboard" step="any" required></td>
                <td><input type="number" name="quantity_keyboard" required></td>
            </tr>
            <tr>
                <td>Headphone</td>
                <td><input type="number" name="price_headphone" step="any" required></td>
                <td><input type="number" name="quantity_headphone" required></td>
            </tr>
        </table><br>
        <input type="submit" value="Calculate Total Cost">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get prices and quantities from user input
        $price_mouse = floatval($_POST["price_mouse"]);
        $quantity_mouse = intval($_POST["quantity_mouse"]);

        $price_keyboard = floatval($_POST["price_keyboard"]);
        $quantity_keyboard = intval($_POST["quantity_keyboard"]);

        $price_headphone = floatval($_POST["price_headphone"]);
        $quantity_headphone = intval($_POST["quantity_headphone"]);

        // Calculate total cost
        $total_cost_mouse = $price_mouse * $quantity_mouse;
        $total_cost_keyboard = $price_keyboard * $quantity_keyboard;
        $total_cost_headphone = $price_headphone * $quantity_headphone;

        $total_cost = $total_cost_mouse + $total_cost_keyboard + $total_cost_headphone;

        // Display the total cost
        echo "<p>The total cost of your shopping cart is: PKR" . number_format($total_cost, 2) . "</p>";
    }
    ?>
      </div>
      <!--Exercise 5-->
      <div class="Frosted" id="Ex6">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="a">Value of a:</label>
        <input type="number" id="a" name="a" step="any"><br><br>
        <label for="b">Value of b:</label>
        <input type="number" id="b" name="b" step="any"><br><br>
        <input type="submit" value="Calculate">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["a"]) && isset($_POST["b"]) && $_POST["a"] !== "" && $_POST["b"] !== "") {
        // Get values of a and b from user input
        $a = floatval($_POST["a"]);
        $b = floatval($_POST["b"]);

        // Perform arithmetic operations
        $sum = $a + $b;
        $difference = $a - $b;
        $product = $a * $b;
        $quotient = $b != 0 ? $a / $b : "undefined (division by zero)";
        $remainder = $b != 0 ? $a % $b : "undefined (division by zero)";

        // Display results in a table
        echo "<h2>Arithmetic Operations Results</h2>";
        echo "<table class='result-table'>
                <tr>
                    <th>Operation</th>
                    <th>Result</th>
                </tr>
                <tr>
                    <td>Sum (a + b)</td>
                    <td>$sum</td>
                </tr>
                <tr>
                    <td>Difference (a - b)</td>
                    <td>$difference</td>
                </tr>
                <tr>
                    <td>Product (a * b)</td>
                    <td>$product</td>
                </tr>
                <tr>
                    <td>Quotient (a / b)</td>
                    <td>$quotient</td>
                </tr>
                <tr>
                    <td>Remainder (a % b)</td>
                    <td>$remainder</td>
                </tr>
              </table>";
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>Please enter values for both a and b.</p>";
    }
    ?>
      </div>
    </div>
  </body>
</html>
