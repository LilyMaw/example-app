@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="row">
        @foreach ($viewData['products'] as $product)
            <div class="col-md-4 col-lg-3 mb-4">
                <div class="card">
                    {{-- <span class="card-img-top" style="background-image:url( {{asset('/storage/'.$product->getImage())}} ); background-position: center; width: 100%; height: 300px"></span> --}}
                    <img src="{{ asset('/storage/'.$product->getImage()) }}" class="card-img-top" style="height: 300px">
                    <div class="card-body text-center">
                        <a href="{{ route('product.show', ['id' => $product->getId()]) }}"
                            class="btn bg-primary text-white">{{ $product->getName() }}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
@section('js')
    <script type="text/javascript" src="{{ asset('js/product.js') }}"></script>
@endsection
