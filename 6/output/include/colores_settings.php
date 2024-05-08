<?php
$tdatacolores = array();
$tdatacolores[".searchableFields"] = array();
$tdatacolores[".ShortName"] = "colores";
$tdatacolores[".OwnerID"] = "";
$tdatacolores[".OriginalTable"] = "colores";


$tdatacolores[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacolores[".originalPagesByType"] = $tdatacolores[".pagesByType"];
$tdatacolores[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacolores[".originalPages"] = $tdatacolores[".pages"];
$tdatacolores[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacolores[".originalDefaultPages"] = $tdatacolores[".defaultPages"];

//	field labels
$fieldLabelscolores = array();
$fieldToolTipscolores = array();
$pageTitlescolores = array();
$placeHolderscolores = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscolores["Spanish"] = array();
	$fieldToolTipscolores["Spanish"] = array();
	$placeHolderscolores["Spanish"] = array();
	$pageTitlescolores["Spanish"] = array();
	$fieldLabelscolores["Spanish"]["id_color"] = "Id Color";
	$fieldToolTipscolores["Spanish"]["id_color"] = "";
	$placeHolderscolores["Spanish"]["id_color"] = "";
	$fieldLabelscolores["Spanish"]["nombre_color"] = "Nombre Color";
	$fieldToolTipscolores["Spanish"]["nombre_color"] = "";
	$placeHolderscolores["Spanish"]["nombre_color"] = "";
	if (count($fieldToolTipscolores["Spanish"]))
		$tdatacolores[".isUseToolTips"] = true;
}


	$tdatacolores[".NCSearch"] = true;



$tdatacolores[".shortTableName"] = "colores";
$tdatacolores[".nSecOptions"] = 0;

$tdatacolores[".mainTableOwnerID"] = "";
$tdatacolores[".entityType"] = 0;
$tdatacolores[".connId"] = "fixture_at_localhost";


$tdatacolores[".strOriginalTableName"] = "colores";

	



$tdatacolores[".showAddInPopup"] = false;

$tdatacolores[".showEditInPopup"] = false;

$tdatacolores[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacolores[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacolores[".listAjax"] = false;
//	temporary
$tdatacolores[".listAjax"] = false;

	$tdatacolores[".audit"] = false;

	$tdatacolores[".locking"] = false;


$pages = $tdatacolores[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacolores[".edit"] = true;
	$tdatacolores[".afterEditAction"] = 1;
	$tdatacolores[".closePopupAfterEdit"] = 1;
	$tdatacolores[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacolores[".add"] = true;
$tdatacolores[".afterAddAction"] = 1;
$tdatacolores[".closePopupAfterAdd"] = 1;
$tdatacolores[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacolores[".list"] = true;
}



$tdatacolores[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacolores[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacolores[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacolores[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacolores[".printFriendly"] = true;
}



$tdatacolores[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacolores[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacolores[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacolores[".isUseAjaxSuggest"] = true;

$tdatacolores[".rowHighlite"] = true;





$tdatacolores[".ajaxCodeSnippetAdded"] = false;

$tdatacolores[".buttonsAdded"] = false;

$tdatacolores[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacolores[".isUseTimeForSearch"] = false;


$tdatacolores[".badgeColor"] = "E8926F";


$tdatacolores[".allSearchFields"] = array();
$tdatacolores[".filterFields"] = array();
$tdatacolores[".requiredSearchFields"] = array();

$tdatacolores[".googleLikeFields"] = array();
$tdatacolores[".googleLikeFields"][] = "id_color";
$tdatacolores[".googleLikeFields"][] = "nombre_color";



$tdatacolores[".tableType"] = "list";

$tdatacolores[".printerPageOrientation"] = 0;
$tdatacolores[".nPrinterPageScale"] = 100;

$tdatacolores[".nPrinterSplitRecords"] = 40;

$tdatacolores[".geocodingEnabled"] = false;










$tdatacolores[".pageSize"] = 20;

$tdatacolores[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacolores[".strOrderBy"] = $tstrOrderBy;

$tdatacolores[".orderindexes"] = array();


$tdatacolores[".sqlHead"] = "SELECT id_color,  	nombre_color";
$tdatacolores[".sqlFrom"] = "FROM colores";
$tdatacolores[".sqlWhereExpr"] = "";
$tdatacolores[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacolores[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacolores[".arrGroupsPerPage"] = $arrGPP;

$tdatacolores[".highlightSearchResults"] = true;

$tableKeyscolores = array();
$tableKeyscolores[] = "id_color";
$tdatacolores[".Keys"] = $tableKeyscolores;


$tdatacolores[".hideMobileList"] = array();




//	id_color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_color";
	$fdata["GoodName"] = "id_color";
	$fdata["ownerTable"] = "colores";
	$fdata["Label"] = GetFieldLabel("colores","id_color");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_color";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_color";

	
	
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


	$tdatacolores["id_color"] = $fdata;
		$tdatacolores[".searchableFields"][] = "id_color";
//	nombre_color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre_color";
	$fdata["GoodName"] = "nombre_color";
	$fdata["ownerTable"] = "colores";
	$fdata["Label"] = GetFieldLabel("colores","nombre_color");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nombre_color";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre_color";

	
	
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


	$tdatacolores["nombre_color"] = $fdata;
		$tdatacolores[".searchableFields"][] = "nombre_color";


$tables_data["colores"]=&$tdatacolores;
$field_labels["colores"] = &$fieldLabelscolores;
$fieldToolTips["colores"] = &$fieldToolTipscolores;
$placeHolders["colores"] = &$placeHolderscolores;
$page_titles["colores"] = &$pageTitlescolores;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["colores"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["colores"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_colores()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_color,  	nombre_color";
$proto0["m_strFrom"] = "FROM colores";
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
	"m_strName" => "id_color",
	"m_strTable" => "colores",
	"m_srcTableName" => "colores"
));

$proto6["m_sql"] = "id_color";
$proto6["m_srcTableName"] = "colores";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_color",
	"m_strTable" => "colores",
	"m_srcTableName" => "colores"
));

$proto8["m_sql"] = "nombre_color";
$proto8["m_srcTableName"] = "colores";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "colores";
$proto11["m_srcTableName"] = "colores";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_color";
$proto11["m_columns"][] = "nombre_color";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "colores";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "colores";
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
$proto0["m_srcTableName"]="colores";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_colores = createSqlQuery_colores();


	
		;

		

$tdatacolores[".sqlquery"] = $queryData_colores;



$tableEvents["colores"] = new eventsBase;
$tdatacolores[".hasEvents"] = false;

?>