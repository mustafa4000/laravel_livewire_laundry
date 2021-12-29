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
                                    <h5>Total Diterima :</h5>
                                </div>
                                <div class="col-md-4">

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
                                    <h5>Total Dicuci :</h5>
                                </div>
                                <div class="col-md-4">

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
                                    <h5>Total Dikeringkan :</h5>
                                </div>
                                <div class="col-md-4">

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
                                    <h5>Total Disetrika :</h5>
                                </div>
                                <div class="col-md-4">

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
                        {{-- @foreach ($collection as $item)
                            
                        @endforeach --}}
                        <tr>
                            <th scope="row">1</th>
                            <td></td>
                            <td>Rp. </td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
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