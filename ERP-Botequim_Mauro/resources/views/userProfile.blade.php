@extends('Layout.top')
@section('content')
    {{-- Inicio do perfil do usuario --}}

    @role('admin')
        <main class="app-main">
            <!-- .wrapper -->
            <div class="wrapper">
                <!-- .page -->
                <div class="page">
                    <div class="page-inner">
                        <div class="page-section">
                            <!-- grid row -->
                            <div class="row">
                                <!-- grid column -->
                                <div class="col-lg-4">
                                    <!-- .card -->
                                    <div class="card card-fluid">
                                        <h6 class="card-header"> Your Details </h6><!-- .nav -->
                                        <nav class="nav nav-tabs flex-column border-0">
                                            <a href="user-profile-settings.html" class="nav-link active">Profile</a> <a
                                                href="user-account-settings.html" class="nav-link">Account</a> <a
                                                href="user-billing-settings.html" class="nav-link">Billing</a> <a
                                                href="user-notification-settings.html" class="nav-link">Notifications</a>
                                        </nav><!-- /.nav -->
                                    </div><!-- /.card -->
                                </div><!-- /grid column -->
                                <!-- grid column -->
                                <div class="col-lg-8">
                                    <!-- .card -->
                                    <div class="card card-fluid">
                                        <h6 class="card-header"> Public Profile </h6><!-- .card-body -->
                                        <div class="card-body">
                                            <!-- .media -->
                                            <div class="media mb-3">
                                                <!-- avatar -->
                                                <div class="user-avatar user-avatar-xl fileinput-button">
                                                    <div class="fileinput-button-label"> Change photo </div><img
                                                        src="assets/images/avatars/profile.jpg" alt=""> <input
                                                        id="fileupload-avatar" type="file" name="avatar">
                                                </div><!-- /avatar -->
                                                <!-- .media-body -->
                                                <div class="media-body pl-3">
                                                    <h3 class="card-title"> Public avatar </h3>
                                                    <h6 class="card-subtitle text-muted"> Click the current avatar to change
                                                        your
                                                        photo. </h6>
                                                    <p class="card-text">
                                                        <small>JPG, GIF or PNG 400x400, &lt; 2 MB.</small>
                                                    </p><!-- The avatar upload progress bar -->
                                                    <div id="progress-avatar" class="progress progress-xs fade">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                                            role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div><!-- /avatar upload progress bar -->
                                                </div><!-- /.media-body -->
                                            </div><!-- /.media -->
                                            <!-- form -->
                                            <form method="post">
                                                <!-- form row -->
                                                <div class="form-row">
                                                    <!-- form column -->
                                                    <label for="input01" class="col-md-3">Cover image</label>
                                                    <!-- /form column -->
                                                    <!-- form column -->
                                                    <div class="col-md-9 mb-3">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="input01"
                                                                multiple>
                                                            <label class="custom-file-label" for="input01">Choose cover</label>
                                                        </div><small class="text-muted">Upload a new cover image, JPG
                                                            1200x300</small>
                                                    </div><!-- /form column -->
                                                </div><!-- /form row -->
                                                <!-- form row -->
                                                <div class="form-row">
                                                    <!-- form column -->
                                                    <label for="input02" class="col-md-3">Company</label> <!-- /form column -->
                                                    <!-- form column -->
                                                    <div class="col-md-9 mb-3">
                                                        <input type="text" class="form-control" id="input02"
                                                            value="CreativeDivision">
                                                    </div><!-- /form column -->
                                                </div><!-- /form row -->
                                                <!-- form row -->
                                                <div class="form-row">
                                                    <!-- form column -->
                                                    <label for="input03" class="col-md-3">Profile Heading</label>
                                                    <!-- /form column -->
                                                    <!-- form column -->
                                                    <div class="col-md-9 mb-3">
                                                        <textarea class="form-control" id="input03">Huge fan of HTML, CSS and Javascript. Web design and open source lover.</textarea> <small class="text-muted">Appears on your
                                                            profile
                                                            page, 300
                                                            chars max.</small>
                                                    </div><!-- /form column -->
                                                </div><!-- /form row -->
                                                <!-- form row -->
                                                <div class="form-row">
                                                    <!-- form column -->
                                                    <label for="input04" class="col-md-3">Available for hire?</label>
                                                    <!-- /form column -->
                                                    <!-- form column -->
                                                    <div class="col-md-9 mb-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="input04"
                                                                checked> <label class="custom-control-label" for="input04">Yes,
                                                                hire me</label>
                                                        </div>
                                                    </div><!-- /form column -->
                                                </div><!-- /form row -->
                                                <hr>
                                                <!-- .form-actions -->
                                                <div class="form-actions">
                                                    <button type="submit" class="btn btn-primary ml-auto">Update
                                                        Profile</button>
                                                </div><!-- /.form-actions -->
                                            </form><!-- /form -->
                                        </div><!-- /.card-body -->
                                    </div><!-- /.card -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endrole

    @role('attendant')
    @endrole

    @role('stock_manager')
    @endrole

    @role('accountant')
    @endrole

    {{-- Fim do perfil do usuario --}}
@endsection
