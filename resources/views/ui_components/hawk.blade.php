@extends('../Layout.App')
@section('content')
<div class="container top">
    <div class="card1">
      <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Eagle</h5>
                    <article class="card-text">
    <b>Eagle: The Lord of the Heavens</b><br>
    Eagles are one of the world's most impressive and revered birds of prey. With their extraordinary flying abilities, sharp eyesight, and deadly talon power, eagles have been a symbol of strength and bravery in various cultures. Here is a brief overview of the life and characteristics of an eagle:
<br><b>Species Diversity</b><br>
There are more than 60 species of eagles spread throughout the world, except Antarctica. Some well-known eagle species include the bald eagle, golden eagle, and short-toed snake eagle. Each species has special adaptations that allow it to survive in certain habitats, from high mountains to dense forests and open grasslands.
<br><b>Physical Characteristics</b><br>
Eagles have strong bodies with wide wings that enable them to fly at high speeds and hover in the air for long periods. Eagles vary in size, with some species having a wingspan of up to 2.5 meters. The characteristic of an eagle is its strong, curved beak and sharp claws which it uses to catch and grip its prey.
<br><b>Behavior and Diet</b><br>
As apex predators, eagles prey on a variety of animals, including small mammals, other birds, and reptiles. They use their keen eyesight to identify prey from great heights and then ambush it with incredible speed and precision. Some eagles, such as sea eagles, also eat fish they catch from the surface of the water.
<br><b>Reproduction</b><br>
Eagles are birds that are loyal to their mates and often use the same nest every year. Eagle nests, called eyries, are usually built in high places such as cliffs or treetops to protect their young from predators. Female eagles usually lay 1-3 eggs, and both parents work together to care for and feed their young until they are ready to fly.
<br><b>Threats and Conservation</b><br>
Eagle populations in some parts of the world are threatened by habitat destruction, hunting, and pesticide poisoning. Conservation efforts, including protection of their natural habitat and strict hunting regulations, have helped some eagle species to recover. For example, bald eagles that were once endangered in the United States have now returned in healthy numbers thanks to intensive conservation efforts.
<br><b>IInteresting Facts about Eagles</b><br>
<li>Eagles have very sharp eyesight, about 4-8 times better than humans.</li>
<li>Golden eagles can fly at speeds of up to 240 kilometers per hour while diving to catch prey.</li>
<li>The bald eagle, despite its name, has a head covered in white feathers, which contrasts with its dark brown body.</li>
The eagle is a symbol of courage, freedom and strength. Their majestic presence in the sky reminds us of the beauty and diversity of nature that we need to protect and preserve for future generations.
</article><br>
                    <a href="{{ route('animal') }}" class="btn btn-primary"><< Bank to Page</a>
                  </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/hawk.png')}}" class="img-fluid" ">
                    <iframe width="520" height="315" src="https://www.youtube.com/embed/2P0VCMYZenw?si=sP3lj2aR1lmGeJYd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
      </div>
@endsection
