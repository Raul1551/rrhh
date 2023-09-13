$(document).ready(function () {
    $(document).ajaxStart(function () { $('<div id="loading"><div class="cssload-whirlpool"></div></div>').appendTo('#cuerpoApp'); });
    $(document).ajaxStop(function () { $('#loading').remove(); });

    $(".noResponseAction").click(
        function (event) {
            event.preventDefault();
            $.post($(this).attr('href'));
        }
    );

    $.ajaxSetup({
        error: function (x, e) {
            if (x.status == 0) {
                //alert('No tiene conexion!!\n Compruebe si tiene acceso a la Red.');
            } else if (x.status == 404) {
                alert('URL no encontrada.');
            } else if (x.status == 500) {
                alert('Error Interno del Servidor.');
                //}else if(e=='parsererror'){
                //    alert('Error.\nParsing JSON Request failed.');
            } else if (e == 'timeout') {
                alert('Finalizado tiempo de espera.');
            } else if (x.status == 403) {
                location.reload();
            } else {
                alert('Error desconocido.\n' + x.responseText);
                alert('Error desconocido.\n' + x.status);
                location.reload();
            }
        }
    });


});


//Para elemento listaConsulta dentro de pestaï¿½as
$('a[data-toggle="tab"]').on("shown", function (event, ui) {
    var table = $.fn.dataTable.fnTables(true);
    if (table.length > 0) {
        $(table).dataTable().fnAdjustColumnSizing();
    }
});

/*Add y Edit*/

jQuery.fn.cargarLibreriaSelectpicker = function (controlador) {
    var controlador = controlador || '';
    var selector = $((controlador == "" ? '' : '#' + controlador + 'Div ') + '.selectpicker').first().closest('.modal');
    $(".mayusculas").keyup(function () {
        $(this).val(this.value.toUpperCase());
    });
    if (selector.length > 0 && $(window).innerWidth() > 768) {
        $((controlador == "" ? '' : '#' + controlador + 'Div ') + '.selectpicker').each(function () {
            var numOptions = $('#' + this.id + ' option').length;
            $('#' + this.id).on('shown.bs.select', function (e) {
                var ancho = $('#' + this.id).closest('.dropdown').width();
                var css = $('.bs-container.dropdown.bootstrap-select > .dropdown-menu').attr('style');
                $('.bs-container.dropdown.bootstrap-select > .dropdown-menu').attr('style', css + "min-width: " + ancho + "px !important;overflow:auto;");
            });
            if (numOptions > 5) {
                $(this).data('liveSearch', true).data('container', '#' + selector[0].id).data('size', 10).selectpicker();
            } else {
                $(this).data('container', '#' + selector[0].id).data('size', 10).selectpicker();
            }
        });
    } else {
        $((controlador == "" ? '' : '#' + controlador + 'Div ') + '.selectpicker').data('size', 10).selectpicker();
    }
}

