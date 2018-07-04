<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>xyz.com</title>
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.bxslider.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="index.html" class="navbar-brand">Demo</a>
                <ul class="nav navbar-nav">
                    <!--Menu Items-->

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Category<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">shirt</a></li>
                            <li><a href="#">Men's Fashion</a></li>
                            <li><a href="#">pants</a></li>
                            <li><a href="#">Toy,baby,kid products</a></li>
                            <li><a href="#">Jeans</a></li>
                            <li><a href="#">Kitchen</a></li>
                            <li><a href="#">Home Decor</a></li>
                            <li><a href="#">Perfumes</a></li>
                            <li><a href="#">Electronic</a></li>
                            <li><a href="#">Furniture</a></li>
                            <li><a href="#">Books</a></li>
                            <li><a href="#">Cosmetics</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">SuperShop<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Oil</a></li>
                            <li><a href="#">Rice</a></li>
                            <li><a href="#">Chips</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Brands<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Shirts</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">Mobiles</a></li>
                            <li><a href="#">Jeans</a></li>
                            <li><a href="#">Glasses</a></li>
                            <li><a href="#">Electronic</a></li>
                            <li><a href="#">TV</a></li>
                            <li><a href="#">Laptop</a></li>
                            <li><a href="#">Others</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-md-5">
                <input type="text" name="Search Product" placeholder="Search for products" class="navbar-form searchBox" /><button class="searchBtn"><i class="fa fa-search"></i></button>
            </div>
            <div class="col-md-3">
                <ul class="nav navbar-nav navbar-left panal">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><button type="button" class="login btn btn-sm btn-lgn text-center" data-toggle="modal" data-target="#details-2">Login</button></li><p class="sn-up">New Customer? <a href="#" class="snup">Sign up</a></p>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">More<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">sell your product</a></li>
                            <li><a href="#">24x7 Customer Care</a></li>
                            <li><a href="#">Fast service</a></li>
                            <li><a href="#">Download App</a></li>
                        </ul>
                    </li>
                    <li class="cart"><a href="#"><i class="fa fa-shopping-cart"> Cart</i></a></li>
                </ul>
            </div>
        </div>
    </div>

</nav>

<!--==Banner / Slider==-->
<div id="home_slider">
    <ul class="bxslider">
        <li><a href="#"><img src="images/image (1).jpg" alt="image 1"></a></li>
        <li><a href="#"><img src="images/image (2).jpg" alt="image 2"></a></li>
        <li><a href="#"><img src="images/image (3).jpg" alt="image 3"></a></li>
        <li><a href="#"><img src="images/image (4).jpg" alt="image 3"></a></li>
        <li><a href="#"><img src="images/image (6).jpg" alt="image 3"></a></li>
    </ul>
</div>

<div class="container-fluid">
    <!-- left sidebar -->

    <div class="col-md-2 deals-clock"><h2 class="name">Deals of the week..!</h2>
        <p class="clock" id="demo"></p>
        <a href="week deals.html"><button>view all</button></a>
    </div>
    <!-- main content -->
    <div class="col-md-8">

        <div class="row">
            <div class="owl-carousel">
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/motorola.jpeg" alt="Levis jeans" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/Lancer Running Shoes.jpeg" alt="" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-4"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/fogg.jpeg" alt="fogg" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-5"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/Fastrack Retro Square Sunglasses  (Black).jpeg" alt="Fastrack" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-6"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/Carpets.jpeg" alt="Carpets" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-7"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/Carrier 1.5 Ton AC.jpeg" alt="Carrier AC" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/caron-original.jpeg" alt="Hand watch" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/lenovo-i5.jpeg" alt="lenovo" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!--row-->
        </div><!--Row-->
    </div><!--col-md-8-->

    <!-- right sidebar -->
    <div class="col-md-2">right sidebar</div>
</div><!--container-fluid-->




