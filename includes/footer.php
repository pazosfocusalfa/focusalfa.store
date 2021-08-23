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
                        <p>Copyright © 2020, <a href="#">Focus Alfa</a>.<br>
                            <p class="last-att">
                                <a title="Políticas de Privacidade" data-toggle="modal" data-target="#modalPoliticas">Políticas de Privacidade</a> |
                                <a title="Termos de Uso" data-toggle="modal" data-target="#modalTermos">Termos de Uso</a>
                            </p>
                    </div>
                    <div class="col-md-8">
                        <p style="font-size:10px">
                            <b>Este site não é afiliado ao Facebook ou a qualquer entidade do Facebook.</b> Depois que você sair do Facebook, a responsabilidade não é deles e sim do nosso site. Fazemos todos os esforços para indicar claramente e mostrar todas as provas do produto e usamos resultados reais. Nós não vendemos o seu e-mail ou qualquer informação para terceiros. Jamais fazemos nenhum tipo de spam. Se você tiver alguma dúvida, sinta-se à vontade para usar o link de contato e falar conosco em horário comercial de Segunda a Sextas das 09h00 ás 18h00. Lemos e respondemos todas as mensagens por ordem de chegada.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
include "lib/js-footer.php";
?>

    <!-- Modal Políticas de Privacidade -->
    <div class="modal fade" id="modalPoliticas" tabindex="-1" role="dialog" aria-labelledby="modalPoliticas" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Políticas de Privacidade</h5>
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
                    <p>​Quando pedimos informações sobre você, o nosso principal interesse
                        é oferecer serviços mais personalizados. Nós respeitamos a sua
                        privacidade e não a vendemos, nem alugamos, tampouco
                        compartilhamos seu nome e informações pessoais com outras
                        organizações.</p>
                    <p>​Ao fornecer suas informações pessoais e foto, você compreende e
                        consente à equipe deste site o uso da sua imagem, foto, vídeo e
                        comentários. Essas informações estão disponíveis em seu perfil
                        público e em nossa comunidade, onde você também verá as dos
                        outros membros. Você tem a opção de negar o uso das suas
                        informações ao atualizar suas escolhas em “Privacidade” –
                        “Configurações de Conta”. De tempos em tempos, nós poderemos
                        usar algumas informações de clientes em nossos materiais de
                        marketing. Todavia, nunca faremos isso sem antes entrar em contato
                        com você e receber um consentimento por escrito.</p>
                </div>

                <div class="col-12">
                    <h3>Medidas de segurança</h3>
                </div>
                <div class="col">
                    <p>​A segurança de seus dados pessoais é importante para nós.
                        Seguimos os padrões aceitos no ramo para proteger as suas
                        informações pessoais que nos são enviadas tanto durante a
                        transmissão de dados quanto após o recebimento deles. Quando você
                        digita informações sigilosas (como seu cartão de crédito) em nossos
                        formulários, elas são criptografadas para a transmissão, usando a
                        tecnologia SSL (camada de sockets protegida).</p>
                    <p>Se você descobrir uma cobrança fraudulenta em sua fatura, feita em
                        nome da equipe deste site, por favor, contate-nos e reporte o caso
                        imediatamente para a administradora do cartão de acordo com os
                        procedimentos padrões deles. O site faz uso de fóruns, murais e salas
                        de bate-papo. Por favor, lembre-se de que qualquer informação que
                        você expuser por esses meios se torna pública. Sempre tenha cautela
                        com as informações pessoais que você fornece a qualquer pessoa
                        nesses contextos.</p>
                    <p>​Também insistimos na verificação da senha ao fazer login, para que
                        você e seus dados estejam protegidos contra acessos sem
                        autorização. Se você parar de usar o computador por muito tempo
                        sem encerrar a sua sessão na escola, ela será encerrada
                        automaticamente após certo tempo.</p>
                    <p>​Apenas funcionários que precisem da informação para realizar certas
                        tarefas (como cobrança ou atendimento ao aluno, por exemplo) têm
                        acesso a informações pessoais. Os servidores nos quais
                        armazenamos suas informações são mantidos em ambiente seguro.</p>
                    <p>​Apesar das práticas e procedimentos de segurança, como acontece
                        com toda e qualquer rede de computadores na internet, a equipe
                        deste site não pode garantir a segurança de seus dados pessoais ou
                        de quaisquer outros dados passados pela internet e, portanto, não
                        poderá ser responsabilizada por falhas de segurança.</p>
                    <p>​Nenhum método de transmissão de dados ou armazenamento
                        eletrônico na internet é 100% seguro. Deste modo, não podemos
                        garantir a segurança total de seus dados.</p>
                </div>

                <div class="col-12">
                    <h3>Comunicados do site</h3>
                </div>
                <div class="col">
                    <p>​Para enviar a você as lições diárias (E-mail), precisamos de seu
                        endereço de e-mail. Como assinante delas, você será adicionado em nossa lista para envio de e-mails eventuais com atualizações de
                        serviços, ofertas especiais e promoções deste site.</p>
                    <p>​Você pode cancelar a sua inscrição ao receber os e-mails a qualquer
                        momento. Basta clicar no link “Remover e-mail da lista” que aparece
                        no rodapé do e-mail que enviamos. Enviaremos anúncios relacionados
                        a serviços raramente, apenas quando for necessário.</p>
                    <p>Por exemplo, se o nosso serviço for temporariamente suspenso para
                        manutenção, é possível que enviemos um e-mail para avisá-lo. Em
                        geral, não é possível optar por não receber este último tipo de
                        comunicação por não serem e-mails promocionais. Se você não quer
                        receber os e-mails de aviso, você pode solicitar o descadastramento.​</p>
                    <p>Proteção de informação de menores Estamos comprometidos a
                        proteger a privacidade dos menores. Esse e todos nossos sites são
                        voltados ao público em geral e não são feitos para atrair crianças com
                        menos de 13 anos.​</p>
                    <p>​Não coletamos, nem solicitamos informações pessoais de menores de
                        13 anos, tampouco enviamos e-mails solicitando dados pessoais, a
                        menos que tenhamos a permissão dos pais ou guardiões legais da
                        criança. Inscrição e cadastro para assinatura deste site oferece cursos
                        e produtos voltados para a área de saúde e bem estar.</p>
                    <p>​Para fazer um desses cursos, aproveitar o período grátis ou tornar-se
                        usuário de nossa comunidade, você precisa se tornar membro deste
                        site. Durante a inscrição, coletamos informações como seu nome e e-
                        mail.</p>
                    <p>​Também pedimos dados demográficos, como idade e sexo, para
                        criarmos seu perfil. Você também pode ter de fornecer seu cartão de     crédito, caso o serviço que pediu seja pago. Essa informação é
                        criptografada em nosso servidor seguro.</p>
                    <p>Como membro, você será adicionado à nossa base para receber e-
                        mails eventuais com informações de serviços, ofertas especiais e
                        promoções do Focus Alfa.​</p>
                </div>

                <div class="col-12">
                    <h3>Web Beacons</h3>
                </div>
                <div class="col">
                    <p>​Usamos uma tecnologia chamada clear gifs (também conhecida como
                        web beacons ou web bugs), que ajuda a gerenciar melhor o conteúdo
                        do site, informando qual funciona melhor. Os clear gifs são pequenos
                        gráficos com um identificador único e têm função similar aos cookies –
                        são usados para rastrear os movimentos online de usuários da
                        internet. Porém, ao contrário dos cookies, que ficam no computador do
                        usuário, os clear gifs são incorporados na própria página e são do
                        tamanho de um ponto. Não utilizamos os clear gifs que contêm
                        informações pessoais de nossos clientes. Usamos clear gifs em
                        nossos e-mails com formato HTML para sabermos quais são abertos
                        pelos destinatários. Assim, podemos medir a eficácia de certas
                        comunicações e de nossas campanhas. Em alguns e-mails,
                        colocamos conteúdo com links para clicar e ser redirecionado para o
                        site do Chave do Coração do Homem. Quando os usuários e/ou clientes
                        clicam em um desses links, passam por um servidor à parte antes de
                        chegar à página de destino. Rastreamos os dados de cliques para
                        determinar o interesse por cada assunto e medirmos a eficiência de
                        nossas comunicações com o aluno. Caso prefira não ser rastreado
                        assim, não clique em links de texto ou imagens em seus e-mails.</p>
                </div>

                <div class="col-12">
                    <h3>Com quem compartilhamos suas informações</h3>
                </div>
                <div class="col">
                    <p>​Compartilhamos seus dados pessoais com Focus Alfa , para que as
                        outras empresas do grupo possam oferecer produtos e serviços a
                        você. Como As únicas informações que compartilhamos com a Focus
                        Alfa são seu nome, faixa etária, e-mail e país. Se não quiser que elas sejam compartilhadas, entre em contato com nosso atendimento pelo
                        e-mail contato@focusalfa.com</p>
                    <p>Podemos fornecer seus dados a empresas que prestem serviços e
                        que nos ajudem em nossas atividades, como o processamento de
                        pagamentos ou a oferta de atendimento. Essas empresas estão
                        autorizadas a usar seus dados apenas se necessário para prestação
                        de serviços a nós. Também podemos passar seus dados:​</p>
                    <p>- Conforme exigido por lei para atender a intimações ou processos
                        legais similares;​</p>
                    <p>​- Quando acreditarmos, de boa fé, que a quebra de sigilo é necessária
                        para protegermos nossos direitos, proteger sua segurança ou a
                        segurança de outros, investigar fraudes ou atender a um pedido do
                        governo;</p>
                    <p>​- Caso o Focus Alfa se envolva numa fusão, aquisição,
                        ou seja vendida em termos ou ao todo, você será notificado por e-mail,
                        ou por um aviso bem claro em nosso site, de qualquer mudança nesse
                        sentido, ou no uso de suas informações pessoais, bem como de
                        qualquer nova situação que envolva os seus dados pessoais sendo
                        divulgados a terceiros, a fim de que isso nunca seja feito sem
                        consentimento.</p>
                </div>

                <div class="col-12">
                    <h3>Cookies</h3>
                </div>
                <div class="col">
                    <p>​​“Cookies” são pequenas informações que gravamos no browser que
                        você utiliza para navegar ou no hard drive. Nós e nossos parceiros
                        usamos os cookies para nos lembrarmos de informações pessoais
                        quando você visita nosso site. Por exemplo, caso opte por visualizar
                        nosso site em francês, armazenaremos essa informação nos cookies
                        para que mostremos o site sempre em francês para você. Também
                        usamos os cookies para gravar seu login, a fim de facilitar seu acesso
                        ao site. A maioria dos browsers permite que você opte por não permitir que cookies sejam armazenados em seu computador. Usamos
                        cookies para a sessão e cookies persistentes. O cookie de sessão
                        expira assim que você fecha o browser. O cookie persistente continua
                        em seu computador por um período maior. Além disso, usamos um
                        prestador de serviços para rastrear o comportamento de visitantes em
                        nosso site. Contudo, não temos acesso a seus cookies, tampouco os
                        controlamos. As informações coletadas pela empresa prestadora de
                        serviços são anônimas e usadas para melhorar nossos serviços e
                        campanhas de marketing. Como acontece na maioria dos sites,
                        recolhemos informações automaticamente e as salvamos em
                        arquivos. Nessas informações, estão inclusos o endereço de IP, tipo
                        de browser e idioma, provedor de serviço, páginas de referência,
                        sistema operacional, data/hora e informações de cliques no site.
                        Usamos essas informações para entender e analisar tendências,
                        administrar o site, aprender sobre o comportamento dos usuários e
                        reunir informações demográficas sobre nossa base de usuários como
                        um todo.</p>
                </div>

                <div class="col-12">
                    <h3>Quizzes and Contests</h3>
                </div>
                <div class="col">
                    <p>​Podemos dar a oportunidade aos clientes e visitantes de participarem
                        de quizzes (testes) ou concursos em nosso site. Caso você participe,
                        pediremos informações e dados pessoais. A participação em quizzes
                        e concursos é completamente voluntária e, portanto, você tem a opção
                        de não fornecer suas informações. As informações pedidas costumam
                        incluir informações de contato (como nome e e-mail) e dados
                        demográficos (como CEP). Usamos essas informações para
                        personalizar os comunicados enviados a você e sugerir produtos e
                        serviços mais relevantes.</p>
                </div>

                <div class="col-12">
                    <h3>Fóruns públicos</h3>
                </div>
                <div class="col">
                    <p>​Nossos sites oferecem blogs, fóruns e comunidades acessíveis ao
                        público em geral. Esteja ciente de que qualquer dado fornecido por
                        você nessas áreas do site pode ser lido, coletado e usado por outros
                        que as acessem. Para pedir que uma informação pessoal seja retirada
                        de um blog, fórum ou comunidade, entre em contato com a escola
                        através do email contato@focusalfa.com Em alguns casos, talvez não
                        seja possível remover a informação. Se for o caso, nós avisaremos
                        você e explicaremos o motivo.</p>
                </div>

                <div class="col-12">
                    <h3>Links para outros websites</h3>
                </div>
                <div class="col">
                    <p>​​Este site contém links para outros sites. Por favor, esteja ciente de que
                        Focus Alfa não é responsável pelos sistemas de privacidade de outros
                        sites. Nós incentivamos nossos usuários a serem cautelosos ao
                        saírem do nosso site e recomendamos que leiam os termos de uso de
                        qualquer website que colete informação pessoal identificável. Estas
                        políticas de privacidade se aplicam apenas para informações
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
                            demonstrar o nosso firme comprometimento sobre como você pode
                            utilizar todas as informações deste Site.
                            </p>
                        </div>
                    </div>
                    <div class="row justiy-content-center">
                        
                        <div class="col-12">
                            <h3>Termos de Uso</h3>
                        </div>
                            <div class="col">
                            <p>
                            Este site trata-se de um serviço interativo oferecido em por meio de
                        página eletrônica na internet que oferece informações sobre saúde e
                        alimentação a partir da integração de diversas fontes de informações
                        confiáveis e que estão alinhadas a opinião pessoal do autor.
                            </p>
                            <p>
                            O acesso a este site representa a aceitação expressa e irrestrita dos
                        termos de uso abaixo descritos. Se você não concorda com os termos,
                        por favor, não acesse nem utilize este website.
                            </p>
                            <p>O visitante poderá usar este site apenas para finalidades lícitas. Este
                                espaço não poderá ser utilizado para para publicar, enviar, distribuir
                                ou divulgar conteúdos ou informação de caráter difamatório, obsceno
                                ou ilícito, inclusive informações de propriedade exclusiva pertencentes
                                a outras pessoas ou empresas, bem como marcas registradas ou
                                informações protegidas por direitos autorais, sem a expressa
                                autorização do detentor desses direitos. Ainda, o visitante não poderá
                                usar este site para obter ou divulgar informações pessoais, inclusive
                                endereços na Internet, sobre os usuários do site.</p>
                            <p>A equipe deste site empenha-se em manter a qualidade, atualidade e
                                autenticidade das informações do site, mas seus criadores e
                                colaboradores não se responsabilizam por eventuais falhas nos
                                serviços ou inexatidão das informações oferecidas.</p>
                            <p>O usuário não deve ter como pressuposto que tais serviços e
                                informações são isentos de erros ou serão adequados aos seus
                                objetivos particulares. Os criadores e colaboradores tampouco
                                assumem o compromisso de atualizar as informações, e reservam-se
                                o direito de alterar as condições de uso ou preços dos serviços e
                                produtos oferecidos no site a qualquer momento.</p>
                            <p>O acesso a este site é gratuito. Este site poderá criar áreas de acesso
                                exclusivo aos seus clientes ou para terceiros especialmente
                                autorizados.</p>
                            <p>Os criadores e colaboradores deste site poderão a seu exclusivo
                                critério e em qualquer tempo, modificar ou desativar o site, bem como
                                limitar, cancelar ou suspender seu uso ou o acesso. Também estes
                                Termos de Uso poderão ser alterados a qualquer tempo. Visite
                                regularmente esta página e consulte os Termos então vigentes.
                                Algumas disposições destes Termos podem ser substituídas por
                                termos ou avisos legais expressos localizados em determinadas
                                páginas deste site.</p>
                        </div>
                         
                        <div class="col-12">
                            <h3>Informações enviadas pelos usuários e colaboradores</h3>
                        </div>
                            <div class="col">
                            <p>Qualquer material, informação, artigos ou outras comunicações que
                                forem transmitidas, enviadas ou publicadas neste site serão
                                considerados informação não confidencial, e qualquer violação aos
                                direitos dos seus criadores não será de responsabilidade da equipe
                                deste site. É terminantemente proibido transmitir, trocar ou publicar,
                                através deste website, qualquer material de cunho obsceno,
                                difamatório ou ilegal, bem como textos ou criações de terceiros sem a
                                autorização do autor. A equipe deste site reserva-se o direito de
                                restringir o acesso às informações enviadas por terceiros aos seus
                                usuários.</p>
                            <p>Este site poderá, mas não é obrigado, a monitorar, revistar e restringir
                                o acesso a qualquer área no site onde usuários transmitem e trocam
                                informações entre si, incluindo, mas não limitado a, salas de chat,
                                centro de mensagens ou outros fóruns de debates, podendo retirar do
                                ar ou retirar o acesso a qualquer destas informações ou
                                comunicações. Porém, a equipe deste site não é responsável pelo
                                conteúdo de qualquer uma das informações trocadas entre os
                                usuários, sejam elas lícitas ou ilícitas.</p>
                        </div>
                        <div class="col-12">
                            <h3>Limitação da Responsabilidade</h3>
                        </div>
                            <div class="col">
                            <p>​Os materiais são fornecidos neste website sem nenhuma garantia
                                explícita ou implícita de comercialização ou adequação a qualquer
                                objetivo específico. Em nenhum caso este site ou os seus
                                colaboradores serão responsabilizados por quaisquer danos, incluindo
                                lucros cessantes, interrupção de negócio, ou perda de informação que
                                resultem do uso ou da incapacidade de usar os materiais. A equipe
                                deste site não garante a precisão ou integridade das informações,
                                textos, gráficos, links e outros itens dos materiais.</p>
                            <p>A equipe deste site não é responsável pela violação de direitos
                                autorais decorrente de informações, documentos e materiais
                                publicados neste website, comprometendo-se a retirá-los do ar assim
                                que notificado da infração.</p>
                        </div>

                        <div class="col-12">
                            <h3>​Erros e falhas</h3>
                        </div>
                            <div class="col">
                            <p>​Os documentos, informações, imagens e gráficos publicados neste
                                site podem conter imprecisões técnicas ou erros tipográficos. Em
                                nenhuma hipótese a equipe deste site e/ou seus respectivos
                                fornecedores serão responsáveis por qualquer dano direto ou indireto
                                decorrente da impossibilidade de uso, perda de dados ou lucros,
                                resultante do acesso e desempenho do site, dos serviços oferecidos
                                ou de informações disponíveis neste site. O acesso aos serviços,
                                materiais, informações e facilidades contidas neste website não
                                garante a sua qualidade.</p>
                        </div>


                        <div class="col-12">
                            <h3>Links para sites de terceiros</h3>
                        </div>
                            <div class="col">
                            <p>​Os sites apontados não estão sob o controle deste site que não é
                                responsável pelo conteúdo de qualquer outro website indicado ou
                                acessado por meio deste site reserva-se o direito de eliminar qualquer
                                link ou direcionamento a outros sites ou serviços a qualquer momento.
                                Este site não endossa firmas ou produtos indicados, acessados ou
                                divulgados através deste website, tampouco pelos anúncios aqui
                                publicados, reservando-se o direito de publicar este alerta em suas
                                páginas eletrônicas sempre que considerar necessário.</p>
                        </div>


                        <div class="col-12">
                            <h3>Direitos autorais e propriedade intelectual</h3>
                        </div>
                            <div class="col">
                            <p>​Os documentos, conteúdos e criações contidos neste website
                                pertencem aos seus criadores e colaboradores. A autoria dos
                                conteúdo, material e imagens exibidos no diabetescontrolada.com.br é
                                protegida por leis nacionais e internacionais. Não podem ser copiados,
                                reproduzidos, modificados, publicados, atualizados, postados,
                                transmitidos ou distribuídos de qualquer maneira sem autorização
                                prévia e por escrito do proprietários desse site.</p>
                            <p>​As imagens contidas neste website são aqui incorporadas apenas
                                para fins de visualização, e, salvo autorização expressa por escrito,
                                não podem ser gravadas ou baixadas via download. A reprodução ou
                                armazenamento de materiais recuperados a partir deste serviço
                                sujeitará os infratores às penas da lei.</p>
                            <p>O nome deste site, seu logotipo, o nome de domínio para acesso na
                                Internet, bem como todos os elementos característicos da tecnologia
                                desenvolvida e aqui apresentada, sob a forma da articulação de bases
                                de dados, constituem marcas registradas e propriedades intelectuais
                                privadas e todos os direitos decorrentes de seu registro são
                                assegurados por lei. Alguns direitos de uso podem ser cedidos pelo
                                proprietários do site, em contrato ou licença especial, que pode ser
                                cancelada a qualquer momento se não cumpridos os seus termos.​</p>
                            <p>​As marcas registradas deste site só podem ser usadas publicamente
                                com autorização expressa. O uso destas marcas registradas em
                                publicidade e promoção de produtos deve ser adequadamente
                                informado.</p>
                        </div>


                        <div class="col-12">
                            <h3>Reclamações sobre violação de direitos autorais</h3>
                        </div>
                            <div class="col">
                            <p>​A equipe deste site respeita a propriedade intelectual de outras
                                pessoas ou empresas e solicitamos aos nossos membros que façam o
                                mesmo. Toda e qualquer violação de direitos autorais deverá ser
                                notificada ao contato@focusalfa.com e acompanhada dos documentos
                                e informações que confirmam a autoria.</p>
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
