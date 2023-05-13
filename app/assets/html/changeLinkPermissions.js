// /app/assets/html/changeLinkPermissions.js

function changeLinkPermissions(linkText, users) {
    var ul = document.getElementById("link-permissions");
    for (var i = 0; i < users.length; i++) {
      var checkbox = document.querySelector("input[value='" + users[i] + "']");
      checkbox.checked = true;
    }
  }
  