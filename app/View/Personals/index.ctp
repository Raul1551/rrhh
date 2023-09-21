<div id="cuerpoApp" class="container-fluid bloquePequeño">
    <div id="menuModulo" class="row navbar  navbar-default navbar-fixed-top">
        <div id="columnaBotonesUsuario" class="col-md-12">
            <ul class="nav navbar-nav pull-right">
                <li>
                    <a class="fa fa-filter fa-lg" title="Filtrar Registros" id="filtroPersonal"></a>
                </li>
                <li>
                    <a class="fa fa-eye fa-lg cursorPointer disabled" title="Consultar Registro" id="viewRegistro" href="#"></a>
                </li>
                <li>
                    <a class="disabled fa fa-lg fa-trash disabled" data-toggle="modal" data-target="#registroDialogpersonals" title="Eliminar Registro" id="delRegistro" disabled href="#"></a>
                </li>

                <li>
                    <a class="disabled fa fa-pencil fa-lg" title="Modificar Registro" id="editRegistro" href="#"></a>
                </li>
                <li>
                    <a class="fa fa-plus fa-lg" title="Nuevo Registro" id="nuevoRegistroPersonal" href="#"></a>
                </li>
            </ul>
        </div>
    </div>

    <!-- ---------------------------------------------------------------------------------------- -->
    <!-- MODAL PARA AÑADIR REGISTROS -->
    <!-- ---------------------------------------------------------------------------------------- -->
    <div id="personalModalPrincipalDiv" class="modalPrincipal" style="display: none;">
        <div class="modal fade modalPersonalizado in" id="personalModalPrincipalDialog" tabindex="-1" role="dialog" aria-labelledby="personalModalPrincipalDialog" aria-hidden="true" data-backdrop="static" data-keyboard="true" style="overflow-y: auto; z-index: 2000; display: block; padding-left: 17px;">
            <div class="modal-dialog  modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">
                            <span id="dialogSpanHeaderclientesModalPrincipalDialog"></span>
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
                                    <li>
                                        <a class="fa fa-lg fa-check" id="guardarRegistroPersonal" form="PersonalAddForm" title="Guardar" onclick="guardarNuevoRegistro()" type="submit" href="#"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="cabeceraModulo" class="row cabecera-contenedor bloqueMasPequeño">
                            <div id="columnaCabeceraModulo" class="col-md-12">
                                <label id="etiquetaModulo">
                                    Añadir Personal
                                </label>
                            </div>
                        </div>
                        <form class="cuerpo-contenedor" action="/personals/add" id="PersonalAddForm" method="post" accept-charset="UTF-8" novalidate="novalidate">
                            <legend id="cabeceraInfo_9152" class="text-seccion alert-info legendStrata">Datos generales del personal</legend>
                            <div id="fila2" class="row">
                                <div id="columna2" class="col-md-3" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="dniDiv" class="form-group required" aria-required="true">
                                        <label id="dniLabel">DNI</label>
                                        <input id="dniAdd" type="text" name="data[Personal][dni]" class="form-control nifES" value="" maxlength="9" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Por favor indica un NIF / NIE / CIF correcto." required aria-required="true">
                                        <span id="dniWarning" style="color: red;"></span>
                                    </div>
                                </div>
                                <div id="columna3" class="col-md-3" style="padding-right: 5px; padding-left: 5px;">
                                    <div id="nombreDiv" class="form-group required" aria-required="true">
                                        <label id="nombreLabel">Nombre</label>
                                        <input type="text" name="data[Personal][nombre]" class="form-control mayusculas" value="" maxlength="50" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.Este campo es obligatorio." required aria-required="true">
                                    </div>
                                </div>
                                <div id="columna4" class="col-md-3" style="padding-right: 5px; padding-left: 5px;">
                                    <div id="apellido1Div" class="form-group">
                                        <label id="apellido1Label">Primer Apellido</label>
                                        <input type="text" name="data[Personal][apellido1]" class="form-control mayusculas" value="" maxlength="50" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.Este campo es obligatorio.">
                                    </div>
                                </div>
                                <div id="columna5" class="col-md-3" style="padding-right: 5px; padding-left: 5px;">
                                    <div id="apellido2Div" class="form-group">
                                        <label id="apellido2Label">Segundo Apellido</label>
                                        <input type="text" name="data[Personal][apellido2]" class="form-control mayusculas" value="" maxlength="50" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.Este campo es obligatorio.">
                                    </div>
                                </div>
                            </div>
                            <div id="filaDireccionFiscal" class="row">
                                <div id="columna6" class="col-md-3" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="direccionDiv" class="form-group">
                                        <label id="direccionLabel">Dirección</label>
                                        <input type="text" name="data[Personal][direccion]" class="form-control" value="" maxlength="150" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.">
                                    </div>
                                </div>
                                <div id="columna7" class="col-md-1" style="padding-right: 5px; padding-left: 5px;">
                                    <div id="numeroDiv" class="form-group">
                                        <label id="numeroLabel">Número</label>
                                        <input type="text" name="data[Personal][numero]" class="form-control" value="" maxlength="3" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.">
                                    </div>
                                </div>
                                <div id="columna8" class="col-md-1" style="padding-right: 5px; padding-left: 5px;">
                                    <div id="pisoDiv" class="form-group">
                                        <label id="pisoLabel">Piso</label>
                                        <input type="text" name="data[Personal][piso]" class="form-control" value="" maxlength="3" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.">
                                    </div>
                                </div>
                                <div id="columna9" class="col-md-1" style="padding-right: 5px; padding-left: 5px;">
                                    <div id="puertaDiv" class="form-group">
                                        <label id="puertaLabel">Puerta</label>
                                        <input type="text" name="data[Personal][puerta]" class="form-control" value="" maxlength="3" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.">
                                    </div>
                                </div>
                                <div id="columna10" class="col-md-3" style="padding-right: 5px; padding-left: 5px;">
                                    <div id="localidadDiv" class="form-group required" aria-required="true">
                                        <label id="localidadLabel">Localidad</label>
                                        <input type="text" name="data[Personal][localidad]" class="form-control" value="" maxlength="50" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.">
                                    </div>
                                </div>
                                <div id="columna15" class="col-md-2" style="padding-right: 5px; padding-left: 5px;">
                                    <div id="provinciaDiv" class="form-group">
                                        <label id="provinciaLabel">Provincia</label>
                                        <input type="text" name="data[Personal][provincia]" class="form-control" value="" maxlength="50" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.">
                                    </div>
                                </div>
                                <div id="columna11" class="col-md-1" style="padding-right: 5px; padding-left: 5px;">
                                    <div id="cpDiv" class="form-group">
                                        <label id="cpLabel">CP</label>
                                        <input type="text" name="data[Personal][codigo_postal]" class="form-control" value="" maxlength="5" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Por favor indica un Código Postal correcto.">
                                    </div>
                                </div>
                                <div id="columna12" class="col-md-3">
                                    <div id="telefonoParticularDiv" class="form-group required" aria-required="true">
                                        <label id="telefonoParticularLabel">Teléfono particular</label>
                                        <input type="text" name="data[Personal][telefono_particular]" class="form-control" value="" maxlength="11" pattern title="Introduce un número de teléfono correcto." aria-required="true" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.">
                                    </div>
                                </div>
                                <div id="columna13" class="col-md-3">
                                    <div id="emailParticularDiv" class="form-group">
                                        <label id="emailParticularLabel">Email Particular</label>
                                        <input type="text" name="data[Personal][email_particular]" class="form-control email" value="" maxlength="50" pattern title="Introduce un email correcto.">
                                    </div>
                                </div>
                            </div>
                            <div id="fila17" class="row">
                                <legend id="cabeceraInfo_9152" class="text-seccion alert-info legendStrata">Datos de pago</legend>
                                <div id="columna15" class="col-md-6">
                                    <div id="cuentaCorrienteDiv" class="form-group required" aria-required="true">
                                        <label id="cuentaCorrienteLabel">Cuenta Corriente</label>
                                        <input type="text" name="data[Personal][cuenta_corriente]" class="form-control" value="" maxlength="50" pattern title="Introduce un número de cuenta correcto." aria-required="true">
                                    </div>
                                </div>
                            </div>
                            <legend id="cabeceraInfo_9152" class="text-seccion alert-info legendStrata">Datos de empresa</legend>
                            <div id="fila18">
                                <div id="columna20" class="col-md-4">
                                    <div id="telefonoEmpresaDiv" class="form-group required" aria-required="true">
                                        <label id="telefonoEmpresaLabel">Teléfono empresa</label>
                                        <input type="text" name="data[Personal][telefono_empresa]" class="form-control" value="" maxlength="11" pattern title="Introduce un número de teléfono correcto." aria-required="true" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.">
                                    </div>
                                </div>
                                <div id="columna14" class="col-md-4">
                                    <div id="emailEmpresaDiv" class="form-group required" aria-required="true">
                                        <label id="emailEmpresaLabel">Email Empresa</label>
                                        <input type="text" name="data[Personal][email_empresa]" class="form-control email" value="" maxlength="50" pattern title="Introduce un email correcto." required aria-required="true">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ---------------------------------------------------------------------------------------- -->
    <!-- MODAL PARA MODIFICAR REGISTROS -->
    <!-- ---------------------------------------------------------------------------------------- -->
    <div id="personalModalEditarPrincipalDiv" class="modalPrincipal" style="display: none;">
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
                                        <a id="cancelarAccionEditarPersonal" class="elemento-sidera fa fa-reply fa-lg" href="#" title="Cancelar"></a>
                                    </li>
                                    <li>
                                        <a class="fa fa-lg fa-check" id="guardarEditRegistroPersonal" form="PersonalEditForm" title="Guardar" onclick="" type="submit" href="#"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="cabeceraModulo" class="row cabecera-contenedor bloqueMasPequeño">
                            <div id="columnaCabeceraModulo" class="col-md-12">
                                <label id="etiquetaModulo">
                                    Modificar Personal
                                </label>
                            </div>
                        </div>
                        <form class="cuerpo-contenedor" action="/personals/edit/:id" id="PersonalEditForm" method="post" accept-charset="UTF-8" novalidate="novalidate">
                            <legend id="cabeceraInfo_9152" class="text-seccion alert-info legendStrata">Datos generales del personal</legend>
                            <div id="fila2" class="row">
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="dniDiv" class="form-group required" aria-required="true">
                                        <label id="dniLabel">DNI</label>
                                        <input id="dni" type="text" name="data[Personal][dni]" class="form-control nifES" value="" maxlength="9" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Por favor indica un NIF / NIE / CIF correcto." required aria-required="true">
                                        <span id="dniWarning" style="color: red;"></span>
                                    </div>
                                </div>
                                <div id="columna3" class="col-md-3" style="padding-right: 5px; padding-left: 5px;">
                                    <div id="nombreDiv" class="form-group required" aria-required="true">
                                        <label id="nombreLabel">Nombre</label>
                                        <input id="nombre" type="text" name="data[Personal][nombre]" class="form-control mayusculas" value="" maxlength="50" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.Este campo es obligatorio." required aria-required="true">
                                    </div>
                                </div>
                                <div id="columna4" class="col-md-3" style="padding-right: 5px; padding-left: 5px;">
                                    <div id="apellido1Div" class="form-group">
                                        <label id="apellido1Label">Primer Apellido</label>
                                        <input id="apellido1" type="text" name="data[Personal][apellido1]" class="form-control mayusculas" value="" maxlength="50" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.Este campo es obligatorio.">
                                    </div>
                                </div>
                                <div id="columna5" class="col-md-3" style="padding-right: 5px; padding-left: 5px;">
                                    <div id="apellido2Div" class="form-group">
                                        <label id="apellido2Label">Segundo Apellido</label>
                                        <input id="apellido2" type="text" name="data[Personal][apellido2]" class="form-control mayusculas" value="" maxlength="50" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.Este campo es obligatorio.">
                                    </div>
                                </div>
                            </div>
                            <div id="filaDireccionFiscal" class="row">
                                <div id="columna6" class="col-md-3" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="direccionDiv" class="form-group">
                                        <label id="direccionLabel">Dirección</label>
                                        <input id="direccion" type="text" name="data[Personal][direccion]" class="form-control" value="" maxlength="150" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.">
                                    </div>
                                </div>
                                <div id="columna7" class="col-md-1" style="padding-right: 5px; padding-left: 5px;">
                                    <div id="numeroDiv" class="form-group">
                                        <label id="numeroLabel">Número</label>
                                        <input id="numero" type="text" name="data[Personal][numero]" class="form-control" value="" maxlength="3" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.">
                                    </div>
                                </div>
                                <div id="columna8" class="col-md-1" style="padding-right: 5px; padding-left: 5px;">
                                    <div id="pisoDiv" class="form-group">
                                        <label id="pisoLabel">Piso</label>
                                        <input id="piso" type="text" name="data[Personal][piso]" class="form-control" value="" maxlength="3" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.">
                                    </div>
                                </div>
                                <div id="columna9" class="col-md-1" style="padding-right: 5px; padding-left: 5px;">
                                    <div id="puertaDiv" class="form-group">
                                        <label id="puertaLabel">Puerta</label>
                                        <input id="puerta" type="text" name="data[Personal][puerta]" class="form-control" value="" maxlength="3" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.">
                                    </div>
                                </div>
                                <div id="columna10" class="col-md-3" style="padding-right: 5px; padding-left: 5px;">
                                    <div id="localidadDiv" class="form-group required" aria-required="true">
                                        <label id="localidadLabel">Localidad</label>
                                        <input id="localidad" type="text" name="data[Personal][localidad]" class="form-control" value="" maxlength="50" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.">
                                    </div>
                                </div>
                                <div id="columna15" class="col-md-2" style="padding-right: 5px; padding-left: 5px;">
                                    <div id="provinciaDiv" class="form-group">
                                        <label id="provinciaLabel">Provincia</label>
                                        <input id="provincia" type="text" name="data[Personal][provincia]" class="form-control" value="" maxlength="50" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.">
                                    </div>
                                </div>
                                <div id="columna11" class="col-md-1" style="padding-right: 5px; padding-left: 5px;">
                                    <div id="cpDiv" class="form-group">
                                        <label id="cpLabel">CP</label>
                                        <input id="cp" type="text" name="data[Personal][codigo_postal]" class="form-control" value="" maxlength="5" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Por favor indica un Código Postal correcto.">
                                    </div>
                                </div>
                            </div>
                            <div id="fila17" class="row">
                                <div id="columna12" class="col-md-3">
                                    <div id="telefonoParticularDiv" class="form-group required" aria-required="true">
                                        <label id="telefonoParticularLabel">Teléfono particular</label>
                                        <input id="telefonoParticular" type="text" name="data[Personal][telefono_particular]" class="form-control" value="" maxlength="11" title="Introduce un número de teléfono correcto." pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.">
                                    </div>
                                </div>
                                <div id="columna13" class="col-md-3">
                                    <div id="emailParticularDiv" class="form-group">
                                        <label id="emailParticularLabel">Email Particular</label>
                                        <input id="emailParticular" type="text" name="data[Personal][email_particular]" class="form-control email" value="" maxlength="50" title="Introduce un email correcto.">
                                    </div>
                                </div>
                            </div>
                            <legend id="cabeceraInfo_9152" class="text-seccion alert-info legendStrata">Datos de pago</legend>
                            <div id="fila19" class="row">
                                <div id="columna15" class="col-md-3">
                                    <div id="cuentaCorrienteDiv" class="form-group required" aria-required="true">
                                        <label id="cuentaCorrienteLabel">Cuenta Corriente</label>
                                        <input id="cuentaCorriente" type="text" name="data[Personal][cuenta_corriente]" class="form-control" value="" maxlength="50" title="Introduce un número de cuenta correcto.">
                                    </div>
                                </div>
                            </div>
                            <legend id="cabeceraInfo_9152" class="text-seccion alert-info legendStrata">Datos de empresa</legend>
                            <div id="fila15" class="row">
                                <div id="columna20" class="col-md-4">
                                    <div id="telefonoEmpresaDiv" class="form-group required" aria-required="true">
                                        <label id="telefonoEmpresaLabel">Teléfono empresa</label>
                                        <input id="telefonoEmpresa" type="text" name="data[Personal][telefono_empresa]" class="form-control" value="" maxlength="11" pattern title="Introduce un número de teléfono correcto." aria-required="true" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.">
                                    </div>
                                </div>
                                <div id="columna14" class="col-md-3">
                                    <div id="emailEmpresaDiv" class="form-group required" aria-required="true">
                                        <label id="emailEmpresaLabel">Email Empresa</label>
                                        <input id="emailEmpresa" type="text" name="data[Personal][email_empresa]" class="form-control email" value="" maxlength="50" pattern title="Introduce un email correcto." aria-required="true">
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="cabeceraModulo" class="row cabecera-contenedor">
        <div id="columnaCabeceraModulo" class="col-md-8 col-xs-12">
            <label id="etiquetaModulo">Listado de personal</label>
        </div>
    </div>
    <div id="cabeceraModuloIndex" class="row">
        <div id="columnaPaginacion" class="pull-left">
            <div class="pagination pull-right compact-theme simple-pagination">
                <ul>
                    <li class="disabled">
                        <span class="current prev">Prev</span>
                    </li>
                    <li class="active">
                        <span class="current">1</span>
                    </li>
                    <li class="active">
                        <a href="#page-2" class="page-link">2</a>
                    </li>
                    <li class="active">
                        <a href="#page-3" class="page-link">3</a>
                    </li>
                    <li class="active">
                        <a href="#page-4" class="page-link">4</a>
                    </li>
                    <li class="active">
                        <a href="#page-5" class="page-link">5</a>
                    </li>
                    <li class>
                        <span class="ellipse clickable">...</span>
                    </li>
                    <li>
                        <a href="#page-38" class="page-link">38</a>
                    </li>
                    <li>
                        <a href="#page-2" class="page-link next">Sig</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="columnaElementoBusqueda" class="pull-right col-md-4  col-sm-8 col-xs-12 ">
            <div id="elementoBuscar" class="input-group">
                <input type="text" class="form-control" id="searchText">
                <span type="button" class="input-group-addon fa fa-search btn-default" id="botonBuscar" title="Haga clic para buscar. Use ';' para buscar más palabras"></span>
                <div class="input-group-btn" id="camposBuscar">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa-caret-down fa"></i>
                    </button>
                    <ul id="listaCamposBuscar" class="dropdown-menu dropdown-menu-right">
                        <li class="check">
                            <i class="fa fa-check-square fa-lg"></i>
                            <label>Ninguno/Todos</label>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li data-header="Personal.nombre" onclick="$(this).children('i').toggleClass('fa-square-o')">
                            <i class="fa fa-lg fa-check-square-o"></i>
                            <label>Nombre</label>
                        </li>
                        <li data-header="Personal.dni" onclick="$(this).children('i').toggleClass('fa-square-o')">
                            <i class="fa fa-lg fa-check-square-o"></i>
                            <label>DNI</label>
                        </li>
                        <li data-header="Personal.localidad" onclick="$(this).children('i').toggleClass('fa-square-o')">
                            <i class="fa fa-lg fa-check-square-o"></i>
                            <label>Localidad</label>
                        </li>
                        <li data-header="Personal.telefono_particular" onclick="$(this).children('i').toggleClass('fa-square-o')">
                            <i class="fa fa-lg fa-check-square-o"></i>
                            <label>Teléfono particular</label>
                        </li>
                        <li data-header="Personal.email_particular" onclick="$(this).children('i').toggleClass('fa-square-o')">
                            <i class="fa fa-lg fa-check-square-o"></i>
                            <label>Email particular</label>
                        </li>
                        <li data-header="Personal.telefono_empresa" onclick="$(this).children('i').toggleClass('fa-square-o')">
                            <i class="fa fa-lg fa-check-square-o"></i>
                            <label>Teléfono empresa</label>
                        </li>
                        <li data-header="Personal.email_empresa" onclick="$(this).children('i').toggleClass('fa-square-o')">
                            <i class="fa fa-lg fa-check-square-o"></i>
                            <label>Email empresa</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="cuerpoModulo" class="row cuerpo-contenedor">
        <div class="dataTables_wrapper" role="grid" id="DataTables_Table_0_wrapper" style="max-height: 56.3707vh; border: 1px solid rgb(221, 221, 221); position: relative;">
            <table class="table table-striped dataTable" style="margin-bottom: 0px; border: 0px solid rgb(221, 221, 221); border-collapse: inherit;">
                <thead>
                    <tr role="row" title="Haga click para ordenar">
                        <th class="check positionSticky">
                            <i class="fa fa-check-square fa-lg"></i>
                        </th>
                        <th data-campo="nombre" data-header="Personal.nombre" class="orderable text-left positionSticky">
                            <a href="/index/sort:Personal.nombre/direction.asc" class="desc">Nombre</a>
                        </th>
                        <th data-campo="dni" data-header="Personal.dni" class="orderable text-left positionSticky">
                            <a href="/index/sort:Personal.dni/direction.asc" class="desc">Dni</a>
                        </th>
                        <th data-campo="localidad" data-header="Personal.localidad" class="orderable text-left positionSticky">
                            <a href="/index/sort:Personal.localidad/direction.asc" class="desc">Localidad</a>
                        </th>
                        <th data-campo="telefono_particular" data-header="Personal.telefono_particular" class="orderable text-left positionSticky">
                            <a href="/index/sort:Personal.telefono_particular/direction.asc" class="desc">Teléfono particular</a>
                        </th>
                        <th data-campo="telefono_empresa" data-header="Personal.telefono_empresa" class="orderable text-left positionSticky">
                            <a href="/index/sort:Personal.telefono_empresa/direction.asc" class="desc">Teléfono empresa</a>
                        </th>
                        <th data-campo="email_particular" data-header="Personal.email_particular" class="orderable text-left positionSticky">
                            <a href="/index/sort:Personal.email_particular/direction.asc" class="desc">Email particular</a>
                        </th>
                        <th data-campo="email_empresa" data-header="Personal.email_empresa" class="orderable text-left positionSticky">
                            <a href="/index/sort:Personal.email_empresa/direction.asc" class="desc">Email empresa</a>
                        </th>
                    </tr>
                </thead>
                <tbody class="griddata" id="ClienteGridData">
                    <?php foreach ($personals as $personal) : ?>
                        <tr ondblclick="dobleClickFila($(this).attr('itemid'))" itemid="<?php echo $personal['Personal']['id']; ?>" class="gradeA" title="Haga click para editar registro">
                            <td>
                                <i value="<?php echo $personal['Personal']['id']; ?>" class="checkCell fa fa-lg fa-square-o"></i>
                            </td>
                            <td class="nombre text-left"><?php echo $personal['Personal']['nombre'] . ' ' . $personal['Personal']['apellido1'] . ' ' . $personal['Personal']['apellido2']; ?></td>
                            <td class="dni text-left"><?php echo $personal['Personal']['dni']; ?></td>
                            <td class="localidad text-left"><?php echo $personal['Personal']['localidad']; ?></td>
                            <td class="telefono_particular text-left"><?php echo $personal['Personal']['telefono_particular']; ?></td>
                            <td class="telefono_empresa text-left"><?php echo $personal['Personal']['telefono_empresa']; ?></td>
                            <td class="email_particular text-left"><?php echo $personal['Personal']['email_particular']; ?></td>
                            <td class="email_empresa text-left"><?php echo $personal['Personal']['email_empresa']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div id="pieModulo" class="row pie-contenedor">
        <div id="columnaPaginacion" class="pull-left">
            <div class="pagination pull-right compact-theme simple-pagination">
                <ul>
                    <li class="disabled">
                        <span class="current prev">Prev</span>
                    </li>
                    <li class="active">
                        <span class="current">1</span>
                    </li>
                    <li class="active">
                        <a href="#page-2" class="page-link">2</a>
                    </li>
                    <li class="active">
                        <a href="#page-3" class="page-link">3</a>
                    </li>
                    <li class="active">
                        <a href="#page-4" class="page-link">4</a>
                    </li>
                    <li class="active">
                        <a href="#page-5" class="page-link">5</a>
                    </li>
                    <li class>
                        <span class="ellipse clickable">...</span>
                    </li>
                    <li>
                        <a href="#page-38" class="page-link">38</a>
                    </li>
                    <li>
                        <a href="#page-2" class="page-link next">Sig</a>
                    </li>
                </ul>
            </div>
            <script>
                $(document).ready(function() {
                    //Inicialización de la paginación
                    $(function() {
                        $('.pagination').pagination({
                            displayedPages: 5,
                            itemsOnPage: 10,
                            items: 3763,
                            currentPage: 1,
                            edges: 1,
                            prevText: 'Prev',
                            nextText: 'Sig',
                            cssStyle: 'compact-theme',
                            onPageClick: function(pageNumber, event) {
                                $("#cuerpoModulo tbody ").load('/personals/index/' + $().getFilters(pageNumber, 'Personal.id', 'desc', '1') + '/' + $().getFields() + ' #cuerpoModulo tbody tr', function() {
                                    $().activarSeleccionarFilaAlHacerClick();
                                    $().actualizarBotonesIndexModalIndex();

                                });
                            }
                        });
                    });
                });
            </script>
        </div>
        <div id="registrosPagina" class="col-md-1 col-xs-1">
            <div id="registrosPagina" class="elemento-sidera registroPagina input-group">
                <div class="dropdown bootstrap-select input-group-btn text-center">
                    <select id="registrosPorPagina" name="data[registrosPorPagina]" class="text-center selectpicker" tabindex="-98">
                        <option value="1">1</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100" selected="selected">100</option>
                        <option value="500">500</option>
                        <option value="1000">1000</option>
                    </select>
                    <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" data-id="registrosPorPagina" title="100" aria-expanded="false">
                        <div class="filter-option">
                            <div class="filter-option-inner">100</div>
                        </div>
                        <span class="bs-caret">
                            <span class="caret"></span>
                        </span>
                    </button>
                    <div class="dropdown-menu open" role="combobox" style="overflow: hidden;">
                        <div class="inner open" role="listbox" aria-expanded="false" tabindex="-1">
                            <ul class="dropdown-menu inner"></ul>
                        </div>
                    </div>
                </div>
            </div>

            <script type="text/javascript" id="myScript">
                //<![CDATA[
                $(document).ready(function() {
                    var limit = 'limit:' + '100';
                    $("#registrosPorPagina option[value=100]").attr("selected", true);
                    $('#registrosPorPagina').change(function(event) {
                        event.stopPropagation();
                        $('#cuerpoApp').load("personals" + '/index/limit:' + $(this).val() + '/' + $().getFields());
                    });
                });
                //]]>
            </script>
        </div>
        <div id="totalRegistros" class="pull-right"></div>
    </div>
    <script>
        $().ajustarIndexAltoPantalla('ordenador');
        $(document).ready(function() {
            $().cargarLibreriaSelectpicker();
            $().activarOrdenacionEnColumnas();
            $().activarSeleccionarFilaAlHacerClick();
            $().activarSeleccionarTodasONingunaFilas();
            $().botonEliminar("personals");
        });


        $('#eliminarpersonal').on('click', function(event) {
            $.post("personals/eliminarPersonal/");
        });
        $('#redireccionarpersonal').on('click', function(event) {
            $.post("personals/redirigirPersonal/");
        });
        $('#cambiarnombrePersonal').on('click', function(event) {
            $.post("personals/cambiarNombrePersonal/");
        });
    </script>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        //Funcion para cuando pulses delete no se te vaya para detras el sidera y te
        //descuaragingue todo
        //Funcion para tener el titulo de la barras bonito y para cuando pulses delete no se joda todo   
        history.pushState(null, null, "/rrhh/personals");
        window.addEventListener('popstate', function(event) {
            history.pushState(null, null, "/rrhh/personals");
        });

    });
    // Validar formato de DNI para formulario de añadir nuevo registro
    $(document).ready(function() {
        $("#dniAdd").on("input", function() {
            var dniValue = $(this).val().trim();

            if (dniValue.length === 9) {
                var numeros = dniValue.substring(0, 8);
                var letra = dniValue.substring(8);

                if (/^\d+$/.test(numeros) && letra.match(/[a-zA-Z]/)) {
                    // El formato es correcto, no se muestra ninguna advertencia.
                    $("#dniWarning").text("");
                } else {
                    // El formato es incorrecto, mostrar advertencia.
                    $("#dniWarning").text("El DNI debe tener 8 números y una letra.");
                }
            } else {
                // La longitud es incorrecta, mostrar advertencia.
                $("#dniWarning").text("El DNI debe tener 9 caracteres.");
            }
        });
    });
    // ================================================================
    // Validar formato de DNI para formulario de editar registro
    $(document).ready(function() {
        $("#dni").on("input", function() {
            var dniValue = $(this).val().trim();

            if (dniValue.length === 9) {
                var numeros = dniValue.substring(0, 8);
                var letra = dniValue.substring(8);

                if (/^\d+$/.test(numeros) && letra.match(/[a-zA-Z]/)) {
                    // El formato es correcto, no se muestra ninguna advertencia.
                    $("#dniWarning").text("");
                } else {
                    // El formato es incorrecto, mostrar advertencia.
                    $("#dniWarning").text("El DNI debe tener 8 números y una letra.");
                }
            } else {
                // La longitud es incorrecta, mostrar advertencia.
                $("#dniWarning").text("El DNI debe tener 9 caracteres.");
            }
        });
    });
