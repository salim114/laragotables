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

//features indexes

Route::get('features', function () {
    return view('features.index');
});

Route::get('features/basic_init', function () {
    return view('features.basic_init.index');
});
Route::get('features/advanced_init', function () {
    return view('features.advanced_init.index');
});
Route::get('features/non_jquery', function () {
    return view('features.non_jquery.index');
});
Route::get('features/styling', function () {
    return view('features.styling.index');
});
Route::get('features/data_sources', function () {
    return view('features.data_sources.index');
});
Route::get('features/api', function () {
    return view('features.api.index');
});
Route::get('features/ajax', function () {
    return view('features.ajax.index');
});
Route::get('features/server_side', function () {
    return view('features.server_side.index');
});
Route::get('features/plug_ins', function () {
    return view('features.plug_ins.index');
});

//extensions indexes

Route::get('extensions', function () {
    return view('extensions.index');
});

Route::get('extensions/autofill', function () {
    return view('extensions.autofill.index');
});

Route::get('extensions/buttons', function () {
    return view('extensions.buttons.index');
});

Route::get('extensions/colreorder', function () {
    return view('extensions.colreorder.index');
});

//Basic initialisation
Route::group([], function() {
    Route::get('features/basic_init/zero_configuration', 'App\Http\Controllers\DatatableController@zero_configuration');
    Route::get('features/basic_init/filter_only', 'App\Http\Controllers\DatatableController@filter_only');
    Route::get('features/basic_init/table_sorting', 'App\Http\Controllers\DatatableController@table_sorting');
    Route::get('features/basic_init/multi_col_sort', 'App\Http\Controllers\DatatableController@multi_col_sort');
    Route::get('features/basic_init/multiple_tables', 'App\Http\Controllers\DatatableController@multiple_tables');
    Route::get('features/basic_init/hidden_columns', 'App\Http\Controllers\DatatableController@hidden_columns');
    Route::get('features/basic_init/complex_header', 'App\Http\Controllers\DatatableController@complex_header');
    Route::get('features/basic_init/dom', 'App\Http\Controllers\DatatableController@dom');
    Route::get('features/basic_init/flexible_width', 'App\Http\Controllers\DatatableController@flexible_width');
    Route::get('features/basic_init/state_save', 'App\Http\Controllers\DatatableController@state_save');
    Route::get('features/basic_init/data_rendering', 'App\Http\Controllers\DatatableController@data_rendering');
    Route::get('features/basic_init/alt_pagination', 'App\Http\Controllers\DatatableController@alt_pagination');
    Route::get('features/basic_init/scroll_y', 'App\Http\Controllers\DatatableController@scroll_y');
    Route::get('features/basic_init/scroll_y_dynamic', 'App\Http\Controllers\DatatableController@scroll_y_dynamic');
    Route::get('features/basic_init/scroll_x', 'App\Http\Controllers\DatatableController@scroll_x');
    Route::get('features/basic_init/scroll_xy', 'App\Http\Controllers\DatatableController@scroll_xy');
    Route::get('features/basic_init/comma_decimal', 'App\Http\Controllers\DatatableController@comma_decimal');
    Route::get('features/basic_init/language', 'App\Http\Controllers\DatatableController@language');
    Route::get('features/basic_init/stocks', 'App\Http\Controllers\DatatableController@stocks');
}); 

