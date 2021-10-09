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
                <?php foreach ($kegiatan as $kegiatans) : ?>
                    <?php echo form_open_multipart('kegiatan/update'); ?>
                    <form class="form">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Tittle</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <input class="form-control" type="hidden" name="id" value="<?= $kegiatans['ID'] ?>" id="id">
                                    <input class="form-control" type="text" name="tittle" value="<?= $kegiatans['tittle'] ?>" id="tittle">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-date-input" class="col-form-label text-right col-lg-3 col-sm-12">Date</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <input class="form-control" type="date" value="<?= $kegiatans['date'] ?>" id="date" name="date">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-date-input" class="col-form-label text-right col-lg-3 col-sm-12">Start</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <div class="input-group timepicker">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="la la-clock-o"></i>
                                            </span>
                                        </div>
                                        <input class="form-control" id="start-time" name="start-time" value="<?= $kegiatans['start'] ?>" placeholder=" Select time" type="time">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-date-input" class="col-form-label text-right col-lg-3 col-sm-12">Finish</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <div class="input-group timepicker">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="la la-clock-o"></i>
                                            </span>
                                        </div>
                                        <input class="form-control" id="finish-time" name="finish-time" value="<?= $kegiatans['finish'] ?>" placeholder=" Select time" type="time">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Pembimbing</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <?php $mentor = $this->m_kegiatan->option_edit_mentor($kegiatans['pembimbing']) ?>
                                    <select class="form-control selectpicker" name="pembimbing">
                                        <?php
                                        foreach ($option_pembimbing as $value) {
                                            foreach ($mentor as $key) {
                                                if ($value['user_id'] == $key['user_id']) {
                                        ?>
                                                    <option value="<?= $value['user_id']; ?>" selected><?= $value['user_name']; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                            <option value="<?= $value['user_id']; ?>"><?= $value['user_name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Foto</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <input type="hidden" id="image" name="image" value="<?= $kegiatans['foto'] ?>">
                                    <div class="custom-file">
                                        <input type="file" class=" custom-file-input" id="customFile" name="customFile">
                                        <label class=" custom-file-label" for="customFile"> <?= $kegiatans['foto'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class=" form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Divisi</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <?php $divisi = $this->m_kegiatan->option_edit_divisi($kegiatans['divisi']) ?>
                                    <select class="form-control selectpicker" name="divisi">
                                        <?php
                                        foreach ($option_divisi as $value) {
                                            foreach ($divisi as $key) {
                                                if ($value['team_id'] == $key['team_id']) {
                                        ?>
                                                    <option value="<?= $key['team_id']; ?>" selected><?= $key['team_name']; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                            <option value="<?= $value['team_id']; ?>"><?= $value['team_name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Link</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <input class="form-control" type="text" value="<?= $kegiatans['link'] ?>" name="link" id="link">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Detail</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <textarea class="form-control" id="detail" name="detail" rows="3"><?= $kegiatans['detail'] ?></textarea>
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
                <?php endforeach; ?>
                <!--end::Form-->
            </div>
            <!--end::content-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->