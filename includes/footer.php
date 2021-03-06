<!-- Footer -->
<div class="section" id="footer">
        <div class="background-parallax"
            style="background-image: url(img/parallax-dark-3.jpg); background-position: center -3px;"
            data-enllax-ratio=".5" data-enllax-type="background" data-enllax-direction="vertical"></div>

        <div class="container padding-bottom-big" style="padding-top: 40px; padding-bottom: 40px">
            <div class="row">
                <div class="col-md-4">
                    <img src="img/logotipo.png" class="logotipo">
                </div>
                <div class="col-md-5 mt-4">
                    <ul class="footer-list">

                        <?php if ($delay == true ) {
                            for ($i = 1;$i <= count($nav);$i++)
                            {
                                if ($nav[$i]['visivel'] == true)
                                {
                            ?>
                                <li class="text-left delay">
                                    <a href="<?php print_r($nav[$i]['url']); ?>">
                                        <?php print_r($nav[$i]['label']); ?>
                                    </a>
                                 </li>
                            <?php
                                };
                            };
                            ?>
                                 <?php if ($nav_ComprarAgora == true)
                            {
                            ?>
                                <li class="text-left delay"><a href="#oferta" class="color-pr">Comprar agora</a></li>
                        <?php } } else { 
                            
                            for ($i = 1;$i <= count($nav);$i++)
                            {
                                if ($nav[$i]['visivel'] == true)
                                {
                            ?>
                                <li class="text-left">
                                    <a href="<?php print_r($nav[$i]['url']); ?>">
                                        <?php print_r($nav[$i]['label']); ?>
                                    </a>
                                 </li>
                            <?php
                                };
                            };
                            ?>
                                 <?php if ($nav_ComprarAgora == true)
                            {
                            ?>
                                <li class="text-left "><a href="#oferta" class="color-pr">Comprar agora</a></li>
                            <?php }}?>
                        
                        

                    </ul>
                </div>
                <div class="col-md-3 mt-4 selos">
                    Site 100% Seguro
                    <div>
                        <table>
                            <tr>
                                <td>
                                    <img src="img/selo1.jpg">
                                </td>
                                <td>
                                    <img src="img/selo2.jpg">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/selo3.jpg">
                                </td>
                                <td>
                                    <img src="img/selo4.jpg">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="section py-4 background-dark-blue-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer text-center text-lg-left">
                        <p>Copyright ?? 2020, <a href="#">Focus Alfa</a>.<br>
                            <p class="last-att">
                                <a title="Pol??ticas de Privacidade" data-toggle="modal" data-target="#modalPoliticas">Pol??ticas de Privacidade</a> |
                                <a title="Termos de Uso" data-toggle="modal" data-target="#modalTermos">Termos de Uso</a>
                            </p>
                    </div>
                    <div class="col-md-8">
                        <p style="font-size:10px">
                            <b>Este site n??o ?? afiliado ao Facebook ou a qualquer entidade do Facebook.</b> Depois que voc?? sair do Facebook, a responsabilidade n??o ?? deles e sim do nosso site. Fazemos todos os esfor??os para indicar claramente e mostrar todas as provas do produto e usamos resultados reais. N??s n??o vendemos o seu e-mail ou qualquer informa????o para terceiros. Jamais fazemos nenhum tipo de spam. Se voc?? tiver alguma d??vida, sinta-se ?? vontade para usar o link de contato e falar conosco em hor??rio comercial de Segunda a Sextas das 09h00 ??s 18h00. Lemos e respondemos todas as mensagens por ordem de chegada.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
