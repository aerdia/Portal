// /app/assets/html/previewHtmlCode.js

function previewHtmlCode(htmlCode) {
    var div = document.createElement("div");
    div.innerHTML = htmlCode;
    document.getElementById("preview").appendChild(div);
  }
  