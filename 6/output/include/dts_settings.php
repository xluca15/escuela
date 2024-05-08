<?php
$tdatadts = array();
$tdatadts[".searchableFields"] = array();
$tdatadts[".ShortName"] = "dts";
$tdatadts[".OwnerID"] = "";
$tdatadts[".OriginalTable"] = "dts";


$tdatadts[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadts[".originalPagesByType"] = $tdatadts[".pagesByType"];
$tdatadts[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadts[".originalPages"] = $tdatadts[".pages"];
$tdatadts[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadts[".originalDefaultPages"] = $tdatadts[".defaultPages"];

//	field labels
$fieldLabelsdts = array();
$fieldToolTipsdts = array();
$pageTitlesdts = array();
$placeHoldersdts = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdts["Spanish"] = array();
	$fieldToolTipsdts["Spanish"] = array();
	$placeHoldersdts["Spanish"] = array();
	$pageTitlesdts["Spanish"] = array();
	$fieldLabelsdts["Spanish"]["id_dt"] = "Id Dt";
	$fieldToolTipsdts["Spanish"]["id_dt"] = "";
	$placeHoldersdts["Spanish"]["id_dt"] = "";
	$fieldLabelsdts["Spanish"]["nombreyapellido"] = "Nombreyapellido";
	$fieldToolTipsdts["Spanish"]["nombreyapellido"] = "";
	$placeHoldersdts["Spanish"]["nombreyapellido"] = "";
	$fieldLabelsdts["Spanish"]["fecha_ingreso"] = "Fecha Ingreso";
	$fieldToolTipsdts["Spanish"]["fecha_ingreso"] = "";
	$placeHoldersdts["Spanish"]["fecha_ingreso"] = "";
	if (count($fieldToolTipsdts["Spanish"]))
		$tdatadts[".isUseToolTips"] = true;
}


	$tdatadts[".NCSearch"] = true;



$tdatadts[".shortTableName"] = "dts";
$tdatadts[".nSecOptions"] = 0;

$tdatadts[".mainTableOwnerID"] = "";
$tdatadts[".entityType"] = 0;
$tdatadts[".connId"] = "fixture_at_localhost";


$tdatadts[".strOriginalTableName"] = "dts";

	



$tdatadts[".showAddInPopup"] = false;

$tdatadts[".showEditInPopup"] = false;

$tdatadts[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadts[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadts[".listAjax"] = false;
//	temporary
$tdatadts[".listAjax"] = false;

	$tdatadts[".audit"] = false;

	$tdatadts[".locking"] = false;


$pages = $tdatadts[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadts[".edit"] = true;
	$tdatadts[".afterEditAction"] = 1;
	$tdatadts[".closePopupAfterEdit"] = 1;
	$tdatadts[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadts[".add"] = true;
$tdatadts[".afterAddAction"] = 1;
$tdatadts[".closePopupAfterAdd"] = 1;
$tdatadts[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadts[".list"] = true;
}



$tdatadts[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadts[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadts[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadts[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadts[".printFriendly"] = true;
}



$tdatadts[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadts[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadts[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadts[".isUseAjaxSuggest"] = true;

$tdatadts[".rowHighlite"] = true;





$tdatadts[".ajaxCodeSnippetAdded"] = false;

$tdatadts[".buttonsAdded"] = false;

$tdatadts[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadts[".isUseTimeForSearch"] = false;


$tdatadts[".badgeColor"] = "CD853F";


$tdatadts[".allSearchFields"] = array();
$tdatadts[".filterFields"] = array();
$tdatadts[".requiredSearchFields"] = array();

$tdatadts[".googleLikeFields"] = array();
$tdatadts[".googleLikeFields"][] = "id_dt";
$tdatadts[".googleLikeFields"][] = "nombreyapellido";
$tdatadts[".googleLikeFields"][] = "fecha_ingreso";



$tdatadts[".tableType"] = "list";

$tdatadts[".printerPageOrientation"] = 0;
$tdatadts[".nPrinterPageScale"] = 100;

$tdatadts[".nPrinterSplitRecords"] = 40;

$tdatadts[".geocodingEnabled"] = false;










$tdatadts[".pageSize"] = 20;

$tdatadts[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadts[".strOrderBy"] = $tstrOrderBy;

$tdatadts[".orderindexes"] = array();


$tdatadts[".sqlHead"] = "SELECT id_dt,  	nombreyapellido,  	fecha_ingreso";
$tdatadts[".sqlFrom"] = "FROM dts";
$tdatadts[".sqlWhereExpr"] = "";
$tdatadts[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadts[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadts[".arrGroupsPerPage"] = $arrGPP;

$tdatadts[".highlightSearchResults"] = true;

$tableKeysdts = array();
$tableKeysdts[] = "id_dt";
$tdatadts[".Keys"] = $tableKeysdts;


$tdatadts[".hideMobileList"] = array();




//	id_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_dt";
	$fdata["GoodName"] = "id_dt";
	$fdata["ownerTable"] = "dts";
	$fdata["Label"] = GetFieldLabel("dts","id_dt");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_dt";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_dt";

	
	
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


	$tdatadts["id_dt"] = $fdata;
		$tdatadts[".searchableFields"][] = "id_dt";
//	nombreyapellido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombreyapellido";
	$fdata["GoodName"] = "nombreyapellido";
	$fdata["ownerTable"] = "dts";
	$fdata["Label"] = GetFieldLabel("dts","nombreyapellido");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nombreyapellido";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombreyapellido";

	
	
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
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


	$tdatadts["nombreyapellido"] = $fdata;
		$tdatadts[".searchableFields"][] = "nombreyapellido";
//	fecha_ingreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fecha_ingreso";
	$fdata["GoodName"] = "fecha_ingreso";
	$fdata["ownerTable"] = "dts";
	$fdata["Label"] = GetFieldLabel("dts","fecha_ingreso");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "fecha_ingreso";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_ingreso";

	
	
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
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


	$tdatadts["fecha_ingreso"] = $fdata;
		$tdatadts[".searchableFields"][] = "fecha_ingreso";


$tables_data["dts"]=&$tdatadts;
$field_labels["dts"] = &$fieldLabelsdts;
$fieldToolTips["dts"] = &$fieldToolTipsdts;
$placeHolders["dts"] = &$placeHoldersdts;
$page_titles["dts"] = &$pageTitlesdts;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dts"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dts"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dts()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_dt,  	nombreyapellido,  	fecha_ingreso";
$proto0["m_strFrom"] = "FROM dts";
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
	"m_strName" => "id_dt",
	"m_strTable" => "dts",
	"m_srcTableName" => "dts"
));

$proto6["m_sql"] = "id_dt";
$proto6["m_srcTableName"] = "dts";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombreyapellido",
	"m_strTable" => "dts",
	"m_srcTableName" => "dts"
));

$proto8["m_sql"] = "nombreyapellido";
$proto8["m_srcTableName"] = "dts";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_ingreso",
	"m_strTable" => "dts",
	"m_srcTableName" => "dts"
));

$proto10["m_sql"] = "fecha_ingreso";
$proto10["m_srcTableName"] = "dts";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "dts";
$proto13["m_srcTableName"] = "dts";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id_dt";
$proto13["m_columns"][] = "nombreyapellido";
$proto13["m_columns"][] = "fecha_ingreso";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "dts";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "dts";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dts";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dts = createSqlQuery_dts();


	
		;

			

$tdatadts[".sqlquery"] = $queryData_dts;



$tableEvents["dts"] = new eventsBase;
$tdatadts[".hasEvents"] = false;

?>