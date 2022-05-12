

    $('.form-submit').submit(function (e){
        e.preventDefault();

        let name = $('.name').val();
        let email = $('.email').val();
        let number = $('.number').val();
        let check_in = $('.check_in').val();
        let check_out = $('.check_out').val();
        let people = $('.people').val();
        let children = $('.children').val();
        let room_type = $('.root_types').val();

        if(name.trim() == '' || check_in == '' || check_out == '' || email.trim() == '' || number.trim() == '' || number.length != 10 || date == '' || people.trim() == '' || children.trim() == '' || room_type == ''){
            alert('Please Fill Required Values')
        }else{
            let formData = new FormData();

            formData.append('name',name);
            formData.append('email',email);
            formData.append('number',number);
            formData.append('check_in',check_in);
            formData.append('check_out',check_out);
            formData.append('people',people);
            formData.append('children',children);
            formData.append('room_type',room_type);

            const url = window.location.origin+'/Vanvagdo-Reshort/RoomBook.php';

            $.ajax({
                type:'post',
                url:url,
                data:formData,
                contentType:false,
                processData:false,
                beforeSend:function (){
                    $('.sub-btn').attr('disabled',true);
                },
                success:function (res){
                    $('.sub-btn').attr('disabled',false);

                    if(res){
                        $('.mfp-container').click()
                        alert('Room Book Confirm');
                    }else{
                        alert('Something Went Wrong');
                    }
                }
            })
        }
    })

    $('#datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }
    });

    $('#datepicker2').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }

    });

    
    $('#datepicker3').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }

    });