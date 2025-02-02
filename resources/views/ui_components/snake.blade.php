@extends('../Layout.App')
@section('content')
<div class="container top">
    <div class="card1">
      <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Snake</h5>
                    <article class="card-text">
    <b>Snakes: Mysterious Slithering Creatures</b><br>
    Snakes are one of the most interesting and mysterious creatures in the world. With thousands of species spread across various habitats, snakes come in a variety of shapes, sizes and colors. Here is a brief overview of snakes and some interesting aspects of their lives:
<br><b>Species Diversity</b><br>
Snakes consist of more than 3,000 species found on almost all continents, except Antarctica. Snake species can live in various habitats, from tropical forests, deserts, grasslands, to waters. Some well-known snakes include cobras, pythons, and vipers.
<br><b>Physical Characteristics</b><br>
Snakes have long, legless bodies, which are covered with smooth scales. They have the ability to crawl by utilizing their body muscles. Snakes have forked tongues that they use to "smell" their surroundings and collect odor particles that are sent to the Jacobson's organ on the roof of their mouths for analysis.
<br><b>Behavior and Diet</b><br>
Most snakes are carnivores and prey on various small animals such as mammals, birds, amphibians and insects. Some large species, such as anacondas and pythons, can even prey on larger animals such as deer and pigs. Snakes kill their prey by coiling them or using venom that is injected through a bite.
<br><b>Reproduction</b><br>
Snakes have diverse reproductive methods. Some species lay eggs (oviparous), while others give birth to live young (viviparous). There are also those who have a combination of both (ovoviviparous), where the eggs hatch inside the mother's body and then give birth to live offspring.
<br><b>Threats and Conservation</b><br>
Many snake species face threats from habitat loss, hunting, and illegal trade. Some species, such as rattlesnakes and cobras, are often hunted because they are considered dangerous to humans. Conservation efforts are important to protect endangered species and maintain ecosystem balance.
<br><b>Interesting Facts about Snakes</b><br>
<li>Snakes can consume prey much larger than their heads due to their extremely flexible jaws.</li>
<li>Snakes shed their skin periodically, which allows them to grow and shed parasites.</li>
<li>Venomous snakes such as the inland taipan have very strong venom and can kill a human with one bite, but fortunately, humans rarely encounter these snakes.</li>
Snakes are creatures that play an important role in the ecosystem by controlling the population of their prey. Although often considered scary, snakes are an important part of biodiversity and need to be respected and protected.
</article><br>
                    <a href="{{ route('animal') }}" class="btn btn-primary"><< Bank to Page</a>
                  </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/snake.png')}}" class="img-fluid" ">
                    <iframe width="520" height="315" src="https://www.youtube.com/embed/7X2New9KTJU?si=U5G2O_e5n-sG_xGz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
      </div>
@endsection
