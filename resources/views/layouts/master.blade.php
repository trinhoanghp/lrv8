
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="x-ua-compatible" content="ie=edge">
<!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Favicons Icon -->
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<title>  @yield('title')</title>
<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
<link rel="stylesheet" type="text/css" href="public/css/jquery.mobile-menu.css">
<link rel="stylesheet" type="text/css" href="public/css/style.css" media="all">
<link rel="stylesheet" type="text/css" href="public/css/revslider.css">
<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600,800,400' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
</head>
<body class="cms-index-index cms-home-page shopping-cart-page">
<div id="page"> 
  <!-- Header -->
  <header>
    <div class="header-container">
      <div class="container">
        <div class="row"> 
          <!-- Header Language -->
          <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6 pull-left">
            <div class="dropdown block-language-wrapper"><a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle" href="#"><img src="http://htmldemo.magikthemes.com/ecommerce/linea-html-template/blue/images/english.png" alt="English">English <span class="caret"></span> </a>
              <ul class="dropdown-menu" role="menu">
                <li role="presentation"><a href="#"><img src="http://htmldemo.magikthemes.com/ecommerce/linea-html-template/blue/images/english.png" alt="English">English</a></li>
                <li role="presentation"><a href="#"><img src="http://htmldemo.magikthemes.com/ecommerce/linea-html-template/blue/images/francais.png" alt="French">French</a></li>
                <li role="presentation"><a href="#"><img src="http://htmldemo.magikthemes.com/ecommerce/linea-html-template/blue/images/german.png" alt="German">German</a></li>
              </ul>
            </div>
            <!-- End Header Language --> 
            <!-- Header Currency -->
            <div class="dropdown block-currency-wrapper"> <a role="button" data-toggle="dropdown" data-target="#" class="block-currency dropdown-toggle" href="#"> USD <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li role="presentation"><a href="#">$ - Dollar</a></li>
                <li role="presentation"><a href="#">£ - Pound</a></li>
                <li role="presentation"><a href="#">€ - Euro</a></li>
              </ul>
            </div>
            <!-- End Header Currency -->
            <div class="welcome-msg">Welcome to website!</div>
          </div>
          <!-- Header Top Links -->
          <div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 pull-right hidden-xs">
            <div class="toplinks">
              <div class="links">
                @if(!auth('cus')->check())
                <div class="myaccount"><a title="My Account" href="{{ route('home.login')}}"><span class="hidden-xs">My Account</span></a> </div>
                <div class="check"><a title="Checkout" href="{{ route('home.login')}}"><span class="hidden-xs">Checkout</span></a> </div>
                @else
                <div class="myaccount"><a title="My Account" href="{{ route('home.account')}}"><span class="hidden-xs">My Account</span></a> </div>
                <div class="check"><a title="Checkout" href="checkout.html"><span class="hidden-xs">Checkout</span></a> </div>
                @endif
                <div class="check"><a title="Checkout" href="wishlist.html"><span class="hidden-xs">Wishlist</span></a> </div>
                <div class="demo"><a title="Blog" href="blog.html"><span class="hidden-xs">Blog</span></a> </div>
                <!-- Header Company -->
                <div class="dropdown block-company-wrapper hidden-xs"> <a role="button" data-toggle="dropdown" data-target="#" class="block-company dropdown-toggle" href="#"> Company <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li role="presentation"><a href="about_us.html"> About Us </a></li>
                    <li role="presentation"><a href="#"> Customer Service </a></li>
                    <li role="presentation"><a href="#"> Privacy Policy </a></li>
                    <li role="presentation"><a href="sitemap.html">Site Map </a></li>
                    <li role="presentation"><a href="#">Search Terms </a></li>
                    <li role="presentation"><a href="#">Advanced Search </a></li>
                  </ul>
                </div>
                <!-- End Header Company -->
                @if(auth('cus')->check())
                <div class=""><a href="{{ route('home.logout')}}"><span class="hidden-xs">Log Out</span></a> </div>
                @else
             
                <div class="login"><a href="{{ route('home.login')}}"><span class="hidden-xs">Log In</span></a> </div>
                @endif
              </div>
            </div>
            <!-- End Header Top Links --> 
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 logo-block"> 
          <!-- Header Logo -->
          <div class="logo"> <a title="Linea HTML Template" href="{{ route('home.index')}}"><img alt="Linea HTML" src="http://htmldemo.magikthemes.com/ecommerce/linea-html-template/blue/images/logo.png"> </a> </div>
          <!-- End Header Logo --> 
        </div>
        <div class="col-lg-7 col-md-6 col-sm-6 col-xs-3 hidden-xs category-search-form">
          <div class="search-box">
            <form id="search_mini_form" action="result/" method="get">
              <!-- Autocomplete End code -->
              <input id="search" type="text" name="q" value="Search entire store here..." class="searchbox" maxlength="128">
              <button type="submit" title="Search" class="search-btn-bg" id="submit-button"></button>
            </form>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 card_wishlist_area">
          <div class="mm-toggle-wrap">
            <div class="mm-toggle"><i class="fa fa-align-justify"></i><span class="mm-label">Menu</span> </div>
          </div>
          <div class="top-cart-contain" id="top-cart-contain"> 
            <!-- Top Cart -->
            <div class="mini-cart">
              <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="shopping_cart.html"><span class="price hidden-xs">Shopping Cart</span> <span class="cart_count hidden-xs">2 Items/ $4580</span> </a> </div>
              <div>
                <div class="top-cart-content" id="top-cart-content"> 
                  <!--block-subtitle-->
                  <ul class="mini-products-list" id="cart-sidebar">
                    <li class="item first">
                      <div class="item-inner"> <a class="product-image" title="Retis lapen casen" href="#l"><img alt="Retis lapen casen" src="http://htmldemo.magikthemes.com/ecommerce/linea-html-template/blue/products-images/product4.jpg"> </a>
                        <div class="product-details">
                          <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                          <!--access--><strong>1</strong> x <span class="price">$179.99</span>
                          <p class="product-name"><a href="#">Retis lapen casen...</a> </p>
                        </div>
                      </div>
                    </li>
                    <li class="item last">
                      <div class="item-inner"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"><img alt="Retis lapen casen" src="http://htmldemo.magikthemes.com/ecommerce/linea-html-template/blue/products-images/product3.jpg"> </a>
                        <div class="product-details">
                          <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                          <!--access--><strong>1</strong> x <span class="price">$80.00</span>
                          <p class="product-name"><a href="#">Retis lapen casen...</a> </p>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <!--actions-->
                  <div class="actions">
                    <button class="btn-checkout" title="Checkout" type="button"><span>Checkout</span> </button>
                    <a href="shopping_cart.html" class="view-cart"><span>View Cart</span></a> </div>
                </div>
              </div>
            </div>
            <!-- Top Cart -->
            
          </div>
          <!-- mgk wishlist --> 
        </div>
      </div>
    </div>
    <nav class="hidden-xs">
      <div class="nav-container">
        <div class="col-md-3 col-xs-12 col-sm-4">
          <div class="mega-container visible-lg visible-md visible-sm">
            <div class="navleft-container">
              <div class="mega-menu-title" id="mega-menu-title">
                <h3><i class="fa fa-navicon"></i> All Categories</h3>
              </div>
              <div class="mega-menu-category" id="mega-menu-category">
                <ul class="nav">
                  <li><a href="#"><i class="fa fa-gift"></i> Women</a>
                    <div class="wrap-popup">
                      <div class="popup">
                        <div class="row">
                          <div class="col-md-4 col-sm-6">
                            <h3>Clothing</h3>
                            <ul class="nav">
                              <li><a href="grid.html"><span>Western Wear</span></a></li>
                              <!--level2-->
                              <li><a href="grid.html"><span>Night Wear</span></a></li>
                              <!--level2-->
                              <li><a href="grid.html"><span>Ethnic Wear</span></a></li>
                              <!--level2-->
                              <li><a href="grid.html"><span>Designer Wear</span></a></li>
                              <!--level2-->
                            </ul>
                            <br>
                            <h3>Shoes</h3>
                            <ul class="nav">
                              <li><a href="grid.html">Flat Shoes</a></li>
                              <li><a href="grid.html">Flat Sandals</a></li>
                              <li><a href="grid.html">Boots</a></li>
                              <li><a href="grid.html">Heels</a></li>
                            </ul>
                          </div>
                          <div class="col-md-4 col-sm-6 has-sep">
                            <h3>Jwellery</h3>
                            <ul class="nav">
                              <li><a href="grid.html">Bracelets</a></li>
                              <li><a href="grid.html">Necklaces &amp; Pendent</a></li>
                              <li><a href="grid.html">Pendants</a></li>
                              <li><a href="grid.html">Pins &amp; Brooches</a></li>
                            </ul>
                            <br>
                            <h3>Swimwear</h3>
                            <ul class="nav">
                              <li><a href="grid.html">Swimsuits</a></li>
                              <li><a href="grid.html">Beach Clothing</a></li>
                              <li><a href="grid.html">Clothing</a></li>
                              <li><a href="grid.html">Bikinis</a></li>
                            </ul>
                          </div>
                          <div class="col-md-4 has-sep hidden-sm">
                            <div class="custom-menu-right">
                              <div class="box-banner media">
                                <div class="add-right"><a href="#"><img src="http://htmldemo.magikthemes.com/ecommerce/linea-html-template/blue/images/menu-img1.jpg" alt="image not"></a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li><a href="#"><i class="fa fa-suitcase"></i> Men</a>
                    <div class="wrap-popup">
                      <div class="popup">
                        <div class="row">
                          <div class="col-md-4 col-sm-6">
                            <h3>Clothing</h3>
                            <ul class="nav">
                              <li><a href="grid.html">Casual Dresses</a></li>
                              <li><a href="grid.html">Evening</a></li>
                              <li><a href="grid.html">Designer</a></li>
                              <li><a href="grid.html">Party</a></li>
                            </ul>
                            <br>
                            <h3>Sunglasses</h3>
                            <ul class="nav">
                              <li><a href="grid.html"><span>Ray Ban</span></a></li>
                              <li><a href="grid.html"><span>Fasttrack</span></a></li>
                              <li><a href="grid.html"><span>Police</span></a></li>
                              <li><a href="grid.html"><span>Oakley</span></a></li>
                            </ul>
                          </div>
                          <div class="col-md-4 col-sm-6 has-sep">
                            <h3>Watches</h3>
                            <ul class="nav">
                              <li><a href="grid.html"><span>Fasttrack</span></a></li>
                              <li><a href="grid.html"><span>Casio</span></a></li>
                              <li><a href="grid.html"><span>Titan</span></a></li>
                              <li><a href="grid.html"><span>Tommy-Hilfiger</span></a></li>
                            </ul>
                            <br>
                            <h3>Shoes</h3>
                            <ul class="nav">
                              <li><a href="grid.html"><span>Sport Shoes</span></a></li>
                              <li><a href="grid.html"><span>Casual Shoes</span></a></li>
                              <li><a href="grid.html"><span>Leather Shoes</span></a></li>
                              <li><a href="grid.html"><span>Canvas shoes</span></a></li>
                            </ul>
                          </div>
                          <div class="col-md-4 has-sep hidden-sm">
                            <div class="custom-menu-right">
                              <div class="box-banner media">
                                <div class="add-desc">
                                  <h3>Glass<br>
                                    collection </h3>
                                  <div class="price-sale">2016</div>
                                  <a href="#">Shopping Now</a> </div>
                                <div class="add-right"><img src="http://htmldemo.magikthemes.com/ecommerce/linea-html-template/blue/images/menu-img2.jpg" alt=""></div>
                              </div>
                              <div class="box-banner media">
                                <div class="add-desc">
                                  <h3>Save up to</h3>
                                  <div class="price-sale">70 <sup>%</sup><sub>off</sub></div>
                                  <a href="#">Shopping Now</a> </div>
                                <div class="add-right"><img src="http://htmldemo.magikthemes.com/ecommerce/linea-html-template/blue/images/menu-img3.jpg" alt=""></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="nosub"><a href="#"><i class="fa fa-camera"></i> Electronics</a></li>
                  <li class="nosub"><a href="#"><i class="fa fa-bed"></i> Furniture</a></li>
                  <li class="nosub"><a href="#"><i class="fa fa-child"></i> Baby & Kids</a></li>
                  <li class="more-menu"> <a href="#"><i class="fa fa-soccer-ball-o"></i> Game &amp; Sport</a>
                    <div class="wrap-popup column1">
                      <div class="popup">
                        <ul class="nav">
                          <li><a href="grid.html">Accessories</a></li>
                          <li><a href="grid.html">Hats and Gloves</a></li>
                          <li><a href="grid.html">Lifestyle</a></li>
                          <li><a href="grid.html">Bras</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="more-menu"> <a href="#"><i class="fa fa-archive"></i> Accessories</a>
                    <div class="wrap-popup column1">
                      <div class="popup">
                        <ul class="nav">
                          <li><a href="grid.html"> Wallets </a></li>
                          <li><a href="grid.html"> Laptop Bags</a></li>
                          <li><a href="grid.html"> Belts </a></li>
                          <li><a href="grid.html"> Bakpacks </a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="nosub"><a href="#"><i class="fa fa-shopping-basket"></i> Other</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- features box -->
        <div class="our-features-box hidden-xs">
          <div class="features-block">
            <div class="col-lg-7 col-md-9 col-xs-12 col-sm-8 offer-block">
              <div class="feature-box first">
                <div class="content">
                  <h3>Free Shipping Worldwide </h3>
                </div>
              </div>
              <span class="separator">/</span>
              <div class="feature-box">
                <div class="content">
                  <h3>Money Back Guarantee</h3>
                </div>
              </div>
              <span class="separator">/</span>
              <div class="feature-box last">
                <div class="content">
                  <h3>Hotline  +(888) 123-4567</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-1 col-sm-2 hidden-sm hidden-md"><span class="offer-label">Offer Zone</span></div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- end header -->
   @yield('main')
  <!-- Footer -->
  <footer class="footer">
    <div class="newsletter-wrap">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="newsletter">
              <form>
                <div>
                  <h4><span>newsletter</span></h4>
                  <input type="text" placeholder="Enter your email address" class="input-text" title="Sign up for our newsletter" id="newsletter1" name="email">
                  <button class="subscribe" title="Subscribe" type="submit"><span>Subscribe</span></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--newsletter-->
    <div class="footer-middle">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="footer-column pull-left">
              <h4>Shopping Guide</h4>
              <ul class="links">
                <li><a href="blog.html" title="How to buy">Blog</a></li>
                <li><a href="faq.html" title="FAQs">FAQs</a></li>
                <li><a href="#" title="Payment">Payment</a></li>
                <li><a href="#" title="Shipment">Shipment</a></li>
                <li><a href="#" title="Where is my order?">Where is my order?</a></li>
                <li><a href="#" title="Return policy">Return policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="footer-column pull-left">
              <h4>Style Advisor</h4>
              <ul class="links">
                <li><a href="login.html" title="Your Account">Your Account</a></li>
                <li><a href="#" title="Information">Information</a></li>
                <li><a href="#" title="Addresses">Addresses</a></li>
                <li><a href="#" title="Addresses">Discount</a></li>
                <li><a href="#" title="Orders History">Orders History</a></li>
                <li><a href="#" title="Order Tracking">Order Tracking</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="footer-column pull-left">
              <h4>Information</h4>
              <ul class="links">
                <li><a href="sitemap.html" title="Site Map">Site Map</a></li>
                <li><a href="#" title="Search Terms">Search Terms</a></li>
                <li><a href="#" title="Advanced Search">Advanced Search</a></li>
                <li><a href="about_us.html" title="About Us">About Us</a></li>
                <li><a href="contact_us.html" title="Contact Us">Contact Us</a></li>
                <li><a href="#" title="Suppliers">Suppliers</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <h4>contact us</h4>
            <div class="contacts-info">
              <address>
              <i class="add-icon">&nbsp;</i>123 Main Street, Anytown, <br>
              &nbsp;CA 12345  USA
              </address>
              <div class="phone-footer"><i class="phone-icon">&nbsp;</i> +1 800 123 1234</div>
              <div class="email-footer"><i class="email-icon">&nbsp;</i> <a href="mailto:abc@magikcommerce.com">abc@magikcommerce.com</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6">
            <div class="social">
              <ul>
                <li class="fb"><a href="#"></a></li>
                <li class="tw"><a href="#"></a></li>
                <li class="googleplus"><a href="#"></a></li>
                <li class="rss"><a href="#"></a></li>
                <li class="pintrest"><a href="#"></a></li>
                <li class="linkedin"><a href="#"></a></li>
                <li class="youtube"><a href="#"></a></li>
              </ul>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6">
            <div class="payment-accept"> <img src="http://htmldemo.magikthemes.com/ecommerce/linea-html-template/blue/images/payment-1.png" alt=""> <img src="http://htmldemo.magikthemes.com/ecommerce/linea-html-template/blue/images/payment-2.png" alt=""> <img src="http://htmldemo.magikthemes.com/ecommerce/linea-html-template/blue/images/payment-3.png" alt=""> <img src="http://htmldemo.magikthemes.com/ecommerce/linea-html-template/blue/images/payment-4.png" alt=""> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-5 col-xs-12 coppyright"> &copy; 2019 Magikcommerce. All Rights Reserved.</div>
          <div class="col-sm-7 col-xs-12 company-links">
            <ul class="links">
              <li><a href="#" title="Magento Themes">Magento Themes</a></li>
              <li><a href="#" title="Premium Themes">Premium Themes</a></li>
              <li><a href="#" title="Service Packs">Service Packs</a></li>
              <li class="last"><a href="#" title="Extensions &amp; Plugins">Extensions &amp; Plugins</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer --> 
