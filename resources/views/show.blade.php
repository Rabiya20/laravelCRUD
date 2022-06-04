<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
   <div class="container">
       <table class="table table-bordered shado tetx-center table-striped">
<tr>
    <th>Blog ID</th>
    <th>Blog Title</th>
    <th>Blog Author</th>
    <th>Blog Category</th>
    <th>Delete Data</th>
    <th>Update Data</th>

</tr>
@foreach($blogs as $blog)
<tr>
    <td>{{$blog->id}}</td>
    <td>{{$blog->blog_title}}</td>
    <td>{{$blog->blog_author}}</td>
    <td>{{$blog->blog_category}}</td>
    <td><a href="/delete/{{$blog->id}}" class="btn btn-danger">Delete</a></td>
    <td><a href="/edit/{{$blog->id}}" class="btn btn-info">Update</a></td>
</tr>
@endforeach
</table>
<a class="btn btn-success float-center" href="{{url('/')}}">Add Blog</a>

   </div> 
</body>
</html>

