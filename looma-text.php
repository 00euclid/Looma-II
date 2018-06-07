<!doctype html>
<!--
LOOMA php code file
Filename: xxx.php
Description:

Programmer name:
Email:
Owner: VillageTech Solutions (villagetechsolutions.org)
Date:
Revision: Looma 2.0.x

Comments:
-->

<?php $page_title = 'Looma - Text File';
	  include ('includes/header.php');
	  include ('includes/mongo-connect.php');
?>
    <link rel="stylesheet" href="css/looma-text.css">
</head>

<body>
	<div id="main-container-horizontal">
	    <div id="fullscreen">
            <?php include ('includes/looma-control-buttons.php');?>

            <?php
                if (isset($_REQUEST['id'])) {
                    $id = $_REQUEST['id'];
                    echo "<div id='the_id' data-id=" . rawurlencode($id) . " hidden></div>";
                } else if (isset($_REQUEST['dn'])) {
                    $dn = $_REQUEST['dn'];
                    echo "<div id='the_dn' data-dn=" . rawurlencode($dn) . " hidden></div>";
                } else echo "file not found";
           ?>
         <div id="display"></div>

	    </div>
	</div>

<?php
	      include ('includes/toolbar.php');
   		  include ('includes/js-includes.php');
    ?>
     <script src="js/looma-text.js"></script>
</body>
