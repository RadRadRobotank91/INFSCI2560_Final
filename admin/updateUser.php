<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>One Woman Farm | Update Records</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin.php">Home</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Margaret <b class="caret"></b></a>

                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="admin.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="salesInfo.php"><i class="fa fa-fw fa-table"></i> Sales Information</a>
                    </li>
                    <li class="active">
                        <a href="updateUser.php"><i class="fa fa-fw fa-edit"></i> Update User</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Update User
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="admin.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Update User
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form role="form" action="../php/updateCustomer.php" method="POST">
							<div id="name" class="form-group">
                                Name : <input class="typeahead" type="text" placeholder="Search for Name" />
                                <input type="hidden" value="27" name="customerID" id="customerID" />
                                
                            </div>
							<div class="form-group">
                                <label>=> Example return from autocomplete: Harrison Foster - cid#27</label>
                                <?php
                                      require "../php/config.php";// connection to database 

                                      $sql="select First_Name, Last_Name, Email from Customer WHERE cid=27"; // Query to collect data from table 

                                      foreach ($dbo->query($sql) as $row) {
                                        echo "<p class='form-control-static'>Name: $row[First_Name] $row[Last_Name]<br />Email: $row[Email]</p>";
                                      }
                                ?>
                            </div>

                            <div class="form-group">
                                <label>Update Marketshare Balance</label>
                                <input class="form-control" name="amount" id="amount" placeholder="43.00">
                            </div>
							
                            <div class="form-group">
                                <label>Did customer make a pick-up?</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="pickup" value="0">No
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" required name="pickup" value="1">Yes
                                    </label>
                                </div>
                                <div class="dropdown">
                                    <?php
                                      require "../php/config.php";// connection to database 

                                      echo "<select name='location' id='location' required > 
                                      <option value=''>Select Location</option>"; 

                                      $sql="select * from CSALocation"; // Query to collect data from table 

                                      foreach ($dbo->query($sql) as $row) {
                                        echo "<option value=$row[lid]>$row[name]</option>";
                                      }
                                    ?>
                                    </select>
                                </div>
                                    
                            </div>

                            <button type="submit" class="btn btn-default">Submit Button</button>

                        </form>
                    </div>
                        

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
