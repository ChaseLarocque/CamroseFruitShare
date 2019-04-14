/**
editDropDownSelect.js
Alex Ho, Chase Larocque, Justin Ikenouye
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)
April 11, 2019


This Javascript file will find the corresponding variable that was set as $fruitOffName in the php file 
and will set it to be selected in the ediitSubmissionPage. 
**/

/*------------------------------------------------------------------------------------------*/

/** 
This function is called to pre-select a fruit from within the select of the form in the editSubmissionPage.php

var s is the select section of the form
var fruitName is the fruit value that was selected before and will be compared to with options 
	to set the new selected option. 

**/


function setSelectedFruitOffer(s, fruitName){

	for ( var i = 0; i < s.options.length; i++ ) { //iterate through all options of the select

        if ( s.options[i].text == fruitName ) { //matched $fruitOffName variable to option
            s.options[i].selected = true; // set option to selected
            return;
		}
	}
}
setSelectedFruitOffer(document.getElementById("fruitVal"),selectFruit); //call setSelectedFruitOffer() function with proper variables.