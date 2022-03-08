<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatatableController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('examples', function () {
    return view('examples.index');
});

Route::get('examples/basic_init', function () {
    return view('examples.basic_init.index');
});
Route::get('examples/advanced_init', function () {
    return view('examples.advanced_init.index');
});
Route::get('examples/non_jquery', function () {
    return view('examples.non_jquery.index');
});
Route::get('examples/styling', function () {
    return view('examples.styling.index');
});
Route::get('examples/data_sources', function () {
    return view('examples.data_sources.index');
});
Route::get('examples/api', function () {
    return view('examples.api.index');
});
Route::get('examples/ajax', function () {
    return view('examples.ajax.index');
});
Route::get('examples/server_side', function () {
    return view('examples.server_side.index');
});
Route::get('examples/plug_ins', function () {
    return view('examples.plug_ins.index');
});


//Basic initialisation
Route::group([], function() {
    Route::get('examples/basic_init/zero_configuration', 'App\Http\Controllers\DatatableController@zero_configuration');
    Route::get('examples/basic_init/filter_only', 'App\Http\Controllers\DatatableController@filter_only');
    Route::get('examples/basic_init/table_sorting', 'App\Http\Controllers\DatatableController@table_sorting');
    Route::get('examples/basic_init/multi_col_sort', 'App\Http\Controllers\DatatableController@multi_col_sort');
    Route::get('examples/basic_init/multiple_tables', 'App\Http\Controllers\DatatableController@multiple_tables');
    Route::get('examples/basic_init/hidden_columns', 'App\Http\Controllers\DatatableController@hidden_columns');
    Route::get('examples/basic_init/complex_header', 'App\Http\Controllers\DatatableController@complex_header');
    Route::get('examples/basic_init/dom', 'App\Http\Controllers\DatatableController@dom');
    Route::get('examples/basic_init/flexible_width', 'App\Http\Controllers\DatatableController@flexible_width');
    Route::get('examples/basic_init/state_save', 'App\Http\Controllers\DatatableController@state_save');
    Route::get('examples/basic_init/data_rendering', 'App\Http\Controllers\DatatableController@data_rendering');
    Route::get('examples/basic_init/alt_pagination', 'App\Http\Controllers\DatatableController@alt_pagination');
    Route::get('examples/basic_init/scroll_y', 'App\Http\Controllers\DatatableController@scroll_y');
    Route::get('examples/basic_init/scroll_y_dynamic', 'App\Http\Controllers\DatatableController@scroll_y_dynamic');
    Route::get('examples/basic_init/scroll_x', 'App\Http\Controllers\DatatableController@scroll_x');
    Route::get('examples/basic_init/scroll_xy', 'App\Http\Controllers\DatatableController@scroll_xy');
    Route::get('examples/basic_init/comma_decimal', 'App\Http\Controllers\DatatableController@comma_decimal');
    Route::get('examples/basic_init/language', 'App\Http\Controllers\DatatableController@language');
    Route::get('examples/basic_init/stocks', 'App\Http\Controllers\DatatableController@stocks');
}); 

//Advanced initialisation
Route::group([], function() {
    Route::get('examples/advanced_init/column_render', 'App\Http\Controllers\DatatableController@column_render');
    Route::get('examples/advanced_init/complex_header', 'App\Http\Controllers\DatatableController@complex_header_ai');
    Route::get('examples/advanced_init/defaults', 'App\Http\Controllers\DatatableController@defaults');
    Route::get('examples/advanced_init/dom_multiple_elements', 'App\Http\Controllers\DatatableController@dom_multiple_elements');
    Route::get('examples/advanced_init/dom_toolbar', 'App\Http\Controllers\DatatableController@dom_toolbar');
    Route::get('examples/advanced_init/dt_events', 'App\Http\Controllers\DatatableController@dt_events');
    Route::get('examples/advanced_init/enter_search', 'App\Http\Controllers\DatatableController@enter_search');
    Route::get('examples/advanced_init/events_live', 'App\Http\Controllers\DatatableController@events_live');
    Route::get('examples/advanced_init/footer_callback', 'App\Http\Controllers\DatatableController@footer_callback');
    Route::get('examples/advanced_init/html5_data_attributes', 'App\Http\Controllers\DatatableController@html5_data_attributes');
    Route::get('examples/advanced_init/html5_data_options', 'App\Http\Controllers\DatatableController@html5_data_options');
    Route::get('examples/advanced_init/language_file', 'App\Http\Controllers\DatatableController@language_file');
    Route::get('examples/advanced_init/length_menu', 'App\Http\Controllers\DatatableController@length_menu');
    Route::get('examples/advanced_init/object_dom_read', 'App\Http\Controllers\DatatableController@object_dom_read');
    Route::get('examples/advanced_init/row_callback', 'App\Http\Controllers\DatatableController@row_callback');
    Route::get('examples/advanced_init/row_grouping', 'App\Http\Controllers\DatatableController@row_grouping');
    Route::get('examples/advanced_init/sort_direction_control', 'App\Http\Controllers\DatatableController@sort_direction_control');
});

