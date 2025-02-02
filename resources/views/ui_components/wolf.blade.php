@extends('../Layout.App')
@section('content')
<div class="container top">
    <div class="card1">
      <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Wolf</h5>
                    <article class="card-text">
    <b>Wolf: The Wise Lord of the Forest</b><br>
    The wolf is one of the most famous carnivorous animals and is often a symbol of strength, freedom, and ingenuity in various cultures around the world. The following is a brief overview of the life and characteristics of wolves:
<br><b>Species Diversity</b><br>
Wolves belong to the Canidae family and have several species distributed in various parts of the world. The gray wolf (Canis lupus) is the best known species of wolf and has many subspecies found in North America, Europe, and Asia. Apart from that, there are also red wolves (Canis rufus) and Ethiopian wolves (Canis simensis) which are less common.
<br><b>Physical Characteristics</b><br>
Wolves have strong, sleek bodies, with thick fur that protects them from cold weather. The size of wolves varies depending on the species and geographical location, but generally they have a body length of around 1-1.5 meters and weigh between 30-80 kilograms. Wolves have strong jaws and sharp teeth that are ideal for catching and ripping apart their prey.
<br><b>Behavior and Diet</b><br>
Wolves are social animals that live in groups called packs. A wolf pack is led by a pair of alphas, namely the dominant male and female who are responsible for the pack's decisions. They are highly skilled hunters, working together in packs to take down larger prey such as deer, bison, and elk. Apart from that, they also eat smaller animals such as rabbits and mice.
<br><b>Reproduction</b><br>
Female wolves usually give birth to cubs once a year after a gestation period of about 63 days. A female wolf can give birth to 4-6 cubs in one birth. Wolf cubs, called wolf cubs, are born in hidden dens and cared for by the rest of the pack until they are old enough to join the hunt.
<br><b>Threats and Conservation</b><br>
Wolf populations have experienced drastic declines in many areas due to hunting, habitat loss and conflict with humans. Conservation efforts, including habitat protection programs and the reintroduction of wolves to areas where they had been extinct, have helped some wolf populations recover. However, wolves still face many challenges in surviving in the wild.
<br><b>Interesting Facts about Wolves</b><br>
<li>Wolves have complex communication, using a variety of vocalizations such as howls, growls, and barks, as well as body language to communicate with other pack members.</li>
<li>Wolves can run at speeds of up to 60 kilometers per hour over short distances when chasing prey.</li>
<li>Packs of wolves can explore very large areas, with home ranges that can reach 2,500 square kilometers.</li>
Wolves are amazing creatures with an important role in their ecosystem. They help maintain the balance of prey animal populations and promote biodiversity. Understanding and protecting wolves is an important step in maintaining the health of our natural ecosystems.
</article><br>
                    <a href="{{ route('animal') }}" class="btn btn-primary"><< Bank to Page</a>
                  </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/wolf.png')}}" class="img-fluid" ">
                    <iframe width="520" height="315" src="https://www.youtube.com/embed/x_uriBZ-VQo?si=CHYX5z4rSRNmRRmo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
      </div>
@endsection
