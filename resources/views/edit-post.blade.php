<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Post</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
  <section style="padding-top:60px;">
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="card">
            <div class="card-header">
              Edit Post
            </div>
            <div class="card-body">
              @if(Session::has('post_updated'))
                 <div class="alert alert-success" role="alert">
                     {{Session::get('post_updated')}}
                 </div>
              @endif
              <input type="hidden" name="id" value="{{$post->id}}" />
              <form method="POST" action="{{route('post.update')}}">
                @csrf  
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{$post->name}}" />
                  <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                </div>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" name="username" class="form-control" placeholder="Enter Username" value="{{$post->username}}" />
                  <span class="text-danger">@error('username'){{ $message }}@enderror</span>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="text" name="password" class="form-control" placeholder="Enter Password">
                  <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                </div>
                <button type="submit" class="btn btn-success">Update Post</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
      
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" type="text/js"></script>
   </body>
</body>
</html>