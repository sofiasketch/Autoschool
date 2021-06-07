// Евгений Абрамов 05.05.2021

let currentCity = "Москва"
let currentRight = "B"
let currentIntensity = 16
let pathToTheme = 'http://localhost/wp-content/themes/empty_theme/'
let emails
function getEmails() {
    fetch('http://localhost/dblink.php?method=getEmails')
        .then(res => {
            return res.json()
        })
        .then(data => {
            emails = data;
        })
}
getEmails()

const cities = {
    'Москва': 1,
    'Санкт-Петербург' : 0.9,
    'Казань' : 0.8,
    'Ижевск' : 0.7,
    'Пермь' : 0.6
}

const rightsCategories = {
    "A" : 1,
    "B" : 1.2,
    "C" : 1.8,
    "D" : 2,
    "A и A1" : 1
}

const pricesCategories = {
    "A" : 13000,
    "B" : 20000,
    "C" : 28000,
    "D" : 36000,
    "A и A1" : 13000
}

document.getElementById("gorod_p").style.textAlign = 'center'
document.getElementById("gorod_p").style.whiteSpace = 'nowrap'
document.getElementById('pushd').style.display = 'none'


////
let citySelector = document.getElementById('citySelector')
citySelector.style.display = 'none'
citySelector.style.position = 'absolute'
citySelector.style.width = '400px'
// citySelector.style.height = '280px'
citySelector.style.left = '50%'
citySelector.style.top = '50%'
citySelector.style.transform = 'translate(-50%,-50%)'
// citySelector.style.marginLeft = '40%'
// citySelector.style.marginTop = '20%'
citySelector.style.backgroundColor = 'white'
citySelector.style.borderRadius = '30px'
citySelector.style.zIndex = '99999'
citySelector.style.textAlign = 'center'
citySelector.setAttribute('isOpen', false)

let citySelectorName = document.createElement('p')
citySelectorName.innerHTML = "Выберите город"
citySelectorName.style.position = 'relative'
citySelectorName.style.margin = '20px'
citySelectorName.style.whiteSpace = 'nowrap'

citySelector.appendChild(citySelectorName)

for(let i of Object.keys(cities)) {
    let element = document.createElement('section')
    element.innerText = i
    element.style.margin = '20px 100px'
    element.style.textAlign = 'center'
    element.style.whiteSpace = 'nowrap'
    element.style.width = '200px'
    element.style.border = '1px solid lightBlue'
    element.style.borderRadius = '10px'
    element.addEventListener('click', changeCity)
    element.style.cursor = 'pointer'
    citySelector.appendChild(element)
}
////
for(let i of document.getElementsByClassName('citySelectImg')) {
    i.addEventListener('click', openCitySelect)
    i.style.cursor = 'pointer'
}

for(let i of document.getElementsByClassName('rectangles nm')) {
    i.addEventListener('click', changeRight)
}

for(let i of document.getElementsByClassName('hours lg')) {
    i.addEventListener('click', changeIntensity)
}

for(let i of document.getElementsByClassName('item')) {
    let date = new Date()
    let month
    if(date.getMonth() < 10)
        month = '0' + date.getMonth()
    else month = date.getMonth()
    i.innerText = String(i.innerText.split('.')[0] + '.' + month)
}

// fetch("http://localhost/dblink.php?method=getInfo").then((response) => {
//     response.text().then((text) => {
//         let result = JSON.parse(text).data
//         for(let i of result) {
//             console.log(JSON.parse(i))
//         }
//     })
// })

function changeCity(e) {
    currentCity = e.path[0].innerText
    document.getElementById("citySelector").style.display = 'none'
    document.getElementById("gorod_p").innerText = currentCity
    document.getElementById("gorod_plan").innerText = currentCity
    document.getElementById("gorod_tel").innerText = currentCity
    changeYMCity()
    reloadPrices()
}

