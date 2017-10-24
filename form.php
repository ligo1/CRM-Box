<?php
/**
 * Created by PhpStorm.
 * User: liorgo
 * Date: 18/12/2016
 * Time: 13:39
 */

error_reporting(0);

$owner = $_POST["ownerName"];
$pname = $_POST["promotionName"];
$emailTemplateID = $_POST["emailTemplateID"];
$method = $_POST["method"];

$startDate = $_POST["startDate"];
$endDate = $_POST["endDate"];

$tpp = $_POST["tpp"];
if ($tpp == null) { $tpp = "Off"; }
$vipTest = $_POST["vipTest"];

$brands = $_POST["brands"];
$winkslots = false;

$seg1 = $_POST["seg1"];
$seg2 = $_POST["seg2"];
$seg3 = $_POST["seg3"];
$seg4 = $_POST["seg4"];
$seg1ws = $_POST["seg1ws"];
$seg2ws = $_POST["seg2ws"];
$seg3ws = $_POST["seg3ws"];
$seg4ws = $_POST["seg4ws"];

$abTest = $_POST["abTest"];
$controlGroup = $_POST["controlGroup"];
$controlGroupNumber = $_POST["controlGroupNumber"];

$abTestSliderA = $_POST["abTestSliderA"];
$abTestSliderB = $_POST["abTestSliderB"];
$testAccountA = $_POST["testAccountA"];
$testAccountB = $_POST["testAccountB"];

$playerValueA = $_POST["valuesA"];
$playerValueB = $_POST["valuesB"];

$allValuesA = $_POST["allValuesA"];
$allValuesB = $_POST["allValuesB"];
$vipValuesA = $_POST["vipValuesA"];
$vipValuesB = $_POST["vipValuesB"];
$normA = $_POST["normA"];
$normB = $_POST["normB"];
$phvA = $_POST["phvA"];
$phvB = $_POST["phvB"];
$hvA = $_POST["hvA"];
$hvB = $_POST["hvB"];
$sapphireA = $_POST["sapphireA"];
$sapphireB = $_POST["sapphireB"];
$rubyA = $_POST["rubyA"];
$rubyB = $_POST["rubyB"];
$diamondA = $_POST["diamondA"];
$diamondB = $_POST["diamondB"];



$countriesA = $_POST["countriesA"];
$countriesB = $_POST["countriesB"];

$avgDepositA = $_POST["avgDepositA"];
$avgDepositB = $_POST["avgDepositB"];
$maxDepositA = $_POST["maxDepositA"];
$maxDepositB = $_POST["maxDepositB"];
$segDepositA = $_POST["segDepositA"];
$segDepositB = $_POST["segDepositB"];
$regChallengeA = $_POST["regChallengeA"];
$regChallengeB = $_POST["regChallengeB"];
$otdPromoA = $_POST["otdPromoA"];
$otdPrecentageA = $_POST["otdPercentageA"];
$otdPromoB = $_POST["otdPromoB"];
$otdPrecentageB = $_POST["otdPercentageB"];
$normPromoA = $_POST["normPromoA"];
$normPercentageA = $_POST["normPercentageA"];
$normPromoB = $_POST["normPromoB"];
$normPercentageB = $_POST["normPercentageB"];
$hvPromoA = $_POST["hvPromoA"];
$hvPercentageA = $_POST["hvPercentageA"];
$hvPromoB = $_POST["hvPromoB"];
$hvPercentageB = $_POST["hvPercentageB"];
$sapphirePromoA = $_POST["sapphirePromoA"];
$sapphirePercentageA = $_POST["sapphirePercentageA"];
$sapphirePromoB = $_POST["sapphirePromoB"];
$sapphirePercentageB = $_POST["sapphirePercentageB"];
$rubyPromoA = $_POST["rubyPromoA"];
$rubyPercentageA = $_POST["rubyPercentageA"];
$rubyPromoB = $_POST["rubyPromoB"];
$rubyPercentageB = $_POST["rubyPercentageB"];
$diamondPromoA = $_POST["diamondPromoA"];
$diamondPercentageA = $_POST["diamondPercentageA"];
$diamondPromoB = $_POST["diamondPromoB"];
$diamondPercentageB = $_POST["diamondPercentageB"];
$freeSpinsA = $_POST["freeSpinsA"];
$freeSpinsB = $_POST["freeSpinsB"];
$gameUnitedIDA = $_POST["gameUnitedIDA"];
$gameUnitedIDB = $_POST["gameUnitedIDB"];
$numOfSpinsA = $_POST["numOfSpinsA"];
$numOfSpinsB = $_POST["numOfSpinsB"];
$maxWinA = $_POST["maxWinA"];
$maxWinB = $_POST["maxWinB"];
$minWinA = $_POST["minWinA"];
$minWinB = $_POST["minWinB"];
$categoryIDA = $_POST["categoryIDA"];
$categoryIDB = $_POST["categoryIDB"];
$eventIDA = $_POST["eventIDA"];
$eventIDB = $_POST["eventIDB"];
$daysDurationA = $_POST["daysDurationA"];
$daysDurationB = $_POST["daysDurationB"];
$paramsA = $_POST["paramsA"];
$paramsB = $_POST["paramsB"];

