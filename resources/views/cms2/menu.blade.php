<div>
    <ul class="flex flex-col space-y-1">
{{--        первая--}}
        <li class="w-full">
            <a href="{{ route('cms2.index') }}"
               wire:navigate
               class="flex items-center space-x-2 px-4 py-2 text-gray-700 rounded
                hover:bg-orange-200
                {{ Request::routeIs('cms2.index') ? 'bg-orange-300' : '' }}"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10 11a4 4 0 100-8 4 4 0 000 8zm-7 8a7 7 0 1114 0H3z"/>
                </svg>
                <span>Старт!</span>
            </a>
        </li>

        <!-- Сотрудники -->
        <li class="w-full">
            <a href="{{ route('staff.index') }}"
               wire:navigate
               class="flex items-center space-x-2 px-4 py-2 text-gray-700 rounded
                hover:bg-orange-200
                {{ Request::is('staff*') ? 'bg-orange-300' : '' }}"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10 11a4 4 0 100-8 4 4 0 000 8zm-7 8a7 7 0 1114 0H3z"/>
                </svg>
                <span>Сотрудники</span>
            </a>
        </li>

        <!-- Клиенты -->
        <li class="w-full">
            <a href="{{ route('clients') }}"
               wire:navigate
               class="flex items-center space-x-2 px-4 py-2 text-gray-700 rounded
                hover:bg-orange-200
                {{ Request::is('clients*') ? 'bg-orange-300' : '' }}
                "
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M13 7a4 4 0 11-8 0 4 4 0 018 0zm-3 8a7 7 0 00-5.4 2.6A8 8 0 1016 9a7 7 0 00-6 6z"/>
                </svg>
                <span>Клиенты</span>
            </a>
        </li>

        <!-- Договора -->
        <li class="w-full">
            <a href="{{ route('dogovor.index') }}"
               wire:navigate
               class="flex items-center space-x-2 px-4 py-2 text-gray-700 rounded
                hover:bg-orange-200
                {{ Request::is('dogovor*') ? 'bg-orange-300' : '' }}
                "
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 2h8v8H6V6z"/>
                </svg>
                <span>Договора</span>
            </a>


            <ul class="ml-[20px] nav nav-treeview w-100">

                <li class="nav-item w-100 ">
                    <a href="{{ route('dogovor.template') }}"
                       wire:navigate
                       {{--                       class="nav-link {{ request()->routeIs('buh.zakazs') ? 'active' : '' }}"--}}
                       class="flex items-center
                        m-1 px-4 py-1 text-gray-700 rounded
                hover:bg-orange-200
                {{ Request::routeIs('dogovor.template') ? 'bg-orange-300' : '' }}
                "
                    >
                        {{--                    <i class="nav-icon bi bi-circle"></i>--}}
                        Шаблоны
                    </a>
                </li>
            </ul>
        </li>

        <!-- Бухгалтерия -->
        <li class="w-full">
            <a href="{{ route('buh.zakazs') }}"
               class="flex items-center space-x-2 px-4 py-2 text-gray-700 rounded
                hover:bg-orange-200
                {{ Request::is('buh*') ? 'bg-orange-300' : '' }}
                ">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path
                        d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm4 6h6a1 1 0 110 2H9a1 1 0 110-2z"/>
                </svg>
                <span>Бухгалтерия</span>
            </a>


            <ul class="ml-[20px] nav nav-treeview w-100">

                <li class="nav-item w-100 ">
                    <a href="{{ route('buh.zakazs') }}"
                       wire:navigate
                       {{--                       class="nav-link {{ request()->routeIs('buh.zakazs') ? 'active' : '' }}"--}}
                       class="flex items-center
                        m-1 px-4 py-1 text-gray-700 rounded
                hover:bg-orange-200
                {{ Request::routeIs('buh.zakazs') ? 'bg-orange-300' : '' }}
                "
                    >
                        {{--                    <i class="nav-icon bi bi-circle"></i>--}}
                        Заказы
                    </a>
                </li>

                <li class="nav-item w-100">
                    <a href="{{ route('buh.uslugi') }}"
                        wire:navigate
                        class="flex items-center m-1 px-4 py-1 text-gray-700 rounded
                            hover:bg-orange-200
                            {{ Request::routeIs('buh.uslugi') ? 'bg-orange-300' : '' }}
                        "

                    >
                        {{--                    <i class="nav-icon bi bi-circle"></i>--}}
                        Услуги
                    </a>
                </li>

                <li class="nav-item w-100">
                    <a href="{{ route('buh.sheta') }}"
                       wire:navigate
                       {{--                       class="nav-link {{ request()->routeIs('buh.sheta') ? 'active' : '' }}"--}}
                       class="flex items-center
                        m-1 px-4 py-1 text-gray-700 rounded
                        hover:bg-orange-200
                        {{ Request::routeIs('buh.sheta') ? 'bg-orange-300' : '' }}
                        "

                    >
                        {{--                    <i class="nav-icon bi bi-circle"></i>--}}
                        Счета
                    </a>
                </li>

            </ul>


        </li>

