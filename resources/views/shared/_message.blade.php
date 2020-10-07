@foreach (['success','danger','warning','info'] as $msg)
  @if (session()->has($msg))
    <div class="tip tip-{{ $msg }}">
      {{ session()->get($msg) }}
    </div>
  @endif
@endforeach
