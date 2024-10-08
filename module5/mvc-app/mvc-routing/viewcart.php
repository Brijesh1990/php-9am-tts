   <!-- view cart -->
   <div class="container p-5 mt-5 shadow">    
            <h1>View Cart <span class="badge bg-danger text-white"><?php echo $carttotal[0]["total_count"];?></span></h1>
            <hr />
            <!-- view cart here -->
           <table class="table table-responsive">
           <?php 
           foreach($shwcrt as $row)
           {
           ?>
           <tr>  
             <td><img src="admin/<?php echo $row["photo"];?>" style="width:100px; height:90px"></td>  
             <td><?php echo $row["productname"];?></td>
             <td><input type="number" min="1" value="<?php echo $row["quantity"];?>" class="form-control w-75"></td>    
             <td><?php echo $row["price"];?></td>  
             <td><?php echo $row["subtotal"];?></td>     
             <td><a href="<?php echo $row["cartid"];?>" class="btn btn-sm bg-danger text-white"><span class="bi bi-trash"></span></a></td>   
            </tr>
           <?php 
           }
           ?>


           <!-- subtotal of cart -->
            <tr  class="bg-dark text-white mt-3 fs-2">
            <td align="right" colspan="7" class="mt-4">Subtotal of Products is Rs. <?php echo $subtotal[0]['sum_total'];?></td>
           </tr>
           <tr>
            <td  align="right" colspan="7" class="mt-4"><a href="<?php echo $mainurl;?>checkout-here"><button type="button" class="btn btn-lg btn-dark text-white">Go For Checkout >> </button></a></td>
           </tr>
           </table>
    </div>
   


