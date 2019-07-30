<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Index.PHP</title>
<style>
    header {
        width: 800px;
        height: 200px;
        /*border-bottom: 1px black solid;*/
        box-shadow: 1px 1px 10px black;
        /*box-shadow: 5px 5px blue, 10px 10px red, 15px 15px green; Borda Colorida*/
        padding: 20px;
        text-align: center;
    }
</style>

    <script type="application/javascript">
        function Armazena(){
            var n1 = document.getElementById("n1").value
            var n2 = document.getElementById("n2").value
            let res = Number(n1) + Number(n2)
            console.log(res)
        }


    </script>

</head>
<body>
    <header>
        <form action="welcome.php" method="post">
            <input type="number" name="t1" id="n1">
            <input type="submit" value="Send Number">
            <input type="number" name="t2" id="n2">
            <input type="submit" value="Send Number Two"><br>
            <br> <input type="submit" value="Calc"  onclick=Armazena() id="calc">
        </form>



    </header>

<?php

echo '<h1> Hello </h1>';
echo $_POST["t1"];
echo $_POST["t2"];
?>



</body>
</html>