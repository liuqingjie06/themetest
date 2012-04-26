
<?php
	/*Opens a connection to a MySQL server
				$username="root";
				$password="root";
				$database="thinksns_2_5";
				$connection=mysql_connect (localhost, $username, $password);
				if (!$connection) {
				  die('Not connected : ' . mysql_error());
				}

				// Set the active MySQL database
				$db_selected = mysql_select_db($database, $connection);
				if (!$db_selected) {
				  die ('Can\'t use db : ' . mysql_error());
				}

				// Select all the rows in the markers table
				$query = "SELECT * FROM markers WHERE 1";
				$result = mysql_query($query);
				if (!$result) {
				  die('Invalid query: ' . mysql_error());
				}

				//
				$doc = new DOMDocument("1.0");
				
				$node = $doc->createElement("markers");
				$parnode = $doc->appendChild($node);
				header("Content-type: text/xml");
				while ($row = @mysql_fetch_assoc($result)){
				  // ADD TO XML DOCUMENT NODE
				  $node = $doc->createElement("marker");
				  $newnode = $parnode->appendChild($node);

				  $newnode->setAttribute("name", $row['name']);
				  $newnode->setAttribute("address", $row['address']);
				  $newnode->setAttribute("lat", $row['lat']);
				  $newnode->setAttribute("lng", $row['lng']);
				  $newnode->setAttribute("type", $row['type']);
				}

	            // echo $doc->saveXML();*/

/*new google.maps.LatLng(28.722247938163914,115.87408513353444),
 new google.maps.LatLng(28.723661594204806,115.87061904893494),
new google.maps.LatLng(28.72422434630353,115.86942814813233),
new google.maps.LatLng(28.725086403728064,115.86843036637879),
new google.maps.LatLng(28.725889651383422,115.8678027294693),
new google.maps.LatLng(28.727418509809137, 115.8669927023468),
new google.maps.LatLng(28.728763886727666, 115.86651526914216),
new google.maps.LatLng(28.728945581846265,115.86645827220059),
new google.maps.LatLng()
*/


$data[0]['lat']=28.75298241271018;
$data[0]['lng']=115.86320542321778;
$data[0]['problem']=1;
$data[0]['mileage']='k688+200';
$data[1]['lat']=28.751099434310657;
$data[1]['lng']=115.8635681919887704;
$data[1]['problem']=2;$data[1]['mileage']='k688+400';
$data[2]['lat']=28.748159380478857;
$data[2]['lng']=115.86392760799504;
$data[2]['problem']=3;$data[2]['mileage']='k688+900';
$data[3]['lat']=28.74449375050538286;
$data[3]['lng']=115.86443856881237;
$data[3]['problem']=1;$data[3]['mileage']='k689+100';
$data[4]['lat']=28.731394613061312;
$data[4]['lng']=115.86600833163834;
$data[4]['problem']=1;$data[4]['mileage']='k689+600';
$data[5]['lat']=28.731394613061312;
$data[5]['lng']=115.86600833163834;
$data[5]['problem']=1;$data[5]['mileage']='k689+800';
$data[6]['lat']=28.730550835676727;
$data[6]['lng']=115.86609684453583;
$data[6]['problem']=1;$data[6]['mileage']='k690+100';
$data[7]['lat']=28.730046329986514;
$data[7]['lng']=115.86617664025403;
$data[7]['problem']=2;$data[7]['mileage']='k690+200';
$data[8]['lat']=28.72955711002195;
$data[8]['lng']=115.86628057585335;
$data[8]['problem']=1;$data[8]['mileage']='k690+700';
$data[9]['lat']=28.72912668864039;
$data[9]['lng']=115.8664059691248;
$data[9]['problem']=1;$data[9]['mileage']='k691+200';

echo 'var data='.json_encode($data);


?>