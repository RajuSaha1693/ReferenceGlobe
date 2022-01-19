<?php
include_once('header.php');
$data=$_SESSION['complete'];
?>
<div class="profile-details">
	<form action="../controller/user.php" method="post" enctype="multipart/form-data">
		<label>Select ID Proof</label>
		<input type="hidden" name="hidden_value" value="1">
		<input type="hidden" name="user_id" value="<?= $_SESSION['user_id'] ?>">
		<input accept="image/*" type="file" name="id_proof" class="file-box" id="id_photo">
		<img id="preview" src="#" alt="Image Preview" /><br>
		<input type="submit" name="upload_id" value="Upload" class="button button-primary">
	</form>
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