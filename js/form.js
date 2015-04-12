var membershipAmountDue = 50;
var membershipType = "Aloe"

<<<<<<< Updated upstream
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
		//Place selection list on page
		document.getElementById("standardCSALocations").innerHTML = '<select id="standardLocations"><option value="eastLiberty">East Liberty Farmers Market - Monday Afternoon</option><option value="glenshaw">Glenshaw Presbyterian Church - Thursday Afternoon</option><option value="mountLebanon">Mount Lebanon Hillaire Drive - Monday Afternoon</option><option value="owf">One Woman Farm - Thursday Afternoon</option><option value="squirrelHill">Squirrel Hill Farmers Market = Sunday Mornings</option><option value="stPaul">St. Pauls United Methodist Church - Monday Afternoon</option></select>';	
	} else if(selected == "biweeklyStandard") {
		signDate();
		amount = 325;
		type = "Bi-Weekly Standard Vegetable";
		membershipAmountDue = amount;
		membershipType = type;
		document.getElementById("plans").innerHTML = '<b>Plan(s): </b>' + membershipType;
		document.getElementById("amountDue").innerHTML = '<b>Total Amount Due: </b>$' + membershipAmountDue;
		//Place selection list on page
		document.getElementById("standardCSALocations").innerHTML = '<select id="standardLocations"><option value="eastLiberty">East Liberty Farmers Market - Monday Afternoon</option><option value="glenshaw">Glenshaw Presbyterian Church - Thursday Afternoon</option><option value="mountLebanon">Mount Lebanon Hillaire Drive - Monday Afternoon</option><option value="owf">One Woman Farm - Thursday Afternoon</option><option value="squirrelHill">Squirrel Hill Farmers Market = Sunday Mornings</option><option value="stPaul">St. Pauls United Methodist Church - Monday Afternoon</option></select>';
	} else if(selected == "largeMarket") {
		signDate();
		amount = 500;
		type = "Large Market Membership";
		membershipAmountDue = amount;
		membershipType = type;
		document.getElementById("plans").innerHTML = '<b>Plan(s): </b>' + membershipType;
		document.getElementById("amountDue").innerHTML = '<b>Total Amount Due: </b>$' + membershipAmountDue;
		//Place selection list on page
		document.getElementById("marketCSALocations").innerHTML = '<select id="marketLocations"><option value="eastLiberty">East Liberty Farmers Market - Monday Afternoon</option><option value="marketSquare">Market Square Farmers Market - Thursday Afternoon</option><option value="squirrelHill">Squirrel Hill Farmers Market</option></select>';
	} else if(selected == "smallMarket") {
		signDate();
		amount = 300;
		type = "Small Market Membership";
		membershipAmountDue = amount;
		membershipType = type;
		document.getElementById("plans").innerHTML = '<b>Plan(s): </b>' + membershipType;
		document.getElementById("amountDue").innerHTML = '<b>Total Amount Due: </b>$' + membershipAmountDue;
		//Place selection list on page
		document.getElementById("marketCSALocations").innerHTML = '<select id="marketLocations"><option value="eastLiberty">East Liberty Farmers Market - Monday Afternoon</option><option value="marketSquare">Market Square Farmers Market - Thursday Afternoon</option><option value="squirrelHill">Squirrel Hill Farmers Market</option></select>';
	} else if(selected == "coffee") {
		coffeeOptions();
	}
	//Place amount due on page
	document.getElementById("fullAmount").innerHTML = '<input type="radio" name="check" value="totalCheck" />I will send a check for $' + membershipAmountDue + '.';
	document.getElementById("halfAmount").innerHTML = '<input type="radio" name="check" value="halfCheck" />I will send a check for $' + (membershipAmountDue / 2) + ' by April 30th.  The remaining $' + (membershipAmountDue / 2) + ' will be sent by May 30th.';
=======
//Add 14 days to the current date.
function setDueDate (nDate) {
	var newdate = new Date(nDate);
	newdate.setDate(newdate.getDate() + 14);

	var dd = newdate.getDate();
	var mm = newdate.getMonth() + 1;
	var yyyy = newdate.getFullYear();

	mm = numToMonth(mm);

	return mm + " " + dd + ", " + yyyy;

}

//Convert Month Number Format to String
function numToMonth (nNum) {
	allMonths = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
	return allMonths[nNum];
>>>>>>> Stashed changes
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

	//Convert Month Number to Month String
	monthString = numToMonth(month);

	dateString = monthString + " " + date + ", " + year;
	document.getElementById("date").innerHTML = '<strong>Current Date: </strong>' + dateString;

	//Calculate due date
	dueDateString = setDueDate(d);

	//Check if 14 days is less than the cut off date of May 30
	var cutOffDate = new Date();
	cutOffDate = cutOffDate.setMonth(4, 30);
	if (dueDateString > cutOffDate) {
		dueDateString = CutOffDate;
	}

	document.getElementById("paymentWarning").innerHTML = '<strong>A $100 minimum deposit is required to reserve a membership.</strong> You must send a check by ' +
	dueDateString + ' or your membership will be forfeited.  Send your check to: <br /><br />One Woman Farm<br />PO Box 17<br />Bradford Woods, PA 15015';
});

