<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

$accountId = "Dominion";
$userId = "prashantpatil";
$password = "!psp34781";

$adXML = '<AdXML>
    <Request type="Report">
        <Report type="InsertionOrder">
            <Id>10010</Id>
             <StartDate>2013-01-13</StartDate>
            <EndDate>2013-01-13</EndDate>
            <Table>Delivery.InsertionOrder.Base.T100.03</Table>
        </Report>
    </Request>
</AdXML>';

$client = new SoapClient("https://openadstream18.247realmedia.com/oasapi/OaxApi?wsdl");
$result = $client->OasXmlRequest($accountId,$userId,$password,$adXML);

var_dump($result);
?>