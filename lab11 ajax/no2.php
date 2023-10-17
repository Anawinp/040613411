<?php include("connect.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>no2</title>
    <script>
        function findKey(){
            request = new XMLHttpRequest();
            request.onreadystatechange = showResult;

            let keyword = document.getElementById('search').value;
            let url = "no2-2.php?search="+keyword;
            request.open("GET",url);
            request.send(null);
        }

        function showResult(){
            if(request.readyState == 4 && request.status == 200){
                document.getElementById('result').innerHTML = request.responseText;
            }
        }
    </script>
</head>
<body>
    <label>ค้นหา Username : </label> <input type="text" id="search" name="search" onkeyup="findKey()">
    <div id="result" style="margin-top: 2rem;display: flex;justify-content: center;align-items: center;text-align: center;">

    </div>
</body>
</html>