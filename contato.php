<?php require_once("cabecalho.php") ?> 

<?php require_once("cabecalho-busca.php") ?> 

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>WhatsApp</h4>
                        <p><?php echo $whatsapp ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>Endereço</h4>
                        <p><?php echo $endereco ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>Atendimento</h4>
                        <p>24 Horas</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p><?php echo $email ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->


    <!-- Contact Form Begin -->
    <div class="contact-form spad bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Fale Conosco</h2>
                    </div>
                </div>
            </div>
            <form method="post">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <input type="text" name="nome" id="nome" placeholder="Seu Nome" required>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <input type="text" name="email" id="email" placeholder="Seu Email" required>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <input type="text" name="telefone" id="telefone" placeholder="Seu WhatsApp">
                    </div>
                    <div class="col-lg-12 text-center">
                        <textarea name="mensagem" id="mensagem" placeholder="Mensagem"></textarea>
                        <button name="btn-enviar-email" id="btn-enviar-email" type="button" class="site-btn">ENVIAR MENSAGEM</button>
                    </div>
                    <div class="col-md-12 text-center mt-4" id="div-mensagem"></span>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->

  <?php require_once("rodape.php") ?>


 <script type="text/javascript">
      
      $('#btn-enviar-email').click(function(event){
        event.preventDefault();
        $.ajax({
            url:"enviar.php",
            method:"post",
            data: $('form').serialize(),
            dataType: "text", 
            success: function(msg){
                if(msg.trim() === 'Enviado com Sucesso!'){
                    $('#div-mensagem').addClass('text-success')
                    $('#div-mensagem').text(msg);
                    $('#nome').val('');
                    $('#email').val('');
                    $('#telefone').val('');
                    $('#mensagem').val('');
                }else {
                    $('#div-mensagem').addClass('text-danger')
                   // $('#div-mensagem').text('Deu erro ao Enviar o Formulário');
                    $('#div-mensagem').text(msg);
                }
            }
        })

      })

 </script>