<div class="container-fluid">
    <!-- main content -->
    <div class="col-md-12">
        <h2 class="">Deals recommended for you <a href="week deals.html">see all deals</a></h2>
        <div class="row">
            <div class="owl-carousel">
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/acc (2).jpg" alt="Levis jeans" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/caron-original.jpeg" alt="" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/fogg.jpeg" alt="fogg" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/foot (1).jpg" alt="Fastrack" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/Carpets.jpeg" alt="Carpets" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/jawl (5).jpg" alt="Carrier AC" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/motorola.jpeg" alt="Hand watch" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/lenovo-i5.jpeg" alt="lenovo" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!--row-->
        </div><!--Row-->
    </div><!--col-md-8-->
</div><!--container-fluid-->


<div class="container-fluid">
    <!-- left sidebar -->

    <div class="col-md-2 deals-clock"><h2 class="name">Smartphones offer..!</h2>
        <button>View all</button>
    </div>
    <!-- main content -->
    <div class="col-md-8">

        <div class="row">
            <div class="owl-carousel">
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/Mobile (1).jpg" alt="Levis jeans" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/Mobile (2).jpg" alt="" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/Mobile (3).jpg" alt="fogg" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/Mobile (4).jpg" alt="Fastrack" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/Mobile (5).jpg" alt="Carpets" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/Mobile (6).jpg" alt="Carrier AC" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--row-->
        </div><!--Row-->
    </div><!--col-md-8-->

    <!-- right sidebar -->
    <div class="col-md-2">right sidebar</div>
</div><!--container-fluid-->

<div class="container-fluid">

    <!-- main content -->
    <div class="col-md-12">
        <h2 class="">Jewellery's <a href="week deals.html">see all deals</a></h2>
        <div class="row">
            <div class="owl-carousel">
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/jawl (1).jpg" alt="Levis jeans" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/jawl (2).jpg" alt="" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/jawl (3).jpg" alt="fogg" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/jawl (4).jpg" alt="Fastrack" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/jawl (5).jpg" alt="Carpets" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/jawl (6).jpg" alt="Carrier AC" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/jawl (7).jpg" alt="Hand watch" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/jawl (8).jpg" alt="lenovo" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/jawl (9).jpg" alt="lenovo" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/jawl (10).jpg" alt="lenovo" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/jawl (11).jpg" alt="lenovo" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!--row-->
        </div><!--Row-->
    </div><!--col-md-8-->

</div><!--container-fluid-->

<div class="container-fluid">
    <!-- left sidebar -->

    <div class="col-md-2 deals-clock"><h2 class="name">Super Shop..!</h2>
        <p>Delivery in 6 Hours....!</p>
        <button>view all</button>
    </div>
    <!-- main content -->
    <div class="col-md-8">
        <div class="row">
            <div class="owl-carousel">
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/discount (1).jpeg" alt="Levis jeans" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/discount (2).jpeg" alt="" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/discount (3).jpeg" alt="fogg" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/discount (4).jpeg" alt="Fastrack" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/discount (5).jpeg" alt="Carpets" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/discount (6).jpeg" alt="Carrier AC" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--row-->
        </div><!--Row-->
    </div><!--col-md-8-->

    <!-- right sidebar -->
    <div class="col-md-2">right sidebar</div>
</div><!--container-fluid-->

<div class="container-fluid">
    <!-- main content -->
    <div class="col-md-12">
        <h2 class="">Boys fashion with free shipping <a href="week deals.html">see all deals</a></h2>
        <div class="row">
            <div class="owl-carousel">
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/L_price (1).jpeg" alt="Levis jeans" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/L_price (2).jpeg" alt="" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/L_price (3).jpeg" alt="fogg" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/L_price (4).jpeg" alt="Fastrack" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/L_price (5).jpeg" alt="Carpets" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/L_price (6).jpeg" alt="Carrier AC" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/L_price (7).jpeg" alt="Hand watch" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/L_price (8).jpeg" alt="lenovo" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!--row-->
        </div><!--Row-->
    </div><!--col-md-8-->
</div><!--container-fluid-->


