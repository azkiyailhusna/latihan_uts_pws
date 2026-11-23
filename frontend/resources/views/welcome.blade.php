@extends('masterlayouts')

@section('title', 'Beranda - Layanan Pemeriksaan Pasien UTS PWS')

@section('konten')
    {{-- Hero Banner --}}
    <div class="hero-banner">
        <div class="container text-center">
            <h1 class="fw-bold mb-2">
                <i class="bi bi-heart-pulse-fill text-danger me-2"></i> Sistem Pemeriksaan Pasien
            </h1>
            <p class="lead mb-0 text-white-50">Latihan UTS Pemrograman Web Service &bull; Kelola data dan keluhan pasien dengan mudah</p>
        </div>
    </div>

    <div class="container pb-5">
        <div class="row g-4">
            {{-- Kolom Kiri: Kartu Profil Pasien --}}
            <div class="col-lg-4 col-md-5">
                <x-ui.card />
            </div>

            {{-- Kolom Kanan: Form Keluhan Pasien --}}
            <div class="col-lg-8 col-md-7">
                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-header bg-white py-3 border-bottom d-flex align-items-center justify-content-between">
                        <h5 class="card-title mb-0 fw-bold text-dark d-flex align-items-center">
                            <i class="bi bi-clipboard2-pulse me-2 text-primary fs-5"></i> Formulir Pemeriksaan &amp; Keluhan Pasien
                        </h5>
                        <span class="badge bg-primary-subtle text-primary border border-primary-subtle">
                            UTS PWS
                        </span>
                    </div>

                    <div class="card-body p-4">
                        <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Data pemeriksaan berhasil disimpan!');">
                            {{-- Jenis Kelamin --}}
                            <div class="mb-4">
                                <label class="form-label fw-bold text-dark d-flex align-items-center">
                                    <i class="bi bi-gender-ambiguous me-2 text-primary"></i> Jenis Kelamin
                                </label>
                                <div class="d-flex gap-4 p-3 bg-light rounded-3 border">
                                    <x-ui.form type="radio" name="jk" value="pria" label="Pria" checked />
                                    <x-ui.form type="radio" name="jk" value="wanita" label="Wanita" />
                                </div>
                            </div>

                            {{-- Daftar Keluhan Pasien --}}
                            <div class="mb-4">
                                <label class="form-label fw-bold text-dark d-flex align-items-center mb-1">
                                    <i class="bi bi-virus me-2 text-danger"></i> Daftar Keluhan Pasien
                                </label>
                                <small class="text-muted d-block mb-3">Pilih satu atau lebih gejala keluhan yang dirasakan oleh pasien saat ini:</small>

                                <div class="p-3 bg-light rounded-3 border">
                                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-2">
                                        <div class="col">
                                            <x-ui.form type="checkbox" name="keluhan[]" value="nyeri" label="Nyeri" />
                                        </div>
                                        <div class="col">
                                            <x-ui.form type="checkbox" name="keluhan[]" value="lemes" label="Lemes" />
                                        </div>
                                        <div class="col">
                                            <x-ui.form type="checkbox" name="keluhan[]" value="pusing" label="Pusing" />
                                        </div>
                                        <div class="col">
                                            <x-ui.form type="checkbox" name="keluhan[]" value="batuk" label="Batuk" />
                                        </div>
                                        <div class="col">
                                            <x-ui.form type="checkbox" name="keluhan[]" value="demam" label="Demam" />
                                        </div>
                                        <div class="col">
                                            <x-ui.form type="checkbox" name="keluhan[]" value="tak nafsu" label="Tak Nafsu Makan" />
                                        </div>
                                        <div class="col">
                                            <x-ui.form type="checkbox" name="keluhan[]" value="malas" label="Malas / Lesu" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Catatan Tambahan Dokter / Perawat --}}
                            <div class="mb-4">
                                <label for="catatan" class="form-label fw-bold text-dark">
                                    <i class="bi bi-journal-text me-2 text-primary"></i> Catatan Tambahan (Opsional)
                                </label>
                                <textarea class="form-control rounded-3" id="catatan" rows="3" placeholder="Masukkan catatan observasi klinis tambahan..."></textarea>
                            </div>

                            {{-- Tombol Aksi --}}
                            <div class="d-flex flex-wrap gap-2 pt-2 border-top">
                                <x-ui.button type="submit" varian="success">
                                    <i class="bi bi-check2-circle me-1"></i> Simpan Pemeriksaan
                                </x-ui.button>
                                <x-ui.button type="reset" varian="secondary">
                                    <i class="bi bi-arrow-counterclockwise me-1"></i> Reset
                                </x-ui.button>
                                <a href="{{ url('kiya') }}" class="btn btn-outline-primary ms-auto">
                                    <i class="bi bi-arrow-right-circle me-1"></i> Ke Halaman Kiya
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
