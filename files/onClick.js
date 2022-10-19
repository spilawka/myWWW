var display = false;
var document = document;
var window = window;
var style = window.getComputedStyle(document.documentElement);

function displayMenu() {
    var links;
    var color;
    var hamburger = document.getElementById("hamburger");
    if (!display) {
        links = document.getElementsByClassName("hamburger-link");
        while (links.length) {
            links[0].className = "link";
        }
        hamburger.style.backgroundColor = "#eeeeee";
    } else {
	links = document.getElementsByClassName("link");
        while (links.length) {
            links[0].className = "hamburger-link";
        }
        color = style.getPropertyValue("--colorMain");
        hamburger.style.backgroundColor = "rgb(201, 80, 0)";
    }

    display = !display;
}

