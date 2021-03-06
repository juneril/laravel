<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Customers App</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li ><a href="/home">Home</a></li>
            <li class="active"><a href="/customers">Customers</a></li>
            <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categories <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>s
           
          </ul>
          </li>
            <li class="btn-group" style= "margin-left: 605px;">
      <button class="btn btn-default" type="button">Username</button>
      <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button"><span class="caret"></span>
      </button>
      <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="/jun">Log Out</a></li>
      </ul>
  </li>
        
        </div><!--/.nav-collapse -->

  
      </div>
    </nav>

   	<div class="container">
   		<div class="panel panel-primary">
                        <div class="panel-heading">Faculty</div>
                        <div class="panel-body">
                           
                           

                            <form class="form-inline pull-right" role="form">

                                <!-- <div class="checkbox">
                                        <label>
                                            <input type="checkbox">Show Deleted
                                        </label>
                                    </div> -->
                                <div class="form-group">
                                                        <label type="label" style ="color: black;font-size: 50px;background-color: transparent;margin-right: 418px;"class= "label label-primary" style +>Customers</label>
                                	 <button type="button" style="margin-right: 10px;" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> <a style="color: white;" href="/registernewcustomer" >Add New Customer  </a></button>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                             
                            </form>
                        </div>

                        <!-- Table -->
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Company Name</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Category</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Orange Design Company</td>
                                    <td>Orange</td>
                                    <td>Company</td>
                                    <td>Discounter</td>
                                       <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
                                </tr>
                                <tr>
                                    <td>AA Software System</td>
                                    <td>Software</td>
                                    <td>System</td>
                                    <td>Reselter</td>
                                       <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
                                </tr>
                                <tr>
                                    <td>Adnatives New Media</td>
                                    <td>Ferid</td>
                                    <td>Demir</td>
                                    <td>Reseller</td>
                                       <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
                                </tr>
                                <tr>
                                    <td>Prime Teknoloji</td>
                                    <td>Cagatay</td>
                                    <td>Civii</td>
                                    <td>End User</td>
                                    <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
                                </tr>
                                     <tr>
                                    <td>E-Commerce System</td>
                                    <td>Max</td>
                                    <td>Mustermann</td>
                                    <td>End User</td>
                                    <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
                                </tr>
                                     <tr>
                                    <td>Pina Teknoloji</td>
                                    <td>Mehmet</td>
                                    <td>Celiksoy</td>
                                    <td>End User</td>
                                    <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
                                </tr>
            
            
            
             
                    </tbody>
                        </table>
                        <div  class="panel-footer" >
                            <ul style= "margin-left: 409px;margin-right: auto;" class="pagination pagination-lg ">
                                <li><a href="#">&laquo;</a>
                                </li>
                                <li><a href="#">1</a>
                                </li>
                                <li><a href="#">2</a>
                                </li>
                                <li><a href="#">3</a>
                                </li>                              
                                <li><a href="#">&raquo;</a>
                                </li>
                            </ul>
                        </div>
                    </div>
      	</div>

	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>