//Advanced initialisation
Route::group([], function() {
    Route::get('features/advanced_init/column_render', 'App\Http\Controllers\DatatableController@column_render');
    Route::get('features/advanced_init/complex_header', 'App\Http\Controllers\DatatableController@complex_header_ai');
    Route::get('features/advanced_init/defaults', 'App\Http\Controllers\DatatableController@defaults');
    Route::get('features/advanced_init/dom_multiple_elements', 'App\Http\Controllers\DatatableController@dom_multiple_elements');
    Route::get('features/advanced_init/dom_toolbar', 'App\Http\Controllers\DatatableController@dom_toolbar');
    Route::get('features/advanced_init/dt_events', 'App\Http\Controllers\DatatableController@dt_events');
    Route::get('features/advanced_init/enter_search', 'App\Http\Controllers\DatatableController@enter_search');
    Route::get('features/advanced_init/events_live', 'App\Http\Controllers\DatatableController@events_live');
    Route::get('features/advanced_init/footer_callback', 'App\Http\Controllers\DatatableController@footer_callback');
    Route::get('features/advanced_init/html5_data_attributes', 'App\Http\Controllers\DatatableController@html5_data_attributes');
    Route::get('features/advanced_init/html5_data_options', 'App\Http\Controllers\DatatableController@html5_data_options');
    Route::get('features/advanced_init/language_file', 'App\Http\Controllers\DatatableController@language_file');
    Route::get('features/advanced_init/length_menu', 'App\Http\Controllers\DatatableController@length_menu');
    Route::get('features/advanced_init/object_dom_read', 'App\Http\Controllers\DatatableController@object_dom_read');
    Route::get('features/advanced_init/row_callback', 'App\Http\Controllers\DatatableController@row_callback');
    Route::get('features/advanced_init/row_grouping', 'App\Http\Controllers\DatatableController@row_grouping');
    Route::get('features/advanced_init/sort_direction_control', 'App\Http\Controllers\DatatableController@sort_direction_control');
});

//Non-jQuery initialisation
Route::group([], function() {
    Route::get('features/non_jquery/ajax', 'App\Http\Controllers\DatatableController@ajax');
    Route::get('features/non_jquery/dom_events', 'App\Http\Controllers\DatatableController@dom_events');
    Route::get('features/non_jquery/dt_events', 'App\Http\Controllers\DatatableController@dt_events_nj');
    Route::get('features/non_jquery/init', 'App\Http\Controllers\DatatableController@init');
    Route::get('features/non_jquery/options', 'App\Http\Controllers\DatatableController@options');
});

//Styling
Route::group([], function() {
    Route::get('features/styling/bootstrap', 'App\Http\Controllers\DatatableController@bootstrap');
    Route::get('features/styling/bootstrap4', 'App\Http\Controllers\DatatableController@bootstrap4');
    Route::get('features/styling/bootstrap5', 'App\Http\Controllers\DatatableController@bootstrap5');
    Route::get('features/styling/bulma', 'App\Http\Controllers\DatatableController@bulma');
    Route::get('features/styling/cell_border', 'App\Http\Controllers\DatatableController@cell_border');
    Route::get('features/styling/compact', 'App\Http\Controllers\DatatableController@compact');
    Route::get('features/styling/display', 'App\Http\Controllers\DatatableController@display');
    Route::get('features/styling/foundation', 'App\Http\Controllers\DatatableController@foundation');
    Route::get('features/styling/hover', 'App\Http\Controllers\DatatableController@hover');
    Route::get('features/styling/jqueryUI', 'App\Http\Controllers\DatatableController@jqueryUI');
    Route::get('features/styling/material', 'App\Http\Controllers\DatatableController@material');
    Route::get('features/styling/no_classes', 'App\Http\Controllers\DatatableController@no_classes');
    Route::get('features/styling/order_column', 'App\Http\Controllers\DatatableController@order_column');
    Route::get('features/styling/row_border', 'App\Http\Controllers\DatatableController@row_border');
    Route::get('features/styling/semanticui', 'App\Http\Controllers\DatatableController@semanticui');
    Route::get('features/styling/stripe', 'App\Http\Controllers\DatatableController@stripe');
    Route::get('features/styling/uikit', 'App\Http\Controllers\DatatableController@uikit');
});

//Data sources
Route::group([], function() {
    Route::get('features/data_sources/ajax', 'App\Http\Controllers\DatatableController@ajax_ds');
    Route::get('features/data_sources/dom', 'App\Http\Controllers\DatatableController@dom_ds');
    Route::get('features/data_sources/js_array', 'App\Http\Controllers\DatatableController@js_array');
    Route::get('features/data_sources/server_side', 'App\Http\Controllers\DatatableController@server_side')->name('server_side');
});

