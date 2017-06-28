

      <div class="col-md-12 well" style="margin-top: 2%;">
            <form role="form" class="form-horizontal" action="mkonnect.php" method="POST" name="contactform" data-toggle="validator">
            <fieldset>
    
                <legend><center> <span class="glyphicon glyphicon-user"></span>Engineering <span class="glyphicon glyphicon-user"></span></center> </legend>

                  <?php include('mkonnect/form.php'); ?>
                
                <div class="form-group">
                  <div class="col-md-12">
                    
                     <select class="form-control" name="txt_jobs"  required>
                    
                              <option>Auditor</option>
                              <option>Budget Analyst</option>
                              <option>Accounting Clerk</option>
                              <option>Accounting Assistant</option>
                              <option>Cost Accountant Credit</option>
                              <option>Financial Analyst</option>
                              <option>Credit Analyst</option>
                              <option>Contracts and Financial Compliance Manager</option> 

                            </select>

                  </div><!--col-md-12-->

                </div><!--form-group-->
              
                 <div class="form-group">
                    <div class="col-md-12">
                      
                         <input class="btn btn-lg btn-success btn-block" type="submit" value="Register" name="engineering" style="font-size:1.25em;" >

                    </div><!--col-md--12-->
                </div><!--form-group-->

            </fieldset>
            </form>
        </div><!--col-md--12-->