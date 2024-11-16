@extends('organic.admin.layout') @section('title-name') ::Admin Dashboard
@endsection @section('dashboard-content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Add Category</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Add Category</li>
            </ol>
            
            <div class="card mb-4 p-5 w-75">
            <!-- pass a error message of vaildations -->
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <!-- create a form for add data -->
            <form method="post">
            <!--csrf tokken  -->
            @csrf
            <div class="form-group mt-2">
                <input type="text" name="categoryname" placeholder="Enter CategoryName *" class="form-control">
            </div> 
            
            <div class="form-group mt-2">
                <textarea name="descriptions" placeholder="Enter Category Descriptions *" class="form-control"></textarea>
            </div> 
            
            <div class="form-group mt-2">
                <input type="submit" name="addcategory" value="Add Category" class="btn btn-dark bg-dark text-white"  />
            </div> 
            </form>    

            </div>
        </div>
    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div
                class="d-flex align-items-center justify-content-between small"
            >
                <div class="text-muted">Copyright &copy; Your Website 2023</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection
