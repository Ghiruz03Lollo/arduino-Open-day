<!DOCTYPE html5>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Progetto arduino</title>
</head>

<!-- <style>
    body{
        background-color:rgb(242, 244, 246);
    }
    </style> -->

<p class="btn-on" onclick="on_off()">
    <span class="btn-on-circle"></span>
    <span class="btn-on-text">ON</span>
</p>

<script>
    function on_off(type) {
        var btn = document.getElementsByClassName("btn-on")[0];
        var circle = document.getElementsByClassName("btn-on-circle")[0];
        var text = document.getElementsByClassName("btn-on-text")[0];

        if (!type) {
            btn.style = "background-color: red;"
            circle.style = "left: 40px;background-color: white;box-shadow: 0 0 10px #888;";
            text.style = "right: 30px;color: white;";
            text.innerText = "OFF";
        }
        else {
            btn.style = "";
            circle.style = "";
            text.style = "";
            text.innerText = "ON";
        }
        btn.setAttribute("onclick", "on_off(" + !type + ")");
    }
    on_off(false)
</script>
<!-- <style>
    .btn-on{
        width: 60px;
        height: 25px;
        margin: 0 3px;
        border-radius: 25px;
        font-size: 14px;
    }
    .btn-on{
        cursor: pointer;
        position: relative;
        border: 1px solid white;
        background-color: #12B090;
    }
    .btn-on-circle{
        position: absolute;
        width: 15px;
        height: 15px;
        top: 5px;
        left: 5px;
        background-color: rgb(255, 255, 255);
        border-radius: 50%;
        box-shadow: 0 0 10px white;
        transition: all .5s;
    }
    .btn-on-text{
        position: absolute;
        right: 10px;
        line-height: 25px;
        color: white;
        transition: all .5s;
    }
    </style> -->

</html>