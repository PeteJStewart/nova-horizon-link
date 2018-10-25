<a href="{{ route('horizon.index') }}" class="cursor-pointer flex items-center font-normal dim text-white mb-6 text-base no-underline">
    @if ($label !== null)
        <svg class="sidebar-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill="var(--sidebar-icon)" d="M3.5,17.6C1.3,15.7,0,12.9,0,10c0-2.8,1.1-5.3,2.9-7.1C6.8-1,13.2-1,17.1,2.9s3.9,10.2,0,14.1 C13.4,20.8,7.5,21,3.5,17.6L3.5,17.6z M2.7,10.6c1.1-1,1.9-2.3,4-2.3c3.3,0,3.3,3.3,6.7,3.3c2.1,0,2.9-1.3,4-2.3 c-0.3-4-3.9-7-7.9-6.7S2.4,6.6,2.7,10.6L2.7,10.6z"/></svg>
        <span class="sidebar-label">
            {{ $label }}
        </span>
    @else
        <svg width="150" viewBox="0 0 226 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="horizon-label" fill="var(--white)">
                    <path d="M54.132,25 L53.488,20.856 L47.552,20.856 L47.552,5.68 L42.764,5.68 L42.764,25 L54.132,25 Z M67.432,25 L63.68,25 L63.4,23.292 C62.28,24.468 60.964,25.28 59.088,25.28 C56.904,25.28 55.364,23.964 55.364,21.472 C55.364,18.252 57.828,16.74 63.204,16.264 L63.204,16.012 C63.204,14.808 62.532,14.276 61.132,14.276 C59.592,14.276 58.164,14.668 56.708,15.312 L56.204,12.12 C57.772,11.476 59.536,11.056 61.776,11.056 C65.556,11.056 67.432,12.316 67.432,15.816 L67.432,25 Z M63.204,21.22 L63.204,18.308 C60.32,18.756 59.536,19.708 59.536,20.912 C59.536,21.78 60.068,22.256 60.852,22.256 C61.664,22.256 62.448,21.892 63.204,21.22 Z M79.08,15.312 L78.38,11 C76.364,11.14 75.216,12.428 74.376,13.996 L73.928,11.28 L70.232,11.28 L70.232,25 L74.46,25 L74.46,17.384 C75.496,16.264 77.036,15.452 79.08,15.312 Z M92.184,25 L88.432,25 L88.152,23.292 C87.032,24.468 85.716,25.28 83.84,25.28 C81.656,25.28 80.116,23.964 80.116,21.472 C80.116,18.252 82.58,16.74 87.956,16.264 L87.956,16.012 C87.956,14.808 87.284,14.276 85.884,14.276 C84.344,14.276 82.916,14.668 81.46,15.312 L80.956,12.12 C82.524,11.476 84.288,11.056 86.528,11.056 C90.308,11.056 92.184,12.316 92.184,15.816 L92.184,25 Z M87.956,21.22 L87.956,18.308 C85.072,18.756 84.288,19.708 84.288,20.912 C84.288,21.78 84.82,22.256 85.604,22.256 C86.416,22.256 87.2,21.892 87.956,21.22 Z M107.5,11.28 L103.384,11.28 L100.892,19.764 L98.344,11.084 L93.808,11.616 L98.484,25.056 L102.712,25.056 L107.5,11.28 Z M121.052,18.112 C121.052,18.532 121.024,18.98 120.968,19.204 L112.736,19.204 C112.96,21.36 114.248,22.2 116.096,22.2 C117.608,22.2 119.092,21.64 120.604,20.772 L121.024,23.74 C119.54,24.692 117.72,25.28 115.564,25.28 C111.448,25.28 108.508,23.096 108.508,18.196 C108.508,13.716 111.252,11 114.976,11 C119.176,11 121.052,14.136 121.052,18.112 Z M117.02,16.88 C116.88,14.808 116.152,13.744 114.864,13.744 C113.688,13.744 112.848,14.78 112.708,16.88 L117.02,16.88 Z M127.66,25 L127.66,4.784 L123.404,5.456 L123.404,25 L127.66,25 Z M152.692,25 L152.692,5.68 L150.76,5.68 L150.76,14.024 L140.036,14.024 L140.036,5.68 L138.104,5.68 L138.104,25 L140.036,25 L140.036,15.76 L150.76,15.76 L150.76,25 L152.692,25 Z M168.568,18.392 C168.568,22.76 165.936,25.28 162.548,25.28 C159.16,25.28 156.612,22.76 156.612,18.392 C156.612,13.996 159.216,11.476 162.548,11.476 C165.992,11.476 168.568,13.996 168.568,18.392 Z M166.664,18.392 C166.664,15.34 165.208,13.044 162.548,13.044 C159.916,13.044 158.488,15.256 158.488,18.392 C158.488,21.444 159.944,23.712 162.548,23.712 C165.236,23.712 166.664,21.528 166.664,18.392 Z M178.872,13.212 L178.564,11.476 C176.38,11.532 174.84,12.988 173.86,14.472 L173.44,11.756 L172.068,11.756 L172.068,25 L173.916,25 L173.916,16.684 C174.812,14.92 176.688,13.352 178.872,13.212 Z M184.136,7.248 C184.136,6.52 183.548,5.904 182.82,5.904 C182.092,5.904 181.476,6.52 181.476,7.248 C181.476,7.976 182.092,8.592 182.82,8.592 C183.548,8.592 184.136,7.976 184.136,7.248 Z M183.716,25 L183.716,11.756 L181.896,11.756 L181.896,25 L183.716,25 Z M197.464,25 L197.212,23.46 L189.344,23.46 L197.24,13.184 L197.24,11.756 L187.636,11.756 L187.888,13.296 L195.112,13.296 L187.216,23.572 L187.216,25 L197.464,25 Z M211.94,18.392 C211.94,22.76 209.308,25.28 205.92,25.28 C202.532,25.28 199.984,22.76 199.984,18.392 C199.984,13.996 202.588,11.476 205.92,11.476 C209.364,11.476 211.94,13.996 211.94,18.392 Z M210.036,18.392 C210.036,15.34 208.58,13.044 205.92,13.044 C203.288,13.044 201.86,15.256 201.86,18.392 C201.86,21.444 203.316,23.712 205.92,23.712 C208.608,23.712 210.036,21.528 210.036,18.392 Z M225.884,25 L225.884,15.536 C225.884,12.988 224.568,11.476 221.936,11.476 C220.144,11.476 218.632,12.428 217.176,13.716 L216.868,11.756 L215.44,11.756 L215.44,25 L217.288,25 L217.288,15.424 C218.744,13.996 220.172,13.128 221.572,13.128 C223.252,13.128 224.036,14.164 224.036,15.872 L224.036,25 L225.884,25 Z" id="Laravel-Horizon"></path>
                </g>
                <g id="horizon" fill="var(--sidebar-icon)">
                    <path d="M5.26176342,26.4094389 C2.04147988,23.6582233 0,19.5675182 0,15 C0,10.8578644 1.67893219,7.10786438 4.39339828,4.39339828 C7.10786438,1.67893219 10.8578644,0 15,0 C23.2842712,3.55271368e-15 30,6.71572875 30,15 C30,23.2842712 23.2842712,30 15,30 C11.283247,30 7.88222338,28.6482016 5.26176342,26.4094389 L5.26176342,26.4094389 Z M4.03811305,15.9222506 C5.70084247,14.4569342 6.87195416,12.5 10,12.5 C15,12.5 15,17.5 20,17.5 C23.1280454,17.5 24.2991572,15.5430664 25.961887,14.0777498 C25.4934253,8.43417206 20.7645408,4 15,4 C8.92486775,4 4,8.92486775 4,15 C4,15.3105915 4.01287248,15.6181765 4.03811305,15.9222506 L4.03811305,15.9222506 Z" id="Combined-Shape" fill-rule="nonzero"></path>
                </g>
            </g>
        </svg>
    @endif
</a>
