

<!DOCTYPE html>
<html lang="en">
<head>

<style>
.button {
  background-color:  #FF6600;
  border: none;
  color: white;
  padding: 6.5px 48px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 4px 2px;
  cursor: pointer;
 
}
.button:hover{
background-color:#cd5300;
}
</style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form" action="addregister.php">
                        <h2>Lawyer Registration</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Name :</label>
                                <input type="text" name="name" id="name" placeholder="Enter Name" required/>
                            </div>
                            <div class="form-group">
                                <label for="father_name">Phone :</label>
                                <input type="tel" name="phone" placeholder="Enter Phone No" id="phone" pattern=.{8,12} required title="Enter 8 to 12 characters" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label >Email :</label>
                            <input type="email" name="email" id="email" placeholder="Enter E-mail"   required/>
                        </div>
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Gender :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="male" checked>
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="female">
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label>Address :</label>
                                <div class="form-select ">
                                    <textarea rows="5" cols="72" style="border:solid 1px  #CCCCCC;" name="add" placeholder="Enter Address"></textarea>
                                    
                                </div>
                            </div>
                          <!--  <div class="form-group">
                                <label for="city">City :</label>
                                <div class="form-select">
                                    <select name="city" id="city">
                                        <option value=""></option>
                                        <option value="losangeles">Los Angeles</option>
                                        <option value="washington">Washington</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>-->
                        </div>
                       
						
						<div class="form-group">
                            <label>Enrollment :</label>
                            <input type="text" name="enr" placeholder="Enter Enrollment No" >
                        </div>
						
						<div class="form-group">
                            <label>Password :</label>
                            <input type="password" name="pwd1" placeholder="Enter Password" >
                        </div>
						
						<div class="form-group">
                            <label >Confirm Password :</label>
                            <input type="password" name="pwd2" placeholder="Confirm your Password" >
                        </div>

                       
                        
                       
                        <div class="form-submit">
                     <a href="login.php" class="button">Login	</a>
					 
					 <input type="submit" value="Submit " class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
