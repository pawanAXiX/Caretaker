@extends('layouts.app')
@section('index')
        <div class="form-group mb-10  absolute bottom-0 left-1/2 transform -translate-x-1/2">
            <div class="logo">
                <img  src="{{asset('storage/logo.png')}}" />
            </div>
            <livewire:pre-register/>
            <div class="flex flex-col mt-5 items-center">
                <div class="bounce h-full border-10 border-solid  "> </div>
                <div class="bounce h-full border-10 border-solid  "> </div>
                <div class="bounce h-full border-10 border-solid  "> </div>
                <div class="bounce h-full border-10 border-solid  "> </div>
            </div>
        </div>
@endsection
@section('book')
    <div class="book-content flex flex-col box-border mt-10 ">
        <div class="book-image ">
            <img class="book-img object-scale-down" src="{{asset('storage/book.png')}}" id="book" usemap="#book-map" alt=""/>
            <map name="book-map" id="book-map">
                <area shape="rect" coords="0,0,400,600" alt="Click Area 1" href="javascript:void(0);" onclick="console.log('You clicked inside Area Left!')" class="cursor-pointer">
                <area shape="rect" coords="400,0,800,600" alt="Click Area 1" href="javascript:void(0);" onclick="console.log('You clicked inside Area Right!')" class="cursor-pointer">
            </map>
            <div class="description text-4xl text-red-800" >
                <blockquote>
                    "The only limit to our realization of tomorrow is our doubts of today."
                    <footer>- Franklin D. Roosevelt</footer>
                </blockquote>
            </div>
            <div class="flex flex-col items-center">
                <div class="bounce h-full border-10 border-solid "> </div>
                <div class="bounce h-full border-10 border-solid "> </div>
                <div class="bounce h-full border-10 border-solid "> </div>
                <div class="bounce h-full border-10 border-solid "> </div>
            </div>
        </div>

    </div>
@endsection
