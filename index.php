<?php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Biblioteca para as animações-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
      rel="stylesheet"
    />

    <link href="./vendor/css/index.css" rel="stylesheet" />
    <title>TechZone</title>
  </head>
  <body>
    <!-- === Header === -->
    <header>
      <img src="./img/logo.png" />
      <div class="contact-number-button">
        <a href="tel:+5599999999999" target="_blank">(99) 99999-9999</a>
      </div>
    </header>
    <!-- === Fim Header == -->

    <!-- === Primeira Seção === -->
    <section class="first-section">
      <div class="slogan-div">
        <h1 class="nome-empresa">TechZone</h1>
        <h1>Inovando o futuro com soluções tecnológicas inteligentes</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
          pharetra nibh orci. Sed vel turpis sit amet turpis vestibulum sodales.
        </p>
      </div>

      <!-- Formulário -->
      <form class="ask-form" id="form">
        <p>Nos envie uma mensagem</p>
        <input
          id="nome-id"
          name="nome"
          type="text"
          placeholder="Nome"
          pattern="^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$"
          required="required"
        />
        <input id="email-id" name="email" type="email" placeholder="E-mail" />
        <input
          id="tel-id"
          name="tel"
          type="tel"
          placeholder="(DDD) + Telefone"
          pattern="^\([0-9]{2}\) [0-9]?[0-9]{8}$"
          required="required"
        />
        <textarea
          id="mensagem-id"
          name="mensagem"
          type="text"
          placeholder="Como podemos te ajudar ?"
          class="input-textbox"
          cols="30"
          rows="10"
          required="required"
        ></textarea>
        <input type="submit" value="Enviar" class="send-button" />
      </form>
      <!-- Fim Formulário -->
    </section>
    <!-- === Fim Primeira Seção === -->

    <!-- === Apresentação === -->
    <section class="presentation-section animate">
      <div class="presentation-image">
        <img src="./img/img1.jpg" alt="Três pessoas em um escritório" />
      </div>
      <div class="presentation-text">
        <h1>Quem Somos</h1>
        <p>
          Nós somos uma empresa dedicada a fornecer soluções inovadoras e
          personalizadas para empresas de todos os setores.Oferecemos uma ampla
          gama de serviços, desde desenvolvimento de software personalizado,
          criação de aplicativos móveis e soluções de análise de dados até
          consultoria em TI e segurança cibernética.
        </p>
      </div>
    </section>
    <!-- === Fim Apresentação === -->

    <!-- === Benefícios === -->
    <section class="beneficios-section">
      <h1>Com nosso serviço você terá:</h1>

      <!-- === Lista de Benefícios === -->
      <ul class="listagem-beneficios">
        <li class="animate">
          <img src="./img/icons/foguete2.png" alt="ícone marketplace" />
          <span class="beneficio-textbox">
            <h2>Aumento da eficiência</h2>
            <p>
              Uma empresa de soluções tecnológicas pode ajudar a automatizar
              processos manuais, melhorando a eficiência geral do negócio.
            </p>
          </span>
        </li>
        <li class="animate">
          <img src="./img/icons/preco-baixo2.png" alt="ícone marketplace" />
          <span class="beneficio-textbox">
            <h2>Redução de custos</h2>
            <p>
              Soluções tecnológicas podem ajudar a reduzir custos operacionais e
              de mão de obra, tornando a empresa mais competitiva.
            </p>
          </span>
        </li>
        <li class="animate">
          <img
            src="./img/icons/feedback-do-cliente2.png"
            alt="ícone marketplace"
          />
          <span class="beneficio-textbox">
            <h2>Melhor experiência do cliente</h2>
            <p>
              Tecnologias como chatbots e inteligência artificial podem melhorar
              a experiência do cliente, tornando o atendimento mais rápido e
              eficiente.
            </p>
          </span>
        </li>
        <li class="animate">
          <img
            src="./img/icons/escudo-de-seguranca2.png"
            alt="ícone marketplace"
          />
          <span class="beneficio-textbox">
            <h2>Maior segurança</h2>
            <p>
              Uma empresa de soluções tecnológicas pode fornecer sistemas de
              segurança de última geração, protegendo a empresa contra ameaças
              cibernéticas.
            </p>
          </span>
        </li>
        <li class="animate">
          <img
            src="./img/icons/analise-de-dados2.png"
            alt="ícone marketplace"
          />
          <span class="beneficio-textbox">
            <h2>Análise de dados</h2>
            <p>
              Soluções tecnológicas podem ajudar a coletar e analisar dados,
              fornecendo insights valiosos para o negócio.
            </p>
          </span>
        </li>
        <li class="animate">
          <img src="./img/icons/inovacao2.png" alt="ícone marketplace" />
          <span class="beneficio-textbox">
            <h2>Inovação</h2>
            <p>
              Uma empresa de soluções tecnológicas pode ajudar a empresa a se
              manter atualizada com as últimas tendências e inovações
              tecnológicas, mantendo-a na vanguarda do mercado.
            </p>
          </span>
        </li>
      </ul>
      <!-- === Fim Lista de Benefícios === -->
      <a href="" target="_blank" class="beneficios-button">Chamada para ação</a>
    </section>
    <!-- === Fim Benefícios === -->

    <!-- === FAQ === -->
    <section class="faq-section">
      <h1>Perguntas Frequentes</h1>
      <ul class="faq-list">
        <li>Quais são recursos e funcionalidades oferecidos pela empresa?</li>
        <li>
          Como sua solução se diferencia de outras opções disponíveis no
          mercado?
        </li>
        <li>
          Quais são as possibilidades de integração da sua solução com outras
          ferramentas já utilizamos em nossa empresa?
        </li>
        <li>Quanto tempo leva para que esteja completamente operacional?</li>
        <li>
          Quanto tempo leva para que o sistema esteja completamente operacional?
        </li>
      </ul>
    </section>

    <!-- === Fim FAQ === -->

    <!-- === Chamada para ação === -->
    <section class="chamada-acao-section">
      <div class="chamada-acao-text-div">
        <h1>Chegou aqui ?</h1>
        <p>
          Conheça melhor nossos produtos e serviços, entre em contato com nossos
          especialistas.
        </p>
      </div>
      <div class="chamada-acao-button-div">
        <p>
          Converse com nossa equipe sem compromisso. Não perca a chance de
          atualizar seu negócio
        </p>
        <a href="" target="_blank" class="chamada-acao-button"
          >Entre em contato</a
        >
        <p class="legenda-botao">
          Nossos especialistas vão entrar em contato com você ainda hoje.
        </p>
      </div>
    </section>
    <!-- === Fim Chamada para ação === -->

    <!-- === Footer === -->
    <footer class="footer">
      <p>Guilherme Helton © Todos os Direitos Reservados - 2023</p>
      <p>CNPJ 99.999.999 - 0009-99 - TERMO DE USO</p>
    </footer>
    <!-- === Fim Footer === -->
  </body>
  <script>
    // Envia o formulário para a API
    const form = document.getElementById("form");

    form.addEventListener("submit", (evento) => {
      evento.preventDefault();

      const formData = new FormData(form);
      const data = Object.fromEntries(formData);

      fetch("./api/clientes", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify(data),
      })
        .then((res) => res.json())
        .then((data) => {
          // Limpa os campos do formulário após envio
          form.reset();
          alert(data.dados);
        });
    });
  </script>
  <script src="./vendor/js/script.js"></script>
</html>
