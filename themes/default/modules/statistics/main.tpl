<!-- BEGIN: main -->
<script type="text/javascript" src="{NV_STATIC_URL}{NV_ASSETS_DIR}/js/chart/Chart.bundle.min.js"></script>

<!-- BEGIN: hour -->
<div class="panel panel-default">
    <div class="panel-heading"><i class="fa fa-fw fa-line-chart"></i>{CTS.caption}</div>
    <div class="panel-body">
        <canvas id="canvas_hour"></canvas>
    </div>
    <div class="panel-footer">
        <div class="text-right">
            {CTS.total.0}: <strong>{CTS.total.1}</strong>
        </div>
    </div>
</div>
<script type="text/javascript">
var config_hour = {
    type: 'line',
    data: {
        labels: [{DATA_LABEL}],
        datasets: [{
            label: "",
            backgroundColor: 'rgb(54, 162, 235)',
            borderColor: 'rgb(54, 162, 235)',
            data: [{DATA_VALUE}],
            fill: false,
        }]
    },
    options: {
        responsive: true,
        legend: {
            display: false
        },
        tooltips: {
            mode: 'index',
            intersect: false,
            titleMarginBottom: 2,
            callbacks: {
                title: function(a, b) {
                    return number_format(b.datasets[0].data[a[0].index], 0, ',', '.') + ' {LANG.access_times1}'
                },
                label: function(a, b) {
                    return null;
                }
            }
        },
        hover: {
            mode: 'nearest',
            intersect: true
        },
        scales: {
            xAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: '{LANG.hour}'
                }
            }],
            yAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: '{LANG.access_times}'
                },
                ticks: {
                    //stepSize: 1
                }
            }]
        }
    }
};
$(function() {
    new Chart(document.getElementById("canvas_hour").getContext("2d"), config_hour);
});
</script>
<!-- END: hour -->

<!-- BEGIN: day_k -->
<div class="panel panel-default">
    <div class="panel-heading"><i class="fa fa-fw fa-line-chart"></i>{CTS.caption}</div>
    <div class="panel-body">
        <canvas id="canvas_weekday"></canvas>
    </div>
    <div class="panel-footer">
        <div class="text-right">
            {CTS.total.0}: <strong>{CTS.total.1}</strong>
        </div>
    </div>
</div>
<script type="text/javascript">
var config_day_k = {
    type: 'pie',
    data: {
        labels: [{DATA_LABEL}],
        datasets: [{
            label: "",
            backgroundColor: [{DATA_BGCOLOR}],
            data: [{DATA_VALUE}]
        }]
    },
    options: {
        responsive: true,
        legend: {
            display: true
        },
        tooltips: {
            mode: 'index',
            intersect: false,
            titleMarginBottom: 2,
            callbacks: {
                title: function(a, b) {
                    return number_format(b.datasets[0].data[a[0].index], 0, ',', '.') + ' {LANG.access_times1}'
                },
                label: function(a, b) {
                    return null;
                }
            }
        },
    }
};
$(function() {
    new Chart(document.getElementById("canvas_weekday").getContext("2d"), config_day_k);
});
</script>
<!-- END: day_k -->

<!-- BEGIN: day_m -->
<div class="panel panel-default">
    <div class="panel-heading"><i class="fa fa-fw fa-line-chart"></i>{CTS.caption}</div>
    <div class="panel-body">
        <canvas id="canvas_day_m"></canvas>
    </div>
    <div class="panel-footer">
        <div class="text-right">
            {CTS.total.0}: <strong>{CTS.total.1}</strong>
        </div>
    </div>
</div>
<script type="text/javascript">
var config_day_m = {
    type: 'line',
    data: {
        labels: [{DATA_LABEL}],
        datasets: [{
            label: "",
            backgroundColor: 'rgb(54, 162, 235)',
            borderColor: 'rgb(54, 162, 235)',
            data: [{DATA_VALUE}],
            fill: false,
        }]
    },
    options: {
        responsive: true,
        legend: {
            display: false
        },
        tooltips: {
            mode: 'index',
            intersect: false,
            titleMarginBottom: 2,
            callbacks: {
                title: function(a, b) {
                    return number_format(b.datasets[0].data[a[0].index], 0, ',', '.') + ' {LANG.access_times1}'
                },
                label: function(a, b) {
                    return null;
                }
            }
        },
        hover: {
            mode: 'nearest',
            intersect: true
        },
        scales: {
            xAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: '{LANG.day}'
                }
            }],
            yAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: '{LANG.access_times}'
                },
                ticks: {
                    //stepSize: 1
                }
            }]
        }
    }
};
$(function() {
    new Chart(document.getElementById("canvas_day_m").getContext("2d"), config_day_m);
});
</script>
<!-- END: day_m -->

<!-- BEGIN: month -->
<div class="panel panel-default">
    <div class="panel-heading"><i class="fa fa-fw fa-line-chart"></i>{CTS.caption}</div>
    <div class="panel-body">
        <canvas id="canvas_month"></canvas>
    </div>
    <div class="panel-footer">
        <div class="text-right">
            {CTS.total.0}: <strong>{CTS.total.1}</strong>
        </div>
    </div>
</div>
<script type="text/javascript">
var config_month = {
    type: 'line',
    data: {
        labels: [{DATA_LABEL}],
        datasets: [{
            label: "",
            backgroundColor: 'rgb(54, 162, 235)',
            borderColor: 'rgb(54, 162, 235)',
            data: [{DATA_VALUE}],
            fill: false,
        }]
    },
    options: {
        responsive: true,
        legend: {
            display: false
        },
        tooltips: {
            mode: 'index',
            intersect: false,
            titleMarginBottom: 2,
            callbacks: {
                title: function(a, b) {
                    return number_format(b.datasets[0].data[a[0].index], 0, ',', '.') + ' {LANG.access_times1}'
                },
                label: function(a, b) {
                    return null;
                }
            }
        },
        hover: {
            mode: 'nearest',
            intersect: true
        },
        scales: {
            xAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: '{LANG.month}'
                }
            }],
            yAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: '{LANG.access_times}'
                },
                ticks: {
                    //stepSize: 1
                }
            }]
        }
    }
};
$(function() {
    new Chart(document.getElementById("canvas_month").getContext("2d"), config_month);
});
</script>
<!-- END: month -->

