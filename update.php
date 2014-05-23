<?php
include("autoloader.php");

use Zendesk\API\Client as ZendeskAPI;

$id=$_GET['z_id'];
$token_id = explode(",", $id);

$subdomain = "ajayfunda";
$username = "ajaykumar.gupta@netfunda.com";
$token = "Gjc6FktNRghnAyjD5onxbNb98t6mkPDsKwd0Xu8h"; // replace this with your token
//$password = "123456";

$client = new ZendeskAPI($subdomain, $username);
$client->setAuth('token', $token); // set either token or password

if(isset($_GET['add_token'])){
$newTicket = $client->tickets()->create(array(
 'subject' => $_GET['z_subject'], 
 'comment' => array(
     'body' => $_GET['z_description']
 ), 
 'priority' => $_GET['z_priority'],
 'type'=>$_GET['z_type']
));
header('location:index.php');
}
if(isset($_GET['update_token'])){
       
   $client->ticket($id)->update(array(
    'subject'=>$_GET['z_subject'],
    'status'=>'solved'
    // $testTicket = array();
    // $testTicket['id']=$id;
    //     $testTicket['subject'] = 'Updated subject';
    //     $testTicket['priority'] = 'urgent';
      
        
      
    //     $testTicket['description']="oioji9moimi";
    //       $ticket = $client->tickets()->update($testTicket);
        
 ));
   
   header('location:index.php');
}

//Delete a ticket
if($_GET['action']=='delete'){
$client->ticket($token_id)->delete();
}
if($_GET['action']=='edit'){
	$tickets = $client->ticket($id)->find();
	 foreach ($tickets as $key1 => $value1) {
  
    }
    
    
	 
?>
<div class="col-md-10 right-body">
      <div class="dash-big-b-inner">
        <div class="box-content">
          <form class="form-horizontal" role="form" id="attributeForm2" action="update.php" 
                data-bv-message="This value is not valid"
                data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                data-bv-feedbackicons-validating="glyphicon glyphicon-refresh"
            >
            <h2>Update Ticket</h2>
            <input type="hidden" name="z_id" value="<?php echo $value1->id; ?>" />
            <div class="row">
              <div class="col-md-6 form-group">
                <label class="col-sm-3 control-label" for="z_subject">Subject</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" 
                        name="z_subject" id="z_subject" 
                       value="<?php echo $value1->subject; ?>"
                       />
                </div>
              </div>
              <div class="col-md-6 form-group">
                <label class="col-sm-3 control-label" for="z_description">Description</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="z_description" 
                        value="<?php echo $value1->description; ?>" />
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
              <div class="col-md-6 form-group">
                <label class="col-sm-3 control-label" for="z_status">Status</label>
                <div class="col-sm-9">
                   <select class="form-control" id="e1" style="width:100%;" name="z_status" data-bv-notempty="true"
                       data-bv-notempty-message="The status is required and cannot be empty">
                       
                       <option value="Solved">Solved</option>
                        <option value="Open">Open</option>
                         <option value="Pending">Pending</option>
                       </select>
                </div>
              </div>
             
             
           
             
              <div class="col-md-12 sub-box text-right"> <span>
                <button class="btn btn-default btn-sm" type="reset" name="reset">Cancel</button>
                </span> <span>
                <button class="btn btn-primary btn-sm" type="submit" name="update_token">Save</button>
                </span> </div>
            </div>
            
          </form>
        </div>
      </div>
    </div>

<?php

// $client->ticket(array ($id))->update(array (
//   'status' => 'solved'
// ));
}


?>

<?php

if($_GET['action']=='details'){

	$tickets = $client->ticket($id)->find();
	 foreach ($tickets as $key1 => $value1) {
  
    }
    if(isset($_GET['z_comment'])){

          $request = $client->ticket($id)->update(array(
            'comment' => array(
                'body' => $_GET['z_comment']
            )
        ));
  
    }
  //   $comments = $client->request($id)->comments()->findAll();
   
  //   foreach ($comments as $c_key => $c_value) {
  //     if(is_array($c_value)){
  //     foreach ($c_value as $c_key1 => $c_value1) {
  //    echo "<pre>";
  //    print_r($c_value1);
  //   echo "</pre>";
    

  //   }
  // }
  // }
    
	 
?>
<div class="col-md-10 right-body">
      <div class="dash-big-b-inner">
        <div class="box-content">
        	<a href="index.php"> <button class="btn btn-primary btn-sm" type="submit" name="back_to_list">Back</button></a>
          <form class="form-horizontal" role="form" id="ticket_form_details" action="update.php" 
                data-bv-message="This value is not valid"
                data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                data-bv-feedbackicons-validating="glyphicon glyphicon-refresh"
            >
            
            <h2>Ticket Details</h2>
            <input type="hidden" name="z_id" id="z_id" value="<?php echo $value1->id; ?>" />

            <div class="row">
              <div class="col-md-6 form-group">
                <label class="col-sm-3 control-label" for="z_subject">Subject</label>
                <div class="col-sm-9">
                  <label><?php echo $value1->subject; ?></label>
                </div>
              </div>
              <div class="col-md-6 form-group">
                <label class="col-sm-3 control-label" for="z_description">Description</label>
                <div class="col-sm-9">
                  <label><?php echo $value1->description; ?></label>
                </div>
              </div>
              <div class="col-md-6 form-group">
                <label class="col-sm-3 control-label" for="z_priority">Priority</label>
                <div class="col-sm-9">
                   <label><?php echo $value1->priority; ?></label>
                </div>
              </div>
              <div class="col-md-6 form-group">
                <label class="col-sm-3 control-label" for="z_type">Type</label>
                <div class="col-sm-9">
                    <label><?php echo $value1->type; ?></label>
                </div>
              </div>
              <div class="col-md-6 form-group">
                <label class="col-sm-3 control-label" for="z_status">Status</label>
                <div class="col-sm-9">
                    <label><?php echo $value1->status; ?></label>
                </div>
              </div>
              <div class="col-md-6 form-group">
                <label class="col-sm-3 control-label" for="z_status">Requester_id</label>
                <div class="col-sm-9">
                    <label><?php echo $value1->requester_id; ?></label>
                </div>
              </div>
           
             
              
            </div>
             <div class="col-md-12 form-group">
                <h2>Public Reply</h2>
                 <textarea class="form-control" name="z_comment" id="z_comment"></textarea>
                
              </div>
              <h2>All Comments</h2>
<?php
   $comments = $client->request($id)->comments()->findAll();
      foreach ($comments as $c_key => $c_value) {
       if(is_array($c_value)){
          foreach ($c_value as $c_key1 => $c_value1) {
             if (array_key_exists('body', $c_value1)) {
                  echo "<pre>";
                  print_r($c_value1->body);
                  echo "</pre>";
              }

           }
        }
      }
?>          
         
               <div class="col-md-12 sub-box text-right"> <span>
                <button class="btn btn-default btn-sm" type="reset" name="reset">Cancel</button>
                </span> <span>
                <button class="btn btn-primary btn-sm" type="submit" id="post_comment" name="post_comment">Save</button>
                </span> </div>
                </form>
              
        </div>
      </div>
    </div>
    <script>
  $('#post_comment').on('click',function(event) {
    console.log('hi..');
       
        $.get('update.php?req=ajax&action=details&z_id='+$('#z_id').val()+'&z_comment='+$('#z_comment').val()+'',function(data){
        $('#container').html(data);
        });
         event.preventDefault();
  });
  </script>  

<?php


}


?>
