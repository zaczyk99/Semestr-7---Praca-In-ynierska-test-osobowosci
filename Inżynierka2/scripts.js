var questions = $('.question').length; 
var total = 0;  
var is = 0;
var ib = 0;

var avg = 0;
var myQuestions = $('section.q-n-a');
var currQ = 0;



var myImage = new Image(250, 400);
myImage.src = 'test1.PNG';



shuffle(myQuestions);


myQuestions.each(function (index) {
    var myAnswers = $(this).find('.answer');
    shuffle(myAnswers);
    $(this).find('.answers').html(myAnswers);
    $(this).attr('id', index + 1);
    if (index == 0) {
        
        $(this).find('.previous').remove();
    }

})

$('#quiz-area').html(myQuestions);

function showQ() {
    $('section.q-n-a').hide();
    currQ++;
    if ($('#' + currQ).length > 0) {
        $('#' + currQ).fadeIn(200);
    } else {
        $('.finish').fadeIn();
    }
}
showQ();

$('.previous, .next, .missed').click(function () {
    if ($(this).hasClass('previous')) {
        currQ -= 2;
    } else if ($(this).hasClass('missed')) {
        currQ = 0;
        $('.response, .finish, .missed').hide();

    }
    showQ();
})




function shuffle(array) {

    for (let i = array.length - 1; i > 0; i--) {
        let j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
}






$('.answer').on('click', function () {

    if ($(this).parent().find('.selected').length > 0) {
        total -= $(this).parent().find('.selected').data('value');
        is -= $(this).parent().find('.selected').data('is');
        ib -= $(this).parent().find('.selected').data('ib');
        $(this).parent().find('.selected').removeClass('selected');
    }





    $(this).addClass('selected');
    total += $(this).data('value');
    is += $(this).data('is');
    ib += $(this).data('ib');

    console.log(is);



})




$('.finish').on('click', function () {

    if ($('.selected').length === questions) { 
       
        var message = " ";



        if (avg < 1.5) {
            message = 'Twoim typem jest A';

           
        } else if (avg < 2.5) {
            message = 'Twoim typem jest B';
        } else if (avg < 3.5) {
            message = 'Twoim typem jest C';
        } else if (avg <4.5) {

            message = 'Twoim typem jest D';
        }



        $('#quiz-area, .finish').hide();
    } else {
        message = "Omino³eœ pytanie";
        $('.missed').show();
    }

    $('.response p').text(message)
    $('.response').show();



   
})




