<?php
/*
#
#       ct_functions.php
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
//Db functions
include("ct_conf.php");

function check_file($xml){
			if ($xml->getName() == "status_update"){
					$file = "status_update";
					return $file;
			}
			if ($xml->getName() == "resource_supply_request"){
					$file = "resource_supply_request";
					return $file;
			}

	}
	
// validate user..
function validate_user(){
	global $arrValues;
	global $tbl_users;
		$result = mysql_query("SELECT * FROM $tbl_users WHERE alias = '$arrValues[1]'");
		
		
		$num_rows = mysql_num_rows($result);
		if ($num_rows > 0)
		{
			return true;

		}else {
			return false;
		}
}

	
function insert_todb($file){
	global $tbl_status_update;
	global $tbl_resource_supply_request;
	global $arrColumns;
	global $arrValues;
	
	//this is the function that insert data to status_update table
	if ($file == status_update)
		{

			//database_connection();
			//insertion start with $arrvalues[1] b'se $arrvalues[0] is the form version which we do not need to store in the db!

					$query = "INSERT INTO $tbl_status_update	(id,status,description) 
												VALUES ('{$arrValues[2]}','{$arrValues[3]}','{$arrValues[4]}')";
					$result = mysql_query($query)or die ('Error in query: $query. ' . mysql_error());
					if ($result){
					echo "  The status of " . $arrValues[2] .
					 " have been successfully updated to " . $arrValues[3];
					}else{
					echo "a problem to insert data";
					}			
		}

	//this is the function that insert data to resource_supply_request
	if ($file == resource_supply_request)
		{
			$query = "INSERT INTO $tbl_resource_supply_request	(reporter_id,location_id,request_date,resource_id,noOfResources,request_remarks) 
										VALUES ('{$arrValues[1]}','{$arrValues[2]}','{$arrValues[3]}','{$arrValues[4]}','{$arrValues[5]}','{$arrValues[6]}')";
			$result = mysql_query($query)or die ('Error in query: $query. ' . mysql_error());
			if ($result){
			echo $arrValues[5] . "  item(s) of resourceID ". $arrValues[4] . " Successfully requested. Your remarks being ".$arrValues[6] ;
			}else{
			echo "there is a problem to insert data";
			}

		}

}
?>