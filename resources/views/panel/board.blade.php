@extends('layouts.main')

@section('title', 'Board')
@section('module', 'Board')
@section('path', 'Board')

@section('content')
    <!-- start: page -->
    <div class="row">
        <div class="col-md-6 col-lg-12 col-xl-6">
            <section class="panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="chart-data-selector" id="salesSelectorWrapper">
                                <h2>
                                    Просмотры:
                                    <strong>
                                        <select class="form-control" id="salesSelector">
                                            <option value="Porto Admin" selected>За год</option>
                                            <option value="Porto Drupal" >За месяц</option>
                                            <option value="Porto Wordpress" >За день</option>
                                        </select>
                                    </strong>
                                </h2>

                                <div id="salesSelectorItems" class="chart-data-selector-items mt-sm">
                                    <!-- Flot: Sales Porto Admin -->
                                    <div class="chart chart-sm" data-sales-rel="Porto Admin" id="flotDashSales1" class="chart-active"></div>
                                    <script>

                                        var flotDashSales1Data = [{
                                            data: [
                                                ["Jan", 140],
                                                ["Feb", 240],
                                                ["Mar", 190],
                                                ["Apr", 140],
                                                ["May", 180],
                                                ["Jun", 320],
                                                ["Jul", 270],
                                                ["Aug", 180]
                                            ],
                                            color: "#0088cc"
                                        }];

                                        // See: assets/javascripts/dashboard/examples.dashboard.js for more settings.

                                    </script>

                                    <!-- Flot: Sales Porto Drupal -->
                                    <div class="chart chart-sm" data-sales-rel="Porto Drupal" id="flotDashSales2" class="chart-hidden"></div>
                                    <script>

                                        var flotDashSales2Data = [{
                                            data: [
                                                ["Jan", 240],
                                                ["Feb", 240],
                                                ["Mar", 290],
                                                ["Apr", 540],
                                                ["May", 480],
                                                ["Jun", 220],
                                                ["Jul", 170],
                                                ["Aug", 190]
                                            ],
                                            color: "#2baab1"
                                        }];

                                        // See: assets/javascripts/dashboard/examples.dashboard.js for more settings.

                                    </script>

                                    <!-- Flot: Sales Porto Wordpress -->
                                    <div class="chart chart-sm" data-sales-rel="Porto Wordpress" id="flotDashSales3" class="chart-hidden"></div>
                                    <script>

                                        var flotDashSales3Data = [{
                                            data: [
                                                ["Jan", 840],
                                                ["Feb", 740],
                                                ["Mar", 690],
                                                ["Apr", 940],
                                                ["May", 1180],
                                                ["Jun", 820],
                                                ["Jul", 570],
                                                ["Aug", 780]
                                            ],
                                            color: "#734ba9"
                                        }];

                                        // See: assets/javascripts/dashboard/examples.dashboard.js for more settings.

                                    </script>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 text-center">
                            <h2 class="panel-title mt-md">Цель</h2>
                            <div class="liquid-meter-wrapper liquid-meter-sm mt-lg">
                                <div class="liquid-meter">
                                    <meter min="0" max="100" value="35" id="meterSales"></meter>
                                </div>
                                <div class="liquid-meter-selector" id="meterSalesSel">
                                    <a href="#" data-val="35" class="active">Monthly Goal</a>
                                    <a href="#" data-val="28">Annual Goal</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-md-6 col-lg-12 col-xl-6">
            <div class="row">
                <div class="col-md-12 col-lg-6 col-xl-6">
                    <section class="panel panel-featured-left panel-featured-primary">
                        <div class="panel-body">
                            <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div class="summary-icon bg-primary">
                                        <i class="fa fa-life-ring"></i>
                                    </div>
                                </div>
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <h4 class="title">Посящений за сегодня</h4>
                                        <div class="info">
                                            <strong class="amount">1281</strong>
                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <a class="text-muted text-uppercase">(view all)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-6">
                    <section class="panel panel-featured-left panel-featured-secondary">
                        <div class="panel-body">
                            <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div class="summary-icon bg-secondary">
                                        <i class="fa fa-usd"></i>
                                    </div>
                                </div>
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <h4 class="title">Прибыль</h4>
                                        <div class="info">
                                            <strong class="amount">$ 14,890.30</strong>
                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <a class="text-muted text-uppercase">(withdraw)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-6">
                    <section class="panel panel-featured-left panel-featured-tertiary">
                        <div class="panel-body">
                            <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div class="summary-icon bg-tertiary">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                </div>
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <h4 class="title">Заказы за сегодня</h4>
                                        <div class="info">
                                            <strong class="amount">38</strong>
                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <a class="text-muted text-uppercase">(statement)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-6">
                    <section class="panel panel-featured-left panel-featured-quartenary">
                        <div class="panel-body">
                            <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div class="summary-icon bg-quartenary">
                                        <i class="fa fa-user"></i>
                                    </div>
                                </div>
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <h4 class="title">Просмотров за сегодня</h4>
                                        <div class="info">
                                            <strong class="amount">3765</strong>
                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <a class="text-muted text-uppercase">(report)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-lg-6">
            <section class="panel panel-transparent">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                    </div>

                    <h2 class="panel-title">Профиль</h2>
                </header>
                <div class="panel-body">
                    <section class="panel panel-group">
                        <header class="panel-heading bg-primary">

                            <div class="widget-profile-info">
                                <div class="profile-picture">
                                    <img src="/assets/images/!logged-user.jpg">
                                </div>
                                <div class="profile-info">
                                    <h4 class="name text-weight-semibold">John Doe</h4>
                                    <h5 class="role">Administrator</h5>
                                    <div class="profile-footer">
                                        <a href="#">(edit profile)</a>
                                    </div>
                                </div>
                            </div>

                        </header>
                        <div id="accordion">
                            <div class="panel panel-accordion panel-accordion-first">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1One">
                                            <i class="fa fa-check"></i> Tasks
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse1One" class="accordion-body collapse in">
                                    <div class="panel-body">
                                        <ul class="widget-todo-list">
                                            <li>
                                                <div class="checkbox-custom checkbox-default">
                                                    <input type="checkbox" checked="" id="todoListItem1" class="todo-check">
                                                    <label class="todo-label" for="todoListItem1"><span>Lorem ipsum dolor sit amet</span></label>
                                                </div>
                                                <div class="todo-actions">
                                                    <a class="todo-remove" href="#">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox-custom checkbox-default">
                                                    <input type="checkbox" id="todoListItem2" class="todo-check">
                                                    <label class="todo-label" for="todoListItem2"><span>Lorem ipsum dolor sit amet</span></label>
                                                </div>
                                                <div class="todo-actions">
                                                    <a class="todo-remove" href="#">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox-custom checkbox-default">
                                                    <input type="checkbox" id="todoListItem3" class="todo-check">
                                                    <label class="todo-label" for="todoListItem3"><span>Lorem ipsum dolor sit amet</span></label>
                                                </div>
                                                <div class="todo-actions">
                                                    <a class="todo-remove" href="#">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox-custom checkbox-default">
                                                    <input type="checkbox" id="todoListItem4" class="todo-check">
                                                    <label class="todo-label" for="todoListItem4"><span>Lorem ipsum dolor sit amet</span></label>
                                                </div>
                                                <div class="todo-actions">
                                                    <a class="todo-remove" href="#">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox-custom checkbox-default">
                                                    <input type="checkbox" id="todoListItem5" class="todo-check">
                                                    <label class="todo-label" for="todoListItem5"><span>Lorem ipsum dolor sit amet</span></label>
                                                </div>
                                                <div class="todo-actions">
                                                    <a class="todo-remove" href="#">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox-custom checkbox-default">
                                                    <input type="checkbox" id="todoListItem6" class="todo-check">
                                                    <label class="todo-label" for="todoListItem6"><span>Lorem ipsum dolor sit amet</span></label>
                                                </div>
                                                <div class="todo-actions">
                                                    <a class="todo-remove" href="#">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                        <hr class="solid mt-sm mb-lg">
                                        <form method="get" class="form-horizontal form-bordered">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <div class="input-group mb-md">
                                                        <input type="text" class="form-control">
                                                        <div class="input-group-btn">
                                                            <button type="button" class="btn btn-primary" tabindex="-1">Add</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>

                </div>
            </section>
        </div>
        <div class="col-xl-3 col-lg-6">
            <section class="panel panel-transparent">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                    </div>

                    <h2 class="panel-title">Проект</h2>
                </header>
                <div class="panel-body">
                    <section class="panel">
                        <div class="panel-body">
                            <div class="small-chart pull-right" id="sparklineBarDash"></div>
                            <script type="text/javascript">
                                var sparklineBarDashData = [5, 6, 7, 2, 0, 4 , 2, 4, 2, 0, 4 , 2, 4, 2, 0, 4];
                            </script>
                            <div class="h4 text-weight-bold mb-none">488</div>
                            <p class="text-xs text-muted mb-none">Всего статей</p>
                        </div>
                    </section>
                    <section class="panel">
                        <div class="panel-body">
                            <div class="circular-bar circular-bar-xs m-none mt-xs mr-md pull-right">
                                <div class="circular-bar-chart" data-percent="45" data-plugin-options='{ "barColor": "#2baab1", "delay": 300, "size": 50, "lineWidth": 4 }'>
                                    <strong>Average</strong>
                                    <label><span class="percent">45</span>%</label>
                                </div>
                            </div>
                            <div class="h4 text-weight-bold mb-none">12</div>
                            <p class="text-xs text-muted mb-none">Всего товаров</p>
                        </div>
                    </section>
                    <section class="panel">
                        <div class="panel-body">
                            <div class="small-chart pull-right" id="sparklineLineDash"></div>
                            <script type="text/javascript">
                                var sparklineLineDashData = [15, 16, 17, 19, 10, 15, 13, 12, 12, 14, 16, 17];
                            </script>
                            <div class="h4 text-weight-bold mb-none">89</div>
                            <p class="text-xs text-muted mb-none">Всего пользователей</p>
                        </div>
                    </section>
                </div>
            </section>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <section class="panel">
                <header class="panel-heading panel-heading-transparent">
                    <div class="panel-actions">
                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                    </div>

                    <h2 class="panel-title">Проекты</h2>
                </header>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped mb-none">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Project</th>
                                <th>Status</th>
                                <th>Progress</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($projects as $project)
                                <tr class="project-item {{$project->isSelected() ? 'selected-project' : ''}}" data-id="{{$project->id}}" style="cursor: pointer">
                                    <td>{{$project->id}}</td>
                                    <td>{{$project->title}}</td>
                                    <td><span class="label label-success">Success</span></td>
                                    <td>
                                        <div class="progress progress-sm progress-half-rounded m-none mt-xs light">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                100%
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- end: page -->
@endsection
