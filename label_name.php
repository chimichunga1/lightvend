<?php


if( $_SESSION["access"]!=1)
{
$sidebar_label=array("MAINTENANCE","SUPPLIERS","STOCKS","GROUP","SALES INVOICES","CLIENTS","REPORTS","SAMPLE","PAYOUT");
$sidebar_icon=array("fa fa-gear","fa fa-dropbox","fa fa-truck","fa fa-object-group","fa fa-shopping-cart","fa fa-group","fa fa-pie-chart","","");
}
else
{
	$sidebar_label=array("MAINTENANCE","SUPPLIERS","STOCKS","GROUP","SALES INVOICES","CLIENTS","REPORTS","SAMPLE","PAYOUT","ACCOUNTS");
$sidebar_icon=array("fa fa-gear","fa fa-dropbox","fa fa-truck","fa fa-object-group","fa fa-shopping-cart","fa fa-group","fa fa-pie-chart","","","fa fa-user");
}
?>