<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Layanan as ModelsLayanan;

class Layanan extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $tambah , $edit , $hapus , $search;
    public $nama , $durasi , $harga , $layanan_id;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function rules()
    {
        return [
            'nama' => 'required',
            'durasi' => 'required|min:1|numeric',
            'harga' => 'required|min:1000|numeric'
        ];
    }

    public function show_tambah()
    {
        $this->tambah = true;
    }

    public function store ()
    {
        $this->validate();

        ModelsLayanan::create([
            'nama' => $this->nama,
            'durasi' => $this->durasi,
            'harga' => $this->harga
        ]);

        session()->flash('sukses', 'Data berhasil disimpan.');
        $this->format();
    }

    public function show_edit(ModelsLayanan $layanan)
    {
        $this->edit = true;

        $this->layanan_id = $layanan->id;
        $this->nama = $layanan->nama;
        $this->durasi = $layanan->durasi;
        $this->harga = $layanan->harga;
    }

    public function update()
    {
        // dd($this->layanan_id);
        $this->validate();

        $layanan = ModelsLayanan::whereId($this->layanan_id)->update([
            'nama' => $this->nama,
            'durasi' => $this->durasi,
            'harga' => $this->harga
        ]);

        session()->flash('sukses', 'Data berhasil disimpan.');
        $this->format();
    }

    public function show_hapus(ModelsLayanan $layanan)
    {
        $this->hapus = true;
        $this->layanan_id = $layanan->id;
        $this->nama = $layanan->nama;
    }

    public function destroy() {
        ModelsLayanan::whereId($this->layanan_id)->delete();

        session()->flash('sukses', 'Data berhasil dihapus.');
        $this->updatingSearch();
        $this->format();
    }

    public function format () {
        $this->tambah = false;
        $this->edit = false;
        $this->hapus = false;
        unset($this->nama, $this->durasi, $this->harga, $this->layanan_id);
    }

    public function format_search()
    {
        $this->search = '';
    }

    public function render()
    {
        if ($this->search) {
            $layanan = ModelsLayanan::where('nama' , 'like' , '%' .$this->search.'%')->paginate(2);            
        } else {
            $layanan = ModelsLayanan::paginate(2);
        }
        return view('livewire.layanan', compact('layanan'));
    }
}
