<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Latest minified bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    
    <!-- Latest minified bootstrap js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
  

    <title>Least Square</title>


    <style>
        .active{
            background-color: bisque;
        }
    </style>

  </head>
  <body>


   
  
  <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#" style="margin-left: 20px;">Least Square</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav">
                        <li class="nav-item active">
                          <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="prediksi.php">Input</a>
                        </li>
                      </ul>
                    </div>
                  </nav>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-4" >
            <div class="col">
                <h1>Least Square</h1>
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="form-group mt-2">
                              <label >Tanggal Awal</label>
                              <input type="date" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label >Tanggal Akhir</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label >Amount</label>
                                <input type="text" class="form-control">
                            </div> 
                            <button type="submit" class="btn btn-danger" style="margin-top: 30px;">Hitung</button>
                          </form>
                    </div>
                  </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                    <h1>Hasil : </h1>
                    </div>
                  </div>
            </div>
        </div>



    </div>
    

     
    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>