<?php
include 'header.php';
?>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<script src="js/jquery.min.js"></script>
<style>
    .CodeMirror { height: 72vh; border: 0px solid #ddd; }
</style>
<div class="container-fluid bg-dark">
    <div class="row">
        <div class="col-1">
        </div>
        <div class="col-10">
            <h3 class="text-white text-center"><img src="images/codeeasy.png" alt="Papyrus" class="" style="width: 24px;">&nbsp;&nbsp;Code Easy</h3>
        </div>
        <div class="col-1" style="padding: 0px 0px 0px 0px;">
            <div class=" float-right">
            <!-- <a  class="btn btn-danger bor-twen" href="#">Run&nbsp;&nbsp;<i class="fas fa-chevron-circle-right"></i></a> -->
            <a href="#" id="btnhe" name="btnhe" class="btn btn-danger bor-none" style="">Run&nbsp;&nbsp;<i class="fas fa-chevron-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="overflow:auto;">
    <div class="btn-group">
        <button type="button" id="btnhtml" name="btnhtml" class="btn btn-primary bor-ten">&lt;html&gt;</button>
        <button type="button" id="btnhtmlend" name="btnhtmlend" class="btn btn-secondary bor-ten">&lt;/html&gt;</button>
        <button type="button" id="btnhead" name="btnhead" class="btn btn-primary">&lt;head&gt;</button>
        <button type="button" id="btnheadend" name="btnheadend" class="btn btn-secondary">&lt;/head&gt;</button>
        <button type="button" id="btntitle" name="btntitle" class="btn btn-primary">&lt;title&gt;</button>
        <button type="button" id="btntitleend" name="btntitleend" class="btn btn-secondary">&lt;/title&gt;</button>
        <button type="button" id="btnbody" name="btnbody" class="btn btn-primary">&lt;body&gt;</button>
        <button type="button" id="btnbodyend" name="btnbodyend" class="btn btn-secondary">&lt;/body&gt;</button>
        <button type="button" id="btndiv" name="btndiv" class="btn btn-primary bor-ten">&lt;div&gt;</button>
        <button type="button" id="btndivend" name="btndivend" class="btn btn-secondary bor-ten">&lt;/div&gt;</button>
        <button type="button" id="btnscript" name="btnscript" class="btn btn-primary bor-ten">&lt;script&gt;</button>
        <button type="button" id="btnscriptend" name="btnscriptend" class="btn btn-secondary bor-ten">&lt;/script&gt;</button>
        <button type="button" id="btnh1" name="btnh1" class="btn btn-primary bor-ten">&lt;h1&gt;</button>
        <button type="button" id="btnh2" name="btnh2" class="btn btn-secondary bor-ten">&lt;h2&gt;</button>
        <button type="button" id="btnh3" name="btnh3" class="btn btn-primary bor-ten">&lt;h3&gt;</button>
        <button type="button" id="btnh4" name="btnh4" class="btn btn-secondary bor-ten">&lt;h4&gt;</button>
        <button type="button" id="btnh5" name="btnh5" class="btn btn-primary bor-ten">&lt;h5&gt;</button>
        <button type="button" id="btnh6" name="btnh6" class="btn btn-secondary bor-ten">&lt;h6&gt;</button>
        <button type="button" id="btnp" name="btnp" class="btn btn-secondary bor-ten">&lt;p&gt;</button>
        <button type="button" id="btninptxt" name="btnh6" class="btn btn-secondary bor-ten">&lt;input:text&gt;</button>
        <button type="button" id="btngetelem" name="btnh6" class="btn btn-secondary bor-ten">&lt;java:getelem&gt;</button>
    </div>
</div>
<div class="container-fluid" style="margin-top: 0%;">
    <div class="row">
        <div class="col-xl-6" style="padding:0px 0px 0px 0px;">
            <div class="border bg-white" style="height: 95vh;">
                <h4 class="text-center">Code</h4>
                <textarea name="bb" id="bb" class="form-control border" style="border: 2px solid #000;"></textarea>
            </div>
        </div>
        <div class="col-xl-6" style="padding:0px 0px 0px 0px;">
            <div class="border bg-white" style="height: 95vh;">
                <h4 class="text-center">Preview</h4>
                <iframe frameborder="0" id="exec" class="" style="width: 100%; height: 90%;" name="exec"></iframe>            
            </div>
        </div>
    </div>
</div>
<script>
    function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        h = checkTime(h);
        m = checkTime(m);
        s = checkTime(s);
        // alert('hello');
        $('#dt1').html(h + ":" + m + ":" + s);
        var t = setTimeout(startTime, 500);
    }
    function checkTime(i) {
        if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
        return i;
    }
    $(document).ready(function(){
        // startTime();
    })
    $("#btnhe").click(function(){
        // alert('hello');
        //$('#result').contents().find('html').html=editor.getValue();

        $('#exec').contents().find('body').html(editor.getValue());
        // alert(editor.getValue());
        // var contents = $('#exec').contents(),
        
        // styleTag = $('<style></style>').appendTo(contents.find('head'));
        // styleTag.text(editorst.getValue());
        
       
        //scriptTag.text(editorjs.getValue());
    });
    $('#btnclear').click(function(){
        editor.setValue('');
    })
</script>

<script>
  //Load CodeMirror
  var editor = CodeMirror.fromTextArea(document.getElementById("bb"), {
        lineNumbers: true,
        mode: "application/x-ejs",
        indentUnit: 4,
        indentWithTabs: true
      });
</script>

<script src="codeeasyhtml.js"></script>