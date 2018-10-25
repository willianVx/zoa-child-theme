<?php
    function modal_form(){
        ?>
            <!-- Modal -->
            <div class="modal fade" id="modal_subscribeform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close close_modal_form" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="modal_subscribe_form_ganhe">Ganhe</div>

                    <div class="modal_subscribeform_10">
                        <span>até</span>
                        R$ 100,00
                        <span>de desconto</span>
                    </div>

                    <div class="formulario_subscribe">
                        <p>Ganhe um cupom com até R$ 100,00 de desconto na próxima compra e ainda receba promoções especiais, basta fazer o cadastro</p>
                        <?php echo do_shortcode("[sibwp_form id=2]");?>
                    </div>

                </div>
            </div>
            </div>
            </div>
        <?php
    }