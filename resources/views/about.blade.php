@extends('master-layout.index')
@section('title') Meme | About Us @endsection
@section('post')
<style>
    .tentang {
        text-align: justify;
    }
</style>
<div class="col-xxl-5 col-xl-6 col-lg-8 d-flex flex-column gap-7 mt-0 mt-lg-12 mt-xl-0">
    <h3>Tentang Kami</h3>
    <p class="tentang">
        Selamat datang di website meme kami! Kami adalah tim yang terobsesi dengan meme dan senang
        berbagi konten yang lucu dan menghibur dengan pengguna kami. Kami berusaha untuk mengumpulkan meme terbaik dari seluruh internet dan menyajikannya dengan cara yang mudah diakses dan menyenangkan bagi semua orang. Mari bergabung dengan kami dan nikmati tawa yang tak terbata
    </p>
        <div class="row align-items-center mt-5">
            <div class="col">
                <img src="{{ asset('assets/images/avatar-4.png') }}" alt="foto">
                <h6 class="mt-1">Chairul Ichsan Nur Sani</h6>
                <sup>2108001010027</sup>
            </div>
            <div class="col">
                <img src="{{ asset('assets/images/avatar-3.png') }}" alt="foto">
                <h6 class="mt-1">Rijalul Akhri</h6>
                <sup>2108001010009</sup>
            </div>
            <div class="col">
                <img src="{{ asset('assets/images/avatar-2.png') }}" alt="foto">
                <h6 class="mt-1">Haeriskal Kamil</h6>
                <sup>2108001010042</sup>
            </div>
            <div class="col">
                <img src="{{ asset('assets/images/avatar-1.png') }}" alt="foto">
                <h6 class="mt-1">Muhammad Fathany</h6>
                <sup>2108001010046</sup>
            </div>
        </div>
</div>
@endsection