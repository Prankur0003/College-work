<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $summary = htmlspecialchars($_POST['summary']);
    $education = htmlspecialchars($_POST['education']);
    $experience = htmlspecialchars($_POST['experience']);
    $skills = htmlspecialchars($_POST['skills']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generated Resume</title>
    <link rel="stylesheet" href="resume.css">
</head>
<body>
    <div class="resume">
        <h1><?php echo $name; ?></h1>
        <p><?php echo $email; ?> | <?php echo $phone; ?> | <?php echo $address; ?></p>
        <!--. Echo is one of the most common ways to send content from a PHP script to the HTML of a web page. -->
        <h2>Professional Summary</h2>
        <p><?php echo nl2br($summary); ?></p>

        <h2>Education</h2>
        <p><?php echo nl2br($education); ?></p>

        <h2>Work Experience</h2>
        <p><?php echo nl2br($experience); ?></p>

        <h2>Skills</h2>
        <p><?php echo nl2br($skills); ?></p>
    </div>

    <!-- Button to Download Text File -->
    <form action="download.php" method="post" style="text-align: center; margin-top: 20px;">
        <!-- Hidden inputs to pass the data to download.php -->
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="phone" value="<?php echo $phone; ?>">
        <input type="hidden" name="address" value="<?php echo $address; ?>">
        <input type="hidden" name="summary" value="<?php echo $summary; ?>">
        <input type="hidden" name="education" value="<?php echo $education; ?>">
        <input type="hidden" name="experience" value="<?php echo $experience; ?>">
        <input type="hidden" name="skills" value="<?php echo $skills; ?>">

        <button type="submit">Download</button>
    </form>
</body>
</html>
