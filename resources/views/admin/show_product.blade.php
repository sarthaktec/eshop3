<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    @include('admin.css');
    <style type="text/css">

        .div_center{
            text-align:center;
            padding-top:40px;
        }

        .h2-font{
            font-size:40px;
            padding-bottom:40px;
        }

        .input_color{
            color: #000;
        }
        
        .center{
            margin:auto;
            width:50%;
            text-align:center;
            margin-top:30px;
            border:3px solid #cfcfcf;
        }

        .image_css{
            width:100px;
            height:100px;
        }

        .th_color{
            background:skyblue;
        }

        .th_deg{
            padding:30px;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar');
      <!-- partial -->
     @include('admin.navbar');
        <!-- partial -->
        <!--main-panel starts-->
      <div class="main-panel">
            <div class="content-wrapper">

            @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    {{session()->get('message')}}
                </div>
                @endif

            <div class="div_center">
                <h1 class="h2-font">Add Products</h1>

                <table class="center">

                    <tr class="th_color">
                        <th class="th_deg">Title</th>
                        <th class="th_deg">Catagory</th>
                        <th class="th_deg">Description</th>
                        <th class="th_deg">Quantity</th>
                        <th class="th_deg">Price</th>
                        <th class="th_deg">Discount Price</th>
                        <th class="th_deg">Product Image</th>
                        <th class="th_deg">Delete</th>
                        <th class="th_deg">Edit</th>
                        
                    </tr>
                        @foreach($product as $product)
                        <tr>
                            <td>{{($product->title)}}</td>
                            <td>{{($product->catagory)}}</td>
                            <td>{{($product->description)}}</td>
                            <td>{{($product->quantity)}}</td>
                            <td>{{($product->price)}}</td>
                            <td>{{($product->discount_price)}}</td>
                            <td>
                                <img class="image_css" src="/product/{{$product->image}}" alt="">
                            </td>
                            <td>
                                <a href="{{url('delete_product',$product->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                            <td>
                                <a href="{{url('edit_product',$product->id)}}" class="btn btn-success">Edit</a>
                            </td>
                            
                        </tr>
                        @endforeach
                </table>
                </div>
            </div>
        </div>

        <!-- main-panel ends -->
    <!-- plugins:js -->
   @include('admin.script');
    <!-- End custom js for this page -->
  </body>
</html>