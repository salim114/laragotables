<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Datatable;
use DataTables;

class DatatableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //Basic initialisation

    public function zero_configuration()
    {
        $datatables = Datatable::all();
        return view('examples.basic_init.zero_configuration', compact('datatables'));       
    }

    public function filter_only()
    {
        $datatables = Datatable::all();
        return view('examples.basic_init.filter_only', compact('datatables'));       
    }

    public function table_sorting()
    {
        $datatables = Datatable::all();
        return view('examples.basic_init.table_sorting', compact('datatables'));       
    }

    public function multi_col_sort()
    {
        $datatables = Datatable::all();
        return view('examples.basic_init.multi_col_sort', compact('datatables'));       
    }

    public function multiple_tables()
    {
        $datatables = Datatable::all();
        return view('examples.basic_init.multiple_tables', compact('datatables'));       
    }

    public function hidden_columns()
    {
        $datatables = Datatable::all();
        return view('examples.basic_init.hidden_columns', compact('datatables'));       
    }

    public function complex_header()
    {
        $datatables = Datatable::all();
        return view('examples.basic_init.complex_header', compact('datatables'));       
    }

    public function dom()
    {
        $datatables = Datatable::all();
        return view('examples.basic_init.dom', compact('datatables'));       
    }

    public function flexible_width()
    {
        $datatables = Datatable::all();
        return view('examples.basic_init.flexible_width', compact('datatables'));       
    }

    public function state_save()
    {
        $datatables = Datatable::all();
        return view('examples.basic_init.state_save', compact('datatables'));       
    }

    public function data_rendering()
    {
        $datatables = Datatable::all();
        return view('examples.basic_init.data_rendering', compact('datatables'));       
    }

    public function alt_pagination()
    {
        $datatables = Datatable::all();
        return view('examples.basic_init.alt_pagination', compact('datatables'));       
    }

    public function scroll_y()
    {
        $datatables = Datatable::all();
        return view('examples.basic_init.scroll_y', compact('datatables'));       
    }

    public function scroll_y_dynamic()
    {
        $datatables = Datatable::all();
        return view('examples.basic_init.scroll_y_dynamic', compact('datatables'));       
    }

    public function scroll_x()
    {
        $datatables = Datatable::all();
        return view('examples.basic_init.scroll_x', compact('datatables'));       
    }

    public function scroll_xy()
    {
        $datatables = Datatable::all();
        return view('examples.basic_init.scroll_xy', compact('datatables'));       
    }

    public function comma_decimal()
    {
        $datatables = Datatable::all();
        return view('examples.basic_init.comma_decimal', compact('datatables'));       
    }

    public function language()
    {
        $datatables = Datatable::all();
        return view('examples.basic_init.language', compact('datatables'));       
    }

    public function stocks()
    {
        $datatables = Datatable::all();
        return view('examples.basic_init.stocks', compact('datatables'));       
    }
    
    //Advanced initialisation

        public function column_render()
    {
        $datatables = Datatable::all();
        return view('examples.advanced_init.column_render', compact('datatables'));       
    }

    public function complex_header_ai()
    {
        $datatables = Datatable::all();
        return view('examples.advanced_init.complex_header', compact('datatables'));       
    }

    public function defaults()
    {
        $datatables = Datatable::all();
        return view('examples.advanced_init.defaults', compact('datatables'));       
    }

    public function dom_multiple_elements()
    {
        $datatables = Datatable::all();
        return view('examples.advanced_init.dom_multiple_elements', compact('datatables'));       
    }

    public function dom_toolbar()
    {
        $datatables = Datatable::all();
        return view('examples.advanced_init.dom_toolbar', compact('datatables'));       
    }

    public function dt_events()
    {
        $datatables = Datatable::all();
        return view('examples.advanced_init.dt_events', compact('datatables'));       
    }

    public function enter_search()
    {
        $datatables = Datatable::all();
        return view('examples.advanced_init.enter_search', compact('datatables'));       
    }

    public function events_live()
    {
        $datatables = Datatable::all();
        return view('examples.advanced_init.events_live', compact('datatables'));       
    }

    public function footer_callback()
    {
        $datatables = Datatable::all();
        return view('examples.advanced_init.footer_callback', compact('datatables'));       
    }

    public function html5_data_attributes()
    {
        $datatables = Datatable::all();
        return view('examples.advanced_init.html5_data_attributes', compact('datatables'));       
    }

    public function html5_data_options()
    {
        $datatables = Datatable::all();
        return view('examples.advanced_init.html5_data_options', compact('datatables'));       
    }

    public function language_file()
    {
        $datatables = Datatable::all();
        return view('examples.advanced_init.language_file', compact('datatables'));       
    }

    public function length_menu()
    {
        $datatables = Datatable::all();
        return view('examples.advanced_init.length_menu', compact('datatables'));       
    }

    public function object_dom_read()
    {
        $datatables = Datatable::all();
        return view('examples.advanced_init.object_dom_read', compact('datatables'));       
    }

    public function row_callback()
    {
        $datatables = Datatable::all();
        return view('examples.advanced_init.row_callback', compact('datatables'));       
    }

    public function row_grouping()
    {
        $datatables = Datatable::all();
        return view('examples.advanced_init.row_grouping', compact('datatables'));       
    }

    public function sort_direction_control()
    {
        $datatables = Datatable::all();
        return view('examples.advanced_init.sort_direction_control', compact('datatables'));       
    }

    //Non-jQuery initialisation

        public function ajax()
    {
        $datatables = Datatable::all();
        return view('examples.non_jquery.ajax', compact('datatables'));       
    }

    public function dom_events()
    {
        $datatables = Datatable::all();
        return view('examples.non_jquery.dom_events', compact('datatables'));       
    }

    public function dt_events_nj()
    {
        $datatables = Datatable::all();
        return view('examples.non_jquery.dt_events', compact('datatables'));       
    }

    public function init()
    {
        $datatables = Datatable::all();
        return view('examples.non_jquery.init', compact('datatables'));       
    }

    public function options()
    {
        $datatables = Datatable::all();
        return view('examples.non_jquery.options', compact('datatables'));       
    }

    //Styling

    public function bootstrap()
    {
        $datatables = Datatable::all();
        return view('examples.styling.bootstrap', compact('datatables'));       
    }

    public function bootstrap4()
    {
        $datatables = Datatable::all();
        return view('examples.styling.bootstrap4', compact('datatables'));       
    }

    public function bootstrap5()
    {
        $datatables = Datatable::all();
        return view('examples.styling.bootstrap5', compact('datatables'));       
    }

    public function bulma()
    {
        $datatables = Datatable::all();
        return view('examples.styling.bulma', compact('datatables'));       
    }

    public function cell_border()
    {
        $datatables = Datatable::all();
        return view('examples.styling.cell_border', compact('datatables'));       
    }

    public function compact()
    {
        $datatables = Datatable::all();
        return view('examples.styling.compact', compact('datatables'));       
    }

    public function display()
    {
        $datatables = Datatable::all();
        return view('examples.styling.display', compact('datatables'));       
    }

    public function foundation()
    {
        $datatables = Datatable::all();
        return view('examples.styling.foundation', compact('datatables'));       
    }

    public function hover()
    {
        $datatables = Datatable::all();
        return view('examples.styling.hover', compact('datatables'));       
    }

    public function jqueryUI()
    {
        $datatables = Datatable::all();
        return view('examples.styling.jqueryUI', compact('datatables'));       
    }

    public function material()
    {
        $datatables = Datatable::all();
        return view('examples.styling.material', compact('datatables'));       
    }

    public function no_classes()
    {
        $datatables = Datatable::all();
        return view('examples.styling.no_classes', compact('datatables'));       
    }

    public function order_column()
    {
        $datatables = Datatable::all();
        return view('examples.styling.order_column', compact('datatables'));       
    }

    public function row_border()
    {
        $datatables = Datatable::all();
        return view('examples.styling.row_border', compact('datatables'));       
    }

    public function semanticui()
    {
        $datatables = Datatable::all();
        return view('examples.styling.semanticui', compact('datatables'));       
    }

    public function stripe()
    {
        $datatables = Datatable::all();
        return view('examples.styling.stripe', compact('datatables'));       
    }

    public function uikit()
    {
        $datatables = Datatable::all();
        return view('examples.styling.uikit', compact('datatables'));       
    }

    //Data sources

    public function ajax_ds()
    {
        $datatables = Datatable::all();
        return view('examples.data_sources.ajax', compact('datatables'));       
    }

    public function dom_ds()
    {
        $datatables = Datatable::all();
        return view('examples.data_sources.dom', compact('datatables'));       
    }

    public function js_array()
    {
        $datatables = Datatable::all();
        return view('examples.data_sources.js_array', compact('datatables'));       
    }

    public function server_side(Request $request)
    {
         if ($request->ajax()) {
            $data = Datatable::get();
            return Datatables::of($data)
                ->make(true);
        }

        return view('examples.data_sources.server_side');
    }      
    


    //API

    public function add_row()
    {
        $datatables = Datatable::all();
        return view('examples.api.add_row', compact('datatables'));       
    }

    public function api_in_init()
    {
        $datatables = Datatable::all();
        return view('examples.api.api_in_init', compact('datatables'));       
    }

    public function counter_columns()
    {
        $datatables = Datatable::all();
        return view('examples.api.counter_columns', compact('datatables'));       
    }

    public function form()
    {
        $datatables = Datatable::all();
        return view('examples.api.form', compact('datatables'));       
    }

    public function highlight()
    {
        $datatables = Datatable::all();
        return view('examples.api.highlight', compact('datatables'));       
    }

    public function multi_filter()
    {
        $datatables = Datatable::all();
        return view('examples.api.multi_filter', compact('datatables'));       
    }

    public function multi_filter_select()
    {
        $datatables = Datatable::all();
        return view('examples.api.multi_filter_select', compact('datatables'));       
    }

    public function regex()
    {
        $datatables = Datatable::all();
        return view('examples.api.regex', compact('datatables'));       
    }

    public function row_details()
    {
        $datatables = Datatable::all();
        return view('examples.api.row_details', compact('datatables'));       
    }
    public function row_details_stateSave()
    {
        $datatables = Datatable::all();
        return view('examples.api.row_details_stateSave', compact('datatables'));       
    }

    public function select_row()
    {
        $datatables = Datatable::all();
        return view('examples.api.select_row', compact('datatables'));       
    }

    public function select_single_row()
    {
        $datatables = Datatable::all();
        return view('examples.api.select_single_row', compact('datatables'));       
    }

    public function show_hide()
    {
        $datatables = Datatable::all();
        return view('examples.api.show_hide', compact('datatables'));       
    }

    public function tabs_and_scrolling()
    {
        $datatables = Datatable::all();
        return view('examples.api.tabs_and_scrolling', compact('datatables'));       
    }
    public function highcharts()
    {
        $datatables = Datatable::all();
        return view('examples.api.highcharts', compact('datatables'));       
    }

    //Ajax

    public function custom_data_flat()
    {
        $datatables = Datatable::all();
        return view('examples.ajax.custom_data_flat', compact('datatables'));       
    }

    public function custom_data_property()
    {
        $datatables = Datatable::all();
        return view('examples.ajax.custom_data_property', compact('datatables'));       
    }

    public function deep()
    {
        $datatables = Datatable::all();
        return view('examples.ajax.deep', compact('datatables'));       
    }

    public function defer_render()
    {
        $datatables = Datatable::all();
        return view('examples.ajax.defer_render', compact('datatables'));       
    }

    public function null_data_source()
    {
        $datatables = Datatable::all();
        return view('examples.ajax.null_data_source', compact('datatables'));       
    }

    public function objects()
    {
       $datatables = Datatable::all();
        return view('examples.ajax.objects', compact('datatables'));               
    }

    public function objects_subarrays()
    {
        $datatables = Datatable::all();
        return view('examples.ajax.objects_subarrays', compact('datatables'));       
    }

    public function orthogonal_data()
    {
        $datatables = Datatable::all();
        return view('examples.ajax.orthogonal_data', compact('datatables'));       
    }

    public function simple()
    {
        $datatables = Datatable::all();
        return view('examples.ajax.simple', compact('datatables'));       
    }

    //Server-side

    public function custom_vars(Request $request)
    {
         if ($request->ajax()) {
            $data = Datatable::get();
            return Datatables::of($data)
                ->make(true);
        }

        return view('examples.server_side.custom_vars');
    }    

    public function defer_loading(Request $request)
    {
         if ($request->ajax()) {
            $data = Datatable::get();
            return Datatables::of($data)
                ->make(true);
        }

        return view('examples.server_side.defer_loading');
    }  

    public function ids(Request $request)
    {
         if ($request->ajax()) {
            $data = Datatable::get();
            return Datatables::of($data)
                ->make(true);
        }

        return view('examples.server_side.ids');
    }  

    public function jsonp(Request $request)
    {
         if ($request->ajax()) {
            $data = Datatable::get();
            return Datatables::of($data)
            ->make(true);
        }

        return view('examples.server_side.jsonp');
    } 

    public function object_data(Request $request)
    {
         if ($request->ajax()) {
            $data = Datatable::get();
            return Datatables::of($data)
                ->make(true);
        }

        return view('examples.server_side.object_data');
    }         

    public function pipeline(Request $request)
    {
         if ($request->ajax()) {
            $data = Datatable::get();
            return Datatables::of($data)
                ->make(true);
        }

        return view('examples.server_side.pipeline');
    }   

    public function post(Request $request)
    {
         if ($request->ajax()) {
            $data = Datatable::get();
            return Datatables::of($data)
                ->make(true);
        }

        return view('examples.server_side.post');
    }  

    public function return_search(Request $request)
    {
         if ($request->ajax()) {
            $data = Datatable::get();
            return Datatables::of($data)
                ->make(true);
        }

        return view('examples.server_side.return_search');
    }  

    public function row_details_ss(Request $request)
    {
         if ($request->ajax()) {
            $data = Datatable::get();
            return Datatables::of($data)
            ->make(true);
        }

        return view('examples.server_side.row_details');
    } 

    public function select_rows(Request $request)
    {
         if ($request->ajax()) {
            $data = Datatable::get();
            return Datatables::of($data)
            ->make(true);
        }

        return view('examples.server_side.select_rows');
    } 

    public function simple_ss(Request $request)
    {
         if ($request->ajax()) {
            $data = Datatable::get();
            return Datatables::of($data)
                ->make(true);
        }

        return view('examples.server_side.simple');
    }   

    //plug_ins

    public function api()
    {
        $datatables = Datatable::all();
        return view('examples.plug_ins.api', compact('datatables'));       
    }

    public function dom_sort()
    {
        $datatables = Datatable::all();
        return view('examples.plug_ins.dom_sort', compact('datatables'));       
    }

    public function range_filtering()
    {
        $datatables = Datatable::all();
        return view('examples.plug_ins.range_filtering', compact('datatables'));       
    }

    public function sorting_auto()
    {
        $datatables = Datatable::all();
        return view('examples.plug_ins.sorting_auto', compact('datatables'));       
    }

    public function sorting_manual()
    {
        $datatables = Datatable::all();
        return view('examples.plug_ins.sorting_manual', compact('datatables'));       
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
