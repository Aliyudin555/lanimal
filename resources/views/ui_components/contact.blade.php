@extends('../Layout.App')
@section('content')
<section id="contact" class="contact">
    <h2 class="sub-title"><span>Contact</span> Us</h2>
    <p class="sub-title">Perlu Bantuan dan tanya -  tanya mengenai pembelajaran serta saran dan kritikan hubungi kami.</p>

    <div class="row">
      <form action="">
        <div class="input-group">
          <i data-feather="user"></i>
          <input type="text" placeholder="nama">
        </div>
        <div class="input-group">
          <i data-feather="mail"></i>
          <input type="text" placeholder="email">
        </div>
        <div class="input-group">
          <i data-feather="phone"></i>
          <input type="text" placeholder="no hp">
        </div>
        <button type="submit" class="btn">kirim pesan</button>
      </form>
    </div>
  </section>


@include('../components/footer')
@endsection
