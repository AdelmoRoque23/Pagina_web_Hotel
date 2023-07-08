

//calula el sub total d ela cantidad por el precio en el form pedidos
function calcular(){
    try{
        var a= parseFloat(document.getElementById("cant").
        value) || 0,
        b=parseFloat(document.getElementById("precio").value)
        || 0;
        document.getElementById("subtotal").value = a * b;

// PERMITE SOLO NUMEROS

    }catch (e) {}
}

//caputara el valor de un input select form pedidos
$("#productos").change(function() {
    var valor = $(this).val(); // Capturamos el valor del select productos  
    var texto = $(this).find('option:selected').text(); // Capturamos el texto del option seleccionado
    $("#precio").val(valor);
    $("#subtotal").val(valor);
    $("#producto").val(texto);


    //activa el button btn_agregarpedido
    let btn = document.getElementById("productos")
    btn.addEventListener("click", function(event) {
      if(event) {
        document.getElementById("btn_agregarpedido").disabled = false        
      }
    })
  });


//activa la habitacion con el checbox
var eventcheck = document.querySelector("input[name=checkbox]");
eventcheck.addEventListener( 'change', function() {
if(this.checked) {
  document.getElementById("id_habitacion").disabled = false   
} else {
  document.getElementById("id_habitacion").disabled = true
  document.getElementById("bt_enviarpedido").disabled = true
} });


    //activa el button enviar pedido
function act_btn_enviarpedido(){
  let btn = document.getElementById("id_habitacion")
  btn.addEventListener("click", function(event) {
    if(event) {
      document.getElementById("bt_enviarpedido").disabled = false
    }
  })
}


  //permite solo numeros y decimal
  function valideKey(evt){
			
    // code is the decimal ASCII representation of the pressed key.
    var code = (evt.which) ? evt.which : evt.keyCode;
    
    if(code==8) { // backspace.
      return true;
    } else if(code>=48 && code<=57) { // is a number.
      return true;
    } else{ // other keys.
      return false;
    }
  }


    //Agregar pedido
    function agregar_pedido(){
      var btn=document.getElementById("btn_agregarpedido")
      btn.addEventListener("click", function(event){
        if(event){
          alert("Producto agregado.");
        }
      })
    }
  

  //pedido realizado
  function realizar_pedido(){
    var btn=document.getElementById("bt_enviarpedido")
    btn.addEventListener("click", function(event){
      if(event){
        alert("Pedido Realizado");
      }
    })
  }







  /* inicio de habitaciones */

function abrirNoticia(elemento)
{
  switch (elemento.id) {
    case "hab101":
      window.document.getElementById.addEventListener("categoria").value="Habitación simple";
      document.getElementById("nivel").value="Piso 1";
      document.getElementById("precio").value="s/ 150.00";
      document.getElementById("otros").value="1 cama";
      break;
    case "hab102":
      alert("habitacion 2");
      break;
    case "hab102":
      alert("habitacion 1");
      break;
    case "hab103":
      alert("habitacion 1");
      break;
    case "hab104":
      alert("habitacion 1");
      break;
    default:
      console.log("No hay habitaciones, Disponibles");
      break;
  }
}


