var product = new Product,
    category = $('#category');

category.on('change', function () {
    product.manageSubcategoryCases($(this).val());
});