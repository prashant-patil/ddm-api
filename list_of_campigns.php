<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

$accountId = "Dominion";
$userId = "prashantpatil";
$password = "!psp34781";

$adXML = '<AdXML>
 <Request type="Campaign">
    <Campaign action="list">
      <SearchCriteria>
        <Status>L</Status>
        <Id></Id>
      </SearchCriteria>
    </Campaign>
  </Request>
</AdXML>';

$client = new SoapClient("https://openadstream18.247realmedia.com/oasapi/OaxApi?wsdl");
$result = $client->OasXmlRequest($accountId,$userId,$password,$adXML);

var_dump($result);
?>