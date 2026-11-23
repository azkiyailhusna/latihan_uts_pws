# latihan_uts_pws

Struktur proyek:

```
backend/   -> Laravel (app, routes, config, database, public, tests)
frontend/  -> tampilan & aset (resources/views, css, js), package.json, vite.config.js
```

## Cara menjalankan

Backend:

```bash
cd backend
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate
php artisan serve
```

Frontend (terminal lain):

```bash
cd frontend
npm install
npm run dev
```

Atau jalankan keduanya sekaligus dari folder `backend`: `composer dev`.

Untuk build produksi: `cd frontend && npm run build` (hasilnya masuk ke `backend/public/build`).
