<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
       <div class="container">

        <div class="row text-center">
            <h1 class="display-2">
                Update User
            </h1>
        </div>
            <div class="row">
                <div class="col-md-12">
                    <form class="w-75 m-auto" action="{{route('update.user',$data->user_id)}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" aria-describedby="name" placeholder="Enter Your Name" name="username" value="{{$data->user_name}}" required>
                          </div>
                        <div class="mb-3">
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email" name="useremail" value="{{$data->user_email}}" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" aria-describedby="city" placeholder="Enter Your City" name="usercity" value="{{$data->user_city}}" required>
                          </div>
                          <div class="mb-3">
                            <input type="text" class="form-control"  aria-describedby="age" placeholder="Enter Your Age" name="userage" value="{{$data->user_age}}" required>
                          </div>
                        
                        <div class="row">
                            <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-success w-25">Submit</button>
                        </div>
                        </div>
                      </form>

                </div>
            </div>
       
       </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>