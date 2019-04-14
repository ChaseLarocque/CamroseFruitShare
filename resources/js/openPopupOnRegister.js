/*
openPopupOnRegister.js
Alex Ho, Chase Larocque, Justin Ikenouye
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)

Function is used to open a popup when the user registers in order
to ensure (or at least try to ensure) that they read the ettiquette.
*/
function openPopup() {
  var confirmation = confirm("ETTIQUETTE: \n\nPLEASE READ THE ETTIQUETTE LIST AND CLICK OK\n\n" + 
  	"1. Introduce yourself. \n\n2. Confirm with the owner if they want a share of the fruit, and if they do, ask them for containers or boxes to put their share in." +  
"\n\n3. Pick up windfall fruit. \n\n4. Pick fruit. Divide the fruit." +
"\n\n5. Thank the owner. Say thank you and let the homeowner know you are leaving. Let the homeowners know that if they wish to donate to our organization they can do so through our website. " +
"\nYou are responsible for:" +
"\n\nPicking fruit in a safe, responsible manner" +
"\nDetermining the quality of the fruit. If you are unsure, please refer to the fruit health guide for diseases and other issues." +
"\nNo need to pick all of the fruit. Pick what you can, safely, in the time allotted.")
  if (confirmation == false){
  	openPopup();
  }//if
}//openPopup

