



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
            <h1 class="mb-3">Add Jenis Obat</h1>
            <!--end::Title-->
            <!--begin::Description-->

            <!--end::Description-->
        </div>
        <!--end::Heading-->
        <!--begin::Input group-->
        <div class="d-flex flex-column mb-8 fv-row">
            <!--begin::Label-->
            <label for="judul_literatur" class="d-flex align-items-center fs-6 fw-bold mb-2">
                <span class="required">Nama Jenis Obat</span>
                
            </label>
            <!--end::Label-->
            <input type="text" class="form-control form-control-solid" placeholder="Nama" name="jenis" id="judul_literatur" value="" />
        </div>
        <!--end::Input group-->
        <!--begin::Actions-->
        <div class="text-center pt-15">
            {{-- @if ($literatur->id) --}}
            <button id="tombol_kirim_literatur" onclick="upload_form_modal('#tombol_kirim_literatur','#form_create_literatur','','#ModalCreateLiteratur','POST');" class="btn btn-primary">
                Submit
            </button>
            {{-- @else --}}
            {{-- <button id="tombol_kirim_literatur" onclick="upload_form_modal('#tombol_kirim_literatur','#form_create_literatur','{{route('literatur.store')}}','#ModalCreateLiteratur','POST');" class="btn btn-primary"> --}}
                {{-- Submit --}}
            </button>
            {{-- @endif --}}
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