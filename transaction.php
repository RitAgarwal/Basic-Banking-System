<?php
require_once 'header.php';
include_once 'config.php';
$sid = $_SESSION['email_id'];
if(isset($_POST['submit']))
{
    $from = $sid;
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where email='$from'";
    $query = mysqli_query($link,$sql);
    $sql1 = mysqli_fetch_array($query);

    $sql = "SELECT * from users where email='$to'";
    $query = mysqli_query($link,$sql);
    $sql2 = mysqli_fetch_array($query);




    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';
        echo '</script>';
    }
    else if($amount > $sql1['balance'])
    {

        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';
        echo '</script>';
    }
  else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }
     else {
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE users set balance=$newbalance where email='$from'";
                mysqli_query($link,$sql);
                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE users set balance=$newbalance where email='$to'";
                mysqli_query($link,$sql);
                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $date=date('d-m-Y H:i:s a');
                $sql = "INSERT INTO transfer VALUES ('$sender','$receiver',$amount,'$date')";
                $query1=mysqli_query($link,$sql);

                if($query1){
                     echo "<script> alert('Transaction Successful');
                                     window.location.href='customers.php';
                           </script>";

                }

                $newbalance= 0;
                $amount =0;
        }

}
 ?>
 <div class="container">
        <h2 class="text-center pt-4"style="font-family:'raleway';font-weight:500;font-size:3em;">Transaction</h2>
            <?php
                $sql = "SELECT * FROM  users where email='$sid'";
                $result=mysqli_query($link,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($link);
                }
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table class="table table-striped table-condensed table-bordered tab2">
                <tr>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Balance</th>
                </tr>
                <?php
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="text-center py-2"><?php echo $rows['name']?></td>
                        <td class="text-center py-2"><?php echo $rows['email']?></td>
                        <td class="text-center py-2"><?php echo $rows['balance']?></td>

                    </tr>
                <?php
              }?>
            </table>
        </div>
        <br>
        <label>Transfer To:</label>
        <select name="to" class="form-control" required>
            <option value="" disabled selected>Select</option>
            <?php
                $sql = "SELECT * FROM users where email!='$sid'";
                $result=mysqli_query($link,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['email'];?>" >

                    <?php echo $rows['name'] ;?> (Balance:
                    <?php echo $rows['balance'] ;?> )

                </option>
            <?php
                }
            ?>
            <div>
        </select>
        <br>
        <br>
            <label>Amount:</label>
            <input type="number" class="form-control" name="amount" required>

            <button class="btn mt-3" name="submit" type="submit" id="mybtn">Transfer</button>
        </form>
    </div>
<?php
require_once 'footer.php';
 ?>
