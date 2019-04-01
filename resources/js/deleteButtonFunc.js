
function confirmOfferDelete(id){
      var buttonId = document.getElementById(id);
      console.log(id, buttonId);
      buttonId.innerText = 'CONFIRM';
      buttonId.className = 'btn btn-secondary btnRed';
      buttonId.setAttribute("onclick", 'deleteOffer(id)');
    }

function deleteOffer(id){
  console.log(id);
  $.ajax({
    type: "POST",
    url: 'deleteSubmission.php',
    data: {action: 'deleteOffer', offerId: id},
  });
  window.location.href=window.location.href;
}

function confirmRequestDelete(id){
      var buttonId = document.getElementById(id);
      console.log(id, buttonId);
      buttonId.innerText = 'CONFIRM';
      buttonId.className = 'btn btn-secondary btnRed';
      buttonId.setAttribute("onclick", 'deleteRequest(id)');
    }

function deleteRequest(id){
  console.log(id);
  $.ajax({
    type: "POST",
    url: 'deleteSubmission.php',
    data: {action: 'deleteRequest', requestId: id},
  });
  window.location.href=window.location.href;
}