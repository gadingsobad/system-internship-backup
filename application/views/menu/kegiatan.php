<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Kegiatan</h5>
                <!--end::Title-->
                <!--begin::Separator-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                <!--end::Separator-->
                <!--begin::Search Form-->
                <?php echo form_open('kegiatan/search') ?>
                <div class="d-flex align-items-center" id="kt_subheader_search">
                    <!--<span class="text-dark-50 font-weight-bold" id="kt_subheader_total">450 Total</span>-->
                    <form class="ml-5">
                        <div class="input-group input-group-sm input-group-solid" style="max-width: 175px">
                            <input type="text" name="keyword" class="form-control" id="kt_subheader_search_form" placeholder="Search...">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <span class="svg-icon">
                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Search.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <!--<i class="flaticon2-search-1 icon-sm"></i>-->
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
                <!--end::Search Form-->
                <?php echo form_close() ?>
            </div>
            <!--end::Details-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!-- Button trigger modal-->
                <a href="<?= site_url('kegiatan/add_data') ?>" class="btn btn-light-primary font-weight-bolder btn-sm">+ Tambah Kegiatan</a>
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom gutter-b">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover mb-6">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Foto Kegiatan</th>
                                    <th scope="col">Divisi</th>
                                    <th scope="col">Pembimbing</th>
                                    <th scope="col">Link</th>
                                    <th scope="col">Detail</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <?php
                            foreach ($kegiatan as $value) : ?>
                                <?php

                                $pembimbing = $this->m_kegiatan->get_mentor_name($value['pembimbing']);
                                foreach ($pembimbing as $key) {
                                    $mentor = $key['user_name'];
                                }

                                $division = $this->m_kegiatan->get_divisi_name($value['divisi']);
                                foreach ($division as $keys) {
                                    $divisi = $keys['team_name'];
                                }
                                ?>
                                <tbody>
                                    <tr>
                                        <th scope="row"><?= ++$start ?></th>
                                        <td><?= $value['tittle']; ?></td>
                                        <td><?= $value['date']; ?></td>
                                        <td>
                                            <?php if ($value['foto'] !== '') { ?>

                                                <div class="symbol symbol-60 symbol-2by3 flex-shrink-0">
                                                    <div class="symbol-label" style="background-image: url('<?php echo base_url(); ?>assets/foto/<?php echo $value['foto'] ?>')"></div>
                                                </div>

                                            <?php
                                            } else {

                                            ?>

                                            <?php
                                            }
                                            ?>
                                            <?php if ($value['foto2'] !== '') { ?>

                                                <div class="symbol symbol-60 symbol-2by3 flex-shrink-0">
                                                    <div class="symbol-label" style="background-image: url('<?php echo base_url(); ?>assets/foto/<?php echo $value['foto2'] ?>')"></div>
                                                </div>

                                            <?php
                                            } else {

                                            ?>

                                            <?php
                                            }
                                            ?>
                                            <?php if ($value['foto3'] !== '') { ?>

                                                <div class="symbol symbol-60 symbol-2by3 flex-shrink-0">
                                                    <div class="symbol-label" style="background-image: url('<?php echo base_url(); ?>assets/foto/<?php echo $value['foto3'] ?>')"></div>
                                                </div>

                                            <?php
                                            } else {

                                            ?>

                                            <?php
                                            }
                                            ?>
                                            <?php if ($value['foto4'] !== '') { ?>

                                                <div class="symbol symbol-60 symbol-2by3 flex-shrink-0">
                                                    <div class="symbol-label" style="background-image: url('<?php echo base_url(); ?>assets/foto/<?php echo $value['foto4'] ?>')"></div>
                                                </div>

                                            <?php
                                            } else {

                                            ?>

                                            <?php
                                            }
                                            ?>
                                        </td>
                                        <td><?= $divisi; ?></td>
                                        <td><?= $mentor; ?></td>
                                        <td><?= $value['link']; ?></td>
                                        <td><?= (str_word_count($value['detail']) > 60 ? substr($value['detail'], 0, 150) . ".." :  $value['detail']); ?></td>
                                        <td nowrap="nowrap">
                                            <div>
                                            </div> <a href="<?= site_url("kegiatan/edit/" . $value['ID']); ?>" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a> <a href="<?= site_url("kegiatan/deleted/" . $value['ID']); ?>" class="btn btn-sm btn-clean btn-icon" title="Delete"> <i class="la la-trash"></i> </a>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php endforeach; ?>
                        </table>
                        <?php echo $this->pagination->create_links(); ?>
                    </div>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>