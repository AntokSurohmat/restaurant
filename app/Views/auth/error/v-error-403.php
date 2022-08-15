<?= $this->extend('auth/layouts/default') ?>
<?= $this->section('stylesheets') ?>
<?= $this->endSection() ?>
<?= $this->section('content') ?>

<!-- Content -->
<!--Under Maintenance -->
<div class="container-xxl container-p-y">
    <div class="misc-wrapper">
        <h2 class="mb-2 mx-2">Under Maintenance!</h2>
        <p class="mb-4 mx-2">Sorry for the inconvenience but we're performing some maintenance at the moment</p>
        <a href="index.html" class="btn btn-primary">Back to home</a>
        <div class="mt-4">
            <img src="../assets/img/illustrations/girl-doing-yoga-light.png" alt="girl-doing-yoga-light" width="500" class="img-fluid" data-app-dark-img="illustrations/girl-doing-yoga-dark.png" data-app-light-img="illustrations/girl-doing-yoga-light.png" />
        </div>
    </div>
</div>
<!-- /Under Maintenance -->
<!-- / Content -->

<div class="buy-now">
    <a href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/" target="_blank" class="btn btn-danger btn-buy-now">Upgrade to Pro</a>
</div>


<?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<!-- <script type="text/javascript">
    $(document).ready(function() {

        // preventDefault to stay in modal when keycode 13
        $('#formAuthentication').keydown(function(event) {if (event.keyCode == 13) {event.preventDefault();return false;}});

        $('#email-ktp').focus();
        $('#email-ktp').keydown(function(event){if(event.keyCode == 13){$('#password').focus();}});
        $('#password').keydown(function(event){if(event.keyCode == 13){$('#submit-btn').focus();}});

        function clearform() {
            $('#formAuthentication')[0].reset();
            $("#email-ktp").empty();$("#email-ktp").removeClass('is-valid');$("#email-ktp").removeClass('is-invalid');
            $("#password").empty();$("#password").removeClass('is-valid');$("#password").removeClass('is-invalid');
        }

        $('#formAuthentication').on('submit', function(event) {
            event.preventDefault();
            var url = "<?= route_to('login-handler') ?>";
            // console.log(url);
            // console.log($(this).serialize());
            $.ajax({url: url,type: "POST",data: $(this).serialize(),dataType: "JSON",
                beforeSend: function() {
                    $('#submit-btn').html("<i class='fas fa-spinner fa-spin'></i>&ensp;Proses");$('#submit-btn').prop('disabled', true);
                },
                complete: function() {
                    $('#submit-btn').html("<i class='fas fa-save'></i>&ensp;Submit");$('#submit-btn').prop('disabled', false);
                },
                success: function(data) {
                    // console.log(data);
                    $('input[name=csrf_token_name]').val(data.csrf_token_name)
                    if (data.error) {
                        Object.keys(data.error).forEach((key, index) => {
                            $("#" + key).addClass('is-invalid');$("." + key + "ErrorForm").html(data.error[key]);
                            var element = $('#' + key);
                            element.closest('.form-control')
                            element.closest('.select2-hidden-accessible') //access select2 class
                            element.removeClass(data.error[key].length > 0 ? ' is-valid' : ' is-invalid').addClass(data.error[key].length > 0 ? 'is-invalid' : 'is-valid');
                        });
                    }

                    $('#alert-flash').removeClass('d-none').html(data.msg)    

                    // console.log(data.success);
                    if (data.success == true) {
                        clearform();let timerInterval
                        Swal.fire({
                            icon: 'success',title: 'Berhasil Login',
                            html: '<b>'+data.msg+ '</b><br>' +
                                'Otomatis diarahkan ke halaman Dashboard',
                            timer: 2000,timerProgressBar: true,
                            showConfirmButton: false,
                        }).then((result) => {
                            if (result.dismiss === Swal.DismissReason.timer) {
                                window.location.href = data.redirect;
                            }
                        })
                    } 
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });
            return false;
        })

    })
</script> -->
<?= $this->endSection() ?>