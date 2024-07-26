<x-layout>

  <x-slot name='title'>
   User Details
  </x-slot>
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
  
  </x-layout>