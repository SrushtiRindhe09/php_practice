<!DOCTYPE html>
<html>
<head>
    <title>Form with List Box & Combo Box</title>
</head>
<body>
    <form method="post">
        <label>Select Your Skills:</label><br>
        <select name="skills[]" multiple>
            <option value="PHP">PHP</option>
            <option value="HTML">HTML</option>
            <option value="CSS">CSS</option>
            <option value="JavaScript">JavaScript</option>
        </select><br><br>

        <label>Select Your Country:</label><br>
        <select name="country">
            <option value="India">India</option>
            <option value="USA">USA</option>
            <option value="UK">UK</option>
            <option value="Canada">Canada</option>
        </select><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        echo "<h3>Selected Skills:</h3>";
        if (!empty($_POST['skills'])) {
            echo implode(", ", $_POST['skills']);
        } else {
            echo "No skills selected.";
        }

        echo "<h3>Selected Country:</h3>";
        echo $_POST['country'];
    }
    ?>
</body>
</html>
