<?php

error_reporting(0);

header("Content-type: application/vnd.ms-excel");

$owner = $_POST["ownerName"];
$pname = $_POST["PromotionName"];
header("Content-Disposition: attachment;Filename=$pname - by $owner.xls");


$all = $_POST;
unset($all['ownerName']);

$keys = array_keys($all);
$values = array_values($all);

if (array_key_exists('userName', $_POST)) {}

//print_r($keys);
//print_r($values);
//print_r($_POST);

// ---------------------------------------------------------

$keys = array('PromotionName','DT_Date_ID','OneTimeIntro','IntroEndDate','BrandName','Brand_ID','ClosedPop','ClosedPopLink','Segment_desc','Segment_ID','isSendingEmail','TemplateID','AB_Group','GroupSize','ControlPercent','BasePop','Gender','Countries','includeTestAccounts','includeInChurnProtocol','isSendingSMS','SMS_ScheduleDay_OffSet','SMS_ScheduleTime','SMS_TemplateID_Wink','SMS_TemplateID_Ladies','SMS_TemplateID_Posh','SMS_TemplateID_Tasty','SMS_TemplateID_RedBus','SMS_TemplateID_BingoStreet','SMS_TemplateID_BingoLoft','SMS_TemplateID_Appy','SMS_TemplateID_SpinDipity','SMS_TemplateID_WinkSlots','IsSendingVBS','VBS_OfferEndDate','VBS_CampaignID_Wink','VBS_CampaignID_Ladies','VBS_CampaignID_Posh','VBS_CampaignID_Tasty','VBS_CampaignID_RedBus','VBS_CampaignID_BingoStreet','VBS_CampaignID_BingoLoft','VBS_CampaignID_Appy','VBS_CampaignID_SpinDipity','VBS_CampaignID_WinkSlots','SendingBonusGroup','GroupTitle','AllocateBonuses','BonusGameId','InitialAmount','DaysToExpiration','Accumulated','AccumulatedCapping','UsingAvgDep','UsingMaxDep','UsingSegmentedDep','isChallengedDep','SegmentedDep_OTD_Promocode','SegmentedDep_Norm_Promocode','SegmentedDep_HV_Promocode','SegmentedDep_Sapphire_Promocode','SegmentedDep_Ruby_Promocode','SegmentedDep_Diamond_Promocode','SegmentedDep_OTD_BonusPer','SegmentedDep_Norm_BonusPer','SegmentedDep_HV_BonusPer','SegmentedDep_Sapphire_BonusPer','SegmentedDep_Ruby_BonusPer','SegmentedDep_Diamond_BonusPer','sendingFS','GameUnitedId','NumOfSpins','MaxWin','MinWin','CategoryID','EventID','FS_Duration','SendAnyway','ExcludeAffiliatesCPA','ParamName01','ParamValue01','ParamName02','ParamValue02','ParamName03','ParamValue03','ParamName04','ParamValue04','ParamName05','ParamValue05','ParamName06','ParamValue06','ParamName07','ParamValue07','ParamName08','ParamValue08','ParamName09','ParamValue09','ParamName10','ParamValue10','ParamName11','ParamValue11','ParamName12','ParamValue12','ParamName13','ParamValue13','ParamName14','ParamValue14','ParamName15','ParamValue15','ParamName26','ParamValue26','ParamName27','ParamValue27','ParamName28','ParamValue28','ParamName29','ParamValue29','ParamName30','ParamValue30','ParamName31','ParamValue31','ParamName32','ParamValue32','ParamName33','ParamValue33','ParamName34','ParamValue34','ParamName35','ParamValue35','ParamName36','ParamValue36','ParamName37','ParamValue37','ParamName38','ParamValue38','ParamName39','ParamValue39','ParamName40','ParamValue40');
$keysForB = array('PromotionName','DT_Date_ID','OneTimeIntro','IntroEndDate','BrandName','Brand_ID','ClosedPop','ClosedPopLink','Segment_desc','Segment_ID','b--isSendingEmail','b--TemplateID','AB_Group','b--GroupSize','ControlPercent','b--BasePop','Gender','b--Countries','b--includeTestAccounts','includeInChurnProtocol','b--isSendingSMS','b--SMS_ScheduleDay_OffSet','b--SMS_ScheduleTime','b--SMS_TemplateID_Wink','b--SMS_TemplateID_Ladies','b--SMS_TemplateID_Posh','b--SMS_TemplateID_Tasty','b--SMS_TemplateID_RedBus','b--SMS_TemplateID_BingoStreet','b--SMS_TemplateID_BingoLoft','b--SMS_TemplateID_Appy','b--SMS_TemplateID_SpinDipity','b--SMS_TemplateID_WinkSlots','b--IsSendingVBS','b--VBS_OfferEndDate','b--VBS_CampaignID_Wink','b--VBS_CampaignID_Ladies','b--VBS_CampaignID_Posh','b--VBS_CampaignID_Tasty','b--VBS_CampaignID_RedBus','b--VBS_CampaignID_BingoStreet','b--VBS_CampaignID_BingoLoft','b--VBS_CampaignID_Appy','b--VBS_CampaignID_SpinDipity','b--VBS_CampaignID_WinkSlots','b--SendingBonusGroup','b--GroupTitle','b--AllocateBonuses','b--BonusGameId','b--InitialAmount','b--DaysToExpiration','b--Accumulated','b--AccumulatedCapping','b--UsingAvgDep','b--UsingMaxDep','b--UsingSegmentedDep','b--isChallengedDep','b--SegmentedDep_OTD_Promocode','b--SegmentedDep_Norm_Promocode','b--SegmentedDep_HV_Promocode','b--SegmentedDep_Sapphire_Promocode','b--SegmentedDep_Ruby_Promocode','b--SegmentedDep_Diamond_Promocode','SegmentedDep_OTD_BonusPer','SegmentedDep_Norm_BonusPer','SegmentedDep_HV_BonusPer','SegmentedDep_Sapphire_BonusPer','SegmentedDep_Ruby_BonusPer','SegmentedDep_Diamond_BonusPer','b--sendingFS','b--GameUnitedId','b--NumOfSpins','b--MaxWin','b--MinWin','b--CategoryID','b--EventID','b--FS_Duration','SendAnyway','ExcludeAffiliatesCPA','b--ParamName01','b--ParamValue01','b--ParamName02','b--ParamValue02','b--ParamName03','b--ParamValue03','b--ParamName04','b--ParamValue04','b--ParamName05','b--ParamValue05','b--ParamName06','b--ParamValue06','b--ParamName07','b--ParamValue07','b--ParamName08','b--ParamValue08','b--ParamName09','b--ParamValue09','b--ParamName10','b--ParamValue10','b--ParamName11','b--ParamValue11','b--ParamName12','b--ParamValue12','b--ParamName13','b--ParamValue13','b--ParamName14','b--ParamValue14','b--ParamName15','b--ParamValue15','b--ParamName26','b--ParamValue26','b--ParamName27','b--ParamValue27','b--ParamName28','b--ParamValue28','b--ParamName29','b--ParamValue29','b--ParamName30','b--ParamValue30','b--ParamName31','b--ParamValue31','b--ParamName32','b--ParamValue32','b--ParamName33','b--ParamValue33','b--ParamName34','b--ParamValue34','b--ParamName35','b--ParamValue35','b--ParamName36','b--ParamValue36','b--ParamName37','b--ParamValue37','b--ParamName38','b--ParamValue38','b--ParamName39','b--ParamValue39','b--ParamName40','b--ParamValue40');
$values = array();
$valuesForB = array();

