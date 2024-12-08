<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <title>Dog Form</title>
    <script>
        function handleBreedInput() {
            const textInput = document.getElementById("dogBreed");
            const radioUnknown = document.getElementById("radioUnknown");
            const radioMix = document.getElementById("radioMix");

            // Disable text input if "I don't know" or "It's a mix" is selected
            if (radioUnknown.checked || radioMix.checked) {
                textInput.value = ""; // Clear input field
                textInput.disabled = true; // Disable input field
            } else {
                textInput.disabled = false; // Enable input field
            }
        }

        function handleDOBSelection() {
            const dobField = document.getElementById("dobFields");
            const approxAgeField = document.getElementById("approxAgeField");

            if (document.getElementById("yesDob").checked) {
                dobField.style.display = "block"; // Show date of birth fields
                approxAgeField.style.display = "none"; // Hide approximate age field
            } else if (document.getElementById("noDob").checked) {
                dobField.style.display = "none"; // Hide date of birth fields
                approxAgeField.style.display = "block"; // Show approximate age field
            }
        }

        function showPetForm() {
            // Hide all forms
            document.getElementById('dogForm').style.display = 'none';
            document.getElementById('catForm').style.display = 'none';

            // Get selected pet type
            const petType = document.getElementById('petType').value;

            // Show the appropriate form based on the selection
            if (petType === 'dog') {
                document.getElementById('dogForm').style.display = 'block';
            } else if (petType === 'cat') {
                document.getElementById('catForm').style.display = 'block';
            }
        }

    </script>
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
        <div class="logo-container mb-4">
            <img style="width:500px ;" src="images.png" alt="foot header">
        </div>
        <div id="petTypeSelection">
            <label for="petType">Select Pet Type:</label>
            <select id="petType" onchange="showPetForm()">
                <option value="">-- Select --</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
            </select>
        </div>

        <!-- Dog Form -->
        <div id="dogForm" class="form-section">
            <h3>Tell us about your dog</h3>
            <form>
                <label for="dogName" class="form-label">What is your dog's name?</label>
                <input type="text" class="form-control" id="DogName" placeholder="Enter name" required>

                <label for="dogBreed" class="form-label">What is your dog's breed?</label>
                <input type="text" class="form-control" id="DogBreed" placeholder="Enter Breed" required>

                <div class="radio-options">
            <input type="radio" id="radioUnknown" name="breedOption" value="unknown" onclick="handleBreedInput()">
            <label for="radioUnknown">I don't know</label><br>

            <input type="radio" id="radioMix" name="breedOption" value="mix" onclick="handleBreedInput()">
            <label for="radioMix">It's a mix</label><br>

            <input type="radio" id="radioOther" name="breedOption" value="other" onclick="handleBreedInput()" checked>
            <label for="radioOther">Other (please specify)</label>
                </div>
                <div class="mb-3">
                <label class="form-label">Select your dog's gender:</label>
                <div class="radio-toolbar">
                    <input type="radio" id="dogmale" name="doggender" value="male" required>
                    <label for="male">Male</label>

                    <input type="radio" id="dogfemale" name="doggender" value="female">
                    <label for="female">Female</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Continue</button>

            </form>

        </div>

        <!-- Cat Form -->
        <div id="catForm" class="form-section">
            <h3>Tell us about your cat</h3>
            <form>
                <label for="catName">Cat's Name:</label>
                <input type="text" id="catName" name="catName" placeholder="Enter cat's name" required><br><br>

                <label for="catBreed">Cat's Breed:</label>
                <input type="text" id="catBreed" name="catBreed" placeholder="Enter cat's breed"><br><br>
            </form>
        </div>


            <div class="form-group">
            <label>Do you know their date of birth?</label><br>
            <input type="radio" id="yesDob" name="dobOption" value="yes" onclick="handleDOBSelection()">
            <label for="yesDob">Yes</label><br>

            <input type="radio" id="noDob" name="dobOption" value="no" onclick="handleDOBSelection()">
            <label for="noDob">No</label>
        </div>

        <!-- Date of Birth Fields -->
        <div id="dobFields" class="conditional-section">
            <label for="dobMonth">Date of Birth:</label><br>
            <select id="dobMonth" name="dobMonth">
                <option value="">Month</option>
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
            <input type="number" name="dobDay" placeholder="Day" min="1" max="31" style="width: 60px;">
            <input type="number" name="dobYear" placeholder="Year" min="1900" max="2024" style="width: 80px;">
        </div>

        <div id="approxAgeField" class="conditional-section">
            <label for="approxAge">What is their approximate age?</label><br>
            <input type="number" id="approxAge" name="approxAge" placeholder="Age (in years)" min="0" style="width: 120px;">
        </div>

        </form>
    </main>

    <!-- Footer Section -->
    <footer class="bg-body-tertiary text-center text-lg-start mt-5">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            Footer TBD
        </div>
    </footer>

    <!-- Bootstrap JS (Optional for advanced features) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>

