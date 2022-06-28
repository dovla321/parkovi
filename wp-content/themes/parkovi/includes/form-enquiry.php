<div id="success_message" class="alert alert-success" style="display: none;"></div>



<form id="enquiry">

	<h2>Pošaljite nam poruku </h2>

   <input type="hidden" name="registration" value="<?php the_field('registration');?>">

	<div class="form-group row">
		
       <div class="col-lg-6 mb-2">
       	
          <input type="text" name="Ime" placeholder="Vaše Ime" class="form-control" required>

       </div>

       <div class="col-lg-6 mb-2">
       	
          <input type="text" name="Prezime" placeholder="Vaše Prezime" class="form-control" required>

       </div>



	</div>


	<div class="form-group row">
		
       <div class="col-lg-6 mb-2">
       	
          <input type="email" name="Email" placeholder="Email" class="form-control" required>

       </div>

       <div class="col-lg-6 mb-2">
       	
          <input type="tel" name="Tel" placeholder="Telefon" class="form-control" required>

       </div>


       
      
       <div class="col-lg-6 mb-2">
         
          <input type="Address" name="Adresa" placeholder=" Adresa" class="form-control" required>

       </div>

       <div class="col-lg-6 mb-2">
         
          <input type="Country" name="Država" placeholder="Država" class="form-control" required>

       



	</div>

	<div class="form-group mb-2 w-100 px-3">
		
		<textarea name="Poruka" class="form-control w-100"placeholder="Vaša Poruka" required></textarea>
	</div>

	<div class="form-group w-100 px-3">
		
		<button type="submit" class="btn btn-success btn-lg w-100">Pošalji</button>
	</div>
	


</form>


<script>
(function($){



	$('#enquiry').submit(function(event){

      event.preventDefault();

      var endpoint = '<?php echo admin_url('admin-ajax.php');?>';

      var form = $('#enquiry').serialize();

      

      var formdata = new FormData;

      formdata.append('action','enquiry');
      formdata.append('nonce', '<?php echo wp_create_nonce('ajax-nonce');?>');
      formdata.append('enquiry',form);

      $.ajax(endpoint,{
         
         type:'POST',
         data:formdata,
         processData:false,
         contentType:false,

         success:function(res){
             
             $('#enquiry').fadeOut(200);

             $('#success_message').text('Hvala vam na vašoj poruci').show();

             $('#enquiry').trigger('reset');

             $('#enquiry').fadeIn(500);



         },

         error:function(err){

            alert(err.responseJSON.data);


         }



      })

	})

	})(jQuery)

</script>