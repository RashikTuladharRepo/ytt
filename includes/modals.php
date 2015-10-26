/**
 * Created by PhpStorm.
 * User: Rashik
 * Date: 10/26/2015
 * Time: 7:18 PM
 */


<!-- Modal -->
<div class="modal fade" id="have-project" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4><span class="glyphicon glyphicon-bell"></span> Have A Project?</h4>
                <p class="font16">
Please fill the form below to tell us what you want us to carry out for you. We will reply you very soon :)
                </p>
            </div>
            <div class="modal-body">
                <form role="form" class="project-form">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="work">What Is The Project About?</label>
                                <select name="work" id="work" class="form-control">
                                    <option value="web">Web Development</option>
                                    <option value="web">Mobile Application Development</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="time">Time You Want We To Complete In:</label>
                                <input type="text" class="form-control" id="time">
                            </div>
                            <div class="form-group">
                                <label for="budget">Your Financial Budget For The Project:</label>
                                <input type="text" class="form-control" id="budget">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="full-name">Full Name:</label>
                                <input type="text" class="form-control" id="full-name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email address:</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="contact-no">Contact Number:</label>
                                <input type="text" class="form-control" id="contact-no">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <textarea name="project-description"></textarea>
                            <button type="submit" class="btn btn-success send-quote" name="send-quote">
                                <i class="fa fa-send">&nbsp;</i> Proceed With Your Request
    </button>
                            <!--<button type="submit" class="btn btn-danger" data-dismiss="modal">-->
                                <!--<span class="glyphicon glyphicon-remove"></span> Cancel-->
                            <!--</button>-->
                        </div>
                    </div>
                </form>
                <div class="clearfix"></div>
            </div>
            <div class="modal-footer">
                <p class="text-center font16 ytt-blue">We will be offering you a very nice surprise after we receive your quote :)</p>
            </div>
        </div>

    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="imagemodal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="portfolioLabel"></h4>
            </div>
            <div class="modal-body" style="background-color: #FFF;">
                <div class="col-md-12">
                    <div class="col-md-6"><img src="" id="imagepreview" class="img-responsive"></div>
                    <div class="col-md-6">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
