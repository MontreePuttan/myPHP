$(document).ready(function(){

    $('.edit-customer').click(function(){

        //get data form edit btn
        var id = $(this).attr('data-id');
        var name = $(this).attr('data-name');
        var idcar = $(this).attr('data-idcar');

        //set value to modal
        $('#id').val(id);
        $('#name').val(name);
        $('#idcar').val(idcar);


        //open modal
        $('#myModal').modal('show');
    });

});