jQuery.fn.cargarLibreriaDatetimepicker = function (controlador) {
    var controlador = controlador || '';
    $((controlador == "" ? '' : '#' + controlador + 'Div ') + 'form .date').datetimepicker({ locale: 'es', format: 'L', showClear: true, minDate: '1800-01-01', widgetPositioning: { vertical: 'bottom' } })
        .on('dp.show', function () {
            if ($(window).innerWidth() > 768) {
                var datepicker = $('#cuerpoApp' + (controlador == "" ? '' : ' #' + controlador + 'Div ')).find('.bootstrap-datetimepicker-widget:last'),
                    position = datepicker.offset();
                var selector = $(datepicker).closest('.modal');
                if (selector.length > 0) {
                    // Move datepicker to the exact same place it was but attached to body
                    position.top = position.top + 62;
                    position.left = position.left;
                    datepicker.css({
                        position: 'absolute',
                        top: position.top,
                        bottom: 'auto',
                        left: position.left,
                        right: 'auto',
                    });
                    $(datepicker).detach().appendTo(selector);
                }
            }
            $('#' + this.id + 'Input').attr("readonly", "readonly");
        })
        .on('dp.hide', function () {
            $('#' + this.id + 'Input').removeAttr("readonly");
        });
    $((controlador == "" ? '' : '#' + controlador + 'Div ') + 'form .datetime').datetimepicker({ locale: 'es', format: 'L HH:mm:ss', showClear: true, minDate: '1800-01-01', widgetPositioning: { vertical: 'bottom' } })
        .on('dp.show', function () {
            if ($(window).innerWidth() > 768) {
                var datepicker = $('#cuerpoApp' + (controlador == "" ? '' : ' #' + controlador + 'Div ')).find('.bootstrap-datetimepicker-widget:last'),
                    position = datepicker.offset();
                var selector = $(datepicker).closest('.modal');
                if (selector.length > 0) {
                    // Move datepicker to the exact same place it was but attached to body
                    position.top = position.top + 62;
                    position.left = position.left;
                    datepicker.css({
                        position: 'absolute',
                        top: position.top,
                        bottom: 'auto',
                        left: position.left,
                        right: 'auto',
                    });
                    $(datepicker).detach().appendTo(selector);
                }
            }
            $('#' + this.id + 'Input').attr("readonly", "readonly");
        })
        .on('dp.hide', function () {
            $('#' + this.id + 'Input').removeAttr("readonly");
        });
    $((controlador == "" ? '' : '#' + controlador + 'Div ') + 'form .time').datetimepicker({ locale: 'es', format: 'HH:mm:ss', showClear: true, widgetPositioning: { vertical: 'bottom' } })
        .on('dp.show', function () {
            if ($(window).innerWidth() > 768) {
                var datepicker = $('#cuerpoApp' + (controlador == "" ? '' : ' #' + controlador + 'Div ')).find('.bootstrap-datetimepicker-widget:last'),
                    position = datepicker.offset();
                var selector = $(datepicker).closest('.modal');
                if (selector.length > 0) {
                    // Move datepicker to the exact same place it was but attached to body
                    position.top = position.top + 62;
                    position.left = position.left;
                    datepicker.css({
                        position: 'absolute',
                        top: position.top,
                        bottom: 'auto',
                        left: position.left,
                        right: 'auto',
                    });
                    $(datepicker).detach().appendTo(selector);
                }
            }
            $('#' + this.id + 'Input').attr("readonly", "readonly");
        })
        .on('dp.hide', function () {
            $('#' + this.id + 'Input').removeAttr("readonly");
        });

    $((controlador == "" ? '' : '#' + controlador + 'Div ') + 'form .mesano').datetimepicker({ locale: 'es', viewMode: 'years', format: 'MM/YYYY', showClear: true, minDate: '1800-01-01', widgetPositioning: { vertical: 'bottom' } })
        .on('dp.show', function () {
            if ($(window).innerWidth() > 768) {
                var datepicker = $('#cuerpoApp' + (controlador == "" ? '' : ' #' + controlador + 'Div ')).find('.bootstrap-datetimepicker-widget:last'),
                    position = datepicker.offset();
                var selector = $(datepicker).closest('.modal');
                if (selector.length > 0) {
                    // Move datepicker to the exact same place it was but attached to body
                    position.top = position.top + 62;
                    position.left = position.left;
                    datepicker.css({
                        position: 'absolute',
                        top: position.top,
                        bottom: 'auto',
                        left: position.left,
                        right: 'auto',
                    });
                    $(datepicker).detach().appendTo(selector);
                }
            }
            $('#' + this.id + 'Input').attr("readonly", "readonly");
        })
        .on('dp.hide', function () {
            $('#' + this.id + 'Input').removeAttr("readonly");
        });

    $((controlador == "" ? '' : '#' + controlador + 'Div ') + 'form .ano').datetimepicker({ locale: 'es', viewMode: 'years', format: 'YYYY', showClear: true, minDate: '1800-01-01', widgetPositioning: { vertical: 'bottom' } })
        .on('dp.show', function () {
            if ($(window).innerWidth() > 768) {
                var datepicker = $('#cuerpoApp' + (controlador == "" ? '' : ' #' + controlador + 'Div ')).find('.bootstrap-datetimepicker-widget:last'),
                    position = datepicker.offset();
                var selector = $(datepicker).closest('.modal');
                if (selector.length > 0) {
                    // Move datepicker to the exact same place it was but attached to body
                    position.top = position.top + 62;
                    position.left = position.left;
                    datepicker.css({
                        position: 'absolute',
                        top: position.top,
                        bottom: 'auto',
                        left: position.left,
                        right: 'auto',
                    });
                    $(datepicker).detach().appendTo(selector);
                }
            }
            $('#' + this.id + 'Input').attr("readonly", "readonly");
        })
        .on('dp.hide', function () {
            $('#' + this.id + 'Input').removeAttr("readonly");
        });
}

