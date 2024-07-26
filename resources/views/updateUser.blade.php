<x-layout>

  <x-slot name='title'>
    Update User
  </x-slot>
                    <x-form class="w-75 m-auto" action="{{route('update.user',$data->user_id)}}" method="PUT">
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
                      </x-form>


  </x-layout>
               
