<?php
// Text
$_['text_title']				= 'Klarna Invoice - Pay within 14 days';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'Klarna Invoice requires some additional information before they can proccess your order.';
$_['text_male']					= 'Чоловік';
$_['text_female']				= 'Жінка';
$_['text_year']					= 'Рік';
$_['text_month']				= 'Місяць';
$_['text_day']					= 'День';
$_['text_comment']				= 'Klarna\'s Invoice ID: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'Стать';
$_['entry_pno']					= 'Персональний номер';
$_['entry_dob']					= 'Дата народження';
$_['entry_phone_no']			= 'Телефон';
$_['entry_street']				= 'Вулиця';
$_['entry_house_no']			= 'Будинок №.';
$_['entry_house_ext']			= 'House Ext.';
$_['entry_company']				= 'Company Registration Number';

// Help
$_['help_pno']					= 'Please enter your Social Security number here.';
$_['help_phone_no']				= 'Please enter your phone number.';
$_['help_street']				= 'Please note that delivery can only take place to the registered address when paying with Klarna.';
$_['help_house_no']				= 'Please enter your house number.';
$_['help_house_ext']			= 'Please submit your house extension here. E.g. A, B, C, Red, Blue ect.';
$_['help_company']				= 'Please enter your Company\'s registration number';

// Error
$_['error_deu_terms']			= 'You must agree to Klarna\'s privacy policy (Datenschutz)';
$_['error_address_match']		= 'Billing and Shipping addresses must match if you want to use Klarna Invoice';
$_['error_network']				= 'Error occurred while connecting to Klarna. Please try again later.';