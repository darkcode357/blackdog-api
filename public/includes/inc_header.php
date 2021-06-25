<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlackDog - Login</title>

    <link rel="stylesheet" href="./css/pallete.css">
    <link rel="stylesheet" href="./css/header.css">
</head>
<body>
<header id="__header">
    <div class="navbar">
        <div class="icon">
            <input id="menuCheckbox" type="checkbox" class="menuToggle">
            <label for="menuCheckbox">
                <div class="icon-burguer">
                    <span class="hamburguer"></span>
                </div>
            </label>
        </div>
        <ul class="menu-items">
            <li>Exemplo 1</li>
            <li>Exemplo 2</li>
            <li>Exemplo 3</li>
        </ul>
        <div class="user">
            <p>
                <a href="login">Entre</a> ou
                <a href="cadastro">Cadastre-se</a>
            </p>
        </div>
    </div>
</header>
<div id="__inv-div"></div>
<script>
    let header = document.getElementById('__header')
    let headerHeight = header.clientHeight;
    document.getElementById('__inv-div').style.padding = `${(headerHeight/2)}px`
</script>
<div class="menu" id="lateralMenu">
    <div class="items">
        <ul>
            <li>Exemplo 1</li>
            <li>Exemplo 2</li>
            <li>Exemplo 3</li>
        </ul>
    </div>
</div>
<script>
    document.getElementById('menuCheckbox').addEventListener('click', function(){
        if(document.getElementById('lateralMenu').classList.contains('menuOn')){
            document.getElementById('lateralMenu').classList.add('menuOff');
            document.getElementById('lateralMenu').classList.remove('menuOn');
        } else {
            document.getElementById('lateralMenu').classList.remove('menuOff');
            document.getElementById('lateralMenu').classList.add('menuOn');
        }
    });
</script>