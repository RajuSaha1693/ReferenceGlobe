<?php
include_once('header.php');
$user=json_decode(base64_decode($_GET['data']));
?>
<div>
     <h3 style="margin: 0px;">EDIT USER</h3>
</div>
<div class="form-class">
    <form action="../controller/user.php" method="post">
        <input type="hidden" value='2' name="hidden_value">
        <input type="hidden" value='<?= $user->id; ?>' name="user_id">
        <div class="full">
            <div class="half">
                <label for="">Full Name <span class="req">*</span></label>
                <input type="text" name="user_name"  value="<?= $user->user_name; ?>" required class="input-box">
            </div>
            <div class="half">
                <label for="">Email <span class="req">*</span></label>
                <input type="email" name="user_email" value="<?= $user->user_email; ?>"  required class="input-box">
            </div>
        </div>
        <div class="full">
            <div class="half">
                <label for="">Username <span class="req">*</span></label>
                <input type="text" name="user_username"  value="<?= $user->user_username; ?>" required class="input-box">
            </div>
            <div class="half">
                <label for="">Mobile  <span class="req">*</span></label>
                <input type="text" name="user_mobile" value="<?= $user->user_mobile; ?>"  required class="input-box">
            </div>
        </div><div class="full">
            <div class="half">
                <label for="">Gender <span class="req">*</span></label>
                <select name="user_gender" id="user_gender" required class="select-box">
                    <option value="">Select</option>
                    <option value="Male" <?php if($user->user_gender=='Male'){ echo 'selected';}?>>Male</option>
                    <option value="Female" <?php if($user->user_gender=='Female'){ echo 'selected';}?>>Female</option>
                </select>
            </div>
            <div class="half">
                <label for="">Date of Birth <span class="req">*</span></label>
                <input type="date" name="user_dob" value="<?= $user->user_dob; ?>"  required class="input-box">
            </div>
        </div>

        <input type="submit" name="update" value="Update" class="button button-primary" style="float:right;margin-top:30px;">
    </form>
</div>
<?php include_once('footer.php');?>
