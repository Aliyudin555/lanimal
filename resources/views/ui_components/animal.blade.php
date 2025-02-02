@extends('../Layout.App')
@section('content')
<div class="container top" >
    <div class="card2 card-margin"  data-aos="fade-up">
        <div class="card custom-card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="card-title">Tiger</h5>
                        <p class="card-text">The tiger (Panthera tigris) is one of the most recognized and respected big cats in the world. Known as the "King of the Jungle," the tiger is an apex predator that plays an important role in its ecosystem...</p>
                        <a href="{{ route('harimau.detail') }}" class="btn btn-primary">Read More >></a>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('images/harimau.png')}}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card2 card-margin" data-aos="fade-up">
        <div class="card custom-card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="card-title">Dolphins</h5>
                        <p class="card-text">Dolphins are marine mammals known for their intelligence, strong social nature, and extraordinary swimming abilities. They belong to the Delphinidae family and can be found in oceans throughout the world, as well as some large rivers. With a slim body and high speed...</p>
                        <a href="{{ route('dolpin.detail') }}" class="btn btn-primary">Read More >></a>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('images/dolpin.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card3 card-margin" data-aos="fade-up">
        <div class="card custom-card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="card-title">Bear</h5>
                        <p class="card-text">Bears are large mammals from the Ursidae family found in various northern and southern hemispheres. There are eight species of bears alive today, including the brown bear, polar bear, American black bear, and giant panda. Despite differences in habitat and behavior, bears...</p>
                        <a href="{{ route('bear.detail') }}" class="btn btn-primary">Read More >></a>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('images/beruang.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card4 card-margin" data-aos="fade-up">
        <div class="card custom-card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="card-title">Penguin</h5>
                        <p class="card-text">Penguins are unique birds that cannot fly and live in the Southern Hemisphere. Known for their adorable gait and incredible swimming abilities, penguins are one of the most iconic animals of the polar regions....</p>
                        <a href="{{ route('penguin.detail') }}" class="btn btn-primary">Read More >></a>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('images/penguin.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card5 card-margin" data-aos="fade-up">
        <div class="card custom-card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="card-title">zebras</h5>
                        <p class="card-text">Zebras are one of Africa's iconic animals known for their striking black and white striped patterns. They are members of the same Equidae family as horses and donkeys. With their elegance and uniqueness...</p>
                        <a href="{{ route('zebras.detail') }}" class="btn btn-primary">Read More >></a>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('images/zebras.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card6 card-margin" data-aos="fade-up">
        <div class="card custom-card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="card-title">Monkey</h5>
                        <p class="card-text">Monkeys are primate mammals found in various habitats throughout the world, from tropical rainforests to deserts. They are known for their high intelligence...</p>
                        <a href="{{ route('monkey.detail') }}" class="btn btn-primary">Read More >></a>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('images/monkey.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card7 card-margin" data-aos="fade-up">
        <div class="card custom-card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="card-title">Horse</h5>
                        <p class="card-text">Horses, elegant and powerful creatures that have been an integral part of human history for thousands of years, have a profound role in human civilization. From ancient war vehicles to modern transportation, horses have helped humans in a variety of activities...</p>
                        <a href="{{ route('horse.detail') }}" class="btn btn-primary">Read More >></a>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('images/horse.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card8 card-margin" data-aos="fade-up">
        <div class="card custom-card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="card-title">Whale</h5>
                        <p class="card-text">Whales, giant mammals that live in the oceans, have amazed humans for centuries with their grace and impressive size...</p>
                        <a href="{{ route('paus.detail') }}" class="btn btn-primary">Read More >></a>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('images/paus.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card9 card-margin" data-aos="fade-up">
        <div class="card custom-card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="card-title">Shark</h5>
                        <p class="card-text">Sharks are one of the most well-known and often feared sea creatures in the world. With more than 400 species found in various waters, sharks play an important role in marine ecosystems as apex predators...</p>
                        <a href="{{ route('shrak.detail') }}" class="btn btn-primary">Read More >></a>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('images/shark.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card10 card-margin" data-aos="fade-up">
        <div class="card custom-card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="card-title">Snake</h5>
                        <p class="card-text">Snakes are one of the most interesting and mysterious creatures in the world. With thousands of species spread across various habitats, snakes come in a variety of shapes...</p>
                        <a href="{{ route('snake.detail') }}" class="btn btn-primary">Read More >></a>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('images/snake.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card11 card-margin" data-aos="fade-up">
        <div class="card custom-card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="card-title">Eagle</h5>
                        <p class="card-text">Eagles are one of the world's most impressive and revered birds of prey. With their extraordinary flying abilities, sharp eyesight, and deadly talon power...</p>
                        <a href="{{ route('hawk.detail') }}" class="btn btn-primary">Read More >></a>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('images/hawk.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card12 card-margin" data-aos="fade-up">
        <div class="card custom-card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="card-title">Wolf</h5>
                        <p class="card-text">The wolf is one of the most famous carnivorous animals and is often a symbol of strength, freedom, and ingenuity in various cultures around the world...</p>
                        <a href="{{ route('wolf.detail') }}" class="btn btn-primary">Read More >></a>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('images/wolf.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card13 card-margin" data-aos="fade-up">
        <div class="card custom-card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="card-title">Elephant</h5>
                        <p class="card-text">Elephants are the world's largest land animals and are known for their intelligence, strong memory and complex social structure. They are amazing...</p>
                        <a href="{{ route('elephant.detail') }}" class="btn btn-primary">Read More >></a>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('images/elephant.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card14 card-margin" data-aos="fade-up">
        <div class="card custom-card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="card-title">Giraffe</h5>
                        <p class="card-text">Giraffes are one of the most iconic and easily recognized animals in the world with their distinctive long necks and unique fur patterns...</p>
                        <a href="{{ route('giraffe.detail') }}" class="btn btn-primary">Read More >></a>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('images/giraffe.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card15 card-margin" data-aos="fade-up">
        <div class="card custom-card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="card-title">Cat</h5>
                        <p class="card-text">Cats are one of the world's most popular pets, known for their agility, grace and independent nature. Although often...</p>
                        <a href="{{ route('cat.detail') }}" class="btn btn-primary">Read More >></a>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('images/cat.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card16 card-margin" data-aos="fade-up">
        <div class="card custom-card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="card-title">Nemo</h5>
                        <p class="card-text">Nemo is a very popular clownfish character from the Pixar animated film, "Finding Nemo". However, in the real world, clownfish ...</p>
                        <a href="{{ route('nemo.detail') }}" class="btn btn-primary">Read More >></a>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('images/nemo.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card17 card-margin" data-aos="fade-up">
        <div class="card custom-card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="card-title">Pig</h5>
                        <p class="card-text">Pigs are livestock that are widely kept and known throughout the world. They are members of the Suidae family and...</p>
                        <a href="{{ route('pig.detail') }}" class="btn btn-primary">Read More >></a>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('images/pig.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card18 card-margin" data-aos="fade-up">
        <div class="card custom-card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="card-title">Dog</h5>
                        <p class="card-text">Dogs (Canis lupus familiaris) are one of the most popular pets in the world. Known for their loyalty, intelligence...</p>
                        <a href="{{ route('dog.detail') }}" class="btn btn-primary">Read More >></a>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('images/dog.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
