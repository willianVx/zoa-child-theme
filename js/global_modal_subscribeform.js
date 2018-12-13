jQuery(document).ready(function($){
    if (typeof(Storage) !== "undefined") {
        // Code for localStorage/sessionStorage.
        modal_local_storage();
    } else {
        // Sorry! No Web Storage support..
        console.log('Sorry! No Web Storage support..');
    }
    //armazena estado do modal / true para ainda não foi mostrado e false para já mostrado
    function modal_local_storage(){
        if (sessionStorage.getItem("modal_subscribeform")) {
            return;
        }
        else{
            setTimeout( function(){
                $('#modal_subscribeform').modal('show');
            }, 10000);
        }
        sessionStorage.setItem("modal_subscribeform", true);
    }
});