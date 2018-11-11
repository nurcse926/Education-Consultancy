<?php get_header(); ?>

<?php 
/*
Template Name: japan.php
*/

?>


<body>
    
    <style>
.japanp{
    margin-top: 100px;
    padding-left: 670px;
}
</style>
    <div class="usa">
        <div class="japanp">

<?php the_post_thumbnail();?>  
    </div>

<div class="dbtn" style="margin-top: -50px; margin-left: 510px; position: absolute;">
     <a href="https://www.dmseducationbd.com/registration"> <button type="button" class="btn btn-success" ><span style="color: #fff">Apply Now</span></button></a>
</div>
</div>

<div class="container-fluied">
<div class="online">
    <h2 style="color: #43CDF0;position: absolute; margin-top: 80px;padding-left: 500px;font-size: 40px "><span style="font-weight: bold">Study in Japan</span></h2> 
    
</div>
</div>

<div class="container">

<div class="row" style="height: 800px; width: 100%">
        <div class="col-md-12">


        	<?php while (have_posts()) : the_post(); ?> 

        	<?php the_content();?>


			<!-- <?php endwhile; ?> -->
		</div>


            </div>
    </div>
</div>

<div class="space1"></div>

<?php get_footer(); ?>