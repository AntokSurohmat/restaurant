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
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/users') ?>">Pengguana</a>
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
        <!-- users view start -->
        <section class="users-view">
            <!-- users view media object start -->
            <div class="row">
                <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                <input type="hidden" id="method" value="<?= $method ?>" />
                <input type="hidden" name="hidden_id" id="hidden_id" value="<?= $hidden_id ?>" />
                <div class="col-12 col-sm-7">
                    <div class="media mb-2">
                        <a class="mr-1" href="#">
                            <img src="<?= base_url()?>/assets/modern/app-assets/images/portrait/small/avatar-s-26.png" alt="users view avatar" class="users-avatar-shadow rounded-circle" height="64" width="64">
                        </a>
                        <div class="media-body pt-25">
                            <h4 class="media-heading"><span class="users-view-name" id="nama-view"> </span><span class="text-muted font-medium-1"> @</span><span class="users-view-username text-muted font-medium-1 " id="username-view"></span></h4>
                            <span>ID:</span>
                            <span class="users-view-id" id="id-view"></span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-5 px-0 d-flex justify-content-end align-items-center px-1 mb-2">
                    <a href="<?= base_url('admin/users')?>" class="btn btn-sm mr-25 border" data-toggle="tooltip" data-placement="top" title="Back"><i class="ft-corner-up-left font-small-3"></i></a>
                    <a href="<?= base_url('admin/users/')?>" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Edit Profile"><i class="ft-edit"></i> Edit</a>
                </div>
            </div>
            <!-- users view media object ends -->
            <!-- users view card data start -->
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td width=100px>Registered</td>
                                            <td width=10px> : </td>
                                            <td id="created-view"></td>
                                        </tr>
                                        <tr>
                                            <td width=100px>Latest Activity</td>
                                            <td width=10px> : </td>
                                            <td class="users-view-latest-activity" id="activity-view"></td>
                                        </tr>
                                        <tr>
                                            <td width=100px>Role</td>
                                            <td width=10px> : </td>
                                            <td class="users-view-role" id="roles-view"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12 col-md-4">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td width=100px>Username:</td>
                                            <td width=10px> : </td>
                                            <td class="users-view-username text-left" id="username-card"></td>
                                        </tr>
                                        <tr>
                                            <td width=100px>Name</td>
                                            <td width=10px> : </td>
                                            <td class="users-view-name" id="nama-card"></td>
                                        </tr>
                                        <tr>
                                            <td width=100px>E-mail</td>
                                            <td width=10px> : </td>
                                            <td class="users-view-email" id="email-card"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12 col-md-4">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td width=100px>Contact</td>
                                            <td width=10px> : </td>
                                            <td id="telp-card"></td>
                                        </tr>
                                        <tr>
                                            <td width=100px>Address</td>
                                            <td width=10px> : </td>
                                            <td id="alamat-card"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- users view card data ends -->
            <!-- users view card details start -->
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="row bg-primary bg-lighten-5 rounded mb-2 mx-25 text-center text-lg-left">
                            <div class="col-12 col-sm-4 p-2">
                                <h6 class="text-primary mb-0">Jumlah Transaksi : <span class="font-large-1 align-middle">125</span></h6>
                            </div>
                        </div>
                        <div class="col-12">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td width=100px>Username:</td>
                                        <td class="users-view-username" id="username-card"></td>
                                    </tr>
                                    <tr>
                                        <td width=100px>Name:</td>
                                        <td class="users-view-name" id="nama-card"></td>
                                    </tr>
                                    <tr>
                                        <td width=100px>E-mail:</td>
                                        <td class="users-view-email" id="email-card"></td>
                                    </tr>

                                </tbody>
                            </table>
                            <h5 class="mb-1"><i class="ft-info"></i> Personal Info</h5>
                            <table class="table table-borderless mb-0">
                                <tbody>
                                    <tr>
                                        <td width=100px>Contact:</td>
                                        <td id="telp-card"></td>
                                    </tr>
                                    <tr>
                                        <td width=100px>Address:</td>
                                        <td id="alamat-card"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- users view card details ends -->

        </section>
        <!-- users view ends -->

    </div>
</div>

<?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<script type="text/javascript">
	$(document).ready(function() {

        let update = () => {
            let id = $('#hidden_id').val();
            let url = "<?= base_url('admin/users/get-data') ?>";
            if ($('#method').val() === "View" && $('#hidden_id').val() != "") {
                $.ajax({url: url,type: "POST",data: {id: id,csrf_token_name: $('input[name=csrf_token_name]').val()},dataType: "JSON",
                    success: function(data) {
                        console.log(data);
                        $('input[name=csrf_token_name]').val(data.csrf_token_name);
                        $('#nama-view').text(data.nama);
                        $('#username-card').text(data.username);
                        $('#id-view').text(data.id);
                        $('#created-view').text(moment(data.created_at).format('DD/MM/YY'));
                        $('#activity-view').text(moment(data.update_at).format('DD/MM/YY'));
                        $('#roles-view').text(data.is_admin);
                        $('#username-view').text(data.username);
                        $('#nama-card').text(data.nama);
                        $('#email-card').text(data.email);
                        $('#telp-card').text(data.no_telp);
                        $('#alamat-card').text(data.alamat);

                    },
                    error: function(xhr, ajaxOptions, thrownError) {alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);}
                })
            }else{

                toastr.options = {"positionClass": "toast-top-right","closeButton": true, "progressBar": true};toastr["error"]('Tidak Ada Baris Yang Dipilih', "Informasi");
                return;

            }
        }

        update();
    })
</script>
<?= $this->endSection() ?>