<div class="container-fluid">
    <!-- left sidebar -->

    <div class="col-md-2 deals-clock"><h2 class="name">Top Offers..!</h2>
        <button>view all</button>
    </div>
    <!-- main content -->
    <div class="col-md-8">
        <div class="row">
            <div class="owl-carousel">
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/Top (1).jpeg" alt="Levis jeans" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/Top (2).jpeg" alt="" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/Top (3).jpeg" alt="fogg" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/Top (4).jpeg" alt="Fastrack" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/Top (5).jpeg" alt="Carpets" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/Top (6).jpeg" alt="Carrier AC" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!--row-->
        </div><!--Row-->
    </div><!--col-md-8-->

    <!-- right sidebar -->
    <div class="col-md-2">right sidebar</div>
</div><!--container-fluid-->


<div class="container-fluid">
    <!-- main content -->
    <div class="col-md-12">
        <h2 class="">Mobile Accessories <a href="week deals.html">see all deals</a></h2>
        <div class="row">
            <div class="owl-carousel">
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/acc (1).jpg" alt="Levis jeans" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/acc (2).jpg" alt="" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/acc (3).jpg" alt="fogg" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/acc (4).jpg" alt="Fastrack" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/acc (5).jpg" alt="Carpets" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/acc (6).jpg" alt="Carrier AC" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/acc (7).jpg" alt="Hand watch" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/acc (8).jpg" alt="lenovo" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/acc (9).jpg" alt="lenovo" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/acc (10).jpg" alt="lenovo" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!--row-->
        </div><!--Row-->
    </div><!--col-md-8-->
</div><!--container-fluid-->


<div class="container-fluid">
    <!-- left sidebar -->

    <div class="col-md-2 deals-clock"><h2 class="name">Footwears..!</h2>
        <p class="clock" id="demo"></p>
        <button>view all</button>
    </div>
    <!-- main content -->
    <div class="col-md-8">
        <div class="row">
            <div class="owl-carousel">
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/foot (1).jpg" alt="Levis jeans" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/foot (2).jpg" alt="" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/foot (3).jpg" alt="fogg" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/foot (4).jpg" alt="Fastrack" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/foot (5).jpg" alt="Carpets" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/foot (6).jpg" alt="Carrier AC" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>


            </div><!--row-->
        </div><!--Row-->
    </div><!--col-md-8-->

    <!-- right sidebar -->
    <div class="col-md-2">right sidebar</div>
</div><!--container-fluid-->

<div class="container-fluid">
    <!-- main content -->
    <div class="col-md-12">
        <h2 class="">Laptop & Computers <a href="week deals.html">see all deals</a></h2>
        <div class="row">
            <div class="owl-carousel">
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/lp-cm (1).jpeg" alt="Levis jeans" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/lp-cm (2).jpeg" alt="" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/lp-cm (3).jpeg" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/lp-cm (4).jpeg" alt="Fastrack" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/lp-cm (5).jpeg" alt="Carpets" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/lp-cm (6).jpeg" alt="Carrier AC" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/lp-cm (7).jpeg" alt="Hand watch" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/lp-cm (8).jpeg" alt="lenovo" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/lp-cm (9).jpeg" alt="lenovo" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/lp-cm (10).jpeg" alt="lenovo" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!--row-->
        </div><!--Row-->
    </div><!--col-md-8-->
</div><!--container-fluid-->
<div class="container-fluid">
    <!-- left sidebar -->

    <div class="col-md-2 deals-clock"><h2 class="name">Discount For You</h2>
        <button>view all</button>
    </div>
    <!-- main content -->
    <div class="col-md-8">
        <div class="row">
            <div class="owl-carousel">
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/discount (1).jpeg" alt="Levis jeans" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/discount (2).jpeg" alt="" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/discount (3).jpeg" alt="fogg" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/discount (4).jpeg" alt="Fastrack" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/discount (5).jpeg" alt="Carpets" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="prod-box">
                        <img src="images/discount (6).jpeg" alt="Carrier AC" class="img-thumb" />
                        <div class="prod-trans">
                            <div class="prod-features">
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#details-1"><div class="view-button">
                                        <a href="#"><i></i></a>
                                    </div>Quick view</button>
                            </div>
                        </div>
                        <div class="prize">
                            <div class="discount">
                                <p> <span class="rate">Price:</span><s class="ct-price">৳ 750</s><span class="prz">৳ 450</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--row-->
        </div><!--Row-->
    </div><!--col-md-8-->

    <!-- right sidebar -->
    <div class="col-md-2">right sidebar</div>
