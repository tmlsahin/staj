<?php
$sayfa="UserLogin";
include("include/db.php");
include("include/head.php");
/*
$sorgu="SELECT * FROM `home`";
$result= $mysqli ->query($sorgu);
$row=$result->fetch_assoc();
print_r($row);
exit();
*/
?>
<div class="userlogin">
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100 formRow">
      
      <div class="col-md-6 col-lg-5 col-xl-5">
        <img src="img/BlogLogo.png"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-6 col-lg-5 col-xl-5 offset-xl-5">
        <form>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input  type="email" id="form1Example13" class="form-control form-control-lg" placeholder="Email address"/>
            <label class="form-label" for="form1Example13"></label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="form1Example23" class="form-control form-control-lg"placeholder="Password" />
            <label class="form-label" for="form1Example23"></label>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div>
          

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>

          
           

        </form>
      </div>
    </div>
  </div>
</section>

</div>
    
       <?php
       include("include/footer.php");
       ?>