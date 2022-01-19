<?php
include_once('../controller/employee.php');
include_once('header.php');
?>
<div>
  <h3 style="margin: 0px;">EMPLOYEE TABLE</h3>
</div>
<form action='' method='post'>
  <div style='float:right;padding-right: 30px;'>
    <input type='text' name='search[keyword]' value="<?php echo $search_keyword; ?>" id='keyword' class="search-box" placeholder="Search Here...">
  </div>
  <br>
  <table class="users">
    <thead>
      <tr>
        <th class='table-header' width='20%'>Name</th>
        <th class='table-header' width='20%'>Email</th>
        <th class='table-header' width='10%'>Mobile</th>
        <th class='table-header' width='20%'>Designation</th>
        <th class='table-header' width='10%'>Date of Birth</th>
      </tr>

    </thead>
    <tbody id='table-body'>
      <?php
      if(!empty($result)) { 
        foreach($result as $row) {
          ?>
          <tr class='table-row'>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['mobile_no']; ?></td>
             <td><?php echo $row['designation']; ?></td>
            <td><?php echo $row['date_of_birth']; ?></td>
          </tr>
          <?php
        }
      }
      ?>
    </tbody>
  </table>
  <?php echo $data[0]; ?>
</form>