</div>
<!-- mobile menu -->
<div id="mobile-menu">
  <ul>
    <li>
      <div class="mm-search">
        <form id="search1" name="search">
          <div class="input-group">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> </button>
            </div>
            <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term" id="srch-term">
          </div>
        </form>
      </div>
    </li>
    <li><a href="index.html">Home</a>
      <ul>
        <li><a href="../emrald/newsletter.html">Home Version 1</a></li>
        <li><a href="newsletter.html">Home Version 2</a></li>
        <li><a href="../green/newsletter.html">Home Version 3</a></li>
        <li><a href="../yellow/newsletter.html">Home Version 4</a></li>
      </ul>
    </li>
    <li><a href="#">Pages</a>
      <ul>
        <li><a href="grid.html">Grid</a></li>
        <li><a href="list.html">List</a></li>
        <li><a href="product_detail.html">Product Detail</a></li>
        <li><a href="shopping_cart.html">Shopping Cart</a></li>
        <li><a href="checkout.html">Checkout</a></li>
        <li><a href="wishlist.html">Wishlist</a></li>
        <li><a href="dashboard.html">Dashboard</a></li>
        <li><a href="multiple_addresses.html">Multiple Addresses</a></li>
        <li><a href="about_us.html">About us</a></li>
        <li><a href="blog.html">Blog</a>
          <ul>
            <li><a href="blog-detail.html">Blog Detail</a></li>
          </ul>
        </li>
        <li><a href="contact_us.html">Contact us</a></li>
        <li><a href="404error.html">404 Error Page</a></li>
      </ul>
    </li>
    <li><a href="#">Women</a>
      <ul>
        <li><a href="#">Stylish Bag</a>
          <ul>
            <li><a href="grid.html">Clutch Handbags</a></li>
            <li><a href="grid.html">Diaper Bags</a></li>
            <li><a href="grid.html">Bags</a></li>
            <li><a href="grid.html">Hobo handbags</a></li>
          </ul>
        </li>
        <li><a href="grid.html">Material Bag</a>
          <ul>
            <li><a href="grid.html">Beaded Handbags</a></li>
            <li><a href="grid.html">Fabric Handbags</a></li>
            <li><a href="grid.html">Handbags</a></li>
            <li><a href="grid.html">Leather Handbags</a></li>
          </ul>
        </li>
        <li><a href="grid.html">Shoes</a>
          <ul>
            <li><a href="grid.html">Flat Shoes</a></li>
            <li><a href="grid.html">Flat Sandals</a></li>
            <li><a href="grid.html">Boots</a></li>
            <li><a href="grid.html">Heels</a></li>
          </ul>
        </li>
        <li><a href="grid.html">Jwellery</a>
          <ul>
            <li><a href="grid.html">Bracelets</a></li>
            <li><a href="grid.html">Necklaces &amp; Pendent</a></li>
            <li><a href="grid.html">Pendants</a></li>
            <li><a href="grid.html">Pins &amp; Brooches</a></li>
          </ul>
        </li>
        <li><a href="grid.html">Dresses</a>
          <ul>
            <li><a href="grid.html">Casual Dresses</a></li>
            <li><a href="grid.html">Evening</a></li>
            <li><a href="grid.html">Designer</a></li>
            <li><a href="grid.html">Party</a></li>
          </ul>
        </li>
        <li><a href="grid.html">Swimwear</a>
          <ul>
            <li><a href="grid.html">Swimsuits</a></li>
            <li><a href="grid.html">Beach Clothing</a></li>
            <li><a href="grid.html">Clothing</a></li>
            <li><a href="grid.html">Bikinis</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="grid.html">Men</a>
      <ul>
        <li><a href="grid.html">Shoes</a>
          <ul class="level1">
            <li class="level2"><a href="grid.html">Sport Shoes</a></li>
            <li class="level2"><a href="grid.html">Casual Shoes</a></li>
            <li class="level2"><a href="grid.html">Leather Shoes</a></li>
            <li class="level2"><a href="grid.html">canvas shoes</a></li>
          </ul>
        </li>
        <li><a href="grid.html">Dresses</a>
          <ul class="level1">
            <li class="level2"><a href="grid.html">Casual Dresses</a></li>
            <li class="level2"><a href="grid.html">Evening</a></li>
            <li class="level2"><a href="grid.html">Designer</a></li>
            <li class="level2"><a href="grid.html">Party</a></li>
          </ul>
        </li>
        <li><a href="grid.html">Jackets</a>
          <ul class="level1">
            <li class="level2"><a href="grid.html">Coats</a></li>
            <li class="level2"><a href="grid.html">Formal Jackets</a></li>
            <li class="level2"><a href="grid.html">Leather Jackets</a></li>
            <li class="level2"><a href="grid.html">Blazers</a></li>
          </ul>
        </li>
        <li><a href="#.html">Watches</a>
          <ul class="level1">
            <li class="level2"><a href="grid.html">Fasttrack</a></li>
            <li class="level2"><a href="grid.html">Casio</a></li>
            <li class="level2"><a href="grid.html">Titan</a></li>
            <li class="level2"><a href="grid.html">Tommy-Hilfiger</a></li>
          </ul>
        </li>
        <li><a href="grid.html">Sunglasses</a>
          <ul class="level1">
            <li class="level2"><a href="grid.html">Ray Ban</a></li>
            <li class="level2"><a href="grid.html">Fasttrack</a></li>
            <li class="level2"><a href="grid.html">Police</a></li>
            <li class="level2"><a href="grid.html">Oakley</a></li>
          </ul>
        </li>
        <li><a href="grid.html">Accesories</a>
          <ul class="level1">
            <li class="level2"><a href="grid.html">Backpacks</a></li>
            <li class="level2"><a href="grid.html">Wallets</a></li>
            <li class="level2"><a href="grid.html">Laptops Bags</a></li>
            <li class="level2"><a href="grid.html">Belts</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="grid.html">Electronics</a>
      <ul>
        <li><a href="grid.html"><span>Mobiles</span></a>
          <ul>
            <li><a href="grid.html"><span>Samsung</span></a></li>
            <li><a href="grid.html"><span>Nokia</span></a></li>
            <li><a href="grid.html"><span>IPhone</span></a></li>
            <li><a href="grid.html"><span>Sony</span></a></li>
          </ul>
        </li>
        <li><a href="grid.html"><span>Accesories</span></a>
          <ul>
            <li><a href="grid.html"><span>Mobile Memory Cards</span></a></li>
            <li><a href="grid.html"><span>Cases &amp; Covers</span></a></li>
            <li><a href="grid.html"><span>Mobile Headphones</span></a></li>
            <li><a href="grid.html"><span>Bluetooth Headsets</span></a></li>
          </ul>
        </li>
        <li><a href="grid.html"><span>Cameras</span></a>
          <ul>
            <li><a href="grid.html"><span>Camcorders</span></a></li>
            <li><a href="grid.html"><span>Point &amp; Shoot</span></a></li>
            <li><a href="grid.html"><span>Digital SLR</span></a></li>
            <li><a href="grid.html"><span>Camera Accesories</span></a></li>
          </ul>
        </li>
        <li><a href="grid.html"><span>Audio &amp; Video</span></a>
          <ul>
            <li><a href="grid.html"><span>MP3 Players</span></a></li>
            <li><a href="grid.html"><span>IPods</span></a></li>
            <li><a href="grid.html"><span>Speakers</span></a></li>
            <li><a href="grid.html"><span>Video Players</span></a></li>
          </ul>
        </li>
        <li><a href="grid.html"><span>Computer</span></a>
          <ul>
            <li><a href="grid.html"><span>External Hard Disk</span></a></li>
            <li><a href="grid.html"><span>Pendrives</span></a></li>
            <li><a href="grid.html"><span>Headphones</span></a></li>
            <li><a href="grid.html"><span>PC Components</span></a></li>
          </ul>
        </li>
        <li><a href="grid.html"><span>Appliances</span></a>
          <ul>
            <li><a href="grid.html"><span>Vaccum Cleaners</span></a></li>
            <li><a href="grid.html"><span>Indoor Lighting</span></a></li>
            <li><a href="grid.html"><span>Kitchen Tools</span></a></li>
            <li><a href="grid.html"><span>Water Purifier</span></a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="grid.html">Furniture</a>
      <ul>
        <li><a href="grid.html">Living Room</a>
          <ul>
            <li><a href="grid.html">Racks &amp; Cabinets</a></li>
            <li><a href="grid.html">Sofas</a></li>
            <li><a href="grid.html">Chairs</a></li>
            <li><a href="grid.html">Tables</a></li>
          </ul>
        </li>
        <li><a href="grid.html">Dining &amp; Bar</a>
          <ul>
            <li><a href="grid.html">Dining Table Sets</a></li>
            <li><a href="grid.html">Serving Trolleys</a></li>
            <li><a href="grid.html">Bar Counters</a></li>
            <li><a href="grid.html">Dining Cabinets</a></li>
          </ul>
        </li>
        <li><a href="grid.html">Bedroom</a>
          <ul>
            <li><a href="grid.html">Beds</a></li>
            <li><a href="grid.html">Chest of Drawers</a></li>
            <li><a href="grid.html">Wardrobes &amp; Almirahs</a></li>
            <li><a href="grid.html">Nightstands</a></li>
          </ul>
        </li>
        <li><a href="grid.html">Kitchen</a>
          <ul>
            <li><a href="grid.html">Kitchen Racks</a></li>
            <li><a href="grid.html">Kitchen Fillings</a></li>
            <li><a href="grid.html">Wall Units</a></li>
            <li><a href="grid.html">Benches &amp; Stools</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="grid.html">Kids</a></li>
    <li><a href="contact-us.html">Contact Us</a></li>
  </ul>
  <div class="top-links">
    <ul class="links">
      <li><a title="My Account" href="login.html">My Account</a></li>
      <li><a title="Wishlist" href="wishlist.html">Wishlist</a></li>
      <li><a title="Checkout" href="checkout.html">Checkout</a></li>
      <li><a title="Blog" href="blog.html"><span>Blog</span></a></li>
      <li class="last"><a title="Login" href="login.html"><span>Login</span></a></li>
    </ul>
  </div>
</div>
<!-- JavaScript --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script> 
<script src="public/js/revslider.js"></script> 
<script src="public/js/common.js"></script>  
 


</body>
</html>
