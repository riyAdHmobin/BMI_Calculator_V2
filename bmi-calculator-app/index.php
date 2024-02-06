<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <h2>BMI Calculator</h2>
    <form method="post" action="">
        <label for="weight">Weight:</label>
        <input type="text" id="weight" name="weight" required>
        <select name="weight_unit">
            <option value="kg">kg</option>
            <option value="lb">lb</option>
        </select>

        <label for="height">Height:</label>
        <input type="text" id="height" name="height" required>
        <select name="height_unit">
            <option value="m">m</option>
            <option value="ft">ft</option>
        </select>

        <input type="submit" value="Calculate">
        <input type="reset" value="Reset">
    </form>

    <?php
    // Include the PHP file
    require_once "includes/calculate_bmi.php";
    ?>
</body>
</html>