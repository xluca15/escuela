<?php
$tdatagoles = array();
$tdatagoles[".searchableFields"] = array();
$tdatagoles[".ShortName"] = "goles";
$tdatagoles[".OwnerID"] = "";
$tdatagoles[".OriginalTable"] = "goles";


$tdatagoles[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatagoles[".originalPagesByType"] = $tdatagoles[".pagesByType"];
$tdatagoles[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatagoles[".originalPages"] = $tdatagoles[".pages"];
$tdatagoles[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatagoles[".originalDefaultPages"] = $tdatagoles[".defaultPages"];

//	field labels
$fieldLabelsgoles = array();
$fieldToolTipsgoles = array();
$pageTitlesgoles = array();
$placeHoldersgoles = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsgoles["Spanish"] = array();
	$fieldToolTipsgoles["Spanish"] = array();
	$placeHoldersgoles["Spanish"] = array();
	$pageTitlesgoles["Spanish"] = array();
	$fieldLabelsgoles["Spanish"]["id_partido"] = "Id Partido";
	$fieldToolTipsgoles["Spanish"]["id_partido"] = "";
	$placeHoldersgoles["Spanish"]["id_partido"] = "";
	$fieldLabelsgoles["Spanish"]["id_jugador"] = "Id Jugador";
	$fieldToolTipsgoles["Spanish"]["id_jugador"] = "";
	$placeHoldersgoles["Spanish"]["id_jugador"] = "";
	$fieldLabelsgoles["Spanish"]["id_tipogol"] = "Id Tipogol";
	$fieldToolTipsgoles["Spanish"]["id_tipogol"] = "";
	$placeHoldersgoles["Spanish"]["id_tipogol"] = "";
	$fieldLabelsgoles["Spanish"]["minuto_gol"] = "Minuto Gol";
	$fieldToolTipsgoles["Spanish"]["minuto_gol"] = "";
	$placeHoldersgoles["Spanish"]["minuto_gol"] = "";
	if (count($fieldToolTipsgoles["Spanish"]))
		$tdatagoles[".isUseToolTips"] = true;
}


	$tdatagoles[".NCSearch"] = true;



$tdatagoles[".shortTableName"] = "goles";
$tdatagoles[".nSecOptions"] = 0;

$tdatagoles[".mainTableOwnerID"] = "";
$tdatagoles[".entityType"] = 0;
$tdatagoles[".connId"] = "fixture_at_localhost";


$tdatagoles[".strOriginalTableName"] = "goles";

	



$tdatagoles[".showAddInPopup"] = false;

$tdatagoles[".showEditInPopup"] = false;

$tdatagoles[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagoles[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagoles[".listAjax"] = false;
//	temporary
$tdatagoles[".listAjax"] = false;

	$tdatagoles[".audit"] = false;

	$tdatagoles[".locking"] = false;


$pages = $tdatagoles[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagoles[".edit"] = true;
	$tdatagoles[".afterEditAction"] = 1;
	$tdatagoles[".closePopupAfterEdit"] = 1;
	$tdatagoles[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagoles[".add"] = true;
$tdatagoles[".afterAddAction"] = 1;
$tdatagoles[".closePopupAfterAdd"] = 1;
$tdatagoles[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagoles[".list"] = true;
}



$tdatagoles[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagoles[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagoles[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagoles[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagoles[".printFriendly"] = true;
}



$tdatagoles[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagoles[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagoles[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagoles[".isUseAjaxSuggest"] = true;

$tdatagoles[".rowHighlite"] = true;





$tdatagoles[".ajaxCodeSnippetAdded"] = false;

$tdatagoles[".buttonsAdded"] = false;

$tdatagoles[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagoles[".isUseTimeForSearch"] = false;


$tdatagoles[".badgeColor"] = "CFAE83";


$tdatagoles[".allSearchFields"] = array();
$tdatagoles[".filterFields"] = array();
$tdatagoles[".requiredSearchFields"] = array();

$tdatagoles[".googleLikeFields"] = array();
$tdatagoles[".googleLikeFields"][] = "id_partido";
$tdatagoles[".googleLikeFields"][] = "id_jugador";
$tdatagoles[".googleLikeFields"][] = "id_tipogol";
$tdatagoles[".googleLikeFields"][] = "minuto_gol";



$tdatagoles[".tableType"] = "list";

$tdatagoles[".printerPageOrientation"] = 0;
$tdatagoles[".nPrinterPageScale"] = 100;

$tdatagoles[".nPrinterSplitRecords"] = 40;

$tdatagoles[".geocodingEnabled"] = false;










$tdatagoles[".pageSize"] = 20;

$tdatagoles[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagoles[".strOrderBy"] = $tstrOrderBy;

$tdatagoles[".orderindexes"] = array();


$tdatagoles[".sqlHead"] = "SELECT id_partido,  	id_jugador,  	id_tipogol,  	minuto_gol";
$tdatagoles[".sqlFrom"] = "FROM goles";
$tdatagoles[".sqlWhereExpr"] = "";
$tdatagoles[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagoles[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagoles[".arrGroupsPerPage"] = $arrGPP;

$tdatagoles[".highlightSearchResults"] = true;

$tableKeysgoles = array();
$tableKeysgoles[] = "id_partido";
$tdatagoles[".Keys"] = $tableKeysgoles;


$tdatagoles[".hideMobileList"] = array();




//	id_partido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_partido";
	$fdata["GoodName"] = "id_partido";
	$fdata["ownerTable"] = "goles";
	$fdata["Label"] = GetFieldLabel("goles","id_partido");
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


	$tdatagoles["id_partido"] = $fdata;
		$tdatagoles[".searchableFields"][] = "id_partido";
//	id_jugador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_jugador";
	$fdata["GoodName"] = "id_jugador";
	$fdata["ownerTable"] = "goles";
	$fdata["Label"] = GetFieldLabel("goles","id_jugador");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_jugador";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_jugador";

	
	
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


	$tdatagoles["id_jugador"] = $fdata;
		$tdatagoles[".searchableFields"][] = "id_jugador";
//	id_tipogol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_tipogol";
	$fdata["GoodName"] = "id_tipogol";
	$fdata["ownerTable"] = "goles";
	$fdata["Label"] = GetFieldLabel("goles","id_tipogol");
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


	$tdatagoles["id_tipogol"] = $fdata;
		$tdatagoles[".searchableFields"][] = "id_tipogol";
//	minuto_gol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "minuto_gol";
	$fdata["GoodName"] = "minuto_gol";
	$fdata["ownerTable"] = "goles";
	$fdata["Label"] = GetFieldLabel("goles","minuto_gol");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "minuto_gol";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "minuto_gol";

	
	
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


	$tdatagoles["minuto_gol"] = $fdata;
		$tdatagoles[".searchableFields"][] = "minuto_gol";


$tables_data["goles"]=&$tdatagoles;
$field_labels["goles"] = &$fieldLabelsgoles;
$fieldToolTips["goles"] = &$fieldToolTipsgoles;
$placeHolders["goles"] = &$placeHoldersgoles;
$page_titles["goles"] = &$pageTitlesgoles;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["goles"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["goles"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_goles()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_partido,  	id_jugador,  	id_tipogol,  	minuto_gol";
$proto0["m_strFrom"] = "FROM goles";
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
	"m_strTable" => "goles",
	"m_srcTableName" => "goles"
));

$proto6["m_sql"] = "id_partido";
$proto6["m_srcTableName"] = "goles";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_jugador",
	"m_strTable" => "goles",
	"m_srcTableName" => "goles"
));

$proto8["m_sql"] = "id_jugador";
$proto8["m_srcTableName"] = "goles";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_tipogol",
	"m_strTable" => "goles",
	"m_srcTableName" => "goles"
));

$proto10["m_sql"] = "id_tipogol";
$proto10["m_srcTableName"] = "goles";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "minuto_gol",
	"m_strTable" => "goles",
	"m_srcTableName" => "goles"
));

$proto12["m_sql"] = "minuto_gol";
$proto12["m_srcTableName"] = "goles";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "goles";
$proto15["m_srcTableName"] = "goles";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id_partido";
$proto15["m_columns"][] = "id_jugador";
$proto15["m_columns"][] = "id_tipogol";
$proto15["m_columns"][] = "minuto_gol";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "goles";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "goles";
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
$proto0["m_srcTableName"]="goles";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_goles = createSqlQuery_goles();


	
		;

				

$tdatagoles[".sqlquery"] = $queryData_goles;



$tableEvents["goles"] = new eventsBase;
$tdatagoles[".hasEvents"] = false;

?>