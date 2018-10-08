<?php 
function render_footer(){
    ?>
    <div id="zoa_child_theme_footer">
        <div class="container">
            <div class="row col-lg-12">
                <div class="col-lg-4">
                    <h2>Instaarts</h2>
                    <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'sobre-a-gente' ) ) ); ?>">Sobre a gente</a><br>
                    <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'custos e tempo de entrega' ) ) ); ?>">Custos e tempo de entrega</a><br>
                    <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'preços e formatos' ) ) ); ?>">Preços e formatos</a><br>
                    <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'trabalhe conosco' ) ) ); ?>">Trabalhe conosco</a><br>
                    <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'molduras' ) ) ); ?>">Molduras</a><br>
                </div>

                <div class="col-lg-4">
                    <h2>Informações úteis</h2>
                    <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'preços por volume' ) ) ); ?>">Preços por volume</a><br>
                    <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'termos e condições' ) ) ); ?>">Termos e condiçoes</a><br>
                    <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'politica de privacidade' ) ) ); ?>">Politica de privacidade</a><br>
                </div>

                <div class="col-lg-4">
                    <h2>Ajuda</h2>
                    <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'faq' ) ) ); ?>">F.A.Q</a><br>
                    <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'perfil icc' ) ) ); ?>">Perfil ICC</a><br>
                    <a href="http://www.photoarts.com.br/">Photoarts Gallery</a><br>
                    <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'politica de devolução' ) ) ); ?>">Politica de devolução</a><br>
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