$param1A = $_POST["param1A"];
$value1A = $_POST["value1A"];
$param2A = $_POST["param2A"];
$value2A = $_POST["value2A"];
$param3A = $_POST["param3A"];
$value3A = $_POST["value3A"];
$param4A = $_POST["param4A"];
$value4A = $_POST["value4A"];
$param5A = $_POST["param5A"];
$value5A = $_POST["value5A"];
$param6A = $_POST["param6A"];
$value6A = $_POST["value6A"];
$param7A = $_POST["param7A"];
$value7A = $_POST["value7A"];
$param8A = $_POST["param8A"];
$value8A = $_POST["value8A"];
$param9A = $_POST["param9A"];
$value9A = $_POST["value9A"];
$param10A = $_POST["param10A"];
$value10A = $_POST["value10A"];
$param11A = $_POST["param11A"];
$value11A = $_POST["value11A"];
$param12A = $_POST["param12A"];
$value12A = $_POST["value12A"];
$param13A = $_POST["param13A"];
$value13A = $_POST["value13A"];

$param1B = $_POST["param1B"];
$value1B = $_POST["value1B"];
$param2B = $_POST["param2B"];
$value2B = $_POST["value2B"];
$param3B = $_POST["param3B"];
$value3B = $_POST["value3B"];
$param4B = $_POST["param4B"];
$value4B = $_POST["value4B"];
$param5B = $_POST["param5B"];
$value5B = $_POST["value5B"];
$param6B = $_POST["param6B"];
$value6B = $_POST["value6B"];
$param7B = $_POST["param7B"];
$value7B = $_POST["value7B"];
$param8B = $_POST["param8B"];
$value8B = $_POST["value8B"];
$param9B = $_POST["param9B"];
$value9B = $_POST["value9B"];
$param10B = $_POST["param10B"];
$value10B = $_POST["value10B"];
$param11B = $_POST["param11B"];
$value11B = $_POST["value11B"];
$param12B = $_POST["param12B"];
$value12B = $_POST["value12B"];
$param13B = $_POST["param13B"];
$value13B = $_POST["value13B"];

$smsWinkbingoA = $_POST["smsWinkbingoA"];
$smsWinkbingoB = $_POST["smsWinkbingoB"];
$smsLadiesA = $_POST["smsLadiesA"];
$smsLadiesB = $_POST["smsLadiesB"];
$smsPoshA = $_POST["smsPoshA"];
$smsPoshB = $_POST["smsPoshB"];
$smsTastyA = $_POST["smsTastyA"];
$smsTastyB = $_POST["smsTastyB"];
$smsRedbusA = $_POST["smsRedbusA"];
$smsRedbusB = $_POST["smsRedbusB"];
$smsStreetA = $_POST["smsStreetA"];
$smsStreetB = $_POST["smsStreetB"];
$smsLoftA = $_POST["smsLoftA"];
$smsLoftB = $_POST["smsLoftB"];
$smsWinkslotsA = $_POST["smsWinkslotsA"];
$smsWinkslotsB = $_POST["smsWinkslotsB"];
$smsAppyA = $_POST["smsAppyA"];
$smsAppyB = $_POST["smsAppyB"];

?>

<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CRMBox - Promotion Control Center</title>

    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/foundation6.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/foundation-datepicker.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-animate.js"></script>

</head>

<body>

<div class="header-wrapper">
    <header class="header">
        <!-- <h1 class="headline">Promotions Control Center<small><cite>by ligo</cite></small></h1> -->
        <img class="logo" src="images/logo.png" />
        <ul class="header-subnav">
            <li><a href="index.php">New Promotion</a></li>
            <li><a href="form.php" class="is-active">Output</a></li>
            <li><a href="adventureworks_demo_pdo.php">Demo</a></li>
        </ul>
    </header>
