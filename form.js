var membershipAmountDue = 0;
var membershipType = ""

//Used to populate the form based on selected membership
function membershipOptions() {
	var e = document.getElementById("membership");//Get selection element
	var selected = e.options[e.selectedIndex].value;//Get selected index
	var type = "";
	var amount = 0;
	//If-else statement populates form
	if(selected == "weeklyStandard") {
		signDate();
		amount = 550;
		type = "Weekly Standard Vegetable;"
		membershipAmountDue = amount;
		membershipType = type;
		document.getElementById("plans").innerHTML = '<b>Plan(s): </b>' + membershipType;
		document.getElementById("amountDue").innerHTML = '<b>Total Amount Due: </b>$' + membershipAmountDue;
		pickupLocations(membershipType);
	} else if(selected == "biweeklyStandard") {
		signDate();
		amount = 325;
		type = "Bi-Weekly Standard Vegetable";
		membershipAmountDue = amount;
		membershipType = type;
		document.getElementById("plans").innerHTML = '<b>Plan(s): </b>' + membershipType;
		document.getElementById("amountDue").innerHTML = '<b>Total Amount Due: </b>$' + membershipAmountDue;
		pickupLocations(membershipType);
	} else if(selected == "largeMarket") {
		signDate();
		amount = 500;
		type = "Large Market Membership";
		membershipAmountDue = amount;
		membershipType = type;
		document.getElementById("plans").innerHTML = '<b>Plan(s): </b>' + membershipType;
		document.getElementById("amountDue").innerHTML = '<b>Total Amount Due: </b>$' + membershipAmountDue;
		pickupLocations(membershipType);
	} else if(selected == "smallMarket") {
		signDate();
		amount = 300;
		type = "Small Market Membership";
		membershipAmountDue = amount;
		membershipType = type;
		document.getElementById("plans").innerHTML = '<b>Plan(s): </b>' + membershipType;
		document.getElementById("amountDue").innerHTML = '<b>Total Amount Due: </b>$' + membershipAmountDue;
		pickupLocations(membershipType);
	} else if(selected == "coffee") {
		coffeeOptions();
	}
	//Place amount due on page
	document.getElementById("fullAmount").innerHTML = '<input type="radio" name="check" value="totalCheck" />I will send a check for $' + membershipAmountDue + '.';
	document.getElementById("halfAmount").innerHTML = '<input type="radio" name="check" value="halfCheck" />I will send a check for $' + (membershipAmountDue / 2) + ' by April 30th.  The remaining $' + (membershipAmountDue / 2) + ' will be sent by May 30th.';
}

//Used to get the current date
function signDate() {
	var d = new Date();
	var date = d.getDate();//Get current date
	var year = d.getFullYear();//Get current year
	var month = d.getMonth();//Get current month
	var dayString = "";
	var monthString = "";
	var dateString = "";
	var dueDate = 0;
	var dueDateString = "";
	//If-else statement gives correct month
	if(month == 0) {
		monthString = "January";
	} else if(month == 1) {
		monthString = "February";
	} else if(month == 2) {
		monthString = "March";
	} else if(month == 3) {
		monthString = "April";
	} else if(month == 4) {
		monthString = "May";
	} else if(month == 5) {
		monthString = "June";
	} else if(month == 6) {
		monthString = "July";
	} else if(month == 7) {
		monthString = "August";
	} else if(month == 8) {
		monthString = "September";
	} else if(month == 9) {
		monthString = "October";
	} else if(month == 10) {
		monthString = "November";
	} else if(month == 11) {
		monthString = "December";
	}
	dateString = monthString + " " + date + ", " + year;
	document.getElementById("date").innerHTML = '<b>Date: </b>' + dateString;
	//If-else statement to calculate due date
	if(month == 0) {
		dueDate = date + 14;
		if(dueDate > 31) {
			monthString = "February";
			dueDate = dueDate - 31;
		}
	} else if(month == 1) {
		dueDate = date + 14;
		//Does not check for leap year
		if(dueDate > 28) {
			monthString = "March";
			dueDate = dueDate - 28;
		}
	} else if(month == 2) {
		dueDate = date + 14;
		if(dueDate > 31) {
			monthString = "April";
			dueDate = dueDate - 31;
		}
	} else if(month == 3) {
		dueDate = date + 14;
		if(dueDate > 30) {
			monthString = "May";
			dueDate = dueDate - 30;
		}		
	} else if(month == 4) {
		dueDate = date + 14;
		if(dueDate > 31) {
			monthString = "June";
			dueDate = dueDate - 31;
		}		
	} else if(month == 5) {
		dueDate = date + 14;
		if(dueDate > 30) {
			monthString = "July";
			dueDate = dueDate - 30;
		}		
	} else if(month == 6) {
		dueDate = date + 14;
		if(dueDate > 31) {
			monthString = "August";
			dueDate = dueDate - 31;
		}		
	} else if(month == 7) {
		dueDate = date + 14;
		if(dueDate > 31) {
			monthString = "September";
			dueDate = dueDate - 31;
		}		
	} else if(month == 8) {
		dueDate = date + 14;
		if(dueDate > 30) {
			monthString = "October";
			dueDate = dueDate - 30;
		}		
	} else if(month == 9) {
		dueDate = date + 14;
		if(dueDate > 31) {
			monthString = "November";
			dueDate = dueDate - 31;
		}		
	} else if(month == 10) {
		dueDate = date + 14;
		if(dueDate > 30) {
			monthString = "December";
			dueDate = dueDate - 30;
		}		
	} else if(month == 11) {
		dueDate = date + 14;
		//Does not change year
		if(dueDate > 31) {
			monthString = "January";
			dueDate = dueDate - 31;
		}	
	}
	//Currently does not check for May 30th final due date
	dueDateString = monthString + " " + dueDate + ", " + year;
	document.getElementById("paymentWarning").innerHTML = '<b>A $100 minimum deposit is required to reserve a membership.</b> You must send a check by ' +
	dueDateString + ' or your membership will be forfeited.  Send your check to: <br /><br />One Woman Farm<br />PO Box 17<br />Bradford Woods, PA 15015';
}

