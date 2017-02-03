$('.datepicker-field').datepicker({
    format: 'yyyy-mm-dd',
    autoclose: true
});

$('a.print').on('click', function (e){
    e.preventDefault();
    if($(this).data("printarea") == "full"){
        window.print();
    }
});