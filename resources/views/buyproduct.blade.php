@include('includes.header')
@include('includes.navbar')


@foreach ($products as $product)
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-6">
            <div class="easyzoom easyzoom--adjacent">
                <a href="{{ asset('images/'.$product->p_img) }}">
                    <img src="{{ asset('images/'.$product->p_img) }}" alt="" style="border-radius: 20px;width: 100%;">
                </a>
            </div>


        </div>
        <div class="col-sm-5">
                <h3>{{$product->p_name}}</h3>
                <h5 style="color: #3c3c3c"><b>₹ {{$product->p_sale_price_discount}} </b> <small style="text-decoration: line-through;">₹ {{$product->p_sale_price}} MRP</small> (Inclusive of all taxes)</h5>
                {{-- <form action="" method="post"> --}}
                    <div class="mb-2">
                        Select Number of Product
                        <select name="" id="" >
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                        </select>
                    </div>
                    <input type="text" name="" id="" placeholder="Enter Name" class="form-control col-sm-8 mb-2">
                    <input type="text" name="" id="" placeholder="Enter E-mail" class="form-control col-sm-8 mb-2">
                    <input type="text" name="" id="" placeholder="Enter Phone Number" class="form-control col-sm-8 mb-2">
                    <input type="Submit" name="" id="" value="Buy Now" class="form-control col-sm-8 btn btn-primary mb-2">
                {{-- </form>s --}}
        </div>
    </div>
</div>
@endforeach




{{--
<div class="container">
    <h3 class="text-center mt-5">{{$products['p_name']}}</h3>
    <div class="row mt-5">
        <div class="col-sm-3 ">
            <div class="easyzoom easyzoom--adjacent">
                <a href="{{ asset('images/'.$products->p_img) }}">
                    <img src="{{ asset('images/'.$products->p_img) }}" alt="" style="border-radius: 20px;width: 100%;">
                </a>
            </div>
        </div>


        <div class="col-sm-5 pl-5">

            <h5 style="color: #3c3c3c"><b>₹ {{$products->p_sale_price_discount}} </b> <small style="text-decoration: line-through;">₹ {{$products->p_sale_price}} MRP</small> (Inclusive of all taxes)</h5>
            <br>
            Total Savings ({{$products->p_sale_discount_percentage}}% off)
            <br>
            <img src="{{ asset('images/sale.jpg') }}" class="img-fluid" alt="" style="border-radius: 10px">
            <br><br>
            <span>
                <div class="v-emi-ship-opt-wrap container-fluid font-13" style="display:block">
                    <div class="v-emi-ship-opt-list">
                            <div class="v-emi-ship-opt-listitem" id="show_warranty">
                                <span class="v-emi-ship-opt-listitem-thumb-wrap"><i class="fas fa-check-square"></i></span>
                                <span class="v-emi-ship-opt-listitem-dtls">
                                    <span class="v-emi-ship-opt-listitem-dtls-ttl pf-text-black">36 Months'  </span>
                                    <span class="v-emi-ship-opt-listitem-dtls-subttl">Warranty</span>
                                </span>
                            </div>
                                        <div class="v-emi-ship-opt-listitem" id="show_easy">
                            <span class="v-emi-ship-opt-listitem-thumb-wrap"><i class="fas fa-undo-alt"></i></span>
                            <span class="v-emi-ship-opt-listitem-dtls">
                                <span class="v-emi-ship-opt-listitem-dtls-ttl pf-text-black">Easy</span>
                                <span class="v-emi-ship-opt-listitem-dtls-subttl">Returns</span>
                            </span>
                        </div>
                    </div>
                </div>
            </span>
            <br>
            <hr>
            <div class="row">
                <b>More Offers</b>
                    RBL Bank Offer
                                Get Extra 10% Off up to Rs 2000 on RBL Bank Credit and Debit Cards. Applicable on purchases above Rs 5000. <br>
                                <span>Code: <b>RBLPF10</b> &nbsp;</span>
                                No Cost EMI Get up to 6 months EMI with 0% interest rate
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-2">
                    Quantity
                </div>
                <div class="col-sm-9">
                    <select name="" id="" >
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                    </select>
                    Only 2 left
                </div>

            </div>
            <hr>
            <div class="row">
                <a href=""  class="form-control col-sm-5 ml-3 text-center p-2" style="background-color:#603813; color: white;">Add To Cart</a>
                    <a href="/buy/{{$products->p_name}}" class="form-control col-sm-5 ml-3 text-center p-2" style="background-color:#603813; color: white;">Buy Now</a>
            </div> <br>
        </div>

    </div>
    <hr>
    <pre class="mt-4 text-justify" style="border-radius: 10px">{{$products->p_desc}}
    </pre>
</div> --}}

@include('includes.footer')
