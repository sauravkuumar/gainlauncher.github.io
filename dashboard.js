function openNav() {
    document.getElementById("main").style.marginLeft = "350px";
    document.getElementsByClassName("sidebar")[0].style.width = "350px";
    document.getElementsByClassName("container")[0].style.width = "550px";
    
  }
  
  function closeNav() {
    document.getElementById("main").style.marginLeft = "0";
    document.getElementsByClassName("sidebar")[0].style.width = "0";
  }
  