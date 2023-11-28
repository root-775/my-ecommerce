    <!-- Preloader start -->

    {{-- <div id="preloader"></div> --}}

    <!-- preloader end -->
    <nav id="top-nav">
        <div class="container ">
            <div class="row header-row">
                <div class="col-lg-2 header-logo">
                    <a href="/"> <img src="{{ asset('assets/img/taoq-logo.png') }}" class="img-fluid" alt="logo"></a>
                </div>
                <div class="col-lg-6 col-6">
                    <form class="form-group my-2 my-lg-0">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..">
                            <div class="input-group-append search_icon">
                                <button class="btn" type="button">
                <i class="fa fa-search"></i>

              </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-6">
                    <ul class="header-icon">
                        <li><span><i class="fa fa-truck"></i> </span><span class="icon-text"><a href="#">Track</a></span>
                        </li>
                        {{-- <li><span><i class="fa fa-heart"></i></span><span class="icon-text"><a href="myWishlist.html">
                Wishlist</a></span></li> --}}
                        <li><span><i class="fa fa-cart-plus"></i></span><span class="icon-text"><a href="cart.html">Cart</a></span>
                        </li>
                        <li><span><i class="fa fa-user"></i> </span><span class="icon-text"><a href="login.html">Profile</a></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbarbg">
        <div class="container">
            <div class="nav-logo">
                <a href="index.html" class="navbar-brand"> <img src="{{ asset('assets/img/taoq-logo.png') }}" class="img-fluid" alt="logo"></a>
            </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobile_nav" aria-controls="mobile_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
        </button>
            <div class="collapse navbar-collapse main_nav" id="mobile_nav">
                <ul class="navbar-nav ">
                </ul>
                <ul class="navbar-nav navbar-light">

                    <li class="nav-item dmenu dropdown">
                        <a class="nav-link selected dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Living</a>
                        <ul class="dropdown-menu sm-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/categoryview/{{'Sofas'}}">Sofas</a></li>
                            <li><a class="dropdown-item" href="/categoryview/{{'Chairs'}}">Chairs</a></li>
                            <li><a class="dropdown-item" href="/categoryview/{{'Tables'}}">Tables</a></li>
                            <li><a class="dropdown-item" href="/categoryview/{{'Flooring'}}">Flooring</a></li>
                            <li><a class="dropdown-item" href="/categoryview/{{'Curtains'}}">Curtains</a></li>
                            <li><a class="dropdown-item" href="/categoryview/{{'Cushion_&_Cover'}}">Cushion & Cover</a></li>
                            <li><a class="dropdown-item" href="/categoryview/{{'Wall_Art'}}">Wall Art</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dmenu dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Bedroom</a>
                        <ul class="dropdown-menu sm-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/categoryview/{{'Beds'}}">Beds</a></li>
                            <li><a class="dropdown-item" href="/categoryview/{{'Mattresses'}}">Mattresses</a></li>
                            <li><a class="dropdown-item" href="/categoryview/{{'Bed_Linen'}}">Bed Linen</a></li>
                            <li><a class="dropdown-item" href="/categoryview/{{'Flooring'}}">Flooring</a></li>
                            <li><a class="dropdown-item" href="/categoryview/{{'Curtainus'}}">Curtains</a></li>
                            <li><a class="dropdown-item" href="/categoryview/{{'Lamps'}}">Lamps</a></li>
                            <li><a class="dropdown-item" href="/categoryview/{{'Kids_Bedroom'}}">Kids-Bedroom</a></li>
                            <li><a class="dropdown-item" href="/categoryview/{{'Mirrors'}}">Mirrors</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dmenu dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Diving</a>
                        <ul class="dropdown-menu sm-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/categoryview/{{'Dining_Table'}}">Dining Table</a></li>
                            <li><a class="dropdown-item" href="/categoryview/{{'Modulor_Kitchen'}}">Modulor Kitchen</a></li>
                            <li><a class="dropdown-item" href="/categoryview/{{'Bar_Furniture'}}">Bar Furniture</a></li>
                            <li><a class="dropdown-item" href="/categoryview/{{'Flooring'}}">Flooring</a></li>
                            <li><a class="dropdown-item" href="/categoryview/{{'Chairs'}}">Chairs</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dmenu dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Storage</a>
                        <ul class="dropdown-menu sm-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/categoryview/{{'Storage'}}">Storage</a></li>
                            <li><a class="dropdown-item" href="/categoryview/{{'Modulor_Wardrobe'}}">Modulor Wardrobe</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dmenu dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Lights</a>
                        <ul class="dropdown-menu sm-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/categoryview/{{'Wall_Lights'}}">Wall Lights</a></li>
                            <li><a class="dropdown-item" href="/categoryview/{{'Lamps'}}">Lamps</a></li>
                        </ul>
                    </li>


                    <li class="nav-item dmenu dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Outdoors</a>
                        <ul class="dropdown-menu sm-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/categoryview/{{'Home_Garden'}}">Home Garden</a></li>
                            <li><a class="dropdown-item" href="/categoryview/{{'Outdoors_Light'}}">Outdoors Light</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contactus.html">Contact Us</a>
                    </li>

                    <!-- <li class="nav-item dmenu dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu sm-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="checkout.html">Checkout</a>
                        <a class="dropdown-item" href="productList.html">Product List</a>
                        <a class="dropdown-item" href="help.html">Help</a>
                        <a class="dropdown-item" href="forgetPassword.html">Forget Password</a>
                    </div>
                </li> -->

                </ul>
            </div>
        </div>
    </nav>
    <button id="sidebar_toggle" class="toggle_button"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></i></button>
