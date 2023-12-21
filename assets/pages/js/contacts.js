$(document).ready(function(){

    $('.date1234').datetimepicker({
        format: 'MM/DD/YYYY',
        icons: {
            time: 'fa fa-clock-o',
            date: 'fa fa-calendar',
            up: 'fa fa-chevron-up',
            down: 'fa fa-chevron-down',
            previous: 'fa fa-chevron-left',
            next: 'fa fa-chevron-right',
            today: 'glyphicon glyphicon-screenshot',
            clear: 'fa fa-trash',
            close: 'fa fa-times'
        }
    });






    $(document).on('change', '#status_id', function(){


        var $this = $(this);

        var status = $this.val();

        $('.sec_1').hide();
        $('.sec_2').hide();
        $('.sec_3').hide();

        if(status == 2){
            $('.item_final').show();
            $('#final_status').val('');
        }else{
            $('.item_final').hide();
        }


    });

    $(document).on('change', '#final_status', function(){


        var $this = $(this);

        var status = $this.val();


        if(status == 1){
            $('.sec_1').show();
            $('.sec_2').hide();
            $('.sec_3').hide();
        }else if(status == 2){
            $('.sec_1').hide();
            $('.sec_2').show();
            $('.sec_3').hide();
        }else if(status == 3 || status == 4){
            $('.sec_1').hide();
            $('.sec_2').hide();
            $('.sec_3').show();
        }else{
            $('.sec_1').hide();
            $('.sec_2').hide();
            $('.sec_3').hide();
        }



    });

    $(document).on('click', '#change_status', function(){


        var $this = $(this);
        var $contact_id = $this.data('contactid');
        var status = $this.val();



        $('#hidden_contact').val($contact_id);

        var image_url = site_url+'files/media/loading_gif.gif';


        $('#myModal').modal();

    });

    $(document).on('click', '#activity', function(){


        var $this = $(this);
        var $contact_id = $this.data('contactid');

        var image_url = site_url+'files/media/loading_gif.gif';
        $('#myModalActivity').modal();

        var $url = site_url+'leads/getActivity';

        $.ajax({
            url: $url,
            type: 'POST',
            async: false,
            dataType:'json',
            data: {contact_ids:$contact_id},
            success: function (data) {

                $('#activity_content').html(data.html);

            },
            error: function(data){
                console.log( data );
            }
        });

    });


    $(document).on('click','#status_save', function(e){

        e.preventDefault();


        var err = false;


        var form = $('#form_status')[0];

        var formData = new FormData(form);

        var $url = site_url+'leads/update_status';

        var $status_id = $('#status_id').val();
        var $lead_id = $('#hidden_contact').val();

        if ( $status_id != '' ) {


            var final_status = $('#final_status').val();

            if( final_status == 1 ) {

                $( ".required_field_status" ).each(function() {

                    if($(this).val() == '' ){

                        err = true;

                        $(this).closest( ".form-group").addClass('has-error');
                        $(this).next().html('This field is required');
                    }else{
                        $(this).next().html('');
                        $(this).closest( ".form-group").removeClass('has-error');
                    }

                });

            }


            if( $status_id == 2 ) {

                $( ".required_field_final" ).each(function() {

                    if($(this).val() == '' ){

                        err = true;

                        $(this).closest( ".form-group").addClass('has-error');
                        $(this).next().html('This field is required');
                    }else{
                        $(this).next().html('');
                        $(this).closest( ".form-group").removeClass('has-error');
                    }

                });

            }


            if ( !err  ) {


                $('#status_save').attr('disabled', true);
                $.ajax({
                    url: $url,
                    type: 'POST',
                    enctype: 'multipart/form-data',
                    processData: false,  // Important!
                    contentType: false,
                    data: formData,
                    success: function (data) {

                        $('#status_'+$lead_id).html(data.status_name);
                        if(data.status_id == 2){
                            $('#row_'+$lead_id).remove();
                        }

                        $('#myModal').modal('hide');

//                        window.location.replace(base_url+'leads');

                    },
                    error: function(data){
                        console.log( data );
                    }
                });
            }
        }else{

            alert('Select a status');
        }

    });


    $(document).on('click', '#add_followup', function(){

        var $this = $(this);
        var $contact_id = $this.data('contactid');

        $('#hidden_contact_follow').val($contact_id);

        var image_url = site_url+'files/media/loading_gif.gif';

        $('#myModalFollow').modal();

        var dateNow = new Date();
        var new_date = moment(dateNow).hour(11).minute(00);
        $('#datetimepicker2').datetimepicker({
            defaultDate:new_date,

        });


    });

    $(document).on('click','#follow_save', function(e){

        e.preventDefault();

        var err = false;

        $( ".required_field" ).each(function() {

            if($(this).val() == '' ){
                err = true;

                $(this).closest( ".form-group").addClass('has-error');
                $(this).next().html('This field is required');
            }else{
                $(this).next().html('');
                $(this).closest( ".form-group").removeClass('has-error');
            }

        });


        var form = $('#form_follow')[0];

        var formData = new FormData(form);

        var $url = site_url+'leads/add_follow';

        if ( !err  ) {

            $('#follow_save').attr('disabled', true);
            $.ajax({
                url: $url,
                type: 'POST',
                enctype: 'multipart/form-data',
                processData: false,  // Important!
                contentType: false,
                data: formData,
                success: function (data) {

                    $('#follw_add_success').show();

                    $('#myModalFollow').modal('hide');

//                    window.location.replace(base_url+'leads');

                },
                error: function(data){
                    console.log( data );
                }
            });
        }

    });




    $(document).on('click', '#view', function(){


        var $this = $(this);
        var $contact_id = $this.data('contactid');

        var image_url = site_url+'files/media/loading_gif.gif';
        $('#myModalView').modal();

        var $url = site_url+'leads/getView';

        $.ajax({
            url: $url,
            type: 'POST',
            async: false,
            dataType:'json',
            data: {contact_ids:$contact_id},
            success: function (data) {

                $('#lead_content').html(data.html);

            },
            error: function(data){
                console.log( data );
            }
        });



    });



    $(document).on('click', '#con_del', function(){

        if(!confirm('Are you sure you want to delete this forever?')){
            return false;
        }

    });

});