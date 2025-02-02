@extends('../Layout.App')
@section('content')
<div class="container top">
    <div class="card1">
      <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Nemo</h5>
                    <article class="card-text">
    <b>Nemo: Charming Clownfish from Coral Reefs</b><br>
    Nemo is a very popular clownfish character from the Pixar animated film, "Finding Nemo". However, in the real world, clownfish (Amphiprioninae) are amazing and colorful creatures that live in coral reefs. Here is a brief description of clownfish:
<br><b>Physical Characteristics</b><br>
Clown fish have a small body with a length of around 10-18 cm. They are known for their bright colors, usually a combination of orange, white, and black. Their bodies are marked with distinctive vertical white stripes. Clownfish's skin is coated with mucus that helps protect them from stings from the sea anemones in which they live.
<br><b>Habitat and Distribution</b><br>
Clownfish are found in the warm waters of the Indo-Pacific, including the Red Sea and the Great Barrier Reef. They live in symbiosis with sea anemones, where the anemones provide protection for the clownfish from predators and the clownfish help keep the anemones clean of parasites.
<br><b>Behavior and Diet</b><br>
Clownfish are omnivores, eating a variety of foods including plankton, algae, and food debris from the anemones where they live. They are very territorial and will defend their anemones from threats.

<br><b>Reproduction</b><br>
Clownfish have a unique reproductive system where all individuals are initially male. In each pair, one individual will turn into the female, which is larger, and becomes the leader. If the female dies, the dominant male will transform into the female and take over the role. The female will lay eggs around the anemone, which the male will then guard until they hatch.

<br><b>Symbiosis with Anemones</b><br>
The symbiotic relationship between clownfish and sea anemones is one of the best known in marine ecosystems. The anemones protect the clownfish from predators with their stinging tentacles, while the clownfish provides food for the anemones and keeps them clean of parasites. Clownfish also help circulate water around the anemone, which is beneficial for the anemone's health.
<br><b>Interesting Facts about Clownfish</b><br>
<li>Clownfish may make short trips outside the anemone, but they always return to safety.</li>
<li>They have a strict social hierarchy within their group, with the dominant female as the leader.</li>
<li>Clownfish use vocal and body signals to communicate with each other and defend their territory.</li><br>
Clownfish are an amazing example of adaptation and cooperation in the marine realm. Their colorful and dynamic lives on coral reefs remind us of the extraordinary biodiversity of our oceans and the importance of conserving marine habitats. "Finding Nemo" may have brought clownfish popularity, but their true story in the wild is something that is equally fascinating and important to preserve.
</article><br>
                    <a href="{{ route('animal') }}" class="btn btn-primary"><< Bank to Page</a>
                  </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/nemo.png')}}" class="img-fluid" >
                    <iframe width="520" height="315" src="https://www.youtube.com/embed/lgUFkM34R7U?si=cvVwICfOmDWk9XJ6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
      </div>
@endsection
