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
                                            <th width="10%">Username</th>
                                            <th>Email</th>
                                            <th>Nama</th>
                                            <th>No Telp</th>
                                            <th>Level</th>
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
        // Error DataTable
        let handleAjaxErrorDataTable = (xhr, textStatus, error) => {
            if (textStatus === 'timeout') {
                Swal.fire({
                    type: 'error',title: 'Oops...',
                    text: 'The server took too long to send the data.',showConfirmButton: true,
                    confirmButtonText: '<i class="la la-refresh" aria-hidden="true"></i>&ensp;Refresh',
                }).then(function (result) {if (result.value) {location.reload();}});
            } else {
                Swal.fire({
                    type: 'error',title: 'Oops...',
                    text: 'Error while loading the table data.',showConfirmButton: true,
                    confirmButtonText: '<i class="la la-refresh" aria-hidden="true"></i>&ensp;Refresh',
                }).then(function (result) {if (result.value) {location.reload();}});
            }
        };
        // DataTable
        var url = "<?= base_url('Admin/Users/getDataTable') ?>";
        var table = $('#table-data').DataTable({
            sDom: 'lrtip',
            lengthChange: false,
            processing: true,
			responsive: true,
			serverSide: true,
            order: [],
            ajax: {
				url : url,timeout: 15000,error: handleAjaxErrorDataTable
			},
			columns : [
				{data: 'no', orderable: false, "className": "text-center align-middle"},
				{data: 'checkbox', orderable: false, "className": "text-center align-middle", checkboxes: {selectRow: false}},
				{data: 'username', "className": "align-middle"},
				{data: 'email', "className": "align-middle"},
				{data: 'nama', "className": "align-middle"},
				{data: 'no_telp', orderable: false,  "className": "align-middle"},
				{data: 'is_admin', orderable: false,  "className": "align-middle"},
				{data: 'aksi', orderable: false, "className": "text-center align-middle"},
			]
        });
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
			$("#search-data").val("");table.search($(this).val()).draw();table.ajax.reload(null, false);
		});
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
                    var url = "<?= base_url('Admin/Users/delete') ?>";
                    $.ajax({
                        url: url,method: "POST",data: {id: id,csrf_token_name: $('input[name=csrf_token_name]').val()},dataType: "JSON",
                        success: function(data) {
                            $('input[name=csrf_token_name]').val(data.csrf_token_name)
                            if (data.success) {
                                toastrSuccess(data);
                            } else {
                                toastrError(data);
                            }
                        },
                        error: function(xhr, ajaxOptions, thrownError) {alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);}
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
                    var url = "<?= base_url('Admin/Users/deleteMultiple') ?>";
                    $.ajax({
                        url: url,method: "POST",data: {ids: JSON.parse("[" + rows_selected.join(",") + "]"),csrf_token_name: $('input[name=csrf_token_name]').val()},dataType: "JSON",
                        success: function(data) {
                            $('input[name=csrf_token_name]').val(data.csrf_token_name);
                            if (data.success) {
                                toastrSuccess(data);
                            } else {
                                toastrError(data);
                            }
                        },
                        error: function(xhr, ajaxOptions, thrownError) {alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);}
                    });
                }
            })
        });
    })
</script>
<?= $this->endSection() ?>