//Used to populate the form based on coffee selections
function coffeeOptions() {
	var j = document.getElementById("coffeeSelection");//Get coffee selection
	var coffeeSelected = j.options[j.selectedIndex].value;//Get individual selection
	var coffeeType = "";
	var coffeeAmount = 0;
	//If statement for adding coffee options
	if(coffeeSelected != "none") {
		document.getElementById("coffee").innerHTML='<p><input type="radio" name="beans value="ground" />Ground beans</p>' + 
		'<p><input type="radio" name="beans value="whole" />Whole beans</p>';
		//If-else statement to add coffeeType and coffeeAmount to total
		if(coffeeSelected == "caff") {
			coffeeType = " Bi-Weekly 1lb. Organic Coffee";
			coffeeAmount = 126;
			membershipType = membershipType + coffeeType;
			membershipAmountDue = membershipAmountDue + coffeeAmount;
			document.getElementById("plans").innerHTML = '<b>Plan(s): </b>' + membershipType;
			document.getElementById("amountDue").innerHTML = '<b>Total Amount Due: </b>$' + membershipAmountDue;
			//Place amount due on page
			document.getElementById("fullAmount").innerHTML = '<input type="radio" name="check" value="totalCheck" />I will send a check for $' + membershipAmountDue + '.';
			document.getElementById("halfAmount").innerHTML = '<input type="radio" name="check" value="halfCheck" />I will send a check for $' + (membershipAmountDue / 2) + ' by April 30th.  The remaining $' + (membershipAmountDue / 2) + ' will be sent by May 30th.';
			pickupLocations(membershipType);
		} else if(coffeeSelected == "decaf") {
			coffeeType = " Bi-Weekly 1lb. Decaffeinated Organic Coffee";
			coffeeAmount = 138;
			membershipType = membershipType + coffeeType;
			membershipAmountDue = membershipAmountDue + coffeeAmount;
			document.getElementById("plans").innerHTML = '<b>Plan(s): </b>' + membershipType;
			document.getElementById("amountDue").innerHTML = '<b>Total Amount Due: </b>$' + membershipAmountDue;
			//Place amount due on page
			document.getElementById("fullAmount").innerHTML = '<input type="radio" name="check" value="totalCheck" />I will send a check for $' + membershipAmountDue + '.';
			document.getElementById("halfAmount").innerHTML = '<input type="radio" name="check" value="halfCheck" />I will send a check for $' + (membershipAmountDue / 2) + ' by April 30th.  The remaining $' + (membershipAmountDue / 2) + ' will be sent by May 30th.';			
			pickupLocations(membershipType);
		}
	}
}

//Used to populate the form to determine pickup locations
function pickupLocations(memType) {
	//If-else statement is used to determine which dropdown list will be placed on page
	if(memType == "Weekly Standard Vegetable;") {

	} else
}