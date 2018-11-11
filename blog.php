<?php get_header(); ?>

<?php 
/*
Template Name: blog.php
*/

?>

<body <?php body_class();?>>

<div class="container">
<div class="row" style=" width: 100%;margin-top:200px;height:400px">

                    <?php
                    $blog_post = new WP_Query(array(
                        'post_type' => 'dmsltd_blog',
                        'posts_per_page' => '8'
                    ));
                    ?>

<?php while ($blog_post->have_posts()) : $blog_post->the_post(); ?>

<div class="col-md-8" >
    <div class="method">
     <h1 style="padding-top: 20px;padding-left: 10px">Digital Marketing Methodology</h1>

        <div class="dms">
            <div class="dms1"><span style="padding-left: 25px;color: #fff"></span></div>
            <div class="dms2"><span style="padding-left: 10px;color: #fff"><?php echo the_category(' ', '', ''); ?><i class="fa fa-user-o" aria-hidden="true"></i>&nbsp;<?php the_author(); ?></span></div>
            <div class="dms3"><span style="padding-left: 10px;color: #fff"><i class="fa fa-calendar" aria-hidden="true">&nbsp;</i><?php the_time('F j, Y'); ?></span></div>
            <div class="dms4"><span style="padding-left: 10px;color: #fff"><i class="fa fa-commenting-o" aria-hidden="true"></i>&nbsp; <?php comments_popup_link('No Comment', '1 Comment', '% Comment', $css_class, $none) ?></span></div>
        
    </div>
        
<?php the_post_thumbnail(); ?>

<?php the_content();?> <a href="#">read more</a>
</div>
</div>

 
 <?php endwhile; ?>


<div class="col-md-4" style="margin-top:-1100px">
    <div class="ab2">
        
        <div class="srvc">

            <div class="a1">
                <h4 style="padding-left: 60px; padding-top:15px; color: #fff">OUR DEDICATED SERVICES</h4>
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
<hr>
        </div>

    </div>

</div>
</div>
  </div>  
<div class="space"></div>
     <?php get_footer(); ?>