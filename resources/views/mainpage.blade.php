<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Project</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                        support@email.com
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                        +012-345-6789
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar End -->
        
        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="{{url('index')}} " class="nav-item nav-link active">Home</a>

                             <div class="nav-item dropdown">
                           <a href="{{url('product')}}" class="nav-link dropdown-toggle" data-toggle="dropdown">Products</a>
                            <div class="dropdown-menu">
                                    <a href="{{url('product')}}" class="dropdown-item">Fountain Pen</a>
                                    <a href="{{url('product')}}" class="dropdown-item">Ink</a>
                                    <a href="{{url('product')}}" class="dropdown-item">Refill</a>
                                </div>
                            </div>
                            <a href="{{url('productdetails')}}" class="nav-item nav-link">Product Detail</a>
                            <a href="{{url('cart')}}" class="nav-item nav-link">Cart</a>
                            <a href="{{url('checkout')}}" class="nav-item nav-link">Checkout</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More Pages</a>
                                <div class="dropdown-menu">
                                    <a href="wishlist.html" class="dropdown-item">Wishlist</a>
                                    <a href="{{url('contact')}}" class="dropdown-item">Contact Us</a>
                                </div>
                            </div>
                         
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->     
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.html">
                                <img src="img/FB_IMG_1605022089117.jpg" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            <a href="wishlist.html" class="btn wishlist">
                                <i class="fa fa-heart"></i>
                                <span>(0)</span>
                            </a>
                            <a href="{{url('cart')}}" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>(0)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->   
        <div class="content">
          @yield('content')
        
        </div>

        
        
        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Copyright &copy; <a href="https://htmlcodex.com">HTML Codex</a>. All Rights Reserved</p>
                    </div>

                    <div class="col-md-6 template-by">
                        <p>Template By <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->       
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        <script type="text/javascript">
            var product_total_amt = document.getElementById('product_total_amt');
            var shipping_charge = document.getElementById('shipping_charge');
            var total_cart_amt = document.getElementById('total_cart_amt');
           const decreaseNumber = (itemprice) => {
               var itemprice = document.getElementById(itemprice);
               console.log( itemprice.innerHTML);
               if(itemval.value <= 0){
                itemval.value = 0;
               alert('Negative quantity not allowed');
                }else{
                itemval.value = parseInt(itemval.value) - 1;
                itemval.style.background = '#fff';
                itemval.style.color = '#000';
                itemprice.innerHTML  = parseInt(itemprice.innerHTML) - 99;
                product_total_amt.innerHTML  = parseInt(product_total_amt.innerHTML) - 99;
                total_cart_amt.innerHTML  = parseInt(product_total_amt.innerHTML) + 
                parseInt(shipping_charge.innerHTML);
               }
           }
           const increaseNumber = (itemprice) => {

var itemprice = document.getElementById(itemprice);
// console.log(itemval.value);
if(itemval.value >= 5){
itemval.value = 5;
alert('max 5 allowed');
itemval.style.background = 'red';
itemval.style.color = '#fff';
}else{
itemval.value = parseInt(itemval.value) + 1;
itemprice.innerHTML  = parseInt(itemprice.innerHTML ) + 99;
product_total_amt.innerHTML  = parseInt(product_total_amt.innerHTML) + 99;
total_cart_amt.innerHTML  = parseInt(product_total_amt.innerHTML) + parseInt(shipping_charge.innerHTML);
}
}
        </script>
    </body>
</html>
