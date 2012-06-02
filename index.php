 <?php 
 $section = 'overview';
 include('includes/header.inc.php'); 
 if (isset($_GET['bookmark'])) $bookmark = '#bookmark='.$_GET['bookmark'];

 ?>
    
    <div class="well" style="display:none">
		  <!--<h1>Welcome to the Tech for Engagement Summit</h1>
		  <p style="margin-top:8px;">This website will serve as a staging ground and collaboration space the participants, during and after the event.</p>-->
		  <p>
  		  <span class="label label-success"><i class="icon-white icon-map-marker"></i> Welcome! </span> &nbsp;Please see below for an overview of the event, including the <a href="./?bookmark=id.bqusg8oinwa2">agenda</a> and a <a href="http://knightfoundation.org/technology-engagement-summit/2012/bio/">list of all the attendees</a>.<br /> 
  		  This is a facilitated, participant-driven event, which means that, beyond the <a href="./?bookmark=id.unrp41kj4rhm">initial framing</a>, the working sessions will be designed and lead by you. (<a href="./?bookmark=id.6g7tbwlw3qeu">Here's more on how it will work</a>).</p>
  	
  	
  	<div class="btn-group" style="">
  	  <a class="btn btn-large" href="./?bookmark=id.unrp41kj4rhm">Check out the framing topics</a>
  	  <a class="btn btn-large btn-primary" href="./?bookmark=id.gt2e9lw3yrao">Add your own ideas, questions & reactions</a>
  	</div>

		</div>
				
    <iframe id="gdoc" src="https://docs.google.com/document/d/12sDX9Sr_9cR5IlVoDw5DifNOoa-H7ccjrdgusAsQY1M/edit?embedded=true<?php echo $bookmark ?>" style="width: 100%;border:none;height:1200px;"></iframe>

    
 <?php include('includes/footer.inc.php'); ?>

