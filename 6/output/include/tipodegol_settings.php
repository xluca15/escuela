<?php
$tdatatipodegol = array();
$tdatatipodegol[".searchableFields"] = array();
$tdatatipodegol[".ShortName"] = "tipodegol";
$tdatatipodegol[".OwnerID"] = "";
$tdatatipodegol[".OriginalTable"] = "tipodegol";


$tdatatipodegol[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatipodegol[".originalPagesByType"] = $tdatatipodegol[".pagesByType"];
$tdatatipodegol[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatipodegol[".originalPages"] = $tdatatipodegol[".pages"];
$tdatatipodegol[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatipodegol[".originalDefaultPages"] = $tdatatipodegol[".defaultPages"];

//	field labels
$fieldLabelstipodegol = array();
$fieldToolTipstipodegol = array();
$pageTitlestipodegol = array();
$placeHolderstipodegol = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstipodegol["Spanish"] = array();
	$fieldToolTipstipodegol["Spanish"] = array();
	$placeHolderstipodegol["Spanish"] = array();
	$pageTitlestipodegol["Spanish"] = array();
	$fieldLabelstipodegol["Spanish"]["id_tipogol"] = "Id Tipogol";
	$fieldToolTipstipodegol["Spanish"]["id_tipogol"] = "";
	$placeHolderstipodegol["Spanish"]["id_tipogol"] = "";
	$fieldLabelstipodegol["Spanish"]["descripcion_gol"] = "Descripcion Gol";
	$fieldToolTipstipodegol["Spanish"]["descripcion_gol"] = "";
	$placeHolderstipodegol["Spanish"]["descripcion_gol"] = "";
	if (count($fieldToolTipstipodegol["Spanish"]))
		$tdatatipodegol[".isUseToolTips"] = true;
}


	$tdatatipodegol[".NCSearch"] = true;



$tdatatipodegol[".shortTableName"] = "tipodegol";
$tdatatipodegol[".nSecOptions"] = 0;

$tdatatipodegol[".mainTableOwnerID"] = "";
$tdatatipodegol[".entityType"] = 0;
$tdatatipodegol[".connId"] = "fixture_at_localhost";


$tdatatipodegol[".strOriginalTableName"] = "tipodegol";

	



$tdatatipodegol[".showAddInPopup"] = false;

$tdatatipodegol[".showEditInPopup"] = false;

$tdatatipodegol[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatipodegol[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatipodegol[".listAjax"] = false;
//	temporary
$tdatatipodegol[".listAjax"] = false;

	$tdatatipodegol[".audit"] = false;

	$tdatatipodegol[".locking"] = false;


$pages = $tdatatipodegol[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatipodegol[".edit"] = true;
	$tdatatipodegol[".afterEditAction"] = 1;
	$tdatatipodegol[".closePopupAfterEdit"] = 1;
	$tdatatipodegol[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatipodegol[".add"] = true;
$tdatatipodegol[".afterAddAction"] = 1;
$tdatatipodegol[".closePopupAfterAdd"] = 1;
$tdatatipodegol[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatipodegol[".list"] = true;
}



$tdatatipodegol[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatipodegol[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatipodegol[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatipodegol[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatipodegol[".printFriendly"] = true;
}



$tdatatipodegol[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatipodegol[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatipodegol[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatipodegol[".isUseAjaxSuggest"] = true;

$tdatatipodegol[".rowHighlite"] = true;





$tdatatipodegol[".ajaxCodeSnippetAdded"] = false;

$tdatatipodegol[".buttonsAdded"] = false;

$tdatatipodegol[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatipodegol[".isUseTimeForSearch"] = false;


$tdatatipodegol[".badgeColor"] = "CFAE83";


$tdatatipodegol[".allSearchFields"] = array();
$tdatatipodegol[".filterFields"] = array();
$tdatatipodegol[".requiredSearchFields"] = array();

$tdatatipodegol[".googleLikeFields"] = array();
$tdatatipodegol[".googleLikeFields"][] = "id_tipogol";
$tdatatipodegol[".googleLikeFields"][] = "descripcion_gol";



$tdatatipodegol[".tableType"] = "list";

$tdatatipodegol[".printerPageOrientation"] = 0;
$tdatatipodegol[".nPrinterPageScale"] = 100;

$tdatatipodegol[".nPrinterSplitRecords"] = 40;

$tdatatipodegol[".geocodingEnabled"] = false;










$tdatatipodegol[".pageSize"] = 20;

$tdatatipodegol[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatipodegol[".strOrderBy"] = $tstrOrderBy;

$tdatatipodegol[".orderindexes"] = array();


$tdatatipodegol[".sqlHead"] = "SELECT id_tipogol,  	descripcion_gol";
$tdatatipodegol[".sqlFrom"] = "FROM tipodegol";
$tdatatipodegol[".sqlWhereExpr"] = "";
$tdatatipodegol[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatipodegol[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatipodegol[".arrGroupsPerPage"] = $arrGPP;

$tdatatipodegol[".highlightSearchResults"] = true;

$tableKeystipodegol = array();
$tableKeystipodegol[] = "id_tipogol";
$tdatatipodegol[".Keys"] = $tableKeystipodegol;


$tdatatipodegol[".hideMobileList"] = array();




//	id_tipogol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_tipogol";
	$fdata["GoodName"] = "id_tipogol";
	$fdata["ownerTable"] = "tipodegol";
	$fdata["Label"] = GetFieldLabel("tipodegol","id_tipogol");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_tipogol";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_tipogol";

	
	
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


	$tdatatipodegol["id_tipogol"] = $fdata;
		$tdatatipodegol[".searchableFields"][] = "id_tipogol";
//	descripcion_gol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_gol";
	$fdata["GoodName"] = "descripcion_gol";
	$fdata["ownerTable"] = "tipodegol";
	$fdata["Label"] = GetFieldLabel("tipodegol","descripcion_gol");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "descripcion_gol";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_gol";

	
	
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


	$tdatatipodegol["descripcion_gol"] = $fdata;
		$tdatatipodegol[".searchableFields"][] = "descripcion_gol";


$tables_data["tipodegol"]=&$tdatatipodegol;
$field_labels["tipodegol"] = &$fieldLabelstipodegol;
$fieldToolTips["tipodegol"] = &$fieldToolTipstipodegol;
$placeHolders["tipodegol"] = &$placeHolderstipodegol;
$page_titles["tipodegol"] = &$pageTitlestipodegol;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tipodegol"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tipodegol"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tipodegol()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_tipogol,  	descripcion_gol";
$proto0["m_strFrom"] = "FROM tipodegol";
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
	"m_strName" => "id_tipogol",
	"m_strTable" => "tipodegol",
	"m_srcTableName" => "tipodegol"
));

$proto6["m_sql"] = "id_tipogol";
$proto6["m_srcTableName"] = "tipodegol";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_gol",
	"m_strTable" => "tipodegol",
	"m_srcTableName" => "tipodegol"
));

$proto8["m_sql"] = "descripcion_gol";
$proto8["m_srcTableName"] = "tipodegol";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tipodegol";
$proto11["m_srcTableName"] = "tipodegol";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_tipogol";
$proto11["m_columns"][] = "descripcion_gol";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tipodegol";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tipodegol";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tipodegol";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tipodegol = createSqlQuery_tipodegol();


	
		;

		

$tdatatipodegol[".sqlquery"] = $queryData_tipodegol;



$tableEvents["tipodegol"] = new eventsBase;
$tdatatipodegol[".hasEvents"] = false;

?>