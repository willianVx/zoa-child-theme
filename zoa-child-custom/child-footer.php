<?php 
function render_footer(){
    ?>
    <div id="zoa_child_theme_footer">
        <div class="container">
            <div class="row col-lg-12">
                <div class="col-lg-4">
                    <h2>Instaarts</h2>
                    <p><a href="#">Sobre a gente</a></p>
                    <p><a href="#">Custos e tempo de entrega</a></p> 
                    <p><a href="#">Preços e formatos</a></p>
                    <p><a href="#">Trabalhe conosco</a></p>
                    <p><a href="#">Molduras</a></p>
                </div>

                <div class="col-lg-4">
                    <h2>Informações úteis</h2>
                    <p><a href="#">Preços por volume</a></p>
                    <p><a href="#">Termos e condiçoes</a></p>
                    <p><a href="#">Politica de privacidade</a></p>
                </div>

                <div class="col-lg-4">
                    <h2>Ajuda</h2>
                    <p><a href="#">F.A.Q</a></p>
                    <p><a href="#">Perfil ICC</a></p>
                    <p><a href="#">Photoarts Gallery</a></p>
                    <p><a href="#">Politica de devolução</a></p>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row col-lg-12">
                <div class="col-lg-4 img_logo">
                    <?php echo wp_get_attachment_image( 138, array('700', '600'), "", array( "class" => "img-responsive" ) );  ?>
                </div>
           
                <div class="col-lg-4">
                    <h2>Sobre nós</h2>
                    <p>
                    O Instaarts - Laboratório de Arte Contemporânea foi criado com o propósito de ajudar tanto artistas profissionais quanto pessoas interessadas a terem o melhor da produção de quadros com qualidade de museu de forma fácil e rápida. Possuímos o melhor equipamento e conhecimento técnico para fornecer todos os serviço que você precisa entregues diretamente em sua casa ou atelier
                    </p>
                    <p>
                        Contato: <a href="mailto:contato@intaarts.com.br"> contato@instaarts.com.br</a>
                    </p>
                </div>

                <div class="col-lg-4">
                    <h2>Siga-nos</h2>
                    <div class="social_network">
                        <a href="https://www.facebook.com/instaarts/">
                            <?php echo wp_get_attachment_image( 165, array('34', '34'), "", array( "class" => "img-responsive" ) );  ?>
                        </a>
                        <a href="https://br.pinterest.com/instaarts/">
                            <?php echo wp_get_attachment_image( 166, array('34', '34'), "", array( "class" => "img-responsive" ) );  ?>
                        </a>
                        <a href="https://twitter.com/instaarts">
                            <?php echo wp_get_attachment_image( 167, array('34', '34'), "", array( "class" => "img-responsive" ) );  ?>
                        </a>
                        <a href="https://www.youtube.com/channel/UCW4doa4uA88iLwlQOW7HW-w">
                            <?php echo wp_get_attachment_image( 168, array('34', '34'), "", array( "class" => "img-responsive" ) );  ?>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <hr>
        <div class="container zoa_child_subfooter">
            <div class="row col-lg-12">
                © 2018 Instaarts: Laboratório de arte contemporânea: All rights reserved
            </div>
        </div>
    </div>
    

    <?php
}