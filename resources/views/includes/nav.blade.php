<nav id="sidebar" class="d-flex flex-column pt-2 px-3 text-white bg-dark">
    <div class="sidebar-brand d-flex justify-content-center align-items-center py-5">
        <a href="{{ url('/') }}" class="d-flex justify-content-center align-items-center">
            <img src="{{ asset('img/icons/shisha_icon_brand.svg') }}" alt="application logo" width="40px">
            <!-- <i class="fa-brands fa-black-tie fa-2x"></i> -->
            <div class="d-inline lh-1 fs-5 ps-2" style="font-family:'poppins';">
                <span class="text-uppercase"> Shisha </span> 
                <span class="d-block fw-bold copyright"> Statistics </span>
            </div>
        </a>
    </div>
    <hr size="2px">
    <ul class="d-flex flex-column p-0 mb-auto">
        <li class="sidebar-item">
            <a href="#" class="sidebar-link d-block mb-4">
                <i class="fa-solid fa-gauge me-2"></i>
                Dashboard
            </a>
        </li>
        @foreach(App\Models\Shisha::all() as $shisha)
            <li class="sidebar-item">
                <a href="{{ route('shisha.show', $shisha->id) }}" class="sidebar-link d-flex align-items-center {{ request()->segment(2) != $shisha->id ?: 'active' }}" title="{{ $shisha->description }}">
                    <!-- <img src="{{ asset('img/icons/shisha_icon.svg') }}" alt="application logo" class="me-2" width="10px"> -->
                    <svg width="8" viewBox="0 0 11.487 34.141" class="d-inline me-2">
                        <g transform="translate(-45.413 -117.8)">
                            <path d="m49.499 117.8a0.66152 0.66152 0 0 0-0.662 0.64645l-0.033 1.5296a0.66152 0.66152 0 0 0 0.1716 0.46095l0.7188 0.7891v3.252a0.66146 0.66146 0 0 0 0.011 0.11316h-2.96a0.66146 0.66146 0 0 0-0.662 0.66199 0.66146 0.66146 0 0 0 0.662 0.66199h3.7909v13.395c-0.1068 0.18489-0.2384 0.39172-0.3891 0.61701l-1.7963-2.0603a0.66146 0.66146 0 0 0-0.4532-0.22479v5e-4a0.66146 0.66146 0 0 0-0.4785 0.15968 0.66146 0.66146 0 0 0-0.064 0.93379l2.0087 2.3053c-0.3015 0.41799-0.6216 0.85802-0.9601 1.3276-0.9179 1.2731-1.8732 2.6667-2.4573 4.0256-0.292 0.67945-0.4956 1.3544-0.5291 2.0231-0.033 0.66876 0.121 1.3486 0.5446 1.9064 0.8453 1.1132 2.5115 1.6158 5.2266 1.5994 2.5155 0.1138 4.1316-0.29453 5.0255-1.3064 0.8972-1.0156 0.807-2.4313 0.338-3.7832-0.6297-1.8152-1.9446-3.7707-3.1642-5.4524l2.404-2.7585a0.66146 0.66146 0 0 0-0.064-0.93379 0.66146 0.66146 0 0 0-0.9317 0.0646l-2.2112 2.5353c-0.2577-0.34841-0.5056-0.6844-0.7261-0.99013v-13.383h3.7068a0.66146 0.66146 0 0 0 0.662-0.66199 0.66146 0.66146 0 0 0-0.662-0.66199h-2.9368a0.66146 0.66146 0 0 0 0.01-0.0956v-3.2034l0.7229-0.88262a0.66152 0.66152 0 0 0 0.1504-0.43204l-0.031-1.5291a0.66152 0.66152 0 0 0-0.662-0.64854zm0.647 1.3224h2.0215l0.014 0.63873-0.7188 0.87694a0.66152 0.66152 0 0 0-0.1483 0.41807v3.4396a0.66146 0.66146 0 0 0 0.01 0.0956h-0.3162a0.66146 0.66146 0 0 0 0.011-0.11316v-3.5083a0.66152 0.66152 0 0 0-0.1715-0.44286l-0.7132-0.78547zm1.0604 21.535c1.4462 1.9844 3.3888 4.5606 4.0995 6.6094 0.3975 1.1458 0.3844 1.9511-0.078 2.4748-0.4626 0.52364-1.6422 0.97078-3.9961 0.86093a0.66152 0.66152 0 0 0-0.035 0c-2.5484 0.0174-3.747-0.51575-4.1755-1.08-0.2143-0.28215-0.2994-0.60232-0.2775-1.0408 0.022-0.43845 0.1693-0.97703 0.4217-1.5642 0.5048-1.1745 1.4124-2.5239 2.3146-3.7755 0.6776-0.93982 1.2196-1.7183 1.7265-2.4846z"
                            fill="{{ App\Classes\Utillity::getRandomColor() }}" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>
                    {{ $shisha->name }}
                </a>
            </li>
        @endforeach
    </ul>
    <hr>
    <ul class="p-0 m-0">
        <li class="sidebar-item pb-4">
            <a href="#" class="sidebar-link">
                <i class="fa-solid fa-circle-info me-2"></i>
                What is this
            </a>
        </li>
    </ul>
</nav>