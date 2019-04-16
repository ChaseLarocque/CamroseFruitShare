/*
limitDate.js
Alex Ho, Chase Larocque, Justin Ikenouye
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)

Used in fruitSearch.php to limit the search date to today - 30 days from now
*/

var today = new Date().toISOString().split('T')[0];
var maxDate = new Date();
maxDate.setDate((maxDate.getDate()) + 30);

maxDate = maxDate.toISOString().split('T')[0];

document.getElementsByName("requestDate1")[0].setAttribute('min', today);
document.getElementsByName("requestDate1")[0].setAttribute('max', maxDate);

document.getElementsByName("requestDate2")[0].setAttribute('min', today);
document.getElementsByName("requestDate2")[0].setAttribute('max', maxDate);

document.getElementsByName("requestDate3")[0].setAttribute('min', today);
document.getElementsByName("requestDate3")[0].setAttribute('max', maxDate);