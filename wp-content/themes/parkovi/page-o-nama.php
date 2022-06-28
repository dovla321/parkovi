<?php
/*
Template Name: Page O nama
*/
get_header();
$poz_slika=get_field('pozadinska_slika');
$naslov=get_field('sekcija1_naslov');
$sadrzaj=get_field('sekcija1_sadrzaj');
$slikapp=get_field('sekcija1_slika');

$sekc2Naslov1=get_field('sekcija_2_naslov1');
$sekc2Naslov2=get_field('sekcija_2_naslov2');
$sekc2Naslov3=get_field('sekcija_2_naslov3');
$text11=get_field('tex1');
$text22=get_field('tex2');
$text33=get_field('tex3');
$sl_par1=get_field('slika1');
$sl_par2=get_field('slika2');
$sl_par3=get_field('slika3');
?>
<section class="hero-pages">
	<div class="container-fluide">
		<div class="image-hero" style="background-image: url(<?php echo $poz_slika['sizes']['large'];?>);">
			<div class="text-hero">
				<h1>O nama</h1>
			</div>
		</div>
	</div>
</section>
<section class="o-nama-main">
	<div class="container">
		<div class="row">
			
			<div class="col-lg-5 marg-rig">
				<div class="content">
					<div class="title">
						<h2 class="underl-after-tex"><?php echo $naslov;?></h2>
					</div>
					<div class="content-text">
						<p><?php echo $sadrzaj;?></p>
					</div>
				</div>
			</div>
			<div class="col-lg-7">
				<div class="image-wrap">
					
					
					<img src="<?php echo $slikapp;?>" >
					
				</div>
			</div>
			
		</div>
	</div>
</section>
<!---------owle-courasel section------------------------------>
<section class="courasel-sec">
	<div class="container">
		<div class="row">
			<!----prva -col-4--------------------------------------------------------->
			<div class="col-lg-4">
				<div class="title">
					<h3><?php echo $sekc2Naslov1;?></h3>
				</div>
				
				<div class="owl-carousel owl-theme">
					<?php if(have_rows('slider_slika')):?>
					<?php while(have_rows('slider_slika')):the_row();
					
					$sliderSlika=get_sub_field('slider-slika');
					?>
					
					<a href="<?php echo $sliderSlika['sizes']['large'];?>" data-lightbox="mygallery"><div class="slide slide-1" style="background-image: url(<?php echo $sliderSlika['sizes']['large'];?>);">
						
					</div></a>
					<?php endwhile;?>
					<?php endif;?>
					
				</div>
				<div class="some-text">
					<?php echo $text11;?>
				</div>
			</div>
			<!----druga -col-4--------------------------------------------------------->
			<div class="col-lg-4">
				<div class="title">
					<h3><?php echo $sekc2Naslov2;?></h3>
				</div>
				
				<div class="owl-carousel owl-theme">
					<?php if(have_rows('slider-slike2')):?>
					<?php while(have_rows('slider-slike2')):the_row();
					
					$sliderSlika2=get_sub_field('slider_slika2');
					?>
					<a href="<?php echo $sliderSlika2['sizes']['large'];?>" data-lightbox="mygallery"><div class="slide slide-1" style="background-image: url(<?php echo $sliderSlika2['sizes']['large'];?>);">
						
					</div></a>
					<?php endwhile;?>
					<?php endif;?>
					
					
				</div>
				<div class="some-text">
					<?php echo $text22;?>
				</div>
			</div>
			<!----treća -col-4--------------------------------------------------------->
			<div class="col-lg-4">
				<div class="title">
					<h3><?php echo $sekc2Naslov3;?></h3>
				</div>
				
				<div class="owl-carousel owl-theme">
					<?php if(have_rows('slider-slike3')):?>
					<?php while(have_rows('slider-slike3')):the_row();
					
					$sliderSlika3=get_sub_field('slider_slika3');
					?>
					<a href="<?php echo $sliderSlika3['sizes']['large'];?>" data-lightbox="mygallery"><div class="slide slide-1" style="background-image: url(<?php echo $sliderSlika3['sizes']['large'];?>);">
						
					</div></a>
					<?php endwhile;?>
					<?php endif;?>
					
				</div>
				<div class="some-text">
					<?php echo $text33;?>
				</div>
			</div>
		</div>
	</div>
</section>
<!---<section class="onama-new-sect">
		<div class="container">
				<div class="row">
						<div class="col-lg-4">
								<div class="content">
										<div class="image">
						<img src="<?php echo get_template_directory_uri(); ?>/images/container.png">
					</div>
					<div class="paragraph ">
						<p><?php echo $text11 ;?></p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 mar-tb">
				<div class="content">
					<div class="image">
						<img src="<?php echo get_template_directory_uri(); ?>/images/trash-can.png">
					</div>
					<div class="paragraph ">
						<p><?php echo $text22 ;?></p>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="content">
					<div class="image">
						<img class="truckkk" src="<?php echo get_template_directory_uri(); ?>/images/truck2.png">
					</div>
					<div class="paragraph">
						<p><?php echo $text33 ;?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="paral-picture">
	<div class="container">
		
		<div class="image" style="background-image: url(<?php echo $sl_par1;?>">
			
		</div>
		
	</div>
</section>
<section class="paral-picture">
	<div class="container">
		
		<div class="image" style="background-image: url(<?php echo $sl_par2;?>">
			
		</div>
		
	</div>
</section>
<section class="paral-picture">
	<div class="container">
		
		<div class="image" style="background-image: url(<?php echo $sl_par3;?>">
			
		</div>
		
	</div>
</section>--->
<?php get_footer();?>