@extends('templates.app')

@section('content')
<section class="first-gallery-section">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="text-content">
                  <h2>Advance Gallery</h2>
                  <div class="line-dec"></div>
                  <span>More About us</span>
                </div>
              </div>
            </div>
          </div>
        </section>


        <section class="send-to-home">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="back-to-home">
                <div class="primary-button">
                    <a href="{{ route('gallery') }}">back to gallery</a>
                  <h1>{{$minimal}}</h1>
                </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        @endsection