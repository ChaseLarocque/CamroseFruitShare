
function confirmOfferButton(id){
      var buttonId = document.getElementById(id);
      console.log(id, buttonId);
      buttonId.innerText = 'Confirm';
      buttonId.className = 'btn btn-secondary btnRed';
      buttonId.setAttribute("onclick", 'deleteOffer(id)');
    }