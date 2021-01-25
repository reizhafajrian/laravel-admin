import element from "./element.js"

const food = document.querySelector(".food")
const drink = document.querySelector(".drink")
const button = document.querySelectorAll('.btn')
const card = document.querySelectorAll(".card")
const btn = card[0].querySelector('.btn')
const buttonsub = document.querySelector(".btn-success")
let data = []
let totalGlobal = []
let hasildata = 0
let arraytest = []








card.forEach(element => {
    const btn = element.querySelectorAll(".btn")
    const value = element.querySelector(".value")
    const nama = element.querySelector("h2")
    const harga = element.querySelector("#harga")
    btn[0].onclick = () => {
        if (value.innerHTML > 0) {
            value.innerHTML = Number(value.innerText) - 1
            tester(value.innerHTML, nama, Number(harga.innerHTML))

        }
    }
    btn[1].onclick = () => {

        value.innerHTML = Number(value.innerText) + 1
        tester(value.innerHTML, nama, Number(harga.innerHTML));
        console.log(harga.innerHTML)
    }

});
const tester = (angka, nama, harga) => {
    const menunya = document.createElement("info-menu")
    const collape = document.querySelector(".collapse")
    const menunya1 = document.querySelectorAll("info-menu")
    const allinfo = collape.querySelectorAll("info-menu > .menu-detail>p")
    if (allinfo[0] != undefined) {
        const hasil = (data.indexOf(nama.innerHTML) > -1)
        if (hasil == false) {
            data.push(nama.innerHTML)
            menunya.setAttribute("name", nama.innerHTML)
            menunya.setAttribute("value", angka)
            menunya.setAttribute("total", harga)
            collape.appendChild(menunya)
            totalDetails()
        } else {
            menunya1.forEach((element, i) => {
                const menunya2 = element.querySelector(".menu-detail  >.value")
                const total = element.querySelector(".menu-detail  >#total")
                const title = element.querySelector("p")
                if (title.innerHTML === nama.innerHTML) {

                    menunya2.innerHTML = angka
                    total.innerHTML = harga * Number(menunya2.innerHTML)
                    totalDetails()
                }
            });
        }
    } else {
        data.push(nama.innerHTML)
        menunya.setAttribute("name", nama.innerHTML)
        menunya.setAttribute("total", harga)
        menunya.setAttribute("value", angka)
        collape.appendChild(menunya)
        totalDetails()
    }
}

const totalDetails = () => {
    const total = document.querySelector(".menu-info > #total")
    const totalDetail = document.querySelectorAll(".menu-detail > #total")
    if (totalDetail.length > 0) {
        totalDetail.forEach((element, i) => {
            arraytest[i] = Number(element.innerHTML)
        });
        console.log(hasildata)

        total.innerHTML = arraytest.reduce((sum, value) => sum + value)
    } else {
        console.log(totalDetail[0].innerHTML)
        total.innerHTML = totalDetail[0].innerHTML
    }

}
const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');