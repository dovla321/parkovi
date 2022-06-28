<?php get_header();

$slika=get_field('slika');
$sadrzaj=get_field('glavni_text');

?>



<section class="hero-pages novosti-hero">
    <div class="container-fluide">
        <div class="image-hero " style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/pexels-daffa-rayhan-zein-1056119.jpg);">
            <div class="text-hero">
                <h1>Novosti</h1>
            </div>
        </div>
    </div>
</section>



<section class="page-wrap single-wrap mb-5">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-9">


        <h1><?php the_title();?></h1>

         <p class="meta">
                Objavljeno 
                <?php the_time('m, j,Y ');?> 
                  
                 
                 </p>



                 
       <div class="image-wrap-single">
       <?php if($slika):?>
                    <img src="<?php echo $slika['sizes']['large']; ?>">
       
                  <?php endif;?>
           </div>
        
        

       

        <p><?php echo $sadrzaj;?></p>

        <div id="comments-section">



            <?php 

           $fields =  array(

        'author' =>
            
            '<input placeholder="Ime" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" ' . $aria_req . ' /></p>',

        'email' =>
            
            '<input placeholder="Email" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" ' . $aria_req . ' /></p>',

        
    );

       $args =array(
          
          'title_reply'=>'Komentiraj',
          'fields'=>$fields,
          'comment_field'=>'<textarea placeholder="Vaš Komentar" id="comment" name="comment" cols="45" rows="8" ' . $aria_req . '></textarea>'
          

       );


            comment_form($args); 
            
            $comments_number= get_comments_number();
            if($comments_number !=0){

              ?>

              <div class="comments">
                <h3>Svi komentari</h3>
                <ol class="all-comments">
                    <?php 

                    $comments = get_comments(array(
                        
                        'post_id'=> $post->ID,
                        'status'=>'approve'


                    ));

                    wp_list_comments(array(
                      
                       'per_page'=>15

                    ), $comments);


                    ?>
                </ol>
                  
              </div>


              <?php

            }



            ?>
        </div>


        <?php wp_link_pages();?>
             </div>

             <div class="col-lg-3">
                <?php if(is_active_sidebar('blog-sidebar')): ?>
                  
                  <?php dynamic_sidebar( 'blog-sidebar' );?>
                
            <?php endif;?>
            </div>
        </div>
    </div>



</section>



<?php get_footer();?>