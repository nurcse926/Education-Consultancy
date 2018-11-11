
<?php get_header();?>

<div class="container-fluied" style="margin-top:100px">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

                   <?php
                   $counter=0;
                    $slide_post = new WP_Query(array(
                        'post_type' => 'dmsltd_home_slider',
                        'posts_per_page' => '8'
                    ));
                    ?> 
                     <?php while ($slide_post->have_posts()) : $slide_post->the_post();  ?>
        
<?php if($counter == 0): ?>
      <div class="item active">
         <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="Chicago" style="width:100%;">
        
      </div>
     <?php else: ?>
<div class="item ">
        <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="Chicago" style="width:100%;">
    
        
        </div>
      <?php endif; $counter++?>

       <?php endwhile; ?> 
  
  
    </div>
  
  
  <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
       <span class="glyphicon glyphicon-chevron-right"></span> 
      <span class="sr-only">Next</span>
    </a>
  </div>

<style>
.hov{
  background-image: url("<?php echo esc_url(get_template_directory_uri());?>/img/hover1.png");
  height: 183px;
  width: 250px;
  position: absolute;
}

.hov:hover{
  background-image: url("<?php echo esc_url(get_template_directory_uri());?>/img/hover2.png");
  height: 183px;
  width: 250px;
}


.fa-book{
   height: 183px!important;
  width:300px!important; 
  padding-left: -100px;
}
.fa-book:hover{
  height: 183px!important;            
  color:#fff!important;  

}
 .fa-handshake-o{
  height: 183px!important;
  width: 220px!important; 
}

  .fa-handshake-o:hover{
  height: 183px!important;
  width: 220px!important; 
  color:#fff!important;
}

 .fa-user-o{
  height: 183px!important;
  width: 220px!important; 
}

  .fa-user-o:hover{
  height: 183px!important;
  width: 220px!important; 
  color:#fff!important;
}

 .fa-graduation-cap{
  height: 183px!important;
  width: 220px!important; 
}

  .fa-graduation-cap:hover{
  height: 183px!important;
  width: 220px!important; 
  color:#fff!important;
}
</style>
<!-- Hover start here 
  ---------------------------------------------->
<div class="container" id="trend">
  <div class="col-md-3">
    <div class="hov" style="margin-left: 50px; margin-top: -110px">
<div class="hov"> <p style="color: #fff; margin-left:40px; padding-top: 75px">Trending Courses</p>
<div class="ico"><i class="fa fa-handshake-o" aria-hidden="true" style="font-size: 40px;color:red; margin-top:-95px; margin-left:75px;position:absolute"></i></div>
  <span style="font-size: 15px; padding-left:15px;  color: #fff">
      Lorem Ipsum dolor sit amet &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Sed 
       molestie justo</span>
 </div>
  </div>
  </div>
    <div class="hov" style="margin-left:370px; margin-top: -110px">
<div class="hov"> <p style="color: #fff; margin-left:40px; padding-top: 75px">Trending Courses</p>
<div class="ico"><i class="fa fa-book" aria-hidden="true" style="font-size: 40px;color:red; margin-top: -95px; margin-left:79px;position:absolute"></i></div>
  <span style="font-size: 15px; padding-left:10px;  color: #fff">
      Lorem Ipsum dolor sit amet &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; Sed 
       molestie justo</span>
 </div>
  </div>
  </div>

    <div class="hov" style="margin-left:700px; margin-top: -110px">
<div class="hov"> <p style="color: #fff; margin-left:40px; padding-top: 75px">Trending Courses</p>
<div class="ico"><i class="fa fa-user-o" aria-hidden="true" style="font-size: 40px;color:red; margin-top: -95px; margin-left:79px;position:absolute"></i></div>
  <span style="font-size: 15px; padding-left:10px;  color: #fff">
      Lorem Ipsum dolor sit amet &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; Sed 
       molestie justo</span>
 </div>
  </div>
  </div>

    <div class="hov" style="margin-left:1000px; margin-top: -110px">
