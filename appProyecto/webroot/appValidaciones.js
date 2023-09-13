/***********************************************************************************************************************
 *                                                      IMPORTANTE           
 * Pueden convivier tranquilamente la validacion jquery con la validacion html5
 ***********************************************************************************************************************/


/***********************************************************************************************************************
 *      Funcion para validar un Iban de una cuenta bancaria
 *      Para añadirsela a un campo esta regla se puede hacer de dos manera
 *      1- Dentro del input del campo añadir el atributo iban="validar" . <input id="nombre" type="text"  iban="validar" title="Validar Iban." />
 *      2- $('#idCampo').rules("add", {iban: true});
 *      Para añadirlo o quitar esta validacion dinamicamente haremos lo siguiente
 *      $('#idCampo').removeAttr("iban");
 *      $('#idCampo').attr("iban","validar");
 ***********************************************************************************************************************/
$.validator.addMethod("iban", function (value, element) {

    // Some quick simple tests to prevent needless work
    if (this.optional(element)) {
        return true;
    }

    // Remove spaces and to upper case
    var iban = value.replace(/ /g, "").toUpperCase(),
            ibancheckdigits = "",
            leadingZeroes = true,
            cRest = "",
            cOperator = "",
            countrycode, ibancheck, charAt, cChar, bbanpattern, bbancountrypatterns, ibanregexp, i, p;

    // Check the country code and find the country specific format
    countrycode = iban.substring(0, 2);
    bbancountrypatterns = {
        "AL": "\\d{8}[\\dA-Z]{16}",
        "AD": "\\d{8}[\\dA-Z]{12}",
        "AT": "\\d{16}",
        "AZ": "[\\dA-Z]{4}\\d{20}",
        "BE": "\\d{12}",
        "BH": "[A-Z]{4}[\\dA-Z]{14}",
        "BA": "\\d{16}",
        "BR": "\\d{23}[A-Z][\\dA-Z]",
        "BG": "[A-Z]{4}\\d{6}[\\dA-Z]{8}",
        "CR": "\\d{17}",
        "HR": "\\d{17}",
        "CY": "\\d{8}[\\dA-Z]{16}",
        "CZ": "\\d{20}",
        "DK": "\\d{14}",
        "DO": "[A-Z]{4}\\d{20}",
        "EE": "\\d{16}",
        "FO": "\\d{14}",
        "FI": "\\d{14}",
        "FR": "\\d{10}[\\dA-Z]{11}\\d{2}",
        "GE": "[\\dA-Z]{2}\\d{16}",
        "DE": "\\d{18}",
        "GI": "[A-Z]{4}[\\dA-Z]{15}",
        "GR": "\\d{7}[\\dA-Z]{16}",
        "GL": "\\d{14}",
        "GT": "[\\dA-Z]{4}[\\dA-Z]{20}",
        "HU": "\\d{24}",
        "IS": "\\d{22}",
        "IE": "[\\dA-Z]{4}\\d{14}",
        "IL": "\\d{19}",
        "IT": "[A-Z]\\d{10}[\\dA-Z]{12}",
        "KZ": "\\d{3}[\\dA-Z]{13}",
        "KW": "[A-Z]{4}[\\dA-Z]{22}",
        "LV": "[A-Z]{4}[\\dA-Z]{13}",
        "LB": "\\d{4}[\\dA-Z]{20}",
        "LI": "\\d{5}[\\dA-Z]{12}",
        "LT": "\\d{16}",
        "LU": "\\d{3}[\\dA-Z]{13}",
        "MK": "\\d{3}[\\dA-Z]{10}\\d{2}",
        "MT": "[A-Z]{4}\\d{5}[\\dA-Z]{18}",
        "MR": "\\d{23}",
        "MU": "[A-Z]{4}\\d{19}[A-Z]{3}",
        "MC": "\\d{10}[\\dA-Z]{11}\\d{2}",
        "MD": "[\\dA-Z]{2}\\d{18}",
        "ME": "\\d{18}",
        "NL": "[A-Z]{4}\\d{10}",
        "NO": "\\d{11}",
        "PK": "[\\dA-Z]{4}\\d{16}",
        "PS": "[\\dA-Z]{4}\\d{21}",
        "PL": "\\d{24}",
        "PT": "\\d{21}",
        "RO": "[A-Z]{4}[\\dA-Z]{16}",
        "SM": "[A-Z]\\d{10}[\\dA-Z]{12}",
        "SA": "\\d{2}[\\dA-Z]{18}",
        "RS": "\\d{18}",
        "SK": "\\d{20}",
        "SI": "\\d{15}",
        "ES": "\\d{20}",
        "SE": "\\d{20}",
        "CH": "\\d{5}[\\dA-Z]{12}",
        "TN": "\\d{20}",
        "TR": "\\d{5}[\\dA-Z]{17}",
        "AE": "\\d{3}\\d{16}",
        "GB": "[A-Z]{4}\\d{14}",
        "VG": "[\\dA-Z]{4}\\d{16}"
    };

    bbanpattern = bbancountrypatterns[ countrycode ];

    // As new countries will start using IBAN in the
    // future, we only check if the countrycode is known.
    // This prevents false negatives, while almost all
    // false positives introduced by this, will be caught
    // by the checksum validation below anyway.
    // Strict checking should return FALSE for unknown
    // countries.
    if (typeof bbanpattern !== "undefined") {
        ibanregexp = new RegExp("^[A-Z]{2}\\d{2}" + bbanpattern + "$", "");
        if (!(ibanregexp.test(iban))) {
            return false; // Invalid country specific format
        }
    }

    // Now check the checksum, first convert to digits
    ibancheck = iban.substring(4, iban.length) + iban.substring(0, 4);
    for (i = 0; i < ibancheck.length; i++) {
        charAt = ibancheck.charAt(i);
        if (charAt !== "0") {
            leadingZeroes = false;
        }
        if (!leadingZeroes) {
            ibancheckdigits += "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ".indexOf(charAt);
        }
    }

    // Calculate the result of: ibancheckdigits % 97
    for (p = 0; p < ibancheckdigits.length; p++) {
        cChar = ibancheckdigits.charAt(p);
        cOperator = "" + cRest + "" + cChar;
        cRest = cOperator % 97;
    }
    return cRest === 1;
}, "");


