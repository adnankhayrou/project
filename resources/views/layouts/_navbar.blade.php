@include('includes.alerts._alerts')
 <div class="site__body">
        <header class="site__header">
            <div class="border-bottom border-light header">
                <div class="header__megamenu-area megamenu-area"></div>
                <div class="header__topbar-start-bg"></div>
                <div class="header__topbar-start">
                    <div class="topbar topbar--spaceship-start">
                        <div class="topbar__item-text d-none d-xxl-flex">
                            Email: redpart@red.com
                        </div>
                        <div class="topbar__item-text">
                            <a class="topbar__link" href="about-us.html">About Us</a>
                        </div>
                        <div class="topbar__item-text">
                            <a class="topbar__link" href="contact-us-v1.html">Contacts</a>
                        </div>
                    </div>
                </div>
                <div class="header__topbar-end-bg"></div>
                <div class="header__topbar-end">
                    <div class="topbar topbar--spaceship-end">
                        
                        <div class="topbar__item-text d-none d-xxl-flex">
                            Call Us: (800) 060-0730
                        </div>
                        <div class="topbar__menu">
                            <button class="topbar__button topbar__button--has-arrow topbar__menu-button" type="button">
                                <span class="topbar__button-label">Language:</span>
                                <span class="topbar__button-title">EN</span>
                                <span class="topbar__button-arrow"><svg width="7px" height="5px">
                                        <path
                                            d="M0.280,0.282 C0.645,-0.084 1.238,-0.077 1.596,0.297 L3.504,2.310 L5.413,0.297 C5.770,-0.077 6.363,-0.084 6.728,0.282 C7.080,0.634 7.088,1.203 6.746,1.565 L3.504,5.007 L0.262,1.565 C-0.080,1.203 -0.072,0.634 0.280,0.282 Z" />
                                    </svg>
                                </span>
                            </button>
                            <div class="topbar__menu-body">
                                <a class="topbar__menu-item" href="#">
                                    <img src="{{ asset('images/languages/arab.svg') }}" alt="" />
                                    <span>Arabic</span>
                                </a>

                                <a class="topbar__menu-item" href="#">
                                    <img src="{{ asset('images/languages/language-1') }}.png" alt="" />
                                    <span>English</span> 
                                </a>

                                <a class="topbar__menu-item" href="#">
                                    <img src="{{ asset('images/languages/language-2') }}.png" alt="" />
                                    <span>French</span>
                                </a>
                                
                                {{-- <a class="topbar__menu-item" href="#">
                                    <img src="{{ asset('images/languages/language-3') }}.png" alt="" />
                                    <span>German</span>
                                </a> --}}
                                {{-- <a class="topbar__menu-item" href="#">
                                    <img src="{{ asset('images/languages/language-4') }}.png" alt="" />
                                    <span>Russian</span> 
                                </a> --}}
                                {{-- <a class="topbar__menu-item" href="#">
                                    <img src="{{ asset('images/languages/language-5') }}.png" alt="" />
                                    <span>Italian</span>
                                </a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header__navbar">
                    <div class="header__navbar-departments">
                        <div class="departments">
                            <button class="departments__button" type="button">
                                <span class="departments__button-icon"><svg width="16px" height="12px">
                                        <path
                                            d="M0,7L0,5L16,5L16,7L0,7ZM0,0L16,0L16,2L0,2L0,0ZM12,12L0,12L0,10L12,10L12,12Z" />
                                    </svg> </span><span class="departments__button-title">{{ __('layouts/navbar.menu') }}</span>
                                <span class="departments__button-arrow"><svg width="9px" height="6px">
                                        <path
                                            d="M0.2,0.4c0.4-0.4,1-0.5,1.4-0.1l2.9,3l2.9-3c0.4-0.4,1.1-0.4,1.4,0.1c0.3,0.4,0.3,0.9-0.1,1.3L4.5,6L0.3,1.6C-0.1,1.3-0.1,0.7,0.2,0.4z" />
                                    </svg>
                                </span>
                            </button>
                            <div class="departments__menu">
                                <div class="departments__arrow"></div>
                                <div class="departments__body">
                                    <ul class="departments__list">
                                        <li class="departments__list-padding" role="presentation"></li>
                                        <li
                                            class="departments__item departments__item--submenu--megamenu departments__item--has-submenu">
                                            <a href="#" class="departments__item-link">{{ __('layouts/navbar.headlights_lighting') }}
                                                <span class="departments__item-arrow"><svg width="7"
                                                        height="11">
                                                        <path
                                                            d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9 C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                                                    </svg></span></a>
                                            <div class="departments__item-menu">
                                                <div
                                                    class="megamenu departments__megamenu departments__megamenu--size--xl">
                                                    <div class="megamenu__image">
                                                        <img src="{{ asset('images/departments/departments-2.jpg') }}"
                                                            alt="" />
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-1of5">
                                                            <ul
                                                                class="megamenu__links megamenu-links megamenu-links--root">
                                                                <li
                                                                    class="megamenu-links__item megamenu-links__item--has-submenu">
                                                                    <a class="megamenu-links__item-link"
                                                                        href="#">{{ __('layouts/navbar.body_parts') }}</a>
                                                                    <ul class="megamenu-links">
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.bumpers') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.hoods') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.grilles') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.fog_lights') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.door_handles') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.car_covers') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.tailgates') }}</a></li>
                                                                    </ul>
                                                                </li>
                                                                    <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.suspension') }}</a></li>
                                                                    <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.steering') }}</a></li>
                                                                    <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.fuel_systems') }}</a></li>
                                                                    <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.transmission') }}</a></li>
                                                                    <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.air_filters') }}</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-1of5">
                                                            <ul class="megamenu__links megamenu-links megamenu-links--root">
                                                                <li class="megamenu-links__item megamenu-links__item--has-submenu">
                                                                    <a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.headlights_lighting') }}</a>
                                                                    <ul class="megamenu-links">
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.headlights') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.tail_lights') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.fog_lights') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.turn_signals') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.switches_relays') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.corner_lights') }}</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="megamenu-links__item megamenu-links__item--has-submenu">
                                                                    <a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.brakes_suspension') }}</a>
                                                                    <ul class="megamenu-links">
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.brake_discs') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.wheel_hubs') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.air_suspension') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.ball_joints') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.brake_pad_sets') }}</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-1of5">
                                                            <ul class="megamenu__links megamenu-links megamenu-links--root">
                                                                <li class="megamenu-links__item megamenu-links__item--has-submenu">
                                                                    <a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.interior_parts') }}</a>
                                                                    <ul class="megamenu-links">
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.floor_mats') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.gauges') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.consoles_organizers') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.car_electronics') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.steering_wheels') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.loading_accessories') }}</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="megamenu-links__item megamenu-links__item--has-submenu">
                                                                    <a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.engine_transmission') }}</a>
                                                                    <ul class="megamenu-links">
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.air_filters') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.oxygen_sensors') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.heating') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.exhaust') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.crankshafts_pistons') }}</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-1of5">
                                                            <ul class="megamenu__links megamenu-links megamenu-links--root">
                                                                <li class="megamenu-links__item megamenu-links__item--has-submenu">
                                                                    {{-- <a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.tools_garage') }}</a> --}}
                                                                    <ul class="megamenu-links">
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.repair_manuals') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.car_maintenance') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.code_readers') }}</a></li>
                                                                    <li class="megamenu-links__item">
                                                                        <a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.toolboxes') }}</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="departments__item departments__item--submenu--megamenu departments__item--has-submenu">
                                            <a href="#" class="departments__item-link">{{__('layouts/navbar.departments.interior_parts') }}
                                                <span class="departments__item-arrow"><svg width="7"
                                                        height="11">
                                                        <path
                                                            d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9 C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                                                    </svg></span></a>
                                            <div class="departments__item-menu">
                                                <div
                                                    class="megamenu departments__megamenu departments__megamenu--size--lg">
                                                    <div class="megamenu__image">
                                                        <img src="{{ asset('images/departments/departments-1.jpg') }}"
                                                            alt="" />
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <ul class="megamenu__links megamenu-links megamenu-links--root">
                                                                <li class="megamenu-links__item megamenu-links__item--has-submenu">
                                                                    <a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.body_parts') }}</a>
                                                                    <ul class="megamenu-links">
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.bumpers') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.hoods') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.grilles') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.fog_lights') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.door_handles') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.car_covers') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.tailgates') }}</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.suspension') }}</a></li>
                                                                <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.steering') }}</a></li>
                                                                <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.fuel_systems') }}</a></li>
                                                                <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.transmission') }}</a></li>
                                                                <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.air_filters') }}</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-3">
                                                            <ul class="megamenu__links megamenu-links megamenu-links--root">
                                                                <li class="megamenu-links__item megamenu-links__item--has-submenu">
                                                                    <a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.lights') }}</a>
                                                                    <ul class="megamenu-links">
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.headlights') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.taillights') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.fog_lights') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.turn_signals') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.switches_relays') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.corner_lights') }}</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="megamenu-links__item megamenu-links__item--has-submenu">
                                                                    <a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.brakes_suspension') }}</a>
                                                                    <ul class="megamenu-links">
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.brake_rotors') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.wheel_hubs') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.air_suspension') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.ball_joints') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.brake_pad_set') }}</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-3">
                                                            <ul class="megamenu__links megamenu-links megamenu-links--root">
                                                                <li class="megamenu-links__item megamenu-links__item--has-submenu">
                                                                    <a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.interior_parts') }}</a>
                                                                    <ul class="megamenu-links">
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.floor_mats') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.gauges') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.consoles_organizers') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.mobile_electronics') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.steering_wheels') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.cargo_accessories') }}</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-3">
                                                            <ul class="megamenu__links megamenu-links megamenu-links--root">
                                                                <li class="megamenu-links__item megamenu-links__item--has-submenu">
                                                                  
                                                                        {{-- <a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.tools_garage') }}</a> --}}
                                                                        <ul class="megamenu-links">
                                                                            <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.repair_manuals') }}</a></li>
                                                                            <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.car_maintenance') }}</a></li>
                                                                            <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.code_readers') }}</a></li>
                                                                            <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.tool_boxes') }}</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="departments__item departments__item--submenu--megamenu departments__item--has-submenu">
                                            <a href="#" class="departments__item-link">{{__('layouts/navbar.switches_relays') }}
                                                <span class="departments__item-arrow"><svg width="7"
                                                        height="11">
                                                        <path
                                                            d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
 C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                                                    </svg></span></a>
                                            <div class="departments__item-menu">
                                                <div
                                                    class="megamenu departments__megamenu departments__megamenu--size--md">
                                                    <div class="megamenu__image">
                                                        <img src="{{ asset('images/departments/departments-3.jpg') }}"
                                                            alt="" />
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <ul class="megamenu__links megamenu-links megamenu-links--root">
                                                                <li class="megamenu-links__item megamenu-links__item--has-submenu">
                                                                    <a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.body_parts') }}</a>
                                                                    <ul class="megamenu-links">
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.bumpers') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.hoods') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.grilles') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.fog_lights') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.door_handles') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.car_covers') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.tailgates') }}</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.suspension') }}</a></li>
                                                                <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.steering') }}</a></li>
                                                                <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.fuel_systems') }}</a></li>
                                                                <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.transmission') }}</a></li>
                                                                <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.air_filters') }}</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-4">
                                                            <ul class="megamenu__links megamenu-links megamenu-links--root">
                                                                <li class="megamenu-links__item megamenu-links__item--has-submenu">
                                                                    <a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.lights') }}</a>
                                                                    <ul class="megamenu-links">
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.headlights') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.taillights') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.fog_lights') }}</a></li>
                                                                        <li class="megmegamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.turn_signals') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.switches_relays') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.corner_lights') }}</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="megamenu-links__item megamenu-links__item--has-submenu">
                                                                    <a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.brakes_suspension') }}</a>
                                                                    <ul class="megamenu-links">
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.brake_discs') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.wheel_hubs') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.air_suspension') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.suspension_ball_joints') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.brake_pad_sets') }}</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-4">
                                                            <ul class="megamenu__links megamenu-links megamenu-links--root">
                                                                <li class="megamenu-links__item megamenu-links__item--has-submenu">
                                                                    <a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.interior_parts') }}</a>
                                                                    <ul class="megamenu-links">
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.floor_mats') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.gauges') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.consoles_organizers') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.in-car_electronics') }}</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="departments__item departments__item--submenu--megamenu departments__item--has-submenu">
                                            <a href="#" class="departments__item-link">{{ __('layouts/navbar.tires_wheels') }}
                                                <span class="departments__item-arrow"><svg width="7"
                                                        height="11">
                                                        <path
                                                            d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9 C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                                                    </svg></span></a>
                                            <div class="departments__item-menu">
                                                <div
                                                    class="megamenu departments__megamenu departments__megamenu--size--nl">
                                                    <div class="megamenu__image">
                                                        <img src="{{ asset('images/departments/departments-4.jpg') }}"
                                                            alt="" />
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <ul class="megamenu__links megamenu-links megamenu-links--root">
                                                                <li class="megamenu-links__item megamenu-links__item--has-submenu">
                                                                    <a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.body_parts') }}</a>
                                                                    <ul class="megamenu-links">
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.bumpers') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.hoods') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.grilles') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.fog_lights') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.door_handles') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.car_covers') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.tailgates') }}</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.suspension') }}</a></li>
                                                                <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.steering') }}</a></li>
                                                                <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.fuel_systems') }}</a></li>
                                                                <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.transmission') }}</a></li>
                                                                <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.air_filters') }}</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-6">
                                                            <ul class="megamenu__links megamenu-links megamenu-links--root">
                                                                <li class="megamenu-links__item megamenu-links__item--has-submenu">
                                                                    <a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.lights_lighting') }}</a>
                                                                    <ul class="megamenu-links">
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.headlights') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.taillights') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.fog_lights') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.turn_signals') }}</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="departments__item departments__item--submenu--megamenu departments__item--has-submenu">
                                            {{-- <a href="#" class="departments__item-link">{{ __('layouts/navbar.tools_garage') }}
                                                <span class="departments__item-arrow"><svg width="7"
                                                        height="11">
                                                        <path
                                                            d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9 C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                                                    </svg></span></a> --}}
                                            <div class="departments__item-menu">
                                                <div
                                                    class="megamenu departments__megamenu departments__megamenu--size--sm">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <ul class="megamenu__links megamenu-links megamenu-links--root">
                                                                <li class="megamenu-links__item megamenu-links__item--has-submenu">
                                                                    <a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.body_parts') }}</a>
                                                                    <ul class="megamenu-links">
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.bumpers') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.hoods') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.grilles') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.fog_lights') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.door_handles') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.car_covers') }}</a></li>
                                                                        <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.tailgates') }}</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.suspension') }}</a></li>
                                                                <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.steering') }}</a></li>
                                                                <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.fuel_systems') }}</a></li>
                                                                <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.transmission') }}</a></li>
                                                                <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="#">{{ __('layouts/navbar.air_filters') }}</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="departments__item"><a href="#" class="departments__item-link">{{ __('layouts/navbar.clutches') }}</a></li>
                                        <li class="departments__item"><a href="#" class="departments__item-link">{{ __('layouts/navbar.fuel_systems') }}</a></li>
                                        <li class="departments__item"><a href="#" class="departments__item-link">{{ __('layouts/navbar.steering') }}</a></li>
                                        <li class="departments__item"><a href="#" class="departments__item-link">{{ __('layouts/navbar.suspension') }}</a></li>
                                        <li class="departments__item"><a href="#" class="departments__item-link">{{ __('layouts/navbar.body_parts') }}</a></li>
                                        <li class="departments__item"><a href="#" class="departments__item-link">{{ __('layouts/navbar.transmission') }}</a></li>
                                        <li class="departments__item"><a href="#" class="departments__item-link">{{ __('layouts/navbar.air_filters') }}</a></li>
                                        <li class="departments__list-padding" role="presentation"></li>
                                    </ul>
                                    <div class="departments__menu-container"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header__navbar-menu">
                        <div class="main-menu">
                            <ul class="main-menu__list">
                                {{-- <li --}}
                                    {{-- class="main-menu__item main-menu__item--submenu--menu main-menu__item--has-submenu"> --}}
                                    <a href="/" class="main-menu__link">{{ __('layouts/navbar.home') }}
                                        {{-- <svg width="7px" height="5px">
                                            <path
                                                d="M0.280,0.282 C0.645,-0.084 1.238,-0.077 1.596,0.297 L3.504,2.310 L5.413,0.297 C5.770,-0.077 6.363,-0.084 6.728,0.282 C7.080,0.634 7.088,1.203 6.746,1.565 L3.504,5.007 L0.262,1.565 C-0.080,1.203 -0.072,0.634 0.280,0.282 Z" />
                                        </svg> --}}
                                    </a>
                                    {{-- <div class="main-menu__submenu">
                                        <ul class="menu">
                                            <li class="menu__item">
                                                <a href="/" class="menu__link">Home One</a>
                                            </li>
                                            <li class="menu__item">
                                                <a href="/" class="menu__link">Home Two</a>
                                            </li>
                                            <li class="menu__item menu__item--has-submenu">
                                                <a href="header-spaceship-variant-one.html" class="menu__link">Header
                                                    Spaceship
                                                    <span class="menu__arrow"><svg width="6px" height="9px">
                                                            <path
                                                                d="M0.3,7.4l3-2.9l-3-2.9c-0.4-0.3-0.4-0.9,0-1.3l0,0c0.4-0.3,0.9-0.4,1.3,0L6,4.5L1.6,8.7c-0.4,0.4-0.9,0.4-1.3,0l0,0C-0.1,8.4-0.1,7.8,0.3,7.4z" />
                                                        </svg></span></a>
                                                <div class="menu__submenu">
                                                    <ul class="menu">
                                                        <li class="menu__item">
                                                            <a href="header-spaceship-variant-one.html"
                                                                class="menu__link">Variant One</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <a href="header-spaceship-variant-two.html"
                                                                class="menu__link">Variant Two</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <a href="header-spaceship-variant-three.html"
                                                                class="menu__link">Variant Three</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu__item menu__item--has-submenu">
                                                <a href="header-classic-variant-one.html" class="menu__link">Header
                                                    Classic
                                                    <span class="menu__arrow"><svg width="6px" height="9px">
                                                            <path
                                                                d="M0.3,7.4l3-2.9l-3-2.9c-0.4-0.3-0.4-0.9,0-1.3l0,0c0.4-0.3,0.9-0.4,1.3,0L6,4.5L1.6,8.7c-0.4,0.4-0.9,0.4-1.3,0l0,0C-0.1,8.4-0.1,7.8,0.3,7.4z" />
                                                        </svg></span></a>
                                                <div class="menu__submenu">
                                                    <ul class="menu">
                                                        <li class="menu__item">
                                                            <a href="header-classic-variant-one.html"
                                                                class="menu__link">Variant One</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <a href="header-classic-variant-two.html"
                                                                class="menu__link">Variant Two</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <a href="header-classic-variant-three.html"
                                                                class="menu__link">Variant Three</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <a href="header-classic-variant-four.html"
                                                                class="menu__link">Variant Four</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <a href="header-classic-variant-five.html"
                                                                class="menu__link">Variant Five</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu__item menu__item--has-submenu">
                                                <a href="mobile-header-variant-one.html" class="menu__link">Mobile
                                                    Header
                                                    <span class="menu__arrow"><svg width="6px" height="9px">
                                                            <path
                                                                d="M0.3,7.4l3-2.9l-3-2.9c-0.4-0.3-0.4-0.9,0-1.3l0,0c0.4-0.3,0.9-0.4,1.3,0L6,4.5L1.6,8.7c-0.4,0.4-0.9,0.4-1.3,0l0,0C-0.1,8.4-0.1,7.8,0.3,7.4z" />
                                                        </svg></span></a>
                                                <div class="menu__submenu">
                                                    <ul class="menu">
                                                        <li class="menu__item">
                                                            <a href="mobile-header-variant-one.html"
                                                                class="menu__link">Variant One</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <a href="mobile-header-variant-two.html"
                                                                class="menu__link">Variant Two</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div> --}}
                                {{-- </li> --}}
                                {{-- <li
                                    class="main-menu__item main-menu__item--submenu--menu main-menu__item--has-submenu"> --}}
                                    <a href="shop-grid-4-columns-sidebar.html" class="main-menu__link">{{ __('layouts/navbar.shop') }}
                                        {{-- <svg width="7px" height="5px">
                                            <path
                                                d="M0.280,0.282 C0.645,-0.084 1.238,-0.077 1.596,0.297 L3.504,2.310 L5.413,0.297 C5.770,-0.077 6.363,-0.084 6.728,0.282 C7.080,0.634 7.088,1.203 6.746,1.565 L3.504,5.007 L0.262,1.565 C-0.080,1.203 -0.072,0.634 0.280,0.282 Z" />
                                        </svg> --}}
                                    </a>
                                    {{-- <div class="main-menu__submenu">
                                        <ul class="menu">
                                            <li class="menu__item menu__item--has-submenu">
                                                <a href="category-4-columns-sidebar.html" class="menu__link">Category
                                                    <span class="menu__arrow"><svg width="6px" height="9px">
                                                            <path
                                                                d="M0.3,7.4l3-2.9l-3-2.9c-0.4-0.3-0.4-0.9,0-1.3l0,0c0.4-0.3,0.9-0.4,1.3,0L6,4.5L1.6,8.7c-0.4,0.4-0.9,0.4-1.3,0l0,0C-0.1,8.4-0.1,7.8,0.3,7.4z" />
                                                        </svg></span></a>
                                                <div class="menu__submenu">
                                                    <ul class="menu">
                                                        <li class="menu__item">
                                                            <a href="category-3-columns-sidebar.html"
                                                                class="menu__link">3 Columns Sidebar</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <a href="category-4-columns-sidebar.html"
                                                                class="menu__link">4 Columns Sidebar</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <a href="category-5-columns-sidebar.html"
                                                                class="menu__link">5 Columns Sidebar</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <a href="category-4-columns-full.html"
                                                                class="menu__link">4 Columns Full</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <a href="category-5-columns-full.html"
                                                                class="menu__link">5 Columns Full</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <a href="category-6-columns-full.html"
                                                                class="menu__link">6 Columns Full</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <a href="category-7-columns-full.html"
                                                                class="menu__link">7 Columns Full</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <a href="category-right-sidebar.html"
                                                                class="menu__link">Right Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu__item menu__item--has-submenu">
                                                <a href="shop-grid-4-columns-sidebar.html" class="menu__link">Shop
                                                    Grid
                                                    <span class="menu__arrow"><svg width="6px" height="9px">
                                                            <path
                                                                d="M0.3,7.4l3-2.9l-3-2.9c-0.4-0.3-0.4-0.9,0-1.3l0,0c0.4-0.3,0.9-0.4,1.3,0L6,4.5L1.6,8.7c-0.4,0.4-0.9,0.4-1.3,0l0,0C-0.1,8.4-0.1,7.8,0.3,7.4z" />
                                                        </svg></span></a>
                                                <div class="menu__submenu">
                                                    <ul class="menu">
                                                        <li class="menu__item">
                                                            <a href="shop-grid-6-columns-full.html"
                                                                class="menu__link">6 Columns Full</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <a href="shop-grid-5-columns-full.html"
                                                                class="menu__link">5 Columns Full</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <a href="shop-grid-4-columns-full.html"
                                                                class="menu__link">4 Columns Full</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <a href="shop-grid-4-columns-sidebar.html"
                                                                class="menu__link">4 Columns Sidebar</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <a href="shop-grid-3-columns-sidebar.html"
                                                                class="menu__link">3 Columns Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu__item">
                                                <a href="shop-list.html" class="menu__link">Shop List</a>
                                            </li>
                                            <li class="menu__item">
                                                <a href="shop-table.html" class="menu__link">Shop Table</a>
                                            </li>
                                            <li class="menu__item">
                                                <a href="shop-right-sidebar.html" class="menu__link">Shop Right
                                                    Sidebar</a>
                                            </li>
                                            <li class="menu__item menu__item--has-submenu">
                                                <a href="product-full.html" class="menu__link">Product
                                                    <span class="menu__arrow"><svg width="6px" height="9px">
                                                            <path
                                                                d="M0.3,7.4l3-2.9l-3-2.9c-0.4-0.3-0.4-0.9,0-1.3l0,0c0.4-0.3,0.9-0.4,1.3,0L6,4.5L1.6,8.7c-0.4,0.4-0.9,0.4-1.3,0l0,0C-0.1,8.4-0.1,7.8,0.3,7.4z" />
                                                        </svg></span></a>
                                                <div class="menu__submenu">
                                                    <ul class="menu">
                                                        <li class="menu__item">
                                                            <a href="product-full.html" class="menu__link">Full
                                                                Width</a>
                                                        </li>
                                                        <li class="menu__item">
                                                            <a href="product-sidebar.html" class="menu__link">Left
                                                                Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu__item">
                                                <a href="cart.html" class="menu__link">Cart</a>
                                            </li>
                                            <li class="menu__item">
                                                <a href="checkout.html" class="menu__link">Checkout</a>
                                            </li>
                                            <li class="menu__item">
                                                <a href="order-success.html" class="menu__link">Order Success</a>
                                            </li>
                                            <li class="menu__item">
                                                <a href="{{route('wishlist')}}" class="menu__link">Wishlist</a>
                                            </li>
                                        </ul>
                                    </div> --}}
                                </li>
                               
                                <li
                                    class="main-menu__item main-menu__item--submenu--menu main-menu__item--has-submenu">
                                    <a href="account-login.html" class="main-menu__link">Account
                                        <svg width="7px" height="5px">
                                            <path
                                                d="M0.280,0.282 C0.645,-0.084 1.238,-0.077 1.596,0.297 L3.504,2.310 L5.413,0.297 C5.770,-0.077 6.363,-0.084 6.728,0.282 C7.080,0.634 7.088,1.203 6.746,1.565 L3.504,5.007 L0.262,1.565 C-0.080,1.203 -0.072,0.634 0.280,0.282 Z" />
                                        </svg></a>
                                    <div class="main-menu__submenu">
                                        <ul class="menu">
                                            <li class="menu__item"><a href="{{ route('account-login') }}" class="menu__link">{{ __('layouts/navbar.login') }}</a></li>
                                            <li class="menu__item"><a href="{{ route('account-register') }}" class="menu__link">{{ __('layouts/navbar.register') }}</a></li>
                                            <li class="menu__item"><a href="{{ route('account-dashboard') }}" class="menu__link">{{ __('layouts/navbar.dashboard') }}</a></li>
                                            {{-- <li class="menu__item"><a href="{{ route('account-garage') }}" class="menu__link">{{ __('layouts/navbar.garage') }}</a></li> --}}
                                            <li class="menu__item"><a href="{{ route('profile.edit') }}" class="menu__link">{{ __('layouts/navbar.edit_profile') }}</a></li>
                                            <li class="menu__item"><a href="{{ route('account-orders') }}" class="menu__link">{{ __('layouts/navbar.order_history') }}</a></li>
                                            <li class="menu__item"><a href="{{ route('account-order-details') }}" class="menu__link">{{ __('layouts/navbar.order_details') }}</a></li>
                                            <li class="menu__item"><a href="{{ route('account-addresses') }}" class="menu__link">{{ __('layouts/navbar.address_book') }}</a></li>
                                            <li class="menu__item"><a href="{{ route('account-edit-address') }}" class="menu__link">{{ __('layouts/navbar.edit_address') }}</a></li>
                                            <li class="menu__item"><a href="{{ route('account-password') }}" class="menu__link">{{ __('layouts/navbar.change_password') }}</a></li>
                                        </ul>
                                    </div>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="header__logo">
                    <a href="/" class="logo">
                        <div class="logo__slogan">
                            {{__('layouts/navbar.logo.slogan')}}
                        </div>
                        <div class="logo__image">
                            <!-- logo -->
                            <svg width="20" height="20">
                                <img class="m-5" src="{{ asset('/images/otomoto.svg') }}" alt="logo"/>
                            </svg>
                            <!-- logo / end -->
                        </div>
                    </a>
                </div>
                <div class="header__search">
                    <div class="search">
                        <form action="{{ route('piece.search') }}" method="GET" class="search__body">
                            <div class="search__shadow"></div>
                            <input class="search__input" type="text" name="search" placeholder="Enter Keyword or Part Number" required/>
                            <b class="search__button search__button--start">
                                <span class="search__button-icon"><svg width="20" height="20">
                                        <path
                                            d="M6.6,2c2,0,4.8,0,6.8,0c1,0,2.9,0.8,3.6,2.2C17.7,5.7,17.9,7,18.4,7C20,7,20,8,20,8v1h-1v7.5c0,0.8-0.7,1.5-1.5,1.5h-1 c-0.8,0-1.5-0.7-1.5-1.5V16H5v0.5C5,17.3,4.3,18,3.5,18h-1C1.7,18,1,17.3,1,16.5V16V9H0V8c0,0,0.1-1,1.6-1C2.1,7,2.3,5.7,3,4.2 C3.7,2.8,5.6,2,6.6,2z M13.3,4H6.7c-0.8,0-1.4,0-2,0.7c-0.5,0.6-0.8,1.5-1,2C3.6,7.1,3.5,7.9,3.7,8C4.5,8.4,6.1,9,10,9 c4,0,5.4-0.6,6.3-1c0.2-0.1,0.2-0.8,0-1.2c-0.2-0.4-0.5-1.5-1-2C14.7,4,14.1,4,13.3,4z M4,10c-0.4-0.3-1.5-0.5-2,0 c-0.4,0.4-0.4,1.6,0,2c0.5,0.5,4,0.4,4,0C6,11.2,4.5,10.3,4,10z M14,12c0,0.4,3.5,0.5,4,0c0.4-0.4,0.4-1.6,0-2c-0.5-0.5-1.3-0.3-2,0 C15.5,10.2,14,11.3,14,12z" />
                                    </svg> </span><span class="search__button-title">{{ __('layouts/navbar.select_vehicle') }}</span>
                            </b>
                            <button class="search__button search__button--end" type="submit">
                                <span class="search__button-icon"><svg width="20" height="20">
                                        <path
                                            d="M19.2,17.8c0,0-0.2,0.5-0.5,0.8c-0.4,0.4-0.9,0.6-0.9,0.6s-0.9,0.7-2.8-1.6c-1.1-1.4-2.2-2.8-3.1-3.9C10.9,14.5,9.5,15,8,15 c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7c0,1.5-0.5,2.9-1.3,4c1.1,0.8,2.5,2,4,3.1C20,16.8,19.2,17.8,19.2,17.8z M8,3C5.2,3,3,5.2,3,8 c0,2.8,2.2,5,5,5c2.8,0,5-2.2,5-5C13,5.2,10.8,3,8,3z" />
                                    </svg></span>
                            </button>
                            <div class="search__box"></div>
                            <div class="search__decor">
                                <div class="search__decor-start"></div>
                                <div class="search__decor-end"></div>
                            </div>
                            
                        </form>
                    </div>
                </div>
                <div class="header__indicators">
                    <div class="indicator">
                        @auth
                        <a href="{{ route('wishlist') }}" class="indicator__button"><span class="indicator__icon"><svg
                                    width="32" height="32">
                                    <path
                                        d="M23,4c3.9,0,7,3.1,7,7c0,6.3-11.4,15.9-14,16.9C13.4,26.9,2,17.3,2,11c0-3.9,3.1-7,7-7c2.1,0,4.1,1,5.4,2.6l1.6,2l1.6-2 C18.9,5,20.9,4,23,4 M23,2c-2.8,0-5.4,1.3-7,3.4C14.4,3.3,11.8,2,9,2c-5,0-9,4-9,9c0,8,14,19,16,19s16-11,16-19C32,6,28,2,23,2L23,2 z" />
                                </svg></span>
                            </a>
                        @else
                        <a href="#modal-alert" data-bs-toggle="modal" class="indicator__button"><span class="indicator__icon"><svg
                                    width="32" height="32">
                                    <path
                                        d="M23,4c3.9,0,7,3.1,7,7c0,6.3-11.4,15.9-14,16.9C13.4,26.9,2,17.3,2,11c0-3.9,3.1-7,7-7c2.1,0,4.1,1,5.4,2.6l1.6,2l1.6-2 C18.9,5,20.9,4,23,4 M23,2c-2.8,0-5.4,1.3-7,3.4C14.4,3.3,11.8,2,9,2c-5,0-9,4-9,9c0,8,14,19,16,19s16-11,16-19C32,6,28,2,23,2L23,2 z" />
                                </svg></span>
                            </a>
                        @endauth
                    </div>
                    <div class="indicator indicator--trigger--click">
                        @auth
                        <a href="account-login.html" class="indicator__button"><span class="indicator__icon"><svg
                            width="32" height="32">
                            <path
                                d="M16,18C9.4,18,4,23.4,4,30H2c0-6.2,4-11.5,9.6-13.3C9.4,15.3,8,12.8,8,10c0-4.4,3.6-8,8-8s8,3.6,8,8c0,2.8-1.5,5.3-3.6,6.7 C26,18.5,30,23.8,30,30h-2C28,23.4,22.6,18,16,18z M22,10c0-3.3-2.7-6-6-6s-6,2.7-6,6s2.7,6,6,6S22,13.3,22,10z" />
                        </svg> </span><span class="indicator__title">{{ __('layouts/navbar.login_indicator.title') }}, {{auth()->user()->first_name}}</span>
                        <span class="indicator__value">{{ __('layouts/navbar.login_indicator.my_account') }}</span></a>

                        @else

                        <a href="account-login.html" class="indicator__button"><span class="indicator__icon"><svg
                            width="32" height="32">
                            <path
                                d="M16,18C9.4,18,4,23.4,4,30H2c0-6.2,4-11.5,9.6-13.3C9.4,15.3,8,12.8,8,10c0-4.4,3.6-8,8-8s8,3.6,8,8c0,2.8-1.5,5.3-3.6,6.7 C26,18.5,30,23.8,30,30h-2C28,23.4,22.6,18,16,18z M22,10c0-3.3-2.7-6-6-6s-6,2.7-6,6s2.7,6,6,6S22,13.3,22,10z" />
                        </svg> </span><span class="indicator__title">{{ __('layouts/navbar.login_indicator.title') }}, Log In</span>
                        <span class="indicator__value">{{ __('layouts/navbar.login_indicator.to_your_account') }}</span></a>
                        @endauth
                  <div class="indicator__content">
                    <div class="account-menu">
                        @auth
                            <a href="{{route('account-dashboard')}}" class="account-menu__user">
                                {{-- <div class="account-menu__user-avatar">
                                    <img src="images/avatars/avatar-4.jpg" alt="" />
                                </div> --}}
                                <div class="account-menu__user-info">
                                    <div class="account-menu__user-name"> <span><i class="bi bi-person-fill fs-4"></i> </span>{{auth()->user()->first_name}}{{auth()->user()->last_name}}</div>
                                    <div class="account-menu__user-email">
                                        {{auth()->user()->email}}
                                    </div>
                                </div>
                            </a>
                            <div class="account-menu__divider"></div>
                            <ul class="account-menu__links">
                                <li><a href="{{ route('account-dashboard')}}">{{ __('layouts/navbar.account_menu.dashboard') }}</a></li>
                                {{-- <li><a href="{{ route('account-dashboard')}}">{{ __('layouts/navbar.account_menu.garage') }}</a></li> --}}
                                <li><a href="{{ route('profile.edit')}}">{{ __('layouts/navbar.account_menu.edit_profile') }}</a></li>
                                <li><a href="{{ route('account-orders')}}">{{ __('layouts/navbar.account_menu.order_history') }}</a></li>
                                <li><a href="{{ route('account-addresses')}}">{{ __('layouts/navbar.account_menu.addresses') }}</a></li>
                            </ul>
                            <div class="account-menu__divider"></div>
                            <ul class="account-menu__links">
                                <li> 
                                    <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a href="#"
                                            onclick="event.preventDefault(); this.closest('form').submit();">
                                            {{ __('logout') }}
                                        </a>
                                    </form>
                                </li>
                            </ul>
                            @else
                                
                            <form class="account-menu__form" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="account-menu__form-title ps-0">
                                    {{ __('layouts/navbar.login_form.log_in_to_account') }}
                                </div>
                                <div class="form-group mb-2">
                                    <label for="header-signin-email" class="sr-only">{{ __('layouts/navbar.login_form.email_address') }}</label>
                                    <input id="header-signin-email" type="email" name="email" :value="old('email')"
                                        class="form-control form-control-sm" placeholder="Email address" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                                <div class="form-group">
                                    <label for="header-signin-password" class="sr-only">{{ __('layouts/navbar.login_form.password') }}</label>
                                    <div class="account-menu__form-forgot">
                                        <input id="header-signin-password" type="password" name="password"
                                            class="form-control form-control-sm" placeholder="Password" />
                                        {{-- <a href="#" class="account-menu__form-forgot-link">{{ __('layouts/navbar.login_form.forgot_password') }}</a> --}}
                                        @if (Route::has('password.request'))
                                        <small>
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>

                                        </small>
                                                @endif
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="form-group account-menu__form-button">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        {{ __('layouts/navbar.login_form.login') }}
                                    </button>
                                </div>
                                <div class="account-menu__form-link mt-1">
                                    <a href="{{ route('account-register')}}">{{ __('layouts/navbar.login_form.create_account') }}</a>
                                </div>
                            </form>

                            <div class="account-menu__divider"></div>
                            @endauth
                            </div>
                        </div>
                    </div>
                    <div class="indicator indicator--trigger--click">
                        <div class="d-flex items-center" >
                            <div>
                                <a href="cart.html" class="indicator__button">
                                    <span class="indicator__icon">
                                        <svg width="32" height="32">
                                            <circle cx="10.5" cy="27.5" r="2.5" />
                                            <circle cx="23.5" cy="27.5" r="2.5" />
                                            <path d="M26.4,21H11.2C10,21,9,20.2,8.8,19.1L5.4,4.8C5.3,4.3,4.9,4,4.4,4H1C0.4,4,0,3.6,0,3s0.4-1,1-1h3.4C5.8,2,7,3,7.3,4.3 l3.4,14.3c0.1,0.2,0.3,0.4,0.5,0.4h15.2c0.2,0,0.4-0.1,0.5-0.4l3.1-10c0.1-0.2,0-0.4-0.1-0.4C29.8,8.1,29.7,8,29.5,8H14 c-0.6,0-1-0.4-1-1s0.4-1,1-1h15.5c0.8,0,1.5,0.4,2,1c0.5,0.6,0.6,1.5,0.4,2.2l-3.1,10C28.5,20.3,27.5,21,26.4,21z" />
                                        </svg>@auth
                                        <span class="indicator__counter">1</span>
                                        @endauth
                                     </span>
                                        <span class="indicator__title">Shopping Cart</span>
                                        @auth
                                    <span class="indicator__value">$250.00</span>
                                    @endauth
                                </a>
                            </div>

                            
                            <div>
                                @auth
                                    <a class="" href="{{ route('piece.addPiece')}}"><button class="btn btn-danger mt-2" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                      </svg></button></a>
                                @else
                                    <a class="" href="#modal-alert" data-bs-toggle="modal"><button class="btn btn-warning mt-2" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                    </svg></button></a>
                                @endauth
                            </div>
                        </div>
                        <div class="indicator__content">
                            <div class="dropcart">
                                <ul class="dropcart__list">
                                    <li class="dropcart__item">
                                        <div class="dropcart__item-image image image--type--product">
                                            <a class="image__body" href="product-full.html"><img
                                                    class="image__tag" src="{{asset('images/products/product-4-70x70.jpg')}}"
                                                    alt="" /></a>
                                        </div>
                                        <div class="dropcart__item-info">
                                            <div class="dropcart__item-name">
                                                <a href="product-full.html">Glossy Gray 19" Aluminium Wheel AR-19</a>
                                            </div>
                                            <ul class="dropcart__item-features">
                                                <li>Color: Yellow</li>
                                                <li>Material: Aluminium</li>
                                            </ul>
                                            <div class="dropcart__item-meta">
                                                <div class="dropcart__item-quantity">2</div>
                                                <div class="dropcart__item-price">$699.00</div>
                                            </div>
                                        </div>
                                        <button type="button" class="dropcart__item-remove">
                                            <svg width="10" height="10">
                                                <path
                                                    d="M8.8,8.8L8.8,8.8c-0.4,0.4-1,0.4-1.4,0L5,6.4L2.6,8.8c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L3.6,5L1.2,2.6 c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L5,3.6l2.4-2.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L6.4,5l2.4,2.4 C9.2,7.8,9.2,8.4,8.8,8.8z" />
                                            </svg>
                                        </button>
                                    </li>
                                    <li class="dropcart__divider" role="presentation"></li>
                                    <li class="dropcart__item">
                                        <div class="dropcart__item-image image image--type--product">
                                            <a class="image__body" href="{{ route('produit') }}"><img
                                                    class="image__tag" src="{{asset('images/products/product-2-70x70.jpg')}}"
                                                    alt="" /></a>
                                        </div>
                                        <div class="dropcart__item-info">
                                            <div class="dropcart__item-name">
                                                <a href="{{ route('produit') }}">{{ __('layouts/navbar.dropcart.item_name') }}</a>
                                            </div>
                                            <div class="dropcart__item-meta">
                                                <div class="dropcart__item-quantity">1</div>
                                                <div class="dropcart__item-price">$849.00</div>
                                            </div>
                                        </div>
                                        <button type="button" class="dropcart__item-remove">
                                            <svg width="10" height="10">
                                                <path
                                                    d="M8.8,8.8L8.8,8.8c-0.4,0.4-1,0.4-1.4,0L5,6.4L2.6,8.8c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L3.6,5L1.2,2.6 c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L5,3.6l2.4-2.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L6.4,5l2.4,2.4 C9.2,7.8,9.2,8.4,8.8,8.8z" />
                                            </svg>
                                        </button>
                                    </li>
                                    <li class="dropcart__divider" role="presentation"></li>
                                    <li class="dropcart__item">
                                        <div class="dropcart__item-image image image--type--product">
                                            <a class="image__body" href="{{route('produit')}}"><img
                                                    class="image__tag" src="{{asset('images/products/product-5-70x70.jpg')}}"
                                                    alt="" /></a>
                                        </div>
                                        <div class="dropcart__item-info">
                                            <div class="dropcart__item-name">
                                                <a href="{{route('produit')}}">{{__('layouts/navbar.twin_exhaust_pipe')}}</a>
                                            </div>
                                            <ul class="dropcart__item-features">
                                                <li>{{__('layouts/navbar.color')}}: {{__('layouts/navbar.true_red')}}</li>
                                            </ul>
                                            <div class="dropcart__item-meta">
                                                <div class="dropcart__item-quantity">{{__('layouts/navbar.quantity')}}3</div>
                                                <div class="dropcart__item-price">$1210.00</div>
                                            </div>
                                        </div>
                                        <button type="button" class="dropcart__item-remove">
                                            <svg width="10" height="10">
                                                <path
                                                    d="M8.8,8.8L8.8,8.8c-0.4,0.4-1,0.4-1.4,0L5,6.4L2.6,8.8c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L3.6,5L1.2,2.6 c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L5,3.6l2.4-2.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L6.4,5l2.4,2.4 C9.2,7.8,9.2,8.4,8.8,8.8z" />
                                            </svg>
                                        </button>
                                    </li>
                                    <li class="dropcart__divider" role="presentation"></li>
                                </ul>
                                <div class="dropcart__totals">
                                    <table>
                                        <tr>
                                            <th>{{__('layouts/navbar.subtotal')}}</th>
                                            <td>$5877.00</td>
                                        </tr>
                                        <tr>
                                            <th>{{__('layouts/navbar.shipping') }}</th>
                                            <td>$25.00</td>
                                        </tr>
                                        <tr>
                                            <th>{{__('layouts/navbar.tax') }}</th>
                                            <td>$0.00</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('layouts/navbar.total') }}</th>
                                            <td>$5902.00</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="dropcart__actions">
                                    <a href="{{ route('cart') }}" class="btn btn-secondary">View Cart</a>
                                    <a href="{{ route('checkout') }}" class="btn btn-primary">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    {{-- </header> --}}
 </div>

  <!-- alert login form -->
  <div  class="modal fade ms-5 mt-5" id="modal-alert">
    <div class="modal-dialog mt-5">
        <div class="modal-content text-center w-75">
            <form action="{{ route('login') }}">
            
                <div class="modal-body">
        
                    <div class="mb-2">
                        <i class="bi bi-exclamation-circle text-warning" style="font-size: 3.5em;"></i>
                    </div>
                    <div class="mb-3">
                        <p class="mb-3"><b>Login First</b></p>
                        <button type="submit" class="btn btn-dark bg-dark">Login</button>
                    </div>
            
                </div>
            </form>
        </div>
    </div>
</div>
{{-- end form --}}
