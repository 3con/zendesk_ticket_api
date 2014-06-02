<?php
//error_reporting(0);
include("autoloader.php");

use Zendesk\API\Client as ZendeskAPI;

$subdomain = "ajayfunda";
$username = "ajaykumar.gupta@netfunda.com";
$token = "Gjc6FktNRghnAyjD5onxbNb98t6mkPDsKwd0Xu8h"; 
$client = new ZendeskAPI($subdomain, $username);
$client->setAuth('token', $token); 

// Get all tickets
$tickets = $client->tickets()->findAll();

?>
<!DOCTYPE html>
<html>
<head>
<title>NF Core</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
<link href="css/color_blue.css" rel="stylesheet" media="screen" id="test22">
<link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
<link href="css/style.css" rel="stylesheet" media="screen">
<link href="css/responsive.css" rel="stylesheet" media="screen">
<link href="css/multi-select.css" media="screen" rel="stylesheet" type="text/css">
<link href="css/bootstrap-select.css" rel="stylesheet" media="screen" type="text/css">
<link href="css/select2.css" rel="stylesheet" media="screen" type="text/css">
<link href="css/jasny-bootstrap.css" rel="stylesheet" media="screen" type="text/css">
<link href="css/bootstrap-datetimepicker.css" rel="stylesheet" media="screen" type="text/css">
<link href="css/colorpicker.css" rel="stylesheet" media="screen" type="text/css">
<link href="css/bootstrap-switch.css" rel="stylesheet" media="screen" type="text/css">
<link href="css/wys.css" rel="stylesheet" media="screen" type="text/css">
<link href="css/bootstrapValidator.css" rel="stylesheet" media="screen" type="text/css">

<!--        <link href="css/bootstrap-combobox.css" media="screen" rel="stylesheet" type="text/css">-->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="assets/js/respond.min.js"></script>
        <![endif]-->
</head>

