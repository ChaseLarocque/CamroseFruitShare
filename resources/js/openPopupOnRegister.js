//Function creates a popup window on register page load to show the etiquette list
function openPopup() {
  var confirmation = confirm("ETTIQUETTE: \n\nPLEASE READ THE ETTIQUETTE LIST AND CLICK OK\n\n" + 
  	"1. Respect Other People \n2. Respect Other People's Homes and Businesses \n3. Respect The Fruit Tree");
  if (confirmation == false){
  	openPopup();
  }
}