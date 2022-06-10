



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
            <h1 class="mb-3">Add Obat</h1>
            <!--end::Title-->
            <!--begin::Description-->

            <!--end::Description-->
        </div>
        <!--end::Heading-->
        <!--begin::Input group-->
        <div class="d-flex flex-column mb-8 fv-row">
            <!--begin::Label-->
            <label for="judul_obat" class="d-flex align-items-center fs-6 fw-bold mb-2">
                <span class="required">Nama</span>
                
            </label>
            <!--end::Label-->
            <input type="text" class="form-control form-control-solid" placeholder="Nama" name="nama" value="{{$obat->nama}}" />
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="d-flex flex-column mb-8 fv-row">
            <!--begin::Label-->
            <label for="judul_obat" class="d-flex align-items-center fs-6 fw-bold mb-2">
                <span class="required">Harga</span>
                
            </label>
            <!--end::Label-->
            <input type="text" class="form-control form-control-solid" placeholder="Harga" name="harga" value="{{$obat->harga}}" />
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        {{-- HARUSNYA PAKE YANG INI --}}
        {{-- <div class="mb-10">
            <label class="form-label fs-6 fw-bold">Jenis:</label>
            <select name="jenis_id" class="form-select form-select-solid fw-bolder" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true">
                <option>Pilih</option>
                @foreach($obat as $item)
                <option value="{{$item->jenis_id}}"{{$item->jenis_id==$jenis_obat->id?"selected":""}}>{{$item->name}}</option>
                @endforeach
            </select>
        </div> --}}
        <div class="d-flex flex-column mb-8 fv-row">
            <!--begin::Label-->
            <label for="judul_obat" class="d-flex align-items-center fs-6 fw-bold mb-2">
                <span class="required">Jenis</span>
                
            </label>
            <!--end::Label-->
            <input type="text" class="form-control form-control-solid" placeholder="Jenis" name="jenis_id" value="{{$obat->jenis_id}}" />
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="d-flex flex-column mb-8 fv-row">
            <!--begin::Label-->
            <label for="judul_obat" class="d-flex align-items-center fs-6 fw-bold mb-2">
                <span class="required">Stok</span>
                
            </label>
            <!--end::Label-->
            <input type="text" class="form-control form-control-solid" placeholder="Stok" name="stok" value="{{$obat->stok}}" />
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="d-flex flex-column mb-8 fv-row">
            <!--begin::Label-->
            <label for="judul_obat" class="d-flex align-items-center fs-6 fw-bold mb-2">
                <span class="required">Expired</span>
                
            </label>
            <!--end::Label-->
            <input type="date" class="form-control" id="date" name="expired" placeholder="Masukkan Tanggal..." value="{{$obat->expired}}">
        </div>
        
        <!--end::Input group-->
        <!--begin::Actions-->
        <div class="text-center pt-15">
            @if ($obat->id)
            <button id="tombol_kirim_obat" onclick="upload_form_modal('#tombol_kirim_literatur','#form_create_literatur','{{route('obat.update',$obat->id)}}','#ModalCreateLiteratur','POST');" class="btn btn-primary">
                Submit
            </button>
            @else
            <button id="tombol_kirim_literatur" onclick="upload_form_modal('#tombol_kirim_literatur','#form_create_literatur','{{route('obat.store')}}','#ModalCreateLiteratur','POST');" class="btn btn-primary">
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