//Non-jQuery initialisation
Route::group([], function() {
    Route::get('examples/non_jquery/ajax', 'App\Http\Controllers\DatatableController@ajax');
    Route::get('examples/non_jquery/dom_events', 'App\Http\Controllers\DatatableController@dom_events');
    Route::get('examples/non_jquery/dt_events', 'App\Http\Controllers\DatatableController@dt_events_nj');
    Route::get('examples/non_jquery/init', 'App\Http\Controllers\DatatableController@init');
    Route::get('examples/non_jquery/options', 'App\Http\Controllers\DatatableController@options');
});

//Styling
Route::group([], function() {
    Route::get('examples/styling/bootstrap', 'App\Http\Controllers\DatatableController@bootstrap');
    Route::get('examples/styling/bootstrap4', 'App\Http\Controllers\DatatableController@bootstrap4');
    Route::get('examples/styling/bootstrap5', 'App\Http\Controllers\DatatableController@bootstrap5');
    Route::get('examples/styling/bulma', 'App\Http\Controllers\DatatableController@bulma');
    Route::get('examples/styling/cell_border', 'App\Http\Controllers\DatatableController@cell_border');
    Route::get('examples/styling/compact', 'App\Http\Controllers\DatatableController@compact');
    Route::get('examples/styling/display', 'App\Http\Controllers\DatatableController@display');
    Route::get('examples/styling/foundation', 'App\Http\Controllers\DatatableController@foundation');
    Route::get('examples/styling/hover', 'App\Http\Controllers\DatatableController@hover');
    Route::get('examples/styling/jqueryUI', 'App\Http\Controllers\DatatableController@jqueryUI');
    Route::get('examples/styling/material', 'App\Http\Controllers\DatatableController@material');
    Route::get('examples/styling/no_classes', 'App\Http\Controllers\DatatableController@no_classes');
    Route::get('examples/styling/order_column', 'App\Http\Controllers\DatatableController@order_column');
    Route::get('examples/styling/row_border', 'App\Http\Controllers\DatatableController@row_border');
    Route::get('examples/styling/semanticui', 'App\Http\Controllers\DatatableController@semanticui');
    Route::get('examples/styling/stripe', 'App\Http\Controllers\DatatableController@stripe');
    Route::get('examples/styling/uikit', 'App\Http\Controllers\DatatableController@uikit');
});

//Data sources
Route::group([], function() {
    Route::get('examples/data_sources/ajax', 'App\Http\Controllers\DatatableController@ajax_ds');
    Route::get('examples/data_sources/dom', 'App\Http\Controllers\DatatableController@dom_ds');
    Route::get('examples/data_sources/js_array', 'App\Http\Controllers\DatatableController@js_array');
    Route::get('examples/data_sources/server_side', 'App\Http\Controllers\DatatableController@server_side')->name('server_side');
});

