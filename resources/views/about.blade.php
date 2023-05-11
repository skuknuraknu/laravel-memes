@extends('master-layout.index')
@section('title')
    Meme | About Us
@endsection
@section('content')
    <h1>About Us</h1>
    <div class="text-success">
        <hr class="border  border-2 opacity-100">
    </div>
    <p class="my-5 mx-auto px-5 fs-6 text-center">
        Selamat datang di website meme kami! Kami adalah tim yang terobsesi dengan meme dan senang
        berbagi konten yang lucu dan menghibur dengan pengguna kami. Kami berusaha untuk mengumpulkan meme terbaik dari
        seluruh internet dan menyajikannya dengan cara yang mudah diakses dan menyenangkan bagi semua orang. Mari bergabung
        dengan kami dan nikmati tawa yang tak terbatas!
    </p>
    <div class="text-success">
        <hr class="border border-2 opacity-100">
    </div>
    <div class="text-center py-3">
        <h2>
            Developer :
        </h2>
        <hr class="w-25 border border-2 mx-auto rounded-5 text-success opacity-100">
    </div>
    <div class="container text-center mt-1">
        <div class="row align-items-end">
            <div class="col">
                <img src="{{ asset('assets/images/meme.png') }}" class="rounded img-thumbnail shadow" alt="foto">
                <h5 class="mt-1">Chairul Ichsan Nur Sani</h5>
                <h6>2108001010027</h6>
            </div>
            <div class="col">
                <img src="{{ asset('assets/images/meme.png') }}" class="rounded img-thumbnail shadow" alt="foto">
                <h5 class="mt-1">Rijalul Akhri</h5>
                <h6>2108001010009</h6>
            </div>
            <div class="col">
                <img src="{{ asset('assets/images/meme.png') }}" class="rounded img-thumbnail shadow" alt="foto">
                <h5 class="mt-1">Haeriskal Kamil</h5>
                <h6>2108001010042</h6>
            </div>
            <div class="col">
                <img src="{{ asset('assets/images/meme.png') }}" class="rounded img-thumbnail shadow" alt="foto">
                <h5 class="mt-1">Muhammad Fathany</h5>
                <h6>2108001010046</h6>
            </div>
        </div>
    </div>
@endsection
