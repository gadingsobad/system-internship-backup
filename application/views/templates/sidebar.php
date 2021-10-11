<!--begin::Aside-->
<style>
    .aside-menu .menu-nav>.menu-item.menu-item-active>.menu-link {
        background-color: #639AEF;
    }

    .aside-menu .menu-nav>.menu-item:not(.menu-item-parent):not(.menu-item-open):not(.menu-item-here):not(.menu-item-active):hover>.menu-link {
        background-color: #639AEF;
    }

    .menu-nav>.menu-item>.menu-link .menu-text {
        color: #fff !important;
    }

    .aside-menu .menu-nav {
        padding: 5px 0;
    }
</style>
<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
    <!--begin::Brand-->
    <div class="brand flex-column-auto" id="kt_brand" style="background: #15499A;">
        <!--begin::Logo-->
        <a href="<?= site_url('kegiatan') ?>" class="brand-logo">
            <img alt="Logo" src="<?= base_url('assets/'); ?>media/solo-abadi/logo-sobad-white.png" />
        </a>
        <!--end::Logo-->
        <!--begin::Toggle-->
        <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
            <i class="fas fa-angle-double-left" style="color:white;"></i>
        </button>
        <!--end::Toolbar-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside Menu-->
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper" style="background: #15499A;">
        <!--begin::Menu Container-->
        <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500" style="background: #15499A;">
            <!--begin::Menu Nav-->
            <ul class="menu-nav">
                <li <?= $this->uri->segment(1) == 'kegiatan'  ? 'class="menu-item menu-item-active" style="background: #639AEF !important;" ' : 'class="menu-item"' ?> aria-haspopup="true">
                    <a href="<?= site_url('kegiatan') ?>" class="menu-link">
                        <i class="far fa-calendar-check mr-5 ml-3" style="color:white;"></i>
                        <h5 class="menu-text">Kegiatan</h5>
                    </a>
                </li>
            </ul>
            <ul class="menu-nav">
                <li <?= $this->uri->segment(1) == 'report'  ? 'class="menu-item menu-item-active" style="background: #639AEF !important;" ' : 'class="menu-item"' ?> aria-haspopup="true">
                    <a href="<?= site_url('report') ?>" class="menu-link">
                        <i class="far fa-file-alt mr-5 ml-3" style="color:white;"></i>
                        <h5 class="menu-text">Laporan Kegiatan</h5>
                    </a>
                </li>
            </ul>
            <ul class="menu-nav">
                <li <?= $this->uri->segment(1) == 'sertivikat'  ? 'class="menu-item menu-item-active" style="background: #639AEF !important;" ' : 'class="menu-item"' ?> aria-haspopup="true">
                    <a href="<?= site_url('sertivikat') ?>" class="menu-link">
                        <i class="fas fa-award mr-5 ml-3" style="color:white;"></i>
                        <h5 class="menu-text">Sertivikat</h5>
                    </a>
                </li>
            </ul>
            <!--end::Menu Nav-->

            <div style="position:absolute; bottom:0; margin-left:13%">
                <div class=" text-center">
                    <a href="https://soloabadi.com/en/" target="_blank" class="text-white">Solo Abadi Official System<br>2021©</br></a>
                </div>

            </div>
        </div>
        <!--end::Menu Container-->
    </div>
    <!--end::Aside Menu-->
</div>