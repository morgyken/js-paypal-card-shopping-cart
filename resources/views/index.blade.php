<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>SimpleSheets Shopping Cart Demo</title>
  <link rel='stylesheet' href="//fonts.googleapis.com/css?family=Duru+Sans|Istok+Web">
  <script src="{{ URL::asset ('js/jquery-1.11.3.min.js') }}"></script>
  <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
</head>


<body>

  <div class="site-container">

    <header class="site-header" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
      <div class="wrap">

        <div class="title-area">
          <h1 class="site-title" itemprop="headline"><a href="/">simpleCart<sup>(js)</sup> + Google Sheets</a></h1>
        </div>

        

        <div class="simplecart_area">
           <form  method="post" action="{{ route('post-total') }}">
          <div class="simplecart_cart">

          <span class="showCart">

            <span class="fa fa-shopping-cart"></span>
            <span class="simpleCart_quantity"></span> items - <span class="simpleCart_total" id="mytot"></span>
            <span class="dropdown fa fa-chevron-circle-down"></span>
          </span>
          {{ csrf_field() }}
           
              <input type="hidden" name="total"  id="total" value="">
              <button class="btn btn-primary" id="checkout" onclick="">Checkout</button>
            
            <div id="cartPopover" style="display:none">
              <div class="simpleCart_items"></div>
            </div>
          </div>
           </form>
        </div>


      </div>
    </header>

    <div class="site-inner">
      <div class="wrap">

        <div id="products" class="products">
        @foreach($items as $item => $key)
            <div class="column one-third">
              <div class="simpleCart_shelfItem item">
                <div class="item_image"><img src="{{URL::asset('img/dad-image-shirt.png')}}"></div>
                <h2 class="item_name">{{ $key->name }}</h2>
                <div class="item_description">{{ $key->description  }}</div>
                <div style="margin-top:10px;">
                  <span class="item_price">Price: ${{$key->price }}</span>
                  <button href="javascript:;" class="item_add">Add to Cart</button>
                </div>
              </div>
            </div>
            @endforeach
          
        </div>

      </div>
    </div>

    <footer class="site-footer">
      <p>Copyright &copy; 2015 by <a href="http://bradonomics.com/">Brad West</a> | SimpleSheets Shopping Cart</p>
    </footer>
    <script src="{{ URL::asset ('js/jquery-1.11.3.min.js') }}"></script>
    <script src="{{ URL::asset ('js/simpleCart.min.js ') }}"></script>
    
   
    <script src="{{ URL::asset ('js/main.js ') }}"></script>

       <script type="text/javascript">

        var al;

        $(window).on('load', function(event, obj) {
          al = $("#mytot").text();         


        $( "#checkout" ).change(function(event, obj) {
           al = $("#mytot").text(); 

        })  

         })

        $( "#checkout" ).click(function(event, obj) {

            al = $("#mytot").text(); 
            document.getElementById('total').value =al;
            
        });

      
   
        </script>


  </div>

</body>

</html>
