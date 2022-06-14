<?= $this->extend('admin/layouts/default') ?>
<?= $this->section('content') ?>

<div class="content-overlay"></div>
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title"><?= $title ?></h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/users') ?>">Pengguna</a>
                        </li>
                        <li class="breadcrumb-item active"><?= $title ?>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- <div class="content-header-right col-md-6 col-12">
            <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                <button class="btn btn-info round dropdown-toggle dropdown-menu-right box-shadow-2 px-2 mb-1" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ft-settings icon-left"></i> Settings</button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="javascript:void(0)" >Cards</a><a class="dropdown-item" href="component-buttons-extended.html">Buttons</a></div>
            </div>
        </div> -->
    </div>
    <div class="content-body">
        <!-- users edit start -->
        <section class="users-edit">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-form">Project Info</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                        <li class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Reload Page">
                                <a href="javascript:void(0)" id="reload-btn" data-action="reload"><i class="ft-rotate-cw text-white"></i></a>
                            </li>
                            <li class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="top" title="maximize Page">
                                <a href="javascript:void(0)" data-action="expand"><i class="ft-maximize text-white"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <div class="card-text">
                            <p>This is the most basic and default form having form sections. To add form section use <code>.form-section</code> class with any heading tags. This form has the buttons on the bottom left corner which is the default position.</p>
                        </div>
                        <form id="addedit-form" class="form" novalidate>
                            <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                            <input type="hidden" id="method" value="<?= $method ?>" />
                            <div class="form-body">
                                <h4 class="form-section"><i class="ft-user"></i> Account</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="usernameUserForm">Username</label>
                                            <input type="text" id="usernameUserForm" class="form-control" placeholder="Username" name="usernameUserEditForm">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="namaUserForm">Nama</label>
                                            <input type="text" id="namaUserForm" class="form-control" placeholder="Nama" name="namaUserEditForm">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="roleUserForm">Role</label>
                                            <select id="roleUserForm" name="roleUserEditForm" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-none" id="input-customer">
                                        <div class="form-group">
                                            <label for="emailCustomerUserForm">Email Customer</label>
                                            <input type="email" id="emailCustomerUserForm" class="form-control" placeholder="Email" name="emailCustomerUserEditForm">
                                        </div>
                                    </div>
                                    <div class="col-md-6" id="input-admin">
                                        <div class="form-group">
                                            <label for="emailAdminUserForm">Email Admin</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="emailAdminUserForm" placeholder="Email" name="emailAdminUserEditForm" aria-describedby="admin-email">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="admin-email">@admin.com</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h4 class="form-section"><i class="ft-info"></i> Personal Info</h4>

                                <div class="form-group">
                                    <label for="no_telpUserForm">No Telepon</label>
                                    <input type="text" id="no_telpUserForm" class="form-control" placeholder="No Telepon" name="no_telpUserEditForm">
                                </div>

                                <div class="form-group">
                                    <label for="alamatUserForm">Alamat</label>
                                    <textarea id="alamatUserForm" rows="5" class="form-control" name="alamatUserEditForm" placeholder="Alamat"></textarea>
                                </div>
                            </div>

                            <div class="form-actions text-right">
                                <a type="button" href="<?= base_url('admin/users')?>" class="btn btn-sm btn-secondary mr-1">
                                    <i class="la la-undo"></i> Cancel
                                </a>
                                <button type="submit" class="btn btn-sm btn-success btn-primary">
                                    <i class="la la-save"></i> Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- users edit ends -->

    </div>
</div>

