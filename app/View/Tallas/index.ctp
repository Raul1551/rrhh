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