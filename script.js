function showPetForm() {
    const dogForm = document.getElementById("dogForm");
    const catForm = document.getElementById("catForm");

    dogForm.style.display = 'none';
    catForm.style.display = 'none';

    const petType = document.getElementById('petType').value;

    // Show the appropriate form based on the selection
    if (petType === 'dog') {
        document.getElementById('dogForm').style.display = 'block';
    } else if (petType === 'cat') {
        document.getElementById('catForm').style.display = 'block';
    }
}

function handleDogBreedSelection() {
    const breedDropdown = document.getElementById("DogBreed");
    const additionalBreedField = document.getElementById("additionalBreedField");

    // Show additional input field only when "Can't Find It" is selected
    if (breedDropdown.value === "cant_find") {
        additionalBreedField.style.display = "block";
    } else {
        additionalBreedField.style.display = "none";
    }
}

function handleCatBreedSelection() {
    const breedDropdown = document.getElementById("catBreed");
    const additionalBreedField = document.getElementById("additionalBreedField2");

    // Show additional input field only when "Can't Find It" is selected
    if (breedDropdown.value === "cant_find") {
        additionalBreedField.style.display = "block";
    } else {
        additionalBreedField.style.display = "none";
    }
}

document.getElementById('radioMix').addEventListener('change', function() {
    var mixBreedField = document.getElementById('mixBreed');
    mixBreedField.style.display = 'block'; // Show input field when "It's a mix" is selected
});

document.getElementById('radioUnknown').addEventListener('change', function() {
    var mixBreedField = document.getElementById('mixBreed');
    mixBreedField.style.display = 'none'; // Hide input field when "I don't know" is selected
});

document.getElementById('c_radioMix').addEventListener('change', function() {
    var mixBreedField = document.getElementById('c_mixBreed');
    mixBreedField.style.display = 'block'; // Show input field when "It's a mix" is selected
});

document.getElementById('c_radioUnknown').addEventListener('change', function() {
    var mixBreedField = document.getElementById('c_mixBreed');
    mixBreedField.style.display = 'none'; // Hide input field when "I don't know" is selected
});

document.getElementById('c_radioYes').addEventListener('change', function() {
    var c_dobField = document.getElementById('c_dobFields');
    var c_approxdobField = document.getElementById('c_approxAgeField');
    c_dobField .style.display = 'block'; 
    c_approxdobField.style.display="none";
});

document.getElementById('c_radioNo').addEventListener('change', function() {
    var c_dobField = document.getElementById('c_dobFields');
    var c_approxdobField = document.getElementById('c_approxAgeField');
    c_dobField.style.display = 'none';
    c_approxdobField.style.display="block";
});

document.getElementById('d_radioYes').addEventListener('change', function() {
    var d_dobField = document.getElementById('d_dobFields');
    var d_approxdobField = document.getElementById('d_approxAgeField');
    d_dobField .style.display = 'block'; 
    d_approxdobField.style.display="none";
});

document.getElementById('d_radioNo').addEventListener('change', function() {
    var d_dobField = document.getElementById('d_dobFields');
    var d_approxdobField = document.getElementById('d_approxAgeField');
    d_dobField.style.display = 'none'; 
    d_approxdobField.style.display="block";
});

/* continue button */
/**const form = document.getElementById('petForm2');
const saveButton = document.getElementById('saveButton');

form.addEventListener('input', () => {
    if (form.checkValidity()) {
        saveButton.disabled = false;
        saveButton.classList.remove('btn-secondary');
        saveButton.classList.add('btn-primary');
    } else {
        saveButton.disabled = true;
        saveButton.classList.remove('btn-primary');
        saveButton.classList.add('btn-secondary');
    }
});*/


// Show the form based on pet type selection
document.getElementById('petType').addEventListener('change', function () {
    if (this.value === 'dog') {
        dogForm.style.display = 'block';
        catForm.style.display = 'none';
    } else if (this.value === 'cat') {
        dogForm.style.display = 'none';
        catForm.style.display = 'block';
    } else {
        dogForm.style.display = 'none';
        catForm.style.display = 'none';
    }
});
