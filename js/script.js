function filterCars() {
    const brand = document.getElementById('brand_name').value;
    const vehicleType = document.getElementById('vehicleType').value;
    const bodyStyle = document.getElementById('bodyStyle').value;
    const carCards = document.querySelectorAll('.car-card');

    carCards.forEach(card => {
        const cardBrand = card.getAttribute('data-brand');
        const cardType = card.getAttribute('data-type');
        const cardStyle = card.getAttribute('data-style');

        if ((brand === "" || brand === cardBrand) &&
            (vehicleType === "" || vehicleType === cardType) &&
            (bodyStyle === "" || bodyStyle === cardStyle)) {
            card.style.display = "none";
        } else {
            card.style.display = "none";
        }
    });
}