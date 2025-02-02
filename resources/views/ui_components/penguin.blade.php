@extends('../Layout.App')
@section('content')
<div class="container top">
    <div class="card1">
      <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Penguin</h5>
                    <article class="card-text">
    <b>Getting to Know Penguins: Flightless Birds from the Pole</b><br>
    Penguins are unique birds that cannot fly and live in the southern hemisphere. Known for their adorable gait and incredible swimming abilities, penguins are one of the most iconic animals of the polar regions. They have special adaptations that allow them to survive in extremely cold and harsh environments.
<br><b>Physical Characteristics</b><br>
Penguins have plump, round bodies with wings that have evolved into powerful flippers for swimming. Their plumage is black and white, with some species having additional colors such as yellow or orange on the head and neck. Thick fur and a layer of fat under the skin help them keep warm in very cold temperatures.
<br><b>Behavior and Ecology</b><br>
Penguins are excellent swimmers and can dive to depths of more than 500 meters in search of food such as fish, krill and squid. They spend most of their lives at sea, but return to land to breed and care for their young.

Penguins live in large colonies, especially during the breeding season. They build nests on rocky shores or ice, and both parents share the duties of incubating the eggs and caring for the young.
<br><b>Threats and Conservation</b><br>
Penguin populations are threatened by climate change, which is affecting their food availability and habitat. Marine pollution and overfishing are also serious threats. Several penguin species are in a conservation status that is vulnerable or threatened with extinction.

Conservation efforts include protecting natural habitats, reducing pollution, and regulating fishing. Research and monitoring programs are also underway to understand and reduce the impact of environmental change on penguin populations.
<br><b>Interesting Facts about Penguins</b><br>
<li> Emperor penguins can survive temperatures down to -60 degrees Celsius.</li>
<li>They can swim at speeds of up to 15 km/h.</li>
<li>Penguins often engage in "tobogganing," that is, sliding on their bellies on ice to conserve energy.</li>
Penguins are extraordinary birds with many adaptations that allow them to survive in extreme environments. They are a symbol of nature's resilience and adaptation, and remind us of the importance of environmental conservation to maintain their survival.
</article><br>
                    <a href="{{ route('animal') }}" class="btn btn-primary"><< Bank to Page</a>
                  </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/penguin.png')}}" class="img-fluid" ">
                    <iframe width="520" height="315" src="https://www.youtube.com/embed/e-0_7cVZE-4?si=2pynr5QOQCbYv527" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
      </div>
@endsection
