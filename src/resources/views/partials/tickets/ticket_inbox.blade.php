<div class="kt-grid__item kt-grid__item--fluid  kt-inbox__view kt-inbox__view--shown-" id="kt_inbox_view">
    <div class="kt-portlet">


        <div class="kt-portlet__head">
            <div class="kt-inbox__toolbar">
                <div class="kt-inbox__actions">
                    <a href="#" class="kt-inbox__icon kt-inbox__icon--back">
                        <i class="flaticon2-left-arrow-1"></i>
                    </a>

                    <div class="input-group">
                        <h4 class="kt-inbox__text">
                            Digital PPV Customer confirmationconfirmationconfirmationconfirmation
                        </h4>

                        <span class="kt-inbox__label kt-badge kt-badge--unified-danger kt-badge--bold kt-badge--inline ml-2">
                            Urgent
                        </span>
                    </div>
                </div>

                <div class="kt-inbox__controls">
                    <button type="button" class="btn btn-success" id="goToReply"><i class="fa fa-reply"></i> Reply</button>
                </div>
            </div>
        </div>

        <!-- All Replies -->

        <div class="kt-portlet__body">

            <div class="kt-inbox__messages">
                <div class="kt-inbox__message kt-inbox__message--expanded">
                    <div class="kt-inbox__head">

                        <div class="kt-inbox__info">
                            <div class="kt-inbox__author" data-toggle="expand">
                                <a href="#" class="kt-inbox__name">Chris Muller</a>
                                <div class="kt-inbox__status">
                                    <span class="kt-badge kt-badge--success kt-badge--dot"></span> 1 Day ago
                                </div>
                            </div>

                        </div>
                        <div class="kt-inbox__actions">
                            <div class="kt-inbox__datetime" data-toggle="expand">
                                Jul 15, 2019, 11:19AM
                            </div>
                        </div>
                    </div>
                    <div class="kt-inbox__body">
                        <div class="kt-inbox__text">
                            <p>Hi Bob,</p>
                            <p class="kt-margin-t-25">
                                With resrpect, i must disagree with Mr.Zinsser. We all know the most part of important part of any article is the title.
                            </p>

                        </div>
                    </div>
                </div>

            </div>


        </div>


        <!-- Text Editor -->

        <div class="kt-portlet__body" id="replyDiv">
            <div class="kt-inbox__messages">
                <form class="kt-form kt-form--label-right" action="" method="post">
                    @csrf
                    <div class="kt-inbox__message kt-inbox__message--expanded">
                        <div class="kt-inbox__head">

                            <div class="kt-inbox__info">
                                <div class="kt-inbox__author" data-toggle="expand">
                                    <span class="kt-inbox__name">Reply</span>

                                </div>

                            </div>

                        </div>
                        <div class="kt-inbox__body">

                            <textarea id="kt-tinymce-2" name="kt-tinymce-2" class="tox-target"> </textarea>

                        </div>

                        <div class="kt-inbox__foot">
                            <div class="kt-inbox__primary">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-brand btn-bold">
                                        Send
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
</div>