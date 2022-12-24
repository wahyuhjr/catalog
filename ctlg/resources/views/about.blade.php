@extends('layouts.app')
@section('content')

<section class="overflow-hidden h-full bg-dof mt-20 mx-auto">
    <div class="mt-20">
        <h1 class="font-bold text-3xl md:text-5xl text-bata  text-center "> About Us</h1>
    </div>
    <div class="lg:grid lg:grid-cols-2 mx-auto">
        <div class="kiri flex lg:justify-center lg:mt-24 md:mb-10">
            <img src="{{ asset('assets/images/banner-2.jpg') }}" class=" h-3/4 rounded-lg lg:object-cover md:p-0 p-10">
        </div>
        <div class="kanan md:p-5 p-5 ">
            <div class="text-1 mt-10 md:mt-20 ">
                <h1 class="font-bold text-bata text-2xl">Memulai dari nol</h1>
                <p class="text-white text-lg  md:text-justify lg:w-3/4 ">
                    Perjalanan awal kami dimulai di sebuah toko retail kecil di Surabaya pada tahun 1970, saat kami
                    mulai
                    menyediakan produk makanan dan minuman lokal maupun impor. </p>
            </div>
            <div class="text-2 mt-5">
                <h1 class="font-bold text-bata text-2xl"> Menjadi Yang Terdepan</h1>
                <p class="text-white text-lg lg:text-justify lg:w-3/4 ">

                    Semakin berkembang, kami mulai mengembangkan bisnis ini hingga ke skala nasional. Kami sadar bahwa
                    selama ini, bisnis kami didasari dengan visi untuk menjadi importir dan distributor nomor 1 untuk
                    bumbu masakan dan makanan ringan di Indonesia. Semakin kami berkembang, semakin kami berfokus untuk
                    mencapai visi tersebut. </p>
            </div>
            <div class="text-3 mt-5">
                <h1 class="font-bold text-bata text-2xl">Misi Untuk Visi</h1>
                <p class="text-white text-lg lg:text-justify lg:w-3/4">
                    Dengan ambisi yang besar, diperlukan juga misi yang matang untuk mencapai titik tersebut. Pertama,
                    kami mendedikasikan bisnis ini untuk menyediakan hanya kualitas produk yang terbaik dengan standar
                    internasional. Kami percaya bahwa pembeli berhak mendapatkan yang terbaik, dan itulah yang akan kami
                    tawarkan ke pembeli.<br>
                    Untuk menjadi nomor satu di Indonesia, kami juga siap memperluas jaringan perusahaan dan pemasaran
                    kami ke seluruh Indonesia. Kami percaya bahwa kualitas yang baik patut dinikmati oleh khalayak luas.
                    Maka dari itu, kami bersedia untuk membawa produk kami ke setiap titik di Indonesia<br>
                    Dengan perkembangan teknologi dan sosial media maupun media massa, bukan harapan kami untuk lekang
                    dimakan zaman. Menggabungkan ambisi kami dan kualitas produk di atas rerata, kami juga memiliki visi
                    untuk menjadi perusahaan modern yang memanfaatkan vitalnya digital marketing seperti penjualan di
                    e-commerce dan menyebarkan awareness di media sosial.
                </p>
            </div>
            <div class="text-4 mt-5">
                <h1 class="font-bold text-bata text-2xl"> Harapan untuk ke Depan</h1>
                <p class="text-white text-lg lg:text-justify lg:w-3/4 ">
                    Kedepannya, kami berharap bahwa kualitas produk kami dapat menemani perjalanan hidup Anda
                    sehari-hari, sebagaimana Anda
                </p>
            </div>
        </div>
    </div>
</section>

@endsection