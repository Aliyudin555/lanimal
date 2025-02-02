@extends('../Layout.App')
@section('content')
<div class="container top">
    <div class="card1">
      <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Bear</h5>
                    <article class="card-text">
    <b>Getting to Know Bears: Amazing Large Mammals</b><br>
    Bears are large mammals from the Ursidae family found in various northern and southern hemispheres.
    There are eight species of bears alive today, including the brown bear, polar bear, American black bear,
     and giant panda. Despite their differences in habitat and behavior, bears have physical characteristics
     and habits that make them unique and interesting.
<br><b>Physical and Behavioral Characteristics</b><br>
Bears have large, strong bodies, sharp claws, and a very keen sense of smell. They are generally omnivorous
animals that eat a variety of foods ranging from plants to meat. Some bear species, such as brown bears,
hibernate in the winter, sleeping for several months to conserve energy.
<br><b>Role in Ecosystems and Conservation</b><br>
Bears play an important role in the ecosystem as apex predators and omnivores. They help control other animal
 populations and spread plant seeds through their feces. However, many bear species face threats from hunting
  and habitat loss. Conservation efforts such as protecting natural habitats and controlling hunting are
  critical to keeping bear populations stable.
<br><b>Interesting Facts about Bears</b><br>
<li>Polar bears can swim more than 60 miles without stopping.</li>
<li>Giant pandas have false thumbs that help them hold bamboo sticks while eating.</li>
<li>American black bears can run up to 30 miles per hour.</li>
Bears are amazing creatures with a variety of adaptations that allow them to survive in a variety of
environments. Protecting them is our responsibility to maintain the balance of nature and biodiversity.
</article><br>
                    <a href="{{ route('animal') }}" class="btn btn-primary"><< Bank to Page</a>
                  </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/beruang.png')}}" class="img-fluid" alt="Beruang Image">
                    <iframe width="520" height="315" src="https://www.youtube.com/embed/TaCAPBAMiYM?si=7y-hTdUM7aBEIOsm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
      </div>
@endsection
