let app={
    init : function (){
        console.log('app:init');
        nav.init();
        slider.init();
    }
}

document.addEventListener('DOMContentLoaded',app.init);

