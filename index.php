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

    <script src="js/functions.js"></script>

    <script>
        myApp = angular.module('ngAnimate', []);
        myApp.controller('main', function($scope) {

            $scope.winkslotsAlert = function() {
                $mdDialog.show(
                    $mdDialog.alert()
                        .clickOutsideToClose(true)
                        .title('Opening from offscreen')
                        .textContent('Closing to offscreen')
                        .ariaLabel('Offscreen Demo')
                        .ok('Amazing!')
                        // Or you can specify the rect to do the transition from
                        .openFrom({
                            top: -50,
                            width: 30,
                            height: 80
                        })
                        .closeTo({
                            left: 1500
                        })
                );
            };


            $scope.obj = {hv: false};
            $scope.obj = {hvB: false};
            $scope.obj = {sapphire: false};
            $scope.obj = {sapphireB: false};
            $scope.obj = {ruby: false};
            $scope.obj = {rubyB: false};
            $scope.obj = {diamond: false};
            $scope.obj = {diamondB: false};

            $scope.obj = {segDeposit: false};
            $scope.obj = {segDepositB: false};
        });
    </script>

</head>

<body ng-app="ngAnimate">

<div id="back-top">
    <a href="#"> BACK TO TOP </a>
</div>

<div class="header-wrapper">
    <header class="header">
        <!-- <h1 class="headline">Promotions Control Center<small><cite>by ligo</cite></small></h1> -->
        <img class="logo" src="images/logo.png" />
        <ul class="header-subnav">
            <li><a href="index.php" class="is-active">New Promotion</a></li>
            <li><a href="#">Output</a></li>
            <li><a href="#">Demo</a></li>
            <img id="save-form" class="save-button" name="Save" src="images/save.png" onclick="javascript:save()" title="Save your work!">
        </ul>
    </header>
</div>

