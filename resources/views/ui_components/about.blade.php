@extends('../Layout.App')
@section('content')
<div
class="container top p-4 p-md-5 mb-4 text-light"
style="
  background-image: url({{ asset('images/macan.jpg')}});
  background-size: cover;
  background-position: center;
  padding-top: 5rem;
"
>
<div class="col-lg-6 px-0">
  <h2 class="display-5 fw-bolder">Welcome to the Fauna World Learning Website</h2>
  <p class="lead my-3 fw-normal">
    The world of fauna is an integral part of life on Earth, playing
    important role in maintaining ecosystem balance.
  </p>
</div>
</div>
<div class="container" >
<div class="row align-items-center">
  <div class="col-md-5 p-4 rounded">
    <img src="{{asset ('images/kel.jpg')}}" class="img-fluid" alt="Image" />
  </div>
  <div class="col-md-6 d-flex align-items-center">
    <div>
      <h2>About Us</h2>
      <h2>Why Did We Create This Website?</h2>
      <p>
        In this modern era, we often forget
        the beauty and biodiversity that surrounds us.
        The world of fauna is an integral part of life on Earth,
        plays an important role in maintaining the balance of the ecosystem.
      </p>
      <p>
        Come explore the beauty of the world of fauna with us. Starting from
        rarely seen exotic animals to creatures
        Small animals that are often overlooked, each animal has a unique story
        that is worthy of being known and preserved.
      </p>
    </div>
  </div>
</div>
</div>
@endsection
