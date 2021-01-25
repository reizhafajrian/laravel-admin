const food = document.querySelector(".food")
const drink = document.querySelector(".drink")
const button = document.querySelectorAll('.btn')
const card = document.querySelectorAll(".card")
    // const btn = card[0].querySelector('.btn')
    // let data = []
    // let totalGlobal = []
    // let hasildata = 0
    // let arraytest = []


const drinkMenu = () => {
    food.style.transform = "translateX(100%)"
    food.style.transition = "1s"

    setTimeout(() => {
        food.style.display = `none`
        drink.style.display = "grid"
        setTimeout(() => {
            drink.style.transform = "translateX(0%)"
            drink.style.transition = "1s"

        }, 500);
    }, 1000);



}

const foodMenu = () => {
    drink.style.transform = "translateX(100%)"
    drink.style.transition = "1s"

    setTimeout(() => {
        drink.style.display = `none`
        food.style.display = "grid"
        setTimeout(() => {
            food.style.transform = "translateX(0%)"
            food.style.transition = "1s"

        }, 500);
    }, 1000);



}