# Docker_Coding_test

# :clipboard: REQUIREMENT

Docker (version 20+ recommended)

# Getting Started 🚀
git clone https://github.com/vaniekwan/DocuPet_Coding_test.git <br>
cd DocuPet_Coding_test

# Run Docker
`docker-compose up`

# Access Appication
http://localhost/landingPage.php <br><br>

Note: Pet cLaws image is not the same as showed on the Mock

## Known Issues

1. **Form Validation Not Working landingPage.php**
   - Description: The form validation does not work
   - Workaround:To show my skill for backend , I created another html page landing_backEnd.php


2. **Form Validation for landing_backEnd.php**
   - Unfortunately for some reason , Field Date of Birth cause problem in posting the form 
   - Workaround: Using the field only for dog form: so this is the informations that will be displayed <br> 
     Pet type {cat,dog}
     Name, Breed, Gender and if the animal is dangerous. 

 
## Summary 
for FrontEnd only :
<br>
http://localhost/landingPage.php
<br>
Disabled submit button

for BackEnd:
<br>
models/pet.php consist the data model of the pet 
<br>
http://localhost/landing_backEnd.php














