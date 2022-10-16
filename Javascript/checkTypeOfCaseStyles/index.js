//reguler expression untuk setiap jenis Case Styles, disini pake camel ya, biar enak buat code sama baca nya
const regex = {
    camelCase: /^([a-z]+)(([A-Z]([a-z]+))+)$/,
    snakeCase: /^([a-z]{1,})(_[a-z0-9]{1,})*$/,
    kebabCase: /^([a-z][a-z0-9]*)(-[a-z0-9]+)*$/,
    pascalCase: /^[A-Z][a-z]+(?:[A-Z][a-z]+)*$/
}

//convertor camelCase ke titleCase, tujuanny ya biar key regex jadi info yg ditampilin gitu lah hehee, ex: camelCase === Camel Case
function titleCase(t) {
    return t.charAt(0).toUpperCase() + t.slice(1).replace(/([A-Z]+)/g, " $1").replace(/([A-Z][a-z])/g, "$1");
}

//checker
function checkTypeOfCase(str) {
    const obj = Object.keys(regex).map((key) => key);
    const res = obj.map((data) => { return regex[data].test(str) ? titleCase(data) : null });

    const result = res.find(data => data);

    if (result) return `ini adalah "${result}"!`;
    return "whoops, teks yang kamu masukkan tidak termasuk Case Styles jenis manapun nih!";
}

//silahkan input semua teks disini..
console.log(checkTypeOfCase('camelCase'));