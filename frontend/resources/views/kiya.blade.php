@extends('masterlayouts')

@section('title', 'Data Detail Pasien Kiya - UTS PWS')

@section('konten')
    <div class="container py-4">
        {{-- Breadcrumb --}}
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-decoration-none"><i class="bi bi-house"></i> Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail Pasien Kiya</li>
            </ol>
        </nav>

        <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
            <div class="card-header bg-primary text-white py-3">
                <h4 class="card-title mb-0 fw-bold d-flex align-items-center">
                    <i class="bi bi-person-circle me-2"></i> Rekam Medis &amp; Profil Pasien: Azkiya Ilhusna (Kiya)
                </h4>
            </div>
            <div class="card-body p-4">
                <div class="row align-items-center g-4">
                    <div class="col-md-4 text-center">
                        <img src="{{ asset('images/pasien.jpeg') }}" 
                             class="img-fluid rounded-4 shadow border p-1 bg-white" 
                             style="max-height: 280px; width: 100%; object-fit: cover;" 
                             alt="Foto Kiya"
                             onerror="this.onerror=null; this.src='https://ui-avatars.com/api/?name=Kiya&background=0d6efd&color=fff&size=250';">
                    </div>
                    <div class="col-md-8">
                        <h3 class="fw-bold text-dark mb-1">Azkiya Ilhusna</h3>
                        <p class="text-muted mb-3"><i class="bi bi-geo-alt-fill text-danger"></i> Lombok Timur, Nusa Tenggara Barat</p>

                        <div class="row g-3 mb-4">
                            <div class="col-sm-6">
                                <div class="p-3 bg-light rounded-3 border">
                                    <small class="text-muted d-block">Nomor Kontak:</small>
                                    <span class="fw-bold text-dark">081803348055</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="p-3 bg-light rounded-3 border">
                                    <small class="text-muted d-block">Status Pasien:</small>
                                    <span class="badge bg-success-subtle text-success border border-success-subtle px-2 py-1">
                                        <i class="bi bi-check-circle-fill me-1"></i> Aktif Berobat
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="alert alert-info border-0 rounded-3 d-flex align-items-center mb-4">
                            <i class="bi bi-info-circle-fill fs-4 me-3 text-info"></i>
                            <div>
                                Halaman ini merupakan bagian integrasi frontend &amp; backend untuk latihan dan tugas UTS Praktikum Pemrograman Web Service (PWS).
                            </div>
                        </div>

                        <div class="d-flex gap-2">
                            <a href="{{ url('/') }}" class="btn btn-primary">
                                <i class="bi bi-arrow-left me-1"></i> Kembali ke Form Pemeriksaan
                            </a>
                            <a href="{{ url('dashboard') }}" class="btn btn-outline-secondary">
                                <i class="bi bi-speedometer2 me-1"></i> Dashboard Sistem
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
