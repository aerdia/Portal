// /app/assets/html/saveHtmlCode.js

function saveHtmlCode(htmlCode, folderName) {
    var file = new File(folderName + ".html", htmlCode);
    file.save();
  }
  