<body>
<div id="wrap">
  <div class="row header">
                
                    <div class="col-xs-6 col-sm-4 col-md-4">                
                        <a href="index.html" class="navbar-brand"><img src="images/brand-logo.png" alt="ResellerClub" title="ResellerClub" /></a>
                    </div>
                
                    <div class="col-xs-6 col-sm-8 col-md-8">
                        <div class="btn-group pull-right xs_marg">
                                             
                          <button class="btn btn-primary btn-sm">
                              <span class="icon-envelope-alt"></span>
                              <span class="counter">42</span>
                          </button>
                          
                          <button class="btn btn-primary btn-sm">
                              <span class="icon-usd"></span>
                              <span class="counter">!</span>
                          </button>
                          
                          <button class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                              <span class="glyphicon glyphicon-user"></span>  
                              <span class="caret"></span>
                          </button>
                          
                          <ul class="dropdown-menu">
                              <li><a href="#"><span class="glyphicon glyphicon-user"></span> My Profile</a></li>
                              <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Change Password</a></li>
                              <li><a href="#"><span class="glyphicon glyphicon-off"></span>  Log Out</a></li>
                          </ul>
                          
                        </div>
                    </div>
                    <div class="col-md-3 pull-right text-right top-space" id="c_change">
                        <strong>Choose color</strong>
                        <a href="#" rel="css/color_red.css" class="color-red"><span class="glyphicon glyphicon-stop"></span></a>
                        <a href="#" rel="css/color_blue.css" class="color-blue"><span class="glyphicon glyphicon-stop"></span></a>
                        <a  href="#" rel="css/color_green.css" class="color-green"><span class="glyphicon glyphicon-stop"></span></a>
                    </div>
                    
                </div>
  <nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
      <div class="row top-navbar">
        <div class="col-xs-4 top-navhandler">
          <button type="button" class="navbar-toggle pull-left" data-toggle="collapse" 
                                data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
      </div>
    </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav">
        <li><a href="index.html"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Form <b class="caret"></b> </a>
          <ul class="dropdown-menu">
            <li><a href="form-two-column.html">Form Two Column</a></li>
            <li><a href="form-one-column.html">Form One Column</a></li>
            <li><a href="form-wizard.html">Form Wizard</a></li>
          </ul>
        </li>
        
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Form Components <b class="caret"></b> </a>
          <ul class="dropdown-menu">
            <li><a href="progressbar.html">Slider and Progressbar</a></li>
            <li><a href="multiselect.html">Multiselect</a></li>
            <li><a href="combobox.html">Combobox</a></li>
            <li><a href="Select_box.html">Select box</a></li>
            <li><a href="Fileupload.html">Fileupload</a></li>
            <li><a href="masked_inputs.html">Masked Inputs</a></li>
            <li><a href="password_generator.html">Password generator</a></li>
            <li><a href="datepicker_timepicker.html">Datepicker and Timepicker</a></li>
            <li><a href="color_picker.html">Color Picker</a></li>
            <li><a href="switch_buttons.html">Switch Buttons</a></li>
            <li><a href="textarea_counter.html">Textarea counter</a></li>
            <li><a href="ui_spinners.html">UI Spinners</a></li>
            <li><a href="wysiwg_editor.html">WYSIWG EDITOR</a></li>
          </ul>
        </li>
        
        <li> <a href="components.html">Components</a> </li>
        <li class="dropdown active"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Tables <b class="caret"></b> </a>
          <ul class="dropdown-menu">
            <li class="active"><a href="json-table.html">Json Table</a></li>
            <li><a href="data-tables.html">Data-Tables</a></li>
          </ul>
        </li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Login <b class="caret"></b> </a>
          <ul class="dropdown-menu">
            <li><a href="login-type-one.html">Login Type One</a></li>
            <li><a href="login-type-two.html">Login Type Two</a></li>
          </ul>
        </li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Support <b class="caret"></b> </a>
          <ul class="dropdown-menu">
            <li><a href="index.php">My Support Requests</a></li>
            <li><a id="create_token">Create a New Request</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
  <div class="row subnav">
    <div class="col-xs-1 col-sm-6">
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Library</a></li>
        <li class="active">Data</li>
      </ol>
    </div>
    <div class="col-xs-12 col-sm-6 min_marg text-right">
      <form role="form">
        <div class="input-group input-group-sm search-box pull-right">
          <div class="input-group-btn">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> <span class="caret"></span></button>
            <ul class="dropdown-menu text-left" id="search_list">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </div>
          <input id="shidden" type="hidden"/>
          <input id="searchbar" class="form-control" type="text" name="_q_" value="" placeholder="Search">
          <div class="input-group-btn">
            <button class="btn btn-primary" type="submit"> <span class="glyphicon glyphicon-search"></span> </button>
          </div>
        </div>
        <div class="btn-group">
          <button type="button" class="btn btn-default btn-sm dropdown-toggle" 
                            data-toggle="dropdown"> <span class="glyphicon glyphicon-plus-sign"></span> <span class="caret"></span> </button>
          <ul class="dropdown-menu text-left">
            <li><a href="#"> Save Filter </a></li>
            <li><a href="#"> Modify filter </a></li>
          </ul>
        </div>
      </form>
    </div>
  </div>
  
  <!-- Begin page content -->
  
  <div class="row" id="container">
    <div id="openCloseIdentifier"></div>
    <div id="slider" class="col-md-2">
      <div class="leftpan" id="my-affix">
        <div id="openCloseWrap" style="background: none repeat scroll 0% 0% transparent;">
          <div id="topMenuImage" class="topMenuAction">
            <div id="close_btn"></div>
          </div>
        </div>
        <div class="btn-box">
          <ul>
            <li>
              <button type="button" class="btn btn-primary btn-sm">New Campaign</button>
            </li>
            <li>
              <button type="button" class="btn btn-primary btn-sm">Import Campaigns</button>
            </li>
            <li>
              <button type="button" class="btn btn-primary btn-sm">Campaigns Tools</button>
            </li>
            <li>
              <button type="button" class="btn btn-primary btn-sm">Import Campaigns</button>
            </li>
            <li>
              <button type="button" class="btn btn-primary btn-sm">New Campaign</button>
            </li>
            <li>
              <button type="button" class="btn btn-primary btn-sm">Import Campaigns</button>
            </li>
            <li>
              <button type="button" class="btn btn-primary btn-sm">Campaigns Tools</button>
            </li>
            <li>
              <button type="button" class="btn btn-primary btn-sm">Import Campaigns</button>
            </li>
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
        <div class="header-text">
          <div class="htext">Create Lead</div>
        </div>
        <div class="box-content">
          <div class="row filtter-box"> <strong>Applied Filters :</strong> <a href="#" data-toggle="modal" data-target="#myModal">(modify filter)</a><br>
            <strong>Project :</strong> Active or Incomplete, <strong>Ownr :</strong> S.S.Rahman, <strong>Status :</strong> Open, <strong>Priority :</strong> All, <strong>Time :</strong> Undefined </div>
          <div class="row">
								
										<div class="col-sm-6 col-md-6">                                        
											<button class="btn btn-sm btn-danger" type="button" id="delete">Delete</button>
                                            												
											<div class="btn-group">
                                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" 
                                                    data-toggle="dropdown">
                                                      <span class="icon-user icon-black"></span>   
                                                      More Action <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li class="edit" id="edit"><a href="#"><i class="icon-pencil"></i> Edit</a></li>
                                                        <li class=" test345 disabled"><a href="#"><i class="icon-trash"></i> Delete</a></li>
                                                        <li><a href="#"><i class="icon-ban-circle"></i> Ban</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#"><i class="i"></i> Make admin</a></li>
                                                    </ul>
															
											</div>												
                                            
										
												
										</div>
										
										<div class="col-sm-6 col-md-6">
																					
											<button type="button" class="btn btn-default btn-sm lt_rt"><span class="glyphicon glyphicon-th"></span></button>	
                                              
											<div class="edit_viewbox btn btn-default lt_rt">
												<select size=1 name="">
													 <option>Classic</option>
												</select>
												<a class="editview" href="#">Edit View</a>
                                                
											</div>											
																										
											<div class="btn-group lt_rt">
                                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" 
                                                    data-toggle="dropdown">
                                                      <span class="glyphicon glyphicon-search"></span>   
                                                      <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a href="#"> Saved Filter </a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#myModal"> Modify filter </a></li>
                                                    </ul>
															
												</div>
													
										</div>
											
								</div>
          <div class="row">
            <div class="data-container-div overthrow">
              <div class="table-responsive">
                <form>
                  <table class="table table-striped table-bordered">
                    <tr class="heading">
                      <th class="text-center"><input type="checkbox" id="selectall" name="case" class="case"></th>
                      <th width="17%"><strong><a href="#">Id</a></strong></th>
                                                        <th width="17%"><strong><a href="#">Subject</a></strong></th>
                                                        <th width="17%"><strong><a href="#">Description</a></strong></th>
                                                        <th width="17%"><strong><a href="#">Created_at</a></strong></th>
                                                        <th width="17%"><strong><a href="#">Updated_at</a></strong></th>
                                                        <th width="17%"><strong><a href="#">Status</a></strong></th>
                    </tr>
                    
                                                        <?php

                                                        foreach ($tickets as $key => $value) {
                                                          $i=0;
                                                          if(is_array($value)){
                                                         foreach ($value as $key1 => $value1) {
    
                                                         echo "<tr>";
                                                        
                                                         echo "<td><input type='checkbox' name='checked' value='".$value1->id."'></td>";
                                                         echo "<td><a onclick='ticket_details(".$value1->id.")' class='anchor_class' 'id='anchor_id".$i."'>".$value1->id."</a></td>";
                                                         echo "<td>".$value1->subject."</td>";
                                                         echo "<td>".$value1->description."</td>";
                                                         echo "<td>".$value1->created_at."</td>";
                                                         echo "<td>".$value1->updated_at."</td>";
                                                         echo "<td>".$value1->status."</td>";
                                                         echo "</tr>";
                                                          ?>
                                       
                                                      <?php
                                                         $i++;
                                                          }
                                                        }
                                                          }

                                                      ?>
                  
                  </table>
                </form>
              </div>
            </div>
            <div class="row pagination-box">
              <div class="col-md-3 col-sm-3">              
                <span class="np-btn">
                    <a href="#">
                   	 <img width="7" height="9" border="0" alt="Pagination Arrow" src="images/pagignation-arrow2.png"> 
                    </a> 
                </span>
                <span class="np-btn"> 
                    <a href="#"> 
                    	<img width="7" height="9" border="0" alt="Pagination Arrow" src="images/pagignation-arrow.png"> 
                    </a> 
                </span>
                <span class="line_h">Page 1 of 2</span>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="goto-page"> <span>Go to Page</span> <span>
                  <select id="paginationControl" size="1" name="goto" class="form-control">
                    <option value="#" selected="selected"> 1 </option>
                    <option value="#"> 2 </option>
                  </select>
                  </span> </div>
              </div>
              <div class="col-md-2 col-sm-2"> <span class="line_h"> 1 - 10 of 13 </span> </div>
              <div class="col-md-4 col-sm-4">
                <div class="r-per-page"> <span>Show</span> <span>
                  <select id="recordControl" size="1" name="" class="form-control">
                    <option value="#"> 1 </option>
                    <option value="#"> 2 </option>
                    <option value="#"> 3 </option>
                    <option value="#"> 4 </option>
                    <option value="#"> 5 </option>
                    <option value="#"> 6 </option>
                    <option value="#"> 7 </option>
                    <option value="#"> 8 </option>
                    <option value="#"> 9 </option>
                    <option value="#" selected="selected"> 10 </option>
                    <option value="#"> 11 </option>
                    <option value="#"> 12 </option>
                    <option value="#"> 13 </option>
                  </select>
                  </span> <span> Records per page</span> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="footer">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-10 text-right">
      <p class="text-muted credit">&copy; 2013 <a href="http://www.netfunda.com" target="_blank">Netfunda Technologies</a>. All rights reserved</p>
    </div>
  </div>
