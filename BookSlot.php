<!DOCTYPE html>
<html>
<head>
	<title>RTL Slot Booking</title>
</head>

<style type="text/css">
	:root {
  --primary: #055a72;
    --secondary: #75dee6;
  --dark: #212121;
  --light: #F3F3F3;
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
	font-family: sans-serif;

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
    color: rgb(245, 241, 241);
    font-size: 230%;
    padding: 5px 16px;
    text-decoration: none;
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
#return_back{
    right: 20px;
}

.navbar button:hover{
    background-size: 300%;
    background-position: left;
}
  #focal_head{
    line-height: 1.3;
    font-family: calibri, sans-serif;
    font-weight: 800;
    letter-spacing: 1px;
    float: left;
  }

section{
	display: flex;
	width: 100%;
	height: 100vh;
	align-items: center;
	text-align: center;
	justify-content: center;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(pic.jpg);
    background-size: cover;
	color: rgb(15, 15, 15);
}
section .div1{
	border: 1px solid white;
	width: 25%;
	height: 71%;
	border-radius: 5px;
	background-color: white;
	border-radius: 50px;
	    -moz-box-shadow: inset 0 0 20px grey;
	    -webkit-box-shadow:inset 0 0 20px grey;
	    box-shadow: inset 0 0 20px black;
}
form{
	align-content: center;
	justify-content: center;
	margin-top: 10px;
}
.user,.mail,.pass, .experiment{
	width: 70%;
	border: none;
	height: 15px;
	padding: 15px;
	padding-bottom: 5px;
	padding-left: 5px;
	margin-top: 20px;
	background-color: white;
	border-bottom: 1px solid grey;
	color: black;
}
.button{
	margin-top: 35px;
	width: 60%;
	height: 35px;
    color: rgb(12, 12, 12);
    background-image: linear-gradient(to left,#1d8baf,#f1eef1,#1d8baf);
    font-size: 16px;
    border: none;
    cursor: pointer;
    border-radius: 40px;
}
h2{
	margin-top: 25px;
}
</style>
<script type="text/javascript">
	function validation()
	{
		var N,E,P,T,B;
		N=document.getElementById('Name').value;
		E=document.getElementById('Email').value;
        P=document.getElementById('Experiment').value;
        T=document.getElementById('BookingTime').value;
		B=document.getElementById('BookingDate').value;
	
		if(N=="" || E==""|| P==""|| T=="" || B=="")
			alert("Please fill all the details for Slot Booking");
		else
			alert("Your Slot Booking is Successful");
	}
</script>
<body>
	<nav class="navbar">
		<a id="focal_head" href="#focal">REMOTE TRIGGERED LABS</a>
        
        <form action="home.php" method="post">
        <button id="return_back">Back to Home</button>
    </nav>
    
<section>
	<div class="div1">
		<h2>RTL Slot Booking</h2>
		<form>
			<input id="Name" type="text" placeholder="Full Name" class="user"><br>
			<input id="Email" type="email" placeholder="Email ID" class="mail"><br>
            <input id="Experiment" type="experiment" placeholder="Experiment Name" class="experiment"><br>
			<input id="BookingDate" type="Date" placeholder="Booking Date(DD/MM/YY)" class="pass"><br>
            <input id="BookingTime" type="Time" placeholder="Booking BookingTime" class="pass"><br>
			<input type="submit" value="Book Slot" class="button" onclick="validation()"><br>
		</form>
	</div>
</section>
</body>
</html>