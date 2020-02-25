


window.addEventListener('DOMContentLoaded', () => {

    let backFooter = document.getElementById('backFooter');
    let html = document.getElementsByTagName('html');
    
    if (backFooter == "undefined" || backFooter !== null) {        
        for (let index = 0; index < html.length; index++) {
            const element = html[index];
            let top = element.offsetHeight - backFooter.offsetHeight/1.9;
            backFooter.style.top = top+"px";
        }
    }


    
    let heightWindow = window.innerHeight;
    let widthWindow = window.innerWidth;
    let calc = 3 * 45 + heightWindow - 3 * 15 / 100;
    
    
    
    
    let contentPage = document.getElementById('test');
    let contentArt = document.getElementById('content-page');
            if (typeof contentPage !== "undefined" || contentPage !== null) {
    
    contentPage.style.height = calc+"px";
    
    let scroll = window.scrollY;
    let valScroll = 400;
    let nbScroll = 0;
    let posBack = 1000;
    
    let stop = document.getElementById('stop');
    let initCalc = 3 * 45 + heightWindow - 3 * 15 / 100;
    let stopTop = stop.offsetTop;
    
    
    window.addEventListener('scroll', function(e) {
        derniere_position_de_scroll_connue = window.scrollY;   
        detecteur = derniere_position_de_scroll_connue + valScroll;
        if (detecteur >= stop.offsetTop) {

        }
        else{


                
                 if (derniere_position_de_scroll_connue >= valScroll) {
                     
                     valScroll += 400;
                     calc += 400;
                     
                     let ligne1 = document.createElement('div');
                     ligne1.className = "waveWrapper waveAnimation";
                 
                     let ligne2 = document.createElement('div');
                     ligne2.className = "waveWrapperInner bgTop";
                 
                     let ligne3 = document.createElement('div');
                     ligne3.className = "wave waveTop";
                     ligne3.style.backgroundImage = "url('http://front-end-noobs.com/jecko/img/wave-top.png'";
                 
                     let ligne4 = document.createElement("div");
                     ligne4.className = "waveWrapperInner bgMiddle";
                 
                     let ligne5 = document.createElement('div');
                     ligne5.className = "wave waveMiddle";
                     ligne5.style.backgroundImage = "url('http://front-end-noobs.com/jecko/img/wave-mid.png')"
                 
                     let ligne6 = document.createElement("div");
                     ligne6.className = "waveWrapperInner bgBottom";
                 
                     
                     let ligne7 = document.createElement('div');
                     ligne7.className = "wave waveBottom";
                     ligne7.style.backgroundImage = "url('http://front-end-noobs.com/jecko/img/wave-bot.png')";
                 
                     ligne2.append(ligne3);
                     ligne4.append(ligne5);
                     ligne6.append(ligne7);
                     
                     ligne1.append(ligne2);
                     ligne1.append(ligne4);
                     ligne1.append(ligne6);
         
                     contentPage.style.height = calc+"px";
                     
                     if (nbScroll == 0) {
                         
                         ligne1.style.top = posBack+"px";
                         ligne1.style.height = "757px";
                         ligne1.style.zIndex = "10";
                         ligne1.style.margin = "0";
                         ligne1.classList.add('invert');
                         
                         contentArt.append(ligne1);
                         
                         posBack += 700;
                         nbScroll = 1;
                     }
                     else{
                         ligne1.style.top = posBack+"px";
                         ligne1.style.height = "757px";
                         ligne1.style.margin = "0";
                         
                         contentArt.append(ligne1);
                         nbScroll = 0;
                         posBack += 1000;
                     }
                 }
                 else{

             }
        }
    });
}

});