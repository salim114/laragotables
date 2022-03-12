<div class="footer">
    <div class="gradient"></div>
    <div class="liner">
        <h2>Other features</h2>
        <div class="toc">
            <div class="toc-group">
                <h3><a href="{{ url('features') }}">Basic initialisation</a></h3>
                <ul class="toc active">
                    <li class="{{ Str::endsWith(request()->url(), 'basic_init/zero_configuration') ? 'active' : '' }}">
                        <a href="{{ url('features/basic_init/zero_configuration') }}">Zero configuration</a> 
                    </li>          
                    <li class="{{ Str::endsWith(request()->url(), 'basic_init/filter_only') ? 'active' : '' }}">
                        <a href="{{ url('features/basic_init/filter_only') }}">Feature enable / disable</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'basic_init/table_sorting') ? 'active' : '' }}">
                        <a href="{{ url('features/basic_init/table_sorting') }}">Default ordering (sorting)</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'basic_init/multi_col_sort') ? 'active' : '' }}">
                        <a href="{{ url('features/basic_init/multi_col_sort') }}">Multi-column ordering</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'basic_init/multiple_tables') ? 'active' : '' }}">
                        <a href="{{ url('features/basic_init/multiple_tables') }}">Multiple tables</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'basic_init/hidden_columns') ? 'active' : '' }}">
                        <a href="{{ url('features/basic_init/hidden_columns') }}">Hidden columns</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'basic_init/complex_header') ? 'active' : '' }}">
                        <a href="{{ url('features/basic_init/complex_header') }}">Complex headers (rowspan and colspan)</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'basic_init/dom') ? 'active' : '' }}">
                        <a href="{{ url('features/basic_init/dom') }}">DOM positioning</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'basic_init/flexible_width') ? 'active' : '' }}">
                        <a href="{{ url('features/basic_init/flexible_width') }}">Flexible table width</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'basic_init/state_save') ? 'active' : '' }}">
                        <a href="{{ url('features/basic_init/state_save') }}">State saving</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'basic_init/data_rendering') ? 'active' : '' }}">
                        <a href="{{ url('features/basic_init/data_rendering') }}">Data rendering</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'basic_init/alt_pagination') ? 'active' : '' }}">
                        <a href="{{ url('features/basic_init/alt_pagination') }}">Alternative pagination</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'basic_init/scroll_y') ? 'active' : '' }}">
                        <a href="{{ url('features/basic_init/scroll_y') }}">Scroll - vertical</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'basic_init/scroll_y_dynamic') ? 'active' : '' }}">
                        <a href="{{ url('features/basic_init/scroll_y_dynamic') }}">Scroll - vertical, dynamic height</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'basic_init/scroll_x') ? 'active' : '' }}">
                        <a href="{{ url('features/basic_init/scroll_x') }}">Scroll - horizontal</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'basic_init/scroll_xy') ? 'active' : '' }}">
                        <a href="{{ url('features/basic_init/scroll_xy') }}">Scroll - horizontal and vertical</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'basic_init/comma_decimal') ? 'active' : '' }}">
                        <a href="{{ url('features/basic_init/comma_decimal') }}">Language - Comma decimal place</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'basic_init/language') ? 'active' : '' }}">
                        <a href="{{ url('features/basic_init/language') }}">Language options</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'basic_init/stocks') ? 'active' : '' }}">
                        <a href="{{ url('features/basic_init/stocks') }}">Example of stocks results</a>
                    </li>
                </ul>
            </div>
            <div class="toc-group">
                <h3><a href="{{ url('features/advanced_init') }}">Advanced initialisation</a></h3>
                <ul class="toc">
                    <li class="{{ Str::endsWith(request()->url(), 'advanced_init/events_live') ? 'active' : '' }}">
                        <a href="{{ url('features/advanced_init/events_live') }}">DOM / jQuery events</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'advanced_init/dt_events') ? 'active' : '' }}">
                        <a href="{{ url('features/advanced_init/dt_events') }}">DataTables events</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'advanced_init/column_render') ? 'active' : '' }}">
                        <a href="{{ url('features/advanced_init/column_render') }}">Column rendering</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'advanced_init/enter_search') ? 'active' : '' }}">
                        <a href="{{ url('features/advanced_init/enter_search') }}">Enter Key to Search</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'advanced_init/length_menu') ? 'active' : '' }}">
                        <a href="{{ url('features/advanced_init/length_menu') }}">Page length options</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'advanced_init/dom_multiple_elements') ? 'active' : '' }}">
                        <a href="{{ url('features/advanced_init/dom_multiple_elements') }}">Multiple table control elements</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'advanced_init/complex_header') ? 'active' : '' }}">
                        <a href="{{ url('features/advanced_init/complex_header') }}">Complex headers with column visibility</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'advanced_init/object_dom_read') ? 'active' : '' }}">
                        <a href="{{ url('features/advanced_init/object_dom_read') }}">Read HTML to data objects</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'advanced_init/html5_data_attributes') ? 'active' : '' }}">
                        <a href="{{ url('features/advanced_init/html5_data_attributes') }}">HTML5 data-* attributes - cell data</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'advanced_init/html5_data_options') ? 'active' : '' }}">
                        <a href="{{ url('features/advanced_init/html5_data_options') }}">HTML5 data-* attributes - table options</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'advanced_init/language_file') ? 'active' : '' }}">
                        <a href="{{ url('features/advanced_init/language_file') }}">Language file</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'advanced_init/defaults') ? 'active' : '' }}">
                        <a href="{{ url('features/advanced_init/defaults') }}">Setting defaults</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'advanced_init/row_callback') ? 'active' : '' }}">
                        <a href="{{ url('features/advanced_init/row_callback') }}">Row created callback</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'advanced_init/row_grouping') ? 'active' : '' }}">
                        <a href="{{ url('features/advanced_init/row_grouping') }}">Row grouping</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'advanced_init/footer_callback') ? 'active' : '' }}">
                        <a href="{{ url('features/advanced_init/footer_callback') }}">Footer callback</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'advanced_init/dom_toolbar') ? 'active' : '' }}">
                        <a href="{{ url('features/advanced_init/dom_toolbar') }}">Custom toolbar elements</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'advanced_init/sort_direction_control') ? 'active' : '' }}">
                        <a href="{{ url('features/advanced_init/sort_direction_control') }}">Order direction sequence control</a>
                    </li>
                </ul>
            </div>
            <div class="toc-group">
                <h3><a href="{{ url('features/non_jquery') }}">Non-jQuery initialisation</a></h3>
                <ul class="toc">
                    <li class="{{ Str::endsWith(request()->url(), 'non_jquery/init') ? 'active' : '' }}">
                        <a href="{{ url('features/non_jquery/init') }}">Non-jQuery initialisation</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'non_jquery/options') ? 'active' : '' }}">
                        <a href="{{ url('features/non_jquery/options') }}">Options</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'non_jquery/dt_events') ? 'active' : '' }}">
                        <a href="{{ url('features/non_jquery/dt_events') }}">DataTables events</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'non_jquery/dom_events') ? 'active' : '' }}">
                        <a href="{{ url('features/non_jquery/dom_events') }}">DOM events</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'non_jquery/ajax') ? 'active' : '' }}">
                        <a href="{{ url('features/non_jquery/ajax') }}">Ajax data source (objects)</a>
                    </li>
                </ul>
            </div>
            <div class="toc-group">
                <h3><a href="{{ url('features/styling') }}">Styling</a></h3>
                <ul class="toc">
                    <li class="{{ Str::endsWith(request()->url(), 'styling/display') ? 'active' : '' }}">
                        <a href="{{ url('features/styling/display') }}">Base style</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'styling/no_classes') ? 'active' : '' }}">
                        <a href="{{ url('features/styling/no_classes') }}">Base style - no styling classes</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'styling/cell_border') ? 'active' : '' }}">
                        <a href="{{ url('features/styling/cell_border') }}">Base style - cell borders</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'styling/compact') ? 'active' : '' }}">
                        <a href="{{ url('features/styling/compact') }}">Base style - compact</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'styling/hover') ? 'active' : '' }}">
                        <a href="{{ url('features/styling/hover') }}">Base style - hover</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'styling/order_column') ? 'active' : '' }}">
                        <a href="{{ url('features/styling/order_column') }}">Base style - order-column</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'styling/row_border') ? 'active' : '' }}">
                        <a href="{{ url('features/styling/row_border') }}">Base style - row borders</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'styling/stripe') ? 'active' : '' }}">
                        <a href="{{ url('features/styling/stripe') }}">Base style - stripe</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'styling/bootstrap') ? 'active' : '' }}">
                        <a href="{{ url('features/styling/bootstrap') }}">Bootstrap 3</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'styling/bootstrap4') ? 'active' : '' }}">
                        <a href="{{ url('features/styling/bootstrap4') }}">Bootstrap 4</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'styling/bootstrap5') ? 'active' : '' }}">
                        <a href="{{ url('features/styling/bootstrap5') }}">Bootstrap 5</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'styling/foundation') ? 'active' : '' }}">
                        <a href="{{ url('features/styling/foundation') }}">Foundation</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'styling/semanticui') ? 'active' : '' }}">
                        <a href="{{ url('features/styling/semanticui') }}">Fomantic-UI (formally Semantic-UI)</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'styling/bulma') ? 'active' : '' }}">
                        <a href="{{ url('features/styling/bulma') }}">Bulma</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'styling/jqueryUI') ? 'active' : '' }}">
                        <a href="{{ url('features/styling/jqueryUI') }}">jQuery UI ThemeRoller</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'styling/material') ? 'active' : '' }}">
                        <a href="{{ url('features/styling/material') }}">Material Design (Tech. preview)</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'styling/uikit') ? 'active' : '' }}">
                        <a href="{{ url('features/styling/uikit') }}">UIKit 3 (Tech. preview)</a>
                    </li>
                </ul>
            </div>
            <div class="toc-group">
                <h3><a href="{{ url('features/data_sources') }}">Data sources</a></h3>
                <ul class="toc">
                    <li class="{{ Str::endsWith(request()->url(), 'data_sources/dom') ? 'active' : '' }}">
                        <a href="{{ url('features/data_sources/dom') }}">HTML (DOM) sourced data</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'data_sources/ajax') ? 'active' : '' }}">
                        <a href="{{ url('features/data_sources/ajax') }}">Ajax sourced data</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'data_sources/js_array') ? 'active' : '' }}">
                        <a href="{{ url('features/data_sources/js_array') }}">Javascript sourced data</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'data_sources/server_side') ? 'active' : '' }}">
                        <a href="{{ url('features/data_sources/server_side') }}">Server-side processing</a>
                    </li>
                </ul>
            </div>
            <div class="toc-group">
                <h3><a href="{{ url('features/api') }}">API</a></h3>
                <ul class="toc">
                    <li class="{{ Str::endsWith(request()->url(), 'api/add_row') ? 'active' : '' }}">
                        <a href="{{ url('features/api/add_row') }}">Add rows</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'api/multi_filter') ? 'active' : '' }}">
                        <a href="{{ url('features/api/multi_filter') }}">Individual column searching (text inputs)</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'api/multi_filter_select') ? 'active' : '' }}">
                        <a href="{{ url('features/api/multi_filter_select') }}">Individual column searching (select inputs)</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'api/highlight') ? 'active' : '' }}">
                        <a href="{{ url('features/api/highlight') }}">Highlighting rows and columns</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'api/row_details') ? 'active' : '' }}">
                        <a href="{{ url('features/api/row_details') }}">Child rows (show extra / detailed information)</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'api/row_details_stateSave') ? 'active' : '' }}">
                        <a href="{{ url('features/api/row_details_stateSave') }}">Child rows with StateSave</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'api/select_row') ? 'active' : '' }}">
                        <a href="{{ url('features/api/select_row') }}">Row selection (multiple rows)</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'api/select_single_row') ? 'active' : '' }}">
                        <a href="{{ url('features/api/select_single_row') }}">Row selection and deletion (single row)</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'api/form') ? 'active' : '' }}">
                        <a href="{{ url('features/api/form') }}">Form inputs</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'api/counter_columns') ? 'active' : '' }}">
                        <a href="{{ url('features/api/counter_columns') }}">Index column</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'api/show_hide') ? 'active' : '' }}">
                        <a href="{{ url('features/api/show_hide') }}">Show / hide columns dynamically</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'api/api_in_init') ? 'active' : '' }}">
                        <a href="{{ url('features/api/api_in_init') }}">Using API in callbacks</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'api/tabs_and_scrolling') ? 'active' : '' }}">
                        <a href="{{ url('features/api/tabs_and_scrolling') }}">Scrolling and Bootstrap tabs</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'api/regex') ? 'active' : '' }}">
                        <a href="{{ url('features/api/regex') }}">Search API (regular expressions)</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'api/highcharts') ? 'active' : '' }}">
                        <a href="{{ url('features/api/highcharts') }}">HighCharts Integration</a>
                    </li>
                </ul>
            </div>
            <div class="toc-group">
                <h3><a href="{{ url('features/ajax') }}">Ajax</a></h3>
                <ul class="toc">
                    <li class="{{ Str::endsWith(request()->url(), 'ajax/simple') ? 'active' : '' }}">
                        <a href="{{ url('features/ajax/simple') }}">Ajax data source (arrays)</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'ajax/objects') ? 'active' : '' }}">
                        <a href="{{ url('features/ajax/objects') }}">Ajax data source (objects)</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'ajax/deep') ? 'active' : '' }}">
                        <a href="{{ url('features/ajax/deep') }}">Nested object data (objects)</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'ajax/objects_subarrays') ? 'active' : '' }}">
                        <a href="{{ url('features/ajax/objects_subarrays') }}">Nested object data (arrays)</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'ajax/orthogonal_data') ? 'active' : '' }}">
                        <a href="{{ url('features/ajax/orthogonal_data') }}">Orthogonal data</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'ajax/null_data_source') ? 'active' : '' }}">
                        <a href="{{ url('features/ajax/null_data_source') }}">Generated content for a column</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'ajax/custom_data_property') ? 'active' : '' }}">
                        <a href="{{ url('features/ajax/custom_data_property') }}">Custom data source property</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'ajax/custom_data_flat') ? 'active' : '' }}">
                        <a href="{{ url('features/ajax/custom_data_flat') }}">Flat array data source</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'ajax/defer_render') ? 'active' : '' }}">
                        <a href="{{ url('features/ajax/defer_render') }}">Deferred rendering for speed</a>
                    </li>
                </ul>
            </div>
            <div class="toc-group">
                <h3><a href="{{ url('features/server_side') }}">Server-side</a></h3>
                <ul class="toc">
                    <li class="{{ Str::endsWith(request()->url(), 'server_side/simple') ? 'active' : '' }}">
                        <a href="{{ url('features/server_side/simple') }}">Server-side processing</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'server_side/custom_vars') ? 'active' : '' }}">
                        <a href="{{ url('features/server_side/custom_vars') }}">Custom HTTP variables</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'server_side/post') ? 'active' : '' }}">
                        <a href="{{ url('features/server_side/post') }}">POST data</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'server_side/return_search') ? 'active' : '' }}">
                        <a href="{{ url('features/server_side/return_search') }}">Return key to search</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'server_side/ids') ? 'active' : '' }}">
                        <a href="{{ url('features/server_side/ids') }}">Automatic addition of row ID attributes</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'server_side/object_data') ? 'active' : '' }}">
                        <a href="{{ url('features/server_side/object_data') }}">Object data source</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'server_side/row_details') ? 'active' : '' }}">
                        <a href="{{ url('features/server_side/row_details') }}">Row details</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'server_side/select_rows') ? 'active' : '' }}">
                        <a href="{{ url('features/server_side/select_rows') }}">Row selection</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'server_side/jsonp') ? 'active' : '' }}">
                        <a href="{{ url('features/server_side/jsonp') }}">JSONP data source for remote domains</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'server_side/defer_loading') ? 'active' : '' }}">
                        <a href="{{ url('features/server_side/defer_loading') }}">Deferred loading of data</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'server_side/pipeline') ? 'active' : '' }}">
                        <a href="{{ url('features/server_side/pipeline') }}">Pipelining data to reduce Ajax calls for paging</a>
                    </li>
                </ul>
            </div>
            <div class="toc-group">
                <h3><a href="{{ url('features/plug_ins') }}">plug_ins</a></h3>
                <ul class="toc">
                    <li class="{{ Str::endsWith(request()->url(), 'plug_ins/api') ? 'active' : '' }}">
                        <a href="{{ url('features/plug_ins/api') }}">API plug-in methods</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'plug_ins/sorting_auto') ? 'active' : '' }}">
                        <a href="{{ url('features/plug_ins/sorting_auto') }}">Ordering plug_ins (with type detection)</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'plug_ins/sorting_manual') ? 'active' : '' }}">
                        <a href="{{ url('features/plug_ins/sorting_manual') }}">Ordering plug_ins (no type detection)</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'plug_ins/range_filtering') ? 'active' : '' }}">
                        <a href="{{ url('features/plug_ins/range_filtering') }}">Custom filtering - range search</a>
                    </li>
                    <li class="{{ Str::endsWith(request()->url(), 'plug_ins/dom_sort') ? 'active' : '' }}">
                        <a href="{{ url('features/plug_ins/dom_sort') }}">Live DOM ordering</a>
                    </li>
                </ul>
            </div>
        </div>        
        <div class="epilogue">
            <p>Please refer to the <a href="http://www.datatables.net">DataTables documentation</a> for full information about its API properties and methods.<br>
            Additionally, there are a wide range of <a href="http://www.datatables.net/extensions">extensions</a> and <a href=
            "http://www.datatables.net/plug_ins">plug_ins</a> which extend the capabilities of DataTables.</p>
            <p class="copyright">DataTables designed and created by <a href="http://www.sprymedia.co.uk">SpryMedia Ltd</a> © 2007-2022<br>
            DataTables is licensed under the <a href="http://www.datatables.net/mit">MIT license</a>.</p>
        </div>
        </div>
</div>
