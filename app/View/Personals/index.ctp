<div id="cuerpoApp" class="container-fluid bloquePequeño">
    <div id="menuModulo" class="row navbar  navbar-default navbar-fixed-top">
        <div id="columnaBotonesUsuario" class="col-md-12">
            <ul class="nav navbar-nav pull-right">
                <li>
                    <a class="fa fa-filter fa-lg" title="Filtrar Registros" id="filtroCliente"></a>
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
                    <a class="fa fa-plus fa-lg" title="Nuevo Registro" id="nuevoRegistroCliente" href="#"></a>
                </li>
            </ul>
        </div>
    </div>
    <div id="clientesModalPrincipalDiv" class="modalPrincipal" style="display: none;">
        <div class="modal fade modalPersonalizado in" id="clientesModalPrincipalDialog" tabindex="-1" role="dialog" aria-labelledby="clientesModalPrincipalDialog" aria-hidden="true" data-backdrop="static" data-keyboard="true" style="overflow-y: auto; z-index: 2000; display: block; padding-left: 17px;">
            <div class="modal-dialog  modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">
                            <span id="dialogSpanHeaderclientesModalPrincipalDialog"></span>
                            Personal
                        </h5>
                        <button type="button" id="botonDisparadorclientesModalPrincipalDialog" class="close" data-pulsado data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                    </div>
                    <div class="modal-body" id="dialogBodyclientesModalPrincipalDialog" style="max-height: 89.2142vh; overflow-y: auto;">
                        <div id="menuModulo" class="row navbar  navbar-default navbar-fixed-top">
                            <div id="columnaBotonesUsuario" class="col-md-12">
                                <ul class="nav navbar-nav pull-right">
                                    <li>
                                        <a id="cancelarAccionCliente" class="elemento-sidera fa fa-reply fa-lg" href="#" title="Cancelar"></a>
                                    </li>
                                    <script type="text/javascript">
                                        /* $("#cancelarAccionCliente").click(
                                            function(event) {
                                                event.preventDefault();
                                                $("#clientesModalPrincipalDialog").unbind('hidden.bs.modal');
                                                $("#clientesModalPrincipalDialog").on('hidden.bs.modal', function(e) {
                                                    e.stopPropagation();
                                                    $('#clientesModalPrincipalDiv').remove();
                                                });
                                                $('#clientesModalPrincipalDialog').modal('hide');
                                            }
                                        );

                                        $("#botonDisparadorclientesModalPrincipalDialog").click(
                                            function(event) {
                                                event.preventDefault();
                                                $("#clientesModalPrincipalDialog").unbind('hidden.bs.modal');
                                                $("#clientesModalPrincipalDialog").on('hidden.bs.modal', function(e) {
                                                    e.stopPropagation();
                                                    $('#clientesModalPrincipalDiv').remove();
                                                });
                                                $('#clientesModalPrincipalDialog').modal('hide');
                                            }
                                        ); */
                                    </script>
                                    <li>
                                        <a class="fa fa-lg fa-check" id="guardarEditRegistroCliente" form="ClienteEditForm" title="Guardar" onclick="guardarNuevoRegistro()" type="submit" href="#"></a>
                                    </li>
                                    <script type="text/javascript">
                                       /*  $('#guardarEditRegistroCliente').on('click', function(event) {
                                            event.preventDefault();
                                            $(this).addClass('disabled');
                                            var formulario = $("#ClienteEditForm");
                                            if (formulario.checkearValidacion()) {
                                                formulario.ajaxForm();
                                                formulario.ajaxSubmit({
                                                    success: function(data2) {
                                                        $("#clientesModalPrincipalDialog").unbind('hidden.bs.modal');
                                                        $("#clientesModalPrincipalDialog").on('hidden.bs.modal', function(e) {
                                                            e.stopPropagation();
                                                            $('#cuerpoApp').html(data2);
                                                        });
                                                        $('#clientesModalPrincipalDialog').modal('hide');

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
                        <form class="cuerpo-contenedor" action="rrhh/personals/update" id="ClientesEditForm" method="post" accept-charset="UTF-8" novalidate="novalidate">
                            <legend id="cabeceraInfo_9152" class="text-seccion alert-info legendStrata">Datos generales del personal</legend>
                            <div id="fila2" class="row">
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="dniDiv" class="form-group">
                                        <label id="dniLabel">DNI</label>
                                        <input id="dni" type="text" name="data[Personal][dni]" class="form-control nifES" value="" maxlength="9" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Por favor indica un NIF / NIE / CIF correcto.">
                                    </div>
                                </div>
                                <div id="columna3" class="col-md-3" style="padding-right: 5px; padding-left: 5px;">
                                    <div id="nombreDiv" class="form-group required" aria-required="true">
                                        <label id="nombreLabel">Nombre</label>
                                        <input id="nombre" type="text" name="data[Personal][nombre]" class="form-control mayusculas" value="" maxlength="50" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.Este campo es obligatorio." required aria-required="true">
                                    </div>
                                </div>
                                <div id="columna4" class="col-md-3" style="padding-right: 5px; padding-left: 5px;">
                                    <div id="apellido1Div" class="form-group required" aria-required="true">
                                        <label id="apellido1Label">Primer Apellido</label>
                                        <input id="apellido1" type="text" name="data[Personal][apellido1]" class="form-control mayusculas" value="" maxlength="50" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.Este campo es obligatorio." required aria-required="true">
                                    </div>
                                </div>
                                <div id="columna5" class="col-md-3" style="padding-right: 5px; padding-left: 5px;">
                                    <div id="apellido2Div" class="form-group required" aria-required="true">
                                        <label id="apellido2Label">Segundo Apellido</label>
                                        <input id="apellido1" type="text" name="data[Personal][apellido2]" class="form-control mayusculas" value="" maxlength="50" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.Este campo es obligatorio." required aria-required="true">
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
                                    <div id="localidadDiv" class="form-group">
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
                                        <input id="telefono" type="text" name="data[Personal][telefono]" class="form-control" value="" maxlength="11" pattern title="Introduce un email correcto." aria-required="true" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.">
                                    </div>
                                </div>
                                <div id="columna13" class="col-md-3">
                                    <div id="emailParticularDiv" class="form-group required" aria-required="true">
                                        <label id="emailParticularLabel">Email Particular</label>
                                        <input id="emailParticular" type="text" name="data[Personal][email_particular]" class="form-control email" value="" maxlength="50" pattern title="Introduce un email correcto." aria-required="true">
                                    </div>
                                </div>
                                <div id="columna14" class="col-md-3">
                                    <div id="emailEmpresaDiv" class="form-group required" aria-required="true">
                                        <label id="emailEmpresaLabel">Email Empresa</label>
                                        <input id="emailEmpresa" type="text" name="data[Personal][email_empresa]" class="form-control email" value="" maxlength="50" pattern title="Introduce un email correcto." aria-required="true">
                                    </div>
                                </div>
                            </div>
                            <a class id="direccionCliente" href="#" style="text-decoration: none;"></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        //Esta funcion se ejecuta cuando se cierra el modal
       /*  $("#clientesModalPrincipalDialog").on('hidden.bs.modal', function(e) {
            e.stopPropagation();
            $('#clientesModalPrincipalDiv').remove();

        });

        //Cuando se muestra hay que ajustar el scroll de todos los modals que haya
        $("#clientesModalPrincipalDialog").on('shown.bs.modal', function(e) {
            e.stopPropagation();
        });

        //Esta funcion se ejecuta cuando se cierra el modal y evita que se propague la funcion shown.bs.modal con el e.stopPropagation();
        $("#clientesModalPrincipalDialog").on('hide.bs.modal', function(e) {
            e.stopPropagation();
        });
        //Esta funcion se ejecuta se muestra el modal y evita que se propague la funcion shown.bs.modal con el e.stopPropagation();
        $("#clientesModalPrincipalDialog").on('show.bs.modal', function(e) {
            e.stopPropagation();
            $("#clientesModalPrincipalDialog").css('overflow-y', 'auto');
            var zIndex = 2000 + (10 * $('.modalPersonalizado:visible').length);
            $(this).css('z-index', zIndex);
            setTimeout(function() {
                $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
            }, 0);
        });


        //Esto es la vista que carga en el modal 
        $("#dialogBodyclientesModalPrincipalDialog").load('personals/editarPersonal/modalPrincipal:cerrarModal', function() {
            $().ajustarModalPrincipal('ordenador', 'dialogBodyclientesModalPrincipalDialog');
        }); */
    </script>
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
                        <li data-header="Personal.id" onclick="$(this).children('i').toggleClass('fa-square-o')">
                            <i class="fa fa-lg fa-check-square-o"></i>
                            <label>Id</label>
                        </li>
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
                        <th data-campo="id" data-header="Personal.id" class="orderable text-left positionSticky">
                            <a href="/index/sort:Personal.id/direction.asc" class="desc">Id</a>
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
                    </tr>
                </thead>
                <tbody class="griddata" id="ClienteGridData">
                    <?php foreach ($personals as $personal) : ?>
                        <tr ondblclick="dobleClickFila($(this).attr('itemid'))" itemid="<?php echo $personal['Personal']['id']; ?>" class="gradeA" title="Haga click para editar registro">
                            <td>
                                <i value="<?php echo $personal['Personal']['id']; ?>" class="checkCell fa fa-lg fa-square-o"></i>
                            </td>
                            <td class="id"><?php echo $personal['Personal']['id']; ?> </td>
                            <td class="nombre text-left"><?php echo $personal['Personal']['nombre']; ?></td>
                            <td class="dni text-left"><?php echo $personal['Personal']['dni']; ?></td>
                            <td class="localidad text-left"><?php echo $personal['Personal']['localidad']; ?></td>
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
        history.pushState(null, null, "/rrhh/");
        window.addEventListener('popstate', function(event) {
            history.pushState(null, null, "/rrhh/");
        });

    });
