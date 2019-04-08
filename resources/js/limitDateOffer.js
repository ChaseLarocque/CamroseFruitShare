/*
limitDateOffer.js
Alex Ho, Chase Larocque, Justin Ikenouye
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)

Used in fruitOffer.php to limit the offering date to today - 30 days from now
*/

var today = new Date().toISOString().split('T')[0];
var maxDate = new Date();
maxDate.setDate((maxDate.getDate()) + 30);

maxDate = maxDate.toISOString().split('T')[0];

document.getElementsByName("offerDate")[0].setAttribute('min', today);
document.getElementsByName("offerDate")[0].setAttribute('max', maxDate);