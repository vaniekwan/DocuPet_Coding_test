<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <title>Pet Form</title>
</head>
<body class="body-container">
    <!-- Header Section -->
    <header class="div_box">
        <div class="logo-container">
            <img style="height: 80%;" src="Logo.png" alt="Company Logo">
        </div>

        <div class="nav_bar">
            <a class="nav_text" href="#">Help</a>
            <a class="nav_text" href="#">Save and Finish later</a>
        </div>
    </header>

<!-- Form Section -->
<main class="form-container">
    <!-- Logo Section -->
    <div class="logo-container mb-4">
        <img style="width: 500px;" src="images.png" alt="foot header">
    </div>

    <form id="petForm2" action="registration.php" method="post">

        <!--Pet Type -->
        <div id="petTypeSelection">
            <label for="petType">Select Pet Type:</label>
            <select class="form-select" aria-label="Default select example" id="petType" name="petType" required>
                <option value="">-- Select --</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
            </select>
        </div>
       <br>
        <!--Dog form -->
            <h3>Tell us about your pet</h3>
            <br>
            <!--name -->
                <label for="Name" class="form-label">What is your pet's name?</label>
                <input type="text" class="form-control" id="Name" placeholder="Enter name" required>
            <!--Breed -->
            <label for="dogBreed" class="form-label">What is your pet's breed?</label>
            <select id="DogBreed" name="dogBreed" class="form-control" onchange="handleDogBreedSelection()" required>
                <option value="">-- Select --</option>
                <option value="Pitfall">Pitfall</option>
                <option value="Mastiff">Mastiff</option>
                <option value="cant_find">Can't Find It</option>
            </select>

            <div id="additionalBreedField" style="display: none; margin-top: 15px; margin-left:20px;">
                <label for="chooseBreed" class="form-label">Choose one</label> <br>

                <input type="radio" id="radioUnknown" name="dogbreedOption" value="unknown" >
                <label for="radioUnknown">I don't know</label><br>

                <input type="radio" id="radioMix" name="dogbreedOption" value="mix">
                <label for="radioMix">It's a mix</label><br>
                <input type="text" id="dogmixBreed" name="dogmixBreed" placeholder="Enter mixed breeds" class="form-control" style="display: none;">
            </div>



                <div class="mb-3">
                <label class="form-label">Select your dog's gender:</label>
                    `<div class="radio-toolbar">
                        <input type="radio" id="dogradioMale" name="dogGender" value="male" checked>
                        <label for="dogradioMale">Male</label>

                        <input type="radio" id="dogradioFemale" name="dogGender" value="female">
                        <label for="dogradioFemale">Female</label>

                    </div>
              </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary" id="saveButton" >Save</button>
        </div>

    </form>

    </main>

    <!-- Footer Section -->
    <footer class="bg-body-tertiary text-center text-lg-start mt-5">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            Footer TBD
        </div>
    </footer>
    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>