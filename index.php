<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./Media/favicon.svg">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>TabNotes</title>
</head>
<body>
    <div class="logo-bar">
        <div class="logo-panel">
            <ul style="list-style-type:none;">
              <li style="float:left;margin:7px 15px;"><img src="./Media/favicon.svg"></li>
              <li class="tabnotes">Tab<span>Notes</span></li>
            </ul>
            <hr class="hr">
        </div>
    </div>

    <div class="top-toolbar">
        <div class="left-bar">
        <button class="btn" onclick="document.execCommand('undo')"><p class="icon"><i class='bx bx-undo' ></i></p></button>
        <button class="btn" onclick="document.execCommand('redo')"><p class="icon"><i class='bx bx-redo' ></i></p></button>
        <button class="btn" onclick="document.execCommand('bold')"><p class="icon"><i class='bx bx-bold icon'></i></p></button>
        <button class="btn" onclick="document.execCommand('underline')"><p class="icon"><i class='bx bx-underline'></i></p></button>
        <button class="btn" onclick="document.execCommand('italic')"><p class="icon"><i class='bx bx-italic icon' ></i></p></button>
        <button class="btn" onclick="document.execCommand('strikethrough')"><p class="icon"><i class='bx bx-strikethrough' ></i></p></button>
        <button class="btn" onclick="document.execCommand('justifyLeft')"><p class="icon"><i class='bx bx-align-left' ></i></p></button>
        <button class="btn" onclick="document.execCommand('justifyCenter')"><p class="icon"><i class='bx bx-align-middle' ></i></p></button>
        <button class="btn" onclick="document.execCommand('justifyRight')"><p class="icon"><i class='bx bx-align-right' ></i></p></button>
        <button class="btn" onclick="document.execCommand('justifyFull')"><p class="icon"><i class='bx bx-align-justify' ></i></p></button>
        <button class="btn" onclick="document.execCommand('insertOrderedList')"><p class="icon"><i class='bx bx-list-ol'></i></p></button>
        <button class="btn" onclick="document.execCommand('insertUnorderedList')"><p class="icon"><i class='bx bx-list-ul' ></i></p></button>
        <button class="btn" onclick="copy()"><p class="icon"><i class='bx bx-copy'></i></p></button>
        <button class="btn" onclick="addlink()"><p class="icon"><i class='bx bx-link' ></i></p></button>
        <button class="btn" onclick="document.execCommand('unlink')"><p class="icon"><i class='bx bx-unlink' ></i></p></button>
        </div>
        <div class="right-bar">
        <input type="text" class="filename" id="filename" placeholder="Filename" spellcheck="false">
                <select class="save" id="save" onchange="fileHandle(this.value); this.selectedIndex=0;">
                    <option value="" selected="" hidden="" disabled="">Save as</option>
                    <option value="new">New File</option>
                    <option value="txt">Save as Text</option>
                    <option value="pdf">Save as pdf</option>
                </select>
        </div>
    </div>

    <div class="container">
        <div class="panel">
            <p class="text">Style</p>
            <select class="heading" id="heading" onchange="document.execCommand('formatBlock', false, this.value); this.selectedIndex=0;">
                <option value="" selected="" hidden="" disabled="">Heading</option>
                <option value="h1">Heading 1</option>
                <option value="h2">Heading 2</option>
                <option value="h3">Heading 3</option>
                <option value="h4">Heading 4</option>
                <option value="h5">Heading 5</option>
                <option value="h6">Heading 6</option>
            </select>
            <hr>
            <p class="text">Font Size</p>
            <select class="font-size" id="font-size" onchange="document.execCommand('fontSize', false, this.value); this.selectedIndex=0;">
                <option value="" selected="" hidden="" disabled="">Font size</option>
                <option value="1">very small</option>
                <option value="2">small</option>
                <option value="3">regular</option>
                <option value="4">medium</option>
                <option value="5">large</option>
                <option value="6">extra large</option>
            </select>
            <hr>
            <ul style="list-style-type:none;">
                <li class="color" style="float:left;padding-right:15px;">Color : </li>
                <li style="float:left;"><input type="color" value="#D810F9" id="style1" oninput="document.execCommand('foreColor', false, this.value);"></li>
            </ul>
            <hr>
            <ul style="list-style-type:none;">
                <li class="color" style="float:left;padding-right:15px;">Background Color : </li>
                <li style="float:left;"><input type="color" value="#2029F8" id="style1" oninput="document.execCommand('hiliteColor', false, this.value);"></li>
            </ul>
        </div>

        <div class="text-area" id="text-area" contenteditable="true" spellcheck="false"></div>
    </div>

    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
