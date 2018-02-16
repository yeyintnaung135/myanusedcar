@if(Session::has('subed'))<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog" style="border-radius:0px;">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" style="border-radius:0px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><strong>Successfully sent</strong></h4>
            </div>
            <div class="modal-body">
                <p>Thank! Your email address was successfully sent to us.</p>
                <button type="button" class="btn btn-small btn-default" data-dismiss="modal"
                        style="background:#F72615;color:white">Close
                </button>
            </div>

        </div>

    </div>
</div>
@endif
@if(Session::has('delete_msg'))
    <div class="modal fade" id="myModal" role="dialog" style="border-radius:0px;">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content" style="border-radius:0px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><strong>Successfully delete</strong></h4>
                </div>
                <div class="modal-body">
                    <p><strong>
                            <i class="ace-icon fa fa-check"></i>
                            သင့္ကားေၾကာ္ၿငာတစ္ခုကိုဖ်က္ၿပီးပါၿပီ
                        </strong>
                    </p>

                    <button type="button" class="btn btn-small btn-default" data-dismiss="modal"
                            style="background:#F72615;color:white">Close
                    </button>
                </div>

            </div>

        </div>
    </div>

@endif
@if(Session::has('editid'))
    <div class="modal fade" id="myModal" role="dialog" style="border-radius:0px;">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content" style="border-radius:0px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><strong>Successfully edited</strong></h4>
                </div>
                <div class="modal-body">
                    <p><strong>
                            <i class="ace-icon fa fa-check"></i>
                            သင့္ကားေၾကာ္ၿငာတစ္ခုကို ၿပင္ၿပီးပါၿပီ။
                            <a href="{{url('mm/detail/'.Session::get('editid'))}}" class="btn btn-small btn-default"
                                    style="background:#F72615;color:white">See that car
                            </a>
                        </strong>
                    </p>

                    <button type="button" class="btn btn-small btn-default" data-dismiss="modal"
                            style="background:#F72615;color:white">Close
                    </button>
                </div>

            </div>

        </div>
    </div>

@endif
@if(Session::has('add_msg'))
    <div class="modal fade" id="myModal" role="dialog" style="border-radius:0px;">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content" style="border-radius:0px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><strong>Successfully added</strong></h4>
                </div>
                <div class="modal-body">
                    <p><strong>
                            <i class="ace-icon fa fa-check"></i>
                            သင့္ကားေၾကာ္ၿငာတစ္ခုကို add ၿပီးပါၿပီ။
                        </strong>
                    </p>

                    <button type="button" class="btn btn-small btn-default" data-dismiss="modal"
                            style="background:#F72615;color:white">Close
                    </button>
                </div>

            </div>

        </div>
    </div>
@endif