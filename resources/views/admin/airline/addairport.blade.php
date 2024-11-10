@extends('admin.dash')

@section('admin')

<div class="page-content">
    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title fs-4">Formulaire de l'Aéroport</h6>
                    <hr>

                    <!-- Display Success Message -->
                    @if(session('message'))
                        <div class="alert alert-{{ session('alert-type', 'info') }}">
                            {{ session('message') }}
                        </div>
                    @endif

                    <!-- Display Validation Errors -->
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="post" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label">Nom de l'Aéroport</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Entrez le nom de l'aéroport" required>
                                </div>
                            </div><!-- Col -->

                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label">Code IATA</label>
                                    <input type="text" class="form-control" name="iata_code" value="{{ old('iata_code') }}" placeholder="Entrez le code IATA" required>
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label">Adresse</label>
                                    <input type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="Entrez l'adresse" required>
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label">Numéro de Téléphone</label>
                                    <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Entrez le numéro de téléphone" required>
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label">Pays</label>
                                    <select class="form-control" name="country" id="country" required>
                                        <option value="" disabled selected>Sélectionnez le pays</option>
                                        <!-- Options will be populated dynamically -->
                                    </select>
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label">Ville</label>
                                    <select class="form-control" name="city" id="city" required>
                                        <option value="" disabled selected>Sélectionnez la ville</option>
                                        <!-- Options will be populated dynamically -->
                                    </select>
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label">Téléchargez le Logo de l'Aéroport</label>
                                    <input type="file" class="form-control" name="logo" accept="image/*">
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                        
                        <button type="submit" class="btn btn-inverse-primary">Soumettre le formulaire</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const countrySelect = document.getElementById('country');
        const citySelect = document.getElementById('city');

        // Fetch countries from GeoNames API
        fetch('https://restcountries.com/v3.1/all')
            .then(response => response.json())
            .then(data => {
                data.forEach(country => {
                    const option = document.createElement('option');
                    option.value = country.cca2; // ISO 3166-1 alpha-2 code
                    option.textContent = country.name.common; // Country name
                    countrySelect.appendChild(option);
                });
            })
            .catch(error => console.error('Error fetching countries:', error));

        // Add event listener for country change
        countrySelect.addEventListener('change', function() {
            const selectedCountry = this.value;

            // Clear existing city options
            citySelect.innerHTML = '<option value="" disabled selected>Sélectionnez la ville</option>';

            // Fetch cities for the selected country
            fetch(`http://api.geonames.org/searchJSON?country=${selectedCountry}&maxRows=50&username={{ env('azizgr') }}`)
                .then(response => response.json())
                .then(data => {
                    data.geonames.forEach(city => {
                        const option = document.createElement('option');
                        option.value = city.name; // City name
                        option.textContent = city.name; // City name
                        citySelect.appendChild(option);
                    });
                })
                .catch(error => console.error('Error fetching cities:', error));
        });
    });
</script>
@endsection

@endsection
