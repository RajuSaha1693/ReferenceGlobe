<?php include_once('header.php');?>
        <div>
             <h3 style="margin: 0px;">USER TABLE</h3>
            <a href="add_user.php" class="add-button">Add User</a>
        </div>
        <table class="users">
            <thead>
                <tr>
                    <th>Sl No</th>
                    <th>User Name</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile No.</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                    <th>Photo</th>
                    <th>Signature</th>
                    <th>Status</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody id="tbody">

            </tbody>
        </table>
    
<script>
    $(document).ready(function() {
          $.ajax({
            url: '../controller/user.php',
            type: 'post',
            dataType: "json",
            data: {getdata:'user'},
            success: function(data) {
                var html=''
                data.forEach(s=>{
                  html+='<tr>'
                  s.forEach(td=>{
                      html+='<td>'+td+'</td>'
                  })
                  html+='</tr>'
                })
                $("#tbody").html(html)
            }
          });  
    });
</script>
<?php include_once('footer.php');?>