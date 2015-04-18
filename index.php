<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name='robots' content='index,follow' />
	<meta name='googlebot' content='index,follow' />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Sign up Now! | One Woman Farm</title>

	<link rel="alternate" type="application/rss+xml" title="One Woman Farm" href="http://www.onewomanfarm.com/rss.xml" />
	<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen, projection">	
	<link rel="stylesheet" href="css/print.css" type="text/css" media="print">
	
	<!--[if IE]>
		<link rel="stylesheet" href="/templates/template204/styles/blueprint/blueprint/ie.css" type="text/css" media="screen, projection">
		<![endif]-->

		<link rel="stylesheet" type="text/css" href="css/publicglobal.css" media="screen, projection" />
		<link rel="stylesheet" type="text/css" href="css/superfish.css" media="screen, projection" />
		<link rel="stylesheet" type="text/css" href="css/superfish-vertical.css" media="screen, projection" />
		<link rel="stylesheet" type="text/css" href="css/default.css" media="screen, projection" />
		<link  rel="stylesheet" type="text/css" href="css/jquery-ui-1.9.2.custom.min.css" media="screen, projection" />
		<script src="js/jquery/jquery.js" type="text/javascript"></script>
		<script src="js/superfish.js" type="text/javascript"></script>
		<script src="js/form.js" type="text/javascript"></script>
		<link href="css/content.css" rel="stylesheet" type="text/css" media="screen,tv,projection" />
		<script type="text/javascript"> 
			$(document).ready(function(){ 
				$("ul.sf-menu").superfish(); 
			}); 
		</script>

	<!--[if IE 6]>
		<style type="text/css">
		@import url(/templates/template204/styles/ie.css);
		</style> 
		<![endif]-->

	<!--[if IE 7]>
		<style type="text/css">
		@import url(/templates/template204/styles/ie7.css);
		</style> 
		<![endif]-->

	<style type='text/css'>
		/* Local Overrides to CMS Declarations */ 
		div#imagegrid_image1 {
			background-image:url("images/backTruck.jpg");
			background-position: -5px -16px;
		}	
		div#imagegrid_image2 {
			background-image:url("images/truckField.jpg");
			background-position: -18px -96px;
		}	
		div#imagegrid_image3 {
			background-image:url("images/veggies.jpg");
			background-position: -87px -20px;
		}	
		div#imagegrid_image4 {
			background-image:url("images/veggieSale.jpg");
			background-position: -89px -183px;
		}	
		div#imagegrid_image5 {
			background-image:url("images/field.jpg");
			background-position: -46px -122px;
		}	
		div#imagegrid_internal #imagegrid_image6 {
			background-image:url("images/ground.jpg");
			background-position: -1px -29px;
		}	
		div#imagegrid_internal #imagegrid_image7 {
			background-image:url("images/hiddenMargaret.jpg");
			background-position: -0px -16px;
		}	
		div#imagegrid_internal #imagegrid_image8 {
			background-image:url("images/openFruit.jpg");
			background-position: -0px -56px;
		}	
		div#logo h1 .name-pt1 {
			color: #c2beb2;
		}
		div#logo h1 .name-pt2 {
			color: #8b836e;
		}
		body {
			background-color: #c2beb2;
		}
		div#imagegrid, div#imagegrid_internal {
			background-color: #d9d473;
		}
		div#content_wrap {
			background-color: #c2beb2;
		}
		ul.main_nav li, div#main_nav, div#footer, ul.main_nav li, ul.main_nav li.active {
			background-color: #8b836e;
		}
		ul.main_nav li.active a:hover,ul.main_nav li.sfHover a:hover {
			background-color:#c2beb2;
		}
		a {
			color: #8b836e;
		}			
		a:hover {
			background-color: #8b836e;
		}
		.frontpage h1, .frontpage h1 a,.frontpage h1 a:hover {
			color: #8b836e;
			background-color:transparent;
		}
	</style>
    <script type="text/javascript">
	
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

		var url="dd.php";
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

	  var res1 = 0.00;
	  var res2 = 0.00;
	  var d1 = $("#ddl1 option:selected").text();
	  if (!d1.match(/^\$/)) {
	  	d1 = "";
	  } else {
	  	res1 = d1.substring(1, 7);
	  	d1 = "&nbsp;&nbsp;&bull;&nbsp;" + d1 + "<br />";
	  }
	  var d2 = $("#ddl2 option:selected").text();
	  if (!d2.match(/^\$/)) {
	  	d2 = "";
	  } else {
	  	res2 = d2.substring(1, 7);
	  	d2 = "&nbsp;&nbsp;&bull;&nbsp;" + d2;
	  }
	  if (d2) { 
	  	var hasComma = ", ";
	  	var hasBr = "<br />";
	  } 
	  document.getElementById("plans").innerHTML = "<strong>Plan(s): </strong><br />" + d1  + d2;
	  document.getElementById("pickup").innerHTML = "<strong>Preferred Pick-up Location: </strong> East Liberty Farmers Market";
	  
	  //alert(res1 + " " + res2);
      var total  = parseFloat(res1) + parseFloat(res2);
      document.getElementById("amountDue").innerHTML = "<strong>Total Amount Due: &#36;</strong>" + total;
	} // end of function AjaxFunction

	function updateSelection () {
		//alert("onChangeWorking");
	  var d3 = $("#ddl3 option:selected").text();
	  document.getElementById("pickup").innerHTML = "<strong>Preferred Pick-up Location: </strong>" + d3;
	}

    </script>
