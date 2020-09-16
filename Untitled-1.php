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
    h1,h4,h3,b{
        color: white;
    }
        body{
        background-image: url("https://149349300.v2.pressablecdn.com/wp-content/uploads/2019/06/3d-cube-background-4k-yo.jpg");
            background-size: cover;
            background-repeat: no-repeat;
    }
    #email,#password{
        width: 250px;
        height: 50px;
    }
    #checkbox{
        height: 20px;
        width: 20px;
    }
    .d1{
        margin:200px auto;
    }
    #check{
        background-color: rosybrown;
        width: auto;
        height: auto;
        margin-left:25%;
        margin-right: 25%;
    }
    
        </style>
        <script>
      /*  $(document).ready(function(){
            $("p").click(function(){
               var x=$("h4").val();
                var y=$("button").val();
                var z=$("p").val();
                
          $("h2").text(x);      
        });
        });*/
            function myFunction() {
  var x = document.getElementById("h");
                var y= document.getElementById("btn");
                var z=document.getElementById("para");
  if (x.innerHTML == "Interested? Sign up now.") {
    x.innerHTML = "Log in using Username and Password.";
      y.innerHTML="Log in";
      z.innerHTML="Sign up"
  } else {
    x.innerHTML = "Interested? Sign up now.";
      y.innerHTML="Sign up";
      z.innerHTML="Log in";
  }
}
           $(document).ready(function(){
               $("button").click(function(){
                   var a=$("#email").val();
                   var b= $("#password").val();
                   if(b=="" && a=="")
                       {
                       
                           $('#check').show();
                           $('ul').html("<h4>Email and Password is required<h4>");
                           return false;
                       }
                   else if(b=="")
                       {
                            $('#check').show();
                           $('ul').html("<h4>Password is required<h4>");
                           return false;
                       }
                   else if(a=="")
                       {
                            $('#check').show();
                           $('ul').html("<h4>Email is required<h4>");
                           return false;
                       }
                   else
                       {
                           return true;
                       }
                   
               });
           });
        </script>
</head>

<body >
    <div class="text-center d1">
        
        <h1>Secret Diary</h1>
        <h3>Store your thoughts permanently ans securely</h3>
        <h4 id="h">Interested? Sign up now.</h4>
          <div id="check" style="display: none">
            <h4 id="error" class="text-danger">There are error(s) in your form:</h4>
            <ul></ul>
            
        </div>
        <form action="practice.php" method="post">
            <div class="form-group">
                <input type="email" name="email" placeholder="Your Email" id="email"><br><br>
                <input type="password" name="password" placeholder="Password" id="password"><br><br>
                <input type="checkbox" id="checkbox"><b>Stay logged in</b><br><br>
                
                <button id="btn" class="btn-danger btn-lg"><a href="Untitled2.php">Sign up</a></button><br><br>
                <p id="para"class="text-danger font-weight-bold" onclick="myFunction()">Log in</p> <h2></h2>
            </div>
        </form>
    </div>
</body>
</html>