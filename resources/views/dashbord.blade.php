
@include('includes.adminheader')

<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center text-capitalize">
            {{ session('username') }}

            <a class="float-right ml-3" href="{{ route('admin.dashbord') }}" >Back to Home</a>
            <a class="float-right" href="{{ route('admin.logout') }}">Log Out</a>

        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-4">
            <a href="{{ route('admin.category') }}" class="btn btn-primary">Add Category</a>
        </div>
        <div class="col-sm-4">
            <a href="{{ route('admin.subcategory') }}" class="btn btn-primary">Add Sub Category</a>
        </div>
        <div class="col-sm-4">
            <a href="{{ route('admin.sublistcategory') }}" class="btn btn-primary">Add Sub list Category</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-4">
            <a href="{{ route('admin.product') }}" class="btn btn-primary">Add Product</a>
        </div>
    </div>
</div>


@include('includes.adminfooter')
