<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Transaksi;
use App\Models\Transaksi as ModelsTransaksi;

class Dashboard extends Component
{
    public function render()
    {
        $count_diterima = Transaksi::where('status', 0)->count();
        $count_dicuci = Transaksi::where('status', 1)->count();
        $count_dikeringkan = Transaksi::where('status', 2)->count();
        $count_disetrika = Transaksi::where('status', 3)->count();
        $count_dimenunggu_pembayaran = Transaksi::where('status', 4)->count();
        $count_diselesai = Transaksi::where('status', 5)->count();
        // dd($count_diterima);
        return view('livewire.dashboard', 
            compact('count_diterima', 'count_dicuci','count_dikeringkan', 'count_dimenunggu_pembayaran' , 'count_diselesai')
        );
    }
}
