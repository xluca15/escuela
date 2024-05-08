<?php
$tdatacambios = array();
$tdatacambios[".searchableFields"] = array();
$tdatacambios[".ShortName"] = "cambios";
$tdatacambios[".OwnerID"] = "";
$tdatacambios[".OriginalTable"] = "cambios";


$tdatacambios[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacambios[".originalPagesByType"] = $tdatacambios[".pagesByType"];
$tdatacambios[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacambios[".originalPages"] = $tdatacambios[".pages"];
$tdatacambios[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacambios[".originalDefaultPages"] = $tdatacambios[".defaultPages"];

//	field labels
$fieldLabelscambios = array();
$fieldToolTipscambios = array();
$pageTitlescambios = array();
$placeHolderscambios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscambios["Spanish"] = array();
	$fieldToolTipscambios["Spanish"] = array();
	$placeHolderscambios["Spanish"] = array();
	$pageTitlescambios["Spanish"] = array();
	$fieldLabelscambios["Spanish"]["id_partido"] = "Id Partido";
	$fieldToolTipscambios["Spanish"]["id_partido"] = "";
	$placeHolderscambios["Spanish"]["id_partido"] = "";
	$fieldLabelscambios["Spanish"]["id_jugadorin"] = "Id Jugadorin";
	$fieldToolTipscambios["Spanish"]["id_jugadorin"] = "";
	$placeHolderscambios["Spanish"]["id_jugadorin"] = "";
	$fieldLabelscambios["Spanish"]["id_jugadorout"] = "Id Jugadorout";
	$fieldToolTipscambios["Spanish"]["id_jugadorout"] = "";
	$placeHolderscambios["Spanish"]["id_jugadorout"] = "";
	$fieldLabelscambios["Spanish"]["minuto_cambio"] = "Minuto Cambio";
	$fieldToolTipscambios["Spanish"]["minuto_cambio"] = "";
	$placeHolderscambios["Spanish"]["minuto_cambio"] = "";
	if (count($fieldToolTipscambios["Spanish"]))
		$tdatacambios[".isUseToolTips"] = true;
}


	$tdatacambios[".NCSearch"] = true;



$tdatacambios[".shortTableName"] = "cambios";
$tdatacambios[".nSecOptions"] = 0;

$tdatacambios[".mainTableOwnerID"] = "";
$tdatacambios[".entityType"] = 0;
$tdatacambios[".connId"] = "fixture_at_localhost";


$tdatacambios[".strOriginalTableName"] = "cambios";

	



$tdatacambios[".showAddInPopup"] = false;

$tdatacambios[".showEditInPopup"] = false;

$tdatacambios[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacambios[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacambios[".listAjax"] = false;
//	temporary
$tdatacambios[".listAjax"] = false;

	$tdatacambios[".audit"] = false;

	$tdatacambios[".locking"] = false;


$pages = $tdatacambios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacambios[".edit"] = true;
	$tdatacambios[".afterEditAction"] = 1;
	$tdatacambios[".closePopupAfterEdit"] = 1;
	$tdatacambios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacambios[".add"] = true;
$tdatacambios[".afterAddAction"] = 1;
$tdatacambios[".closePopupAfterAdd"] = 1;
$tdatacambios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacambios[".list"] = true;
}



$tdatacambios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacambios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacambios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacambios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacambios[".printFriendly"] = true;
}



$tdatacambios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacambios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacambios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacambios[".isUseAjaxSuggest"] = true;

$tdatacambios[".rowHighlite"] = true;





$tdatacambios[".ajaxCodeSnippetAdded"] = false;

$tdatacambios[".buttonsAdded"] = false;

$tdatacambios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacambios[".isUseTimeForSearch"] = false;


$tdatacambios[".badgeColor"] = "3CB371";


$tdatacambios[".allSearchFields"] = array();
$tdatacambios[".filterFields"] = array();
$tdatacambios[".requiredSearchFields"] = array();

$tdatacambios[".googleLikeFields"] = array();
$tdatacambios[".googleLikeFields"][] = "id_partido";
$tdatacambios[".googleLikeFields"][] = "id_jugadorin";
$tdatacambios[".googleLikeFields"][] = "id_jugadorout";
$tdatacambios[".googleLikeFields"][] = "minuto_cambio";



$tdatacambios[".tableType"] = "list";

$tdatacambios[".printerPageOrientation"] = 0;
$tdatacambios[".nPrinterPageScale"] = 100;

$tdatacambios[".nPrinterSplitRecords"] = 40;

$tdatacambios[".geocodingEnabled"] = false;










$tdatacambios[".pageSize"] = 20;

$tdatacambios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacambios[".strOrderBy"] = $tstrOrderBy;

$tdatacambios[".orderindexes"] = array();


$tdatacambios[".sqlHead"] = "SELECT id_partido,  	id_jugadorin,  	id_jugadorout,  	minuto_cambio";
$tdatacambios[".sqlFrom"] = "FROM cambios";
$tdatacambios[".sqlWhereExpr"] = "";
$tdatacambios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacambios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacambios[".arrGroupsPerPage"] = $arrGPP;

$tdatacambios[".highlightSearchResults"] = true;

$tableKeyscambios = array();
$tableKeyscambios[] = "id_partido";
$tdatacambios[".Keys"] = $tableKeyscambios;


$tdatacambios[".hideMobileList"] = array();




//	id_partido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_partido";
	$fdata["GoodName"] = "id_partido";
	$fdata["ownerTable"] = "cambios";
	$fdata["Label"] = GetFieldLabel("cambios","id_partido");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_partido";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_partido";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacambios["id_partido"] = $fdata;
		$tdatacambios[".searchableFields"][] = "id_partido";
//	id_jugadorin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_jugadorin";
	$fdata["GoodName"] = "id_jugadorin";
	$fdata["ownerTable"] = "cambios";
	$fdata["Label"] = GetFieldLabel("cambios","id_jugadorin");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_jugadorin";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_jugadorin";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacambios["id_jugadorin"] = $fdata;
		$tdatacambios[".searchableFields"][] = "id_jugadorin";
//	id_jugadorout
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_jugadorout";
	$fdata["GoodName"] = "id_jugadorout";
	$fdata["ownerTable"] = "cambios";
	$fdata["Label"] = GetFieldLabel("cambios","id_jugadorout");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_jugadorout";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_jugadorout";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacambios["id_jugadorout"] = $fdata;
		$tdatacambios[".searchableFields"][] = "id_jugadorout";
//	minuto_cambio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "minuto_cambio";
	$fdata["GoodName"] = "minuto_cambio";
	$fdata["ownerTable"] = "cambios";
	$fdata["Label"] = GetFieldLabel("cambios","minuto_cambio");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "minuto_cambio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "minuto_cambio";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacambios["minuto_cambio"] = $fdata;
		$tdatacambios[".searchableFields"][] = "minuto_cambio";


$tables_data["cambios"]=&$tdatacambios;
$field_labels["cambios"] = &$fieldLabelscambios;
$fieldToolTips["cambios"] = &$fieldToolTipscambios;
$placeHolders["cambios"] = &$placeHolderscambios;
$page_titles["cambios"] = &$pageTitlescambios;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["cambios"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["cambios"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cambios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_partido,  	id_jugadorin,  	id_jugadorout,  	minuto_cambio";
$proto0["m_strFrom"] = "FROM cambios";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id_partido",
	"m_strTable" => "cambios",
	"m_srcTableName" => "cambios"
));

$proto6["m_sql"] = "id_partido";
$proto6["m_srcTableName"] = "cambios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_jugadorin",
	"m_strTable" => "cambios",
	"m_srcTableName" => "cambios"
));

$proto8["m_sql"] = "id_jugadorin";
$proto8["m_srcTableName"] = "cambios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_jugadorout",
	"m_strTable" => "cambios",
	"m_srcTableName" => "cambios"
));

$proto10["m_sql"] = "id_jugadorout";
$proto10["m_srcTableName"] = "cambios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "minuto_cambio",
	"m_strTable" => "cambios",
	"m_srcTableName" => "cambios"
));

$proto12["m_sql"] = "minuto_cambio";
$proto12["m_srcTableName"] = "cambios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "cambios";
$proto15["m_srcTableName"] = "cambios";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id_partido";
$proto15["m_columns"][] = "id_jugadorin";
$proto15["m_columns"][] = "id_jugadorout";
$proto15["m_columns"][] = "minuto_cambio";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "cambios";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "cambios";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cambios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cambios = createSqlQuery_cambios();


	
		;

				

$tdatacambios[".sqlquery"] = $queryData_cambios;



$tableEvents["cambios"] = new eventsBase;
$tdatacambios[".hasEvents"] = false;

?>