<div class="kt-grid__item   kt-portlet  kt-inbox__aside" id="kt_inbox_aside" style="height: 100%;">
    <button type="button" class="btn btn-brand  btn-upper btn-bold  kt-inbox__compose" data-toggle="modal" data-target="#kt_create_ticket">Add New Ticket</button>
    <div class="kt-inbox__nav">
        <ul class="kt-nav">
            <li class="kt-nav__item kt-nav__item--active" onclick="filteredTickets('unsolved')" >
                <a href="#" class="kt-nav__link" ata-action="list" data-type="your_unsolved_tickets"> <span class="kt-nav__link-text">Unsolved Tickets</span>
                    <span class="kt-nav__link-badge">
                        <span class="kt-badge kt-badge--unified-success kt-badge--md kt-badge--rounded kt-badge--boldest">{{\Coldxpress\Ticket\Models\Ticket::where('status', 0)->count()}}</span>
                    </span>
                </a>
            </li>

            <li class="kt-nav__item" onclick="filteredTickets('solved')">
                <a href="#"  class="kt-nav__link" ata-action="list" data-type="marked"> <span class="kt-nav__link-text">Solved Tickets</span>
                    <span class="kt-nav__link-badge">
                        <span class="kt-badge kt-badge--unified-success kt-badge--md kt-badge--rounded kt-badge--boldest">{{\Coldxpress\Ticket\Models\Ticket::where('status', 1)->count()}}</span>
                    </span>
                </a>
            </li>


            <li class="kt-nav__item" onclick="filteredTickets('unassigned')">
                <a href="#"  class="kt-nav__link" ata-action="list" data-type="marked"> <span class="kt-nav__link-text">Unassigned Tickets</span>
                    <span class="kt-nav__link-badge">
                        <span class="kt-badge kt-badge--unified-success kt-badge--md kt-badge--rounded kt-badge--boldest">{{\Coldxpress\Ticket\Models\Ticket::whereDoesntHave('ticket_assigned_agents')->count()}}</span>
                    </span>
                </a>
            </li>


            <li class="kt-nav__item" onclick="filteredTickets('assigned')">
                <a href="#"  class="kt-nav__link" ata-action="list" data-type="marked"> <span class="kt-nav__link-text">Assigned Tickets</span>
                    <span class="kt-nav__link-badge">
                        <span class="kt-badge kt-badge--unified-success kt-badge--md kt-badge--rounded kt-badge--boldest">{{\Coldxpress\Ticket\Models\Ticket::has('ticket_assigned_agents')->count()}}</span>
                    </span>
                </a>
            </li>


        </ul>
    </div>
</div>
