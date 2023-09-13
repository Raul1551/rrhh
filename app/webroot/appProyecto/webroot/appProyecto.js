function pxTOvh(value) {
    var w = window,
        d = document,
        e = d.documentElement,
        g = d.getElementsByTagName('body')[0],
        x = w.innerWidth || e.clientWidth || g.clientWidth,
        y = w.innerHeight || e.clientHeight || g.clientHeight;

    var result = (100 * value) / y;
    return result;
}
jQuery.fn.ajustarIndexAltoPantalla = function(dispositivo){
        var dispositivo = dispositivo || '';
        if(dispositivo == "ordenador"){
            var altura=$(window).height()-226;
            altura= pxTOvh(altura);
            $('#DataTables_Table_0_wrapper').css({'max-height': altura+'vh','border': '1px solid #ddd','position': 'relative'});
            $('#DataTables_Table_0_wrapper table').css({'margin-bottom': '0px','border':'0px solid #ddd','border-collapse': 'inherit'});
            $('#DataTables_Table_0_wrapper table thead th').addClass('positionSticky');
        }
}
jQuery.fn.ajustarIndexModalAltoPantalla = function(dispositivo,idSubgrid,maxHeight){
        var dispositivo = dispositivo || '';
        var idSubgrid   = idSubgrid || '';
        var maxHeight   = maxHeight || '';
        if(dispositivo == "ordenador"){
            if(maxHeight==''){ 
                var id = document.getElementById(idSubgrid); 
                var distanceFromTop = id.getBoundingClientRect().top; 
                var altura       = $(window).height()-165-distanceFromTop;
                if (altura < 20)
                    altura=165;
                altura= pxTOvh(altura);
                $('#'+idSubgrid+' #DataTables_Table_0_wrapper').css({'max-height': altura+'vh','border': '1px solid #ddd','position': 'relative'});
            }
            else{
                $('#'+idSubgrid+' #DataTables_Table_0_wrapper').css({'border': '1px solid #ddd','position': 'relative'});
            }
            
            $('#'+idSubgrid+' #DataTables_Table_0_wrapper table').css({'margin-bottom': '0px','border':'0px solid #ddd','border-collapse': 'inherit'});
            $('#'+idSubgrid+' #DataTables_Table_0_wrapper table thead th').addClass('positionSticky');
        }
}
jQuery.fn.ajustarModalPrincipal = function(dispositivo,idModalBody){
        var dispositivo = dispositivo || '';
        var idModalBody   = idModalBody || '';
        if(dispositivo == "ordenador"){
            var altura=$(window).height()-70;
            altura= pxTOvh(altura);
            $('#'+idModalBody).css({'max-height': altura+'vh','overflow-y': 'auto'});
        }
}
jQuery.fn.ajustarModalFiltro = function(dispositivo,idModalBody){
        var dispositivo = dispositivo || '';
        var idModalBody   = idModalBody || '';
        if(dispositivo == "ordenador"){
            var altura=$(window).height()-185;
            altura= pxTOvh(altura);
            $('#'+idModalBody+' #columnaCondiciones').css({'max-height': altura+'vh','overflow-y': 'auto'});
        }
}
jQuery.fn.ajustarModalPills = function(dispositivo,idPills){
        var dispositivo = dispositivo || '';
        var idModalBody   = idModalBody || '';
        if(dispositivo == "ordenador"){
            var altura=$(window).height()-185;
            altura= pxTOvh(altura);
            $('#'+idPills).css({'max-height': altura+'vh','overflow-y': 'auto'});
        }
}
