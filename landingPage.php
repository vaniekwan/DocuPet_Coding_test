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

    <form id="petForm">

        <!--Pet Type -->
        <div id="petTypeSelection">
            <label for="petType">Select Pet Type:</label>
            <select class="form-select" aria-label="Default select example" id="petType" name="petType" onchange="showPetForm()" required>
                <option value="">-- Select --</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
            </select>
        </div>
       <br>
        <!--Dog form -->
        <div id="dogForm" class="form-section" style="display: none;">
            <h3 style="color:#003d99;">Tell us about your dog</h3>
            <br>
            <!--name -->
                <label for="dogName" class="form-label">What is your dog's name?</label>
                <input type="text" class="form-control" id="DogName" placeholder="Enter name" required>
            <!--Breed -->
            <label for="dogBreed" class="form-label">What is your dog's breed?</label>
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
                    <div class="radio-toolbar">
                        <input type="radio" id="dogradioMale" name="dogGender" value="male" checked>
                        <label for="dogradioMale">Male</label>

                        <input type="radio" id="dogradioFemale" name="dogGender" value="female">
                        <label for="dogradioFemale">Female</label>

                    </div>
               </div>

            <!-- Date of Birth Fields -->

            <label class="form-label">Do you know their date of Birth? </label>
            <div class="radio-toolbar">
                    <input type="radio" id="d_radioYes" name="dogDob" value="yes" >
                    <label for="d_radioYes">Yes</label>

                    <input type="radio" id="d_radioNo" name="dogDob" value="no">
                    <label for="d_radioNo">No</label>

            </div>

            <div id="d_dobFields" class="conditional-section" style="display: none;">
                <label for="d_dobMonth" style="display: inline-block; margin-right: 10px;">Date of Birth:</label>
                <br>
                <select id="d_dobMonth" name="d_dobMonth" class="form-control" style="display: inline-block; margin-right: 10px; width: 110px;">
                    <option value="">Select</option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                <input type="number" name="d_dobDay" placeholder="DD" min="1" max="31" class="form-control" style="width: 80px; display: inline-block; margin-right: 10px;">
                <input type="number" name="d_dobYear" placeholder="YYYY" min="1900" max="2024" class="form-control" style="width: 100px; display: inline-block;">
            </div>


        <div id="d_approxAgeField" class="conditional-section" style="display: none;>
            <label for="d_approxAge">What is their approximate age?</label><br>
            <input type="number" id="d_approxAge" name="d_approxAge" placeholder="Age (in years)" min="0" max="20" style="width: 120px;">
        </div>
        <br><br>
            <div class="text-center">
            <button type="submit" class="btn btn-secondary" id="continueButton" >Save</button>
            </div>


        </div>

        <!-- Cat Form -->
        <div id="catForm" class="form-section" style="display: none;">
            <h3 style="color:#003d99;">Tell us about your cat</h3>
            <br>
            <!--name -->
                <label for="catName" class="form-label">What is your cat's name?</label>
                <input type="text" class="form-control" id="catName" name="catName" placeholder="Enter name" required>
            <!--Breed -->
            <label for="catBreed" class="form-label">What is your cat's breed?</label>
            <select id="catBreed" name="catBreed" class="form-control" onchange="handleCatBreedSelection()" required>
                <option value="">-- Select --</option>
                <option value="Bengal">Bengal</option>
                <option value="Siamese">Siamese</option>
                <option value="cant_find">Can't Find It</option>
            </select>

            <div id="additionalBreedField2" style="display: none; margin-top: 15px; margin-left:20px;">
                <label for="chooseBreed" class="form-label">Choose one</label> <br>

                <input type="radio" id="c_radioUnknown" name="catbreedOption" value="c_unknown" >
                <label for="c_radioUnknown">I don't know</label><br>

                <input type="radio" id="c_radioMix" name="catbreedOption" value="c_mix">
                <label for="c_radioMix">It's a mix</label><br>
                <input type="text" id="c_mixBreed" name="c_mixBreed" placeholder="Enter mixed breeds" class="form-control" style="display: none;">
            </div>



                <div class="mb-3">
                <label class="form-label">Select your cat's gender:</label>
                <div class="radio-toolbar">
                    <input type="radio" id="radioMale" name="catGender" value="male" checked>
                    <label for="radioMale">Male</label>

                    <input type="radio" id="radioFemale" name="catGender" value="female">
                    <label for="radioFemale">Female</label>

                </div>
                </div>

            <!-- Date of Birth Fields -->
            <label class="form-label">Do you know their date of Birth? </label>
            <div class="radio-toolbar">
                    <input type="radio" id="c_radioYes" name="catDob" value="yes" >
                    <label for="c_radioYes">Yes</label>

                    <input type="radio" id="c_radioNo" name="catDob" value="no">
                    <label for="c_radioNo">No</label>

            </div>

        <div id="c_dobFields" class="conditional-section" style="display: none;">
            <label for="c_dobMonth">Date of Birth:</label><br>
            <select id="c_dobMonth" name="c_dobMonth" class="form-control" style="display: inline-block; margin-right: 10px; width: 110px;">
                <option value="">Select</option>
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
            <input type="number" name="c_dobDay" placeholder="DD" min="1" max="31" class="form-control" style="width: 80px; display: inline-block; margin-right: 10px;">
            <input type="number" name="c_dobYear" placeholder="YYYY" min="1900" max="2024" class="form-control" style="width: 100px; display: inline-block;">
        </div>

        <div id="c_approxAgeField" class="conditional-section" style="display: none;">
            <label for="c_approxAge">What is their approximate age?</label><br>
            <input type="number" id="c_approxAge" name="c_approxAge" placeholder="Age (in years)" min="0" max="20"style="width: 120px;">
        </div>
        <br><br>

            <div class="text-center">
            <button type="submit" class="btn btn-secondary" id="c_continueButton" >Save</button>
            </div>

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

