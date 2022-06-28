<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>

<section class="hero-pages">
  <div class="container-fluide">
    <div class="image-hero" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/park22.png);">
      <div class="text-hero">
        <h1></h1>
      </div>
    </div>
  </div>
</section>



<section class="sub-page-header mt-5" style="background-image: url(/wp-content/uploads/2020/04/img-header-18.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-10 wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="0.5s">
        <h1>Rezultati pretrage za  '<?php echo get_search_query();?>'</h1>

      </div>
    </div>
  </div>
</section>

<section class="left-content suche searc-sect-margbott">
  <div class="container">
    <div class="row">
      <div class="col-md-8 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.5s">
        <?php if ( have_posts() ) { ?>
          <?php while ( have_posts() ) { the_post(); ?>
           <a href="<?php echo get_permalink(); ?>"><?php the_title();  ?></a><br>

         <?php } ?>
         <?php echo paginate_links(); ?>
       <?php } ?>
     </div>
   </div> 
 </div>
</section>


<?php get_footer(); ?>

