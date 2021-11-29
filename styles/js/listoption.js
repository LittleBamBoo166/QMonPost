// location list option
var proSelect = document.getElementById('province');
var provinces = ["An Giang", "Bà Rịa - Vũng Tàu", "Bắc Giang"];
var disSelect = document.getElementById('district');
var districts = ["Thành phố Long Xuyên", "Thành phố Châu Đốc", "Thị xã Tân Châu", "Thành phố Bà Rịa",
    "Thành phố Vũng Tàu", "Thị xã Phú Mỹ", "Thị xã Phú Mỹ", "Sơn Động", "Tân Yên"];
var toSelect = document.getElementById('town');
var towns = ['Bình Đức', 'Bình Khánh', 'Đông Xuyên', 'Châu Phú A', 'Châu Phú B', 'Núi Sam', 'Long Châu',
    'Long Hưng', 'Long Phú', 'Kim Dinh', 'Long Hương', 'Long Tâm', 'Thắng Nhất', 'Thắng Nhi',
    'Thắng Tam', 'Châu Pha', 'Mỹ Xuân', 'Phước Hoà', 'Đồng Cốc', 'Giáp Sơn', 'Hộ Đáp', 'Tây Yên Tử',
    'Đại Sơn', 'Phúc Sơn', 'Ngọc Thiện', 'Ngọc Vân', 'Ngọc Lý'];
for (let i = 0; i < provinces.length; i++) {
    var province = provinces[i];
    var ele = document.createElement('option');
    ele.textContent = province;
    ele.value = i + 1;
    proSelect.appendChild(ele);
}

function clear_option(sel) {
    var index = sel.length - 1;
    while (sel.length > 1) {
        sel.remove(index);
        index--;
    }
}

function get_district_by_province(sel) {
    var proid = sel.options[sel.selectedIndex].value;
    clear_option(disSelect);
    clear_option(toSelect);
    for (var i = 3 * proid - 3; i < 3 * proid; i++) {
        var district = districts[i];
        var ele = document.createElement('option');
        ele.textContent = district;
        ele.value = i + 1;
        disSelect.appendChild(ele);
    }
    if (proid != '') {
        enableButton();
    }
}

function get_town_by_district(sel) {
    var disid = sel.options[sel.selectedIndex].value;
    clear_option(toSelect);
    for (var i = 3 * disid - 3; i < 3 * disid; i++) {
        var town = towns[i];
        var ele = document.createElement('option');
        ele.textContent = town;
        ele.value = i + 1;
        toSelect.appendChild(ele);
    }
    if (disid != '') {
        enableButton();
    }
}