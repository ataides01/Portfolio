<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/config.php';

$pageTitle = SITE_NAME . ' — Sites e experiências web';
$metaDescription = 'Agência focada em websites: como começamos, o que entregamos e projetos exemplo.';

require_once __DIR__ . '/includes/header.php';

$contactStatus = $_GET['contato'] ?? '';
?>

        <section class="hero" id="inicio">
            <div class="container hero-inner">
                <p class="eyebrow">Websites &amp; presença online</p>
                <h1>Sites que contam a história do seu negócio</h1>
                <p class="hero-lead">Planejamos, desenhamos e desenvolvemos páginas e portais rápidos, acessíveis e fáceis de atualizar — do primeiro rascunho ao ar.</p>
                <div class="hero-actions">
                    <a href="#contato" class="btn btn-primary">Falar sobre um site</a>
                    <a href="#servicos" class="btn btn-ghost">Ver o que fazemos</a>
                </div>
            </div>
            <div class="hero-decoration" aria-hidden="true"></div>
        </section>

        <section class="section section-alt" id="historia">
            <div class="container">
                <h2 class="section-title">Como começamos</h2>
                <div class="two-col">
                    <div class="prose">
                        <p><strong><?php echo htmlspecialchars(SITE_NAME, ENT_QUOTES, 'UTF-8'); ?></strong> nasceu de um grupo de pessoas que construíam sites para amigos e pequenos negócios. Percebemos que muita gente precisava de um <em>site profissional</em>, mas sem jargão técnico nem processos confusos.</p>
                        <p>Começamos em 2020 com landing pages e hoje cuidamos de sites institucionais, blogs e vitrines de produtos — sempre com foco em performance, SEO básico e experiência no celular.</p>
                    </div>
                    <ul class="timeline">
                        <li><span class="timeline-year">2020</span> Primeiros projetos e definição do método de trabalho.</li>
                        <li><span class="timeline-year">2022</span> Expansão para e-commerce simples e integrações com formulários.</li>
                        <li><span class="timeline-year">2024</span> Padrões de acessibilidade e hospedagem orientada a sites estáticos e PHP.</li>
                        <li><span class="timeline-year">Hoje</span> Ajudamos marcas a aparecer bem no Google e a converter visitas em contatos.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="section" id="servicos">
            <div class="container">
                <h2 class="section-title">O que entregamos em websites</h2>
                <p class="section-intro">Funcionalidades típicas que você pode oferecer aos clientes — personalize esta lista com seus pacotes reais.</p>
                <div class="cards">
                    <article class="card">
                        <div class="card-icon" aria-hidden="true">01</div>
                        <h3>Design responsivo</h3>
                        <p>Layout que se adapta a celular, tablet e desktop, com tipografia legível e hierarquia visual clara.</p>
                    </article>
                    <article class="card">
                        <div class="card-icon" aria-hidden="true">02</div>
                        <h3>Performance</h3>
                        <p>Imagens otimizadas, carregamento rápido e boas práticas para o Core Web Vitals.</p>
                    </article>
                    <article class="card">
                        <div class="card-icon" aria-hidden="true">03</div>
                        <h3>Formulários &amp; PHP</h3>
                        <p>Contato com validação no servidor, proteção básica contra spam e registro de mensagens (exemplo neste projeto).</p>
                    </article>
                    <article class="card">
                        <div class="card-icon" aria-hidden="true">04</div>
                        <h3>SEO on-page</h3>
                        <p>Títulos, descrições, estrutura de headings e URLs amigáveis para mecanismos de busca.</p>
                    </article>
                    <article class="card">
                        <div class="card-icon" aria-hidden="true">05</div>
                        <h3>Painel ou código</h3>
                        <p>Sites em HTML/CSS/JS puro ou integrados a CMS — você escolhe o que manter no longo prazo.</p>
                    </article>
                    <article class="card">
                        <div class="card-icon" aria-hidden="true">06</div>
                        <h3>Deploy &amp; domínio</h3>
                        <p>Orientação para colocar o site no ar, HTTPS e renovação de domínio (conteúdo exemplo).</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="section section-alt" id="portfolio">
            <div class="container">
                <h2 class="section-title">Projetos e trabalhos</h2>
                <p class="section-intro">Conheça o WYM CRM, um sistema em operação, e outros exemplos de possibilidades para projetos web.</p>
                <div class="portfolio-grid">
                    <article class="portfolio-item portfolio-featured" aria-labelledby="wym-title">
                        <div class="wym-project-visual">
                            <img src="assets/images/wym-logo.png" alt="" width="88" height="88" loading="lazy">
                            <span>WYM TECH</span>
                            <small>CRM e atendimento por WhatsApp</small>
                        </div>
                        <div class="wym-project-content">
                            <span class="project-label">Projeto real · Sistema web</span>
                            <h3 id="wym-title">WYM CRM</h3>
                            <p>Plataforma de gestão de atendimento e relacionamento com clientes, desenvolvida para empresas que precisam organizar o WhatsApp, acompanhar oportunidades e coordenar sua equipe em um único ambiente.</p>
                            <ul class="project-features">
                                <li>Atendimento por WhatsApp com histórico, responsáveis e envio de fotos, vídeos e documentos.</li>
                                <li>CRM com setores e etapas personalizáveis, organização por arrastar e acompanhamento de clientes.</li>
                                <li>Equipe com permissões por setor, carteira de clientes e controle de acessos por empresa.</li>
                                <li>Respostas prontas, mensagens agendadas, menu inicial configurável e relatórios.</li>
                            </ul>
                            <p class="project-stack"><strong>Tecnologias:</strong> Next.js, React, TypeScript, Supabase, PostgreSQL, Evolution API e Vercel.</p>
                            <a class="btn btn-primary" href="https://vendas.wymtech.com.br/" target="_blank" rel="noopener noreferrer">Conhecer o WYM CRM <span class="project-link-note">(abre em nova aba)</span></a>
                        </div>
                    </article>

                    <article class="portfolio-item">
                        <div class="portfolio-thumb" style="--thumb: linear-gradient(135deg, #1a3a4a 0%, #0d6278 100%);">
                            <span>Site institucional</span>
                        </div>
                        <h3>Clínica Bem-Estar <small>(exemplo)</small></h3>
                        <p>Páginas de serviços, equipe e agendamento via formulário.</p>
                    </article>
                    <article class="portfolio-item">
                        <div class="portfolio-thumb" style="--thumb: linear-gradient(135deg, #2d1f3d 0%, #5c3d7a 100%);">
                            <span>Landing + lead</span>
                        </div>
                        <h3>Curso online X <small>(exemplo)</small></h3>
                        <p>Uma página de conversão com vídeo e captura de e-mail.</p>
                    </article>
                    <article class="portfolio-item">
                        <div class="portfolio-thumb" style="--thumb: linear-gradient(135deg, #1a2d1a 0%, #3d6b3d 100%);">
                            <span>Vitrine</span>
                        </div>
                        <h3>Oficina Verde <small>(exemplo)</small></h3>
                        <p>Catálogo de serviços e depoimentos, foco em busca local.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="section" id="contato">
            <div class="container contact-layout">
                <div class="contact-copy">
                    <h2 class="section-title">Vamos criar seu site?</h2>
                    <p>Envie uma mensagem de exemplo. O back-end em PHP grava em arquivo na pasta <code>data/</code> (não envia e-mail até você configurar <code>mail()</code> ou SMTP).</p>
                    <?php if ($contactStatus === 'ok'): ?>
                        <p class="alert alert-success" role="status">Mensagem recebida. Obrigado pelo contato.</p>
                    <?php elseif ($contactStatus === 'erro'): ?>
                        <p class="alert alert-error" role="alert">Não foi possível enviar. Verifique os campos e tente de novo.</p>
                    <?php endif; ?>
                </div>
                <form class="contact-form" method="post" action="send-contact.php" novalidate>
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" required maxlength="120" autocomplete="name">

                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" required maxlength="254" autocomplete="email">

                    <label for="tipo">Tipo de projeto</label>
                    <select id="tipo" name="tipo">
                        <option value="institucional">Site institucional</option>
                        <option value="landing">Landing page</option>
                        <option value="blog">Blog / conteúdo</option>
                        <option value="outro">Outro</option>
                    </select>

                    <label for="mensagem">Mensagem</label>
                    <textarea id="mensagem" name="mensagem" rows="5" required maxlength="4000"></textarea>

                    <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                </form>
            </div>
        </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
