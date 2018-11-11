<?php get_header(); ?>

<?php 
/*
Template Name: contact.php

*/

?>

<body <?php body_class(); ?>>

<h1 style="color: red; margin-top: 150px; padding-left: 550px; "><?php echo $dmseducation['contact_us_location_title']; ?></h1>

<div class="container">
    <div class="row" style="height:600px; width: 100%;  margin-top: 100px">
        <div class="col-md-6" >

            <div class="con">
            
            <div class="c1"> <i class="fa fa-home" aria-hidden="true" style="font-size:20px; padding-top: 10px; color:#006e96; padding-left: 10px"></i>
<span style="font-weight: bold;font-size: 16px;letter-spacing:-1px"><?php echo $dmseducation['contact_us_location_address_1']; ?></span></div>
            <div class="c1"><i class="fa fa-phone-square" aria-hidden="true" style="font-size:20px; padding-top: 10px; color:#006e96; padding-left: 10px"></i>
<span style="font-weight: bold;font-size: 16px"> <?php echo $dmseducation['contact_us_location_phone_1']; ?></span></div>
            <div class="c1"><i class="fa fa-whatsapp" aria-hidden="true"  style="font-size:20px; padding-top: 10px; color:#006e96; padding-left: 10px"></i>
<span style="font-weight: bold;font-size: 16px"> <?php echo $dmseducation['contact_us_location_whatsapp_1']; ?></span></div>
            <div class="c1"><i class="fa fa-envelope-o" aria-hidden="true"style="font-size:20px; padding-top: 10px; color: #006e96; padding-left: 10px"></i>
<span style="font-weight: bold;font-size:16px "><?php echo $dmseducation['contact_us_location_email_1']; ?></span></div>
            <div class="c1"><i class="fa fa-skype" aria-hidden="true" style="font-size:20px; padding-top: 10px; color: #006e96; padding-left: 10px"></i>
<span style="font-weight: bold;font-size: 16px">Skype: <?php echo $dmseducation['contact_us_location_skype_1']; ?>
</span></div>
            <div class="c1"><i class="fa fa-phone" aria-hidden="true"style="font-size:20px; padding-top: 10px; color: #006e96; padding-left: 10px"></i>
<span style="font-weight: bold;font-size: 16px"> <?php echo $dmseducation['contact_us_location_viber_1']; ?></span></div>

              <div class="c1"><i class="fa fa-globe" aria-hidden="true"style="font-size: 20px; padding-top: 10px; color:#006e96; padding-left: 10px"></i>
<span style="font-weight: bold;font-size: 16px"><?php echo $dmseducation['contact_us_location_contry_1']; ?> <?php echo $dmseducation['contact_us_location_phone_1'];?></span></div>
            <div class="c1"></div>



</div>

        </div>
        <div class="col-md-6">

              <form action="#">

                <div class="form-group">
      <label for="email"><span style="font-size: 16px">Name</span></label>
      <input type="name" class="form-control" id="email" placeholder="Enter name" name="name" style="border-radius: 0px;">
    </div>
    <div class="form-group">
      <label for="email" ><span style="font-size: 16px">Email:</span></label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" style="border-radius: 0px;">
    </div>
    <div class="form-group">
      <label for="pwd" ><span style="font-size: 16px">Phone No</span></label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter no" name="pwd" style="border-radius: 0px;">
    </div>

    <div class="form-group">

      <label for="email" ><span style="font-size: 16px">Subject</span></label>
      <input type="email" class="form-control" id="email" placeholder="Enter subject" name="email" style="border-radius: 0px";>
    </div>
<label><span style="font-size: 16px"> Message</span></label>
    <textarea name="message" rows="6" cols="10"  class="cont"; style="border:1px solid #9c9c9c; " placeholder="Type Here...!"></textarea>
    
    
<button type="submit" class="btn btn-default" style="margin-top:15px; margin-left:200px;border-radius: 0px;">Send Message</button>
  </form>
            
        </div>
    </div>
</div>



    <?php get_footer(); ?>