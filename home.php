<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!--    <link rel="stylesheet" type="text/css" href="style.css">-->
    <title>Home</title>
</head>
<body>
<?php
include 'header.php';
?>
<div class="container">
    <div class="row justify-content-center" style="margin: 100px;margin-top: 15px">
        <div class="col">
            <img id="myImg" src="img/mainImage.png" style="margin: 10px;width: 100%;height: auto;border-radius: 40px">
        </div>
        <div class="col" style="margin-left: 10px">
            <div class="row" style="margin-top: 15px">
                <button id="btUp" class="button2" onclick="clickButt()">Upload File</button>
                <input type="file" id="inputFile" style="display: none" accept="image/*" onchange="setImage(event)"/>
                <button class="button2" hidden id="btShow" onclick="showCap()">Show Caption</button>
            </div>
<!--            <div class="row" style="margin-top: 10px">-->
<!--                <textarea cols="45" rows="6" class="area1" disabled="" id="textarea" hidden></textarea>-->
<!--            </div>-->
            <div class="rows">
                <a class="text2" style="color: #AC5252;width: 100%" id="pred" hidden><b>Caption Predict</b></a>
            </div>
            <div class="row" style="margin-top: 5px">
                <textarea cols="45" rows="6" class="area1" disabled="" id="textarea" hidden></textarea>
            </div>
            <div class="row" style="margin-top: 10px">
                <button class="button2" onclick="editCap()" hidden id="btEdit">Edit Caption</button>
<!--                <button class="button2" onclick="sendCap()" hidden id="btSend">Send New Caption</button>-->
            </div>
            <div class="rows">
                <a class="text2" style="color: #AC5252;width: 100%" id="edit" hidden><b>Edit Caption</b></a>
            </div>
            <div class="row" style="margin-top: 10px">
                <textarea cols="45" rows="6" class="area1" id="textarea2" hidden></textarea>
            </div>
            <div class="row" style="margin-top: 10px">
<!--                <button class="button2" onclick="editCap()" hidden id="btEdit">Edit Caption</button>-->
                <button class="button2" onclick="sendCap()" hidden id="btSend">Send New Caption</button>
            </div>

<!--            <input class="button2" type="file" id="img" name="img" accept="image/*" onchange="readURL(this)">-->

        </div>
    </div>
<!--    <div class="row">-->
<!--        <div class="col-7 align-self-center" style="text-align: center">-->

<!--        </div>-->
<!--    </div>-->
</div>
<script>
    function sendCap() {
        document.getElementById("btSend").hidden = true;
        document.getElementById("btEdit").hidden = true;
        document.getElementById("textarea2").disabled = true;
    }
    function editCap() {
        document.getElementById("btShow").hidden = true;
        document.getElementById("textarea2").hidden = false;
        document.getElementById("edit").hidden = false;
        document.getElementById("btSend").hidden = false;
        document.getElementById("textarea2").disabled = false;
    }
    function clickButt(){
        document.getElementById('inputFile').click();
    }
    function showCap() {
        document.getElementById("textarea").value = "คำธิบายภาพ";
        document.getElementById("btEdit").hidden = false;
        document.getElementById("textarea").hidden = false;
        document.getElementById("pred").hidden = false;
    }
    function setImage(event) {
        document.getElementById("myImg").src = URL.createObjectURL(event.target.files[0]);
        document.getElementById("btShow").hidden = false;

    }
    // var loadFile = function (event) {
    //     var image = document.getElementById('myImg');
    //     image.src = URL.createObjectURL(event.target.files[0])
    // }
    // function readURL(input) {
    //     if (input.files && input.files[0]) {
    //         var reader = new FileReader();
    //         reader.onload = function (e) {
    //             $('#myImg')
    //                 .attr('src', e.target.result)
    //                 .width(250)
    //                 .height(200);
    //         };
    //         alert("5555");
    //         reader.readAsDataURL(input.files[0]);
    //     }
    // }
</script>

</body>
</html>