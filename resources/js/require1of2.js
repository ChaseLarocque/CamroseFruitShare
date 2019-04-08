/*
require1of2.js
Alex Ho, Chase Larocque, Justin Ikenouye
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)

Used in offerFruit.php to necessitate that at least contact email or contact phone number are filled out
*/

jQuery(function ($) {
    var $inputs = $('input[name=contactEmail],input[name=contactPhone]');
    $inputs.on('input', function () {
        // Set the required property of the other input to false if this input is not empty.
        $inputs.not(this).prop('required', !$(this).val().length);
    });
});