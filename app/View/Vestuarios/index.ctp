<div id="cuerpoApp" class="container-fluid bloquePequeño">
    <div id="menuModulo" class="row navbar  navbar-default navbar-fixed-top">
        <div id="columnaBotonesUsuario" class="col-md-12">
            <ul class="nav navbar-nav pull-right">
                <li>
                    <a class="fa fa-filter fa-lg" title="Filtrar Registros" id="filtroVestuario"></a>
                </li>
                <li>
                    <a class="fa fa-eye fa-lg cursorPointer disabled" title="Consultar Registro" id="viewRegistro" href="#"></a>
                </li>
                <li>
                    <a class="disabled fa fa-lg fa-trash disabled" data-toggle="modal" data-target="#registroDialogvestuarios" title="Eliminar Registro" id="delRegistro" disabled href="#"></a>
                </li>

                <li>
                    <a class="disabled fa fa-pencil fa-lg" title="Modificar Registro" id="editRegistro" href="#"></a>
                </li>
                <li>
                    <a class="fa fa-plus fa-lg" title="Nuevo Registro" id="nuevoRegistroVestuario" href="#"></a>
                </li>
            </ul>
        </div>
    </div>

    <!-- ---------------------------------------------------------------------------------------- -->
    <!-- MODAL PARA AÑADIR REGISTROS -->
    <!-- ---------------------------------------------------------------------------------------- -->
    <div id="vestuarioModalPrincipalDiv" class="modalPrincipal" style="display: none;">
        <div class="modal fade modalPersonalizado in" id="vestuarioModalPrincipalDialog" tabindex="-1" role="dialog" aria-labelledby="vestuarioModalPrincipalDialog" aria-hidden="true" data-backdrop="static" data-keyboard="true" style="overflow-y: auto; z-index: 2000; display: block; padding-left: 17px;">
            <div class="modal-dialog  modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">
                            <span id="dialogSpanHeadervestuariosModalPrincipalDialog"></span>
                            Vestuario
                        </h5>
                        <button type="button" id="botonDisparadorvestuariosModalPrincipalDialog" class="close" data-pulsado data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                    </div>
                    <div class="modal-body" id="dialogBodyvestuariosModalPrincipalDialog" style="max-height: 89.2142vh; overflow-y: auto;">
                        <div id="menuModulo" class="row navbar  navbar-default navbar-fixed-top">
                            <div id="columnaBotonesUsuario" class="col-md-12">
                                <ul class="nav navbar-nav pull-right">
                                    <li>
                                        <a id="cancelarAccionVestuario" class="elemento-sidera fa fa-reply fa-lg" href="#" title="Cancelar"></a>
                                    </li>
                                    <li>
                                        <a class="fa fa-lg fa-check" id="guardarRegistroVestuario" form="VestuarioAddForm" title="Guardar" onclick="guardarNuevoRegistro()" type="submit" href="#"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="cabeceraModulo" class="row cabecera-contenedor bloqueMasPequeño">
                            <div id="columnaCabeceraModulo" class="col-md-12">
                                <label id="etiquetaModulo">
                                    Añadir Vestuario
                                </label>
                            </div>
                        </div>
                        <form class="cuerpo-contenedor" action="/vestuarios/add" id="VestuarioAddForm" method="post" accept-charset="UTF-8" novalidate="novalidate">
                            <legend id="cabeceraInfo_9152" class="text-seccion alert-info legendStrata">Datos generales del vestuario</legend>
                            <div id="fila2" class="row">
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="sudaderaDiv" class="form-group">
                                        <label id="sudaderaLabel">Sudadera</label>
                                        <input type="checkbox" name="data[Vestuario][sudadera]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="camisetaDiv" class="form-group">
                                        <label id="camisetaLabel">Camiseta</label>
                                        <input type="checkbox" name="data[Vestuario][camiseta]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="chaquetaDiv" class="form-group">
                                        <label id="chaquetaLabel">Chaqueta</label>
                                        <input type="checkbox" name="data[Vestuario][chaqueta]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="pantalonDiv" class="form-group">
                                        <label id="pantalonLabel">Pantalón</label>
                                        <input type="checkbox" name="data[Vestuario][pantalon]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="chalecoDiv" class="form-group">
                                        <label id="chalecoLabel">Chaleco</label>
                                        <input type="checkbox" name="data[Vestuario][chaleco]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="chubasqueroDiv" class="form-group">
                                        <label id="chubasqueroLabel">Chubasquero</label>
                                        <input type="checkbox" name="data[Vestuario][chubasquero]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="guantesDiv" class="form-group">
                                        <label id="guantesLabel">Guantes</label>
                                        <input type="checkbox" name="data[Vestuario][guantes]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="cascoDiv" class="form-group">
                                        <label id="cascoLabel">Casco</label>
                                        <input type="checkbox" name="data[Vestuario][casco]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="gafasDiv" class="form-group">
                                        <label id="gafasLabel">Gafas</label>
                                        <input type="checkbox" name="data[Vestuario][gafas]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="taponesDiv" class="form-group">
                                        <label id="taponesLabel">Tapones</label>
                                        <input type="checkbox" name="data[Vestuario][tapones]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="tallaGafasDiv" class="form-group">
                                        <label id="tallaGafasLabel">Talla-gafas</label>
                                        <input type="text" name="data[Vestuario][talla_gafas]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="zapatosDiv" class="form-group">
                                        <label id="zapatosLabel">Zapatos</label>
                                        <input type="checkbox" name="data[Vestuario][zapatos]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="tallaZapatosDiv" class="form-group">
                                        <label id="tallaZapatosLabel">Talla-zapatos</label>
                                        <input type="text" name="data[Vestuario][talla_zapatos]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="tallaSudaderaDiv" class="form-group">
                                        <label id="tallaSudaderaLabel">Talla-sudadera</label>
                                        <input type="text" name="data[Vestuario][talla_sudadera_id]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="tallaCamisetaDiv" class="form-group">
                                        <label id="tallaCamisetaLabel">Talla-camiseta</label>
                                        <input type="text" name="data[Vestuario][talla_camiseta_id]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="tallaChaquetaDiv" class="form-group">
                                        <label id="tallaChaquetaLabel">Talla-chaqueta</label>
                                        <input type="text" name="data[Vestuario][talla_chaqueta_id]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="tallaPantalonDiv" class="form-group">
                                        <label id="tallaPantalonLabel">Talla-pantalon</label>
                                        <input type="text" name="data[Vestuario][talla_pantalon_id]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="tallaChalecoDiv" class="form-group">
                                        <label id="tallaChalecoLabel">Talla-chaleco</label>
                                        <input type="text" name="data[Vestuario][talla_chaleco_id]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="tallaChubasqueroDiv" class="form-group">
                                        <label id="tallaChubasqueroLabel">Talla-chubasquero</label>
                                        <input type="text" name="data[Vestuario][talla_chubasquero_id]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="tallaGuantesDiv" class="form-group">
                                        <label id="tallaGuantesLabel">Talla-guantes</label>
                                        <input type="text" name="data[Vestuario][talla_guantes_id]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="tallaTaponesDiv" class="form-group">
                                        <label id="tallaTaponesLabel">Talla-tapones</label>
                                        <input type="text" name="data[Vestuario][talla_tapones_id]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="tallaCascoDiv" class="form-group">
                                        <label id="tallaCascoLabel">Talla-casco</label>
                                        <input type="text" name="data[Vestuario][talla_casco_id]" class="form-control" value="">
                                    </div>
                                </div>
                                <!-- Continuar con el resto de campos -->
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
    <div id="vestuarioModalEditarPrincipalDiv" class="modalPrincipal" style="display: none;">
        <div class="modal fade modalPersonalizado in" id="vestuarioModalPrincipalDialog" tabindex="-1" role="dialog" aria-labelledby="vestuarioModalPrincipalDialog" aria-hidden="true" data-backdrop="static" data-keyboard="true" style="overflow-y: auto; z-index: 2000; display: block; padding-left: 17px;">
            <div class="modal-dialog  modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">
                            <span id="dialogSpanHeadervestuariosModalPrincipalDialog"></span>
                            Vestuario
                        </h5>
                        <button type="button" id="botonDisparadorvestuariosModalPrincipalDialog" class="close" data-pulsado data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                    </div>
                    <div class="modal-body" id="dialogBodyvestuariosModalPrincipalDialog" style="max-height: 89.2142vh; overflow-y: auto;">
                        <div id="menuModulo" class="row navbar  navbar-default navbar-fixed-top">
                            <div id="columnaBotonesUsuario" class="col-md-12">
                                <ul class="nav navbar-nav pull-right">
                                    <li>
                                        <a id="cancelarAccionEditarVestuario" class="elemento-sidera fa fa-reply fa-lg" href="#" title="Cancelar"></a>
                                    </li>
                                    <li>
                                        <a class="fa fa-lg fa-check" id="guardarEditRegistroVestuario" form="VestuariolEditForm" title="Guardar" onclick="" type="submit" href="#"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="cabeceraModulo" class="row cabecera-contenedor bloqueMasPequeño">
                            <div id="columnaCabeceraModulo" class="col-md-12">
                                <label id="etiquetaModulo">
                                    Modificar Vestuario
                                </label>
                            </div>
                        </div>
                        <form class="cuerpo-contenedor" action="/vestuarios/edit/:id" id="VestuarioEditForm" method="post" accept-charset="UTF-8" novalidate="novalidate">
                            <legend id="cabeceraInfo_9152" class="text-seccion alert-info legendStrata">Datos generales del vestuario</legend>
                            <div id="fila2" class="row">
                            <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="sudaderaDiv" class="form-group">
                                        <label id="sudaderaLabel">Sudadera</label>
                                        <input id="sudadera" type="checkbox" name="data[Vestuario][sudadera]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="camisetaDiv" class="form-group">
                                        <label id="camisetaLabel">Camiseta</label>
                                        <input id="camiseta" type="checkbox" name="data[Vestuario][camiseta]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="chaquetaDiv" class="form-group">
                                        <label id="chaquetaLabel">Chaqueta</label>
                                        <input id="chaqueta" type="checkbox" name="data[Vestuario][chaqueta]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="pantalonDiv" class="form-group">
                                        <label id="pantalonLabel">Pantalón</label>
                                        <input id="pantalon" type="checkbox" name="data[Vestuario][pantalon]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="chalecoDiv" class="form-group">
                                        <label id="chalecoLabel">Chaleco</label>
                                        <input id="chaleco" type="checkbox" name="data[Vestuario][chaleco]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="chubasqueroDiv" class="form-group">
                                        <label id="chubasqueroLabel">Chubasquero</label>
                                        <input id="chubasquero" type="checkbox" name="data[Vestuario][chubasquero]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="guantesDiv" class="form-group">
                                        <label id="guantesLabel">Guantes</label>
                                        <input id="guantes" type="checkbox" name="data[Vestuario][guantes]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="cascoDiv" class="form-group">
                                        <label id="cascoLabel">Casco</label>
                                        <input id="casco" type="checkbox" name="data[Vestuario][casco]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="gafasDiv" class="form-group">
                                        <label id="gafasLabel">Gafas</label>
                                        <input id="gafas" type="checkbox" name="data[Vestuario][gafas]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="tallaGafasDiv" class="form-group">
                                        <label id="tallaGafasLabel">Talla-gafas</label>
                                        <input id="tallaGafas" type="text" name="data[Vestuario][talla_gafas]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="zapatosDiv" class="form-group">
                                        <label id="zapatosLabel">Zapatos</label>
                                        <input id="zapatos" type="checkbox" name="data[Vestuario][zapatos]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="tallaZapatosDiv" class="form-group">
                                        <label id="tallaZapatosLabel">Talla-zapatos</label>
                                        <input id="tallaZapatos" type="text" name="data[Vestuario][talla_zapatos]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="tallaSudaderaDiv" class="form-group">
                                        <label id="tallaSudaderaLabel">Talla-sudadera</label>
                                        <input id="tallaSudadera" type="text" name="data[Vestuario][talla_sudadera_id]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="tallaCamisetaDiv" class="form-group">
                                        <label id="tallaCamisetaLabel">Talla-camiseta</label>
                                        <input id="tallaCamiseta" type="text" name="data[Vestuario][talla_camiseta_id]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="tallaChaquetaDiv" class="form-group">
                                        <label id="tallaChaquetaLabel">Talla-chaqueta</label>
                                        <input id="tallaChaqueta" type="text" name="data[Vestuario][talla_chaqueta_id]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="tallaPantalonDiv" class="form-group">
                                        <label id="tallaPantalonLabel">Talla-pantalon</label>
                                        <input id="tallaPantalon" type="text" name="data[Vestuario][talla_pantalon_id]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="tallaChalecoDiv" class="form-group">
                                        <label id="tallaChalecoLabel">Talla-chaleco</label>
                                        <input id="tallaChaleco" type="text" name="data[Vestuario][talla_chaleco_id]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="tallaChubasqueroDiv" class="form-group">
                                        <label id="tallaChubasqueroLabel">Talla-chubasquero</label>
                                        <input id="tallaChubasquero" type="text" name="data[Vestuario][talla_chubasquero_id]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="tallaGuantesDiv" class="form-group">
                                        <label id="tallaGuantesLabel">Talla-guantes</label>
                                        <input id="tallaGuantes" type="text" name="data[Vestuario][talla_guantes_id]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="tallaTaponesDiv" class="form-group">
                                        <label id="tallaTaponesLabel">Talla-tapones</label>
                                        <input id="tallaTapones" type="text" name="data[Vestuario][talla_tapones_id]" class="form-control" value="">
                                    </div>
                                </div>
                                <div id="columna2" class="col-md-2" style="padding-right: 5px; padding-left: 15px;">
                                    <div id="tallaCascoDiv" class="form-group">
                                        <label id="tallaCascoLabel">Talla-casco</label>
                                        <input id="tallaCasco" type="text" name="data[Vestuario][talla_casco_id]" class="form-control" value="">
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
            <label id="etiquetaModulo">Listado del vestuario</label>
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
                        <li data-header="Vestuario.id" onclick="$(this).children('i').toggleClass('fa-square-o')">
                            <i class="fa fa-lg fa-check-square-o"></i>
                            <label>Id</label>
                        </li>
                        <li data-header="Vestuario.sudadera" onclick="$(this).children('i').toggleClass('fa-square-o')">
                            <i class="fa fa-lg fa-check-square-o"></i>
                            <label>Sudadera</label>
                        </li>
                        <li data-header="Vestuario.camiseta" onclick="$(this).children('i').toggleClass('fa-square-o')">
                            <i class="fa fa-lg fa-check-square-o"></i>
                            <label>Camiseta</label>
                        </li>
                        <li data-header="Vestuario.chaqueta" onclick="$(this).children('i').toggleClass('fa-square-o')">
                            <i class="fa fa-lg fa-check-square-o"></i>
                            <label>Chaqueta</label>
                        </li>
                        <li data-header="Vestuario.pantalon" onclick="$(this).children('i').toggleClass('fa-square-o')">
                            <i class="fa fa-lg fa-check-square-o"></i>
                            <label>Pantalón</label>
                        </li>
                        <li data-header="Vestuario.chaleco" onclick="$(this).children('i').toggleClass('fa-square-o')">
                            <i class="fa fa-lg fa-check-square-o"></i>
                            <label>Chaleco</label>
                        </li>
                        <li data-header="Vestuario.chubasquero" onclick="$(this).children('i').toggleClass('fa-square-o')">
                            <i class="fa fa-lg fa-check-square-o"></i>
                            <label>Chubasquero</label>
                        </li>
                        <li data-header="Vestuario.guantes" onclick="$(this).children('i').toggleClass('fa-square-o')">
                            <i class="fa fa-lg fa-check-square-o"></i>
                            <label>Guantes</label>
                        </li>
                        <li data-header="Vestuario.casco" onclick="$(this).children('i').toggleClass('fa-square-o')">
                            <i class="fa fa-lg fa-check-square-o"></i>
                            <label>Casco</label>
                        </li>
                        <li data-header="Vestuario.gafas" onclick="$(this).children('i').toggleClass('fa-square-o')">
                            <i class="fa fa-lg fa-check-square-o"></i>
                            <label>Gafas</label>
                        </li>
                        <li data-header="Vestuario.zapatos" onclick="$(this).children('i').toggleClass('fa-square-o')">
                            <i class="fa fa-lg fa-check-square-o"></i>
                            <label>Zapatos</label>
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
                        <th data-campo="id" data-header="Vestuario.id" class="orderable text-left positionSticky">
                            <a href="/index/sort:Vestuario.id/direction.asc" class="desc">Id</a>
                        </th>
                        <th data-campo="sudadera" data-header="Vestuario.sudadera" class="orderable text-left positionSticky">
                            <a href="/index/sort:Vestuario.sudadera/direction.asc" class="desc">Sudadera</a>
                        </th>
                        <th data-campo="camiseta" data-header="Vestuario.camiseta" class="orderable text-left positionSticky">
                            <a href="/index/sort:Vestuario.camiseta/direction.asc" class="desc">Camiseta</a>
                        </th>
                        <th data-campo="chaqueta" data-header="Vestuario.chaqueta" class="orderable text-left positionSticky">
                            <a href="/index/sort:Vestuario.chaqueta/direction.asc" class="desc">Chaqueta</a>
                        </th>
                        <th data-campo="pantalon" data-header="Vestuario.pantalon" class="orderable text-left positionSticky">
                            <a href="/index/sort:Vestuario.pantalon/direction.asc" class="desc">Pantalón</a>
                        </th>
                        <th data-campo="chaleco" data-header="Vestuario.chaleco" class="orderable text-left positionSticky">
                            <a href="/index/sort:Vestuario.chaleco/direction.asc" class="desc">Chaleco</a>
                        </th>
                        <th data-campo="chubasquero" data-header="Vestuario.chubasquero" class="orderable text-left positionSticky">
                            <a href="/index/sort:Vestuario.chubasquero/direction.asc" class="desc">Chubasquero</a>
                        </th>
                        <th data-campo="guantes" data-header="Vestuario.guantes" class="orderable text-left positionSticky">
                            <a href="/index/sort:Vestuario.guantes/direction.asc" class="desc">Guantes</a>
                        </th>
                        <th data-campo="casco" data-header="Vestuario.casco" class="orderable text-left positionSticky">
                            <a href="/index/sort:Vestuario.casco/direction.asc" class="desc">Casco</a>
                        </th>
                        <th data-campo="gafas" data-header="Vestuario.gafas" class="orderable text-left positionSticky">
                            <a href="/index/sort:Vestuario.gafas/direction.asc" class="desc">Gafas</a>
                        </th>
                        <th data-campo="zapatos" data-header="Vestuario.zapatos" class="orderable text-left positionSticky">
                            <a href="/index/sort:Vestuario.zapatos/direction.asc" class="desc">Zapatos</a>
                        </th>
                    </tr>
                </thead>
                <tbody class="griddata" id="VestuarioGridData">
                    <?php foreach ($vestuarios as $vestuario) : ?>
                        <tr ondblclick="dobleClickFila($(this).attr('itemid'))" itemid="<?php echo $vestuario['Vestuario']['id']; ?>" class="gradeA" title="Haga click para editar registro">
                            <td>
                                <i value="<?php echo $vestuario['Vestuario']['id']; ?>" class="checkCell fa fa-lg fa-square-o"></i>
                            </td>
                            <td class="id"><?php echo $vestuario['Vestuario']['id']; ?> </td>
                            <td class="sudadera text-left"><?php echo $vestuario['Vestuario']['sudadera']; ?></td>
                            <td class="camiseta text-left"><?php echo $vestuario['Vestuario']['camiseta']; ?></td>
                            <td class="chaqueta text-left"><?php echo $vestuario['Vestuario']['chaqueta']; ?></td>
                            <td class="pantalon text-left"><?php echo $vestuario['Vestuario']['pantalon']; ?></td>
                            <td class="chaleco text-left"><?php echo $vestuario['Vestuario']['chaleco']; ?></td>
                            <td class="chubasquero text-left"><?php echo $vestuario['Vestuario']['chubasquero']; ?></td>
                            <td class="guantes text-left"><?php echo $vestuario['Vestuario']['guantes']; ?></td>
                            <td class="casco text-left"><?php echo $vestuario['Vestuario']['casco']; ?></td>
                            <td class="gafas text-left"><?php echo $vestuario['Vestuario']['gafas']; ?></td>
                            <td class="zapatos text-left"><?php echo $vestuario['Vestuario']['zapatos']; ?></td>
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
                                $("#cuerpoModulo tbody ").load('/vestuarios/index/' + $().getFilters(pageNumber, 'Vestuario.id', 'desc', '1') + '/' + $().getFields() + ' #cuerpoModulo tbody tr', function() {
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
                        $('#cuerpoApp').load("vestuarios" + '/index/limit:' + $(this).val() + '/' + $().getFields());
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
            $().botonEliminar("vestuarios");
        });


        $('#eliminarvestuario').on('click', function(event) {
            $.post("vestuarios/eliminarVestuario/");
        });
        $('#redireccionarvestuario').on('click', function(event) {
            $.post("vestuarios/redirigirVestuario/");
        });
        $('#cambiarnombreVestuario').on('click', function(event) {
            $.post("vestuarios/cambiarNombreVestuario/");
        });
    </script>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        //Funcion para cuando pulses delete no se te vaya para detras el sidera y te
        //descuaragingue todo
        //Funcion para tener el titulo de la barras bonito y para cuando pulses delete no se joda todo   
        history.pushState(null, null, "/rrhh/vestuarios");
        window.addEventListener('popstate', function(event) {
            history.pushState(null, null, "/rrhh/vestuarios");
        });

    });
