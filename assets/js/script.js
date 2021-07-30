$(function(){

    $('.navegador[href^="#"]').on('click', function(e) {
        e.preventDefault();
        var id = $(this).attr('href'),
                targetOffset = $(id).offset().top;
                
        $('html, body').animate({ 
            scrollTop: targetOffset - 100
        }, 500);
    });

    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 500) {
            document.querySelector('.botao-topo').style.width = '40px';
        } else {
            document.querySelector('.botao-topo').style.width = '';
        }
    });

    document.querySelector('.botao-topo').addEventListener('click',()=>{
        jQuery('body,html').animate({
            scrollTop: 0
          }, 800);
         return false;
    });

    // document.querySelector('.menu-mobile').addEventListener('click',()=>{
    //     if (document.querySelector('.main-nav').style.display == 'flex') {
    //         document.querySelector('.main-nav').style.display = 'none';
    //     } else {
    //         document.querySelector('.main-nav').style.display = 'flex';
    //     }
    // });

});

// window.onload = ()=>{
//     console.log("it works");
// };

// document.querySelector('.aceitar').addEventListener('click',()=>{
//     document.querySelector('.section-politica').style.display = 'none';
// });
