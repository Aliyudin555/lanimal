@extends('../Layout.App')
@section('content')
<div class="container top">
    <div class="card1">
      <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Zebras</h5>
                    <article class="card-text">
    <b>Getting to Know Zebras: Wild Charm in the Savanna</b><br>
    Zebras are one of Africa's iconic animals known for their striking black and white striped patterns. They are members of the same Equidae family as horses and donkeys. With their grace and uniqueness, zebras are one of the main attractions for tourists visiting the African savanna.
<br><b>Physical Characteristics</b><br>
Zebras have stocky bodies with long legs that allow them to run quickly to escape predators. Their distinctive black and white stripe pattern is their main characteristic, and no two zebras have the same stripe pattern. This functions as a form of camluphase, confusing predators and making them difficult to catch.
<br><b>Behavior and Habitat</b><br>
Zebras are very social animals and are often found in large herds. They have an effective warning system against predators, where a single individual will alert the flock with its characteristic call if it detects danger. Zebras live in vast grasslands and savannas, where they can find food in the form of abundant grass.
<br><b>Role in the Ecosystem</b><br>
Zebras have an important role in the African savanna ecosystem. They are herbivores that eat grass and maintain short vegetation by grazing. Their grazing activity also helps spread seeds and renew grasslands.
<br><b>Threats and Conservation</b><br>
Although zebras are relatively common in most of their habitats, they still face threats such as habitat loss and hunting by humans for their meat and skin. Conservation efforts include natural habitat protection, law enforcement against illegal hunting, and herd management to ensure population sustainability.
<br><b>Interesting Facts about Zebras</b><br>
<li> Zebras have keen eyesight and good hearing, making them sensitive to the presence of predators.</li>
<li>Baby zebras can stand and walk within minutes of being born.</li>
<li>Zebras can run at speeds of up to 65 km/h to escape predators.</li>
Zebras are a symbol of the beauty of Africa's wild nature and have an important role in maintaining the balance of the savanna ecosystem. Protecting them and their natural habitats is key to ensuring their continued existence in an increasingly threatened world.
</article><br>
                    <a href="{{ route('animal') }}" class="btn btn-primary"><< Bank to Page</a>
                  </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/zebras.png')}}" class="img-fluid" >
                    <iframe width="520" height="315" src="https://www.youtube.com/embed/ZtBFQBueWqw?si=Zn1VbRncdjpxDv2z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
      </div>
@endsection
