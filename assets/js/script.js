/**
 * Created by Mzapeka on 29.08.15.
 */


/*$(document).ready(function(){
    $("#sendForm").click(send)
        //console.log($("#sendForm"))
})*/

$(document).ready(function(){
    $('#question').submit(function(){
        $.post(
            "http://pb/start.php",
            $(this).serialize(),
            function (msg){
                var queryForm = $("#question").hide();
                    $("<div class='message'><div class='progress'>" +
                        "<div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='0' aria-valuemin='0' aria-valuemax='100' style='width: 0%'></div></div></div>").appendTo("#queryF");
                    animate(function(timePassed){
                        $(".progress-bar").width( timePassed/10 +"%" );
                    }, 1000);
                    //Задержка вывода ответа сервера
                    setTimeout(function(){
                        $("<h4>"+msg+"</h4>").appendTo(".message")
                    }, 2000)
                    //Задержка вывода формы вопроса
                    setTimeout( function(){
                        $(".message").remove()
                        queryForm.show();
                        $('input:text, textarea').val("");
                    }, 6000);
            });
        return false;
    });
});




/*

function send () {
    var name = $("#name").val();
    var phone = $("#phone").val();
    var text = $("#sd").val();
    if (checkForm()){
        $.post(
            "http://pb/start.php",
            {
                userName : name,
                userPhone : phone,
                userText : text
            },
            function(msg){
                var queryForm = $("#question").detach();
                $("<div class='message'><div class='progress'>" +
                    "<div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='0' aria-valuemin='0' aria-valuemax='100' style='width: 0%'></div></div></div>").appendTo("#queryF");

                animate(function(timePassed){
                    $(".progress-bar").width( timePassed/10 +"%" );
                }, 1000)
        //Задержка вывода ответа сервера
                setTimeout(function(){
                    $("<h4>"+msg+"</h4>").appendTo(".message")
                }, 2000)
        //Задержка вывода формы вопроса
                setTimeout( function(){
                    $(".message").remove()
                    queryForm.appendTo("#queryF");
*/
/*
                    console.log($(":input"))
*//*
 // очистка элементов формы
                    $("input:text").val("");
                    $("textarea").val("");
                }, 6000)
            }
        );
    }

}
*/
/*

function checkForm(){
    var error = 0;
    var field = new Array("#name", "#phone");//поля обязательные

            for(var i=0;i<field.length;i++){ // если поле присутствует в списке обязательных

                if(!$(field[i]).val()){// если в поле пустое
                    $(field[i]+"1").addClass("has-warning");// устанавливаем рамку Warning
                    $(field[i]+"1").tooltip({ //устанавливаем маркер на незаполненом поле
                        animation: true,
                        title : "Заполните это поле",
                        placement : 'left'
                    }).tooltip('show')
                    error = 1;// определяем индекс ошибки
                }
                else {
                    $(field[i]+"1").removeClass("has-warning");// устанавливаем нормальную рамку
                }
            }

        if(error==0){
            return true;
        }
        else{
*/
/*
            $('#sd').tooltip('show');
            if(error==1) var err_text = "Не все обязательные поля заполнены!";
            alert(err_text);
*//*

            return false; //если в форме встретились ошибки , не  позволяем отослать данные на сервер.
        }

}
*/

function animate(draw, duration){
    var start = performance.now();

    requestAnimationFrame(function animate(time) {
        // определить, сколько прошло времени с начала анимации
        var timePassed = time - start;

        // возможно небольшое превышение времени, в этом случае зафиксировать конец
        if (timePassed > duration) timePassed = duration;

        // нарисовать состояние анимации в момент timePassed
        draw(timePassed);

        // если время анимации не закончилось - запланировать ещё кадр
        if (timePassed < duration) {
            requestAnimationFrame(animate);
        }

    });
}