{{--        user list--}}
        <li class="w-full">
            <a href="{{ route('user_list') }}"
               wire:navigate
               class="flex items-center space-x-2 px-4 py-2 text-gray-700 rounded
                hover:bg-orange-200
                {{ Request::routeIs('user_list') ? 'bg-orange-300' : '' }}"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10 11a4 4 0 100-8 4 4 0 000 8zm-7 8a7 7 0 1114 0H3z"/>
                </svg>
                <span>Пользователи</span>
            </a>
        </li>









        <!-- CRM -->
        <li class="w-full">
            <a href="https://crm.marudi.store"
               class="flex items-center space-x-2 px-4 py-2 text-gray-700 rounded
                        hover:bg-orange-200
               "
            target="_blank"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path
                        d="M8.257 3.099c.765-1.36 2.72-1.36 3.485 0l4.546 8.09c.717 1.277-.17 2.81-1.742 2.81H5.453c-1.573 0-2.46-1.533-1.742-2.81l4.546-8.09zM11 13a1 1 0 11-2 0 1 1 0 012 0z"/>
                </svg>
                <span>Перейти на crm.marudi.store</span>
            </a>
        </li>
    </ul>

    {{--<div>--}}
    @if(1==2)
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


            <li class="nav-item w-100">
                <a href="{{ route('staff.index') }}"
                   wire:navigate
                   class="nav-link {{ Request::is('staff*') ? 'active' : '' }}">
                    <i class="nav-icon bi bi-people"></i>
                    Сотрудники
                </a>
            </li>


            <li class="nav-item w-100">
                <a href="{{ route('clients') }}"
                   wire:navigate
                   class="nav-link {{ request()->routeIs('clients') ? 'active' : '' }}">
                    <i class="nav-icon bi bi-person-check"></i>
                    Клиенты
                </a>
            </li>

            <li class="nav-item menu-open">
                {{--        <li class="nav-item w-100">--}}
                <a href="{{ route('dogovor.index') }}"
                   wire:navigate
                   class="nav-link
               {{ Request::is('dogovor*') ? 'active' : '' }}
{{--               {{ request()->routeIs('dogovor.index') ? 'active' : '' }}"--}}
            >
                <i class=" nav-icon bi bi-file-earmark-arrow-up-fill"></i>
                Договора
                </a>
                {{--        </li>--}}
                <div style="margin-left: 20px;">
                    <ul class="nav nav-treeview w-100">

                        <li class="nav-item w-100">
                            <a href="{{ route('dogovor.template') }}"
                               wire:navigate
                               class="nav-link {{ request()->routeIs('dogovor.template') ? 'active' : '' }}">
                                {{--                            <i class="nav-icon bi bi-person-check"></i>--}}
                                Шаблоны
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="nav-item menu-open">

                <a href="{{ route('buh.zakazs') }}"
                   class="nav-link xblock w-100 {{ Request::is('buh*') ? 'active' : '' }}"
                   style="text-decoration: auto;"
                >

                    <i class="xnav-icon bi bi-wallet"></i>&nbsp;&nbsp;Бухгалтерия
                    {{--                    <i class="nav-arrow bi bi-chevron-right"></i>--}}
                    {{--                    <i style="float:right;" class="inline xnav-arrow bi bi-arrow-down-square-fill"></i>--}}
                </a>
                <div style="margin-left: 20px;">
                    <ul class="nav nav-treeview w-100">

                        <li class="nav-item w-100 text-end ">
                            <a href="{{ route('buh.zakazs') }}"
                               wire:navigate
                               class="nav-link {{ request()->routeIs('buh.zakazs') ? 'active' : '' }}">
                                {{--                    <i class="nav-icon bi bi-circle"></i>--}}
                                Заказы
                            </a>
                        </li>

                        <li class="nav-item w-100">
                            <a href="{{ route('buh.uslugi') }}"
                               wire:navigate
                               class="nav-link {{ request()->routeIs('buh.uslugi') ? 'active' : '' }}">
                                {{--                    <i class="nav-icon bi bi-circle"></i>--}}
                                Услуги
                            </a>
                        </li>

                        <li class="nav-item w-100">
                            <a href="{{ route('buh.sheta') }}"
                               wire:navigate
                               class="nav-link {{ request()->routeIs('buh.sheta') ? 'active' : '' }}">
                                {{--                    <i class="nav-icon bi bi-circle"></i>--}}
                                Счета
                            </a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="nav-item">

                <a href="https://crm.marudi.store" class="nav-link
               style=" text-decoration: auto;"
                >

                <i class="xnav-icon bi bi-asterisk"></i>&nbsp;&nbsp;Перейти на crm.marudi.store
                {{--                    <i class="nav-arrow bi bi-chevron-right"></i>--}}
                {{--                    <i style="float:right;" class="inline xnav-arrow bi bi-arrow-down-square-fill"></i>--}}
                </a>
            </li>


        </ul>

    @endif
</div>
