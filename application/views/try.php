<!DOCTYPE html>
<html>
<head>
    <script>
        function testVariable() {
            var y = document.getElementById("QTY").value;          
            var x = document.getElementById("textTWO").value;
            var result = x*y;
            document.getElementById('spanResult').textContent = result;
        }
    </script>
</head>
<body> 
    <input type="number" min="1" max="25" name="QTY" class="price" id="QTY" value="1">
    <input type="text" id="textTWO" />
    <button  onclick="testVariable()">Submit</button> <br />
    <span id="spanResult">

    </span>
   
     
</body>
</html>