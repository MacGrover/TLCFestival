<?php get_header(); ?>
    
  
<!-- Slider Start -->
<?php masterslider(1); ?>
<!-- Slider End -->


<section class="main-content">    
  <div class="container">
    <div class="top-line"></div>
    <div class="row">


    <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <!-- <i class="glyphicon glyphicon-folder-open"></i> -->
                            </span><label class="tab-text">Registration</label>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <!-- <i class="glyphicon glyphicon-pencil"></i> -->
                            </span><label class="tab-text">Workshop</label>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <!-- <i class="glyphicon glyphicon-ok"></i> -->
                            </span><label class="tab-text">Checkout</label>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

      <form class="form-horizontal" role="form">
          <div class="form-container">

                <div class="col-lg-8 col-md-8 col-xs-12">
                  <div class="form-group">
                      <label for="lastName" class="col-sm-2 control-label">Last Name: <span class="required">*</span></label>
                      <div class="col-sm-10">
                          <input type="text" id="lastName" placeholder="" class="form-control" autofocus>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="firstName" class="col-sm-3 control-label">First Name: <span class="required">*</span></label>
                      <div class="col-sm-9">
                          <input type="text" id="firstName" placeholder="" class="form-control" autofocus>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="gender" class="col-sm-3 control-label">Gender: </label>
                      <div class="col-sm-9">
                          <select id="gender" class="form-control">
                              <option>-- Select Gender --</option>
                              <option>Male</option>
                              <option>Female</option>
                          </select>
                      </div>
                  </div> <!-- /.form-group -->
                  <div class="form-group">
                      <label for="birthDate" class="col-sm-3 control-label">Date of Birth: <span class="required">*</span></label>
                      <div class="col-sm-9">
                          <input type="date" id="birthDate" class="form-control">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="email" class="col-sm-3 control-label">Email: <span class="required">*</span></label>
                      <div class="col-sm-9">
                          <input type="email" id="email" placeholder="" class="form-control">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="mobile" class="col-sm-3 control-label">Mobile No.: <span class="required">*</span></label>
                      <div class="col-sm-9">
                          <input type="mobile" id="password" placeholder="" class="form-control">
                      </div>
                  </div>              
                  
                </div> <!-- .col -->


                <div class="col-lg-4 col-md-4 col-xs-12 channel-select">
                  <div class="form-group">
                      <label class="control-label col-sm-12"><h3>Which of the following do you watch on TV?</h3></label>
                      <div class="col-sm-12">
                          <div class="checkbox">
                              <label>
                                  <input type="checkbox" id="calorieCheckbox" value="Low calorie">TLC Asia
                              </label>
                          </div>

                          <div class="checkbox">
                              <label>
                                  <input type="checkbox" id="saltCheckbox" value="Low salt">Discovery Channel
                              </label>
                          </div>
                          
                          <div class="checkbox">
                              <label>
                                  <input type="checkbox" id="calorieCheckbox" value="Low calorie">Animal Planet
                              </label>
                          </div>

                          <div class="checkbox">
                              <label>
                                  <input type="checkbox" id="calorieCheckbox" value="Low calorie">Discovery HD World
                              </label>
                          </div>

                          <div class="checkbox">
                              <label>
                                  <input type="checkbox" id="calorieCheckbox" value="Low calorie">Home and Health
                              </label>
                          </div>

                          <div class="checkbox">
                              <label>
                                  <input type="checkbox" id="calorieCheckbox" value="Low calorie">Discovery and Science
                              </label>
                          </div>

                          <div class="checkbox">
                              <label>
                                  <input type="checkbox" id="calorieCheckbox" value="Low calorie">Discovery Turbo
                              </label>
                          </div>

                      </div>
                  </div> <!-- /.form-group -->
                </div>

                <div class="col-md-12 col-xs-12 terms">
                  
                  <div class="form-group">
                      <div class="col-sm-9 col-sm-offset-3">
                          <div class="checkbox">
                              <label>
                                  <input type="checkbox">I have read and understood the <a href="#">Terms and Condition</a>
                              </label>
                          </div>
                      </div>
                  </div> <!-- /.form-group -->
                  <div class="form-group">
                      <div class="col-sm-3 col-sm-offset-9">
                          <button type="submit" class="btn btn-next btn-block">Next</button>
                      </div>
                  </div>

                </div> 
          </div> 
      </form> <!-- /form -->

    </div><!-- .row -->
  </div> <!-- .container -->
</section>

<?php get_footer();?>