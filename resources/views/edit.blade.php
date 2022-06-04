<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Blogs</title>
</head>
<body>
    <h1 class="text-center">Update Data for Blogs</h1>
<div class="container">
<form method="POST" action="/update/{{$blogs->id}}">
    @csrf <!-- it is security token that is used in laravel for any form -->
  <div class="form-group">
    <label for="formGroupExampleInput" >Blog Title</label>
    <input type="text" class="form-control" name="title" id="formGroupExampleInput" value="{{$blogs->blog_title}}">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Blog Author</label>
    <input type="text" class="form-control" name="author" id="formGroupExampleInput2"  value="{{$blogs->blog_author}}">
  </div>
  <div class="form-group">
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Blog Category</label>
  <select  value="{{$blogs->blog_category}}" name="category" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
    <option  selected>Choose...</option>
    <option value="One">One</option>
    <option value="Two">Two</option>
    <option value="Three">Three</option>
  </select>
  </div>

  <input name="update" value="UPDATE DATA" type="submit" class="btn btn-success my-1">
</form>
</div>
</body>
</html>