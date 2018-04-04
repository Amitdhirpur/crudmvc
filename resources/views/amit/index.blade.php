<!DOCTYPE html>
<html lang="en">
<head>
  <title>Amit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Basic form</h2>
  <form action="/amit/store" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{isset($post->id)? $post->id : ''}}">
  <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" value="{{isset($post->id)? $post->Name : ''}}" id="email" placeholder="Name" name="name">
      @if ($errors->has('name'))
       <div class="error" style="color:red">{{ $errors->first('name') }}</div>
      @endif
    </div>
  <div class="form-group">\      <label for="pwd">Image:</label>
      @if($errors->has('image'))
       <div class="error" style="color:red">{{ $errors->first('image') }} </div>
      @endif
      <input type="file"  name="image">
    </div>
      <button type="submit" class="btn btn-default">Submit</button>
  </form>
  <table border="2">
    <thead>
      <tr>
        <th>Name</th>
        <th>Image</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($posts as $post)
      <tr>
        <td>{{  $post->Name }}</td>
        <td><img src="{{ $post->image }}" height="80px" width="80px" ></td>
        <td><a href="/edit/{{  $post->id }}">edit</a></td>
        <td><a href="/delete/{{  $post->id }}">delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
