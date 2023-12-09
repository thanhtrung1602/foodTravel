const  $ = document.querySelector.bind(document);

const sub = $('.order');

function checkForm() {

    let err = $('.err');
    let name = $('.nameUser');
    let phone = $('.phone');
    let address = $('.addressUser');
    let note = $('.note');
    const specialCharPattern = /[!@#$%^&*(),.?":{}|<>]/;
    console.log('adresss value: ', address.value);
    console.log('a')

    if (name.value === '') {
        name.focus();
        // name.classList.add("invalid");
        // err.innerHTML = 'Bạn chưa nhập trường này';
        alert('bạn chưa nhập tên của mình')
        return false;
    } else if (specialCharPattern.test(name.value)) {
        name.focus();
        alert('vui lòng nhập tên không có ký tự đặc biệt')
        return false
    }
    
    console.log('Phone value:', phone.value);

    if (phone.value == '') {
        console.log('van loi: Empty value');
        phone.focus();
        return false;
    } else if (isNaN(phone.value)) {
        console.log('co loi: Not a number');
        phone.focus();
        alert('đây không phải là một số điện thoại')
        return false;   
    } else if (phone.value.length < 10) {
        console.log('het loi: Too short');
        phone.focus();
        alert('số điện thoại không được bé hơn 10 ký tự')
        return false;   
    } else if (specialCharPattern.test(phone.value)) {
        phone.focus()
        alert('vui lòng nhập số điện thoại không có ký tự đặc biệt')
        return false
    }

    console.log('address: ', address)
    if (address.value === '') {
        console.log(address.value)
        address.focus();
        // err.innerHTML = "Bạn chưa nhập địa chỉ";
        return false;
    } else if (specialCharPattern.test(address.value)) {
        address.focus();
        alert('vui lòng nhập địa chỉ không có ký tự đặc biệt')
        return false
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

