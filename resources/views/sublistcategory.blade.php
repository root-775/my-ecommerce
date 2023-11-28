@include('includes.adminheader')




<div class="container">

        <div class="row">
            <div class="col-sm-12 text-center text-capitalize">
                {{ session('username') }}
                <a class="float-right" href="{{ route('admin.dashbord') }}">Back to Home</a>
            </div>
        </div>
    <form action="{{ route('admin.addsublistcategory') }}" method="post" >@csrf
        <div class="row mt-3">

            <div class="col-sm-4">
                Category Name:
                <select class="form-control" id="exampleFormControlSelect1" name="cetegory_name">
                    @foreach ($categorys as $item)
                    <option value="{{ $item->cetegory_name }}">{{ $item->cetegory_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-4">
                SubCategory Name:
                <select class="form-control" id="exampleFormControlSelect1" name="sub_cetegory_name">
                    @foreach ($subcategory as $item)
                        <option value="{{ $item->sub_cetegory_name }}">{{ $item->sub_cetegory_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-4">
                Sub List Category Name:
                <input type="text" name="sublist_category_name" id="" class="form-control">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-4">
                <input type="submit" value="Add SubCategory" class="form-control">
            </div>
        </div>
    </form>
</div>


@include('includes.adminfooter')
