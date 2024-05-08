<?php
$tdatajugadores = array();
$tdatajugadores[".searchableFields"] = array();
$tdatajugadores[".ShortName"] = "jugadores";
$tdatajugadores[".OwnerID"] = "";
$tdatajugadores[".OriginalTable"] = "jugadores";


$tdatajugadores[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatajugadores[".originalPagesByType"] = $tdatajugadores[".pagesByType"];
$tdatajugadores[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatajugadores[".originalPages"] = $tdatajugadores[".pages"];
$tdatajugadores[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatajugadores[".originalDefaultPages"] = $tdatajugadores[".defaultPages"];

//	field labels
$fieldLabelsjugadores = array();
$fieldToolTipsjugadores = array();
$pageTitlesjugadores = array();
$placeHoldersjugadores = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsjugadores["Spanish"] = array();
	$fieldToolTipsjugadores["Spanish"] = array();
	$placeHoldersjugadores["Spanish"] = array();
	$pageTitlesjugadores["Spanish"] = array();
	$fieldLabelsjugadores["Spanish"]["id_seleccion"] = "Id Seleccion";
	$fieldToolTipsjugadores["Spanish"]["id_seleccion"] = "";
	$placeHoldersjugadores["Spanish"]["id_seleccion"] = "";
	$fieldLabelsjugadores["Spanish"]["apellido_jugador"] = "Apellido Jugador";
	$fieldToolTipsjugadores["Spanish"]["apellido_jugador"] = "";
	$placeHoldersjugadores["Spanish"]["apellido_jugador"] = "";
	$fieldLabelsjugadores["Spanish"]["nombre_jugador"] = "Nombre Jugador";
	$fieldToolTipsjugadores["Spanish"]["nombre_jugador"] = "";
	$placeHoldersjugadores["Spanish"]["nombre_jugador"] = "";
	$fieldLabelsjugadores["Spanish"]["num_camiseta"] = "Num Camiseta";
	$fieldToolTipsjugadores["Spanish"]["num_camiseta"] = "";
	$placeHoldersjugadores["Spanish"]["num_camiseta"] = "";
	$fieldLabelsjugadores["Spanish"]["id_posicion"] = "Id Posicion";
	$fieldToolTipsjugadores["Spanish"]["id_posicion"] = "";
	$placeHoldersjugadores["Spanish"]["id_posicion"] = "";
	$fieldLabelsjugadores["Spanish"]["id_jugador"] = "Id Jugador";
	$fieldToolTipsjugadores["Spanish"]["id_jugador"] = "";
	$placeHoldersjugadores["Spanish"]["id_jugador"] = "";
	if (count($fieldToolTipsjugadores["Spanish"]))
		$tdatajugadores[".isUseToolTips"] = true;
}


	$tdatajugadores[".NCSearch"] = true;



$tdatajugadores[".shortTableName"] = "jugadores";
$tdatajugadores[".nSecOptions"] = 0;

$tdatajugadores[".mainTableOwnerID"] = "";
$tdatajugadores[".entityType"] = 0;
$tdatajugadores[".connId"] = "fixture_at_localhost";


$tdatajugadores[".strOriginalTableName"] = "jugadores";

	



$tdatajugadores[".showAddInPopup"] = false;

$tdatajugadores[".showEditInPopup"] = false;

$tdatajugadores[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatajugadores[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatajugadores[".listAjax"] = false;
//	temporary
$tdatajugadores[".listAjax"] = false;

	$tdatajugadores[".audit"] = false;

	$tdatajugadores[".locking"] = false;


$pages = $tdatajugadores[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatajugadores[".edit"] = true;
	$tdatajugadores[".afterEditAction"] = 1;
	$tdatajugadores[".closePopupAfterEdit"] = 1;
	$tdatajugadores[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatajugadores[".add"] = true;
$tdatajugadores[".afterAddAction"] = 1;
$tdatajugadores[".closePopupAfterAdd"] = 1;
$tdatajugadores[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatajugadores[".list"] = true;
}



$tdatajugadores[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatajugadores[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatajugadores[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatajugadores[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatajugadores[".printFriendly"] = true;
}



$tdatajugadores[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatajugadores[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatajugadores[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatajugadores[".isUseAjaxSuggest"] = true;

$tdatajugadores[".rowHighlite"] = true;





$tdatajugadores[".ajaxCodeSnippetAdded"] = false;

$tdatajugadores[".buttonsAdded"] = false;

$tdatajugadores[".addPageEvents"] = false;

// use timepicker for search panel
$tdatajugadores[".isUseTimeForSearch"] = false;


$tdatajugadores[".badgeColor"] = "DAA520";


$tdatajugadores[".allSearchFields"] = array();
$tdatajugadores[".filterFields"] = array();
$tdatajugadores[".requiredSearchFields"] = array();

$tdatajugadores[".googleLikeFields"] = array();
$tdatajugadores[".googleLikeFields"][] = "id_seleccion";
$tdatajugadores[".googleLikeFields"][] = "apellido_jugador";
$tdatajugadores[".googleLikeFields"][] = "nombre_jugador";
$tdatajugadores[".googleLikeFields"][] = "num_camiseta";
$tdatajugadores[".googleLikeFields"][] = "id_posicion";
$tdatajugadores[".googleLikeFields"][] = "id_jugador";



$tdatajugadores[".tableType"] = "list";

$tdatajugadores[".printerPageOrientation"] = 0;
$tdatajugadores[".nPrinterPageScale"] = 100;

$tdatajugadores[".nPrinterSplitRecords"] = 40;

$tdatajugadores[".geocodingEnabled"] = false;










$tdatajugadores[".pageSize"] = 20;

$tdatajugadores[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatajugadores[".strOrderBy"] = $tstrOrderBy;

$tdatajugadores[".orderindexes"] = array();


$tdatajugadores[".sqlHead"] = "SELECT id_seleccion,  	apellido_jugador,  	nombre_jugador,  	num_camiseta,  	id_posicion,  	id_jugador";
$tdatajugadores[".sqlFrom"] = "FROM jugadores";
$tdatajugadores[".sqlWhereExpr"] = "";
$tdatajugadores[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatajugadores[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatajugadores[".arrGroupsPerPage"] = $arrGPP;

$tdatajugadores[".highlightSearchResults"] = true;

$tableKeysjugadores = array();
$tableKeysjugadores[] = "id_jugador";
$tdatajugadores[".Keys"] = $tableKeysjugadores;


$tdatajugadores[".hideMobileList"] = array();




//	id_seleccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_seleccion";
	$fdata["GoodName"] = "id_seleccion";
	$fdata["ownerTable"] = "jugadores";
	$fdata["Label"] = GetFieldLabel("jugadores","id_seleccion");
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


	$tdatajugadores["id_seleccion"] = $fdata;
		$tdatajugadores[".searchableFields"][] = "id_seleccion";
//	apellido_jugador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "apellido_jugador";
	$fdata["GoodName"] = "apellido_jugador";
	$fdata["ownerTable"] = "jugadores";
	$fdata["Label"] = GetFieldLabel("jugadores","apellido_jugador");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "apellido_jugador";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "apellido_jugador";

	
	
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


	$tdatajugadores["apellido_jugador"] = $fdata;
		$tdatajugadores[".searchableFields"][] = "apellido_jugador";
//	nombre_jugador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nombre_jugador";
	$fdata["GoodName"] = "nombre_jugador";
	$fdata["ownerTable"] = "jugadores";
	$fdata["Label"] = GetFieldLabel("jugadores","nombre_jugador");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nombre_jugador";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre_jugador";

	
	
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


	$tdatajugadores["nombre_jugador"] = $fdata;
		$tdatajugadores[".searchableFields"][] = "nombre_jugador";
//	num_camiseta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "num_camiseta";
	$fdata["GoodName"] = "num_camiseta";
	$fdata["ownerTable"] = "jugadores";
	$fdata["Label"] = GetFieldLabel("jugadores","num_camiseta");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "num_camiseta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "num_camiseta";

	
	
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


	$tdatajugadores["num_camiseta"] = $fdata;
		$tdatajugadores[".searchableFields"][] = "num_camiseta";
//	id_posicion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "id_posicion";
	$fdata["GoodName"] = "id_posicion";
	$fdata["ownerTable"] = "jugadores";
	$fdata["Label"] = GetFieldLabel("jugadores","id_posicion");
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


	$tdatajugadores["id_posicion"] = $fdata;
		$tdatajugadores[".searchableFields"][] = "id_posicion";
//	id_jugador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "id_jugador";
	$fdata["GoodName"] = "id_jugador";
	$fdata["ownerTable"] = "jugadores";
	$fdata["Label"] = GetFieldLabel("jugadores","id_jugador");
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


	$tdatajugadores["id_jugador"] = $fdata;
		$tdatajugadores[".searchableFields"][] = "id_jugador";


$tables_data["jugadores"]=&$tdatajugadores;
$field_labels["jugadores"] = &$fieldLabelsjugadores;
$fieldToolTips["jugadores"] = &$fieldToolTipsjugadores;
$placeHolders["jugadores"] = &$placeHoldersjugadores;
$page_titles["jugadores"] = &$pageTitlesjugadores;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["jugadores"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["jugadores"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_jugadores()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_seleccion,  	apellido_jugador,  	nombre_jugador,  	num_camiseta,  	id_posicion,  	id_jugador";
$proto0["m_strFrom"] = "FROM jugadores";
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
	"m_strName" => "id_seleccion",
	"m_strTable" => "jugadores",
	"m_srcTableName" => "jugadores"
));

$proto6["m_sql"] = "id_seleccion";
$proto6["m_srcTableName"] = "jugadores";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "apellido_jugador",
	"m_strTable" => "jugadores",
	"m_srcTableName" => "jugadores"
));

$proto8["m_sql"] = "apellido_jugador";
$proto8["m_srcTableName"] = "jugadores";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_jugador",
	"m_strTable" => "jugadores",
	"m_srcTableName" => "jugadores"
));

$proto10["m_sql"] = "nombre_jugador";
$proto10["m_srcTableName"] = "jugadores";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "num_camiseta",
	"m_strTable" => "jugadores",
	"m_srcTableName" => "jugadores"
));

$proto12["m_sql"] = "num_camiseta";
$proto12["m_srcTableName"] = "jugadores";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "id_posicion",
	"m_strTable" => "jugadores",
	"m_srcTableName" => "jugadores"
));

$proto14["m_sql"] = "id_posicion";
$proto14["m_srcTableName"] = "jugadores";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "id_jugador",
	"m_strTable" => "jugadores",
	"m_srcTableName" => "jugadores"
));

$proto16["m_sql"] = "id_jugador";
$proto16["m_srcTableName"] = "jugadores";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "jugadores";
$proto19["m_srcTableName"] = "jugadores";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id_seleccion";
$proto19["m_columns"][] = "apellido_jugador";
$proto19["m_columns"][] = "nombre_jugador";
$proto19["m_columns"][] = "num_camiseta";
$proto19["m_columns"][] = "id_posicion";
$proto19["m_columns"][] = "id_jugador";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "jugadores";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "jugadores";
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
$proto0["m_srcTableName"]="jugadores";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_jugadores = createSqlQuery_jugadores();


	
		;

						

$tdatajugadores[".sqlquery"] = $queryData_jugadores;



$tableEvents["jugadores"] = new eventsBase;
$tdatajugadores[".hasEvents"] = false;

?>