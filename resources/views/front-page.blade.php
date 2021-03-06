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
   "@type": "FireStation",
   "legalName": "Wheaton Volunteer Rescue Squad, Inc.",
   "name": "Wheaton Volunteer Rescue Squad",
   "url": "https://www.wvrs.org",
   "description": "Volunteer organization providing ambulance, paramedic, and fire and rescue service to Wheaton and the surrounding community",
   "logo": "https://wvrs.org/wp-content/themes/wvrs-custom/dist/images/icon_bd19bfa7.png",
   "foundingDate": "1955",
   "address": {
   "@type": "PostalAddress",
   "streetAddress": "2400 Arcola Ave",
   "addressLocality": "Wheaton",
   "addressRegion": "MD",
   "postalCode": "20902",
   "addressCountry": "US"
   },
   "nonprofitStatus" : "Nonprofit501c3",
   "openingHours": "Mo-Su",
   "naics": "922160",
   "contactPoint": {
   "@type": "ContactPoint",
   "contactType": "customer service",
   "telephone": "+1-301-949-9673"
   },
   "telephone": "+1-301-949-9673",
   "image": "https://wvrs.org/wp-content/uploads/2019/03/14409624_1098485443532304_879993686145431461_o-e1552862469115.jpg",
   "sameAs": [
   "https://www.facebook.com/WheatonRescue2/",
   "https://twitter.com/wheatonrescue2",
   "https://www.instagram.com/wheatonrescue2"
   ]}
  </script>
@endsection
