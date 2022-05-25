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
        <!-- Configuration option table -->
        <section id="configuration">

        <?php if(session()->getFlashData('success')){ ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= session()->getFlashData('success') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php } ?>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header border-top-info border-top-3">
                            <h4 class="card-title">Table <?= $title ?></h4>
                            <a class="heading-elements-toggle" data-toggle="tooltip" data-placement="top" title="Tools"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Delete Multiple">
                                        <a href="javascript:void(0)" id="delall-btn"><i class="ft-trash-2 text-white"></i></a>
                                    </li>
                                    <li class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Reload Table">
                                        <a href="javascript:void(0)" id="reload-btn" data-action="reload"><i class="ft-rotate-cw text-white"></i></a>
                                    </li>
                                    <li class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="top" title="Add Data">
                                        <a href="javascript:void(0)" id="addedit-btn"><i class="ft-plus text-white"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard">

                            <?php if(session()->getFlashData('success')){ ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?= session()->getFlashData('success') ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php } ?>

                                <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                                <fieldset class="mb-2">
                                    <div class="input-group">
                                        <input type="text" id="search-data" class="form-control" placeholder="Search By Kode and Name" autocomplete="off" aria-controls="data-menu">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" id="btn-search" type="button"><i id="icon-blog" class="la la-search"></i></button>
                                        </div>
                                    </div>
                                </fieldset>

                                <table id="table-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="3%;" class="text-center">No</th>
                                            <th width="3%;" class="text-center">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="checkboxsmallall">
                                                    <label class="custom-control-label" for="checkboxsmallall"></label>
                                                </div>
                                            </th>
                                            <th width="10%">Kode Menu</th>
                                            <th>Nama Menu</th>
                                            <th>Harga Menu</th>
                                            <th>Deksripsi Menu</th>
                                            <th width="100px" class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ Configuration option table -->

        <!-- Modal -->
        <div class="modal fade text-left" id="addedit-modal" tabindex="-1" role="dialog" aria-labelledby="modalAddEdit" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modalAddEdit"><i class="la la-tree"></i> Add/Edit Modal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form" id="addedit-form" role="form" autocomplete="off" onsubmit="return false">
                            <div class="form-body">
                                <input type="hidden" id="hidden_id" name="hidden_id" />
                                <input type="hidden" id="method" name="method" />
                                <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                                <div class="form-group">
                                    <label for="kodeMenuForm">Kode Menu <span style="color:red">*</span></label>
                                    <div class="row">
                                        <div class="col-10">
                                            <input type="text" id="kodeMenuForm" class="form-control" placeholder="Kode Menu" name="kodeMenuAddEditForm">
                                            <span class="text-left text-danger font-small-3 kodeMenuError"></span>
                                        </div>
                                        <div class="col-2">
                                            <button type="button" class="btn btn-secondary" id="generate-kode" data-toggle="popover" data-placement="top" data-content="Secara otomatis akan membuat 6 angka random." data-trigger="hover" data-original-title="Generate Random Number"> <i class="la la-refresh" aria-hidden="true"></i> </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="namaMenuForm">Nama Menu <span style="color:red">*</span></label>
                                    <input type="text" id="namaMenuForm" class="form-control" placeholder="Nama Menu" name="namaMenuAddEditForm">
                                    <span class="text-left text-danger font-small-3 namaMenuError"></span>
                                </div>

                                <div class="form-group">
                                    <label for="hargaMenuForm">Harga Menu <span style="color:red">*</span></label>
                                    <div class="input-group mt-0">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp</span>
                                        </div>
                                        <input type="text" id="hargaMenuForm" class="form-control" placeholder="Harga Menu" name="hargaMenuAddEditForm">
                                    </div>
                                    <span class="text-left text-danger font-small-3 hargaMenuError"></span>
                                </div>

                                <div class="form-group">
                                    <label for="fotoMenuForm">Foto Menu</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="fotoMenuForm" name="fotoMenuAddEditForm">
                                        <label class="custom-file-label" for="fotoMenuForm" aria-describedby="fotoMenuForm">Choose file</label>
                                    </div>
                                    <span class="text-left text-danger font-small-3 fotoMenuError"></span>
                                </div>


                                <div class="form-group">
                                    <label for="deskripsiMenuForm">Deksripsi Menu <span style="color:red">*</span></label>
                                    <textarea id="deskripsiMenuForm" rows="3" class="form-control" name="deskripsiMenuAddEditForm" placeholder="Deskripsi Menu"></textarea>
                                    <span class="text-left text-danger font-small-3 deskripsiMenuError"></span>
                                </div>

                            </div>

                            <div class="form-actions right">
                                <button type="button" class="btn btn-sm btn-secondary mr-1 font-weight-bold" data-dismiss="modal"><i class="la la-remove"></i> Cancel</button>
                                <button type="submit" id="submit-btn" class="btn btn-sm font-weight-bold"><i class="la la-save"></i>Btn</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<script type="text/javascript">
	$(document).ready(function() {

        // preventDefault to stay in modal when keycode 13
        $('#addedit-form').keydown(function(event) {if (event.keyCode == 13) {event.preventDefault();return false;}});
        // DataTable
        var url_destination = "<?= base_url('Admin/Menus/getDataTable') ?>";
        var table = $('#table-data').DataTable({
            sDom: 'lrtip',
            lengthChange: false,
            processing: true,
			responsive: true,
			serverSide: true,
            order: [],
            ajax: {
				url : url_destination,"timeout": 15000,"error": handleAjaxErrorDataTable
			},
			columns : [
				{data: 'no', orderable: false, "className": "text-center align-middle"},
				{data: 'checkbox', orderable: false, "className": "text-center align-middle", checkboxes: {selectRow: false}},
				{data: 'kode_menu', "className": "align-middle"},
				{data: 'foto-nama', orderable: false,  "className": "align-middle"},
				{data: 'harga_menu', "className": "align-middle"},
				{data: 'deskripsi_menu', orderable: false,  "className": "align-middle"},
				{data: 'aksi', orderable: false, "className": "text-center align-middle"},
			]
        });
        // Error DataTable
        function handleAjaxErrorDataTable(xhr, textStatus, error) {
            if (textStatus === 'timeout') {
                Swal.fire({
                    type: 'error',title: 'Oops...',
                    text: 'The server took too long to send the data.',showConfirmButton: true,
                    confirmButtonText: '<i class="fa fa-retweet" aria-hidden="true"></i>&ensp;Refresh',
                }).then(function (result) {if (result.value) {location.reload();}});
            } else {
                Swal.fire({
                    type: 'error',title: 'Oops...',
                    text: 'Error while loading the table data. Please refresh',showConfirmButton: true,
                    confirmButtonText: '<i class="fa fa-retweet" aria-hidden="true"></i>&ensp;Refresh',
                }).then(function (result) {if (result.value) {location.reload();}});
            }
        };

        // Search Form
        $('#search-data').on('keyup keypress blur change', function() {
            if($(this).val().length >= 1) {
                $('#icon-blog').removeClass('la la-search').addClass("la la-remove");table.search($(this).val()).draw();
            }else{
                $('#icon-blog').removeClass('la la-remove').addClass("la la-search");table.search($(this).val()).draw();
            }
        });
        $('#btn-search').click(function() {
            $('#icon-blog').removeClass('la la-remove').addClass("la la-search");$('#search-data').val('');table.search($(this).val()).draw();
        })
        // Reload DataTables
        $("#reload-btn").on('click', function() {
			$("#search-data").val("");
			table.search($(this).val()).draw();
			table.ajax.reload(null, false);
		});
        // Modal
        $('#addedit-btn').click(function() {
            var option = {backdrop: 'static',keyboard: true,}
            $('#addedit-modal').modal(option);$('#addedit-form')[0].reset();
            $('.modal-header').addClass('bg-info');
            $('.modal-title').text('Add Data').addClass('text-white font-weight-bold');$('#method').val('New');
            $('#submit-btn').html('<i class="la la-save"></i>&ensp;Submit');$('#addedit-modal').modal('show');
            $('#submit-btn').html('<i class="la la-save"></i>&ensp;Submit');
            $('#submit-btn').addClass("btn-info text-white");$('#addedit-modal').modal('show');
        });
        $('#addedit-modal').on('shown.bs.modal', function() {
            $("#kodeMenuForm").focus();
            $('#kodeMenuForm').keydown(function(event) {if (event.keyCode == 13) {$('#namaMenuForm').focus();}});
            $('#namaMenuForm').keydown(function(event) {if (event.keyCode == 13) {$('#hargaMenuForm').focus();}});
            $('#hargaMenuForm').keydown(function(event) {if (event.keyCode == 13) {$('#deskripsiMenuForm').focus();}});
            $('#deskripsiMenuForm').keydown(function(event) {if (event.keyCode == 13) {$('#submit-btn').focus();}});
        });
        $('#addedit-modal').on('hidden.bs.modal', function() {
            $(this).find('form')[0].reset();
            $('.modal-header').removeClass('bg-info bg-warning');
            $('#submit-btn').removeClass('btn-info btn-warning');
            $("#kodeMenuForm").empty();$("#kodeMenuForm").removeClass('is-valid');$("#kodeMenuForm").removeClass('is-invalid');$(".kodeMenuError").html('');
            $("#namaMenuForm").empty();$("#namaMenuForm").removeClass('is-valid');$("#namaMenuForm").removeClass('is-invalid');$(".namaMenuError").html('');
            $("#hargaMenuForm").empty();$("#hargaMenuForm").removeClass('is-valid');$("#hargaMenuForm").removeClass('is-invalid');$(".hargaMenuError").html('');
            $("#fotoMenuForm").empty();$("#fotoMenuForm").removeClass('is-valid');$("#fotoMenuForm").removeClass('is-invalid');$(".fotoMenuError").html('');
            $("#deskripsiMenuForm").empty();$("#deskripsiMenuForm").removeClass('is-valid');$("#deskripsiMenuForm").removeClass('is-invalid');$(".deskripsiMenuError").html('');
        });
        // Submit Function
        $('#addedit-form').on('submit', function(event) {
            event.preventDefault();
            if ($('#method').val() === 'New') { var url = "<?= base_url('admin/menus') ?>";} else { var url = "<?= base_url('/Admin/Menus/Update') ?>";}
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
                        table.ajax.reload(null, false);
                    } else {
                        Object.keys(data.error).forEach((key, index) => {
                            $("#" + key + 'Form').addClass('is-invalid');$("." + key + "Error").html(data.error[key]);
                            var element = $('#' + key + 'Form');
                            element.closest('.form-control');
                            element.closest('.select2-hidden-accessible'); //access select2 class
                            element.removeClass(data.error[key].length > 0 ? ' is-valid' : ' is-invalid');
                            element.addClass(data.error[key].length > 0 ? 'is-invalid' : 'is-valid');
                        });
                        toastr.options = {"positionClass": "toast-top-right","closeButton": true, "progressBar": true};toastr["error"](data.msg, "Informasi");
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);}
            });
        });
        // Edit
        $(document).on('click', '.edit', function() {
            var id = $(this).data('id');var url = "<?= base_url('admin/menus/get-data') ?>";
            $.ajax({
                url: url,type: "POST",data: {id: id,csrf_token_name: $('input[name=csrf_token_name]').val()},
                dataType: "JSON",
                success: function(data) {
                    $('input[name=csrf_token_name]').val(data.csrf_token_name);
                    $('.modal-header').addClass('bg-warning');
                    $('.modal-title').addClass('text-white font-weight-bold');
                    $('.modal-title').text('Edit Data "' + data.nama_menu + '"');
                    $('#kodeMenuForm').val(data.kode_menu);$('#namaMenuForm').val(data.nama_menu);
                    $('#hargaMenuForm').val(data.harga_menu);$('#deskripsiMenuForm').val(data.deskripsi_menu);
                    $('#method').val('Edit');$('#hidden_id').val(data.id);
                    $('#submit-btn').html('<i class="la la-save"></i>&ensp;Update');
                    $('#submit-btn').addClass("btn-warning text-white");$('#addedit-modal').modal('show');
                }
            })
        })
        // Delete
        $(document).on('click', '.delete', function() {
            var id = $(this).data('id');
            swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then(function (result) {
                if (result.value) {
                    var url_destination = "<?= base_url('Admin/Menus/delete') ?>";
                    $.ajax({
                        url: url_destination,method: "POST",data: {id: id,csrf_token_name: $('input[name=csrf_token_name]').val()},dataType: "JSON",
                        success: function(data) {
                            $('input[name=csrf_token_name]').val(data.csrf_token_name)
                            if (data.success) {
                                swal.fire({
                                    type: 'success',title: 'Deleted!',text: data.msg,
                                    showConfirmButton: true,timer: 2000
                                });
                                table.ajax.reload(null, false);
                            } else {
                                swal.fire({
                                    type: 'error',title: 'Not Deleted!',text: data.msg,
                                    showConfirmButton: true,timer: 2000
                                });
                                table.ajax.reload(null, false);
                            }
                        },
                        // error: function(xhr, ajaxOptions, thrownError) {alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);}
                    });
                }
            })
        })
        // Delete Multiple
        $('#delall-btn').on('click', function() {
            var rows_selected = table.column(1).checkboxes.selected();
            if(rows_selected.length == 0 ) {
                toastr.options = {"positionClass": "toast-top-right","closeButton": true, "progressBar": true};toastr["error"]('Tidak Ada Baris Yang Dipilih', "Informasi");
                return;
            };
            swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then(function (result) {
                if (result.value) {
                    var url_destination = "<?= base_url('Admin/Menus/deleteMultiple') ?>";
                    $.ajax({
                        url: url_destination,method: "POST",data: {ids: JSON.parse("[" + rows_selected.join(",") + "]"),csrf_token_name: $('input[name=csrf_token_name]').val()},dataType: "JSON",
                        success: function(data) {
                            $('input[name=csrf_token_name]').val(data.csrf_token_name)
                            if (data.success) {
                                swal.fire({
                                    type: 'success',title: 'Deleted!',text: data.msg,
                                    showConfirmButton: true,timer: 2000
                                });
                                table.ajax.reload(null, false);
                            } else {
                                swal.fire({
                                    type: 'error',title: 'Not Deleted!',text: data.msg,
                                    showConfirmButton: true,timer: 2000
                                });
                                table.ajax.reload(null, false);
                            }
                        },
                        error: function(xhr, ajaxOptions, thrownError) {alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);}
                    });
                }
            })
        });
        // Generate Random Number
        $('#generate-kode').click(function() {
            var url_destination = "<?= base_url('admin/menus/get-number') ?>";
            $.ajax({
                url: url_destination,type: "POST",data: {csrf_token_name: $('input[name=csrf_token_name]').val()},
                dataType: "JSON",
                success: function(data) {
                    $('input[name=csrf_token_name]').val(data.csrf_token_name);$('#kodeMenuForm').val(data.kode);
                }
            })
        })

    })
</script>
<?= $this->endSection() ?>