</div><!--container-fluid-->
<!-- footer -->
<div class="bttm">

    <div class="col-md-4 text-center">
        <h4>Download Our App</h4>
        <a href=""><i class="fa fa-apple"></i></a>
        <a href=""><i class="fa fa-android"></i></a>
    </div>
    <div class="col-md-4 text-center">
        <h4>PAYMENT METHODS & PAYMENT PARTNER</h4>
        <a href="#"><img src="images/bkash.png" class="bkash"></a>
        <a href="#"><i class="fa fa-cc-visa"></i></a>
        <a href="#"><i class="fa fa-money"></i></a>
        <a href="#"><i class="fa fa-cc-mastercard"></i></a>
    </div>
    <div class="col-md-4 text-center">
        <h4>You should know</h4>
        <a href="">Super Shop</a><br>
        <a href="">Fast Service</a><br>
        <a href="">Terms & Conditions</a>
    </div><br><br>

    <div class="container-fluid info">
        <div class="col-md-4 text-center">
            <h4>Get to Know Us</h4>
            <a href="#">About Us</a><br>
            <a href="#">Careers</a><br>
            <a href="#">Gift a Smilet</a>
        </div>
        <div class="col-md-4 text-center">
            <h4>Connect with Us</h4>
            <a href="#">Facebook</a><br>
            <a href="#">Twitter</a><br>
            <a href="#">Instagram</a>
        </div>
        <div class="col-md-4 text-center">
            <h4>Make Money with Us</h4>
            <a href="#">Sell On TrollCart</a><br>
            <a href="#">Advertise Your Products</a><br>
            <a href="#">Become an Affiliate</a><br>
        </div>
    </div>
    <div class="container-fluid dir">
        <div>
            <h4>Online Shopping in Bangladesh</h4>
            <P>Clothes, electronics, accessories - whatever your need for the hour maybe, trollcart, your favorite online shopping site, is sure to spoil you with a wide range of products. You don't have to wait for the weekends to shop as you can shop online on your way back home after work. Almost all popular brands across categories sell their products online, thereby bringing you closer to your preferences. Oh, and let's not forget about the various discounts on these products which make them an offer that is too hard to resist. So, are you all set to head online and shop? Let's take a look at what Trollcart has in store for</P>

        </div>
    </div>
</div>




<div id="scroll-top"><i class="fa fa-chevron-up"></i></div>



