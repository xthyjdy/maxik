<!-- resources/views/common/clones.blade.php -->

    <!-- templates for pages -->
    <div class="hide" id="subcategory_tpl">
        <div class="form-group">
            <label for="subcategory" class="col-sm-3 control-label">{{ trans('ru_product_form.subcategory') }}</label>

            <div class="col-sm-6">
                <select name="subcategory" id="subcategory" class="form-control">
                    @if (count($subcategories) > 0)
                        @foreach ($subcategories as $cat)
                            <option value="{{ $cat->id }}" data-categoty-id="{{ $cat->category_id }}">
                                {{ trans('ru_product_form.subcategories.'.$cat->name) }}
                            </option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
    </div>
    <!-- end of templates -->