</div>

<div class="row">
    <div class="large-12 medium-12 columns">
        <h1><?php echo $pname;?><small><cite>by <?php echo $owner;?></cite></small></h1>
        <p>
            <strong>E-Mail Template ID:</strong> <?php echo $emailTemplateID; ?><br>

            <strong>Starting:</strong> <?php echo $startDate; ?> <strong>Ending:</strong> <?php echo $endDate; ?><br/>

            <strong>Communication Methods:</strong> <?php foreach ($method as $by){ echo $by." "; } ?><br/>

            <strong>TPP:</strong> <?php echo $tpp; ?><br/>

            <?php if ($vipTest != null) { ?> <strong>VIP tests</strong> is On <?php } ?>

            <strong>Brands:</strong>
                <?php foreach ($brands as $brand) {
                    if ($brand == "All Brands") {
                        $winkslots = true;
                        echo "All Brands";
                        break;
                    }
                    elseif ($brand == "Main Brands") {
                        $winkslots = true;
                        echo "Main Brands";
                        break;
                    }
                    elseif ($brand == "Small Brands"){
                        $winkslots = true;
                        echo "Small Brands";
                        break;
                    }
                    else {
                        if($brand == "Winkslots") { $winkslots = true; }
                        echo $brand . " ";
                    }
                } ?> <br/>

            <strong>Segmentaions:</strong>
                <?php echo $seg1; ?>
                <?php if($seg1 == "Active" || $seg1 == "Inactive" ) { echo $seg2; } ?>
                <?php if($seg2 == "STD") { echo $seg3 ?> <?php echo $seg4; } ?><br>

            <?php if ($winkslots) { ?>
                <strong>Winkslots Segmentaions:</strong>
                <?php echo $seg1ws; ?>
                <?php if($seg1ws == "Active" || $seg1ws == "Inactive" ) { echo $seg2ws; } ?>
                <?php if($seg2ws == "STD") { echo $seg3ws ?> <?php echo $seg4ws; } ?><br>
            <?php } ?>

            <?php if($abTest) { ?>
                <strong>A/B testing is On. </strong>
                The devision is <strong>A:</strong><?php echo $abTestSliderA; ?>% <strong>B:</strong><?php echo $abTestSliderB; ?>%<br>
            <?php } ?>

            <?php if($controlGroup) { ?><strong>Control group</strong> is set to: <strong><?php echo $controlGroupNumber; ?>%</strong><br><?php } ?>

            <?php if ($testAccountA != null) { ?><strong>Test Accounts</strong> is On.<br><?php } ?>

            <strong>Player Value:</strong>
                <?php foreach ($playerValueA as $valueA) { ?>
                    <?php if ($valueA == "allValues") { ?> All Players
                    <?php } elseif ($valueA == "vipValues") { ?> VIP Players
                    <?php } else { echo $valueA . " "; } ?>
                <?php } ?><br>

            Send to <?php echo $countriesA; ?>.<br>

            Average Deposit: <?php echo $avgDepositA; ?><br>

            Max Deposit: <?php echo $maxDepositA; ?><br>

            Free Spins: <?php echo $freeSpinsA; ?><br>

            <?php if ($freeSpinsA != null) { ?>
                <?php if ($gameUnitedIDA != null) { ?>
                    Game United ID: <?php echo $gameUnitedIDA; ?>
                <?php } ?>
                <?php if($numOfSpinsA != null) { ?>
                    Num of Spins: <?php echo $numOfSpinsA; ?>
                <?php } ?>
                <?php if ($maxWinA != null) { ?>
                    Max Win: <?php echo $maxWinA; ?>
                <?php } ?>
                <?php if ($minWinA != null) { ?>
                    Min Win: <?php echo $minWinA; ?>
                <?php } ?>
                <?php if ($categoryIDA != null) { ?>
                    Category ID: <?php echo $categoryIDA; ?>
                <?php } ?>
                <?php if ($eventIDA != null) { ?>
                    Event ID: <?php echo $eventIDA; ?>
                <?php } ?>
                <?php if ($daysDurationA != null) { ?>
                    Free Spins Days Duration: <?php echo $daysDurationA; ?>
                <?php } ?>
            <?php } ?>
        </p>
    </div>
</div>
</body>
</html>