jQuery.fn.validarFormulario = function (controlador) {
    var controlador = controlador || '';
    $((controlador == "" ? '' : '#' + controlador + 'Div ') + 'textarea[required],' + (controlador == "" ? '' : '#' + controlador + 'Div ') + 'input[required],' + (controlador == "" ? '' : '#' + controlador + 'Div ') + 'select[required]').closest('div.form-group').addClass('required');
    $((controlador == "" ? '' : '#' + controlador + 'Div ') + 'form').each(function () {
        $(this).validate({
            ignore: ".noValidar",
            errorElement: "span",
            errorClass: "mensaje-error text-danger",
            onfocusout: function (element) { $(element).valid(); },
            onkeyup: function (element) { $(element).valid(); },
            errorPlacement: function (error, element) { error.appendTo(element.closest('.form-group')); },
            invalidHandler: function (e, validator) {
                if (validator.errorList.length)
                    $('.sideraPills a[href="#' + jQuery(validator.errorList[0].element).closest(".tab-pane").attr('id') + '"]').tab('show')
            },
        });
    });
    $((controlador == "" ? '' : '#' + controlador + 'Div ') + '.selectpicker').on('change', function () { $(this).valid(); });
}

jQuery.fn.checkearValidacion = function (controlador) {
    var controlador = controlador || '';
    var idFormulario = this[0].id;
    if ($('#' + idFormulario).valid()) {
        return true;
    }
    else {
        return false;
    }
}

/*Index*/

jQuery.fn.getFilters = function (page, sortkey, sortDir, current, subgrid) {
    var page = page || '';
    var sortkey = sortkey || '';
    var sortDir = sortDir || '';
    var current = current || '';
    var subgrid = subgrid || '';
    var limit = "limit:" + $("#registrosPorPagina" + (subgrid == "" ? '' : subgrid) + " option:selected").val();
    var filter = '';
    if (sortkey != '') filter += 'sort:' + sortkey + '/direction:' + sortDir + '/' + limit + '/';
    if (page) {
        filter += 'page:' + page;
    } else {
        if (current != '') filter += 'page:' + current;
    }
    return filter;
}

jQuery.fn.activarOrdenacionEnColumnas = function (subgrid, parametrosIndexModal) {
    var subgrid = subgrid || '';
    var parametrosIndexModal = parametrosIndexModal || '';
    $((subgrid == "" ? '' : '#' + subgrid + ' ') + "th.orderable").on("click",
        function (event) {
            event.preventDefault();
            var href = $(this).children("a").attr("href");
            if (href != null) {
                if (parametrosIndexModal == '') {
                    $("#cuerpoApp" + (subgrid == "" ? '' : ' #' + subgrid)).load(href);
                }
                else {
                    eval('var objParametrosIndexModal=' + parametrosIndexModal);
                    $("#cuerpoApp" + (subgrid == "" ? '' : ' #' + subgrid)).load(href, objParametrosIndexModal);
                }
            }
        }
    );
}

