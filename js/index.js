//ejecutar una vez que el documento está cargado, usado para actualizar desplegable de provincia-localidad
$(document).ready(function(){        
    $.ajax({
        type: "POST",
        url: 'php/cargar_provincias.php',
        data: {'request':'cargar_provincias'}        
      })
    .done(function(list_provincias){
        // $('#lista_provincia option').remove();
        // console.log(list_provincias);
        //alert('cargo documento index!!');
        $('#lista_provincia').html(list_provincias);            
        console.log("listado provincias argentinas");  
    })
    .fail(function(){
        alert('Error al cargar las Provincias');
    })
// cuando cambia la lista de provincias (id) ejecutar la funcion ajax
    $('#lista_provincia').on('change',function(){
        var id = $('#lista_provincia').val();
        //alert(id);
        $.ajax({
            type: "POST",
            url: 'php/cargar_localidades.php',
            data: {'id':id}        
          })
        .done(function(list_provincias){
            $('#lista_localidad').html(list_provincias)
        })
        .fail(function(){
            alert('Error al cargar las Localidades');
        })
    })
})