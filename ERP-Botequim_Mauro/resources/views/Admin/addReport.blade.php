@extends('Layout.top')
@section('content')
    <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
            <!-- .page -->
            <div class="page ">
                <!-- .page-inner -->
                <div class="page-inner">
                    <!-- .page-title-bar -->
                    <header class="page-title-bar">
                        <!-- .d-flex -->
                        <!-- .nav-scroller -->
                        <div class="nav-scroller border-bottom">
                            <!-- .nav -->
                            <div class="nav nav-tabs">
                                <a class="nav-link active" href="page-team.html">Overview</a> 
                            </div><!-- /.nav -->
                        </div><!-- /.nav-scroller -->
                    </header><!-- /.page-title-bar -->
                    <!-- .page-section -->
                    <div class="page-section">
                        <!-- .section-block -->
                        <div class="section-block">
                            <!-- .metric-row -->
                            <div class="metric-row metric-flush">
                                <!-- metric column -->
                                <div class="col">
                                    <!-- .metric -->
                                    <a href="page-team-members.html" class="metric metric-bordered align-items-center">
                                        <h2 class="metric-label"> Members </h2>
                                        <p class="metric-value h3">
                                            <sub><i class="oi oi-people"></i></sub> <span class="value">12</span>
                                        </p>
                                    </a> <!-- /.metric -->
                                </div><!-- /metric column -->
                                <!-- metric column -->
                                <div class="col">
                                    <!-- .metric -->
                                    <a href="page-team-projects.html" class="metric metric-bordered align-items-center">
                                        <h2 class="metric-label"> Projects </h2>
                                        <p class="metric-value h3">
                                            <sub><i class="oi oi-fork"></i></sub> <span class="value">26</span>
                                        </p>
                                    </a> <!-- /.metric -->
                                </div><!-- /metric column -->
                                <!-- metric column -->
                                <div class="col">
                                    <!-- .metric -->
                                    <a href="page-team-projects.html" class="metric metric-bordered align-items-center">
                                        <h2 class="metric-label"> Active Projects </h2>
                                        <p class="metric-value h3">
                                            <sub><i class="oi oi-timer fa-lg"></i></sub> <span class="value">5</span>
                                        </p>
                                    </a> <!-- /.metric -->
                                </div><!-- /metric column -->
                            </div><!-- /.metric-row -->
                        </div><!-- /.section-block -->
                        <!-- .section-block -->
                        <div class="section-block d-flex justify-content-between align-items-center my-3">
                            <h1 class="section-title mb-0"> Achievement </h1><!-- .dropdown -->
                            <div class="dropdown">
                                <button class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><span>This Month</span> <i
                                        class="fa fa-fw fa-caret-down"></i></button> <!-- .dropdown-menu -->
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-md stop-propagation">
                                    <div class="dropdown-arrow"></div><!-- .custom-control -->
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="dpToday" name="dpFilter"
                                            value="0"> <label
                                            class="custom-control-label d-flex justify-content-between"
                                            for="dpToday"><span>Today</span> <span class="text-muted">Mar 27</span></label>
                                    </div><!-- /.custom-control -->
                                    <!-- .custom-control -->
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="dpYesterday" name="dpFilter"
                                            value="1"> <label
                                            class="custom-control-label d-flex justify-content-between"
                                            for="dpYesterday"><span>Yesterday</span> <span class="text-muted">Mar
                                                26</span></label>
                                    </div><!-- /.custom-control -->
                                    <!-- .custom-control -->
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="dpWeek" name="dpFilter"
                                            value="2"> <label
                                            class="custom-control-label d-flex justify-content-between"
                                            for="dpWeek"><span>This Week</span> <span class="text-muted">Mar
                                                21-27</span></label>
                                    </div><!-- /.custom-control -->
                                    <!-- .custom-control -->
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="dpMonth"
                                            name="dpFilter" value="3" checked> <label
                                            class="custom-control-label d-flex justify-content-between"
                                            for="dpMonth"><span>This Month</span> <span class="text-muted">Mar
                                                1-31</span></label>
                                    </div><!-- /.custom-control -->
                                    <!-- .custom-control -->
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="dpYear"
                                            name="dpFilter" value="4"> <label
                                            class="custom-control-label d-flex justify-content-between"
                                            for="dpYear"><span>This Year</span> <span
                                                class="text-muted">2019</span></label>
                                    </div><!-- /.custom-control -->
                                    <!-- .custom-control -->
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="dpCustom"
                                            name="dpFilter" value="5"> <label class="custom-control-label"
                                            for="dpCustom">Custom</label>
                                        <div class="custom-control-hint my-1">
                                            <!-- datepicker:range -->
                                            <input type="text" class="form-control" data-toggle="flatpickr"
                                                data-mode="range" data-date-format="Y-m-d"> <!-- /datepicker:range -->
                                        </div>
                                    </div><!-- /.custom-control -->
                                </div><!-- /.dropdown-menu -->
                            </div><!-- /.dropdown -->
                        </div><!-- /.section-block -->
                        <!-- .card -->
                        <div class="card card-body">
                            <!-- legend -->
                            <ul class="list-inline small">
                                <li class="list-inline-item">
                                    <i class="fa fa-fw fa-circle text-teal"></i> Projects
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-fw fa-circle text-purple"></i> Completed
                                </li>
                            </ul><!-- /legend -->
                            <div class="chartjs">
                                <canvas id="canvas-achievement"></canvas>
                            </div>
                        </div><!-- /.card -->
                        <!-- .card-deck-xl -->
                        <div class="card-deck-xl">
                            <!-- .card -->
                            <div class="card card-fluid">
                                <!-- .card-body -->
                                <div class="card-body">
                                    <h3 class="card-title"> Leads Funnel </h3>
                                    <h6 class="h2 mb-3"> 2,630 </h6><!-- .progress -->
                                    <div class="progress progress-animated rounded-0">
                                        <div class="progress-bar bg-purple" role="progressbar" style="width: 30%"
                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-pink" role="progressbar" style="width: 20.5%"
                                            aria-valuenow="20.5" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-yellow" role="progressbar" style="width: 13%"
                                            aria-valuenow="13" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-green" role="progressbar" style="width: 8.75%"
                                            aria-valuenow="8.75" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-teal" role="progressbar" style="width: 1.5%"
                                            aria-valuenow="1.5" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div><!-- /.progress -->
                                </div><!-- /.card-body -->
                                <!-- .list-group -->
                                <div class="list-group list-group-bordered list-group-reflow">
                                    <div class="list-group-item justify-content-between align-items-center">
                                        <span><i class="fas fa-square text-purple mr-2"></i> New</span> <span
                                            class="text-muted">30%</span>
                                    </div>
                                    <div class="list-group-item justify-content-between align-items-center">
                                        <span><i class="fas fa-square text-pink mr-2"></i> Initial Contact</span> <span
                                            class="text-muted">20.5%</span>
                                    </div>
                                    <div class="list-group-item justify-content-between align-items-center">
                                        <span><i class="fas fa-square text-yellow mr-2"></i> Qualified</span> <span
                                            class="text-muted">13%</span>
                                    </div>
                                    <div class="list-group-item justify-content-between align-items-center">
                                        <span><i class="fas fa-square text-green mr-2"></i> Proposal</span> <span
                                            class="text-muted">9.75%</span>
                                    </div>
                                    <div class="list-group-item justify-content-between align-items-center">
                                        <span><i class="fas fa-square text-teal mr-2"></i> Conversion to clients</span>
                                        <span class="text-muted">1.5%</span>
                                    </div>
                                </div><!-- /.list-group -->
                            </div><!-- /.card -->
                            <!-- .card -->
                            <div class="card card-fluid">
                                <!-- .card-body -->
                                <div class="card-body pb-0">
                                    <h3 class="card-title"> Leaderboards </h3><!-- legend -->
                                    <ul class="list-inline small">
                                        <li class="list-inline-item">
                                            <i class="fa fa-fw fa-square text-teal"></i> Mailchimp
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-fw fa-square text-indigo"></i> Facebook
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-fw fa-square text-pink"></i> Google
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-fw fa-square text-purple"></i> Linkedin
                                        </li>
                                    </ul><!-- /legend -->
                                </div><!-- /.card-body -->
                                <!-- .list-group -->
                                <div class="list-group list-group-flush">
                                    <!-- .list-group-item -->
                                    <div class="list-group-item">
                                        <!-- .list-group-item-figure -->
                                        <div class="list-group-item-figure">
                                            <a href="user-profile.html" class="user-avatar" data-toggle="tooltip"
                                                title="Martha Myers"><img src="assets/images/avatars/uifaces19.jpg"
                                                    alt=""></a>
                                        </div><!-- /.list-group-item-figure -->
                                        <!-- .list-group-item-body -->
                                        <div class="list-group-item-body">
                                            <!-- .progress -->
                                            <div class="progress progress-animated rounded-0" data-toggle="tooltip"
                                                data-html="true"
                                                title='&lt;div class="text-left small"&gt;&lt;i class="fa fa-fw fa-square text-teal"&gt;&lt;/i&gt; 275&lt;br&gt;&lt;i class="fa fa-fw fa-square text-indigo"&gt;&lt;/i&gt; 614&lt;br&gt;&lt;i class="fa fa-fw fa-square text-pink"&gt;&lt;/i&gt; 534&lt;br&gt;&lt;i class="fa fa-fw fa-square text-purple"&gt;&lt;/i&gt; 388&lt;/div&gt;'>
                                                <div class="progress-bar bg-teal" role="progressbar"
                                                    aria-valuenow="15.184980673660961" aria-valuemin="0"
                                                    aria-valuemax="100" style="width: 15.184980673660961%">
                                                    <span class="sr-only">15.184980673660961% Complete</span>
                                                </div>
                                                <div class="progress-bar bg-indigo" role="progressbar"
                                                    aria-valuenow="33.90392048591938" aria-valuemin="0"
                                                    aria-valuemax="100" style="width: 33.90392048591938%">
                                                    <span class="sr-only">33.90392048591938% Complete</span>
                                                </div>
                                                <div class="progress-bar bg-pink" role="progressbar"
                                                    aria-valuenow="29.486471562672556" aria-valuemin="0"
                                                    aria-valuemax="100" style="width: 29.486471562672556%">
                                                    <span class="sr-only">29.486471562672556% Complete</span>
                                                </div>
                                                <div class="progress-bar bg-purple" role="progressbar"
                                                    aria-valuenow="21.424627277747103" aria-valuemin="0"
                                                    aria-valuemax="100" style="width: 21.424627277747103%">
                                                    <span class="sr-only">21.424627277747103% Complete</span>
                                                </div>
                                            </div><!-- /.progress -->
                                        </div><!-- /.list-group-item-body -->
                                    </div><!-- /.list-group-item -->
                                    <!-- .list-group-item -->
                                    <div class="list-group-item">
                                        <!-- .list-group-item-figure -->
                                        <div class="list-group-item-figure">
                                            <a href="user-profile.html" class="user-avatar" data-toggle="tooltip"
                                                title="Tammy Beck"><img src="assets/images/avatars/uifaces15.jpg"
                                                    alt=""></a>
                                        </div><!-- /.list-group-item-figure -->
                                        <!-- .list-group-item-body -->
                                        <div class="list-group-item-body">
                                            <!-- .progress -->
                                            <div class="progress progress-animated rounded-0" data-toggle="tooltip"
                                                data-html="true"
                                                title='&lt;div class="text-left small"&gt;&lt;i class="fa fa-fw fa-square text-teal"&gt;&lt;/i&gt; 556&lt;br&gt;&lt;i class="fa fa-fw fa-square text-indigo"&gt;&lt;/i&gt; 406&lt;br&gt;&lt;i class="fa fa-fw fa-square text-pink"&gt;&lt;/i&gt; 432&lt;br&gt;&lt;i class="fa fa-fw fa-square text-purple"&gt;&lt;/i&gt; 249&lt;/div&gt;'>
                                                <div class="progress-bar bg-teal" role="progressbar"
                                                    aria-valuenow="33.84053560559951" aria-valuemin="0"
                                                    aria-valuemax="100" style="width: 33.84053560559951%">
                                                    <span class="sr-only">33.84053560559951% Complete</span>
                                                </div>
                                                <div class="progress-bar bg-indigo" role="progressbar"
                                                    aria-valuenow="24.71089470480828" aria-valuemin="0"
                                                    aria-valuemax="100" style="width: 24.71089470480828%">
                                                    <span class="sr-only">24.71089470480828% Complete</span>
                                                </div>
                                                <div class="progress-bar bg-pink" role="progressbar"
                                                    aria-valuenow="26.29336579427876" aria-valuemin="0"
                                                    aria-valuemax="100" style="width: 26.29336579427876%">
                                                    <span class="sr-only">26.29336579427876% Complete</span>
                                                </div>
                                                <div class="progress-bar bg-purple" role="progressbar"
                                                    aria-valuenow="15.15520389531345" aria-valuemin="0"
                                                    aria-valuemax="100" style="width: 15.15520389531345%">
                                                    <span class="sr-only">15.15520389531345% Complete</span>
                                                </div>
                                            </div><!-- /.progress -->
                                        </div><!-- /.list-group-item-body -->
                                    </div><!-- /.list-group-item -->
                                    <!-- .list-group-item -->
                                    <div class="list-group-item">
                                        <!-- .list-group-item-figure -->
                                        <div class="list-group-item-figure">
                                            <a href="user-profile.html" class="user-avatar" data-toggle="tooltip"
                                                title="Susan Kelley"><img src="assets/images/avatars/uifaces17.jpg"
                                                    alt=""></a>
                                        </div><!-- /.list-group-item-figure -->
                                        <!-- .list-group-item-body -->
                                        <div class="list-group-item-body">
                                            <!-- .progress -->
                                            <div class="progress progress-animated rounded-0" data-toggle="tooltip"
                                                data-html="true"
                                                title='&lt;div class="text-left small"&gt;&lt;i class="fa fa-fw fa-square text-teal"&gt;&lt;/i&gt; 98&lt;br&gt;&lt;i class="fa fa-fw fa-square text-indigo"&gt;&lt;/i&gt; 587&lt;br&gt;&lt;i class="fa fa-fw fa-square text-pink"&gt;&lt;/i&gt; 271&lt;br&gt;&lt;i class="fa fa-fw fa-square text-purple"&gt;&lt;/i&gt; 482&lt;/div&gt;'>
                                                <div class="progress-bar bg-teal" role="progressbar"
                                                    aria-valuenow="6.815020862308762" aria-valuemin="0"
                                                    aria-valuemax="100" style="width: 6.815020862308762%">
                                                    <span class="sr-only">6.815020862308762% Complete</span>
                                                </div>
                                                <div class="progress-bar bg-indigo" role="progressbar"
                                                    aria-valuenow="40.82058414464534" aria-valuemin="0"
                                                    aria-valuemax="100" style="width: 40.82058414464534%">
                                                    <span class="sr-only">40.82058414464534% Complete</span>
                                                </div>
                                                <div class="progress-bar bg-pink" role="progressbar"
                                                    aria-valuenow="18.845618915159946" aria-valuemin="0"
                                                    aria-valuemax="100" style="width: 18.845618915159946%">
                                                    <span class="sr-only">18.845618915159946% Complete</span>
                                                </div>
                                                <div class="progress-bar bg-purple" role="progressbar"
                                                    aria-valuenow="33.51877607788595" aria-valuemin="0"
                                                    aria-valuemax="100" style="width: 33.51877607788595%">
                                                    <span class="sr-only">33.51877607788595% Complete</span>
                                                </div>
                                            </div><!-- /.progress -->
                                        </div><!-- /.list-group-item-body -->
                                    </div><!-- /.list-group-item -->
                                    <!-- .list-group-item -->
                                    <div class="list-group-item">
                                        <!-- .list-group-item-figure -->
                                        <div class="list-group-item-figure">
                                            <a href="user-profile.html" class="user-avatar" data-toggle="tooltip"
                                                title="Albert Newman"><img src="assets/images/avatars/uifaces18.jpg"
                                                    alt=""></a>
                                        </div><!-- /.list-group-item-figure -->
                                        <!-- .list-group-item-body -->
                                        <div class="list-group-item-body">
                                            <!-- .progress -->
                                            <div class="progress progress-animated rounded-0" data-toggle="tooltip"
                                                data-html="true"
                                                title='&lt;div class="text-left small"&gt;&lt;i class="fa fa-fw fa-square text-teal"&gt;&lt;/i&gt; 248&lt;br&gt;&lt;i class="fa fa-fw fa-square text-indigo"&gt;&lt;/i&gt; 205&lt;br&gt;&lt;i class="fa fa-fw fa-square text-pink"&gt;&lt;/i&gt; 427&lt;br&gt;&lt;i class="fa fa-fw fa-square text-purple"&gt;&lt;/i&gt; 151&lt;/div&gt;'>
                                                <div class="progress-bar bg-teal" role="progressbar"
                                                    aria-valuenow="24.05431619786615" aria-valuemin="0"
                                                    aria-valuemax="100" style="width: 24.05431619786615%">
                                                    <span class="sr-only">24.05431619786615% Complete</span>
                                                </div>
                                                <div class="progress-bar bg-indigo" role="progressbar"
                                                    aria-valuenow="19.88360814742968" aria-valuemin="0"
                                                    aria-valuemax="100" style="width: 19.88360814742968%">
                                                    <span class="sr-only">19.88360814742968% Complete</span>
                                                </div>
                                                <div class="progress-bar bg-pink" role="progressbar"
                                                    aria-valuenow="41.41610087293889" aria-valuemin="0"
                                                    aria-valuemax="100" style="width: 41.41610087293889%">
                                                    <span class="sr-only">41.41610087293889% Complete</span>
                                                </div>
                                                <div class="progress-bar bg-purple" role="progressbar"
                                                    aria-valuenow="14.645974781765277" aria-valuemin="0"
                                                    aria-valuemax="100" style="width: 14.645974781765277%">
                                                    <span class="sr-only">14.645974781765277% Complete</span>
                                                </div>
                                            </div><!-- /.progress -->
                                        </div><!-- /.list-group-item-body -->
                                    </div><!-- /.list-group-item -->
                                    <!-- .list-group-item -->
                                    <div class="list-group-item">
                                        <!-- .list-group-item-figure -->
                                        <div class="list-group-item-figure">
                                            <a href="user-profile.html" class="user-avatar" data-toggle="tooltip"
                                                title="Kyle Grant"><img src="assets/images/avatars/uifaces16.jpg"
                                                    alt=""></a>
                                        </div><!-- /.list-group-item-figure -->
                                        <!-- .list-group-item-body -->
                                        <div class="list-group-item-body">
                                            <!-- .progress -->
                                            <div class="progress progress-animated rounded-0" data-toggle="tooltip"
                                                data-html="true"
                                                title='&lt;div class="text-left small"&gt;&lt;i class="fa fa-fw fa-square text-teal"&gt;&lt;/i&gt; 108&lt;br&gt;&lt;i class="fa fa-fw fa-square text-indigo"&gt;&lt;/i&gt; 265&lt;br&gt;&lt;i class="fa fa-fw fa-square text-pink"&gt;&lt;/i&gt; 443&lt;br&gt;&lt;i class="fa fa-fw fa-square text-purple"&gt;&lt;/i&gt; 127&lt;/div&gt;'>
                                                <div class="progress-bar bg-teal" role="progressbar"
                                                    aria-valuenow="11.452810180275716" aria-valuemin="0"
                                                    aria-valuemax="100" style="width: 11.452810180275716%">
                                                    <span class="sr-only">11.452810180275716% Complete</span>
                                                </div>
                                                <div class="progress-bar bg-indigo" role="progressbar"
                                                    aria-valuenow="28.101802757158005" aria-valuemin="0"
                                                    aria-valuemax="100" style="width: 28.101802757158005%">
                                                    <span class="sr-only">28.101802757158005% Complete</span>
                                                </div>
                                                <div class="progress-bar bg-pink" role="progressbar"
                                                    aria-valuenow="46.977730646871684" aria-valuemin="0"
                                                    aria-valuemax="100" style="width: 46.977730646871684%">
                                                    <span class="sr-only">46.977730646871684% Complete</span>
                                                </div>
                                                <div class="progress-bar bg-purple" role="progressbar"
                                                    aria-valuenow="13.467656415694591" aria-valuemin="0"
                                                    aria-valuemax="100" style="width: 13.467656415694591%">
                                                    <span class="sr-only">13.467656415694591% Complete</span>
                                                </div>
                                            </div><!-- /.progress -->
                                        </div><!-- /.list-group-item-body -->
                                    </div><!-- /.list-group-item -->
                                </div><!-- /.list-group -->
                            </div><!-- /.card -->
                        </div><!-- /.card-deck-xl -->
                    </div><!-- /.page-section -->
                </div><!-- /.page-inner -->
                <!-- .page-sidebar -->
                <!-- /.page-sidebar -->
            </div><!-- /.page -->
        </div><!-- /.wrapper -->
    </main> {{-- Fim da parte de relatorio --}}
@endsection
