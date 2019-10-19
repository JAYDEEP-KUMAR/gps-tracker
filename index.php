<!DOCTYPE html>
<html>
<body>

<p>Click the button to get your coordinates.</p>
    
    
    
    <form name="myform" action="back_index.php" method="post">
    
    
    <input hidden name="lat" id="lat">
        <input hidden name="lng" id="lng">
    <button onclick="getLocation()" type="submit">Add</button>
    
    </form>
    
    
    

<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
    
    
document.getElementById("lat").value = position.coords.latitude;
    
    document.getElementById("lng").value = position.coords.longitude;
    
    
      document.myform.submit();


}
</script>

</body>
</html>
