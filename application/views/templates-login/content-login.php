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
                        <img src="<?= base_url('assets/'); ?>media/solo-abadi/logo-sobad.png" class="max-h-75px" alt="" />
                        <h5 class="display4 my-7 " style="color: #15499a;">Sugeng Rawuh</h5>
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
                                    <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Sign In</h2>
                                </div>
                                <!--end::Title-->
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <label class="font-size-h6 font-weight-bolder text-dark">Email</label>
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
                                    <button type="submit" class="btn btn-dark font-weight-bolder font-size-h6 px-8 py-4 my-3">Sign In</button>
                                </div>
                                <!--end::Action-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Signin-->
                    </div>
                    <!--end::Aside body-->
                </div>
                <!--end: Aside Container-->
            </div>
            <!--begin::Aside-->
            <!--begin::Content-->
            <div class="content order-1 order-lg-2 d-flex flex-column w-100 pb-0" style="background-color: #B1DCED;">
                <!--begin::Title-->
                <?= $this->session->flashdata('message'); ?>
                <div class="d-flex flex-column justify-content-center text-center pt-lg-40 pt-md-5 pt-sm-5 px-lg-0 pt-5 px-7">
                    <h3 class="display4 font-weight-bolder my-7 text-dark" style="color: #986923;">Solo Abadi Group</h3>
                    <p class="font-weight-bolder font-size-h2-md font-size-lg text-dark opacity-70">Bekerja Ikhlas Melayani
                        <br />Team Work Make Dream Work
                    </p>
                </div>
                <!--end::Title-->
                <!--begin::Image-->
                <div class="content-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url(<?= base_url('assets/'); ?>media/svg/illustrations/login-visual-2.svg);"></div>
                <!--end::Image-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Login-->
    </div>
    <!--end::Main-->