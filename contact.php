<?php include 'header.php'; ?>
    <!-- banner -->
    <div class="inner_page-banner one-img">
    </div>
    <!--//banner -->
    <!-- short -->
    <div class="using-border py-3">
      <div class="inner_breadcrumb  ml-4">
        <ul class="short_ls">
          <li>
            <a href="index.php">Home</a>
            <span>/ /</span>
          </li>
          <li>Contact</li>
        </ul>
      </div>
    </div>
    <!-- //short-->
    <!--contact -->
    <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
      <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3"><span>C</span>ontact <span>U</span>s</h3>
        <div class=" agile-info-para">
          <div id="contact-messages"></div>
          <!--contact-map -->
          <form action="submit-contact.php" method="post" id="submitContactForm">
            <div class=" agile-wls-contact-mid">
              <div class="form-group contact-forms">
                <input type="text" class="form-control" name="name" id="name" placeholder="Name" required="">
              </div>
              <div class="form-group contact-forms">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="">
              </div>
              <div class="form-group contact-forms">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" required=""> 
              </div>
              <div class="form-group contact-forms">
                <textarea class="form-control" rows="3" name="message" id="message" placeholder="Message" required=""></textarea>
              </div>
              <button type="submit" class="btn text-center sent-butnn">Submit</button>
            </div>
          </form>
        </div>
        <!--//contact-map -->
        <!--contact-form-->
        <div class="row mt-lg-5 mt-md-4 mt-3">
          <div class="col-lg-6 col-md-6 address_mail_footer_grids ">
            
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31910.53332246464!2d36.802698931624384!3d-1.2838942259161983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d671900001%3A0x90f5e610e51dce23!2sKimathi%20House!5e0!3m2!1sen!2ske!4v1763868309147!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="col-lg-6 col-md-6 contact-form ">
            <div class=" contact-list-grid">
              <ul>
                <li class="mb-2">
                  <h6>Address</h6>
                </li>
                <li>
                  <p>Nairobi,<br>Kenya.</p>
                </li>
              </ul>
              <ul>
                <li class="my-2">
                  <h6>Phone</h6>
                </li>
                <li>
                  <p>+ 254 707 641 174</p>
                </li>
                <li class="my-2">
                  <h6>Email</h6>
                </li>
                <li>
                  <p><a href="mailto:software@javytech.com">software@javytech.com</a></p>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!--//contact-map -->
      </div>
    </section>
    <!--//contact  -->
    <?php include 'footer.php'; ?>

    <script type="text/javascript">
  
  $(document).ready(function(){
  $("#contact-messages").html("");

$("#submitContactForm").unbind('submit').bind('submit',function(){


      /*
      $(".text-danger").remove();
    //remove the form error
    $(".form-group").removeClass('has-error').removeClass('has-success');
    */


      var name=$("#name").val();
      var email=$("#email").val();
      var phone=$("#phone").val();
      var message=$('#message').val();

      if(name&&email&&phone&&email&&message){
        
        var form =$(this);
        $.ajax({
          url: form.attr('action'),
          type: form.attr('method'),
          data: form.serialize(),
          dataType: 'json',
          success:function(response){
          
            if(response.success == true){

            
            console.log(response);
              //reload the manage member datatable
              //manageCategoriesTable.ajax.reload(null,false);

              //reset the form text
              $("#submitContactForm")[0].reset();
            

              $("#contact-messages").html('<div class="alert  alert-dismissible" role="alert">'+
  '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> '+response.messages+
'</div>');

              //remove the messages after 10 seconds
              

            }//if */
          } //success
        });//ajax
        
      
      }//if



      return false;
    });//submit categories form function

});
</script>

