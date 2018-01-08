$(document).ready(function() {
    $("#navbar-auto-hidden").autoHidingNavbar();
    $(".button-mobile-menu").click(function(){
        $("#mobile-menu-list").animate({width: 'toggle'},200);
    });	
    $('.all-elements-tooltip').tooltip('hide');
    
    
    $('#modal-form-login form').submit(function(e) {
         e.preventDefault();
         var informacion=$('#modal-form-login form').serialize();
         var metodo=$('#modal-form-login form').attr('method');
         var peticion=$('#modal-form-login form').attr('action');
         
    });
 /*Funcion para enviar datos de formularios con ajax*/
    $('.Regform').submit(function(e){
        e.preventDefault();
        var data=$(this).serialize();
        var type=$(this).attr('method');
        var url=$(this).attr('action');
        var formType=$(this).attr('data-form');

        if(formType=="user"){
            $.ajax({
                type: type,
                url: url,
                data: data,
                beforeSend: function(){
                    $(".ResForm").html('Iniciando sesión<br><img src="assets/img/loading.gif" class="center-all-contens">');
                },
                error: function() {
                    $(".ResForm").html("Ha ocurrido un error en el sistema");
                },
                success: function (data) {
                    $(".ResForm").html(data);
                }
            });
            return false;

});
$(document).ready(function() {

    /* ======= Scrollspy ======= */
   $('body').scrollspy({ target: '#header', offset: 100});
    
    /* ======= ScrollTo ======= */
    $('.scrollto').on('click', function(e){
        
        //store hash
        var target = this.hash;
                
        e.preventDefault();
        
		$('body').scrollTo(target, 800, {offset: -60, 'axis':'y'});
		
	});
	
	/* ======= Fixed page nav when scrolled ======= */    
    $(window).on('scroll resize load', function() {
        
        $('#header').removeClass('fixed');
         
         var scrollTop = $(this).scrollTop();
         var topDistance = $('#header').offset().top;
         
         if ( (topDistance) > scrollTop ) {
            $('#header').removeClass('fixed');
            $('body').removeClass('sticky-page-nav');
         }
         else {
            $('#header').addClass('fixed');
            $('body').addClass('sticky-page-nav');
         }

    });
