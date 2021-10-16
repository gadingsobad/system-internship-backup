<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-2 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
            <!--begin::Aside-->
            <div class="login-aside order-2 order-lg-1 d-flex flex-row-auto position-relative overflow-hidden">
                <!--begin: Aside Container-->
                <div class="d-flex flex-column-fluid flex-column justify-content-between py-9 px-7 py-lg-13 px-lg-35">
                    <!--begin::Logo-->
                    <a href="#" class="text-center pt-2">
                        <img src="<?= base_url('assets/'); ?>media/solo-abadi/logo-sobad.png" class="max-h-40px" alt="" />
                    </a>
                    <!--end::Logo-->
                    <!--begin::Aside body-->
                    <div class="d-flex flex-column-fluid flex-column flex-center">
                        <!--begin::Signin-->
                        <div class="login-form login-signin py-11">
                            <!--begin::Form-->
                            <form class="form" novalidate="novalidate" method="post" action="<?= base_url('auth'); ?>">
                                <!--begin::Title-->
                                <div class="text-center pb-8">
                                    <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Masuk</h2>
                                </div>
                                <!--end::Title-->
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <label class="font-size-h6 font-weight-bolder text-dark">Username</label>
                                    <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="text" id="username" name="username" autocomplete="off" />
                                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <!--end::Form group-->
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <div class="d-flex justify-content-between mt-n5">
                                        <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
                                        <a href="javascript:;" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5" id="kt_login_forgot"></a>
                                    </div>
                                    <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="password" id="password" name="password" autocomplete="off" />
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <!--end::Form group-->
                                <!--begin::Action-->
                                <div class="text-center pt-2">
                                    <button type="submit" class="btn font-weight-bolder font-size-h6 px-8 py-4 my-3" style="background-color:#15499a; color:white">Masuk</button>
                                </div>
                                <!--end::Action-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Signin-->
                    </div>
                    <!--end::Aside body-->
                </div>
                <div class="container position-absolute" style="bottom:0">
                    <div class="row">
                        <div class="col" style="text-align: left;">
                            <p>Kreatif Bekerja Ikhlas Melayani</p>
                        </div>
                        <div class=" col" style="text-align: right;">
                            <p>
                                ©<?php echo date("Y"); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <!--end: Aside Container-->
            </div>
            <div class="content order-1  d-flex flex-column w-100 p-0 m-0" style="background-image: url('<?= base_url('assets/'); ?>media/solo-abadi/sobad-login-rev2.jpg');background-repeat: round;"></div>
        </div>
        <!--end::Login-->
    </div>
    <!--end::Main-->