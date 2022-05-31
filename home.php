<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@200&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=The+Nautigal:wght@400;700&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Raleway:wght@100;200&family=Roboto:ital,wght@0,100;0,300;0,400;1,100;1,300;1,400&display=swap');
	</style>
	<title>Home | RTL</title>
	<style>:root {
    --primary: #055a72;
    --secondary: #75dee6;
    --dark: #212121;
    --light: #F3F3F3;
    --primary2: #ffcc0000;
    --gradient: linear-gradient(
        337deg,
       #055a72,
      #75dee6,
      #dac8ee
    );
  }

:root{
  --gradient: linear-gradient(
      337deg,
      #055a72,
      #75dee6,
      #dac8ee
  )
}
  
  * {
    margin: 0;
    padding: 0;
  }
  
  body {
    display: block;
    /* flex-wrap: wrap; */
    font-family: montserrat, sans-serif;
    width: 100%;
    min-height: 100vh;
    background: linear-gradient(90deg, #055a72, #75dee6);
  }
  
  #welcome {
    width: 80vw;
  
    font-family: 'Raleway', sans-serif;
    margin: 100px 0 10px 100px;
    font-size: 5vw;
    font-weight: bold;
    color: #f3f5f5;
    padding-left: 2vw;
  
   
  }
  #User {
    font-family: 'Raleway',sans-serif;
    font-size: 3vw;
    font-weight: 100;
    margin: 0 120px;
  }
  
  .boxes .exp_head {
    overflow: hidden;
    background-position: right;
    display: block;
    top: 0px;
    width: 100%;
    height: 70px;
    line-height: 1.5; 
    z-index: 3;
    color: rgb(15, 15, 15);
    font-family: 'Bebas Neue',sans-serif;
    font-size: 50px;
    font-weight: 500;
    text-align: center;
  
    background: rgba(191, 206, 240, 0.15);
    box-shadow: 0 8px 48px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 11px );
    -webkit-backdrop-filter: blur( 11px );
    border-radius: 10px;
    border: 1px solid rgba( 255, 255, 255, 0.18 );
  }
  
  .note {
    text-align: center;
    color: #141414;
    font-family: 'Poppins',cursive;
    font-size: 1.2vw;
    margin: 0 120px;
    padding: 10px;
  }
  
  .boxes {
    display: flex;
    flex-wrap: wrap;
    font-family: montserrat, sans-serif;
    width: 95%;
    min-height: 100vh;
    margin: auto;
    background: rgba( 160, 189, 255, 0.25 );
    box-shadow: 0 8px 32px 0 rgba(9, 5, 230, 0.37);
    backdrop-filter: blur( 11px );
    -webkit-backdrop-filter: blur( 11px );
    border-radius: 10px;
    border: 1px solid rgba( 255, 255, 255, 0.18 );
    
  }
  .card {
    margin: 50px auto 10px;
    width: 400px;
    height: 600px;
    perspective: 1000px;
  }
  
  .card__inner {
    width: 100%;
    height: 100%;
    position: relative;
  }
  
  .p1 {
    display: block;
    position: relative;
    top: -150px;
    left: 60px;
    width: 440px;
    height: 440px;
    margin: 0 auto 30px;
    border-radius: 0px 0px 50% 0px;
    background-color: #FFF;
    border: 5px solid #FFF;
    object-fit: cover;
    
  }
  
  .cut {
    display: block;
    position: relative;
    width: 300px;
    height: 40%;
    margin: 0 auto 30px;
    border-radius: 10%;
    background-color: #FFF;
    border: 5px solid #FFF;
    object-fit: cover;
  }
  
  .expe1 {
    font-family: 'Poppins',sans-serif;
    position: relative;
    display: block;
    top: 120px;
    right: 270px;
    align-items: center;
    justify-content: center;
    font-weight: 900;
  
  }
  
  .in_queue {
    position: absolute;
    display: block;
    align-items: center;
    align-content: center;
    top: 88%;
    background-color: #fff;
    width: 380px;
    height: 40%;
    font-family: 'Poppins',sans-serif;
    font-weight: bolder;
    font-size: 20px;
    padding: 20px 10px 10px 30px;
    border-radius: 30px;
  }
  
  
  .card__face {
    position: absolute;
    width: 100%;
    height: 100%;
    /* -webkit-backface-visibility: hidden;
    backface-visibility: hidden; */
    overflow: hidden;
    border-radius: 16px;
    box-shadow: 0px 3px 18px 3px rgba(0, 0, 0, 0.2);
    
  }
  
  .card__face--back {
    background-color: var(--light);
    transform: rotateY(360deg);
  }
  
  .card__content {
    width: 100%;
    height: 100%;
    
  }
  
  .card__header {
    position: relative;
    padding: 30px 30px 40px;
  }
  
  .card__header:after {
    content: '';
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: linear-gradient(to bottom left, var(--primary) 10%, var(--secondary) 115%);
    z-index: -1;
    border-radius: 0px 0px 50% 0px;
  }
  
  .pp {
    display: block;
    width: 128px;
    height: 128px;
    margin: 0 auto 30px;
    border-radius: 50%;
    background-color: #FFF;
    border: 5px solid #FFF;
    object-fit: cover;
  }
  
  .card__header h2 {
    font-family: 'Bebas Neue',cursive;
    color: #FFF;
    font-size: 40px;
    font-weight: 900;
    text-transform: uppercase;
    text-align: center;
  }
  
  .card__body {
    padding: 30px;
  }
  
  .card__body h3 {
    color: var(--dark);
    font-size: 26px;
    font-weight: 600;
    margin-bottom: 15px;
  }
  
  .card__body p {
    font-family: 'Poppins',sans-serif;
    color: var(--dark);
    font-size: 18px;
    font-weight: bolder;
    line-height: 1.4;
  }
  
  .targets {
    position: absolute;
    top: 80%;
    right: -20%;
    border-radius: 10px;
    width: 95%;
    display: flex;
    padding: 30px;
  }
  
  #theory {
    position: relative;
    box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.2);
    outline: none;
    background-image: linear-gradient(to bottom left, var(--primary), var(--secondary));;
    width: 100px;
    height: 50px;
    right: -8%;
    border-color: #F3F3F3;
    border-radius: 10px;
    font-size: medium;
    color: #fff;
    cursor: pointer;
    transition: all 0.2s ease-out;
    transition: all 0.2s ease-out;
  }
  #theory:hover{
    width: 105px;
    height: 55px;
    font-size: 110%;
  }
  
  #experiment {
    box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.2);
    padding: 0px 20px 0px 20px;
    position: relative;
    right: -22%;
    outline: none;
    background-image: linear-gradient(to bottom left, var(--primary), var(--secondary));;
    width: 120px;
    height: 50px;
    border-color: #F3F3F3;
    border-radius: 10px;
    font-size: medium;
    color: #fff;
    cursor: pointer;
    transition: all 0.2s ease-out;
  }
   
  #experiment:hover{
    width: 125px;
    height: 55px;
    font-size: 110%;
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
    font-family: "Bebas Neue",cursive;
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
#Book_Slot{
    right:30px;
}
#logout{
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
        <a id="focal_head" href="#focal">REMOTE TRIGGERED LABS</a>
        <form action="web.php" method="post">
        <button id="logout">Logout</button>
        </form>
         <form action="BookSlot.php" method="post">
        <button id="Book_Slot">Book Slot</button>
      </form>
    </nav>
	<div id="welcome">Welcome!<div id="User"></div>
	</div>

	<div class="boxes">
		<nav class="exp_head">Experiments</nav>
		<div class="card" id="fl">
			<div class="card__inner" id="fl_in">
				<div class="card__face card__face--back">
					<div class="card__content">
						<div class="card__header">
							<img src="focal.jpeg" alt="" class="pp" />
							<h2>focal length</h2>
						</div>
						<div class="card__body">
							<h3>Overview</h3>
							<p>To calculate <strong>focal length</strong> of a <strong>biconvex</strong> lens by
								observing image formation by the lens on an <strong>IoT enabled optical
									bench</strong>.
							</p>
							<div class="targets">
								
                <form action="ftheory.php">
								<button id="theory" onclick="focal_theory()">Theory</button>
              </form>
							
                <form action="fdashboard.php">
								
                <button id="experiment" onclick="focal_exp()">Dashboard</button>
              </form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <div class="card" id="pend">
        <div class="card__inner" id="pend_in">
          <div class="card__face card__face--back">
            <div class="card__content">
              <div class="card__header">
                <img src="pendulem.jpg" alt="" class="pp" />
                <h2>Simple pendulum</h2>
              </div>
              <div class="card__body">
                <h3>Overview</h3>
                <p>The aim of the experiment is to measure the value of acceleration due to gravity,
                  by
                  using a simple pendulum setup at various lengths.</p>
                <div class="targets">
                  
                <form action="ptheory.php">
                  <button id="theory" onclick="pendulum_theory()">Theory</button>
                </form>

                <form action="pdashboard.php">
                  <button id="experiment" onclick="pendulum_exp()">Dashboard</button>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    

		<div class="card" id="van">
			<div class="card__inner" id="van_in">
				<div class="card__face card__face--back">
					<div class="card__content">
						<div class="card__header">
							<img src="vanish.jpeg" alt="" class="pp" />
							<h2>VANISHING ROD</h2>
						</div>
						<div class="card__body">
							<h3>Overview</h3>
							<p>The aim of this experiment is to observe the change in visibility of a glass rod
								when
								immersed in oil and in water.</p>
							<div class="targets">
								
                <form action="vtheory.php">
								<button id="theory" onclick="vanish_theory()">Theory</button>
              </form>

                <form action="vdashboard.php">
						    <button id="experiment" onclick="vanish_exp()">Dashboard</button>

                </form>
							</div>
						</div>
					</div>
				</div>
			</div>
  
</body>

</html>