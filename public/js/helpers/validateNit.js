const validateNit = (nit = "") => {
    let valido = false;
    if (nit != "") {
        nit = nit.includes("-")
            ? nit
            : nit.substring(0, nit.length - 1) + "-" + nit[nit.length - 1];
        let j = 2;
        let l = nit.search("-");
        let strNit = nit.substring(0, l);
        let m = strNit.length + 1;
        let suma = 0;
        for (let i = 0; i < strNit.length; i++) {
            let valor = parseInt(strNit.substr(i, 1));
            suma = suma + valor * m;
            m = m - 1;
        }
        let r = suma % 11;
        let v = 11 - r;
        if (v == 10) {
            v = "K";
        }
        let dv = nit.substring(l + 1);
        if (dv == v) {
            valido = true;
        }
    }
    return valido;
};
