//Botão do menu
$('.menu-principal__btn').click(function(){
    $('.menu-principal').toggleClass('menu-principal--fechado');
});

//Slide depoimentos
$('.depoimentos__caixa').slick({
    autoplay: true,
    arrows: false,
    dots: true
});