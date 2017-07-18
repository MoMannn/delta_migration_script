<?php

    include "connect.php";
    
    $conm1 = conm1();
    $conm2 = conm2();


	$tables = array(
	    array(
	         'name' => 'cataloginventory_stock_item',
	         'id' => 'item_id',
	         'destination' => 'm2_cl_cataloginventory_stock_item'
	     ),
 		array(
	         'name' => 'catalog_compare_item',
	         'id' => 'catalog_compare_item_id',
	         'destination' => 'm2_cl_catalog_compare_item'
	     ),
  		array(
	         'name' => 'customer_address_entity',
	         'id' => 'entity_id',
	         'destination' => 'm2_cl_customer_address_entity'
	     ),
  		array(
	         'name' => 'customer_address_entity_datetime',
	         'id' => 'value_id',
	         'destination' => 'm2_cl_customer_address_entity_datetime'
	     ),
  		array(
	         'name' => 'customer_address_entity_decimal',
	         'id' => 'value_id',
	         'destination' => 'm2_cl_customer_address_entity_decimal'
	     ),
  		array(
	         'name' => 'customer_address_entity_int',
	         'id' => 'value_id',
	         'destination' => 'm2_cl_customer_address_entity_int'
	     ),
  		array(
	         'name' => 'customer_address_entity_text',
	         'id' => 'value_id',
	         'destination' => 'm2_cl_customer_address_entity_text'
	     ),
  		array(
	         'name' => 'customer_address_entity_varchar',
	         'id' => 'value_id',
	         'destination' => 'm2_cl_customer_address_entity_varchar'
	     ),
  		array(
	         'name' => 'customer_entity',
	         'id' => 'entity_id',
	         'destination' => 'm2_cl_customer_entity'
	     ),
  		array(
	         'name' => 'customer_entity_datetime',
	         'id' => 'value_id',
	         'destination' => 'm2_cl_customer_entity_datetime'
	     ),
  		array(
	         'name' => 'customer_entity_decimal',
	         'id' => 'value_id',
	         'destination' => 'm2_cl_customer_entity_decimal'
	     ),
  		array(
	         'name' => 'customer_entity_int',
	         'id' => 'value_id',
	         'destination' => 'm2_cl_customer_entity_int'
	     ),
  		array(
	         'name' => 'customer_entity_text',
	         'id' => 'value_id',
	         'destination' => 'm2_cl_customer_entity_text'
	     ),
  		array(
	         'name' => 'customer_entity_varchar',
	         'id' => 'value_id',
	         'destination' => 'm2_cl_customer_entity_varchar'
	     ),
  		array(
	         'name' => 'downloadable_link_purchased',
	         'id' => 'purchased_id',
	         'destination' => 'm2_cl_downloadable_link_purchased'
	     ),
  		array(
	         'name' => 'downloadable_link_purchased_item',
	         'id' => 'item_id',
	         'destination' => 'm2_cl_downloadable_link_purchased_item'
	     ),
  		array(
	         'name' => 'eav_entity_store',
	         'id' => 'entity_store_id',
	         'destination' => 'm2_cl_eav_entity_store'
	     ),
  		array(
	         'name' => 'gift_message',
	         'id' => 'gift_message_id',
	         'destination' => 'm2_cl_gift_message'
	     ),
  		array(
	         'name' => 'log_visitor',
	         'id' => 'visitor_id',
	         'destination' => 'm2_cl_log_visitor'
	     ),
  		array(
	         'name' => 'newsletter_subscriber',
	         'id' => 'subscriber_id',
	         'destination' => 'm2_cl_newsletter_subscriber'
	     ),
  		array(
	         'name' => 'rating_option_vote',
	         'id' => 'vote_id',
	         'destination' => 'm2_cl_rating_option_vote'
	     ),
  		array(
	         'name' => 'rating_option_vote_aggregated',
	         'id' => 'primary_id',
	         'destination' => 'm2_cl_rating_option_vote_aggregated'
	     ),
  		array(
	         'name' => 'report_compared_product_index',
	         'id' => 'index_id',
	         'destination' => 'm2_cl_report_compared_product_index'
	     ),
  		array(
	         'name' => 'report_event',
	         'id' => 'event_id',
	         'destination' => 'm2_cl_report_event'
	     ),
  		array(
	         'name' => 'report_viewed_product_index',
	         'id' => 'index_id',
	         'destination' => 'm2_cl_report_viewed_product_index'
	     ),
  		array(
	         'name' => 'review',
	         'id' => 'review_id',
	         'destination' => 'm2_cl_review'
	     ),
  		array(
	         'name' => 'review_detail',
	         'id' => 'detail_id',
	         'destination' => 'm2_cl_review_detail'
	     ),
  		array(
	         'name' => 'review_entity_summary',
	         'id' => 'primary_id',
	         'destination' => 'm2_cl_review_entity_summary'
	     ),
  		array(
	         'name' => 'review_store',
	         'id' => 'review_id',
	         'destination' => 'm2_cl_review_store'
	     ),
  		array(
	         'name' => 'sales_flat_creditmemo',
	         'id' => 'entity_id',
	         'destination' => 'm2_cl_sales_flat_creditmemo'
	     ),
  		array(
	         'name' => 'sales_flat_creditmemo_grid',
	         'id' => 'entity_id',
	         'destination' => 'm2_cl_sales_flat_creditmemo_grid'
	     ),
  		array(
	         'name' => 'sales_flat_creditmemo_item',
	         'id' => 'entity_id',
	         'destination' => 'm2_cl_sales_flat_creditmemo_item'
	     ),
  		array(
	         'name' => 'sales_flat_invoice',
	         'id' => 'entity_id',
	         'destination' => 'm2_cl_sales_flat_invoice'
	     ),
  		array(
	         'name' => 'sales_flat_invoice_grid',
	         'id' => 'entity_id',
	         'destination' => 'm2_cl_sales_flat_invoice_grid'
	     ),
  		array(
	         'name' => 'sales_flat_invoice_item',
	         'id' => 'entity_id',
	         'destination' => 'm2_cl_sales_flat_invoice_item'
	     ),
  		array(
	         'name' => 'sales_flat_order',
	         'id' => 'entity_id',
	         'destination' => 'm2_cl_sales_flat_order'
	     ),
  		array(
	         'name' => 'sales_flat_order_address',
	         'id' => 'entity_id',
	         'destination' => 'm2_cl_sales_flat_order_address'
	     ),
  		array(
	         'name' => 'sales_flat_order_grid',
	         'id' => 'entity_id',
	         'destination' => 'm2_cl_sales_flat_order_grid'
	     ),
  		array(
	         'name' => 'sales_flat_order_item',
	         'id' => 'item_id',
	         'destination' => 'm2_cl_sales_flat_order_item'
	     )
  		,
  		array(
	         'name' => 'sales_flat_order_payment',
	         'id' => 'entity_id',
	         'destination' => 'm2_cl_sales_flat_order_payment'
	     ),
  		array(
	         'name' => 'sales_flat_order_status_history',
	         'id' => 'entity_id',
	         'destination' => 'm2_cl_sales_flat_order_status_history'
	     ),
  		array(
	         'name' => 'sales_flat_quote',
	         'id' => 'entity_id',
	         'destination' => 'm2_cl_sales_flat_quote'
	     ),
  		array(
	         'name' => 'sales_flat_quote_address',
	         'id' => 'address_id',
	         'destination' => 'm2_cl_sales_flat_quote_address'
	     ),
  		array(
	         'name' => 'sales_flat_quote_address_item',
	         'id' => 'address_item_id',
	         'destination' => 'm2_cl_sales_flat_quote_address_item'
	     ),
  		array(
	         'name' => 'sales_flat_quote_item',
	         'id' => 'item_id',
	         'destination' => 'm2_cl_sales_flat_quote_item'
	     ),
  		array(
	         'name' => 'sales_flat_quote_item_option',
	         'id' => 'option_id',
	         'destination' => 'm2_cl_sales_flat_quote_item_option'
	     ),
  		array(
	         'name' => 'sales_flat_quote_payment',
	         'id' => 'payment_id',
	         'destination' => 'm2_cl_sales_flat_quote_payment'
	     ),
  		array(
	         'name' => 'sales_flat_quote_shipping_rate',
	         'id' => 'rate_id',
	         'destination' => 'm2_cl_sales_flat_quote_shipping_rate'
	     ),
  		array(
	         'name' => 'sales_flat_shipment',
	         'id' => 'entity_id',
	         'destination' => 'm2_cl_sales_flat_shipment'
	     ),
  		array(
	         'name' => 'sales_flat_shipment_grid',
	         'id' => 'entity_id',
	         'destination' => 'm2_cl_sales_flat_shipment_grid'
	     ),
  		array(
	         'name' => 'sales_flat_shipment_item',
	         'id' => 'entity_id',
	         'destination' => 'm2_cl_sales_flat_shipment_item'
	     ),
  		array(
	         'name' => 'sales_flat_shipment_track',
	         'id' => 'entity_id',
	         'destination' => 'm2_cl_sales_flat_shipment_track'
	     ),
  		array(
	         'name' => 'sales_order_tax',
	         'id' => 'tax_id',
	         'destination' => 'm2_cl_sales_order_tax'
	     ),
  		array(
	         'name' => 'sales_order_tax_item',
	         'id' => 'tax_item_id',
	         'destination' => 'm2_cl_sales_order_tax_item'
	     ),
  		array(
	         'name' => 'wishlist',
	         'id' => 'wishlist_id',
	         'destination' => 'm2_cl_wishlist'
	     ),
  		array(
	         'name' => 'wishlist_item',
	         'id' => 'wishlist_item_id',
	         'destination' => 'm2_cl_wishlist_item'
	     ),
  		array(
	         'name' => 'wishlist_item_option',
	         'id' => 'option_id',
	         'destination' => 'm2_cl_wishlist_item_option'
	     )
	);

	//echo "tables: " . $tables;

	echo "Start";	

	foreach ($tables as $table) {

		echo $table['name'];

		$sql1 = "select " . $table['id'] . " as id from " . $table['name'];
	    $query = mysqli_query($conm2, $sql1);

	    $where = "NOT IN (";

	    $i = 0;	
	    while($row = mysqli_fetch_assoc($query))
	    {
	    	if($i == 0)
	    	{
	    		$i = 1;
	    		$where = $where . intval($row['id']);
	    	}else
	    	{
	    		$where = $where . ",". intval($row['id']);
	    	}
	    }

	  //  echo "WHERE: " . $where;


	    $sql2 = "select " . $table['id'] . " as id from " . $table['name'] . " where " . $table['id'] . " " . $where . ")";

	   // echo "SQL2: " . $sql2;
	    
	    $query = mysqli_query($conm1, $sql2);
	    
		$insertSql = "INSERT INTO " . $table['destination'] . " (" . $table['id'] . ", operation, processed) VALUES ";

		$i = 0;	
	    while($row = mysqli_fetch_assoc($query))
	    {

	    	if($i == 0)
	    	{
	    		$i = 1;
	    		$insertSql = $insertSql . "(" . intval($row['id']) . ", 'INSERT',0)"; 
	    	}else
	    	{
	    		$insertSql = $insertSql . ",(" . intval($row['id']) . ", 'INSERT',0)"; 
	    	}
	        
	    }

	    if($i == 1)
	    {
	    	$deleteSql = "DELETE FROM " . $table['destination'];
	    	mysqli_query($deleteSql, $conm1);
	    	mysqli_query($insertSql, $conm1);
	    	//echo "INSERT SQL: " . $insertSql;
	    }
	}
    
	echo "End";

    mysqli_close($conm1);
    mysqli_close($conm2);
?>