<?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<script type="text/javascript">
	$(document).ready(function() {

        // preventDefault to stay in modal when keycode 13
        $('#addedit-form').keydown(function(event) {if (event.keyCode == 13) {event.preventDefault();return false;}});
        // Toastr 
        let toastrSuccess = (data) => {
            swal.fire({ type: 'success', title: 'Deleted', text: data.msg, showConfirmButton: true, timer: 2000 })
            table.ajax.reload(null, false);
        }
        let toastrError = (data) => {
            swal.fire({ type: 'error', title: 'Not Deleted!', text: data.msg, showConfirmButton: true, timer: 2000 })
            table.ajax.reload(null, false);
        }
        // Clear Input Form
        let clearform = () => {
            $('#addedit-form')[0].reset();
            $("#kodeMenuForm").empty();$("#kodeMenuForm").removeClass('is-valid');$("#kodeMenuForm").removeClass('is-invalid');$(".kodeMenuError").html('');
        }
        // Js Input Form
        $('#usernameUserForm').focus();
        $('#usernameUserForm').keydown(function(event) {if (event.keyCode == 13) {$('#roleUserForm').select2('open');}});
        $('#roleUserForm').on('select2:select', function(e) {
            if($(this).val() == 'customer'){ 
                $('#namaUserForm').keydown(function(event) {if (event.keyCode == 13) {$('#emailCustomerUserForm').focus();}});
                $('#emailCustomerUserForm').keydown(function(event) {if (event.keyCode == 13) {$('#no_telpUserForm').focus();}});
            } else {
                $('#namaUserForm').keydown(function(event) {if (event.keyCode == 13) {$('#emailAdminUserForm').focus();}});}
                $('#emailAdminUserForm').keydown(function(event) {if (event.keyCode == 13) {$('#no_telpUserForm').focus();}});
        });
        $('#emailAdminUserForm').keydown(function(event) {if (event.keyCode == 13) {$('#no_telpUserForm').focus();}});
        $('#no_telpUserForm').keydown(function(event) {if (event.keyCode == 13) {$('#alamatUserForm').focus();}});
        // Load Data Select2 Array
        $('#roleUserForm').select2({
            theme: 'default',
            dropdownAutoWidth: true,
            width: '100%',
            placeholder: '---Pilih jenis Role ---',
            data: [{id:'',text:'---Pilih Jenis Role ---'},{id: 'admin',text: 'Admin'},{id: 'customer',text: 'Customer'}]
        });
        // Role On Change
        $("#roleUserForm").change(function() {
            if($(this).val() == 'customer'){
                $('#input-admin').addClass('d-none');$('#input-customer').removeClass('d-none');
            } else { 
                $('#input-customer').addClass('d-none');$('#input-admin').removeClass('d-none'); 
            }
        });
        // Submit Function
        $('#addedit-form').on('submit', function(event) {
            event.preventDefault();
            var url = "<?= base_url('admin/users') ?>";
            $.ajax({
                url: url,type: "POST",data: new FormData(this),processData: false,contentType: false,cache: false,
                beforeSend: function(){
                    $('#submit-btn').html("<i class='la la-spinner spinner'></i>&ensp;Proses");$('#submit-btn').prop('disabled', true);
                },
                complete: function() {
                    $('#submit-btn').html("<i class='la la-save'></i>&ensp;Submit");$('#submit-btn').prop('disabled', false);
                },
                success: function(data) {
                    $('input[name=csrf_token_name]').val(data.csrf_token_name);
                    $('#submit-btn').html("<i class='la la-save'></i>&ensp;Submit");$('#submit-btn').prop('disabled', false);
                    if (data.success) {
                        $('#addedit-modal').modal('hide');
                        Swal.fire({
                            type: 'success',title: 'Berhasil..',text: data.msg,
                            showConfirmButton: false,timer: 2000
                        });
                        // table.ajax.reload(null, false);
                    } else {
                        Object.keys(data.error).forEach((key, index) => {
                            $("#" + key + "Form" + " + span").addClass('is-invalid');
                            $("." + key + "Error").html(data.error[key]);
                            
                            var element_validation = $('#' + key + "Form");
                            element_validation.closest('.form-control');
                            element_validation.removeClass(data.error[key].length > 0 ? ' is-valid' : ' is-invalid');
                            element_validation.addClass(data.error[key].length > 0 ? 'is-invalid' : 'is-valid');

                            var select2_validation = $('#' + key + "Form" + " + span");
                            select2_validation.removeClass(data.error[key].length > 0 ? ' is-valid' : ' is-invalid');
                            select2_validation.addClass(data.error[key].length > 0 ? 'is-invalid' : 'is-valid');
                            
                        });
                        toastr.options = {"positionClass": "toast-top-right","closeButton": true, "progressBar": true};toastr["error"](data.msg, "Informasi");
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);}
            });
        });
    })
</script>
<?= $this->endSection() ?>