$(document).ready(function () {
    fetchCountries();

    function fetchCountries() {
        $.ajax({
            url: "/countries",
            method: "GET",
            success: function (data) {
                let countries = data.map((country) => {
                    return `<option value="${country.cca2}">${country.name.common}</option>`;
                });
                $("#country").append(countries.join(""));
            },
            error: function (err) {
                console.error("Error fetching countries:", err);
            },
        });
    }

    // Fetch cities based on selected country
    $("#country").change(function () {
        const countryCode = $(this).val();
        fetchCities(countryCode);
    });

    function fetchCities(countryCode) {
        $.ajax({
            url: `/cities/${countryCode}`,
            method: "GET",
            success: function (data) {
                let cities = data.map((city) => {
                    return `<option value="${city.name}">${city.name}</option>`;
                });
                $("#city")
                    .empty()
                    .append(
                        '<option value="" disabled selected>Sélectionnez la ville</option>'
                    );
                $("#city").append(cities.join(""));
            },
            error: function (err) {
                console.error("Error fetching cities:", err);
            },
        });
    }
});
