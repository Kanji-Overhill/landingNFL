$( document ).ready(function() {
    $("#a1").click(function(e) {
        e.preventDefault();
        $(".buttons").addClass("d-none");
        $(".asesor").removeClass("d-none");
    });
    $("#c1").click(function(e) {
        e.preventDefault();
        $(".buttons").addClass("d-none");
        $(".cliente").removeClass("d-none");
    });
    $(".next_1").click(function(e){
        e.preventDefault();
        if(!$(".required_1").val() | !$(".required_2").val() | !$(".required_3").val() | !$(".required_4").val() | !$(".required_5").val() | !$(".required_6").val()) {
            $('.alert').removeClass('d-none');
        }else{
            $('.alert').addClass('d-none');
            $('.form-group').addClass('d-none');
            $('.confirmation').removeClass('d-none');
        }
    });
    $(".next_2").click(function(e){
        e.preventDefault();
        if(!$(".required_11").val() | !$(".required_12").val() | !$(".required_13").val() | !$(".required_14").val() | !$(".required_15").val() | !$(".required_16").val()) {
            $('.alert').removeClass('d-none');
        }else{
            $('.alert').addClass('d-none');
            $('.form-group').addClass('d-none');
            $('.confirmation').removeClass('d-none');
        }
    });
    $("form").submit(function(e){
       $(".alert-success").removeClass("d-none");
    });
    
    $(".link").click(function(e){
        e.preventDefault();
        $('.form-group').removeClass('d-none');
        $('.confirmation').addClass('d-none');
        $('.monto').removeClass('d-none');
        $('.tipo').addClass('d-none');
    });
    $(document).on('click', 'a[data="c-seguros"]', function(e) {
        e.preventDefault();
        $('.monto').addClass('d-none');
        $('.tipo').removeClass('d-none');
    });
    $(document).on('click', 'a[data="a-seguros"]', function(e) {
        e.preventDefault();
        $('.monto').addClass('d-none');
        $('.tipo').removeClass('d-none');
    });
    $('.modal-confirmation').modal('show');


    var sliders = document.querySelectorAll('.glide');

    for (var i = 0; i < sliders.length; i++) {
    var glide = new Glide(sliders[i], {
        gap: 15,
    });
    
    glide.mount();
    }

});