<div id="topContent" class="row" ng-controller="main">
    <div class="large-12 medium-12 columns">

        <form id="crmForm" name="newPromotionForm" action="test.php" method="POST" onsubmit="return checkForm(this);">

            <hr class="hr-text" data-content="General">

            <!-- Owner , P.name , Method , Churn -->
            <div class="row">
                <div class="large-3 medium-3 columns">
                    <label>Owner Name</label>
                    <input name="ownerName" type="text" ng-model="owner"/>
                </div>
                <div class="large-3 medium-3 columns">
                    <label>Promotion Name
                        <input name="PromotionName" type="text"  ng-model="name" />
                    </label>
                </div>
                <div class="large-3 medium-3 columns">
                    <div class="large-6 medium-6 columns">
                        <label>Churn Players</label>
                        <div class="switch round">
                            <input name="includeInChurnProtocol" id="churn" type="checkbox" ng-model="churn">
                            <label for="churn">
                                <span class="switch-on">ON</span>
                                <span class="switch-off">OFF</span>
                            </label>
                        </div>
                    </div>
                    <div class="large-6 medium-6 columns" ng-if="churn">
                        <label>Password
                            <input type="password" name="churnPassword">
                        </label>
                    </div>
                </div>
            </div>

            <!-- Dates , TPP , VIP Tests , VIP Tests -->
            <div class="row">
                <div class="large-3 medium-3 columns">
                    <label>Start Date</label>
                    <input name="DT_Date_ID" type="text" class="span2" id="dpd1" placeholder="Click here to choose date" ng-model="startDate">
                </div>
                <div class="large-3 medium-3 columns">
                    <label data-tooltip title="Enter promotion end date if oneTimeIntro flag is off. Intro will be send every day between start date and end date, Congrats will be over 3 days after the end date">End Date</label>
                    <input name="IntroEndDate" type="text" class="span2" id="dpd2" placeholder="Click here to choose date" ng-model="endDate">
                </div>
                <div class="large-3 medium-3 columns" ng-init="oneTimeIntro = true">
                    <label data-tooltip title="Sending to population daily delta">One Time Intro</label>
                    <div class="switch round">
                        <input name="OneTimeIntro" id="oneTimeIntro" type="checkbox" ng-model="oneTimeIntro" value="1">
                        <label for="oneTimeIntro">
                            <span class="switch-on">ON</span>
                            <span class="switch-off">OFF</span>
                        </label>
                    </div>
                </div>
                <div class="large-3 medium-3 columns end">
                    <div class="large-6 medium-6 columns" ng-init="tpp = true">
                        <label data-tooltip aria-haspopup="true" title="Touch Point Policy - By default is 'On', means that the email will not be sent to players who recieve a protocol email in the same day. Turn the switch 'Off' if you want to send anyway (Usually when sending an operational email)">TPP</label>
                        <fieldset tabindex="0" class="switch round redAndGreenSwitcher">
                            <input name="SendAnyway" id="tpp" class="switch-input" type="checkbox" ng-model="tpp" value="1">
                            <label for="tpp" class="switch-paddle">
                                <span class="switch-on">ON</span>
                                <span class="switch-off">OFF</span>
                            </label>
                        </fieldset>
                    </div>
                    <div class="large-6 medium-6 columns">
                        <label>VIP Tests</label>
                        <div class="switch round">
                            <input name="vipTest" id="vipTests" type="checkbox" ng-model="vipTests" value="1">
                            <label for="vipTests">
                                <span class="switch-on">ON</span>
                                <span class="switch-off">OFF</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="hr-text" data-content="Population">

            <!-- Brands, Close Population -->
            <div class="row collapse">
                <div class="large-6 medium-6 columns" ng-init="allBrands = true;">
                    <label>Brands</label>
                    <!-- <input name="brands[]" value="All Brands" id="allBrands" type="checkbox" ng-model="allBrands"><label data-tooltip aria-haspopup="true" title="Winkbingo | 888Ladies Poshbingo | Tastybingo Redbus | Bingostreet Bingoloft | Winkslots Bingoappy" for="allBrands">All Brands</label>-->
                    <!-- <input name="brands[]" value="Main Brands" id="mainBrands" type="checkbox" ng-model="mainBrands"><label data-tooltip aria-haspopup="true" title="Winkbingo | 888Ladies" for="mainBrands">Main Brands</label> -->
                    <!-- <input name="brands[]" value="Small Brands" id="smallBrands" type="checkbox" ng-model="smallBrands"><label data-tooltip aria-haspopup="true" title="Poshbingo | Tastybingo Redbus | Bingostreet Bingoloft | Bingoappy" for="smallBrands">Small Brands</label> -->
                    <!-- <div id="brands" ng-if="!allBrands && !mainBrands && !smallBrands" class="animate-if"> -->
                    <div id="brands">
                        <input name="brands[]" value="Winkbingo" id="wink" class="allBrands mainBrands" type="checkbox" ng-model="winkbingo"><label for="wink">Wink</label>
                        <input name="brands[]" value="888Ladies" id="ladies" class="allBrands mainBrands" type="checkbox" ng-model="ladies"><label for="ladies">888Ladies</label>
                        <input name="brands[]" value="Posh" id="posh" class="allBrands smallBrands" type="checkbox" ng-model="posh"><label for="posh">Posh</label>
                        <input name="brands[]" value="Tasty" id="tasty" class="allBrands smallBrands" type="checkbox" ng-model="tasty"><label for="tasty">Tasty</label>
                        <input name="brands[]" value="Redbus" id="redbus" class="allBrands smallBrands" type="checkbox" ng-model="redbus"><label for="redbus">Red Bus</label>
                        <input name="brands[]" value="Street" id="street" class="allBrands smallBrands" type="checkbox" ng-model="street"><label for="street">Bingo Street</label>
                        <br>
                        <input name="brands[]" value="Loft" id="loft" class="allBrands smallBrands" type="checkbox" ng-model="loft"><label for="loft">Bingo Loft</label>
                        <input name="brands[]" value="Appy" id="appy" class="allBrands smallBrands" type="checkbox" ng-model="appy"><label for="appy">Bingo Appy</label>
                        <input name="brands[]" value="Winkslots" id="slots" class="allBrands" type="checkbox" ng-model="winkslots"><label for="slots">Wink Slots</label>
                    </div>
                    <button type="button" id="selectAllBrands" class="small button" data-tooltip aria-haspopup="true" title="Winkbingo | 888Ladies Poshbingo | Tastybingo Redbus | Bingostreet Bingoloft | Winkslots Bingoappy" style="color: #fff;">Select All Brands</button>
                    <button type="button" id="selectSmallBrands" class="small button" data-tooltip aria-haspopup="true" title="Poshbingo | Tastybingo Redbus | Bingostreet Bingoloft | Winkslots Bingoappy" style="color: #fff;">Select Small Brands</button>
                </div>
                <div class="large-6 medium-6 columns">
                    <div class="large-3 medium-3 columns">
                        <label>Affiliate CPA</label>
                        <div class="switch round">
                            <input name="ExcludeAffiliatesCPA" id="affCPA" type="checkbox" ng-model="affCPA" value="1">
                            <label for="affCPA">
                                <span class="switch-on">ON</span>
                                <span class="switch-off">OFF</span>
                            </label>
                        </div>
                    </div>
                    <div class="large-3 medium-3 columns end">
                        <label data-tooltip title="Send promotion to a close group from Excel file">Close Population</label>
                        <div class="switch round">
                            <input name="ClosedPop" id="closePop" type="checkbox" ng-model="closePop">
                            <label for="closePop">
                                <span class="switch-on">ON</span>
                                <span class="switch-off">OFF</span>
                            </label>
                        </div>
                    </div>
                    <div class="large-6 medium-6 columns" ng-if="closePop">
                        <label>Link
                            <input name="ClosedPopLink" type="text">
                        </label>
                    </div>
                </div>
            </div>

            <label>Segmentation</label>
            <!-- Segmentation -->
            <div class="row">
                <div class="large-3 medium-3 columns">
                    <select id="seg1" name="seg1" ng-model="seg1">
                        <option disabled  value>-- Please select an option --</option>
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                        <option value="NF">NF</option>
                    </select>
                </div>
                <div ng-show="seg1=='Inactive' || seg1=='Active'">
                    <div class="large-3 medium-3 columns">
                        <select name="seg2" ng-model="seg2">
                            <option disabled  value>-- Please select an option --</option>
                            <option value="All">All</option>
                            <option value="STD">STD</option>
                            <option value="OTD">OTD</option>
                        </select>
                    </div>
                    <div ng-show="seg2=='STD'">
                        <div class="large-3 medium-3 columns">
                            <label></label>
                            <select id="segmentSelection3" name="seg3" ng-model="seg3" onchange="segmentSelect3()">
                                <option disabled  value>-- Please select an option --</option>
                                <option value="All">All</option>
                                <option value="Bingo" ng-show="winkbingo || ladies || posh || redbus || tasty || street || loft || appy">Bingo</option>
                                <option value="IG">IG</option>
                                <option value="Offering Mix" ng-show="winkbingo || ladies || posh || redbus || tasty || street || loft || appy">Offering Mix</option>
                            </select>
                        </div>
                        <div ng-show="seg3=='Bingo' || seg3=='IG' || seg3=='Offering Mix'">
                            <div class="large-3 medium-3 columns">
                                <label></label>
                                <select name="seg4">
                                    <option disabled  value>-- Please select an option --</option>
                                    <option value="All" ng-show="winkbingo || ladies || posh || redbus || tasty || street || loft || appy">All</option>
                                    <option value="PC only">PC</option>
                                    <option value="with Mobile">Mobile</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- A/B Testing , Control Group -->
            <div class="row">
                <div class="large-3 medium-3 columns">
                    <label>Gender</label>
                    <select name="Gender" ng-model="gender">
                        <option disabled  value>-- Please select an option --</option>
                        <option value="All">All</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="large-2 medium-2 columns large-offset-1 medium-offset-1">
                    <label>A/B Testing</label>
                    <div class="switch round">
                        <input name="AB_Group" id="abTest" type="checkbox">
                        <label for="abTest">
                            <span class="switch-on">ON</span>
                            <span class="switch-off">OFF</span>
                        </label>
                    </div>
                </div>
                <div class="large-6 medium-6 columns">
                    <label>Control Group</label>
                    <div class="large-2 medium-2 columns" style="padding-left: 0;">
                        <div class="switch round">
                            <input name="controlGroup" id="controlGroup" type="checkbox" ng-model="control">
                            <label for="controlGroup">
                                <span class="switch-on">ON</span>
                                <span class="switch-off">OFF</span>
                            </label>
                        </div>
                    </div>
                    <div class="large-10 medium-10 columns" ng-show="control">
                        <div class="large-3 small-3 columns">
                            <input name="ControlPercent" type="number" id="controlSlider">
                        </div>
                        <div class="large-9 small-9 columns end">
                            <div class="slider range-slider round" data-slider data-initial-start="10" data-options="start: 1; end: 99;">
                                <span class="slider-handle range-slider-handle"  data-slider-handle role="slider" tabindex="1" aria-controls="controlSlider"></span>
                                <span class="slider-fill range-slider-fill" data-slider-fill></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sliders -->
            <div class="row abTestDuplicateContent">
                <div class="showOnABTest large-6 medium-6 columns">
                    <hr class="hr-text hr-big-text" data-content="A">
                    <div class="row abTestSliders">
                        <div class="large-2 small-2 columns">
                            <input name="GroupSize" type="number" data-content="A" id="abTestSliderA">
                        </div>
                        <div class="large-10 small-10 columns">
                            <div class="row">
                                <div class="large-6 small-12 columns">
                                    <div id="sliderA" class="slider range-slider round" data-slider data-initial-start="50" data-options="start: 1; end: 99;">
                                        <span class="slider-handle range-slider-handle"  data-slider-handle role="sliderA" tabindex="1" aria-controls="abTestSliderA"></span>
                                        <span class="slider-fill" data-slider-fill></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="showOnABTest large-6 medium-6 columns">
                    <hr class="hr-text hr-big-text" data-content="B">
                    <div class="row abTestSliders">
                        <div class="large-2 small-2 columns">
                            <input name="b--GroupSize" type="number" data-content="B" id="abTestSliderB">
                        </div>
                        <div class="large-10 small-10 columns">
                            <div class="row">
                                <div class="large-6 small-12 columns">
                                    <div id="sliderB" class="slider range-slider round" data-slider data-initial-start="50" data-options="start: 1; end: 99;">
                                        <span class="slider-fill" data-slider-fill></span>
                                        <span class="slider-handle range-slider-handle"  data-slider-handle role="sliderB" tabindex="1" aria-controls="abTestSliderB"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row collapse abTestDuplicateContent">

                <!-- Test Accounts , Player Value , Country - A -->
                <div class="large-6 medium-6 columns">
                    <div class="large-3 medium-3 columns" style="padding-left: 0;">
                        <label>Test Accounts</label>
                        <div class="switch round">
                            <input name="includeTestAccounts" id="testAccount" type="checkbox">
                            <label for="testAccount">
                                <span class="switch-on">ON</span>
                                <span class="switch-off">OFF</span>
                            </label>
                        </div>
                    </div>
                    <div class="large-7 medium-7 columns" ng-init="allValues = true">
                        <label>Player Value</label>
                        <!-- <input name="valuesA[]" value="All Players" id="allValues" type="checkbox" ng-model="allValues"><label for="allValues">All</label> -->
                        <!-- <input name="valuesA[]" id="VIP Players" type="checkbox" ng-model="vipValues"><label for="vipValues">VIP</label> -->
                        <div id="values" class="large-12 medium-12 animate-if">
                            <input name="valuesA[]" value="Norm" id="norm" class="allPlayerValuesA" type="checkbox"><label for="norm">Norm</label>
                            <input name="valuesA[]" value="PHV" id="phv" class="allPlayerValuesA" type="checkbox"><label for="phv">P-HV</label>
                            <input name="valuesA[]" value="HV" id="hv" class="allPlayerValuesA" type="checkbox" ng-model="hv"><label for="hv">HV</label>
                            <input name="valuesA[]" value="Sapphire" id="sapphire" class="allPlayerValuesA vipPlayerValuesA" type="checkbox" ng-model="sapphire"><label for="sapphire">Sapphire</label>
                            <input name="valuesA[]" value="Ruby" id="ruby" class="allPlayerValuesA vipPlayerValuesA" type="checkbox" ng-model="ruby"><label for="ruby">Ruby</label>
                            <input name="valuesA[]" value="Diamond" id="diamond" class="allPlayerValuesA vipPlayerValuesA" type="checkbox" ng-model="diamond"><label for="diamond">Diamond</label>
                            <input name="valuesA[]" value="Black Diamond" id="blackDiamond" class="allPlayerValuesA vipPlayerValuesA" type="checkbox" ng-model="blackDiamond"><label for="blackDiamond">Black Diamond</label>
                        </div>
                        <button type="button" id="selectAllPlayerValuesA" class="small button" data-tooltip aria-haspopup="true" title="Norm | P-HV | HV | Sapphire | Ruby | Diamond | Black Diamond" style="color: #fff;">Select All Values</button>
                        <button type="button" id="selectVipPlayerValuesA" class="small button" data-tooltip aria-haspopup="true" title="Sapphire | Ruby | Diamond | Black Diamond" style="color: #fff;">Select VIP Values</button>
                    </div>
                    <div class="large-2 medium-2 columns end">
                        <label>Country</label>
                        <input type="radio" name="Countries" value="UK" id="uk" checked><label for="uk">UK</label>
                        <input type="radio" name="Countries" value="All" id="rest"><label for="rest">All</label>
                    </div>

                    <!-- Communication, E-mail Template ID -  A -->
                    <div class="large-12 medium-12 columns">
                        <div class="large-6 medium-6 columns end">
                            <label>Communication Method</label>
                            <input name="isSendingEmail" id="byMail" type="checkbox" ng-model="email" value="1"><label for="byMail">E-Mail</label>
                            <input name="isSendingSMS" id="bySMS" type="checkbox" ng-model="sms" value="1"><label for="bySMS">SMS</label>
                            <input name="IsSendingVBS" id="byOMG" type="checkbox" ng-model="omg" value="1"><label for="byOMG">OMG</label>
                        </div>
                        <div class="large-6 medium-6 columns end" ng-if="email">
                            <label>E-Mail Template ID</label>
                            <input name="TemplateID" type="number" ng-model="emailTemplateID" />
                        </div>
                    </div>

                </div>

                <!-- Test Accounts , Player Value , Country - B -->
                <div class="showOnABTest large-6 medium-6 columns bTest">
                    <div class="large-3 medium-3 columns">
                        <label>Test Accounts</label>
                        <div class="switch round">
                            <input name="b--includeTestAccounts" id="testAccountB" type="checkbox">
                            <label for="testAccountB">
                                <span class="switch-on">ON</span>
                                <span class="switch-off">OFF</span>
                            </label>
                        </div>
                    </div>
                    <div class="large-7 medium-7 columns" ng-init="allValuesB = true">
                        <label>Player Value</label>
                        <!-- <input name="valuesB[]" value="All Players" id="allValuesB" type="checkbox" ng-model="allValuesB"><label for="allValuesB">All</label> -->
                        <!-- <input name="valuesB[]" value="VIP Players" id="vipValuesB" type="checkbox" ng-model="vipValuesB"><label for="vipValuesB">VIP</label> -->
                        <div id="valuesB" class="large-12 medium-12 animate-if">
                            <input name="valuesB[]" value="Norm" id="normB" class="allPlayerValuesB" type="checkbox"><label for="normB">Norm</label>
                            <input name="valuesB[]" value="PHV" id="phvB" class="allPlayerValuesB" type="checkbox" ><label for="phvB">P-HV</label>
                            <input name="valuesB[]" value="HV" id="hvB" class="allPlayerValuesB" type="checkbox" ng-model="hvB"><label for="hvB">HV</label>
                            <input name="valuesB[]" value="Sapphire" id="sapphireB" class="allPlayerValuesB vipPlayerValuesB" type="checkbox" ng-model="sapphireB"><label for="sapphireB">Sapphire</label>
                            <input name="valuesB[]" value="Ruby" id="rubyB" class="allPlayerValuesB vipPlayerValuesB" type="checkbox" ng-model="rubyB"><label for="rubyB">Ruby</label>
                            <input name="valuesB[]" value="Diamond" id="diamondB" class="allPlayerValuesB vipPlayerValuesB" type="checkbox" ng-model="diamondB"><label for="diamondB">Diamond</label>
                            <input name="valuesB[]" value="Black Diamond" id="blackDiamondB" class="allPlayerValuesB vipPlayerValuesB" type="checkbox" ng-model="blackDiamondB"><label for="blackDiamondB">Black Diamond</label>
                        </div>
                        <button type="button" id="selectAllPlayerValuesB" class="small button" data-tooltip aria-haspopup="true" title="Norm | P-HV | HV | Sapphire | Ruby | Diamond | Black Diamond" style="color: #fff;">Select All Values</button>
                        <button type="button" id="selectVipPlayerValuesB" class="small button" data-tooltip aria-haspopup="true" title="Sapphire | Ruby | Diamond | Black Diamond" style="color: #fff;">Select VIP Values</button>
                    </div>
                    <div class="large-2 medium-2 columns end">
                        <label>Country</label>
                        <input type="radio" name="b--Countries" value="UK" id="ukB" checked><label for="ukB">UK</label>
                        <input type="radio" name="b--Countries" value="All" id="restB"><label for="restB">All</label>
                    </div>

                    <!-- Communication, E-mail Template ID -  A -->
                    <div class="large-12 medium-12 columns">
                        <div class="large-6 medium-6 columns end">
                            <label>Communication Method</label>
                            <input name="b--isSendingEmail" id="byMailb" type="checkbox" ng-model="emailB" value="1"><label for="byMailb">E-Mail</label>
                            <input name="b--isSendingSMS" id="bySMSb" type="checkbox" ng-model="smsB" value="1"><label for="bySMSb">SMS</label>
                            <input name="b--IsSendingVBS" id="byOMGb" type="checkbox" ng-model="omgB" value="1"><label for="byOMGb">OMG</label>
                        </div>
                        <div class="large-6 medium-6 columns end" ng-if="emailB">
                            <label>E-Mail Template ID</label>
                            <input name="b--TemplateID" type="number" ng-model="emailTemplateID" />
                        </div>
                    </div>
                </div>

            </div>

            <hr class="hr-text" data-content="Additional">

            <div class="row collapse abTestDuplicateContent">

                <div class="large-6 medium-6 columns">

                    <!-- Average Deposit A -->
                    <div class="row">
                        <div class="large-3 medium-3 columns">
                            <label>Average Deposit</label>
                            <div class="switch round">
                                <input name="UsingAvgDep" id="avgDeposit" type="checkbox" ng-model="avgDeposit">
                                <label for="avgDeposit">
                                    <span class="switch-on">ON</span>
                                    <span class="switch-off">OFF</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Max Deposit A -->
                    <div class="row">
                        <div class="large-3 medium-3 columns">
                            <label>Max Deposit</label>
                            <div class="switch round">
                                <input name="UsingMaxDep" id="maxDeposit" type="checkbox" ng-model="maxDeposit">
                                <label for="maxDeposit">
                                    <span class="switch-on">ON</span>
                                    <span class="switch-off">OFF</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Segmented Deposit A -->
                    <div class="Seg_deposit_A row" style="display: none;">
                        <div class="large-3 medium-3 columns">
                            <label>Segmented Deposit</label>
                            <div class="switch round">
                                <input name="UsingSegmentedDep" id="segDeposit" type="checkbox" ng-model="obj.segDeposit">
                                <label for="segDeposit">
                                    <span class="switch-on">ON</span>
                                    <span class="switch-off">OFF</span>
                                </label>
                            </div>
                        </div>
                        <div class="large-3 medium-3 columns end" ng-if="obj.segDeposit">
                            <label>Regular / Challenge</label>
                            <div class="switch round">
                                <input name="isChallengedDep" id="regChallenge" type="checkbox">
                                <label for="regChallenge">
                                    <span class="switch-on">CLG</span>
                                    <span class="switch-off">REG</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Segmented Deposit Table A -->
                    <div class="Seg_deposit_A row" style="display: none;">
                        <div class="large-6 medium-6 columns end">
                            <div class="paramsTable">
                                <table>
                                    <tr>
                                        <th>Seg Value</th>
                                        <th>Promo Code</th>
                                        <th>Percentage</th>
                                    </tr>
                                    <tr ng-if="seg2 == 'All' || seg2 == 'OTD'">
                                        <td>OTD Active</td>
                                        <td><input name="SegmentedDep_OTD_Promocode" type="text" disabled /></td>
                                        <td><input name="SegmentedDep_OTD_BonusPer" type="number" disabled /></td>
                                    </tr>
                                    <tr id="seg_norm_A" class="allPlayerValuesA">
                                        <td>Norm Active</td>
                                        <td><input name="SegmentedDep_Norm_Promocode" type="text" disabled /></td>
                                        <td><input name="SegmentedDep_Norm_BonusPer" type="number" disabled /></td>
                                    </tr>
                                    <tr id="seg_hv_A" class="allPlayerValuesA">
                                        <td>HV Active</td>
                                        <td><input name="SegmentedDep_HV_Promocode" type="text" disabled /></td>
                                        <td><input name="SegmentedDep_HV_BonusPer" type="number" disabled /></td>
                                    </tr>
                                    <tr id="seg_sapphire_A" class="allPlayerValuesA vipPlayerValuesA">
                                        <td>Sapphire Active</td>
                                        <td><input name="SegmentedDep_Sapphire_Promocode" type="text" disabled /></td>
                                        <td><input name="SegmentedDep_Sapphire_BonusPer" type="number" disabled /></td>
                                    </tr>
                                    <tr id="seg_ruby_A" class="allPlayerValuesA vipPlayerValuesA">
                                        <td>Ruby Active</td>
                                        <td><input name="SegmentedDep_Ruby_Promocode" type="text" disabled /></td>
                                        <td><input name="SegmentedDep_Ruby_BonusPer" type="number" disabled /></td>
                                    </tr>
                                    <tr id="seg_diamond_A" class="allPlayerValuesA vipPlayerValuesA">
                                        <td>Diamond Active</td>
                                        <td><input name="SegmentedDep_Diamond_Promocode" type="text" disabled /></td>
                                        <td><input name="SegmentedDep_Diamond_BonusPer" type="number" disabled /></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <hr class="hr-text" data-content="Bonuses">

                    <!-- Bonus Granted A -->
                    <div class="row">
                        <div class="large-3 medium-3 columns">
                            <label>Bonus Group</label>
                            <div class="switch round">
                                <input name="SendingBonusGroup" id="bonusGroup" type="checkbox" ng-model="bonusGroup">
                                <label for="bonusGroup">
                                    <span class="switch-on">ON</span>
                                    <span class="switch-off">OFF</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Bonus Granted Table A -->
                    <div class="row">
                        <div class="large-6 medium-6 columns end" ng-if="bonusGroup">
                            <div class="paramsTable">
                                <table>
                                    <tr>
                                        <td>Group Title</td>
                                        <td><input name="GroupTitle" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>Allocate Bonuses</td>
                                        <td><input name="AllocateBonuses" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>Bonus Game Id</td>
                                        <td><input name="BonusGameId" type="number"/></td>
                                    </tr>
                                    <tr>
                                        <td>Initial Amount</td>
                                        <td><input name="InitialAmount" type="number"/></td>
                                    </tr>
                                    <tr>
                                        <td>Days To Expiration</td>
                                        <td><input name="DaysToExpiration" type="number"/></td>
                                    </tr>
                                    <tr>
                                        <td>Accumulated</td>
                                        <td><input name="Accumulated" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>Accumulated Capping</td>
                                        <td><input name="AccumulatedCapping" type="number"/></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Free Spins A -->
                    <div class="row">
                        <div class="large-2 medium-2 columns">
                            <label>Free Spins</label>
                            <div class="switch round">
                                <input name="sendingFS" id="freeSpins" type="checkbox" ng-model="freeSpins">
                                <label for="freeSpins">
                                    <span class="switch-on">ON</span>
                                    <span class="switch-off">OFF</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Free Spins Table A -->
                    <div class="row">
                        <div class="large-6 medium-6 columns end" ng-if="freeSpins">
                            <div class="paramsTable">
                                <table>
                                    <tr>
                                        <td>Game United ID</td>
                                        <td><input name="GameUnitedId" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>Num of Spins</td>
                                        <td><input name="NumOfSpins" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>Max Win</td>
                                        <td><input name="MaxWin" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>Min Win</td>
                                        <td><input name="MinWin" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>Category ID</td>
                                        <td><input name="CategoryID" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>Event ID</td>
                                        <td><input name="EventID" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>FS Days Duration</td>
                                        <td><input name="FS_Duration" type="text"/></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <hr class="hr-text" data-content="Parameters">

                    <!-- Parameters A -->
                    <div class="row">
                        <div class="large-2 medium-2 columns">
                            <label>Parameters</label>
                            <div class="switch round">
                                <input name="paramsA" id="params" type="checkbox" ng-model="params">
                                <label for="params">
                                    <span class="switch-on">ON</span>
                                    <span class="switch-off">OFF</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Parameters Table A -->
                    <div class="row">
                        <div class="large-6 medium-6 columns end" ng-if="params">
                            <div class="paramsTable">
                                <table>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Value</th>
                                    </tr>
                                    <tr ng-if="!avgDeposit && !(obj.segDeposit) && !omg" class="animate-if">
                                        <td>#1</td>
                                        <td><input name="ParamName01" type="text"/></td>
                                        <td><input name="ParamValue01" type="text"/></td>
                                    </tr>
                                    <tr ng-if="!maxDeposit && !(obj.segDeposit)" class="animate-if">
                                        <td>#2</td>
                                        <td><input name="ParamName02" type="text"/></td>
                                        <td><input name="ParamValue02" type="text"/></td>
                                    </tr>
                                    <tr ng-if="!obj.segDeposit" class="animate-if">
                                        <td>#3</td>
                                        <td><input name="ParamName03" type="text"/></td>
                                        <td><input name="ParamValue03" type="text"/></td>
                                    </tr>
                                    <tr ng-if="!obj.segDeposit" class="animate-if">
                                        <td>#4</td>
                                        <td><input name="ParamName04" type="text"/></td>
                                        <td><input name="ParamValue04" type="text"/></td>
                                    </tr>
                                    <tr ng-if="!bonusGroup" class="animate-if">
                                        <td>#5</td>
                                        <td><input name="ParamName05" type="text"/></td>
                                        <td><input name="ParamValue05" type="text"/></td>
                                    </tr>
                                    <tr ng-if="!bonusGroup" class="animate-if">
                                        <td>#6</td>
                                        <td><input name="ParamName06" type="text"/></td>
                                        <td><input name="ParamValue06" type="text"/></td>
                                    </tr>
                                    <tr ng-if="!bonusGroup" class="animate-if">
                                        <td>#7</td>
                                        <td><input name="ParamName07" type="text"/></td>
                                        <td><input name="ParamValue07" type="text"/></td>
                                    </tr>
                                    <tr ng-if="!bonusGroup" class="animate-if">
                                        <td>#8</td>
                                        <td><input name="ParamName08" type="text"/></td>
                                        <td><input name="ParamValue08" type="text"/></td>
                                    </tr>
                                    <tr ng-if="!bonusGroup" class="animate-if">
                                        <td>#9</td>
                                        <td><input name="ParamName09" type="text"/></td>
                                        <td><input name="ParamValue09" type="text"/></td>
                                    </tr>
                                    <tr ng-if="!bonusGroup" class="animate-if">
                                        <td>#10</td>
                                        <td><input name="ParamName10" type="text"/></td>
                                        <td><input name="ParamValue10" type="text"/></td>
                                    </tr>
                                    <tr ng-if="!bonusGroup" class="animate-if">
                                        <td>#11</td>
                                        <td><input name="ParamName11" type="text"/></td>
                                        <td><input name="ParamValue11" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>#12</td>
                                        <td><input name="ParamName12" type="text"/></td>
                                        <td><input name="ParamValue12" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>#25</td>
                                        <td><input name="ParamName25" type="text"/></td>
                                        <td><input name="ParamValue25" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>#26</td>
                                        <td><input name="ParamName26" type="text"/></td>
                                        <td><input name="ParamValue26" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>#27</td>
                                        <td><input name="ParamName27" type="text"/></td>
                                        <td><input name="ParamValue27" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>#28</td>
                                        <td><input name="ParamName28" type="text"/></td>
                                        <td><input name="ParamValue28" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>#29</td>
                                        <td><input name="ParamName29" type="text"/></td>
                                        <td><input name="ParamValue29" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>#30</td>
                                        <td><input name="ParamName30" type="text"/></td>
                                        <td><input name="ParamValue30" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>#31</td>
                                        <td><input name="ParamName31" type="text"/></td>
                                        <td><input name="ParamValue31" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>#32</td>
                                        <td><input name="ParamName32" type="text"/></td>
                                        <td><input name="ParamValue32" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>#33</td>
                                        <td><input name="ParamName33" type="text"/></td>
                                        <td><input name="ParamValue33" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>#34</td>
                                        <td><input name="ParamName34" type="text"/></td>
                                        <td><input name="ParamValue34" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>#35</td>
                                        <td><input name="ParamName35" type="text"/></td>
                                        <td><input name="ParamValue35" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>#36</td>
                                        <td><input name="ParamName36" type="text"/></td>
                                        <td><input name="ParamValue36" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>#37</td>
                                        <td><input name="ParamName37" type="text"/></td>
                                        <td><input name="ParamValue37" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>#38</td>
                                        <td><input name="ParamName38" type="text"/></td>
                                        <td><input name="ParamValue38" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>#39</td>
                                        <td><input name="ParamName39" type="text"/></td>
                                        <td><input name="ParamValue39" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>#40</td>
                                        <td><input name="ParamName40" type="text"/></td>
                                        <td><input name="ParamValue40" type="text"/></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- SMS Table A -->
                    <div id="SMS_table_A" class="row" style="display:none;">
                        <hr class="hr-text" data-content="SMS">
                        <div class="large-12 medium-12 columns">
                            <div class="row">
                                <div class="large-6 medium-6 columns">
                                    <label>Send SMS</label>
                                    <span>Day</span>
                                    <select name="SMS_ScheduleDay_OffSet">
                                        <option value="0">Same Day</option>
                                        <option value="1">1 Day After</option>
                                        <option value="2">2 Days After</option>
                                        <option value="3">3 Days After</option>
                                        <option value="4">4 Days After</option>
                                        <option value="5">5 Days After</option>
                                        <option value="6">6 Days After</option>
                                    </select>
                                    <span data-tooltip title="Enter time - 24 hours format. Available only until 20:59">Time</span>
                                    <input name="SMS_ScheduleTime" type="time" min="06:00:00" max="20:59:00" style="display: block;"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="large-6 medium-6 columns">
                                    <table>
                                        <tr>
                                            <th></th>
                                            <th>SMS Template ID</th>
                                        </tr>
                                        <tr  class="allBrands mainBrands">
                                            <td>Wink Bingo</td>
                                            <td><input class="wink-txtFiled" name="SMS_TemplateID_Wink" type="text" disabled/></td>
                                        </tr>
                                        <tr  class="allBrands mainBrands">
                                            <td>888Ladies</td>
                                            <td><input class="ladies-txtFiled" name="SMS_TemplateID_Ladies" type="text" disabled/></td>
                                        </tr>
                                        <tr  class="allBrands smallBrands">
                                            <td>Posh</td>
                                            <td><input class="posh-txtFiled" name="SMS_TemplateID_Posh" type="text" disabled/></td>
                                        </tr>
                                        <tr  class="allBrands smallBrands">
                                            <td>Tasty</td>
                                            <td><input class="tasty-txtFiled" name="SMS_TemplateID_Tasty" type="text" disabled/></td>
                                        </tr>
                                        <tr  class="allBrands smallBrands">
                                            <td>Red Bus</td>
                                            <td><input class="redbus-txtFiled" name="SMS_TemplateID_RedBus" type="text" disabled/></td>
                                        </tr>
                                        <tr  class="allBrands smallBrands">
                                            <td>Bingo Street</td>
                                            <td><input class="street-txtFiled" name="SMS_TemplateID_BingoStreet" type="text" disabled/></td>
                                        </tr>
                                        <tr  class="allBrands smallBrands">
                                            <td>Bingo Loft</td>
                                            <td><input class="loft-txtFiled" name="SMS_TemplateID_BingoLoft" type="text" disabled/></td>
                                        </tr>
                                        <tr  class="allBrands smallBrands">
                                            <td>Bingo Appy</td>
                                            <td><input class="appy-txtFiled" name="SMS_TemplateID_Appy" type="text" disabled/></td>
                                        </tr>
                                        <tr  class="allBrands">
                                            <td>Wink Slots</td>
                                            <td><input class="slots-txtFiled" name="SMS_TemplateID_WinkSlots" type="text" disabled/></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- OMG Table A -->
                    <div id="OMG_table_A" class="row" style="display:none;">
                        <hr class="hr-text" data-content="OMG">
                        <div class="large-12 medium-12 columns">
                            <div class="row">
                                <div class="large-6 medium-6 columns">
                                    <label>OMG End Date</label>
                                    <input name="VBS_OfferEndDate" type="text" class="span2" id="dpd3" placeholder="Click here to choose date" ng-model="VBS_EndDate">
                                </div>
                            </div>
                            <div class="row">
                                <div class="large-6 medium-6 columns">
                                    <table>
                                        <tr>
                                            <th></th>
                                            <th>OMG Template ID</th>
                                        </tr>
                                        <tr  class="allBrands mainBrands">
                                            <td>Wink Bingo</td>
                                            <td><input class="wink-txtFiled" name="VBS_CampaignID_Wink" type="text" disabled/></td>
                                        </tr>
                                        <tr  class="allBrands mainBrands">
                                            <td>888Ladies</td>
                                            <td><input class="ladies-txtFiled" name="VBS_CampaignID_Ladies" type="text" disabled/></td>
                                        </tr>
                                        <tr  class="allBrands smallBrands">
                                            <td>Posh</td>
                                            <td><input class="posh-txtFiled" name="VBS_CampaignID_Posh" type="text" disabled/></td>
                                        </tr>
                                        <tr  class="allBrands smallBrands">
                                            <td>Tasty</td>
                                            <td><input class="tasty-txtFiled" name="VBS_CampaignID_Tasty" type="text" disabled/></td>
                                        </tr>
                                        <tr  class="allBrands smallBrands">
                                            <td>Red Bus</td>
                                            <td><input class="redbus-txtFiled" name="VBS_CampaignID_RedBus" type="text" disabled/></td>
                                        </tr>
                                        <tr  class="allBrands smallBrands">
                                            <td>Bingo Street</td>
                                            <td><input class="street-txtFiled" name="VBS_CampaignID_BingoStreet" type="text" disabled/></td>
                                        </tr>
                                        <tr  class="allBrands smallBrands">
                                            <td>Bingo Loft</td>
                                            <td><input class="loft-txtFiled" name="VBS_CampaignID_BingoLoft" type="text" disabled/></td>
                                        </tr>
                                        <tr  class="allBrands smallBrands">
                                            <td>Bingo Appy</td>
                                            <td><input class="appy-txtFiled" name="VBS_CampaignID_Appy" type="text" disabled/></td>
                                        </tr>
                                        <tr  class="allBrands">
                                            <td>Wink Slots</td>
                                            <td><input class="slots-txtFiled" name="VBS_CampaignID_WinkSlots" type="text" disabled/></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="showOnABTest large-6 medium-6 columns bTest">

                    <!-- Average Deposit B -->
                    <div class="row">
                        <div class="large-3 medium-3 columns">
                            <label>Average Deposit</label>
                            <div class="switch round">
                                <input name="b--UsingAvgDep" id="avgDepositB" type="checkbox" ng-model="avgDepositB">
                                <label for="avgDepositB">
                                    <span class="switch-on">ON</span>
                                    <span class="switch-off">OFF</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Max Deposit B -->
                    <div class="row">
                        <div class="large-3 medium-3 columns">
                            <label>Max Deposit</label>
                            <div class="switch round">
                                <input name="b--UsingMaxDep" id="maxDepositB" type="checkbox" ng-model="maxDepositB">
                                <label for="maxDepositB">
                                    <span class="switch-on">ON</span>
                                    <span class="switch-off">OFF</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Segmented Deposit B -->
                    <div class="row" ng-if="seg1=='Inactive' || seg1=='Active'">
                        <div class="large-3 medium-3 columns">
                            <label>Segmented Deposit</label>
                            <div class="switch round">
                                <input name="b--UsingSegmentedDep" id="segDepositB" type="checkbox" ng-model="obj.segDepositB">
                                <label for="segDepositB">
                                    <span class="switch-on">ON</span>
                                    <span class="switch-off">OFF</span>
                                </label>
                            </div>
                        </div>
                        <div class="large-3 medium-3 columns end" ng-if="obj.segDepositB">
                            <label>Regular / Challenge</label>
                            <div class="switch round">
                                <input name="b--isChallengedDep" id="regChallengeB" type="checkbox">
                                <label for="regChallengeB">
                                    <span class="switch-on">CLG</span>
                                    <span class="switch-off">REG</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Segmented Deposit Table B -->
                    <div class="Seg_deposit_B row" style="display: none;">
                        <div class="large-6 medium-6 columns end">
                            <div class="paramsTable">
                                <table>
                                    <tr>
                                        <th>Seg Value</th>
                                        <th>Promo Code</th>
                                        <th>Percentage</th>
                                    </tr>
                                    <tr>
                                    <tr ng-if="seg2 == 'All' || seg2 == 'OTD'">
                                        <td>OTD Active</td>
                                        <td><input name="b--SegmentedDep_OTD_Promocode" type="text" disabled /></td>
                                        <td><input name="b--SegmentedDep_OTD_BonusPer" type="number" disabled /></td>
                                    </tr>
                                    <tr id="seg_normB_B" class="allPlayerValuesB">
                                        <td>Norm Active</td>
                                        <td><input name="b--SegmentedDep_Norm_Promocode" type="text" disabled /></td>
                                        <td><input name="b--SegmentedDep_Norm_BonusPer" type="number" disabled /></td>
                                    </tr>
                                    <tr id="seg_hvB_B" class="allPlayerValuesB">
                                        <td>HV Active</td>
                                        <td><input name="b--SegmentedDep_HV_Promocode" type="text" disabled /></td>
                                        <td><input name="b--SegmentedDep_HV_BonusPer" type="number" disabled /></td>
                                    </tr>
                                    <tr id="seg_sapphireB_B" class="allPlayerValuesB vipPlayerValuesB">
                                        <td>Sapphire Active</td>
                                        <td><input name="b--SegmentedDep_Sapphire_Promocode" type="text" disabled /></td>
                                        <td><input name="b--SegmentedDep_Sapphire_BonusPer" type="number" disabled /></td>
                                    </tr>
                                    <tr id="seg_rubyB_B" class="allPlayerValuesB vipPlayerValuesB">
                                        <td>Ruby Active</td>
                                        <td><input name="b--SegmentedDep_Ruby_Promocode" type="text" disabled /></td>
                                        <td><input name="b--SegmentedDep_Ruby_BonusPer" type="number" disabled /></td>
                                    </tr>
                                    <tr id="seg_diamondB_B" class="allPlayerValuesB vipPlayerValuesB">
                                        <td>Diamond Active</td>
                                        <td><input name="b--SegmentedDep_Diamond_Promocode" type="text" disabled /></td>
                                        <td><input name="b--SegmentedDep_Diamond_BonusPer" type="number" disabled /></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <hr class="hr-text" data-content="Bonuses">

                    <!-- Bonus Granted B -->
                    <div class="row">
                        <div class="large-3 medium-3 columns">
                            <label>Bonus Group</label>
                            <div class="switch round">
                                <input name="b--SendingBonusGroup" id="bonusGroupB" type="checkbox" ng-model="bonusGroupB">
                                <label for="bonusGroupB">
                                    <span class="switch-on">ON</span>
                                    <span class="switch-off">OFF</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Bonus Granted Table B -->
                    <div class="row">
                        <div class="large-6 medium-6 columns end" ng-if="bonusGroupB">
                            <div class="paramsTable">
                                <table>
                                    <tr>
                                        <td>Group Title</td>
                                        <td><input name="b--GroupTitle" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>Allocate Bonuses</td>
                                        <td><input name="b--AllocateBonuses" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>Bonus Game Id</td>
                                        <td><input name="b--BonusGameId" type="number"/></td>
                                    </tr>
                                    <tr>
                                        <td>Initial Amount</td>
                                        <td><input name="b--InitialAmount" type="number"/></td>
                                    </tr>
                                    <tr>
                                        <td>Days To Expiration</td>
                                        <td><input name="b--DaysToExpiration" type="number"/></td>
                                    </tr>
                                    <tr>
                                        <td>Accumulated</td>
                                        <td><input name="b--Accumulated" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>Accumulated Capping</td>
                                        <td><input name="b--AccumulatedCapping" type="number"/></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Free Spins B -->
                    <div class="row">
                        <div class="large-2 medium-2 columns">
                            <label>Free Spins</label>
                            <div class="switch round">
                                <input name="b--sendingFS" id="freeSpinsB" type="checkbox" ng-model="freeSpinsB">
                                <label for="freeSpinsB">
                                    <span class="switch-on">ON</span>
                                    <span class="switch-off">OFF</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Free Spins Table B -->
                    <div class="row">
                        <div class="large-6 medium-6 columns end" ng-if="freeSpinsB">
                            <div class="paramsTable">
                                <table>
                                    <tr>
                                        <td>Game United ID</td>
                                        <td><input name="b--GameUnitedId" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>Num of Spins</td>
                                        <td><input name="b--NumOfSpins" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>Max Win</td>
                                        <td><input name="b--MaxWin" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>Min Win</td>
                                        <td><input name="b--MinWin" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>Category ID</td>
                                        <td><input name="b--CategoryID" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>Event ID</td>
                                        <td><input name="b--EventID" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>FS Days Duration</td>
                                        <td><input name="b--FS_Duration" type="text"/></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <hr class="hr-text" data-content="Parameters">

                    <!-- Parameters B -->
                    <div class="row">
                        <div class="large-2 medium-2 columns">
                            <label>Parameters</label>
                            <div class="switch round">
                                <input name="paramsB" id="paramsB" type="checkbox" ng-model="paramsB">
                                <label for="paramsB">
                                    <span class="switch-on">ON</span>
                                    <span class="switch-off">OFF</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Parameters Table B -->
                    <div class="row">
                        <div class="large-6 medium-6 columns end" ng-if="paramsB">
                            <div class="paramsTable">
                                <table>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Value</th>
                                    </tr>
                                    <tr ng-if="!avgDepositB && !(obj.segDepositB) && !omg" class="animate-if">
                                        <td>#1</td>
                                        <td><input name="b--ParamName01" type="text"/></td>
                                        <td><input name="b--ParamValue01" type="text"/></td>
                                    </tr>
                                    <tr ng-if="!maxDepositB && !(obj.segDepositB)" class="animate-if">
                                        <td>#2</td>
                                        <td><input name="b--ParamName02" type="text"/></td>
                                        <td><input name="b--ParamValue02" type="text"/></td>
                                    </tr>
                                    <tr ng-if="!obj.segDepositB" class="animate-if">
                                        <td>#3</td>
                                        <td><input name="b--ParamName03" type="text"/></td>
                                        <td><input name="b--ParamValue03" type="text"/></td>
                                    </tr>
                                    <tr ng-if="!obj.segDepositB" class="animate-if">
                                        <td>#4</td>
                                        <td><input name="b--ParamName04" type="text"/></td>
                                        <td><input name="b--ParamValue04" type="text"/></td>
                                    </tr>
                                    <tr ng-if="!bonusGroupB" class="animate-if">
                                        <td>#5</td>
                                        <td><input name="b--ParamName05" type="text"/></td>
                                        <td><input name="b--ParamValue05" type="text"/></td>
                                    </tr>
                                    <tr ng-if="!bonusGroupB" class="animate-if">
                                        <td>#6</td>
                                        <td><input name="b--ParamName06" type="text"/></td>
                                        <td><input name="b--ParamValue06" type="text"/></td>
                                    </tr>
                                    <tr ng-if="!bonusGroupB" class="animate-if">
                                        <td>#7</td>
                                        <td><input name="b--ParamName07" type="text"/></td>
                                        <td><input name="b--ParamValue07" type="text"/></td>
                                    </tr>
                                    <tr ng-if="!bonusGroupB" class="animate-if">
                                        <td>#8</td>
                                        <td><input name="b--ParamName08" type="text"/></td>
                                        <td><input name="b--ParamValue08" type="text"/></td>
                                    </tr>
                                    <tr ng-if="!bonusGroupB" class="animate-if">
                                        <td>#9</td>
                                        <td><input name="b--ParamName09" type="text"/></td>
                                        <td><input name="b--ParamValue09" type="text"/></td>
                                    </tr>
                                    <tr ng-if="!bonusGroupB" class="animate-if">
                                        <td>#10</td>
                                        <td><input name="b--ParamName10" type="text"/></td>
                                        <td><input name="b--ParamValue10" type="text"/></td>
                                    </tr>
                                    <tr ng-if="!bonusGroupB" class="animate-if">
                                        <td>#11</td>
                                        <td><input name="b--ParamName11" type="text"/></td>
                                        <td><input name="b--ParamValue11" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>#12</td>
                                        <td><input name="b--ParamName12" type="text"/></td>
                                        <td><input name="b--ParamValue12" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>#25</td>
                                        <td><input name="b--ParamName25" type="text"/></td>
                                        <td><input name="b--ParamValue25" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>#26</td>
                                        <td><input name="b--ParamName26" type="text"/></td>
                                        <td><input name="b--ParamValue26" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>#27</td>
                                        <td><input name="b--ParamName27" type="text"/></td>
                                        <td><input name="b--ParamValue27" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>#28</td>
                                        <td><input name="b--ParamName28" type="text"/></td>
                                        <td><input name="b--ParamValue28" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>#29</td>
                                        <td><input name="b--ParamName29" type="text"/></td>
                                        <td><input name="b--ParamValue29" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>#30</td>
                                        <td><input name="b--ParamName30" type="text"/></td>
                                        <td><input name="b--ParamValue30" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>#31</td>
                                        <td><input name="b--ParamName31" type="text"/></td>
                                        <td><input name="b--ParamValue31" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>#32</td>
                                        <td><input name="b--ParamName32" type="text"/></td>
                                        <td><input name="b--ParamValue32" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>#33</td>
                                        <td><input name="b--ParamName33" type="text"/></td>
                                        <td><input name="b--ParamValue33" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>#34</td>
                                        <td><input name="b--ParamName34" type="text"/></td>
                                        <td><input name="b--ParamValue34" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>#35</td>
                                        <td><input name="b--ParamName35" type="text"/></td>
                                        <td><input name="b--ParamValue35" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>#36</td>
                                        <td><input name="b--ParamName36" type="text"/></td>
                                        <td><input name="b--ParamValue36" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>#37</td>
                                        <td><input name="b--ParamName37" type="text"/></td>
                                        <td><input name="b--ParamValue37" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>#38</td>
                                        <td><input name="b--ParamName38" type="text"/></td>
                                        <td><input name="b--ParamValue38" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>#39</td>
                                        <td><input name="b--ParamName39" type="text"/></td>
                                        <td><input name="b--ParamValue39" type="text"/></td>
                                    </tr>
                                    <tr>
                                        <td>#40</td>
                                        <td><input name="b--ParamName40" type="text"/></td>
                                        <td><input name="b--ParamValue40" type="text"/></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- SMS Table B -->
                    <div id="SMS_table_B" class="row" style="display:none;">
                        <div class="large-12 medium-12 columns">
                            <hr class="hr-text" data-content="SMS">
                            <div class="row">
                                <div class="large-6 medium-6 columns">
                                    <label>Send SMS</label>
                                    <span>Day</span>
                                    <select name="b--SMS_ScheduleDay_OffSet">
                                        <option value="0">Same Day</option>
                                        <option value="1">1 Day After</option>
                                        <option value="2">2 Days After</option>
                                        <option value="3">3 Days After</option>
                                        <option value="4">4 Days After</option>
                                        <option value="5">5 Days After</option>
                                        <option value="6">6 Days After</option>
                                    </select>
                                    <span data-tooltip title="Enter time - 24 hours format. Available only until 20:59">Time</span>
                                    <input name="b--SMS_ScheduleTime" type="time" min="06:00:00" max="20:59:00" style="display: block;" data-tooltip title="Enter time - 24 hours format. Available only until 20:59"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="large-6 medium-6 columns">
                                    <table>
                                        <tr>
                                            <th></th>
                                            <th>SMS Template ID</th>
                                        </tr>
                                        <tr  class="allBrands mainBrands">
                                            <td>Wink Bingo</td>
                                            <td><input class="wink-txtFiled" name="b--SMS_TemplateID_Wink" type="text" disabled/></td>
                                        </tr>
                                        <tr  class="allBrands mainBrands">
                                            <td>888Ladies</td>
                                            <td><input class="ladies-txtFiled" name="b--SMS_TemplateID_Ladies" type="text" disabled/></td>
                                        </tr>
                                        <tr  class="allBrands smallBrands">
                                            <td>Posh</td>
                                            <td><input class="posh-txtFiled" name="b--SMS_TemplateID_Posh" type="text" disabled/></td>
                                        </tr>
                                        <tr  class="allBrands smallBrands">
                                            <td>Tasty</td>
                                            <td><input class="tasty-txtFiled" name="b--SMS_TemplateID_Tasty" type="text" disabled/></td>
                                        </tr>
                                        <tr  class="allBrands smallBrands">
                                            <td>Red Bus</td>
                                            <td><input class="redbus-txtFiled" name="b--SMS_TemplateID_RedBus" type="text" disabled/></td>
                                        </tr>
                                        <tr  class="allBrands smallBrands">
                                            <td>Bingo Street</td>
                                            <td><input class="street-txtFiled" name="b--SMS_TemplateID_BingoStreet" type="text" disabled/></td>
                                        </tr>
                                        <tr  class="allBrands smallBrands">
                                            <td>Bingo Loft</td>
                                            <td><input class="loft-txtFiled" name="b--SMS_TemplateID_BingoLoft" type="text" disabled/></td>
                                        </tr>
                                        <tr  class="allBrands smallBrands">
                                            <td>Bingo Appy</td>
                                            <td><input class="appy-txtFiled" name="b--SMS_TemplateID_Appy" type="text" disabled/></td>
                                        </tr>
                                        <tr  class="allBrands">
                                            <td>Wink Slots</td>
                                            <td><input class="slots-txtFiled" name="b--SMS_TemplateID_WinkSlots" type="text" disabled/></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- OMG Table B -->
                    <div id="OMG_table_B" class="row" style="display:none;>
                        <div class="large-12 medium-12 columns">
                            <hr class="hr-text" data-content="OMG">
                            <div class="row">
                                <div class="large-6 medium-6 columns">
                                    <label>OMG End Date</label>
                                    <input name="b--VBS_OfferEndDate" type="text" class="span2" id="dpd4" placeholder="Click here to choose date" ng-model="VBS_EndDate">
                                </div>
                            </div>
                            <div class="row">
                                <div class="large-6 medium-6 columns">
                                    <table>
                                        <tr>
                                            <th></th>
                                            <th>OMG Template ID</th>
                                        </tr>
                                        <tr  class="allBrands mainBrands">
                                            <td>Wink Bingo</td>
                                            <td><input class="wink-txtFiled" name="b--VBS_CampaignID_Wink" type="text" disabled/></td>
                                        </tr>
                                        <tr  class="allBrands mainBrands">
                                            <td>888Ladies</td>
                                            <td><input class="ladies-txtFiled" name="b--VBS_CampaignID_Ladies" type="text" disabled/></td>
                                        </tr>
                                        <tr  class="allBrands smallBrands">
                                            <td>Posh</td>
                                            <td><input class="posh-txtFiled" name="b--VBS_CampaignID_Posh" type="text" disabled/></td>
                                        </tr>
                                        <tr  class="allBrands smallBrands">
                                            <td>Tasty</td>
                                            <td><input class="tasty-txtFiled" name="b--VBS_CampaignID_Tasty" type="text" disabled/></td>
                                        </tr>
                                        <tr  class="allBrands smallBrands">
                                            <td>Red Bus</td>
                                            <td><input class="redbus-txtFiled" name="b--VBS_CampaignID_RedBus" type="text" disabled/></td>
                                        </tr>
                                        <tr  class="allBrands smallBrands">
                                            <td>Bingo Street</td>
                                            <td><input class="street-txtFiled" name="b--VBS_CampaignID_BingoStreet" type="text" disabled/></td>
                                        </tr>
                                        <tr  class="allBrands smallBrands">
                                            <td>Bingo Loft</td>
                                            <td><input class="loft-txtFiled" name="b--VBS_CampaignID_BingoLoft" type="text" disabled/></td>
                                        </tr>
                                        <tr  class="allBrands smallBrands">
                                            <td>Bingo Appy</td>
                                            <td><input class="appy-txtFiled" name="b--VBS_CampaignID_Appy" type="text" disabled/></td>
                                        </tr>
                                        <tr  class="allBrands">
                                            <td>Wink Slots</td>
                                            <td><input class="slots-txtFiled" name="b--VBS_CampaignID_WinkSlots" type="text" disabled/></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="bottom-buttons text-center">
                <button id="submitForm" class="small button" name="Send" type="submit">SEND YOUR PROMOTION</button>
                <div id="saveForm" class="small button" name="Save" onclick="javascript:save()">SAVE</div>
                <div id="unSaveForm" class="small button" name="Unsave" onclick="javascript:unsave()">UNSAVE</div>
                <a href="index.php"><div class="small button [success secondary alert]">CLEAR FORM</div></a>
            </div>

        </form>
    </div>
