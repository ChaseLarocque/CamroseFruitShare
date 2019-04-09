/**
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)

March 31, 2019

deleteButtonFunc.js

This JavaScript file holds the different javascript files that
will be handling the delete and confirm button on the user page display tables.
**/

/*------------------------------------------------------------------------------------------*/

/** 
This function is called when the Delete button is clicked
on the userPage within the Offer display table or request display table.
It will change the delete button into a confirm button which will
need to be pressed again in order to confirm deleting the 
submission. 
**/

function confirmOfferEdit(id){
  originalId = id;
  var buttonId = document.getElementById('edit'+id); // Grabs the element from the html that has an id == id
  buttonId.innerText = 'CONFIRM'; // Change button text
  buttonId.setAttribute("onClick", 'editOffer(originalId)');// Change onClick call new function
}


/**
Once the Confirm button is clicked on the offer table display or request table display,
these functions will be called to then make an ajax request to the 
deleteSubmission.php file that will execute server side code 
in order to delete submission from the Database.
Once delete is finished it will refresh the page.
**/

function editOffer(id){// id is the button id which is the offerId on the fruit_offer table in the DB
  action = 'editOffer';
  $.ajax({
    url: 'editSubmission.php', //Post to File
    type: 'GET', //Request Type
    data: {'offerId' : id}, //Pass data along
    dataType: 'JSON',
    success: function(response){
        var name = response.contactName;
        console.log(name);
    }//success
  });//ajax
}//editOffer
