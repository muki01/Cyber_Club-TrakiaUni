/* FAQ Section */
// const bntsArray = document.querySelectorAll('.accordion');

// bntsArray.forEach((btn) => btn.addEventListener('click', toggleBtn))

// function toggleBtn() {
//     this.classList.toggle('active');

//     this.parentElement.classList.toggle('active');

//     const panel = this.nextElementSibling;

//     if (panel.style.display === 'block') {
//         panel.style.display = 'none';
//     } else {
//         panel.style.display = 'block';
//     }
// }

/*Back-to-top Button*/
const backBtn = document.getElementById("back-to-top");
backBtn.addEventListener('click', backToTop);
window.addEventListener('scroll', scrollFunction);

function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        backBtn.style.display = "block";
    } else {
        backBtn.style.display = "none";
    }
}

function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
