<?php include('../../conn.php');?>
<center><h2>User Account</h2></center>
<div style="overflow-x:auto;">
 <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
                  <th class="wd-15p">Name</th>
                  <th class="wd-25p">Email</th>
                  <th class="wd-20p">Number</th>
                  <th class="wd-15p">Address</th>
                  <th class="wd-10p">Position</th>
                  <th class="wd-25p">Gender</th>
                  <th class="wd-25p">Image</th>
                  <th class="wd-25p">State</th>
                  <th class="wd-25p">DOB</th>
                  <th class="w3-red">Delete</th>
      </tr>
   </thead>
   <?php 
$sqlnotice = "SELECT * FROM account";
$resulsqlnotice = $conn->query($sqlnotice);
  
 if ($resulsqlnotice->num_rows > 0) {
     while($row = $resulsqlnotice->fetch_assoc()) {
        ?>   
    <tr class="w3-hover-green">
                  <td><?php echo $row["account_name"];?></td>
                  <td><?php echo $row["account_email"];?></td>
                  <td><?php echo $row["account_number"];?></td>
                  <td><?php echo $row["account_address"];?></td>
                  <td><?php echo $row["account_position"];?></td>
                  <td><?php echo $row["account_gender"];?></td>
                  <td><img src='<?php echo $row["account_image"];?>' class="w3-circle img-responsive" style="height:30px;width:30px;"></td>
                  <td><?php echo $row["account_state"];?></td>
                  <td><?php echo $row["account_dob"];?></td>
                  <td><a href="pages/deletebox/deleteaccount.php?id=<?php echo $row["account_id"];?>"><i class="fa fa-trash" style="color:red;"></i></a></td>
    </tr>
<?php
  }
} else {
    echo "";
}
?> 
</table>
</div>