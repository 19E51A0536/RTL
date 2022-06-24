## REMOTE LABS
### Young's Double Slit Experiment

The aim of this experiment is to observe the interference of two light waves.

* Platform
  - Visual Studios
 
 * Languages Used
   - html
   - css
   - java script
   - node js

**Young folder contains all the html,css,java script files along with the dependent files for the funtioning of the experiment in the dashboard.**

**Each file in detail**

* young.html
  - The outlook of the dashboard page
  - The slider used in experiment is defined here.
  - The plotly library is called here using <iframe> to display the interactive plot to the user.
  - The leave() function is used for the leave session button.
 
* young.css
  - Used for designing the dashboard page with proper alignments.
  - All the classes declared in the young.html are used here for alignments.
  
* script.js
  - All the declared functions are defined here for the functionality of the dashboard.
  
**function myTimer()**
  * It is used for the countdown timer.

**slider.onchange**
  *updating the slider on change of input by the user.

 **function leave()**
  * It is used to go back to home page using location.href and also turning off the usage key.

*Blynk API*
  
  fetch('https://blynk.cloud/external/api/update?token=ilEv4NM3BlZSMolddR7EsuurFMx6DR5a&v5=0') *//used to bring the usage key to the intial state*
  
#### main.js
* The whole working of the experiment is based on this main.js 
  
**function young_exp()**
  -It first checks whether the device is online or not using isHardwareConnected blynk api
   
  fetch('https://blynk.cloud/external/api/isHardwareConnected?token=ilEv4NM3BlZSMolddR7EsuurFMx6DR5a')
  
  - If the device is online it will check the status of the usage button using 
  
  fetch('https://blynk.cloud/external/api/get?token=ilEv4NM3BlZSMolddR7EsuurFMx6DR5a&v5')
    
      - If its value is "0" then it allots the setup to the user by redirecting to young.html and then turns its value to "1"
      
      fetch('https://blynk.cloud/external/api/update?token=ilEv4NM3BlZSMolddR7EsuurFMx6DR5a&v5=1')
    
      -If its already "1" it pops an alert saying "Setup is already in use"
 -
    If the device is offline it will display an alert saying " Device is offline" and sends an alert mail to the admin.
  
  
 #### Blynk switches

* Usage(v5)
  - checks the status of the experiment usage 
    - if(0)--> not in use
    - if(1)--> in use
    
* Slider(v4)
  - The virtual pin of slider in blynk
    - Changes depending upon the input given by the user

  

    
  

  
 

  

  