<!-- Details Model Products -->
<div class="modal fade details-1" id="details-1" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-body">
            <div class="container-fluid popupBox">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="center-block">
                            <img src="images/motorola.jpeg" alt="Levis Jeans" class="details img-responsive">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h4 class="mld-ttl">Motorola (16 GB)</h4>
                        <p class="mld-price">৳ 10,500/-</p>

                        <form action="add_cart.php" method="post">
                        </form>
                        <button class="btn btn-warning" type="submit"><span class="fa fa-shopping-cart"></span> Add to cart</button>
                        <a href="single_prod.html"><button class="btn btn-success"><span class="fa fa-eye"></span> See details</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="modal fade details-4" id="details-4" tabindex="-1" role="dialog" aria-labelledby="details-4" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-body">
            <div class="container-fluid popupBox">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="center-block">
                            <img src="images/Lancer Running Shoes.jpeg" alt="Levis Jeans" class="detailsh img-responsive">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h4 class="mld-ttl">LQR Shoes</h4>
                        <p class="mld-price">৳ 1,100/-</p>

                        <form action="add_cart.php" method="post">
                        </form>
                        <button class="btn btn-warning" type="submit"><span class="fa fa-shopping-cart"></span> Add to cart</button>
                        <a href="single_prod.html"><button class="btn btn-success"><span class="fa fa-eye"></span> See details</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade details-5" id="details-5" tabindex="-1" role="dialog" aria-labelledby="details-5" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-body">
            <div class="container-fluid popupBox">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="center-block">
                            <img src="images/fogg.jpeg" alt="Levis Jeans" class="details img-responsive">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h4 class="mld-ttl">Fogg Body Spry</h4>
                        <p class="mld-price">৳ 280/-</p>

                        <form action="add_cart.php" method="post">
                        </form>
                        <button class="btn btn-warning" type="submit"><span class="fa fa-shopping-cart"></span> Add to cart</button>
                        <a href="single_prod.html"><button class="btn btn-success"><span class="fa fa-eye"></span> See details</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade details-6" id="details-6" tabindex="-6" role="dialog" aria-labelledby="details-6" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-body">
            <div class="container-fluid popupBox">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="center-block">
                            <img src="images/Fastrack Retro Square Sunglasses  (Black).jpeg" alt="Levis Jeans" class="detailsGls img-responsive">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h4 class="mld-ttl">Fastrack Sunglasses</h4>
                        <p class="mld-price">৳ 450/-</p>

                        <form action="add_cart.php" method="post">
                        </form>
                        <button class="btn btn-warning" type="submit"><span class="fa fa-shopping-cart"></span> Add to cart</button>
                        <a href="single_prod.html"><button class="btn btn-success"><span class="fa fa-eye"></span> See details</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade details-7" id="details-7" tabindex="-6" role="dialog" aria-labelledby="details-7" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-body">
            <div class="container-fluid popupBox">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="center-block">
                            <img src="images/Carpets.jpeg" alt="Levis Jeans" class="details img-responsive">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h4 class="mld-ttl">Royal Carpets</h4>
                        <p class="mld-price">৳ 2,000/-</p>

                        <form action="add_cart.php" method="post">
                        </form>
                        <button class="btn btn-warning" type="submit"><span class="fa fa-shopping-cart"></span> Add to cart</button>
                        <a href="single_prod.html"><button class="btn btn-success"><span class="fa fa-eye"></span> See details</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- login -->
<div class="modal fade details-2" id="details-2" tabindex="-1" role="dialog" aria-labelledby="details-2" aria-hidden="true">
    <div class="modal-dialog">

        <div class="container-fluid tp-cnt">
            <div class="row">

                <div class="col-md-8">
                    <input type="text" name="username" class="logn" placeholder="Enter Email/Mobile number"><br><br>
                    <input type="text" name="password" class="paslogn" placeholder="Enter Password"><a href="#" class="forG">Forget</a><br><br>
                    <button class="ln-prs">Login</button>
                    <br><br>
                    <button type="button" data-toggle="modal" data-target="#details-3" class="nw-prs">New to Site? Sign up</button>
                    <p class="note">We no longer support login via Social accounts.<br>
                        So plz make sure to sign up with E-mail..!!</p>
                </div>
                <div class="col-md-4 rgtsd">
                    <h4>Login</h4>
                    <p>Get your Orders via Login Trollcart and make your own wishlish </p>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- login -->

    <div class="modal fade details-3" id="details-3" tabindex="-1" role="dialog" aria-labelledby="details-3" aria-hidden="true">
        <div class="modal-dialog">

            <div class="container-fluid tp-cnt">
                <div class="row">

                    <div class="col-md-8">
                        <input type="text" name="username" class="logn" placeholder="Enter Email/Mobile number"><br><br>
                        <input type="text" name="password" class="paslogn" placeholder="Enter Password"><a href="#" class="forG">Forget</a><br><br>
                        <button class="ln-prs">Countinue</button>
                        <br><br>
                        <button type="button" data-toggle="modal" data-target="#details-2" class="nw-prs">Already user? Log in</button>
                        <p class="note">We no longer support login via Social accounts.<br>
                            So plz make sure to sign up with E-mail..!!</p>
                    </div>
                    <div class="col-md-4 rgtsd">

                    </div>
                </div>
            </div>
        </div>
    </div><!--Wrpper-->

    <!--MOdel products-->

    <!--MOdel products-->


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>  45
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/in-line.js"></script>




</body>
</html>