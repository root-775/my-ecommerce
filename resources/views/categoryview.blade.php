@include('includes.header')
@include('includes.navbar')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-sm-2">
            <aside class="left_widgets p_filter_widgets">
                <div class="l_w_title">
                    <h3>Product Categories</h3>
                </div>
                <div class="widgets_inner">
                    <ul class="list">
                        @foreach ($sublistcategorys as $sublistcategory)
                                <li>
                                    <a href="/categoryview/{{$sublistcategory->sub_cetegory_name}}/{{$sublistcategory->sublist_category_name}}">{{$sublistcategory->sublist_category_name}}</a>

                                </li>
                        @endforeach
                    </ul>
                </div>
            </aside>
        </div>
        <div class="col-sm-10">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-sm-3">
                        <div class="ps-product__column products-img">
                            <div class=" item thumb-wrapper">
                                <span class="wish-icon"><i class="far fa-heart" aria-hidden="true"></i></span>
                                <div class="img-box">
                                    <img src="{{ asset('images/'.$product->p_img) }}" class="img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                    <h4>{{$product->p_name}}</h4>
                                    <p class="item-price"><strike>&#8377; {{$product->p_sale_price_discount}}</strike> </p>
                                    <small style="text-decoration: line-through;">₹ {{$product->p_sale_price}} MRP</small>
                                    Total Savings ({{$product->p_sale_discount_percentage}}% off) <br>
                                    <a href="/productdetails/{{$product->id}}" class="btn btn-sucess">View Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@include('includes.footer')
