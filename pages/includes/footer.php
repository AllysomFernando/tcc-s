<footer <?php if (isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
    <div class="footer">
      <div id="sobre" class="sec aboutus">
        <h2> Sobre Nós</h2>
        <p>Somos um projeto fictício para conclusão de curso, uma empresa para vendas de jogos e envios de códigos,
          somos em dois programadores e um designer gráfico, nosso contato está para tirar a sua duvida está logo abaixo
          e para enviar basta clicar em contatos.</p>
        <ul class="sci">
          <li><a href="https://linktr.ee/rddystore"><i class="fab fa-facebook-square"></i></a></li>
          <li><a href="https://linktr.ee/rddystore"><i class="fab fa-instagram"></i></a></li>
          <li><a href="https://linktr.ee/rddystore"><i class="fab fa-github"></i></a></li>
          <li><a href="https://linktr.ee/rddystore"><i class="fab fa-twitter-square"></i></a></li>
        </ul>
      </div>
      <div class="sec quickLinks">
        <h2>Quick Links</h2>
        <ul>
        <li><a href="<?php echo INCLUDE_PATH; ?>politicas-de-privacidades">Politicas de Privacidade</a></li>
          <li><a href="<?php echo INCLUDE_PATH; ?>termos">Termos de Condições</a></li>
        </ul>
      </div>
      <div class="sec contact">
        <h2>Informações para Contatos</h2>
        <ul class="info">
          <li>
            <span><i class="fas fa-map-marker-alt"></i></span>
            <span>R. Natal, 2800 - Centro <br>
              Cascavel - PR</span>
          </li>
          <li>
            <span><i class="fas fa-phone-square-alt"></i></span>
            <p><a href="tel: 45 99944-7017">(45) 99944-7017</a>
              <br>
              <a href="tel:(45) 99916-1429">(45) 99916-1429</a>
            </p>
          </li>
          <li>
            <span><i class="far fa-envelope"></i></span>
            <p><a href="mailto:allysom.renczenczen18@gmail.com">allysom.renczenczen18@gmail.com</a></p>
          </li>
        </ul>
      </div>
    </div>
    <div class="copyrightText">
      <p>Copyright © Ruddy Store. Todos os direitos reservados.</p>
    </div>
  </footer>