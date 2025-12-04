<?php 

$success = false;


if($_SERVER["REQUEST_METHOD"] === 'POST'){

if (empty($name)) $errors[] = "Name is required.";
if (empty($email)) $errors[] = "Email is required.";
if (empty($message)) $errors[] = "Message is required.";

$name = htmlspecialchars($_POST['name'] ?? '');

$mail = htmlspecialchars($_POST['email'] ?? '');

$message = htmlspecialchars($_POST['message'] ?? '');


$contact = [
     'name' => $name,
     'email' => $mail,
     'message' => $message
];

    $filePath = __DIR__ . '/../Data/contacts.json';

 
    if (file_exists($filePath)) {
        $contacts = json_decode(file_get_contents($filePath), true);
        if (!is_array($contacts)) $contacts = [];
    } else {
        $contacts = [];
    }


    $contacts[] = $contact;

    file_put_contents($filePath, json_encode($contacts, JSON_PRETTY_PRINT));

        $filePath = __DIR__ . '/../Data/contacts.json';

    if (file_exists($filePath)) {
        $contacts = json_decode(file_get_contents($filePath), true);
        if (!is_array($contacts)) $contacts = [];
    } else {
        $contacts = [];
    }

 
    $contacts[] = $contact;
  
   
    file_put_contents($filePath, json_encode($contacts, JSON_PRETTY_PRINT));

    $success = true;

};

require __DIR__ . "/../Views/contact.view.php";
