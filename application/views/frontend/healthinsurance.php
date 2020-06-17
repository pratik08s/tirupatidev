<?php
if(isset($_GET["id"]))
{
   $refer_id=$_GET["id"];
   setcookie('referid',$_GET["id"],time() + (86400 * 30), "/");
}
else if(isset($_COOKIE['referid'])){
    $refer_id=$_COOKIE['referid'];
}
else
{
   $refer_id="No Refer Id Present";
}
?>
<h2 class="main_heading">Now Buying Health Insurance is Much Simpleir</h2>
<div class="container health_main">
  <div class="">
  <div class="box_sh ">
    <div class="row">
      <div class="col-lg-4 col-xs-12 " style="padding:0px;">
      <img src="<?php echo base_url();?>assest/img/health-insurance-top-up.jpg" >
        <div class="to">
        <div class="row">
                                      <div class="col-md-12 col-12">
                                        <div class=" small">
                                          <img src="<?php echo base_url();?>assest/img/save-money.png">
                                          <div style="margin-top : 7px">
                                            <h6>Save Upto 80%*</h6>
                                            <p>Lowest Premiums</p>
                                        </div>
                                        </div>
                                      </div>
                                      <div class="col-md-12 col-12" >
                                        <div class=" small">
                                        <img src="<?php echo base_url();?>assest/img/life-insurance.png" >
                                        <div style="margin-top : 7px">
                                        <h6>20+ Insurers</h6>
                                        <p>To Choose From</p>
                                        </div>
                                      </div>
                                      </div>
                                      <div class="col-md-12 col-12" >
                                        <div class=" small">
                                        <img src="<?php echo base_url();?>assest/img/family (1).svg">
                                        <div style="margin-top : 7px">
                                        <h6>10 Thousand+</h6>
                                        <p>Famlies Insured</p>
                                        </div>
                                     </div>
                                      </div>
                                      
                                    </div>
        </div>
      </div>  
      <div class="col-lg-8 col-xs-12"style="padding:0px;"  >
      <?php echo form_open(base_url( 'frontend/healthinsurance/healthData'), array('id'=>'healthform','method'=>'POST'));?>
      <input  type="hidden" name="referid" value="<?php echo $refer_id; ?>"/>
        <div class="card">
          <div class="card-header">
            <h3 >Personal Details</h3>
            <hr class="style1 ">
          </div>
          <div class="card-body">
            <div class="form-group">
              <div class="row">

                <div class="col-md-6">
                  <div class="date">
                    <label class="adults" for="usr">Adults</label>
                    <input type="number" min="0"  oninput="getNo()" id="usrVal" name="anum" placeholder="Adult(s)-21 yeasrs and above">
                                                                    
                  </div>
                  <div id="firstperson" style="display:none" class="form-group date"> 
                    <label class="adults" for="usr">Adults 1 DOB</label>
                    <input type="text"  id="usr" name="fdob" placeholder="Enter Adult 1 DOB"><p>DD/MM/YYYY</p>
                  </div>
                  <div id="secondperson" style="display:none" class="form-group date">
                    <label class="adults" for="usr">Adults 2 DOB</label>
                    <input type="text"  id="usr" name="sdob" placeholder="Enter Adult 1 DOB"><p>DD/MM/YYYY</p>
                  </div>
                </div>
                 
                 
                <div class="col-md-6">
                
                  <div class="date">
                    <label class="adults" for="usr">Kids</label>
                    <input type="number" oninput="getkid()" min="1" max="3" id="usrkid" name="knum" placeholder="Kids(3months - 20 years)">
                  </div>
                  
                </div>  
              </div>
              
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group date">
                    <label class="adults" for="usr">Mobile number</label>
                    <input type="text"  id="" name="mob" placeholder="Enter Mobile number">
                  </div>
                </div> 
                <div class="col-md-6">
                  <div class="form-group date">
                    <label class="adults" for="usr">Email</label>
                    <input type="email"  id="usr" name="mail" placeholder="Enter email">
                  </div>
                </div> 

              </div>



              
              <div class="chck">
                <input type="checkbox" value="none" id="checkbox_1" name="contact1"/>
                <label for="checkbox_1" class="checkbox"><span class="chk">I agree to the Term and Conditon</span></label>
                <input type="checkbox" value="none" id="checkbox_2" name="contact2"/>
                <label for="checkbox_2" class="checkbox"><span class="chk">I want t get my Qoutes and policy details on <i class="fa fa-whatsapp" ></i><span> whatsapp</label>
                </br>
                <div class="text-center ">
                  <button>Get Qoute</button> 
                </div> 
                    <?php echo form_close(); ?>

              </div>                  
            </div>  
          </div>  
        </div>
      </div>  
    </div>
    </div>
  </div>  
