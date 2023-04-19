
<!DOCTYPE html>
<html lang=en>
<head>
  <meta charset="UTF-8">
  <title> Question 4 </title> 
  <link rel = "stylesheet" href="format.css" >

</head>


<?php include('header.php'); ?>

  <div class="side-menu">
    <ul>
      <li> <h3> Navigation </h3></li>
      <li><a href="index.php"> Home </a></li>
      <li><a href="create-account.php">Create An Account </a></li>
      <li><a class="active" href="find-pet.php"> Find a Cat/Dog </a></li>
      <li><a href="dog-care.php"> Dog Care </a></li>
      <li><a href="cat-care.php"> Cat Care </a></li>
      <li><a href="give-away.php"> Have a Pet to Give Away </a></li>
      <li><a href="contact.php"> Contact Us </a></li>
    </ul>
  </div>

  <div class="content">
    <section id="find-pet">
        <h2>Find a Cat/Dog</h2>
        <form id="validation-form_findpet" onsubmit="validateForm1(event)" method="post" action="available-pet-information.php">
       
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
              <option value="doesn't-matter">Doesn't Matter</option>
          </select>
          <br>
          <br>
          <label> Gender: </label>
              <label> <input type = "radio" name = "gender" value = "male" > Male  </label>
              <label> <input type = "radio" name = "gender" value = "female" > Female  </label>
              <label> <input type = "radio" name = "gender" value = "Doesn't matter" > Doesn't matter  </label>
              <br>
              <br>
              <label for="agecategory">Age Category:</label>
              <select id="agecategory" name="agecategory">
                  <option value="select">Select an option</option> 
                  <option value="Less than 2">Less than 2</option>
                  <option value="Between 2-5">Between 2-5</option>
                  <option value="More than 5">More than 5</option>
                  <option value="Doesn't Matter">Doesn't Matter</option>
              </select>
            <br>
            <br>

            <label>Does it need to get along with </label>
            <input type="checkbox" id="cat" name="along" value="along-cat">
            <label for="cat">other cats</label>
            <input type="checkbox" id="dog" name="along" value="along-dog">
            <label for="dog">other dogs</label>
            <input type="checkbox" id="child" name="along" value="along-child">
            <label for="child">small children</label>
            <br>
            <br>
            
            <p> Thank you for taking the time to fill out our form! </p>
            <br>
            <input type = "reset" value = "Reset Form" >
            <label> <input type = "submit" value = "Submit Form" > <br> </label>
            <br>
          </form>
          <br>
          <br>
      </section>
</div>

<?php include('footer.php'); ?>
<script src="Q_7_JavaScript.js"></script>
</body>


</html>