function showFlag(country) {
    var x = document.getElementById(country);
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
}