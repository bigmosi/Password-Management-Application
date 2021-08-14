<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Post</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
  <section style="padding-top:60px;">
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="card">
            <div class="card-header">
              User Login
            </div>
            <div class="card-body">
            <form action="{{ route('auth.create') }}" method="post">
          @csrf
           <div class="results">
             @if(Session::get('fail'))
               <div class="alert alert-danger">
                 {{ Session::get('fail') }}
               </div>
              @endif
           </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Enter email" value="{{ old('email') }}">
            <span class="text-danger">@error('email'){{ $message }}@enderror</span>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter password" data-toggle="password">
            <span class="text-danger">@error('password'){{ $message }}@enderror</span>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-block btn-primary">Login</button>
          </div>       
          </form>             
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
   </body>
   <script type="text/javascript">
	   $("#password").password('toggle');
   </script>

</body>
</html>


