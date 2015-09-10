<!doctype html>
<html lang="ee">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script>
        document.addEventListener("click",function(){
            document.getElementById("pic").src="http://petapixel.com/assets/uploads/2013/06/vtWFwyj.jpg";
        });
    </script>
</head>
<body>
    <button onclick="alert('Tere Maailm!')">Tere Maailm</button><br>
    <a href="http://www.khk.ee" onclick="alert('Tere Maailm');">Tere Maailm</a><br>
    <a href="" onclick="alert('J‰‰me siia!');">J‰‰me Siia</a><br>

    <img id="pic" width="200" height="235" src="http://www.thedailycat.com/health/advances/cat_identification/images/large.jpg">
</body>
</html>
