const realFileBtn = document.getElementById("real-file");
const customBtn = document.getElementById("custom-button");

customBtn.addEventListener("click", function() {
  realFileBtn.click();
});

realFileBtn.addEventListener("change", function() {
  if(realFileBtn.value) {
    document.getElementById("click").click();
  }
});