</div>

<!-- Modal -->
 
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Modify Filter</h4>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary btn-sm">Save changes</button>
          </div>
        </div>
      </div>
    </div>

<!-- Placed at the end of the document so the pages load faster -->


<!-- Modal -->
 
  <div class="modal fade" id="table_view" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Product Details</h4>
          </div>
          <div class="modal-body">
          
              <div class="table-responsive">
                <form>
                  <table class="table table-bordered">
                    <tr>
                      <td class="well" width="20%" colspan="2"><h4> Product Title </h4></td>
                    </tr>
                    <tr>
                      <td class="well" width="20%"><strong> Product Description </strong></td>
                      <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</td>                      
                    </tr>
                    <tr>
                     <td class="well" width="20%"><strong> Product Subtitle </strong></td>
                      <td>nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500sLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500sew</td>
                    </tr>
                    <tr>                     
                      <td class="well" width="20%"><strong> Product Type</strong></td>                  
                      <td>Electronis</td>
                    </tr>
                    <tr>
                      <td class="well" width="20%"><strong> Product Status </strong></td>
                      <td>inactive</td>
                    </tr>
                    
                  </table>
                </form>
              </div>
         
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary btn-sm"> Print file <span class="glyphicon glyphicon-print"></span></button>
          </div>
        </div>
      </div>
    </div>

