/**
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)

March 31, 2019

deleteButtonFunc.js

This JavaScript file holds the different javascript files that
will be handling the delete button on the user page.
**/

/** 
This function is called when the Delete button is clicked
on the userPage within the Offer display table.
It will change the button into a confirm button which will
need to be pressed again in order to confirm deleting the 
submission. 
**/

function confirmOfferDelete(id){
  var buttonId = document.getElementById(id); // Grabs the element from the html that has an id == id
  buttonId.innerText = 'CONFIRM'; // Change the text of the button to Confirm
  //buttonId.className = 'btn btn-secondary btnRed';
  buttonId.setAttribute("onclick", 'deleteOffer(id)');
}

/** 
This function is called when the Delete button is clicked
on the userPage within the request display table.
It will change the button into a confirm button which will
need to be pressed again in order to confirm deleting the 
submission. 
**/

function confirmRequestDelete(id){
  var buttonId = document.getElementById(id);
  buttonId.innerText = 'CONFIRM';
  //buttonId.className = 'btn btn-secondary btnRed';
  buttonId.setAttribute("onclick", 'deleteRequest(id)');
}

/**
Once the Confirm button is clicked on the offer table display,
this function will be called to then make an ajax request to the 
deleteSubmission.php file that will execute server side code 
in order to delete submission from the Database.
Once delete is finished it will refresh the page.
**/

function deleteOffer(id){// id is the button id which is the offerId on the fruit_offer table in the DB
  $.ajax({
    type: "POST",
    url: 'deleteSubmission.php',
    data: {action: 'deleteOffer', offerId: id}
  });
  window.location.href=window.location.href;
}


/**
Once the Confirm button is clicked on the request table display,
this function will be called to then make an ajax request to the 
deleteSubmission.php file that will execute server side code 
in order to delete submission from the Database.
Once delete is finished it will refresh the page.
**/
function deleteRequest(id){ // id is the button id which is the requestId on the fruit_request table in the DB
  $.ajax({
    type: "POST",
    url: 'deleteSubmission.php',
    data: {action: 'deleteRequest', requestId: id}
  });
  window.location.href=window.location.href;
}