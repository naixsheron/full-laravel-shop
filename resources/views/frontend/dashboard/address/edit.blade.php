@extends('frontend.dashboard.layouts.master')

@section('content')
    <section id="wsus__dashboard">
        <div class="container-fluid">
            @include('frontend.dashboard.layouts.sidebar')
            <div class="row">
                <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
                    <div class="dashboard_content mt-2 mt-md-0">
                        <h3><i class="fal fa-gift-card"></i>creați adresa</h3>
                        <div class="wsus__dashboard_add wsus__add_address">

                            <form action="{{ route('user.address.update', $addresses->id) }}" method="POST">

                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-xl-6 col-md-6">
                                        <div class="wsus__add_address_single">
                                            <label>nume <b>*</b></label>
                                            <input type="text" placeholder="Nume" name="name"
                                                value="{{ $addresses->name }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <div class="wsus__add_address_single">
                                            <label>email</label>
                                            <input type="email" placeholder="Email" name="email"
                                                value="{{ $addresses->email }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <div class="wsus__add_address_single">
                                            <label>Telefon <b>*</b></label>
                                            <input type="text" placeholder="Telefon" name="phone"
                                                value="{{ $addresses->phone }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <div class="wsus__add_address_single">
                                            <label>Tara <b>*</b></label>
                                            <div class="wsus__topbar_select">
                                                <select class="select_2" name="country">
                                                    <option>Selectează</option>
                                                    @foreach (config('settings.country_list') as $country)
                                                        <option {{ $country === $addresses->country ? 'selected' : '' }}
                                                            value="{{ $country }}">{{ $country }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <div class="wsus__add_address_single">
                                            <label>Județ <b>*</b></label>
                                            <input type="text" placeholder="Județ" name="state"
                                                value="{{ $addresses->state }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <div class="wsus__add_address_single">
                                            <label>Oraș <b>*</b></label>
                                            <input type="text" placeholder="Oras"
                                                name="city"value="{{ $addresses->city }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <div class="wsus__add_address_single">
                                            <label>Cod Poștal <b>*</b></label>
                                            <input type="text" placeholder="Cod Postal" name="zip"
                                                value="{{ $addresses->zip }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <div class="wsus__add_address_single">
                                            <label>Adresă <b>*</b></label>
                                            <input type="text" placeholder="Adresă" name="address"
                                                value="{{ $addresses->address }}">
                                        </div>
                                    </div>


                                    <div class="col-xl-6">
                                        <button type="submit" class="common_btn">Actualizați</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
                                                                                                                                                                                                DASHBOARD START
                                                                                                                                                                                              ==============================-->
@endsection