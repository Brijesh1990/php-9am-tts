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
                  <h2 class="section-title display-5 text-dark">Create account</h2>
                </div>
                <p>Just Sign Up & Register it now to become member.</p>
                <p><img src='https://cdn.goodmanlantern.com/wp-content/uploads/2022/04/Group-6631.svg' alt="create-account"></p>
              </div>
              <div class="col-md-5 p-3">
                <form class="text-dark mt-5">
                  <div class="mb-3">
                    <label for="name" class="form-label d-none text-dark">Name</label>
                    <input type="text"
                      class="form-control form-control-md rounded-0 border border-2 border-dark" name="name" id="name" placeholder="Name">
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label d-none">Email</label>
                    <input type="email" class="form-control form-control-md rounded-0 border border-2 border-dark"  name="email" id="email" placeholder="Email Address">
                  </div>

                  <div class="mb-3">
                    <label for="email" class="form-label d-none">Phone</label>
                    <input type="text" class="form-control form-control-md rounded-0 border border-2 border-dark"  name="email" id="email" placeholder="Phone">
                  </div>

                  <div class="mb-3">
                    <label for="email" class="form-label d-none">Subject</label>
                    <input type="text" class="form-control form-control-md rounded-0 border border-2 border-dark"  name="email" id="email" placeholder="Subject">
                  </div>

                  <div class="mb-3">
                    <label for="email" class="form-label d-none">Message</label>
                    <textarea  class="form-control form-control-md rounded-0 border border-2 border-dark"  name="email" id="email" placeholder="Email Address"></textarea>
                  </div>
                  <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-dark btn-md rounded-0">Submit</button>
                  </div>
                </form>
                
              </div>
              
            </div>
            
          </div>
        </div>
        
      </div>
    </section>

   
@endsection