

@extends('ticket::layouts.index')
@section('title','Tickets Index Page')
@section('content')

    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        <!-- begin:: Content Head -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title">
                        Tickets
                    </h3>
                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                    <div class="kt-subheader__group" id="kt_subheader_search">
                    <span class="kt-subheader__desc" id="kt_subheader_total">
                     Total </span>

                    </div>

                    <!-- BreadCrumbs-->
                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                    <div class="kt-subheader__breadcrumbs">
                        <a href="{{route('dashboard')}}" class="kt-subheader__breadcrumbs-home"><i
                                class="flaticon2-shelter"></i></a>

                        <span class="kt-subheader__breadcrumbs-separator"></span>
                        <!-- <a href="" class="kt-subheader__breadcrumbs-link">
                            Classic </a> -->

                        <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Drivers</span>
                    </div>
                    <!-- BreadCrumsbs end -->

                </div>
                <div class="kt-subheader__toolbar">

                    <button type="button" class="btn btn-outline-brand btn-icon" id="reloadtable"><i
                            class="fa fa-undo"></i></button>
                    <!-- <button type="button" class="btn btn-info btn-icon btn-circle"><i class="fa fa-undo"></i></button> -->

                    <div class="dropdown dropdown-inline">
                        <button type="button" class="btn btn-brand btn-sm" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                            Tools
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="kt-nav">
                                <li class="kt-nav__section kt-nav__section--first">
                                    <span class="kt-nav__section-text">Export Tools</span>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link" id="export_print">
                                        <i class="kt-nav__link-icon la la-print"></i>
                                        <span class="kt-nav__link-text">Print</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link" id="export_copy">
                                        <i class="kt-nav__link-icon la la-copy"></i>
                                        <span class="kt-nav__link-text">Copy</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link" id="export_excel">
                                        <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                        <span class="kt-nav__link-text">Excel</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link" id="export_csv">
                                        <i class="kt-nav__link-icon la la-file-text-o"></i>
                                        <span class="kt-nav__link-text">CSV</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link" id="export_pdf">
                                        <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                        <span class="kt-nav__link-text">PDF</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- end:: Content Head -->
        <!-- begin:: Content -->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <!--begin::Portlet-->
            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__body">
                    <!--begin: Datatable -->
                    <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_drivers">
                        <thead>
                        <tr>
                            <th>Driver Name</th>
                            <th>Email</th>
                            <th class="nosort">Actions</th>
                        </tr>
                        </thead>
                    </table>
                    <!--end: Datatable -->
                </div>
            </div>
            <!--end::Portlet-->
        </div>
        <!-- end:: Content -->




@endsection
@section('scripts')
@endsection

