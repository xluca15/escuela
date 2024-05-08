<?php
$tdataselecciones = array();
$tdataselecciones[".searchableFields"] = array();
$tdataselecciones[".ShortName"] = "selecciones";
$tdataselecciones[".OwnerID"] = "";
$tdataselecciones[".OriginalTable"] = "selecciones";


$tdataselecciones[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataselecciones[".originalPagesByType"] = $tdataselecciones[".pagesByType"];
$tdataselecciones[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataselecciones[".originalPages"] = $tdataselecciones[".pages"];
$tdataselecciones[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataselecciones[".originalDefaultPages"] = $tdataselecciones[".defaultPages"];

//	field labels
$fieldLabelsselecciones = array();
$fieldToolTipsselecciones = array();
$pageTitlesselecciones = array();
$placeHoldersselecciones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsselecciones["Spanish"] = array();
	$fieldToolTipsselecciones["Spanish"] = array();
	$placeHoldersselecciones["Spanish"] = array();
	$pageTitlesselecciones["Spanish"] = array();
	$fieldLabelsselecciones["Spanish"]["nombre_seleccion"] = "Nombre Seleccion";
	$fieldToolTipsselecciones["Spanish"]["nombre_seleccion"] = "";
	$placeHoldersselecciones["Spanish"]["nombre_seleccion"] = "";
	$fieldLabelsselecciones["Spanish"]["id_colormedia"] = "Id Colormedia";
	$fieldToolTipsselecciones["Spanish"]["id_colormedia"] = "";
	$placeHoldersselecciones["Spanish"]["id_colormedia"] = "";
	$fieldLabelsselecciones["Spanish"]["id_colorpantalon"] = "Id Colorpantalon";
	$fieldToolTipsselecciones["Spanish"]["id_colorpantalon"] = "";
	$placeHoldersselecciones["Spanish"]["id_colorpantalon"] = "";
	$fieldLabelsselecciones["Spanish"]["id_dt"] = "Id Dt";
	$fieldToolTipsselecciones["Spanish"]["id_dt"] = "";
	$placeHoldersselecciones["Spanish"]["id_dt"] = "";
	$fieldLabelsselecciones["Spanish"]["id_colorcamiseta"] = "Id Colorcamiseta";
	$fieldToolTipsselecciones["Spanish"]["id_colorcamiseta"] = "";
	$placeHoldersselecciones["Spanish"]["id_colorcamiseta"] = "";
	$fieldLabelsselecciones["Spanish"]["id_seleccion"] = "Id Seleccion";
	$fieldToolTipsselecciones["Spanish"]["id_seleccion"] = "";
	$placeHoldersselecciones["Spanish"]["id_seleccion"] = "";
	if (count($fieldToolTipsselecciones["Spanish"]))
		$tdataselecciones[".isUseToolTips"] = true;
}


	$tdataselecciones[".NCSearch"] = true;



$tdataselecciones[".shortTableName"] = "selecciones";
$tdataselecciones[".nSecOptions"] = 0;

$tdataselecciones[".mainTableOwnerID"] = "";
$tdataselecciones[".entityType"] = 0;
$tdataselecciones[".connId"] = "fixture_at_localhost";


$tdataselecciones[".strOriginalTableName"] = "selecciones";

	



$tdataselecciones[".showAddInPopup"] = false;

$tdataselecciones[".showEditInPopup"] = false;

$tdataselecciones[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataselecciones[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataselecciones[".listAjax"] = false;
//	temporary
$tdataselecciones[".listAjax"] = false;

	$tdataselecciones[".audit"] = false;

	$tdataselecciones[".locking"] = false;


$pages = $tdataselecciones[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataselecciones[".edit"] = true;
	$tdataselecciones[".afterEditAction"] = 1;
	$tdataselecciones[".closePopupAfterEdit"] = 1;
	$tdataselecciones[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataselecciones[".add"] = true;
$tdataselecciones[".afterAddAction"] = 1;
$tdataselecciones[".closePopupAfterAdd"] = 1;
$tdataselecciones[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataselecciones[".list"] = true;
}



$tdataselecciones[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataselecciones[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataselecciones[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataselecciones[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataselecciones[".printFriendly"] = true;
}



$tdataselecciones[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataselecciones[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataselecciones[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataselecciones[".isUseAjaxSuggest"] = true;

$tdataselecciones[".rowHighlite"] = true;





$tdataselecciones[".ajaxCodeSnippetAdded"] = false;

$tdataselecciones[".buttonsAdded"] = false;

$tdataselecciones[".addPageEvents"] = false;

// use timepicker for search panel
$tdataselecciones[".isUseTimeForSearch"] = false;


$tdataselecciones[".badgeColor"] = "E07878";


$tdataselecciones[".allSearchFields"] = array();
$tdataselecciones[".filterFields"] = array();
$tdataselecciones[".requiredSearchFields"] = array();

$tdataselecciones[".googleLikeFields"] = array();
$tdataselecciones[".googleLikeFields"][] = "nombre_seleccion";
$tdataselecciones[".googleLikeFields"][] = "id_colormedia";
$tdataselecciones[".googleLikeFields"][] = "id_colorpantalon";
$tdataselecciones[".googleLikeFields"][] = "id_dt";
$tdataselecciones[".googleLikeFields"][] = "id_colorcamiseta";
$tdataselecciones[".googleLikeFields"][] = "id_seleccion";



$tdataselecciones[".tableType"] = "list";

$tdataselecciones[".printerPageOrientation"] = 0;
$tdataselecciones[".nPrinterPageScale"] = 100;

$tdataselecciones[".nPrinterSplitRecords"] = 40;

$tdataselecciones[".geocodingEnabled"] = false;










$tdataselecciones[".pageSize"] = 20;

$tdataselecciones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataselecciones[".strOrderBy"] = $tstrOrderBy;

$tdataselecciones[".orderindexes"] = array();


$tdataselecciones[".sqlHead"] = "SELECT nombre_seleccion,  	id_colormedia,  	id_colorpantalon,  	id_dt,  	id_colorcamiseta,  	id_seleccion";
$tdataselecciones[".sqlFrom"] = "FROM selecciones";
$tdataselecciones[".sqlWhereExpr"] = "";
$tdataselecciones[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataselecciones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataselecciones[".arrGroupsPerPage"] = $arrGPP;

$tdataselecciones[".highlightSearchResults"] = true;

$tableKeysselecciones = array();
$tableKeysselecciones[] = "id_seleccion";
$tdataselecciones[".Keys"] = $tableKeysselecciones;


$tdataselecciones[".hideMobileList"] = array();




//	nombre_seleccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "nombre_seleccion";
	$fdata["GoodName"] = "nombre_seleccion";
	$fdata["ownerTable"] = "selecciones";
	$fdata["Label"] = GetFieldLabel("selecciones","nombre_seleccion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nombre_seleccion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre_seleccion";

	
	
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


	$tdataselecciones["nombre_seleccion"] = $fdata;
		$tdataselecciones[".searchableFields"][] = "nombre_seleccion";
//	id_colormedia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_colormedia";
	$fdata["GoodName"] = "id_colormedia";
	$fdata["ownerTable"] = "selecciones";
	$fdata["Label"] = GetFieldLabel("selecciones","id_colormedia");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_colormedia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_colormedia";

	
	
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


	$tdataselecciones["id_colormedia"] = $fdata;
		$tdataselecciones[".searchableFields"][] = "id_colormedia";
//	id_colorpantalon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_colorpantalon";
	$fdata["GoodName"] = "id_colorpantalon";
	$fdata["ownerTable"] = "selecciones";
	$fdata["Label"] = GetFieldLabel("selecciones","id_colorpantalon");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_colorpantalon";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_colorpantalon";

	
	
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


	$tdataselecciones["id_colorpantalon"] = $fdata;
		$tdataselecciones[".searchableFields"][] = "id_colorpantalon";
//	id_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_dt";
	$fdata["GoodName"] = "id_dt";
	$fdata["ownerTable"] = "selecciones";
	$fdata["Label"] = GetFieldLabel("selecciones","id_dt");
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


	$tdataselecciones["id_dt"] = $fdata;
		$tdataselecciones[".searchableFields"][] = "id_dt";
//	id_colorcamiseta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "id_colorcamiseta";
	$fdata["GoodName"] = "id_colorcamiseta";
	$fdata["ownerTable"] = "selecciones";
	$fdata["Label"] = GetFieldLabel("selecciones","id_colorcamiseta");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_colorcamiseta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_colorcamiseta";

	
	
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


	$tdataselecciones["id_colorcamiseta"] = $fdata;
		$tdataselecciones[".searchableFields"][] = "id_colorcamiseta";
//	id_seleccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "id_seleccion";
	$fdata["GoodName"] = "id_seleccion";
	$fdata["ownerTable"] = "selecciones";
	$fdata["Label"] = GetFieldLabel("selecciones","id_seleccion");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_seleccion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_seleccion";

	
	
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


	$tdataselecciones["id_seleccion"] = $fdata;
		$tdataselecciones[".searchableFields"][] = "id_seleccion";


$tables_data["selecciones"]=&$tdataselecciones;
$field_labels["selecciones"] = &$fieldLabelsselecciones;
$fieldToolTips["selecciones"] = &$fieldToolTipsselecciones;
$placeHolders["selecciones"] = &$placeHoldersselecciones;
$page_titles["selecciones"] = &$pageTitlesselecciones;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["selecciones"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["selecciones"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_selecciones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "nombre_seleccion,  	id_colormedia,  	id_colorpantalon,  	id_dt,  	id_colorcamiseta,  	id_seleccion";
$proto0["m_strFrom"] = "FROM selecciones";
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
	"m_strName" => "nombre_seleccion",
	"m_strTable" => "selecciones",
	"m_srcTableName" => "selecciones"
));

$proto6["m_sql"] = "nombre_seleccion";
$proto6["m_srcTableName"] = "selecciones";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_colormedia",
	"m_strTable" => "selecciones",
	"m_srcTableName" => "selecciones"
));

$proto8["m_sql"] = "id_colormedia";
$proto8["m_srcTableName"] = "selecciones";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_colorpantalon",
	"m_strTable" => "selecciones",
	"m_srcTableName" => "selecciones"
));

$proto10["m_sql"] = "id_colorpantalon";
$proto10["m_srcTableName"] = "selecciones";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id_dt",
	"m_strTable" => "selecciones",
	"m_srcTableName" => "selecciones"
));

$proto12["m_sql"] = "id_dt";
$proto12["m_srcTableName"] = "selecciones";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "id_colorcamiseta",
	"m_strTable" => "selecciones",
	"m_srcTableName" => "selecciones"
));

$proto14["m_sql"] = "id_colorcamiseta";
$proto14["m_srcTableName"] = "selecciones";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "id_seleccion",
	"m_strTable" => "selecciones",
	"m_srcTableName" => "selecciones"
));

$proto16["m_sql"] = "id_seleccion";
$proto16["m_srcTableName"] = "selecciones";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "selecciones";
$proto19["m_srcTableName"] = "selecciones";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "nombre_seleccion";
$proto19["m_columns"][] = "id_colormedia";
$proto19["m_columns"][] = "id_colorpantalon";
$proto19["m_columns"][] = "id_dt";
$proto19["m_columns"][] = "id_colorcamiseta";
$proto19["m_columns"][] = "id_seleccion";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "selecciones";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "selecciones";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="selecciones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_selecciones = createSqlQuery_selecciones();


	
		;

						

$tdataselecciones[".sqlquery"] = $queryData_selecciones;



$tableEvents["selecciones"] = new eventsBase;
$tdataselecciones[".hasEvents"] = false;

?>