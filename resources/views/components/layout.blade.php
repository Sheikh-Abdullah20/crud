<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
       <div class="container">

        <div class="row text-center">
            <h1 class="display-2">
                {{$title ?? "Curd"}}
            </h1>
        </div>
            <div class="row">
                <div class="col-md-12">


                    {{$slot}}




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