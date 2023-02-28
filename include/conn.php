<?php
define ("HOST",'localhost');
define ("USER",'root');
define ("PSWD",'');
define ("DBNAME",'penperel'); 


$conn = new mysqli(HOST,USER,PSWD,DBNAME);

/* $conn = new mysqli('localhost','root','','penperel'); */

session_start();