</script>
<script>
    // FUNCIONES PARA ABRIR Y CERRAR EL MODAL DE AÑADIR REGISTRO
    $(document).ready(function() {
        // Asigna un evento click al botón
        $("#nuevoRegistroVestuario").on("click", function(event) {
            event.preventDefault(); // Evita el comportamiento predeterminado del enlace
            // Abre el modal

            $("#vestuarioModalPrincipalDiv").modal("show");
        });
    });
    $(document).ready(function() {
        // Asigna un evento click al botón
        $("#guardarRegistroVestuario").on("click", function(event) {
            event.preventDefault(); // Evita el comportamiento predeterminado del enlace
            // Cierra el modal
            $("#vestuarioModalPrincipalDiv").modal("hide");
        });
    });
</script>
<script>
    function guardarNuevoRegistro() {
        // Prevenir la acción predeterminada del formulario
        event.preventDefault();

        // Recopilar los datos del formulario
        var formData = new FormData(document.getElementById('VestuarioAddForm'));

        // Enviar los datos al controlador para crear un nuevo registro
        $.ajax({
            url: 'vestuarios/add', // Reemplaza esto con la URL de tu controlador
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
    $('#cancelarAccionVestuario').on('click', function(event) {
        event.preventDefault();
        $('#VestuarioAddForm')[0].reset();
        $('#vestuarioModalPrincipalDiv').modal('hide');
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
                    url: 'vestuarios/edit/' + idRegistro, // Reemplaza con la URL correcta para obtener el registro
                    dataType: 'json',
                    success: function(response) {
                        console.log('Datos del registro:', response);
                        if (response.success) {
                            var data = response.data; // Obtener los datos del registro de la respuesta
                            // Llenar los campos del formulario con los datos del registro
                            $('#sudadera').val(data.Vestuario.sudadera);
                            $('#camiseta').val(data.Vestuario.camiseta);
                            $('#chaqueta').val(data.Vestuario.chaqueta);
                            $('#pantalon').val(data.Vestuario.pantalon);
                            $('#chaleco').val(data.Vestuario.chaleco);
                            $('#chubasquero').val(data.Vestuario.chubasquero);
                            $('#guantes').val(data.Vestuario.guantes);
                            $('#casco').val(data.Vestuario.casco);
                            $('#gafas').val(data.Vestuario.gafas);
                            $('#tallaGafas').val(data.Vestuario.talla_gafas);
                            $('#zapatos').val(data.Vestuario.zapatos);
                            $('#tallaZapatos').val(data.Vestuario.talla_zapatos);
                            // Añadir el resto de campos
                            // Mostrar los botones por su ID
                            $('#guardarEditRegistroVestuario, #cancelarAccionVestuario').show();
                            // Abrir el modal después de cargar los datos
                            $('#vestuarioModalEditarPrincipalDiv').modal('show');
                            // Eliminar el atributo de solo lectura de los campos
                            $('#sudadera, #camiseta, #chaqueta, #pantalon, #chaleco, #chubasquero, #guantes, #casco, #gafas, #tallaGafas, #zapatos, #tallaZapatos').prop('readonly', false);
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
    $('#guardarEditRegistroVestuario').on('click', function(event) {
        event.preventDefault(); // Evita que el formulario se envíe normalmente
        var idRegistro = obtenerIdRegistroSeleccionado();

        // Obtén los datos actualizados del formulario del modal
        var formData = $('#VestuarioEditForm').serialize();

        // Realiza una solicitud AJAX para actualizar el registro
        $.ajax({
            type: 'POST',
            url: 'vestuarios/edit/' + idRegistro,
            data: formData,
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    $('#vestuarioModalEditarPrincipalDiv').modal('hide'); // Cierra el modal después de la actualización

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
    $('#cancelarAccionEditarVestuario').on('click', function(event) {
        event.preventDefault();
        $('#VestuarioEditForm')[0].reset();
        $('#vestuarioModalEditarPrincipalDiv').modal('hide');
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
                    url: 'vestuarios/view/' + idRegistro,
                    dataType: 'json',
                    success: function(response) {
                        console.log('Datos del registro:', response);
                        if (response.success) {
                            var data = response.data; // Obtener los datos del registro de la respuesta
                            // Llenar los campos del formulario con los datos del registro
                            $('#sudadera').val(data.Vestuario.sudadera);
                            $('#camiseta').val(data.Vestuario.camiseta);
                            $('#chaqueta').val(data.Vestuario.chaqueta);
                            $('#pantalon').val(data.Vestuario.pantalon);
                            $('#chaleco').val(data.Vestuario.chaleco);
                            $('#chubasquero').val(data.Vestuario.chubasquero);
                            $('#guantes').val(data.Vestuario.guantes);
                            $('#casco').val(data.Vestuario.casco);
                            $('#gafas').val(data.Vestuario.gafas);
                            $('#tallaGafas').val(data.Vestuario.talla_gafas);
                            $('#zapatos').val(data.Vestuario.zapatos);
                            $('#tallaZapatos').val(data.Vestuario.talla_zapatos);
                            $('#sudadera, #camiseta, #chaqueta, #pantalon, #chaleco, #chubasquero, #guantes, #casco, #gafas, #tallaGafas, #zapatos, #tallaZapatos').prop('readonly', true);
                            // Ocultar los botones por su ID
                            $('#guardarEditRegistroVestuario, #cancelarAccionVestuario').hide();
                            // Abrir el modal después de cargar los datos
                            $('#vestuarioModalEditarPrincipalDiv').modal('show');
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