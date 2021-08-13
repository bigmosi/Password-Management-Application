<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Post</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
<a href="/logout" class="btn btn-primary">Log Out</a>
  <section style="padding-top:60px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              All Post <a href="/add-post" class="btn btn-success">Add New Post </a>
            </div>
            <div class="card-body">
              @if(Session::has('post_deleted'))
                 <div class="alert alert-success" role="alert">
                   {{Session::get('post_deleted')}}
                 </div>
              @endif
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($posts as $post)
                    <tr>
                      <td>{{$post->id}}</td>
                      <td>{{$post->name}}</td>
                      <td>{{$post->email}}</td>
                      <td>{{$post->password}}</td>
                      <td>
                        <a href="/posts/{{$post->id}}" class="btn btn-info">Details</a>
                        <a href="/edit-post/{{$post->id}}" class="btn btn-success">Edit</a>
                        <a href="/delete-post/{{$post->id}}" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
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