//API
Route::group([], function() {
    Route::get('examples/api/add_row', 'App\Http\Controllers\DatatableController@add_row');
    Route::get('examples/api/api_in_init', 'App\Http\Controllers\DatatableController@api_in_init');
    Route::get('examples/api/counter_columns', 'App\Http\Controllers\DatatableController@counter_columns');
    Route::get('examples/api/form', 'App\Http\Controllers\DatatableController@form');
    Route::get('examples/api/highlight', 'App\Http\Controllers\DatatableController@highlight');
    Route::get('examples/api/multi_filter', 'App\Http\Controllers\DatatableController@multi_filter');
    Route::get('examples/api/multi_filter_select', 'App\Http\Controllers\DatatableController@multi_filter_select');
    Route::get('examples/api/regex', 'App\Http\Controllers\DatatableController@regex');
    Route::get('examples/api/row_details', 'App\Http\Controllers\DatatableController@row_details');
    Route::get('examples/api/row_details_stateSave', 'App\Http\Controllers\DatatableController@row_details_stateSave');
    Route::get('examples/api/select_row', 'App\Http\Controllers\DatatableController@select_row');
    Route::get('examples/api/select_single_row', 'App\Http\Controllers\DatatableController@select_single_row');
    Route::get('examples/api/show_hide', 'App\Http\Controllers\DatatableController@show_hide');
    Route::get('examples/api/tabs_and_scrolling', 'App\Http\Controllers\DatatableController@tabs_and_scrolling');
    Route::get('examples/api/highcharts', 'App\Http\Controllers\DatatableController@highcharts');
});

//Ajax
Route::group([], function() {
    Route::get('examples/ajax/custom_data_flat', 'App\Http\Controllers\DatatableController@custom_data_flat');
    Route::get('examples/ajax/custom_data_property', 'App\Http\Controllers\DatatableController@custom_data_property');
    Route::get('examples/ajax/deep', 'App\Http\Controllers\DatatableController@deep');
    Route::get('examples/ajax/defer_render', 'App\Http\Controllers\DatatableController@defer_render');
    Route::get('examples/ajax/null_data_source', 'App\Http\Controllers\DatatableController@null_data_source');
    Route::get('examples/ajax/objects', 'App\Http\Controllers\DatatableController@objects');
    Route::get('examples/ajax/objects_subarrays', 'App\Http\Controllers\DatatableController@objects_subarrays');
    Route::get('examples/ajax/orthogonal_data', 'App\Http\Controllers\DatatableController@orthogonal_data');
    Route::get('examples/ajax/simple', 'App\Http\Controllers\DatatableController@simple');
});

//Server-side
Route::group([], function() {
    Route::get('examples/server_side/custom_vars', 'App\Http\Controllers\DatatableController@custom_vars')->name('custom_vars');
    Route::get('examples/server_side/defer_loading', 'App\Http\Controllers\DatatableController@defer_loading')->name('defer_loading');
    Route::get('examples/server_side/ids', 'App\Http\Controllers\DatatableController@ids')->name('ids');
    Route::get('examples/server_side/jsonp', 'App\Http\Controllers\DatatableController@jsonp')->name('jsonp');
    Route::get('examples/server_side/object_data', 'App\Http\Controllers\DatatableController@object_data')->name('object_data');
    Route::get('examples/server_side/pipeline', 'App\Http\Controllers\DatatableController@pipeline')->name('pipeline');
    Route::get('examples/server_side/post', 'App\Http\Controllers\DatatableController@post')->name('post');
    Route::get('examples/server_side/return_search', 'App\Http\Controllers\DatatableController@return_search')->name('return_search');
    Route::get('examples/server_side/row_details', 'App\Http\Controllers\DatatableController@row_details_ss')->name('row_details_ss');
    Route::get('examples/server_side/select_rows', 'App\Http\Controllers\DatatableController@select_rows')->name('select_rows');
    Route::get('examples/server_side/simple', 'App\Http\Controllers\DatatableController@simple_ss')->name('simple_ss');
});

//plug_ins
Route::group([], function() {
    Route::get('examples/plug_ins/api', 'App\Http\Controllers\DatatableController@api');
    Route::get('examples/plug_ins/dom_sort', 'App\Http\Controllers\DatatableController@dom_sort');
    Route::get('examples/plug_ins/range_filtering', 'App\Http\Controllers\DatatableController@range_filtering');
    Route::get('examples/plug_ins/sorting_auto', 'App\Http\Controllers\DatatableController@sorting_auto');
    Route::get('examples/plug_ins/sorting_manual', 'App\Http\Controllers\DatatableController@sorting_manual');
});

require __DIR__.'/auth.php';