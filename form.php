<div class="row">
    <div id="openCloseIdentifier"></div>
    <div id="slider" class="col-md-2">
      <div class="leftpan" id="my-affix">
        <div id="openCloseWrap" style="background: none repeat scroll 0% 0% transparent;">
          <div id="topMenuImage" class="topMenuAction">
            <div id="close_btn"></div>
          </div>
        </div>
        <div class="f-box">
          <h2>SETUP</h2>
          <ul>
            <li><a href="#">Personal Settings</a></li>
            <li><a href="#">User &amp; Permissions</a></li>
            <li><a href="#">Organization Settings</a></li>
            <li><a href="#">Customization</a></li>
            <li><a href="#">Automation</a></li>
            <li><a href="#">Templates</a></li>
            <li><a href="#">Website Integration</a></li>
            <li><a href="#">Apps &amp; Add-ons</a></li>
            <li><a href="#">Developer Space</a></li>
            <li><a href="#">Data Administration</a></li>
            <li><a href="#">Subscription Manager</a></li>
          </ul>
        </div>
        <div class="m-box">
          <h2>Related Report</h2>
          <ul>
            <li><a href="#">Invoive Aging</a></li>
            <li><a href="#">Invoice Details</a></li>
            <li><a href="#">Credit Note Details</a></li>
            <li><a href="#">Tax Report</a></li>
            <li><a href="#">Customer Balances</a></li>
            <li><a href="#">Sales By Customer</a></li>
            <li><a href="#">Sales By Item</a></li>
          </ul>
        </div>
        <div class="h-box">
          <h2>Help Information ??</h2>
          <ul>
            <li>What are organizations?</li>
            <li>If I upgrade one my organizations, is other organization automatically upgarded?</li>
            <li>Can I set up different languages, time zones and currencies for both myorganizations?</li>
            <li><a href="#">Vist Help Center</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-10 right-body">
      <div class="dash-big-b-inner">
        <div class="box-content">
          <form class="form-horizontal" role="form" id="attributeForm2" action="update.php" 
                data-bv-message="This value is not valid"
                data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                data-bv-feedbackicons-validating="glyphicon glyphicon-refresh"
            >
            <h2>New Ticket</h2>
            
            <div class="row">
              <div class="col-md-6 form-group">
                <label class="col-sm-3 control-label" for="z_subject">Subject</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" 
                       placeholder="Subject" name="z_subject" id="z_subject" 
                       data-bv-notempty="true"
                       data-bv-notempty-message="The subject name is required and cannot be empty" 
                                                                />
                </div>
              </div>
              <div class="col-md-6 form-group">
                <label class="col-sm-3 control-label" for="z_description">Description</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="z_description" 
                        placeholder="Description"
                        data-bv-notempty="true"
                        data-bv-notempty-message="The description is required and cannot be empty" />
                </div>
              </div>
              <div class="col-md-6 form-group">
                <label class="col-sm-3 control-label" for="z_priority">Priority</label>
                <div class="col-sm-9">
                   <select class="form-control" id="e1" style="width:100%;" name="z_priority" data-bv-notempty="true"
                       data-bv-notempty-message="The Priority is required and cannot be empty">
                       
                       <option>Low</option>
                        <option>Normal</option>
                         <option>High</option>
                       </select>
                </div>
              </div>
              <div class="col-md-6 form-group">
                <label class="col-sm-3 control-label" for="z_type">Type</label>
                <div class="col-sm-9">
                   <select class="form-control" id="e1" style="width:100%;" name="z_type" data-bv-notempty="true"
                       data-bv-notempty-message="The type is required and cannot be empty">
                       
                       <option>Question</option>
                        <option>Problem</option>
                         <option>Task</option>
                       </select>
                </div>
              </div>
             
           
             
              <div class="col-md-12 sub-box text-right"> <span>
                <button class="btn btn-default btn-sm" type="reset" name="reset">Cancel</button>
                </span> <span>
                <button class="btn btn-primary btn-sm" type="submit" name="add_token">Save</button>
                </span> </div>
            </div>
            
          </form>
        </div>
      </div>
    </div>
  </div>
