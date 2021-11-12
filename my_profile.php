<?php 
include('connection/db.php');
include('include/header.php');
$query=mysqli_query($conn,"select * from profiles where user_email='{$_SESSION['email']}'");
while ($row=mysqli_fetch_array($query)) {
  $img=$row['img'];
  $name=$row['name'];
  $dob=$row['dob'];
  $number=$row['number'];
  $email=$row['email'];
}

?>
   <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Profile</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">My Profile</h1>
          </div>
        </div>
      </div>
    </div>
    <br>
   <div style="margin-left: 25%; width: 50%; border: 1px solid grey; padding: 10px;">
     <form action="profile_add.php" method="POST" id="profile_form" name="profile_form" enctype="multipart/form-data">
       <div class="row">
         <div class="col-md-6">
           <img src="profile_img/<?php if(!empty($number)){ echo $img;} else{ echo 'logo.png';} ?>" class="img-thumbnail" alt="Cinque Terre">
         </div>
         <div class="col-md-6">
           <input type="file" class="form-control" name="img" id="img">
         </div>
         
       </div>
       <br>
       <div style="margin-left: 30%">
       <div class="row">
         <div class="col-md-6">
           <td>Your Name</td>
         </div>
         <div class="col-md-6">
           <td><input type="text" name="name" id="name" value="<?php if(!empty($name)) echo $name;?>" placeholder="Enter Your Name" class="form-control"></td>
         </div>
        
       </div>
       <br>
       <div class="row">
         <div class="col-md-6">
           <td>Your DOB</td>
         </div>
         <div class="col-md-6">
           <td><input type="date" name="dob" id="dob" value="<?php if(!empty($dob)) echo $dob;?>" placeholder="Enter Your DOB" class="form-control"></td>
         </div>
         
       </div>
       <br>
       <div class="row">
         <div class="col-md-6">
           <td>Your Mobile Number</td>
         </div>
         <div class="col-md-6">
           <td><input type="number" name="number" id="number" value="<?php if(!empty($number)) echo $number;?>" placeholder="Enter Your Number" class="form-control"></td>
         </div>
        
       </div>
       <br>
       <div class="row">
         <div class="col-md-6">
           <td>Your Email</td>
         </div>
         <div class="col-md-6">
           <td><input type="email" name="email" id="email" value="<?php if(!empty($email)) echo $email;?>" placeholder="Enter Your Email" class="form-control"></td>
         </div>
        
       </div>
       <div class="form-group">
         <input type="submit" name="submit" id="submit" placeholder="Update" value="Update" class="btn btn-success">
       </div>
     </div>
     </form>
   </div>
   <br>
		
		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

   <?php 
   include('include/footer.php');

   ?>
   <!-- <script type="text/javascript">
     $(document).ready(function(){
       $("#submit").click(function(){
        var data=$("#profile_form").serialize();

        $.ajax({
              type:"POST",
              url:"profile_add.php",
              data:data,
              success:function(data){
                 alert(data);
              }
        });
       })
     });
   </script> -->