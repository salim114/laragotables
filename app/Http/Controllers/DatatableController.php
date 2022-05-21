<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datatable;
use DataTables;
use Auth;

class DatatableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Features (examples)
    //Basic initialisation

    public function zero_configuration()
    {
        $datatables = Datatable::all();
        return view('features.basic_init.zero_configuration', compact('datatables'));       
    }

    public function filter_only()
    {
        $datatables = Datatable::all();
        return view('features.basic_init.filter_only', compact('datatables'));       
    }

    public function table_sorting()
    {
        $datatables = Datatable::all();
        return view('features.basic_init.table_sorting', compact('datatables'));       
    }

    public function multi_col_sort()
    {
        $datatables = Datatable::all();
        return view('features.basic_init.multi_col_sort', compact('datatables'));       
    }

    public function multiple_tables()
    {
        $datatables = Datatable::all();
        return view('features.basic_init.multiple_tables', compact('datatables'));       
    }

    public function hidden_columns()
    {
        $datatables = Datatable::all();
        return view('features.basic_init.hidden_columns', compact('datatables'));       
    }

    public function complex_header()
    {
        $datatables = Datatable::all();
        return view('features.basic_init.complex_header', compact('datatables'));       
    }

    public function dom()
    {
        $datatables = Datatable::all();
        return view('features.basic_init.dom', compact('datatables'));       
    }

    public function flexible_width()
    {
        $datatables = Datatable::all();
        return view('features.basic_init.flexible_width', compact('datatables'));       
    }

    public function state_save()
    {
        $datatables = Datatable::all();
        return view('features.basic_init.state_save', compact('datatables'));       
    }

    public function data_rendering()
    {
        return view('features.basic_init.data_rendering');       
    }

    public function alt_pagination()
    {
        $datatables = Datatable::all();
        return view('features.basic_init.alt_pagination', compact('datatables'));       
    }

    public function scroll_y()
    {
        $datatables = Datatable::all();
        return view('features.basic_init.scroll_y', compact('datatables'));       
    }

    public function scroll_y_dynamic()
    {
        $datatables = Datatable::all();
        return view('features.basic_init.scroll_y_dynamic', compact('datatables'));       
    }

    public function scroll_x()
    {
        $datatables = Datatable::all();
        return view('features.basic_init.scroll_x', compact('datatables'));       
    }

    public function scroll_xy()
    {
        $datatables = Datatable::all();
        return view('features.basic_init.scroll_xy', compact('datatables'));       
    }

    public function comma_decimal()
    {
        $datatables = Datatable::all();
        return view('features.basic_init.comma_decimal', compact('datatables'));       
    }

    public function language()
    {
        $datatables = Datatable::all();
        return view('features.basic_init.language', compact('datatables'));       
    }

    public function stocks()
    {
        return view('features.basic_init.stocks');       
    }
    
    //Advanced initialisation

    public function column_render()
    {
        $datatables = Datatable::all();
        return view('features.advanced_init.column_render', compact('datatables'));       
    }

    public function complex_header_ai()
    {
        $datatables = Datatable::all();
        return view('features.advanced_init.complex_header', compact('datatables'));       
    }

    public function defaults()
    {
        $datatables = Datatable::all();
        return view('features.advanced_init.defaults', compact('datatables'));       
    }

    public function dom_multiple_elements()
    {
        $datatables = Datatable::all();
        return view('features.advanced_init.dom_multiple_elements', compact('datatables'));       
    }

    public function dom_toolbar()
    {
        $datatables = Datatable::all();
        return view('features.advanced_init.dom_toolbar', compact('datatables'));       
    }

    public function dt_events()
    {
        $datatables = Datatable::all();
        return view('features.advanced_init.dt_events', compact('datatables'));       
    }

    public function enter_search()
    {
        $datatables = Datatable::all();
        return view('features.advanced_init.enter_search', compact('datatables'));       
    }

    public function events_live()
    {
        $datatables = Datatable::all();
        return view('features.advanced_init.events_live', compact('datatables'));       
    }

    public function footer_callback()
    {
        $datatables = Datatable::all();
        return view('features.advanced_init.footer_callback', compact('datatables'));       
    }

    public function html5_data_attributes()
    {
        $datatables = Datatable::all();
        return view('features.advanced_init.html5_data_attributes', compact('datatables'));       
    }

    public function html5_data_options()
    {
        $datatables = Datatable::all();
        return view('features.advanced_init.html5_data_options', compact('datatables'));       
    }

    public function language_file()
    {
        $datatables = Datatable::all();
        return view('features.advanced_init.language_file', compact('datatables'));       
    }

    public function length_menu()
    {
        $datatables = Datatable::all();
        return view('features.advanced_init.length_menu', compact('datatables'));       
    }

    public function object_dom_read()
    {
        $datatables = Datatable::all();
        return view('features.advanced_init.object_dom_read', compact('datatables'));       
    }

    public function row_callback()
    {
        $datatables = Datatable::all();
        return view('features.advanced_init.row_callback', compact('datatables'));       
    }

    public function row_grouping()
    {
        $datatables = Datatable::all();
        return view('features.advanced_init.row_grouping', compact('datatables'));       
    }

    public function sort_direction_control()
    {
        $datatables = Datatable::all();
        return view('features.advanced_init.sort_direction_control', compact('datatables'));       
    }

    //Non-jQuery initialisation

        public function ajax()
    {
        return view('features.non_jquery.ajax');       
    }

    public function dom_events()
    {
        $datatables = Datatable::all();
        return view('features.non_jquery.dom_events', compact('datatables'));       
    }

    public function dt_events_nj()
    {
        $datatables = Datatable::all();
        return view('features.non_jquery.dt_events', compact('datatables'));       
    }

    public function init()
    {
        $datatables = Datatable::all();
        return view('features.non_jquery.init', compact('datatables'));       
    }

    public function options()
    {
        $datatables = Datatable::all();
        return view('features.non_jquery.options', compact('datatables'));       
    }

    //Styling

    public function bootstrap()
    {
        $datatables = Datatable::all();
        return view('features.styling.bootstrap', compact('datatables'));       
    }

    public function bootstrap4()
    {
        $datatables = Datatable::all();
        return view('features.styling.bootstrap4', compact('datatables'));       
    }

    public function bootstrap5()
    {
        $datatables = Datatable::all();
        return view('features.styling.bootstrap5', compact('datatables'));       
    }

    public function bulma()
    {
        $datatables = Datatable::all();
        return view('features.styling.bulma', compact('datatables'));       
    }

    public function cell_border()
    {
        $datatables = Datatable::all();
        return view('features.styling.cell_border', compact('datatables'));       
    }

    public function compact()
    {
        $datatables = Datatable::all();
        return view('features.styling.compact', compact('datatables'));       
    }

    public function display()
    {
        $datatables = Datatable::all();
        return view('features.styling.display', compact('datatables'));       
    }

    public function foundation()
    {
        $datatables = Datatable::all();
        return view('features.styling.foundation', compact('datatables'));       
    }

    public function hover()
    {
        $datatables = Datatable::all();
        return view('features.styling.hover', compact('datatables'));       
    }

    public function jqueryUI()
    {
        $datatables = Datatable::all();
        return view('features.styling.jqueryUI', compact('datatables'));       
    }

    public function material()
    {
        $datatables = Datatable::all();
        return view('features.styling.material', compact('datatables'));       
    }

    public function no_classes()
    {
        $datatables = Datatable::all();
        return view('features.styling.no_classes', compact('datatables'));       
    }

    public function order_column()
    {
        $datatables = Datatable::all();
        return view('features.styling.order_column', compact('datatables'));       
    }

    public function row_border()
    {
        $datatables = Datatable::all();
        return view('features.styling.row_border', compact('datatables'));       
    }

    public function semanticui()
    {
        $datatables = Datatable::all();
        return view('features.styling.semanticui', compact('datatables'));       
    }

    public function stripe()
    {
        $datatables = Datatable::all();
        return view('features.styling.stripe', compact('datatables'));       
    }

    public function uikit()
    {
        $datatables = Datatable::all();
        return view('features.styling.uikit', compact('datatables'));       
    }

    //Data sources

    public function ajax_ds()
    {
        return view('features.data_sources.ajax');       
    }

    public function dom_ds()
    {
        $datatables = Datatable::all();
        return view('features.data_sources.dom', compact('datatables'));       
    }

    public function js_array()
    {
        return view('features.data_sources.js_array');       
    }

    public function server_side(Request $request)
    {
         if ($request->ajax()) {
            if(Auth::id() == 2){
                $datatables = Datatable::where('office', "=", "Tokyo");
            }else{
                $datatables = Datatable::All();
            }
            
            return Datatables::of($datatables)
                ->make(true);
        }

        return view('features.data_sources.server_side');
    }      
    


    //API

    public function add_row()
    {
        $datatables = Datatable::all();
        return view('features.api.add_row', compact('datatables'));       
    }

    public function api_in_init()
    {
        $datatables = Datatable::all();
        return view('features.api.api_in_init', compact('datatables'));       
    }

    public function counter_columns()
    {
        $datatables = Datatable::all();
        return view('features.api.counter_columns', compact('datatables'));       
    }

    public function form()
    {
        $datatables = Datatable::all();
        return view('features.api.form', compact('datatables'));       
    }

    public function highlight()
    {
        $datatables = Datatable::all();
        return view('features.api.highlight', compact('datatables'));       
    }

    public function multi_filter()
    {
        $datatables = Datatable::all();
        return view('features.api.multi_filter', compact('datatables'));       
    }

    public function multi_filter_select()
    {
        $datatables = Datatable::all();
        return view('features.api.multi_filter_select', compact('datatables'));       
    }

    public function regex()
    {
        $datatables = Datatable::all();
        return view('features.api.regex', compact('datatables'));       
    }

    public function row_details()
    {
        return view('features.api.row_details');       
    }
    public function row_details_stateSave()
    {
        return view('features.api.row_details_stateSave');       
    }

    public function select_row()
    {
        $datatables = Datatable::all();
        return view('features.api.select_row', compact('datatables'));       
    }

    public function select_single_row()
    {
        $datatables = Datatable::all();
        return view('features.api.select_single_row', compact('datatables'));       
    }

    public function show_hide()
    {
        $datatables = Datatable::all();
        return view('features.api.show_hide', compact('datatables'));       
    }

    public function tabs_and_scrolling()
    {
        return view('features.api.tabs_and_scrolling');       
    }
    public function highcharts()
    {
        $datatables = Datatable::all();
        return view('features.api.highcharts', compact('datatables'));       
    }

    //Ajax

    public function custom_data_flat()
    {
        return view('features.ajax.custom_data_flat');       
    }

    public function custom_data_property()
    {
        return view('features.ajax.custom_data_property');       
    }

    public function deep()
    {
        return view('features.ajax.deep');       
    }

    public function defer_render()
    {
        return view('features.ajax.defer_render');       
    }

    public function null_data_source()
    {
        return view('features.ajax.null_data_source');       
    }

    public function objects()
    {
        return view('features.ajax.objects');               
    }

    public function objects_subarrays()
    {
        return view('features.ajax.objects_subarrays');       
    }

    public function orthogonal_data()
    {
        return view('features.ajax.orthogonal_data');       
    }

    public function simple()
    {
        return view('features.ajax.simple');       
    }

    //Server_side

    public function custom_vars(Request $request)
    {
         if ($request->ajax()) {
            $datatables = Datatable::all();
            return Datatables::of($datatables)
                ->make(true);
        }

        return view('features.server_side.custom_vars');
    }    

    public function defer_loading(Request $request)
    {
         if ($request->ajax()) {
            $datatables = Datatable::all();
            return Datatables::of($datatables)
                ->make(true);
        }

        return view('features.server_side.defer_loading');
    }  

    public function ids(Request $request)
    {
         if ($request->ajax()) {
            $datatables = Datatable::all();
            return Datatables::of($datatables)
                ->make(true);
        }

        return view('features.server_side.ids');
    }  

    public function jsonp(Request $request)
    {
         if ($request->ajax()) {
            $datatables = Datatable::all();
            return Datatables::of($datatables)
            ->make(true);
        }

        return view('features.server_side.jsonp');
    } 

    public function object_data(Request $request)
    {
         if ($request->ajax()) {
            $datatables = Datatable::all();
            return Datatables::of($datatables)
                ->make(true);
        }

        return view('features.server_side.object_data');
    }         

    public function pipeline(Request $request)
    {
         if ($request->ajax()) {
            $datatables = Datatable::all();
            return Datatables::of($datatables)
                ->make(true);
        }

        return view('features.server_side.pipeline');
    }   

    public function post(Request $request)
    {
         if ($request->ajax()) {
            $datatables = Datatable::all();
            return Datatables::of($datatables)
                ->make(true);
        }

        return view('features.server_side.post');
    }  

    public function return_search(Request $request)
    {
         if ($request->ajax()) {
            $datatables = Datatable::all();
            return Datatables::of($datatables)
                ->make(true);
        }

        return view('features.server_side.return_search');
    }  

    public function row_details_ss(Request $request)
    {
         if ($request->ajax()) {
            $datatables = Datatable::all();
            return Datatables::of($datatables)
            ->make(true);
        }

        return view('features.server_side.row_details');
    } 

    public function select_rows(Request $request)
    {
         if ($request->ajax()) {
            $datatables = Datatable::all();
            return Datatables::of($datatables)
            ->make(true);
        }

        return view('features.server_side.select_rows');
    } 

    public function simple_ss(Request $request)
    {
         if ($request->ajax()) {
            $datatables = Datatable::all();
            return Datatables::of($datatables)
                ->make(true);
        }

        return view('features.server_side.simple');
    }   

    //plug_ins

    public function api()
    {
        $datatables = Datatable::all();
        return view('features.plug_ins.api', compact('datatables'));       
    }

    public function dom_sort()
    {
        $datatables = Datatable::all();
        return view('features.plug_ins.dom_sort', compact('datatables'));       
    }

    public function range_filtering()
    {
        $datatables = Datatable::all();
        return view('features.plug_ins.range_filtering', compact('datatables'));       
    }

    public function sorting_auto()
    {
        $datatables = Datatable::all();
        return view('features.plug_ins.sorting_auto', compact('datatables'));       
    }

    public function sorting_manual()
    {
        $datatables = Datatable::all();
        return view('features.plug_ins.sorting_manual', compact('datatables'));       
    }

    //Extensions
    //AutoFill

    public function alwaysAsk()
    {
        $datatables = Datatable::all();
        return view('extensions.autofill.initialisation.alwaysAsk', compact('datatables'));       
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