</head>
<body>
	<div id="site_wrap" class="">
		<div class="container">
			<div id="header">	
				<div id="header_content">
					<div id="logo">
						<span class='imagesprite imagesprite-windmill'></span>
						<span class='imagesprite imagesprite-barn'></span>						
						<h1><a href="http://www.onewomanfarm.com">
							<span class='name-pt1'>One</span><span class='name-pt2'>WomanFarm</span></a>
						</h1>
					</div>
					<div id="contact">
						<ul>
							<li><a href="http://www.onewomanfarm.com/contact" id="contact_us">Contact</a></li>
							<li><a href="http://www.onewomanfarm.com/dynamic_content/xml/rss.xml" id="rss_feed">RSS Feed</a></li>
						</ul>		
					</div>
				</div>
			</div> <!-- end #header -->

			<div id="imagegrid_internal">
				<div id="imagegrid_internal_content">
					<div id="imagegrid_image6" class='imagegrid_image imagegrid_internal_image'> </div>
					<div id="imagegrid_image7" class='imagegrid_image imagegrid_internal_image'> </div>
					<div id="imagegrid_image8" class='imagegrid_image imagegrid_internal_image'> </div>
					<div class='clear_float'></div>
				</div> <!-- end #imagegrid_internal_content -->
			</div><!-- end #imagegrid_internal -->

			<div id="content_wrap">
				<div id="main_nav">
					<ul  class='main_nav sf-menu'>
						<li ><a class='toplevel' href='http://www.onewomanfarm.com/'>Home</a>
							<ul>
								<li><a href='http://www.onewomanfarm.com/description'>One Woman Farm, Inc.</a></li>
							</ul>
							<ul>
								<li><a href='http://www.onewomanfarm.com/description'>One Woman Farm, Inc.</a></li>
							</ul>
						</li>
						<li ><a class='toplevel' href='http://www.onewomanfarm.com'>About Us</a>
							<ul>
								<li><a href='/staff'>Staff</a></li>
							</ul>
							<ul>
								<li><a href='http://www.onewomanfarm.com/staff'>Staff</a></li>
							</ul>
						</li>
						<li ><a class='toplevel' href='http://www.onewomanfarm.com'>Get Involved with OWF</a>
							<ul>
								<li><a href='http://www.onewomanfarm.com/want-to-be-an-owf-csa-distribution-site'>Want to be an OWF CSA distribution site?</a></li>
								<li><a href='http://www.onewomanfarm.com/apprentice-and-internships-at-owf'>Apprentice and Internships at OWF</a></li>
								<li><a href='http://www.onewomanfarm.com/csa-workshare-and-volunteer'>CSA Workshare and Volunteer</a></li>
								<li><a href='http://www.facebook.com/pages/One-Woman-Farm/154385117934782'>Facebook</a></li>
							</ul>
							<ul>
								<li><a href='http://www.onewomanfarm.com/want-to-be-an-owf-csa-distribution-site'>Want to be an OWF CSA distribution site?</a></li>
								<li><a href='http://www.onewomanfarm.com/apprentice-and-internships-at-owf'>Apprentice and Internships at OWF</a></li>
								<li><a href='http://www.onewomanfarm.com/csa-workshare-and-volunteer'>CSA Workshare and Volunteer</a></li>
								<li><a href='http://www.facebook.com/pages/One-Woman-Farm/154385117934782'>Facebook</a></li>
							</ul>
						</li>
						<li class='active'><a class='toplevel' href='http://www.onewomanfarm.com/'>OWF CSA and Farmers Market</a>
							<ul>
								<li><a href='http://www.onewomanfarm.com/owf-csa-options'>OWF CSA Options!</a></li>
								<li><a href='http://www.onewomanfarm.com/owf-csa-agreement'>OWF CSA Agreement</a></li>
								<li><a href='http://www.onewomanfarm.com/one-woman-farm-at-east-liberty-farmers-market'>OWF Farmers Market</a></li>
								<li><a href='http://www.onewomanfarm.com/pickup-locations'>Pickup Locations</a></li>
								<li><a href='http://www.onewomanfarm.com/sign-up-now'>Sign up Now!</a></li>
							</ul>
							<ul>
								<li><a href='http://www.onewomanfarm.com/owf-csa-options'>OWF CSA Options!</a></li>
								<li><a href='http://www.onewomanfarm.com/owf-csa-agreement'>OWF CSA Agreement</a></li>
								<li><a href='http://www.onewomanfarm.com/one-woman-farm-at-east-liberty-farmers-market'>OWF Farmers Market</a></li>
								<li><a href='http://www.onewomanfarm.com/pickup-locations'>Pickup Locations</a></li>
								<li><a href='#'>Sign up Now!</a></li>
							</ul>
						</li>
						<li ><a class='toplevel' href='http://www.onewomanfarm.com'>Photos</a>
							<ul>
								<li><a href='http://www.onewomanfarm.com/gallery'>Photo gallery</a></li>
							</ul>
							<ul>
								<li><a href='http://www.onewomanfarm.com/gallery'>Photo gallery</a></li>
							</ul>
						</li>
						<li ><a class='toplevel' href='http://www.onewomanfarm.com'>Contact OWF</a>
							<ul>
								<li><a href='http://www.onewomanfarm.com/contact'>Contact us</a></li>
							</ul>
							<ul>
								<li><a href='http://www.onewomanfarm.com/contact'>Contact us</a></li>
							</ul>
						</li>
					</ul>				
					<div class='clear_float'></div>
				</div> <!--  end #main_nav -->

				<div id="content">
					<div id="content_container">
						<div class="col1 span-3">
							<h2>OWF CSA and Farmers Market</h2>
							<ul>
								<li><a href='http://www.onewomanfarm.com/owf-csa-options'>OWF CSA Options!</a></li>
								<li><a href='http://www.onewomanfarm.com/owf-csa-agreement'>OWF CSA Agreement</a></li>
								<li><a href='http://www.onewomanfarm.com/one-woman-farm-at-east-liberty-farmers-market'>OWF Farmers Market</a></li>
								<li><a href='http://www.onewomanfarm.com/pickup-locations'>Pickup Locations</a></li>
								<li><a href='http://www.onewomanfarm.com/sign-up-now'>Sign up Now!</a></li>
							</ul>
						</div>
						<div class="col2 span-10">
							<h2>CSA Registration</h2>
							<form name="registration" action="php/addCustomer.php" method="post">
								<h3>Select a CSA Membership</h3>
								<div class="row">
									<label>Choose a CSA&nbsp;&nbsp;<span class="question csaTT">?</span></label><br />
									<!-- Add first list box -->
								    <?php
								      require "php/config.php";// connection to database 

								      echo "<select name='cat' id='ddl1' required onchange='AjaxFunction();'> 
								      <option value=''>Select One</option>"; 

								      $sql="select * from CSAType WHERE csaid < '5'"; // Query to collect data from table 

								      foreach ($dbo->query($sql) as $row) {
								        echo "<option value=$row[csaid]>&#36;$row[price] - $row[type]</option>";
								      }
								    ?>
								    <option value='99'>None, I only want coffee</option>
								    </select>
								    <br />
								</div>


								<div class="row">
									<label>Add a coffee option</label><br />
									<!-- Add second list box -->
								    <?php
								      require "php/config.php";// connection to database 

								      echo "<select name='cat2' id='ddl2' required onchange='AjaxFunction();'> 
								      <option value=''>Select One</option>"; 

								      $sql="select * from CSAType WHERE csaid > '4' AND csaid < '99'"; // Query to collect data from table 

								      foreach ($dbo->query($sql) as $row) {
								        echo "<option value=$row[csaid]>&#36;$row[price] - $row[type]</option>";
								      }
								    ?>
								    <option value='99'>Thanks, but no coffee for me</option>
								    </select>
								    <br />
								</div>

								<div class="row">
									<div id="coffee"></div>
								</div>

								<h3>Primary Pick-up Location</h3>
								<!--<a href="#" target="_blank">View Locations on Google Maps</a><br />  Omitted for now -->
								
								<div class="row">
									<select name='subcat' id='ddl3' required onchange="updateSelection();"><option value=''>Select a CSA Plan First</option></select>
								</div>

								<div class="row">
									<label>Name(s) of <em>other</em> people designated to use this CSA</label><br />
									<input class="extendInput" type="text" name="otherMembers" id="otherMembers" placeholder="Your Family Member's Name, Your Friend's Name, etc." maxlength="255" value="" />
								</div>

								<h3>Account Information</h3>
								<div class="row"><label class="form-label">First Name&nbsp;&nbsp;</label><input type="text" name="firstName" id="firstName" placeholder="John" maxlength="50" value="" required /></div>
								<div class="row"><label class="form-label">Last Name&nbsp;&nbsp;</label><input type="text" name="lastName" id="lastName" placeholder="Smith" maxlength="75"  value="" required /></div>
								<div class="row"><label class="form-label">Address&nbsp;&nbsp;</label><input type="text" name="address" id="address" placeholder="123 Your Street, Apt#2" maxlength="255" value="" required /></div>
								<div class="row"><label class="form-label">City&nbsp;&nbsp;</label><input type="text" name="city" id="city" value="" placeholder="Pittsburgh" maxlength="255" required /></div>
								<div class="row"><label class="form-label">State&nbsp;&nbsp;</label><input type="text" name="state" maxlength="2"  id="state" value="" placeholder="PA" required /></div>
								<div class="row"><label class="form-label">Zip&nbsp;&nbsp;</label><input type="text" name="zip" id="zip" pattern="(\d{5}([\-]\d{4})?)" title="Please enter a valid zip code." placeholder="12345-1234" maxlength="10" value="" required /></div>
								<div class="row"><label class="form-label">Phone&nbsp;&nbsp;</label><input type="text" name="phoneNumber" id="phoneNumber" placeholder="555-555-5555" maxlength="20" value="" required /></div>
								<div class="row"><label class="form-label">E-mail&nbsp;&nbsp;</label><input type="email" name="email" id="email" placeholder="jsmith@example.com" maxlength="255" value="" required /></div>
								<!-- I read an article discussing the pros and cons of adding a Verify Email box. In short, it was more of a con to add one than to use one -->
								<!--<div class="row"><label class="form-label">Verify E-mail&nbsp;&nbsp;</label><input type="email" name="email2" id="email2" placeholder="jsmith@example.com" maxlength="255" value="" /></div>-->
								<div class="row"><br /><label>How did you hear about One Woman Farm?</label><br />
									<!-- Add second list box -->
								    <?php
								      require "php/config.php";// connection to database 

								      echo "<select name='marketing' id='ddl4' required onchange='toggleMarketingOther(this.value)'> 
								      <option value=''>Select One</option>"; 

								      $sql="select * from Marketing"; // Query to collect data from table 

								      foreach ($dbo->query($sql) as $row) {
								        echo "<option value=$row[mid]>$row[channel]</option>";
								      }
								    ?>
								    </select>
								    <br />
									<input type="text" name="marketingOther" id="marketingOther" style="display:none;" placeholder="Referral Name or Other" maxlength="255"  value="" required />
								</div>
								

								

								<h3>Payment</h3>
								<p id="summary">
								<span id="date"><strong>Current Date: </strong></span><br />
								<span id="plans"><strong>Plan(s): </strong></span><br />
								<span id="pickup"><strong>Preferred Pick-up Location: </strong></span><br />
								<span id="amountDue"><strong>Total Amount Due: </strong></span></p>
								
								<label>Select a payment method.</label><br />
								<div class="row" id="fullAmount"><input type="radio" requierd name="check" value="0" /> I will send a check for the full amount.</div>
								<div class="row" id="halfAmount"><input type="radio" required name="check" value="1" /> I will send a check for half the amount by April 30th.  The remaining half will be sent by May 30th.</div>
								
								<div class="row">
									<label>Did you participate in the OWF Workshare?</label><br />
									<input type="radio" required name="workshare" value="0" /> No <br />
									<input type="radio" required name="workshare" value="1" /> Yes (Discounts will be given after approval from OWF) 
								</div>								

								<div class="row" id="paymentWarning"><strong>A $100 minimum deposit is required to reserve a membership.</strong>You must send a check within 14 days of registering or your membership will be forfeited. <br /><br />Send your check to:<br />One Woman Farm<br />PO Box 17<br />Bradford Woods, PA 15015</p></div>
								<div class="row"><input type="checkbox" name="acknowledge" value="acknowledge" required /> By checking this box, I acknolwedge that I have read and understand the OWF CSA Membership Agreement.</div>
								<div class="row"><input type="submit" name="submit" value="Submit your CSA Registration" /></div>
							</form>
						</div>
					</div>
					<div id="content_bottom">&nbsp;</div>
				</div>
				<div id="footer_wrap">
					<div id="footer">
						<div id="footer_content">
							<div class="col1 span-4">
								<p><a href="http://www.onewomanfarm.com/contact">Contact Us</a><br />
									<a href="http://sfc.smallfarmcentral.com">Administrator Login</a></p><br />
							</div> 
							<div class="col2 span-7">
								<p><a href='http://www.onewomanfarm.com/description'>One Woman Farm, Inc.</a> 
									<a href='http://www.onewomanfarm.com/staff'>Staff</a> 
									<a href='http://www.onewomanfarm.com/want-to-be-an-owf-csa-distribution-site'>Want to be an OWF CSA distribution site?</a> 
									<a href='http://www.onewomanfarm.com/apprentice-and-internships-at-owf'>Apprentice and Internships at OWF</a> 
									<a href='http://www.onewomanfarm.com/csa-workshare-and-volunteer'>CSA Workshare and Volunteer</a> 
									<a href='http://www.facebook.com/pages/One-Woman-Farm/154385117934782'>Facebook</a> 
									<a href='http://www.onewomanfarm.com/owf-csa-options'>OWF CSA Options!</a> 
									<a href='http://www.onewomanfarm.com/owf-csa-agreement'>OWF CSA Agreement</a> 
									<a href='http://www.onewomanfarm.com/one-woman-farm-at-east-liberty-farmers-market'>OWF Farmers Market</a> 
									<a href='http://www.onewomanfarm.com/pickup-locations'>Pickup Locations</a> 
									<a href='#'>Sign up Now!</a> 
									<a href='http://www.onewomanfarm.com/gallery'>Photo gallery</a> 
									<a href='http://www.onewomanfarm.com/contact'>Contact us</a></p>			
							</div>
							<div class="col3 span-5">
								<p>All content property of One Woman Farm. 5857 Valencia Rd, Gibsonia, PA 15044.</p>
								<!-- This page is a fork of the template page created by Small Farm Central -->
								<p>This page was created using the <a href="http://www.smallfarmcentral.com">Small Farm Central</a> web development service. The web-based user management application was created by the University of Pittsburgh class IS2560.</p>
							</div>
							<div class="clear_float">&nbsp;</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
</body>
</html>