<?php
/*
Template Name: Page Početna
*/
get_header();

$slika1=get_field('slika1');
$slika2=get_field('slika2');
$slika3=get_field('slika3');

$onama_sekcija_naslov=get_field('naslov1');
$onama_pocetna_sadrzaj=get_field('sadrzaj1');


$novosti_naslov=get_field('naslov');
$para_slika=get_field('paralex_slika')

?>


<section class="home-hero">
	<div class="container-fluide">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

			
  <div class="carousel-inner">
  
       
  	

  	

    <div class="carousel-item active">
      <img src="<?php echo $slika1['sizes']['large'];?>" class="d-block w-100 " alt=...>
      
    </div>
    <div class="carousel-item ">
      <img src="<?php echo $slika2['sizes']['large'];?>" class="d-block w-100 " alt=...>
      
    </div>
    <div class="carousel-item ">
      <img src="<?php echo $slika3['sizes']['large'];?>" class="d-block w-100 " alt=...>
      
    </div>
    
    
    

    

    
  </div>



 <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
	</div>
</section>









<!----------------sec-onama-------------------------->


<section class="onama-pocetnaa">
	<div class="container">
		<div class="content">
			<div class="title">
				<h2 class="underl-after-tex"><?php echo $onama_sekcija_naslov;?></h2>
			</div>

			<div class="paragraf">
				<p><?php echo $onama_pocetna_sadrzaj;?></p>
			</div>
		</div>
	</div>
</section>



<section class="paral-picture">
	<div class="image" style="background-image: url(<?php echo $para_slika['sizes']['large'];?>);">
		
	</div>
</section>








<!------------------blog home-------------------------------------------->


<section class="blog-home mb-5">


	<div class="container">
		
		<div class="main-title my-5">
			<h2  class="underl-after-tex text-center animate__animated animate__backInLeft" ><?php echo $novosti_naslov;?></h2>
		</div>
	 
		<div class="row">
			<?php 

                              

                        $args = array(
                        'post_type'=> 'post-blogs',
                        'orderby'    => 'ID',
                        'post_status' => 'publish',
                        'order'    => 'DESC',
                        'posts_per_page' => 3 
                        );



                        $result = new WP_Query( $args );
                        if ( $result-> have_posts() ):?>

                         


                        	
                        <?php while ( $result->have_posts() ) : $result->the_post();

                        	$kratki_text=get_field('kratki_text');
                        	$slika=get_field('slika');




                        	?>

                         


                         
			<div class="col-lg-4 mar-boot">

				
 

                              
				
				<div class="blog-wrap">

					
					<div class="image-wrap">

						<?php if($slika):?>
                    <img src="<?php echo $slika['sizes']['large']; ?>">
       
                  <?php endif;?>

						
      
              
					</div>

					<div class="text-wrap">
						<div class="main-title">
							<h3><?php the_title();?></h3>
						</div>
						<div class="content">
							<p><?php echo $kratki_text;?> </p>
							<div class="btn-wrap">

                  <a href="<?php the_permalink();?>" class="btn btn-success">Pročitaj više</a>
					 </div>
						</div>
						
					</div>


				</div>


				
			</div>

<?php endwhile; ?>
                <?php endif; wp_reset_postdata(); ?>


		</div>


	</div>
</section>



<!----------------blog slider----------------------------->














<?php get_footer();?>
