// /app/assets/html/addHtmlCodeToSidebar.js

function addHtmlCodeToSidebar(htmlCode, linkText) {
    var li = document.createElement("li");
    li.innerHTML = linkText;
    li.href = "html/" + linkText + ".html";
    document.getElementById("sidebar").appendChild(li);
  }
  