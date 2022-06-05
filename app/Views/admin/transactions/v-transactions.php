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
                                            <th width="10%">Kode Transaksi</th>
                                            <th>Nama</th>
                                            <th>No Telp</th>
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

    })
</script>
<?= $this->endSection() ?>