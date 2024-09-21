
   <!-- login modal -->
   <div class="modal fade" role="dialog" id="login">
    <div class="modal-dialog">
        <div class="modal-content p-5">

            <h2>Login Form <button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-danger text-white float-end">&times;</button></h2>
           <hr class="border border-2 border-dark w-25">
        
           <form method="post">
            <div class="form-group mt-3">
                <input type="text" name="email" placeholder="Email *" class="form-control">
            </div>
            <div class="form-group mt-3">
                <input type="password" name="password" placeholder="Password *" class="form-control">
            </div>
           
          
            <div class="form-froup mt-3">
                <input type="submit" name="login" value="Login" class="btn btn-sm btn-dark text-white" >
                <b><a href="">Forget Password ?</a></b>
            </div>

            <div class="form-froup mt-3">
             <b>Don't have an Account ? <a href="<?php echo $mainurl;?>create-account">Register here</a></b>
            </div>

        </form>
        </div>
    </div>
   </div>
