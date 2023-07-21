
// let btn = document.querySelector("#btn").addEventListener("click",()=>{

//   console.log("lola mundo");

//   const http = new XMLHttpRequest();
//   //medodos de Ajax
//   http.open("GET","suma.php",true);
//   //Envia parametros de ajax 
//   http.send();
//   // metodo de ajax
//   http.onreadystatechange = function() {
    
//      if(this.readyState == 4 && this.status == 200){
//          let data = this.response;
//          console.log(data);
    
//          //creamos la seccion en la que insertamos el 
//          //objeto para esto debemos limpiar cada ves que pasa 
//          //por la iteración.
//      const infotb = document.querySelector('#infotb');
//        infotb.innerHTML= data;
//      }



//      };



// })


let btn2 = document.querySelector("#btn2").addEventListener("click",()=>{

  console.log("hola mundo");

  const http2 = new XMLHttpRequest();
  //medodos de Ajax
  http2.open("GET","server/Consulta_select.php",true);
  //Envia parametros de ajax 
  http2.send();
  // metodo de ajax
  http2.onreadystatechange = function() {
    
     if(this.readyState == 4 && this.status == 200){
         let data2 = this.response;
         console.log(data2);
    
         //creamos la seccion en la que insertamos el 
         //objeto para esto debemos limpiar cada ves que pasa 
         //por la iteración.
     const consulta = document.querySelector('#consulta');
     consulta.innerHTML= data2;
     }

     
// let btn = document.querySelector("#btn").addEventListener("click",()=>{

//      console.log("lola mundo");

//      const http = new XMLHttpRequest();
//      //medodos de Ajax
//      http.open("GET","suma.php",true);
//      //Envia parametros de ajax 
//      http.send();
//      // metodo de ajax
//      http.onreadystatechange = function() {
       
//         if(this.readyState == 4 && this.status == 200){
//             let data = JSON.parse(this.responseText);
//             console.log(data);
       
//             //creamos la seccion en la que insertamos el 
//             //objeto para esto debemos limpiar cada ves que pasa 
//             //por la iteración.
//         const infotb = document.querySelector('#infotb');
//           infotb.innerHTML= '';

//           for(let item of data){
//              infotb.innerHTML +=
//          `<tr>
//              <th scope="row">🎬</th>
//              <td>${item.titulo}</td></td>
//              <td>${item.creador}</td>
//            </tr>`

//           }
        
//         }

     };



})