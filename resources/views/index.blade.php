@extends('layouts.app')

@section('content')
  @include('layouts.partial_index_page.hero_section')

  <main id="main">
    @include('layouts.partial_index_page.client_seciton')
    @include('layouts.partial_index_page.aboutus_section')
    @include('layouts.partial_index_page.whyus_section')
    @include('layouts.partial_index_page.service_section')
    @include('layouts.partial_index_page.cta_section')
    @include('layouts.partial_index_page.portfolio_section')
    @include('layouts.partial_index_page.team_section')
    @include('layouts.partial_index_page.price_selection')
    @include('layouts.partial_index_page.ask_question_section')
    @include('layouts.partial_index_page.contact_section')
  </main><!-- End #main -->
@endsection