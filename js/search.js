function date_fun() {
    document.getElementById('search_form').innerHTML = '<input type="date" name="search"><input type="hidden" name="type" value="f_date"><button type="submit">اذهب</button>';
}
function text_fun(type) {
    document.getElementById('search_form').innerHTML = '<input id="search" type="search" placeholder="Search..." name="search" autofocus required /><input type="hidden" name="type" value="'+type+'"><button type="submit">اذهب</button>';
}
