function checkValidateLoginUserName() {
    var userName = document.getElementById("username").value;
    var errorLoginMess = document.getElementById("errorLoginMessage");
    if (userName == '') {
        errorLoginMess.textContent = "Số điện thoại không được để trống";
        document.getElementById("loginBtn").setAttribute("disabled", "disabled");
    } else {
        errorLoginMess.textContent = "";
        var userPass = document.getElementById("pwd").value;
        if (userPass != '') {
            document.getElementById("loginBtn").removeAttribute("disabled");
        }
    }
}
function checkValidateLoginUserPass() {
    var userPass = document.getElementById("pwd").value;
    var errorLoginMess = document.getElementById("errorLoginMessage");
    if (userPass == '') {
        errorLoginMess.textContent = "Mật khẩu không được để trống";
        document.getElementById("loginBtn").setAttribute("disabled", "disabled");
    } else {
        var userName = document.getElementById("username").value;
        if (userName != '') {
            document.getElementById("loginBtn").removeAttribute("disabled");
        }
    }
}
// function enableButton() {
//     var signupBtn = document.getElementById("signupBtn");
//     if (signupBtn.hasAttribute("disabled")) {
//         var name = document.getElementById("fullname").value;
//         var uname = document.getElementById("username").value;
//         var pro = document.getElementById("province").value;
//         var dis = document.getElementById("district").value;
//         var town = document.getElementById("town").value;
//         var add = document.getElementById("address").value;
//         var tel = document.getElementById("phonenumber").value;
//         if (name != ''/* && uname != '' && pro != '' && dis != '' && town != ''
//             && add != '' && tel != ''*/) {
//             signupBtn.removeAttribute("disabled");
//         } else {
//             var errorMess = document.getElementById('errorSignupMessage');
//             errorMess.textContent = "Vui lòng nhập đầy đủ thông tin."
//         }
//     }
// }
// function toggleButton(ref, bttnID) {
//     document.getElementById(bttnID).disabled = ((ref.value !== ref.defaultValue) ? false : true);
// }