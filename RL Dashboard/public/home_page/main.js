


function vanish_theory(){
  location.href='../vanish/theory.html';
}

// function vanish_exp(){
//   location.href='../vanish/vanish2.html';
// }


function vanish_exp(){
  //fetch('https://blynk.cloud/external/api/update?token=xhn8z8fVu6weEbbHIgVNjmQ4waWrX6Xm&v2=1')//led
  fetch('https://blynk.cloud/external/api/isHardwareConnected?token=xhn8z8fVu6weEbbHIgVNjmQ4waWrX6Xm')
  .then(response => response.json())
  .then(data => {
    const connection = JSON.stringify(data)
    // console.log(connection);

    if(connection == "true"){
      fetch('https://blynk.cloud/external/api/get?token=xhn8z8fVu6weEbbHIgVNjmQ4waWrX6Xm&v3')// vr2 usage
      .then(response => response.json())
      .then(data => {
        const myJSON = JSON.stringify(data)
        if (myJSON == "0") {
          fetch('https://blynk.cloud/external/api/update?token=xhn8z8fVu6weEbbHIgVNjmQ4waWrX6Xm&v3=1')
          location.href='../vanish/vanish2.html'
          
        }
         else{
           alert('Setup is in use, please try again later.');
         }
      })
    }
    if(connection=="false"){
     // console.log("hahaha");
      
      fetch('https://blynk.cloud/external/api/get?token=xhn8z8fVu6weEbbHIgVNjmQ4waWrX6Xm&v0')
      .then(response => response.json())
      .then(data => {
        const myJSON = JSON.stringify(data)
        console.log(myJSON);
        if (myJSON == "1") {
          //console.log("sorry");
        }
          else{
           // console.log("sarle");
            fetch('https://blynk.cloud/external/api/update?token=xhn8z8fVu6weEbbHIgVNjmQ4waWrX6Xm&v0=1')
           // console.log("ok");
          }
          alert('Device is currently offline, please try again later');
          fetch('https://blynk.cloud/external/api/update?token=xhn8z8fVu6weEbbHIgVNjmQ4waWrX6Xm&v0=0')
      });
    }
    
  });
}


//vanish multiplex
// function vanish_exp(){
//   // For first vanishing rod experiment exp1
//   // Check if Hardware is Connected for first device
//   fetch('https://blynk.cloud/external/api/isHardwareConnected?token=R77dMWPsQ8B7xavEV_HVjaVF01DklJji')
//     .then(response => response.json())
//     .then(data => {
//      // const connection = JSON.stringify(data)
//      const connection="false";
//       if(connection == "true"){
//           // Hardware is connected, so we check usage in vanish_exp1 function
//           vanish_exp1();                     
//         }
//       else{
//         // device automation for vanish_exp1
//         fetch('https://blynk.cloud/external/api/get?token=R77dMWPsQ8B7xavEV_HVjaVF01DklJji&v4')
//           .then(response => response.json())
//           .then(data => {
//             const myJSON = JSON.stringify(data)
//             console.log(myJSON);
//             if (myJSON == "1") {
//               console.log("sorry");
//             }
//             else{
//             console.log("sarle");
//               fetch('https://blynk.cloud/external/api/update?token=R77dMWPsQ8B7xavEV_HVjaVF01DklJji&v4=1')
//               console.log("ok");
//             }
//             console.log("not connected");
//             // alert('Device 1 is currently offline, please try again later');
//             fetch('https://blynk.cloud/external/api/update?token=R77dMWPsQ8B7xavEV_HVjaVF01DklJji&v4=0')
//             vanish_exp2();    
//         });
//       }  
//     }); 
//   }

//   function vanish_exp1(){
//     //usage switch for van_exp1
//     fetch('https://blynk.cloud/external/api/get?token=R77dMWPsQ8B7xavEV_HVjaVF01DklJji&v3')
//     .then(response => response.json())
//        .then(data=>{
//           const myJSON=JSON.stringify(data)
//           if(myJSON=="0")
//           {
//               // myJSON = 0 means that the setup is free
//               // toggle it to 0 in leave session of van_exp1
//               fetch('https://blynk.cloud/external/api/update?token=R77dMWPsQ8B7xavEV_HVjaVF01DklJji&v3=1')
//               location.href="../vanish/vanish.html";
//           }
          
//           else{
//               // if the setup of exp1 is in use, we check if vanish_exp2 function
//               vanish_exp2();
//           }
//        })
//   }
  
//   function vanish_exp2(){
//     //usage switch for van_exp2
//     fetch('https://blynk.cloud/external/api/isHardwareConnected?token=xhn8z8fVu6weEbbHIgVNjmQ4waWrX6Xm')// van_exp2 auth token
//       .then(response => response.json())
//       .then(data => {
//         const connection = JSON.stringify(data)
//         // console.log(connection);

