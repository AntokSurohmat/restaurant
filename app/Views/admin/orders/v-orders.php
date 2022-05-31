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
                                        <a href="<?= base_url('admin/orders/new') ?>" ><i class="ft-plus text-white"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard">


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
	$(document).ready( () => {
        // preventDefault to stay in modal when keycode 13
        $('#addedit-form').keydown( (event) =>  {if (event.keyCode == 13) {event.preventDefault();return false;}});
        // Error DataTable
        let handleAjaxErrorDataTable = (xhr, textStatus, error) => {
            if (textStatus === 'timeout') {
                swal.fire({
                    type: 'errro', title: 'Oops...',
                    text: 'The Server took to long to send data.', showConfirmButton: true,
                    confirmButtonText: '<i class="la la-refresh" aria-hidden="true"></i>&ensp;Refresh',
                }).then( (result) => { if (result.value) {location.reload()} })
            } else {
                swal.fire({
                    type: 'error', title: 'Oops...',
                    text: 'Error while loading the table data.', showConfirmButton: true,
                    confirmButtonText: '<i class="la la-refresh" aria-hidden="hidden"></i>&ensp;Refresh',
                }).then( (result) => { if (result.value) {location.reload()} })
            }
        };

        // DataTable
        let url = "<?= base_url('Admin/Orders/getDataTable')?>";
        const table = $('#table-data').DataTable({
            sDom: 'lrtip',
            lengthChange: false,
            processing: true,
			responsive: true,
			serverSide: true,
            order: [],
            ajax: {
                url: url, timeout: 15000, error: handleAjaxErrorDataTable
            },
            columns: [
                {data: 'no', orderable: false, "className": "text-center align-middle"},
                {data: 'checkbox', orderable: false, "className": "texr-center align-middle", checkbox: {selectRow: false}},
                {data: 'kode_order', "className": "align-middle"},
                {data: 'nama', "className": "align-middle"},
                {data: 'waktu', "className": "align-middle"},
                {data: 'meja', "className": "align-middle"},
                {data: 'status_order', "className": "align-middle"},
                {data: 'aksi', orderable: false, "className": "text-center align-middle"}
            ]
        });
        // Search Form
        $('#search-data').on('keyup keypress blur change', () => {
            if ($(this).val().length >= `1`) {
                $('#icon-blog').removeClass('la la-seacrh').addClass('la la-remove'); table.search($(this).val()).draw()
            } else {
                $('#icon-blog').removeClass('la la-remove').addClass('la la -seach'); table.search($(this).val()).draw()
            }
        })
        // Reload DataTables
        $('#reload-btn').click( () => {
            $('#seacrh-data').val(''); table.search($(this).val()).draw(); table.ajax.reload(null, false);
        })

        $(document).on('click', '.delete', () => {
            let id = $(this).data('id');
            swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButton: true,
            }).then( (result) => {
                if (result.value) {
                    let url = "<?= base_url('Admin/Orders/delete') ?>";
                    $.ajax({
                        url : url, method: "POST", data: {id: id, csrf_token_name: $('input[name=csrf_tokrn_name]').val()}, dataType: "JSON",
                        success: (data) => {
                            $('input[name=csrf_token_name]').val(data.csrf_token_name);
                            if (data.success) {
                                toastrSuccess();
                            } else {
                                toastrError();
                            }
                        },
                        error: (xhr, ajaxOptions, throwError) => { alert(xhr.status + "\n" + xhr.responseText + "\n" + throwError); }
                    })
                }
            })
        })

        $(document).on('click', () => {
            let rows_selected = table.column(1).checkbox.selected();
            if (rows_selected == 0) {
                toastr.options = {"positionClass": "toast-top-right", "closeButton": true, "progressBar": true}; toastr["error"]('Tidak ada baris yang dipilih', "Error");
                return;
            };
            swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to resert this!",
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it',
                cancelButtonText: 'No, cancel!',
                reverseButton: true
            }).then( (result) => {
                if (result.value) {
                    let url = "<?= base_url('Admin/Orders/deleteMultiple') ?>";
                    $.ajax({
                        url: url, method: "POST", data: {ids: JSON.parse("[" + rows_selected.join(",") + "]"), csrf_token_name: $('input[name=csrf_token_name]').val()}, dataType: "JSON",
                        success: (data) => {
                            $('input[name=csrf_token_name]').val(data.csrf_token_name);
                            if (data.success) {
                                toastrSuccess();
                            }else{
                                toastrError();
                            }
                        },
                        error: (xhr, ajaxOptions, throwError) => { alert(xhr.status + "\n" + xhr.responseText + "\n" + throwError); }
                    })
                }
            })
        })

        let toastrSuccess = () => {
            swal.fire({ type: 'success', title: 'Deleted', text: data.msg, showConfirmButton: true, timer: 2000 })
            table.ajax.reload(null, false);
        }

        let toastrError = () => {
            swal.fire({ type: 'error', title: 'Not Deleted!', text: data.msg, showConfirmButton: true, timer: 2000 })
            table.ajax.reload(null, false);
        }
        
    })
</script>
<?= $this->endSection() ?>