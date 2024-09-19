<div class="w-50 mx-auto mt-5 p-5 shadow bg-white content">
<h2 class="text-center">Update your task</h2>
<hr class="border border-white border-2 w-25 mx-auto" />
<!-- add task here -->
 <form method="post" class="w-75 mx-auto">
    <div class="input-group">
    <label>Edit taskName *</label>    
    <input type="text" name="taskname" value="<?php echo $edittask[0]["taskname"];?>" placeholder="what will you do ?" class="form-control rounded p-3" style="border-radius:25px !important" required>
    
    </div>
    <div class="input-group mt-2">
    <label>Edit taskDate *</label>    
    <input type="text" name="taskdate" value="<?php echo $edittask[0]["added_date"];?>" placeholder="edit task date" class="form-control rounded p-3" style="border-radius:25px !important" required>
</div>

<div class="input-group mt-2 w-50 mx-auto">
    <button type="submit" name="updatetask" class="btn btn-dark btn-sm p-1 ms-1 text-white rounded mt-2" style="width: 155px; height: 45px;">Update Task <span class="bi bi-pencil"></span></button>
</div>
 </form>  
</div>