<div class="hov"> <p style="color: #fff; margin-left:40px; padding-top: 75px">Trending Courses</p>
<div class="ico"><i class="fa fa-graduation-cap" aria-hidden="true" style="font-size: 40px;color:red; margin-top: -95px; margin-left:79px;position:absolute"></i></div>
  <span style="font-size: 15px; padding-left:10px;  color: #fff">
      Lorem Ipsum dolor sit amet &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; Sed 
       molestie justo</span>
 </div>
  </div>
  </div>
</div>
    </div>
  </div>

</div>

<!--<div class="container" id="trend">-->
<!--  <div class="col-md-3">-->
<!--    <div id="nur" style="margin-left: 50px; margin-top: -50px">-->
<!--      <p style="color: #fff; margin-left:40px; padding-top: 15px">Trending Courses</p>-->
<!-- <span style="font-size: 15px; padding-left:10px;  color: #fff">-->
<!--      Lorem Ipsum dolor sit amet Sed-->
<!--       &nbsp; molestie justo</span>-->
<!--      <div id="nur1"><div class="ico"><i class="fa fa-handshake-o" aria-hidden="true" style="font-size: 40px;color:red; margin-top: 20px; margin-left: 13px"></i></div> </div>-->

<!--    </div>-->
<!--  </div>-->
<!--    <div class="col-md-3"><div id="nur" style="margin-left: 25px; margin-top: -50px">-->
<!--      <p style="color: #fff; margin-left:40px; padding-top: 15px">Books & Liberary</p>-->
<!--      <span style="font-size: 15px; padding-left:10px;  color: #fff">-->
<!--      Lorem Ipsum dolor sit amet Sed-->
<!--       &nbsp; molestie justo</span>-->
<!--      <div id="nur1"><div class="ico">-->
<!--    <i class="fa fa-book" aria-hidden="true" style="font-size: 40px;color:red; margin-top: 20px; margin-left: 13px"></i>-->
<!--      </div></div></div>-->
<!--      <div class="col-md-3"><div id="nur" style="margin-left: 320px; margin-top: -123px">-->
<!--        <p style="color: #fff; margin-left:40px; padding-top: 15px">Certified Teacher</p>-->
<!--        <span style="font-size: 15px; padding-left:10px;  color: #fff">-->
<!--      Lorem Ipsum dolor sit amet Sed-->
<!--       &nbsp; molestie justo</span>-->
<!--      <div id="nur1"><div class="ico"><i class="fa fa-user-o" aria-hidden="true" style="font-size: 40px;color:red; margin-top: 20px; margin-left: 13px"></i></div></div></div>-->

<!--      <div class="col-md-3"><div id="nur" style="margin-left: 610px; margin-top: -123px">-->
<!--        <p style="color: #fff; margin-left:60px; padding-top: 15px">Certification</p>-->
<!--        <span style="font-size: 15px; padding-left:10px;  color: #fff">-->
<!--      Lorem Ipsum dolor sit amet Sed-->
<!--       &nbsp; molestie justo</span>-->
<!--      <div id="nur1"><div class="ico"><i class="fa fa-graduation-cap" aria-hidden="true" style="font-size: 40px;color:red; margin-top: 20px; margin-left: 13px"></i>-->

<!--</div></div></div>-->
<!--</div>-->


<!--    </div>-->
<!--  </div>-->

<!--</div>-->



<div class="container" style= "background: #f1f6f1;margin-top: 250px";>


<div class="col-md-8" style="margin-top: 100px; " >
  <div class="content1">
 <h2> ABOUT US</h2><br><br>
<p><?php echo $dmseducation['about_company_details']?></p>


<div class="about1">


<div class="dbtn" style="margin-top: -30px; margin-left: 300px; position: absolute;">
    <button type="button" class="btn btn-success"><a href=" https://www.dmseducationbd.com/about-us/"><span style="color: #fff">Apply Now</span></a></button>