</script>
<script>
    // FUNCIONES PARA ABRIR Y CERRAR EL MODAL DE AÑADIR REGISTRO
    $(document).ready(function() {
        // Asigna un evento click al botón
        $("#nuevoRegistroPersonal").on("click", function(event) {
            event.preventDefault(); // Evita el comportamiento predeterminado del enlace
            // Abre el modal

            $("#personalModalPrincipalDiv").modal("show");
        });
    });
    $(document).ready(function() {
        // Asigna un evento click al botón
        $("#guardarRegistroPersonal").on("click", function(event) {
            event.preventDefault(); // Evita el comportamiento predeterminado del enlace
            // Cierra el modal
            $("#personalModalPrincipalDiv").modal("hide");
        });
    });
</script>
<script>
    function guardarNuevoRegistro() {
        // Prevenir la acción predeterminada del formulario
        event.preventDefault();

        // Recopilar los datos del formulario
        var formData = new FormData(document.getElementById('PersonalAddForm'));

        // Enviar los datos al controlador para crear un nuevo registro
        $.ajax({
            url: 'personals/add', // Reemplaza esto con la URL de tu controlador
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log('Petición AJAX exitosa'); // Agregar un mensaje de depuración
                console.log(response); // Mostrar la respuesta en la consola
                // Verificar si la propiedad "success" está definida en la respuesta JSON
                if (response.hasOwnProperty('success')) {
                    if (response.success) {
                        location.reload(); // Recarga la página
                    } else {

                        alert('Error al crear el registro');
                    }
                }
            },
            error: function() {
                // Manejar errores de la solicitud AJAX
                alert('Error de conexión al crear el registro');
            }
        });
    }
    // Boton cancelar. Detener propagación de eventos
    // Cuando se hace clic en el botón "Cancelar" en el formulario de edición
    $('#cancelarAccionPersonal').on('click', function(event) {
        event.preventDefault();
        $('#PersonalAddForm')[0].reset();
        $('#personalModalPrincipalDiv').modal('hide');
    });
