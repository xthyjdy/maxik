var product = new Product,
    category = $('#category');

category.on('change', function () {
    l(22);
    product.manageSubcategoryCases($(this).val());
});