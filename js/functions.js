$(function(){
    if(localStorage.getItem("flag") == "set") {
        $("#topContent").before("<p id='restoreMsg' style='background:#ff7b62; text-align:center; padding: 15px 0;'>Form data was restored from local storage</p>");
        $("#restoreMsg").fadeOut(4000);
        var data = $("#crmForm").serializeArray();
        $.each(data,function(i,obj){
            $("[name='" + obj.name + "']").val(localStorage.getItem(obj.name));
        });
    }

    $("#seg1").change(function(){
        if($(this).val() == "Active" || $(this).val() == "Inactive") {
            $(".Seg_deposit_A").fadeIn();
            $(".Seg_deposit_B").fadeIn();
        }
        else {
            $(".Seg_deposit_A").fadeOut();
            $(".Seg_deposit_B").fadeOut();
        }
    });

    $("#segDeposit").change(function(){
        if($(this).hasClass("ng-not-empty")) {
            $(".Seg_deposit_table_A").fadeIn();
        }
        else {
            $(".Seg_deposit_table_A").fadeOut();
        }
    });

    $("#segDepositB").change(function(){
        if($(this).hasClass("ng-not-empty")) {
            $(".Seg_deposit_table_B").fadeIn();
        }
        else {
            $(".Seg_deposit_table_B").fadeOut();
        }
    });

    $("#bonusGroup").change(function(){
        if($(this).hasClass("ng-not-empty")) {
            $(".bonusGroup_params_A input").prop('disabled',true);
        }
        else {
            $(".bonusGroup_params_A input").prop('disabled',false);
        }
    });

    $("#bonusGroupB").change(function(){
        if($(this).hasClass("ng-not-empty")) {
            $(".bonusGroup_params_B input").prop('disabled',true);
        }
        else {
            $(".bonusGroup_params_B input").prop('disabled',false);
        }
    });

    $(".allPlayerValuesA").change(function(){
        var seg_value = this.id;
        if($(this).is(':checked')) {
            $("#seg_" + seg_value + "_A input").prop('disabled',false);
        }
        else {
            $("#seg_" + seg_value + "_A input").prop('disabled',true);
        }
    });

    $(".allPlayerValuesB").change(function(){
        var seg_value = this.id;
        if($(this).is(':checked')) {
            $("#seg_" + seg_value + "_B input").prop('disabled',false);
        }
        else {
            $("#seg_" + seg_value + "_B input").prop('disabled',true);
        }
    });

    $("#abTest").change(function() {
        if(this.checked) {
            $(".showOnABTest").fadeIn();
        }
        else {
            $(".showOnABTest").fadeOut();
        }
    });

    $("#bySMS").change(function() {
        if(this.checked) {
            $("#SMS_table_A").fadeIn();
        }
        else {
            $("#SMS_table_A").fadeOut();
        }
    });

    $("#bySMSb").change(function() {
        if(this.checked) {
            $("#SMS_table_B").fadeIn();
        }
        else {
            $("#SMS_table_B").fadeOut();
        }
    });

    $("#byOMG").change(function() {
        if(this.checked) {
            $("#OMG_table_A").fadeIn();
        }
        else {
            $("#OMG_table_A").fadeOut();
        }
    });

    $("#byOMGb").change(function() {
        if(this.checked) {
            $("#OMG_table_B").fadeIn();
        }
        else {
            $("#OMG_table_B").fadeOut();
        }
    });

    $("#selectAllBrands").click(function() {
        var checked = !$(this).data('checked');
        $('.allBrands').prop('checked', checked);
        $(this).data('checked', checked);
        if($('.allBrands').is(':checked')) {
            $(".allBrands input").prop('disabled',false);
        }
        else {
            $(".allBrands input").prop('disabled',true);
        }
    });
    $("#selectMainBrands").click(function() {
        var checked = !$(this).data('checked');
        $('.mainBrands').prop('checked', checked);
        $(this).data('checked', checked);
        if($('.mainBrands').is(':checked')) {
            $(".mainBrands input").prop('disabled',false);
        }
        else {
            $(".mainBrands input").prop('disabled',true);
        }
    });
    $("#selectSmallBrands").click(function() {
        var checked = !$(this).data('checked');
        $('.smallBrands').prop('checked', checked);
        $(this).data('checked', checked);
        if($('.smallBrands').is(':checked')) {
            $(".smallBrands input").prop('disabled',false);
        }
        else {
            $(".smallBrands input").prop('disabled',true);
        }
    });
    $(".allBrands").change(function(){
        var brand = this.id;
        if($(this).is(':checked')) {
            $("." + brand + "-txtFiled").prop('disabled',false);
        }
        else {
            $("." + brand + "-txtFiled").prop('disabled',true);
        }
    });

    $("#selectAllPlayerValuesA").click(function() {
        var checked = !$(this).data('checked');
        $('.allPlayerValuesA').prop('checked', checked);
        $(this).data('checked', checked);
        if($('.allPlayerValuesA').is(':checked')) {
            $(".allPlayerValuesA input").prop('disabled',false);
        }
        else {
            $(".allPlayerValuesA input").prop('disabled',true);
        }
    });
    $("#selectVipPlayerValuesA").click(function() {
        var checked = !$(this).data('checked');
        $('.vipPlayerValuesA').prop('checked', checked);
        $(this).data('checked', checked);
        if($('.vipPlayerValuesA').is(':checked')) {
            $(".vipPlayerValuesA input").prop('disabled',false);
        }
        else {
            $(".vipPlayerValuesA input").prop('disabled',true);
        }
    });

    $("#selectAllPlayerValuesB").click(function() {
        var checked = !$(this).data('checked');
        $('.allPlayerValuesB').prop('checked', checked);
        $(this).data('checked', checked);
        if($('.allPlayerValuesB').is(':checked')) {
            $(".allPlayerValuesB input").prop('disabled',false);
        }
        else {
            $(".allPlayerValuesB input").prop('disabled',true);
        }
    });
    $("#selectVipPlayerValuesB").click(function() {
        var checked = !$(this).data('checked');
        $('.vipPlayerValuesB').prop('checked', checked);
        $(this).data('checked', checked);
        if($('.vipPlayerValuesB').is(':checked')) {
            $(".vipPlayerValuesB input").prop('disabled',false);
        }
        else {
            $(".vipPlayerValuesB input").prop('disabled',true);
        }
    });
});

//window.setInterval(function(){
//    save();
//}, 5000);

function segmentSelect3() {
    if(document.getElementById('segmentSelection3').value == "Bingo") {
        if(document.getElementById('slots').checked) {
            alert("Pay Attention!! You choose Bingo segment and Wink Slots brand – Remember that Wink Slots is an IG arena and don’t have bingo games. None of Wink Slots players will get the communication!");
        }
    }
}

function save() {
    var data = $("#crmForm").serializeArray();
    localStorage.setItem("flag","set");
    $.each(data,function(i,obj){
        localStorage.setItem(obj.name, obj.value);
    });
    alert("Your work has been saved!");
}

function unsave() {
    localStorage.setItem("flag","unset");
    localStorage.clear();
    alert("Your work has been cleared");
}

function checkForm(form) {
    if(form.churnPassword.value != "pass"){
        form.churnPassword.focus();
        return false;
    }
}

