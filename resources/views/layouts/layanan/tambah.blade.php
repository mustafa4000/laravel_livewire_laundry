@if ($tambah)
    <!-- Modal -->
    <div class="modal fade show" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-right: 12px; display: block;">

        <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Layanan</h5>
            <button  wire:click="format" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input wire:model="nama" type="text" class="form-control" id="nama">
                        @error('nama') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="form-group">
                        <label for="durasi">Durasi</label>
                        <input wire:model="durasi" type="number" class="form-control" id="durasi">
                        @error('durasi') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input wire:model="harga" type="number" class="form-control" id="harga">
                        @error('harga') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button wire:click="format" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button wire:click="store" type="button" class="btn btn-success">Simpan</button>
            </div>
        </div>
        </div>
    </div>
@endif