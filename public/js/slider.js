let slider={
    currentIndex: 2,



    init: function () {


        console.log('slider:init');
        const img  = document.querySelectorAll("img");
        const sliderBar = document.querySelectorAll('hr');
        const sliderTitle = document.querySelectorAll(".slider-title")

        sliderBar[slider.currentIndex].classList.add('active')
        sliderTitle[slider.currentIndex].classList.remove('display');
        img[slider.currentIndex].classList.remove('display');
        const btnNext = document.querySelector(".left");
        const btnPrev = document.querySelector(".right");

        btnNext.addEventListener('click', slider.sliderPrev);
        btnPrev.addEventListener('click', slider.sliderNext);


    },

    sliderNext:function (){

        slider.currentIndex++;
        const img = document.querySelectorAll("img");
        const sliderBar = document.querySelectorAll('hr')
        const sliderTitle = document.querySelectorAll(".slider-title")


        if (slider.currentIndex === img.length){
            slider.currentIndex = 0
            img[slider.currentIndex].classList.remove('display');
            img[img.length -1].classList.add('display')
            sliderTitle[slider.currentIndex].classList.remove('display');
            sliderTitle[img.length -1].classList.add('display')
            sliderBar[slider.currentIndex].classList.add('active')
            sliderBar[img.length -1].classList.remove('active')
        }else {
            img[slider.currentIndex-1].classList.add('display')
            img[slider.currentIndex].classList.remove('display');
            sliderTitle[slider.currentIndex-1].classList.add('display')
            sliderTitle[slider.currentIndex].classList.remove('display');
            sliderBar[slider.currentIndex].classList.add('active')
            sliderBar[slider.currentIndex -1].classList.remove('active')
        }









    },
    sliderPrev:function (){
        slider.currentIndex--;
        const img = document.querySelectorAll("img");
        const sliderBar = document.querySelectorAll('hr')
        const sliderTitle = document.querySelectorAll(".slider-title")

        console.log(sliderBar)
        if (slider.currentIndex<0){
            slider.currentIndex = img.length -1
            img[slider.currentIndex].classList.remove('display');
            img[0].classList.add('display')
            sliderTitle[slider.currentIndex].classList.remove('display');
            sliderTitle[0].classList.add('display')

            sliderBar[slider.currentIndex].classList.add('active')
            sliderBar[0].classList.remove('active')
        }else {
            img[slider.currentIndex+1].classList.add('display')
            img[slider.currentIndex].classList.remove('display');
            sliderTitle[slider.currentIndex+1].classList.add('display')
            sliderTitle[slider.currentIndex].classList.remove('display')
            sliderBar[slider.currentIndex].classList.add('active')
            sliderBar[slider.currentIndex +1].classList.remove('active')
        }

    }

}