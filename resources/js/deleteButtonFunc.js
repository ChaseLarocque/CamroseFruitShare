/**
deleteButtonFunc.js
Alex Ho, Chase Larocque, Justin Ikenouye
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)
March 31, 2019


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

function confirmOfferDelete(id){
  originalId = id;
  var buttonId = document.getElementById('delete'+id); // Grabs the element from the html that has an id == id
  buttonId.innerText = 'CONFIRM'; // Change button text
  buttonId.setAttribute("onClick", 'deleteOffer(originalId)');// Change onClick call new function
}

function confirmRequestDelete(id){
  originalId = id;
  var buttonId = document.getElementById('delete'+id);
  buttonId.innerText = 'CONFIRM'; //Change button text
  buttonId.setAttribute("onClick", 'deleteRequest(originalId)'); //Change onClick call new function
}

/**
Once the Confirm button is clicked on the offer table display or request table display,
these functions will be called to then make an ajax request to the 
deleteSubmission.php file that will execute server side code 
in order to delete submission from the Database.
Once delete is finished it will refresh the page.
**/

function deleteOffer(id){// id is the button id which is the offerId on the fruit_offer table in the DB
  action = 'deleteOffer';
  $.ajax({
    url: 'deleteSubmission.php', //Post to File
    data: {action: 'deleteOffer', offerId: id}, //Pass data along
    success: reloadData(),
    type: 'POST' //Request Type
  });
}

function deleteRequest(id){ // id is the button id which is the requestId on the fruit_request table in the DB
  action = 'deleteRequest';
  $.ajax({
    url: 'deleteSubmission.php', //Post to file
    data: {action: 'deleteRequest', requestId: id}, //Pass data along
    success: reloadData(),
    type: 'POST' //Request Type
  });
}

function reloadData(){
    window.location.href=window.location.href; // Reload page after complete
}