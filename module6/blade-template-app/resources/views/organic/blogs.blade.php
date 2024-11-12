@extends('organic.layout')
@section('title-here')
::All Products
@endsection
@section('content')

    <section>
      <div class="container-lg">
        <div class="text-dark py-5 my-5">
          <div class="container shadow">
            <h3>Our Blogs</h3>
            <hr />
            <div class="row justify-content-center">
              <div class="col-md-4 p-3">
                <div class="section-header text-dark">
                  <h2 class="display-5 text-dark fs-4">Blogs Category</h2>
                  <!-- category fetch from added by admin -->

                </div>
              </div>
              <div class="col-md-8 p-3">
              <!-- fetch all products added by admin -->
               <div class="row">
                <div class="col-md-5 ms-0 p-2 shadow"></div>
                <div class="col-md-5 ms-5 p-2 shadow"></div>
               </div>
              </div>
              
            </div>
            
          </div>
        </div>
        
      </div>
    </section>

   
@endsection