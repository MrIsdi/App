const sidebar = document.querySelector(".sidebar")
const content = document.querySelector(".content")
const close = document.getElementById("close")
const menu = document.querySelector(".nav button")

close.addEventListener("click", function(){
    sidebar.classList.add("close")
    content.classList.add("close")

    sidebar.classList.remove("open")
})

menu.addEventListener("click", function(){
    sidebar.classList.remove("close")
    content.classList.remove("close")

    sidebar.classList.add("open")
})
