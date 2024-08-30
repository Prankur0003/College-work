<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Generator</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <h1>Resume Generator</h1>
        <form action="generate.php" method="post">

        <!--action="generate.php"
Purpose: Specifies the URL or path to the server-side script that will handle the form submission.

post: This method sends the form data in the body of the HTTP request, not as part of the URL. It is typically used for forms that modify server data or require confidentiality.-->

            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>

            <label for="summary">Professional Summary:</label>
            <textarea id="summary" name="summary" required></textarea>

            <label for="education">Education:</label>
            <textarea id="education" name="education" required></textarea>

            <label for="experience">Work Experience:</label>
            <textarea id="experience" name="experience" required></textarea>

            <label for="skills">Skills:</label>
            <textarea id="skills" name="skills" required></textarea>

            <button type="submit">Generate Resume</button>
        </form>
    </div>
</body>
</html>
