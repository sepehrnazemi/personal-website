<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the message is not empty
    if (!empty($_POST["message"])) {
        // Sanitize the input
        $message = strip_tags($_POST["message"]);
        
        // File to save the message
        $file = "message.txt";
        
        // Save the message, overwriting any previous content
        file_put_contents($file, $message);
        
        echo "Message saved successfully!";
    } else {
        echo "Please submit a message.";
    }
} else {
    // Redirect back to the form if the page was accessed without submitting the form
    header("Location: index.html");
}