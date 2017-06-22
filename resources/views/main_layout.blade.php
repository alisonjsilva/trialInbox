
<!DOCTYPE html>
<html>
<head>
  <title>Inbox Store</title>
  <meta name="csrf_token" content="{{ csrf_token() }}" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="navbar navbar-inverse nav">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="/">The Store</a>
            <div class="nav-collapse collapse">
              <ul class="nav">
                  <li class="divider-vertical"></li>
                  <li><a href="/"><i class="icon-home icon-white"></i> Products</a></li>
              </ul>
              <div class="pull-right">
                <ul class="nav pull-right">
                @if(!Auth::check())
                <ul class="nav pull-right">
                  <li class="divider-vertical"></li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
                    <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
                      <p>Please Login</a>
                        <form action="/user/login" method="post" accept-charset="UTF-8">
                          <input id="email" style="margin-bottom: 15px;" type="text" name="email" size="30" placeholder="email" />
                          <input id="password" style="margin-bottom: 15px;" type="password" name="password" size="30" />
                          <input class="btn btn-info" style="clear: left; width: 100%; height: 32px; font-size: 13px;" type="submit" name="commit" value="Sign In" />
                          {!! csrf_field() !!}
                        </form>
                      </div>
                    </li>
                  </ul>
                @else
                <li><a href="/cart"><i class="icon-shopping-cart icon-white"></i> Your Cart</a></li>
                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, {{Auth::user()->name}} <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="divider"></li>
                            <li><a href="/user/logout"><i class="icon-off"></i> Logout</a></li>
                        </ul>
                    </li>
                @endif
                </ul>
              </div>
            </div>
        </div>
    </div>
</div>

@yield('content')

  <script src="//code.jquery.com/jquery.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  var _total;
  $(function() {
    $('.dropdown-toggle').dropdown();

    $('.dropdown input, .dropdown label').click(function(e) {
      e.stopPropagation();
    });

// Attach a submit handler to the form
$( ".addToCart" ).submit(function( event ) {

  // Stop form from submitting normally
  event.preventDefault();

  // Get some values from elements on the page:
  var $form = $( this ),
    product = $form.find( "input[name='product']" ).val(),
    amount = $form.find( "input[name='amount']" ).val(),
    token = $form.find( "input[name='_token']" ).val(),
    url = $form.attr( "action" ),
    btn = $form.find('.btnAddToCart');

    btn.button('loading');

  // Send the data using post
  var posting = $.ajax(
    url,
    {
      type: "POST",
      beforeSend: function (xhr) {
          var token = $('meta[name="csrf_token"]').attr('content');

          if (token) {
                return xhr.setRequestHeader('X-CSRF-TOKEN', token);
          }
      },
      data: {
        product: product,
        amount: amount,
        token_: token
      }
  });

  posting.success(function( data ) {
    var content = $( data );
    if($(data).length > 0){
      _total = $(data)[0].total;
      btn.button('reset');
      $form.find('.alert').show(function(){
        _this = $(this);
        setTimeout(function(){
          _this.hide()
        }, 3000);
      });
    }
  });

});

  });

  @if(isset($error))
    alert("{{$error}}");
  @endif

  @if(Session::has('error'))
    alert("{{Session::get('error')}}");
  @endif

  @if(Session::has('message'))
    alert("{{Session::get('message')}}");
  @endif

  </script>
</body>
</html>
