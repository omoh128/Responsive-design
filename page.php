<html>
<HEAD>
<TITLE>Responsive Web Design</TITLE>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet" type="text/css" />
</HEAD>
      <body>
         <div id="page-content">
                <div id="responsive-menu">
		  <div id="menu-expand-collapse"><img src="menu.png" width="25px"></div>
		    <div id="responsive-menu-list">
			<div class="menu-item">
			  <a href="#" >Home</a>
			</div>
			 <div class="menu-item">
			   <a href="#" >About</a>
			</div>
			  <div class="menu-item">
			   <a href="#">Services</a>
			</div>	 
			 <div class="menu-item">
			   <a href="#">Contact</a>
			</div>			 
		   </div>		 
              </div>
         
         include_once("header.php");
                
       
        include("content.php");
       
        
      include("footer.php");
        
        </div>
     
      <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
		<script>
		$(document).ready(function(){
			$("#menu-expand-collapse").click(function() {
				$("#responsive-menu-list").toggle();
			});
		});
      </script>
   </body>
</html>
