<?php include("layout.php");
$conn=mysqli_connect("localhost","root","","androman");
if(!$conn)


die("can not connect to server");

if(isset($_POST["submit"])=="submit")
{


$name=$_POST["name"];
$email=$_POST["email"];
$course=$_POST["course"];
$mobile=$_POST["mobile"];

$qualification=$_POST["qualification"];
$college=$_POST["college"];

if($_POST["query"])
{$msg=addslashes(trim($_POST["query"]));
}
else
{$msg="";
}
  $sql="insert into registration(name,email,course,mobile,qualification,college,msg,Date_time)values('".$name."','".$email."','".$course."','".$mobile."','".$qualification."','".$college."','".$msg."',now())";
  echo $sql;
$sql2=mysqli_query($conn,$sql);
if(mysqli_affected_rows($conn)>0)
{
echo  "<script>alert('Registration Successfull');</script>";
}
else
{
echo  "<script>alert('Registration Unsuccessfull');</script>";
}

}?><!doctype html>
<html lang="en">

<!-- Mirrored from strollersforbaby.net/educare/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Jun 2018 15:41:21 GMT -->
<?php 

head_1();
?>
<body class="header_sticky">

<!-- /.top Header -->

<?php 

top();
?>
<!-- /.top --> 

<!-- /.Main Header  -->

<?php

header_1();

?>
<section class="breadcrumbs_common bg_img pos_relative">
  <div class="overlay-innerpage"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="breadcrumbs_content align_row_spacebetween">
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active"><a href="#">Online Registration</a></li>
          </ol>
          <h2 class="color_ff">Online Registration</h2>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Google Map Area Start-->

<!--End of Google Map Area--> 

<!-- contact us -->
<div id="our-partner" class="padding white contact-form-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <h4 class="contact-title">contact info</h4>
        <div class="contact-text">
          <p><span class="c-icon"><i class="zmdi zmdi-phone"></i></span><span class="c-text">+91 700 7528 160</span></p>
          <p><span class="c-icon"><i class="zmdi zmdi-email"></i></span><span class="c-text">andromanelearning@gmail.com</span></p>
          <p><span class="c-icon"><i class="zmdi zmdi-pin"></i></span><span class="c-text">3/1 Vishnupuri ,Kanpur<br>
            Near Company Bagh Chauraha</span></p>
        </div>
        <h4 class="contact-title">social media</h4>
        <div class="link-social"> <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> <a href="#" class="google"><i class="fa fa-google-plus"></i></a> </a><a href="#" class="twitter"><i class="fa fa-twitter"></i></a> <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a> <a href="#" class="blog"><i class="fa fa-rss"></i></a> <a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a> </div>
      </div>
      <div class="col-lg-7">
        <h4 class="contact-title">Complete Your Registration</h4>
        <form id="contact-form" action="" method="post">
          <div class="row">
            <div class="col-lg-6">
              <input name="name" placeholder="name" type="text">
            </div>
            <div class="col-lg-6">
              <input name="email" placeholder="email" type="text">
            </div>
            <div class="col-lg-6">
            
           <select style="width:100%" name="course" >
           <option >Courses</option>
           
           <option>Core Java</option>
            <option>Advance Java</option>
             <option>CCC</option>
              <option>O Level</option> <option>Python</option>
               <option>Web Development</option>
           </select>
            </div>
            <div class="col-lg-6">
              <input name="mobile" placeholder="mobile" type="mobile">
            </div>
            <div class="col-lg-6">
              <input name="qualification" placeholder="qualification" type="text">
            </div>
            <div class="col-lg-6">
              <input name="college" placeholder="College" type="college">
            </div>
            <div class="col-lg-12">
              <textarea name="query" cols="30" rows="10" placeholder="Your Query"></textarea>
              <button type="submit" class="button-default" name="submit">SUBMIT</button>
            </div>
          </div>
        </form>
        <p class="form-messege"></p>
      </div>
    </div>
  </div>
</div>

<!-- contact us --> 

<!-- PARTNER -->
<div id="our-partner" class="padding gray">
  <div class="container">
    <div class="col-lg-12">
      <div class="row">
        <div id="our-partner-slider" class="owl-carousel">
          <div class="item"><img src="images/partner-1.png" alt="Partners"></div>
          <div class="item"><img src="images/partner-2.png" alt="Partners"></div>
          <div class="item"><img src="images/partner-3.png" alt="Partners"></div>
          <div class="item"><img src="images/partner-4.png" alt="Partners"></div>
          <div class="item"><img src="images/partner-5.png" alt="Partners"></div>
          <div class="item"><img src="images/partner-1.png" alt="Partners"></div>
          <div class="item"><img src="images/partner-2.png" alt="Partners"></div>
          <div class="item"><img src="images/partner-3.png" alt="Partners"></div>
          <div class="item"><img src="images/partner-4.png" alt="Partners"></div>
          <div class="item"><img src="images/partner-5.png" alt="Partners"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- PARTNER --> 

<!-- FOOTER-->
<?php footer();?>

<!--  Modal  -->
<?php footer2();

scripts();?>
<!-- #/Modal --> 


</body>

<!-- Mirrored from strollersforbaby.net/educare/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Jun 2018 15:41:21 GMT -->
</html>