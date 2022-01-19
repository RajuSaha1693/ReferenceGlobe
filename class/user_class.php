<?php
    include_once('core_class.php');

    class User{

        public function upload_image($img)
        {
            if (isset($img) && $img['error'] === UPLOAD_ERR_OK)
            {
                $fileTmpPath = $img['tmp_name'];
                $fileName = $img['name'];
                $fileSize = $img['size'];
                $fileType = $img['type'];
                $fileNameCmps = explode(".", $fileName);
                $fileExtension = strtolower(end($fileNameCmps));         
                $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
                $allowedfileExtensions = array('jpg','png');                                        
                if (in_array($fileExtension, $allowedfileExtensions))
                {
                    $uploadFileDir = '../uploads/';
                    $dest_path = $uploadFileDir . $newFileName;

                    if(move_uploaded_file($fileTmpPath, $dest_path)) 
                    {
                        $message[0]='Success';
                        $message[1]=$dest_path;
                        return $message;
                    }
                    else 
                    {
                        $message[0]='Error';
                        $message[1] = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
                        return $message;
                    }
                }
                else
                {
                    $message[0]='Error';
                    $message[1] = 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
                    return $message;
                }
            }
            else
            {
                $message[0]='Error';
                $message [1]= 'Error:' . $_FILES['user_photo']['error'];
                return $message;
            }
        }
        public function add_idproof(){
            $core=Core::getInstance();
            extract($_POST);
            if($_FILES['id_proof']['name']!= "") {
                $photo_data=$this->upload_image($_FILES['id_proof']);
                if($photo_data[0]=='Success'){
                    $id_photo=$photo_data[1];
                }
            }
            $check_query = "select * from id_table where user_id =$user_id";
            $check_stmt = $core->dbh->prepare($check_query);
            $check_stmt->execute();
            if($check_stmt->rowCount()>0){
                $query = "update id_table set id_proof=:photo where user_id=:id";  
            }else{
                $query = "insert into id_table(user_id,id_proof) values(:id,:photo)";
            }
            $stmt = $core->dbh->prepare($query);
            $stmt->bindParam(':id',$user_id,PDO::PARAM_STR);
            $stmt->bindParam(':photo',$id_photo,PDO::PARAM_STR);
            if (!$stmt->execute()) {
                $err = $stmt->errorInfo();
                die( $err[2] );
            }else{
                if($hidden_value!=2){
                    echo "<script> alert('Successfully !!! '); window.location.href='../views/dashboard.php'; </script>";
                }else{
                    echo "<script> alert('Successfully !!! '); window.location.href='../views/adminboard.php'; </script>";
                }
                
            }


        }
        public function add_user(){
            $core=Core::getInstance();
            extract($_POST);
            $user_role=1;

            if($_FILES['user_photo']['name']!= "") {
                $photo_data=$this->upload_image($_FILES['user_photo']);
                if($photo_data[0]=='Success'){
                    $user_photo=$photo_data[1];
                }
            }
            if($_FILES['user_signature']['name']!= "") {
                $signature_data=$this->upload_image($_FILES['user_signature']);
                if($signature_data[0]=='Success'){
                    $user_signature=$signature_data[1];
                }
            }
            if($hidden_value!=2){
                if($user_password!=$confirm_password){
                    echo "<script>alert('Password doesn\'t matched !!! '); window.location.href='../register.php'; </script>";
                    die();
                }
                $user_status=0;
                $hash_password = base64_encode( "GLOBE".$user_password);
            }else{
                $user_status=1;
                $hash_password = base64_encode( "GLOBE".$user_mobile);
            }

            $query = "insert into user_table
                      (`user_name`, `user_username`, `user_password`, `user_email`, `user_mobile`, `user_gender`, `user_dob`, `user_photo`, `user_signature`, `user_role`, `user_status`) 
                      values(:name,:username,:password,:email,:mobile,:gender,:dob,:photo,:signature,:role,:status)";
            $stmt = $core->dbh->prepare($query);
            $stmt->bindParam(':name',$user_name,PDO::PARAM_STR);
            $stmt->bindParam(':username',$user_username,PDO::PARAM_STR);
            $stmt->bindParam(':password',$hash_password,PDO::PARAM_STR);
            $stmt->bindParam(':email',$user_email,PDO::PARAM_STR);
            $stmt->bindParam(':mobile',$user_mobile,PDO::PARAM_STR);
            $stmt->bindParam(':gender',$user_gender,PDO::PARAM_STR);
            $stmt->bindParam(':dob',$user_dob,PDO::PARAM_STR);
            $stmt->bindParam(':photo',$user_photo,PDO::PARAM_STR);
            $stmt->bindParam(':signature',$user_signature,PDO::PARAM_STR);
            $stmt->bindParam(':role',$user_role,PDO::PARAM_STR);
            $stmt->bindParam(':status',$user_status,PDO::PARAM_STR);
            if (!$stmt->execute()) {
                $err = $stmt->errorInfo();
                die( $err[2] );
            }else{
                if($hidden_value!=2){
                    echo "<script> alert('Registeration Successfully !!! '); window.location.href='../index.php'; </script>";
                }else{
                    echo "<script> alert('User Added Successfully !!! '); window.location.href='../views/adminboard.php'; </script>";
                }
                
            }
        }

        public function edit_user(){
            $core=Core::getInstance();
            extract($_POST);
            $query = "update user_table set
                      user_name=:name, user_username=:username,
                      user_email=:email,user_mobile=:mobile,user_gender=:gender,user_dob=:dob
                      where id=:id";
            $stmt = $core->dbh->prepare($query);
            $stmt->bindParam(':name',$user_name,PDO::PARAM_STR);
            $stmt->bindParam(':username',$user_username,PDO::PARAM_STR);
            $stmt->bindParam(':email',$user_email,PDO::PARAM_STR);
            $stmt->bindParam(':mobile',$user_mobile,PDO::PARAM_STR);
            $stmt->bindParam(':gender',$user_gender,PDO::PARAM_STR);
            $stmt->bindParam(':dob',$user_dob,PDO::PARAM_STR);
            $stmt->bindParam(':id',$user_id,PDO::PARAM_INT);
            if (!$stmt->execute()) {
                $err = $stmt->errorInfo();
                die( $err[2] );
            }else{
                if($_SESSION['role']==1){
                    echo "<script> alert('Updated Successfully,Please Logout and Login again for changes !!! '); window.location.href='../views/dashboard.php'; </script>";
                }else{
                    echo "<script> alert('User Updated Successfully !!! '); window.location.href='../views/adminboard.php'; </script>";
                }
                
            }
        }
        public function edit_photo(){
            $core=Core::getInstance();
            extract($_POST);
            if($_FILES['user_photo']['name']!= "") {
                $photo_data=$this->upload_image($_FILES['user_photo']);
                if($photo_data[0]=='Success'){
                    $user_photo=$photo_data[1];
                }
            }
            $query = "update user_table set
                      user_photo=:photo
                      where id=:id";
            $stmt = $core->dbh->prepare($query);
            $stmt->bindParam(':photo',$user_photo,PDO::PARAM_STR);
            $stmt->bindParam(':id',$user_id,PDO::PARAM_INT);
            if (!$stmt->execute()) {
                $err = $stmt->errorInfo();
                die( $err[2] );
            }else{
                if($_SESSION['role']==1){
                    echo "<script> alert('Updated Successfully,Please Logout and Login again for changes !!! '); window.location.href='../views/dashboard.php'; </script>";
                }else{
                    echo "<script> alert('User Updated Successfully !!! '); window.location.href='../views/adminboard.php'; </script>";
                }
                
            }
        }
        public function edit_signature(){
            $core=Core::getInstance();
            extract($_POST);
            if($_FILES['user_signature']['name']!= "") {
                $photo_data=$this->upload_image($_FILES['user_signature']);
                if($photo_data[0]=='Success'){
                    $user_signature=$photo_data[1];
                }
            }
            $query = "update user_table set
                      user_signature=:photo
                      where id=:id";
            $stmt = $core->dbh->prepare($query);
            $stmt->bindParam(':photo',$user_signature,PDO::PARAM_STR);
            $stmt->bindParam(':id',$user_id,PDO::PARAM_INT);
            if (!$stmt->execute()) {
                $err = $stmt->errorInfo();
                die( $err[2] );
            }else{
                if($_SESSION['role']==1){
                    echo "<script> alert('Updated Successfully,Please Logout and Login again for changes !!! '); window.location.href='../views/dashboard.php'; </script>";
                }else{
                    echo "<script> alert('User Updated Successfully !!! '); window.location.href='../views/adminboard.php'; </script>";
                }
                
            }
        }
        public function active_user(){
            $core=Core::getInstance();
            extract($_GET);
            $query = "update user_table set
                      user_status=CASE WHEN user_status=0 THEN 1
                      ELSE 0
                      END
                      where id=:id";
            $stmt = $core->dbh->prepare($query);
            $stmt->bindParam(':id',$update_id,PDO::PARAM_INT);
            if (!$stmt->execute()) {
                $err = $stmt->errorInfo();
                die( $err[2] );
            }else{
                echo "<script>window.location.href='../views/adminboard.php'; </script>";
            }
        }

        public function delete_user($user_id){
            $core = Core::getInstance();
            $query = "delete from user_table where id = :id";
            $stmt = $core->dbh->prepare( $query );
            $stmt->bindParam(':id',$user_id,PDO::PARAM_INT);
            if ( !$stmt->execute() ) {
                $err = $stmt->errorInfo();
                die( $err[2] );
            }else{
                echo "<script> alert('Deleted Successfully !!! '); window.location.href='../views/adminboard.php'; </script>";
            }
        }

        public function get_single_user($id){
            $core = Core::getInstance();
            $query = "select * from user_table where id=$id";
            $stmt = $core->dbh->prepare( $query );
            if ( !$stmt->execute() ) {
                $err = $stmt->errorInfo();
                die( $err[2] );
            }else{
                return $stmt->fetch();
            }
        }

        public function get_idproof_user($id){
            $core = Core::getInstance();
            $query = "select * from id_table where user_id=$id";
            $stmt = $core->dbh->prepare( $query );
            if ( !$stmt->execute() ) {
                $err = $stmt->errorInfo();
                die( $err[2] );
            }else{
                return $stmt->fetch();
            }
        }

        public function get_user(){
            $core = Core::getInstance();
            $sql = "SELECT * from user_table where user_role=1";
            $stmt = $core->dbh->prepare($sql);
            $stmt->execute();
            $stmt = $core->dbh->prepare($sql);
            if(!$stmt->execute()){
                $err = $stmt->errorInfo();
                die($err[2]);
            }
            $json_data = array();
            $sl_no=1;
            while ( $row = $stmt->fetchObject() ) {
                $nestedData=array();
                $nestedData[]=$sl_no;
                $nestedData[]=$row->user_username;
                $nestedData[]=$row->user_name;
                $nestedData[]=$row->user_email;
                $nestedData[]=$row->user_mobile;
                $nestedData[]=$row->user_gender;
                $nestedData[]=$row->user_dob;
                $nestedData[]='<img src="'.$row->user_photo.'" alt="profile_img" style="width:40px; heigth:50px"/>';
                $nestedData[]='<img src="'.$row->user_signature.'" alt="signature" style="width:40px; heigth:20px"/>';
                if($row->user_status==0){
                    $status='Make Active';
                }else{
                    $status='Make Deactive';
                }
                $nestedData[]='<a href="../controller/user.php?update_id='.$row->id.'">'.$status.'</a>';
                if($_SESSION['role']==3){
                    $nestedData[]='<a href="../controller/user.php?user_id='.$row->id.'" class="button button-info">Edit</a>';
                }else{
                    $nestedData[]='';
                }  
                $nestedData[]='<a href="../controller/user.php?delete_id='.$row->id.'" onclick="return confirm(\'Are you sure you want to delete?\');" class="button button-warning">Delete</a>';
                $json_data[] = $nestedData;
                $sl_no++;
            }
            echo json_encode($json_data);  
        }

        public function user_login(){
            $core = Core::getInstance();
            extract($_POST);
            $hash_password=base64_encode('GLOBE'.$user_password);
            $query = "select * from user_table where user_email = :email and user_password=:password and user_status=1";
            $stmt = $core->dbh->prepare($query);
            $stmt->bindParam( ':email', $user_email, PDO::PARAM_STR );
            $stmt->bindParam( ':password', $hash_password, PDO::PARAM_STR );
            if (!$stmt->execute()) {
                $err = $stmt->errorInfo();
                die( $err[2] );
            }
            if ($stmt->rowCount()>0) {
                $row = $stmt->fetchObject();
                $_SESSION['name']  = $row->user_name;
				$_SESSION['user_id']    = $row->id;
                $_SESSION['role']   = $row->user_role;
                $_SESSION['complete']=$row;
                if($row->user_role==1){
                    header('location:../views/dashboard.php'); 
                }else{
                    header('location:../views/adminboard.php'); 
                }
            }else{
                echo "<script> alert('Invalid Credential'); window.location.href = '../index.php'; </script>"; 
            }
        }
        
       
    }
?>