//API
Route::group([], function() {
    Route::get('features/api/add_row', 'App\Http\Controllers\DatatableController@add_row');
    Route::get('features/api/api_in_init', 'App\Http\Controllers\DatatableController@api_in_init');
    Route::get('features/api/counter_columns', 'App\Http\Controllers\DatatableController@counter_columns');
    Route::get('features/api/form', 'App\Http\Controllers\DatatableController@form');
    Route::get('features/api/highlight', 'App\Http\Controllers\DatatableController@highlight');
    Route::get('features/api/multi_filter', 'App\Http\Controllers\DatatableController@multi_filter');
    Route::get('features/api/multi_filter_select', 'App\Http\Controllers\DatatableController@multi_filter_select');
    Route::get('features/api/regex', 'App\Http\Controllers\DatatableController@regex');
    Route::get('features/api/row_details', 'App\Http\Controllers\DatatableController@row_details');
    Route::get('features/api/row_details_stateSave', 'App\Http\Controllers\DatatableController@row_details_stateSave');
    Route::get('features/api/select_row', 'App\Http\Controllers\DatatableController@select_row');
    Route::get('features/api/select_single_row', 'App\Http\Controllers\DatatableController@select_single_row');
    Route::get('features/api/show_hide', 'App\Http\Controllers\DatatableController@show_hide');
    Route::get('features/api/tabs_and_scrolling', 'App\Http\Controllers\DatatableController@tabs_and_scrolling');
    Route::get('features/api/highcharts', 'App\Http\Controllers\DatatableController@highcharts');
});

//Ajax
Route::group([], function() {
    Route::get('features/ajax/custom_data_flat', 'App\Http\Controllers\DatatableController@custom_data_flat');
    Route::get('features/ajax/custom_data_property', 'App\Http\Controllers\DatatableController@custom_data_property');
    Route::get('features/ajax/deep', 'App\Http\Controllers\DatatableController@deep');
    Route::get('features/ajax/defer_render', 'App\Http\Controllers\DatatableController@defer_render');
    Route::get('features/ajax/null_data_source', 'App\Http\Controllers\DatatableController@null_data_source');
    Route::get('features/ajax/objects', 'App\Http\Controllers\DatatableController@objects');
    Route::get('features/ajax/objects_subarrays', 'App\Http\Controllers\DatatableController@objects_subarrays');
    Route::get('features/ajax/orthogonal_data', 'App\Http\Controllers\DatatableController@orthogonal_data');
    Route::get('features/ajax/simple', 'App\Http\Controllers\DatatableController@simple');
});

//Server-side
Route::group([], function() {
    Route::get('features/server_side/custom_vars', 'App\Http\Controllers\DatatableController@custom_vars')->name('custom_vars');
    Route::get('features/server_side/defer_loading', 'App\Http\Controllers\DatatableController@defer_loading')->name('defer_loading');
    Route::get('features/server_side/ids', 'App\Http\Controllers\DatatableController@ids')->name('ids');
    Route::get('features/server_side/jsonp', 'App\Http\Controllers\DatatableController@jsonp')->name('jsonp');
    Route::get('features/server_side/object_data', 'App\Http\Controllers\DatatableController@object_data')->name('object_data');
    Route::get('features/server_side/pipeline', 'App\Http\Controllers\DatatableController@pipeline')->name('pipeline');
    Route::get('features/server_side/post', 'App\Http\Controllers\DatatableController@post')->name('post');
    Route::get('features/server_side/return_search', 'App\Http\Controllers\DatatableController@return_search')->name('return_search');
    Route::get('features/server_side/row_details', 'App\Http\Controllers\DatatableController@row_details_ss')->name('row_details_ss');
    Route::get('features/server_side/select_rows', 'App\Http\Controllers\DatatableController@select_rows')->name('select_rows');
    Route::get('features/server_side/simple', 'App\Http\Controllers\DatatableController@simple_ss')->name('simple_ss');
});

//plug_ins
Route::group([], function() {
    Route::get('features/plug_ins/api', 'App\Http\Controllers\DatatableController@api');
    Route::get('features/plug_ins/dom_sort', 'App\Http\Controllers\DatatableController@dom_sort');
    Route::get('features/plug_ins/range_filtering', 'App\Http\Controllers\DatatableController@range_filtering');
    Route::get('features/plug_ins/sorting_auto', 'App\Http\Controllers\DatatableController@sorting_auto');
    Route::get('features/plug_ins/sorting_manual', 'App\Http\Controllers\DatatableController@sorting_manual');
});

require __DIR__.'/auth.php';