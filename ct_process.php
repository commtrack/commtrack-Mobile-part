<?php
/*
#
#       ct_process.php
#
#       This Software is developed by:
#       Invention and Technological Ideas Development Organization (ITIDO)
#        contacts: info@itido.co.tz
#        web: www.itido.co.tz    
#            
#        With Support from DIMAGI and DTREE
#        
#        Authors:
#            William, Fred <fred.haule@gmail.com>
#           
#       This program is free software; you can redistribute it and/or modify
#       it under the terms of the GNU General Public License as published by
#       the Free Software Foundation; either version 2 of the License, or
#       (at your option) any later version.
#       
#       This program is distributed in the hope that it will be useful,
#       but WITHOUT ANY WARRANTY; without even the implied warranty of
#       MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#       GNU General Public License for more details.
#       
#       You should have received a copy of the GNU General Public License
#       along with this program.
#
#        Copyright 2009 ITIDO DIMAGI DTREE 
*/

include("ct_conf.php");
include("ct_functions.php");


//Read the incoming data from mobile client
$xml = simplexml_load_file("php://input");


//Global variables:
$arrColumns=array();
$arrValues=array();
$i=0;
	foreach($xml->children() as $child)
		{
		$arrColumns[$i]=$child->getName();
		$arrValues[$i]= $child;	
		 $i++;		
		}
//find which file was sent..
$file = check_file($xml);

//validate user for inserting data to db!
	if (validate_user()){
		insert_todb($file);
	}else{
	
		echo "Sorry you are not authorized user! Try to send 
		again with correct userID or Contact your system Admin";
	}
	



?>