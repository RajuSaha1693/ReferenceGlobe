<?php
include_once('header.php');
$user=json_decode(base64_decode($_GET['data']));
?>
<div>
     <h3 style="margin: 0px;">Profile Images</h3>
</div>
<div class="form-class">
 
        <input type="hidden" value='2' name="hidden_value">
        <input type="hidden" value='<?= $user->id; ?>' name="user_id">
        <div class="full">
            <div class="half">
               <img src="<?= $user->user_photo; ?>" style="width: 150px;height: 220px;">
            </div>
            <div class="half">
                <img src="<?= $user->user_signature; ?>" style="width: 150px;height: 50px;">
            </div>
        </div>
        <div class="full">
        	<form action="../controller/user.php" method="post" enctype="multipart/form-data">
        		<input type="hidden" value='2' name="hidden_value">
        		<input type="hidden" value='<?= $user->id; ?>' name="user_id">
	            <div class="half">
	                <label for="">Profile Photo</label>
	                <input type="file" name="user_photo" class="file-box">
	                <input type="submit" name="updatephoto" value="Update" class="button button-primary" style="float:left;margin-top:30px;">
	            </div>
	        </form>
	        <form action="../controller/user.php" method="post" enctype="multipart/form-data">
        		<input type="hidden" value='2' name="hidden_value">
        		<input type="hidden" value='<?= $user->id; ?>' name="user_id">
	            <div class="half">
	               <label for="">Signature</label>
	               <input type="file" name="user_signature" class="file-box">
	               <input type="submit" name="updatesignture" value="Update" class="button button-primary" style="float:left;margin-top:30px;">
	            </div>
	        </form>
        </div>

        
   
</div>
<?php include_once('footer.php');?>
