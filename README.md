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
  fetch('https://blynk.cloud/external/api/update?token=ilEv4NM3BlZSMolddR7EsuurFMx6DR5a&v5=0')*//used to bring the usage key to the intial state*
  
  

    
  

  
 

  

  


