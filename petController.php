<?php
require_once 'Models/Pet.php';
$title = "Pet Control";

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = htmlspecialchars($_POST['Name'], ENT_QUOTES, 'UTF-8');
    $dogBreed = htmlspecialchars($_POST['dogBreed'], ENT_QUOTES, 'UTF-8');
    $dogGender = htmlspecialchars($_POST['dogGender'], ENT_QUOTES, 'UTF-8');
    $petType = htmlspecialchars($_POST["petType"], ENT_QUOTES, 'UTF-8');
    
    // Handle missing required fields
    if ($name === '' || $dogBreed === '' || $dogGender === '') {
        echo "Invalid input provided.";
        exit;
    }

    // Determine if the pet is dangerous based on its breed or user input
    $isDangerous = $dogBreed == "Pitfall" || $dogBreed == "Mastiff";;

    $ID = rand(0, 9999); 

    // Create Pet instance
    $pet = new Pet($ID, $name, $dogBreed, $dogGender, $isDangerous);

    $response = [
        'message' => 'Code:201 , Resource created successfully.',
        'data' => [
            'ID' => $pet->getID(),
            'Name' => $pet->getName(),
            'Breed' => $pet->getBreed(),
            'Gender' => $pet->getGender(),
            'isDangerous' => $pet->getDangerous()
        ]
    ];

    // Set response code to 201 (Created)
    http_response_code(201);

    // Send the response as JSON
    echo json_encode($response['message']);

}

// Include view for saving pet
include 'views/petSaved.php';



