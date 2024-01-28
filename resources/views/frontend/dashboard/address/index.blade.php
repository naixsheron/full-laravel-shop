@extends('frontend.dashboard.layouts.master')

@section('content')
    <!--=============================
                                                                                                                                                        DASHBOARD START
                                                                                                                                                      ==============================-->
    <section id="wsus__dashboard">
        <div class="container-fluid">
            @include('frontend.dashboard.layouts.sidebar')
            <div class="row">
                <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
                    <div class="dashboard_content">
                        <h3><i class="fal fa-gift-card"></i> Adresă</h3>
                        <div class="wsus__dashboard_add">
                            <div class="row">
                                @foreach ($addresses as $address)
                                    <div class="col-xl-6">
                                        <div class="wsus__dash_add_single">
                                            <h4>Adresă de facturare</h4>
                                            <ul>
                                                <li><span>nume :</span> {{ $address->name }}</li>
                                                <li><span>Telefon :</span> {{ $address->phone }}</li>
                                                <li><span>email :</span> {{ $address->email }}</li>
                                                <li><span>țara :</span> {{ $address->country }}</li>
                                                <li><span>Județ :</span> {{ $address->state }}</li>
                                                <li><span>Oraș :</span> {{ $address->city }}</li>
                                                <li><span>Cod Poștal :</span> {{ $address->zip }}</li>

                                                <li><span>Adresă :</span> {{ $address->address }}</li>
                                            </ul>
                                            <div class="wsus__address_btn">
                                                <a href="{{ route('user.address.edit', $address->id) }}" class="edit"><i
                                                        class="fal fa-edit"></i>
                                                    Editați</a>
                                                {{-- <a href="{{ route('user.address.destroy', $address->id) }}"
                                                    class="del delete-item"><i class="fal fa-trash-alt"></i> șterge</a> --}}
                                                <a href="{{ route('user.address.destroy', $address->id) }}"
                                                    class="del delete-item"><i class="fal fa-trash-alt"></i> șterge</a>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                                <div class="col-12">
                                    <a href="{{ route('user.address.create') }}" class="add_address_btn common_btn"><i
                                            class="far fa-plus"></i>
                                        Adaugă o nouă adresă</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
