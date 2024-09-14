@extends('layouts.app')
@section('content')
    <div class="page">
        <div class="page-wrapper">
            <!-- Page header -->
            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <!-- Page pre-title -->
                            <h2 class="page-title">
                                <svg xmlns="http://www.w3.org/2000/svg" style="margin-right: 10px"
                                    class="icon icon-tabler icon-tabler-git-pull-request-draft" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M6 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M6 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M18 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M6 8v8" />
                                    <path d="M18 11h.01" />
                                    <path d="M18 6h.01" />
                                </svg>
                                {{ $judul }}
                            </h2>
                            <div class="page-pretitle">
                                <ol class="breadcrumb" aria-label="breadcrumbs">
                                    <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="fa fa-home"></i>
                                            Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="#"><i
                                                class="fa-regular fa-paste"></i> Karyawan</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-body">
                <div class="container-xl">
                    <div class="row row-deck">
                        <div class="card card-xl shadow rounded border border-blue">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Bagian</th>
                                            <th class="text-center">Grup</th>
                                            <th class="text-center">Shift</th>
                                            <th class="text-center"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <select name="" class="form-select" id="">
                                                    <option value="">--Pilih Bagian--</option>
                                                    <option value="UNIT 1">UNIT 1</option>
                                                    <option value="UNIT 2">UNIT 2</option>
                                                    <option value="KEAMANAN">KEAMANAN</option>
                                                    <option value="AKUNTING & KEUANGAN">AKUNTING & KEUANGAN</option>
                                                    <option value="GUDANG">GUDANG</option>
                                                    <option value="KEBERSIHAN">KEBERSIHAN</option>
                                                    <option value="PERSONALIA">PERSONALIA</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="" class="form-select" id="">
                                                    <option value="">--Pilih Grup--</option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="NON GRUP">NON GRUP</option>
                                                    <option value="MTC">MTC</option>
                                                    <option value="OPD">OPD</option>
                                                    <option value="PPC/QC">PPC/QC</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="" class="form-select" id="">
                                                    <option value="">--Pilih Shift--</option>
                                                    <option value="SHIFT">SHIFT</option>
                                                    <option value="NON SHIFT">NON SHIFT</option>
                                                </select>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-icon" aria-label="Button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-search">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                                        <path d="M21 21l-6 -6" />
                                                    </svg>
                                                </a>
                                                <input class="btn btn-primary" type="reset" value="Reset">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table style="width:100%; height: 100%;font-size:13px;"
                                    class="table table-bordered table-vcenter card-table table-hover text-nowrap datatable datatable-karyawan">
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('shared.footer')
        </div>
    </div>

    <script>
        function newexportaction(e, dt, button, config) {
            var self = this;
            var oldStart = dt.settings()[0]._iDisplayStart;

            dt.one('preXhr', function(e, s, data) {
                data.start = 0;
                data.length = 2147483647;

                dt.one('preDraw', function(e, settings) {
                    if (button[0].className.indexOf('buttons-copy') >= 0) {
                        $.fn.dataTable.ext.buttons.copyHtml5.action.call(self, e, dt, button, config);
                    } else if (button[0].className.indexOf('buttons-excel') >= 0) {
                        $.fn.dataTable.ext.buttons.excelHtml5.available(dt, config) ?
                            $.fn.dataTable.ext.buttons.excelHtml5.action.call(self, e, dt, button, config) :
                            $.fn.dataTable.ext.buttons.excelFlash.action.call(self, e, dt, button, config);
                    } else if (button[0].className.indexOf('buttons-pdf') >= 0) {
                        $.fn.dataTable.ext.buttons.pdfHtml5.available(dt, config) ?
                            $.fn.dataTable.ext.buttons.pdfHtml5.action.call(self, e, dt, button, config) :
                            $.fn.dataTable.ext.buttons.pdfFlash.action.call(self, e, dt, button, config);
                    }
                    settings._iDisplayStart = oldStart;
                    data.start = oldStart;
                });
            });

            dt.ajax.reload();
        }

        $(document).ready(function() {
            var tableKaryawan = $('.datatable-karyawan').DataTable({
                "processing": true,
                "serverSide": true,
                "scrollX": false,
                "scrollCollapse": false,
                "pagingType": 'full_numbers',
                "dom": "<'card-header h3' B>" +
                    "<'card-body border-bottom py-3' <'row'<'col-sm-6'l><'col-sm-6'f>> >" +
                    "<'table-responsive' <'col-sm-12'tr> >" +
                    "<'card-footer' <'row'<'col-sm-5'i><'col-sm-7'p> >>",
                "lengthMenu": [
                    [10, 10, 25, 50, -1],
                    ['Default', '10', '25', '50', 'Semua']
                ],
                "buttons": [{
                        extend: 'copyHtml5',
                        className: 'btn btn-teal',
                        text: '<i class="fa fa-copy text-white"></i> Copy',
                        action: newexportaction,
                    },
                    {
                        extend: 'excelHtml5',
                        autoFilter: true,
                        className: 'btn btn-success',
                        text: '<i class="fa fa-file-excel text-white"></i> Excel',
                        action: newexportaction,
                    },
                    {
                        extend: 'pdfHtml5',
                        className: 'btn btn-danger',
                        text: '<i class="fa fa-file-pdf text-white"></i> Pdf',
                    },
                ],
                "language": {
                    "lengthMenu": "Menampilkan _MENU_",
                    "zeroRecords": "Data Tidak Ditemukan",
                    "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ total data",
                    "infoEmpty": "Data Tidak Ditemukan",
                    "infoFiltered": "(Difilter dari _MAX_ total records)",
                    "processing": '<div class="container container-slim py-4"><div class="text-center"><div class="mb-3"></div><div class="text-secondary mb-3">Loading Data...</div><div class="progress progress-sm"><div class="progress-bar progress-bar-indeterminate"></div></div></div>',
                    "search": '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path><path d="M21 21l-6 -6"></path></svg>',
                    "paginate": {
                        "first": '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left-pipe" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M7 6v12"></path><path d="M18 6l-6 6l6 6"></svg>',
                        "last": '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right-pipe" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 6l6 6l-6 6"></path><path d="M17 5v13"></path></svg>',
                        "next": '<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24h24H0z" fill="none"></path><path d="M9 6l6 6l-6 6"></path></svg>',
                        "previous": '<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24h24H0z" fill="none"></path><path d="M15 6l-6 6l6 6"></path></svg>',
                    },
                },
                "ajax": {
                    "url": "{{ route('getKaryawan.index') }}",
                    "data": function(data) {
                        data._token = "{{ csrf_token() }}";
                        data.dari = $('#idfilter_dari').val();
                        data.sampai = $('#idfilter_sampai').val();
                    }
                },
                "columns": [{
                        title: 'STB',
                        data: 'stb',
                        name: 'stb',
                        className: "cuspad0 cuspad1 text-center clickable"
                    },
                    {
                        title: 'NAMA',
                        data: 'nama',
                        name: 'nama',
                        className: "cuspad0 cuspad1 text-center clickable"
                    },
                    {
                        title: 'BAGIAN',
                        data: 'bagian',
                        name: 'bagian',
                        className: "cuspad0 cuspad1 clickable"
                    },
                    {
                        title: 'GRUP',
                        data: 'grup',
                        name: 'grup',
                        className: "cuspad0 text-center clickable",
                    },
                    {
                        title: 'SHIFT',
                        data: 'shift',
                        name: 'shift',
                        className: "cuspad0 text-center clickable",
                    },
                    {
                        title: 'LIBUR',
                        data: 'libur',
                        name: 'libur',
                        className: "cuspad0 text-center clickable",
                    },
                    {
                        title: 'RELIEVER',
                        data: 'reliever',
                        name: 'reliever',
                        className: "cuspad0 text-center clickable",
                    },
                    {
                        title: 'KABAG',
                        data: 'kabag',
                        name: 'kabag',
                        className: "cuspad0 text-center clickable",
                    },
                    {
                        title: 'STATUS',
                        data: 'status',
                        name: 'status',
                        className: "cuspad0 text-center clickable",
                    },
                ],
            });
        });
    </script>
@endsection
