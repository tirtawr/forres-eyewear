<?php
function Install_UPCP_DB() {
		/* Add in the required globals to be able to create the tables */
  	global $wpdb;
   	global $UPCP_db_version;
		global $categories_table_name, $subcategories_table_name, $items_table_name, $item_images_table_name, $tagged_items_table_name, $tags_table_name, $catalogues_table_name, $catalogue_items_table_name, $fields_table_name, $fields_meta_table_name;
    
		/* Create the categories table */  
   	$sql = "CREATE TABLE $categories_table_name (
  	Category_ID mediumint(9) NOT NULL AUTO_INCREMENT,
  	Category_Name text NOT NULL,
		Category_Description text NOT NULL,
		Category_Item_Count mediumint(9),
		Category_Date_Created datetime NOT NULL,
  	UNIQUE KEY id (Category_ID)
    )
		DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;";
   	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
   	dbDelta($sql);
		
		/* Create the sub-categories table */
		$sql = "CREATE TABLE $subcategories_table_name (
  	SubCategory_ID mediumint(9) NOT NULL AUTO_INCREMENT,
		Category_ID mediumint(9),
		Category_Name text NOT NULL,
  	SubCategory_Name text NOT NULL,
		SubCategory_Description text NOT NULL,
		SubCategory_Item_Count mediumint(9),
		SubCategory_Date_Created datetime NOT NULL,
  	UNIQUE KEY id (SubCategory_ID)
    )	
		DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;";
   	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
   	dbDelta($sql);
		
		/* Create the items(products) table */
		$sql = "CREATE TABLE $items_table_name (
  	Item_ID mediumint(9) NOT NULL AUTO_INCREMENT,
  	Item_Name text NOT NULL,
  	Item_Description text,
		Item_Price text NOT NULL,
		Item_Link text,
		Item_Photo_URL text,
		Category_ID mediumint(9) DEFAULT 0,
		Category_Name text,
		Global_Item_ID mediumint(9) DEFAULT 0,
		Item_Special_Attr text,
		SubCategory_ID mediumint(9) DEFAULT 0,
		SubCategory_Name text,
		Item_Date_Created datetime NOT NULL,
		Item_Views mediumint(9) DEFAULT 0,
		Item_Display_Status text,
  	UNIQUE KEY id (Item_ID)
    )
		DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;";
   	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
   	dbDelta($sql);
		
		/* Create the table that stores links to additional images for products */
		$sql = "CREATE TABLE $item_images_table_name (
  	Item_Image_ID mediumint(9) NOT NULL AUTO_INCREMENT,
  	Item_ID mediumint(9) DEFAULT 0 NOT NULL,
  	Item_Image_URL text,
		Item_Image_Description text,
  	UNIQUE KEY id (Item_Image_ID)
    )
		DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;";
   	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
   	dbDelta($sql);
		
		/* Create the tags table */
		$sql = "CREATE TABLE $tags_table_name (
  	Tag_ID mediumint(9) NOT NULL AUTO_INCREMENT,
  	Tag_Name text NOT NULL,
		Tag_Description text NOT NULL,
		Tag_Item_Count text NOT NULL,
		Tag_Date_Created datetime NOT NULL,
  	UNIQUE KEY id (Tag_ID)
    )
		DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;";
   	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
   	dbDelta($sql);
		
		/* Create the table detemines which products have what tags */
		$sql = "CREATE TABLE $tagged_items_table_name (
  	Tagged_Item_ID mediumint(9) NOT NULL AUTO_INCREMENT,
  	Tag_ID mediumint(9) DEFAULT 0 NOT NULL,
		Item_ID mediumint(9) DEFAULT 0 NOT NULL,
  	UNIQUE KEY id (Tagged_Item_ID)
    )
		DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;";
   	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
   	dbDelta($sql);
		
		/* Create the catalogues table */
		$sql = "CREATE TABLE $catalogues_table_name (
  	Catalogue_ID mediumint(9) NOT NULL AUTO_INCREMENT,
  	Catalogue_Name text NOT NULL,
		Catalogue_Description text NOT NULL,
		Catalogue_Layout_Format text NOT NULL,
		Catalogue_Custom_CSS text NOT NULL,
		Catalogue_Item_Count mediumint(9) DEFAULT 0 NOT NULL,
		Catalogue_Date_Created datetime NOT NULL,
  	UNIQUE KEY id (Catalogue_ID)
    )
		DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;";
   	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
   	dbDelta($sql);
		
		/* Create the table that determines what items are in each catalogue */
		$sql = "CREATE TABLE $catalogue_items_table_name (
  	Catalogue_Item_ID mediumint(9) NOT NULL AUTO_INCREMENT,
  	Catalogue_ID mediumint(9),
  	Item_ID mediumint(9),
		Category_ID mediumint(9),
		SubCategory_ID mediumint(9),
		Position mediumint(9) DEFAULT 0 NOT NULL,
  	UNIQUE KEY id (Catalogue_Item_ID)
    )
		DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;";
   	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
   	dbDelta($sql);
		
		/* Create the custom fields table */
		$sql = "CREATE TABLE $fields_table_name (
  	Field_ID mediumint(9) NOT NULL AUTO_INCREMENT,
  	Field_Name text DEFAULT '' NOT NULL,
		Field_Slug text DEFAULT '' NOT NULL,
		Field_Type text DEFAULT '' NOT NULL,
		Field_Description text DEFAULT '' NOT NULL,
		Field_Values text DEFAULT '' NOT NULL,
		Field_Displays text DEFAULT '' NOT NULL,
		Field_Date_Created datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
  	UNIQUE KEY id (Field_ID)
    )
		DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;";
   	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
   	dbDelta($sql);
		
		/* Update the custom fields meta table */
		$sql = "CREATE TABLE $fields_meta_table_name (
  	Meta_ID mediumint(9) NOT NULL AUTO_INCREMENT,
  	Field_ID mediumint(9) DEFAULT '0',
		Item_ID mediumint(9) DEFAULT '0',
		Meta_Value text DEFAULT '' NOT NULL,
  	UNIQUE KEY id (Meta_ID)
    )
		DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;";
   	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
   	dbDelta($sql);
		
		add_option("UPCP_DB_Version", $UPCP_db_version);
		add_option("UPCP_Full_Version", "No");
}
?>
