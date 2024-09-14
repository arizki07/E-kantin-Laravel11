@extends('layouts.app')
@section('content')
    <style>
        td.cuspad0 {
            padding-top: 3px;
            padding-bottom: 3px;
            padding-right: 13px;
            padding-left: 13px;
        }

        td.cuspad1 {
            text-transform: uppercase;
        }

        td.cuspad2 {
            /* padding-top: 0.5px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        padding-bottom: 0.5px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        padding-right: 0.5px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        padding-left: 0.5px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        margin-top: 5px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        margin-bottom: 5px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        margin-right: 5px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        margin-left: 5px; */
        }

        .unselectable {
            -webkit-user-select: none;
            -webkit-touch-callout: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            color: #cc0000;
            font-weight: bolder;
        }
    </style>
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
                                    class="icon icon-tabler icon-tabler-file-dollar" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                    <path d="M14 11h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />
                                    <path d="M12 17v1m0 -8v1" />
                                </svg>
                                {{ $judul }}
                            </h2>

                            <div class="page-pretitle">
                                <ol class="breadcrumb" aria-label="breadcrumbs">
                                    <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="fa fa-home"></i>
                                            Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="#">
                                            <i class="fa fa-usd"></i>
                                            {{ $judul }}
                                        </a>
                                    </li>
                                </ol>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Page body -->
            <div class="page-body">
                <div class="container-xl">
                    <div class="row row-cards">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs">
                                        <li class="nav-item">
                                            <a href="#tabs-rekap" class="nav-link active" data-bs-toggle="tab">Rekap
                                                Harian</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#tabs-kabag" class="nav-link" data-bs-toggle="tab">Data Kabag</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#tabs-detail" class="nav-link" data-bs-toggle="tab">List
                                                Detail</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active show" id="tabs-rekap">
                                            <div class="row">
                                                <div class="col-md-3 mb-2">
                                                    <input class="form-control" type="date" placeholder="Select a date"
                                                        id="datepicker-icon" value="2020-06-20" />
                                                    <small class="text-danger">Pilih Tanggal Penarikan</small>
                                                </div>
                                                <div class="col-md-4 mb-2">
                                                    <button class="btn btn-primary btn-block" type="button"
                                                        id="searchButton">Search</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="tabs-kabag">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div
                                                        class="card-header d-flex justify-content-between align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <div class="mb-3 me-3">
                                                                <div class="row g-2">
                                                                    <div class="col-auto">
                                                                        <input class="form-control" type="date"
                                                                            placeholder="Select a date" id="datepicker-icon"
                                                                            value="2020-06-20" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 me-3">
                                                                <div class="row g-2">
                                                                    <div class="col-auto">
                                                                        <input class="form-control" type="date"
                                                                            placeholder="Select a date" id="datepicker-icon"
                                                                            value="2020-06-20" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 me-3">
                                                                <div class="row g-2">
                                                                    <div class="col-auto">
                                                                        <a href="#"
                                                                            class="btn btn-primary d-none d-sm-inline-block"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#modal-add"
                                                                            data-bs-backdrop="static"
                                                                            data-bs-keyboard="false">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="icon icon-tabler icons-tabler-outline icon-tabler-search">
                                                                                <path stroke="none" d="M0 0h24v24H0z"
                                                                                    fill="none" />
                                                                                <path
                                                                                    d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                                                                <path d="M21 21l-6 -6" />
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <a href="#"
                                                                class="btn btn-success d-none d-sm-inline-block ms-2"
                                                                data-bs-toggle="modal" data-bs-target="#modal-add"
                                                                data-bs-backdrop="static" data-bs-keyboard="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-file-spreadsheet">
                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                        fill="none" />
                                                                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                                                    <path
                                                                        d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                                                    <path d="M8 11h8v7h-8z" />
                                                                    <path d="M8 15h8" />
                                                                    <path d="M11 11v7" />
                                                                </svg>
                                                                Export to Excel
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="card card-xl border-success shadow rounded">
                                                        <div class="card-stamp card-stamp-lg">
                                                            <div class="card-stamp-icon bg-success">
                                                                <i class="fa-solid fa-users"></i>
                                                            </div>
                                                        </div>
                                                        <div class="card-body" style="overflow-x: auto;">
                                                            <div style="overflow-x: auto;">
                                                                <table style="width:100%;font-size:13px;"
                                                                    class="table table-bordered table-vcenter card-table table-hover text-nowrap"
                                                                    id="example">

                                                                    <thead>
                                                                        <tr class="text-center">
                                                                            <th class="text-center">OPSI</th>
                                                                            <th class="text-center">HARI</th>
                                                                            <th class="text-center">TANGGAL</th>
                                                                            <th class="text-center">JAM</th>
                                                                            <th class="text-center">STB</th>
                                                                            <th class="text-center">NAMA</th>
                                                                            <th class="text-center">KANTIN</th>
                                                                            <th class="text-center">BAGIAN</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        {{-- @foreach ($karyawan as $item) --}}
                                                                        <tr>
                                                                            <td>
                                                                                {{-- <a href="javascript:void(0)"
                                                                                data-bs-target="#modal-detail{{ $item->id }}"
                                                                                data-bs-toggle="modal"
                                                                                class="btn btn-outline-info btn-sm btn-icon edit-btn"><i
                                                                                    class="fa-solid fa-fw fa-eye"></i>
                                                                            </a>
                                                                            <a href="javascript:void(0)"
                                                                                data-bs-target="#modal-edit{{ $item->id }}"
                                                                                data-bs-toggle="modal"
                                                                                class="btn btn-outline-success btn-sm btn-icon edit-btn"><i
                                                                                    class="fa-solid fa-fw fa-edit"></i>
                                                                            </a>
                                                                            <form id="deleteForm{{ $item->id }}"
                                                                                action="/suplier/destroy/{{ $item->id }}"
                                                                                method="POST" class="d-inline">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button type="button"
                                                                                    class="btn btn-outline-danger btn-sm btn-icon"
                                                                                    onclick="confirmDelete(event, {{ $item->id }})">
                                                                                    <i class="fa-solid fa-fw fa-trash-can"></i>
                                                                                </button>
                                                                            </form> --}}
                                                                            </td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        {{-- @endforeach --}}
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tabs-detail">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div
                                                        class="card-header d-flex justify-content-between align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <div class="mb-3 me-3">
                                                                <div class="row g-2">
                                                                    <div class="col-auto">
                                                                        <input class="form-control" type="date"
                                                                            placeholder="Select a date"
                                                                            id="datepicker-icon" value="2020-06-20" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 me-3">
                                                                <div class="row g-2">
                                                                    <div class="col-auto">
                                                                        <input class="form-control" type="date"
                                                                            placeholder="Select a date"
                                                                            id="datepicker-icon" value="2020-06-20" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 me-3">
                                                                <div class="row g-2">
                                                                    <div class="col-auto">
                                                                        <select class="form-select" id="filterDropdown"
                                                                            name="tipe">
                                                                            <option value="">--Pilih Kantin--
                                                                            </option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <div class="row g-2">
                                                                    <div class="col-auto">
                                                                        <a href="#"
                                                                            class="btn btn-primary d-none d-sm-inline-block"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#modal-add"
                                                                            data-bs-backdrop="static"
                                                                            data-bs-keyboard="false">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="icon icon-tabler icons-tabler-outline icon-tabler-search">
                                                                                <path stroke="none" d="M0 0h24v24H0z"
                                                                                    fill="none" />
                                                                                <path
                                                                                    d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                                                                <path d="M21 21l-6 -6" />
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <a href="#"
                                                                class="btn btn-success d-none d-sm-inline-block ms-2"
                                                                data-bs-toggle="modal" data-bs-target="#modal-add"
                                                                data-bs-backdrop="static" data-bs-keyboard="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-file-spreadsheet">
                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                        fill="none" />
                                                                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                                                    <path
                                                                        d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                                                    <path d="M8 11h8v7h-8z" />
                                                                    <path d="M8 15h8" />
                                                                    <path d="M11 11v7" />
                                                                </svg>
                                                                Export to Excel
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="card card-xl border-danger shadow rounded">
                                                        <div class="card-stamp card-stamp-lg">
                                                            <div class="card-stamp-icon bg-danger">
                                                                <i class="fa-solid fa-users"></i>
                                                            </div>
                                                        </div>
                                                        <div class="card-body" style="overflow-x: auto;">
                                                            <div style="overflow-x: auto;">
                                                                <table style="width:100%;font-size:13px;"
                                                                    class="table table-bordered table-vcenter card-table table-hover text-nowrap"
                                                                    id="example1">

                                                                    <thead>
                                                                        <tr class="text-center">
                                                                            <th class="text-center">OPSI</th>
                                                                            <th class="text-center">HARI</th>
                                                                            <th class="text-center">TANGGAL</th>
                                                                            <th class="text-center">JAM</th>
                                                                            <th class="text-center">STB</th>
                                                                            <th class="text-center">NAMA</th>
                                                                            <th class="text-center">KANTIN</th>
                                                                            <th class="text-center">BAGIAN</th>
                                                                            <th class="text-center">GRUP</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        {{-- @foreach ($karyawan as $item) --}}
                                                                        <tr>
                                                                            <td>
                                                                                {{-- <a href="javascript:void(0)"
                                                                                data-bs-target="#modal-detail{{ $item->id }}"
                                                                                data-bs-toggle="modal"
                                                                                class="btn btn-outline-info btn-sm btn-icon edit-btn"><i
                                                                                    class="fa-solid fa-fw fa-eye"></i>
                                                                            </a>
                                                                            <a href="javascript:void(0)"
                                                                                data-bs-target="#modal-edit{{ $item->id }}"
                                                                                data-bs-toggle="modal"
                                                                                class="btn btn-outline-success btn-sm btn-icon edit-btn"><i
                                                                                    class="fa-solid fa-fw fa-edit"></i>
                                                                            </a>
                                                                            <form id="deleteForm{{ $item->id }}"
                                                                                action="/suplier/destroy/{{ $item->id }}"
                                                                                method="POST" class="d-inline">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button type="button"
                                                                                    class="btn btn-outline-danger btn-sm btn-icon"
                                                                                    onclick="confirmDelete(event, {{ $item->id }})">
                                                                                    <i class="fa-solid fa-fw fa-trash-can"></i>
                                                                                </button>
                                                                            </form> --}}
                                                                            </td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        {{-- @endforeach --}}
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
