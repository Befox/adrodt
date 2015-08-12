<?php
/** 		Function called to complete substitution array (before generating on ODT, or a personalized email)
 * 		functions xxx_completesubstitutionarray are called by make_substitutions() if file
 * 		is inside directory htdocs/core/substitutions
 * 
 *		@param	array		$substitutionarray	Array with substitution key=>val
 *		@param	Translate	$langs			Output langs
 *		@param	Object		$object			Object to use to get values
 * 		@return	void					The entry parameter $substitutionarray is modified
 */
function adrodt_completesubstitutionarray(&$substitutionarray,$langs,$object)
{
    global $conf,$db;
 
   	//$arrayidcontact = $object->getIdContact('external','CUSTOMER');
   	$arrayidcontact = $object->getIdContact('external','SHIPPING');
	if (count($arrayidcontact) > 0 && $object->fetch_contact($arrayidcontact[0]) == true)
	{
		$substitutionarray['adrodt_ship_name']		 	= $object->client->name;
		$substitutionarray['adrodt_ship_lastname'] 		= $object->contact->lastname;
		$substitutionarray['adrodt_ship_firstname'] 	= $object->contact->firstname;
		$substitutionarray['adrodt_ship_address'] 		= $object->contact->address;
		$substitutionarray['adrodt_ship_zip'] 			= $object->contact->zip;
		$substitutionarray['adrodt_ship_town'] 			= $object->contact->town;
		$substitutionarray['adrodt_ship_department'] 	= $object->contact->department;
		$substitutionarray['adrodt_ship_state'] 		= $object->contact->state;
		$substitutionarray['adrodt_ship_country'] 		= $object->contact->country;
		$substitutionarray['adrodt_ship_email'] 		= $object->contact->email;
		$substitutionarray['adrodt_ship_phone'] 		= $object->contact->phone_pro;
		$substitutionarray['adrodt_ship_fax'] 			= $object->contact->fax;
	}
	else
	{
		$substitutionarray['adrodt_ship_name']		 	= $object->client->name;
		$substitutionarray['adrodt_ship_lastname'] 		= $object->client->lastname;
		$substitutionarray['adrodt_ship_firstname'] 	= $object->client->firstname;
		$substitutionarray['adrodt_ship_address'] 		= $object->client->address;
		$substitutionarray['adrodt_ship_zip'] 			= $object->client->zip;
		$substitutionarray['adrodt_ship_town'] 			= $object->client->town;
		$substitutionarray['adrodt_ship_department'] 	= $object->client->department;
		$substitutionarray['adrodt_ship_state'] 		= $object->client->state;
		$substitutionarray['adrodt_ship_country'] 		= $object->client->country;
		$substitutionarray['adrodt_ship_email'] 		= $object->client->email;
		$substitutionarray['adrodt_ship_phone'] 		= $object->client->phone;
		$substitutionarray['adrodt_ship_fax'] 			= $object->client->fax;
	}
	
	$arrayidcontact = $object->getIdContact('external','BILLING');
	if (count($arrayidcontact) > 0 && $object->fetch_contact($arrayidcontact[0]) == true)
	{
		$substitutionarray['adrodt_bill_name']			= $object->client->name;
		$substitutionarray['adrodt_bill_lastname'] 		= $object->contact->lastname;
		$substitutionarray['adrodt_bill_firstname'] 	= $object->contact->firstname;
		$substitutionarray['adrodt_bill_address'] 		= $object->contact->address;
		$substitutionarray['adrodt_bill_zip'] 			= $object->contact->zip;
		$substitutionarray['adrodt_bill_town'] 			= $object->contact->town;
		$substitutionarray['adrodt_bill_department']	= $object->contact->department;
		$substitutionarray['adrodt_bill_state'] 		= $object->contact->state;
		$substitutionarray['adrodt_bill_country'] 		= $object->contact->country;
		$substitutionarray['adrodt_bill_email'] 		= $object->contact->email;
		$substitutionarray['adrodt_bill_phone'] 		= $object->contact->phone_pro;
		$substitutionarray['adrodt_bill_fax'] 			= $object->contact->fax;
	}
	else
	{
		$substitutionarray['adrodt_bill_name']			= $object->client->name;
		$substitutionarray['adrodt_bill_lastname'] 		= $object->client->lastname;
		$substitutionarray['adrodt_bill_firstname'] 	= $object->client->firstname;
		$substitutionarray['adrodt_bill_address'] 		= $object->client->address;
		$substitutionarray['adrodt_bill_zip'] 			= $object->client->zip;
		$substitutionarray['adrodt_bill_town'] 			= $object->client->town;
		$substitutionarray['adrodt_bill_department']	= $object->client->department;
		$substitutionarray['adrodt_bill_state'] 		= $object->client->state;
		$substitutionarray['adrodt_bill_country'] 		= $object->client->country;
		$substitutionarray['adrodt_bill_email'] 		= $object->client->email;
		$substitutionarray['adrodt_bill_phone'] 		= $object->client->phone;
		$substitutionarray['adrodt_bill_fax'] 			= $object->client->fax;
	}
	
   $substitutionarray['myowntag'] .= print_r($substitutionarray, true);
}