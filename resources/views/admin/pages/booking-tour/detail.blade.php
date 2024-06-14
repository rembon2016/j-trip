<div class="modal-body">
    <div class="row">
        <div class="col-md-6">
            <h6 class="mb-1">
                <span class="tf-icons bx bx-purchase-tag me-1"></span>
                First Name
            </h6>
            <p style="padding-left: 26px;">{{ $data->first_name }}</p>
        </div>
        <div class="col-md-6">
            <h6 class="mb-1">
                <span class="tf-icons bx bx-purchase-tag me-1"></span>
                Last Name
            </h6>
            <p style="padding-left: 26px;">{{ $data->last_name }}</p>
        </div>
        <div class="col-md-6">
            <h6 class="mb-1">
                <span class="tf-icons bx bx-envelope me-1"></span>
                Email
            </h6>
            <p style="padding-left: 26px;">{{ $data->email }}</p>
        </div>
        <div class="col-md-6">
            <h6 class="mb-1">
                <span class="tf-icons bx bx-phone me-1"></span>
                Phone
            </h6>
            <p style="padding-left: 26px;">{{ $data->phone }}</p>
        </div>
        <div class="col-md-6">
            <h6 class="mb-1">
                <span class="tf-icons bx bx-trip me-1"></span>
                Tour
            </h6>
            <p style="padding-left: 26px;">{{ $data->tour?->title }}</p>
        </div>
        <div class="col-12">
            <h6 class="mb-1">
                <span class="tf-icons bx bx-time me-1"></span>
                Tanggal Dibuat
            </h6>
            <p style="padding-left: 26px;">{{ $data->created_at?->translatedFormat('d F Y H:i:s') }}</p>
        </div>
        <div class="col-12">
            <h6 class="mb-1">
                <span class="tf-icons bx bx-globe me-1"></span>
                IP Address
            </h6>
            <p style="padding-left: 26px;">{{ $data->client_ip_address }}</p>
        </div>
    </div>
</div>