<<<<<<< Updated upstream
//Used to populate the form based on coffee selections
function coffeeOptions() {
	var j = document.getElementById("coffeeSelection");//Get coffee selection
	var coffeeSelected = j.options[j.selectedIndex].value;//Get individual selection
	var coffeeType = "";
	var coffeeAmount = 0;
	//If statement for adding coffee options
	if(coffeeSelected != "none") {
		document.getElementById("coffee").innerHTML='<p><input type="radio" name="beans" value="ground" />Ground beans</p>' + 
		'<p><input type="radio" name="beans" value="whole" />Whole beans</p>';
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
			//Place selection list on page
		} else if(coffeeSelected == "decaf") {
			coffeeType = " Bi-Weekly 1lb. Decaffeinated Organic Coffee";
			coffeeAmount = 138;
			membershipType = membershipType + coffeeType;
			membershipAmountDue = membershipAmountDue + coffeeAmount;
			document.getElementById("plans").innerHTML = '<b>Plan(s): </b>' + membershipType;
			document.getElementById("amountDue").innerHTML = '<b>Total Amount Due: </b>$' + membershipAmountDue;
			//Place amount due on page
			document.getElementById("standardCSALocations").innerHTML = '<select id="standardLocations><option value="eastLiberty">East Liberty Farmers Market - Monday Afternoon</option><option value="glenshaw">Glenshaw Presbyterian Church - Thursday Afternoon</option><option value="mountLebanon">Mount Lebanon Hillaire Drive - Monday Afternoon</option><option value="owf">One Woman Farm - Thursday Afternoon</option><option value="squirrelHill">Squirrel Hill Farmers Market = Sunday Mornings</option><option value="stPaul">St. Pauls United Methodist Church - Monday Afternoon</option></select>';
			document.getElementById("fullAmount").innerHTML = '<input type="radio" name="check" value="totalCheck" />I will send a check for $' + membershipAmountDue + '.';
			document.getElementById("halfAmount").innerHTML = '<input type="radio" name="check" value="halfCheck" />I will send a check for $' + (membershipAmountDue / 2) + ' by April 30th.  The remaining $' + (membershipAmountDue / 2) + ' will be sent by May 30th.';			
			//Place selection list on page
			document.getElementById("standardCSALocations").innerHTML = '<select id="standardLocations><option value="eastLiberty">East Liberty Farmers Market - Monday Afternoon</option><option value="glenshaw">Glenshaw Presbyterian Church - Thursday Afternoon</option><option value="mountLebanon">Mount Lebanon Hillaire Drive - Monday Afternoon</option><option value="owf">One Woman Farm - Thursday Afternoon</option><option value="squirrelHill">Squirrel Hill Farmers Market = Sunday Mornings</option><option value="stPaul">St. Pauls United Methodist Church - Monday Afternoon</option></select>';
		}
	}
}
=======
function AjaxFunction() {
	/* This function is an adaptation from a tutorial on plus2net *
	 * http://www.plus2net.com/php_tutorial/ajax_drop_down_list.php */
	 
  var httpxml;
  try
  {
  // Firefox, Opera 8.0+, Safari
  httpxml=new XMLHttpRequest();
  }
  catch (e)
  {
  // Internet Explorer
    try
  		{
  				 httpxml=new ActiveXObject("Msxml2.XMLHTTP");
  		}
  	catch (e)
  		{
  		 try
  		  {
  		    httpxml=new ActiveXObject("Microsoft.XMLHTTP");
  		  }
  		 catch (e)
  		  {
  		    alert("Your browser does not support AJAX!");
  		    return false;
  		  }
  	  }
  }
  function stateck() {
    if(httpxml.readyState==4)
    {
      //alert(httpxml.responseText);
      var myarray = JSON.parse(httpxml.responseText);
      // Remove the options from 2nd dropdown list 
      for(j=document.registration.subcat.options.length-1;j>=0;j--)
      {
        document.registration.subcat.remove(j);
      }
      for (i=0;i<myarray.data.length;i++)
      {
        var optn = document.createElement("OPTION");
        optn.text = myarray.data[i].name;
        optn.value = myarray.data[i].lid;  // You can change this to subcategory 
        document.registration.subcat.options.add(optn);
      } 
    }
  } // end of function stateck

	var url="../php/dd.php";
  var cat=document.getElementById('ddl1').value;
  var cat2=document.getElementById('ddl2').value;
  if (!cat) {
    cat=0;
  }
  if (!cat2) {
    cat2=0;
  }
  url=url+"?cat="+cat+"&cat2="+cat2;
  httpxml.onreadystatechange=stateck;
  //alert(url);
  httpxml.open("GET",url,true);
  httpxml.send(null);
} // end of function AjaxFunction
>>>>>>> Stashed changes
