
<section class="search-block row">
    <div class="col-md-10">
        <div class="search-form">
            <div class="form-group">
                <div class="input-group">
                    <input id="search_field" type="text" class="form-control input-sm"
                           placeholder="Поиск по 34014 объявлениям..." value="">
                    <span class="input-group-btn">
                <button id="search_button" class="btn btn-md btn-primary">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
                </div>
            </div>
            <div class="filter-form">
                <div class="form-group">
                    <div class="checkbox">
                        <label><input type="checkbox"> Remember parameters</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="text-center">
            <a href="{{url('/add')}}" class="btn btn-md btn-block btn-add">
                <span class="glyphicon glyphicon-plus"></span>Создать
            </a>
        </div>
    </div>
</section>
