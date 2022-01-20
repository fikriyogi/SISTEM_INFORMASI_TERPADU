<?php
$title = 'Sistem Informasi';
include 'header.php';
include 'menus.php';
?>

<div class="nk-content">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-lg">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h5 class="title fw-medium">Pengaturan Desa</h5>
                            <span>These settings helps you modify site settings.</span>
                        </div>
                        <div class="nk-block-head-content align-self-start d-lg-none">
                            <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                        </div>
                    </div>
                </div>
                <div class="nk-block">
                    <form action="#" class="form-settings">
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group"><label class="form-label" for="site-name">Nama Desa</label><span class="form-note">Specify the name of your hospital.</span></div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap"><input type="text" class="form-control" id="site-name" value="<?=$row['nama_desa']?>" readonly/></div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group"><label class="form-label" for="site-email">Alamat Desa</label><span class="form-note">Specify the key of your hospital address</span></div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap"><input type="text" class="form-control" id="site-email" value="<?=$row['alamat_desa']?>" /></div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group"><label class="form-label" for="site-copyright">Kepala Desa</label><span class="form-note">Copyright information of your hospital.</span></div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap"><input type="text" class="form-control" id="site-copyright" value="Mhd. Toha" /></div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group"><label class="form-label">Allow Registration</label><span class="form-note">Enable or disable registration from site.</span></div>
                            </div>
                            <div class="col-lg-7">
                                <ul class="custom-control-group g-3 align-center flex-wrap">
                                    <li>
                                        <div class="custom-control custom-radio checked">
                                            <input type="radio" class="custom-control-input" checked="" name="reg-public" id="reg-enable" /><label class="custom-control-label" for="reg-enable">Enable</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="reg-public" id="reg-disable" /><label class="custom-control-label" for="reg-disable">Disable</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="reg-public" id="reg-request" /><label class="custom-control-label" for="reg-request">On Request</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group"><label class="form-label">Main Site</label><span class="form-note">Specify the URL if your main website is external.</span></div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap"><input type="text" class="form-control" name="site-url" value="https://www.softnio.com" /></div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group"><label class="form-label" for="site-name"> Description</label><span class="form-note">Describe your hospital information.</span></div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <div class="form-control-wrap"><textarea class="form-control form-control no-resize" id="fv-message" name="fv-message" placeholder="Hello World!"> </textarea></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group"><label class="form-label" for="site-off">Maintanance Mode</label><span class="form-note">Enable to make Project make offline.</span></div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="custom-control custom-switch"><input type="checkbox" class="custom-control-input" name="reg-public" id="site-off" /><label class="custom-control-label" for="site-off">Offline</label></div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-lg-7">
                                <div class="form-group mt-2">
                                    <button type="submit" class="btn btn-lg btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
