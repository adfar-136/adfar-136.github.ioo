<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">


   <title>KashKoding</title>
</head>

<body>



   <!-- header section starts  -->

   <header>


      <a href="#" class="logo"><img class="logo2" src="images/KashLogo.png" alt=""></a>

      <nav>
         <a href="index.html"></a>
         <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
               <li><a href="index.html">HOME</a></li>
               <li><a href="about.html">ABOUT</a></li>
               <li><a href="courses.html">COURSES</a></li>
               <li><a href="services.html">SERVICES</a></li>
               <li><a href="contact.html">CONTACT</a></li>
            </ul>

         </div>
         <i class="fa fa-bars" onclick="showMenu()"></i>
      </nav>


   </header>

   <!-- header section ends -->

   <!-- header2 section starts  -->

   <section class="subb-header" id="subb-header">

      <h1>Registration Form</h1>



   </section>
   <hr class="hrr">
   <form class="reg-form" method="post" action="db_insertdata.php">
      <p class="helper-text">* denotes a required field</p>
      <div class="field-row">
         <label class="form-label" for="firstName">First name</label>
         <input type="text" id="firstName" class="field text-field first-name-field" name="fname" required>
         <span class="message"></span>
      </div>
      <div class="field-row">
         <label class="form-label cf" for="lastName">Last name</label>
         <input type="text" id="lastName" class="field text-field last-name-field" name="lname" required>
         <span class="message"></span>
      </div>
      <div class="field-row">
         <label class="form-label" for="initials">Father Name</label>
         <input type="text" id="initials" class="field text-field initials-field" name="fathername">
      </div>
      <div class="field-row">
         <label class="form-label" for="dateOfBirth">Date of birth</label>
         <input type="date" id="dateOfBirth" class="field date-field dob-field" min="1900-01-01" max="2015-09-18" name="dob" required>
         <span class="message"></span>
      </div>
      <div class="field-row">
         <label class="form-label" for="tel">Mobile</label>
         <input type="tel" id="tel" class="field text-field tel-field" name="mobile" required>
         <span class="message"></span>
      </div>
      <div class="field-row">
         <label class="form-label" for="hs">School Name</label>
         <input type="text" id="hs" class="field text-field hs-field" name="schoolname" required>
         <span class="message"></span>
      </div>
      <div class="field-row">
         <label class="form-label" for="tel">Permanent Address</label>
         <input type="tel" id="tel" class="field text-field address-field" name="perm_address" required>
         <span class="message"></span>
      </div>
      <div class="field-row">
         <label class="form-label">Your Level</label>
         <select name="grade" class="form-dropdown field">
            <option value="Select any"> * Select any </option>
            <option value="5th Class"> 5th Class </option>
            <option value="6th Class"> 6th Class </option>
            <option value="7th Class"> 7th Class </option>
            <option value="8th Class"> 8th Class </option>
            <option value="9th Class"> 9th Class </option>
            <option value="10th Class"> 10th Class </option>
            <option value="11th Class"> 11th Class </option>
            <option value="12th Class"> 12th Class </option>
            <option value="Other"> Other </option>
         </select>
      </div>
      <div class="field-row">
         <label class="form-label" for="email">Email</label>
         <input type="email" id="email" class="field text-field email-field" name="email" required>
         <span class="message"></span>
      </div>
      <div class="field-row">
         <label class="form-label">Course</label>
         <select name="course" class="field form-dropdown">
            <option value="Select any"> * Select any </option>
            <option value="Game Designing Basic"> Scratch-Basic</option>
            <option value="Game Designing Intermediate"> Scratch-Intermediate </option>
            <option value="Front End Devlopment Basic"> Front End Devlopment Basic </option>
            <option value="Front End Devlopment Intermediate"> Front End Devlopment Intermediate </option>
            <option value="Python Basic"> Python Basic </option>
            <option value="Python Intermediate"> Python Intermediate </option>
            <option value="C Programming Basic"> C Programming Basic </option>
            <option value="C Programming Intermediate"> C Programming Intermediate </option>
            <option value="JavaScript-Basic"> JavaScript-Basic </option>
            <option value="JavaScript-Intermediate"> JavaScript-Intermediate </option>
            <option value="Tinker CAD Basic"> Tinker CAD Basic </option>
            <option value="Tinker CAD Intermediate"> Tinker CAD Intermediate </option>
            <option value="Arduino-Basic"> Arduino-Basic </option>
            <option value="Arduino-Intermediate"> Arduino-Intermediate </option>

         </select>
      </div>
      <div class="field-row">
         <label class="form-label"></label>
         <input class="form-button book" type="submit" value="Submit" name="save">
         <!--<button class="form-button">Register</button>--->
      </div>
   </form>




   <!---Javascript for toggle Menu------->
   <script>
      var navLinks = document.getElementById("navLinks");

      function showMenu() {
         navLinks.style.right = "0";
      }

      function hideMenu() {
         navLinks.style.right = "-350px";
      }
   </script>




</body>

</html>