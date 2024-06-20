@extends('admin.layouts.master')
@section('title', 'Dashboard')

@section('content')

<div class="row" style="row-gap: 15px;">
@if (auth()->user()->role == \App\Models\User::ADMIN_ROLE)
    <div class="col-sm-6 col-md-3">
        <a href="{{ route('admin.users.administrator.index') }}" class="card card-hover h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="card-info">
                        <p class="card-text mb-2">Administrator</p>
                        <div class="d-flex align-items-end mb-2">
                            <h4 class="card-title mb-0 me-2">{{ $data['count_admin'] }}</h4>
                        </div>
                    </div>
                    <div class="card-icon align-self-center">
                        <span class="badge bg-label-primary rounded p-2">
                        <i class="bx bx-user-pin bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-sm-6 col-md-3">
        <a href="{{ route('admin.users.staff.index') }}" class="card card-hover h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="card-info">
                        <p class="card-text mb-2">Staff</p>
                        <div class="d-flex align-items-end mb-2">
                            <h4 class="card-title mb-0 me-2">{{ $data['count_staff'] }}</h4>
                        </div>
                    </div>
                    <div class="card-icon align-self-center">
                        <span class="badge bg-label-primary rounded p-2">
                        <i class="bx bx-group bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-sm-6 col-md-3">
        <a href="{{ route('admin.destination.index') }}" class="card card-hover h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="card-info">
                        <p class="card-text mb-2">Destinasi</p>
                        <div class="d-flex align-items-end mb-2">
                            <h4 class="card-title mb-0 me-2">{{ $data['count_destination'] }}</h4>
                        </div>
                    </div>
                    <div class="card-icon align-self-center">
                        <span class="badge bg-label-primary rounded p-2">
                        <i class="bx bx-map-pin bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-sm-6 col-md-3">
        <a href="{{ route('admin.tour.index') }}" class="card card-hover h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="card-info">
                        <p class="card-text mb-2">Tour</p>
                        <div class="d-flex align-items-end mb-2">
                            <h4 class="card-title mb-0 me-2">{{ $data['count_tour'] }}</h4>
                        </div>
                    </div>
                    <div class="card-icon align-self-center">
                        <span class="badge bg-label-primary rounded p-2">
                        <i class="bx bx-trip bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-sm-6 col-md-4">
        <a href="{{ route('admin.tour.index') }}" class="card card-hover h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="card-info">
                        <p class="card-text mb-2">Total Booking Tour</p>
                        <div class="d-flex align-items-end mb-2">
                            <h4 class="card-title mb-0 me-2">{{ $data['count_booking'] }}</h4>
                        </div>
                    </div>
                    <div class="card-icon align-self-center">
                        <span class="badge bg-label-primary rounded p-2">
                        <i class="bx bx-book-bookmark bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-sm-6 col-md-4">
        <a href="{{ route('admin.tour.index') }}" class="card card-hover h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="card-info">
                        <p class="card-text mb-2">Total Customer Feedback</p>
                        <div class="d-flex align-items-end mb-2">
                            <h4 class="card-title mb-0 me-2">{{ $data['count_feedback'] }}</h4>
                        </div>
                    </div>
                    <div class="card-icon align-self-center">
                        <span class="badge bg-label-primary rounded p-2">
                        <i class="bx bx-question-mark bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-sm-6 col-md-4">
        <a href="{{ route('admin.tour.index') }}" class="card card-hover h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="card-info">
                        <p class="card-text mb-2">Total Klik Whatsapp</p>
                        <div class="d-flex align-items-end mb-2">
                            <h4 class="card-title mb-0 me-2">{{ $data['count_whatsapp'] }}</h4>
                        </div>
                    </div>
                    <div class="card-icon align-self-center">
                        <span class="badge bg-label-primary rounded p-2">
                        <i class="bx bxl-whatsapp bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </a>
    </div>
@else
    <div class="col-sm-6 col-md-4">
        <a href="{{ route('admin.users.staff.index') }}" class="card card-hover h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="card-info">
                        <p class="card-text mb-2">Staff</p>
                        <div class="d-flex align-items-end mb-2">
                            <h4 class="card-title mb-0 me-2">{{ $data['count_staff'] }}</h4>
                        </div>
                    </div>
                    <div class="card-icon align-self-center">
                        <span class="badge bg-label-primary rounded p-2">
                        <i class="bx bx-group bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-sm-6 col-md-4">
        <a href="{{ route('admin.destination.index') }}" class="card card-hover h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="card-info">
                        <p class="card-text mb-2">Destinasi</p>
                        <div class="d-flex align-items-end mb-2">
                            <h4 class="card-title mb-0 me-2">{{ $data['count_destination'] }}</h4>
                        </div>
                    </div>
                    <div class="card-icon align-self-center">
                        <span class="badge bg-label-primary rounded p-2">
                        <i class="bx bx-map-pin bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-sm-6 col-md-4">
        <a href="{{ route('admin.tour.index') }}" class="card card-hover h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="card-info">
                        <p class="card-text mb-2">Tour</p>
                        <div class="d-flex align-items-end mb-2">
                            <h4 class="card-title mb-0 me-2">{{ $data['count_tour'] }}</h4>
                        </div>
                    </div>
                    <div class="card-icon align-self-center">
                        <span class="badge bg-label-primary rounded p-2">
                        <i class="bx bx-trip bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </a>
    </div>
