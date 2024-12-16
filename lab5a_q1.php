<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php
        // Variables for your details
        $name = "Prasad Mathivanan";
        $matric_number = "CI230032";
        $course = "Bachelor of Computer Science";
        $year_of_study = "Year 2";
        $address = "Bukit Saujana, Johor Bahru, Johor";
    ?>
    
    <!-- Display details in a table -->
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td><strong>Name</strong></td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td><strong>Matric Number</strong></td>
            <td><?php echo $matric_number; ?></td>
        </tr>
        <tr>
            <td><strong>Course</strong></td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td><strong>Year of Study</strong></td>
            <td><?php echo $year_of_study; ?></td>
        </tr>
        <tr>
            <td><strong>Address</strong></td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>
