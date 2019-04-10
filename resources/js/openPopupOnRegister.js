/*
openPopupOnRegister.js
Alex Ho, Chase Larocque, Justin Ikenouye
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)

Function is used to open a popup when the user registers in order
to ensure (or at least try to ensure) that they read the ettiquette.
*/
function openPopup() {
  var confirmation = confirm("ETTIQUETTE: \n\nPLEASE READ THE ETTIQUETTE LIST AND CLICK OK\n\n" + 
  	"1. Respect Other People \n2. Respect Other People's Homes and Businesses \n3. Respect The Fruit Tree");
  if (confirmation == false){
  	openPopup();
  }//if
}//openPopup