   <!-- view cart -->
   <div class="container p-5 mt-5 shadow">    
            <h1>View Cart <span class="badge bg-danger text-white"><?php echo $carttotal[0]["total_count"];?></span></h1>
            <hr />
            <!-- view cart here -->
           <table class="table table-responsive">
           <?php 
           foreach($shwcart as $row)
           {
           ?>
           <tr>
             <td><?php echo $row["cartid"];?></td>  
             <td><?php echo $row["pid"];?></td>  
             <td><?php echo $row["customer_id"];?></td>  
             <td><?php echo $row["price"];?></td>  
             <td><?php echo $row["subtotal"];?></td>  
             <td><?php echo $row["added_date"];?></td>   
             <td><a href="<?php echo $row["cartid"];?>" class="btn btn-sm bg-danger text-white"><span class="bi bi-trash"></span></a></td>   
            </tr>
           <?php 
           }
           ?>


           <!-- subtotal of cart -->
            <tr  class="bg-dark text-white mt-3 fs-2">
            <td align="right" colspan="7" class="mt-4">Subtotal of Products is Rs.</td>
           </tr>
           <tr>
            <td  align="right" colspan="7" class="mt-4"><button type="button" class="btn btn-lg btn-dark text-white">Go For Checkout >> </button></td>
           </tr>
           </table>
    </div>
   


