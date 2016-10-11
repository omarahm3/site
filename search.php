<!DOCTYPE html>
<html lang="en">
<head>
<title>Search results</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">   
<meta name = "format-detection" content = "telephone=no" /> 
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/style.css">
<!--JS-->
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="search/search.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script>
    function goToByScroll(id){$('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');}
</script> 
<!--[if lt IE 8]>
    <div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg"border="0"alt=""/></a></div>  
<![endif]-->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
<div class="global">
<!--header-->
<header>
    <div class="container">
         <div class="navbar navbar_ clearfix">
            <div class="navbar-inner">      
                  <div class="clearfix">
                        <h1 class="brand"><a href="index.html"><img src="img/logo.png" alt=""></a></h1>
                        <div class="nav-collapse nav-collapse_ collapse">
                        	<ul class="nav sf-menu clearfix">
                        	  <li><a href="index.html">Home</a></li> 
                              <li class="sub-menu"><a href="index-1.html">Overview<span></span></a>
                                <ul class="submenu">
                                    <li><a href="#">Services List</a></li>
                                    <li><a href="#">Overview<span></span></a>
                                        <ul class="submenu-1">
                                            <li><a href="#">Management</a></li>
                                            <li><a href="#">Marketing</a></li>
                                            <li><a href="#">Training</a></li>
                                            <li><a href="#">Development</a></li>
                                            <li><a href="#">Other</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Media</a></li>
                                    <li><a href="#">Team</a></li>
                                </ul>
                              </li> 
                              <li><a href="index-2.html">Services</a></li> 
                              <li><a href="index-3.html">Blog</a></li> 
                              <li><a href="index-4.html">Contacts</a></li>                       
                            </ul>
                        </div>
                         <form id="search" class="search" action="search.php" method="GET" accept-charset="utf-8">
                        	 <input type="text" onfocus="if(this.value =='Search...' ) this.value=''" onblur="if(this.value=='') this.value='Search...'" value="Search..." name="s">
                             <a href="#" onClick="document.getElementById('search').submit()"><img src="img/magnify.png" alt=""></a>
                         </form>                                                                                                                
                  </div>
             </div>  
         </div>
    </div>
</header>
    <!--content-->
    <div class="container padBot">
    <div class="row">
      <article class="span12">
        <h2>Search result:</h2>
            <div id="search-results"></div>
      </article>
    </div>
    </div>
</div>
<!--footer-->
<footer>
    <div class="container">
        <div class="row">
        <article class="span4 pull-right">
                <p>Social Profiles</p>
                <ul class="social_menu">
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">LinkedIn</a></li>
                    <li><a href="#">RSS</a></li>
                    <li><a href="#">Vimeo</a></li>
                    <li><a href="#">Flickr</a></li>
                </ul>
            </article>
            <article class="span5 pull-left">
                <ul class="foo_menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index-1.html">Overview</a></li>
                    <li><a href="index-2.html">Services</a></li>
                    <li><a href="index-3.html">Blog</a></li>
                    <li><a href="index-4.html">Contacts</a></li>
                </ul>
                <p>Smart &copy; 2013 | <a href="index-5.html">Privacy Policy</a></p>
            </article>
        </div>
    </div>   
</footer>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>