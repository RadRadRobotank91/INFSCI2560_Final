var membershipAmountDue = 50;
var membershipType = "Aloe"

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