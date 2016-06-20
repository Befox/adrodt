# AdrODT module for Dolibarr

## What is it ?

This module for Dolibarr 3.7-3.8-3.9 add shipping/billing address and line's extra fields when parsing ODT Template.

## How to use new fields in your ODT template

Simply use new tags in your template eg. ```{adrodt_ship_name}```

### Shipping address from contact
- adrodt_ship_name
- adrodt_ship_lastname
- adrodt_ship_firstname
- adrodt_ship_address
- adrodt_ship_zip
- adrodt_ship_town
- adrodt_ship_department
- adrodt_ship_state
- adrodt_ship_country
- adrodt_ship_email
- adrodt_ship_phone
- adrodt_ship_fax

Fields are filled with customer data if there is no shipping contact

### Billing address from contact
- adrodt_bill_name
- adrodt_bill_lastname
- adrodt_bill_firstname
- adrodt_bill_address
- adrodt_bill_zip
- adrodt_bill_town
- adrodt_bill_department
- adrodt_bill_state
- adrodt_bill_country
- adrodt_bill_email
- adrodt_bill_phone
- adrodt_bill_fax

Fields are filled with customer data if there is no billing contact

### Extra fields lines

Tag is constituted under this model : ```{line_options_<extra_fields_code>}``` where ```<extra_fields_code>``` is the extra field code name (e.g. ```{line_options_myfield}```)

## How to install

Like all Dolibarr modules, git clone this repository and install adrodt directory in dolibarr/htdocs/

Enable AdrOdt module in Interfaces Modules list.

## Using ODT Templates

See official : https://wiki.dolibarr.org/index.php/Create_an_ODT_document_template

```
Warning, tags must be rounded with {} or [] for arrays (see later) and must be typed
with no stop using Office suite (with no backward and no copy-paste).
If not doing that, Office suite add some invisible informations making replacement
not possible. 
```

There is an example ODT template displaying all tags added by adrodt and dump all available tags.

If you encounter problem with your ODT template, please test with adrodt_debug.odt

Please, do not report bugs due to your specific ODT. If adrodt_debug.odt is working, then problem certainly comes from errors in your ODF file.
