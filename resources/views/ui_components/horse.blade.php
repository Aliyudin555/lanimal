@extends('../Layout.App')
@section('content')
<div class="container top">
    <div class="card1">
      <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Horse</h5>
                    <article class="card-text">
    <b>Horses: Loyal Companions in Human History</b><br>
    Horses, elegant and powerful creatures that have been an integral part of human history for thousands of years, have a profound role in human civilization. From ancient war vehicles to modern transportation, horses have helped humans in a variety of activities, as well as being a symbol of beauty and freedom. The following is a brief overview of the life and role of horses in relation to humans:
<br><b>Racial Diversity and Use</b><br>
There are various horse breeds throughout the world, each with different physical characteristics and uses. Some horse breeds, such as Arabians and Thoroughbreds, are renowned for their speed and grace on the racetrack, while other breeds, such as Clydesdales and Shires, are known for their strength as carriage and heavy work horses.
<br><b>History as a Rider and Vehicle</b><br>
Horses have been an important part of human life since prehistoric times, used for transportation, agricultural work, war, and entertainment. They allowed humans to explore distant territories, bring in trade goods, and even change the outcome of wars.
<br><b>Horses in Culture and Art</b><br>
For centuries, horses have been a common subject in art, literature, and mythology in various cultures around the world. They are often considered a symbol of strength, beauty, and freedom. In many cultures, horses are also considered sacred animals or have deep spiritual meaning.
<br><b>Horses in the Modern Era</b><br>
Although the traditional role of horses as transportation has been replaced by motorized vehicles, horses still have an important place in modern culture and sport. Horse racing, polo and various equestrian sports continue to be popular throughout the world, while horses are also used in therapy and recreational activities.
<br><b>Horse Protection and Welfare</b><br>
Although horses have provided many benefits to humans, it is important to ensure that they are well treated and well cared for. Animal protection and horse welfare organizations play a role in ensuring that horses receive proper care and protection from abuse.
<br><b>Interesting Facts about Horses</b><br>
<li> Horses have excellent eyesight, even in low light conditions, and have the ability to hear a wider range of sound frequencies than humans.</li>
<li>One of the oldest horse breeds that still exists today is the Arabian, which is estimated to have existed since 4,500 years ago.</li>
<li>Horses also have a variety of complex facial expressions and can express their emotions through body movements and sounds.</li>
Horses have been loyal partners to humans for thousands of years, and their rich heritage continues to influence our culture, art, and lives today. Even though the world continues to change, humans' relationship with horses remains an important and cherished part of our history.
</article><br>
                    <a href="{{ route('animal') }}" class="btn btn-primary"><< Bank to Page</a>
                  </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/horse.png')}}" class="img-fluid" >
                    <iframe width="520" height="315" src="https://www.youtube.com/embed/O9XgTTP8SiI?si=WKNPJiDDL5heDeNM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
      </div>
@endsection
