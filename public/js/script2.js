$(document).ready(function(){
  Carga();
});

function Carga(){
  var tablaDatos = $("#valores");
  var route = "http://localhost:8000/generos";
  $("#valores").empty();
  $.get(route, function(res){
    $(res).each(function(key,value){
      tablaDatos.append("<tr><td>"+value.genero+"</td><td><button class='btn btn-primary' value="+value.id+" OnClick='Mostrar(this);' data-toggle='modal' data-target='#myModal'>Editar</button> <button class='btn btn-danger'>Eliminar</button></td></tr>");
    });
  });
}

function Mostrar(id){
//  console.log(id.value);
  var route = "http://localhost:8000/genero/"+id.value+"/edit";

  $.get(route,function(res){
    $("#genre").val(res.genero);
    $("#id").val(res.id);
  });
}

$("#actualizar").click(function(){
    var valor = $("#id").val();
    var dato = $("#genre").val();
    var route = "http://localhost:8000/genero/"+valor+"";
    var token = $("#token").val();

    $.ajax({
      url: route,
      headers: {'X-CSRF-TOKEN': token},
      type: 'PUT',
      dataType: 'json',
      data: {genero: dato},
      success: function(){
			      Carga();
			      $("#myModal").modal('toggle');
			      $("#msj-success").fadeIn();
		  }
    });
});
