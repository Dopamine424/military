
let inputName = document.querySelector('[name="name"]');
let col = document.querySelector('[name="col"]');
let militaryUnit = document.querySelector('[name="military_unit"]');

let tbody = document.querySelector(".tbody");

let idEmployee = document.querySelector('[name="id"]');


let id = document.querySelectorAll(".id");
//console.log(id.length + 1);
//console.log(id.value + 1);
let idfor = 0;
id.forEach((element,index) => {
    if(index == id.length - 1 ){console.log(idfor = +element.textContent + 1 )}
});

document.querySelector('.form');
$(document).ready(function() {
    $('.btn-add').click(function(event){
        event.preventDefault();
        console.log(1);
        //form.dispatchEvent(new Event("submit"));
        getFormValue();
        var htmlString = `<tr class="tr"><td><input class='check' type='checkbox'/></td><td>${idfor}</td><td>${inputName.value}</td><td>${col.value}</td><td>${militaryUnit.value}</td></tr>`;
        //$( '.tbody' ).text( htmlString );
        tbody.innerHTML += htmlString;
    });
    let btnDel = document.querySelector('.btn-del');
    $('.btn-del').click(function(event){
        event.preventDefault();
        console.log(1);
        //form.dispatchEvent(new Event("submit"));
        // let elem = document.querySelectorAll(".tr");
        // elem.remove();
        const check = document.querySelectorAll('.check');
                btnDel.addEventListener('click', () => {
                    console.log(2);
                    for (let i = 0; i < check.length; i++) {
                        if (check.checked) {
                            check.remove();
                            del.parentElement.remove();
                        }
                    }
            }); 
            DelInput();

        // var htmlString = ``;
        //$( '.tbody' ).text( htmlString );
        // tbody.innerHTML += htmlString;
    });
});




let btn = document.querySelector('.btn-add');



const getFormValue = async(event) => {

    const data = {
        inputName: inputName.value,
        col: col.value,
        militaryUnit: militaryUnit.value,
    };
    const jsonData = JSON.stringify(data);
    response = await fetch("add-tech.php", {
        method: "POST",
        headers:{
            'Content-Type': 'application/json'
        },
        body: jsonData
    });
    if (response.ok) {
        alert('Данные отправленны');
    };
    console.log(data);
};

const DelInput = async(event) => {
    let asd = document.querySelectorAll('input');
    let test = document.querySelector('.main_tr');
    let dataDel = [];
    let onlineDel = [];

    for(let el of asd){
        if(el.checked){
            dataDel.push(el.value)
            // onlineDel.push(document.getElementById(`tr_${el.value}`))
            onlineDel.push(document.querySelector(`#td_${el.value}`));
        }
    }
    console.log(onlineDel)
    console.log(dataDel)
    const data = {
        // idEmployee: idEmployee.value
        data1: dataDel
        //price: price.value
    };
    const jsonData = JSON.stringify(data);
    response = await fetch("del-tech.php", {
        method: "POST",
        headers:{
            'Content-Type': 'application/json'
        },
        body: jsonData
    });
    if (response.ok) {
        //const res = await response.text();
        alert('Данные удаленыqweqwewq');
        for(let el of onlineDel){
            console.log(el)
            el.remove();
        }
    };
    console.log(data);
    // test.removeChild(document.querySelector('#td_221'));
    
};
// btn.onclick = getFormValue;

// function validationText(input, error) {
//     $(input).blur(function() {
//                 if( input.value.match(/[0-9]/) )
//                 {
//                     error.innerHTML = "Поле может содержать латинские и русские буквы, дефис, пробел";
//                     $('.button').attr('disabled', 'true');
//                 }
//                 else{
//                     error.innerHTML = "";
//                     //$('.button').removeAttr('disabled');
//                 }
//       });
//   }

//   function validationRevers(input, error) {
//     $(input).blur(function() {
//                 if( input.value.match(/[а-я]/) )
//                 {
//                     error.innerHTML = "";
//                     error.innerHTML = "Поле может содержать цифры, дефис, пробел";
//                     $('.button').attr('disabled', 'true');
//                 }
//                 else{
//                     error.innerHTML = "";
//                     //$('.button').removeAttr('disabled');
//                 }
//       });
//   }


// $("document").ready(function(){
//     $("#feedBack").on("submit", function(){
//         let dataForm = $(this).serialize();
//         $.ajax({
//             url: '/validation.php',
//             method: 'post',
//             dataType: 'html',
//             data: {"text": "Текстовый"}, 
//             success: function(data){
//                 console.log(data);
//             }
//         })
//     });
// });
