@extends('books.layout')
        @section('title', 'Detail Book')
        @section('content')
        <div class="container">
            <ul class="breadcrumb-v5">
                <li><a href="{{route('books.index')}}"><i class="fa fa-home"></i></a></li>
                <li><a href="#">Products</a></li>
                <li class="active">New</li>
            </ul>
        </div>
        <!-- End Breadcrumbs v5 -->

        <div class="container">
            <div class="row">
                    <div class="col-md-4 md-margin-bottom-50">
                        <div class="ms-showcase2-template">
                            <img class="full-width img-responsive" src="{{asset($book->getImage())}}" alt="" style="width:70%">
                        </div>
                    </div>

                <div class="col-md-6">
                    <div class="shop-product-heading">
                        <h2>{{$book->getTitle()}}</h2>
                        <ul class="list-inline shop-product-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div><!--/end shop product social-->

                    <ul class="list-inline product-ratings margin-bottom-30">
                        <li><i class="rating-selected fa fa-star"></i></li>
                        <li><i class="rating-selected fa fa-star"></i></li>
                        <li><i class="rating-selected fa fa-star"></i></li>
                        <li><i class="rating fa fa-star"></i></li>
                        <li><i class="rating fa fa-star"></i></li>
                        <li class="product-review-list">
                            <span>(1) <a href="#">Review</a> | <a href="#"> Add Review</a></span>
                        </li>
                    </ul><!--/end shop product ratings-->

                    <p>Integer <strong>dapibus ut elit</strong> non volutpat. Integer auctor purus a lectus suscipit fermentum. Vivamus lobortis nec erat consectetur elementum.</p><br>

                    <ul class="list-inline shop-product-prices margin-bottom-30">
                        <li class="shop-red">{{$book->getPrice()}}</li>
                        <li><small class="shop-bg-red time-day-left">4 days left</small></li>
                    </ul><!--/end shop product prices-->

                    <h3 class="shop-product-title">Author</h3>
                                <span>{{$book->getAuthor()}}</span>


                    <h3 class="shop-product-title">Color</h3>
                    <span>{{$book->getPublisherName()}}</span>


                </div>
            </div><!--/end robw-->
        </div>

    <!--=== End Shop Product ===-->

    <!--=== Content Medium ===-->
    <div class="content-md container">
        <!--=== Product Service ===-->
        <div class="row margin-bottom-60">
            <div class="col-md-4 product-service md-margin-bottom-30">
                <div class="product-service-heading">
                    <i class="fa fa-truck"></i>
                </div>
                <div class="product-service-in">
                    <h3>Free Delivery</h3>
                    <p>Integer mattis lacinia felis vel molestie. Ut eu euismod erat, tincidunt pulvinar semper veliUt porta, leo...</p>
                    <a href="#">+Read More</a>
                </div>
            </div>
            <div class="col-md-4 product-service md-margin-bottom-30">
                <div class="product-service-heading">
                    <i class="icon-earphones-alt"></i>
                </div>
                <div class="product-service-in">
                    <h3>Customer Service</h3>
                    <p>Integer mattis lacinia felis vel molestie. Ut eu euismod erat, tincidunt pulvinar semper veliUt porta, leo...</p>
                    <a href="#">+Read More</a>
                </div>
            </div>
            <div class="col-md-4 product-service">
                <div class="product-service-heading">
                    <i class="icon-refresh"></i>
                </div>
                <div class="product-service-in">
                    <h3>Free Returns</h3>
                    <p>Integer mattis lacinia felis vel molestie. Ut eu euismod erat, tincidunt pulvinar semper veliUt porta, leo...</p>
                    <a href="#">+Read More</a>
                </div>
            </div>
        </div><!--/end row-->
        <!--=== End Product Service ===-->

        <div class="tab-v6">
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#description" role="tab" data-toggle="tab">Description</a></li>
                <li><a href="#reviews" role="tab" data-toggle="tab">Reviews (1)</a></li>
            </ul>

            <div class="tab-content">
                <!-- Description -->
                <div class="tab-pane fade in active" id="description">
                    <div class="row">
                        <div class="col-md-7">
                            <p>Morbi non semper est, eget tincidunt turpis. Vivamus sollicitudin sodales nisi, et venenatis turpis Vivamus sollicitudin ultricies eget. Fusce vitae neque blandit lectus faucibus aliquet nec vel ipsum. Integer mattis lacinia felis vel sollicitudin molestie.</p><br>

                            <h3 class="heading-md margin-bottom-20">Specifies</h3>
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled specifies-list">
                                        <li><i class="fa fa-caret-right"></i>Brand Name: <span>Lacoste</span></li>
                                        <li><i class="fa fa-caret-right"></i>Technics: <span>Computer</span> Knitted</li>
                                        <li><i class="fa fa-caret-right"></i>Sleeve Length: <span>Full</span></li>
                                        <li><i class="fa fa-caret-right"></i>Sleeve Style: <span>Regular</span></li>
                                        <li><i class="fa fa-caret-right"></i>Pattern Type: <span>PAID</span></li>
                                        <li><i class="fa fa-caret-right"></i>Style: <span>Casual</span></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled specifies-list">
                                        <li><i class="fa fa-caret-right"></i>Material: <span>Cotton,Nylon</span></li>
                                        <li><i class="fa fa-caret-right"></i>Item Type: <span>Pullovers</span></li>
                                        <li><i class="fa fa-caret-right"></i>Thickness: <span>Thin</span></li>
                                        <li><i class="fa fa-caret-right"></i>Model Number: <span>TM-11013 </span></li>
                                        <li><i class="fa fa-caret-right"></i>Gender: <span>Men</span></li>
                                        <li><i class="fa fa-caret-right"></i>MATERIAL: <span>80%COTTON+10%NYLON</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End Description -->

                <!-- Reviews -->
                <div class="tab-pane fade" id="reviews">
                    <div class="product-comment margin-bottom-40">
                        <div class="product-comment-in">
                            <img class="product-comment-img rounded-x" src="{{asset('img/team/01.jpg')}}" alt="">
                            <div class="product-comment-dtl">
                                <h4>Mickel <small>22 days ago</small></h4>
                                <p>I like the green colour, it's very likeable and reminds me of Hollister. A little loose though but I am very skinny</p>
                                <ul class="list-inline product-ratings">
                                    <li class="reply"><a href="#">Reply</a></li>
                                    <li class="pull-right">
                                        <ul class="list-inline">
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating fa fa-star"></i></li>
                                            <li><i class="rating fa fa-star"></i></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h3 class="heading-md margin-bottom-30">Add a review</h3>
                    <form action="{{asset('php/demo-contacts-process.php')}}" method="post" id="sky-form3" class="sky-form sky-changes-4">
                                <fieldset>
                                    <div class="margin-bottom-30">
                                        <label class="label-v2">Name</label>
                                        <label class="input">
                                            <input type="text" name="name" id="name">
                                        </label>
                                    </div>

                                    <div class="margin-bottom-30">
                                        <label class="label-v2">Email</label>
                                        <label class="input">
                                            <input type="email" name="email" id="email">
                                        </label>
                                    </div>

                                    <div class="margin-bottom-30">
                                        <label class="label-v2">Review</label>
                                        <label class="textarea">
                                            <textarea rows="7" name="message" id="message"></textarea>
                                        </label>
                                    </div>
                                </fieldset>

                                <footer class="review-submit">
                                    <label class="label-v2">Review</label>
                                    <div class="stars-ratings">
                                        <input type="radio" name="stars-rating" id="stars-rating-5">
                                        <label for="stars-rating-5"><i class="fa fa-star"></i></label>
                                        <input type="radio" name="stars-rating" id="stars-rating-4">
                                        <label for="stars-rating-4"><i class="fa fa-star"></i></label>
                                        <input type="radio" name="stars-rating" id="stars-rating-3">
                                        <label for="stars-rating-3"><i class="fa fa-star"></i></label>
                                        <input type="radio" name="stars-rating" id="stars-rating-2">
                                        <label for="stars-rating-2"><i class="fa fa-star"></i></label>
                                        <input type="radio" name="stars-rating" id="stars-rating-1">
                                        <label for="stars-rating-1"><i class="fa fa-star"></i></label>
                                    </div>
                                    <button type="button" class="btn-u btn-u-sea-shop btn-u-sm pull-right">Submit</button>
                                </footer>
                                </form>
                    </div>
                    <!-- End Reviews -->
                </div>
            </div>
        </div><!--/end container-->
        <!--=== End Content Medium ===-->

        <!--=== Illustration v2 ===-->
        <div class="container">
            <div class="heading heading-v1 margin-bottom-20">
                <h2>Product you may like</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed odio elit, ultrices vel cursus sed, placerat ut leo. Phasellus in magna erat. Etiam gravida convallis augue non tincidunt. Nunc lobortis dapibus neque quis lacinia. Nam dapibus tellus sit amet odio venenatis</p>
            </div>

            <div class="illustration-v2 margin-bottom-60">
                <div class="customNavigation margin-bottom-25">
                    <a class="owl-btn prev rounded-x"><i class="fa fa-angle-left"></i></a>
                    <a class="owl-btn next rounded-x"><i class="fa fa-angle-right"></i></a>
                </div>

                <ul class="list-inline owl-slider-v4">
                    <li class="item">
                        <a href="#"><img class="img-responsive" src="{{asset('img/thumb/09.jpg')}}" alt=""></a>
                    <div class="product-description-v2">
                        <div class="margin-bottom-5">
                            <h4 class="title-price"><a href="#">Double-breasted</a></h4>
                            <span class="title-price">$95.00</span>
                        </div>
                        <ul class="list-inline product-ratings">
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                        </ul>
                    </div>
                </li>
                <li class="item">
                    <a href="#"><img class="img-responsive" src="{{asset('img/thumb/07.jpg')}}" alt=""></a>
                    <div class="product-description-v2">
                        <div class="margin-bottom-5">
                            <h4 class="title-price"><a href="#">Double-breasted</a></h4>
                            <span class="title-price">$60.00</span>
                            <span class="title-price line-through">$95.00</span>
                        </div>
                        <ul class="list-inline product-ratings">
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                        </ul>
                    </div>
                </li>
                <li class="item">
                    <a href="#"><img class="img-responsive" src="{{asset('img/thumb/08.jpg')}}" alt=""></a>
                    <div class="product-description-v2">
                        <div class="margin-bottom-5">
                            <h4 class="title-price"><a href="#">Double-breasted</a></h4>
                            <span class="title-price">$95.00</span>
                        </div>
                        <ul class="list-inline product-ratings">
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                        </ul>
                    </div>
                </li>
                <li class="item">
                    <a href="#"><img class="img-responsive" src="{{asset('img/thumb/06.jpg')}}" alt=""></a>
                    <div class="product-description-v2">
                        <div class="margin-bottom-5">
                            <h4 class="title-price"><a href="#">Double-breasted</a></h4>
                            <span class="title-price">$95.00</span>
                        </div>
                        <ul class="list-inline product-ratings">
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                        </ul>
                    </div>
                </li>
                <li class="item">
                    <a href="#"><img class="img-responsive" src="{{asset('img/thumb/04.jpg')}}" alt=""></a>
                    <div class="product-description-v2">
                        <div class="margin-bottom-5">
                            <h4 class="title-price"><a href="#">Double-breasted</a></h4>
                            <span class="title-price">$95.00</span>
                        </div>
                        <ul class="list-inline product-ratings">
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                        </ul>
                    </div>
                </li>
                <li class="item">
                    <a href="#"><img class="img-responsive" src="{{asset('img/thumb/03.jpg')}}" alt=""></a>
                    <div class="product-description-v2">
                        <div class="margin-bottom-5">
                            <h4 class="title-price"><a href="#">Double-breasted</a></h4>
                            <span class="title-price">$95.00</span>
                        </div>
                        <ul class="list-inline product-ratings">
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--=== End Illustration v2 ===-->

    <!--=== Shop Suvbscribe ===-->
    <div class="shop-subscribe">
        <div class="container">
            <div class="row">
                <div class="col-md-8 md-margin-bottom-20">
                    <h2>subscribe to our weekly <strong>newsletter</strong></h2>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Email your email...">
                        <span class="input-group-btn">
								<button class="btn" type="button"><i class="fa fa-envelope-o"></i></button>
							</span>
                    </div>
                </div>
            </div>
        </div><!--/end container-->
    </div>
   @endsection