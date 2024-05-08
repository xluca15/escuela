<?php
$tdataestadios = array();
$tdataestadios[".searchableFields"] = array();
$tdataestadios[".ShortName"] = "estadios";
$tdataestadios[".OwnerID"] = "";
$tdataestadios[".OriginalTable"] = "estadios";


$tdataestadios[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataestadios[".originalPagesByType"] = $tdataestadios[".pagesByType"];
$tdataestadios[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataestadios[".originalPages"] = $tdataestadios[".pages"];
$tdataestadios[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataestadios[".originalDefaultPages"] = $tdataestadios[".defaultPages"];

//	field labels
$fieldLabelsestadios = array();
$fieldToolTipsestadios = array();
$pageTitlesestadios = array();
$placeHoldersestadios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsestadios["Spanish"] = array();
	$fieldToolTipsestadios["Spanish"] = array();
	$placeHoldersestadios["Spanish"] = array();
	$pageTitlesestadios["Spanish"] = array();
	$fieldLabelsestadios["Spanish"]["id_estadio"] = "Id Estadio";
	$fieldToolTipsestadios["Spanish"]["id_estadio"] = "";
	$placeHoldersestadios["Spanish"]["id_estadio"] = "";
	$fieldLabelsestadios["Spanish"]["nombre_estadio"] = "Nombre Estadio";
	$fieldToolTipsestadios["Spanish"]["nombre_estadio"] = "";
	$placeHoldersestadios["Spanish"]["nombre_estadio"] = "";
	$fieldLabelsestadios["Spanish"]["nombre_ciudad"] = "Nombre Ciudad";
	$fieldToolTipsestadios["Spanish"]["nombre_ciudad"] = "";
	$placeHoldersestadios["Spanish"]["nombre_ciudad"] = "";
	$fieldLabelsestadios["Spanish"]["capacidad_estadio"] = "Capacidad Estadio";
	$fieldToolTipsestadios["Spanish"]["capacidad_estadio"] = "";
	$placeHoldersestadios["Spanish"]["capacidad_estadio"] = "";
	if (count($fieldToolTipsestadios["Spanish"]))
		$tdataestadios[".isUseToolTips"] = true;
}


	$tdataestadios[".NCSearch"] = true;



$tdataestadios[".shortTableName"] = "estadios";
$tdataestadios[".nSecOptions"] = 0;

$tdataestadios[".mainTableOwnerID"] = "";
$tdataestadios[".entityType"] = 0;
$tdataestadios[".connId"] = "fixture_at_localhost";


$tdataestadios[".strOriginalTableName"] = "estadios";

	



$tdataestadios[".showAddInPopup"] = false;

$tdataestadios[".showEditInPopup"] = false;

$tdataestadios[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataestadios[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataestadios[".listAjax"] = false;
//	temporary
$tdataestadios[".listAjax"] = false;

	$tdataestadios[".audit"] = false;

	$tdataestadios[".locking"] = false;


$pages = $tdataestadios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataestadios[".edit"] = true;
	$tdataestadios[".afterEditAction"] = 1;
	$tdataestadios[".closePopupAfterEdit"] = 1;
	$tdataestadios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataestadios[".add"] = true;
$tdataestadios[".afterAddAction"] = 1;
$tdataestadios[".closePopupAfterAdd"] = 1;
$tdataestadios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataestadios[".list"] = true;
}



$tdataestadios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataestadios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataestadios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataestadios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataestadios[".printFriendly"] = true;
}



$tdataestadios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataestadios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataestadios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataestadios[".isUseAjaxSuggest"] = true;

$tdataestadios[".rowHighlite"] = true;





$tdataestadios[".ajaxCodeSnippetAdded"] = false;

$tdataestadios[".buttonsAdded"] = false;

$tdataestadios[".addPageEvents"] = false;

// use timepicker for search panel
$tdataestadios[".isUseTimeForSearch"] = false;


$tdataestadios[".badgeColor"] = "E8926F";


$tdataestadios[".allSearchFields"] = array();
$tdataestadios[".filterFields"] = array();
$tdataestadios[".requiredSearchFields"] = array();

$tdataestadios[".googleLikeFields"] = array();
$tdataestadios[".googleLikeFields"][] = "id_estadio";
$tdataestadios[".googleLikeFields"][] = "nombre_estadio";
$tdataestadios[".googleLikeFields"][] = "nombre_ciudad";
$tdataestadios[".googleLikeFields"][] = "capacidad_estadio";



$tdataestadios[".tableType"] = "list";

$tdataestadios[".printerPageOrientation"] = 0;
$tdataestadios[".nPrinterPageScale"] = 100;

$tdataestadios[".nPrinterSplitRecords"] = 40;

$tdataestadios[".geocodingEnabled"] = false;










$tdataestadios[".pageSize"] = 20;

$tdataestadios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataestadios[".strOrderBy"] = $tstrOrderBy;

$tdataestadios[".orderindexes"] = array();


$tdataestadios[".sqlHead"] = "SELECT id_estadio,  	nombre_estadio,  	nombre_ciudad,  	capacidad_estadio";
$tdataestadios[".sqlFrom"] = "FROM estadios";
$tdataestadios[".sqlWhereExpr"] = "";
$tdataestadios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataestadios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataestadios[".arrGroupsPerPage"] = $arrGPP;

$tdataestadios[".highlightSearchResults"] = true;

$tableKeysestadios = array();
$tableKeysestadios[] = "id_estadio";
$tdataestadios[".Keys"] = $tableKeysestadios;


$tdataestadios[".hideMobileList"] = array();




//	id_estadio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_estadio";
	$fdata["GoodName"] = "id_estadio";
	$fdata["ownerTable"] = "estadios";
	$fdata["Label"] = GetFieldLabel("estadios","id_estadio");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_estadio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_estadio";

	
	
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


	$tdataestadios["id_estadio"] = $fdata;
		$tdataestadios[".searchableFields"][] = "id_estadio";
//	nombre_estadio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre_estadio";
	$fdata["GoodName"] = "nombre_estadio";
	$fdata["ownerTable"] = "estadios";
	$fdata["Label"] = GetFieldLabel("estadios","nombre_estadio");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nombre_estadio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre_estadio";

	
	
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


	$tdataestadios["nombre_estadio"] = $fdata;
		$tdataestadios[".searchableFields"][] = "nombre_estadio";
//	nombre_ciudad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nombre_ciudad";
	$fdata["GoodName"] = "nombre_ciudad";
	$fdata["ownerTable"] = "estadios";
	$fdata["Label"] = GetFieldLabel("estadios","nombre_ciudad");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nombre_ciudad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre_ciudad";

	
	
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


	$tdataestadios["nombre_ciudad"] = $fdata;
		$tdataestadios[".searchableFields"][] = "nombre_ciudad";
//	capacidad_estadio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capacidad_estadio";
	$fdata["GoodName"] = "capacidad_estadio";
	$fdata["ownerTable"] = "estadios";
	$fdata["Label"] = GetFieldLabel("estadios","capacidad_estadio");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "capacidad_estadio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "capacidad_estadio";

	
	
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


	$tdataestadios["capacidad_estadio"] = $fdata;
		$tdataestadios[".searchableFields"][] = "capacidad_estadio";


$tables_data["estadios"]=&$tdataestadios;
$field_labels["estadios"] = &$fieldLabelsestadios;
$fieldToolTips["estadios"] = &$fieldToolTipsestadios;
$placeHolders["estadios"] = &$placeHoldersestadios;
$page_titles["estadios"] = &$pageTitlesestadios;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["estadios"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["estadios"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_estadios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_estadio,  	nombre_estadio,  	nombre_ciudad,  	capacidad_estadio";
$proto0["m_strFrom"] = "FROM estadios";
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
	"m_strName" => "id_estadio",
	"m_strTable" => "estadios",
	"m_srcTableName" => "estadios"
));

$proto6["m_sql"] = "id_estadio";
$proto6["m_srcTableName"] = "estadios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_estadio",
	"m_strTable" => "estadios",
	"m_srcTableName" => "estadios"
));

$proto8["m_sql"] = "nombre_estadio";
$proto8["m_srcTableName"] = "estadios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_ciudad",
	"m_strTable" => "estadios",
	"m_srcTableName" => "estadios"
));

$proto10["m_sql"] = "nombre_ciudad";
$proto10["m_srcTableName"] = "estadios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capacidad_estadio",
	"m_strTable" => "estadios",
	"m_srcTableName" => "estadios"
));

$proto12["m_sql"] = "capacidad_estadio";
$proto12["m_srcTableName"] = "estadios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "estadios";
$proto15["m_srcTableName"] = "estadios";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id_estadio";
$proto15["m_columns"][] = "nombre_estadio";
$proto15["m_columns"][] = "nombre_ciudad";
$proto15["m_columns"][] = "capacidad_estadio";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "estadios";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "estadios";
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
$proto0["m_srcTableName"]="estadios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_estadios = createSqlQuery_estadios();


	
		;

				

$tdataestadios[".sqlquery"] = $queryData_estadios;



$tableEvents["estadios"] = new eventsBase;
$tdataestadios[".hasEvents"] = false;

?>