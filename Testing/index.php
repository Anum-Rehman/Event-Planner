<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-default navbar-fixed-top" id="nav-bar">
        <div class="row">
            <!-- logo -->
            <div class="col-lg-4">
                <img src="images/logo.png" alt="logo" style="height: 30%; width: 80%; margin-left: 5%;">
            </div>
            <div class="col-lg-8" style="margin-top:1%;">
                <!-- Email and other info -->
                <div class="row">
                    <div class="col-lg-4"></div>
                    <!-- Phone Number -->
                    <div class="col-lg-2" style="margin-left: 5%">
                        <span><img src="images/call-icon.png" alt="icon-phone" style="height: 17%; width: 17%;"></span>
                        <a href="tel:123-456-7890" class="info">123-456-7890</a>
                    </div>
                    <!-- Email Address -->
                    <div class="col-lg-3" style="margin-right:-5%">
                        <span><img src="images/mail-icon.png" alt="icon-mail" style="height: 15%; width: 15%;"></span>
                        <a href="mailto:info@yoursite.com" class="info">info@yoursite.com</a>
                    </div>
                    <!-- Organize Button -->
                    <div class="col-lg-3">
                        <!-- Trigger the modal with a button -->
                        <button type="button" id="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><b>Organize Event</b></button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="container-fluid">
                            <!-- Navigation Menu -->
                            <ul class=" nav navbar-nav menu">
                                <li class="nav-item menu-item">
                                    <a class="nav-link links" href="#">HOME</a>
                                </li>
                                <li class="nav-item menu-item">
                                    <a class="nav-link links" href="#">ABOUT</a>
                                </li>
                                <!-- Dropdown -->
                                <li class="nav-item dropdown menu-item">
                                    <a class="nav-link dropdown-toggle links" href="#" id="navbardrop" data-toggle="dropdown">
                                EVENTS
                                </a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a class="dropdown-item" href="#">Event List</a></li>
                                            <li><a class="dropdown-item" href="#">Event Grid</a></li>
                                            <li><a class="dropdown-item" href="#">Event Details</a></li>
                                            <li><a class="dropdown-item" href="#">Event Booking</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item menu-item">
                                    <a class="nav-link links" href="#">BLOGS</a>
                                </li>
                                <li class="nav-item menu-item">
                                    <a class="nav-link links" href="#">GALLERY</a>
                                </li>
                                <li class="nav-item menu-item">
                                    <a class="nav-link links" href="#">SPEAKER</a>
                                </li>
                                <li class="nav-item menu-item">
                                    <a class="nav-link links" href="#">CONTACT</a>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#" class="links" data-toggle="modal" data-target="#signup-Modal"><span class="glyphicon glyphicon-user links"></span> Sign Up</a></li>
                                <li><a href="#" class="links" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in links"></span> Login</a></li>
                            </ul>
                        </div>
    </nav>
    </div>
    </div>
    </div>
    </div>


    <!-- Popup Signin & Signup -->
        <div class="container">
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header" style="padding:35px 50px; background-color:#8a1a81!important;">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 style="background-color:#8a1a81; font-family: 'Times New Roman', Times, serif;"><span class="glyphicon glyphicon-lock"></span><b>Login</b></h4>
                        </div>
                        <div class="modal-body" style="padding:40px 50px;">
                            <form role="form" action="User_Registration.php" name="signin_form">
                                <div class="form-group">
                                    <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                                    <input type="text" class="form-control" id="usrname" placeholder="Enter email" required>
                                </div>
                                <div class="form-group">
                                    <label for="pswrd"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                                    <input type="password" class="form-control" id="pswrd" required>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" checked>Remember me</label>
                                </div>
                                <button type="submit" class="btn btn-success btn-block" style="background-color:#8a1a81; font-family: 'Times New Roman', Times, serif;"><span class="glyphicon glyphicon-off"></span>Login</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                            <p>Not a member? <a href="#" data-toggle="modal" data-target="#signup-Modal">Sign Up</a></p>
                            <p>Forgot <a href="#">Password?</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Signup Form Modal -->
        <div class="container">
            <!-- Modal -->
            <div class="modal fade" id="signup-Modal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header" style="padding:20px 50px; background-color:#8a1a81!important;">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 style="background-color:#8a1a81; font-family: 'Times New Roman', Times, serif;"><span class="glyphicon glyphicon-user links" style="color:white!important;"></span><b> Register User</b></h4>
                        </div>
                        <div class="modal-body" style="padding:40px 50px;">
                            <form role="form" class="form-horizontal" action="User_Registration.php" method="POST" name="signup_form">
                                <div class="form-group">
                                    <label for="name" class="control-label col-lg-4">Full Name:</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" id="name" name="username" placeholder="First Name" required>
                                        <div id="name_error" class="val_error"></div>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="control-label col-lg-4">Email:</label>
                                    <div class="col-lg-8">
                                        <input type="email" class="form-control" placeholder="Email Address" name="email" required>
                                        <div id="mail_error" class="val_error"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="contact" class="control-label col-lg-4">Contact:</label>
                                    <div class="col-lg-8">
                                        <input type="number" class="form-control" name="contact" placeholder="Contact Number" required>
                                        <div id="num_error" class="val_error"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="psw" class="control-label col-lg-4">Password:</label>
                                    <div class="col-lg-8">
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                        <div id="pass_error" class="val_error"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pw" class="control-label col-lg-4">Confirm Password:</label>
                                    <div class="col-lg-8">
                                        <input type="password" class="form-control" placeholder="Confirm Password" name="pass" required>
                                        <div id="cnfrmPass_error" class="val_error"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Gender:</label>
                                    <div class="col-lg-8">
                                        <label class="radio-inline"><input type="radio" name="optmale" value="male">Male</label>
                                        <label class="radio-inline"><input type="radio" name="optfemale" value="female">Female</label>
                                        <div id="gender_error" class="val_error"></div>
                                    </div>
                                </div>
                                <!-- Date of Birth -->
                                <div class="form-group">
                                    <label class="control-label col-lg-4" for="sel1">Date of Birth:</label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <select name="date" class="form-control" id="sel1">
											<option value="day">Day</option>
											<option value="1">1</option><option value="2">2</option><option value="3">3</option>
											<option value="4">4</option><option value="5">5</option><option value="6">6</option>
											<option value="7">7</option><option value="8">8</option><option value="9">9</option>
											<option value="10">10</option><option value="11">11</option><option value="12">12</option>
											<option value="13">13</option><option value="14">14</option><option value="15">15</option>
											<option value="16">16</option><option value="17">17</option><option value="18">18</option>
											<option value="19">19</option><option value="20">20</option><option value="21">21</option>
											<option value="22">22</option><option value="23">23</option><option value="24">24</option>
											<option value="25">25</option><option value="26">26</option><option value="27">27</option>
											<option value="28">28</option><option value="29">29</option><option value="30">30</option>
											<option value="31">31</option>
										</select>
                                            </div>
                                            <div class="col-lg-4">
                                                <select name="month" class="form-control" id="month">
											<option value="month">Month</option>
											<option value="jan">Jan</option><option value="feb">Feb</option><option value="march">March</option>
											<option value="april">April</option><option value="may">May</option><option value="june">June</option>
											<option value="july">July</option><option value="aug">Aug</option><option value="sep">Sep</option>
											<option value="oct">Oct</option><option value="nov">Nov</option><option value="dec">Dec</option>
										</select>
                                            </div>
                                            <div class="col-lg-4">
                                                <select name="year" class="form-control" id="year">
											<option>Year</option><option>2018</option><option>2017</option><option>2016</option><option>2015</option>
											<option>2014</option><option>2013</option><option>2012</option><option>2011</option><option>2010</option>
											<option>2009</option><option>2008</option><option>2007</option><option>2006</option><option>2005</option>
											<option>2004</option><option>2003</option><option>2002</option><option>2001</option><option>2000</option>
											<option>1999</option><option>1998</option><option>1997</option><option>1996</option><option>1995</option>
											<option>1994</option><option>1993</option><option>1992</option><option>1991</option><option>1990</option>
											<option>1989</option><option>1988</option><option>1987</option><option>1986</option><option>1985</option>
											<option>1984</option><option>1983</option><option>1982</option><option>1981</option><option>1980</option>
											<option>1979</option><option>1978</option><option>1977</option><option>1976</option><option>1975</option>											
										</select>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="birth_error" class="val_error"></div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label><input type="checkbox" value="" checked>Remember me</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success btn-block" style="background-color:#8a1a81; font-family: 'Times New Roman', Times, serif; font-size: 20px;">Register</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                            <p>Already a member? <a href="#" data-toggle="modal" data-target="#myModal"> Sign In</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Main Slider -->
        <div class="row" style="margin-top:8%;">
        <div class="container-fluid">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/slide/c.jpg" alt="Wedding Ceremony" class="slides">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="images/slide/f.png" alt="Conference" class="slides">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="images/slide/g.jpg" alt="Conference" class="slides">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="images/slide/h.jpg" alt="Conference" class="slides">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="images/slide/k.png" alt="Conference" class="slides">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
    </body>

</html>
