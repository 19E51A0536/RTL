<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vanishing Rod | Theory </title>
    <!-- <script src="vanish.js"></script> -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@200&display=swap');
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

* {
  margin: 0;
  padding: 0;
}

body {
  display: flex;
  flex-wrap: wrap;
  font-family: montserrat, sans-serif;
  width: 100%;
  min-height: 100vh;
  background: linear-gradient(90deg, #055a72, #75dee6);
}

.card {
  margin: 100px auto 0;
  width: 80vw;
  /* height: 100vh; */
  perspective: 1000px;
  padding: 0px 0px 30px;
}

.card__inner {
  width: 100%;
  height: 100%;
  /* transition: transform 1s; */
  /* transform-style: preserve-3d;
  cursor: pointer; */
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
  overflow: auto;
}

.card__content::-webkit-scrollbar{
  width: 5px;
}

.card__content::-webkit-scrollbar-thumb{
  border-radius: 30px;
  background: -webkit-gradient(linear, left top, left bottom, from(#75dee6), 
  to(#055a72));
  box-shadow: inset 2px 2px 2px rgba(255, 255, 255, 0.25), inset -2px -2px -2px
  rgba(0, 0, 0, 0.2);
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

.card__header h2 {
  font-family: 'Poppins',sans-serif;
  color: #FFF;
  font-size: 30px;
  font-weight: 200;
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


.navbar{
  overflow: hidden;
  background-position: right;
  cursor: pointer;

  
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

.card__body li {
  font-family: 'Poppins',sans-serif;
  color: var(--dark);
  font-size: 18px;
  font-weight: bolder;
  line-height: 1.4;
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
  position: fixed;
  overflow: auto;
  display: f;
  font-family: "Poppins",sans-serif;
  background-image: var(--gradient);
  border: 1px solid rgb(255, 255, 255);
  border-radius: 10px;
  color: #fff;
  font-size: 120%;
  line-height: 2;
  padding: 0px 10px 0 10px;

  top: 15px;
  right: 4vw;
  float: right;
  background-size: 200%;
  background-position: right;
  transition: background-position 1s;
  cursor: pointer;
}

.navbar button:hover{
  background-size: 300%;
  background-position: left;
}
#sign_in{
  right: 20px;
}

.card__body img {
  display: flexbox;
  padding: 10px;
  margin: auto;
  font-family: 'Poppins',sans-serif;
  justify-content: center;
  text-align: center;
}
figcaption {
  font-family: 'Poppins',sans-serif;
  padding-left: 10px;
}

/* .head.is_vanished{
  display: none;
}

.head.is_not_vanished{
  display: block;
} */


    </style>
   
    <script>
        function return_home() {
            location.href = '../home_page/home.html'
        }
    </script>
</head>

<body>
    <!-- <div class="header">
        Vanishing Rod Experiment
    </div><br/>
    <div class="expand-card">
        <details>
            <summary>Aim:</summary>
            <p>This experiment aims to depict the concept of refraction and the phenomenon of
                invisibility of an object if reflection is removed.</p>
        </details>
    </div><br/>

    <div class="expand-card">
        <details>
            <summary>Apparatus:</summary>
            <p>The apparatus used in the experiment is Glass rods, sunflower oil, water, glass
                beakers. (Make sure that the refractive index of the glass being used is similar to the
                refractive index of the oil.)</p>
        </details>
    </div><br/>

    <div class="expand-card">
        <details>
            <summary>Physics of the Experiment:</summary>
            <p>The main physics behind the experiment can be summarized as:
            <ul>
                <li>Whatever we see around us is due to the light which gets reflected from the object
                    and reaches our eyes.</li>
                <li>If this reflection is somehow removed, then no light will reach the observer and hence
                    he/she will not be able to see the object, effectively making it invisible.</li>
                <li>When the rod is immersed in water, due to different refractive indices of the water
                    and the glass, light bends to different degrees in both the mediums and hence we are
                    able to discern between the separate mediums.</li>
                <li>On the other hand, when the glass rod is immersed in oil, since the refractive indices
                    are similar, light behaves as if it is passing through a homogenous medium. As a result,
                    our eyes are not able to differentiate between the glass rod and the oil and hence the
                    rod appears to have disappeared.</li>
            </ul>
            </p>
        </details>
    </div> -->

    <nav class="navbar">
        <a id="focal_head" href="#focal">Remote Triggered Lab</a>
        <form action="home.php" method="post">
        <button id="Leave_Queue" onclick="return_home()">Back to Home</button>
    </form>
    </nav>

    <div class="card" id="fl">
        <div class="card__inner" id="fl_in">
            <div class="card__face card__face--back">
                <div class="card__content">
                    <div class="card__header">
                        <h2>Vanishing Rod</h2>
                    </div>
                    <div class="card__body">
                        <h3>Aim</h3>
                        <p>The aim of this experiment is to observe the change in visibility of a glass rod when
                            immersed in oil and in water</p><br />
                        <h3>Apparatus</h3>
                        <p>The apparatus used in the experiment is Glass rods (Refractive index ≈ 1.5), sunflower oil
                            (Refractive index ≈ 1.47), water (Refractive index ≈ 1.33), glass beakers. (Make sure that
                            the refractive index of the glass being used is similar to the refractive index of the oil.)
                        </p><br />
                        <h3>Procedure:</h3>
                        <p>The apparatus used in the experiment is Glass rods (Refractive index ≈ 1.5), sunflower oil
                            (Refractive index ≈ 1.47), water (Refractive index ≈ 1.33), glass beakers. (Make sure that
                            the refractive index of the glass being used is similar to the refractive index of the oil.)
                        </p>
                        <h3>Physics of the Experiment</h3>
                        <p>The main physics behind the experiment can be summarized as:
                        <ul><br />
                            <li>Whatever we see around us is due to the light which gets reflected from the object
                                and reaches our eyes.</li>
                            <li>If this reflection is somehow removed, then no light will reach the observer and hence
                                he/she will not be able to see the object, effectively making it invisible.</li>
                            <li>When the rod is immersed in water, due to different refractive indices of the water
                                and the glass, light bends to different degrees in both the mediums and hence we are
                                able to discern between the separate mediums.</li>
                            <li>On the other hand, when the glass rod is immersed in oil, since the refractive indices
                                are similar, light behaves as if it is passing through a homogenous medium. As a result,
                                our eyes are not able to differentiate between the glass rod and the oil and hence the
                                rod appears to have disappeared.</li>
                        </ul>
                        </p>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>