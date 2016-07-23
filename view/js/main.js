$(document).ready(function(){

    $(".menu-mobile").click(function(){
        $('.menu').slideToggle();
    });


  $('.banner .content').cycle({
    fx: 'cover'
});

    $(".civil .fa-plus").click(function(){
        $(".desc-civil").slideToggle();
        $(".civil .fa-plus").toggleClass("fa-minus")
    });

    $(".tributario .fa-plus").click(function(){
        $(".desc-tributario").slideToggle();
        $(".tributario .fa-plus").toggleClass("fa-minus")
    });

    $(".eleitoral .fa-plus").click(function(){
        $(".desc-eleitoral").slideToggle();
        $(".eleitoral .fa-plus").toggleClass("fa-minus")
    });

    $(".empresarial .fa-plus").click(function(){
        $(".desc-empresarial").slideToggle();
        $(".empresarial .fa-plus").toggleClass("fa-minus")
    });

    $(".admnistrativo .fa-plus").click(function(){
        $(".desc-admnistrativo").slideToggle();
        $(".admnistrativo .fa-plus").toggleClass("fa-minus")
    });

    $('.scroll').click(function(event){
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 1400);
    });

});
