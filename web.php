<!DOCTYPE html>
<html>

<head>

    <title>Web | RTL</title>
    </head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@800;900&family=Poppins:wght@200&display=swap');
        
:root{
  --gradient: linear-gradient(
      337deg,
      #055a72,
      #75dee6,
      #dac8ee
  )
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

body{
    height: 100vh;
    display: flex;
    justify-content: center;
    overflow: hidden;
    align-items: center;
    
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
    color: #fff;
    font-size: 320%;
    padding: 5px 16px;
    text-decoration: none;
  }
  #focal_head{
    line-height: 1.3;
    font-family: "Bebas Neue",cursive;
    font-weight: 400;
    letter-spacing: 1px;
    float: left;
  }
  .navbar button{
    font-family: "calibri",sans-serif;
    background-image: var(--gradient);
    border: 1px solid rgb(12, 12, 12);
    border-radius: 10px;
    color: rgb(8, 8, 8);
    font-size: 120%;
    line-height: 2;
    padding: 0px 10px 0 10px;
    position: relative;
    top: 15px;
    right: 10px;
    float: right;
    background-size: 200%;
    background-position: right;
    transition: background-position 1s;
    cursor: pointer;
}
#sign_in{
    right: 20px;
}

.navbar button:hover{
    background-size: 300%;
    background-position: left;
}
section
{
  position: relative;
  width: 100%;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  background: #001300;
  animation: changeColor 5s linear infinite;
}
@keyframes changeColor
{
  0%
  {
    filter: hue-rotate(0deg);
  }
  100%
  {
    filter: hue-rotate(360deg);
  }
}
section h2{
  color: #00ff0a;
  font-family: consolas;
  font-weight: 300;
  Letter-spacing: 10px;
}
section .loader
{
position: relative;
display: flex;
}
section .loader .dot
{
  position:relative;
  display: block;
  width: 20px;
  height: 20px;
  background: #00ff0a;
  box-shadow: 0 0 10px #00ff0a,
              0 0 20px #00ff0a,
              0 0 40px #00ff0a,
              0 0 60px #00ff0a,
              0 0 80px #00ff0a,
              0 0 100px #00ff0a;
  margin: 20px 10px;
  transform: scale(0.1);
  border-radius: 50%;
  animation: animateDot 2s linear infinite;
  animation-delay: calc(0.1s * var(--i));
}
section .loader:last-child .dot
{
  animation-delay: calc(-0.1s * var(--i));
}
@keyframes animateDot
{
  0%
  {
    transform: scale(0.1);

  }
  10%
  {
    transform: scale(1);
    
  }
  50%,100%
  {
    transform: scale(0.1);
    
  }
}

  
  


    </style>


<body>
    
    <nav class="navbar">
        <a id="focal_head" href="#focal">REMOTE TRIGGERED LABS</a>
        <form action="sign-up.php" method="post">
        <button id="sign_up" onclick="myFunction_sup()">Sign Up</button>
        </form>
         <form action="sign-in.php" method="post">
        <button id="sign_in" onclick="myFunction_sin()">Sign In</button>
    </nav>
   
   <section>
       <div class="loader">
           <div class="dot" style="--i:0;"></div>
           <div class="dot" style="--i:1;"></div>
           <div class="dot" style="--i:2;"></div>
           <div class="dot" style="--i:3;"></div>
           <div class="dot" style="--i:4;"></div>
           <div class="dot" style="--i:5;"></div>
           <div class="dot" style="--i:6;"></div>
           <div class="dot" style="--i:7;"></div>
           <div class="dot" style="--i:8;"></div>
           <div class="dot" style="--i:9;"></div>
           <div class="dot" style="--i:10;"></div>
           <div class="dot" style="--i:11;"></div>
           <div class="dot" style="--i:12;"></div>
           <div class="dot" style="--i:13;"></div>
           <div class="dot" style="--i:14;"></div>
       </div>
       <h2>REMOTE TRIGGERED LABS...</h2>
       <div class="loader">
        <div class="dot" style="--i:0;"></div>
        <div class="dot" style="--i:1;"></div>
        <div class="dot" style="--i:2;"></div>
        <div class="dot" style="--i:3;"></div>
        <div class="dot" style="--i:4;"></div>
        <div class="dot" style="--i:5;"></div>
        <div class="dot" style="--i:6;"></div>
        <div class="dot" style="--i:7;"></div>
        <div class="dot" style="--i:8;"></div>
        <div class="dot" style="--i:9;"></div>
        <div class="dot" style="--i:10;"></div>
        <div class="dot" style="--i:11;"></div>
        <div class="dot" style="--i:12;"></div>
        <div class="dot" style="--i:13;"></div>
        <div class="dot" style="--i:14;"></div>
    </div>
   </section>
   <script>
       function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    $("#name").text(profile.getName());
    $("#email").text(profile.getEmail());
    $("#image").attr('src', profile.getImager());
    $(".data").css("display","block");
    $(".g=signin2").css("display","none");
  }

  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
        alert("You have been signed out successfully");
        $(".g-signin2").css("display", "block");
        $(".data").css("display","none");
        
    });
  } 
   </script>
  
</body>

</html>
