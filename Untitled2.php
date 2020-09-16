<!doctype html>
<html>
    <head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <style>
        
        body{
        background-image: url("https://149349300.v2.pressablecdn.com/wp-content/uploads/2019/06/3d-cube-background-4k-yo.jpg");
            background-size: cover;
            background-repeat: no-repeat;
    }
       #div1{
           background-color: white;
           height: 60px;
           padding: 10px;
       }
       #btn{
           margin-left: 10px;
       }
       textarea{
           margin:20px 10px;
       }
        </style>
    </head>
    <body>
        
        <div class="container-fluid" id="div1">
            <h2>Secret Diary
                <button class="float-right btn btn-outline-danger"><a href="Untitled-1.php">Log out</a></button></h2>
                <form action="" method="post">
                <textarea name="text"rows="30" cols="230"></textarea>
                
                <button id="btn"class="btn-success btn-lg">Submit</button>
            </form>
        </div>
        
    </body>
    
    
    </html>