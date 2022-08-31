<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
<div>
  <table>
 <span style="color:red">Here is the list who crossed 60 speed </span>: <p id="demo"></p>
   <span style="color:red">And The total number of speeds those have crossed 60</span> :<p id="demo1"></p>

    

  </table>


</div>

 
<script>
      
       <?php
  $ch = curl_init('http://103.219.147.17/api/json.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, 0);
$response = curl_exec($ch);
curl_close($ch);?>


   let data = <?php echo $response; ?>;
   
   let parsedata = data.data.split(',');

   let str = parsedata.toString();

   // console.log (str);

  // let str = 
let re = /speed=\d+/g

let result = str.match(re).flatMap(e => e.match(/\d+/)).filter(e => parseInt(e) > 60)
let length = result.length

document.getElementById("demo").innerHTML = result+"<br>";


document.getElementById("demo1").innerHTML = length;

console.log(result)
console.log(length)
</script>
</body>
</html>