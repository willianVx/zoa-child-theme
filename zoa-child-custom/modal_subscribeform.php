<?php
    function modal_form(){
        ?>
            <!-- Modal -->
            <div class="modal fade" id="modal_subscribeform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Aproveite seu cupom</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="modal_subscribeform_10">
                        <span>Até </span>
                        R$ 100,00
                        <span>de desconto</span>
                    </div>
                        <br>
                            <hr>
                        <br>
                    <p>Ganhe um cupom com até R$ 100,00 de desconto na próxima compra e ainda receba promoções especiais, basta fazer o cadastro</p>
                    <?php echo do_shortcode("[sibwp_form id=2]");?>
                </div>
            </div>
            </div>
            </div>
        <?php
    }