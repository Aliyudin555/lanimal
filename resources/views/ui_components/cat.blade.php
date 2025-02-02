@extends('../Layout.App')
@section('content')
<div class="container top">
    <div class="card1">
      <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Cat</h5>
                    <article class="card-text">
    <b>Cats: Loyal Friends and Great Hunters</b><br>
    Cats are one of the world's most popular pets, known for their agility, grace and independent nature. Although often considered domestic animals, cats have a long history as great hunters and human companions. Here is a brief overview of cats:
<br><b>History and Domestication</b><br>
The domestic cat (Felis catus) is believed to have been domesticated around 9,000 years ago in the Middle East. They were originally valued for their ability to control pest populations such as rodents and insects. Over time, cats have become cherished pets in various cultures around the world.
<br><b>Physical Characteristics</b><br>
Cats have slim, flexible bodies with sharp, retractable claws. They have a keen sense of hearing, excellent night vision, and sensitive whiskers that help them navigate their surroundings. Cats have a variety of fur colors and patterns, from short to long fur, as well as a variety of charming eye colors.
<br><b>Behavior and Habits</b><br>
Cats are known as independent animals, but they can also be very social and affectionate towards their owners. They spend a lot of time grooming, sleeping, and playing. Cats are natural hunters who often exhibit hunting behavior even if they are well fed at home. They are often seen chasing small toys, which is a reflection of their hunting instincts.
<br><b>Communication</b><br>
Cats communicate through a variety of sounds such as meows, purrs, and hisses, as well as through body language such as wagging their tails, lowering their ears, and arching their backs. Each sound and movement has a specific meaning that cats use to express their feelings and desires.
<br><b>Health and Care</b><br>
Cats are relatively easy animals to care for. They need nutritious food, clean water, and a safe environment to play and explore. Routine health care such as vaccinations, vet checkups, and dental care are important to keep cats healthy. Cats also need to be sterilized to control the population and prevent certain health problems.
<br><b>Interesting Facts about Cats</b><br>
<li>Cats have about 30 extra vertebrae compared to humans, giving them incredible flexibility.</li>
<li>Each cat has a unique nose pattern, like human fingerprints.</li>
<li>Cats can make around 100 different sounds, compared to dogs which only have around 10.</li>
A cat's purr not only signals comfort but can also have a healing effect, helping to reduce stress and speed bone healing in cats.
Cats are charming animals with unique personalities and strong charm. They are loyal companions to millions of people around the world and continue to fascinate us with their affectionate behavior and amazing hunting habits.
</article><br>
                    <a href="{{ route('animal') }}" class="btn btn-primary"><< Bank to Page</a>
                  </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/cat.png')}}" class="img-fluid" ">
                    <iframe width="520" height="315" src="https://www.youtube.com/embed/QadUonunflw?si=ZGtrzSGL_ojbZGll" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
      </div>
@endsection
