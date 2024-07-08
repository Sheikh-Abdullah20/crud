<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

       <div class="container my-4">
        <div class="row text-center">
            <h1 class="display-2">
                User - {{$user->user_name}} - Details
            </h1>
        </div>
        <div class="row my-4">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">City</th>
                        <th scope="col">Age</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">{{$user->user_id}}</th>
                        <td>{{$user->user_name}}</td>
                        <td>{{$user->user_email}}</td>
                        <td>{{$user->user_city}}</td>
                        <td>{{$user->user_age}}</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
       </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>