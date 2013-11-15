gemgento-api-extension
======================

Extend the Magento API to allow Gemgento greater control.

## Magento Pushes
### POST /orders/:magento_id
    {"order_id":"2","shipping_address":{"entity_id":"4","parent_id":"2","customer_address_id":null,"quote_address_id":null,"region_id":"43","customer_id":null,"fax":null,"region":"New York","postcode":"10707","lastname":"Pheasey","street":"51 Wallace St.\nApt. 2","city":"Tuckahoe","email":null,"telephone":"203-247-1881","country_id":"US","firstname":"Kevin","address_type":"shipping","prefix":null,"middlename":null,"suffix":null,"company":null,"vat_id":null,"vat_is_valid":null,"vat_request_id":null,"vat_request_date":null,"vat_request_success":null},"billing_address":{"entity_id":"3","parent_id":"2","customer_address_id":null,"quote_address_id":null,"region_id":"43","customer_id":null,"fax":null,"region":"New York","postcode":"10707","lastname":"Pheasey","street":"51 Wallace St.\nApt. 2","city":"Tuckahoe","email":null,"telephone":"203-247-1881","country_id":"US","firstname":"Kevin","address_type":"billing","prefix":null,"middlename":null,"suffix":null,"company":null,"vat_id":null,"vat_is_valid":null,"vat_request_id":null,"vat_request_date":null,"vat_request_success":null},"items":[{"item_id":"2","order_id":"2","parent_item_id":null,"quote_item_id":"24","store_id":"1","created_at":"2013-11-14 21:45:50","updated_at":"2013-11-15 09:24:11","product_id":"1100","product_type":"simple","product_options":"a:1:{s:15:\"info_buyRequest\";a:7:{s:10:\"product_id\";s:4:\"1100\";s:3:\"sku\";s:23:\"S12WQ0029_N07502_900_41\";s:3:\"qty\";d:1;s:7:\"options\";N;s:13:\"bundle_option\";N;s:17:\"bundle_option_qty\";N;s:5:\"links\";N;}}","weight":null,"is_virtual":"0","sku":"S12WQ0029_N07502_900_41","name":"Brushed Leather Wing Tip Oxford","description":null,"applied_rule_ids":null,"additional_data":null,"free_shipping":"0","is_qty_decimal":"0","no_discount":"0","qty_backordered":null,"qty_canceled":"0.0000","qty_invoiced":"0.0000","qty_ordered":"1.0000","qty_refunded":"0.0000","qty_shipped":"0.0000","base_cost":null,"price":"495.0000","base_price":"495.0000","original_price":"495.0000","base_original_price":"495.0000","tax_percent":"8.3750","tax_amount":"41.4600","base_tax_amount":"41.4600","tax_invoiced":"0.0000","base_tax_invoiced":"0.0000","discount_percent":"0.0000","discount_amount":"0.0000","base_discount_amount":"0.0000","discount_invoiced":"0.0000","base_discount_invoiced":"0.0000","amount_refunded":"0.0000","base_amount_refunded":"0.0000","row_total":"495.0000","base_row_total":"495.0000","row_invoiced":"0.0000","base_row_invoiced":"0.0000","row_weight":"0.0000","base_tax_before_discount":null,"tax_before_discount":null,"ext_order_item_id":null,"locked_do_invoice":null,"locked_do_ship":null,"price_incl_tax":"536.4600","base_price_incl_tax":"536.4600","row_total_incl_tax":"536.4600","base_row_total_incl_tax":"536.4600","hidden_tax_amount":null,"base_hidden_tax_amount":null,"hidden_tax_invoiced":null,"base_hidden_tax_invoiced":null,"hidden_tax_refunded":null,"base_hidden_tax_refunded":null,"is_nominal":"0","tax_canceled":null,"hidden_tax_canceled":null,"tax_refunded":null,"base_tax_refunded":null,"discount_refunded":null,"base_discount_refunded":null,"gift_message_id":null,"gift_message_available":null,"base_weee_tax_applied_amount":"0.0000","base_weee_tax_applied_row_amnt":"0.0000","base_weee_tax_applied_row_amount":"0.0000","weee_tax_applied_amount":"0.0000","weee_tax_applied_row_amount":"0.0000","weee_tax_applied":"a:0:{}","weee_tax_disposition":"0.0000","weee_tax_row_disposition":"0.0000","base_weee_tax_disposition":"0.0000","base_weee_tax_row_disposition":"0.0000"}],"status_history":[{"entity_id":"2","parent_id":"2","is_customer_notified":"2","is_visible_on_front":"0","comment":"Authorized amount of $546.46.","status":"processing","created_at":"2013-11-14 21:45:52","entity_name":"order","store_id":"1","updated_at":"2013-11-15 09:24:11"},{"entity_id":"1","parent_id":"2","is_customer_notified":null,"is_visible_on_front":"0","comment":"Credit Card: xxxx-0027 amount $546.46 authorize - successful. Authorize.Net Transaction ID 0.  Transaction ID: \"0\".","status":null,"created_at":"2013-11-14 21:45:52","entity_name":"order","store_id":"1","updated_at":"2013-11-15 09:24:11"},{"status":"processing","comment":"asd","entity_name":"order","store_id":"1","is_visible_on_front":false,"is_customer_notified":false,"parent_id":"2","created_at":"2013-11-15 09:24:11","updated_at":"2013-11-15 09:24:11","entity_id":"29"}]} 

