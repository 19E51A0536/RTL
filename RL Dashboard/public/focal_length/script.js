var myInterval;
var value1;
var value2;
var data = [];

function myfunction() {
    
    document.getElementById("bt1").innerHTML = "Recalibrating";
    fetch("https://blynk.cloud/external/api/update?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v0=" + "1")
    myInterval = setInterval(myTimer, 500);
}

function myTimer() {
    fetch('https://blynk.cloud/external/api/get?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v0')
        .then(response => response.json())
        .then(data => {
            const myJSON = JSON.stringify(data)
            if (myJSON == "0") {
                document.getElementById("bt1").innerHTML = "Recalibrate";
                clearInterval(myInterval);
                document.querySelector("#u").value = 6.8;
                document.querySelector("#v").value = 7.3;
                document.querySelector("#us").innerHTML = "6.8";
                document.querySelector("#vs").innerHTML = "7.3";
                sessionStorage.setItem('saved_val_u', 6.8);
                sessionStorage.setItem('saved_val_v', 7.3);
                saved_u_val = 6.8;
                saved_v_val = 7.3;

                document.querySelector("#f").innerHTML = ((parseFloat(saved_v_val)*parseFloat(saved_u_val))/(parseFloat(saved_u_val) + parseFloat(saved_v_val))).toFixed(2);
            }
        });
    
    return false;
}

//Object and scree sliders
var saved_u_val; //object
var saved_v_val; //screen

document.addEventListener('DOMContentLoaded', () => {

    if(typeof sessionStorage.getItem('uid')  === 'object'){
        location.href = '../sign_in/sign_in.html'
    }

    saved_u_val = sessionStorage.getItem('saved_val_u');
    saved_v_val = sessionStorage.getItem('saved_val_v');
    console.log(saved_u_val);
    console.log(saved_v_val);

    if(saved_u_val == null && saved_v_val == null){
        saved_u_val = 6.8;
        saved_v_val = 7.3;
        sessionStorage.setItem('saved_val_u', saved_u_val);
        sessionStorage.setItem('saved_val_v', saved_v_val);
        console.log(saved_u_val);
        console.log(saved_v_val);
        localStorage.setItem('experiment_Data', JSON.stringify(data));        
    }
    value1 = saved_u_val;
    value2 = saved_v_val;
    document.querySelector("#vs").innerHTML = saved_v_val;
    document.querySelector("#us").innerHTML = saved_u_val;
    document.querySelector("#u").value = saved_u_val;
    document.querySelector("#v").value = saved_v_val;
    document.querySelector("#f").innerHTML = ((parseFloat(saved_v_val)*parseFloat(saved_u_val))/(parseFloat(saved_u_val) + parseFloat(saved_v_val))).toFixed(2);

   

    const inputslider_u = document.querySelector("#u");
    inputslider_u.oninput = () => {
        value1 = inputslider_u.value;
        document.querySelector("#us").innerHTML = value1;
        sessionStorage.setItem('saved_val_u', value1);
        document.querySelector("#f").innerHTML = ((parseFloat(value1)*parseFloat(value2))/(parseFloat(value1) + parseFloat(value2))).toFixed(2);
        return false;
    }

    const inputslider_v = document.querySelector("#v");
    inputslider_v.oninput = () => {
        value2 = inputslider_v.value;
        document.querySelector("#vs").innerHTML = value2;
        sessionStorage.setItem('saved_val_v', value2);
        document.querySelector("#f").innerHTML = ((parseFloat(value1)*parseFloat(value2))/(parseFloat(value1) + parseFloat(value2))).toFixed(2);
        return false;
    }

    inputslider_u.onmouseup = () => {
        fetch("https://blynk.cloud/external/api/update?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v1=" + value1)
    }

    inputslider_v.onmouseup = () => {
        fetch("https://blynk.cloud/external/api/update?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v2=" + value2)
    }

});

//joystick 

function Up(ID) {
    
    const btn_plus3 = document.getElementById('btn_plus3').style.color='#BDBDBD';
    document.getElementById(ID).value = 0;
    let response=fetch("https://blynk.cloud/external/api/get?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v5")
  
    .then(response => response.json())
    .then(data => {
         const myJSON = JSON.stringify(data)
         console.log(response);
         console.log(myJSON);
         console.log(typeof(myJSON));
         if(myJSON=="0"){

            alert("Already UP");
      
        }
       else(myJSON=="1")
    {
        const btn_minus3 = document.getElementById('btn_minus3').style.color='#055a72';
       fetch("https://blynk.cloud/external/api/update?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v5=0")
       
     
    }
   
    });
 
 };
 function Down(ID) {
    const btn_minus3 = document.getElementById('btn_minus3').style.color='#BDBDBD';
    document.getElementById(ID).value = 1;
    let response=fetch("https://blynk.cloud/external/api/get?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v5")
  
    .then(response => response.json())
  
 
    .then(data => {
         const myJSON = JSON.stringify(data)
         console.log(response);
         console.log(myJSON);
         console.log(typeof(myJSON));
         if(myJSON=="1"){

            alert("Already DOWN");
      
        }
    
         else(myJSON=="0")
    { 
    //    console.log("bye");
       const btn_plus3 = document.getElementById('btn_plus3').style.color='#055a72';
    //    console.log("llllll");
       fetch("https://blynk.cloud/external/api/update?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v5=1")
       
    }
   
    });
 
 };

 function Left(ID) {
    const btn_plus4 = document.getElementById('btn_plus4').style.color='#BDBDBD';
    document.getElementById(ID).value = 0;
    let response=fetch("https://blynk.cloud/external/api/get?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v4")
  
    .then(response => response.json())
    .then(data => {
         const myJSON = JSON.stringify(data)
         console.log(response);
         console.log(myJSON);
         console.log(typeof(myJSON));
         if(myJSON=="0"){

            alert("Already LEFT");
      
        }
  else(myJSON=="1")
    {
      
       const btn_minus4 = document.getElementById('btn_minus4').style.color='#055a72';
       fetch("https://blynk.cloud/external/api/update?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v4=0")
            
    }
   
    });
 
 };
 function Right(ID) {
    const btn_minus4 = document.getElementById('btn_minus4').style.color='#BDBDBD';
    document.getElementById(ID).value = 1;
    let response=fetch("https://blynk.cloud/external/api/get?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v4")
  
    .then(response => response.json())
  
 
    .then(data => {
         const myJSON = JSON.stringify(data)
         console.log(response);
         console.log(myJSON);
         console.log(typeof(myJSON));
         if(myJSON=="1"){

            alert("Already RIGHT");
      
        }
    
    else(myJSON=="0")
    { 
       const btn_plus4 = document.getElementById('btn_plus4').style.color='#055a72';
       fetch("https://blynk.cloud/external/api/update?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v4=1")
     
       
    
    }
   
    });
 
 };


 //joystick increment & decrement
 function increment(ID) {
    const cur = document.getElementById(ID);
    var v1 = cur.value;
    v1 = (Number(v1) + Number(cur.step));
    if (Number(v1) < 1) {
        v1 = 1;
        
    }
   
    cur.value = v1;
    document.getElementById(ID + "s").innerHTML = v1;
    
    
   
    fetch("https://blr1.blynk.cloud/external/api/update?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v5=" + v1)
    fetch("https://blr1.blynk.cloud/external/api/update?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v4=" + v1)
}

