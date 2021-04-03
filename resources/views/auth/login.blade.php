@extends('layouts.center-modal')

@section('title')
  Login
@endsection

@section('content')
  <x-box>
    <img id="logo-login" src="{{ asset('img/logo-white.png') }}" alt="">
    @if ($errors->any())
      <x-alerts.error>
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </x-alerts.error>
    @endif
    <form action="{{ route('auth.login') }}" method="post" class="mt-5">
      @csrf
      <x-forms.input placeholder="Email Address" name="email" type="email" value="{{ old('email')  }}" required autofocus />
      <x-forms.input placeholder="Password" type="password" name="password" required />
      <x-forms.submit>Sign in</x-forms.submit>
      <a href="{{ route('auth.register') }}" class="text-right">Create Account</a>
    </form>
  </x-box>
@endsection