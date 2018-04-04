<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel Crud</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Form</h2>
<form method="post" enctype="multipart/form-data" action="/post/add">
  {{ csrf_field() }}
  <input type="hidden" name="id" value="{{isset($edit->id)? $edit->id :''}}">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="name" value="{{isset($edit->id)?$edit->name: old('name')}}">
    @if ($errors->has('name'))
     <div class="error" style="color:red">{{ $errors->first('name') }}</div>
    @endif
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">City</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="City" name="city" value="{{isset($edit->id)?$edit->city:'
    '}}">
    @if ($errors->has('city'))
     <div class="error" style="color:red">{{ $errors->first('city') }}</div>
    @endif
  </div>
  <div class="form-group">
   <label for="exampleFormControlFile1">Image Upload</label>
   <input type="file" class="form-control-file"  id="exampleFormControlFile1" name="image">
   @if ($errors->has('image'))
    <div class="error" style="color:red">{{ $errors->first('image') }}</div>
   @endif
 </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<table border="2" style="margin-top:20px">
  <tr>
    <th>Name</th>
    <th>City</th>
    <th>Image</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  @foreach($posts as $post)
  <tr>
    <td>{{$post->name}}</td>
    <td>{{$post->city}}</td>
    <td><img src="{{$post->image}}" height="60px" width="60px"</td>
    <td><a href="/update/{{$post->id}}">edit</a></td>
    <td><a href="/del/{{$post->id}}">delete</a></td>
  </tr>
  @endforeach
</div>

</body>
</html>
