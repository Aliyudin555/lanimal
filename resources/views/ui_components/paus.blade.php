@extends('../Layout.App')
@section('content')
<div class="container top">
    <div class="card1">
      <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Whale</h5>
                    <article class="card-text">
    <b>Delve into the World of Whales: Majestic Kings of the Sea</b><br>
    Whales, giant mammals that live in the oceans, have amazed humans for centuries with their grace and impressive size. From the swift rorqual to the largest blue whale, their presence represents an unparalleled natural wonder in the ocean. The following is a brief overview of the life and uniqueness of whales:
<br><b>Species Diversity</b><br>
There are more than 80 known species of whales, including humpback whales, blue whales, sperm whales, and many more. Each species has its own unique characteristics, from body size to migration patterns.
<br><b>Physical Characteristics</b><br>
Whales are one of the largest mammals in the world, with blue whales reaching lengths of up to 30 meters and weighing up to 200 tonnes. They have long, slender bodies with large fins that help them swim quickly in the ocean. Their skin is usually dark on top and white on the bottom, providing perfect camouflage in the water.
<br><b>Behavior and Eating Habits</b><br>
Whales are planktonic feeders, meaning they filter seawater to catch plankton and krill. Some whale species, such as humpback whales, also eat small fish and squid. They can filter up to thousands of tons of water every day in search of food.
<br><b>Long Migration</b><br>
Whales undertake long migrations each year, moving from winter waters to cooler summer waters in search of food. Some species of whales travel thousands of kilometers during their migrations, demonstrating extraordinary strength and endurance.
<br><b>Conservation and Threats</b><br>
Although whales are protected by international law, they still face various threats, including illegal hunting, ocean pollution and climate change. Conservation efforts include a ban on commercial hunting, the creation of marine reserves, and scientific research to better understand the lives of whales and how to protect them.
<br><b>Interesting Facts about Whales</b><br>
<li>The blue whale is the largest creature to have ever existed on Earth, even larger than the largest dinosaur.</li>
<li>The sound of a blue whale can be heard up to 1,000 miles away and is considered the loudest sound made by a living creature.</li>
<li>Some species of whales, such as humpback whales, are famous for their jumps over the surface of the water.</li><br>
Whales are a symbol of natural wonder and the beauty of the ocean that must be protected and preserved for future generations. Their existence shows the importance of maintaining the balance of marine ecosystems and protecting life below the water surface.
</article><br>
                    <a href="{{ route('animal') }}" class="btn btn-primary"><< Bank to Page</a>
                  </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/paus.png')}}" class="img-fluid" >
                    <iframe width="520" height="315" src="https://www.youtube.com/embed/bjjkbnZwjA8?si=xaYvZxgbKAKMFwjy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
      </div>
@endsection
