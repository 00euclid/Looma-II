<!doctype html>
<!--
LOOMA php code file
Filename: looma-text-scam.php
Description:

Programmer name:
Email:
Owner: VillageTech Solutions (villagetechsolutions.org)
Date:
Revision: Looma 2.0.x

Comments: internal use page for sequencing through and examining text files
-->

<?php $page_title = 'Looma - Text Scan';
include ('includes/header.php');
include ('includes/mongo-connect.php');
?>
<link rel="stylesheet" href="css/looma-text-scan.css">
</head>

<body>
<div id="main-container-horizontal">
    <div id="fullscreen">
        <div id="display"></div>
        <div id="legend"></div>
        <button class = "lookup"></button>
        <button class="speak looma-control-button"></button>
        <button id="fullscreen-control" class="looma-control-button"></button>
        <button id="next">Next</button>
    </div>
</div>

<?php
/*include either, but not both, of toolbar.php or toolbar-vertical.php*/
include ('includes/toolbar.php');
/*include ('includes/toolbar-vertical.php'); */
include ('includes/js-includes.php');
?>
<script src="js/looma-text-scan.js"></script>
</body>
