var slideIndex = 1;

var myTimer;

// var slideshowContainer;

window.addEventListener("load", function() {
    showSlides(slideIndex);
    myTimer = setInterval(function() { plusSlides(1) }, 5000);

    //COMMENT OUT THE LINE BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
    // slideshowContainer = document.getElementsByClassName('slideshow-inner')[0];

    //UNCOMMENT OUT THE LINE BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
    // slideshowContainer = document.getElementsByClassName('slideshow-container')[0];

    // slideshowContainer.addEventListener('mouseleave', resume)
})

// NEXT AND PREVIOUS CONTROL
function plusSlides(n) {
    clearInterval(myTimer);
    if (n < 0) {
        showSlides(slideIndex -= 1);
    } else {
        showSlides(slideIndex += 1);
    }

    //COMMENT OUT THE LINES BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME

    if (n === -1) {
        myTimer = setInterval(function() { plusSlides(n + 2) }, 5000);
    } else {
        myTimer = setInterval(function() { plusSlides(n + 1) }, 5000);
    }
}

//Controls the current slide and resets interval if needed
function currentSlide(n) {
    clearInterval(myTimer);
    myTimer = setInterval(function() { plusSlides(n + 1) }, 4000);
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.querySelectorAll(".slider > li");
    var dots = document.querySelectorAll(".controller > li ");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}

pause = () => {
    clearInterval(myTimer);
}

resume = () => {
    clearInterval(myTimer);
    myTimer = setInterval(function() { plusSlides(slideIndex) }, 4000);
}

/* ------------------------ Accorodion ------------------------- */


const accordion = document.querySelector('.why-content');
const items = accordion.querySelectorAll('.why-content>ul>li');
const questions = accordion.querySelectorAll('.why-content>ul>li>h3');

//Lets figure out what item to click
function toggleAccordion() {
    const thisItem = this.parentNode;

    items.forEach(item => {
        if (thisItem == item) {
            thisItem.classList.toggle('active');
            return;
        }

        item.classList.remove('active');
    });
}

questions.forEach(question => question.addEventListener('click', toggleAccordion));


// ----------------------------------------------------------------------------------------------
var coursolIndex = 1;

var coursolTimer;


window.addEventListener("load", function() {
    showcoursol(coursolIndex);
    coursolTimer = setInterval(function() { pluscoursol(1) }, 5000);

    //COMMENT OUT THE LINE BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
    // slideshowContainer = document.getElementsByClassName('slideshow-inner')[0];

    //UNCOMMENT OUT THE LINE BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
    // slideshowContainer = document.getElementsByClassName('slideshow-container')[0];

    // slideshowContainer.addEventListener('mouseleave', resume)
})

// NEXT AND PREVIOUS CONTROL
function pluscoursol(n) {
    clearInterval(coursolTimer);
    if (n < 0) {
        showcoursol(coursolIndex -= 1);
    } else {
        showcoursol(coursolIndex += 1);
    }

    //COMMENT OUT THE LINES BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME

    if (n === -1) {
        coursolTimer = setInterval(function() { pluscoursol(n + 2) }, 5000);
    } else {
        coursolTimer = setInterval(function() { pluscoursol(n + 1) }, 5000);
    }
}

//Controls the current slide and resets interval if needed
function currentcoursol(n) {
    clearInterval(coursolTimer);
    coursolTimer = setInterval(function() { pluscoursol(n + 1) }, 4000);
    showcoursol(coursolIndex = n);
}

function showcoursol(n) {
    var i;
    var coursol = document.querySelectorAll(".testimonial > li");
    // var dots = document.querySelectorAll(".controller > li ");
    if (n > coursol.length) { coursolIndex = 1 }
    if (n < 1) { coursolIndex = coursol.length }
    for (i = 0; i < coursol.length; i++) {
        coursol[i].style.display = "none";
    }
    // for (i = 0; i < dots.length; i++) {
    //     dots[i].className = dots[i].className.replace(" active", "");
    // }
    coursol[coursolIndex - 1].style.display = "block";
    // dots[coursolIndex - 1].className += " active";
}

pause = () => {
    clearInterval(coursolTimer);
}

resume = () => {
    clearInterval(coursolTimer);
    coursolTimer = setInterval(function() { pluscoursol(coursolIndex) }, 4000);
}