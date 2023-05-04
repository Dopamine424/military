
let inputName = document.querySelector('[name="name"]');
let rank = document.querySelector('[name="rank"]');
let specializ = document.querySelector('[name="specializ"]');
let militaryUnit = document.querySelector('[name="military_unit"]');
let division = document.querySelector('[name="division"]');
let armi = document.querySelector('[name="armi"]');
let departament = document.querySelector('[name="departament"]');
let date = document.querySelector('[name="date"]');

let idEmployee = document.querySelector('[name="id"]');

// function cheked(radio) {
//     $(radio).change(function() {
//         if ($(this).prop("checked")) {
//             pay = radio.value;
//         }
//     });
// }

let tbody = document.querySelector(".tbody");


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
        var htmlString = `<tr class="tr"><td><input class='check' type='checkbox'/></td><td>${idfor}</td><td>${inputName.value}</td><td>${specializ.value}</td><td>${rank.value}</td><td>${militaryUnit.value}</td><td>${division.value}</td><td>${armi.value}</td><td>${departament.value}</td><td>${date.value}</td></tr>`;
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
                            // del.parentElement.remove();
                        }
                    }
            }); 
            DelInput();

        // var htmlString = ``;
        //$( '.tbody' ).text( htmlString );
        // tbody.innerHTML += htmlString;
    });
});


// let input =  document.querySelectorAll(".input");
// let count = 0;
// for (let i = 0; i < input.length; i++) {
//     input[i] == "";
//     count++;
// }
// if (count == 8) {
//     $('.btn-add').click(function(event){
//         event.preventDefault();
//         console.log(1);
//         //form.dispatchEvent(new Event("submit"));
//         getFormValue();
//         var htmlString = `<tr><td><input type='checkbox'/></td><td>${idfor}</td><td>${inputName.value}</td><td>${specializ.value}</td><td>${rank.value}</td><td>${militaryUnit.value}</td><td>${division.value}</td><td>${armi.value}</td><td>${departament.value}</td><td>${date.value}</td></tr>`;
//         //$( '.tbody' ).text( htmlString );
//         tbody.innerHTML += htmlString;
//     });
// }
// $('.form').submit(function(){
//     console.log(1);
//     getFormValue();
// });

let btn = document.querySelector('.btn-add');



const getFormValue = async(event) => {

    const data = {
        inputName: inputName.value,
        specializ: specializ.value,
        rank: rank.value,
        militaryUnit: militaryUnit.value,
        division: division.value,
        armi: armi.value,
        departament: departament.value,
        date: date.value
        //price: price.value
    };
    const jsonData = JSON.stringify(data);
    response = await fetch("add.php", {
        method: "POST",
        headers:{
            'Content-Type': 'application/json'
        },
        body: jsonData
    });
    if (response.ok) {
        //const res = await response.text();
        alert('Данные отправленны');
    };
    console.log(data);
};

const DelInput = async(event) => {
    let asd = document.querySelectorAll('input');
    let dataDel = [];
    for(let el of asd){
        if(el.checked){
            dataDel.push(el.value)
        }
    }
    console.log(dataDel)
    const data = {
        // idEmployee: idEmployee.value
        data1: dataDel
        //price: price.value
    };
    const jsonData = JSON.stringify(data);
    response = await fetch("del.php", {
        method: "POST",
        headers:{
            'Content-Type': 'application/json'
        },
        body: jsonData
    });
    if (response.ok) {
        //const res = await response.text();
        alert('Данные удалены');
    };
    console.log(data);
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

