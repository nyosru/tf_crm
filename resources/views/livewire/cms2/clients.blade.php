<div>
    <div class="container mx-auto">

        <div class="app-content-header"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-4">

                        <livewire:Cms2.App.Breadcrumb :menu="[['route'=>'clients','name'=>'Клиенты']]"/>

                    </div>
                    <div class="col-sm-4">
                        {{--                    <input type="text" wire:model.live="searchTerm" placeholder="Поиск по клиенту ..."--}}
                        {{--                           class="form-control">--}}
                    </div>
                    <div class="col-sm-4">
                    </div>
                </div> <!--end::Row-->
            </div> <!--end::Container-->
        </div> <!--end::App Content Header--> <!--begin::App Content-->
    </div>
    <div class="px-3 ">

        <div class="px-3 ">
            <div class="overflow-x-auto">
                <div class="flex flex-col sticky sticky-top">
                    <!-- Header Row -->
                    <div class="flex text-sm font-semibold text-gray-700 bg-gray-200 p-2">
                        <div class="flex-1 text-center">id</div>
                        <div class="flex-1 text-center">name_i name_f name_o</div>
                        <div class="flex-1 text-center">phone / extra_contacts / E-mail</div>
                        <div class="flex-1 text-center">add_ts</div>

                        <div class="flex-1 text-center">address</div>

                        <div class="flex-1 text-center">
                            city / street / building / building_part / cvartira
                            / floor
                            / lift
                        </div>
                        {{--                        <div class="flex-1 text-center">floor</div>--}}
                        {{--                        <div class="flex-1 text-center">lift</div>--}}
                        {{--                        <div class="flex-1 text-center">email</div>--}}
                        <div class="flex-1 text-center">comment</div>
                        {{--                        <div class="flex-1 text-center">physical_person</div>--}}
                        <div class="flex-1 text-center">status</div>
                        <div class="flex-1 text-center">forma</div>
                        <div class="flex-1 text-center">avatar</div>
                        <div class="flex-1 text-center">
                            passport / seria_passport / nomer_passport / date_passport / cod_passport
                        </div>

                        <div class="flex-1 text-center">name_company
                            / ur_passport
                            / ur_name
                        </div>

                        {{--                        <div class="flex-1 text-center">name_company</div>--}}
                        {{--                        <div class="flex-1 text-center">ur_passport</div>--}}
                        {{--                        <div class="flex-1 text-center">ur_name</div>--}}
                        <div class="flex-1 text-center">active</div>
                    </div>
                    <!-- Data Rows -->
                    @if(isset($items) && count($items) > 0)
                        @foreach($items as $key => $cl)
                            <div class="flex text-sm p-2 {{ $key % 2 == 0 ? 'bg-white' : 'bg-gray-50' }}">
                                <div class="flex-1 text-center">{{ $cl->id ?? '-' }}</div>
                                <div class="flex-1 text-center">
                                    <livewire:cms2.informer.client-basic :i="$cl" :key="$cl->id" :full="false"/>
                                </div>
                                <div class="flex-1 text-center">
                                    <livewire:Informer.PhoneFormatter :phone="$cl->phone" :key="$cl->id" wire:lazy/>
                                    <br/>
                                    {{ $cl->extra_contacts ?? '-' }}
                                    <br/>
                                    {{ $cl->email ?? '-' }}
                                </div>
                                <div class="flex-1 text-center">
                                    {{ $cl->add_ts ? \Carbon\Carbon::parse($cl->add_ts)->format('d.m.y') : '-' }}
                                </div>
                                <div class="flex-1 text-center">{{ $cl->address ?? '-' }}</div>
                                <div class="flex-1 text-center">
                                    {{ $cl->city ?? '-' }} /
                                    {{ $cl->street ?? '-' }} /
                                    {{ $cl->building ?? '-' }} /
                                    {{ $cl->building_part ?? '-' }} /
                                    {{ $cl->cvartira ?? '-' }}
                                    / @if( !empty($cl->floor))
                                        Этаж: {{ $cl->floor ?? '-' }}
                                    @else
                                        -
                                    @endif
                                    / @if( !empty($cl->lift))
                                        Лифт: {{ $cl->lift ?? '-' }}
                                    @else
                                        -
                                    @endif
                                </div>
                                {{--                                <div class="flex-1 text-center">{{ $cl->floor ?? '-' }}</div>--}}
                                {{--                                <div class="flex-1 text-center">{{ $cl->lift ?? '-' }}</div>--}}
                                {{--                                <div class="flex-1 text-center">{{ $cl->email ?? '-' }}</div>--}}
                                <div class="flex-1 text-center">{{ $cl->comment ?? '-' }}</div>
                                {{--                                <div class="flex-1 text-center">{{ $cl->physical_person ?? '-' }}</div>--}}
                                <div class="flex-1 text-center">{{ $cl->status ?? '-' }}</div>
                                <div class="flex-1 text-center">{{ $cl->forma ?? '-' }}</div>
                                <div class="flex-1 text-center">{{ $cl->avatar ?? '-' }}</div>
                                <div class="flex-1 text-center">
                                    {{ $cl->seria_passport ?? '-' }} {{ $cl->nomer_passport ?? '-' }}

                                    <a href="#">подробнее</a>

                                    <div class="hidden">
                                        {{ $cl->passport ?? '-' }} /
                                        {{ $cl->seria_passport ?? '-' }} /
                                        {{ $cl->nomer_passport ?? '-' }} /
                                        {{ $cl->date_passport ?? '-' }} /
                                        {{ $cl->cod_passport ?? '-' }}
                                    </div>

                                </div>
                                <div class="flex-1 text-center">

                                    {{ $cl->ur_name ?? '-' }}
                                    <br/>
                                    {{ $cl->name_company ?? '-' }}
                                    <a href="#">подробнее</a>

                                    <div class="hidden">

                                        {{ $cl->ur_passport ?? '-' }}

                                    </div>
                                </div>
                                {{--                                <div class="flex-1 text-center">{{ $cl->ur_passport ?? '-' }}</div>--}}
                                {{--                                <div class="flex-1 text-center">{{ $cl->ur_name ?? '-' }}</div>--}}
                                {{--                                <div class="flex-1 text-center">{{ $cl->name_company ?? '-' }}</div>--}}
                                <div class="flex-1 text-center">{{ $cl->active ?? '-' }}</div>
                            </div>
                        @endforeach
                    @else
                        <div class="flex text-center p-4 bg-yellow-100">
                            <div class="flex-1">Не найдено данных, поиск: <u>{{ $searchTerm }}</u></div>
                        </div>
                    @endif
                </div>
            </div>
        </div>


        <!-- Pagination links -->
        <div class="container mx-auto mt-3">
            {{ $items->onEachSide(2)->links('pagination::tailwind') }}
        </div>
    </div>
</div>