function changeRight(right) {
    currentRight = right.path[0].innerText
    if (currentRight == "B") {
        let subCat = Array.from(right.target.classList)
        if (subCat.includes('M')) document.getElementsByTagName('h2')[0].innerText = "Категория " + currentRight + " (МКПП)"
            else document.getElementsByTagName('h2')[0].innerText = "Категория " + currentRight + " (АКПП)"
    } else {
        document.getElementsByTagName('h2')[0].innerText = "Категория " + currentRight
    }

    document.getElementsByClassName('KategoriiHours')[0].innerText = currentRight
    if(currentRight == 'A и A1') {
        document.getElementById('carimg').src = pathToTheme + "img/moto.png"
    } else if(currentRight == 'D') {
        document.getElementById('carimg').src = pathToTheme + "img/bus.png"
    } else if(currentRight == 'B') {
        document.getElementById('carimg').src = pathToTheme + "img/car2.png"
    } else {
        document.getElementById('carimg').src = pathToTheme + "img/car3.png"
    }

    reloadPrices()
}

function changeIntensity(intesity) {
    currentIntensity = parseInt(intesity.path[0].innerText)
    document.getElementsByClassName('KategoriiHours')[1].innerText = String(currentIntensity) + ' ч.'
    reloadPrices()
}

function reloadPrices() {
    // Цена обучения =Категория прав * Город * (Интенсивность/20)
    document.getElementsByClassName('cena')[0].innerText = String(Math.round(rightsCategories[currentRight] * cities[currentCity] * (currentIntensity / 20) * pricesCategories[currentRight])) + 'руб.'
    document.getElementsByClassName("rect__prices")[0].children[0].innerHTML = String(pricesCategories[currentRight] - 6000) + " руб. <span class=\"nm\">" + String(pricesCategories[currentRight]) + " руб.</span>"
}

function openCitySelect() {

    if(citySelector.getAttribute('isOpen') == 'false') {
        document.getElementById("citySelector").style.display = 'none'
        citySelector.setAttribute('isopen', true)
    } else {
        document.getElementById("citySelector").style.display = 'block'
        citySelector.setAttribute('isopen', false)
    }

}

function prepareQueryAcceptForm() {


    let push = document.getElementById('pushd')

    push.style.margin = 'auto'

    let acceptForm_age = document.getElementById('registr').children[7].value
    let acceptForm_email = document.getElementById('registr').children[5].value
    let acceptForm_phone = document.getElementById('registr').children[3].value
    let acceptForm_fio = document.getElementById('registr').children[1].value

    let re = new RegExp("[а-яА-Я]+ [а-яА-Я]+ [а-яА-Я]+");

    if(acceptForm_age == '' || acceptForm_email == '' || acceptForm_phone == '' || acceptForm_fio == '') {

        push.innerHTML = '<b>Все поля должны быть заполнены!</b>'
    } else if(acceptForm_age < 16 || acceptForm_age > 150) {

        push.innerHTML = '<b>Вам должно быть не меньше 16 лет и менее 150!</b>'
    } else if(acceptForm_phone.length !== 11) {
        
        push.innerHTML  = '<b>Телефон должен быть 11 символов</b>'
    } else if (String(acceptForm_email).indexOf('@') < 0) {
        push.innerHTML  = '<b>В емайле должен быть символ @</b>'
    } else if (emails.indexOf(String(acceptForm_email)) !== -1) {
        push.innerHTML  = '<b>Данный email был зарегистрирован</b>'
    } else if (!String(acceptForm_fio).match(re)) {
        push.innerHTML  = '<b>Данное ФИО некоректное</b>'
    } else {

        window.location.replace(
            "http://localhost/dbLink.php?fio=" +
            acceptForm_fio + "&phone=" + acceptForm_phone +
            "&mail=" + acceptForm_email + "&age=" + acceptForm_age +
            "&method=post_trial"
        )


        push.innerHTML = '<b>Успешно отправлено!</b>'
    }

    console.log(acceptForm_phone.length)
    push.style.display = 'block'

}

document.getElementById('but').addEventListener('click', prepareQueryAcceptForm)

reloadPrices()
document.getElementById("gorod_p").innerText = currentCity
document.getElementById("gorod_plan").innerText = currentCity
document.getElementById("gorod_tel").innerText = currentCity
document.getElementsByClassName('KategoriiHours')[1].innerText = '16 ч.'
document.getElementsByTagName('h2')[0].innerText = "Категория B (МКПП)"
document.getElementsByClassName('KategoriiHours')[0].innerText = "B"



// Burger Menu


document.getElementById("mobile__menu_trigger").onclick = function() {
    open()
};

document.getElementById("tablet__menu_trigger").onclick = function() {
    open()
};

function open() {
    document.getElementById("mobile__menu").classList.toggle("show");
}
