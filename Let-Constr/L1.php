
<!DOCTYPE html>
<html>
<body>

<h2>Declaring a Variable Using let</h2>

<p id="demo"></p>

<script>
var  x = 10;
// Here x is 10
{  
  let x = 2;
  // Here x is 2
}
// Here x is 10
document.getElementById("demo").innerHTML = x;
</script>

</body>
</html>

