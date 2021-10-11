<!doctype html>
<html lang="en">

<head>
    <base href="">
    <meta charset="utf-8" />
    <title>Internship Solo Abadi</title>
    <meta name="description" content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="<?= base_url('assets/'); ?>plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="<?= base_url('assets/'); ?>plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/'); ?>plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/'); ?>css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="<?= base_url('assets/'); ?>css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/'); ?>css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/'); ?>css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/'); ?>css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="<?= base_url('assets/'); ?>media/solo-abadi/icon-sobad.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
</head>

<body style="background: #fff;">
    <div class="container h-100">
        <div class="row align-items-end h-100">
            <div class="col">
                <div class=" w-100" style="margin-bottom:20%; padding-left:30%">
                    <h4 class="font-weight-bolder text-lg-left">Selamat Datang</h4>
                    <h1 class="font-weight-bolder text-lg-left display-3" style="color: #15499a;"><?= ($data_user['name']) ?></h1>
                    <p class="font-weight-bolder">Semoga Harimu Menyenangkan</p>
                    <a class="btn mt-15 pl-10 pr-10" href="<?= site_url('kegiatan') ?>" role="button" style="background-color:#15499A; color:white">Lanjut</a>
                </div>
            </div>
            <div class="col ">
                <div class=" w-100" style="margin-left:-15%">
                    <img src="https://s.soloabadi.com/system-absen/asset/img/user/<?= $image['msg'][0]['notes_pict']; ?>" class="img-fluid" alt="...">
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
        var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
    </script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1400
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#3699FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#E4E6EF",
                        "dark": "#181C32"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1F0FF",
                        "secondary": "#EBEDF3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#3F4254",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#EBEDF3",
                    "gray-300": "#E4E6EF",
                    "gray-400": "#D1D3E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#7E8299",
                    "gray-700": "#5E6278",
                    "gray-800": "#3F4254",
                    "gray-900": "#181C32"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="<?= base_url('assets/'); ?>plugins/global/plugins.bundle.js"></script>
    <script src="<?= base_url('assets/'); ?>plugins/custom/prismjs/prismjs.bundle.js"></script>
    <script src="<?= base_url('assets/'); ?>js/scripts.bundle.js"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Vendors(used by this page)-->
    <script src="<?= base_url('assets/'); ?>plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <script src="<?= base_url('assets/'); ?>js/multi-select.js"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="<?= base_url('assets/'); ?>js/pages/widgets.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/pages/crud/forms/widgets/bootstrap-datepicker.js?v=7.2.8"></script>
    <!--end::Page Scripts-->
</body>

</html>