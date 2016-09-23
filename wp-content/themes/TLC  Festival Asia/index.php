<?php get_header();?>

    <div class="container">

      <div class="row">

        <div class="col-md-7">

          <div class="logo-wrap">

            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.jpg">

          </div>



          <!-- Main component for a primary marketing message or call to action -->

          <div class="form-change">

            <h1>This is the Headline</h1>

            <h4>Lorem Ipsum is dummy text of the printing and typesetting </h4>



            <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>

              

                <!-- first step -->
                <div class="step step-1">

                    <div class="col-lg-12 col-md-12 col-xs-12">

                        <!-- FORMS STARTS -->
                        <form id="registration-form" action="/" method="get" class="form-horizontal">

                            <div class="form-container">

                            <h4>Registration</h4>
                            <br/>

                              <div class="form-group">

                                  <label for="lastName" class="col-sm-3 control-label">Last Name </label>

                                  <div class="col-sm-9">

                                      <input type="text" name="lastName" id="lastName" placeholder="" class="form-control" autofocus required="required">

                                  </div>

                              </div>

                              <div class="form-group">

                                  <label for="firstName" class="col-sm-3 control-label">First Name </label>

                                  <div class="col-sm-9">

                                      <input type="text" name="firstName" id="firstName" placeholder="" class="form-control" autofocus required="required">

                                  </div>

                              </div>

                              <div class="form-group">

                                  <label for="gender" class="col-sm-3 control-label">Gender </label>

                                  <div class="col-sm-9">

                                      <select name="gender" id="gender" class="form-control" required="required">

                                          <option value="1">Male</option>

                                          <option value="2">Female</option>

                                      </select>

                                  </div>

                              </div> <!-- /.form-group -->

                            

                              <div class="form-group">

                                  <label for="email" class="col-sm-3 control-label">Email </label>

                                  <div class="col-sm-9">

                                      <input type="email" name="email" id="email" placeholder="" class="form-control" required="required">

                                  </div>

                              </div>

                              <div class="form-group">

                                  <label for="mobile" class="col-sm-3 control-label">Mobile </label>

                                  <div class="col-sm-9">

                                      <input type="mobile" name="mobile" id="mobile" placeholder="" class="form-control" required="required">

                                  </div>

                              </div>

                              <div class="form-group">
                                  <div for="terms" class="col-sm-9 col-sm-offset-3">
                                      <div class="checkbox">
                                          <label>
                                              <input type="checkbox" name="terms" id="terms" required="required" >I have read and understood the <a href="#">Terms and Condition</a>
                                          </label>
                                      </div>
                                  </div>
                              </div> <!-- /.form-group -->        

                                                    
                            </div> <!-- .col -->
                        </form>

                    </div>
                </div>
                <!-- / first step -->



                <!-- second step -->
                <div class="step step-2">
                    
                    <div class="col-lg-12 col-md-12 col-xs-12">

                        <!-- FORMS STARTS -->
                        <form id="workshop-form" class="form-horizontal" role="form">

                            <div class="form-container">

                              <h4>Workshop</h4>
                              <br/>

                              <div class="form-group">

                                  <label for="workshop" class="col-sm-3 control-label">Workshop: </label>

                                  <div class="col-sm-9">

                                      <select name="workshop" id="workshop" class="form-control">

                                          <option value="0">-- Select Workshop --</option>

                                          <option value="1">Option 1</option>

                                          <option value="2">Option 2</option>

                                      </select>

                                  </div>

                              </div>

                              <div class="form-group">

                                  <label for="Schedule" class="col-sm-3 control-label">Schedule: </label>

                                  <div class="col-sm-9">

                                      <select name="Schedule" id="Schedule" class="form-control">

                                          <option value="0">-- Select Schedule --</option>

                                          <option value="1">Option 1</option>

                                          <option value="2">Option 2</option>

                                      </select>

                                  </div>

                              </div> <!-- /.form-group -->

                            
                            </div> <!-- .col -->

                        </form>
                    </div>

                </div>
                <!-- / Second step -->


                <!-- third step -->
                <div class="step step-3">
                    
                    <div class="col-lg-12 col-md-12 col-xs-12">

                        <div class="form-container">

                          <h4>
                          Event Registration Summary</h4>
                          <br/>

                          <div class="form-group">
                          <p id="summary">
                             
                          </p>
                          </div>

                          <div class="form-group">

                             

                          </div> <!-- /.form-group -->

                        
                        </div> <!-- .col -->

                    </div>

                </div>
                <!-- / Third step -->

                <div class="wizard-buttons">
                    <button type="button" id="btn-prev" class="btn btn-lg btn-primary" href="#" role="button">&laquo; Prev </button>
                    <button type="button" id="btn-next" class="btn btn-lg btn-success" href="#" role="button">Next &raquo;</button>
                    <button type="button" id="btn-submit" class="btn btn-lg btn-default" href="#" role="button">Submit </button>
                </div>



                <script type="text/javascript">
                    
                    
                    
                </script>

            </div>

        </div><!-- col-7 -->

        <div class="col-md-5 nopad center-li">
          <ul class="scheme">
            <li class="color-scheme red"></li>
            <li class="color-scheme blue"></li>
            <li class="color-scheme orange"></li>
            <li class="color-scheme white"></li>
            <li class="color-scheme black"></li>
          </ul>
        </div>

        <div class="col-md-5" style="margin-top: 60px;">
            <?php masterslider(2); ?>
        </div>

    </div><!-- row -->

    </div> <!-- /container -->



    <div class="container-fluid wizard-tabs">

      <div class="container">





          <div class="wizard ">

            <div class="wizard-inner">

                <div class="connecting-line"></div>

                <ul class="nav nav-tabs" role="tablist">



                    <li role="presentation" class="active">

                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">

                            <span class="round-tab">1</span>

                            <label>Registration</label>



                        </a>

                    </li>



                    <li role="presentation">

                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">

                            <span class="round-tab">2</span>

                            <label>Workshop</label>



                        </a>

                    </li>



                    <li role="presentation">

                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">

                            <span class="round-tab">3</span>

                            <label>Checkout</label>



                        </a>

                    </li>

                </ul>

            </div>

          </div>





          

      </div>

    </div>


    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-xs-12 text-center">
          <div class="illustration">
            <h5>Illustration Style:</h5>

            <div class="col-sm-6 col-xs-6 nopad img-illus">
              <img src="//image.freepik.com/free-vector/web-user-with-a-big-smile_23-2147542741.jpg">
            </div>
            <div class="col-sm-6 col-xs-6 nopad img-illus">
              <img src="//image.freepik.com/free-vector/web-user-with-a-big-smile_23-2147542741.jpg">
            </div>
            <div class="col-sm-6 col-xs-6 nopad img-illus">
              <img src="//image.freepik.com/free-vector/web-user-with-a-big-smile_23-2147542741.jpg">
            </div>
            <div class="col-sm-6 col-xs-6 nopad img-illus">
              <img src="//image.freepik.com/free-vector/web-user-with-a-big-smile_23-2147542741.jpg">
            </div>


          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12">

          <div class="col-lg-6 col-md-6 col-xs-12">
            <div class="portfolio">
              <div class=" img-circle img-wrap">
                <img class="semi-round" src="//image.freepik.com/free-vector/web-user-with-a-big-smile_23-2147542741.jpg">
              </div>
              <div class="basic-info text-center">
                <h3>Janet Hsieh</h3>
                <p>Travel Host</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 col-xs-12">
            <div class="portfolio">
              <div class="img-wrap">
                <img class=" img-circle semi-round" src="//image.freepik.com/free-vector/web-user-with-a-big-smile_23-2147542741.jpg">
              </div>
              <div class="basic-info text-center">
                <h3>Buddy Valastro</h3>
                <p>Carlo's Bakery</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>





<?php get_footer();?>

