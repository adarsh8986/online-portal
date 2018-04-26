<html>
 <head>
  <title> User Registration</title>
  <link rel="icon" href="images/favicon.jpg" type="gallery/ico" sizes="36x36">
  <link rel="stylesheet" type="text/css" href="./css/layout.css" />
  <script type="text/javascript" src="./js/registration.js" ></script>
 </head>
 <body>
  <div id="header">
   <h1>Online Exam Portal</h1>
  </div>
  <div id="nav">
   <a href="http://localhost/jvgroup/test4/adminlogin.php">Admin Login</a><br/>
   <a href="http://localhost/jvgroup/test4/userlogin.php">User Login</a><br/>
   <a href="http://localhost/jvgroup/test4/registration.php">New User Registration</a><br/>
  
  </div>
  <div id="section">
  <h1>New User Registration Form</h1>
  <form action="doRegistration.php" method="post">
   <table>
    <tr>
	 <td>Username</td>
	 <td><input type="text" name="username" onkeyup="checkname(this.value)"/><span id="spanmsg"></span></td>
	</tr>
	<tr>
	 <td>Password</td>
	 <td><input type="password" name="password" /></td>
	</tr>
	<tr>
	 <td></td>
	 <td><input id="submit" type="submit"  value="Register" onclick="return uservalidate()"/></td>
	</tr>
   </table>
  </form>
  <marquee><div style="margin-left:300px;">
  <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=adarsh9934-21&marketplace=amazon&region=IN&placement=007124476X&asins=007124476X&linkId=64c4a34bf118d9786c7968307c96b4d4&show_border=true&link_opens_in_new_window=true"></iframe>
 <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=adarsh9934-21&marketplace=amazon&region=IN&placement=0070701989&asins=0070701989&linkId=4f377016f9052ce2c1a4f1828e0f90b4&show_border=true&link_opens_in_new_window=true"></iframe>
 <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=adarsh9934-21&marketplace=amazon&region=IN&placement=8120329686&asins=8120329686&linkId=857070a234b969160283980407fe74a7&show_border=true&link_opens_in_new_window=true"></iframe>
 </div> </marquee>
   <div id="errormsg"></div>
  </div>
   <div id="footer">
   copyright &copy; jvgroup.com 2018 
  </div>
  
 </body>
</html>