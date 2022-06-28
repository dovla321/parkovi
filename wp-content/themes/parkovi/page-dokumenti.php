<?php
/*
Template Name: Page Dokumentacija
*/




get_header();
$poz_slika=get_field('pozadinska_slika');
$naslov_dok=get_field('naslov');

?>


<section class="hero-pages dokumentacija-hero">
	<div class="container-fluide">
		<div class="image-hero" style="background-image: url(<?php echo $poz_slika['sizes']['large'];?>);">
			
		</div>
	</div>
</section>



<!---dokumenti------------------------------------------->


<section class="dokument-section">
	<div class="container">
		<div class="dokument-wrap">
			<h2 class=""><?php echo $naslov_dok;?></h2>
			
			<?php if(have_rows('objavi_dokument')):?>

				<?php while(have_rows('objavi_dokument')):the_row();
                     $file=get_sub_field('dokument');
                      $naziv=get_sub_field('ime_dokumenta');
                      
                      $fileurl=$file['url'];

                      $filename=$file['filename'];

                      $finalnaziv;

                      if ($naziv) {

                      	 $finalnaziv = $naziv;
                      } else {

                      	$finalnaziv = $filename;
                      }



					?>

					<?php 	 ?>
		 <div class="docu-wrap">
		 	<?php if($finalnaziv):?>
			<a target="_blank" href="<?php echo $fileurl;?>"><i class="fa fa-download" aria-hidden="true"></i><?php echo $finalnaziv;?></a>
			<?php endif;?>
			</div>

			 <?php endwhile;?>

			 <?php endif;?>

		</div>
	</div>
</section>







<!-------------------galerija---------------------->



<section class="gallery-section mb-5">
	<div class="container">
		<div class="gallery">

			
			<?php if(have_rows('galerija')):?>

				<?php while(have_rows('galerija')):the_row();
                      
                      $slika=get_sub_field('slika');


					?>
			<a href="<?php echo $slika;?>" data-lightbox="mygallery"><img src="<?php echo $slika;?>"></a>
			 <?php endwhile;?>

			 <?php endif;?>


			
		</div>
	</div>


</section>









<?php get_footer();?>