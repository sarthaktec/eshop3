<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <base href="/public">  
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />

    <base href="/public">

   </head>
   <body>
      <div class="hero_area">
        @include('home.header');


        <div class="col-sm-6 col-md-4 col-lg-12">
                     <div class="row">
                        <div class="col-6">

                            <div class="img-box">
                            <img src="/product/{{$product->image}}" alt="">
                             </div>
                        </div>
                        <div class="col-6">

                        <div class="detail-box">
                            <p>
                                Catagory:{{$product->catagory}}
                            </p>     
                        <h5 style="padding-top:20px; padding-bottom:20px;">
                        {{$product->title}}
                        </h5>

                        <p>Quantity:{{$product->quantity}}</p>


                            <div class="detail-box " style="padding-top:20px; padding-bottom:20px">
                            <h1>Description:</h1>
                                <p>{{$product->description}}</p>
                            </div>

                        <div class="d-flex">
                        @if($product->discount_price!=null)
                        <h6>
                           Discount Price
                           <br>
                           ${{$product->discount_price}}
                        </h6>

                        <h6 style="text-decoration: line-through; padding-left:10px;">
                        Orignal Price
                        <br>
                           ${{$product->price}}
                        </h6>
                        @else
                        <h6 style="padding-left:10px;">
                        Orignal Price
                        <br>
                           ${{$product->price}}
                        </h6>
                        @endif

                        

                        </div>
                        <a href="" class="btn btn-primary">Add To Cart</a>
                     </div>
                  </div>

                      

                        </div>
                     </div>
               </div>

      
      @include('home.footer');
      <!-- footer end -->

      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>