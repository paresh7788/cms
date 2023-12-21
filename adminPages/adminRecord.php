<?php  
include 'adminNav.php';
?>
<link rel="stylesheet" href="CSS/adminRecord.css">
<div class="property-heading">
    <h2>Manage Records</h2>
  </div>
<div class="form-container">
    <form action="#" method="post">
      <h2>Registered User Table</h2>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th colspan="2">Operation</th>
          </tr>
        </thead>
        <tbody>
            <?php
                    $selectquery = "SELECT * FROM `registration`";

                      $query = mysqli_query($con,$selectquery);

                      $nums=mysqli_num_rows($query);

                  // $res = mysqli_fetch_array($query);

                   while($res = mysqli_fetch_array($query)){
                  ?>
          <tr>
            <td><?php echo $res['id']?></td>
            <td><?php echo $res['name']?></td>
            <td><?php echo $res['email']?></td>
            <td><?php echo $res['phone']?></td>
           
            <td class="operations"><a href="editRecord.php?id=<?php echo $res['id']?>"><img src="../image/edit.png" alt="" style="width:14px;" title="edit"></a></td>
            <td class="operations"><a href="removeRecord.php?id=<?php echo $res['id']?>"> <img src="../image/remove.png" alt="" style="width:14px;" title="remove"></a>
            </td>
          </tr>
          <?php
                        }

                        ?>
        </tbody>
      </table>
    </form>
  </div>
  