class Product extends MAXIK {
    constructor() {
        super();
        this.init();
    }

    init() {
        this.subcategoryTpl = jQuery('#subcategory_tpl');
        this.subcategoryTarget = jQuery('#subcategory_target');
        this.oldCategoryID;
    }
    
    removeSubcategory() {
        jQuery(this.subcategoryTarget.children()).remove();
    }

    manageSubcategoryInsert(categoryID) {
        var categoryID = categoryID,
            clone = this.subcategoryTpl.clone();

        clone.removeClass('hide');
        //delete everithing(options), that is not in our category
        jQuery.each(clone.find('option'), function (value, element) {
            var element = jQuery(element);
            if (element.data('categotyId') != categoryID) {
                element.remove();
            }
        });

        this.subcategoryTarget.append(clone);
        this.oldCategoryID = categoryID;
    }

    manageSubcategoryCases(categoryID) {
        var categoryID = categoryID;

        if (this.oldCategoryID) {
            if (this.oldCategoryID == categoryID) {
                return;
            } else if (ZERO == categoryID) {
                this.removeSubcategory();
            } else {
                this.removeSubcategory();
                this.manageSubcategoryInsert(categoryID);
            }
        } else if (!this.oldCategoryID && ZERO != categoryID) {
            this.manageSubcategoryInsert(categoryID);
        }
    }
}