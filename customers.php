<?php
require_once 'header.php';
include_once 'config.php';
$sql="SELECT * FROM users";
$result = mysqli_query($link,$sql);
if (isset($_POST['select'])) {
  $_SESSION['email_id'] = $_POST['select_id'];
  echo "<script>
      window.location.href = 'transaction.php';
  </script>";
}
 ?>
 <div class="container">
        <h1 class="text-center pt-4" style="font-family:'raleway';font-weight:500;font-size:3em;">Customers</h1>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm tab">
                    <table class="table table-sm table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">Email</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">#</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="text-center py-2"><?php echo $rows['name']?></td>
                        <td class="text-center py-2"><?php echo $rows['email']?></td>
                        <td class="text-center py-2"><?php echo $rows['balance']?></td>
                        <td class="text-center py-2">
                          <form method="post">
                            <input type="hidden" name="select_id" value="<?php echo $rows['email'] ?>">
                            <button type ="submit" class="btn3" name="select">Select</button>
                          </form></td>
                    </tr>
                <?php
                    }
                ?>

                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
         </div>
 <?php
require_once 'footer.php';
  ?>
