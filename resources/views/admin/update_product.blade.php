<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <base href="/public">
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

        label{
            display:inline-block;
            width:200px;
        }

        .design_div{
            padding-bottom:10px; 
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

                <form action="{{url('/edit_product_confirm', $product->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="design_div">
                    <label>Product Title</label>
                    <input class="input_color " type="text" name="title" placeholder="write a title" required="" value="{{$product->title}}">
                 </div>

                 <div class="design_div">
                    <label>Product Description</label>
                    <input class="input_color " type="text" name="description" placeholder="write a description" required="" value="{{$product->description}}">
                 </div>

                 <div class="design_div">
                    <label>Product Price</label>
                    <input class="input_color " type="number" name="price" placeholder="write a price" required="" value="{{$product->price}}">
                 </div>

                 <div class="design_div">
                    <label>Product quantity</label>
                    <input class="input_color " type="number" min="0" name="quantity" placeholder="write a quantity" required="" value="{{$product->quantity}}">
                 </div>

                 <div class="design_div">
                    <label>Product Discount Price</label>
                    <input class="input_color " type="number" name="discount_price" placeholder="write a title" value="{{$product->discount_price}}">
                 </div>

                 <div class="design_div">
                <label>Product catagory</label>
                    <select class="input_color" name="catagory" required="">
                         <option value="{{$product->catagory}}" selected="">{{$product->catagory}}</option>
                         @foreach($catagory as $catagory)
                        <option value="{{($catagory->catagory_name)}}">{{($catagory->catagory_name)}}</option>
                        @endforeach
                         
                 </select>
                 </div>

                 <div class="design_div">
                    <label>Current Product image</label>
                    <img src="/product/{{$product->image}}" alt="" height="100" width="100" style="margin:auto;">
                 </div>

                 <div class="design_div">
                    <label>Change Product image</label>
                    <input class="input_color " type="file" name="image">
                 </div>

                 <div class="design_div">
              
                    <input type="submit" value="update Product" class="btn btn-primary">
                 </div>

                 </form>
            </div>

            </div>
        </div>

        <!-- main-panel ends -->
    <!-- plugins:js -->
   @include('admin.script');
    <!-- End custom js for this page -->
  </body>
</html>