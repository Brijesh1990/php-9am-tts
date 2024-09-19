<div class="w-50 mx-auto mt-5 p-5 shadow bg-white content">
<h2 class="text-center">Crud Operations</h2>
<hr class="border border-white border-2 w-25 mx-auto" />
<!-- add task here -->
 <form method="post" class="w-100 mx-auto">
    <div class="input-group">
    <input type="text" name="taskname" placeholder="what will you do ?" class="form-control rounded p-3" style="border-radius:25px !important" required>
    <button type="submit" name="addtask" class="btn btn-dark btn-sm p-1 ms-1 text-white rounded-circle mt-2" style="width: 45px; height: 45px;"><span class="bi bi-plus"></span></button>
    </div>
 </form>  
 
 <!-- display all data -->
  <table class="table table-responsive border-0 w-100 mx-auto mt-5">
   <?php 
   foreach($shw as $row)
   {
   ?>
   <tr>
      <td><?php echo $row["taskname"];?></td>
      <td><?php echo $row["added_date"];?></td>
      <td colspan="2"><div style="min-width:120px"><a href="<?php echo $mainurl;?>?deleteid=<?php echo $row['task_id'];?>" onclick="return confirm('Are you sure to delete Data ?')" class="btn btn-danger btn-sm border-0 text-white">Delete</a> | 
         
      <a href="<?php echo $mainurl;?>edittask?editid=<?php echo $row['task_id'];?>" class="btn btn-info btn-sm border-0 text-white">Edit</a></div>
      </td>
   </tr>

   <?php 
}
?> 
</table>
</div>