</div>


        <section class="imp">
            <div class="container">
                <h2>Importance of Health Insurance</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
        
            </div>    

        </section>

        <section class="why_Health">
          <div class="container">
            <h2>Why Health Insurance from Tirupati Insurance ?</h2>
              <div class="row">
                <div class="col-md-6 col-12">
                  <div class="lft">
                    <div class="point">
                      <img src="<?php echo base_url();?>assest/img/discount.svg">
                    
                      <h4>80% discounts</h4>
                      <hr class="style1">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>  
                
                    </div>
    
                    <div class="point">
                      <img src="<?php echo base_url();?>assest/img/faster.svg">
                      <h4>UNBIASED EXPERT ADVISE</h4>
                      <hr class="style1">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>  
                
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-12 ">
                  <div class="rgt ">
                    <div class="point">
                      <img src="<?php echo base_url();?>assest/img/express.svg" >
                      <h4>EXPRESS CLAIMS SERVICES</h4>
                      <hr class="style1">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>  
                
                    </div>
                    <div class="point">
                      <img src="<?php echo base_url();?>assest/img/support.svg">
                      <h4>24*7 CUSTOMER SUPPORT</h4>
                      <hr class="style1">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>  
                
                    </div>
                  </div>
                </div>
                
              </div>
           
          </div>          
        </section>



          <div class="h_box">
          <section class="accordion-section clearfix mt-3 faq" aria-label="Question Accordions">
            <div class="container">
            
                <h2>Frequently Asked  </h2>
                <p class="co">Common Questions</p>
                <div class="container qes">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
                      <h3 class="panel-title">
                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0">
                          What sort of businesses do your work with?
                        </a>
                      </h3>
                    </div>
                    <div class="container">
                      <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
                        <div class="panel-body px-3 mb-4">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
        
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading1">
                      <h3 class="panel-title">
                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                          What services does Tirupati Insurance Provide?
                        </a>
                      </h3>
                    </div>
                    <div class="container">
                    <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                      <div class="panel-body px-3 mb-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                      </div>
                    </div>
                    </div>
                  </div>
                  
                  <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading2">
                      <h3 class="panel-title">
                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                          What locations do you service and what are your hours of operation?
                        </a>
                      </h3>
                    </div>
                    <div class="container">
                    <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                      <div class="panel-body px-3 mb-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                      </div>
                    </div>
                    </div>
                  </div>
                  
                  <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading3">
                      <h3 class="panel-title">
                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                          What competitive advantage does Tirupati Insurance offer it's clients ?
                        </a>
                      </h3>
                    </div>
                    <div class="container">
                    <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                      <div class="panel-body px-3 mb-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <!-- Modal Header -->
                  <!-- Modal body -->
                  <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <span id="validation" class="form_errors"></span>
                  </div>
                </div>
              </div>
            </div>

            <div class="modal" id="myModal1">
              <div class="modal-dialog">
                <div class="modal-content">
                <h6 class='text-success text-center'>OOPS!! You can select upto 3 adults</h6>
                  <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <span id="validation" class="form_errors"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal" id="myModal2">
              <div class="modal-dialog">
                <div class="modal-content">
                <h6 class='text-success text-center'>OOPS!! Please select adult first</h6>
                  <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <span id="validation" class="form_errors"></span>
                  </div>
                </div>
              </div>
            </div>
</section>
 </div>
 <script>

    $("#healthform").submit(function(event){
	event.preventDefault();
	var post_url = $(this).attr("action"); 
	var request_method = $(this).attr("method"); 
	var form_data = $(this).serialize(); 
	
	$.ajax({
		url : post_url,
		type: request_method,
		data : form_data,
	}).done(function(response){ //
    $('#validation').html(response);
        $('#myModal').modal('show').fadeIn('slow');
	});
});
</script>

          <script>
          
          function getNo(){
          var i =  document.getElementById('usrVal').value;
            if(i==1){
              document.getElementById('firstperson').style.display = 'block';
              document.getElementById('secondperson').style.display = 'none';
              document.getElementById('usrkid').max = 2;
            }
            else if(i==2){
              document.getElementById('firstperson').style.display = 'block';
              document.getElementById('secondperson').style.display = 'block';
              document.getElementById('usrkid').max = 3;
            }
            else if(i>2){
              $('#myModal1').modal('show');
              document.getElementById('usrVal').value = 2;
            }
          
          }
          function getkid(){
            var i =  document.getElementById('usrVal').value;
            var j= document.getElementById('usrkid').value;
            if(i<1){
              $('#myModal2').modal('show');
              document.getElementById('usrkid').value = '';
            }
            if(j>3)
            {
              $('#myModal1').modal('show');
              document.getElementById('usrkid').value = '';
            }
          }
          </script>
                     </div> 