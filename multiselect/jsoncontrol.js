$(document).ready(function(){
    $.getJSON("getBrand.php",success=function(data){
        var options="";
        for(var i=0;i<data.length;i++){
            options+="<option value='"+data[i]+"'>"+data[i]+"</option>";
        }
        $('#selectMake').append(options);
        $('#selectMake').change();
    });

    $('#selectMake').change(function() {
        var options="<option value='0'>-เลือกข้อมูล-</option>\n";
        $.getJSON("getModels.php?make=" + $(this).val(),success=function(data){
            for(var i=0;i<data.length;i++){
                options+="<option value='"+data[i]+"'>"+data[i]+"</option>";
            }
            $('#selectModel').html("");
            $('#selectModel').append(options);
        });

    });


});