</script>
<script>
    // Funcion para abrir el modal de edicion con los datos del registro
    $(document).ready(function() {
        $('#editRegistro').on('click', function() {
            // Aquí obtendremos el ID del registro seleccionado y lo asignaremos al atributo data-idregistro del botón.
            var idRegistro = obtenerIdRegistroSeleccionado();
            // Asignamos el ID del registro seleccionado al atributo data-idregistro del botón.

            // Ahora, el botón tiene el ID del registro seleccionado almacenado en data-idregistro.
            console.log('ID del registro seleccionado:', idRegistro);

            // Comprobar si se ha seleccionado un registro antes de continuar
            if (idRegistro) {
                // Realizar una solicitud AJAX para obtener los datos del registro
                $.ajax({
                    type: 'GET',
                    url: 'personals/edit/' + idRegistro, // Reemplaza con la URL correcta para obtener el registro
                    dataType: 'json',
                    success: function(response) {
                        console.log('Datos del registro:', response);
                        if (response.success) {
                            var data = response.data; // Obtener los datos del registro de la respuesta
                            // Llenar los campos del formulario con los datos del registro
                            $('#dni').val(data.Personal.dni);
                            $('#nombre').val(data.Personal.nombre);
                            $('#apellido1').val(data.Personal.apellido1);
                            $('#apellido2').val(data.Personal.apellido2);
                            $('#direccion').val(data.Personal.direccion);
                            $('#numero').val(data.Personal.numero);
                            $('#piso').val(data.Personal.piso);
                            $('#puerta').val(data.Personal.puerta);
                            $('#localidad').val(data.Personal.localidad);
                            $('#provincia').val(data.Personal.provincia);
                            $('#cp').val(data.Personal.codigo_postal);
                            $('#telefonoParticular').val(data.Personal.telefono_particular);
                            $('#telefonoEmpresa').val(data.Personal.telefono_empresa);
                            $('#emailParticular').val(data.Personal.email_particular);
                            $('#emailEmpresa').val(data.Personal.email_empresa);
                            $('#cuentaCorriente').val(data.Personal.cuenta_corriente);
                            // Mostrar los botones por su ID
                            $('#guardarEditRegistroPersonal, #cancelarAccionEditarPersonal').show();
                            // Abrir el modal después de cargar los datos
                            $('#personalModalEditarPrincipalDiv').modal('show');
                            // Eliminar el atributo de solo lectura de los campos
                            $('#dni, #nombre, #apellido1, #apellido2, #direccion, #numero, #piso, #puerta, #localidad, #provincia, #cp, #telefonoParticular, #emailParticular, #telefonoEmpresa, #emailEmpresa, #cuentaCorriente').prop('readonly', false);
                        } else {
                            // Manejar el caso en el que no se puedan cargar los datos del registro
                            alert('Error al cargar los datos del registro.');
                        }
                    },
                    error: function() {
                        // Manejar el caso de error en la solicitud AJAX
                        alert('Error de servidor.');
                    }
                });
            } else {
                alert('Por favor, selecciona un registro antes de editar.');
            }
        });
    });

    function obtenerIdRegistroSeleccionado() {
        var id = $('.row-selected').attr('itemid');
        return id || null;
    }

    // Cuando se hace clic en el botón "Guardar" en el modal de edición
    $('#guardarEditRegistroPersonal').on('click', function(event) {
        event.preventDefault(); // Evita que el formulario se envíe normalmente
        var idRegistro = obtenerIdRegistroSeleccionado();

        // Obtén los datos actualizados del formulario del modal
        var formData = $('#PersonalEditForm').serialize();

        // Realiza una solicitud AJAX para actualizar el registro
        $.ajax({
            type: 'POST',
            url: 'personals/edit/' + idRegistro,
            data: formData,
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    $('#personalModalEditarPrincipalDiv').modal('hide'); // Cierra el modal después de la actualización

                    // 
                } else {
                    alert('Error al actualizar el registro.');
                }
            },
            error: function() {
                alert('Error de servidor.');
            }
        });
    });
    // Boton cancelar. Detener propagación de eventos
    // Cuando se hace clic en el botón "Cancelar" en el formulario de edición
    $('#cancelarAccionEditarPersonal').on('click', function(event) {
        event.preventDefault();
        $('#PersonalEditForm')[0].reset();
        $('#personalModalEditarPrincipalDiv').modal('hide');
    });

    // Funcion para abrir el modal de visualización del registro
    // Funcion para abrir el modal de edicion con los datos del registro
    $(document).ready(function() {
        $('#viewRegistro').on('click', function() {
            // Aquí obtendremos el ID del registro seleccionado
            var idRegistro = obtenerIdRegistroSeleccionado();
            // Asignamos el ID del registro seleccionado al atributo data-idregistro del botón.

            // Ahora, el botón tiene el ID del registro seleccionado almacenado en data-idregistro.
            console.log('ID del registro seleccionado:', idRegistro);

            // Comprobar si se ha seleccionado un registro antes de continuar
            if (idRegistro) {
                // Realizar una solicitud AJAX para obtener los datos del registro
                $.ajax({
                    type: 'GET',
                    url: 'personals/view/' + idRegistro,
                    dataType: 'json',
                    success: function(response) {
                        console.log('Datos del registro:', response);
                        if (response.success) {
                            var data = response.data; // Obtener los datos del registro de la respuesta
                            // Llenar los campos del formulario con los datos del registro
                            $('#dni').val(data.Personal.dni);
                            $('#nombre').val(data.Personal.nombre);
                            $('#apellido1').val(data.Personal.apellido1);
                            $('#apellido2').val(data.Personal.apellido2);
                            $('#direccion').val(data.Personal.direccion);
                            $('#numero').val(data.Personal.numero);
                            $('#piso').val(data.Personal.piso);
                            $('#puerta').val(data.Personal.puerta);
                            $('#localidad').val(data.Personal.localidad);
                            $('#provincia').val(data.Personal.provincia);
                            $('#cp').val(data.Personal.codigo_postal);
                            $('#telefonoParticular').val(data.Personal.telefono_particular);
                            $('#telefonoEmpresa').val(data.Personal.telefono_empresa);
                            $('#emailParticular').val(data.Personal.email_particular);
                            $('#emailEmpresa').val(data.Personal.email_empresa);
                            $('#cuentaCorriente').val(data.Personal.cuenta_corriente);
                            $('#dni, #nombre, #apellido1, #apellido2, #direccion, #numero, #piso, #puerta, #localidad, #provincia, #cp, #telefonoParticular, #emailParticular, #telefonoEmpresa, #emailEmpresa, #cuentaCorriente').prop('readonly', true);
                            // Abrir el modal después de cargar los datos
                            $('#personalModalEditarPrincipalDiv').modal('show');
                            // Ocultar los botones por su ID
                            $('#guardarEditRegistroPersonal, #cancelarAccionEditarPersonal').hide();
                        } else {
                            // Manejar el caso en el que no se puedan cargar los datos del registro
                            alert('Error al cargar los datos del registro.');
                        }
                    },
                    error: function() {

                        alert('Error de servidor.');
                    }
                });
            } else {
                alert('Por favor, selecciona un registro antes de editar.');
            }
        });
    });
</script>