@endif
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Grafik Pengunjung Destinasi
                </h5>
            </div>
            <div class="card-body">
                <div id="donutChart"></div>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Grafik Pengunjung Berdasarkan Tour
                </h5>
            </div>
            <div class="card-body">
                <div id="lineChart"></div>
            </div>
        </div>
    </div>

</div>

@endsection

@push('script')
<script>
    const lineChartEl = document.querySelector('#lineChart'),
    lineChartConfig = {
        chart: {
            height: 400,
            type: 'line',
            parentHeightOffset: 0,
            zoom: {
                enabled: false
            },
            toolbar: {
                show: false
            }
        },
        series: [
            {
                data: @json($data['tour_line_graph']['series']->toArray())
            }
        ],
        markers: {
            strokeWidth: 7,
            strokeOpacity: 1,
            strokeColors: [config.colors.white],
            colors: [config.colors.primary]
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'straight'
        },
        colors: [config.colors.primary],
        grid: {
            borderColor: config.colors.borderColor,
            xaxis: {
                lines: {
                show: true
                }
            },
            padding: {
                top: -20,
            }
        },
        tooltip: {
            custom: function ({ series, seriesIndex, dataPointIndex, w }) {
                return '<div class="px-3 py-2">' + '<span>' + series[seriesIndex][dataPointIndex] + ' Pengunjung</span>' + '</div>';
            }
        },
        xaxis: {
            categories: @json($data['tour_line_graph']['categories']->toArray()),
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false
            },
            labels: {
                style: {
                    colors: config.colors.textMuted,
                    fontSize: '10px'
                }
            }
        },
        yaxis: {
            labels: {
                style: {
                    colors: config.colors.textMuted,
                    fontSize: '10px'
                }
            }
        }
    };
    if (typeof lineChartEl !== undefined && lineChartEl !== null) {
    const lineChart = new ApexCharts(lineChartEl, lineChartConfig);
    lineChart.render();
    }
</script>

@php
    $titleTopDestination = count($data['destination_donut_graph']) > 0 ? $data['destination_donut_graph'][$data['index_max_donut_graph']]['title'] : "-";
    $percentageTopDestination = count($data['destination_donut_graph']) > 0 ? $data['destination_donut_graph'][$data['index_max_donut_graph']]['percentage'] : "0";
@endphp

<script>
    const donutChartEl = document.querySelector('#donutChart'),
    donutChartConfig = {
        chart: {
            height: 390,
            type: 'donut'
        },
        labels: @json($data['destination_donut_graph']->pluck('title')->toArray()),
        series: @json($data['destination_donut_graph']->pluck('percentage')->toArray()),
        colors: @json($data['destination_donut_graph']->pluck('color')->toArray()),
        stroke: {
            show: false,
            curve: 'straight'
        },
        dataLabels: {
            enabled: true,
            formatter: function (val, opt) {
                return parseInt(val, 10) + '%';
            }
        },
        legend: {
            show: true,
            position: 'bottom',
            markers: { offsetX: -3 },
            itemMargin: {
                vertical: 3,
                horizontal: 10
            },
            labels: {
                colors: config.colors.textMuted,
                useSeriesColors: false
            }
        },
        plotOptions: {
            pie: {
                donut: {
                    labels: {
                        show: true,
                        name: {
                            fontSize: '2rem',
                            fontFamily: 'Open Sans'
                        },
                        value: {
                            fontSize: '1.2rem',
                            color: config.colors.textMuted,
                            fontFamily: 'Open Sans',
                            formatter: function (val) {
                                return parseInt(val, 10) + '%';
                            }
                        },
                        total: {
                            show: true,
                            fontSize: '1.2rem',
                            color: config.colors.black,
                            label: "{{ $titleTopDestination }}",
                            formatter: function (w) {
                                return "{{ $percentageTopDestination }}%";
                            }
                        }
                    }
                }
            }
        },
        responsive: [
            {
                breakpoint: 992,
                options: {
                    chart: {
                        height: 380
                    },
                    legend: {
                        position: 'bottom',
                        labels: {
                            colors: config.colors.textMuted,
                            useSeriesColors: false
                        }
                    }
                }
            },
            {
                breakpoint: 576,
                options: {
                    chart: {
                        height: 320
                    },
                    plotOptions: {
                        pie: {
                        donut: {
                            labels: {
                            show: true,
                            name: {
                                fontSize: '1.5rem'
                            },
                            value: {
                                fontSize: '1rem'
                            },
                            total: {
                                fontSize: '1.5rem'
                            }
                            }
                        }
                        }
                    },
                    legend: {
                        position: 'bottom',
                        labels: {
                        colors: config.colors.textMuted,
                            useSeriesColors: false
                        }
                    }
                }
            },
            {
                breakpoint: 420,
                options: {
                    chart: {
                        height: 280
                    },
                    legend: {
                        show: false
                    }
                }
            },
            {
                breakpoint: 360,
                options: {
                    chart: {
                        height: 250
                    },
                    legend: {
                        show: false
                    }
                }
            }
        ]
    };
    
    if (typeof donutChartEl !== undefined && donutChartEl !== null) {
        const donutChart = new ApexCharts(donutChartEl, donutChartConfig);
        donutChart.render();
    }
</script>
@endpush