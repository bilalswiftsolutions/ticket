@extends('ticket::layouts.index')
@section('title','Tickets Index Page')
@section('content')

    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Subheader -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title">
                        Tickets
                    </h3>
                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                    <div class="kt-subheader__group" id="kt_subheader_search">
                    <span class="kt-subheader__desc" id="kt_subheader_total">
                      {{$tickets->count()}}  Total </span>

                    </div>

                    <!-- BreadCrumbs-->
                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                    <div class="kt-subheader__breadcrumbs">
                        <a href="{{route('dashboard')}}" class="kt-subheader__breadcrumbs-home"><i
                                class="flaticon2-shelter"></i></a>

                        <span class="kt-subheader__breadcrumbs-separator"></span>
                        <!-- <a href="" class="kt-subheader__breadcrumbs-link">
                                Classic </a> -->

                        <span
                            class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Tickets</span>
                    </div>
                    <!-- BreadCrumsbs end -->

                </div>

            </div>
        </div>

        <!-- end:: Subheader -->

        <!-- begin:: Content -->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

            <!--Begin::Inbox-->
            <div class="kt-grid kt-grid--desktop kt-grid--ver-desktop  kt-inbox" id="kt_inbox">

                <!--Begin::Aside Mobile Toggle-->
                <button class="kt-inbox__aside-close" id="kt_inbox_aside_close">
                    <i class="la la-close"></i>
                </button>

                <!--End:: Aside Mobile Toggle-->

                <!--Begin:: Inbox Aside-->
            @include('ticket::partials.tickets.ticket_sidebar')
            <!--End::Aside-->

                <!--Begin:: Inbox List-->
            @include('ticket::partials.tickets.ticket_list')
            <!--End:: Inbox List-->


                <!--Begin:: Inbox View-->
            @include('ticket::partials.tickets.ticket_inbox')
            <!--End:: Inbox View-->
            </div>

            <!--End::Inbox-->

            <!--Begin:: Model-->
            {{-- Modal --}}

            <div class="modal fade" id="kt_create_ticket" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Create Ticket</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <form class="kt-form kt-form--label-right" action="{{route('tickets.store')}}" method="post"
                              id="kt_form_ticket">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group form-group-last row">

                                    <div class="col-lg-12 form-group-sub">
                                        <label class="form-control-label">Subject</label>
                                        <input type="text" name="subject" class="form-control"
                                               placeholder="Enter Subject" maxlength="65" required>
                                    </div>
                                </div>
                                <div class="form-group form-group-last row">
                                    <div class="col-lg-6 form-group-sub">
                                        <label class="form-control-label">Type</label>
                                        <select class="form-control kt-selectpicker" name="type_id"
                                                data-live-search="true" required>
                                            <option value="0">Question</option>
                                            <option value="1">Incident</option>
                                            <option value="2">Problem</option>
                                            <option value="3">Task</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-6 form-group-sub">
                                        <label class="form-control-label">Priority</label>
                                        <select class="form-control kt-selectpicker" name="priority"
                                                data-live-search="true" required>
                                            <option value="0">Low</option>
                                            <option value="1">Normal</option>
                                            <option value="2">High</option>
                                            <option value="3">Urgent</option>
                                        </select>
                                    </div>

                                </div>

                            </div>

                            <div class="modal-footer">
                                <div class="kt-form__actions">

                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Add</button>

                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!-- end:: Content -->
    </div>


@endsection
@section('scripts')
    <script>
        filteredTickets("unsolved");

        function filteredTickets(filter) {
            const url = '/tickets/filtered_tickets/' + filter;
            $.ajax({
                url: url, success: function (tickets) {
                    $('#list_section').empty();
                    if (!$.trim(tickets)) {
                        $('#list_section').append('<div class="kt-inbox__items" data-type="inbox"><div class="kt-inbox__item kt-inbox__item--unread" data-id="1" data-type="inbox"><h4>Nothing Found</h4></div></div>');
                    } else {
                        $.each(tickets, function (index, ticket) {

                            $('#list_section').append('<div class="kt-inbox__items" data-type="inbox">\n' +
                                '\n' +
                                '            <div class="kt-inbox__item kt-inbox__item--unread" data-id="1" data-type="inbox">\n' +
                                '                <div class="kt-inbox__info">\n' +
                                '                    <div class="kt-inbox__actions">\n' +
                                '                        <label class="kt-checkbox kt-checkbox--single kt-checkbox--tick kt-checkbox--brand">\n' +
                                '                            <input type="checkbox">\n' +
                                '                            <span></span>\n' +
                                '                        </label>\n' +
                                '                    </div>\n' +
                                '\n' +
                                '                </div>\n' +
                                '                <div class="kt-inbox__details" data-toggle="view" style="margin-top: 0px;">\n' +
                                '                    <div class="kt-inbox__message">\n' +
                                '                        <span class="kt-inbox__subject">\n' + ticket.subject + '</span>\n' +
                                '\n' +
                                '                    </div>\n' +
                                '                </div>\n' +
                                '                <div class="kt-inbox__datetime" data-toggle="view">\n' +
                                '                    \n' +getType(ticket.type_id)+
                                '                </div>\n' +
                                '                <div class="kt-inbox__datetime" data-toggle="view">\n' +
                                '                    \n' +getPriority(ticket.priority)+
                                '                </div>\n' +
                                '            </div>\n' +
                                '\n' +
                                '\n' +
                                '        </div>')
                        });
                    }
                }
            });
        }

        function getPriority(type) {
            if (type == 0) {
                return "Low";
            }
            if (type == 1) {
                return "Normal";
            }
            if (type == 2) {
                return "High";
            }
            if (type == 3) {
                return "Urgent";
            }
        }
        function getType(priority) {
            if (priority == 0) {
                return "Question";
            }
            if (priority == 1) {
                return "Incident";
            }
            if (priority == 2) {
                return "Problem";
            }
            if (priority == 3) {
                return "Task";
            }
        }
        $(document).ready(function() {
            $(".kt-nav__item").click(function () {
                $(".kt-nav__item").removeClass("kt-nav__item--active");
                // $(".tab").addClass("active"); // instead of this do the below
                $(this).addClass("kt-nav__item--active");
            });
        });

        $(document).ready(function () {
            $("#kt_form_ticket").validate({});
        });

        $("#goToReply").click(function () {
            $('html,body').animate({
                    scrollTop: $("#replyDiv").offset().top
                },
                'slow');
        });
    </script>



@endsection