</div>
</div>


</div>
</div> 


<div class="col-md-4" style="margin-top: 300px">
<img src="<?php echo $dmseducation['home_about_picture']['url'] ?>"  style="width:100%; margin-top: -150px" >
</div>

  </div>


<div class="container-fluied" style="background-image:url(
    <?php echo esc_url(get_template_directory_uri());?>/img/serv.jpg); height: 1000px;margin-top: 200px">
                
<div class="container" class="serv" >
  

   <h1 style="margin-left: 500px;margin-top: 40px"><span style="color: #fff;font-size: 45px;font-weight:bold ">Services</span></h1><br>
                    <?php
                    $services_post = new WP_Query(array(
                        'post_type' => 'dmsltd_services',
                        'posts_per_page' => '8'
                    ));
                    ?>

 <?php while ($services_post->have_posts()) : $services_post->the_post(); ?>

   <div class="col-md-4"><div class="engine">
      <div class="src">
        
         <?php the_post_thumbnail(); ?>

      </div>
      <h3 style="margin-left:20px;"><?php the_title()?></h3>
        <p style="padding-left: 10px;"><?php the_content()?></p>
        <button type="button" class="btn btn-danger" style="margin-top: 21px;margin-left:110px">Read More</button >

  
   </div></div>
   <?php endwhile; ?>  
 </div>
                    <div class="container"> 
                      <h1 style="margin-left: 400px;margin-top: 120px!important;font-weight: bold">Top University List</h1>


<div class="container-fluied" style="margin-top: 30px">
  
 
<div class="container-fluied" style="margin-top: 30px">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Wrapper for slides -->
    <div class="carousel-inner">


                  <?php
                   $counter=0;
                    $country_post = new WP_Query(array(
                        'post_type' => 'dmsltd_country_list',
                        'posts_per_page' => '8'
                    ));
                    ?> 
                     <?php while ($country_post->have_posts()) : $country_post->the_post();  ?>
        
<?php if($counter == 0): ?>


      <div class="item active">
      
     <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="Los Angeles"  style="width:100%; height: 280px">
        
      </div>
    <?php else: ?>
      <div class="item">
      
     <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>"alt="Chicago"  style="width:100%; height: 280px">
         
        </div>

 <?php endif; $counter++?>

       <?php endwhile; ?>

<script>
jQuery(document).ready(function($) {
"use strict";
$('#customers-testimonials').owlCarousel( {
    loop: true,
    center: true,
    items: 3,
    margin: 30,
    autoplay: true,
    dots:true,
    nav:true,
    autoplayTimeout: 1000,
    smartSpeed: 150,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 2
      },
      1170: {
        items: 3
      }
    }
  });
});

</script>
    </div>
                    </div>
                  </div>
                </div>


            </div>
        </div> 
        <!-- Partner End -->

<!-- Counter Up Section Start-->
        <div class="ach"><div class="achv" style="text-align: center;margin-top: 500px">ACHEIVEMENTS
<h5 style="padding-left: 60px">Fusce sem dolor, interdum in efficitur at, faucibus nec lorem.</h5><br>
<hr style="width: 200px; margin-left:350px!important; background-color: red;">
            <div class="row">
                   

<div class="counter" data-count="60">0</div>
<div class="counter" data-count="850">0</div>
<div class="counter" data-count="100">0</div>
<div class="counter" data-count="230">0</div>
<div class="tbx">
 <span style="margin-left: -100px"> Teachers</span>
 <span style="margin-left: 70px"> Students</span>
 <span style="margin-left: 110px"> Courses</span>
<span style="margin-left: 120px"> Staff</span>
</div>

            </div>
            </div>
        </div>

<script>


$('.counter').each(function() {
  var $this = $(this),
      countTo = $this.attr('data-count');
  
  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },

  {

    duration: 5000,
    easing:'linear',
    step: function() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function() {
      $this.text(this.countNum);
      //alert('finished');
    }

  });  
  

});


