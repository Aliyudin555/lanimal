@extends('../Layout.App')
@section('content')
<div class="container top">
    <div class="card1">
      <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Elephant</h5>
                    <article class="card-text">
    <b>Elephants: Gentle Giants Ruler of the Grasslands</b><br>
    Elephants are the world's largest land animals and are known for their intelligence, strong memory and complex social structure. They are amazing creatures and play an important role in their ecosystem. The following is a brief overview of the life and characteristics of elephants:
<br><b>Species Diversity</b><br>
There are three species of elephant that still exist today: the African elephant (Loxodonta africana), the African forest elephant (Loxodonta cyclotis), and the Asian elephant (Elephas maximus). African elephants are known to be larger than Asian elephants and have larger ears, while Asian elephants have more curved backs and smaller or even non-existent tusks in females.
<br><b>Physical Characteristics</b><br>
Elephants have large bodies with thick skin, large ears that help regulate body temperature, and long trunks that are very versatile. An elephant's trunk is used for breathing, drinking, taking food and communicating. Elephant tusks, which are actually elongated incisors, are used for digging the ground, skinning trees, and as a means of defense.
<br><b>Behavior and Diet</b><br>
Elephants are herbivores who spend most of their time foraging for food. They eat a variety of vegetation types, including grass, leaves, fruit, and tree bark. An adult elephant can consume up to 150 kilograms of food and 190 liters of water every day. Additionally, elephants are known to be very social animals, living in groups led by older females called matriarchs.
<br><b>Reproduction</b><br>
Elephants have the longest gestation period among land mammals, which is around 22 months. A female elephant usually gives birth to one calf every 2-4 years. Elephant calves, or baby elephants, are cared for by the entire group, with other female elephants often acting as "aunts" who help protect and nurture the young.
<br><b>Threats and Conservation</b><br>
Elephant populations face serious threats from poaching for their ivory, habitat loss, and conflict with humans. Poaching for the illegal ivory trade has caused a drastic decline in elephant populations in several regions. Conservation efforts include anti-poaching patrols, habitat protection, and educational programs to reduce conflict between humans and elephants.
<br><b>Interesting Facts about Elephants</b><br>
<li>Elephants have the largest brains among land mammals, which contributes to complex cognitive and emotional abilities.</li>
<li>Elephants can communicate using infrasonic sounds that humans cannot hear, which can travel through the ground and air up to several kilometers away.</li>
<li>Elephants are known to have very strong memories and are able to remember the location of water and food sources for years.</li>
Elephants are majestic and extraordinary creatures with an important role in maintaining the balance of the ecosystem. Protecting them from the threat of poaching and habitat loss is our responsibility to ensure that future generations can continue to witness the wonders of these great animals in the wild.
</article><br>
                    <a href="{{ route('animal') }}" class="btn btn-primary"><< Bank to Page</a>
                  </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/elephant.png')}}" class="img-fluid" ">
                    <iframe width="520" height="315" src="https://www.youtube.com/embed/4zxAxbBuz8s?si=7qCpQZJq4M0MaRZS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
      </div>
@endsection
