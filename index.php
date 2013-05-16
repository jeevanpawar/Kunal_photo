<?php
include("Admin/config.inc.php");
$counter = 0;

$up="UPDATE counter SET counter = counter + 1";
$upres=mysql_query($up);

$show="select * from counter";
$show_res=mysql_query($show);

$row_show=mysql_fetch_array($show_res);

?>
<?php 
	$qry="select * from gallery_photos where photo_category='4'";
	$res=mysql_query($qry);
	$res1=mysql_query($qry);
	$res2=mysql_query($qry);
	$res3=mysql_query($qry);
?>
<html>
<head>
<title>Kunal Arts</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Thumbnails Navigation Gallery with jQuery and CSS3" />
<meta name="keywords" content="jquery, thumbnails, gallery, menu, navigation, full page, background,image, photo, portfolio, photography"/>

<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
<link rel="stylesheet" type="text/css" href="css/style3.css" />
<link rel="stylesheet" type="text/css" href="cssmenu/main.css" />
<!-- style sheets -->
<!-- js files -->
<link rel="stylesheet" type="text/css" href="css/demo.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

<script type="text/javascript" src="js/script.js"></script>

<!-- color picker -->
<script src="images/mootools-1.js" type="text/javascript"></script>
		<link rel="stylesheet" href="images/image-hover.css" type="text/css">
		<link rel="stylesheet" href="images/image-hover-main.css" type="text/css">
		<script src="images/browserCheck.js" type="text/javascript"></script>
        

<script type="text/javascript" src="jscolor/jscolor.js"></script>
<!-- jQuery framework -->
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<!-- jQueriy easing plugin-->
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<!-- lhpTwoColorButton plugin -->
<script type="text/javascript" src="js/jquery.lhpTwoColorButton.min.js"></script>
<!-- lhpTwoColorButton plugin -->
<script type="text/javascript" src="js/jquery.lhpMenuTwoColorButton.min.js"></script>
<!-- preview main js code -->
<script type="text/javascript" src="js/main.js"></script>


<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/Quicksand_Book_400.font.js" type="text/javascript"></script>

<script type="text/javascript">
			Cufon.replace('span,p,h1',{
				textShadow: '0px 0px 1px #ffffff'
			});
</script>

<script type="text/javascript" src="jscolor/jscolor.js"></script>
<!-- jQuery framework -->
		
        <!-- jQueriy easing plugin-->
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <!-- lhpTwoColorButton plugin -->
        <script type="text/javascript" src="js/jquery.lhpTwoColorButton.min.js"></script>
        <!-- lhpTwoColorButton plugin -->
        <script type="text/javascript" src="js/jquery.lhpMenuTwoColorButton.min.js"></script>
        <!-- preview main js code -->
        <script type="text/javascript" src="js/main.js"></script>
        
        <script type="text/javascript">
		$(document).ready(function() 
		{
					  $('a.topmenu').click(function(){
						$('').fadeIn();
						 setTimeout("nav('"+this.href+"')",0);
					   return false;
			   });
			});
		function nav(href){
		location.href=href;
		};</script>

        
<script type="text/javascript" charset="UTF-8">
    $(function() {
        $("#anim").addClass("animation");
    });
</script>

</style>


<style>
div.background {
	position:absolute;
	left:0px;
	top:0px;
	z-index:-1;
}
div.background img {
	position:fixed;
	height:100%;
	width:100%;
	list-style: none;
	left:0px;
	top:0px;
}
div.background ul li.show {
	z-index:500
}
span.reference {
	
	position:fixed;
	width:80%;
	margin-left:500px;
	left:-1px;
	right:-1px;
	text-align:center;
	height:50px;
	bottom:40px;
}

span.like
{
	font-family:Arial;
	position:fixed;
	width:350px;
	right:-4%;
	text-align:center;
	height:20px;
	bottom:25px;
	font-size:13px;
	
}
span ul li.facebook
{
	margin-left:-50px;
	
}
</style>

<script type="text/javascript">

function thebackground() {
$('div.background img').css({opacity: 0.0});
$('div.background img:first').css({opacity: 1.0});
setInterval('change()',12000);
}

function change() {
var current = ($('div.background img.show')? $('div.background img.show') : $('div.background img:first'));
if ( current.length == 0 ) current = $('div.background img:first');
var next = ((current.next().length) ? ((current.next().hasClass('show')) ? $('div.background img:first') :current.next()) : $('div.background img:first'));
next.css({opacity: 0.0})
.addClass('show')
.animate({opacity: 1.0}, 3000);
current.animate({opacity: 0.0}, 3000)
.removeClass('show');
};

$(document).ready(function() {
thebackground();	
$('div.background').fadeIn(3000); // works for all the browsers other than IE
$('div.background img').fadeIn(3000); // IE tweak
});

</script>
</head>

</script>
<body>

