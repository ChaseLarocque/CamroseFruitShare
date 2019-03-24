jQuery(function ($) {
    var $inputs = $('input[name=contactEmail],input[name=contactPhone]');
    $inputs.on('input', function () {
        // Set the required property of the other input to false if this input is not empty.
        $inputs.not(this).prop('required', !$(this).val().length);
    });
});