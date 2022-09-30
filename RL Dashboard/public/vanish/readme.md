# REMOTE TRIGGERED LABS

## VANISHING ROD EXPERIMENT 2
The aim of this experiment is to observe the change in visibility of a glass rod when immersed in oil and in water due to the change in refrctive index.

##### Platform
* Visual Studios

##### Languages Used
* html
* css
* java script
* node js
  - install node js
  - npm install -g nodemon
  - npm init

Open the vanish folder in the [van_exp2.zip](https://github.com/SathwikReddyBandi/RTL/blob/main/van_exp2.zip) file
- It contians all the html,css,java script files along with the dependent files for the funtioning of the experiment in the dashboard.

##### Each file in detail
* vanish2.html
  - The outlook of the dashboard page
  - The buttons used in experiment are first declared here.
  - The Up() function is used for Up button, same goes with Down() function for Down button.
  - The leave() function is used for the leave session button.

* vanish.css
  - Used for designing the dashboard page with proper alignments.
  - All the classes declared in the vanish2.html are used here for alignments.

* script.js
  - All the declared functions are defined here for the functionality of the dashboard.
 
 **function myTimer()**
   - It is used for the countdown timer.
  
**function Up()** 
  - It is used to move the rods up.

  *Blynk API*
  
  fetch("https://blynk.cloud/external/api/get?token=xhn8z8fVu6weEbbHIgVNjmQ4waWrX6Xm&v1") //*used to check the intial state of the device*
 
  - It reads the value of the virtual pin assigned to the stepper motor (v1)
    - if the v1=0 means the rods are already up, no change.
    - if the v1=1 means the rods are down, updates the value to the 0 using fetch update api.
  
  fetch("https://blynk.cloud/external/api/update?token=xhn8z8fVu6weEbbHIgVNjmQ4waWrX6Xm&v1=0") //*rods go up*
    
**function Down()** 
  - It is used to move the rods down.

   *Blynk API*
   
   fetch("https://blynk.cloud/external/api/get?token=xhn8z8fVu6weEbbHIgVNjmQ4waWrX6Xm&v1") //*used to check the intial state of the device*                           
   - It reads the value of the virtual pin assigned to the stepper motor (v1)
     - if the v1=1 means the rods are already down, no change.
     - if the v1=0 means the rods are down, updates the value to the 1 using fetch update api.
   
   fetch("https://blynk.cloud/external/api/update?token=xhn8z8fVu6weEbbHIgVNjmQ4waWrX6Xm&v1=1") *//rods go down*

**function leave()** 
  - It is used to go back to home page.

  *Blynk API*
  
  fetch("https://blynk.cloud/external/api/get?token=xhn8z8fVu6weEbbHIgVNjmQ4waWrX6Xm&v1") //*used to check the intial state of the device*
 
  - It reads the value of the virtual pin assigned to the stepper motor (v1)
    - if the v1=0 means the rods are already up, no change.
    - if the v1=1 means the rods are down, replace the rods to top.
  

### main.js
 The whole working of the experiment is based on this main.js
 **MULTIPLEXING**
 The experiments will be alloted based on the availability
 
 **function vanish_exp()**
  - This funciton decides which experiment to give by checking the hardware connected api and usage.
  
  vanish_exp(){
  *//checking the status of the first device*
    fetch.get -->Hardware Connected for vanish_exp1{
    true{
        *// checking usage key*
       if(0)--> fetch to 1 : go to vainish.html of exp1
       else{
       *//checking the status of the second device*
    fetch.get -->Hardware Connected for vanish_exp2{
    twue{
         *// checking usage key*
       if(0)--> fetch to 1 : go to vainish2.html of exp2
       else{
       alert--> Both devices are busy
       }
      }
    
   
