
<!DOCTYPE html>
<html lang=en>
<head>
  <meta charset="UTF-8">
  <title> Question 4 </title> 
  <link rel = "stylesheet" href="format.css" >

  <script>
      function logout() {
        alert("You have logged off.");
      }
  

      function getUserInfo() {
        let username = prompt("Username");
        let password = prompt("Password");
        let userInfo = "Hi, welcome " + username ;
        let contentDiv = document.getElementById("contento");
        contentDiv.innerHTML = userInfo;
        alert("You have logged in.");
      }
      window.onload = getUserInfo;
   
    </script>
</head>


<body>
    <?php include('header.php'); ?>

  <div class="side-menu">
    <ul>
      <li> <h3> Navigation </h3></li>
      <li><a href="index.php"> Home </a></li>
      <li><a href="create-account.php">Create An Account </a></li>
      <li><a href="find-pet.php"> Find a Cat/Dog </a></li>
      <li><a href="dog-care.php"> Dog Care </a></li>
      <li><a href="cat-care.php"> Cat Care </a></li>
      <li><a class="active" href="give-away.php"> Have a Pet to Give Away </a></li>
      <li><a href="contact.php"> Contact Us </a></li>
    </ul>
  </div>

  <div class="content">
    <section id ="give-away">

        <h2>Give away a Cat/Dog</h2>
        <div id="contento"></div>

        <form id="validation-form_giveaway" onsubmit="validateForm2(event)">
          <?php include('login.php'); ?>

          <label> Pet Type: </label>
              <label> <input type = "radio" name = "pet" value = "cat" > Cat  </label>
              <label> <input type = "radio" name = "pet" value = "dog" > Dog  </label>
              
          <br>
          <br>
          <label for="breed">Breed:</label>
          <select id="breed" name="breed">
              <option value="nothing"> Select </option>
              <option value="breed"> Persian </option>
              <option value="breed"> Shepherd </option> 
              <option value="breed">mix breed</option> 
              <option value="doesn't-matter">Doesn't Matter</option>
          </select>
          <br>
          <br>
          <label> Gender: </label>
              <label> <input type = "radio" name = "gender" value = "male" > Male  </label>
              <label> <input type = "radio" name = "gender" value = "female" > Female  </label>
              <br>
              <br>
              <label for="agecategory">Age Category:</label>
              <select id="agecategory" name="agecategory">
                  <option value="select">Select an option</option> 
                  <option value="Less than 18">Less than 2</option>
                  <option value="18-65">Between 2-5</option>
                  <option value="More than 65">More than 5</option>
                  <option value="Doesn't Matter">Doesn't Matter</option>
              </select>
            <br>
            <br>

            <label>Does it get along with </label>
            <input type="checkbox" id="cat" name="along" value="along">
            <label for="cat">other cats</label>
            <input type="checkbox" id="dog" name="along" value="along">
            <label for="dog">other dogs</label>
            <input type="checkbox" id="child" name="along" value="along">
            <label for="child">small children  ?</label>

            <br>
            <br>
            <label for="comment">Comment about the pet: </label>
            <br>
            <textarea id="comment" name="comment" rows="4" cols="50"></textarea>

                

            <br>
          
            <label for="firstname"> Owner's First Name:</label>
            <input type="text" id="firstname" name="firstname">
            <br>
            
            <label for="familyname"> Owner's Family Name:</label>
            <input type="text" id="familyname" name="familyname">
            <br>
         
            <label for="email"> Owner's Email: </label>
            <input type="email" id="email" name="email">  
            <br>
            <p> Thank you for taking the time to fill out our form! </p>
            
            <input type = "reset" value = "Reset Form" >
            <label> <input type = "submit" value = "Submit Form" > <br> <br> </label>
           
          </form>
       
    </section>

    <form method="POST" action="logout.php" onclick="logout()">
    <input type="submit" value="Logout">
        </form>
</div>







<?php include('footer.php'); ?>

<script src="Q_7_JavaScript.js"></script>
</body>


</html>