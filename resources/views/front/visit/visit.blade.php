@extends('layout.base')

@section('content')

    @include('front.visit.sections.places')

@endsection

@section('js')

<script>
    let currentIndex = 0;
const slides = document.querySelectorAll('.slide');

function changeSlide() {
  slides[currentIndex].classList.remove('active');
  currentIndex++;
  
  if (currentIndex >= slides.length) {
    currentIndex = 0;
  }

  slides[currentIndex].classList.add('active');
  setTimeout(changeSlide, 2000); 
}

setTimeout(changeSlide, 2000);
</script>

@endsection