include "lib/js-footer.php";
?>

    <!-- Modal Pol??ticas de Privacidade -->
    <div class="modal fade" id="modalPoliticas" tabindex="-1" role="dialog" aria-labelledby="modalPoliticas" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pol??ticas de Privacidade</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                            <div class="container">
                            <div class="row justiy-content-center">

                <div class="col-12">
                    <h3>Seu perfil pessoal</h3>
                </div>
                <div class="col">
                    <p>???Quando pedimos informa????es sobre voc??, o nosso principal interesse
                        ?? oferecer servi??os mais personalizados. N??s respeitamos a sua
                        privacidade e n??o a vendemos, nem alugamos, tampouco
                        compartilhamos seu nome e informa????es pessoais com outras
                        organiza????es.</p>
                    <p>???Ao fornecer suas informa????es pessoais e foto, voc?? compreende e
                        consente ?? equipe deste site o uso da sua imagem, foto, v??deo e
                        coment??rios. Essas informa????es est??o dispon??veis em seu perfil
                        p??blico e em nossa comunidade, onde voc?? tamb??m ver?? as dos
                        outros membros. Voc?? tem a op????o de negar o uso das suas
                        informa????es ao atualizar suas escolhas em ???Privacidade??? ???
                        ???Configura????es de Conta???. De tempos em tempos, n??s poderemos
                        usar algumas informa????es de clientes em nossos materiais de
                        marketing. Todavia, nunca faremos isso sem antes entrar em contato
                        com voc?? e receber um consentimento por escrito.</p>
                </div>

                <div class="col-12">
                    <h3>Medidas de seguran??a</h3>
                </div>
                <div class="col">
                    <p>???A seguran??a de seus dados pessoais ?? importante para n??s.
                        Seguimos os padr??es aceitos no ramo para proteger as suas
                        informa????es pessoais que nos s??o enviadas tanto durante a
                        transmiss??o de dados quanto ap??s o recebimento deles. Quando voc??
                        digita informa????es sigilosas (como seu cart??o de cr??dito) em nossos
                        formul??rios, elas s??o criptografadas para a transmiss??o, usando a
                        tecnologia SSL (camada de sockets protegida).</p>
                    <p>Se voc?? descobrir uma cobran??a fraudulenta em sua fatura, feita em
                        nome da equipe deste site, por favor, contate-nos e reporte o caso
                        imediatamente para a administradora do cart??o de acordo com os
                        procedimentos padr??es deles. O site faz uso de f??runs, murais e salas
                        de bate-papo. Por favor, lembre-se de que qualquer informa????o que
                        voc?? expuser por esses meios se torna p??blica. Sempre tenha cautela
                        com as informa????es pessoais que voc?? fornece a qualquer pessoa
                        nesses contextos.</p>
                    <p>???Tamb??m insistimos na verifica????o da senha ao fazer login, para que
                        voc?? e seus dados estejam protegidos contra acessos sem
                        autoriza????o. Se voc?? parar de usar o computador por muito tempo
                        sem encerrar a sua sess??o na escola, ela ser?? encerrada
                        automaticamente ap??s certo tempo.</p>
                    <p>???Apenas funcion??rios que precisem da informa????o para realizar certas
                        tarefas (como cobran??a ou atendimento ao aluno, por exemplo) t??m
                        acesso a informa????es pessoais. Os servidores nos quais
                        armazenamos suas informa????es s??o mantidos em ambiente seguro.</p>
                    <p>???Apesar das pr??ticas e procedimentos de seguran??a, como acontece
                        com toda e qualquer rede de computadores na internet, a equipe
                        deste site n??o pode garantir a seguran??a de seus dados pessoais ou
                        de quaisquer outros dados passados pela internet e, portanto, n??o
                        poder?? ser responsabilizada por falhas de seguran??a.</p>
                    <p>???Nenhum m??todo de transmiss??o de dados ou armazenamento
                        eletr??nico na internet ?? 100% seguro. Deste modo, n??o podemos
                        garantir a seguran??a total de seus dados.</p>
                </div>

                <div class="col-12">
                    <h3>Comunicados do site</h3>
                </div>
                <div class="col">
                    <p>???Para enviar a voc?? as li????es di??rias (E-mail), precisamos de seu
                        endere??o de e-mail. Como assinante delas, voc?? ser?? adicionado em nossa lista para envio de e-mails eventuais com atualiza????es de
                        servi??os, ofertas especiais e promo????es deste site.</p>
                    <p>???Voc?? pode cancelar a sua inscri????o ao receber os e-mails a qualquer
                        momento. Basta clicar no link ???Remover e-mail da lista??? que aparece
                        no rodap?? do e-mail que enviamos. Enviaremos an??ncios relacionados
                        a servi??os raramente, apenas quando for necess??rio.</p>
                    <p>Por exemplo, se o nosso servi??o for temporariamente suspenso para
                        manuten????o, ?? poss??vel que enviemos um e-mail para avis??-lo. Em
                        geral, n??o ?? poss??vel optar por n??o receber este ??ltimo tipo de
                        comunica????o por n??o serem e-mails promocionais. Se voc?? n??o quer
                        receber os e-mails de aviso, voc?? pode solicitar o descadastramento.???</p>
                    <p>Prote????o de informa????o de menores Estamos comprometidos a
                        proteger a privacidade dos menores. Esse e todos nossos sites s??o
                        voltados ao p??blico em geral e n??o s??o feitos para atrair crian??as com
                        menos de 13 anos.???</p>
                    <p>???N??o coletamos, nem solicitamos informa????es pessoais de menores de
                        13 anos, tampouco enviamos e-mails solicitando dados pessoais, a
                        menos que tenhamos a permiss??o dos pais ou guardi??es legais da
                        crian??a. Inscri????o e cadastro para assinatura deste site oferece cursos
                        e produtos voltados para a ??rea de sa??de e bem estar.</p>
                    <p>???Para fazer um desses cursos, aproveitar o per??odo gr??tis ou tornar-se
                        usu??rio de nossa comunidade, voc?? precisa se tornar membro deste
                        site. Durante a inscri????o, coletamos informa????es como seu nome e e-
                        mail.</p>
                    <p>???Tamb??m pedimos dados demogr??ficos, como idade e sexo, para
                        criarmos seu perfil. Voc?? tamb??m pode ter de fornecer seu cart??o de     cr??dito, caso o servi??o que pediu seja pago. Essa informa????o ??
                        criptografada em nosso servidor seguro.</p>
                    <p>Como membro, voc?? ser?? adicionado ?? nossa base para receber e-
                        mails eventuais com informa????es de servi??os, ofertas especiais e
                        promo????es do Focus Alfa.???</p>
                </div>

                <div class="col-12">
                    <h3>Web Beacons</h3>
                </div>
                <div class="col">
                    <p>???Usamos uma tecnologia chamada clear gifs (tamb??m conhecida como
                        web beacons ou web bugs), que ajuda a gerenciar melhor o conte??do
                        do site, informando qual funciona melhor. Os clear gifs s??o pequenos
                        gr??ficos com um identificador ??nico e t??m fun????o similar aos cookies ???
                        s??o usados para rastrear os movimentos online de usu??rios da
                        internet. Por??m, ao contr??rio dos cookies, que ficam no computador do
                        usu??rio, os clear gifs s??o incorporados na pr??pria p??gina e s??o do
                        tamanho de um ponto. N??o utilizamos os clear gifs que cont??m
                        informa????es pessoais de nossos clientes. Usamos clear gifs em
                        nossos e-mails com formato HTML para sabermos quais s??o abertos
                        pelos destinat??rios. Assim, podemos medir a efic??cia de certas
                        comunica????es e de nossas campanhas. Em alguns e-mails,
                        colocamos conte??do com links para clicar e ser redirecionado para o
                        site do Chave do Cora????o do Homem. Quando os usu??rios e/ou clientes
                        clicam em um desses links, passam por um servidor ?? parte antes de
                        chegar ?? p??gina de destino. Rastreamos os dados de cliques para
                        determinar o interesse por cada assunto e medirmos a efici??ncia de
                        nossas comunica????es com o aluno. Caso prefira n??o ser rastreado
                        assim, n??o clique em links de texto ou imagens em seus e-mails.</p>
                </div>

                <div class="col-12">
                    <h3>Com quem compartilhamos suas informa????es</h3>
                </div>
                <div class="col">
                    <p>???Compartilhamos seus dados pessoais com Focus Alfa , para que as
                        outras empresas do grupo possam oferecer produtos e servi??os a
                        voc??. Como As ??nicas informa????es que compartilhamos com a Focus
                        Alfa s??o seu nome, faixa et??ria, e-mail e pa??s. Se n??o quiser que elas sejam compartilhadas, entre em contato com nosso atendimento pelo
                        e-mail contato@focusalfa.com</p>
                    <p>Podemos fornecer seus dados a empresas que prestem servi??os e
                        que nos ajudem em nossas atividades, como o processamento de
                        pagamentos ou a oferta de atendimento. Essas empresas est??o
                        autorizadas a usar seus dados apenas se necess??rio para presta????o
                        de servi??os a n??s. Tamb??m podemos passar seus dados:???</p>
                    <p>- Conforme exigido por lei para atender a intima????es ou processos
                        legais similares;???</p>
                    <p>???- Quando acreditarmos, de boa f??, que a quebra de sigilo ?? necess??ria
                        para protegermos nossos direitos, proteger sua seguran??a ou a
                        seguran??a de outros, investigar fraudes ou atender a um pedido do
                        governo;</p>
                    <p>???- Caso o Focus Alfa se envolva numa fus??o, aquisi????o,
                        ou seja vendida em termos ou ao todo, voc?? ser?? notificado por e-mail,
                        ou por um aviso bem claro em nosso site, de qualquer mudan??a nesse
                        sentido, ou no uso de suas informa????es pessoais, bem como de
                        qualquer nova situa????o que envolva os seus dados pessoais sendo
                        divulgados a terceiros, a fim de que isso nunca seja feito sem
                        consentimento.</p>
                </div>

                <div class="col-12">
                    <h3>Cookies</h3>
                </div>
                <div class="col">
                    <p>?????????Cookies??? s??o pequenas informa????es que gravamos no browser que
                        voc?? utiliza para navegar ou no hard drive. N??s e nossos parceiros
                        usamos os cookies para nos lembrarmos de informa????es pessoais
                        quando voc?? visita nosso site. Por exemplo, caso opte por visualizar
                        nosso site em franc??s, armazenaremos essa informa????o nos cookies
                        para que mostremos o site sempre em franc??s para voc??. Tamb??m
                        usamos os cookies para gravar seu login, a fim de facilitar seu acesso
                        ao site. A maioria dos browsers permite que voc?? opte por n??o permitir que cookies sejam armazenados em seu computador. Usamos
                        cookies para a sess??o e cookies persistentes. O cookie de sess??o
                        expira assim que voc?? fecha o browser. O cookie persistente continua
                        em seu computador por um per??odo maior. Al??m disso, usamos um
                        prestador de servi??os para rastrear o comportamento de visitantes em
                        nosso site. Contudo, n??o temos acesso a seus cookies, tampouco os
                        controlamos. As informa????es coletadas pela empresa prestadora de
                        servi??os s??o an??nimas e usadas para melhorar nossos servi??os e
                        campanhas de marketing. Como acontece na maioria dos sites,
                        recolhemos informa????es automaticamente e as salvamos em
                        arquivos. Nessas informa????es, est??o inclusos o endere??o de IP, tipo
                        de browser e idioma, provedor de servi??o, p??ginas de refer??ncia,
                        sistema operacional, data/hora e informa????es de cliques no site.
                        Usamos essas informa????es para entender e analisar tend??ncias,
                        administrar o site, aprender sobre o comportamento dos usu??rios e
                        reunir informa????es demogr??ficas sobre nossa base de usu??rios como
                        um todo.</p>
                </div>

                <div class="col-12">
                    <h3>Quizzes and Contests</h3>
                </div>
                <div class="col">
                    <p>???Podemos dar a oportunidade aos clientes e visitantes de participarem
                        de quizzes (testes) ou concursos em nosso site. Caso voc?? participe,
                        pediremos informa????es e dados pessoais. A participa????o em quizzes
                        e concursos ?? completamente volunt??ria e, portanto, voc?? tem a op????o
                        de n??o fornecer suas informa????es. As informa????es pedidas costumam
                        incluir informa????es de contato (como nome e e-mail) e dados
                        demogr??ficos (como CEP). Usamos essas informa????es para
                        personalizar os comunicados enviados a voc?? e sugerir produtos e
                        servi??os mais relevantes.</p>
                </div>

                <div class="col-12">
                    <h3>F??runs p??blicos</h3>
                </div>
                <div class="col">
                    <p>???Nossos sites oferecem blogs, f??runs e comunidades acess??veis ao
                        p??blico em geral. Esteja ciente de que qualquer dado fornecido por
                        voc?? nessas ??reas do site pode ser lido, coletado e usado por outros
                        que as acessem. Para pedir que uma informa????o pessoal seja retirada
                        de um blog, f??rum ou comunidade, entre em contato com a escola
                        atrav??s do email contato@focusalfa.com Em alguns casos, talvez n??o
                        seja poss??vel remover a informa????o. Se for o caso, n??s avisaremos
                        voc?? e explicaremos o motivo.</p>
                </div>

                <div class="col-12">
                    <h3>Links para outros websites</h3>
                </div>
                <div class="col">
                    <p>??????Este site cont??m links para outros sites. Por favor, esteja ciente de que
                        Focus Alfa n??o ?? respons??vel pelos sistemas de privacidade de outros
                        sites. N??s incentivamos nossos usu??rios a serem cautelosos ao
                        sa??rem do nosso site e recomendamos que leiam os termos de uso de
                        qualquer website que colete informa????o pessoal identific??vel. Estas
                        pol??ticas de privacidade se aplicam apenas para informa????es
                        recebidas pelo website do Focus Alfa.</p>
                </div>


                        </div></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
            </div>
            </div>
        </div>
    </div>

        <!-- Modal Termos de Uso -->
        <div class="modal fade" id="modalTermos" tabindex="-1" role="dialog" aria-labelledby="modalTermos" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Termos de Uso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row justiy-content-center">
                        <div class="col">
                            <p>
                            A equipe do Focus Alfa site criou essa Termo de uso a fim de
                            demonstrar o nosso firme comprometimento sobre como voc?? pode
                            utilizar todas as informa????es deste Site.
                            </p>
                        </div>
                    </div>
                    <div class="row justiy-content-center">
                        
                        <div class="col-12">
                            <h3>Termos de Uso</h3>
                        </div>
                            <div class="col">
                            <p>
                            Este site trata-se de um servi??o interativo oferecido em por meio de
                        p??gina eletr??nica na internet que oferece informa????es sobre sa??de e
                        alimenta????o a partir da integra????o de diversas fontes de informa????es
                        confi??veis e que est??o alinhadas a opini??o pessoal do autor.
                            </p>
                            <p>
                            O acesso a este site representa a aceita????o expressa e irrestrita dos
                        termos de uso abaixo descritos. Se voc?? n??o concorda com os termos,
                        por favor, n??o acesse nem utilize este website.
                            </p>
                            <p>O visitante poder?? usar este site apenas para finalidades l??citas. Este
                                espa??o n??o poder?? ser utilizado para para publicar, enviar, distribuir
                                ou divulgar conte??dos ou informa????o de car??ter difamat??rio, obsceno
                                ou il??cito, inclusive informa????es de propriedade exclusiva pertencentes
                                a outras pessoas ou empresas, bem como marcas registradas ou
                                informa????es protegidas por direitos autorais, sem a expressa
                                autoriza????o do detentor desses direitos. Ainda, o visitante n??o poder??
                                usar este site para obter ou divulgar informa????es pessoais, inclusive
                                endere??os na Internet, sobre os usu??rios do site.</p>
                            <p>A equipe deste site empenha-se em manter a qualidade, atualidade e
                                autenticidade das informa????es do site, mas seus criadores e
                                colaboradores n??o se responsabilizam por eventuais falhas nos
                                servi??os ou inexatid??o das informa????es oferecidas.</p>
                            <p>O usu??rio n??o deve ter como pressuposto que tais servi??os e
                                informa????es s??o isentos de erros ou ser??o adequados aos seus
                                objetivos particulares. Os criadores e colaboradores tampouco
                                assumem o compromisso de atualizar as informa????es, e reservam-se
                                o direito de alterar as condi????es de uso ou pre??os dos servi??os e
                                produtos oferecidos no site a qualquer momento.</p>
                            <p>O acesso a este site ?? gratuito. Este site poder?? criar ??reas de acesso
                                exclusivo aos seus clientes ou para terceiros especialmente
                                autorizados.</p>
                            <p>Os criadores e colaboradores deste site poder??o a seu exclusivo
                                crit??rio e em qualquer tempo, modificar ou desativar o site, bem como
                                limitar, cancelar ou suspender seu uso ou o acesso. Tamb??m estes
                                Termos de Uso poder??o ser alterados a qualquer tempo. Visite
                                regularmente esta p??gina e consulte os Termos ent??o vigentes.
                                Algumas disposi????es destes Termos podem ser substitu??das por
                                termos ou avisos legais expressos localizados em determinadas
                                p??ginas deste site.</p>
                        </div>
                         
                        <div class="col-12">
                            <h3>Informa????es enviadas pelos usu??rios e colaboradores</h3>
                        </div>
                            <div class="col">
                            <p>Qualquer material, informa????o, artigos ou outras comunica????es que
                                forem transmitidas, enviadas ou publicadas neste site ser??o
                                considerados informa????o n??o confidencial, e qualquer viola????o aos
                                direitos dos seus criadores n??o ser?? de responsabilidade da equipe
                                deste site. ?? terminantemente proibido transmitir, trocar ou publicar,
                                atrav??s deste website, qualquer material de cunho obsceno,
                                difamat??rio ou ilegal, bem como textos ou cria????es de terceiros sem a
                                autoriza????o do autor. A equipe deste site reserva-se o direito de
                                restringir o acesso ??s informa????es enviadas por terceiros aos seus
                                usu??rios.</p>
                            <p>Este site poder??, mas n??o ?? obrigado, a monitorar, revistar e restringir
                                o acesso a qualquer ??rea no site onde usu??rios transmitem e trocam
                                informa????es entre si, incluindo, mas n??o limitado a, salas de chat,
                                centro de mensagens ou outros f??runs de debates, podendo retirar do
                                ar ou retirar o acesso a qualquer destas informa????es ou
                                comunica????es. Por??m, a equipe deste site n??o ?? respons??vel pelo
                                conte??do de qualquer uma das informa????es trocadas entre os
                                usu??rios, sejam elas l??citas ou il??citas.</p>
                        </div>
                        <div class="col-12">
                            <h3>Limita????o da Responsabilidade</h3>
                        </div>
                            <div class="col">
                            <p>???Os materiais s??o fornecidos neste website sem nenhuma garantia
                                expl??cita ou impl??cita de comercializa????o ou adequa????o a qualquer
                                objetivo espec??fico. Em nenhum caso este site ou os seus
                                colaboradores ser??o responsabilizados por quaisquer danos, incluindo
                                lucros cessantes, interrup????o de neg??cio, ou perda de informa????o que
                                resultem do uso ou da incapacidade de usar os materiais. A equipe
                                deste site n??o garante a precis??o ou integridade das informa????es,
                                textos, gr??ficos, links e outros itens dos materiais.</p>
                            <p>A equipe deste site n??o ?? respons??vel pela viola????o de direitos
                                autorais decorrente de informa????es, documentos e materiais
                                publicados neste website, comprometendo-se a retir??-los do ar assim
                                que notificado da infra????o.</p>
                        </div>

                        <div class="col-12">
                            <h3>???Erros e falhas</h3>
                        </div>
                            <div class="col">
                            <p>???Os documentos, informa????es, imagens e gr??ficos publicados neste
                                site podem conter imprecis??es t??cnicas ou erros tipogr??ficos. Em
                                nenhuma hip??tese a equipe deste site e/ou seus respectivos
                                fornecedores ser??o respons??veis por qualquer dano direto ou indireto
                                decorrente da impossibilidade de uso, perda de dados ou lucros,
                                resultante do acesso e desempenho do site, dos servi??os oferecidos
                                ou de informa????es dispon??veis neste site. O acesso aos servi??os,
                                materiais, informa????es e facilidades contidas neste website n??o
                                garante a sua qualidade.</p>
                        </div>


                        <div class="col-12">
                            <h3>Links para sites de terceiros</h3>
                        </div>
                            <div class="col">
                            <p>???Os sites apontados n??o est??o sob o controle deste site que n??o ??
                                respons??vel pelo conte??do de qualquer outro website indicado ou
                                acessado por meio deste site reserva-se o direito de eliminar qualquer
                                link ou direcionamento a outros sites ou servi??os a qualquer momento.
                                Este site n??o endossa firmas ou produtos indicados, acessados ou
                                divulgados atrav??s deste website, tampouco pelos an??ncios aqui
                                publicados, reservando-se o direito de publicar este alerta em suas
                                p??ginas eletr??nicas sempre que considerar necess??rio.</p>
                        </div>


                        <div class="col-12">
                            <h3>Direitos autorais e propriedade intelectual</h3>
                        </div>
                            <div class="col">
                            <p>???Os documentos, conte??dos e cria????es contidos neste website
                                pertencem aos seus criadores e colaboradores. A autoria dos
                                conte??do, material e imagens exibidos no diabetescontrolada.com.br ??
                                protegida por leis nacionais e internacionais. N??o podem ser copiados,
                                reproduzidos, modificados, publicados, atualizados, postados,
                                transmitidos ou distribu??dos de qualquer maneira sem autoriza????o
                                pr??via e por escrito do propriet??rios desse site.</p>
                            <p>???As imagens contidas neste website s??o aqui incorporadas apenas
                                para fins de visualiza????o, e, salvo autoriza????o expressa por escrito,
                                n??o podem ser gravadas ou baixadas via download. A reprodu????o ou
                                armazenamento de materiais recuperados a partir deste servi??o
                                sujeitar?? os infratores ??s penas da lei.</p>
                            <p>O nome deste site, seu logotipo, o nome de dom??nio para acesso na
                                Internet, bem como todos os elementos caracter??sticos da tecnologia
                                desenvolvida e aqui apresentada, sob a forma da articula????o de bases
                                de dados, constituem marcas registradas e propriedades intelectuais
                                privadas e todos os direitos decorrentes de seu registro s??o
                                assegurados por lei. Alguns direitos de uso podem ser cedidos pelo
                                propriet??rios do site, em contrato ou licen??a especial, que pode ser
                                cancelada a qualquer momento se n??o cumpridos os seus termos.???</p>
                            <p>???As marcas registradas deste site s?? podem ser usadas publicamente
                                com autoriza????o expressa. O uso destas marcas registradas em
                                publicidade e promo????o de produtos deve ser adequadamente
                                informado.</p>
                        </div>


                        <div class="col-12">
                            <h3>Reclama????es sobre viola????o de direitos autorais</h3>
                        </div>
                            <div class="col">
                            <p>???A equipe deste site respeita a propriedade intelectual de outras
                                pessoas ou empresas e solicitamos aos nossos membros que fa??am o
                                mesmo. Toda e qualquer viola????o de direitos autorais dever?? ser
                                notificada ao contato@focusalfa.com e acompanhada dos documentos
                                e informa????es que confirmam a autoria.</p>
                        </div>


                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
            </div>
            </div>
        </div>
    </div>

    <script>
        if (jQuery(window).width() <= 480) {

            $(".show-mobile").show();
            
            <?php if ($edipoPage == false) {
                ?> 
                    var fstudent = document.getElementById("for-student");
                    fstudent.classList.add("offset-3");
                <?php
            } ?>
            
        } else { 
         
            $(".show-desktop").show();
        }
    </script>

    <script>
        /* Elementos com Delay */
        <?php if ($delay == true) { ?>
          setTimeout(function(){
            $(".delay").show();
          }, <?php echo $delay_time ?> * 1000);
        <?php } else { ?>
            $(".delay").show();    
        <?php } ?>
    </script>

</body>
</html>
