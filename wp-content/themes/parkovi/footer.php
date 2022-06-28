
<footer>

  <?php if(get_field('footer_promjena_stila', 'options')):?>
   
   <style>
     
     footer{
      background: #cbf5e1 !important;
      color: black;
     }

     footer .content-footer-wrap .mail-phone-wraper .phone a{
      color: black;
     }

     footer .content-footer-wrap .mail-phone-wraper .mail a {
      color: black;
      
     }
     footer .content-footer-wrap .mail-phone-wraper .location a{
      color: black;
     }


     footer .content-footer-wrap .mail-phone-wraper, .title-adr, .rv-naslov, .big-mega-form h3 {
    color: black;
}
   </style>

  <?php endif;?>
  


 
  <div class="container-fluide">
    <div class="col-lg-12">
      <div class="content-footer-wrap">
        <div class="logo-footer mar-rig">
          <img src="<?php echo get_template_directory_uri(); ?>/images/JP_Parkovi_Mostar_d.o.o__4_-removebg-preview">
        </div>

        <div class="mail-phone-wraper mar-rig">
          <h3 class="" >Kontakt</h3>
          <div class="mail">
          
          <?php  
            
            $mail=get_field('email','options');
            $tel=get_field('telefon','options');
            $adre1=get_field('adresa1','options');
            $adre2=get_field('adresa2','options');
            $radno_vrijeme=get_field('radno_vrijeme','options');
            

          ?>
          <?php if($mail):?>
            <a href="mailto:<?php echo $mail;?>"><i class="fas fa-envelope"></i><?php echo $mail;?></a>
            <?php endif;?>
          </div>

          <div class="phone">
            <?php if($tel):?>
            <a href="tel:<?php echo $tel;?>"><i class="fas fa-solid fa-phone"></i><?php echo $tel;?></a>
            <?php endif;?>
          </div>

          <div class="location">
            <a href="https://www.google.com/maps/place/Javno+poduze%C4%87e+%22Parkovi+Mostar%22/@43.345758,17.7934319,15.08z/data=!4m9!1m2!2m1!1sUlica+Zagreba%C4%8Dka+broj+2++88+000+,+Mostar!3m5!1s0x134b43af8d34633f:0xa0511f6f757449d9!8m2!3d43.3424936!4d17.8005509!15sCilVbGljYSBaYWdyZWJhxI1rYSBicm9qIDIgIDg4IDAwMCAsIE1vc3RhcpIBEnV0aWxpdHlfY29udHJhY3Rvcg"><i class="fas fa-map-marker-alt"></i>Lokacija</a>
          </div>
        </div>

        <div class="adress-wrap mar-rig">
          <div class="title-adr">
            <h3>Adresa</h3>
            
          </div>
          <div class="paragraph">
            <p><?php echo $adre1;?></p>
            <p><?php echo $adre2;?></p>
          </div>

        </div>


        <div class="radno-vrij-wrap mar-rig mar-top-vrij">
          <div class="rv-naslov">
            <h3>radno vrijeme</h3>
          </div>
          <div class="ra-vrij">
            <?php if($radno_vrijeme):?>
            <p><i class="fas fa-clock"></i><strong><?php echo $radno_vrijeme;?></strong></p>
            <?php endif;?>
          </div>
        </div>



        <div class="big-mega-form form-mar-top">
          <div class="text-wrap">
          <h3 class="" >Pretraži Novosti</h3>
        </div>
        <div class="search-wrap">

           <form role="search" method="get" action="/" id="searchform">
                  <label class="screen-reader-text" for="s">Pretraži </label>
                   <input type="text" value="" name="s" id="s" placeholder="Search">
                   <div  class="search-icon" ><i class="fas fa-search"></i></div>
                   </form>
        </div>
        </div>

      </div>
    </div>
  </div>
</footer>



</div>

<script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  $('.owl-carousel').owlCarousel({ 
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        690:{
            items:1
        },
        1020:{
            items:1
        },
        1400:{
            items:1
        },
        1700:{
            items:1
        }
    }
})

</script>


<?php wp_footer() ?>

<script>
   $(window).on('load', function () {
   wow = new WOW({
     boxClass: 'wow',
     animateClass: 'animated',
     offset: 5,
     mobile: false,
     live: true
   })
   wow.init();
   });
</script>

 

  
</body>
</html>
