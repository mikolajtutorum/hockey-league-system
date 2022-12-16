
<!-- https://flagicons.lipis.dev/ -->

<!-- Available locales set in config/app -->
        @if (isset($available_locales))
            @foreach($available_locales as $locale_name => $available_locale)
                @if ($available_locale === $current_locale)
                    <a class="current-lang" height="20px" href="{{ $available_locale }}"><{{ $locale_name }}</a>
                @else
                    <a class="choose-lang" height="20px" href="{{ $available_locale }}">{{ $locale_name }}</a>
                @endif
            @endforeach
        @endif
