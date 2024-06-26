<?php
// Specify the path to the text file
$filePath = 'message.txt';

// Check if the file exists
if(file_exists($filePath)) {
    // Read the content of the file
    $message = file_get_contents($filePath);
    
    // Print the content
    echo $message;
} else {
    echo "The file does not exist.";
}
?>