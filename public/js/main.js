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

let shownCategories = [];

const filter = () => {

    document.querySelectorAll("input[type=checkbox]").forEach(checkbox => {
        const index = shownCategories.indexOf(checkbox.id);

        if (checkbox.checked) {
            if (index === -1) {
                shownCategories.push(checkbox.id);
            }
        } else {
            if (!(index === -1)) {
                delete shownCategories[index];
            }
        }
    });

    document.querySelectorAll(".card").forEach(card => {
        if (!shownCategories.includes(card.dataset.kindOfAnimal)) {
            card.style.display = "none";
        } else {
            card.style.display = "";
        }
    });

    if (document.querySelectorAll("input[type=checkbox]:checked").length == 0) {
        document.querySelectorAll(".card").forEach(card => {
            card.style.display = "";
        });
    }

    console.log(shownCategories);
}

document.querySelectorAll("input[type=checkbox]").forEach(checkbox => {
    checkbox.addEventListener('change', filter);
});
