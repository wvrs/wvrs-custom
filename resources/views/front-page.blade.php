@extends('layouts.app')

@section('subheader')
  <header class="masthead"></header>
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
   "https://twitter.com/wheatonrescue2"
   ]}
  </script>
@endsection
