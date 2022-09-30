var myInterval;
let UserVR2;

// function myfunction() {
    
//     document.getElementById("bt1").innerHTML = "Recalibrating";
//     fetch("https://blr1.blynk.cloud/external/api/update?token=xhn8z8fVu6weEbbHIgVNjmQ4waWrX6Xm&v1" + "1")
//     myInterval = setInterval(myTimer, 500);
// }

function myTimer() {
    
    fetch('https://blr1.blynk.cloud/external/api/get?token=xhn8z8fVu6weEbbHIgVNjmQ4waWrX6Xm&v1')
        .then(response => response.json())
        .then(data => {
            const myJSON = JSON.stringify(data)
            if (myJSON == "0") {
                document.getElementById("bt1").innerHTML = "Recalibrate";
                clearInterval(myInterval);
                document.querySelector("#u").value = 0;
            
                document.querySelector("#us").innerHTML = "0";
                
            }
        });
   
    return false;
}


    
    document.querySelector("#us").innerHTML = saved_u_val;
    document.querySelector("#u").value = saved_u_val;
  

    const inputslider_u = document.querySelector("#u");
    inputslider_u.oninput = () => {
        let value1 = inputslider_u.value;
        document.querySelector("#us").innerHTML = value1;
        fetch("https://blr1.blynk.cloud/external/api/update?token=xhn8z8fVu6weEbbHIgVNjmQ4waWrX6Xm&v1=" + value1)
        sessionStorage.setItem('saved_val_u', value1);

    return false;
    }




function Up(ID) {
    // const btn_up = document.getElementById('btn_up').style.color='red';
    document.getElementById(ID).value = 0;
    let response=fetch("https://blynk.cloud/external/api/get?token=xhn8z8fVu6weEbbHIgVNjmQ4waWrX6Xm&v1")
  
    .then(response => response.json())
    .then(data => {
         const myJSON = JSON.stringify(data)
         console.log(response);
         console.log(myJSON);
         console.log(typeof(myJSON));
 
    if(myJSON=="0"){
       alert("Rods are already UP")
      //console.log("hello");
   
    
   }
     else if(myJSON=="1")
    {
      //const btn_down = document.getElementById('btn_down').style.color="#055a72";
      // console.log("bye");
       fetch("https://blynk.cloud/external/api/update?token=xhn8z8fVu6weEbbHIgVNjmQ4waWrX6Xm&v1=0")
      
  
     
    }
   
    });
 
 };
 function Down(ID) {
    // const btn_down = document.getElementById('btn_down').style.color='red';
    document.getElementById(ID).value = 1;
    let response=fetch("https://blynk.cloud/external/api/get?token=xhn8z8fVu6weEbbHIgVNjmQ4waWrX6Xm&v1")
  
    .then(response => response.json())
  
 
    .then(data => {
         const myJSON = JSON.stringify(data)
         console.log(response);
         console.log(myJSON);
         console.log(typeof(myJSON));
 
    if(myJSON=="1"){
   
       alert("Rods are already DOWN");
 
   }
     else if(myJSON=="0")
    { 
       //const btn_up = document.getElementById('btn_up').style.color='#055a72';
       //console.log("bye");
       fetch("https://blynk.cloud/external/api/update?token=xhn8z8fVu6weEbbHIgVNjmQ4waWrX6Xm&v1=1")
       
    
    }
   
    });
 
 };
function increment(ID) {
    const cur = document.getElementById(ID);
    var v1 = cur.value;
    v1 = (Number(v1) + Number(cur.step));
    if (Number(v1) > 1) {
        v1 = 1;
    }
   
    cur.value = v1;
    document.getElementById(ID + "s").innerHTML = v1;
    
    console.log(String.fromCharCode(ID.charCodeAt(0) - 68));
    sessionStorage.setItem('saved_val_u', v1);
    fetch("https://blr1.blynk.cloud/external/api/update?token=xhn8z8fVu6weEbbHIgVNjmQ4waWrX6Xm&v1=" + v1)
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
    // console.log(String.fromCharCode(ID.charCodeAt(0) - 68));
    sessionStorage.setItem('saved_val_u', v1);
    // if(curr_state != 1){
    fetch("https://blr1.blynk.cloud/external/api/update?token=xhn8z8fVu6weEbbHIgVNjmQ4waWrX6Xm&v1=" + v1)
    //     curr_state = 1;
    // }

    // let response=fetch("https://blr1.blynk.cloud/external/api/get?token=xhn8z8fVu6weEbbHIgVNjmQ4waWrX6Xm&v1")
    //     .then(response => response.json())
    //     .then(data => {
    //         const myJSON = JSON.stringify(data)
    //         console.log(response);
    //         console.log(myJSON);
    //         console.log(typeof(myJSON));

    //         if(myJSON=="1"){
    //         }else if(myJSON=="0"){
    //             //console.log("bye");
    //             fetch("https://blr1.blynk.cloud/external/api/update?token=xhn8z8fVu6weEbbHIgVNjmQ4waWrX6Xm&v1=1")
    //             document.getElementById(ID + "s").innerHTML = 1;
    //         }
    //     });
}

function leave(){
    sessionStorage.removeItem("saved_countdown");
    sessionStorage.removeItem("saved_val_v");
    sessionStorage.removeItem("saved_val_u");
    fetch("https://blr1.blynk.cloud/external/api/update?token=xhn8z8fVu6weEbbHIgVNjmQ4waWrX6Xm&v5=" + UserVR2)
    fetch("https://blr1.blynk.cloud/external/api/update?token=xhn8z8fVu6weEbbHIgVNjmQ4waWrX6Xm&v3=0")
    fetch("https://blr1.blynk.cloud/external/api/update?token=xhn8z8fVu6weEbbHIgVNjmQ4waWrX6Xm&v1=0")
        .then(() => {
            location.replace("../home_page/home.html")
        })
}

function return_home(){
    location.href='../home_page/home.html'
}

window.addEventListener('beforeunload', () => {
    fetch("https://blr1.blynk.cloud/external/api/update?token=R77dMWPsQ8B7xavEV_HVjaVF01DklJji&v0=" + "1")
    fetch('https://blr1.blynk.cloud/external/api/update?token=R77dMWPsQ8B7xavEV_HVjaVF01DklJji&v3=0')
})