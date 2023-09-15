<?php
// Obtener el ID del registro desde el parámetro GET
$idRegistro = $_GET['id'];

// Comprobar si $idRegistro es válido y si existe un registro con ese ID
if ($idRegistro) {
    // Recuperar los datos del registro desde la base de datos (reemplaza esto con tu lógica real de acceso a la base de datos)
    //$registro = edit($idRegistro);

    if ($registro) {
        // Los datos del registro se recuperaron con éxito, ahora puedes llenar los campos del formulario modal con estos datos
        $dni = $registro['Personal']['dni'];
        $nombre = $registro['Personal']['nombre'];
        $apellido1 = $registro['Personal']['apellido1'];
        $apellido2 = $registro['Personal']['apellido2'];
        $direccion = $registro['Personal']['direccion'];
        $numero = $registro['Personal']['numero'];
        $piso = $registro['Personal']['piso'];
        $puerta = $registro['Personal']['puerta'];
        $localidad = $registro['Personal']['localidad'];
        $provincia = $registro['Personal']['provincia'];
        $codigo_postal = $registro['Personal']['codigo_postal'];
        $telefono = $registro['Personal']['telefono'];
        $email_particular = $registro['Personal']['email_particular'];
        $email_empresa = $registro['Personal']['email_empresa'];
        $cuenta_corriente = $registro['Personal']['cuenta_corriente'];
        // Continúa llenando otros campos según sea necesario

        // A continuación, puedes utilizar las variables $dni, $nombre, etc., en los valores de los campos del formulario modal
    } else {
        // El registro no se encontró en la base de datos, puedes manejar esta situación como desees
    }
}
?>
<!-- ---------------------------------------------------------------------------------------- -->
    <!-- MODAL PARA MODIFICAR REGISTROS -->
    <!-- ---------------------------------------------------------------------------------------- -->
    <div id="c" class="modalPrincipal" style="display: none;">
        <div class="modal fade modalPersonalizado in" id="personalModalPrincipalDialog" tabindex="-1" role="dialog" aria-labelledby="personalModalPrincipalDialog" aria-hidden="true" data-backdrop="static" data-keyboard="true" style="overflow-y: auto; z-index: 2000; display: block; padding-left: 17px;">
            <div class="modal-dialog  modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">
                            <span id="dialogSpanHeaderpersonalModalPrincipalDialog"></span>
                            Personal
                        </h5>
                        <button type="button" id="botonDisparadorpersonalModalPrincipalDialog" class="close" data-pulsado data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                    </div>
                    <div class="modal-body" id="dialogBodypersonalModalPrincipalDialog" style="max-height: 89.2142vh; overflow-y: auto;">
                        <div id="menuModulo" class="row navbar  navbar-default navbar-fixed-top">
                            <div id="columnaBotonesUsuario" class="col-md-12">
                                <ul class="nav navbar-nav pull-right">
                                    <li>
                                        <a id="cancelarAccionPersonal" class="elemento-sidera fa fa-reply fa-lg" href="#" title="Cancelar"></a>
                                    </li>
                                    <script type="text/javascript">
                                        /* $("#cancelarAccionPersonal").click(
                                            function(event) {
                                                event.preventDefault();
                                                $("#personalModalPrincipalDialog").unbind('hidden.bs.modal');
                                                $("#personalModalPrincipalDialog").on('hidden.bs.modal', function(e) {
                                                    e.stopPropagation();
                                                    $('#personalModalPrincipalDiv').remove();
                                                });
                                                $('#personalModalPrincipalDialog').modal('hide');
                                            }
                                        );

                                        $("#botonDisparadorpersonalModalPrincipalDialog").click(
                                            function(event) {
                                                event.preventDefault();
                                                $("#personalModalPrincipalDialog").unbind('hidden.bs.modal');
                                                $("#personalModalPrincipalDialog").on('hidden.bs.modal', function(e) {
                                                    e.stopPropagation();
                                                    $('#personalModalPrincipalDiv').remove();
                                                });
                                                $('#personalModalPrincipalDialog').modal('hide');
                                            }
                                        ); */
                                    </script>
                                    <li>
                                        <a class="fa fa-lg fa-check" id="guardarEditRegistroPersonal" form="PersonalEditForm" title="Guardar" onclick="guardarNuevoRegistro()" type="submit" href="#"></a>
                                    </li>
                                    <script type="text/javascript">
                                        /*  $('#guardarEditRegistroPersonal').on('click', function(event) {
                                            event.preventDefault();
                                            $(this).addClass('disabled');
                                            var formulario = $("#PersonalEditForm");
                                            if (formulario.checkearValidacion()) {
                                                formulario.ajaxForm();
                                                formulario.ajaxSubmit({
                                                    success: function(data2) {
                                                        $("#personalModalPrincipalDialog").unbind('hidden.bs.modal');
                                                        $("#personalModalPrincipalDialog").on('hidden.bs.modal', function(e) {
                                                            e.stopPropagation();
                                                            $('#cuerpoApp').html(data2);
                                                        });
                                                        $('#personalModalPrincipalDialog').modal('hide');

                                                    }
                                                });
                                            } else {
                                                $(this).removeClass('disabled');
                                            }
                                        }); */
                                    </script>
                                </ul>
                            </div>
                        </div>
                        <div id="cabeceraModulo" class="row cabecera-contenedor bloqueMasPequeño">
                            <div id="columnaCabeceraModulo" class="col-md-12">
                                <label id="etiquetaModulo">

                                    Modificar Personal
                                    <!--
                                    <span class="etiquetaInformacion">
                                        <i style="color: white;"><?php //echo $personal['Personal']['nombre']; 
                                                                    ?></i>
                                    </span>
                                    -->
                                </label>
                            </div>
                        </div>
                        <form class="cuerpo-contenedor" action="/personals/edit" id="PersonalEditForm" method="post" accept-charset="UTF-8" novalidate="novalidate">
                            <legend id="cabeceraInfo_9152" class="text-seccion alert-info legendStrata">Datos generales del personal</legend>
                            <div id="fila2" class="row">
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="dniDiv" class="form-group">
                                        <label id="dniLabel">DNI</label>
                                        <input id="dni" type="text" name="data[Personal][dni]" class="form-control nifES" value="<?php echo h($registro['Personal']['dni']); ?>" maxlength="9" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Por favor indica un NIF / NIE / CIF correcto.">
                                    </div>
                                </div>
                                <div id="columna3" class="col-md-3" style="padding-right: 5px; padding-left: 5px;">
                                    <div id="nombreDiv" class="form-group required" aria-required="true">
                                        <label id="nombreLabel">Nombre</label>
                                        <input id="nombre" type="text" name="data[Personal][nombre]" class="form-control mayusculas" value="<?php echo h($registro['Personal']['nombre']); ?>" maxlength="50" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.Este campo es obligatorio." required aria-required="true">
                                    </div>
                                </div>
                                <div id="columna4" class="col-md-3" style="padding-right: 5px; padding-left: 5px;">
                                    <div id="apellido1Div" class="form-group required" aria-required="true">
                                        <label id="apellido1Label">Primer Apellido</label>
                                        <input id="apellido1" type="text" name="data[Personal][apellido1]" class="form-control mayusculas" value="<?php echo h($registro['Personal']['apellido1']); ?>" maxlength="50" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.Este campo es obligatorio." required aria-required="true">
                                    </div>
                                </div>
                                <div id="columna5" class="col-md-3" style="padding-right: 5px; padding-left: 5px;">
                                    <div id="apellido2Div" class="form-group required" aria-required="true">
                                        <label id="apellido2Label">Segundo Apellido</label>
                                        <input id="apellido1" type="text" name="data[Personal][apellido2]" class="form-control mayusculas" value="<?php echo h($registro['Personal']['apellido2']); ?>" maxlength="50" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.Este campo es obligatorio." required aria-required="true">
                                    </div>
                                </div>
                            </div>
                            <div id="filaDireccionFiscal" class="row">
                                <div id="columna6" class="col-md-3" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="direccionDiv" class="form-group">
                                        <label id="direccionLabel">Dirección</label>
                                        <input id="direccion" type="text" name="data[Personal][direccion]" class="form-control" value="<?php echo h($registro['Personal']['direccion']); ?>" maxlength="150" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.">
                                    </div>
                                </div>
                                <div id="columna7" class="col-md-1" style="padding-right: 5px; padding-left: 5px;">
                                    <div id="numeroDiv" class="form-group">
                                        <label id="numeroLabel">Número</label>
                                        <input id="numero" type="text" name="data[Personal][numero]" class="form-control" value="<?php echo h($registro['Personal']['numero']); ?>" maxlength="3" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.">
                                    </div>
                                </div>
                                <div id="columna8" class="col-md-1" style="padding-right: 5px; padding-left: 5px;">
                                    <div id="pisoDiv" class="form-group">
                                        <label id="pisoLabel">Piso</label>
                                        <input id="piso" type="text" name="data[Personal][piso]" class="form-control" value="<?php echo h($registro['Personal']['piso']); ?>" maxlength="3" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.">
                                    </div>
                                </div>
                                <div id="columna9" class="col-md-1" style="padding-right: 5px; padding-left: 5px;">
                                    <div id="puertaDiv" class="form-group">
                                        <label id="puertaLabel">Puerta</label>
                                        <input id="puerta" type="text" name="data[Personal][puerta]" class="form-control" value="<?php echo h($registro['Personal']['puerta']); ?>" maxlength="3" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.">
                                    </div>
                                </div>
                                <div id="columna10" class="col-md-3" style="padding-right: 5px; padding-left: 5px;">
                                    <div id="localidadDiv" class="form-group">
                                        <label id="localidadLabel">Localidad</label>
                                        <input id="localidad" type="text" name="data[Personal][localidad]" class="form-control" value="<?php echo h($registro['Personal']['localidad']); ?>" maxlength="50" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.">
                                    </div>
                                </div>
                                <div id="columna15" class="col-md-2" style="padding-right: 5px; padding-left: 5px;">
                                    <div id="provinciaDiv" class="form-group">
                                        <label id="provinciaLabel">Provincia</label>
                                        <input id="provincia" type="text" name="data[Personal][provincia]" class="form-control" value="<?php echo h($registro['Personal']['provincia']); ?>" maxlength="50" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.">
                                    </div>
                                </div>
                                <div id="columna11" class="col-md-1" style="padding-right: 5px; padding-left: 5px;">
                                    <div id="cpDiv" class="form-group">
                                        <label id="cpLabel">CP</label>
                                        <input id="cp" type="text" name="data[Personal][codigo_postal]" class="form-control" value="<?php echo h($registro['Personal']['codigo_postal']); ?>" maxlength="5" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Por favor indica un Código Postal correcto.">
                                    </div>
                                </div>
                                <!--
                                    <div id="columna10" class="col-md-3" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="localidadDiv_id3" class="form-group required" aria-required="true">
                                        <label id="localidadLabel_id3">Localidad</label>
                                        <div id="input-grouplocalidad" class="input-group">
                                            <div class="dropdown bootstrap-select input-group-btn">
                                                <select id="localidad_id3" name="data[Cliente][localidad]" class="selectpicker" data-size="10" data-live-search-normalize="true" data-live-search="true" data-dropup-auto="false" tabindex="-98" aria-required="true"></select>
                                                <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" data-id="localidad_id3" title="">
                                                    <div class="filter-option">
                                                        <div class="filter-option-inner"></div>
                                                    </div>
                                                    <span class="bs-caret">
                                                        <span class="caret"></span>
                                                    </span>
                                                </button>
                                                <div class="dropdown-menu open" role="combobox">
                                                    <div class="bs-searchbox">
                                                        <input type="text" class="form-control" autocomplete="off" role="textbox" aria-label="search">
                                                    </div>
                                                    <div class="inner-open" role="listbox" aria-expanded="false" tabindex="-1">
                                                        <ul class="dropdown-menu inner"></ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <span title="añadir un nuevo registro" class="input-group-addon fa fa-plus fa-lg cursorPointer" id="nuevoRegistroSelectlocalidad_id3"></span>
                                        </div>
                                    </div>
                                </div>
                                    -->
                            </div>
                            <div id="fila17" class="row">
                                <div id="columna12" class="col-md-3">
                                    <div id="telefonoDiv" class="form-group required" aria-required="true">
                                        <label id="telefonoLabel">Teléfono</label>
                                        <input id="telefono" type="text" name="data[Personal][telefono]" class="form-control" value="<?php echo h($registro['Personal']['telefono']); ?>" maxlength="11" pattern title="Introduce un número de teléfono correcto." aria-required="true" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.">
                                    </div>
                                </div>
                                <div id="columna13" class="col-md-3">
                                    <div id="emailParticularDiv" class="form-group required" aria-required="true">
                                        <label id="emailParticularLabel">Email Particular</label>
                                        <input id="emailParticular" type="text" name="data[Personal][email_particular]" class="form-control email" value="<?php echo h($registro['Personal']['email_particular']); ?>" maxlength="50" pattern title="Introduce un email correcto." aria-required="true">
                                    </div>
                                </div>
                                <div id="columna14" class="col-md-3">
                                    <div id="emailEmpresaDiv" class="form-group required" aria-required="true">
                                        <label id="emailEmpresaLabel">Email Empresa</label>
                                        <input id="emailEmpresa" type="text" name="data[Personal][email_empresa]" class="form-control email" value="<?php echo h($registro['Personal']['email_empresa']); ?>" maxlength="50" pattern title="Introduce un email correcto." aria-required="true">
                                    </div>
                                </div>
                                <div id="columna15" class="col-md-3">
                                    <div id="cuentaCorrienteDiv" class="form-group required" aria-required="true">
                                        <label id="cuentaCorrienteLabel">Cuenta Corriente</label>
                                        <input id="cuentaCorriente" type="text" name="data[Personal][cuenta_corriente]" class="form-control" value="<?php echo h($registro['Personal']['cuenta_corriente']); ?>" maxlength="50" pattern title="Introduce un número de cuenta correcto." aria-required="true">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        //Esta funcion se ejecuta cuando se cierra el modal
        /*  $("#personalModalPrincipalDialog").on('hidden.bs.modal', function(e) {
             e.stopPropagation();
             $('#personalModalPrincipalDiv').remove();

         });

         //Cuando se muestra hay que ajustar el scroll de todos los modals que haya
         $("#personalModalPrincipalDialog").on('shown.bs.modal', function(e) {
             e.stopPropagation();
         });

         //Esta funcion se ejecuta cuando se cierra el modal y evita que se propague la funcion shown.bs.modal con el e.stopPropagation();
         $("#personalModalPrincipalDialog").on('hide.bs.modal', function(e) {
             e.stopPropagation();
         });
         //Esta funcion se ejecuta se muestra el modal y evita que se propague la funcion shown.bs.modal con el e.stopPropagation();
         $("#personalModalPrincipalDialog").on('show.bs.modal', function(e) {
             e.stopPropagation();
             $("#personalModalPrincipalDialog").css('overflow-y', 'auto');
             var zIndex = 2000 + (10 * $('.modalPersonalizado:visible').length);
             $(this).css('z-index', zIndex);
             setTimeout(function() {
                 $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
             }, 0);
         });


         //Esto es la vista que carga en el modal 
         $("#dialogBodypersonalModalPrincipalDialog").load('personals/editarPersonal/modalPrincipal:cerrarModal', function() {
             $().ajustarModalPrincipal('ordenador', 'dialogBodypersonalModalPrincipalDialog');
         }); */
    </script>
    <script>
$(document).ready(function() {
    // Abre el modal después de cargar los datos del registro
    $("#personalModalEditarPrincipalDiv").modal("show");
});
</script>