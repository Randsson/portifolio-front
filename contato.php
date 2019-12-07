<?php include('partes/cabecalho.php') ?>
        <header class="container pagina-cabecalho">
            <h1 class="pagina-cabecalho__titulo">Contato:</h1>
        </header>
        <section class="container pagina-conteudo">
            <p class="text-center"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis consequatur, nobis
                tempora voluptate similique in. Corporis error rem ex dolor vitae quo, nihil.</p>
            <form action="#" class="formulario">
                <div class="formulario__grupo formulario__grupo--coluna-esq">
                    <label class="formulario__label" for="nome">Nome</label><br>
                    <input class="formulario__campo" type="text" name="nome" id="nome"><br>
                </div>
                <div class="formulario__grupo formulario__grupo--coluna-dir">
                    <label class="formulario__label" for="email">E-mail</label><br>
                    <input class="formulario__campo" type="email" name="email" id="email"><br>
                </div>
                <div class="formulario__grupo">
                    <label class="formulario__label" for="mensagem">Mensagem</label><br>
                    <textarea class="formulario__campo" name="mensagem" id="mensagem" cols="30"
                        rows="10"></textarea><br>
                </div>
                <input class="formulario__botao" type="submit" value="Enviar" id="enviar">
            </form>
            <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi, molestiae in. Quasi
                et fugiat rem laboriosam <br>
                ratione suscipit voluptates officia cumque similique aut quaerat velit, quisquam blanditiis qui ab
                veniam!</p>
        </section>
        <div class="mapa">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d491.66335761664374!2d-35.72222083484841!3d-9.654799901098256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7014599a8e47db3%3A0xf8bf21c72ff2fc11!2sPra%C3%A7a%20Cipriano%20Juc%C3%A1%20-%20Mangabeiras%2C%20Macei%C3%B3%20-%20AL%2C%2057031-350!5e0!3m2!1spt-BR!2sbr!4v1571155411536!5m2!1spt-BR!2sbr"
                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
<?php include('partes/rodape.php') ?>