### POST /categories/:magento_id
    {"category_id":"14","is_active":"1","position":"1","level":"3","entity_type_id":"3","entity_id":"14","parent_id":3,"increment_id":null,"attribute_set_id":"3","created_at":"2013-09-16 20:02:09","updated_at":"2013-11-15 09:25:25","name":"Coats & Jackets","url_key":"coats-jackets","thumbnail":null,"description":"","image":null,"meta_title":"","meta_keywords":"","meta_description":"","include_in_menu":"1","path":"1\/2\/3\/14","all_children":null,"path_in_store":null,"children":null,"url_path":"men\/coats-jackets.html","children_count":0,"display_mode":"PRODUCTS","landing_page":"","is_anchor":"0","available_sort_by":"","default_sort_by":false,"filter_price_range":null,"custom_use_parent_settings":"0","custom_apply_to_products":"0","custom_design":"","custom_design_from":"","custom_design_to":"","page_layout":"","custom_layout_update":"”} 

### POST /product_attribute_sets/:magento_id
    {"set_id":"28","name":"TES”}

### POST /product_attributes/:magento_id
    {"attribute_id":"104","attribute_code":"custom_design_from","frontend_input":"date","default_value":"","is_unique":"0","is_required":"0","apply_to":[],"is_configurable":"1","is_searchable":"0","is_visible_in_advanced_search":"0","is_comparable":"0","is_used_for_promo_rules":"0","is_visible_on_front":"0","used_in_product_listing":"0","frontend_label":[{"store_id":0,"label":"Active From"},{"store_id":0,"label":"Active From"},{"store_id":1,"label":""}],"scope":"store","additional_fields":{"used_for_sort_by":"0”}}

### POST /users/:magento_id
    {"entity_type_id":"1","entity_id":"7","updated_at":"2013-11-15 09:34:37","increment_id":null,"attribute_set_id":"0","confirmation":null,"default_shipping":null,"password_hash":"40bedccf0dc6f168692f90efd49c006d:73","store_id":"1","default_billing":null,"website_id":"1","created_in":"Default Store View","group_id":"1","disable_auto_group_change":"0","prefix":"","firstname":"asd","middlename":"","lastname":"asd","suffix":"","email":"pppppppp@mauinewoyrk.com","created_at":"2013-10-16 19:14:56","dob":null,"taxvat":"","gender":"","rp_token":null,"rp_token_created_at":null}

### POST /stocks/:product_id
    {"product_id":"987","sku":"S03AM0076_N36348_487_46","qty":"1","is_in_stock":"1”}

### POST /products/:magento_id
    {"product_id":"987","sku":"S03AM0076_N36348_487_46","set":"4","type":"simple","categories":["3","14"],"websites":["1"],"type_id":"simple","attribute_set_id":"4","entity_type_id":"4","entity_id":"987","name":"some change123","upc":"80598945341932","style_code":"S03AM0076","season":"93","old_id":null,"jc_collection":"23","size":"68","color":"24","description":"Quilted Back Panel","short_description":"Sherling Collar","url_path":"nylonwoolmixfieldjacket.html","product_details":"100% Polyamide","care_instructions":"DO NOT WASH - DO NOT BLEACH - IRON AT 110\u00b0 C MAX - DELICATE DRY CLEAN - DO NOT TUMBLE DRY -","category_ids":["3","14"],"weight":"0.0000","required_options":"0","news_from_date":"","has_options":"0","news_to_date":"","image_label":"3","status":"1","url_key":"nylonwoolmixfieldjacket","small_image_label":null,"visibility":"1","thumbnail_label":null,"country_of_manufacture":"","created_at":"2013-10-10 18:37:20","updated_at":"2013-11-15 09:37:15","price":"1175.00","group_price":[],"special_price":"1100.00","special_from_date":"2013-10-29 00:00:00","special_to_date":"2013-11-29 00:00:00","tier_price":[],"msrp_enabled":"2","minimal_price":null,"msrp_display_actual_price_type":"4","msrp":"","enable_googlecheckout":"1","tax_class_id":"2","meta_title":"","meta_keyword":"Men Male Men's Main Collection Nylon Wool Mix Field Jacket Sherling Collar Quilted Back Outerwear Coat Navy Blue","meta_description":"","image":"\/i\/m\/image.jpg","small_image":"no_selection","thumbnail":"no_selection","media_gallery":{"images":[{"value_id":"2031","file":"\/i\/m\/image_2026.png","label":"1","position":"0","disabled":"0","label_default":"1","position_default":"0","disabled_default":"0","url":"http:\/\/jc.l\/media\/catalog\/product\/i\/m\/image_2026.png"},{"value_id":"2032","file":"\/i\/m\/image_2027.png","label":"2","position":"1","disabled":"0","label_default":"2","position_default":"1","disabled_default":"0","url":"http:\/\/jc.l\/media\/catalog\/product\/i\/m\/image_2027.png"},{"value_id":"2033","file":"\/i\/m\/image.jpg","label":"3","position":"2","disabled":"0","label_default":"3","position_default":"2","disabled_default":"0","url":"http:\/\/jc.l\/media\/catalog\/product\/i\/m\/image.jpg"}],"values":"{\"image\":\"\\\/i\\\/m\\\/image.jpg\",\"small_image\":\"no_selection\",\"thumbnail\":\"no_selection\"}"},"gallery":null,"is_recurring":"0","recurring_profile":null,"custom_design":"","custom_design_from":"","custom_design_to":"","custom_layout_update":"","page_layout":"","options_container":"container2","gift_message_available":""}
