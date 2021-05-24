function init()
{

}

$(document).ready(function(){
    var tick_id = getUrlParameter('ID');

    ListarDetalle(tick_id);

    $.post("../../controllers/ticket.php?op=mostrar",{tick_id:tick_id},function(data){
       data = JSON.parse(data);
       $('#lblestado').html(data.tick_estado);
       $('#lblnomusuario').html(data.usu_nomb + ' ' +data.usu_ape);
       $('#lblfechcrea').html(data.fech_crea);
       $('#lblnumticket').html("Detalle Ticket - "+data.tick_id);

       $('#cat_nom').val(data.cat_nom);
       $('#tick_titulo').val(data.tick_titulo);
       $('#tickd_descripx').summernote('code',data.tick_descrip);

    });

    $('#tickd_descripx').summernote({
        height: 250, 
        lang:"es-ES",

    });

    $('#tickd_descripx').summernote('disable');

    $('#tickd_descrip').summernote({
        height: 250, 
        lang:"es-ES",

    });

});


var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};


$(document).on("click","#btnenviar",function(){
    var tick_id = getUrlParameter('ID');
    var usu_id = $('#user_idx').val();
    var tickd_descrip = $('#tickd_descrip').val();

    if($('#tickd_descrip').summernote('isEmpty') ){
            swal("Advertencia!", "Descripción vacío","warning");
    }else{

        $.post("../../controllers/ticket.php?op=insertdetalle",{tick_id:tick_id,usu_id:usu_id,tickd_descrip:tickd_descrip},function(data){
            ListarDetalle(tick_id);
            $('#tickd_descrip').summernote('reset');
            swal("correcto!","Registrado Correctamente","success");
        });
    }
});


$(document).on("click","#btncerrarticket",function(){
    
});

function ListarDetalle(tick_id)
{
    $.post("../../controllers/ticket.php?op=listardetalle",{tick_id:tick_id},function(data){
        $('#lbldetalle').html(data);
    });
}


init();