<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

$accountId = "Dominion";
$userId = "prashantpatil";
$password = "!psp34781";

$adXML = '<AdXML>
<Request type="Report">
<Report type="Site"> <Id>AAdvancedResumes-EG-EduSky</Id>
<StartDate>2013-01-08</StartDate> <EndDate>2013-01-08</EndDate> 
<Table>Revenue.Site.Base.T105.05</Table>
<Table>Revenue.Site.Base.T130.13</Table>
<Table>Revenue.Site.Base.T135.03</Table>
<Table>Revenue.Site.Base.T191.01</Table>
<Table>Revenue.Site.Base.T191.03</Table>
<Table>Revenue.Site.Base.T191.05</Table>
</Report> </Request>
</AdXML>';

$client = new SoapClient("https://openadstream18.247realmedia.com/oasapi/OaxApi?wsdl");
$result = $client->OasXmlRequest($accountId,$userId,$password,$adXML);
echo $result;
?>