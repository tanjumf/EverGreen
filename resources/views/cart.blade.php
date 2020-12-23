@extends('mainpage')
@section('content')
  <!-- Bottom Bar Start -->
  
        <!-- Bottom Bar End -->
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html#">Home</a></li>
                    <li class="breadcrumb-item"><a href="product-list.html#">Products</a></li>
                    <li class="breadcrumb-item active">Cart</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Cart Start -->
        <div class="cart-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart-page-inner">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">
                                        <tr>
                                            <td>
                                                <div class="img">
                                                    <a href="#"><img src="img/facebook_1605039347253_6732022954344209342.jpg" alt="Image"></a>
                                                    <p>Parker Pen</p>
                                                </div>
                                            </td>
                                            <td>$99</td>
                                            <td>
                                                <div class="qty">
                                                    <button class="btn-minus" onclick="decreaseNumber('itemval')"><i class="fa fa-minus"></i></button>
                                                    <input type="text" value="0">
                                                    <button class="btn-plus" onclick="increaseNumber('itemval')"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </td>
                                            <td>$<span id="itemval">0.00</span></td>
                                            <td><button><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="img">
                                                    <a href="#"><img src="img/facebook_1605039474561_6732023488313102571.jpg" alt="Image"></a>
                                                    <p>Lamy Safary</p>
                                                </div>
                                            </td>
                                            <td>$99</td>
                                            <td>
                                                <div class="qty">
                                                    <button class="btn-minus" onclick="decreaseNumber('itemval1')"><i class="fa fa-minus"></i></button>
                                                    <input type="text" value="0">
                                                    <button class="btn-plus" onclick="increaseNumber('itemval1')"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </td>
                                             <td>$<span id="itemval1">0.00</span></td>
                                            <td><button><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                      
                                        

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart-page-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="coupon">
                                        <input type="text" placeholder="Coupon Code">
                                        <button>Apply Code</button>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="cart-summary">
                                       <h1>Cart Summary</h1>
                                        <div class="price_indiv d-flex justify-content-between">
                                           <p>Product amount</p>
                                           <p>$<span id="product_total_amt">0.00</span></p>
                                        </div>
                                    <div class="price_indiv d-flex justify-content-between">
                                      <p>Delivery Charge</p>
                                      <p>$<span id="shipping_charge">80.0</span></p>
                                    </div>
                                       <hr />
                                    <div class="total-amt d-flex justify-content-between font-weight-bold">
                                        <p>The total amount</p>
                                        <p>$<span id="total_cart_amt">80.00</span></p>
                                    </div>
                                        <div class="cart-btn">
                                        <a href="{{url('checkout')}}" class="btn add-to-cart">Update cart</a>
                                           <!-- <button class="btn btn-primary text-uppercase" type="button"><a href="{{url('index')}}"></a>Checkout</button> -->
                                           <a href="{{url('checkout')}}" class="btn add-to-cart">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart End -->
        
        <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Get in Touch</h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>123 E Store, Los Angeles, USA</p>
                                <p><i class="fa fa-envelope"></i>email@example.com</p>
                                <p><i class="fa fa-phone"></i>+123-456-7890</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Follow Us</h2>
                            <div class="contact-info">
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Company Info</h2>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Purchase Info</h2>
                            <ul>
                                <li><a href="#">Pyament Policy</a></li>
                                <li><a href="#">Shipping Policy</a></li>
                                <li><a href="#">Return Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
               
            </div>
        </div>
        <!-- Footer End -->
@endsection