// Handle brands
$brands = $_POST["brands"];
$numItems = count($brands);
$winkslots = false;
$i = 0;

foreach ($brands as $brand) {
    if($numItems == 1) { $b = $brand; }
    if($brand == "Winkslots") { $winkslots = true; }
    if(++$i === $numItems) {
        $printBrands .= $brand;
    }
    else {
        $printBrands .= $brand . ",";
    }
}

switch($b) {
    case "Winkbingo":
        $brandsId = 1106;
        break;
    case "888Ladies":
        $brandsId = 9;
        break;
    case "Posh":
        $brandsId = 1128;
        break;
    case "Tasty":
        $brandsId = 1152;
        break;
    case "Redbus":
        $brandsId = 1156;
        break;
    case "Street":
        $brandsId = 1216;
        break;
    case "Loft":
        $brandsId = 1205;
        break;
    case "Appy":
        $brandsId = 0;
        break;
    case "Winkslots":
        $brandsId = 1303;
        break;
    default:
        $brandsId = 999;
        break;
}

// Handle segmentations
$segment1 = $_POST["seg1"];
$segment2 = $_POST["seg2"];
$segment3 = $_POST["seg3"];
$segment4 = $_POST["seg4"];

if ($segment4 != "All") {
    if ($segment3 != "All") {
        $segmentationDesc = $segment1." ".$segment2." ".$segment3." ".$segment4;
    }
    else {
        $segmentationDesc = $segment1." ".$segment2;
    }
}
else {
    $segmentationDesc = $segment1." ".$segment2." ".$segment3;
}

if ($segment1 == "Active") {
    if ($segment2 == "STD") {
        if (($segment3 == "IG" || $segment3 == "Bingo") && $segment4 == "All") {
            $segmentationId = 'Z';
        }
        else {
            $segmentationId = 'A';
        }
    }
    elseif ($segment2 == "OTD") {
        $segmentationId = 'B';
    }
    else {
        $segmentationId = 'Z'; // All Active
    }
}
elseif ($segment1 == "Inactive") {
    if ($segment2 == "STD") {
        if (($segment3 == "IG" || $segment3 == "Bingo") && $segment4 == "All") {
            $segmentationId = 'Y';
        }
        else {
            $segmentationId = 'D';
        }
    }
    elseif ($segment2 == "OTD") {
        $segmentationId = 'E';
    }
    else {
        $segmentationId = 'Y'; // All Inactive
    }
}
else {
    $segmentationId = 'C';
}

