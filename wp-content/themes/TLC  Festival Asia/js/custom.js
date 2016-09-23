jQuery(document).ready(function($){
                        
    var formData = "";

    var step = 1;
    var step_count = $('.step').length;

    $('.step').hide();
    $('.step-1').show();

    checkButtons(step);


    $('#btn-next').click(function(){

        if(step == 1){

            $('#registration-form').submit();

            
        }else if(step == 2){

             $('#workshop-form').submit();
        }

        console.log(formData);
    })

    $('#btn-prev').click(function(){

        
        step--;
        $('.step').fadeOut('fast');
        $('.step-' + step).toggle('fast');

        checkButtons(step);
    })



    /*

    Fonm buttons
    */
    function checkButtons(step){

        //Next Button
        if(( step + 1) > $('.step').length){

            $('#btn-next').attr('disabled', true);
        
        }else{

            $('#btn-next').attr('disabled', false);

        }

        //Prev Button
        if(( step - 1 ) < 1){

            // $('#btn-prev').attr('disabled', true);
            $('#btn-prev').css('display', 'none');

        
        }else{

            // $('#btn-prev').attr('disabled', false);
            $('#btn-prev').css('display', 'initial');


        }

        //Submit Button
        if( step  = $('.step').length){

             $('#btn-submit').attr('disabled', true);


        }else{

             $('#btn-submit').attr('disabled', false);

        }
    }

    
    $('#registration-form').submit(function(){

        event.preventDefault();

        //validate fields
        fail = false;
        fail_log = '';
        $( this ).find( 'select, textarea, input , checkbox' ).each(function(){
            if( ! $( this ).prop( 'required' )){

            } else {
                if ( ! $( this ).val() ) {
                    fail = true;
                    name = $( this ).attr( 'name' );
                    fail_log += name + " is required \n";
                }

            }
        });

        //submit if fail never got set to true
        if ( ! fail ) {
            //process form here.

            formData = $('#registration-form').serialize();

            step++;
            $('.step').fadeOut('fast');
            $('.step-' + step).toggle('fast');

            $('.nav-tabs li:eq(' + ( step - 1) + ')' ).addClass('active');

            checkButtons(step);
            return false;

        } else {

            alert( fail_log );
            return false;
        }
    });


    $('#workshop-form').submit(function(){

        event.preventDefault();

        //validate fields
        fail = false;
        fail_log = '';
        $( this ).find( 'select, textarea, input , checkbox' ).each(function(){
            if( ! $( this ).prop( 'required' )){

            } else {
                if ( ! $( this ).val() ) {
                    fail = true;
                    name = $( this ).attr( 'name' );
                    fail_log += name + " is required \n";
                }

            }
        });

        //submit if fail never got set to true
        if ( ! fail ) {
            //process form here.

            formData += '&' + $('#workshop-form').serialize();

            displaySummary();

            step++;
            $('.step').fadeOut('fast');
            $('.step-' + step).toggle('fast');

            $('.nav-tabs li a#step'+ step ).find('li').addClass('active');

            checkButtons(step);
            return false;

        } else {

            alert( fail_log );
            return false;
        }
    });

    
    function displaySummary(){

        var summary = "";

        summary += $('#firstName').val() + " " + $('#lastName').val() + "\n";
        summary += "Gender :" + $('#gender').val() + "\n";

        $('p#summary').html(summary);
    }

});