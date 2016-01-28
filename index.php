<!DOCTYPE html>
<?php
Require('Connect.php');
 ?>
<!-- Connect with the Database-->

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <link rel="stylesheet" type="text/css" href="StyleSheet.css"/>
    <script type="text/javascript" src="Script.js"></script>
    <title></title>
</head>
<body>
    <div id="main">
      <div class="block">
            <div class="centered">
                <div><input type="button" class="button" value="Refuel" onclick="refuel()" /></div>
                <div><input type="button" class="button" value="Carwash" onclick="carwash1()"/></div>
                <div><input type="button" class="button" value="Oil check" onclick="oil_check()"/></div>
                <div><input type="button" class="button" value="Tyres Check" onclick="tyres_check()"/></div>
  </div>

</div>

         </div>
</body>
</html>
