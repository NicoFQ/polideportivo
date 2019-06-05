const details = document.getElementsByTagName("details")[0]

const isOpen = (e) => {
    const element = e.target;
    if (element.tagName == "DETAILS")
        (element.hasAttribute("open")) ? element.classList.add("dontMove") : element.classList.remove("dontMove");
}//isOpen
details.addEventListener("toggle", isOpen)
// details.classList.add("dontMove")