/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function openDrowpDown1() {
    console.log('clicked');
    document.getElementById("myDropdown1").classList.remove("hide");
    document.getElementById("myDropdown1").classList.toggle("show");
    document.getElementById("myDropdown3").classList.add("hide");
    document.getElementById("myDropdown2").classList.add("hide");
    

}
function openDrowpDown2() {
    console.log('clicked');
    document.getElementById("myDropdown2").classList.remove("hide");
    document.getElementById("myDropdown2").classList.toggle("show");
    document.getElementById("myDropdown1").classList.add("hide");
    document.getElementById("myDropdown3").classList.add("hide");
   
}
function openDrowpDown3() {
    console.log('clicked');
    document.getElementById("myDropdown3").classList.remove("hide");
    document.getElementById("myDropdown3").classList.toggle("show");
    document.getElementById("myDropdown1").classList.add("hide");
    document.getElementById("myDropdown2").classList.add("hide");
   
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}