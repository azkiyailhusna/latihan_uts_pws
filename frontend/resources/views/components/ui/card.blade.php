@props([
    'nama' => 'Kiya',
    'alamat' => 'Lombok Timur',
    'nohp' => '081803348055',
    'foto' => 'images/pasien.jpeg',
])

<div class="card shadow-sm border-0 rounded-4 overflow-hidden h-100">
    <div class="card-header bg-primary text-white py-3">
        <h5 class="card-title mb-0 fw-bold d-flex align-items-center">
            <i class="bi bi-person-badge-fill me-2 fs-5"></i> Kartu Pasien
        </h5>
    </div>
    <div class="p-3 text-center bg-light border-bottom">
        <div class="position-relative d-inline-block">
            <img src="{{ asset($foto) }}" class="img-fluid rounded-3 shadow-sm border" 
                 style="max-height: 220px; width: 100%; object-fit: cover;" 
                 alt="Foto Pasien {{ $nama }}"
                 onerror="this.onerror=null; this.src='https://ui-avatars.com/api/?name=Kiya&background=0d6efd&color=fff&size=250';">
            <span class="position-absolute bottom-0 end-0 badge rounded-pill bg-success border border-white p-2">
                <i class="bi bi-check-circle-fill"></i> Terdaftar
            </span>
        </div>
    </div>
    <div class="card-body">
        <ul class="list-group list-group-flush mb-3">
            <li class="list-group-item px-0 d-flex justify-content-between align-items-center">
                <span class="text-muted"><i class="bi bi-person me-2 text-primary"></i>Nama Pasien</span>
                <span class="fw-bold text-dark">{{ $nama }}</span>
            </li>
            <li class="list-group-item px-0 d-flex justify-content-between align-items-center">
                <span class="text-muted"><i class="bi bi-geo-alt me-2 text-primary"></i>Alamat</span>
                <span class="fw-semibold text-dark">{{ $alamat }}</span>
            </li>
            <li class="list-group-item px-0 d-flex justify-content-between align-items-center">
                <span class="text-muted"><i class="bi bi-telephone me-2 text-primary"></i>No HP</span>
                <span class="fw-semibold text-dark">{{ $nohp }}</span>
            </li>
        </ul>
        <div class="d-grid gap-2">
            <a href="{{ url('kiya') }}" class="btn btn-outline-primary fw-semibold">
                <i class="bi bi-info-circle me-1"></i> Cek Rekam Medis
            </a>
        </div>
    </div>
</div>
