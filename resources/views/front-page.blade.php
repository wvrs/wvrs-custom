@extends('layouts.app')

@section('other_head')
  <meta name="description" content="The Wheaton Volunteer Rescue Squad provides ambulance, paramedic, and fire and rescue service to Wheaton and the surrounding community.">
  <meta name="image" content="@asset('images/og_square.jpg')">

  <meta itemprop="name" content="Wheaton Volunteer Rescue Squad">
  <meta itemprop="description" content="The Wheaton Volunteer Rescue Squad provides ambulance, paramedic, and fire and rescue service to Wheaton and the surrounding community.">
  <meta itemprop="image" content="@asset('images/og_square.jpg')">

  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="Wheaton Volunteer Rescue Squad">
  <meta name="twitter:description" content="The Wheaton Volunteer Rescue Squad provides ambulance, paramedic, and fire and rescue service to Wheaton and the surrounding community.">
  <meta name="twitter:site" content="wheatonrescue2">
  <meta name="twitter:image:src" content="@asset('images/og_square.jpg')">

  <meta property="og:title" content="Wheaton Volunteer Rescue Squad">
  <meta property="og:description" content="Providing volunteer ambulance, paramedic, and fire / rescue services.">
  <meta property="og:image" content="@asset('images/og_rect.jpg')">
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="og:image:alt" content="Wheaton Rescue Squad in front of station" />
  <meta property="og:image" content="@asset('images/og_square.jpg')">
  <meta property="og:image:width" content="980" />
  <meta property="og:image:height" content="980" />
  <meta property="og:image:alt" content="Wheaton Rescue Squad in front of station" />
  <meta property="og:url" content="{!! site_url() !!}">
  <meta property="og:site_name" content="Wheaton Volunteer Rescue Squad">
  <meta property="og:type" content="website">
@endsection

@section('subheader')
  <header class="masthead">
    <div class="block">
      <div class="block-content">
        <h1>Give back to your community</h1>
        <p>Your donation helps pay for critical needs such as volunteer training, equipment, fire station upgrades, and new vehicles.</p>
        <a class="btn btn-secondary" href="/donate" role="button">Donate Now</a>
      </div>
    </div>
    <div class="block"></div>
  </header>
@endsection

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())
  @endwhile

  {!! get_the_posts_navigation() !!}

  <script type="application/ld+json">
   { "@context": "http://schema.org",
   "@type": "Organization",
   "name": "Wheaton Volunteer Rescue Squad",
   "legalName" : "Wheaton Volunteer Rescue Squad, Inc.",
   "url": "http://www.wvrs.org",
   "logo": "https://wvrs.org/wp-content/themes/wvrs-custom/dist/images/icon_bd19bfa7.png",
   "foundingDate": "1955",
   "address": {
   "@type": "PostalAddress",
   "streetAddress": "2400 Arcola Ave",
   "addressLocality": "Wheaton",
   "addressRegion": "MD",
   "postalCode": "20902",
   "addressCountry": "USA"
   },
   "contactPoint": {
   "@type": "ContactPoint",
   "contactType": "Administrative",
   "telephone": "[+301-949-9673]"
   },
   "sameAs": [
   "https://www.facebook.com/WheatonRescue2/",
   "https://twitter.com/wheatonrescue2",
   "https://www.instagram.com/wheatonrescue2"
   ]}
  </script>
@endsection