/***********************************************************************************************************************
 *      Funcion para validar un DNI/NIE/CIF 
 *      Para añadirsela a un campo esta regla se puede hacer de dos manera
 *      1- Dentro del input del campo añadir el atributo nifES="validar" . <input id="nombre" type="text"  nifES="validar" title="Validar DNI." />
 *      2- $('#idCampo').rules("add", {nifES: true});
 *      Para añadirlo o quitar esta validacion dinamicamente haremos lo siguiente
 *      $('#idCampo').removeAttr("nifES");
 *      $('#idCampo').attr("nifES","validar");
 ***********************************************************************************************************************/
$.validator.addMethod("nifES", function (value) {
    //comprobra cif Portugues
    var esPortugues='SI';
    if(!['1', '2', '3', '5', '6', '8'].includes(value.substr(0,1)) && 
       !['45', '70', '71', '72', '77', '79', '90', '91', '98', '99'].includes(value.substr(0,2)))
        esPortugues='NO';
    if(esPortugues=='SI'){
        let total = value[0] * 9 + value[1] * 8 + value[2] * 7 + value[3] * 6 + value[4] * 5 + value[5] * 4 + value[6] * 3 + value[7] * 2;

        let modulo11 = total - parseInt(total / 11) * 11;
        let comparador = modulo11 == 1 || modulo11 == 0 ? 0 : 11 - modulo11;

        if(value[8] == comparador)
        {
            return true;
        }
    }
    ////////////////////////////////////////////////////////
    
    if (/^[x-zX-Z]*([0-9]{7})*[a-zA-Z]+$/.test(value)) {
        var pri = value.substring(0, 1).toUpperCase();
        if (pri == 'X')
            value = '0' + value.substring(1, value.length);
        if (pri == 'Y')
            value = '1' + value.substring(1, value.length);
        if (pri == 'Z')
            value = '2' + value.substring(1, value.length);
    }

    if (/^([0-9]{8})*[a-zA-Z]+$/.test(value)) {
        var numero = value.substr(0, value.length - 1);
        var let = value.substr(value.length - 1, 1);
        numero = numero % 23;
        var letra = 'TRWAGMYFPDXBNJZSQVHLCKET';
        letra = letra.substring(numero, numero + 1);
        if (letra == let.toUpperCase()) {
            return true;

        } else {
            //alert("Nif: 8 Numeros Y La Letra (Ej. 01234567K). Nie: X 7 Numeros y la letra (Ej. X1234567K)");
            return false;//[false,"Nif: 8 Numeros Y La Letra (Ej. 01234567K). Nie: X 7 Numeros y la letra (Ej. X1234567K)"];
        }
    }
    if (value == "") {
        return true;
    }

    /* Inicio validacion CIF */
    var cif = value;
    if (cif.length !== 9) {
        return false;
    }

    var letters = ['J', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I'];
    var digits = cif.substr(1, cif.length - 2);
    var letter = cif.substr(0, 1);
    var control = cif.substr(cif.length - 1);
    var sum = 0;
    var i;
    var digit;

    if (!letter.match(/[A-Z]/)) {
        return false;
    }

    for (i = 0; i < digits.length; ++i) {
        digit = parseInt(digits[i]);

        if (isNaN(digit)) {
            return false;
        }

        if (i % 2 === 0) {
            digit *= 2;
            if (digit > 9) {
                digit = parseInt(digit / 10) + (digit % 10);
            }

            sum += digit;
        } else {
            sum += digit;
        }
    }

    sum %= 10;
    if (sum !== 0) {
        digit = 10 - sum;
    } else {
        digit = sum;
    }

    if (letter.match(/[ABEH]/)) {
        return String(digit) === control;
    }
    if (letter.match(/[NPQRSW]/)) {
        return letters[digit] === control;
    }


    if (String(digit) === control || letters[digit] === control) {
        return true;
    }
    /* Fin validacion CIF */
    
    return false;//[false,"Nif: 8 Numeros Y La Letra (Ej. 01234567K). Nie: X 7 Numeros y la letra (Ej. X1234567K)"];

}, "Por favor indica un NIF / NIE / CIF correcto.");


/***********************************************************************************************************************
 *      Funcion para validar que una fecha1(DateTime) es igual o mayor que una fecha2(DateTime)
 *      Para añadirsela a un campo esta regla se puede hacer de dos manera
 *      1- Dentro del input del campo fecha1(DateTime) añadir el atributo checkFechaIgualMayorQueDateTime="#idCampofecha2" . <input id="idCampofecha1" type="text"  checkFechaIgualMayorQueDateTime="#idCampofecha2" title="Validar Fecha." />
 *      2- $("#idCampofecha1").rules("add",{checkFechaIgualMayorQueDateTime:"#idCampofecha2"});
 *      Para añadirlo o quitar esta validacion dinamicamente haremos lo siguiente
 *      $('#idCampo').removeAttr("checkFechaIgualMayorQueDateTime");
 *      $('#idCampo').attr("checkFechaIgualMayorQueDateTime","#idCampofecha2");
 ***********************************************************************************************************************/
$.validator.addMethod("checkFechaIgualMayorQueDateTime", function (value, element, options) {
    if (value != "" && $(options).val() != "") {
        var x = value.split("/");
        var y = x[2].split(" ");
        var z = y[1].split(":");
        var fech1 = y[0] + x[1] + x[0] + z[0] + z[1] + z[2];

        var x = $(options).val().split("/");
        var y = x[2].split(" ");
        var z = y[1].split(":");
        var fech2 = y[0] + x[1] + x[0] + z[0] + z[1] + z[2];
        if (fech1 < fech2) {
            return false;
        } else {
            return true;
        }
    } else {
        return true;
    }
}, '');


/***********************************************************************************************************************
 *      Funcion para validar que una fecha1(Date) es igual o mayor que una fecha2(Date)
 *      Para añadirsela a un campo esta regla se puede hacer de dos manera
 *      1- Dentro del input del campo fecha1(Date) añadir el atributo checkFechaIgualMayorQueDate="#idCampofecha2" . <input id="idCampofecha1" type="text"  checkFechaIgualMayorQueDate="#idCampofecha2" title="Validar Fecha." />
 *      2- $("#idCampofecha1").rules("add",{checkFechaIgualMayorQueDate:"#idCampofecha2"});
 *      Para añadirlo o quitar esta validacion dinamicamente haremos lo siguiente
 *      $('#idCampo').removeAttr("checkFechaIgualMayorQueDate");
 *      $('#idCampo').attr("checkFechaIgualMayorQueDate","#idCampofecha2");
 ***********************************************************************************************************************/
$.validator.addMethod("checkFechaIgualMayorQueDate", function (value, element, options) {
    if (value != "" && $(options).val() != "") {
        var x = value.split("/");
        var z = $(options).val().split("/");
        var fech1 = x[2] + x[1] + x[0];
        var fech2 = z[2] + z[1] + z[0];
        if (fech1 < fech2) {
            return false;
        } else {
            return true;
        }
    } else {
        return true;
    }
}, '');

/***********************************************************************************************************************
 *      Funcion para validar los patterns de html5
 *      Esta regla se añade sola
 ***********************************************************************************************************************/
$.validator.addMethod("pattern", function (value, element, param) {
    if (this.optional(element)) {
        return true;
    }
    if (typeof param === "string") {
        param = new RegExp("^(?:" + param + ")$");
    }
    return param.test(value);
}, "Invalid format.");

/***********************************************************************************************************************
 *      Funcion para validar un Iban de una cuenta bancaria
 *      Para añadirsela a un campo esta regla se puede hacer de dos manera
 *      1- Dentro del input del campo añadir el atributo mayorquecero="validar" . <input id="nombre" type="text"  mayorquecero="validar" title="Validar mayor que cero." />
 *      2- $('#idCampo').rules("add", {mayorquecero: true});
 *      Para añadirlo o quitar esta validacion dinamicamente haremos lo siguiente
 *      $('#idCampo').removeAttr("mayorquecero");
 *      $('#idCampo').attr("mayorquecero","validar");
 ***********************************************************************************************************************/
$.validator.addMethod("mayorquecero", function (value, element) {

    var numero=value.replace(",", ".");
    if( !isNaN(numero) && numero > 0)
    {
       return true;
    }
    return false;
    
}, "El numero debe d eser mayor que cero.");


/***********************************************************************************************************************
 *      Funcion para validar si la fecha de imputacoin es correcta
 *      Para añadirsela a un campo esta regla se puede hacer de dos manera
 *      1- Dentro del input del campo añadir el atributo mayorquecero="validar" . <input id="nombre" type="text"  fechasImputacionCorrecta="NombreGrupoPHP" />
 *      Para añadirlo o quitar esta validacion dinamicamente haremos lo siguiente
 ***********************************************************************************************************************/
    $.validator.addMethod("fechasImputacionCorrecta", function (value, element, options) {
        if(options !="Administradores" && options !="Managers" )  {      
            var dateCorrecta = moment($('#'+element.id).val(),"DD/MM/YYYY",true);
            var fechaValida=dateCorrecta.isValid();  
            if( $('#'+element.id).val() =='' || fechaValida==false){
                var  fechasDeshabilitada =moment().subtract(1, 'months').startOf('month').format('YYYY-MM-DD');
                var  fechasDeshabilitadaTexto =moment().subtract(1, 'months').startOf('month').format('DD/MM/YYYY');
                $('#'+element.id).attr("title","Este campo es obligatorio.La fecha límite inferior no puede ser menor que <b class=\"colorNegroTexto\">"+fechasDeshabilitadaTexto+"</b>.Para dudas consulte con un Manager");
                return false;
            }
            else{
                var  fechasDeshabilitada =moment().subtract(1, 'months').startOf('month').format('YYYY-MM-DD');
                var  fechasDeshabilitadaTexto =moment().subtract(1, 'months').startOf('month').format('DD/MM/YYYY');
                $('#'+element.id).attr("title","Este campo es obligatorio.La fecha límite inferior no puede ser menor que <b class=\"colorNegroTexto\">"+fechasDeshabilitadaTexto+"</b>.Para dudas consulte con un Manager");
                var fechaIntroducida=$('#'+element.id).val().split('/');
                var fechaIntroducidaFormateada=fechaIntroducida[2]+"-"+fechaIntroducida[1]+"-"+fechaIntroducida[0];
                if( fechaIntroducidaFormateada < fechasDeshabilitada){
                    return false;
                }
                else{
                     return true;
                }
            }
        }else{
            return true;
        }
    }, '');
    
    $.validator.addMethod("fechasImputacionCorrectaMovimiento", function (value, element, options) {
        if(options !="Administradores" && options !="Managers" )  {       
            if( $('#'+element.id).val() ==''){
                return true;
            }
            else{
                var  fechasDeshabilitada =moment().subtract(1, 'months').startOf('month').format('YYYY-MM-DD');
                var  fechasDeshabilitadaTexto =moment().subtract(1, 'months').startOf('month').format('DD/MM/YYYY');
                $('#'+element.id).attr("title","La fecha límite inferior no puede ser menor que <b class=\"colorNegroTexto\">"+fechasDeshabilitadaTexto+"</b>.Para dudas consulte con un Manager");
                var fechaIntroducida=$('#'+element.id).val().split('/');
                var fechaIntroducidaFormateada=fechaIntroducida[2]+"-"+fechaIntroducida[1]+"-"+fechaIntroducida[0];
                if( fechaIntroducidaFormateada < fechasDeshabilitada){
                    return false;
                }
                else{
                     return true;
                }
            }
        }else{
            return true;
        }
    }, '');
    
    $.validator.addMethod("fechasImputacionCorrectaMesSolo", function (value, element, options) {
        if(options !="Administradores" && options !="Managers" )  {      
            var dateCorrecta = moment("01/"+$('#'+element.id).val(),"DD/MM/YYYY",true);
            var fechaValida=dateCorrecta.isValid();  
            if( $('#'+element.id).val() =='' || fechaValida==false){
                var  fechasDeshabilitada =moment().subtract(1, 'months').startOf('month').format('YYYY-MM-DD');
                var  fechasDeshabilitadaTexto =moment().subtract(1, 'months').startOf('month').format('DD/MM/YYYY');
                $('#'+element.id).attr("title","Este campo es obligatorio.La fecha límite inferior no puede ser menor que <b class=\"colorNegroTexto\">"+fechasDeshabilitadaTexto+"</b>.Para dudas consulte con un Manager");
                return false;
            }
            else{
                var  fechasDeshabilitada =moment().subtract(1, 'months').startOf('month').format('YYYY-MM-DD');
                var  fechasDeshabilitadaTexto =moment().subtract(1, 'months').startOf('month').format('DD/MM/YYYY');
                $('#'+element.id).attr("title","Este campo es obligatorio.La fecha límite inferior no puede ser menor que <b class=\"colorNegroTexto\">"+fechasDeshabilitadaTexto+"</b>.Para dudas consulte con un Manager");
                var fechaIntroducida="01/"+$('#'+element.id).val();
                    fechaIntroducida=fechaIntroducida.split('/');
                var fechaIntroducidaFormateada=fechaIntroducida[2]+"-"+fechaIntroducida[1]+"-"+fechaIntroducida[0];
                if( fechaIntroducidaFormateada < fechasDeshabilitada){
                    return false;
                }
                else{
                     return true;
                }
            }
        }else{
            return true;
        }
    }, '');