if ($segment2 == "STD") {
    if ($segment3 == "IG") {
        $segmentationId .= '.a';
    } elseif ($segment3 == "Bingo") {
        $segmentationId .= '.b';
    }

    if ($segment3 != "All") {
        if ($segment4 == "with Mobile") {
            $segmentationId .= '.1';
        } elseif ($segment4 == "PC only") {
            $segmentationId .= '.2';
        }
    }
}


// Handle AB Test
if ($_POST["AB_Group"] != null) { $doAbTest = true; } else { $doAbTest = false; }
if ($_POST["controlGroup"] != null) { $control = true; } else { $control = false; }

foreach ($keys as $key => $val) {
    if ($val == "BrandName") {
        $values[] = $printBrands;
    }
    elseif ($val == "Brand_ID") {
        $values[] = $brandsId;
    }
    elseif ($val == "Segment_desc") {
        $values[] = $segmentationDesc;
    }
    elseif ($val == "Segment_ID") {
        $values[] = $segmentationId;
    }
    elseif ($val == "AB_Group") {
        $values[] = 'A';
    }
    elseif ($val == "GroupSize" && $doAbTest == false) {
        $values[] = '100';
    }
    elseif ($val == "ControlPercent" && $control == false) {
        $values[] = '0';
    }
    elseif ($_POST[$val] == 'on'){
        $values[] = '1';
    }
    elseif ($_POST[$val] == '' && $val == "SegmentedDep_OTD_Promocode" || $val == "SegmentedDep_Norm_Promocode" || $val == "SegmentedDep_HV_Promocode" || $val == "SegmentedDep_Sapphire_Promocode" || $val == "SegmentedDep_Ruby_Promocode" || $val == "SegmentedDep_Diamond_Promocode"){
        $values[] = 'na';
    }
    elseif ($_POST[$val] == ''){
        $values[] = '0';
    }
    else {
        $values[] = $_POST[$val];
    }
}

if ($doAbTest) {
    foreach ($keysForB as $key => $val) {
        if ($val == "BrandName") {
            $valuesForB[] = $printBrands;
        }
        elseif ($val == "Segment_desc") {
            $valuesForB[] = $segmentationDesc;
        }
        elseif ($val == "Segment_ID") {
            $valuesForB[] = $segmentationId;
        }
        elseif ($val == "AB_Group") {
            $valuesForB[] = 'B';
        }
        elseif ($val == "ControlPercent" && $control == false) {
            $valuesForB[] = '0';
        }
        elseif ($_POST[$val] == 'on'){
            $valuesForB[] = '1';
        }
        elseif ($_POST[$val] == '' && $val == "b--SegmentedDep_OTD_Promocode" || $val == "b--SegmentedDep_Norm_Promocode" || $val == "b--SegmentedDep_HV_Promocode" || $val == "b--SegmentedDep_Sapphire_Promocode" || $val == "b--SegmentedDep_Ruby_Promocode" || $val == "b--SegmentedDep_Diamond_Promocode"){
            $valuesForB[] = 'na';
        }
        elseif ($_POST[$val] == ''){
            $valuesForB[] = '0';
        }
        else {
            $valuesForB[] = $_POST[$val];
        }
    }
}

require_once "Classes/PHPExcel.php";

$objPHPExcel = new PHPExcel();

//$objPHPExcel->getActiveSheet()->setCellValue('A1', 'Owner');
//$objPHPExcel->getActiveSheet()->setCellValue('B1', 'Promotion Name');
//$objPHPExcel->getActiveSheet()->setCellValue('A2', $owner);
//$objPHPExcel->getActiveSheet()->setCellValue('B2', $pname);

//$objPHPExcel->getActiveSheet()->fromArray($keys, NULL, 'A1');
//$objPHPExcel->getActiveSheet()->fromArray($values, NULL, 'A2');

//$objPHPExcel->getActiveSheet()->fromArray(array_keys($myKeys), NULL, 'A1');
//$objPHPExcel->getActiveSheet()->fromArray(array_values($myKeys), NULL, 'A2');

$objPHPExcel->getActiveSheet()->fromArray($keys, NULL, 'A1');
$objPHPExcel->getActiveSheet()->fromArray($values, NULL, 'A2');
if ($_POST["AB_Group"] != null) {
    $objPHPExcel->getActiveSheet()->fromArray($valuesForB, NULL, 'A3');
}

for($col = 'A'; $col !== 'EJ'; $col++) {
    $objPHPExcel->getActiveSheet()
        ->getColumnDimension($col)
        ->setAutoSize(true);
}

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');

?>