jQuery.fn.activarOrdenacionEnColumnasListadoParaMovil = function (subgrid, parametrosIndexModal) {
    var subgrid = subgrid || '';
    var parametrosIndexModal = parametrosIndexModal || '';
    $((subgrid == "" ? '' : '#' + subgrid + ' ') + "i.orderable").on("click",
        function (event) {
            event.preventDefault();
            var href = $(this).children("a").attr("href");
            if (href != null) {
                if (parametrosIndexModal == '') {
                    $("#cuerpoApp" + (subgrid == "" ? '' : ' #' + subgrid)).load(href);
                }
                else {
                    eval('var objParametrosIndexModal=' + parametrosIndexModal);
                    $("#cuerpoApp" + (subgrid == "" ? '' : ' #' + subgrid)).load(href, objParametrosIndexModal);
                }
            }
        }
    );
}

jQuery.fn.activarSeleccionarFilaAlHacerClick = function (subgrid) {
    var subgrid = subgrid || '';
    $((subgrid == "" ? '' : '#' + subgrid + ' ') + " td").on("click", function (event) {
        var id = $(this).parent().attr('itemid');
        $(this).parent().children(':first-child').children().toggleClass("fa-check-square-o").toggleClass("fa-square-o");
        $(this).parents('tr').toggleClass("row-selected");
        var numFilasSeleccionadas = $((subgrid == "" ? '' : '#' + subgrid + ' ') + ' .row-selected').length;
        $().activarDesactivarBotenesAlSeleccionarFila(numFilasSeleccionadas, subgrid);
    });
}
jQuery.fn.activarSeleccionarFilaAlHacerClickListadoParaMovil = function (subgrid) {
    var subgrid = subgrid || '';
    $((subgrid == "" ? '' : '#' + subgrid + ' ') + " td").on("click", function (event) {
        var id = $(this).parent().attr('itemid');
        $(this).find('i:first').first().toggleClass("fa-check-square-o").toggleClass("fa-square-o");
        $(this).parents('tr').toggleClass("row-selected");
        var numFilasSeleccionadas = $((subgrid == "" ? '' : '#' + subgrid + ' ') + ' .row-selected').length;
        $().activarDesactivarBotenesAlSeleccionarFila(numFilasSeleccionadas, subgrid);
    });
}

jQuery.fn.desactivarTodasFilas = function (subgrid) {
    $((subgrid == "" ? '' : '#' + subgrid + ' ') + '.checkCell').removeClass("fa-check-square-o").addClass("fa-square-o");
    $((subgrid == "" ? '' : '#' + subgrid + ' ') + '.checkCell').parents('tr').removeClass("row-selected");
}

jQuery.fn.activarSeleccionarSoloUnaFilaAlHacerClick = function (subgrid) {
    var subgrid = subgrid || '';
    $((subgrid == "" ? '' : '#' + subgrid + ' ') + " td").on("click", function (event) {
        $().desactivarTodasFilas(subgrid);
        var id = $(this).parent().attr('itemid');
        $(this).parent().children(':first-child').children().toggleClass("fa-check-square-o").toggleClass("fa-square-o");
        $(this).parents('tr').toggleClass("row-selected");
        var numFilasSeleccionadas = $((subgrid == "" ? '' : '#' + subgrid + ' ') + ' .row-selected').length;
        $().activarDesactivarBotenesAlSeleccionarFila(numFilasSeleccionadas, subgrid);
    });
}
jQuery.fn.activarSeleccionarSoloUnaFilaAlHacerClickListadoParaMovil = function (subgrid) {
    var subgrid = subgrid || '';
    $((subgrid == "" ? '' : '#' + subgrid + ' ') + " td").on("click", function (event) {
        $().desactivarTodasFilas(subgrid);
        var id = $(this).parent().attr('itemid');
        $(this).find('.selectorMovil').first().toggleClass("fa-check-square-o").toggleClass("fa-square-o");
        $(this).parents('tr').toggleClass("row-selected");
        var numFilasSeleccionadas = $((subgrid == "" ? '' : '#' + subgrid + ' ') + ' .row-selected').length;
        $().activarDesactivarBotenesAlSeleccionarFila(numFilasSeleccionadas, subgrid);
    });
}