<!-- BEGIN: year -->
<div class="panel panel-default">
    <div class="panel-heading"><i class="fa fa-fw fa-line-chart"></i>{CTS.caption}</div>
    <div class="panel-body">
        <canvas id="canvas_year"></canvas>
    </div>
    <div class="panel-footer">
        <div class="text-right">
            {CTS.total.0}: <strong>{CTS.total.1}</strong>
        </div>
    </div>
</div>
<script type="text/javascript">
var config_year = {
    type: 'line',
    data: {
        labels: [{DATA_LABEL}],
        datasets: [{
            label: "",
            backgroundColor: 'rgb(54, 162, 235)',
            borderColor: 'rgb(54, 162, 235)',
            data: [{DATA_VALUE}],
            fill: false,
        }]
    },
    options: {
        responsive: true,
        legend: {
            display: false
        },
        tooltips: {
            mode: 'index',
            intersect: false,
            titleMarginBottom: 2,
            callbacks: {
                title: function(a, b) {
                    return number_format(b.datasets[0].data[a[0].index], 0, ',', '.') + ' {LANG.access_times1}'
                },
                label: function(a, b) {
                    return null;
                }
            }
        },
        hover: {
            mode: 'nearest',
            intersect: true
        },
        scales: {
            xAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: '{LANG.year}'
                }
            }],
            yAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: '{LANG.access_times}'
                },
                ticks: {
                    //stepSize: 1
                }
            }]
        }
    }
};
$(function() {
    new Chart(document.getElementById("canvas_year").getContext("2d"), config_year);
});
</script>
<!-- END: year -->

<!-- BEGIN: ct -->
<div class="statistics-responsive">
	<table summary="{CTS.caption}" class="table table-bordered table-striped statistics">
		<caption> {CTS.caption}</caption>
		<tbody>
			<tr>
				<th colspan="2">{CTS.thead.0}</th>
				<th class="text-right">{CTS.thead.1}</th>
				<th></th>
				<th>{CTS.thead.2}</th>
			</tr>
			<!-- BEGIN: loop -->
			<tr>
				<td>{VALUE.0}</td>
				<td>{KEY}</td>
				<td class="text-right">{VALUE.1}</td>
				<td>
				<!-- BEGIN: img -->
				<img alt="Statistics image" src="{SRC}" height="10" width="{WIDTH}" />
				<!-- END: img -->
				</td>
				<td class="w250">{VALUE.2}</td>
			</tr>
			<!-- END: loop -->
			<!-- BEGIN: ot -->
			<tr>
				<td>{CTS.others.0}</td>
				<td class="text-right">{CTS.others.1}</td>
				<td colspan="3"><a href="{URL}">{CTS.others.2}</a></td>
			</tr>
			<!-- END: ot -->
		</tbody>
	</table>
</div>
<!-- END: ct -->

<!-- BEGIN: br -->
<div class="statistics-responsive">
	<table summary="{CTS.caption}" class="table table-bordered table-striped statistics">
		<caption> {CTS.caption}</caption>
		<tbody>
			<tr>
				<th>{CTS.thead.0}</th>
				<th class="text-right">{CTS.thead.1}</th>
				<th></th>
				<th>{CTS.thead.2}</th>
			</tr>
			<!-- BEGIN: loop -->
			<tr>
				<td>{KEY}</td>
				<td class="text-right">{VALUE.0}</td>
				<td>
				<!-- BEGIN: img -->
				<img alt="Statistics image" src="{SRC}" height="10" width="{WIDTH}" />
				<!-- END: loop -->
				</td>
				<td class="w250">{VALUE.1}</td>
			</tr>
			<!-- END: loop -->
			<!-- BEGIN: ot -->
			<tr>
				<td>{CTS.others.0}</td>
				<td class="text-right">{CTS.others.1}</td>
				<td colspan="2"><a href="{URL}">{CTS.others.2}</a></td>
			</tr>
			<!-- END: ot -->
		</tbody>
	</table>
</div>
<!-- END: br -->

<!-- BEGIN: os -->
<div class="statistics-responsive">
	<table summary="{CTS.caption}" class="table table-bordered table-striped statistics">
		<caption> {CTS.caption}</caption>
		<tbody>
			<tr>
				<th>{CTS.thead.0}</th>
				<th class="text-right">{CTS.thead.1}</th>
				<th></th>
				<th>{CTS.thead.2}</th>
			</tr>
			<!-- BEGIN: loop -->
			<tr>
				<td>{KEY}</td>
				<td class="text-right">{VALUE.0}</td>
				<td>
				<!-- BEGIN: img -->
				<img alt="Statistics image" src="{SRC}" height="10" width="{WIDTH}" />
				<!-- END: img -->
				</td>
				<td class="w250">{VALUE.1}</td>
			</tr>
			<!-- END: loop -->
			<!-- BEGIN: ot -->
			<tr>
				<td>{CTS.others.0}</td>
				<td class="text-right">{CTS.others.1}</td>
				<td colspan="2"><a href="{URL}">{CTS.others.2}</a></td>
			</tr>
			<!-- END: ot -->
		</tbody>
	</table>
</div>
<!-- END: os -->
<!-- END: main -->