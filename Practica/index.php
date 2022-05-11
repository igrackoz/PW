<!DOCTYPE html>
<html>
<head>
    <title>Programaci&oacuten Web</title>
</head>
<body>
        <h1> Men&uacute </h1>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Imagen</th>
            </tr>
            <tr>
            <td>
                <h2> Hamburguesa </h2> 
                <a href="#">Haz click para ver la informaci&oacuten de la Hamburguesa</a>
            </td>
            <td>
                <img src= "Imagenes/Hamburguesa.jpg" alt="Imagen de Hamburguesa" width="300" height="200">
            </td>
            </tr>
            <tr>
            <td>
                <h2> Pizza </h2>
                <a href="#">Haz click para ver la informaci&oacuten de la Pizza</a>
            </td>
            <td>
                <img src= "Imagenes/Pizza.jpg" alt="Imagen de Pizza" width="300" height="200">
            </td>
        </tr>
        </table>    
        <form>
            <fieldset>
            <legend>cliente</legend>
            <p><label> Nombre del cliente: <input> </label> </p>
            <p><label> Telefono: <input type = tel> </label> </p>
            <p><label> email del cliente: <input type = email> </label> </p>
            <p><label> Hora de entrega <input type = time min = "11:00" max = "21:00" step = "900"> </label> </p>
            <p><label>Instrucciones de entrega:<textarea></textarea></label></p>

            <p><label> Ejemplo de button: <input type = "button" value = "click"><label></p>
            <button type = "button"> click</button>
            <p><label> Ejemplo reset: <input type = "reset" value = "click"><label></p>
            <p><label> Ejemplo de color: <input type = "color"><label></p>
            <p><label> Ejemplo de fecha/date: <input type = "date"><label></p>
            <p><label> Ejemplo de number: <input type = "number"><label></p>
            <p><label> Ejemplo de *hidden*: <input type = "hidden"><label></p>
            </fieldset>

            <fieldset>
            <legend>Pizza</legend>
            <p><label> <input type = radio name = size>Chica  </label> </p>
            <p><label> <input type = radio name = size>Mediana  </label> </p>
            <p><label> <input type = radio name = size>Grande </label> </p>
            
            <fieldset>
            <legend>Ingredientes</legend>
            <p><label> <input type = checkbox >Tocino  </label> </p>
            <p><label> <input type = checkbox >Extra queso  </label> </p>
            <p><label> <input type = checkbox >Piña </label> </p>
            </fieldset>
        </form>
    </body>
</html>