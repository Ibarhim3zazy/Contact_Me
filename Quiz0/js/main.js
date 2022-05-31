function login(e) {
  let user = document.getElementById('user');
  let pass = document.getElementById('pass');
  if (user.value == "" || pass.value == "") {
    document.getElementById('user').style.border = "#f03 1px solid";
    document.getElementById('pass').style.border = "#f03 1px solid";
    alert("يجب ادخال كل الحقول")
  }
  else {
    document.getElementById('user').style.border = "#6f6 1px solid";
    document.getElementById('pass').style.border = "#6f6 1px solid";
    alert("تم ادخال البيانات بنجاح")
  }
  return false;
}
