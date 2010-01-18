<?php
/*
#
#       submit.php
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


//Do the conf here!
//Make sure you set the tables too! :)

/*
		$hostname 						= "localhost";							// Database Hostname (usually localhost)
		$db_user 						= "root";								// Username for database 
		$db_password 					= "";									// Password for database 
		$db_name 						= 'commTrackMobile';					//Database name

//Tables we intaract with...
		$tbl_users  					= "users";								// This is the table that stores valid users
		$tbl_status_update 				= "status_update";						//This table stores updates status actually received form :)
		$tbl_resource_supply_request 	= "resource_supply_request";			//This table stores resource supply request
		
*/		

		$hostname 						= "localhost";							// Database Hostname (usually localhost)
		$db_user 						= "root";								// Username for database 
		$db_password 					= "";									// Password for database 
		$db_name 						= 'commtrack2';							//Database name
		
		$tbl_users  					= "reporters_reporter";					// This is the table that stores valid users
		$tbl_status_update 				= "commtrack_status";						//This table stores updates status actually received form :)
		$tbl_resource_supply_request 	= "commtrack_resourcesupplyrequest";	
		$connection = mysql_connect($hostname,$db_user,$db_password) or die(mysql_error());
		$db = mysql_select_db($db_name,$connection) or die(mysql_error());

?>
