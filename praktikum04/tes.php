<form method="POST">
    <input type="checkbox" name="languages[]" value="HTML"> HTML<br>
    <input type="checkbox" name="languages[]" value="CSS"> CSS<br>
    <input type="checkbox" name="languages[]" value="JavaScript"> JavaScript<br>
    <input type="submit" value="Submit">
</form>

<?php
// Initialize an associative array to store the checkbox values
$checkbox_values = array(
    "HTML" => 10,
    "CSS" => 10,
    "JavaScript" => 20
);

// Initialize a subtotal variable to 0
$subtotal = 0;

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the values of the selected checkboxes
    $selected_languages = $_POST["languages"];
    // Loop through the selected checkboxes and add up their values
    foreach ($selected_languages as $language) {
        $subtotal += $checkbox_values[$language];
    }
    // Output the subtotal
    echo "Subtotal: " . $subtotal;
}
?>