<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

$accountId = "Dominion";
$userId = "prashantpatil";
$password = "!psp34781";

$adXML = '<AdXML>
<Request type="Report">
<Report type="Campaign"> <Id>AAdvancedResumes-EG-EduSky</Id>
<StartDate>2013-01-08</StartDate> <EndDate>2013-01-08</EndDate> 
<Table>Delivery.Campaign.Segment.T110.01</Table>
<Table>Delivery.Campaign.Base.T155.01</Table>
<Table>Delivery.Campaign.Base.T100.03</Table>
<Table>Delivery.Campaign.Base.T606.01</Table>
<Table>Delivery.Campaign.Search.T904.01</Table>
<Table>Delivery.Advertiser.Base.T102.01</Table>
<Table>Delivery.Campaign.Base.T204.01</Table>
<Table>Delivery.Campaign.Base.T9990.01</Table>
</Report> </Request>
</AdXML>';

$client = new SoapClient("https://openadstream18.247realmedia.com/oasapi/OaxApi?wsdl");
$result = $client->OasXmlRequest($accountId,$userId,$password,$adXML);
echo $result;
?>