jQuery.fn.activarSeleccionarTodasONingunaFilas = function (subgrid) {
    var subgrid = subgrid || '';
    $((subgrid == "" ? '' : '#' + subgrid + ' ') + "th.check").on("click", function (event) {
        if ($((subgrid == "" ? '' : '#' + subgrid + ' ') + '.checkCell.fa-square-o').length > 0) {
            $((subgrid == "" ? '' : '#' + subgrid + ' ') + '.checkCell').addClass("fa-check-square-o").removeClass("fa-square-o");
            $((subgrid == "" ? '' : '#' + subgrid + ' ') + '.checkCell').parents('tr').addClass("row-selected");
        } else {
            $().desactivarTodasFilas(subgrid);
        }
        var numFilasSeleccionadas = $((subgrid == "" ? '' : '#' + subgrid + ' ') + '.row-selected').length;
        $().activarDesactivarBotenesAlSeleccionarFila(numFilasSeleccionadas, subgrid);
    });
}

jQuery.fn.activarDesactivarBotenesAlSeleccionarFila = function (num, subgrid) {
    var num = num || 0;
    var subgrid = subgrid || '';
    if (num == 0) {
        $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#delRegistro" + (subgrid == "" ? '' : subgrid)).addClass("disabled");
        $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#facturarMarcado" + (subgrid == "" ? '' : subgrid)).addClass("disabled");
        $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#facturarMarcado2" + (subgrid == "" ? '' : subgrid)).addClass("disabled");
        $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#imprimirFactura22" + (subgrid == "" ? '' : subgrid)).addClass("disabled");
        $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#imprimirFactura11" + (subgrid == "" ? '' : subgrid)).addClass("disabled");
        $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#imprimirFactura3" + (subgrid == "" ? '' : subgrid)).addClass("disabled");
        $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#importarMarcado" + (subgrid == "" ? '' : subgrid)).addClass("disabled");
        $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#viewRegistro" + (subgrid == "" ? '' : subgrid)).addClass("disabled");
        $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#editRegistro" + (subgrid == "" ? '' : subgrid)).addClass("disabled");
        $((subgrid == "" ? '' : '#' + subgrid + ' ') + ".comportamientoDel" + (subgrid == "" ? '' : subgrid)).addClass("disabled");
        $((subgrid == "" ? '' : '#' + subgrid + ' ') + ".comportamientoEdit" + (subgrid == "" ? '' : subgrid)).addClass("disabled");
    } else if (num == 1) {
        $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#delRegistro" + (subgrid == "" ? '' : subgrid)).removeClass("disabled");
        $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#facturarMarcado" + (subgrid == "" ? '' : subgrid)).removeClass("disabled");
        $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#facturarMarcado2" + (subgrid == "" ? '' : subgrid)).removeClass("disabled");
        $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#imprimirFactura22" + (subgrid == "" ? '' : subgrid)).removeClass("disabled");
        $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#imprimirFactura11" + (subgrid == "" ? '' : subgrid)).removeClass("disabled");
        $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#imprimirFactura3" + (subgrid == "" ? '' : subgrid)).removeClass("disabled");
        $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#importarMarcado" + (subgrid == "" ? '' : subgrid)).removeClass("disabled");
        $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#viewRegistro" + (subgrid == "" ? '' : subgrid)).removeClass("disabled");
        $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#editRegistro" + (subgrid == "" ? '' : subgrid)).removeClass("disabled");
        $((subgrid == "" ? '' : '#' + subgrid + ' ') + ".comportamientoDel" + (subgrid == "" ? '' : subgrid)).removeClass("disabled");
        $((subgrid == "" ? '' : '#' + subgrid + ' ') + ".comportamientoEdit" + (subgrid == "" ? '' : subgrid)).removeClass("disabled");
    } else {
        $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#delRegistro" + (subgrid == "" ? '' : subgrid)).removeClass("disabled");
        $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#facturarMarcado" + (subgrid == "" ? '' : subgrid)).removeClass("disabled");
        $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#facturarMarcado2" + (subgrid == "" ? '' : subgrid)).removeClass("disabled");
        $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#imprimirFactura22" + (subgrid == "" ? '' : subgrid)).removeClass("disabled");
        $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#imprimirFactura11" + (subgrid == "" ? '' : subgrid)).removeClass("disabled");
        $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#imprimirFactura3" + (subgrid == "" ? '' : subgrid)).removeClass("disabled");
        $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#importarMarcado" + (subgrid == "" ? '' : subgrid)).removeClass("disabled");
        $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#viewRegistro" + (subgrid == "" ? '' : subgrid)).addClass("disabled");
        $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#editRegistro" + (subgrid == "" ? '' : subgrid)).addClass("disabled");
        $((subgrid == "" ? '' : '#' + subgrid + ' ') + ".comportamientoDel" + (subgrid == "" ? '' : subgrid)).removeClass("disabled");
        $((subgrid == "" ? '' : '#' + subgrid + ' ') + ".comportamientoEdit" + (subgrid == "" ? '' : subgrid)).addClass("disabled");
    }
}
//Esta fuuncion se utiliza para deshabilitar tanto el boton eliminar como el boton view y el edit una vez que cambiamos de pagina en la paginacion
jQuery.fn.actualizarBotonesIndexModalIndex = function (subgrid) {
    var subgrid = subgrid || '';
    $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#delRegistro" + (subgrid == "" ? '' : subgrid)).addClass("disabled");
    $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#facturarMarcado" + (subgrid == "" ? '' : subgrid)).addClass("disabled");
    $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#facturarMarcado2" + (subgrid == "" ? '' : subgrid)).addClass("disabled");
    $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#imprimirFactura22" + (subgrid == "" ? '' : subgrid)).addClass("disabled");
    $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#imprimirFactura11" + (subgrid == "" ? '' : subgrid)).addClass("disabled");
    $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#imprimirFactura3" + (subgrid == "" ? '' : subgrid)).addClass("disabled");
    $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#importarMarcado" + (subgrid == "" ? '' : subgrid)).addClass("disabled");
    $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#viewRegistro" + (subgrid == "" ? '' : subgrid)).addClass("disabled");
    $((subgrid == "" ? '' : '#' + subgrid + ' ') + "#editRegistro" + (subgrid == "" ? '' : subgrid)).addClass("disabled");
    $((subgrid == "" ? '' : '#' + subgrid + ' ') + ".comportamientoDel" + (subgrid == "" ? '' : subgrid)).addClass("disabled");
    $((subgrid == "" ? '' : '#' + subgrid + ' ') + ".comportamientoEdit" + (subgrid == "" ? '' : subgrid)).addClass("disabled");
}

