<?php
$tdatapartidos = array();
$tdatapartidos[".searchableFields"] = array();
$tdatapartidos[".ShortName"] = "partidos";
$tdatapartidos[".OwnerID"] = "";
$tdatapartidos[".OriginalTable"] = "partidos";


$tdatapartidos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapartidos[".originalPagesByType"] = $tdatapartidos[".pagesByType"];
$tdatapartidos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapartidos[".originalPages"] = $tdatapartidos[".pages"];
$tdatapartidos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapartidos[".originalDefaultPages"] = $tdatapartidos[".defaultPages"];

//	field labels
$fieldLabelspartidos = array();
$fieldToolTipspartidos = array();
$pageTitlespartidos = array();
$placeHolderspartidos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspartidos["Spanish"] = array();
	$fieldToolTipspartidos["Spanish"] = array();
	$placeHolderspartidos["Spanish"] = array();
	$pageTitlespartidos["Spanish"] = array();
	$fieldLabelspartidos["Spanish"]["id_partido"] = "Id Partido";
	$fieldToolTipspartidos["Spanish"]["id_partido"] = "";
	$placeHolderspartidos["Spanish"]["id_partido"] = "";
	$fieldLabelspartidos["Spanish"]["id_seleccionlocal"] = "Id Seleccionlocal";
	$fieldToolTipspartidos["Spanish"]["id_seleccionlocal"] = "";
	$placeHolderspartidos["Spanish"]["id_seleccionlocal"] = "";
	$fieldLabelspartidos["Spanish"]["id_seleccionvisitante"] = "Id Seleccionvisitante";
	$fieldToolTipspartidos["Spanish"]["id_seleccionvisitante"] = "";
	$placeHolderspartidos["Spanish"]["id_seleccionvisitante"] = "";
	$fieldLabelspartidos["Spanish"]["id_fecha"] = "Id Fecha";
	$fieldToolTipspartidos["Spanish"]["id_fecha"] = "";
	$placeHolderspartidos["Spanish"]["id_fecha"] = "";
	$fieldLabelspartidos["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipspartidos["Spanish"]["fecha"] = "";
	$placeHolderspartidos["Spanish"]["fecha"] = "";
	$fieldLabelspartidos["Spanish"]["hora"] = "Hora";
	$fieldToolTipspartidos["Spanish"]["hora"] = "";
	$placeHolderspartidos["Spanish"]["hora"] = "";
	$fieldLabelspartidos["Spanish"]["goles_local"] = "Goles Local";
	$fieldToolTipspartidos["Spanish"]["goles_local"] = "";
	$placeHolderspartidos["Spanish"]["goles_local"] = "";
	$fieldLabelspartidos["Spanish"]["goles_visitante"] = "Goles Visitante";
	$fieldToolTipspartidos["Spanish"]["goles_visitante"] = "";
	$placeHolderspartidos["Spanish"]["goles_visitante"] = "";
	if (count($fieldToolTipspartidos["Spanish"]))
		$tdatapartidos[".isUseToolTips"] = true;
}


	$tdatapartidos[".NCSearch"] = true;



$tdatapartidos[".shortTableName"] = "partidos";
$tdatapartidos[".nSecOptions"] = 0;

$tdatapartidos[".mainTableOwnerID"] = "";
$tdatapartidos[".entityType"] = 0;
$tdatapartidos[".connId"] = "fixture_at_localhost";


$tdatapartidos[".strOriginalTableName"] = "partidos";

	



$tdatapartidos[".showAddInPopup"] = false;

$tdatapartidos[".showEditInPopup"] = false;

$tdatapartidos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapartidos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapartidos[".listAjax"] = false;
//	temporary
$tdatapartidos[".listAjax"] = false;

	$tdatapartidos[".audit"] = false;

	$tdatapartidos[".locking"] = false;


$pages = $tdatapartidos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapartidos[".edit"] = true;
	$tdatapartidos[".afterEditAction"] = 1;
	$tdatapartidos[".closePopupAfterEdit"] = 1;
	$tdatapartidos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapartidos[".add"] = true;
$tdatapartidos[".afterAddAction"] = 1;
$tdatapartidos[".closePopupAfterAdd"] = 1;
$tdatapartidos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapartidos[".list"] = true;
}



