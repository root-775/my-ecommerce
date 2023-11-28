@include('includes.adminheader')




<div class="container">

        <div class="row">
            <div class="col-sm-12 text-center text-capitalize">
                {{ session('username') }}
                <a class="float-right" href="{{ route('admin.dashbord') }}">Back to Home</a>
            </div>
        </div>
    <form action="{{ route('admin.addproduct') }}" method="post" enctype="multipart/form-data">@csrf
        <div class="row mt-3">

            <div class="col-sm-4">
                Category Name:
                <select class="form-control" id="exampleFormControlSelect1" name="p_cetegory_name" required>
                    <option value=""></option>
                    @foreach ($categorys as $item)
                    <option value="{{ $item->cetegory_name }}">{{ $item->cetegory_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-4">
                SubCategory Name:
                <select class="form-control" id="exampleFormControlSelect1" name="p_sub_cetegory_name" required>
                    <option value=""></option>
                    @foreach ($subcategory as $item)
                        <option value="{{ $item->sub_cetegory_name }}">{{ $item->sub_cetegory_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-4">
                Sublist Category Name:
                <select class="form-control" id="exampleFormControlSelect1" name="p_sublist_category_name" required>
                    <option value=""></option>
                    @foreach ($sublistcategory as $item)
                        <option value="{{ $item->sublist_category_name }}">{{ $item->sublist_category_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <hr style="background-color: black">
        <div class="row mt-3">
            <div class="col-sm-4">
                Product Name:
                <input type="text" name="p_name" class="form-control" id="" required>
            </div>
            <div class="col-sm-4">
                Product Sale Price:
                <input type="text" name="p_sale_price" class="form-control" id="" required>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-4">
                Product Discount Price:
                <input type="text" name="p_sale_price_discount" class="form-control" id="" required>
            </div>
            <div class="col-sm-4">
                Product Discount Percentage:
                <input type="text" name="p_sale_discount_percentage" class="form-control" id="" required>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-8">
                Product Discription:

                <textarea name="p_desc" id="" rows="4" class="form-control" required></textarea>
            </div>

        </div>
        <div class="row mt-3">
            <div class="col-sm-4">
                Product image:
                <input type="file" class="form-control-file" name="p_img">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-4">
                <input type="submit" value="Add Product" class="form-control btn btn-primary">
            </div>
        </div>
    </form>
</div>



{{-- @foreach ($products as $item)
    {{$item->p_name}}
    <img src="{{ asset('images/' . $item->p_img) }}" alt="">
@endforeach --}}

@include('includes.adminfooter')
