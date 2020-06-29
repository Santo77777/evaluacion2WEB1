<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller 3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">


    <style>
        body{
            background-image: linear-gradient(to top, lightgrey 0%, lightgrey 1%, #e0e0e0 26%, #efefef 48%, #d9d9d9 75%, #bcbcbc 100%);
            font-family: 'Pangolin', cursive;



        }
        h1{
            color: darkgoldenrod;
        }

        form{
            padding: 40px;
            border-bottom: 1px solid black;
            border-radius: 10px;
        }

        .container{
            border: 1px solid black;
            border-radius: 30px;
            width: 900px;
        }

        label{
            font-size: 20px;
            font-weight: 500;
        }

    </style>

</head>

<body>

    <head>
    <h1 class="text-center mt-5">Taller 3</h1>
    </head>

    <main>
        <div class="container ">
            <div class="row justify-content-center ">
                <div class="col-5 ">
                    
                   


  <!--  Insertar Datos -->

                    <form action="agregarDatos.php" method="POST">
                        <div class="form-group mt-4">
                            <label for="nameUser">Names: </label>
                            <input type="text" class="form-control" id="nameUser" name="nameUser">
                            
                        </div>

                        <div class="form-group">
                            <label for="emailnameUser">Email: </label>
                            <input type="text" class="form-control" id="emailnameUser" name="emailnameUser">
                            
                        </div>

        
                        <div class="form-group">
                            <label for="passUser">Password</label>
                            <input type="password" class="form-control" id="passUser" name="passUser">
                        </div>

                        
                        <button type="submit" class="btn btn-dark" id="btnSub" name="btnSub">Submit</button>
                   
                    </form>



 <!--  Buscar un unsuario -->



                    <form action="buscarDatos.php" method="POST" class="mt-5 mb-5" >
                        
                        <div class="form-group">
                            <label for="serchUser">Seach Users: </label>
                            <input type="text" class="form-control" id="serchUser" name="serchUser">
                            
                        </div>
                      
                        <button type="submit" class="btn btn-warning" id="btnSub" name="btnSub">Submit</button>
                   
                    </form>




 <!--   Eliminar unsuario -->



                    <form action="eliminarDatos.php" method="POST" class="mt-5 mb-5">
                        <div class="form-group">
                            <label for="deleteUser">Delete: </label>
                            <input type="text" class="form-control" id="deleteUser" name="deleteUser">
                            
                        </div>
                        
                        <button type="submit" class="btn btn-danger" id="btnSub" name="btnSub">Submit</button>
                   
                    </form>
                
                </div>
            </div>
        </div>
    
    </main>

    <footer>
    
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> 

</body>
</html>