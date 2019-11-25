//Botão do menu

$(document).ready(function(){
    $('.menu-principal__btn').click(function(){
        $('.menu-principal').toggleClass('menu-principal--fechado');
    });
    
    //Slide depoimentos
    $('.depoimentos__caixa').slick({
        autoplay: true,
        arrows: false,
        dots: true
    });

    //validação do formulário de contato
    $('.formulario').validate({
        rules: {
            nome: 'required',
            email: {
                required: true,
                email: true
            },
            mensagem: 'required'
        },
        messages: {
            nome: 'O nome não pode estar vaizo.',
            email: {
                required: 'Por favor preencha o e-mail.',
                email: 'Por favor informe um e-mail válido.'
            },
            mensagem: 'Mensagem não pode estar vazia.'
        }
    });
});