</script>
<script>
    $(document).ready(function () {
        // Asigna un evento click al botón
        $("#nuevoRegistroCliente").on("click", function (event) {
            event.preventDefault(); // Evita el comportamiento predeterminado del enlace
            // Abre el modal
            
            $("#clientesModalPrincipalDiv").modal("show");
        });
    });
</script>
<script>
function guardarNuevoRegistro() {
    // Prevenir la acción predeterminada del formulario
    event.preventDefault();

    // Recopilar los datos del formulario
    var formData = new FormData(document.getElementById('ClientesEditForm'));

    // Enviar los datos al controlador para crear un nuevo registro
    $.ajax({
        url: '/personals/add', // Reemplaza esto con la URL de tu controlador
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            // Verificar la respuesta del controlador y realizar acciones necesarias
            if (response.success) {
                // Registro creado con éxito, cierra el modal
                var modal = document.getElementById('clientesModalPrincipalDialog');
                modal.style.display = 'none';
                // También puedes actualizar la vista de la tabla u otras acciones necesarias
                // ...
            } else {
                // Manejar errores si es necesario
                alert('Error al crear el registro');
            }
        },
        error: function() {
            // Manejar errores de la solicitud AJAX
            alert('Error de conexión al crear el registro');
        }
    });
}

</script>