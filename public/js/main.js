window.welcomeCheck = function(){
    var onWelcomePage = false;
    if (document.location.pathname === "/") {
        onWelcomePage = true;;
    }
    return onWelcomePage;
}

document.addEventListener('DOMContentLoaded', function () {
    if (window.welcomeCheck()) {  
            var listOfColors = ["color-scheme-1", "color-scheme-2", "color-scheme-3"];
            var randomNum = Math.floor(Math.random() * listOfColors.length);
            document.getElementsByClassName("area")[0].classList.add("color-scheme-" + (randomNum + 1));
    }
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
}

document.querySelectorAll("input[type=checkbox]").forEach(checkbox => {
    checkbox.addEventListener('change', filter);
});

let thumbnails = document.getElementsByClassName("thumbnail")
let activeImages = document.getElementsByClassName("thumbnail-active")

for (var i = 0; i < thumbnails.length; i++) {
    thumbnails[i].addEventListener("mouseover", function () {

        if (activeImages.length > 0) {
            activeImages[0].classList.remove("thumbnail-active")
        }

        this.classList.add("thumbnail-active")
        document.getElementById("featured").style = "background-image: url(" + this.src + ");";
    })
};

// let buttonLeft = document.getElementById("slideLeft");
// let buttonRight = document.getElementById("slideRight");

// buttonLeft.addEventListener("click", function () {
//     document.getElementsByClassName("slider")[0].scrollLeft -= 180;
//     console.log("Go left!");
// })

// buttonRight.addEventListener("click", function () {
//     document.getElementsByClassName("slider")[0].scrollLeft += 180;
//     console.log("Go right!");
// })

window.locationCheck = function(){
    var onLocationPage = false;
    if (document.location.href.indexOf("location") > -1) {
        onLocationPage = true;
    }
    return onLocationPage;
}

if (window.locationCheck()) {
    document.getElementsByTagName('body')[0].style.overflowY = 'hidden';
    document.getElementsByTagName('body')[0].style.height = '100vh';
    
    const ratingElement = document.getElementsByClassName("rating");

    const Inner = '<label class="rate" onclick="scrollToReviews()"><input type="radio" name="radio1" id="star1" value="star1"><i class="fa fa-star star one-star"></i></label>';

    for (var i = 0; i < ratingElement.length; i) {
        const newItem = document.createElement('section');
        newItem.classList.add('stars');

        var parent = ratingElement[i].parentNode;
        var stars = parseInt(ratingElement[i].innerHTML);
        var newInner = '';
        
        for (var j = 0; j < stars; j++) {
            newInner = newInner + Inner;
        }
        
        newItem.innerHTML = newInner;
        parent.appendChild(newItem);
        parent.removeChild(ratingElement[i]);
    }

}

function scrollToReviews(){
    console.log('Click');
    const scrollTo = document.getElementsByClassName('reviews-container');
    scrollTo[0].scrollIntoView({behavior: "smooth"});
}