<div class="background"><img src="images/album/a.jpg" class="st_preview"/> <img src="images/album/b.jpg" class="st_preview"/> <img src="images/album/c.jpg" class="st_preview"/> <img src="images/album/d.jpg" class="st_preview"/> <img src="images/album/e.jpg" class="st_preview"/><img src="images/album/f.jpg" class="st_preview"/><img src="images/album/g.jpg" class="st_preview"/></div>
  
  <div class="fix"><img id="anim" src="images/logo.png" class="logo"><div class="logoname">Kunal Arts</div>
      <div class="slogal">COMMERCIAL PHOTOGRAPHY</div>
  </div>


  
</div>
<div> 
  
  <!-- About -->
  <div id="about" class="panel">
    <div class="content">
      <div class="port">
        <div class="close"><a href="#!/about"><img src="images/closeIcon.png" alt="" class="close"></a></div>
        <div class="heading">About Kunal Arts</div>
        <div class="aboutimg"><img src=""></div>
        <div class="aheading">Welcome To Kunal Arts</div>
        <div class="apara">KUNAL ARTS was co-founded by two passionate photojournalists with a vision to revolutionize wedding photography, 			                  Praful Mehta & Abhishake saw an opportunity to leverage his background in photojournalism, direct-to-consumer marketing and technology. </div>
      </div>
    </div>
  </div>
  <!-- /About --> 
  <!-- Portfolio -->
  <div id="portfolio" class="panel">
    <div class="content">
      <div class="port1">
       
        	    <?php 
					include("Admin/config.inc.php");
    	       		$qry="select * from gallery_category";
					$res=mysql_query($qry);
				?>
                <div class="gallery">
                <?php 
				while($row=mysql_fetch_array($res))
				{
					echo "<ul id='menu'>";
					echo "<li class='port_port_menu'>";
					
				    echo"<ul>";
                    echo"<li class='button'><a href='#' class='green'>$row[1]<span></span></a></li>";
        
                    echo"<li class='dropdown'>";
                     echo "<ul>";
                            echo"<li class='fade-in'>&nbsp;</li>";
                        echo "</ul>";
                        
                    echo "</li>";
        
                  echo "</ul>";
          
                  echo "</li>";
                
                  echo "</ul>";
                }
      			?>
  
      	</div>
                <div id="im" class="gallery1">
                </div>
               	</div>
      
    </div>
  </div>
             
  <!-- /Portfolio -->
  <div id="team" class="panel">
    <div class="content">
      <div class="port">
        <div class="close"><a href="#!/team"><img src="images/closeIcon.png" alt="" class="close"></a></div>
        <div class="heading">Team At Kunal Arts</div>
        <div class="tboutimg"><img src=""></div>
        <div class="theading">Kunal Arts</div>
        <div class="tpara">KUNAL ARTS was co-founded by two passionate photojournalists with a vision to revolutionize wedding photography, 			                  Praful Mehta & Abhishake saw an opportunity to leverage his background in photojournalism, direct-to-consumer marketing and technology. </div>
 		<div class="tpara2">KUNAL ARTS was co-founded by two passionate photojournalists with a vision to revolutionize wedding photography, 			                  Praful Mehta & Abhishake saw an opportunity to leverage his background in photojournalism, direct-to-consumer marketing and technology. </div>
        <div class="theading2">Kunal Arts</div>
 		<div class="tpara3">KUNAL ARTS was co-founded by two passionate photojournalists with a vision to revolutionize wedding photography, 			                  Praful Mehta & Abhishake saw an opportunity to leverage his background in photojournalism, direct-to-consumer marketing and technology. </div>
         
 		 <div class="tpara2">KUNAL ARTS was co-founded by two passionate photojournalists with a vision to revolutionize wedding photography, 			                  Praful Mehta & Abhishake saw an opportunity to leverage his background in photojournalism, direct-to-consumer marketing and technology. </div>
      </div>
    </div>
  </div>
</div>
<div id="contact" class="panel">
  <div class="content">
    <div class="port">
      <div class="close"><a href="#!/contact"><img src="images/closeIcon.png" alt="" class="close"></a></div>
      <div class="heading">Contact Us</div>
      <div class="address">
      <div class="contact">Contact Details</div>
      <br /><br />      
      <table width="300" height="200">
      <tr>
      <td>KUNAL D. RATHOD</td>
      
      </tr>
      <tr>
      <td>Address:</td>
      <td></td>
      </tr>
      <tr>
      <td>Mobile:</td>
      <td>+919922948680-81<br />+919967407471</td>
      </tr>
	  <tr>
      <td>Email:</td>
      <td><a href="">Krathod25@gmail.com</a></td>
      </tr>

      </table>
      
      </div>
     
    </div>
  </div>
  
</div>

		</div> 
  <div>
   	 <div>
         <span class="reference">
             <div>
             <ul id="menu" class="main">
                <li><a class="topmenu" href="index.php" title="First example">Home</a></li>
                <li><a class="topmenu" id="link-about" href="#about">About Us</a></li>
                <li><a class="topmenu" id="link-portfolio" href="#portfolio" >Portfolio</a></li>
                <li><a class="topmenu" id="link-about" href="#contact">Contact</a></li>
            </ul>
            </div>
         </span>
	 </div>
  </div>
  

        <!-- The JavaScript -->
</body>
</html>