<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                @include('layouts/sidebar')
            </div>
        </div>
        <div class="col-md-9">
            <h1>Halaman Dashboard</h1>

            <div class="row">
                <div class="col-6 col-lg-4">
                    <div class="card-mb-4">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6>Total Diterima :</h6>
                                </div>
                                <div class="col-md-4">
                                    <h6>{{ $count_diterima }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div class="card-mb-4">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6>Total Dicuci :</h6>
                                </div>
                                <div class="col-md-4">
                                    <h6>{{ $count_dicuci }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div class="card-mb-4">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6>Total Dikeringkan :</h6>
                                </div>
                                <div class="col-md-4">
                                    <h6>{{ $count_dikeringkan }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div class="card-mb-4">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6>Total Disetrika :</h6>
                                </div>
                                <div class="col-md-4">
                                    {{-- <h6>{{ $count_disetrika }}</h6> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div class="card-mb-4">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h5>Total Pandding :</h5>
                                </div>
                                <div class="col-md-4">
                                    <h6>{{ $count_dimenunggu_pembayaran }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div class="card-mb-4">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h5>Total Selesai :</h5>
                                </div>
                                <div class="col-md-4">
                                    {{-- <h6>{{ $count_diselesai }}</h6> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Transaksi Selesai</h5>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="10%" scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Total Bayar</th>
                            <th scope="col">Layanan</th>
                            <th scope="col">Tanggal Diterima</th>
                            <th scope="col">Tanggal Diambil</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($selesai as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->barang->user->name }}</td>
                                <td>Rp. {{ number_format($item->total_bayar) }}</td>
                                <td>{{ $item->layanan->nama }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->tanggal_diterima)->format('d m Y, H:i') }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->tanggal_diambil)->format('d m Y, H:i') }}</td>
                            </tr>
                        @endforeach --}}
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"> Chart Selesai Transaksi </h5>
                <div style="height: 32rem;">
                    
                </div>
            </div>
        </div>
    </div>
</div>