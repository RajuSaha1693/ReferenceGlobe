<?php include_once('header.php');?>
<div>
     <h3 style="margin: 0px;">ADD USER</h3>
    <a href="adminboard.php" class="add-button">Back</a>
</div>
<div class="form-class">
    <form action="../controller/user.php" method="post" enctype="multipart/form-data">
        <input type="hidden" value='2' name="hidden_value">
        <div class="full">
            <div class="half">
                <label for="">Full Name <span class="req">*</span></label>
                <input type="text" name="user_name" required class="input-box">
            </div>
            <div class="half">
                <label for="">Email <span class="req">*</span></label>
                <input type="email" name="user_email" required class="input-box">
            </div>
        </div>
        <div class="full">
            <div class="half">
                <label for="">Username <span class="req">*</span></label>
                <input type="text" name="user_username" required class="input-box">
            </div>
            <div class="half">
                <label for="">Mobile  <span class="req">*</span></label>
                <input type="text" name="user_mobile" required class="input-box">
            </div>
        </div>
        <div class="full">
            <div class="half">
                <label for="">Gender <span class="req">*</span></label>
                <select name="user_gender" id="user_gender" required class="select-box">
                    <option value="">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="half">
                <label for="">Date of Birth <span class="req">*</span></label>
                <input type="date" name="user_dob" required class="input-box">
            </div>
        </div>
        <div class="full">
            <div class="half">
                <label for="">Profile Photo</label>
                <input type="file" name="user_photo" class="file-box">
            </div>
            <div class="half">
                <label for="">Signature</label>
                <input type="file" name="user_signature" class="file-box">
            </div>
        </div>
        <input type="submit" name="register" value="Register" class="button button-primary" style="float:right;margin-top:30px;">
    </form>
</div>
<?php include_once('footer.php');?>