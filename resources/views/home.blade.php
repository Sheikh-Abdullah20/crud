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
                Add User
            </h1>
        </div>
            <div class="row">
                <div class="col-md-12">

                    <form class="w-75 m-auto" action="{{route('add.user')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" aria-describedby="name" placeholder="Enter Your Name" name="username" required>
                          </div>
                        <div class="mb-3">
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email" name="useremail" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" aria-describedby="city" placeholder="Enter Your City" name="usercity" required>
                          </div>
                          <div class="mb-3">
                            <input type="text" class="form-control"  aria-describedby="age" placeholder="Enter Your Age" name="userage" required>
                          </div>
                        
                        <div class="row">
                            <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-success w-25">Submit</button>
                        </div>
                        </div>
                      </form>

                </div>
            </div>
       

        <div class="row text-center my-5">
            <h1 class="display-2">Users_Data</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Age</th>
                        <th scope="col">City</th>
                        <th scope="col">Time</th>
                        <th scope="col">View</th>
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    @foreach ($users as $user )                        
                    <tbody>
                      <tr>
                        <th scope="row">{{$user->user_id}}</th>
                        <td>{{$user->user_name}}</td>
                        <td>{{$user->user_email}}</td>
                        <td>{{$user->user_city}}</td>
                        <td>{{$user->user_age}}</td>
                        <td>{{$user->user_created}}</td>
                        <td><a href="{{route('view.user',$user->user_id)}}" class="btn btn-info">View</a></td>
                        <td><a href="{{route('update.page',$user->user_id)}}" class="btn btn-primary">Update</a></td>
                        <td><a href="{{route('delete.user', $user->user_id)}}" class="btn btn-danger delete">Delete</a></td>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
            </div>
            <div class="row">
              <div class="col-md-12">
                {{$users->links()}}
              </div>
            </div>

        </div>
        <div class="row text-center my-4">
            <div class="col-md-12 mb-5">
                <a href="{{route('truncate.users')}}" class="btn btn-danger">Truncate All Users</a>
            </div>
        </div>
       </div>
</body>
<script>
const deleteButton = document.querySelector('.delete').addEventListener('click', function(e){
e.preventDefault();
const conformation = confirm('are You Sure?');
if(conformation){
  window.location.href = this.href;
}
else{
  console.log('Error');
}
})



</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>