<?php
// Function to calculate the area of a rectangle
function calculateArea($length, $width) {
    return $length * $width;
}

// Call the function with specific values
$length = 10; // Example value for length
$width = 5;   // Example value for width
$area = calculateArea($length, $width);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculate Rectangle Area</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
        }
        .output {
            border: 1px solid black;
            padding: 20px;
            display: inline-block;
            background-color: #f9f9f9;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1>Area of a Rectangle</h1>
    <div class="output">
        <?php
        // Display the result
        echo "The area of a rectangle with length $length and width $width is: <strong>$area</strong>";
        ?>
    </div>
</body>
</html>
