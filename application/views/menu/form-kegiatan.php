<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Tambah Kegiatan</h5>
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
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-title">
                            Form Kegiatan
                        </h3>
                    </div>
                </div>
                <!--begin::Form-->
                <?php echo form_open_multipart('kegiatan/tambah_kegiatan'); ?>
                <form class="form">
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Tittle</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <input class="form-control" type="text" name="tittle" id="tittle">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-date-input" class="col-form-label text-right col-lg-3 col-sm-12">Date</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <input class="form-control" type="date" value="<?php echo date(""); ?>" id="date" name="date">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Pembimbing</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <select class="form-control selectpicker" name="pembimbing">
                                    <?php
                                    foreach ($option_pembimbing as $value) {
                                    ?>
                                        <option value="<?= $value['user_id']; ?>"><?= $value['user_name']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Divisi</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <select class="form-control selectpicker" name="divisi">
                                    <?php
                                    foreach ($option_divisi as $value) {
                                    ?>
                                        <option value="<?= $value['team_id']; ?>"><?= $value['team_name']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Foto1</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto1" name="foto1">
                                    <label class="custom-file-label" for="foto1">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Foto2</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto2" name="foto2">
                                    <label class="custom-file-label" for="foto2">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Foto3</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto3" name="foto3">
                                    <label class="custom-file-label" for="foto3">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Foto4</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto4" name="foto4">
                                    <label class="custom-file-label" for="foto4">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Link</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <textarea class="form-control" id="link" name="link" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Detail</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <textarea class="form-control" id="kt_maxlength_5" name="kt_maxlength_5" maxlength="1100" placeholder="" rows="6"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-9 ml-lg-auto">
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
                <?php echo form_close(); ?>
                <!--end::Form-->
            </div>
            <!--end::content-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->