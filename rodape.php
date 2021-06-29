 <!-- Footer Section Begin -->
 <footer class="footer spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__about__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                    <ul>
                        <li>Endereço: <?php echo $endereco ?></li>
                        <li>WhatsApp: <?php echo $whatsapp ?></li>
                        <li>Email: <?php echo $email ?></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 offset-lg-1">
                <div class="footer__widget">
                    <h6>Acesso Rápido</h6>
                    <ul>
                        <li><a href="sobre.php">Sobre Nós</a></li>
                        <li><a href="contato.php">Contato</a></li>
                        <li><a href="carrinho.php">Meu carrinho</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="lista-produtos">Lista de Produtos</a></li>
                        <li><a href="categorias.php">Categorias</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer__widget">
                    <h6>Ainda não possui cadastro?</h6>
                    <p>Insira seu e-mail, para se cadastrar e receber promoções exclusivas!</p>
                    <form action="#">
                        <input type="email" placeholder="Insira seu e-mail" required>
                        <button type="submit" class="site-btn">Inscreva-se</button>
                    </form>
                    <div class="footer__widget__social">
                        <a target="blank" href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                        <a target="blank" href="#" title="Instagram"><i class="fa fa-instagram"></i></a>
                        <a target="blank" href="http://api.whatsapp.com/send?1=pt_BR&phone=<?php echo $whatsapp_link ?>" title="<?php echo $whatsapp ?>"><i class="fa fa-whatsapp"></i></a>
                        <a target="blank" href="#" title="YouTube"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <div class="footer__copyright__text"><p>
                      <?php echo $copyright ?> Desenvolvido por: <a class="text-success" href="https://ddrsolucoesemti.com.br" target="_blank">DDR - Soluções em Tecnologia da Informação</a>

                      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                      <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!-- Footer Section End -->

  <!-- Js Plugins -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/jquery.slicknav.js"></script>
  <script src="js/mixitup.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

  <script src="js/mascara.js"></script>



</body>

</html>