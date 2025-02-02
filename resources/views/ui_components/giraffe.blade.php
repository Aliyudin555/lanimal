@extends('../Layout.App')
@section('content')
<div class="container top">
    <div class="card1">
      <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Giraffe</h5>
                    <article class="card-text">
    <b>Giraffe: The Graceful Giant of the African Savanna</b><br>
    Giraffes are one of the most iconic and easily recognized animals in the world with their distinctive long necks and unique fur patterns. They are amazing creatures and play an important role in the African savanna ecosystem. Here is a brief overview of the life and characteristics of giraffes:
<br><b>Physical Characteristics</b><br>
The giraffe is the world's tallest land animal, with adult males reaching up to 5.5 meters tall, while females are slightly shorter. The giraffe's long neck consists of seven long vertebrae, just like other mammals, but each vertebra is longer. Giraffes' legs are also long and strong, which helps them run at speeds of up to 60 kilometers per hour over short distances. The giraffe's fur pattern, consisting of brown or orange patches on a whitish yellow background, is as unique to each individual as a human fingerprint.
<br><b>Habitat and Distribution</b><br>
Giraffes are found in various areas of savanna and open forest in Africa, from Chad in the north to South Africa in the south, and from Niger in the west to Somalia in the east. They prefer areas with lots of acacia trees, which are their main food source.
<br><b>Behavior and Diet</b><br>
Giraffes are herbivores that eat leaves, flowers, fruit, and seeds from various types of trees and shrubs. Their long necks allow them to reach leaves high on trees that other animals cannot reach. Giraffes use their long, prehensile tongues, which can reach lengths of up to 45 cm, to stick out and grasp food. They spend most of their day feeding and can consume up to 34 kilograms of vegetation per day.
<br><b>Social and Reproductive</b><br>
Giraffes are animals that live in loose groups known as towers, consisting of males, females and their young. There is no strict social structure within the tower, and members often come and go. Females give birth after a gestation period of about 15 months, usually to just one cub. Giraffe calves, or "calves", are born about 1.8 meters tall and are able to stand and walk within hours of birth.
<br><b>Threats and Conservation</b><br>
Giraffe populations face a variety of threats including illegal hunting, habitat loss due to agricultural expansion, and conflict with humans. Several subspecies of giraffe are threatened with extinction. Conservation efforts include habitat protection, creation of national parks and nature reserves, and population monitoring and research programs.
<br><b>Interesting Facts about Giraffes</b><br>
<li>Giraffes only sleep about 4.6 hours per day, often in short periods lasting just a few minutes.</li>
<li>Despite their long necks, giraffes have the same number of cervical vertebrae as humans—seven.</li>
<li>Giraffes have very high blood pressure to pump blood to their high brains, so their hearts are very large and strong.</li>
Giraffes are amazing creatures and play an important role in their ecosystem by aiding seed dispersal and maintaining healthy vegetation on the savanna. Conservation efforts are needed to protect these graceful animals and ensure the sustainability of their populations in the wild.
</article><br>
                    <a href="{{ route('animal') }}" class="btn btn-primary"><< Bank to Page</a>
                  </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/giraffe.png')}}" class="img-fluid" ">
                    <iframe width="520" height="315" src="https://www.youtube.com/embed/KNmdrOf7MwU?si=482q8oXZE9Kw6LVo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
      </div>
@endsection
