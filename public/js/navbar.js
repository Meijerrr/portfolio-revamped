const hamburger = document.querySelector("#hamburger")
const menu = document.querySelector("#menu")
const div = document.querySelector('#hamburger-div')

hamburger.addEventListener("click", () => {
    menu.classList.toggle("hidden")
    div.classList.toggle("bg-black", 'bg-white')
})
