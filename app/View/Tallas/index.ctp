<div id="cuerpoApp" class="container-fluid bloquePequeño">
    <div id="menuModulo" class="row navbar  navbar-default navbar-fixed-top">
        <div id="columnaBotonesUsuario" class="col-md-12">
            <ul class="nav navbar-nav pull-right">
                <li>
                    <a class="fa fa-filter fa-lg" title="Filtrar Registros" id="filtroTallas"></a>
                </li>
                <li>
                    <a class="fa fa-eye fa-lg cursorPointer disabled" title="Consultar Registro" id="viewRegistro" href="#"></a>
                </li>
                <li>
                    <a class="disabled fa fa-lg fa-trash disabled" data-toggle="modal" data-target="#registroDialogtallas" title="Eliminar Registro" id="delRegistro" disabled href="#"></a>
                </li>

                <li>
                    <a class="disabled fa fa-pencil fa-lg" title="Modificar Registro" id="editRegistro" href="#"></a>
                </li>
                <li>
                    <a class="fa fa-plus fa-lg" title="Nuevo Registro" id="nuevoRegistroTallas" href="#"></a>
                </li>
            </ul>
        </div>
    </div>
    <div id="cabeceraModulo" class="row cabecera-contenedor">
        <div id="columnaCabeceraModulo" class="col-md-8 col-xs-12">
            <label id="etiquetaModulo">Listado de tallas</label>
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
                        <li data-header="Tallas.talla_id" onclick="$(this).children('i').toggleClass('fa-square-o')">
                            <i class="fa fa-lg fa-check-square-o"></i>
                            <label>Id</label>
                        </li>
                        <li data-header="Tallas.talla" onclick="$(this).children('i').toggleClass('fa-square-o')">
                            <i class="fa fa-lg fa-check-square-o"></i>
                            <label>Talla</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- ---------------------------------------------------------------------------------------- -->
    <!-- MODAL PARA AÑADIR REGISTROS -->
    <!-- ---------------------------------------------------------------------------------------- -->
    <div id="tallaModalPrincipalDiv" class="modalPrincipal" style="display: none;">
        <div class="modal fade modalPersonalizado in" id="tallaModalPrincipalDialog" tabindex="-1" role="dialog" aria-labelledby="tallaModalPrincipalDialog" aria-hidden="true" data-backdrop="static" data-keyboard="true" style="overflow-y: auto; z-index: 2000; display: block; padding-left: 17px;">
            <div class="modal-dialog  modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">
                            <span id="dialogSpanHeadertallasModalPrincipalDialog"></span>
                            Personal
                        </h5>
                        <button type="button" id="botonDisparadortallasModalPrincipalDialog" class="close" data-pulsado data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                    </div>
                    <div class="modal-body" id="dialogBodytallaModalPrincipalDialog" style="max-height: 89.2142vh; overflow-y: auto;">
                        <div id="menuModulo" class="row navbar  navbar-default navbar-fixed-top">
                            <div id="columnaBotonesUsuario" class="col-md-12">
                                <ul class="nav navbar-nav pull-right">
                                    <li>
                                        <a id="cancelarAccionTalla" class="elemento-sidera fa fa-reply fa-lg" href="#" title="Cancelar"></a>
                                    </li>
                                    <li>
                                        <a class="fa fa-lg fa-check" id="guardarRegistroTalla" form="TallaAddForm" title="Guardar" onclick="guardarNuevoRegistro()" type="submit" href="#"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="cabeceraModulo" class="row cabecera-contenedor bloqueMasPequeño">
                            <div id="columnaCabeceraModulo" class="col-md-12">
                                <label id="etiquetaModulo">
                                    Añadir Talla
                                </label>
                            </div>
                        </div>
                        <form class="cuerpo-contenedor" action="/tallas/add" id="TallaAddForm" method="post" accept-charset="UTF-8" novalidate="novalidate">
                            <legend id="cabeceraInfo_9152" class="text-seccion alert-info legendStrata">Datos generales de las tallas</legend>
                            <div id="fila2" class="row">
                                <div id="columna3" class="col-md-3" style="padding-right: 5px; padding-left: 5px;">
                                    <div id="tallaDiv" class="form-group required" aria-required="true">
                                        <label id="tallaLabel">Talla</label>
                                        <input type="text" name="data[Talla][talla]" class="form-control mayusculas" value="" maxlength="50" pattern="[ a-zA-Z0-9ñÑ€áéíóúÁÉÍÓÚäëïöüÄËÏÖÜ\+.,:;ºª@_\-%()/=]+" title="Sólo están permitidos caracteres alfanuméricos.Este campo es obligatorio." required aria-required="true">
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
                        <th data-campo="id" data-header="Tallas.talla_id" class="orderable text-left positionSticky">
                            <a href="/index/sort:Tallas.talla_id/direction.asc" class="desc">Id</a>
                        </th>
                        <th data-campo="talla" data-header="Tallas.talla" class="orderable text-left positionSticky">
                            <a href="/index/sort:Tallas.talla/direction.asc" class="desc">Talla</a>
                        </th>
                    </tr>
                </thead>
                <tbody class="griddata" id="ClienteGridData">
                    <?php foreach ($tallas as $talla) : ?>
                        <tr ondblclick="dobleClickFila($(this).attr('itemid'))" itemid="<?php echo $talla['Talla']['talla_id']; ?>" class="gradeA" title="Haga click para editar registro">
                            <td>
                                <i value="<?php echo $talla['Talla']['talla_id']; ?>" class="checkCell fa fa-lg fa-square-o"></i>
                            </td>
                            <td class="id"><?php echo $talla['Talla']['talla_id']; ?> </td>
                            <td class="talla text-left"><?php echo $talla['Talla']['talla']; ?></td>
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
                        $('#cuerpoApp').load("tallas" + '/index/limit:' + $(this).val() + '/' + $().getFields());
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
            $().botonEliminar("tallas");
        });


        $('#eliminarpersonal').on('click', function(event) {
            $.post("personals/eliminarTallas/");
        });
        $('#redireccionarpersonal').on('click', function(event) {
            $.post("personals/redirigirTallas/");
        });
        $('#cambiarnombrePersonal').on('click', function(event) {
            $.post("personals/cambiarNombreTallas/");
        });
    </script>
    <script>
        // FUNCIONES PARA ABRIR Y CERRAR EL MODAL DE AÑADIR REGISTRO
        $(document).ready(function() {
            // Asigna un evento click al botón
            $("#nuevoRegistroTallas").on("click", function(event) {
                event.preventDefault(); // Evita el comportamiento predeterminado del enlace
                // Abre el modal
                $("#tallaModalPrincipalDiv").modal("show");
            });
        });

        $(document).ready(function() {
            // Asigna un evento click al botón
            $("#guardarRegistroTalla").on("click", function(event) {
                event.preventDefault(); // Evita el comportamiento predeterminado del enlace
                // Cierra el modal
                $("#tallaModalPrincipalDiv").modal("hide");
            });
        });
        function guardarNuevoRegistro() {
        // Prevenir la acción predeterminada del formulario
        event.preventDefault();

        // Recopilar los datos del formulario
        var formData = new FormData(document.getElementById('TallaAddForm'));

        // Enviar los datos al controlador para crear un nuevo registro
        $.ajax({
            url: 'tallas/add', // Reemplaza esto con la URL de tu controlador
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
    </script>