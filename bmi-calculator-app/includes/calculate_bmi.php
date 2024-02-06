<?php
// calculate_bmi.php

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve weight and height from form
    $weight = $_POST['weight'];
    $weight_unit = $_POST['weight_unit'];
    $height = $_POST['height'];
    $height_unit = $_POST['height_unit'];

    // Convert weight to kg if unit is lb
    if ($weight_unit == 'lb') {
        $weight = $weight * 0.453592; // 1 lb = 0.453592 kg
    }

    // Convert height to meters if unit is ft
    if ($height_unit == 'ft') {
        $height = $height * 0.3048; // 1 ft = 0.3048 m
    }

    // Calculate BMI
    $bmi = $weight / ($height * $height);

    // Output the result
    echo "<h3>Your BMI is: " . round($bmi, 2) . "</h3>";
    echo "<h4>Interpretation:</h4>";
    
    if ($bmi < 18.5) {
        echo "Underweight";
    } elseif ($bmi >= 18.5 && $bmi < 25) {
        echo "Normal weight";
    } elseif ($bmi >= 25 && $bmi < 30) {
        echo "Overweight";
    } else {
        echo "Obesity";
    }
}
?>
