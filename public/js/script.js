$('.datepicker-field').datepicker({
    format: 'yyyy-mm-dd',
    autoclose: true,
    weekStart: 6,
    todayHighlight: true
});

$('a.print').on('click', function (e){
    e.preventDefault();
    if($(this).data("printarea") == "full"){
        window.print();
    }else if($(this).data("printarea") == "worker"){
        $('.worker').removeClass("hidden-print").addClass('visible-print-block');
        window.print();
        $('.worker').addClass("hidden-print").removeClass('visible-print-block');
    }else if($(this).data("printarea") == "company"){
        $('.company').removeClass("hidden-print").addClass('visible-print-block');
        window.print();
        $('.company').addClass("hidden-print").removeClass('visible-print-block');
    }
});