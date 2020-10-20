let nombre="jaime visitacion";
let altura=170;
let datos=document.getElementById("datos");
datos.innerHTML =`<h1>soy la caja de datos</h1>
                <h2>minombre es ${nombre}</h2>`;

   if(altura<=180){
   	datos.innerHTML +='<h1>eres un persona alta</h1>'
   }
