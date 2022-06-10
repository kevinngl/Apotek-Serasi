



<!--begin::Modal header-->
<div class="modal-header pb-0 border-0 justify-content-end">
    <!--begin::Close-->
    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
        <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
        <span class="svg-icon svg-icon-1">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                    <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
                    <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
                </g>
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Close-->
</div>
<!--begin::Modal header-->
<!--begin::Modal body-->
<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
    <!--begin:Form-->
    <form id="form_create_literatur">
        <!--begin::Heading-->
        <div class="mb-13 text-center">
            <!--begin::Title-->
            <h1 class="mb-3">Add Penjualan</h1>
            <!--end::Title-->
            <!--begin::Description-->

            <!--end::Description-->
        </div>
        <!--end::Heading-->
        <!--begin::Input group-->
        {{-- Harusnya Pake yang ini --}}
        {{-- <div class="mb-10">
            <label class="form-label fs-6 fw-bold">Nama Obat:</label>
            <select name="obat_id" class="form-select form-select-solid fw-bolder" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true">
                <option>Pilih</option>
                @foreach($penjualan as $item)
                <option value="{{$item->obat_id}}"{{$item->obat_id==$obat->id?"selected":""}}>{{$item->name}}</option>
                @endforeach
            </select>
        </div> --}}
        <div class="d-flex flex-column mb-8 fv-row">
            <!--begin::Label-->
            <label for="judul_literatur" class="d-flex align-items-center fs-6 fw-bold mb-2">
                <span class="required">Nama Obat</span>
                
            </label>
            <!--end::Label-->
            <input type="text" class="form-control form-control-solid" placeholder="Nama Obat" name="obat_id" value="{{$penjualan->obat_id}}" />
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="d-flex flex-column mb-8 fv-row">
            <!--begin::Label-->
            <label for="judul_literatur" class="d-flex align-items-center fs-6 fw-bold mb-2">
                <span class="required">Kuantitas</span>
                
            </label>
            <!--end::Label-->
            <input type="text" class="form-control form-control-solid" placeholder="Kuantitas" name="kuantitas" value="{{$penjualan->kuantitas}}" />
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="d-flex flex-column mb-8 fv-row">
            <!--begin::Label-->
            <label for="judul_literatur" class="d-flex align-items-center fs-6 fw-bold mb-2">
                <span class="required">Total Harga</span>
                
            </label>
            <!--end::Label-->
            <input type="text" class="form-control form-control-solid" placeholder="Total Harga" name="total_harga" value="{{$penjualan->total_harga}}" />
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="d-flex flex-column mb-8 fv-row">
            <!--begin::Label-->
            <label for="judul_literatur" class="d-flex align-items-center fs-6 fw-bold mb-2">
                <span class="required">Expired</span>
                
            </label>
            <!--end::Label-->
            <input type="date" class="form-control" id="date" name="expired" placeholder="Masukkan Tanggal..." value="{{$penjualan->expired}}">
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="d-flex flex-column mb-8 fv-row">
            <!--begin::Label-->
            <label for="judul_obat" class="d-flex align-items-center fs-6 fw-bold mb-2">
                <span class="required">Tanggal Pembayaran</span>
                
            </label>
            <!--end::Label-->
            <input type="date" class="form-control" id="date" name="tanggal_pembayaran" placeholder="Masukkan Tanggal..." value="{{$penjualan->tanggal_pembayaran}}">
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="mb-10">
            <label class="form-label fs-6 fw-bold">Status:</label>
            <select name="status" class="form-select form-select-solid fw-bolder" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true">
                <option>Pilih</option>
                <option value="diterima">Diterima</option>
                <option value="ditolak">Ditolak</option>
            </select>
        </div>
        <!--end::Input group-->
        
        <!--begin::Actions-->
        <div class="text-center pt-15">
            @if ($penjualan->id)
            <button id="tombol_kirim_obat" onclick="upload_form_modal('#tombol_kirim_literatur','#form_create_literatur','{{route('penjualan.update',$penjualan->id)}}','#ModalCreateLiteratur','POST');" class="btn btn-primary">
                Submit
            </button>
            @else
            <button id="tombol_kirim_literatur" onclick="upload_form_modal('#tombol_kirim_literatur','#form_create_literatur','{{route('penjualan.store')}}','#ModalCreateLiteratur','POST');" class="btn btn-primary">
                Submit
            </button>
            @endif
        </div>
        <!--end::Actions-->
    </form>
    <!--end:Form-->
</div>
<!--end::Modal body-->




<script>
    var loadFile = function(event) {
    var image = document.getElementById('output');
    image.src = URL.createObjectURL(event.target.files[0]);
};
</script>