</script>

        <!-- Counter Up Section End -->



    <!-- Testimonial Start -->

      <div class="container-fluied" style="background-image:url(
    <?php echo esc_url(get_template_directory_uri());?>/img/test.jpg); margin-top: 150px" class="what">
       <div class="container">
        <div class="testm">


 <h1 style="margin-left:430px; margin-top:10px!important"><span style="color:#000;font-size: 37px; font-weight: bold;color: #fff">What people says</span></h1> 
                      <?php
                    $comment_post = new WP_Query(array(
                        'post_type' => 'dmsltd_testimony',
                        'posts_per_page' => '8'
                    ));
                    ?>

 <?php while ($comment_post->have_posts()) : $comment_post->the_post(); ?>


   <div class="col-md-4"><div class="cmmnt">
      <div class="cbox">

        <i class="fa fa-quote-left" aria-hidden="true" style="padding-top: 60px;padding-left:10px;color:red; font-size: 30px  "></i>
          <i class="fa fa-quote-right" aria-hidden="true" style="padding-top: 170px; padding-left: 315px;color: red; font-size: 30px "></i>
      </div> 

     
<div class="testp1">
  <h2 style="padding-left: 10px"><?php the_title(); ?></h2>
  <p style="padding-left: 10px"><?php the_content(); ?></p>
</div>

      <div class="people1"><?php the_post_thumbnail(); ?></div>


 
   </div>


 </div>

<?php endwhile;?>

</div>
</div>

</div>

<!-- Blog start -->

  

<div class="container"><h1 style="margin-left:500px; margin-top: 90px;font-weight: bold">Blog</h1><br>



                    <?php
                    $blog_post = new WP_Query(array(
                        'post_type' => 'dmsltd_blog',
                        'posts_per_page' => '8'
                    ));
                    ?>
  <?php while ($blog_post->have_posts()) : $blog_post->the_post(); ?>
   <div class="col-md-4"><div class="blg">
        
    <?php the_post_thumbnail(); ?>
    <h3><?php the_title(); ?></h3>

  <p style="margin-top: 10%;margin-left: -5px" <?php the_content(); ?>
<?php read_more(40); ?>
</p>
<button type="button" class="btn btn-danger" style="margin-top:20px; margin-left: 100px">Read More</button>
   </div>
 </div>
 <?php endwhile; ?>  
   <!-- <div class="col-md-4"><div class="blg1">
     <img src="
    <?php echo esc_url(get_template_directory_uri());?>/img/com.jpg">  
    <h3><b>Best it srvices company in bangladesh</b></h3>

  <p style="margin-top: 10%;margin-left: -5px">Digital Marketing Agency And Software Development Company 
Website Design Professional Full Services.Digital Marketing Agency And Software Development Company 
Website Design Professional Full..</p>
<button type="button" class="btn btn-danger" style="margin-top:20px; margin-left: 75px">Read More</button>
     

   </div></div>
   <div class="col-md-4"><div class="blg2">
         <img src="
    <?php echo esc_url(get_template_directory_uri());?>/img/post1.jpg">
    <h3><b>Best it srvices company in bangladesh</b></h3>

  <p style="margin-top: 10%;margin-left: -5px">Digital Marketing Agency And Software Development Company 
Website Design Professional Full Services.Digital Marketing Agency And Software Development Company 
Website Design Professional Full..</p>
<button type="button" class="btn btn-danger" style="margin-top:20px; margin-left: 75px">Read More</button>
      

   </div>
 </div> -->

 
</div>

 

</div>

<div>

<style>
hr {
  
    height: 4px;
    border-top: 1px solid #ccc;
    width: 160px!important;
    margin-left:-0px!important;
}

</style>
 <div class="container" style="margin-top:450px">
 </div>
 <?php get_footer();?>