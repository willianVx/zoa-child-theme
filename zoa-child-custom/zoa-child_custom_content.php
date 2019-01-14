<?php
function conteudo_news(){
    ?>
       <div class="news_content container">

                <!-- Header do instaarts news  -->
                <div class="header_instaarts_news">
                    <div class="">
                        <h2> <span>News</span></h2>
                    </div>
                    <div class="">
                        <p>
                        Gosta de fotografia? <br> Aqui você encontra um vasto conteúdo sobre como produzi-las com os melhores acabamentos e materiais do mercado.
                        </p>
                    </div>
                </div>
                <!-- fim do header -->
                
                <?php $post_destaque_main =  zoa_child_get_posts_destaque(); ?>

                <div class='posts_grid'>

                    <!-- Primeira coluna -->
                    <div class='post_coluna p_c_1'>

                        <div class='post_destaque'>
                            <a href="<?php echo $post_destaque_main[1]['post_link']; ?>">
                                <?php echo $post_destaque_main[1]['post_image'] ?>
                                <div>
                                    <span><?php echo $post_destaque_main[1]['post_title']; ?></span>
                                </div>
                            </a>
                        </div>
                        <div class='post_destaque'>
                            <a href="<?php echo $post_destaque_main[2]['post_link']; ?>">
                                <?php echo $post_destaque_main[2]['post_image'] ?>
                                <div>
                                    <span><?php echo $post_destaque_main[2]['post_title']; ?></span>
                                </div>
                            </a>
                        </div>

                    </div>

                    <!-- Coluna principal --> 
                    <div class='post_destaque'>
                        <a href="<?php echo $post_destaque_main[0]['post_link']; ?>">
                            <h5>Destaque</h5>
                            <?php echo $post_destaque_main[0]['post_image'] ?>
                            <div>
                                <span><?php echo $post_destaque_main[0]['post_title']; ?></span>
                            </div>
                        </a>
                    </div>

                    <!-- terceira coluna -->
                    <div class='post_coluna p_c_2'>

                        <div class='post_destaque'>
                            <a href="<?php echo $post_destaque_main[3]['post_link']; ?>">
                                <?php echo $post_destaque_main[3]['post_image'] ?>
                                <div>
                                    <span><?php echo $post_destaque_main[3]['post_title']; ?></span>
                                </div>
                            </a>
                        </div>
                        <div class='post_destaque'>
                            <a href="<?php echo $post_destaque_main[4]['post_link']; ?>">
                                <?php echo $post_destaque_main[4]['post_image'] ?>
                                <div>
                                    <span><?php echo $post_destaque_main[4]['post_title']; ?></span>
                                </div>
                            </a>
                        </div>
                        
                    </div>

                    <!-- quarta coluna -->
                    <div class="post_coluna p_c_2">

                        <div class='post_destaque'>
                            <a href="<?php echo $post_destaque_main[5]['post_link']; ?>">
                                <?php echo $post_destaque_main[5]['post_image'] ?>
                                <div>
                                    <span><?php echo $post_destaque_main[5]['post_title']; ?></span>
                                </div>
                            </a>
                        </div>
                        <div class='post_destaque'>
                            <a href="<?php echo $post_destaque_main[5]['post_link']; ?>">
                                <?php echo $post_destaque_main[6]['post_image'] ?>
                                <div>
                                    <span><?php echo $post_destaque_main[6]['post_title']; ?></span>
                                </div>
                            </a>
                        </div>
                        
                    </div>
                    
                </div>

                <?php $post_scrolling_1 = zoa_child_get_posts_2(19, 4); ?>
                <div class='scroll_posts'>

                    <span>Metacrilato</span>
                    
                    <div class='scroll_container'>

                        <div class='scroll_button'>
                            <button class='scroll_prev'><span class='glyphicon glyphicon-chevron-left'></span></button>
                        </div>

                        <div class="scrolling-wrapper">
                            <?php foreach($post_scrolling_1 as $post){ ?>
                                <a href="<?php echo $post['post_link']; ?>">
                                    <div class="card">
                                        <?php echo $post['post_image']; ?>
                                        <div>
                                            <?php echo $post['post_title']; ?>
                                        </div>
                                    </div>
                                </a>
                            <?php } ?>

                            <div class="post_card_ver_mais">
                                <div>
                                    <a href="<?php echo '#' ?>">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/zoa-child-custom/img/saber-mais.svg" border="0" />
                                        Ver tudo!
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class='scroll_button'>
                            <button class='scroll_next'><span class='glyphicon glyphicon-chevron-right'></span></button>
                        </div>

                    </div>

                </div>

                <?php $post_scrolling_2 = zoa_child_get_posts_2(20, 4); ?>
                <div class='scroll_posts'>

                    <span>Processos</span>
                    
                    <div class='scroll_container'>

                        <div class='scroll_button'>
                            <button class='scroll_prev'><span class='glyphicon glyphicon-chevron-left'></span></button>
                        </div>

                        <div class="scrolling-wrapper s-w-2">
                            <?php foreach($post_scrolling_2 as $post){ ?>
                                <a href="<?php echo $post['post_link']; ?>">
                                    <div class="card">
                                        <?php echo $post['post_image']; ?>
                                        <div>
                                            <?php echo $post['post_title']; ?>
                                        </div>
                                    </div>
                                </a>
                            <?php } ?>

                            <div class="post_card_ver_mais">
                                <div>
                                    <a href="<?php echo '#' ?>">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/zoa-child-custom/img/saber-mais.svg" border="0" />
                                        Ver tudo!
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class='scroll_button'>
                            <button class='scroll_next'><span class='glyphicon glyphicon-chevron-right'></span></button>
                        </div>

                    </div>

                </div>
                
                <?php $post_scrolling_3 = zoa_child_get_posts_2(21, 4); ?>
                <div class='scroll_posts'>

                    <span>Produto</span>
                    
                    <div class='scroll_container'>

                        <div class='scroll_button'>
                            <button class='scroll_prev'><span class='glyphicon glyphicon-chevron-left'></span></button>
                        </div>

                        <div class="scrolling-wrapper">
                            <?php foreach($post_scrolling_3 as $post){ ?>
                                <a href="<?php echo $post['post_link']; ?>">
                                    <div class="card">
                                        <?php echo $post['post_image']; ?>
                                        <div>
                                            <?php echo $post['post_title']; ?>
                                        </div>
                                    </div>
                                </a>
                            <?php } ?>

                            <div class="post_card_ver_mais">
                                <div>
                                    <a href="<?php echo '#' ?>">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/zoa-child-custom/img/saber-mais.svg" border="0" />
                                        Ver tudo!
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class='scroll_button'>
                            <button class='scroll_next'><span class='glyphicon glyphicon-chevron-right'></span></button>
                        </div>

                    </div>

                </div>

                <!-- Produtos -->
                <div class="produtos_instaarts_news">

                    <div> 
                        <h2>Nossos produtos</h2>
                    </div>

                    <div class="col-lg-3">
                        <img src="https://instaarts.com/wp-content/uploads/2018/10/metacrilato-7-mm-galeria-square-1.jpg" alt="">
                        <p>Metacrilato 7mm</p>
                        <br>
                        <?php echo do_shortcode('[pedido_link]'); ?>
                        
                    </div>

                    <div class="col-lg-3">
                    <img src="https://instaarts.com/wp-content/uploads/2018/10/metacrilato-5-mm-ACM-300x300-1.jpg" alt="">
                        <p>Metacrilato 5mm</p>
                        <br>
                        <?php echo do_shortcode('[pedido_link]'); ?>
                    </div>

                    <div class="col-lg-3">
                    <img src="https://instaarts.com/wp-content/uploads/2018/10/tour-eiffel-500x500.jpg" alt="">
                        <p>Photobloco</p>
                        <br>
                        <?php echo do_shortcode('[pedido_link_photobloco]'); ?>
                    </div>

                    <div class="col-lg-3">
                    <img src="https://instaarts.com/wp-content/uploads/2018/10/porta-retratos3x2-300x300.jpg" alt="">
                        <p>Porta-retratos</p>
                        <br>
                        <?php echo do_shortcode('[pedido_link_porta_retratos]'); ?>
                    </div>
                </div>
               <!-- fim Produtos --> 

       </div>
    <?php
}