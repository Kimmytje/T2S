var dropdowns = document.getElementsByClassName("dropdown");
var dropdowncontent = document.getElementsByClassName("dropdown-content");

for (let i = 0; i < dropdowns.length; i++) {
    dropdowns[i].onmouseenter = function () {
        let width = document.body.clientWidth;
        let dwidth = dropdowncontent[i].clientWidth;
        if ((dropdowns[i].offsetLeft + dwidth) > (width - 50)) {
            dropdowncontent[i].style.right = "1.5rem";
            dropdowncontent[i].style.left = "auto";
        } else {
            dropdowncontent[i].style.right = "auto";
            dropdowncontent[i].style.left = "1.5rem";
        }

    }
}
