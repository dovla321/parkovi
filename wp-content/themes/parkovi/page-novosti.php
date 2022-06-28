<?php
/*
Template Name: Page Novosti
*/
get_header();

$poz_slika=get_field('pozadinska_slika');

?>

<section class="hero-pages novosti-hero">
	<div class="container-fluide">
		<div class="image-hero " style="background-image: url(<?php echo $poz_slika['sizes']['large'];?>);">
			<div class="text-hero">
				<h1>Novosti</h1>
			</div>
		</div>
	</div>
</section>


<!-----------------novosti blog---------------------------->

<section class="blog-novosti mb-5">
	<div class="container">
		<?php  

                        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                        $args = array(
                        'post_type'=> 'post-blogs',
                        'orderby'    => 'ID',
                        'post_status' => 'publish',
                        'order'    => 'DESC',
                        'posts_per_page' => 5,
                        'paged'=>$paged,

                        
                        );
                        
                       
                        
                     $loop = new WP_Query( $args );
                     $i = 0;
                     if ( $loop->have_posts() ) {
                     while ( $loop->have_posts() ): $loop->the_post();?>


                        	

                         
                       

                        	
                        <?php $kratki_text=get_field('kratki_text');
                        	$slika=get_field('slika'); ?>

		<div class="row mb-5">
			

			
           
			<div class="col-lg-4 ">
				<div class="image">

				 <?php if($slika):?>
                    <img src="<?php echo $slika['sizes']['large']; ?>">
       
                  <?php endif;?>
			</div>
			</div>

			<div class="col-lg-8 ">
				<div class="content">
					<div class="title">
						<h2><?php the_title();?></h2>
					</div>
					<div class="content-text">
						<p><?php echo $kratki_text;?></p>
					</div>
					<div class="btn-text">
						<a href="<?php the_permalink();?>" class="btn btn-success">Pročitaj više</a>
					</div>

				</div>
			</div>


			

			
		</div>
		<?php $i++;  endwhile; ?>

			<?php $total_pages = $loop->max_num_pages;
			if ($total_pages > 1) {
			   ?>
			   <div class="paginate">
			      <?php
			      $current_page = max(1, get_query_var('paged'));

			      echo paginate_links(array(
			         'base' => preg_replace('/\?.*/', '/', get_pagenum_link(1)) . '%_%',
			         'current' => $current_page,
			         'total' => $total_pages,
			         'prev_text' => __('&lt;'),
			         'next_text' => __('&gt;'),
			      ));
			      echo "</div>";} ?>
			      <?php
			   } else {
			      echo '<div class="no-post-info"><strong>Nema objava</strong></div>';
			   }
			   wp_reset_postdata();
			   ?>

        

         


         

                
	</div>
	
    
	
</section>

    

<?php get_footer();?>