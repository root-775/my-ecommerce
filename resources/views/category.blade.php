@include('includes.adminheader')

<div class="container">

        <div class="row">
            <div class="col-sm-12 text-center text-capitalize">
                {{ session('username') }}
                <a class="float-right" href="{{ route('admin.dashbord') }}">Back to Home</a>
            </div>
        </div>
    <form action="{{ route('admin.addcategory') }}" method="post" >@csrf
        <div class="row mt-3">

            <div class="col-sm-4">
                Name:
                <input type="text" name="cetegory_name" id="" class="form-control">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-4">
                <input type="submit" value="Add Category" class="form-control">
            </div>
        </div>
    </form>
</div>


@include('includes.adminfooter')
