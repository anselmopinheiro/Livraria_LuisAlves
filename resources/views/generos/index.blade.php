@extends('layout')
@section('titulo-pagina')
Livraria
@endsection
@section('Titulo')
Generos
@endsection
@section('conteudo')
<ul>
{{$generos->render()}}
@foreach($generos as $genero)
<li>
<a href="{{route('generos.show', ['idg'=>$genero->id_genero])}}">
    {{$genero->designacao}}
</a></li>
@endforeach
</ul>
@if(auth()->check())
<a href="{{route('generos.create')}}" class="btn btn-info" role="button">Adiciona Generos</a>
@endif
<style>
.wrapper{
  width:100%;
  padding-top: 20px;
  text-align:center;
}
.carousel{
  width:90%;
  margin:0px auto;
}
.slick-slide{
  margin:10px;
}
.slick-slide img{
  width:100%;
  border: 2px solid #fff;
}
</style>



<script type="text/javascript">
$(document).ready(function(){
  $('.carousel').slick({
  slidesToShow: 3,
  centerMode: true,
  });
});
</script>



<div class="wrapper">
<div class="carousel">
  <div><img src="{{asset('imagens/Livraria-Lello-1.jpg')}}"></div>
  <div><img src="{{asset('imagens/umaaventura.jpg')}}"></div>
  <div><img src="{{asset('imagens/umaaventura1.jpg')}}"></div>
  <div><img src="{{asset('imagens/umaaventura2.jpg')}}"></div>
  <div><img src="{{asset('imagens/umaaventura5.jpg')}}"></div>
</div>
</div>
@endsection