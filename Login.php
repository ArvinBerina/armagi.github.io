<?php require_once('Connections/Argami.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "reg_form")) {
  $insertSQL = sprintf("INSERT INTO armagi_register (FirstName, LastName, Username, Email, Password, ConfirmPassword) VALUES (%s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['FirstName'], "text"),
                       GetSQLValueString($_POST['LastName'], "text"),
                       GetSQLValueString($_POST['Username'], "text"),
                       GetSQLValueString($_POST['Email'], "text"),
                       GetSQLValueString($_POST['Password'], "text"),
                       GetSQLValueString($_POST['ConfirmPassword'], "text"));

  mysql_select_db($database_Argami, $Argami);
  $Result1 = mysql_query($insertSQL, $Argami) or die(mysql_error());

  $insertGoTo = "Login.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_Argami, $Argami);
$query_Armagi_login = "SELECT * FROM armagi_user";
$Armagi_login = mysql_query($query_Armagi_login, $Argami) or die(mysql_error());
$row_Armagi_login = mysql_fetch_assoc($Armagi_login);
$totalRows_Armagi_login = mysql_num_rows($Armagi_login);

mysql_select_db($database_Argami, $Argami);
$query_Armagi_register = "SELECT * FROM armagi_register";
$Armagi_register = mysql_query($query_Armagi_register, $Argami) or die(mysql_error());
$row_Armagi_register = mysql_fetch_assoc($Armagi_register);
$totalRows_Armagi_register = mysql_num_rows($Armagi_register);
$query_Armagi_login = "SELECT * FROM armagi_user";
$Armagi_login = mysql_query($query_Armagi_login, $Argami) or die(mysql_error());
$row_Armagi_login = mysql_fetch_assoc($Armagi_login);
$totalRows_Armagi_login = mysql_num_rows($Armagi_login);
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['username'])) {
  $loginUsername=$_POST['username'];
  $password=$_POST['password'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "Index.php";
  $MM_redirectLoginFailed = "Login.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_Argami, $Argami);
  
  $LoginRS__query=sprintf("SELECT Username, Password FROM armagi_register WHERE Username=%s AND Password=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $Argami) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/style.css" />
    <title>Armagi Eshopping</title>
  </head>

<body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form name="reg_form" id="reg_form" action="<?php echo $editFormAction; ?>" method="POST" class="sign-up-form">
            
            <h2 class="title">Register</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              
              <input type="text" placeholder="First Name"  name="FirstName" id="fname" required />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Last Name" name="LastName" id="lname" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="Username" id="username" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="text" placeholder="Email" name="Email" id="email" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="Password" id="password" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Confirm Password"  name="ConfirmPassword" id="con_password" required />
            </div>
            <input type="submit" value="Register"  class="btn solid" id="regs_btn" />
            <input type="hidden" name="MM_insert" value="reg_form">
            
          </form>
          
          <form ACTION="<?php echo $loginFormAction; ?>" id= "login_form" method="POST" class="sign-in-form">
            <h2 class="title">Login</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="username" placeholder="Username" name="username" id="username" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" id="password" required/>
            </div>
            <input type="submit" href="index.php" class="btn2 solid" value="Login" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Armagi EShopping</h3>
            <p>
              Click the button bellow to register on our website.
            </p>
            <button class="btn transparent" id="login-btn">
              Register
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Armagi EShopping</h3>
            <p>
              Click the button bellow to login on our website.
            </p>
            <button class="btn transparent" id="register-btn">
              Login
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

<script>
      const register_btn = document.querySelector("#register-btn");
      const login_btn = document.querySelector("#login-btn");
      const container = document.querySelector(".container");
	  const regs_btn = document.querySelector("#login_btn");

      login_btn.addEventListener("click", () => {
      container.classList.add("sign-up-mode");
      });

      register_btn.addEventListener("click", () => {
      container.classList.remove("sign-up-mode");
      });

    </script>
</body>
</html>
<?php
mysql_free_result($Armagi_login);

mysql_free_result($Armagi_register);
?>
