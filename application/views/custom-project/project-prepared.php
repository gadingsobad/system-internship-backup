<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h2 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Custom Projects</h2>
                <!--end::Page Title-->
            </div>
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                    <a <?= $this->uri->segment(1) == 'custom_project_prepared'  ? 'class="nav-link active bg-warning"' : 'class="nav-link"' ?> href="<?= site_url('custom_project_prepared') ?>">
                        <span class="nav-icon">
                            <i class="flaticon2-chat-1"></i>
                        </span>
                        <span class="nav-text">Prepared</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a <?= $this->uri->segment(1) == 'custom_project_proccess'  ? 'class="nav-link active"' : 'class="nav-link"' ?>class="nav-link" href="<?= site_url('custom_project_proccess') ?>" aria-controls="profile">
                        <span class="nav-icon">
                            <i class="flaticon2-layers-1"></i>
                        </span>
                        <span class="nav-text">On Proccess</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab-4" data-toggle="tab" href="#contact-4" aria-controls="contact">
                        <span class="nav-icon">
                            <i class="flaticon2-rocket-1"></i>
                        </span>
                        <span class="nav-text">Finish</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a <?= $this->uri->segment(1) == 'custom_project_hold'  ? 'class="nav-link active"' : 'class="nav-link"' ?>class="nav-link" href="<?= site_url('custom_project_hold') ?>" aria-controls="profile">
                        <span class="nav-icon">
                            <i class="flaticon2-layers-1"></i>
                        </span>
                        <span class="nav-text">Hold</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::content-->
            <div class="card card-custom">
                <div class="card-header flex-wrap py-3">
                    <div class="card-title">
                        <h3 class="card-label">Prepared</h3>
                    </div>
                    <!-- Button trigger modal-->
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-project">
                        + New Project
                    </button>
                    <!-- Modal-->
                    <div class="modal fade" id="modal-project" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modal-project">New Project</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i aria-hidden="true" class="ki ki-close"></i>
                                    </button>
                                </div>
                                <form method="post" action="<?php echo base_url() . 'custom_project_prepared/add_custom_project'; ?>">
                                    <div class="modal-body">
                                        <div data-scroll="true" data-height="300">
                                            <div class="form-group">
                                                <label>Project Name<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="project-name" name="project-name" placeholder="Enter project name" />
                                            </div>
                                            <div class="form-group">
                                                <label for="form-project">Select Team Member</label>
                                                <select id="choices-multiple-remove-button" name="team-member[]" placeholder="Add Team Member" multiple>
                                                    <?php
                                                    foreach ($option_team as $value) {
                                                    ?>
                                                        <option value="<?= $value['user_id']; ?>"><?= $value['user_name']; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-date-input" class="form-control-label">Start Date</label>
                                                <input class="form-control" type="date" value="<?php echo date(""); ?>" id="start-date" name="start-date">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-date-input" class="form-control-label">End Date</label>
                                                <input class="form-control" type="date" value="<?php echo date(""); ?>" id="end-date" name="end-date">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Priority</label>
                                                <select class="form-control" id="priority" name="priority">
                                                    <option value="1" class="text-info">Low</option>
                                                    <option value="3" class="text-yellow">Medium</option>
                                                    <option value="5" class="text-danger">Hard</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Detail Project</label>
                                                <textarea class="form-control" id="detail-project" name="detail-project" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-success font-weight-bold">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Modal edit-->
                    <?php
                    foreach ($project as $value) :;
                    ?>
                        <div class="modal fade" id="modal-project-edit<?= $value['project_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modal-project-edit">Edit Project</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <i aria-hidden="true" class="ki ki-close"></i>
                                        </button>
                                    </div>
                                    <form method="post" action="<?php echo base_url() . 'custom_project_prepared/edit_custom_project'; ?>">
                                        <div class="modal-body">
                                            <div data-scroll="true" data-height="300">
                                                <input type="hidden" name="id_project" id="id_project" value="<?= $value['project_id'] ?>">
                                                <div class="form-group">
                                                    <label>Project Name<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" value=" <?= $value['project_name'] ?>" id="project-name" name="project-name" placeholder="Enter project name" />
                                                </div>
                                                <?php
                                                $project_id = ($value['project_id']);
                                                $member = $this->m_project->option_team_edit($project_id);
                                                ?>
                                                <div class="form-group">
                                                    <label for="form-project">Select Team Member</label>
                                                    <select id="choices-multiple-remove-button" name="team-member[]" placeholder="Add Team Member" multiple>
                                                        <?php
                                                        foreach ($option_team as $value) {
                                                            foreach ($member as $key) {
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
                                                <div class="form-group">
                                                    <label for="example-date-input" class="form-control-label">Start Date</label>
                                                    <input class="form-control" type="date" value="<?php echo date(""); ?>" id="start-date" name="start-date">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-date-input" class="form-control-label">End Date</label>
                                                    <input class="form-control" type="date" value="<?php echo date(""); ?>" id="end-date" name="end-date">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Priority</label>
                                                    <select class="form-control" id="priority" name="priority">
                                                        <option value="1" class="text-info">Low</option>
                                                        <option value="3" class="text-yellow">Medium</option>
                                                        <option value="5" class="text-danger">Hard</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Detail Project</label>
                                                    <textarea class="form-control" id="detail-project" name="detail-project" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-success font-weight-bold">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="card-body bg-warning-o-15">
                    <div class="row">
                        <?php
                        foreach ($project as $value) :;
                        ?>
                            <div class="col-xl-6">
                                <?php
                                $leader_id = ($value['leader_id']);
                                $leader_name = $this->m_project->get_name($leader_id);
                                $image_leader = $this->m_project->get_image($leader_id);
                                ?>
                                <!--begin::Card-->
                                <div class="card card-custom gutter-b card-stretch">
                                    <!--begin::Body-->
                                    <div class="card-body">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Pic-->
                                            <div class="flex-shrink-0 mr-4 symbol symbol-65 symbol-circle">
                                                <img src="https://s.soloabadi.com/system-absen/asset/img/user/<?= $image_leader["notes_pict"] ?>" alt="image">
                                            </div>
                                            <!--end::Pic-->
                                            <!--begin::Info-->
                                            <div class="d-flex flex-column mr-auto">
                                                <!--begin: Title-->
                                                <a class="card-title text-hover-primary font-weight-bolder font-size-h5 text-dark mb-1"><?= $value['project_name'] ?></a>
                                                <span class="text-muted font-weight-bold">Captain : <?= $leader_name ?></span>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Toolbar-->
                                            <div class="card-toolbar mb-auto">
                                                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                                                    <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-item" data-toggle="modal" data-target="#modal-project-edit<?= $value['project_id']; ?>">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-writing"></i>
                                                                    </span>
                                                                    <span class="navi-text">Edit</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="<?= site_url("custom_project_prepared/delete_custom_project/" . $value['project_id']); ?>" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon-delete"></i>
                                                                    </span>
                                                                    <span class="navi-text">Delete</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Toolbar-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Content-->
                                        <div class="d-flex flex-wrap mt-14">
                                            <div class="mr-12 d-flex flex-column mb-7">
                                                <span class="d-block font-weight-bold mb-4">Start Date</span>
                                                <span class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text"><?= $value['start_date']; ?></span>
                                            </div>
                                            <div class="mr-12 d-flex flex-column mb-7">
                                                <span class="d-block font-weight-bold mb-4">Due Date</span>
                                                <span class="btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text"><?= $value['end_date']; ?></span>
                                            </div>
                                            <!--begin::Progress-->
                                            <div class="flex-row-fluid mb-7">
                                                <span class="d-block font-weight-bold mb-4">Progress</span>
                                                <div class="d-flex align-items-center pt-2">
                                                    <div class="progress progress-xs mt-2 mb-2 w-100">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="ml-3 font-weight-bolder">78%</span>
                                                </div>
                                            </div>
                                            <!--end::Progress-->
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Text-->
                                        <p class="mb-7 mt-3"><?= $value['detail_project']; ?></p>
                                        <!--end::Text-->
                                        <!--begin::Blog-->
                                        <div class="d-flex flex-wrap">
                                            <!--begin: Item-->
                                            <div class="mr-12 d-flex flex-column mb-7">
                                                <span class="font-weight-bolder mb-4">Budget</span>
                                                <span class="font-weight-bolder font-size-h5 pt-1">
                                                    <span class="font-weight-bold text-dark-50">$</span>249,500</span>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="mr-12 d-flex flex-column mb-7">
                                                <span class="font-weight-bolder mb-4">Expenses</span>
                                                <span class="font-weight-bolder font-size-h5 pt-1">
                                                    <span class="font-weight-bold text-dark-50">$</span>439,500</span>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-column flex-lg-fill float-left mb-7">
                                                <span class="font-weight-bolder mb-4">Members</span>
                                                <div class="symbol-group symbol-hover">
                                                    <?php
                                                    $project_id = ($value['project_id']);
                                                    $member = $this->m_project->project_meta($project_id);
                                                    foreach ($member as $key) :
                                                        $member_image = $this->m_project->get_image($key['member_id']);
                                                        $member_name = $this->m_project->get_name($key['member_id']);
                                                    ?>
                                                        <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="" data-original-title="<?= $member_name ?>">
                                                            <img alt="Pic" src="https://s.soloabadi.com/system-absen/asset/img/user/<?= $member_image['notes_pict'];  ?>">
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Blog-->
                                    </div>
                                    <!--end::Body-->
                                    <!--begin::Footer-->
                                    <div class="card-footer d-flex align-items-center">
                                        <div class="d-flex">
                                            <div class="d-flex align-items-center mr-7">
                                                <span class="svg-icon svg-icon-gray-500">
                                                    <!--begin::Svg Icon | path:<?= base_url('assets/'); ?>media/svg/icons/Text/Bullet-list.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" fill="#000000"></path>
                                                            <path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" fill="#000000" opacity="0.3"></path>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                                <a href="#" class="font-weight-bolder text-primary ml-2">72 Tasks</a>
                                            </div>
                                            <div class="d-flex align-items-center mr-7">
                                                <span class="svg-icon svg-icon-gray-500">
                                                    <!--begin::Svg Icon | path:<?= base_url('assets/'); ?>media/svg/icons/Communication/Group-chat.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"></path>
                                                            <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"></path>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                                <a href="#" class="font-weight-bolder text-primary ml-2">648 Comments</a>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-sm text-uppercase font-weight-bolder mt-5 mt-sm-0 mr-auto mr-sm-0 ml-sm-auto">details</button>
                                    </div>
                                    <!--end::Footer-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::content-->
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <!-- ====== -->
            <!--end::content-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->