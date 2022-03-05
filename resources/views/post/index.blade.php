<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- FONTAWSOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body{
            padding: 100px;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h5>Posts List</h5>
                <a href="{{ url('/posts/create') }}">
                    <button class="btn btn-primary btn-sm mb-2" style="float: right;"> 
                        <i class="fa fa-plus-circle"> Add New</i> 
                    </button>
                </a>
                @if(Session('SuccessAlert'))
                    <div class="alert alert-success alert-dismissible show fade" >
                        <strong>{{ Session('SuccessAlert') }}</strong>
                        <button class="close" data-dismiss="alert">&times;</button>
                    </div>
                @endif
                <table class="table  table-bordered table-hover">
                    <thead>
                        <tr style="text-align: center">
                            <th>ID</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{  $post->id }}</td>
                            <td>{{  $post->title }}</td>
                            <td>{{  $post->content }} </td>
                            <td style="text-align: center">
                                <a href="{{ url('posts/'.$post->id.'/edit ') }}">
                                    <button class="btn btn-success btn-sm">
                                        <i class="fa fa-edit"> Edit</i>
                                    </button>
                                </a>
                                
                                <a href="">
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"> Delete</i>
                                    </button>
                                </a>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-2"></div>

        </div>
    </div>




<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>