<?php
include_once('header.php');
$data=$_SESSION['complete'];
?>
<div class="my-profile">
        <div>
            <h3 style="margin: 0px;">My Profile</h3>
            <br>
            <a href="../controller/user.php?user_id=<?=$data->id;?>" class="add-button">Edit Profile</a>
        </div>
        <div>
            <div class="profile-img">
                <img src="<?= $data->user_photo?>" alt="Profie Picture" />
                <a href="../controller/user.php?profile_id=<?=$data->id;?>" style="color:green;">edit profile images</a>
            </div>
            <div class="profile-sign">
                <img src="<?=$data->user_signature;?>" alt="Signature" />
            </div>
            <div class="profile-details">
                <div class="full">
                    <div class="half">
                        <label>Full Name</label>
                        <p><?= $data->user_name;?>
                    </div>
                    <div class="half">
                        <label>Username</label>
                        <p><?= $data->user_username;?>
                    </div>
                </div>
                <div class="full">
                    <div class="half">
                        <label>Mobile No.</label>
                        <p><?= $data->user_mobile;?>
                    </div>
                    <div class="half">
                        <label>Email</label>
                        <p><?= $data->user_email;?>
                    </div>
                </div>
                <div class="full">
                    <div class="half">
                        <label>Date of Birth</label>
                        <p><?= $data->user_dob;?>
                    </div>
                    <div class="half">
                        <label>Gender</label>
                        <p><?= $data->user_gender;?>
                    </div>
                </div>
            </div>
        </div>
</div>

<?php
include_once('footer.php');
?>