jQuery(document).ready(function($){

    $('.logo').html('<img src="https://instaarts.com/wp-content/uploads/2018/10/Logo-Instaarts-64x20-2.png"/>');

    //traduz formulario de busca 
    var input_search_form = $('#theme-search-form').find('input');
    var span_search_form = $('#theme-search-form').find('span');

        input_search_form[0].placeholder = "Procurar..."
        span_search_form.html('pressione enter para pesquisar ou ESC para sair');
});