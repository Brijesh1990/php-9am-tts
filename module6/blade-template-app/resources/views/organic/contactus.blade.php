@extends('organic.layout')
@section('title-here')
::Contact us Page
@endsection
@section('content')

    <section>
      <div class="container-lg">
        <div class="text-dark py-5 my-5">
          <div class="container shadow">
            <div class="row justify-content-center">
              <div class="col-md-5 p-3">
                <div class="section-header text-dark">
                  <h2 class="section-title display-5 text-dark">Contact with us</h2>
                </div>
                <p>Just Sign Up & Register it now to become member.</p>
                <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14766.779052283493!2d70.7472124554199!3d22.28954949999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959cb5accd58677%3A0x66e11372ab01cd25!2sGurudev%20Organics!5e0!3m2!1sen!2sin!4v1731125500850!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
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