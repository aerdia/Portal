// /app/assets/html/specifyLinkPermissions.js

function specifyLinkPermissions(linkText, users) {
    var ul = document.getElementById("link-permissions");
    var li = document.createElement("li");
    li.innerHTML = linkText;
    for (var i = 0; i < users.length; i++) {
      var checkbox = document.createElement("input");
      checkbox.type = "checkbox";
      checkbox.name = "users[]";
      checkbox.value = users[i];
      li.appendChild(checkbox);
    }
    ul.appendChild(li);
  }
  