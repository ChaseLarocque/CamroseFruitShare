









function setSelectedFruitOffer(s, fruitName){

	for ( var i = 0; i < s.options.length; i++ ) {

        if ( s.options[i].text == fruitName ) {
            s.options[i].selected = true;
            return;
		}
	}
}
setSelectedFruitOffer(document.getElementById("fruitOfferVal"),selectFruit);