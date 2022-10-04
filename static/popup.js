const editButton = document.querySelector(".edit-info")
const saveButton = document.querySelector(".modal-close")
const closeButton = document.querySelector(".save-info")
const editSection = document.querySelector(".edit-main")
const infoSection = document.querySelector(".info-main")

editButton.addEventListener("click", () => {
    editSection.classList.toggle("active")
    infoSection.classList.toggle("active")
})

saveButton.addEventListener("click", () => {
    editSection.classList.remove("active")
    infoSection.classList.remove("active")
})

closeButton.addEventListener("click", () => {
    editSection.classList.remove("active")
    infoSection.classList.remove("active")
})