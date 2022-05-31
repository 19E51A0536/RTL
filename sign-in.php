<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-client_id" content="1022437446482-5g4jm6g59rnvaoh0r3ljjtpkk7umad0u.apps.googleusercontent.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>RTL Google Sign In</title>
</head>
<style>
    .data{
    display: none;
}
.g-signin2{
    position: absolute;
    top: 95%;
    left: 50%;
    margin-top: -50px;
    margin-left: -50px;
    
}
.main{
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(pic.jpg);
    background-position: center;
    background-size: cover;
    height: 100vh;
}
.navbar{
    overflow: hidden;
    background: linear-gradient(324deg, );
    background-size: 200%;
    background-position: right;
    transition: background-position 1s;
    cursor: pointer;

    position: fixed;
    display: block;
    top: 0px;
    right: 0px;
    width: 100%;
    height: 70px;
    z-index: 3;
  }
  .navbar:hover{
    background-size: 100%;
    background-position: left;
  }
  .navbar a{
    display: block;
    position: relative;
    color: rgb(252, 248, 248);
    font-size: 230%;
    padding: 5px 16px;
    text-decoration: none;
  }
  #focal_head{
    line-height: 1.3;
    font-family: calibri, sans-serif;
    font-weight: 800;
    letter-spacing: 1px;
    float: left;
  }
  section
{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
   
}
section .color
{
    position: absolute;
    filter: blur(150px);
}

section .color:nth-child(1)
{   
    top: -350px;
    width: 600px;
    height: 600px;
    
    
}
section .color:nth-child(2)
{   
    bottom: -150px;
    left: 100px;;
    width: 500px;
    height: 500px;
   
    
}
section .color:nth-child(3)
{   
    bottom: 50px;
    right: 100px;;
    width: 500px;
    height: 500px;
  
    
}

.container
{
    position: relative; 
    width: 400px;
    min-height: 400px;
    background: rgba(17, 17, 17, 0.1);
    border-radius: center;
    align-items: center;
    backdrop-filter: blur(5px);
    box-shadow: 0 25px 45px rgba(0,0,0,0.1);
    border: 1px solid rgba(255,255,255,0.5);
    border-right: 1px solid rgba(255,255,255,0.2);
    border-bottom: 1px solid rgba(255,255,255,0.2);

}
.form
{
    position: relative; 
    width: 100%;
    height: 100%;
    padding: 40px;

}
.form h2
{
    position: relative;
    color: rgb(17, 16, 16);
    font-size: 24px;
    font-weight: 600;
    letter-spacing: 1px;
    margin-bottom: 40px;
}
.form h2::before
{
    content:'';
    position: absolute;
    left: 0;
    bottom: -10px;
    width: 80px;
    height: 4px;
    background: rgb(3, 3, 3);
}
.form .inputBox
{
    width: 100%;
    margin-top: 20px;
}
.form .inputBox input
{
    width: 100%;
    background: rgba(8, 8, 8, 0.2);
    border: none;
    outline: none;
    padding: 10px 20px;
    border-radius: 35px;
    border: 1px solid rgba(255,255,255,0.5);
    border-right: 1px solid rgba(255,255,255,0.2);
    border-bottom: 1px solid rgba(255,255,255,0.2);
    font-size: 16px;
    letter-spacing: 1px;
    color: rgb(10, 10, 10);
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
}
.from .inputBox input[type="submit"]
{
    background: rgb(8, 8, 8);
    color: #666;
    max-width: 100px;
    cursor: pointer;
    margin-bottom: 20px;
    font-weight: 1000;


}

.forget
{
    margin-top: 6px;
    color: rgb(7, 7, 7);

}
.forget a 
{
    color: rgb(8, 8, 8);
    font-weight: 600;
}
</style>
<body style="background-color: #dcebfd;">

    <nav class="navbar">
        <a id="focal_head" href="#focal">REMOTE TRIGGERED LABS</a>
    </nav>
        
    <div class="main">
       <section>
      
            <div class="container">
                <div class="form">
                    <form action="home.php" method="post">
                
                        <div class="inputBox">
                            <input type="text" placeholder="Username">

                        </div>
                        <div class="inputBox">
                            <input type="password" placeholder="Password">
                            
                        </div>
                        <div class="inputBox">
                            <input type="submit" value="Login">
            
                            
                        </div>
                        
                        <p class="forget">Forgot Password? <a
                        href="#">Click Here</a></p>
                        <p class="forget">Don't have an account ? <a
                            href="sign-up.php">Sign up</a></p>
                    </form>
                </div>
                <div class="g-signin2" data-onsuccess="onSignIn"></div>
                <div class="data">
                    <p>Name</p>
                    <p id="name" class="alert alert-success"></p>
                    <p>Profile Pic</p>
                    <img id="image" class="rounded-circle" width="100" hight="100"/>
                    <p>Email</p>
                    <p id="email"></p>
                    <button type="button" class="btn btn-danger" onclick="signOut();">Sign Out</button>
                </div> 
            </div>
            
        </div>

    </section>
    
    </div>
    
    
    <script scr="index.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://cdn.jsdeliver.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundel.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6o0ypYoCJhGGScy+8"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
     
    </body>
</html>
