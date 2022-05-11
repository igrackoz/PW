<!DOCTYPE  html>
<html>

<head>
    <title>Programacion weeb</title>
</head>

<body>
   
    <h1> Menu </h1>

    <p> Bienvenidos </p>

    <table>
        <tr> 
           <th>Nombre </th>
           <th>Imagen </th>

        </tr>
        <tr>
            <td>
                <h2> Hamburguesa </h2>
                <a href="#">click para ver la informacion de la Hamburguesa </a>
            </td>
            <td>
                <img src = "imagenes/recetas-de-hamburguesas-caseras-de-carne-molida.jpg"
                alt = "imagen de Hamburguesa"whidth="200" height="200" >
            </td>
        </tr>

        <tr>
            <td>
                <h3> Pizza   </h3>
                <a href="#">click para ver la informacion de la Pizza </a>
            </td>
            <td>
                <img src = "imagenes/Animate-a-disfrutar-una-deliciosa-pizza-de-salchicha-Foto-destacada.png"
                alt = "imagen de Pizza"whidth="200" height="200" >
            </td>
        </tr>
    </table>
     <form>
        <fieldset>
            <legend> cliente </legend>
         <p><label> nombre del cliente:<input></label></p>
         <p><label> Telefono:<input type=tel></label></p>
         <p><label>email del cliente:<input type=email></label></p>
         <p><label> Horario de entrega:<input type=time min="11:00" max="21:00" step="900"></label></p>
         <p><label>Intrucciones de entrega:<texttarea></texttarea></label></p>

         <p><label>ejemplo de button:<input type="button" value="click"></label></p>
         <button type="button">click </button>
         <p><label>ejemplo de reset:<input type="reset" value="Click" ></label></p>
         <p><label>ejemplo de color:<input type="color"></label></p>
         <p><label>ejemplo de fecha:<input type="date"></label></p>
         <p><label>ejemplo de numero:<input type="number" min="1" max="20"></label></p>
         <p><label>ejemplo de *hidden*:<input type="hidden"></label></p>
        </fieldset>

           <fieldset>
            <legend> pizza </legend>

         <p><label><input type=radio name =size>chica</label></p>
         <p><label><input type=radio name =size>mediana</label></p>
         <p><label><input type=radio name =size>grande</label></p>
 
           </fieldset>

           <fieldset>
            <p><label><input type=checkbox>tocino</label></p>
            <p><label><input type=checkbox>extra queso</label></p>
            <p><label><input type=checkbox>piña</label></p>

           </fieldset>
    </form>
</body>

</html>
