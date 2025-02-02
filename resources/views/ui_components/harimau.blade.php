@extends('../Layout.App')
@section('content')
<div class="container top">
    <div class="card1">
      <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Tiger</h5>
                    <article class="card-text">
                        <b>Getting to Know the Tiger: The Charming King of the Jungle</b><br>
                        The tiger (Panthera tigris) is one of the most recognized and respected big cats in the world. Known as the "King of the Jungle," the tiger is an apex predator that plays an important role in its ecosystem. They live in a variety of habitats ranging from tropical rainforests to grasslands and mangrove forests.
<br><b>Physical Characteristics</b><br>
Tigers have large and strong bodies, with a length of up to 3.3 meters and a weight of up to 300 kilograms, depending on the subspecies. Tiger fur is orange with distinctive black stripes, which helps them camouflage in their natural habitat. Each tiger has a unique stripe pattern, like human fingerprints, that distinguishes one from another.
<br><b>Behavior and Ecology</b><br>
Tigers are solitary animals that guard large territorial areas. They are agile hunters, using strength and speed to catch prey such as deer, wild boar, and buffalo. Tigers are also excellent swimmers and are often found swimming in rivers or lakes.
<br><b>Conservation and Threats</b><br>
Tiger populations around the world continue to decline due to poaching and habitat loss. Skin, bones and other body parts are often poached for illegal trade. Conservation efforts include captive breeding programs, protection of natural habitats, and strict law enforcement to combat poaching.
<br><b>Interesting Facts about Tigers</b><br>
<li>Tigers can jump as far as 10 meters in one jump.</li>
<li>A tiger's roar can be heard up to 3 kilometers away.</li>
<li>Tigers have excellent night vision, six times better than humans.</li><br>
The tiger is a symbol of strength and courage in many cultures. Protecting them is the responsibility of all of us to ensure that future generations can still see the beauty and majesty of this "King of the Jungle" in its natural habitat.
                    </article><br>
                    <a href="{{ route('animal') }}" class="btn btn-primary"><< Bank to Page</a>
                  </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/harimau.png')}}" class="img-fluid" alt="Harimau Image">

                        <iframe width="520" height="315" src="https://www.youtube.com/embed/HjVPes3UCU8?si=yPvE3xnt94K7yKUc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                </div>
            </div>
        </div>
    </div>
      </div>
@endsection
