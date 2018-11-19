<?php
function conteudo_news(){
    ?>
       <div class="news_content container">

                <!-- Header do instaarts news  -->
                <div class="header_instaarts_news">
                    <div class="col-lg-6">
                        <h2>Instaarts - <span> News </span></h2>
                    </div>
                    <div class="col-lg-6">
                        <p>
                        Gosta de fotografia? <br> Aqui você encontra um vasto conteúdo sobre como produzi-las com os melhores acabamentos e materiais do mercado.
                        </p>
                    </div>
                </div>
                <!-- fim do header -->
                <?php $post_destaque = zoa_child_get_posts_destaque(1, 720, 480); 
                ?>
                <!-- News destaque -->
               <?php foreach($post_destaque as $post){ ?>
                <div class="instaarts_news_destaque col-lg-12">
                    <a href="<?php echo $post['post_link']; ?>">
                    <?php echo $post['post_image']; ?>
                    <div>
                    <span><?php echo $post['post_categoria']; ?></span> <br>
                        <?php echo  substr($post['post_title'], 0, 60); ?>
                    </div>
                    </a>
                    
                </div>
               <?php } ?>
                <!-- Fim destaque -->
                <!-- Posts n1 -->

                <?php $posts_n1 =  zoa_child_get_posts_destaque(4, 300, 300); ?>
                <div class="posts_n1_instaarts_news">

                    <?php for ($i=1; $i < sizeof($posts_n1); $i++) { 
                        $key = $posts_n1[$i];
                    ?>
                    <div class="col-lg-4 post_col">
                        <a href="<?php echo $key['post_link'];?>">
                        <?php echo $key['post_image']; ?>
                        <div>
                            <span><?php echo $key['post_categoria']; ?></span><br>
                            <?php echo substr($key['post_title'], 0, 60);?>
                        </div>
                        </a>
                    </div>
                <?php } ?>

                </div>
                <!-- Fim Posts n1-->
                
                <!-- Posts n2 -->
                <div class="posts_n2_instaarts_news">
                    <?php $posts_n2 = zoa_child_get_posts_destaque(6, 300, 300); ?>
                    <?php for ($i=4; $i < sizeof($posts_n2); $i++) { 
                        $key = $posts_n2[$i];
                    ?>
                    <div class="col-lg-6 post_col">
                        <a href="<?php echo $key['post_link']; ?>">
                        <?php echo $key['post_image'] ?>
                        <div>
                            <span><?php echo $key['post_categoria']; ?></span><br>    
                            <?php echo substr($key['post_title'], 0, 60); ?>
                        </div>
                        </a>
                    </div>
                    <?php } ?>
                </div>
                <!-- posts n3 -->
                <div class="posts_n1_instaarts_news">
                    <?php $posts_n3 =  zoa_child_get_posts_destaque(8, 300, 300);?>
                    <?php for ($i=5; $i < sizeof($posts_n3); $i++) { $key = $posts_n3[$i];?>
                    <div class="col-lg-4 post_col">
                        <a href="<?php echo $key['post_link']; echo $i; ?>">
                        <?php echo $key['post_image'] ?>
                        <div>
                            <span> <?php echo substr($post['post_categoria'], 0, 60);?> </span><br>
                            <?php echo substr($key['post_title'], 0, 60);?>
                        </div>
                        </a>
                    </div>
                <?php } ?>
                </div>

                <!-- Produtos -->
                <div class="produtos_instaarts_news">
                    <h2>Veja nossos produtos</h2>
                    <div class="col-lg-3">
                        <img src="https://instaarts.com/wp-content/uploads/2018/10/metacrilato-7-mm-galeria-square-1.jpg" alt="">
                        <p>Metacrilato 7mm</p>
                        <br>
                        <?php echo do_shortcode('[pedido_link]'); ?>
                        
                    </div>

                    <div class="col-lg-3">
                    <img src="https://instaarts.com/wp-content/uploads/2018/10/metacrilato-7-mm-galeria-square-1.jpg" alt="">
                        <p>Metacrilato 5mm</p>
                        <br>
                        <?php echo do_shortcode('[pedido_link]'); ?>
                    </div>

                    <div class="col-lg-3">
                    <img src="https://instaarts.com/wp-content/uploads/2018/10/metacrilato-7-mm-galeria-square-1.jpg" alt="">
                        <p>Photobloco</p>
                        <br>
                        <?php echo do_shortcode('[pedido_link_photobloco]'); ?>
                    </div>

                    <div class="col-lg-3">
                    <img src="https://instaarts.com/wp-content/uploads/2018/10/metacrilato-7-mm-galeria-square-1.jpg" alt="">
                        <p>Porta-retratos</p>
                        <br>
                        <?php echo do_shortcode('[pedido_link_porta_retratos]'); ?>
                    </div>
                </div>
               <!-- fim Produtos --> 

       </div>
    <?php
}