jQuery.fn.cargarLibreriaSelectpickerIndexModal = function (subgrid) {
    var subgrid = subgrid || '';
    $(".mayusculas").keyup(function () {
        $(this).val(this.value.toUpperCase());
    });
    var selector = $((subgrid == "" ? '' : '#' + subgrid + ' ') + '.selectpicker').first().closest('.modal');
    if (selector.length > 0 && $(window).innerWidth() > 768) {
        $((subgrid == "" ? '' : '#' + subgrid + ' ') + '.selectpicker').each(function () {
            var numOptions = $('#' + this.id + ' option').length;
            $('#' + this.id).on('shown.bs.select', function (e) {
                var ancho = $('#' + this.id).closest('.dropdown').width();
                var css = $('.bs-container.dropdown.bootstrap-select > .dropdown-menu').attr('style');
                $('.bs-container.dropdown.bootstrap-select > .dropdown-menu').attr('style', css + "min-width: " + ancho + "px !important;overflow:auto;");
            });
            if (numOptions > 10) {
                $(this).data('liveSearch', true).data('container', '#' + selector[0].id).data('size', 10).selectpicker();
            } else {
                $(this).data('liveSearch', false).data('container', '#' + selector[0].id).data('size', 10).selectpicker();
            }
        });
    } else {
        $((subgrid == "" ? '' : '#' + subgrid + ' ') + '.selectpicker').data('size', 10).selectpicker();
    }
}