//         if(connection == "true"){
//           fetch('https://blynk.cloud/external/api/get?token=xhn8z8fVu6weEbbHIgVNjmQ4waWrX6Xm&v3')
//           .then(response => response.json())
//           .then(data=>{   
//               const myJSON=JSON.stringify(data)
//               if(myJSON=="0")
//               {
//                   // myJSON = 0 means that the setup is free
//                   // toggle it to 0 in leave session of van_exp1
//                   fetch('https://blynk.cloud/external/api/update?token=xhn8z8fVu6weEbbHIgVNjmQ4waWrX6Xm&v3=1')
//                   location.href="../vanish/vanish2.html";  
//                   //fetch('https://blynk.cloud/external/api/update?token=xhn8z8fVu6weEbbHIgVNjmQ4waWrX6Xm&v2=1')// fetch key for relay
//               }
//               else{
//                 alert("Setups are already in use, try again later");
//               }})
                
//         }else{
//           fetch('https://blynk.cloud/external/api/get?token=xhn8z8fVu6weEbbHIgVNjmQ4waWrX6Xm&v0')// device automation for van_exp2
//             .then(response => response.json())
//             .then(data => {
//               const myJSON = JSON.stringify(data)
//               console.log(myJSON);
//               if (myJSON == "1") {
//                 //console.log("sorry");
//               }
//               else{
//               // console.log("sarle");
//                 fetch('https://blynk.cloud/external/api/update?token=xhn8z8fVu6weEbbHIgVNjmQ4waWrX6Xm&v0=1')
//               // console.log("ok");
//               }
//               // alert('Device 2 is currently offline, please try again later');
//               alert("Setups are already in use, try again later");
//               fetch('https://blynk.cloud/external/api/update?token=xhn8z8fVu6weEbbHIgVNjmQ4waWrX6Xm&v0=0')
//           });
//         }
//       })
//   }

  
/*YDSE*/
function young_theory(){
  location.href='../young/theory.html';
}

//function young_exp(){
  //location.href='../young/young.html';
  // fetch('https://blynk.cloud/external/api/isHardwareConnected?token=ilEv4NM3BlZSMolddR7EsuurFMx6DR5a')
  // .then(response => response.json())
  // .then(data => {
  //   const connection = JSON.stringify(data)
    
  //   if(connection == "true"){
  //   //location.href='../young/young.html';
  //    let response= fetch('https://blynk.cloud/external/api/get?token=ilEv4NM3BlZSMolddR7EsuurFMx6DR5a&v5') //usage key for ydse
  //     .then(response => response.json())
  //     .then(data=>{
  //         const myJSON=JSON.stringify(data)
  //         // console.log(response);
  //         // console.log(myJSON);
  //         // console.log(typeof(myJSON));
  //         if(myJSON=="0")
  //         {
  //             // myJSON = 0 means that the setup is free
  //            // location.href='../young/young.html';  
  //             fetch('https://blynk.cloud/external/api/update?token=ilEv4NM3BlZSMolddR7EsuurFMx6DR5a&v5=1') //uasge fetch to 0 in leave session
  //              location.href='../young/young.html';        
  //           }
  //             else if(myJSON=="1"){
               
  //               alert("Setup is already in use, try again later");
  //         }
         
  //     })
  //    } 
                 
             
  //   else{
  //           alert("Device is Offline, please try again later.");
  //         }   })
    
  //  }



 function focal_theory(){
  location.href='../focal_length/theory.html';
 }
 function focal_exp(){
  
 // location.href='../focal_length/index.html';
    
  fetch('https://blynk.cloud/external/api/isHardwareConnected?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc')
  .then(response => response.json())
  .then(data => {
    const connection = JSON.stringify(data)
    // console.log(connection);

    if(connection == "true"){
      fetch('https://blynk.cloud/external/api/get?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v6')
      .then(response => response.json())
      .then(data => {
        const myJSON = JSON.stringify(data)
        if (myJSON == "0") {
         
          location.href='../focal_length/index.html'
          fetch("https://blynk.cloud/external/api/update?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v6=1")//fl2 usage
          fetch("https://blynk.cloud/external/api/update?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v3=1")// fl2 relay
        }
        else{
          alert("Setup is in use, please try again later.");
        }
      })
    }
  if(connection=="false"){
    // console.log("hahaha");
     
     fetch('https://blynk.cloud/external/api/get?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v7')
     .then(response => response.json())
     .then(data => {
       const myJSON = JSON.stringify(data)
       console.log(myJSON);
       if (myJSON == "1") {
         //console.log("sorry");
       }
         else{
          // console.log("sarle");
           fetch('https://blynk.cloud/external/api/update?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v7=1')
          // console.log("ok");
         }
         alert('Device is currently offline, please try again later');
         fetch('https://blynk.cloud/external/api/update?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v7=0')
     });
   }
   
  })
 }
  

