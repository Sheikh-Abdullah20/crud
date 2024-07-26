
<x-layout>

  <x-slot name='title'>
    Add User
  </x-slot>
                    <x-form class="w-75 m-auto" action="{{route('add.user')}}" >
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
                      </x-form>

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

          </x-layout>