window.addEventListener('load', function () {
    setTimeout(function () {
        var loader = document.getElementById('preloader');
        loader.style.display = 'none';
    }, 1000);
})



// var navbarLinks = document.querySelectorAll('.nav-link');

// console.log(navbarLinks); // Check if elements are correctly selected

// navbarLinks.forEach(function(navLink) {
//     navLink.addEventListener('click', function() {
//         // console.log('Link clicked:', this); // Check if click event is firing
//         navbarLinks.forEach(function(link) {
//             link.classList.remove('active');
//         });
//         this.classList.add('active');
//     });
// });


// Add CSS Class

var navbarLinks = document.querySelectorAll('.nav-link');
var activeLink = localStorage.getItem('activeLink');
if (activeLink) {
    navbarLinks.forEach(function (link) {
        if (link.href === activeLink) {
            link.classList.add('active');
        }
    });
}
navbarLinks.forEach(function (navLink) {
    navLink.addEventListener('click', function () {
        navbarLinks.forEach(function (link) {
            link.classList.remove('active');
        });
        localStorage.setItem('activeLink', this.href);
    });
});




//    -----Weather Api----  //


// let b = fetch("https://api.weatherapi.com/v1/current.json?key=6efe206782ab4d388b074730240907&q=faisalabad&aqi=no")
// b.then(response => response.text())

//     .then(result => console.log(result))