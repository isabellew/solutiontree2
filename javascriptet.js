
           $(document).ready(function() {

        /*$('#container').zoomTo({duration:1000, targetsize:1.0});*/
        
        $('#label1').click(function(evt) {
            evt.stopPropagation();
        $(this).zoomTo({duration:1000, targetsize:0.3});
        $("#label1").hide();
        $(".button").show();
        $("#text3").show();
        $('.label').hide();
                
            });
        
        $('#label2').click(function(evt) {
            evt.stopPropagation();
        $(this).zoomTo({duration:1000, targetsize:0.4});
        $("#label2").hide();
        $(".button").show();
        $("#text1").show();
        $('.label').hide();
      
            });

         $('#label3').click(function(evt) {
            evt.stopPropagation();
        $(this).zoomTo({duration:1000, targetsize:0.4});
        $('#label3').hide();
        $('#button3').show();
        $('#text5').show();
        $('.label').hide();
        

    });

         $('#label4').click(function(evt) {
            evt.stopPropagation();
        $(this).zoomTo({duration:1000, targetsize:0.4});
        $('#label4').hide();
        $('#button4').show();
        $('#text6').show();
        $('.label').hide();
         });

         $('#label5').click(function(evt) {
            evt.stopPropagation();
        $(this).zoomTo({duration:1000, targetsize:0.4});
        $('#label5').hide();
        $('#text7').show();
        $('#button5').show();
        $('.label').hide();
        
         });

           $('#label6').click(function(evt) {
            evt.stopPropagation();
        $(this).zoomTo({duration:1000, targetsize:0.4});
        $('#label6').hide();
        $('#text8').show();
        $('#button6').show();
        $('.label').hide();
        
         });

        $('#problembutton').click(function() {
            $('#share').toggle();
            $('#solution').hide();
        });

        $('#solutionbutton').click(function() {
            $('#solution').toggle();
            $('#share').hide();
        });

        $('#About').click(function() {
            $('#aboutinfo').toggle();
            $('#solution').hide();
            $('#share').hide();
        });

      

             $("#button1").click(function() {
                $("#text3").hide();
                $('#text4').show();
                
             });

             $("#button8").click(function() {
                $("#text4").hide();
                $('#text3').show();
                
             });



              $("#button2").click(function() {
                $("#text1").hide();
                $('#text2').show();
                
             });

              $("#button7").click(function() {
                $("#text2").hide();
                $('#text1').show();
                
             });


         $('.boxclose').click(function() {
            $('#container').zoomTo({duration:1000, targetsize:1.0});
             $(".label").show();
        $(".infotext1").hide();
        $(".infotext2").hide();
        $('.infotext3').hide();
        $('.infotext4').hide();
        $('.infotext5').hide();
        $('.infotext6').hide();
        $('.button').hide();
    });
         });
                


       







$(function() {
    $('.sharebutton').click(function(){
        $('#body').fadeIn(200,function(){
            $('.windows').animate({'top':'-50px'},200);
        });


        return false;
    });
    $('.boxclose').click(function(){
        $('.windows').animate({'top':'-200px'},500,function(){
            $('.windows').fadeOut('fast');
        });
    });
 
});





