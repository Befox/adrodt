# AdrODT module for Dolibarr

## What is it ?

This module for Dolibarr 3.7 add shipping/billing address and line's extra fields when parsing ODT Template.

## How to install

Like all Dolibarr modules, git clone this repository and install adrodt directory in dolibarr/htdocs/

Enable AdrOdt module in Interfaces Modules list.

## How to use new fields

New tags are :

- shipping address from contact
adrodt_ship_name		
adrodt_ship_lastname 	
adrodt_ship_firstname 
adrodt_ship_address 	
adrodt_ship_zip 		
adrodt_ship_town 		
adrodt_ship_department
adrodt_ship_state 	
adrodt_ship_country 	
adrodt_ship_email 	
adrodt_ship_phone 	
adrodt_ship_fax 		

- billing address from contact
adrodt_bill_name		
adrodt_bill_lastname 	
adrodt_bill_firstname 
adrodt_bill_address 	
adrodt_bill_zip 		
adrodt_bill_town 		
adrodt_bill_department
adrodt_bill_state 	
adrodt_bill_country 	
adrodt_bill_email 	
adrodt_bill_phone 	
adrodt_bill_fax

Fields are filled whith customer data if there is no shipping or billing contact