$tdatapartidos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapartidos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapartidos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapartidos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapartidos[".printFriendly"] = true;
}



$tdatapartidos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapartidos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapartidos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapartidos[".isUseAjaxSuggest"] = true;

$tdatapartidos[".rowHighlite"] = true;





$tdatapartidos[".ajaxCodeSnippetAdded"] = false;

$tdatapartidos[".buttonsAdded"] = false;

$tdatapartidos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapartidos[".isUseTimeForSearch"] = false;


$tdatapartidos[".badgeColor"] = "6493EA";


$tdatapartidos[".allSearchFields"] = array();
$tdatapartidos[".filterFields"] = array();
$tdatapartidos[".requiredSearchFields"] = array();

$tdatapartidos[".googleLikeFields"] = array();
$tdatapartidos[".googleLikeFields"][] = "id_partido";
$tdatapartidos[".googleLikeFields"][] = "id_seleccionlocal";
$tdatapartidos[".googleLikeFields"][] = "id_seleccionvisitante";
$tdatapartidos[".googleLikeFields"][] = "id_fecha";
$tdatapartidos[".googleLikeFields"][] = "fecha";
$tdatapartidos[".googleLikeFields"][] = "hora";
$tdatapartidos[".googleLikeFields"][] = "goles_local";
$tdatapartidos[".googleLikeFields"][] = "goles_visitante";



$tdatapartidos[".tableType"] = "list";

$tdatapartidos[".printerPageOrientation"] = 0;
$tdatapartidos[".nPrinterPageScale"] = 100;

$tdatapartidos[".nPrinterSplitRecords"] = 40;

$tdatapartidos[".geocodingEnabled"] = false;










$tdatapartidos[".pageSize"] = 20;

$tdatapartidos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapartidos[".strOrderBy"] = $tstrOrderBy;

$tdatapartidos[".orderindexes"] = array();


$tdatapartidos[".sqlHead"] = "SELECT id_partido,  	id_seleccionlocal,  	id_seleccionvisitante,  	id_fecha,  	fecha,  	hora,  	goles_local,  	goles_visitante";
$tdatapartidos[".sqlFrom"] = "FROM partidos";
$tdatapartidos[".sqlWhereExpr"] = "";
$tdatapartidos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapartidos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapartidos[".arrGroupsPerPage"] = $arrGPP;

$tdatapartidos[".highlightSearchResults"] = true;

$tableKeyspartidos = array();
$tableKeyspartidos[] = "id_partido";
$tdatapartidos[".Keys"] = $tableKeyspartidos;


$tdatapartidos[".hideMobileList"] = array();




//	id_partido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_partido";
	$fdata["GoodName"] = "id_partido";
	$fdata["ownerTable"] = "partidos";
	$fdata["Label"] = GetFieldLabel("partidos","id_partido");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

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


	$tdatapartidos["id_partido"] = $fdata;
		$tdatapartidos[".searchableFields"][] = "id_partido";
//	id_seleccionlocal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_seleccionlocal";
	$fdata["GoodName"] = "id_seleccionlocal";
	$fdata["ownerTable"] = "partidos";
	$fdata["Label"] = GetFieldLabel("partidos","id_seleccionlocal");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_seleccionlocal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_seleccionlocal";

	
	
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


	$tdatapartidos["id_seleccionlocal"] = $fdata;
		$tdatapartidos[".searchableFields"][] = "id_seleccionlocal";
//	id_seleccionvisitante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_seleccionvisitante";
	$fdata["GoodName"] = "id_seleccionvisitante";
	$fdata["ownerTable"] = "partidos";
	$fdata["Label"] = GetFieldLabel("partidos","id_seleccionvisitante");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_seleccionvisitante";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_seleccionvisitante";

	
	
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


	$tdatapartidos["id_seleccionvisitante"] = $fdata;
		$tdatapartidos[".searchableFields"][] = "id_seleccionvisitante";
//	id_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_fecha";
	$fdata["GoodName"] = "id_fecha";
	$fdata["ownerTable"] = "partidos";
	$fdata["Label"] = GetFieldLabel("partidos","id_fecha");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_fecha";

	
	
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


	$tdatapartidos["id_fecha"] = $fdata;
		$tdatapartidos[".searchableFields"][] = "id_fecha";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "partidos";
	$fdata["Label"] = GetFieldLabel("partidos","fecha");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatapartidos["fecha"] = $fdata;
		$tdatapartidos[".searchableFields"][] = "fecha";
