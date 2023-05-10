var myIndex = 0;
var Index = 0;
quote();
review();

function quote() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(quote, 6000); // Change image every 4 seconds
}
function review() {
    var j;
    var y = document.getElementsByClassName("reviews");
    for (j = 0; j < y.length; j++) {
      y[j].style.display = "none";  
    }
    Index++;
    if (Index > y.length) {Index = 1}    
    y[Index-1].style.display = "block";  
    setTimeout(review, 8000); // Change image every 8 seconds
  }
