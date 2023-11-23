const  $ = document.querySelector.bind(document);

const sub = $('.order');

function checkForm() {

    let err = $('.err');
    let name = $('.nameUser');
    let phone = $('.phone');
    let address = $('.addressUser');
    let note = $('.note');

    console.log('adresss value: ', address.value);
    console.log('a')

    if (name.value === '') {
        name.focus();
        name.classList.add("invalid");
        // err.innerHTML = 'Bạn chưa nhập trường này';
        return false;
    } 
    
    console.log('Phone value:', phone.value);

    if (phone.value == '') {
        console.log('van loi: Empty value');
        phone.focus();
        return false;
    } else if (isNaN(phone.value)) {
        console.log('co loi: Not a number');
        phone.focus();
        return false;   
    } else if (phone.value.length < 10) {
        console.log('het loi: Too short');
        phone.focus();
        return false;   
    }

    console.log('address: ', address)
    if (address.value === '') {
        console.log(address.value)
        address.focus();
        // err.innerHTML = "Bạn chưa nhập địa chỉ";
        return false;
    }

    return true
}
sub.onclick = function () {
    return checkForm();
}

let sl = $('.num-item');
let plus = $('.plus');
let minus = $('.minus');
plus.onclick = function () {
    sl ++;
    $('.numQuality').innerHTML = sl;
    console.log(sl)
    console.log(this)
}

minus.onclick = function () {
    sll --;
    $('.numQuality').innerHTML = sl;
}

