function updateVisited(checkbox) {
    var siteName = checkbox.id;
    var visited = checkbox.checked ? 1 : 0;
    
    // Send an AJAX request to update the visited status in the database
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../config/update_visited.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          console.log(xhr.responseText);
        } else {
          console.log("Error: " + xhr.status);
        }
      }
    };
    xhr.send("site_name=" + siteName + "&visited=" + visited);
  }