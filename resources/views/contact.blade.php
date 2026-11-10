@extends('layout')

@section('content')

    <h2>Kontak</h2>
    <p>Silakan hubungi kami lewat informasi berikut atau kirim pesan menggunakan formulir di bawah ini.</p>

    <div class="contact-card">
        <p><strong>Alamat:</strong> Jl. Pendidikan No. 10, Jakarta</p>
        <p><strong>Email:</strong> info@sekolahjaya.sch.id</p>
        <p><strong>Telepon:</strong> (021) 1234-5678</p>
    </div>

    <form class="contact-form">
        <div>
            <label for="name">Nama</label><br>
            <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" style="width:100%; padding:8px; margin-top:4px; margin-bottom:12px;" />
        </div>
        <div>
            <label for="email">Email</label><br>
            <input type="email" id="email" name="email" placeholder="Masukkan email Anda" style="width:100%; padding:8px; margin-top:4px; margin-bottom:12px;" />
        </div>
        <div>
            <label for="message">Pesan</label><br>
            <textarea id="message" name="message" rows="5" placeholder="Tulis pesan Anda" style="width:100%; padding:8px; margin-top:4px; margin-bottom:12px;"></textarea>
        </div>
        <button type="submit" style="background-color:#1e40af; color:white; padding:10px 18px; border:none; border-radius:6px; cursor:pointer;">Kirim Pesan</button>
    </form>

@endsection
