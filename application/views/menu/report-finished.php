<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Laporan Kegiatan</h5>
                <!--end::Page Title-->
            </div>
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::content-->
            <div class="card h-100 m-b">
                <div class="card-body">
                    <div class="card w-50 shadow p-3 mb-5 bg-white rounded" style="width: 30% !important;">
                        <div class="card-body">
                            <p><?= $data_user_detail['name']; ?></p>
                            <div style="margin-top: 20%; margin-bottom:20%">
                                <h1 style="font-weight: 700; font-size:40px; color:black;">Internship</h1>
                                <h1 style="font-weight: 700; font-size:40px; color:#15499A;">Report</h1>
                            </div>
                            <p>Batch#3</p>
                        </div>
                    </div>
                    <div class=" col text-center w-50 " style="width: 30% !important;">
                        <a href=" <?= site_url('report/print') ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="padding-left: 40px;
    padding-right: 40px;">Lihat</a>
                        <a href="<?= site_url('report/unduh') ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="background-color: #15499A;padding-left: 40px;
    padding-right: 40px;">Unduh</a>
                    </div>
                </div>
                <!--end::content-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
</div>
<!--end::Content-->