</div>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/foundation-datepicker.js"></script>

<script>
    $(document).foundation();

    $(window).scroll(function() {

        if($(window).scrollTop() > 195) {
            $(".logo").attr("src","images/logo60x60.png");
            $(".header-wrapper").addClass("stickyHeader");
            $("#topContent").css({"padding-top":"240px"});
        }
        else {
            $(".logo").attr("src","images/logo.png");
            $(".header-wrapper").removeClass("stickyHeader");
            $("#topContent").css({"padding-top":"0px"});
        }

    });

    $(document).ready( function() {

        // hide #back-top first
        $("#back-top").hide();

        // fade in #back-top
        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('#back-top').fadeIn();
                } else {
                    $('#back-top').fadeOut();
                }
            });

            // scroll body to 0px on click
            $('#back-top .fi-arrow-up').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 3000);
                return false;
            });
        });

        $("#abTestSliderA, #abTestSliderB").keyup(function(){

            var AorB = $(this).attr("data-content");
                if (AorB == "A") { var other = "sliderB"; }
                else { var other = "sliderA"; }

            var thisSliderValue = $("#slider"+AorB+" .slider-handle").attr('aria-valuenow');
            var otherSliderValue = 100-thisSliderValue;

            mySlider = new Foundation.Slider( $("#"+other), {initialStart: otherSliderValue});
        });

        $(".abTestSliders").mouseup(function(){

            var AorB = $("input", this).attr("data-content");
            if (AorB == "A") { var other = "sliderB"; }
            else { var other = "sliderA"; }

            var thisSliderValue = $('.slider-handle',this).attr('aria-valuenow');
            var otherSliderValue = 100-thisSliderValue;

            mySlider = new Foundation.Slider( $("#"+other), {initialStart: otherSliderValue});
        });

    });

    // Date Picker
    var nowTemp = new Date();
    var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

    // Promotion Dates
    var checkin = $('#dpd1').fdatepicker({
        format: 'yyyymmdd',
        onRender: function (date) {
            return date.valueOf() < now.valueOf() ? 'disabled' : '';
        }
    }).on('changeDate', function (ev) {
        if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.update(newDate);

            newDate = newDate.toDateString();
            $('#dpd1').attr('value',newDate);
        }
        checkin.hide();
        $('#dpd2')[0].focus();

    }).data('datepicker');
    var checkout = $('#dpd2').fdatepicker({
        format: 'yyyymmdd',
        onRender: function (date) {
            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
        }
    }).on('changeDate', function (ev) {
        var endDate = new Date(ev.date);
        endDate = endDate.toDateString();

        checkout.hide();
        $('#dpd2').attr('value',endDate);

    }).data('datepicker');

    // OMG dates
    $('#byOMG').change(function(){
        var omgDateA = $('#dpd3').fdatepicker({
            format: 'yyyymmdd',
            onRender: function (date) {
                return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
            }
        }).on('changeDate', function (ev) {
            var omgA = new Date(ev.date);
            omgA = omgA.toDateString();

            omgDateA.hide();
            $('#dpd3').attr('value',omgA);
        }).data('datepicker');
    });

    $('#byOMGb').change(function(){
        var omgDateB = $('#dpd4').fdatepicker({
            format: 'yyyymmdd',
            onRender: function (date) {
                return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
            }
        }).on('changeDate', function (ev) {
            var omgB = new Date(ev.date);
            omgB = omgB.toDateString();

            omgDateB.hide();
            $('#dpd4').attr('value',omgB);

        }).data('datepicker');
    });



</script>

</body>
</html>