/*Botones de las Vistas*/
jQuery.fn.botonEliminar = function (controlador, tituloCabecera, mensajeAviso) {
    var controlador = controlador || '';
    var controladorCapitalizado = controlador.substr(0, 1).toUpperCase() + controlador.substr(1, controlador.length);
    var mensaje = mensajeAviso || '¿Realmente desea eliminar estos elementos?';

    var titulo = tituloCabecera || controladorCapitalizado;

    if ($('#registroDialog' + controlador).length < 1) {

        $('<div id="registroDialog' + controlador + '" class="modal fade " tabindex="-1" role="dialog" >\
              <div class="modal-dialog" role="document">\
                <div class="modal-content">\
                  <div class="modal-header">\
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>\
                    <p class="modal-title">'+ titulo + '</p>\
                  </div>\
                  <div class="modal-body">\
                    <p>'+ mensaje + '</p>\
                  </div>\
                  <div class="modal-footer">\
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="dialogButtonCancel">Cancelar</button>\
                    <button type="button" class="btn btn-primary" id="dialogButtonOk'+ controlador + '">Aceptar</button>\
                  </div>\
                </div>\
              </div>\
            </div>').appendTo('#cuerpoApp');

        $("#delRegistro").click(
            function (event) {
                $('#registroDialog' + controlador).on('show.bs.modal', function (event) { keyboard: true });
            }
        );
        $("#dialogButtonOk" + controlador).on('click',
            function (event) {
                event.preventDefault();
                $('#registroDialog' + controlador).modal('hide');
                $('.modal-backdrop:not(.modal-stack)').remove();
                var items = $('.row-selected').map(function () { return $(this).attr('itemid'); }).get().join(",");
                $.post(controlador + "/delete/", { 'id': items }, function (data) { $("#cuerpoApp").html(data); })

            }
        );
    }
}
/*Filtro*/
jQuery.fn.ponerColoresFiltros = function () {
    $(".operacionSelect:not(.bootstrap-select)").change(function () {
        if ($(this).val() == "") {
            $(this).closest('.filaCondicion').removeClass('alert-filtro');
        }
        else {
            $(this).closest('.filaCondicion').addClass('alert-filtro');
        }
        $().algunFiltroActivo();
    });
}

jQuery.fn.algunFiltroActivo = function () {
    var filtros = 0;
    $(".operacionSelect").each(function (i, val) {
        if ($(this).val() != "") {
            filtros++;
        }
    });
    if (filtros == 0) {
        $(this).closest('.filaCondicion').removeClass('alert-filtro');
        $("[id^='enviarFiltro']").addClass('hidden');
        $("[id^='enviarYGuardarFiltro']").addClass('hidden');
    }
    else {
        $(this).closest('.filaCondicion').addClass('alert-filtro');
        $("[id^='enviarFiltro']").removeClass('hidden');
        $("[id^='enviarYGuardarFiltro']").removeClass('hidden');
    }
}

jQuery.fn.inicializarColoresFiltros = function () {
    $(".operacionSelect").each(function () {
        if ($(this).val() == "") {
            $(this).closest('.filaCondicion').removeClass('alert-filtro');
        }
        else {
            $(this).closest('.filaCondicion').addClass('alert-filtro');
        }
        $().algunFiltroActivo();
    });
}

jQuery.fn.imprimirElemento = function (elem, append, delimiter) {
    var domClone = elem.cloneNode(true);

    var $printSection = document.getElementById("printSection");

    if (!$printSection) {
        $printSection = document.createElement("div");
        $printSection.id = "printSection";
        document.body.appendChild($printSection);
    }

    if (append !== true) {
        $printSection.innerHTML = "";
    }

    else if (append === true) {
        if (typeof (delimiter) === "string") {
            $printSection.innerHTML += delimiter;
        }
        else if (typeof (delimiter) === "object") {
            $printSection.appendChlid(delimiter);
        }
    }

    $printSection.appendChild(domClone);
}




