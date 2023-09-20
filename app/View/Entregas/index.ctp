<div id="cuerpoApp" class="container-fluid bloquePequeño">
    <div id="menuModulo" class="row navbar  navbar-default navbar-fixed-top">
        <div id="columnaBotonesUsuario" class="col-md-12">
            <ul class="nav navbar-nav pull-right">
                <li>
                    <a class="fa fa-filter fa-lg" title="Filtrar Registros" id="filtroEntregas"></a>
                </li>
                <li>
                    <a class="fa fa-eye fa-lg cursorPointer disabled" title="Consultar Registro" id="viewRegistro" href="#"></a>
                </li>
                <li>
                    <a class="disabled fa fa-lg fa-trash disabled" data-toggle="modal" data-target="#registroDialogentregas" title="Eliminar Registro" id="delRegistro" disabled href="#"></a>
                </li>

                <li>
                    <a class="disabled fa fa-pencil fa-lg" title="Modificar Registro" id="editRegistro" href="#"></a>
                </li>
                <li>
                    <a class="fa fa-plus fa-lg" title="Nuevo Registro" id="nuevoRegistroEntregas" href="#"></a>
                </li>
            </ul>
        </div>
    </div>
    <div id="cabeceraModulo" class="row cabecera-contenedor">
        <div id="columnaCabeceraModulo" class="col-md-8 col-xs-12">
            <label id="etiquetaModulo">Listado de entregas</label>
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
                        <li data-header="Entregas.id" onclick="$(this).children('i').toggleClass('fa-square-o')">
                            <i class="fa fa-lg fa-check-square-o"></i>
                            <label>Id</label>
                        </li>
                        <li data-header="Entregas.fecha" onclick="$(this).children('i').toggleClass('fa-square-o')">
                            <i class="fa fa-lg fa-check-square-o"></i>
                            <label>Fecha</label>
                        </li>
                        <li data-header="Entregas.recibido" onclick="$(this).children('i').toggleClass('fa-square-o')">
                            <i class="fa fa-lg fa-check-square-o"></i>
                            <label>Recibido</label>
                        </li>
                        <li data-header="Entregas.id_personal" onclick="$(this).children('i').toggleClass('fa-square-o')">
                            <i class="fa fa-lg fa-check-square-o"></i>
                            <label>Quien entrega</label>
                        </li>
                        <li data-header="Entregas.id_personal_receptor" onclick="$(this).children('i').toggleClass('fa-square-o')">
                            <i class="fa fa-lg fa-check-square-o"></i>
                            <label>A quién se entrega</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- ---------------------------------------------------------------------------------------- -->
    <!-- MODAL PARA AÑADIR REGISTROS -->
    <!-- ---------------------------------------------------------------------------------------- -->
    <div id="entregaModalPrincipalDiv" class="modalPrincipal" style="display: none;">
        <div class="modal fade modalPersonalizado in" id="entregaModalPrincipalDialog" tabindex="-1" role="dialog" aria-labelledby="entregaModalPrincipalDialog" aria-hidden="true" data-backdrop="static" data-keyboard="true" style="overflow-y: auto; z-index: 2000; display: block; padding-left: 17px;">
            <div class="modal-dialog  modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">
                            <span id="dialogSpanHeaderentregasModalPrincipalDialog"></span>
                            Entregas
                        </h5>
                        <button type="button" id="botonDisparadorentregasModalPrincipalDialog" class="close" data-pulsado data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                    </div>
                    <div class="modal-body" id="dialogBodyentregasModalPrincipalDialog" style="max-height: 89.2142vh; overflow-y: auto;">
                        <div id="menuModulo" class="row navbar  navbar-default navbar-fixed-top">
                            <div id="columnaBotonesUsuario" class="col-md-12">
                                <ul class="nav navbar-nav pull-right">
                                    <li>
                                        <a id="cancelarAccionAñadirEntrega" class="elemento-sidera fa fa-reply fa-lg" href="#" title="Cancelar"></a>
                                    </li>
                                    <li>
                                        <a class="fa fa-lg fa-check" id="guardarRegistroEntrega" form="EntregaAddForm" title="Guardar" onclick="guardarNuevoRegistro()" type="submit" href="#"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="cabeceraModulo" class="row cabecera-contenedor bloqueMasPequeño">
                            <div id="columnaCabeceraModulo" class="col-md-12">
                                <label id="etiquetaModulo">
                                    Añadir Entrega
                                </label>
                            </div>
                        </div>
                        <form class="cuerpo-contenedor" action="/entregas/add" id="EntregaAddForm" method="post" accept-charset="UTF-8" novalidate="novalidate">
                            <legend id="cabeceraInfo_9152" class="text-seccion alert-info legendStrata">Datos generales de las entregas</legend>
                            <div id="fila2" class="row">
                                <div id="columna3" class="col-md-3" style="padding-right: 5px; padding-left: 5px;">
                                    <div id="fechaDiv" class="form-group required" aria-required="true">
                                        <label id="fechaLabel">Fecha</label>
                                        <input type="date" name="data[Entrega][fecha]" class="form-control" value="" maxlength="50" required aria-required="true">
                                    </div>
                                </div>
                                <div id="columna3" class="col-md-3" style="padding-right: 5px; padding-left: 5px;">
                                    <div id="recibidoDiv" class="form-group required" aria-required="true">
                                        <label id="recibidoLabel">Recibido</label>
                                        <input type="hidden" name="data[Entrega][recibido]" class="form-control" value="" onclick=" $(this).val() == 0 ? $(this).val(1) : $(this).val(0)">
                                        <i class="form-control fa fa-lg fa-check-square-o fa-square-o" onclick="$(this).toggleClass('fa-square-o').siblings().trigger('click');"></i>
                                    </div>
                                </div>
                                <div id="columna3" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="quienEntregaDiv" class="form-group">
                                        <label id="quienEntregaLabel">Quien entrega</label>
                                        <div class="">
                                            <select id="quienentrega" name="[Entrega][id_personal]" class="selectpicker" value="" data-size="10" data-live-search-normalize="true" data-live-search="true" data-dropup-auto="false" tabindex="-98">
                                                <option value selected>Seleccione una opción...</option>
                                                
                                            </select>
                                            <!-- <button type="button" class="" data-toggle="dropdown" role="button" data-id="tallasudadera_id" title="Talla" aria-expanded="false" aria-invalid="false">
                                                <div class="filter-option">
                                                    <div class="filter-option-inner"></div>
                                                </div>
                                                <span class="bs-caret">
                                                    <span class="caret"></span>
                                                </span>
                                            </button> -->
                                        </div>
                                    </div>
                                </div>
                                <div id="columna3" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="aQuienEntregaDiv" class="form-group">
                                        <label id="aQuienEntregaLabel">A quien entrega</label>
                                        <div class="">
                                            <select id="aquienentrega" name="[Entrega][id_personal_receptor]" class="selectpicker" value="" data-size="10" data-live-search-normalize="true" data-live-search="true" data-dropup-auto="false" tabindex="-98">
                                                <option value selected>Seleccione una opción...</option>
                                                
                                            </select>
                                            <!-- <button type="button" class="" data-toggle="dropdown" role="button" data-id="tallasudadera_id" title="Talla" aria-expanded="false" aria-invalid="false">
                                                <div class="filter-option">
                                                    <div class="filter-option-inner"></div>
                                                </div>
                                                <span class="bs-caret">
                                                    <span class="caret"></span>
                                                </span>
                                            </button> -->
                                        </div>
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
    <div id="entregaModalEditarPrincipalDiv" class="modalPrincipal" style="display: none;">
        <div class="modal fade modalPersonalizado in" id="entregaModalPrincipalDialog" tabindex="-1" role="dialog" aria-labelledby="entregaModalPrincipalDialog" aria-hidden="true" data-backdrop="static" data-keyboard="true" style="overflow-y: auto; z-index: 2000; display: block; padding-left: 17px;">
            <div class="modal-dialog  modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">
                            <span id="dialogSpanHeaderentregasModalPrincipalDialog"></span>
                            Entregas
                        </h5>
                        <button type="button" id="botonDisparadorentregasModalPrincipalDialog" class="close" data-pulsado data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                    </div>
                    <div class="modal-body" id="dialogBodyentregaModalPrincipalDialog" style="max-height: 89.2142vh; overflow-y: auto;">
                        <div id="menuModulo" class="row navbar  navbar-default navbar-fixed-top">
                            <div id="columnaBotonesUsuario" class="col-md-12">
                                <ul class="nav navbar-nav pull-right">
                                    <li>
                                        <a id="cancelarAccionEditarEntrega" class="elemento-sidera fa fa-reply fa-lg" href="#" title="Cancelar"></a>
                                    </li>
                                    <li>
                                        <a class="fa fa-lg fa-check" id="guardarEditRegistroEntrega" form="EntregaEditForm" title="Guardar" onclick="" type="submit" href="#"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="cabeceraModulo" class="row cabecera-contenedor bloqueMasPequeño">
                            <div id="columnaCabeceraModulo" class="col-md-12">
                                <label id="etiquetaModulo">
                                    Modificar Entregas
                                </label>
                            </div>
                        </div>
                        <form class="cuerpo-contenedor" action="/entregas/edit/:id" id="EntregaEditForm" method="post" accept-charset="UTF-8" novalidate="novalidate">
                            <legend id="cabeceraInfo_9152" class="text-seccion alert-info legendStrata">Datos generales de las entregas</legend>
                            <div id="fila2" class="row">
                            <div id="columna3" class="col-md-3" style="padding-right: 5px; padding-left: 5px;">
                                    <div id="fechaDiv" class="form-group required" aria-required="true">
                                        <label id="fechaLabel">Fecha</label>
                                        <input id="fecha" type="date" name="data[Entrega][fecha]" class="form-control" value="" maxlength="50" required aria-required="true">
                                    </div>
                                </div>
                                <div id="columna3" class="col-md-3" style="padding-right: 5px; padding-left: 5px;">
                                    <div id="recibidoDiv" class="form-group required" aria-required="true">
                                        <label id="recibidoLabel">Recibido</label>
                                        <input id="recibido" type="hidden" name="data[Entrega][recibido]" class="form-control" value="" onclick=" $(this).val() == 0 ? $(this).val(1) : $(this).val(0)">
                                        <i class="form-control fa fa-lg fa-check-square-o fa-square-o" onclick="$(this).toggleClass('fa-square-o').siblings().trigger('click');"></i>
                                    </div>
                                </div>
                                <div id="columna3" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="quienEntregaDiv" class="form-group">
                                        <label id="quienEntregaLabel">Quien entrega</label>
                                        <div class="">
                                            <select id="quienentrega" name="[Entrega][id_personal]" class="selectpicker" value="" data-size="10" data-live-search-normalize="true" data-live-search="true" data-dropup-auto="false" tabindex="-98">
                                                <option value selected>Seleccione una opción...</option>
                                                
                                            </select>
                                            <!-- <button type="button" class="" data-toggle="dropdown" role="button" data-id="tallasudadera_id" title="Talla" aria-expanded="false" aria-invalid="false">
                                                <div class="filter-option">
                                                    <div class="filter-option-inner"></div>
                                                </div>
                                                <span class="bs-caret">
                                                    <span class="caret"></span>
                                                </span>
                                            </button> -->
                                        </div>
                                    </div>
                                </div>
                                <div id="columna3" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="aQuienEntregaDiv" class="form-group">
                                        <label id="aQuienEntregaLabel">A quien entrega</label>
                                        <div class="">
                                            <select id="aquienentrega" name="[Entrega][id_personal_receptor]" class="selectpicker" value="" data-size="10" data-live-search-normalize="true" data-live-search="true" data-dropup-auto="false" tabindex="-98">
                                                <option value selected>Seleccione una opción...</option>
                                                
                                            </select>
                                            <!-- <button type="button" class="" data-toggle="dropdown" role="button" data-id="tallasudadera_id" title="Talla" aria-expanded="false" aria-invalid="false">
                                                <div class="filter-option">
                                                    <div class="filter-option-inner"></div>
                                                </div>
                                                <span class="bs-caret">
                                                    <span class="caret"></span>
                                                </span>
                                            </button> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
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
                        <th data-campo="id" data-header="Entregas.id" class="orderable text-left positionSticky">
                            <a href="/index/sort:Entregas.id/direction.asc" class="desc">Id</a>
                        </th>
                        <th data-campo="fecha" data-header="Entregas.fecha" class="orderable text-left positionSticky">
                            <a href="/index/sort:Entregas.fecha/direction.asc" class="desc">Fecha</a>
                        </th>
                        <th data-campo="recibido" data-header="Entregas.recibido" class="orderable text-left positionSticky">
                            <a href="/index/sort:Entregas.recibido/direction.asc" class="desc">Recibido</a>
                        </th>
                    </tr>
                </thead>
                <tbody class="griddata" id="EntregaGridData">
                    <?php foreach ($entregas as $entrega) : ?>
                        <tr ondblclick="dobleClickFila($(this).attr('itemid'))" itemid="<?php echo $entrega['Entrega']['id']; ?>" class="gradeA" title="Haga click para editar registro">
                            <td>
                                <i value="<?php echo $entrega['Entrega']['id']; ?>" class="checkCell fa fa-lg fa-square-o"></i>
                            </td>
                            <td class="id"><?php echo $entrega['Entrega']['id']; ?> </td>
                            <td class="fecha text-left"><?php echo $entrega['Entrega']['fecha']; ?></td>
                            <td class="recibido text-left"><?php echo $entrega['Entrega']['recibido']; ?></td>
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
                                $("#cuerpoModulo tbody ").load('/entregas/index/' + $().getFilters(pageNumber, 'Entrega.id', 'desc', '1') + '/' + $().getFields() + ' #cuerpoModulo tbody tr', function() {
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
                        $('#cuerpoApp').load("entregas" + '/index/limit:' + $(this).val() + '/' + $().getFields());
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
            $().botonEliminar("entregas");
        });


        $('#eliminarentregas').on('click', function(event) {
            $.post("entregas/eliminarEntregas/");
        });
        $('#redireccionarentregas').on('click', function(event) {
            $.post("entregas/redirigirEntregas/");
        });
        $('#cambiarnombreEntrega').on('click', function(event) {
            $.post("entregas/cambiarNombreEntregas/");
        });

        $(document).ready(function() {
            //Funcion para cuando pulses delete no se te vaya para detras el sidera y te
            //descuaragingue todo
            //Funcion para tener el titulo de la barras bonito y para cuando pulses delete no se joda todo   
            history.pushState(null, null, "/rrhh/entregas");
            window.addEventListener('popstate', function(event) {
                history.pushState(null, null, "/rrhh/entregas");
            });

        });
    </script>
    <script>
        // FUNCIONES PARA ABRIR Y CERRAR EL MODAL DE AÑADIR REGISTRO
        $(document).ready(function() {
            // Asigna un evento click al botón
            $("#nuevoRegistroEntregas").on("click", function(event) {
                event.preventDefault(); // Evita el comportamiento predeterminado del enlace
                // Abre el modal
                $("#entregaModalPrincipalDiv").modal("show");
            });
        });

        $(document).ready(function() {
            // Asigna un evento click al botón
            $("#guardarRegistroEntrega").on("click", function(event) {
                event.preventDefault(); // Evita el comportamiento predeterminado del enlace
                // Cierra el modal
                $("#entregaModalPrincipalDiv").modal("hide");
            });
        });

        function guardarNuevoRegistro() {
            // Prevenir la acción predeterminada del formulario
            event.preventDefault();

            // Recopilar los datos del formulario
            var formData = new FormData(document.getElementById('EntregaAddForm'));

            // Enviar los datos al controlador para crear un nuevo registro
            $.ajax({
                url: 'entregas/add', // Reemplaza esto con la URL de tu controlador
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
        $('#cancelarAccionEntrega').on('click', function(event) {
            event.preventDefault();
            $('#EntregaAddForm')[0].reset();
            $('#entregaModalPrincipalDiv').modal('hide');
        });
    </script>
    <script>
        // Funcion para abrir el modal de edicion con los datos del registro
        $(document).ready(function() {
            $('#editRegistro').on('click', function() {
                // Aquí obtendremos el ID del registro seleccionado
                var idRegistro = obtenerIdRegistroSeleccionado();

                // Ahora, el botón tiene el ID del registro seleccionado almacenado en data-idregistro.
                console.log('ID del registro seleccionado:', idRegistro);

                // Comprobar si se ha seleccionado un registro antes de continuar
                if (idRegistro) {
                    // Realizar una solicitud AJAX para obtener los datos del registro
                    $.ajax({
                        type: 'GET',
                        url: 'entregas/edit/' + idRegistro, // Reemplaza con la URL correcta para obtener el registro
                        dataType: 'json',
                        success: function(response) {
                            console.log('Datos del registro:', response);
                            if (response.success) {
                                var data = response.data; // Obtener los datos del registro de la respuesta
                                // Llenar los campos del formulario con los datos del registro
                                $('#fecha').val(data.Entrega.fecha);
                                $('#recibido').val(data.Entrega.recibido);
                                $('#quienentrega').val(data.Entrega.id_personal);
                                $('#aquienentrega').val(data.Entrega.id_personal_receptor);

                                // Mostrar los botones por su ID
                                $('#guardarEditRegistroEntrega, #cancelarAccionEditarEntrega').show();
                                // Abrir el modal después de cargar los datos
                                $('#entregaModalEditarPrincipalDiv').modal('show');
                                // Eliminar el atributo de solo lectura de los campos
                                $('#fecha', '#recibido', '#quienentrega', '#aquienentrega').prop('readonly', false);
                               
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
        $('#guardarEditRegistroEntrega').on('click', function(event) {
            event.preventDefault(); // Evita que el formulario se envíe normalmente
            var idRegistro = obtenerIdRegistroSeleccionado();

            // Obtén los datos actualizados del formulario del modal
            var formData = $('#EntregaEditForm').serialize();

            // Realiza una solicitud AJAX para actualizar el registro
            $.ajax({
                type: 'POST',
                url: 'entregas/edit/' + idRegistro,
                data: formData,
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        $('#entregaModalEditarPrincipalDiv').modal('hide'); // Cierra el modal después de la actualización

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
        $('#cancelarAccionEditarEntrega').on('click', function(event) {
            event.preventDefault();
            $('#EntregaEditForm')[0].reset();
            $('#entregaModalEditarPrincipalDiv').modal('hide');
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
                        url: 'entregas/view/' + idRegistro,
                        dataType: 'json',
                        success: function(response) {
                            console.log('Datos del registro:', response);
                            if (response.success) {
                                var data = response.data; // Obtener los datos del registro de la respuesta
                                // Llenar los campos del formulario con los datos del registro
                                $('#fecha').val(data.Entrega.fecha);
                                $('#recibido').val(data.Entrega.recibido);
                                $('#quienentrega').val(data.Entrega.id_personal);
                                $('#aquienentrega').val(data.Entrega.id_personal_receptor);
                                // Abrir el modal después de cargar los datos
                                $('#entregaModalEditarPrincipalDiv').modal('show');
                                $('#fecha', '#recibido', '#quienentrega', '#aquienentrega').prop('readonly', false);
                                // Ocultar los botones por su ID
                                $('#guardarEditRegistroEntrega, #cancelarAccionEditarEntrega').hide();
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