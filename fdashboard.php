<!DOCTYPE html>
<html>

<head>
    <title>Dashboard | Focal Length </title>
    <style>
        :root {
  --primary: #055a72;
    --secondary: #75dee6;
  --gradient: linear-gradient(
      337deg,
      #055a72,
      #75dee6,
      #dac8ee
  );
}
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  }
  
  html,body{
    display: contents;
    /* height:110%;
    width: 150%; */
    min-height: 100vh;
    text-align: center;
    place-items: center;
    background: linear-gradient(90deg, #055a72,#75dee6);
  }
  .navbar{
    overflow: hidden;
    background-position: right;
    cursor: pointer;
    background-image: var(--gradient);
    background-image: linear-gradient(180deg, rgb(54, 56, 28), rgba(255, 255, 255, 0));
    position: fixed;
    display: block;
    top: 0px;
    width: 100vw;
    height: 70px;
    z-index: 3;
  }
  
  .navbar a{
    display: flex;
    position: relative;
    color: #fff;
    padding: 5px 16px;
    text-decoration: none;
  }
  

  
  #focal_head{
    line-height: 1.3;
    font-family: 'Arial Blod',sans-serif;
    font-size: 320%;
    font-weight: 600;
    letter-spacing: 1px;
    float: left;
  }
  .navbar button{
    font-family: "calibri",sans-serif;
    background-image: var(--gradient);
    border: 1px solid #fff;
    border-radius: 10px;
    color: #fff;
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
#leave{
    right:20px;
}

.navbar button:hover{
    background-size: 300%;
    background-position: left;
}
  </style>
</head>

<body>
    <nav class="navbar">
        <a id="focal_head" href="#focal">Focal Length</a>
        <form action="home.php" method="post">
        <button id="leave">Leave Session</button>
        </form>
    </nav>
</body>

</html>