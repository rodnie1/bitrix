<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Test");
?><?$APPLICATION->IncludeComponent(
	"bitrix:photogallery.detail.list.ex", 
	"sidebar_widget", 
	array(
		"ADDITIONAL_SIGHTS" => array(
		),
		"BEHAVIOUR" => "SIMPLE",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "sidebar_widget",
		"DATE_TIME_FORMAT" => "m/d/Y",
		"DETAIL_SLIDE_SHOW_URL" => "slide_show.php?SECTION_ID=#SECTION_ID#&ELEMENT_ID=#ELEMENT_ID#",
		"DETAIL_URL" => "detail.php?SECTION_ID=#SECTION_ID#&ELEMENT_ID=#ELEMENT_ID#",
		"DISPLAY_AS_RATING" => "rating",
		"DRAG_SORT" => "Y",
		"ELEMENT_LAST_TYPE" => "none",
		"ELEMENT_SORT_FIELD" => "",
		"ELEMENT_SORT_FIELD1" => "",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER1" => "asc",
		"GALLERY_SIZE" => "",
		"GALLERY_URL" => "gallery.php?USER_ALIAS=#USER_ALIAS#",
		"GROUP_PERMISSIONS" => array(
			0 => "1",
		),
		"IBLOCK_ID" => "15",
		"IBLOCK_TYPE" => "photos",
		"MAX_VOTE" => "5",
		"NAME_TEMPLATE" => "",
		"PAGE_ELEMENTS" => "50",
		"PATH_TO_USER" => "/company/personal/user/#USER_ID#",
		"PICTURES_SIGHT" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"RATING_MAIN_TYPE" => "",
		"SEARCH_URL" => "search.php",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_COMMENTS" => "N",
		"SHOW_LOGIN" => "Y",
		"SHOW_PAGE_NAVIGATION" => "bottom",
		"SHOW_RATING" => "N",
		"SHOW_SHOWS" => "N",
		"THUMBNAIL_SIZE" => "280",
		"USER_ALIAS" => $_REQUEST["USER_ALIAS"],
		"USE_COMMENTS" => "N",
		"USE_DESC_PAGE" => "Y",
		"USE_PERMISSIONS" => "N",
		"VOTE_NAMES" => array(
			0 => "1",
			1 => "2",
			2 => "3",
			3 => "4",
			4 => "5",
			5 => "",
		)
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>