
<?php get_header(); ?>

<?php 
/*
Template Name:  payment.php
*/

?>



<body <?php body_class();?>>


<div class="container">

    <div class="row" style="height: 800px; width: 100%;  margin-top: 150px">
        <div class="col-md-8">
            <div class="st">
            
        <h3 style="font-family: Times New Roman; font-size: 30px">University payment Support</h3>

       
        <?php while (have_posts()) : the_post(); ?> 

          <?php the_content();?>


       <?php endwhile; ?> 

        </div>
        </div>
    <style>
    .hr{
        border-left:2px solid gray;
        height: 700px;
        padding-top: -300px;
    }

    </style>
        <div class="col-md-4"><div class="hr"></div>
            <div class="st1" style="margin-left: 15px">
<h2 style="margin-top: -500px;position: absolute;"><u> Send a Message</u></h2>
 
                <form action="#">

                <div class="form-group" style="margin-top: -650px">
      <label for="email"><span style="font-size: 16px">Name</span></label>
      <input type="name" class="form-control" id="email" placeholder="Name" name="name" style="border-radius: 0px;">
    </div>
    <div class="form-group">
      <label for="email" ><span style="font-size: 16px">Email:</span></label>
      <input type="email" class="form-control" id="email" placeholder="Email" name="email" style="border-radius: 0px;">
    </div>
    <div class="form-group">
      <label for="pwd" ><span style="font-size: 16px">Phone No</span></label>
      <input type="password" class="form-control" id="pwd" placeholder="Phone No." name="pwd" style="border-radius: 0px;">
    </div>

    <div class="form-group">


      <label for="email" ><span style="font-size: 16px">Subject</span></label>
      <input type="email" class="form-control" id="email" placeholder="Subject" name="email" style="border-radius: 0px";>
    </div>
<label><span style="font-size: 16px"> Message</span></label>
    <textarea name="message" rows="6" cols="10"  class="cont"; style="border:1px solid #9c9c9c; " placeholder="Type Here...!"></textarea>
    
    
<button type="submit" class="btn btn-default" style="margin-top:15px; margin-left:0px;border-radius: 0px;">Send Message</button>
  </form>
            
        </div>
    </div>
</div>


        </div>







    </div>
    





</div>

  <?php get_footer(); ?>