//focal length multiplex
// function focal_exp(){
//   // For first focal length experiment exp1   
//   // Check if Hardware is Connected for first device
//   fetch('https://blynk.cloud/external/api/isHardwareConnected?token=LvC6vyL_uPSpPdgnlCln0I9Vab6zcogV')
//     .then(response => response.json())
//     .then(data => {
//      //const connection = JSON.stringify(data)
//       const connection="false";
//       if(connection == "true"){
//           // Hardware is connected, so we check usage in focal_exp1 function
//           focal_exp1();                     
//         }
//       else{
//         // device automation for focal_exp1
//         fetch('https://blynk.cloud/external/api/get?token=LvC6vyL_uPSpPdgnlCln0I9Vab6zcogV&v8')
//           .then(response => response.json())
//           .then(data => {
//             const myJSON = JSON.stringify(data)
//             console.log(myJSON);
//             if (myJSON == "1") {
//               console.log("sorry");
//             }
//             else{
//             console.log("sarle");
//               fetch('https://blynk.cloud/external/api/update?token=LvC6vyL_uPSpPdgnlCln0I9Vab6zcogV&v8=1')
//               console.log("ok");
//             }
//             console.log("not connected");
//             // alert('Device 1 is currently offline, please try again later');
//             fetch('https://blynk.cloud/external/api/update?token=LvC6vyL_uPSpPdgnlCln0I9Vab6zcogV&v8=0')

//             focal_exp2();    
//         });
//       }  
//     }); 
//   }

//   function focal_exp1(){
//     //usage switch for focal_exp1
//     //fetch('https://blynk.cloud/external/api/get?token=LvC6vyL_uPSpPdgnlCln0I9Vab6zcogV&v6')
//     // .then(response => response.json())
//     //    .then(data=>{
//     //       const myJSON=JSON.stringify(data)
//        //   if(myJSON=="0")
//          // {
//               // myJSON = 0 means that the setup is free
//               // toggle it to 0 in leave session of focal_exp1
//               //fetch('https://blynk.cloud/external/api/update?token=LvC6vyL_uPSpPdgnlCln0I9Vab6zcogV&v6=1')
//                location.href="../focal_length/index2.html";
//               //location.href="https://www.google.com/";
//          // }
          
//           // else{
//           //     // if the setup of exp1 is in use, we check if focal_exp2 function
//           //      focal_exp2();
//           // }
//   //      })
//   }
  
//   function focal_exp2(){
//     //usage switch for focal_exp2
//     fetch('https://blynk.cloud/external/api/isHardwareConnected?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc')// focal_exp2 auth token
//       .then(response => response.json())
//       .then(data => {
//         const connection = JSON.stringify(data)
//         // console.log(connection);
//         //const connection = "false";
//         if(connection == "true"){
//           fetch('https://blynk.cloud/external/api/get?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v6')
//           .then(response => response.json())
//           .then(data=>{
//               const myJSON=JSON.stringify(data)
//               if(myJSON=="0")
//               {  console.log("ooooo");
//                   // myJSON = 0 means that the setup is free
//                   // toggle it to 0 in leave session of focal_exp2
//                   fetch('https://blynk.cloud/external/api/update?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v6=1')
//                   location.href="../focal_length/index.html";  
//                   console.log("ppppp");
//                    fetch('https://blynk.cloud/external/api/update?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jq&v3=1')// relay
//               }
//               else{
//                 alert("Setups are already in use, try again later");
//               }})
                
//         }else{
//           fetch('https://blynk.cloud/external/api/get?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v7')// device automation for focal_exp2
//             .then(response => response.json())
//             .then(data => {
//               const myJSON = JSON.stringify(data)
//               console.log(myJSON);
//               if (myJSON == "1") {
//                 //console.log("sorry");
//               }
//               else{
//               // console.log("sarle");
//                 fetch('https://blynk.cloud/external/api/update?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v7=1')
//               // console.log("ok");
//               }
//               // alert('Device 2 is currently offline, please try again later');
//               alert("Setups are already in use, try again later");
//               fetch('https://blynk.cloud/external/api/update?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v7=0')
//           });
//         }
//       })
//   }

window.addEventListener('DOMContentLoaded', () => {
  if(typeof sessionStorage.getItem('uid')  === 'object'){
    location.href = '../sign_in/sign_in.html'
  }
})


window.addEventListener("orientationchange", ()=> {
  if(window.orientation == 90){
    // console.log("landscape");
    document.querySelector('.head').style.display = 'block'
  }else{
    // console.log("portrait");
    document.querySelector('.head').style.display = 'none'
  }
})



function young_exp(){
  fetch('https://blynk.cloud/external/api/get?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v11')
  fetch('https://blynk.cloud/external/api/get?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v12')
  fetch('https://blynk.cloud/external/api/get?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v13')
  .then(response => response.json())
          .then(data=>{
              const myJSON=JSON.stringify(data)
              if(myJSON=="0")
              {  console.log("ooooo");
                  
                  fetch('https://blynk.cloud/external/api/update?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v11=1')
                  location.href="https://www.google.com/";  
                  console.log("ppppp");
                  fetch('https://blynk.cloud/external/api/update?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v12=1')
                  location.href="https://www.google.com/";  
                  fetch('https://blynk.cloud/external/api/update?token=nQ1T3sl75lK3QvSnkbhRd2smAHaV4Jqc&v13=1')
                  location.href="https://www.google.com/";  
              }
              else{
              
               location.href="//www.youtube.com/";  
              }})
                
        }
      

