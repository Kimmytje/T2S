document.addEventListener('DOMContentLoaded', function () {
    var listOfColors = ["color-scheme-1", "color-scheme-2", "color-scheme-3"];
    var randomNum = Math.floor(Math.random() * listOfColors.length);
    document.getElementsByClassName("area")[0].classList.add("color-scheme-" + (randomNum + 1));
});

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
