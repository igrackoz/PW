'use strict'

const switcher = document.querySelector('.btn');

switcher.addEventListener('click', function() {
    document.body.classList.toggle('dark-theme')

    if(document.body.className == "light-theme"){ //Sin variable

        this.textContent = "Dark";
    }

    else{

        this.textContent = "Light";
    }
    
});