@extends('../Layout.App')
@section('content')
<div class="container top">
    <div class="card1">
      <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Dolphins</h5>
                    <article class="card-text">
<b>Getting to Know Dolphins: Intelligent and Friendly Marine Mammals</b><br>
Dolphins are marine mammals known for their intelligence, strong social nature, and extraordinary swimming abilities. They belong to the Delphinidae family and can be found in oceans throughout the world, as well as some large rivers. With their slender bodies and high speed, dolphins are one of the sea's most fascinating inhabitants and are often loved by humans.
<br><b>Physical Characteristics</b><br>
Dolphins have an aerodynamic body with a distinctive dorsal fin and a long snout. Their skin color varies, but is usually gray with a lighter belly. They have smooth skin and often appear shiny in the sun. Dolphins vary in size, from the smallest, the Maui dolphin, which is about 1.7 meters long, to the largest, the orca or killer whale, which can reach a length of 9 meters.
<br><b>Behavioral and Social</b><br>
Lumba-lumba terkenal dengan perilaku sosial yang kompleks. Mereka hidup dalam kelompok yang disebut pod, yang terdiri dari beberapa hingga ratusan individu. Komunikasi antar lumba-lumba dilakukan melalui suara klik, siulan, dan gerakan tubuh. Mereka sering terlihat bermain, melompat keluar dari air, dan bersosialisasi satu sama lain.

Lumba-lumba juga dikenal karena kecerdasannya yang luar biasa. Mereka dapat menggunakan alat, memahami perintah manusia, dan menunjukkan kemampuan belajar yang tinggi. Interaksi mereka dengan manusia sering kali bersifat positif, dan banyak penelitian yang dilakukan untuk memahami lebih lanjut tentang kemampuan kognitif mereka.
<br><b>Threats and Conservation</b><br>
Dolphins face a variety of threats in the wild, including poaching, pollution and overfishing. Many dolphin species also become entangled in fishing nets, which can cause death. Conservation efforts include habitat protection, fisheries regulations, and rescue and rehabilitation programs for stranded dolphins.
<br><b>Interesting Facts about Dolphins</b><br>
<li>Dolphins can swim at speeds of up to 60 km/h.</li>
<li>They sleep with half the brain active to maintain breathing and guard against predators.</li>
<li>Dolphins have echolocation, the ability to “see” using sound, similar to sonar.</li>
<br>Lumba-lumba adalah makhluk laut yang luar biasa dan menjadi simbol kecerdasan dan kebebasan. Upaya perlindungan dan pelestarian mereka penting untuk menjaga kelestarian spesies yang menakjubkan ini agar tetap ada di lautan kita untuk dinikmati oleh generasi mendatang.
                    </article><br>
                    <a href="{{ route('animal') }}" class="btn btn-primary"><< Bank to Page</a>
                  </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/dolpin.png')}}" class="img-fluid" alt="Harimau Image">
                    <iframe width="520" height="315" src="https://www.youtube.com/embed/adSL3LildlY?si=ALQxjsMRcPU9SIBV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
      </div>
@endsection
