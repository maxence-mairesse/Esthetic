let slider={
    currentIndex: 1,



    init: function () {


        console.log('slider:init');
        const img  = document.querySelectorAll("img");
        const sliderBar = document.querySelectorAll('hr');
        const sliderTitle = document.querySelectorAll(".slider-title")

        sliderBar[slider.currentIndex].classList.add('active')
        sliderTitle[slider.currentIndex].classList.remove('display');
        sliderTitle[slider.currentIndex].style.opacity ='1'

        img[slider.currentIndex].style.transition= '0s'
        img[slider.currentIndex].style.left= '0vw'

        const btnNext = document.querySelector(".left");
        const btnPrev = document.querySelector(".right");

        btnNext.addEventListener('click', slider.sliderPrev);
        btnPrev.addEventListener('click', slider.sliderNext);

        window.setInterval(slider.sliderNext,10000)



    },

    sliderNext:function (){
        slider.currentIndex++;

        const img = document.querySelectorAll("img");
        const sliderBar = document.querySelectorAll('hr')
        const sliderTitle = document.querySelectorAll(".slider-title")




        if (slider.currentIndex !== img.length) {
            img[slider.currentIndex].style.transition= '1s'
            img[slider.currentIndex-1].style.transition= '1s'
            sliderTitle[slider.currentIndex -1].style.opacity = '0'


            setTimeout(()=>{
                    sliderTitle[slider.currentIndex -1].classList.add('display')
                }
                ,500)

            img[slider.currentIndex].style.left=0
            img[slider.currentIndex -1].style.zIndex='0'
            img[slider.currentIndex -1].style.left='100vw'


           setTimeout(()=>{

               img[slider.currentIndex -1].style.left='-100vw'
              },1000)



            sliderTitle[slider.currentIndex ].classList.remove('display')


            setTimeout(()=>{
            sliderTitle[slider.currentIndex ].style.opacity = '1'
                }
                ,500)

            sliderBar[slider.currentIndex].classList.add('active')
            sliderBar[slider.currentIndex-1].classList.remove('active')
        } else {
            slider.currentIndex = 0
            img[0].style.transition= '1s'
            img[img.length-1].style.transition= '1s'
            img[0].style.zIndex=1
            img[img.length-1].style.zIndex='0'
            img[img.length-1].style.left='100vw'
            setTimeout(()=>{ img[img.length-1].style.left='-100vw'},1000)
            img[0].style.left=0
            sliderTitle[img.length-1 ].style.opacity = '0'
            setTimeout(()=>{
                    sliderTitle[img.length-1].classList.add('display')
                }
                ,500)
            sliderTitle[0].classList.remove('display')
            setTimeout(()=>{
                    sliderTitle[0].style.opacity = '1'
                }
                ,500)


            sliderBar[0].classList.add('active')
            sliderBar[img.length-1].classList.remove('active')
        }


    },
    sliderPrev:function (){
        slider.currentIndex--;
        const img = document.querySelectorAll("img");
        const sliderBar = document.querySelectorAll('hr')
        const sliderTitle = document.querySelectorAll(".slider-title")









          if (slider.currentIndex >= 0) {
              sliderTitle[slider.currentIndex +1].style.opacity = '0'


              setTimeout(()=>{
                      sliderTitle[slider.currentIndex +1].classList.add('display')
                  }
                  ,500)

              img[slider.currentIndex].style.left=0
              img[slider.currentIndex].style.zIndex=1
              img[slider.currentIndex +1].style.zIndex='0'
              img[slider.currentIndex +1].style.left='100vw'

              setTimeout(()=>{

                  img[slider.currentIndex +1].style.left='-100vw'
              },1000)


              sliderTitle[slider.currentIndex ].classList.remove('display')


              setTimeout(()=>{
                      sliderTitle[slider.currentIndex ].style.opacity = '1'
                  }
                  ,500)



              sliderBar[slider.currentIndex].classList.add('active')
              sliderBar[slider.currentIndex + 1].classList.remove('active')
          } else {
              slider.currentIndex = img.length - 1


              img[slider.currentIndex].style.zIndex=1
              img[0].style.left='-100vw'

              setTimeout(()=>{ img[0].style.left='100vw'},1000)

              img[slider.currentIndex].style.left=0
              sliderTitle[slider.currentIndex].classList.remove('display')
              setTimeout(()=>{
                      sliderTitle[slider.currentIndex ].style.opacity = '1'
                  }
                  ,500)

              sliderTitle[0].style.opacity = '0'
              setTimeout(()=>{
                      sliderTitle[0].classList.add('display')
                  }
                  ,500)

              sliderBar[slider.currentIndex].classList.add('active')
              sliderBar[0].classList.remove('active')
          }



    }

}