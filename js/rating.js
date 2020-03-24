/* set current status on hover */
$('.rating-main_input label').hover(
    function(){
        $(this).prevAll().addClass('active');
        $(this).addClass('active');
    },
    function(){
        $(this).prevAll().removeClass('active');
        $(this).removeClass('active');
    }
);

/* set current rating */
$('.rating-main_input label').on('click', function(){
    $(this).siblings().removeClass('current');
    $(this).prevAll().addClass('current');
    $(this).addClass('current');
});

/* image delite */

$(document).on('click', '.file-delet', function(){
    let parent = $(this).closest('.rating-files_image');
    $(this).remove();
    parent.find('img').css('display','none').remove();
    parent.find('input[type=file]').val('');
});

/* images previewer */
$('.rating-files_image input[type=file]').change(function(evt){
    var file = evt.target.files[0];
    that = $(this).closest('.rating-files_image');

    $(this).closest('.rating-files_image').append('<div class="file-delet"></div>');

    if (!file.type.match('image.*')) {
        return false;
    }

    var reader = new FileReader();
    reader.onload = (function(theFile) {
        return function(e) {
            that.append('<img class="top" src="'+e.target.result+'" />');
        };
    })(file);
    reader.readAsDataURL(file);
});

/* form serealize */
$('.form_rating_submit').on('click', function(e){

    e.stopPropagation();
    e.preventDefault();

    var form = $(this).closest('form');
    var data = new FormData(form[0]);
    var inputs = form.find('input').add('textarea', form.get(0));
    var validate = true;

    inputs.each(function(){
        let value = $(this).val();
        if($(this).attr('required') == 'required' && value.length == 0) {
            validate = false;
            $(this).addClass('error');
        }
    });

    if (!validate) return;

    $.ajax({
        url: '/local/ajax/rating-add.php',
        data: data,
        type:'post',
        processData: false,
        contentType: false,
        dataType: 'JSON',
        success:function(data){
            $('#rating-success-button').click();
            $('#rating-success input[name=element]').val(data.id);
        }
    });

});

/* remove class error for inputs */
$('.rating input.error').on('click', function(){
    $(this).removeClass('error');
});