//	hora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "hora";
	$fdata["GoodName"] = "hora";
	$fdata["ownerTable"] = "partidos";
	$fdata["Label"] = GetFieldLabel("partidos","hora");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "hora";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hora";

	
	
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


	$tdatapartidos["hora"] = $fdata;
		$tdatapartidos[".searchableFields"][] = "hora";
//	goles_local
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "goles_local";
	$fdata["GoodName"] = "goles_local";
	$fdata["ownerTable"] = "partidos";
	$fdata["Label"] = GetFieldLabel("partidos","goles_local");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "goles_local";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "goles_local";

	
	
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


	$tdatapartidos["goles_local"] = $fdata;
		$tdatapartidos[".searchableFields"][] = "goles_local";
//	goles_visitante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "goles_visitante";
	$fdata["GoodName"] = "goles_visitante";
	$fdata["ownerTable"] = "partidos";
	$fdata["Label"] = GetFieldLabel("partidos","goles_visitante");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "goles_visitante";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "goles_visitante";

	
	
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


	$tdatapartidos["goles_visitante"] = $fdata;
		$tdatapartidos[".searchableFields"][] = "goles_visitante";


$tables_data["partidos"]=&$tdatapartidos;
$field_labels["partidos"] = &$fieldLabelspartidos;
$fieldToolTips["partidos"] = &$fieldToolTipspartidos;
$placeHolders["partidos"] = &$placeHolderspartidos;
$page_titles["partidos"] = &$pageTitlespartidos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["partidos"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["partidos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_partidos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_partido,  	id_seleccionlocal,  	id_seleccionvisitante,  	id_fecha,  	fecha,  	hora,  	goles_local,  	goles_visitante";
$proto0["m_strFrom"] = "FROM partidos";
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
	"m_strTable" => "partidos",
	"m_srcTableName" => "partidos"
));

$proto6["m_sql"] = "id_partido";
$proto6["m_srcTableName"] = "partidos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_seleccionlocal",
	"m_strTable" => "partidos",
	"m_srcTableName" => "partidos"
));

$proto8["m_sql"] = "id_seleccionlocal";
$proto8["m_srcTableName"] = "partidos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_seleccionvisitante",
	"m_strTable" => "partidos",
	"m_srcTableName" => "partidos"
));

$proto10["m_sql"] = "id_seleccionvisitante";
$proto10["m_srcTableName"] = "partidos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id_fecha",
	"m_strTable" => "partidos",
	"m_srcTableName" => "partidos"
));

$proto12["m_sql"] = "id_fecha";
$proto12["m_srcTableName"] = "partidos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "partidos",
	"m_srcTableName" => "partidos"
));

$proto14["m_sql"] = "fecha";
$proto14["m_srcTableName"] = "partidos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "hora",
	"m_strTable" => "partidos",
	"m_srcTableName" => "partidos"
));

$proto16["m_sql"] = "hora";
$proto16["m_srcTableName"] = "partidos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "goles_local",
	"m_strTable" => "partidos",
	"m_srcTableName" => "partidos"
));

$proto18["m_sql"] = "goles_local";
$proto18["m_srcTableName"] = "partidos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "goles_visitante",
	"m_strTable" => "partidos",
	"m_srcTableName" => "partidos"
));

$proto20["m_sql"] = "goles_visitante";
$proto20["m_srcTableName"] = "partidos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "partidos";
$proto23["m_srcTableName"] = "partidos";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id_partido";
$proto23["m_columns"][] = "id_seleccionlocal";
$proto23["m_columns"][] = "id_seleccionvisitante";
$proto23["m_columns"][] = "id_fecha";
$proto23["m_columns"][] = "fecha";
$proto23["m_columns"][] = "hora";
$proto23["m_columns"][] = "goles_local";
$proto23["m_columns"][] = "goles_visitante";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "partidos";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "partidos";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="partidos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_partidos = createSqlQuery_partidos();


	
		;

								

$tdatapartidos[".sqlquery"] = $queryData_partidos;



$tableEvents["partidos"] = new eventsBase;
$tdatapartidos[".hasEvents"] = false;

?>