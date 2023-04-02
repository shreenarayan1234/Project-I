function myFunction(evt, eventName) {
    var i, tabcontent, menulink;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    menulink = document.getElementsByClassName("menulink");
    for (i = 0; i < menulink.length; i++) {
      menulink[i].className = menulink[i].className.replace(" active", "");
    }
    document.getElementById(eventName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();