$(window).on('load', function(){
    const id = $('body').attr('data-id');
    console.log(id);

    $('#employee').removeClass('unmarked');
    $('#dashboard').addClass('unmarked');

    $.ajax({
        url: '../src/library/editEmployee.php',
        type: 'post',
        data: {id},
        success: function(data) {
            let employee = JSON.parse(data);
            console.log(employee);
            $('body').attr('id', `${employee.id}`);
            $('.name-input').val(employee.name);
            $('.lastName-input').val(employee.lastName);
            $('.email-input').val(employee.email);
            $('.gender-input').val(employee.gender);
            $('.city-input').val(employee.city);
            $('.streetAddress-input').val(employee.streetAddress);
            $('.age-input').val(employee.age);
            $('.state-input').val(employee.state);
            $('.postalCode-input').val(employee.postalCode);
            $('.phoneNumber-input').val(employee.phoneNumber);
        }
    })

    $('.employee-form').submit(function(e){
        e.preventDefault();
        // We get the form data
        let formData = {};
        let id = $('body').attr('id');
        let name = $('.name-input', this).val();
        let lastName = $('.lastName-input', this).val();
        let email = $('.email-input', this).val();
        let gender = $('.gender-input', this).val();
        let city = $('.city-input', this).val();
        let streetAddress = $('.streetAddress-input', this).val();
        let age = $('.age-input', this).val();
        let state = $('.state-input', this).val();
        let postalCode = $('.postalCode-input', this).val();
        let phoneNumber = $('.phoneNumber-input', this).val();


        formData = {id, name, lastName, email,
                    gender, city ,streetAddress,
                    age, state,
                    postalCode, phoneNumber};

        console.log(formData);
        let dataId = $('body').attr('data-id');
        $.ajax({
            url: '../src/library/uploadEmployee.php',
            data: formData,
            type: 'POST',
            success: function (data) {
                $('.info-edit').show()
                setTimeout(function() {window.location = './dashboard.php'}, 2000);
                console.log(data);
            }
        })
    });
    $(document).on('click', '#employee-form_return', (function() {
        window.location = './dashboard.php';
    }))
})
