
/*--------loader script-----------*/
$(function(){
    var loading = $('#loadbar').hide();
    $(document)
    .ajaxStart(function () {
        loading.show();
    }).ajaxStop(function () {
        loading.hide();
    });
    
    var questionNo = 0;
    var correctCount = 1;
    var q = [
      {'Q':'Apakah penglihatan terasa kabur saat melihat sesuatu?', 'A':1,'C':['Iya','Tidak']},
      {'Q':'Apakah kedua mata terasa kabur?', 'A':1,'C':['Iya','Tidak']},
      {'Q':'Apakah penglihatan kabur muncul secara mendadak?', 'A':1,'C':['Iya','Tidak']},
      {'Q':'Apakah muncul kemerah-merahan pada mata?', 'A':1,'C':['Iya','Tidak']},
      {'Q':'Apakah saat melihat sesuatu terasa seperti tertutup kabut?', 'A':1,'C':['Iya','Tidak']},
      {'Q':'Apakah saat melihat sesuatu seringkali terasa silau?', 'A':1,'C':['Iya','Tidak']},
     ];

    $(document.body).on('click',"button.btn",function (e) {
    //ripple start
        // var parent, ink, d, x, y;       
        //  parent = $(this);
        // if(parent.find(".ink").length == 0)
        //     parent.prepend("<span class='ink'></span>");
            
        // ink = parent.find(".ink");
        // ink.removeClass("animate");
        
        // if(!ink.height() && !ink.width())
        // {
        //     d = Math.max(parent.outerWidth(), parent.outerHeight());
        //     ink.css({height: "100px", width: "100px"});
        // }
        
        //  x = e.pageX - parent.offset().left - ink.width()/2;
        // y = e.pageY - parent.offset().top - ink.height()/2;
        
        // ink.css({top: y+'px', left: x+'px'}).addClass("animate");
    //ripple end

        var choice = $(this).parent().find('input:radio').val();
        // console.log("choice : ");
        // console.log(choice);
        var anscheck =  $(this).checking(questionNo, choice);//$( "#answer" ).html(  );      
        q[questionNo].UC = choice;
        // if(anscheck){
        //     correctCount++;
        //     q[questionNo].result = "Correct";
        // } else {
        //     q[questionNo].result = "Incorrect";        
        // }
        // console.log("CorrectCount:" + correctCount);
        setTimeout(function(){
            $('#loadbar').show();
            $('#quiz').fadeOut();
            questionNo++;
            let prediksi;
            let nasehat;
            let label = "Nasehat Medis:";
            if(correctCount==1){
                prediksi = "Katarak";
                nasehat = "Mohon maaf mata Anda kemungkinan terdapat katarak, silahkan periksakan mata Anda lebih lanjut.";
            }
            else{
                prediksi = "Bukan Katarak";
                nasehat = "Selamat mata Anda bebas dari katarak, tetap jaga kesehatan mata. Lakukan pemeriksaan rutin untuk mencegah risiko.";
            }
            if((questionNo + 1) > q.length){
                alert("Anamnesis selesai, klik ok untuk melihat hasilnya!");
                $('button.btn').unbind('click');
                setTimeout(function(){
                    var toAppend = '';
                    $.each(q, function(i, a){
                        toAppend += '<tr>'
                        toAppend += '<td>'+(i+1)+'</td>';
                        toAppend += '<td>'+a.A+'</td>';
                        toAppend += '<td>'+a.UC+'</td>';
                        toAppend += '<td>'+a.result+'</td>';
                        toAppend += '</tr>'
                    });
                    $('#quizResult').html(toAppend);
                    $('#totalCorrect').html("Prediksi: " + prediksi);
                    $('#totalCorrect2').html(label);
                    $('#totalCorrect3').html(nasehat);
                    $('#quizResult').show();
                    $('#loadbar').fadeOut();
                    $('#result-of-question').show();
                    // $('#graph-result').show();
                    // chartMake();
                }, 1000);
            } else {
                $('#qid').html(questionNo + 1);
                $('input:radio').prop('checked', false);
                setTimeout(function(){
                    $('#quiz').show();
                    $('#loadbar').fadeOut();
                }, 1500);
                $('#question').html(q[questionNo].Q);
                $($('#f-option').parent().find('label')).html(q[questionNo].C[0]);
                $($('#s-option').parent().find('label')).html(q[questionNo].C[1]);
            }
        }, 1000);
    });

    
    $.fn.checking = function(qstn, ck) {
        console.log("ck : ");
        console.log(ck);
        console.log("questionNo : ");
        console.log(questionNo);
        if (ck == 2){
            if(questionNo==2)
                correctCount = correctCount * 1;
            else if(questionNo==3)
                correctCount = correctCount * 1;
            else if(questionNo==4)
                correctCount = correctCount * 0;
            return false;}
        else{ 
            if(questionNo==2)
                correctCount = correctCount * 0;
            else if(questionNo==3)
                correctCount = correctCount * 0;
            else if(questionNo==4)
                correctCount = correctCount * 1;
            return true;}

    }; 

// chartMake();
    function chartMake(){

         var chart = AmCharts.makeChart("chartdiv",
            {
            "type": "serial",
            "theme": "dark",
            "dataProvider": [{
                "name": "Correct",
                "points": correctCount,
                "color": "#00FF00",
                "bullet": "http://i2.wp.com/img2.wikia.nocookie.net/__cb20131006005440/strategy-empires/images/8/8e/Check_mark_green.png?w=250"
            }, {
                "name": "Incorrect",
                "points":q.length-correctCount,
                "color": "red",
                "bullet": "http://4vector.com/i/free-vector-x-wrong-cross-no-clip-art_103115_X_Wrong_Cross_No_clip_art_medium.png"
            }],
            "valueAxes": [{
                "maximum": q.length,
                "minimum": 0,
                "axisAlpha": 0,
                "dashLength": 4,
                "position": "left"
            }],
            "startDuration": 1,
            "graphs": [{
                "balloonText": "<span style='font-size:13px;'>[[category]]: <b>[[value]]</b></span>",
                "bulletOffset": 10,
                "bulletSize": 52,
                "colorField": "color",
                "cornerRadiusTop": 8,
                "customBulletField": "bullet",
                "fillAlphas": 0.8,
                "lineAlpha": 0,
                "type": "column",
                "valueField": "points"
            }],
            "marginTop": 0,
            "marginRight": 0,
            "marginLeft": 0,
            "marginBottom": 0,
            "autoMargins": false,
            "categoryField": "name",
            "categoryAxis": {
                "axisAlpha": 0,
                "gridAlpha": 0,
                "inside": true,
                "tickLength": 0
            }
        });
    }
}); 
