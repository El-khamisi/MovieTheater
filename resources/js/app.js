require('./bootstrap');


//Show Slider Range for rating movie
const range = document.getElementsByClassName('slider')[0];
const bubble = document.getElementsByClassName('bubble')[0];
range.addEventListener("input", () => {
    setBubble(range, bubble);
});
setBubble(range, bubble);


function setBubble(range, bubble) {
    const val = range.value;
    const min = range.min ? range.min : 0;
    const max = range.max ? range.max : 10;
    const newVal = Number(((val - min) * 100) / (max - min));
    bubble.innerHTML = val;

    // Sorta magic numbers based on size of the native UI thumb
    bubble.style.marginLeft = `calc(${newVal}% + (${8 - newVal * 0.15}px))`;
}



//Add Event to show form when clicking on button  To Add new  movie
const add_btn = document.getElementsByClassName('add-movie')[0];
const form = document.getElementsByClassName('form')[0];
const site = document.getElementsByClassName('main-content')[0];
site.addEventListener('click', () => {
    form.style.display = 'none';
});
add_btn.addEventListener('click', () => {
    form.style.display = 'block';
});