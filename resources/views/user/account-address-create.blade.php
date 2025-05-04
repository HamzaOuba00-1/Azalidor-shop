@extends('layouts.app')
@section('content')
<main class="pt-90">
    <div class="mb-4 pb-4"></div>
    <section class="my-account container">
        <h2 class="page-title">Add New Address</h2>
        <div class="row">
            <div class="col-lg-2">
                @include('user.account-nav')
            </div>
            <div class="col-lg-9">
                <div class="page-content my-account__address">
                    <div class="row">
                        <div class="col-6">
                            <p class="notice">The following addresses will be used on the checkout page by default.</p>
                        </div>
                        <div class="col-6 text-right">
                            <a href="{{ route('cart.address') }}" class="btn btn-sm btn-danger">Back</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="card mb-5">
                                <div class="card-header">
                                    <h5>Add New Address</h5>
                                </div>
                                <div class="card-body">
                                    <!-- Formulaire d'ajout d'adresse -->
                                    <form action="{{ route('cart.address.store') }}" method="POST">
                                        @csrf <!-- Protection CSRF -->

                                        <div class="row">
                                            <!-- Champ : Nom complet -->
                                            <div class="col-md-6">
                                                <div class="form-floating my-3">
                                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                                                    <label for="name">Full Name *</label>
                                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>
                                            </div>

                                            <!-- Champ : Numéro de téléphone -->
                                            <div class="col-md-6">
                                                <div class="form-floating my-3">
                                                    <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" required>
                                                    <label for="phone">Phone Number *</label>
                                                    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>
                                            </div>

                                            <!-- Champ : Code postal -->
                                            <div class="col-md-4">
                                                <div class="form-floating my-3">
                                                    <input type="text" class="form-control" name="zip" value="{{ old('zip') }}" required>
                                                    <label for="zip">Pincode *</label>
                                                    @error('zip') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>
                                            </div>

                                            <!-- Champ : État -->
                                            <div class="col-md-4">
                                                <div class="form-floating my-3">
                                                    <input type="text" class="form-control" name="state" value="{{ old('state') }}" required>
                                                    <label for="state">State *</label>
                                                    @error('state') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>
                                            </div>

                                            <!-- Champ : Ville -->
                                            <div class="col-md-4">
                                                <div class="form-floating my-3">
                                                    <input type="text" class="form-control" name="city" value="{{ old('city') }}" required>
                                                    <label for="city">Town / City *</label>
                                                    @error('city') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>
                                            </div>

                                            <!-- Champ : Adresse -->
                                            <div class="col-md-6">
                                                <div class="form-floating my-3">
                                                    <input type="text" class="form-control" name="address" value="{{ old('address') }}" required>
                                                    <label for="address">House no, Building Name *</label>
                                                    @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>
                                            </div>

                                            <!-- Champ : Localité -->
                                            <div class="col-md-6">
                                                <div class="form-floating my-3">
                                                    <input type="text" class="form-control" name="locality" value="{{ old('locality') }}" required>
                                                    <label for="locality">Road Name, Area, Colony *</label>
                                                    @error('locality') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>
                                            </div>

                                            <!-- Champ : Point de repère -->
                                            <div class="col-md-12">
                                                <div class="form-floating my-3">
                                                    <input type="text" class="form-control" name="landmark" value="{{ old('landmark') }}">
                                                    <label for="landmark">Landmark</label>
                                                    @error('landmark') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>
                                            </div>

                                            <!-- Champ : Adresse par défaut -->
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="1" id="isdefault" name="isdefault">
                                                    <label class="form-check-label" for="isdefault">
                                                        Make as Default address
                                                    </label>
                                                </div>
                                            </div>

                                            <!-- Bouton de soumission -->
                                            <div class="col-md-12 text-right">
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
