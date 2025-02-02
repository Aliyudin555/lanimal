@extends('../Layout.App')
@section('content')
<div class="container top">
    <div class="card1">
      <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Monkey</h5>
                    <article class="card-text">
    <b>Getting to Know Monkeys: Cheerful Life in the Tropical Forest</b><br>
    Monkeys are primate mammals found in various habitats throughout the world, from tropical rainforests to deserts. They are known for their high intelligence, complex social skills, and often entertaining behavior. The following is a brief overview of monkey life in the wild:
<br><b>Species Diversity</b><br>
There are more than 260 known species of monkeys, belonging to two main families: Cercopithecidae (Old World monkeys) and Cebidae (New World monkeys). Each species has its own unique characteristics, from small monkeys such as marmosets to large primates such as gorillas.
<br><b>Eating habit</b><br>
Monkeys are omnivorous animals that have a varied diet depending on the species and habitat. They can eat fruit, leaves, shoots, insects, and sometimes even meat. Monkeys' feeding habits can also influence the dispersal of plant seeds and spores, making them important in forest ecosystems.
<br><b>Social behavior</b><br>
Many monkey species live in complex social groups, where social hierarchies and relationships between individuals play an important role. These groups often consist of several related families, and they communicate through a variety of means, including facial expressions, body movements, and sounds.
<br><b>Threats and Conservation</b><br>
Monkeys face a variety of threats in the wild, including habitat loss due to deforestation, illegal hunting, wild animal trade and conflict with humans. Conservation efforts include protecting their natural habitats, enforcing laws to combat illegal trade, and educating the public about the importance of preserving monkeys and their habitats.
<br><b>Interesting Facts about Monkeys</b><br>
<li> Monkeys have well-developed brains and high learning abilities. They are often used in behavioral and cognitive research.</li>
<li>Some species of monkeys, such as long-tailed monkeys, can use tools to assist in finding food.</li>
<li>Monkeys are often thought of as cute and entertaining animals, but it is important to remember that they are also an important part of the ecosystem and need to be protected.</li>
Monkeys are interesting and diverse creatures, and they play an important role in maintaining balance in the wild. Understanding and respecting their existence is the first step in ensuring that they can continue to live and thrive in their natural habitat.
</article><br>
                    <a href="{{ route('animal') }}" class="btn btn-primary"><< Bank to Page</a>
                  </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/monkey.png')}}" class="img-fluid">
                    <iframe width="520" height="315" src="https://www.youtube.com/embed/opyPkipNNhE?si=W6ziPRmuuOCcj1d9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
      </div>
@endsection
