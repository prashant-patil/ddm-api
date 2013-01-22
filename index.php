<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

$accountId = "Dominion";
$userId = "prashantpatil";
$password = "!psp34781";

$adXML = '<AdXML>
<Request type="Report">
<Report type="Campaign"> <Id>laurabarnett5-hdc-Homes-CS-coppell-tx-167</Id>
<StartDate>2012-12-01</StartDate> <EndDate>2013-01-31</EndDate> <Table>Delivery.Campaign.Base.T102.06</Table>
</Report> </Request>
</AdXML>';

$client = new SoapClient("https://openadstream18.247realmedia.com/oasapi/OaxApi?wsdl");
$result = $client->OasXmlRequest($accountId,$userId,$password,$adXML);

var_dump($result);
?>