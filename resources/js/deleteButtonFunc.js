
function confirmButton(id){
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
    data: {doThis: 'deleteOffer', offerId: id},
  });
}