function decrement(ID) {
    const cur = document.getElementById(ID);
    var v1 = cur.value;
    v1 = (Number(v1) - Number(cur.step));
    if (Number(v1) < 0) {
        v1 = 0;
    }
    cur.value = v1;
    document.getElementById(ID + "s").innerHTML = v1;
    
    sessionStorage.setItem('saved_val_u', v1);
    // if(curr_state != 1){
    fetch("https://blr1.blynk.cloud/external/api/update?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v5=" + v1)
    fetch("https://blr1.blynk.cloud/external/api/update?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v4=" + v1)
}

//object/sreecn increment and decrement
function increment(ID) {
    // console.log("Haan main pagal hai for " + ID);
    const cur = document.getElementById(ID);
    var v1 = cur.value;
    v1 = (Number(v1) + Number(cur.step)).toFixed(1);
    if(ID == "u"){
        if(Number(v1) > 21.5){
            v1 = 21.5;
        }
        value1 = v1;
    }else{
        if(Number(v1) > 21.5){
            v1 = 21.5;
        }
        value2 = v1;
    }
    cur.value = v1;
    document.getElementById(ID + "s").innerHTML = v1;
    console.log(String.fromCharCode(ID.charCodeAt(0) - 68));
    sessionStorage.setItem("saved_val_"+ID, v1);
    fetch("https://blynk.cloud/external/api/update?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v" + String.fromCharCode(ID.charCodeAt(0) - 68) + "=" + v1)
    document.querySelector("#f").innerHTML = parseFloat((parseFloat(value1)*parseFloat(value2))/(parseFloat(value1) + parseFloat(value2))).toFixed(2);

}


function decrement(ID) {
    
    const cur = document.getElementById(ID);
    var v1 = cur.value;
    v1 = (Number(v1) - Number(cur.step)).toFixed(1);
    cur.value = v1;
    if(ID == "u"){
        if(Number(v1) < 6.8){
            v1 = 6.8;
        }
        value1 = v1;
    }else{
        if(Number(v1) < 7.3){
            v1 = 7.3;
        }
        value2 = v1;
    }
    document.getElementById(ID + "s").innerHTML = v1;
    console.log(String.fromCharCode(ID.charCodeAt(0) - 68));
    sessionStorage.setItem("saved_val_"+ID, v1);
    

    fetch("https://blynk.cloud/external/api/update?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v" + String.fromCharCode(ID.charCodeAt(0) - 68) + "=" + v1)
    document.querySelector("#f").innerHTML = ((parseFloat(value1)*parseFloat(value2))/(parseFloat(value1) + parseFloat(value2))).toFixed(2);

}




// const inputslider_u = document.querySelector("#u");
// inputslider_u.oninput = () => {
//     let value1 = inputslider_u.value;
//     document.querySelector("#us").innerHTML = value1;
//     fetch("https://blr1.blynk.cloud/external/api/update?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&5=" + value1)
//     fetch("https://blr1.blynk.cloud/external/api/update?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v4=" + value1)
//     sessionStorage.setItem('saved_val_u', value1);

// return false;
// }



function leave(){
    sessionStorage.removeItem("saved_countdown");
    sessionStorage.removeItem("saved_val_v");
    sessionStorage.removeItem("saved_val_u");
    // console.log("DONE");
    // console.log("YES");
    // location.replace("../home_page/home.html")
    fetch("https://blynk.cloud/external/api/update?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v0=" + "1")
    fetch("https://blynk.cloud/external/api/update?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v6=0")
        .then(() => {
             location.replace("../home_page/home.html")
             fetch("https://blynk.cloud/external/api/update?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v3=0")// relay
        })
}

window.addEventListener('beforeunload',  () => {
    // document.querySelector("#f").innerHTML = ((parseFloat(value1)*parseFloat(value2))/(parseFloat(value1) + parseFloat(value2))).toFixed(2);
    fetch("https://blynk.cloud/external/api/update?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v0=1")
    fetch("https://blynk.cloud/external/api/update?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v6=0")

});


function return_home(){
    location.href='../home_page/home.html'
}
function return_dashboard(){
    location.href='index.html'
}
