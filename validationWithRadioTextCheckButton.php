<!DOCTYPE html>
<html>
<head>
    <title>Simple Form Validation</title>
</head>
<body>
    <form method="post">
        <label>Name:</label>
        <input type="text" name="name"><br><br>

        <label>Gender:</label>
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female<br><br>

        <label>Hobbies:</label>
        <input type="checkbox" name="hobbies[]" value="Reading"> Reading
        <input type="checkbox" name="hobbies[]" value="Sports"> Sports
        <input type="checkbox" name="hobbies[]" value="Music"> Music<br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $errors = [];

     // Validate Name
        if (empty($_POST['name'])) {
            $errors[] = "Name is required.";
        }

        // Validate Gender
        if (empty($_POST['gender'])) {
            $errors[] = "Gender is required.";
        }

        // Validate Hobbies
        if (empty($_POST['hobbies'])) {
            $errors[] = "Select at least one hobby.";
        }

        // Display Errors or Success Message
        if (!empty($errors)) {
            echo "<h3>Errors:</h3><ul>";
            foreach ($errors as $error) {
                echo "<li>$error</li>";
            }
            echo "</ul>";
        } else {
            echo "<h3>Form Submitted Successfully!</h3>";
            echo "<b>Name:</b> " . htmlspecialchars($_POST['name']) . "<br>";
            echo "<b>Gender:</b> " . $_POST['gender'] . "<br>";
            echo "<b>Hobbies:</b> " . implode(", ", $_POST['hobbies']) . "<br>";
        }
    }
    ?>
</body>
</html>
