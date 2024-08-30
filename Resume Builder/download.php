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

    // Prepare the content of the text file
    $content = "Name: $name\n";
    $content .= "Email: $email\n";
    $content .= "Phone: $phone\n";
    $content .= "Address: $address\n\n";
    $content .= "Professional Summary:\n$summary\n\n";
    $content .= "Education:\n$education\n\n";
    $content .= "Work Experience:\n$experience\n\n";
    $content .= "Skills:\n$skills\n";

    // Set the headers to trigger a file download
    header('Content-Type: text/plain');
    header('Content-Disposition: attachment; filename="resume.txt"');
    header('Content-Length: ' . strlen($content)); //:header Defines how the content should be presented by the browser.

    // Output the content to the browser, which will trigger the download
    echo $content;
    exit();
}
?>
