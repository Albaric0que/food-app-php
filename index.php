<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aplicación de comida a domicilio</title>
</head>
<body>
    <h1>TU RESTAURANTE DE COMIDA VEGETARIANA A DOMICILIO</h1>

        <form action="result.php" method="POST">
            <div class="container">
                <div class="card">
                    <img src="./images/burger.jpeg" alt="Hamburguesa Vegetariana">
                    <label for="burger">HAMBURGUESA VEGETARIANA</label>
                    <input type="number" name="burger" min="0">
                </div>

                <div class="card">
                    <img src="./images/pasta.jpeg" alt="Pasta al Pesto">
                    <label for="pasta">PASTA AL PESTO</label>
                    <input type="number" name="pasta" min="0">
                </div>

                <div class="card">
                    <img src="./images/pizza.jpeg" alt="Pizza Caprese">
                    <label for="pizza">PIZZA CAPRESE</label>
                    <input type="number" name="pizza" min="0">
                </div>

                <div class="card">
                    <img src="./images/quinoa.jpeg" alt="Quinoa vegetariana">
                    <label for="quinoa">QUINOA VEGETARIANA</label>
                    <input type="number" name="quinoa" min="0">
                </div>

                <div class="card">
                    <img src="./images/agua.jpeg" alt="Botella de agua">
                    <label for="water">BOTELLA DE AGUA</label>
                    <input type="number" name="water" min="0">
                </div>

                <div class="card">
                    <img src="./images/cerveza.jpeg" alt="Botellin de cerveza">
                    <label for="beer">BOTELLA DE CERVEZA</label>
                    <input type="number" name="beer" min="0">
                </div>

                <div class="card">
                    <img src="./images/naranja.jpeg" alt="Refresco de naranja">
                    <label for="orange">REFRESCO DE NARANJA</label>
                    <input type="number" name="orange" min="0">
                </div>
            </div>     
            <input class="btn" type="submit" value="¡HACER PEDIDO!">
        </form>

</body>
</html>