<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD APP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <style>
         @import url('https://fonts.googleapis.com/css2?family=Acme&family=Charm:wght@400;700&family=Cinzel+Decorative:wght@400;700;900&family=Dosis:wght@200..800&family=Homemade+Apple&family=Italianno&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Kaushan+Script&family=Merienda:wght@300..900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Oranienbaum&family=Pacifico&family=Potta+One&family=Quando&family=Quattrocento:wght@400;700&family=Rubik+Doodle+Shadow&family=Satisfy&family=Tangerine:wght@400;700&display=swap');
      body{
        font-family: "Quando", serif;
 
      }
 
    table {
            width: 70%;
            margin: 10px auto;
            border-collapse: collapse;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        th, td {
            border: 1px solid #000000;
            text-align: left;
            padding: 8px;
            text-align: center;
            background-color: rgb(236, 236, 236) ; 
            border-radius: 5px;
        }
        th {
            background-color: #000000;
            color: rgb(255, 255, 255)
        }
   .text{
    text-align: center;
   padding-top: 2%;
   padding-bottom: 1%;
   font-size: 3rem;
   }

  </style>
  <body>
    <nav class="navbar  bg-black">
      <div class="container">
        <a class="navbar-brand" href="/">
         <img src="https://www.freecodecamp.org/news/content/images/2022/06/crud.png" alt=""  width="90px">
        </a>
        <a href="/create" class="btn btn-success mt-2"><i class="fa-solid fa-plus"></i> New Product</a>
      </div>
    </nav>

    @if (session()->has('delete'))
    <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
      {{ session()->get('delete') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
  
    <div class="container">
  
    <div class="text">Show Product</div>
           
           <table id="myTable">
            <tr>
               <th>S.NO</th>
               <th>Name</th>
               <th>Description</th>
               <th>Image</th>
               <th>Delete</th>
               <th>Edit</th>
               
            </tr>


            @foreach ($product as $product)        
            <tr>
               <td>{{$loop->index+1}}</td>
               <td>{{$product->name}}</td>
               <td>{{$product->description}}</td>
               <td>
                  <img src="./products/{{$product->image}}" alt="" width="50px"  class="rounded-circle">
                </td>
               <td>
                  <a href="{{url('delete',$product->id)}}" class="btn btn-danger m-2" onclick="return confirm('Are You Sure To Delete This Product')">Delete</a>
                </td>
                <td>
                  {{-- Edit --}}
                  <a href="{{url('Edit', $product->id)}}" class="btn btn-success m-2">Edit</a>
                </td>
            </tr>
            @endforeach
         </table>
        </div>

    </div>



    

    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  

<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function() {
      $('#myTable').DataTable();
  });
</script>
  </body>
</html>