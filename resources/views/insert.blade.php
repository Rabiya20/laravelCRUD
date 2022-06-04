<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD</title>
    <link rel="stylesheet" href="{{url('css/style.css')}}">

</head>
<body>
    <br>
    <div class="container">
<a class="btn btn-success" href="{{url('/show')}}">Blogs List</a>
    </div>

    <h1 class="text-center">Insert Data for Blogs</h1>
<div class="container">
<form method="POST" action="/store">
    @csrf <!-- it is security token that is used in laravel for any form -->
  <div class="form-group">
    <label for="formGroupExampleInput" >Blog Title</label>
    <input type="text" class="form-control" name="title" id="formGroupExampleInput">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Blog Author</label>
    <input type="text" class="form-control" name="author" id="formGroupExampleInput2">
  </div>
  <div class="form-group">
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Blog Category</label>
  <select name="category" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
    <option  selected>Choose...</option>
    <option value="One">One</option>
    <option value="Two">Two</option>
    <option value="Three">Three</option>
  </select>
  </div>

  <input name="insert" value="ADD DATA" type="submit" class="btn btn-primary my-1">

</form>
</div>
</body>
</html>