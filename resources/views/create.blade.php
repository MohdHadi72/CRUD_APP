<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar  bg-black mb-1">
      <div class="container">
        <a class="navbar-brand" href="/">
         <img src="https://www.freecodecamp.org/news/content/images/2022/06/crud.png" alt=""  width="90px">
        </a>
      </div>
    </nav>

    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 70%; margin:6px 16%;">
      {{ session()->get('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
 
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-8">
          <div class="card p-4">
            <h1 class="text">Add New Data</h1>
            <form action="store" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label >Name</label>
                    <input type="text"  name="name" placeholder="Enter Name" class="form-control " required>
                  </div>
                  <div class="form-group">
                    <label >Description</label>
                    <textarea type="text"  name="description" placeholder="Enter Description" class="form-control" rows="5" required></textarea>
                  </div>
                  <div class="form-group ">
                    <label >Image</label>
                    <input type="file" name="image"  class="form-control" required>
                  </div>
                  <button type="submit" class="btn btn-dark mt-4">Submit</button>
            </form>

          </div>
        </div>
      </div>
    </div>
  


    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <style>
      
      @import url('https://fonts.googleapis.com/css2?family=Acme&family=Charm:wght@400;700&family=Cinzel+Decorative:wght@400;700;900&family=Dosis:wght@200..800&family=Homemade+Apple&family=Italianno&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Kaushan+Script&family=Merienda:wght@300..900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Oranienbaum&family=Pacifico&family=Potta+One&family=Quando&family=Quattrocento:wght@400;700&family=Rubik+Doodle+Shadow&family=Satisfy&family=Tangerine:wght@400;700&display=swap');
      body{
        background: linear-gradient(to top, rgb(63, 61, 61), white);
        width: 100%;
        height: 100vh;
        font-family: "Quando", serif;
 
      }

      .card{
       box-shadow: 0px 5px 5px rgb(32, 32, 32);
       margin-top: 5%;
      }

      .form-group label{
        font-size: 16px;
        font-weight: 500;
        margin-left: 0.4%;
        margin-top: 2.3%;
      }
      .form-group input{
        background: rgb(232, 232, 232);
        border: none;
        margin-top: 1%;
        padding: 10px;
      }
      .form-group textarea{
        background: rgb(232, 232, 232);
        border: none;
        margin-top: 1%;
      }
      .form-group input[type="file"]{
        background: rgb(232, 232, 232);
        border: none;
        /* padding: 10px; */
      }
      .text{
        text-align: center;
        /* padding: 10px; */
      }
    .btn{
      width: 100%;
      margin-top: 2%;
    }
      
      input::placeholder{
        font-size: 15px;
       }
       textarea::placeholder{
        font-size: 15px;
       }
      


    </style>
 
  </body>
</html>