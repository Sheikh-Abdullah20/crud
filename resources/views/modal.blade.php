
  
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
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
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success w-25">Update</button>
            </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>