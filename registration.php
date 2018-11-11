
<?php get_header(); ?>

<?php 
/*
Template Name: registration.php
*/

?>



<body>

<div class="container-fluied">
<div class="onlinem">
    <h2 style="color: #43CDF0;position: absolute; margin-top: 80px;padding-left: 500px;font-size: 40px "><span style="font-weight:bold; ">Online Apply</span></h2> 
    
</div>
</div>

<div class="container ">
<div class="row" style="height: 700px; width: 100%; margin-top: 100px">
<div class="col-md-8">
    <div class="formm">
        
          <form action=" " method="POST">
<h2 style="margin-left: 200px; font-weight: bold"> Sign Up!</h2>
                <div class="form-group">
      <label for="name"><span style="font-size: 16px">Name</span></label>
      <input type="name" class="form-control" placeholder="Enter Name" name="username" style="border-radius: 0px;">
    </div>
    <div class="form-group">
      <label for="email" ><span style="font-size: 16px">Email:</span></label>
      <input type="email" class="form-control" name="email"  placeholder="Enter Email"  style="border-radius: 0px;">
    </div>
    <div class="form-group">
      <label for="phone" ><span style="font-size: 16px">Phone No</span></label>
      <input type="number" class="form-control" name="phone"  placeholder="Enter Phobe"  style="border-radius: 0px;">
    </div>

    <div class="form-group">

      <label for="subject" ><span style="font-size: 16px">Subject</span></label>
      <input type="text" class="form-control"  placeholder="Subject" name="subject" style="border-radius: 0px";>
    </div>
<label><span style="font-size: 16px"> Message</span></label>
    <textarea name="message" rows="6" cols="10"  class="cont"; style="border:1px solid #9c9c9c; " placeholder="Type Here...!"></textarea>
    
    
<button type="submit" class="btn btn-default" style="margin-top:15px; margin-left:200px;border-radius: 0px;">Send Message</button>
  </form>
    </div>
</div>
        





<div class="col-md-4"> <div class="ab2">
        <h2 style="margin-left:70px; font-weight: bold; margin-top:17px"> Services List!</h2>
<br>
        <div class="srvc">

            <div class="a1">
                <h4 style="padding-left: 60px; padding-top: 15px; color: #fff">OUR DEDICATED SERVICES</h4>
            </div> 
<hr>

<div class="a2" style="padding-left: 60px;padding-top: 30px; font-size: 20px;height:80px" ><b>Student Consultancy</b></div>
 <hr>
 <div class="a3" style="padding-left: 60px;padding-top: 30px; font-size: 20px;height:80px" ><b>Full bank support</b></div>
<hr>
 <div class="a3" style="padding-left: 60px;padding-top: 30px; font-size: 20px;height:80px" ><b>Visa processing</b></div>
<hr>
<div class="a3" style="padding-left: 60px;padding-top: 30px; font-size: 20px;height:80px" ><b>Student documents support</b></div>
<hr>
<div class="a3" style="padding-left: 60px;padding-top: 30px; font-size: 20px;height:80px" ><b>University payment support</b></div>
<hr
</div>
        </div>

    </div></div>
    
</div>      
</div>

<div class="space1"></div>	
<?php get_footer();?>
