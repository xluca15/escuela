<?php
$tdataposicion = array();
$tdataposicion[".searchableFields"] = array();
$tdataposicion[".ShortName"] = "posicion";
$tdataposicion[".OwnerID"] = "";
$tdataposicion[".OriginalTable"] = "posicion";


$tdataposicion[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataposicion[".originalPagesByType"] = $tdataposicion[".pagesByType"];
$tdataposicion[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataposicion[".originalPages"] = $tdataposicion[".pages"];
$tdataposicion[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataposicion[".originalDefaultPages"] = $tdataposicion[".defaultPages"];

//	field labels
$fieldLabelsposicion = array();
$fieldToolTipsposicion = array();
$pageTitlesposicion = array();
$placeHoldersposicion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsposicion["Spanish"] = array();
	$fieldToolTipsposicion["Spanish"] = array();
	$placeHoldersposicion["Spanish"] = array();
	$pageTitlesposicion["Spanish"] = array();
	$fieldLabelsposicion["Spanish"]["id_posicion"] = "Id Posicion";
	$fieldToolTipsposicion["Spanish"]["id_posicion"] = "";
	$placeHoldersposicion["Spanish"]["id_posicion"] = "";
	$fieldLabelsposicion["Spanish"]["nombre_posicion"] = "Nombre Posicion";
	$fieldToolTipsposicion["Spanish"]["nombre_posicion"] = "";
	$placeHoldersposicion["Spanish"]["nombre_posicion"] = "";
	if (count($fieldToolTipsposicion["Spanish"]))
		$tdataposicion[".isUseToolTips"] = true;
}


	$tdataposicion[".NCSearch"] = true;



$tdataposicion[".shortTableName"] = "posicion";
$tdataposicion[".nSecOptions"] = 0;

$tdataposicion[".mainTableOwnerID"] = "";
$tdataposicion[".entityType"] = 0;
$tdataposicion[".connId"] = "fixture_at_localhost";


$tdataposicion[".strOriginalTableName"] = "posicion";

	



$tdataposicion[".showAddInPopup"] = false;

$tdataposicion[".showEditInPopup"] = false;

$tdataposicion[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataposicion[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataposicion[".listAjax"] = false;
//	temporary
$tdataposicion[".listAjax"] = false;

	$tdataposicion[".audit"] = false;

	$tdataposicion[".locking"] = false;


$pages = $tdataposicion[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataposicion[".edit"] = true;
	$tdataposicion[".afterEditAction"] = 1;
	$tdataposicion[".closePopupAfterEdit"] = 1;
	$tdataposicion[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataposicion[".add"] = true;
$tdataposicion[".afterAddAction"] = 1;
$tdataposicion[".closePopupAfterAdd"] = 1;
$tdataposicion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataposicion[".list"] = true;
}



$tdataposicion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataposicion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataposicion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataposicion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataposicion[".printFriendly"] = true;
}



$tdataposicion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataposicion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataposicion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataposicion[".isUseAjaxSuggest"] = true;

$tdataposicion[".rowHighlite"] = true;





$tdataposicion[".ajaxCodeSnippetAdded"] = false;

$tdataposicion[".buttonsAdded"] = false;

$tdataposicion[".addPageEvents"] = false;

// use timepicker for search panel
$tdataposicion[".isUseTimeForSearch"] = false;


$tdataposicion[".badgeColor"] = "3CB371";


$tdataposicion[".allSearchFields"] = array();
$tdataposicion[".filterFields"] = array();
$tdataposicion[".requiredSearchFields"] = array();

$tdataposicion[".googleLikeFields"] = array();
$tdataposicion[".googleLikeFields"][] = "id_posicion";
$tdataposicion[".googleLikeFields"][] = "nombre_posicion";



$tdataposicion[".tableType"] = "list";

$tdataposicion[".printerPageOrientation"] = 0;
$tdataposicion[".nPrinterPageScale"] = 100;

$tdataposicion[".nPrinterSplitRecords"] = 40;

$tdataposicion[".geocodingEnabled"] = false;










$tdataposicion[".pageSize"] = 20;

$tdataposicion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataposicion[".strOrderBy"] = $tstrOrderBy;

$tdataposicion[".orderindexes"] = array();


$tdataposicion[".sqlHead"] = "SELECT id_posicion,  	nombre_posicion";
$tdataposicion[".sqlFrom"] = "FROM posicion";
$tdataposicion[".sqlWhereExpr"] = "";
$tdataposicion[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataposicion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataposicion[".arrGroupsPerPage"] = $arrGPP;

$tdataposicion[".highlightSearchResults"] = true;

$tableKeysposicion = array();
$tableKeysposicion[] = "id_posicion";
$tdataposicion[".Keys"] = $tableKeysposicion;


$tdataposicion[".hideMobileList"] = array();




//	id_posicion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_posicion";
	$fdata["GoodName"] = "id_posicion";
	$fdata["ownerTable"] = "posicion";
	$fdata["Label"] = GetFieldLabel("posicion","id_posicion");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_posicion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_posicion";

	
	
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


	$tdataposicion["id_posicion"] = $fdata;
		$tdataposicion[".searchableFields"][] = "id_posicion";
//	nombre_posicion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre_posicion";
	$fdata["GoodName"] = "nombre_posicion";
	$fdata["ownerTable"] = "posicion";
	$fdata["Label"] = GetFieldLabel("posicion","nombre_posicion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nombre_posicion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre_posicion";

	
	
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


	$tdataposicion["nombre_posicion"] = $fdata;
		$tdataposicion[".searchableFields"][] = "nombre_posicion";


$tables_data["posicion"]=&$tdataposicion;
$field_labels["posicion"] = &$fieldLabelsposicion;
$fieldToolTips["posicion"] = &$fieldToolTipsposicion;
$placeHolders["posicion"] = &$placeHoldersposicion;
$page_titles["posicion"] = &$pageTitlesposicion;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["posicion"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["posicion"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_posicion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_posicion,  	nombre_posicion";
$proto0["m_strFrom"] = "FROM posicion";
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
	"m_strName" => "id_posicion",
	"m_strTable" => "posicion",
	"m_srcTableName" => "posicion"
));

$proto6["m_sql"] = "id_posicion";
$proto6["m_srcTableName"] = "posicion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_posicion",
	"m_strTable" => "posicion",
	"m_srcTableName" => "posicion"
));

$proto8["m_sql"] = "nombre_posicion";
$proto8["m_srcTableName"] = "posicion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "posicion";
$proto11["m_srcTableName"] = "posicion";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_posicion";
$proto11["m_columns"][] = "nombre_posicion";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "posicion";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "posicion";
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
$proto0["m_srcTableName"]="posicion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_posicion = createSqlQuery_posicion();


	
		;

		

$tdataposicion[".sqlquery"] = $queryData_posicion;



$tableEvents["posicion"] = new eventsBase;
$tdataposicion[".hasEvents"] = false;

?>