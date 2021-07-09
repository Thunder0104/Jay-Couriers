<?php

require_once('database.php');
require_once('library.php');

$cons= $_POST['Consignment'];

$sql = "SELECT *
		FROM tbl_courier
		WHERE cons_no = '$cons'";
$result = dbQuery($sql);
$no = dbNumRows($result);
if($no == 1){
while($data = dbFetchAssoc($result)) {
extract($data);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Track Your Courier</title>
	<meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
<link href="/path/to/tailwind.css" rel="stylesheet">


<style>
.max-w-lg {
    max-width: 50rem;
}
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {

    height: 100%;
    color: black;
    line-height: 1.8;
    
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('1.jpg');
    min-height: 200px;
}


.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
.text-sm {
    font-size: 1rem;
    line-height: 1.5rem;
}
.order_detail_icon {
    width: 25px;
    height: 27px;
    background: url(https://coversdeal.shiprocket.co/post_order/img/Box.png) no-repeat;
    display: inline-block;
    position: absolute;
    left: 16px;
    top: 21px;
}
</style>

</head>

<body class="min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;padding-top:0px;padding-bottom:0px; background-color:#9AD3BC;">
<div class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
		<div class="relative flex items-center justify-between">
			<div class="flex items-center">
				<a href="#" aria-label="Company" title="Company" class="inline-flex items-center mr-8">
					<svg class="w-8 text-purple-accent-400" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round"
					 stroke-miterlimit="10" stroke="currentColor" fill="none">
						<rect class="text-purple-400" x="3" y="1" width="7" height="12"></rect>
						<rect class="text-red-400" x="3" y="17" width="7" height="6"></rect>
						<rect class="text-red-400" x="14" y="1" width="7" height="6"></rect>
						<rect class="text-purple-400" x="14" y="11" width="7" height="12"></rect>
					</svg>
					<span class="ml-2 text-xl font-bold tracking-wide text-purple-900 uppercase">JAY COURIERS</span>
      </a>
      <ul class="flex items-center hidden space-x-8 lg:flex">
        <li><a href="index.php" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-deep-purple-accent-400">HOME</a></li>
        <li><a href="login.php" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-deep-purple-accent-400">ADMIN LOGIN</a></li>
        
        
      </ul>
</div>
</div>
</div>
<main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl" style="
    padding-top: 30px;">
<div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">


                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </span>
                        <span class="tracking-wide">Shipper and Receiver Info</span>
                        
                    </div>
<div class="text-gray-700">
                        <div class="grid md:grid-cols-2 text-sm">
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Shipper Name</div>
                                <div class="px-4 py-2"><?php echo $ship_name; ?></div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Receiver Name</div>
                                <div class="px-4 py-2"><?php echo $rev_name; ?></div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Shipper Phone</div>
                                <div class="px-4 py-2"><?php echo $phone; ?></div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Receiver Phone</div>
                                <div class="px-4 py-2"><?php echo $r_phone; ?></div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Shipper Address</div>
                                <div class="px-4 py-2"><?php echo $s_add; ?></div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Receiver Address</div>
                                <div class="px-4 py-2"><?php echo $r_add; ?></div>
                            </div>
                            
                        </div>
                    </div>
</main>


<table border="0" cellpadding="0" cellspacing="0" align="center" width="500">

  <tbody><tr>

    <td width="500">


	</td>

  </tr>

  

  <tr>

    <td bgcolor="#FFFFFF">
	
<style type="text/css">
.ds_box {
	background-color: #FFF;
	border: 1px solid #000;
	position: absolute;
	z-index: 32767;
}
.ds_tbl {
	background-color: #FFF;
}
.ds_head {
	background-color: #333;

	color: #FFF;

	font-family: Arial, Helvetica, sans-serif;

	font-size: 13px;

	font-weight: bold;

	text-align: center;

	letter-spacing: 2px;

}
.ds_subhead {
	background-color: #CCC;
	color: #000;
	font-size: 12px;
	font-weight: bold;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	width: 32px;
}
.ds_cell {
	background-color: #EEE;
	color: #000;
	font-size: 13px;

	text-align: center;

	font-family: Arial, Helvetica, sans-serif;

	padding: 5px;

	cursor: pointer;

}
.ds_cell:hover {
	background-color: #F3F3F3;
} /* This hover code won't work for IE */
</style>
<style type="text/css">

<!--

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

-->

</style>




  <table border="0" align="center" width="98%" style="font-family: 'Raleway', sans-serif;">

    <tbody><tr>

      <td class="Partext1" bgcolor="F9F5F5" align="center"><strong>Courier Status</strong></td>

    </tr>

  </tbody></table>



  <br>


  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%"> 

    

    <tbody>

    <tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right">&nbsp;</td>

      <td class="Partext1" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>

    <tr> 

      <td class="style3" bgcolor="#FFFFFF" align="right" width="336">Consignment No  : </td> 

      <td class="style3" bgcolor="#FFFFFF" width="394"><font color="#FF0000"><?php echo $cons_no; ?></font>&nbsp;</td> 
    </tr> 

    <tr>

      <td class="style3" bgcolor="#FFFFFF" align="right">Ship Type  :</td>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $type; ?>&nbsp;</td>
    </tr>

    <tr>

      <td class="style3" bgcolor="#FFFFFF" align="right">Weight :</td>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $weight; ?>&nbsp;kg</td>
    </tr>

    <tr>

      <td class="style3" bgcolor="#FFFFFF" align="right">Invoice no  :</td>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $invice_no; ?>&nbsp;</td>
    </tr>

    <tr>

      <td class="style3" bgcolor="#FFFFFF" align="right">Booking Mode :</td>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $book_mode; ?>&nbsp;</td>
    </tr>

    <tr>

      <td class="style3" bgcolor="#FFFFFF" align="right">Total freight : </td>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $freight; ?>&nbsp;Rs.</td>
    </tr>

    <tr>

      <td class="style3" bgcolor="#FFFFFF" align="right">Mode : </td>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $mode; ?></td>
    </tr> 

    <tr> 

      <td class="style3" bgcolor="#FFFFFF" align="right">Pickup Date/Time  :</td> 

      <td class="style3" bgcolor="#FFFFFF">

        <?php echo $pick_date; ?> -<span class="gentxt">
<?php echo $pick_time; ?>
        </span> </td> 
    </tr> 

    <tr> 

      <td class="style3" bgcolor="#FFFFFF" align="right">Status :</td> 

      <td class="style3" bgcolor="#FFFFFF">&nbsp;<?php echo $status; ?></td> 
    </tr> 

     

    <tr> 

      <td class="style3" bgcolor="#FFFFFF" align="right" valign="top">Comments :</td> 

      <td class="style3" bgcolor="#FFFFFF">&nbsp;<?php echo $comments; ?></td> 
    </tr> 
  </tbody></table> 

  <p>&nbsp;</p></td>

  </tr>

  <tr>

    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  </table>
</td>

  </tr>

</tbody></table>






</body></html>
<?php }//while
}//if
else {

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Track Your Courier</title>
	
    <meta name="description" content="">

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
<link href="/path/to/tailwind.css" rel="stylesheet">


<style>

body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {

    height: 100%;
    color: black;
    line-height: 1.8;
    
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('1.jpg');
    min-height: 200px;
}


.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
.text-sm {
    font-size: 1rem;
    line-height: 1.5rem;
}
.order_detail_icon {
    width: 25px;
    height: 27px;
    background: url(https://coversdeal.shiprocket.co/post_order/img/Box.png) no-repeat;
    display: inline-block;
    position: absolute;
    left: 16px;
    top: 21px;
}
</style>

</head>

<body class="min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;padding-top:0px;padding-bottom:0px; background-color:#9AD3BC;">
<div class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
		<div class="relative flex items-center justify-between">
			<div class="flex items-center">
				<a href="#" aria-label="Company" title="Company" class="inline-flex items-center mr-8">
					<svg class="w-8 text-purple-accent-400" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round"
					 stroke-miterlimit="10" stroke="currentColor" fill="none">
						<rect class="text-purple-400" x="3" y="1" width="7" height="12"></rect>
						<rect class="text-red-400" x="3" y="17" width="7" height="6"></rect>
						<rect class="text-red-400" x="14" y="1" width="7" height="6"></rect>
						<rect class="text-purple-400" x="14" y="11" width="7" height="12"></rect>
					</svg>
					<span class="ml-2 text-xl font-bold tracking-wide text-purple-900 uppercase">JAY COURIERS</span>
      </a>
      <ul class="flex items-center hidden space-x-8 lg:flex">
        <li><a href="index.php" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-deep-purple-accent-400">HOME</a></li>
        <li><a href="login.php" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-deep-purple-accent-400">ADMIN LOGIN</a></li>
        
        
      </ul>
</div>
</div>
</div>
<main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl" style="
    padding-top: 30px;">
<div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">


                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </span>
                        <span class="tracking-wide">Courier Details</span>
                        
                    </div>
<div class="text-gray-700">
<h3 class="center" style="font-family:Verdana; font-size:12px;">Consignment Number <font color="#FF0000"><?php echo $cons; ?></font> not found. Please verify the Number.<br/>
<a href="track-status.php">Go Back</a> To Enter The Correct Consignment No.</h3>
                    </div>
</main>








</body></html>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
.style1 {color: #FF0000}
.style3 {font-family: verdana, tohama, arial}
</style>
</head>

<body>

<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">

  <tbody><tr>

    <td width="900">


	</td>

  </tr>

  

  <tr>

    <td bgcolor="#FFFFFF">
	
<style type="text/css">
.ds_box {
	background-color: #FFF;
	border: 1px solid #000;
	position: absolute;
	z-index: 32767;
}
.ds_tbl {
	background-color: #FFF;
}
.ds_head {
	background-color: #333;

	color: #FFF;

	font-family: Arial, Helvetica, sans-serif;

	font-size: 13px;

	font-weight: bold;

	text-align: center;

	letter-spacing: 2px;

}
.ds_subhead {
	background-color: #CCC;
	color: #000;
	font-size: 12px;
	font-weight: bold;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	width: 32px;
}
.ds_cell {
	background-color: #EEE;
	color: #000;
	font-size: 13px;

	text-align: center;

	font-family: Arial, Helvetica, sans-serif;

	padding: 5px;

	cursor: pointer;

}
.ds_cell:hover {
	background-color: #F3F3F3;
} /* This hover code won't work for IE */
</style>
<style type="text/css">

<!--

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

-->

</style>



 

<table class="ds_box" id="ds_conclass" style="display: none;" cellpadding="0" cellspacing="0"> 

  <tbody><tr> 

    <td id="ds_calclass"> </td> 

  </tr> 

</tbody></table> 



  <br>




  <br>

  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%"> 

    

    <tbody><tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right"><div align="center">

  <span class="Partext1"><br>

   
   </span>

  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%">

     <tbody><tr>

       </tr>

        </tbody></table>


</td>

  </tr>

  <tr>

    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td bgcolor="#2284d5" height="40" width="476">&nbsp;</td>
    <td bgcolor="#2284d5" width="304"><div align="right"></div></td>
  </tr>
</tbody></table>
</td>

  </tr>

</tbody></table>





</body></html>



<?php 
}//else
?>