<!-- Placed at the end of the document so the pages load faster --> 

 
<script src="js/jquery-2.0.3.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>    
<script src="js/bootstrap.js"></script>
<script src="js/moment.js"></script>
<script src="js/bootstrap-datetimepicker.js"></script>
<script src="js/jquery.dataTables.js"></script>
<script src="js/DT_bootstrap.js"></script>
<script src="js/jquery.multi-select.js"></script>
<script src="js/bootstrap-select.js"></script>
<script src="js/select2.js"></script>
<script src="js/jasny-bootstrap.js"></script>
<script src="js/pGenerator.jquery.js"></script>
<script src="js/bootstrap-colorpicker.js"></script>
<script src="js/bootstrap-switch.js"></script>
<script src="js/bootstrap-maxlength.js"></script>
<script src="js/bootstrap.touchspin.js"></script>
<script src="js/bootstrap-wysiwyg.js"></script>
<script src="js/jquery.hotkeys.js"></script>
<script src="js/bootstrapValidator.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/bootstrap-tabdrop.js"></script>
<script src="js/cust.js"></script>
    
</body>
<script>
    $("#delete").click(function(){
         var arr = new Array();
         $("input[type='checkbox'][name='checked']").each(function(){
           if(this.checked){
            arr.push($(this).val());
           }
          });
           console.log(arr);
          $.get('update.php?req=ajax&action=delete&z_id='+arr,function(data){
          console.log(data);
        window.location.href="index.php";
      });
     });
</script>   
<script>
    $("#create_token").click(function(e){
      e.preventDefault();
      $.get('form.php',function(data){
       $("#container").html(data);
       console.log(data);
       // window.location.href="index.php";
      });
    });
</script>  
<script>
    $("#edit").click(function(e){
      var arr = new Array();
      var count=0;
      $("input[type='checkbox'][name='checked']").each(function(){
       if(this.checked){
         count++;
         arr.push($(this).val());
         //query_string+="checkbox_name[]"+this.val();
        }
      });
      if(count==1){
        $.get('update.php?action=edit&req=ajax&z_id='+arr,function(data){
          console.log(arr);
          $('#container').html(data);
         });
      }
      else
        e.preventDefault();
      });
</script>        
<script>
function ticket_details(id){
    console.log(id);
   $.get('update.php?req=ajax&action=details&z_id='+id,function(data){
          console.log(data);
         $("#container").html(data);
        });
  }

</script>  
            

</html>