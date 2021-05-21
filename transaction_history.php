<?php
require_once 'header.php';
require_once 'config.php';
$sql="SELECT * FROM transfer";
$result = mysqli_query($link,$sql);
 ?>
 <div class="container">
        <h1 class="text-center pt-4" style="font-family:'raleway';font-weight:500;font-size:3em;">Transaction History</h1>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm tab3">
                    <table class="table table-sm table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">Sender</th>
                            <th scope="col" class="text-center py-2">Receiver</th>
                            <th scope="col" class="text-center py-2">Amount transferred</th>
                            <th scope="col" class="text-center py-2">Date & Time</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="text-center py-2"><?php echo $rows['sender']?></td>
                        <td class="text-center py-2"><?php echo $rows['receiver']?></td>
                        <td class="text-center py-2"><?php echo $rows['amount']?></td>
                        <td class="text-center py-2"><?php echo $rows['d&t']?></td>
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
