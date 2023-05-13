// /app/assets/html/exportHtmlCode.js

function exportHtmlCode(htmlCode) {
    var file = new File(htmlCode + ".html", htmlCode);
    file.save();
  }
  