<html>
<body>
<input type='number' id='first' onkeyup="validateNumber()"/><br>
<input type='number' id='second' onkeyup="validateNumber()"/><br>
<script type="text/javascript" >
function validateNumber()
{
  var first = parseInt(document.getElementById('first').value, 10);
  var second = parseInt(document.getElementById('second').value, 10);

  if(first > second){
    document.getElementById('sub').disabled=false;
  } else {
    document.getElementById('sub').disabled=true;   
  }
}
</script>
<input type="submit" id="sub" disabled="disabled" />
</body>
</html>
=======================================================================================
<input type='number' id='first' /><br>
<input type='number' id='second' /><br>

<input type="submit" id="sub" disabled="disabled" />

function validateNumber() {
    var first = document.getElementById('first').value;
    var second = document.getElementById('second').value;

    if (first > second) {
        document.getElementById('sub').disabled = false;
    } else {
        document.getElementById('sub').disabled = true;
    }
}

var events = ["keyup", "click", "change"];

var elem1 = document.getElementById("first");
var elem2 = document.getElementById("second");

for ( var i=0; i<events.length; i++ )
{
    elem1.addEventListener(events[i], validateNumber);
    elem2.addEventListener(events[i], validateNumber);
}
