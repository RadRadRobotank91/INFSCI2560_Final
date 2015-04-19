var membershipType;
var coffeeType;
var location;

function toggleMarketingOther(newVal){
  var e=document.getElementById('marketingOther');
  if ( newVal == '3' || newVal == '10' ) {
    e.style.display='block';
    e.required = true;
  } else { 
    e.style.display='none';
    e.required = false;
  }
}

//Add 14 days to the current date.
function setDueDate (nDate) {
	var newdate = new Date(nDate);
	newdate.setDate(newdate.getDate() + 14);

	var dd = newdate.getDate();
	var mm = newdate.getMonth();
	var yyyy = newdate.getFullYear();

	mm = numToMonth(mm);

	return mm + " " + dd + ", " + yyyy;

}

//Add 14 days to the current date.
function formatDate (fDate) {
	var dd = fDate.getDate();
	var mm = fDate.getMonth();
	var yyyy = fDate.getFullYear();

	mm = numToMonth(mm);

	return mm + " " + dd + ", " + yyyy;

}

//Convert Month Number Format to String
function numToMonth (nNum) {
	allMonths = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
	return allMonths[nNum];
}

$(document).ready(function() {
	//Used to set the Current Date and the Payment Due Date
	var d = new Date();
	var date = d.getDate();//Get current date
	var year = d.getFullYear();//Get current year
	var month = d.getMonth();//Get current month
	var dayString = "";
	var allMonths = "";
	var monthString = "";
	var dateString = "";
	var dueDate = 0;
	var dueDateString = "";

	// alert("curMonth" + month);

	//Convert Month Number to Month String
	monthString = numToMonth(month);
	// alert("MonthString: " + monthString);

	dateString = monthString + " " + date + ", " + year;
	// alert("Date String" + dateString);
	document.getElementById("date").innerHTML = '<strong>Current Date: </strong>' + dateString;

	//Calculate due date
	dueDateString = setDueDate(d);


	//Check if 14 days is less than the cut off date of May 30
	var dateCompare = new Date();
	dateCompare.setDate(d.getDate() + 14);
	var cutOffDate = new Date();
    cutOffDate.setMonth(4, 30);
	// alert("Cutoff" + cutOffDate);
	// alert("Format Cutoff: " + formatDate(cutOffDate));
	// alert("DateCompare: " + dateCompare);
	// dateCompare.setMonth(4,30); //Test Date Comparison

	if (dateCompare >= cutOffDate) {
		dueDateString = formatDate(cutOffDate);
	}

	document.getElementById("paymentWarning").innerHTML = '<br /><strong>A $100 minimum deposit is required to reserve a membership.</strong> You must send a check by ' +
	dueDateString + ' or your membership will be forfeited.  <br /><br />Send your check to:<br />One Woman Farm<br />PO Box 17<br />Bradford Woods, PA 15015<br />';

  /* Tooltip Plug-ins */ 
  $("span.csaTT").hover(function () {
    $(this).append('<div class="tooltip"><ul><li><strong>Standard Vegetable CSA</strong> is a weekly (23 week) or bi-weekly (12 week) pick-up of a box of fresh, local vegetables.</li><li><strong>OWF CSA Market Membership</strong> lets you pick out exactly what and how much you want for the week from OWF farmers market stands. One Woman Farm will add an additional 7&#37; credit to your account.</li><li><strong>Coffee CSA</strong> is a bi-weekly (12 week) pick-up of 1lb of organic coffee. It can be added to your Standard Vegetable CSA or Market Membership, or selected as a standalone CSA plan.</li></ul></div>');
  }, function () {
    $("div.tooltip").remove();
  });
  /* Tooltip Plug-ins */ 
  $("span.delegateTT").hover(function () {
    $(this).append('<div class="tooltip"><p>Do not add your name here. You will add your information below.</p><p>You are about to become an OWFer, and so is anyone else that would use this CSA on your behalf. List the names of anyone besides you that would use this CSA (Example: Significant Other, Family member, Friend, Coworker, etc).</p><p><strong>OWFer</strong> - <em>n.</em> The amazing community of people that make One Woman Farm great.</p></div>');
  }, function () {
    $("div.tooltip").remove();
  });
});