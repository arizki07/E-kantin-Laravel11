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

            {{-- content --}}
            <div class="page-body">
                <div class="container-xl mt-5">
                    <div class="card card-xl border-success shadow rounded">
                        <div class="card-stamp card-stamp-lg">
                            <div class="card-stamp-icon bg-success">
                                <i class="fa-solid fa-users"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        {{-- <p class="card-text">Ini adalah card panjang yang berada di atas.</p> --}}
                                        <p>Waktu saat ini: <span id="current-time"></span></p>
                                        <p id="keterangan"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">

                        <div class="col-md-4">
                            <div class="card card-xl border-info shadow rounded">
                                <div class="card-stamp card-stamp-lg">
                                    <div class="card-stamp-icon bg-info">
                                        <i class="fa-solid fa-users"></i>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Atur Jam Per Shift</h5>
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="input1">Shift 1</label>
                                                        <input type="text" class="form-control" id="input1"
                                                            name="jam_awal[]" value="{{ $shifts[0]->jam_awal }}"
                                                            placeholder="Jam Awal Shift 1" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="input3">Shift 2</label>
                                                        <input type="text" class="form-control" id="input3"
                                                            name="jam_awal[]" value="{{ $shifts[1]->jam_awal }}"
                                                            placeholder="Jam Awal Shift 2" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="input5">Shift 3</label>
                                                        <input type="text" class="form-control" id="input5"
                                                            name="jam_awal[]" value="{{ $shifts[2]->jam_awal }}"
                                                            placeholder="Jam Awal Shift 3" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <br>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="input2"
                                                            name="jam_akhir[]" value="{{ $shifts[0]->jam_akhir }}"
                                                            placeholder="Jam Akhir Shift 1" disabled>
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="input4"
                                                            name="jam_akhir[]" value="{{ $shifts[1]->jam_akhir }}"
                                                            placeholder="Jam Akhir Shift 2" disabled>
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="input6"
                                                            name="jam_akhir[]" value="{{ $shifts[2]->jam_akhir }}"
                                                            placeholder="Jam Akhir Shift 3" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card card-xl border-danger shadow rounded">
                                <div class="card-stamp card-stamp-lg">
                                    <div class="card-stamp-icon bg-danger">
                                        <i class="fa-solid fa-users"></i>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Group Shifts</h5>
                                        <form>
                                            @foreach ($grp as $grupShift)
                                                <div class="form-group row">
                                                    <label for="grup{{ $grupShift->id_grp }}"
                                                        class="col-6 col-form-label">{{ $grupShift->grup }} | Regu
                                                        {{ $grupShift->shift }}</label>
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="satpam_{{ $grupShift->id_grp }}" name="satpam[]"
                                                                value="{{ $grupShift->satpam }}"
                                                                {{ $grupShift->option1 ? 'checked' : '' }}>
                                                            <label class="form-check-label"
                                                                for="satpam_{{ $grupShift->id_grp }}">{{ $grupShift->satpam }}</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="shift_{{ $grupShift->id_grp }}" name="shift[]"
                                                                value="{{ $grupShift->shift }}"
                                                                {{ $grupShift->option2 ? 'checked' : '' }}>
                                                            <label class="form-check-label"
                                                                for="shift_{{ $grupShift->id_grp }}">{{ $grupShift->shift }}</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="card card-xl border-warning shadow rounded">
                                <div class="card-stamp card-stamp-lg">
                                    <div class="card-stamp-icon bg-warning">
                                        <i class="fa-solid fa-users"></i>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Non Shift</h5>
                                        <form>
                                            <div class="form-group">
                                                <label for="input7">Input 1</label>
                                                <input type="text" class="form-control" id="input7"
                                                    placeholder="Enter something">
                                            </div>
                                            <div class="form-group">
                                                <label for="input8">Input 2</label>
                                                <input type="text" class="form-control" id="input8"
                                                    placeholder="Enter something">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const shifts = @json($shifts);

        function updateTime() {
            const currentTime = new Date();
            const currentHour = currentTime.getHours();
            const currentMinute = currentTime.getMinutes();
            const currentSecond = currentTime.getSeconds();

            const formattedTime =
                `${currentHour.toString().padStart(2, '0')}:${currentMinute.toString().padStart(2, '0')}:${currentSecond.toString().padStart(2, '0')}`;

            document.getElementById('current-time').textContent = formattedTime;
        }

        function checkShift() {
            const currentTime = new Date();
            const currentHour = currentTime.getHours();
            const currentMinute = currentTime.getMinutes();

            let isWithinShift = false;

            for (let i = 0; i < shifts.length; i++) {
                const shift = shifts[i];
                const startHour = parseInt(shift.jam_awal.split(':')[0]);
                const startMinute = parseInt(shift.jam_awal.split(':')[1]);
                const endHour = parseInt(shift.jam_akhir.split(':')[0]);
                const endMinute = parseInt(shift.jam_akhir.split(':')[1]);

                if ((currentHour > startHour || (currentHour === startHour && currentMinute >= startMinute)) &&
                    (currentHour < endHour || (currentHour === endHour && currentMinute <= endMinute))) {
                    document.getElementById('keterangan').textContent =
                        `Saat ini memasuki waktu istirahat shift: ${shift.deskripsi}`;
                    isWithinShift = true;
                    break;
                }
            }

            if (!isWithinShift) {
                document.getElementById('keterangan').textContent = 'Belum Memasuki Waktu Istirahat Shift Manapun';
            }
        }

        setInterval(updateTime, 1000);
        checkShift();

        setInterval(checkShift, 60000);
    </script>
@endsection
