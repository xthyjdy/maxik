<!-- resources/views/common/clones.blade.php -->

    <!-- templates for pages -->
    <div class="hide" id="subcategory_tpl">
        <div class="form-group">
            <label for="subcategory" class="col-sm-3 control-label">Subcategory</label>

            <div class="col-sm-6">
                <select name="subcategory" id="subcategory" class="form-control">
                    @if (count($subcategory) > 0)
                        @foreach ($subcategory as $cat)
                            <option value="{{ $cat->id }}" data-categoty-id="{{ $cat->category_id }}">
                                {{ $cat->name }}
                            </option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
    </div>
    <!-- end of templates -->