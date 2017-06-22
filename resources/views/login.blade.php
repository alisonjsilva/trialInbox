
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <!-- Bootstrap -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="/css/login.css" rel="stylesheet">
    </head>
    <body>
        <div class = "container">
    	    <div class="wrapper">
        		<form action="/user/login" method="post" name="Login_Form" class="form-signin">       
        		    <h3 class="form-signin-heading">Welcome Back! Please Login</h3>
        			  <hr class="colorgraph"><br>
        			  
                      {!! csrf_field() !!}
        			  
        			  <input type="text" class="form-control" name="email" placeholder="Email" required="" autofocus="" />
        			  <input type="password" class="form-control" name="password" placeholder="Password" required=""/>     		  
        			 
        			  <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>  			
        		</form>			
        	</div>
        </div>
        
        <script type="text/javascript">
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