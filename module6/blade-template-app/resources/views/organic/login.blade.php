@extends('organic.layout')
@section('title-here')
::Create Account page
@endsection
@section('content')

    <section>
      <div class="container-lg">
        <div class="text-dark py-5 my-5">
          <div class="container shadow">
            <div class="row justify-content-center">
              <div class="col-md-5 p-3">
                <div class="section-header text-dark">
                  <h2 class="section-title display-5 text-dark">Login Form</h2>
                </div>
                <p>Just Login & Register it now to become member.</p>
                <p><img src='https://cdn.goodmanlantern.com/wp-content/uploads/2022/04/Group-6631.svg' alt="create-account"></p>
              </div>
              <div class="col-md-5 p-3">
                <form class="text-dark mt-5">
               
                  <div class="mb-3">
                    <label for="email" class="form-label d-none">Email</label>
                    <input type="email" class="form-control form-control-md rounded-0 border border-2 border-dark"  name="email" id="email" placeholder="Password">
                  </div>

                  <div class="mb-3">
                    <label for="email" class="form-label d-none">Password</label>
                    <input type="password" class="form-control form-control-md rounded-0 border border-2 border-dark"  name="password" id="email" placeholder="Phone">
                  </div>

              

            
                  <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-dark btn-md rounded-0">SignIn</button>
                    <b class="ms-5"><a href='/forgetpassword-here'>Forget Password</a>
                  </div>
                </form>
                
              </div>
              
            </div>
            
          </div>
        </div>
        
      </div>
    </section>

   
@endsection