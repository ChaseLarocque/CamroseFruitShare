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
  buttonId.setAttribute("onClick", "loadEditPage(originalId)");// Change onClick call new function
}


/**
This funciton will simply redirect the page from the userPage to the editSubmissionPage.php file which is a html file
that looks like offer submission page. 
**/
function loadEditPage(id) {
  window.location.href = "editSubmissionPage.php?offerId=" + id ;
}