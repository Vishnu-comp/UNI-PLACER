<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>ERIS / <?php echo $title;?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->
<link href="<?php echo web_root; ?>plugins/home-plugins/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo web_root; ?>plugins/home-plugins/css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
<link href="<?php echo web_root; ?>plugins/home-plugins/css/flexslider.css" rel="stylesheet" /> 
<link href="<?php echo web_root; ?>plugins/home-plugins/css/style.css" rel="stylesheet" />
<!-- <link rel="stylesheet" href="<?php echo web_root;?>plugins/dataTables/dataTables.bootstrap.css">  --> 
<link rel="stylesheet" href="<?php echo web_root;?>plugins/font-awesome/css/font-awesome.min.css"> 

<link rel="stylesheet" href="<?php echo web_root;?>plugins/dataTables/jquery.dataTables.min.css"> 
<link rel="stylesheet" href="<?php echo web_root;?>plugins/dataTables/jquery.dataTables_themeroller.css"> 
<!-- datetime picker CSS -->
<link href="<?php echo web_root; ?>plugins/datepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<link href="<?php echo web_root; ?>plugins/datepicker/datepicker3.css" rel="stylesheet" media="screen">
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<style type="text/css">
 
  #content {
    min-height: 400px;
    color: #000;
  }
  
  .contentbody p {
    font-weight: bold;
  }
  .login a:hover{ 
    color: #00bcd4;
    text-decoration: none;

  }
  .login a:focus{ 
    color: #00bcd4;
    text-decoration: none;

  }
  .login a { 
     font-size: 14px;
    color: #fff;
    padding:0px;
  }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIPLACER CHATBOT</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
<div id="wrapper" class="home-page">
 
 <!-- start header -->
 <header>
       <div class="topbar navbar-fixed-top">
         <div class="container">
           <div class="row">
             <div class="col-md-12">      
               <p class="pull-left hidden-xs"><i class="fa fa-phone"></i>Tel No. 0987654321</p>
               <?php if (isset($_SESSION['APPLICANTID'])) { 

                   $sql = "SELECT count(*) as 'COUNTNOTIF' FROM `tbljob` ORDER BY `DATEPOSTED` DESC";
                   $mydb->setQuery($sql);
                   $showNotif = $mydb->loadSingleResult();
                   $notif =isset($showNotif->COUNTNOTIF) ? $showNotif->COUNTNOTIF : 0;


                   $applicant = new Applicants();
                   $appl  = $applicant->single_applicant($_SESSION['APPLICANTID']);

                   $sql ="SELECT count(*) as 'COUNT' FROM `tbljobregistration` WHERE `PENDINGAPPLICATION`=0 AND `HVIEW`=0 AND `APPLICANTID`='{$appl->APPLICANTID}'";
                   $mydb->setQuery($sql);
                   $showMsg = $mydb->loadSingleResult();
                   $msg =isset($showMsg->COUNT) ? $showMsg->COUNT : 0;

                   echo ' <p class="pull-right login"><a title="View Notification(s)" href="'.web_root.'applicant/index.php?view=notification"> <i class="fa fa-bell-o"></i> <span class="label label-success">'.$notif.'</span></a> | <a title="View Message(s)" href="'.web_root.'applicant/index.php?view=message"> <i class="fa fa-envelope-o"></i> <span class="label label-success">'.$msg.'</span></a> | <a title="View Profile" href="'.web_root.'applicant/"> <i class="fa fa-user"></i> Howdy, '. $appl->FNAME. ' '.$appl->LNAME .' </a> | <a href="'.web_root.'logout.php">  <i class="fa fa-sign-out"> </i>Logout</a> </p>';

                   }else{ ?>
                     <p   class="pull-right login"><a data-target="#myModal" data-toggle="modal" href=""> <i class="fa fa-lock"></i> Login </a></p>
               <?php } ?>
             
             </div>
           </div>
         </div>
       </div> 
       <div style="min-height: 30px;"></div>
       <div class="navbar navbar-default navbar-static-top" > 
           <div class="container">
               <div class="navbar-header">
                   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                   </button>
                   <a class="navbar-brand" href="<?php echo web_root; ?>index.php">UniPlacer<!-- <img src="<?php echo web_root; ?>plugins/home-plugins/img/logo.png" alt="logo"/> --></a>
               </div>
               <div class="navbar-collapse collapse ">
                   <ul class="nav navbar-nav">
                       <li class="<?php echo !isset($_GET['q'])? 'active' :''?>"><a href="<?php echo web_root; ?>index.php">Home</a></li>
                       <li class=""><a href="http://localhost:8080/chatbot%20-%20php%20&%20ajax/bot.php">Chatbot</a></li>  
                       <li class="dropdown">
                         <a href="#" data-toggle="dropdown" class="dropdown-toggle">Job Search <b class="caret"></b></a>
                         <ul class="dropdown-menu">
                             <li class="<?php  if(isset($_GET['q'])) { if($_GET['q']=='advancesearch'){ echo 'active'; }else{ echo ''; }}  ?>"><a href="<?php echo web_root; ?>index.php?q=advancesearch">Advance Search</a></li>
                             <li><a href="<?php echo web_root; ?>index.php?q=search-company">Job By Company</a></li>
                             <li><a href="<?php echo web_root; ?>index.php?q=search-function">Job By Function</a></li>
                             <li><a href="<?php echo web_root; ?>index.php?q=search-jobtitle">Job By Title</a></li>
                        <!--      <li><a href="#">Job for Women</a></li>
                             <li><a href="#">Job for Men</a></li> -->
                         </ul>
                      </li> 
                 
                       <li class="<?php  if(isset($_GET['q'])) { if($_GET['q']=='company'){ echo 'active'; }else{ echo ''; }}  ?>"><a href="<?php echo web_root; ?>index.php?q=company">Company</a></li>
                       <li class="<?php  if(isset($_GET['q'])) { if($_GET['q']=='hiring'){ echo 'active'; }else{ echo ''; }} ?>"><a href="<?php echo web_root; ?>index.php?q=hiring">Hiring Now</a></li>
                       <li class="<?php  if(isset($_GET['q'])) { if($_GET['q']=='About'){ echo 'active'; }else{ echo ''; }}  ?>"><a href="<?php echo web_root; ?>index.php?q=About">About Us</a></li>
                       <li class="<?php  if(isset($_GET['q'])) { if($_GET['q']=='Contact'){ echo 'active'; }else{ echo ''; }}  ?>"><a href="<?php echo web_root; ?>index.php?q=Contact">Contact</a></li>
                   </ul>
               </div>
           </div>
       </div>
 </header>
    <div class="wrapper">
        <div class="title">UNIPLACER CHATBOT</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Hello there, how can I help you?</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Type something here.." required>
                <button id="send-btn">Send</button>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                
                // start ajax code
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    </script>
    
</body>
</html>