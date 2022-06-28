<?php
/*
Template Name: Page Kontakt
*/
get_header();

$poz_slika=get_field('pozadinska_slika');

$naslov=get_field('naslov');
$ulica=get_field('adresa_ulica');
$pos_broj=get_field('postanski_broj');
$id_broj=get_field('id_broj');
$pdv=get_field('pdv_broj');
$koris_banka=get_field('korisnicka_banka');
$ime_banke=get_field('ime_banke');
$broj_rac=get_field('broj_racuna');
$br_telefona=get_field('telefon');
$br_fax=get_field('fax-broj');
$kont_email=get_field('email');

$radno_vrijeme=get_field('radno_vrijeme');




?>

<section class="hero-pages">
	<div class="container-fluide">
		<div class="image-hero" style="background-image: url(<?php echo $poz_slika['sizes']['large'];?>);">
			<div class="text-hero">
				<h1>Kontakt</h1>
			</div>
		</div>
	</div>
</section>

<section class="kontakt-main-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="content">
					<div class="title">
						<h2 class=" mb-5"><?php echo $naslov;?></h2>
					</div>

					<div class="paragraphs">
						<p><?php echo $ulica;?></p>
						<p><?php echo $pos_broj;?></p>
						<p><?php echo $id_broj;?></p>
						<p><?php echo $pdv;?></p>
						<a href="tel:<?php echo $br_telefona;?>"><p><?php echo $br_telefona;?></p></a>
						<a href="tel:<?php echo $br_fax;?>"><p><?php echo $br_fax;?></p></a>
						<a href="mailto:<?php echo $kont_email;?>"><p><?php echo $kont_email;?></p></a>
						<p><?php echo $koris_banka;?></p>
						<p><?php echo $ime_banke;?></p>
						<p><?php echo $broj_rac;?></p>
					</div>

					<div class="radno-vrijeme-wrap mt-5">
						<div class="title">
							<h3 class="">radno vrijeme</h3>
						</div>

						<div class="paragraph">
							<p><?php echo $radno_vrijeme;?></p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-7">
				<div class="forma">
					
					 <?php echo do_shortcode('[contact-form-7 id="87" title="Kontakt forma 2"]'); ?><?php  ?>
				</div>
			</div>


		</div>
	</div>
</section>

<section class="map-section mb-5" >
	<div class="map-box shadow">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11606.01873131092!2d17.79411839301057!3d43.34555287077931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134b43af8d34633f%3A0xa0511f6f757449d9!2sJavno%20poduze%C4%87e%20%22Parkovi%20Mostar%22!5e0!3m2!1sbs!2sba!4v1647972725010!5m2!1sbs!2sba" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>
</section>






<?php if($slika):?>
         <img src="<?php echo $slika;?>"alt="<?php the_title();?>" class="">
       
      <?php endif;?>

<?php get_footer();?>