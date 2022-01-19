<?php
include_once('header.php');
include_once('../class/user_class.php');
$user = new User();
$proof=$user->get_idproof_user($_SESSION['user_id']);
$data=$_SESSION['complete'];
?>
<div class="profile-details">
	<div class="full"><div class="half">
	<form action="../controller/user.php" method="post" enctype="multipart/form-data">
		<label>Select ID Proof</label>
		<input type="hidden" name="hidden_value" value="1">
		<input type="hidden" name="user_id" value="<?= $_SESSION['user_id'] ?>">
		<input accept="image/*" type="file" name="id_proof" class="file-box" id="id_photo">
		<img id="preview" src="#" alt="Image Preview" /><br>
		<input type="submit" name="upload_id" value="Upload" class="button button-primary">
	</form>
</div>
<div class="half">
	<img src="<?=$proof['id_proof'];?>" style="width:300px;height:150px;"/>
</div>
</div>
</div>
<script type="text/javascript">
	id_photo.onchange = evt => {
  		const [file] = id_photo.files
  		if (file) {
    		preview.src = URL.createObjectURL(file)
  		}
	}
</script>
<?php
include_once('footer.php');
?>